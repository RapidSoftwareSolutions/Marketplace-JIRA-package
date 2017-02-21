<?php
require dirname(__DIR__) . '/vendor/autoload.php';

use Core\Router;

//header('Content-type: application/json');
http_response_code (200);
define('RAPID_IN', TRUE);

$inPath = trim(str_replace('index.php', '', trim($_SERVER['SCRIPT_NAME'], '\/\\' )), '\/\\');
if( strlen(trim($inPath)) > 0){
    define('INDEX_PATH', '/' . $inPath . '/');
}else{
    define('INDEX_PATH', '/');
}
define('APP_PATH', __DIR__);
define('HTTP_HOST', $_SERVER['HTTP_HOST']);

$parse = include('../test/parse.php');
$blocksData = include('../test/blocks.php');

$blocks = [];

$choosenBlocks = [];

foreach($blocksData as $oneBlock){
    $currParse = false;
    foreach($parse as $oneData){
        if($oneData['method']==$oneBlock[1]&&$oneData['url']==$oneBlock[2]){
            $currParse = $oneData;
        }
    }
    if(!$currParse){
        $missBlocks[] = $newBlock['name'];
        continue;
    }

    //blockName
    $newBlock['name'] = $oneBlock[0];
    //blockVendorUrl
    $newBlock['vendorUrl'] = $oneBlock[2];
    //blockMethod
    $newBlock['method'] = $oneBlock[1];
    //blockDescription
    if(isset($currParse['descr'])&&is_array($currParse['descr'])&&count($currParse['descr'])>0){
        foreach($currParse['descr'] as &$descrLine){
            $descrLine = trim(trim($descrLine), '.');
        }
        $newBlock['description'] = trim(implode('. ', $currParse['descr']), '.').'.';
    }else{
        $newBlock['description'] = $currParse['title'];
    }
    $newBlock['method'] = $oneBlock[1];

    // ARGS
    $args = [];
    // 1. ARGS from url
    $urlPart = [];
    preg_match_all('/\{[0-9a-z]+\}/ui', $newBlock['vendorUrl'], $urlPart);
    $urlPart = $urlPart[0];
    foreach($urlPart as $part) {
        $args[trim($part, '}{')] = [
            'required' => true
        ];
    }
    // ARGS from param
    foreach($currParse['param'] as $oneParam){
        if(isset($args[$oneParam[0]])){
            $args[$oneParam[0]]['type'] = $oneParam[1];
            $args[$oneParam[0]]['info'] = $oneParam[2];
        }
    }
    //var_dump($currParse['']);

    $newBlock['args'] = $args;

    $blocks[] = $newBlock;
}

echo '<pre>';
echo    var_export($blocks, true);
//echo    var_export($parse, true);
//echo preg_replace('/=>\s*\n\s+array \(/', '=> array (', preg_replace('/\n\s*[0-9]+\s=>.*\n/', "\n", var_export($parse, true)));
echo '</pre>';
exit();

// Include metadata array
$settings = include dirname(APP_PATH) . '/src/metadata/vendor.php';

if(
    !isset($settings['package']) ||
    !isset($settings['blocks']) ||
    !is_array($settings['blocks']) ||
    !isset($settings['custom'])
){
    throw new Exception('Wrong vendor.php format \'package\', \'blocks\' or \'customBlocksHandlers\' in root is miss');
}
$router = new Router($settings['package'], $settings['blocks'], $settings['custom']);
$router->setup();
$router->run();
http_response_code(200);
exit(200);

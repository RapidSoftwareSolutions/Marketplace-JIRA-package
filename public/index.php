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

$preReady = include('../test/preReady_p3.php');
$queryArgs = include('../test/query_args_p3.php');

$typeDict = [
    'string' => 'String',
    'String' => 'String',
    'int' => 'Number',
    'Array' => 'Array',
    'boolean' => 'Boolean',
    'integer' => 'Number',
    'number' => 'Number',
    'long' => 'Number',
    'JSON' => 'JSON',
    'File' => 'File',
];

$blocks = [];
$custom = [];

$choosenFields = [];

foreach($preReady as $block){
    $newBlock = [];
    $newCustom = [];

    // 'name'
    $newBlock['name'] = $block['name'];
    // 'description'
    $newBlock['description'] = $block['description'];

    $newArgs = [
        [
            'name' => 'jiraUsername',
            'type' => 'credentials',
            'info' => 'Username in JIRA.',
            'required' => true,
        ],
        [
            'name' => 'jiraPassword',
            'type' => 'credentials',
            'info' => 'Password in JIRA.',
            'required' => true,
        ],
        [
            'name' => 'jiraName',
            'type' => 'String',
            'info' => 'Name of JIRA.',
            'required' => true,
        ],
    ];
    $newDict = [
        'jiraUsername' => 'jiraUsername',
        'jiraPassword' => 'jiraPassword',
        'jiraName' => 'jiraName',
    ];
    foreach($block['args'] as $argName => $argVal){
        $oneArg = [];
        // 'name'
        $oneArg['name'] = $argName;
        // 'type'
        $oneArg['type'] = $typeDict[$argVal['type']];
        // 'info'
        $oneArg['info'] = $argVal['info'];
        // 'required'
        $oneArg['required'] = $argVal['required'];

        //'expression' => 'expression'
        $newDict[$argName] = $argName;

        $newArgs[] = $oneArg;
    }
    // 'args'
    $newBlock['args'] = $newArgs;
    //'dictionary'
    $newCustom['dictionary'] = $newDict;
    //'query'
    if(isset($queryArgs[$newBlock['name']])){
        $newCustom['query'] = $queryArgs[$newBlock['name']];
        //echo $newBlock['name'] . '<br>';
        //var_dump($newCustom['query']);
    }
    //'vendorUrl'
    $newCustom['vendorUrl'] = 'https://{{jiraName}}.atlassian.net' . str_replace('}', '}}', str_replace('{', '{{', $block['vendorUrl']));
    //'method'
    $newCustom['method'] = $block['method'];
    //'custom'
    if(isset($block['custom'])&&$block['custom']==true){
        $newCustom['custom'] = true;
    }

    $blocks[] = $newBlock;
    $custom[$newBlock['name']] = $newCustom;
}

//foreach($custom as $cName => $cVal){
//    if(isset($queryArgs[$cName])){
//    if(count($cVal['dictionary']) != count($cVal['query'])){
//        echo $cName . '<br>';
//
//        var_dump('dictionary', $cVal['dictionary'], 'query', $cVal['query'], 'queryArgs', $queryArgs[$cName]);
//        echo '<hr>';
//    }}
//}

echo '<pre>';
//echo    var_export($blocks, true);

echo preg_replace('/=>\s*\n\s+array \(/', '=> array (', preg_replace('/\n\s*[0-9]+\s=>.*\n/', "\n", var_export($blocks, true)));
echo '<hr>';
echo 'div123<br>';
echo '<hr>';
echo var_export($custom, true);
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

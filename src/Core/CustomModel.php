<?php

namespace Core;

if ( ! defined( 'RAPID_IN' ) ) exit( 'No direct script access allowed' );

/**
 * Custom Model
 */
class CustomModel
{
    public static function addAuditingRecord($param, &$blockCustom, $vendorUrl){
        $result = [];

        $paramList = ['remoteAddress', 'authorKey', 'eventSource', 'description', 'summary', 'created', 'category'];
        foreach($paramList as $oneParam){
            if(isset($param[$oneParam])&&strlen($param[$oneParam])>0) {
                $result[$oneParam] = $param[$oneParam];
                if(is_numeric($result[$oneParam])){
                    $result[$oneParam] = intval($result[$oneParam]);
                }
            } }

        $paramList = ['id', 'name', 'typeName', 'parentId', 'parentName'];
        foreach($paramList as $oneParam){
            if(isset($param[$oneParam])&&strlen($param[$oneParam])>0) {
                $result['object'][$oneParam] = $param[$oneParam];
                if(is_numeric($result['object'][$oneParam])){
                    $result['object'][$oneParam] = intval($result['object'][$oneParam]);
                }
            } }

        if(isset($param['changedValues'])&&is_array($param['changedValues'])&&count($param['changedValues'])>0) {
            $result['changedValues'] = $param['changedValues'];
        }
        if(isset($param['associatedItems'])&&is_array($param['associatedItems'])&&count($param['associatedItems'])>0) {
            $result['associatedItems'] = $param['associatedItems'];
        }

        return json_encode($result);
    }
    public static function setCommentProperty($param, &$blockCustom, $vendorUrl){
        return json_encode($param['value']);
    }
    public static function updateSelectFieldOptions($param, &$blockCustom, $vendorUrl){
        $result = [];

        $paramName = 'id';
        if(isset($param[$paramName])&&strlen($param[$paramName])>0)
            $result[$paramName] = (is_numeric($param[$paramName]))?intval($param[$paramName]):$param[$paramName];
        $paramName = 'value';
        if(isset($param[$paramName])&&strlen($param[$paramName])>0)
            $result[$paramName] = (is_numeric($param[$paramName]))?intval($param[$paramName]):$param[$paramName];
        // properties
        $paramName = 'members';
        if(isset($param[$paramName])&&strlen($param[$paramName])>0)
            $result['properties'][$paramName] = (is_numeric($param[$paramName]))?intval($param[$paramName]):$param[$paramName];
        $paramName = 'description';
        if(isset($param[$paramName])&&strlen($param[$paramName])>0)
            $result['properties'][$paramName] = (is_numeric($param[$paramName]))?intval($param[$paramName]):$param[$paramName];
        $paramName = 'founded';
        if(isset($param[$paramName])&&strlen($param[$paramName])>0)
            $result['properties'][$paramName] = (is_numeric($param[$paramName]))?intval($param[$paramName]):$param[$paramName];
        //- Leader
        $paramName = 'name';
        if(isset($param[$paramName])&&strlen($param[$paramName])>0)
            $result['properties']['leader'][$paramName] = (is_numeric($param[$paramName]))?intval($param[$paramName]):$param[$paramName];
        $paramName = 'email';
        if(isset($param[$paramName])&&strlen($param[$paramName])>0)
            $result['properties']['leader'][$paramName] = (is_numeric($param[$paramName]))?intval($param[$paramName]):$param[$paramName];

        // config
        $paramName = 'attributes';
        if(isset($param[$paramName])&&is_array($param[$paramName])&&count($param[$paramName])>0)
            $result['config'][$paramName] = (is_numeric($param[$paramName]))?intval($param[$paramName]):$param[$paramName];
        //- projects
        $paramName = 'projects';
        if(isset($param[$paramName])&&strlen($param[$paramName])>0)
            $result['config']['scope'][$paramName] = (is_numeric($param[$paramName]))?intval($param[$paramName]):$param[$paramName];

        return json_encode($result);
    }
    public static function createSingleIssue($param, &$blockCustom, $vendorUrl){
        $result = $param;

        return json_encode($result);
    }
    public static function updateSingleIssue($param, &$blockCustom, $vendorUrl){
        $result = $param;

        return json_encode($result);
    }
    public static function getIssueComments($param, &$blockCustom, $vendorUrl){
        $result = $param;
        $result['orderBy'] = 'created';

        return json_encode($result);
    }
    public static function addCommentToIssue($param, &$blockCustom, $vendorUrl){
        $result = [];

        $paramName = 'expand';
        if(isset($param[$paramName])&&strlen($param[$paramName])>0)
            $result[$paramName] = (is_numeric($param[$paramName]))?intval($param[$paramName]):$param[$paramName];
        $paramName = 'body';
        if(isset($param[$paramName])&&strlen($param[$paramName])>0)
            $result[$paramName] = (is_numeric($param[$paramName]))?intval($param[$paramName]):$param[$paramName];
        $paramName = 'type';
        if(isset($param[$paramName])&&strlen($param[$paramName])>0)
            $result['visibility'][$paramName] = (is_numeric($param[$paramName]))?intval($param[$paramName]):$param[$paramName];
        $paramName = 'value';
        if(isset($param[$paramName])&&strlen($param[$paramName])>0)
            $result['visibility'][$paramName] = (is_numeric($param[$paramName]))?intval($param[$paramName]):$param[$paramName];

        return json_encode($result);
    }
    public static function sendIssueNotify($param, &$blockCustom, $vendorUrl){
        $result = [];

        $paramNames = ['subject', 'textBody', 'htmlBody'];
        foreach($paramNames as $paramName){
            if(isset($param[$paramName])&&strlen($param[$paramName])>0)
                $result[$paramName] = (is_numeric($param[$paramName]))?intval($param[$paramName]):$param[$paramName];
        }

        // to
        $paramNames = [
            ['showToReporter', 'reporter'],
            ['showToAssignee', 'assignee'],
            ['showToWatchers', 'watchers'],
            ['showToVoters', 'voters'],
        ];
        foreach($paramNames as $paramName){
            if(isset($param[$paramName[0]])&&strlen($param[$paramName[0]])>0)
                $result['to'][$paramName[1]] = (is_numeric($param[$paramName[0]]))?intval($param[$paramName[0]]):$param[$paramName[0]];
        }
        $paramNames = [
            ['showToUsers', 'users'],
            ['showToGroups', 'groups']
        ];
        foreach($paramNames as $paramName){
            if(isset($param[$paramName[0]])&&is_array($param[$paramName[0]])&&count($param[$paramName[0]])>0)
                $result['to'][$paramName[1]] = (is_numeric($param[$paramName[0]]))?intval($param[$paramName[0]]):$param[$paramName[0]];
        }

        $paramName = ['restrictGroups', 'groups'];
        if(isset($param[$paramName[0]])&&is_array($param[$paramName[0]])&&count($param[$paramName[0]])>0)
            $result['restrict'][$paramName[1]] = (is_numeric($param[$paramName[0]]))?intval($param[$paramName[0]]):$param[$paramName[0]];
        $paramName = ['restrictPermissions', 'permissions'];
        if(isset($param[$paramName[0]])&&is_array($param[$paramName[0]])&&count($param[$paramName[0]])>0)
            $result['restrict'][$paramName[1]] = (is_numeric($param[$paramName[0]]))?intval($param[$paramName[0]]):$param[$paramName[0]];

        return json_encode($result);
    }
    public static function createRemoteIssueLink($param, &$blockCustom, $vendorUrl){
        $result = [];

        // application
        $paramNames = [
            ['applicationType', 'type'],
            ['applicationName', 'name'],
        ];
        foreach($paramNames as $paramName){
            if(isset($param[$paramName[0]])&&strlen($param[$paramName[0]])>0)
                $result['application'][$paramName[1]] = (is_numeric($param[$paramName[0]]))?intval($param[$paramName[0]]):$param[$paramName[0]];
        }
        // 'relationship'
        $paramName = 'relationship';
        if(isset($param[$paramName])&&strlen($param[$paramName])>0)
            $result[$paramName] = (is_numeric($param[$paramName]))?intval($param[$paramName]):$param[$paramName];

        // 'object' -> 'issueLinkUrl', 'issueLinkTitle', 'issueLinkSummary'
        $paramNames = [
            ['issueLinkUrl', 'url'],
            ['issueLinkTitle', 'title'],
            ['issueLinkSummary', 'summary'],
        ];
        foreach($paramNames as $paramName){
            if(isset($param[$paramName[0]])&&strlen($param[$paramName[0]])>0)
                $result['object'][$paramName[1]] = (is_numeric($param[$paramName[0]]))?intval($param[$paramName[0]]):$param[$paramName[0]];
        }
        // 'object' -> 'icon' -> 'issueLinkIconUrl', 'issueLinkIconTitle'
        $paramNames = [
            ['issueLinkIconUrl', 'url16x16'],
            ['issueLinkIconTitle', 'title'],
        ];
        foreach($paramNames as $paramName){
            if(isset($param[$paramName[0]])&&strlen($param[$paramName[0]])>0)
                $result['object']['icon'][$paramName[1]] = (is_numeric($param[$paramName[0]]))?intval($param[$paramName[0]]):$param[$paramName[0]];
        }
        // 'object' -> 'status' -> 'resolved'
        $paramName = ['issueLinkStatusResolved', 'resolved'];
        if(isset($param[$paramName[0]])&&strlen($param[$paramName[0]])>0)
            $result['object']['status'][$paramName[1]] = (is_numeric($param[$paramName[0]]))?intval($param[$paramName[0]]):$param[$paramName[0]];
        // 'object' -> 'status' -> 'icon' -> 'issueLinkStatusIconUrl', 'issueLinkStatusIconTitle', 'issueLinkStatusIconLink'
        $paramNames = [
            ['issueLinkStatusIconUrl', 'url'],
            ['issueLinkStatusIconTitle', 'title'],
            ['issueLinkStatusIconLink', 'link']
        ];
        foreach($paramNames as $paramName){
            if(isset($param[$paramName[0]])&&strlen($param[$paramName[0]])>0)
                $result['object']['status']['icon'][$paramName[1]] = (is_numeric($param[$paramName[0]]))?intval($param[$paramName[0]]):$param[$paramName[0]];
        }

        return json_encode($result);
    }
    public static function updateRemoteIssueLink($param, &$blockCustom, $vendorUrl){
        $result = [];

        // \
        $paramNames = ['linkId', 'globalId'];
        foreach($paramNames as $paramName){
            if(isset($param[$paramName])&&strlen($param[$paramName])>0)
                $result[$paramName] = (is_numeric($param[$paramName]))?intval($param[$paramName]):$param[$paramName];
        }
        // application
        $paramNames = [
            ['applicationType', 'type'],
            ['applicationName', 'name'],
        ];
        foreach($paramNames as $paramName){
            if(isset($param[$paramName[0]])&&strlen($param[$paramName[0]])>0)
                $result['application'][$paramName[1]] = (is_numeric($param[$paramName[0]]))?intval($param[$paramName[0]]):$param[$paramName[0]];
        }
        // 'relationship'
        $paramName = 'relationship';
        if(isset($param[$paramName])&&strlen($param[$paramName])>0)
            $result[$paramName] = (is_numeric($param[$paramName]))?intval($param[$paramName]):$param[$paramName];

        // 'object' -> 'issueLinkUrl', 'issueLinkTitle', 'issueLinkSummary'
        $paramNames = [
            ['issueLinkUrl', 'url'],
            ['issueLinkTitle', 'title'],
            ['issueLinkSummary', 'summary'],
        ];
        foreach($paramNames as $paramName){
            if(isset($param[$paramName[0]])&&strlen($param[$paramName[0]])>0)
                $result['object'][$paramName[1]] = (is_numeric($param[$paramName[0]]))?intval($param[$paramName[0]]):$param[$paramName[0]];
        }
        // 'object' -> 'icon' -> 'issueLinkIconUrl', 'issueLinkIconTitle'
        $paramNames = [
            ['issueLinkIconUrl', 'url16x16'],
            ['issueLinkIconTitle', 'title'],
        ];
        foreach($paramNames as $paramName){
            if(isset($param[$paramName[0]])&&strlen($param[$paramName[0]])>0)
                $result['object']['icon'][$paramName[1]] = (is_numeric($param[$paramName[0]]))?intval($param[$paramName[0]]):$param[$paramName[0]];
        }
        // 'object' -> 'status' -> 'resolved'
        $paramName = ['issueLinkStatusResolved', 'resolved'];
        if(isset($param[$paramName[0]])&&strlen($param[$paramName[0]])>0)
            $result['object']['status'][$paramName[1]] = (is_numeric($param[$paramName[0]]))?intval($param[$paramName[0]]):$param[$paramName[0]];
        // 'object' -> 'status' -> 'icon' -> 'issueLinkStatusIconUrl', 'issueLinkStatusIconTitle', 'issueLinkStatusIconLink'
        $paramNames = [
            ['issueLinkStatusIconUrl', 'url'],
            ['issueLinkStatusIconTitle', 'title'],
            ['issueLinkStatusIconLink', 'link']
        ];
        foreach($paramNames as $paramName){
            if(isset($param[$paramName[0]])&&strlen($param[$paramName[0]])>0)
                $result['object']['status']['icon'][$paramName[1]] = (is_numeric($param[$paramName[0]]))?intval($param[$paramName[0]]):$param[$paramName[0]];
        }

        return json_encode($result);
    }
    public static function addIssueWatcher($param, &$blockCustom, $vendorUrl){
        $result = $param['userName'];

        return json_encode($result);
    }
    public static function addIssueWorklog($param, &$blockCustom, $vendorUrl){
        $result = [];
        //
        $paramNames = ['comment', 'started', 'timeSpentSeconds', 'adjustEstimate', 'newEstimate', 'expand'];
        foreach($paramNames as $paramName){
            if(isset($param[$paramName])&&strlen($param[$paramName])>0)
                $result[$paramName] = (is_numeric($param[$paramName]))?intval($param[$paramName]):$param[$paramName];
        }
        $paramNames = [
            ['visibilityType', 'type'],
            ['visibilityValue', 'value']
        ];
        foreach($paramNames as $paramName){
            if(isset($param[$paramName[0]])&&strlen($param[$paramName[0]])>0)
                $result['visibility'][$paramName[1]] = (is_numeric($param[$paramName[0]]))?intval($param[$paramName[0]]):$param[$paramName[0]];
        }

        return json_encode($result);
    }
    public static function updateIssueWorklog($param, &$blockCustom, $vendorUrl){
        return self::addIssueWorklog($param, $blockCustom, $vendorUrl);
    }
}
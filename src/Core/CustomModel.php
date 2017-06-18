<?php

namespace Core;

use phpDocumentor\Reflection\Types\Boolean;

if (!defined('RAPID_IN')) exit('No direct script access allowed');

/**
 * Custom Model
 */
class CustomModel
{
    public static function addAuditingRecord($param, &$blockCustom, $vendorUrl)
    {
        $result = [];

        $paramList = ['remoteAddress', 'authorKey', 'eventSource', 'description', 'summary', 'created', 'category'];
        foreach ($paramList as $oneParam) {
            if (isset($param[$oneParam]) && strlen($param[$oneParam]) > 0) {
                $result[$oneParam] = $param[$oneParam];
                if (is_numeric($result[$oneParam])) {
                    $result[$oneParam] = intval($result[$oneParam]);
                }
            }
        }

        $paramList = ['id', 'name', 'typeName', 'parentId', 'parentName'];
        foreach ($paramList as $oneParam) {
            if (isset($param[$oneParam]) && strlen($param[$oneParam]) > 0) {
                $result['object'][$oneParam] = $param[$oneParam];
                if (is_numeric($result['object'][$oneParam])) {
                    $result['object'][$oneParam] = intval($result['object'][$oneParam]);
                }
            }
        }

        if (isset($param['changedValues']) && is_array($param['changedValues']) && count($param['changedValues']) > 0) {
            $result['changedValues'] = $param['changedValues'];
        }
        if (isset($param['associatedItems']) && is_array($param['associatedItems']) && count($param['associatedItems']) > 0) {
            $result['associatedItems'] = $param['associatedItems'];
        }

        return json_encode($result);
    }

    public static function setCommentProperty($param, &$blockCustom, $vendorUrl)
    {
        return json_encode($param['value']);
    }

    public static function updateSelectFieldOptions($param, &$blockCustom, $vendorUrl)
    {
        $result = [];

        $paramName = 'id';
        if (isset($param[$paramName]) && strlen($param[$paramName]) > 0)
            $result[$paramName] = (is_numeric($param[$paramName])) ? intval($param[$paramName]) : $param[$paramName];
        $paramName = 'value';
        if (isset($param[$paramName]) && strlen($param[$paramName]) > 0)
            $result[$paramName] = (is_numeric($param[$paramName])) ? intval($param[$paramName]) : $param[$paramName];
        // properties
        $paramName = 'members';
        if (isset($param[$paramName]) && strlen($param[$paramName]) > 0)
            $result['properties'][$paramName] = (is_numeric($param[$paramName])) ? intval($param[$paramName]) : $param[$paramName];
        $paramName = 'description';
        if (isset($param[$paramName]) && strlen($param[$paramName]) > 0)
            $result['properties'][$paramName] = (is_numeric($param[$paramName])) ? intval($param[$paramName]) : $param[$paramName];
        $paramName = 'founded';
        if (isset($param[$paramName]) && strlen($param[$paramName]) > 0)
            $result['properties'][$paramName] = (is_numeric($param[$paramName])) ? intval($param[$paramName]) : $param[$paramName];
        //- Leader
        $paramName = 'name';
        if (isset($param[$paramName]) && strlen($param[$paramName]) > 0)
            $result['properties']['leader'][$paramName] = (is_numeric($param[$paramName])) ? intval($param[$paramName]) : $param[$paramName];
        $paramName = 'email';
        if (isset($param[$paramName]) && strlen($param[$paramName]) > 0)
            $result['properties']['leader'][$paramName] = (is_numeric($param[$paramName])) ? intval($param[$paramName]) : $param[$paramName];

        // config
        $paramName = 'attributes';
        if (isset($param[$paramName]) && is_array($param[$paramName]) && count($param[$paramName]) > 0)
            $result['config'][$paramName] = (is_numeric($param[$paramName])) ? intval($param[$paramName]) : $param[$paramName];
        //- projects
        $paramName = 'projects';
        if (isset($param[$paramName]) && strlen($param[$paramName]) > 0)
            $result['config']['scope'][$paramName] = (is_numeric($param[$paramName])) ? intval($param[$paramName]) : $param[$paramName];

        return json_encode($result);
    }

    public static function setFilterDefaultColumns($param, &$blockCustom, $vendorUrl)
    {
        $result = [];
        $columns = explode(',', trim($param['columns']));
        if (count($columns) > 0) {
            $result['columns'] = [];
            foreach ($columns as $oneColumn) $result['columns'][] = trim($oneColumn);
        }

        return json_encode($result);
    }

    public static function getIssueComments($param, &$blockCustom, $vendorUrl)
    {
        $result = $param;
        $result['orderBy'] = 'created';

        return json_encode($result);
    }

    public static function addCommentToIssue($param, &$blockCustom, $vendorUrl)
    {
        $result = [];

        $paramName = 'expand';
        if (isset($param[$paramName]) && strlen($param[$paramName]) > 0)
            $result[$paramName] = (is_numeric($param[$paramName])) ? intval($param[$paramName]) : $param[$paramName];
        $paramName = 'body';
        if (isset($param[$paramName]) && strlen($param[$paramName]) > 0)
            $result[$paramName] = (is_numeric($param[$paramName])) ? intval($param[$paramName]) : $param[$paramName];
        $paramName = 'type';
        if (isset($param[$paramName]) && strlen($param[$paramName]) > 0)
            $result['visibility'][$paramName] = (is_numeric($param[$paramName])) ? intval($param[$paramName]) : $param[$paramName];
        $paramName = 'value';
        if (isset($param[$paramName]) && strlen($param[$paramName]) > 0)
            $result['visibility'][$paramName] = (is_numeric($param[$paramName])) ? intval($param[$paramName]) : $param[$paramName];

        return json_encode($result);
    }

    public static function sendIssueNotify($param, &$blockCustom, $vendorUrl)
    {
        $result = [];

        $paramNames = ['subject', 'textBody', 'htmlBody'];
        foreach ($paramNames as $paramName) {
            if (isset($param[$paramName]) && strlen($param[$paramName]) > 0)
                $result[$paramName] = (is_numeric($param[$paramName])) ? intval($param[$paramName]) : $param[$paramName];
        }

        // to
        $paramNames = [
            ['showToReporter', 'reporter'],
            ['showToAssignee', 'assignee'],
            ['showToWatchers', 'watchers'],
            ['showToVoters', 'voters'],
        ];
        foreach ($paramNames as $paramName) {
            if (isset($param[$paramName[0]]) && strlen($param[$paramName[0]]) > 0)
                $result['to'][$paramName[1]] = (is_numeric($param[$paramName[0]])) ? intval($param[$paramName[0]]) : $param[$paramName[0]];
        }
        $paramNames = [
            ['showToUsers', 'users'],
            ['showToGroups', 'groups']
        ];
        foreach ($paramNames as $paramName) {
            if (isset($param[$paramName[0]]) && is_array($param[$paramName[0]]) && count($param[$paramName[0]]) > 0)
                $result['to'][$paramName[1]] = (is_numeric($param[$paramName[0]])) ? intval($param[$paramName[0]]) : $param[$paramName[0]];
        }

        $paramName = ['restrictGroups', 'groups'];
        if (isset($param[$paramName[0]]) && is_array($param[$paramName[0]]) && count($param[$paramName[0]]) > 0)
            $result['restrict'][$paramName[1]] = (is_numeric($param[$paramName[0]])) ? intval($param[$paramName[0]]) : $param[$paramName[0]];
        $paramName = ['restrictPermissions', 'permissions'];
        if (isset($param[$paramName[0]]) && is_array($param[$paramName[0]]) && count($param[$paramName[0]]) > 0)
            $result['restrict'][$paramName[1]] = (is_numeric($param[$paramName[0]])) ? intval($param[$paramName[0]]) : $param[$paramName[0]];

        return json_encode($result);
    }

    public static function createRemoteIssueLink($param, &$blockCustom, $vendorUrl)
    {
        $result = [];

        // application
        $paramNames = [
            ['applicationType', 'type'],
            ['applicationName', 'name'],
        ];
        foreach ($paramNames as $paramName) {
            if (isset($param[$paramName[0]]) && strlen($param[$paramName[0]]) > 0)
                $result['application'][$paramName[1]] = (is_numeric($param[$paramName[0]])) ? intval($param[$paramName[0]]) : $param[$paramName[0]];
        }
        // 'relationship'
        $paramName = 'relationship';
        if (isset($param[$paramName]) && strlen($param[$paramName]) > 0)
            $result[$paramName] = (is_numeric($param[$paramName])) ? intval($param[$paramName]) : $param[$paramName];

        // 'object' -> 'issueLinkUrl', 'issueLinkTitle', 'issueLinkSummary'
        $paramNames = [
            ['issueLinkUrl', 'url'],
            ['issueLinkTitle', 'title'],
            ['issueLinkSummary', 'summary'],
        ];
        foreach ($paramNames as $paramName) {
            if (isset($param[$paramName[0]]) && strlen($param[$paramName[0]]) > 0)
                $result['object'][$paramName[1]] = (is_numeric($param[$paramName[0]])) ? intval($param[$paramName[0]]) : $param[$paramName[0]];
        }
        // 'object' -> 'icon' -> 'issueLinkIconUrl', 'issueLinkIconTitle'
        $paramNames = [
            ['issueLinkIconUrl', 'url16x16'],
            ['issueLinkIconTitle', 'title'],
        ];
        foreach ($paramNames as $paramName) {
            if (isset($param[$paramName[0]]) && strlen($param[$paramName[0]]) > 0)
                $result['object']['icon'][$paramName[1]] = (is_numeric($param[$paramName[0]])) ? intval($param[$paramName[0]]) : $param[$paramName[0]];
        }
        // 'object' -> 'status' -> 'resolved'
        $paramName = ['issueLinkStatusResolved', 'resolved'];
        if (isset($param[$paramName[0]]) && strlen($param[$paramName[0]]) > 0)
            $result['object']['status'][$paramName[1]] = (is_numeric($param[$paramName[0]])) ? intval($param[$paramName[0]]) : $param[$paramName[0]];
        // 'object' -> 'status' -> 'icon' -> 'issueLinkStatusIconUrl', 'issueLinkStatusIconTitle', 'issueLinkStatusIconLink'
        $paramNames = [
            ['issueLinkStatusIconUrl', 'url'],
            ['issueLinkStatusIconTitle', 'title'],
            ['issueLinkStatusIconLink', 'link']
        ];
        foreach ($paramNames as $paramName) {
            if (isset($param[$paramName[0]]) && strlen($param[$paramName[0]]) > 0)
                $result['object']['status']['icon'][$paramName[1]] = (is_numeric($param[$paramName[0]])) ? intval($param[$paramName[0]]) : $param[$paramName[0]];
        }

        return json_encode($result);
    }

    public static function updateRemoteIssueLink($param, &$blockCustom, $vendorUrl)
    {
        $result = [];

        // \
        $paramNames = ['linkId', 'globalId'];
        foreach ($paramNames as $paramName) {
            if (isset($param[$paramName]) && strlen($param[$paramName]) > 0)
                $result[$paramName] = (is_numeric($param[$paramName])) ? intval($param[$paramName]) : $param[$paramName];
        }
        // application
        $paramNames = [
            ['applicationType', 'type'],
            ['applicationName', 'name'],
        ];
        foreach ($paramNames as $paramName) {
            if (isset($param[$paramName[0]]) && strlen($param[$paramName[0]]) > 0)
                $result['application'][$paramName[1]] = (is_numeric($param[$paramName[0]])) ? intval($param[$paramName[0]]) : $param[$paramName[0]];
        }
        // 'relationship'
        $paramName = 'relationship';
        if (isset($param[$paramName]) && strlen($param[$paramName]) > 0)
            $result[$paramName] = (is_numeric($param[$paramName])) ? intval($param[$paramName]) : $param[$paramName];

        // 'object' -> 'issueLinkUrl', 'issueLinkTitle', 'issueLinkSummary'
        $paramNames = [
            ['issueLinkUrl', 'url'],
            ['issueLinkTitle', 'title'],
            ['issueLinkSummary', 'summary'],
        ];
        foreach ($paramNames as $paramName) {
            if (isset($param[$paramName[0]]) && strlen($param[$paramName[0]]) > 0)
                $result['object'][$paramName[1]] = (is_numeric($param[$paramName[0]])) ? intval($param[$paramName[0]]) : $param[$paramName[0]];
        }
        // 'object' -> 'icon' -> 'issueLinkIconUrl', 'issueLinkIconTitle'
        $paramNames = [
            ['issueLinkIconUrl', 'url16x16'],
            ['issueLinkIconTitle', 'title'],
        ];
        foreach ($paramNames as $paramName) {
            if (isset($param[$paramName[0]]) && strlen($param[$paramName[0]]) > 0)
                $result['object']['icon'][$paramName[1]] = (is_numeric($param[$paramName[0]])) ? intval($param[$paramName[0]]) : $param[$paramName[0]];
        }
        // 'object' -> 'status' -> 'resolved'
        $paramName = ['issueLinkStatusResolved', 'resolved'];
        if (isset($param[$paramName[0]]) && strlen($param[$paramName[0]]) > 0)
            $result['object']['status'][$paramName[1]] = (is_numeric($param[$paramName[0]])) ? intval($param[$paramName[0]]) : $param[$paramName[0]];
        // 'object' -> 'status' -> 'icon' -> 'issueLinkStatusIconUrl', 'issueLinkStatusIconTitle', 'issueLinkStatusIconLink'
        $paramNames = [
            ['issueLinkStatusIconUrl', 'url'],
            ['issueLinkStatusIconTitle', 'title'],
            ['issueLinkStatusIconLink', 'link']
        ];
        foreach ($paramNames as $paramName) {
            if (isset($param[$paramName[0]]) && strlen($param[$paramName[0]]) > 0)
                $result['object']['status']['icon'][$paramName[1]] = (is_numeric($param[$paramName[0]])) ? intval($param[$paramName[0]]) : $param[$paramName[0]];
        }

        return json_encode($result);
    }

    public static function addIssueWorklog($param, &$blockCustom, $vendorUrl)
    {
        $result = [];

        $paramNames = ['comment', 'timeSpentSeconds', 'adjustEstimate', 'newEstimate', 'expand'];
        foreach ($paramNames as $paramName) {
            if (isset($param[$paramName]) && strlen($param[$paramName]) > 0)
                $result[$paramName] = (is_numeric($param[$paramName])) ? intval($param[$paramName]) : $param[$paramName];
        }
        $paramNames = [
            ['visibilityType', 'type'],
            ['visibilityValue', 'value']
        ];
        foreach ($paramNames as $paramName) {
            if (isset($param[$paramName[0]]) && strlen($param[$paramName[0]]) > 0)
                $result['visibility'][$paramName[1]] = (is_numeric($param[$paramName[0]])) ? intval($param[$paramName[0]]) : $param[$paramName[0]];
        }

        if (!empty($param['started'])) {
            self::createDate($param, 'started');
            $result['started'] = $param['started'];
        }

        return json_encode($result);
    }

    public static function updateIssueWorklog($param, &$blockCustom, $vendorUrl)
    {
        return self::addIssueWorklog($param, $blockCustom, $vendorUrl);
    }

    /* part 2 */

    public static function setIssueProperty($param, &$blockCustom, $vendorUrl)
    {
        return json_encode($param['value']);
    }

    public static function setWorklogProperty($param, &$blockCustom, $vendorUrl)
    {
        return json_encode($param['value']);
    }

    public static function createIssueLink($param, &$blockCustom, $vendorUrl)
    {
        $result = [];

        $result['type'] = self::checkJsonParam([
            ['typeName', 'name'],
            ['typeId', 'id'],
            ['typeInward', 'inward'],
            ['typeOutward', 'outward'],
        ], $param);
        if (count($result['type']) == 0) {
            unset($result['type']);
        }

        if (isset($param['inwardIssue']) && count($param['inwardIssue']) > 0)
            $result['inwardIssue'] = (is_numeric($param['inwardIssue'])) ? intval($param['inwardIssue']) : $param['inwardIssue'];
        if (isset($param['outwardIssue']) && count($param['outwardIssue']) > 0)
            $result['outwardIssue'] = (is_numeric($param['outwardIssue'])) ? intval($param['outwardIssue']) : $param['outwardIssue'];

        $result['comment'] = self::checkJsonParam([
            ['commentAuthor', 'author'],
            ['commentBody', 'body'],
            ['commentRenderedBody', 'renderedBody'],
            ['commentProperties', 'properties'],
        ], $param);

        $result['comment']['visibility'] = self::checkJsonParam([
            ['commentVisibilityType', 'type'],
            ['commentVisibilityValue', 'value'],
        ], $param);
        if (count($result['comment']['visibility']) == 0) {
            unset($result['comment']['visibility']);
        }

        if (count($result['comment']) == 0) {
            unset($result['comment']);
        }

        return json_encode($result);
    }

    public static function setIssueTypeProperty($param, &$blockCustom, $vendorUrl)
    {
        return json_encode($param['value']);
    }

    public static function setMyPreference($param, &$blockCustom, $vendorUrl)
    {
        $result = [
            'key' => $param['key'],
            'raw-value' => json_encode($param['value']),
        ];
        return json_encode($result);
    }

    public static function createPermissionGrant($param, &$blockCustom, $vendorUrl)
    {
        $result = [];
        $result['holder']['type'] = $param['holderType'];
        $result['permission'] = $param['permission'];

        if (isset($param['holderParameter']) && strlen($param['holderParameter']) > 0) {
            $result['holder']['Parameter'] = $param['holderParameter'];
        }
        if (isset($param['expand']) && strlen($param['expand']) > 0) {
            $result['expand'] = $param['expand'];
        }

        return json_encode($result);
    }

    public static function setProjectProperty($param, &$blockCustom, $vendorUrl)
    {
        return json_encode($param['value']);
    }

    public static function addActorToProjectRole($param, &$blockCustom, $vendorUrl)
    {
        return json_encode($param['actors']);
    }

    public static function addDefaultActorsToRole($param, &$blockCustom, $vendorUrl)
    {
        $users = [];
        $groups = [];
        self::createListFromString($param, 'user');
        self::createListFromString($param, 'group');
        if (!empty($param['user'])) {
            foreach ($param['user'] as $user) {
                $users[] = $user;
            }
            $param['user'] = $users;
        }
        if (!empty($param['group'])) {
            foreach ($param['group'] as $group) {
                $groups[] = $group;
            }
            $param['group'] = $groups;
        }

        return json_encode($param);
    }

    /* part 3 */

    public static function search($param, &$blockCustom, $vendorUrl)
    {
        self::createListFromString($param, 'fields');
        self::createListFromString($param, 'properties');

        $fields = [];
        $properties = [];

        if (!empty($param['fields'])) {
            foreach ($param['fields'] as $field) {
                $fields[] = $field;
            }
            $param['fields'] = $fields;
        }

        if (!empty($param['properties'])) {
            foreach ($param['properties'] as $property) {
                $properties[] = $property;
            }
            $param['properties'] = $properties;
        }


        return json_encode($param);
    }

    public static function setBaseURL($param, &$blockCustom, $vendorUrl)
    {
        return json_encode($param['value']);
    }

    public static function setIssueNavigatorDefaultColumns($param, &$blockCustom, $vendorUrl)
    {
        $columns = [];
        self::createListFromString($param, 'columns');

        if (!empty($param['columns'])) {
            foreach ($param['columns'] as $column) {
                $columns[] = $column;
            }
            $param['columns'] = $columns;
        }

        return json_encode($param);
    }

    public static function setColumns($param, &$blockCustom, $vendorUrl)
    {
        return self::setIssueNavigatorDefaultColumns($param, $blockCustom, $vendorUrl);
    }

    public static function createVersion($param, &$blockCustom, $vendorUrl)
    {
        self::createDate($param, 'releaseDate', 'Y-m-d');

        return stripcslashes(json_encode($param));
    }

    public static function createRemoteVersionLink($param, &$blockCustom, $vendorUrl)
    {
        self::createListFromString($param, 'colors');
        $colors = [];
        if (!empty($param['colors'])) {
            foreach ($param['colors'] as $color) {
                $colors[] = $color;
            }
            $param['colors'] = $colors;
        }

        return json_encode($param);
    }

    public static function updateRemoteVersionLink($param, $blockCustom, $vendorUrl)
    {
        return self::createRemoteVersionLink($param, $blockCustom, $vendorUrl);
    }

    public static function getWorklogs($param, &$blockCustom, $vendorUrl)
    {
        self::createStringFromList($param, 'expand');
        self::createListFromString($param, 'ids');
        $ids = [];
        foreach ($param['ids'] as $id) {
            $ids[] = intval($id);
        }
        $param['ids'] = $ids;


        return json_encode($param);
    }

    public static function getWorklogById($param, $blockCustom, $vendorUrl)
    {
        self::createStringFromList($param, 'expand');

        return $param;
    }

    public static function getIssueWorklog($param, $blockCustom, $vendorUrl)
    {
        self::createStringFromList($param, 'expand');

        return $param;
    }

    private static function checkJsonParam($paramNames, $param)
    {
        $return = [];
        foreach ($paramNames as $paramName) {
            if (isset($param[$paramName[0]])) {
                if (is_array($param[$paramName[0]])) {
                    if (count($param[$paramName[0]]) > 0) {
                        $return[$paramName[1]] = (is_numeric($param[$paramName[0]])) ? intval($param[$paramName[0]]) : $param[$paramName[0]];
                    }
                } else {
                    if (strlen($param[$paramName[0]]) > 0) {
                        $return[$paramName[1]] = (is_numeric($param[$paramName[0]])) ? intval($param[$paramName[0]]) : $param[$paramName[0]];
                    }
                }
            }
        }

        return $return;
    }

    public static function getCreatedIssueMeta($param, $blockCustom, $vendorUrl)
    {
        self::createStringFromList($param, 'projectIds');
        self::createStringFromList($param, 'projectKeys');
        self::createStringFromList($param, 'issuetypeIds');
        self::createStringFromList($param, 'issuetypeNames');
    }

    public static function findBulkAssignableUsers($param, $blockCustom, $vendorUrl)
    {
        self::createStringFromList($param, 'projectKeys');

        return json_encode($param);
    }

    public static function findUsersWithAllPermissions($param, $blockCustom, $vendorUrl)
    {
        self::createStringFromList($param, 'permissions');
    }

    public static function updateVersion($param, $blockCustom, $vendorUrl)
    {
        self::createDate($param, 'releaseDate', 'Y-m-d');
        self::createDate($param, 'userReleaseDate', 'd/M/Y');
    }

    public static function getWorklogsDeletedSince($param, $blockCustom, $vendorUrl)
    {
        self::createDate($param, 'since', 'timestamp');

        return $param;
    }

    public function getWorklogsModifiedSince($param, $blockCustom, $vendorUrl) {
        self::createDate($param, 'since', 'timestamp');
        self::createStringFromList($param, 'expand');
    }

    private static function createStringFromList(&$param, $name)
    {
        if (!empty($param[$name])) {
            if (is_array($param[$name])) {
                $param[$name] = implode(',', $param[$name]);
            }
        }
    }

    private static function createListFromString(&$param, $name)
    {
        if (!empty($param[$name])) {
            if (!is_array($param[$name])) {
                $param[$name] = explode(',', $param[$name]);
            }
        }
    }

    private static function createDate(&$param, $argName, $format = \DateTime::ISO8601)
    {
        if (!empty($param[$argName])) {
            $date = \DateTime::createFromFormat('Y-m-d H:i:s', $param[$argName]);
            if ($date instanceof \DateTime) {
                if ($format == 'timestamp') {
                    $param[$argName] = $date->getTimestamp();
                } else {
                    $param[$argName] = $date->format($format);
                }
            }
        }
    }
}
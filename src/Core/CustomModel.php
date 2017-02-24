<?php

namespace Core;

if ( ! defined( 'RAPID_IN' ) ) exit( 'No direct script access allowed' );

/**
 * Custom Model
 */
class CustomModel
{
    public static function addAuditingRecord($param, &$blockCustom, $vendorUrl){
        $result = $param;

        return json_encode($result);
    }
    public static function updateSelectFieldOptions($param, &$blockCustom, $vendorUrl){
        $result = $param;

        return json_encode($result);
    }
    public static function createSingleIssue($param, &$blockCustom, $vendorUrl){
        $result = $param;

        return json_encode($result);
    }
    public static function deleteSingleIssue($param, &$blockCustom, $vendorUrl){
        $result = $param;

        return json_encode($result);
    }
    public static function addCommentToIssue($param, &$blockCustom, $vendorUrl){
        $result = $param;

        return json_encode($result);
    }
    public static function sendIssueNotify($param, &$blockCustom, $vendorUrl){
        $result = $param;

        return json_encode($result);
    }
    public static function createRemoteIssueLink($param, &$blockCustom, $vendorUrl){
        $result = $param;

        return json_encode($result);
    }
    public static function updateRemoteIssueLink($param, &$blockCustom, $vendorUrl){
        $result = $param;

        return json_encode($result);
    }
    public static function addIssueWatcher($param, &$blockCustom, $vendorUrl){
        $result = $param;

        return json_encode($result);
    }
    public static function addIssueWorklog($param, &$blockCustom, $vendorUrl){
        $result = $param;

        return json_encode($result);
    }
    public static function updateIssueWorklog($param, &$blockCustom, $vendorUrl){
        $result = $param;

        return json_encode($result);
    }
    public static function addIssueAttachment($param, &$blockCustom, $vendorUrl){
        $result = $param;

        return json_encode($result);
    }
}
<?php

return array (
    'getMyPermissions' => array (
        'projectKey',
        'projectId',
        'issueKey',
        'issueId',
    ),
    'getProperty' => array (
        'key',
        'permissionLevel',
        'keyFilter',
    ),
    'getAuditingRecords' => array (
        'offset',
        'limit',
        'filter',
        'from',
        'to',
    ),
    'deleteComponent' => array (
        'moveIssuesTo',
    ),
    'getDashboards' => array (
        'filter',
        'startAt',
        'maxResults',
    ),
    'getSelectFieldOptions' => array (
        'startAt',
        'maxResults',
    ),
    'getAvailableSelectFieldOptions' => array (
        'startAt',
        'maxResults',
        'projectId',
    ),
    'searchSelectFieldOptions' => array (
        'startAt',
        'maxResults',
        'projectId',
    ),
    'createFilter' => array (
        'expand',
    ),
    'updateFilter' => array (
        'expand',
    ),
    'getFilter' => array (
        'expand',
    ),
    'getFavouriteFilters' => array (
        'expand',
    ),
    'getMyFilters' => array (
        'expand',
        'includeFavourites',
    ),
    'deleteGroup' => array (
        'groupname',
        'swapGroup',
    ),
    'getUsersFromGroup' => array (
        'groupname',
        'includeInactiveUsers',
        'startAt',
        'maxResults',
    ),
    'addUserToGroup' => array (
        'groupname',
    ),
    'deleteUserFromGroup' => array (
        'groupname',
        'username',
    ),
    'findGroups' => array (
        'query',
        'exclude',
        'maxResults',
        'userName',
    ),
    'findUsersAndGroups' => array (
        'query',
        'maxResults',
        'showAvatar',
        'fieldId',
        'projectId',
        'issueTypeId',
    ),
    'getSingleIssue' => array (
        'fields',
        'expand',
        'properties',
        'fieldsByKeys',
        'updateHistory',
    ),
    'deleteSingleIssue' => array (
        'deleteSubtasks',
    ),
    'updateSingleIssue' => array (
        'notifyUsers',
        'overrideScreenSecurity',
        'overrideEditableFlag',
    ),
    'getIssueComments' => array (
        'startAt',
        'maxResults',
        'orderBy',
        'expand',
    ),
    'addCommentToIssue' => array (
        'expand',
    ),
    'updateIssueComment' => array (
        'expand',
    ),
    'getIssueSingleComment' => array (
        'expand',
    ),
    'getRemoteIssueLinks' => array (
        'globalId',
    ),
    'deleteRemoteIssueLinkByGlobalId' => array (
        'globalId',
    ),
    'getIssueTransitions' => array (
        'transitionId',
        'skipRemoteOnlyCondition',
    ),
    'deleteIssueWatcher' => array (
        'username',
    ),
    'getIssueWorklog' => array (
        'expand',
    ),
    'addIssueWorklog' => array (
        'adjustEstimate',
        'newEstimate',
        'reduceBy',
        'expand',
    ),
    'updateIssueWorklog' => array (
        'adjustEstimate',
        'newEstimate',
        'expand',
    ),
    'deleteIssueWorklog' => array (
        'adjustEstimate',
        'newEstimate',
        'increaseBy',
    ),
    'getCreatedIssueMeta' => array (
        'projectIds',
        'projectKeys',
        'issuetypeIds',
        'issuetypeNames',
    ),
    'getIssuesBasedOnQuery' => array (
        'query',
        'currentJQL',
        'currentIssueKey',
        'currentProjectId',
        'showSubTasks',
        'showSubTaskParent',
    ),
);
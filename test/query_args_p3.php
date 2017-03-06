<?php

return array (
    'getAllScreenTabs' => array (
        'projectKey',
    ),
    'getAllScreenFields' => array (
        'projectKey',
    ),
    'getServerInfo' => array (
        'doHealthCheck',
    ),
    'createAvatar' => array (
        'x',
        'y',
        'size',
    ),
    'getUser' => array (
        'username',
        'key',
    ),
    'findBulkAssignableUsers' => array (
        'username',
        'projectKeys',
        'startAt',
        'maxResults',
    ),
    'findAssignableUsers' => array (
        'username',
        'project',
        'issueKey',
        'startAt',
        'maxResults',
        'actionDescriptorId',
    ),
    'getDefaultColumns' => array (
        'username',
    ),
    'resetDefaultColumns' => array (
        'username',
    ),
    'findUsersWithAllPermissions' => array (
        'username',
        'permissions',
        'issueKey',
        'projectKey',
        'startAt',
        'maxResults',
    ),
    'findUsersByProperty' => array (
        'username',
        'startAt',
        'maxResults',
        'includeActive',
        'includeInactive',
        'property',
    ),
    'findUsersByUsername' => array (
        'username',
        'startAt',
        'maxResults',
        'includeActive',
        'includeInactive',
        'property',
    ),
    'findUsersWithBrowsePermission' => array (
        'username',
        'issueKey',
        'projectKey',
        'startAt',
        'maxResults',
    ),
    'getUserPropertiesKeysByUserKey' => array (
        'userKey',
        'username',
    ),
    'getUserPropertiesKeysByUsername' => array (
        'userKey',
        'username',
    ),
    'deleteUserPropertyByUserKey' => array (
        'userKey',
        'username',
    ),
    'deleteUserPropertyByUsername' => array (
        'userKey',
        'username',
    ),
    'setUserPropertyByUserKey' => array (
        'userKey',
        'username',
    ),
    'setUserPropertyByUsername' => array (
        'userKey',
        'username',
    ),
    'getUserPropertyByUserKey' => array (
        'userKey',
        'username',
    ),
    'getUserPropertyByUsername' => array (
        'userKey',
        'username',
    ),
    'getVersion' => array (
        'expand',
    ),
    'deleteVersion' => array (
        'moveFixIssuesTo',
        'moveAffectedIssuesTo',
    ),
    'getRemoteVersionLinks' => array (
        'globalId',
    ),
    'getAllWorkflows' => array (
        'workflowName',
    ),
    'deleteWorkflowProperty' => array (
        'key',
        'workflowName',
        'workflowMode',
    ),
    'createWorkflowProperty' => array (
        'key',
        'workflowName',
        'workflowMode',
    ),
    'updateWorkflowProperty' => array (
        'key',
        'workflowName',
        'workflowMode',
    ),
    'getWorkflowProperties' => array (
        'includeReservedKeys',
        'key',
        'workflowName',
        'workflowMode',
    ),
    'getWorkflowScheme' => array (
        'returnDraftIfExists',
    ),
    'deleteDefaultWorkflowScheme' => array (
        'updateDraftIfNeeded',
    ),
    'getDefaultWorkflowScheme' => array (
        'returnDraftIfExists',
    ),
    'getDraftWorkflow' => array (
        'workflowName',
    ),
    'deleteDraftWorkflowMapping' => array (
        'workflowName',
    ),
    'updateDraftWorkflowMapping' => array (
        'workflowName',
    ),
    'getWorkflowSchemeIssueType' => array (
        'returnDraftIfExists',
    ),
    'deleteWorkflowSchemeIssueType' => array (
        'updateDraftIfNeeded',
    ),
    'getWorkflow' => array (
        'workflowName',
        'returnDraftIfExists',
    ),
    'deleteWorkflow' => array (
        'workflowName',
        'updateDraftIfNeeded',
    ),
    'updateWorkflowMapping' => array (
        'workflowName',
    ),
    'getWorklogsDeletedSince' => array (
        'since',
    ),
    'getWorklogs' => array (
        'expand',
    ),
    'getWorklogsModifiedSince' => array (
        'since',
        'expand',
    ),
);
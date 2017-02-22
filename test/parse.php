<?php

return array (
    array (
        'title' => 'Get permissions',
        'descr' => array (
            'Returns all permissions in the system and whether the currently logged in user has them. You can optionally provide a specific context to get permissions for(projectKey OR projectId OR issueKey OR issueId)',
            'NB: The above means that for issue-level permissions (EDIT_ISSUE for example), hasPermission may be true when no context is provided, or when a project context is provided,but may be false for any given (or all) issues. This would occur (for example) if Reporters were given the EDIT_ISSUE permission. This is becauseany user could be a reporter, except in the context of a concrete issue, where the reporter is known.',
            'Global permissions will still be returned for all scopes.',
            'Prior to version 6.4 this service returned project permissions with keys corresponding to com.atlassian.jira.security.Permissions.Permission constants.Since 6.4 those keys are considered deprecated and this service returns system project permission keys corresponding to constants defined in com.atlassian.jira.permission.ProjectPermissions.Permissions with legacy keys are still also returned for backwards compatibility, they are marked with an attribute deprecatedKey=true.The attribute is missing for project permissions with the current keys.',
            '',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2//mypermissions',
        'param' => array (
            array (
                'projectKey',
                'string',
                '- key of project to scope returned permissions for.',
            ),
            array (
                'projectId',
                'string',
                '- id of project to scope returned permissions for.',
            ),
            array (
                'issueKey',
                'string',
                '- key of the issue to scope returned permissions for.',
            ),
            array (
                'issueId',
                'string',
                '- id of the issue to scope returned permissions for.',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get all permissions',
        'descr' => array (
            'Returns all permissions that are present in the JIRA instance - Global, Project and the global ones added by plugins',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2//permissions',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get property',
        'descr' => array (
            'Returns an application property.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/application-properties',
        'param' => array (
            array (
                'key',
                'string',
                'a String containing the property key',
            ),
            array (
                'permissionLevel',
                'string',
                'when fetching a list specifies the permission level of all items in the listsee {@link com.atlassian.jira.bc.admin.ApplicationPropertiesService.EditPermissionLevel}',
            ),
            array (
                'keyFilter',
                'string',
                'when fetching a list allows the list to be filtered by the property\'s start of keye.g. "jira.lf.*" whould fetch only those permissions that are editable and whose keys start with"jira.lf.". This is a regex.',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Set property via restful table',
        'descr' => array (
            'Modify an application property via PUT. The "value" field present in the PUT will override the existing value.',
        ),
        'method' => 'PUT',
        'url' => '/rest/api/2/application-properties/{id}',
        'param' => array (),
        'schema' => '{"id": "https://docs.atlassian.com/jira/REST/schema/application-property#","title": "Application Property","type": "object","properties": {"id": {"type": "string"},"value": {"type": "string"}},"additionalProperties": false}',
        'example' => '{"id": "jira.home","value": "/var/jira/jira-home"}',
    ),
    array (
        'title' => 'Get advanced settings',
        'descr' => array (
            'Returns the properties that are displayed on the "General Configuration > Advanced Settings" page.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/application-properties/advanced-settings',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get all',
        'descr' => array (
            'Returns all ApplicationRoles in the system. Will also return an ETag header containing a version hash of thecollection of ApplicationRoles.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/applicationrole',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get',
        'descr' => array (
            'Returns the ApplicationRole with passed key if it exists.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/applicationrole/{key}',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get attachment',
        'descr' => array (
            'Returns the meta-data for an attachment, including the URI of the actual attached file.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/attachment/{id}',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Remove attachment',
        'descr' => array (
            'Remove an attachment from an issue.',
        ),
        'method' => 'DELETE',
        'url' => '/rest/api/2/attachment/{id}',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Expand for humans',
        'descr' => array (
            'Tries to expand an attachment. Output is human-readable and subject to change.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/attachment/{id}/expand/human',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Expand for machines',
        'descr' => array (
            'Tries to expand an attachment. Output is raw and should be backwards-compatible through the course of time.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/attachment/{id}/expand/raw',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get attachment meta',
        'descr' => array (
            'Returns the meta information for an attachments, specifically if they are enabled and the maximum upload sizeallowed.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/attachment/meta',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get records',
        'descr' => array (
            'Returns auditing records filtered using provided parameters',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/auditing/record',
        'param' => array (
            array (
                'offset',
                'int',
                '- the number of record from which search starts',
            ),
            array (
                'limit',
                'int',
                '- maximum number of returned results (if is limit is <= 0 or > 1000, it will be set do default value: 1000)',
            ),
            array (
                'filter',
                'string',
                '- text query; each record that will be returned must contain the provided text in one of its fields',
            ),
            array (
                'from',
                'string',
                '- timestamp in past; \'from\' must be less or equal \'to\', otherwise the result set will be emptyonly records that where created in the same moment or after the \'from\' timestamp will be provided in response',
            ),
            array (
                'to',
                'string',
                '- timestamp in past; \'from\' must be less or equal \'to\', otherwise the result set will be emptyonly records that where created in the same moment or earlier than the \'to\' timestamp will be provided in response',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Add record',
        'descr' => array (
            'Store a record in Audit Log',
        ),
        'method' => 'POST',
        'url' => '/rest/api/2/auditing/record',
        'param' => array (),
        'schema' => '{"id": "https://docs.atlassian.com/jira/REST/schema/audit-record#","title": "Audit Record","type": "object","properties": {"id": {"type": "integer"},"summary": {"type": "string"},"remoteAddress": {"type": "string"},"authorKey": {"type": "string"},"created": {"type": "string"},"category": {"type": "string"},"eventSource": {"type": "string"},"description": {"type": "string"},"objectItem": {"$ref": "#/definitions/associated-item"},"changedValues": {"type": "array","items": {"title": "Changed Value","type": "object","properties": {"fieldName": {"type": "string"},"changedFrom": {"type": "string"},"changedTo": {"type": "string"}},"additionalProperties": false}},"associatedItems": {"type": "array","items": {"$ref": "#/definitions/associated-item"}}},"definitions": {"associated-item": {"title": "Associated Item","type": "object","properties": {"id": {"type": "string"},"name": {"type": "string"},"typeName": {"type": "string"},"parentId": {"type": "string"},"parentName": {"type": "string"}},"additionalProperties": false}},"additionalProperties": false}',
        'example' => '{"summary": "User created","created": null,"category": "USER_MANAGEMENT","objectItem": {"id": "usr","name": "user","typeName": "USER","parentId": "1","parentName": "JIRA Internal Directory"},"changedValues": [{"fieldName": "email","changedFrom": "user@atlassian.com","changedTo": "newuser@atlassian.com"}],"associatedItems": [{"id": "jira-software-users","name": "jira-software-users","typeName": "GROUP","parentId": "1","parentName": "JIRA Internal Directory"}]}',
    ),
    array (
        'title' => 'Get all system avatars',
        'descr' => array (
            'Returns all system avatars of the given type.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/avatar/{type}/system',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get properties keys',
        'descr' => array (
            'Returns the keys of all properties for the comment identified by the key or by the id.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/comment/{commentId}/properties',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Delete property',
        'descr' => array (
            'Removes the property from the comment identified by the key or by the id. Ths user removing the property is requiredto have permissions to administer the comment.',
        ),
        'method' => 'DELETE',
        'url' => '/rest/api/2/comment/{commentId}/properties/{propertyKey}',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Set property',
        'descr' => array (
            'Sets the value of the specified comment\'s property.',
            'You can use this resource to store a custom data against the comment identified by the key or by the id. The userwho stores the data is required to have permissions to administer the comment.',
            '',
        ),
        'method' => 'PUT',
        'url' => '/rest/api/2/comment/{commentId}/properties/{propertyKey}',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get property',
        'descr' => array (
            'Returns the value of the property with a given key from the comment identified by the key or by the id. The user who retrievesthe property is required to have permissions to read the comment.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/comment/{commentId}/properties/{propertyKey}',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Create component',
        'descr' => array (
            'Create a component via POST.',
        ),
        'method' => 'POST',
        'url' => '/rest/api/2/component',
        'param' => array (),
        'schema' => '{"id": "https://docs.atlassian.com/jira/REST/schema/component#","title": "Component","type": "object","properties": {"name": {"type": "string"},"description": {"type": "string"},"lead": {"$ref": "#/definitions/user"},"leadUserName": {"type": "string"},"assigneeType": {"type": "string","enum": ["PROJECT_DEFAULT","COMPONENT_LEAD","PROJECT_LEAD","UNASSIGNED"]},"assignee": {"$ref": "#/definitions/user"},"realAssigneeType": {"type": "string","enum": ["PROJECT_DEFAULT","COMPONENT_LEAD","PROJECT_LEAD","UNASSIGNED"]},"realAssignee": {"$ref": "#/definitions/user"},"isAssigneeTypeValid": {"type": "boolean"},"project": {"type": "string"},"projectId": {"type": "integer"}},"definitions": {"simple-list-wrapper": {"title": "Simple List Wrapper","type": "object","properties": {"size": {"type": "integer"},"max-results": {"type": "integer"},"items": {"type": "array","items": {"title": "Group","type": "object","properties": {"name": {"type": "string"}},"additionalProperties": false}}},"additionalProperties": false,"required": ["size"]},"user": {"title": "User","type": "object","properties": {"key": {"type": "string"},"accountId": {"type": "string"},"name": {"type": "string"},"emailAddress": {"type": "string"},"avatarUrls": {"type": "object","patternProperties": {".+": {"type": "string","format": "uri"}},"additionalProperties": false},"displayName": {"type": "string"},"active": {"type": "boolean"},"timeZone": {"type": "string"},"locale": {"type": "string"},"groups": {"$ref": "#/definitions/simple-list-wrapper"},"applicationRoles": {"$ref": "#/definitions/simple-list-wrapper"}},"additionalProperties": false,"required": ["active"]}},"additionalProperties": false,"required": ["isAssigneeTypeValid"]}',
        'example' => '{"name": "Component 1","description": "This is a JIRA component","leadUserName": "fred","assigneeType": "PROJECT_LEAD","isAssigneeTypeValid": false,"project": "PROJECTKEY","projectId": 10000}',
    ),
    array (
        'title' => 'Update component',
        'descr' => array (
            'Modify a component via PUT. Any fields present in the PUT will override existing values. As a convenience, if a fieldis not present, it is silently ignored.',
            'If leadUserName is an empty string ("") the component lead will be removed.',
        ),
        'method' => 'PUT',
        'url' => '/rest/api/2/component/{id}',
        'param' => array (),
        'schema' => '{"id": "https://docs.atlassian.com/jira/REST/schema/component#","title": "Component","type": "object","properties": {"name": {"type": "string"},"description": {"type": "string"},"lead": {"$ref": "#/definitions/user"},"leadUserName": {"type": "string"},"assigneeType": {"type": "string","enum": ["PROJECT_DEFAULT","COMPONENT_LEAD","PROJECT_LEAD","UNASSIGNED"]},"assignee": {"$ref": "#/definitions/user"},"realAssigneeType": {"type": "string","enum": ["PROJECT_DEFAULT","COMPONENT_LEAD","PROJECT_LEAD","UNASSIGNED"]},"realAssignee": {"$ref": "#/definitions/user"},"isAssigneeTypeValid": {"type": "boolean"},"project": {"type": "string"},"projectId": {"type": "integer"}},"definitions": {"simple-list-wrapper": {"title": "Simple List Wrapper","type": "object","properties": {"size": {"type": "integer"},"max-results": {"type": "integer"},"items": {"type": "array","items": {"title": "Group","type": "object","properties": {"name": {"type": "string"}},"additionalProperties": false}}},"additionalProperties": false,"required": ["size"]},"user": {"title": "User","type": "object","properties": {"key": {"type": "string"},"accountId": {"type": "string"},"name": {"type": "string"},"emailAddress": {"type": "string"},"avatarUrls": {"type": "object","patternProperties": {".+": {"type": "string","format": "uri"}},"additionalProperties": false},"displayName": {"type": "string"},"active": {"type": "boolean"},"timeZone": {"type": "string"},"locale": {"type": "string"},"groups": {"$ref": "#/definitions/simple-list-wrapper"},"applicationRoles": {"$ref": "#/definitions/simple-list-wrapper"}},"additionalProperties": false,"required": ["active"]}},"additionalProperties": false,"required": ["isAssigneeTypeValid"]}',
        'example' => '{"name": "Component 1","description": "This is a JIRA component","leadUserName": "fred","assigneeType": "PROJECT_LEAD","isAssigneeTypeValid": false,"project": "PROJECTKEY","projectId": 10000}',
    ),
    array (
        'title' => 'Get component',
        'descr' => array (
            'Returns a project component.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/component/{id}',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Delete',
        'descr' => array (
            'Delete a project component.',
        ),
        'method' => 'DELETE',
        'url' => '/rest/api/2/component/{id}',
        'param' => array (
            array (
                'moveIssuesTo',
                'string',
                'The new component applied to issues whose \'id\' component will be deleted.If this value is null, then the \'id\' component is simply removed from the related isues.',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get component related issues',
        'descr' => array (
            'Returns counts of issues related to this component.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/component/{id}/relatedIssueCounts',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get configuration',
        'descr' => array (
            'Returns the information if the optional features in JIRA are enabled or disabled. If the time tracking is enabled,it also returns the detailed information about time tracking configuration.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/configuration',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get selected time tracking implementation',
        'descr' => array (
            'Returns the currently selected time-tracking implementation',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/configuration/timetracking',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Select time tracking implementation',
        'descr' => array (
            'Selects a time tracking implementation',
        ),
        'method' => 'PUT',
        'url' => '/rest/api/2/configuration/timetracking',
        'param' => array (),
        'schema' => '{"id": "https://docs.atlassian.com/jira/REST/schema/time-tracking-implementation#","title": "Time Tracking Implementation","type": "object","properties": {"key": {"type": "string"},"name": {"type": "string"},"url": {"type": "string"}},"additionalProperties": false}',
        'example' => '{"key": "JIRA"}',
    ),
    array (
        'title' => 'Disable time tracking',
        'descr' => array (
            'Disables time tracking',
        ),
        'method' => 'DELETE',
        'url' => '/rest/api/2/configuration/timetracking',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get available time tracking implementations',
        'descr' => array (
            'Retrieve the list of available time tracking implementations',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/configuration/timetracking/list',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get shared time tracking configuration',
        'descr' => array (
            'Returns the configuration options for time tracking',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/configuration/timetracking/options',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Set shared time tracking configuration',
        'descr' => array (
            'Sets the options for time tracking',
        ),
        'method' => 'PUT',
        'url' => '/rest/api/2/configuration/timetracking/options',
        'param' => array (),
        'schema' => '{"id": "https://docs.atlassian.com/jira/REST/schema/time-tracking-configuration#","title": "Time Tracking Configuration","type": "object","properties": {"workingHoursPerDay": {"type": "number"},"workingDaysPerWeek": {"type": "number"},"timeFormat": {"type": "string","enum": ["pretty","days","hours"]},"defaultUnit": {"type": "string","enum": ["minute","hour","day","week"]}},"additionalProperties": false,"required": ["workingHoursPerDay","workingDaysPerWeek"]}',
        'example' => '',
    ),
    array (
        'title' => 'Get custom field option',
        'descr' => array (
            'Returns a full representation of the Custom Field Option that has the given id.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/customFieldOption/{id}',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'List',
        'descr' => array (
            'Returns a list of all dashboards, optionally filtering them.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/dashboard',
        'param' => array (
            array (
                'filter',
                'string',
                'an optional filter that is applied to the list of dashboards. Valid values include"favourite" for returning only favourite dashboards, and "my" for returningdashboards that are owned by the calling user.',
            ),
            array (
                'startAt',
                'int',
                'the index of the first dashboard to return (0-based). must be 0 or a multiple ofmaxResults',
            ),
            array (
                'maxResults',
                'int',
                'a hint as to the the maximum number of dashboards to return in each call. Note that theJIRA server reserves the right to impose a maxResults limit that is lower than the value that aclient provides, dues to lack or resources or any other condition. When this happens, your results will betruncated. Callers should always check the returned maxResults to determine the value that iseffectively being used.',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get dashboard',
        'descr' => array (
            'Returns a single dashboard.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/dashboard/{id}',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get properties keys',
        'descr' => array (
            'Returns the keys of all properties for the dashboard item identified by the id.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/dashboard/{dashboardId}/items/{itemId}/properties',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Delete property',
        'descr' => array (
            'Removes the property from the dashboard item identified by the key or by the id. Ths user removing the property is requiredto have permissions to administer the dashboard item.',
        ),
        'method' => 'DELETE',
        'url' => '/rest/api/2/dashboard/{dashboardId}/items/{itemId}/properties/{propertyKey}',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Set property',
        'descr' => array (
            'Sets the value of the specified dashboard item\'s property.',
            'You can use this resource to store a custom data against the dashboard item identified by the id.The user who stores the data is required to have permissions to administer the dashboard item.',
            '',
        ),
        'method' => 'PUT',
        'url' => '/rest/api/2/dashboard/{dashboardId}/items/{itemId}/properties/{propertyKey}',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get property',
        'descr' => array (
            'Returns the value of the property with a given key from the dashboard item identified by the id.The user who retrieves the property is required to have permissions to read the dashboard item.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/dashboard/{dashboardId}/items/{itemId}/properties/{propertyKey}',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Create custom field',
        'descr' => array (
            'Creates a custom field using a definition (object encapsulating custom field data)',
        ),
        'method' => 'POST',
        'url' => '/rest/api/2/field',
        'param' => array (),
        'schema' => '{"id": "https://docs.atlassian.com/jira/REST/schema/custom-field-definition#","title": "Custom Field Definition","type": "object","properties": {"name": {"type": "string"},"description": {"type": "string"},"type": {"type": "string"},"searcherKey": {"type": "string"}},"additionalProperties": false}',
        'example' => '{"name": "New custom field","description": "Custom field for picking groups","type": "com.atlassian.jira.plugin.system.customfieldtypes:grouppicker","searcherKey": "com.atlassian.jira.plugin.system.customfieldtypes:grouppickersearcher"}',
    ),
    array (
        'title' => 'Get fields',
        'descr' => array (
            'Returns a list of all fields, both System and Custom',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/field',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Create option',
        'descr' => array (
            'Creates an option for a select list issue field, for a given field key. The Id will be automatically assigned. Only JIRA administrators or the add-ons that provided the field may use this method.',
        ),
        'method' => 'POST',
        'url' => '/rest/api/2/field/{fieldKey}/option',
        'param' => array (),
        'schema' => '{"id": "https://docs.atlassian.com/jira/REST/schema/issue-field-option#","title": "Issue Field Option","type": "object","properties": {"id": {"type": "integer"},"value": {"type": "string"},"properties": {"title": "Object Node","type": "object"},"config": {"title": "Issue Field Option Config","type": "object","properties": {"scope": {"title": "Issue Field Option Scope","type": "object","properties": {"projects": {"type": "array","items": {"type": "integer"}}},"additionalProperties": false},"attributes": {"type": "array","items": {"type": "string","enum": ["notSelectable"]}}},"additionalProperties": false}},"additionalProperties": false}',
        'example' => '',
    ),
    array (
        'title' => 'Get all options',
        'descr' => array (
            '',
            ' Returns all options defined for a select list issue field, for a given field key. Only JIRA administrators or the add-ons that provided the field may use this method.',
            ' The list of options will be ordered by the option Id and paginated.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/field/{fieldKey}/option',
        'param' => array (
            array (
                'startAt',
                'long',
                'The starting index of the returned objects. Base index: 0.',
            ),
            array (
                'maxResults',
                'int',
                'The maximum number of items to return per page. Default: 50.',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Put option',
        'descr' => array (
            'Creates or updates an option for a select list issue field, for a given field key and option Id. Only JIRA administrators or the add-ons that provided the field may use this method.',
        ),
        'method' => 'PUT',
        'url' => '/rest/api/2/field/{fieldKey}/option/{optionId}',
        'param' => array (),
        'schema' => '{"id": "https://docs.atlassian.com/jira/REST/schema/issue-field-option#","title": "Issue Field Option","type": "object","properties": {"id": {"type": "integer"},"value": {"type": "string"},"properties": {"title": "Object Node","type": "object"},"config": {"title": "Issue Field Option Config","type": "object","properties": {"scope": {"title": "Issue Field Option Scope","type": "object","properties": {"projects": {"type": "array","items": {"type": "integer"}}},"additionalProperties": false},"attributes": {"type": "array","items": {"type": "string","enum": ["notSelectable"]}}},"additionalProperties": false}},"additionalProperties": false}',
        'example' => '{"id": 1,"value": "Team 1","properties": {"leader": {"name": "Leader Name","email": "lname@example.com"},"members": 42,"description": "The team\'s description","founded": "2016-06-06"},"config": {"scope": {"projects": [10001,10020]},"attributes": []}}',
    ),
    array (
        'title' => 'Get option',
        'descr' => array (
            'Returns an option for a select list issue field, for a given field key and option Id. Only JIRA administrators or the add-on that provided the field may use this method.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/field/{fieldKey}/option/{optionId}',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Delete',
        'descr' => array (
            'Deletes an option from a select list issue field, for a given field key and option Id. Only JIRA administrators or the add-ons that provided the field may use this method.',
        ),
        'method' => 'DELETE',
        'url' => '/rest/api/2/field/{fieldKey}/option/{optionId}',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Replace',
        'descr' => array (
            'Removes an option from issues that it is set on. Issues may be narrowed down by a JQL filter. A replacement option may be specified.',
            'This is an asynchronous method.',
            '',
        ),
        'method' => 'DELETE',
        'url' => '/rest/api/2/field/{fieldKey}/option/{optionId}/issue',
        'param' => array (
            array (
                'replaceWith',
                'long',
                'The replacement option.',
            ),
            array (
                'jql',
                'string',
                'The jql filter to narrow down the set of issues that should be affected.',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get suggestions edit',
        'descr' => array (
            'Returns the options defined for a select list issue field that are available to the currently logged-in user and can be assigned to an issue, for a given field key.Options which are not selectable are not returned.The list of options will be paginated.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/field/{fieldKey}/option/suggestions/edit',
        'param' => array (
            array (
                'startAt',
                'long',
                'The starting index of the returned objects. Base index: 0.',
            ),
            array (
                'maxResults',
                'int',
                'The maximum number of items to return per page. Default: 50.',
            ),
            array (
                'projectId',
                'long',
                'Only options available for this project will be returned.',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get suggestions search',
        'descr' => array (
            'Returns the options defined for a select list issue field that are available to the currently logged-in user, for a given field key. The list of options will be paginated.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/field/{fieldKey}/option/suggestions/search',
        'param' => array (
            array (
                'startAt',
                'long',
                'The starting index of the returned objects. Base index: 0.',
            ),
            array (
                'maxResults',
                'int',
                'The maximum number of items to return per page. Default: 50.',
            ),
            array (
                'projectId',
                'long',
                'Only options available for this project will be returned.',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Create filter',
        'descr' => array (
            'Creates a new filter, and returns newly created filter.Currently sets permissions just using the users default sharing permissions',
        ),
        'method' => 'POST',
        'url' => '/rest/api/2/filter',
        'param' => array (
            array (
                'expand',
                'string',
                'the parameters to expand',
            ),
        ),
        'schema' => '{"id": "https://docs.atlassian.com/jira/REST/schema/filter#","title": "Filter","type": "object","properties": {"id": {"type": "string"},"name": {"type": "string"},"description": {"type": "string"},"owner": {"$ref": "#/definitions/user"},"jql": {"type": "string"},"viewUrl": {"type": "string","format": "uri"},"searchUrl": {"type": "string","format": "uri"},"favourite": {"type": "boolean"},"sharePermissions": {"type": "array","items": {"title": "Filter Permission","type": "object","properties": {"id": {"type": "integer"},"type": {"type": "string"},"project": {"title": "Project","type": "object","properties": {"id": {"type": "string"},"key": {"type": "string"},"description": {"type": "string"},"lead": {"$ref": "#/definitions/user"},"components": {"type": "array","items": {"title": "Component","type": "object","properties": {"name": {"type": "string"},"description": {"type": "string"},"lead": {"$ref": "#/definitions/user"},"leadUserName": {"type": "string"},"assigneeType": {"type": "string","enum": ["PROJECT_DEFAULT","COMPONENT_LEAD","PROJECT_LEAD","UNASSIGNED"]},"assignee": {"$ref": "#/definitions/user"},"realAssigneeType": {"type": "string","enum": ["PROJECT_DEFAULT","COMPONENT_LEAD","PROJECT_LEAD","UNASSIGNED"]},"realAssignee": {"$ref": "#/definitions/user"},"isAssigneeTypeValid": {"type": "boolean"},"project": {"type": "string"},"projectId": {"type": "integer"}},"additionalProperties": false,"required": ["isAssigneeTypeValid"]}},"issueTypes": {"type": "array","items": {"title": "Issue Type","type": "object","properties": {"id": {"type": "string"},"description": {"type": "string"},"iconUrl": {"type": "string"},"name": {"type": "string"},"subtask": {"type": "boolean"},"avatarId": {"type": "integer"}},"additionalProperties": false,"required": ["subtask"]}},"url": {"type": "string"},"email": {"type": "string"},"assigneeType": {"type": "string","enum": ["PROJECT_LEAD","UNASSIGNED"]},"versions": {"type": "array","items": {"title": "Version","type": "object","properties": {"id": {"type": "string"},"description": {"type": "string"},"name": {"type": "string"},"archived": {"type": "boolean"},"released": {"type": "boolean"},"overdue": {"type": "boolean"},"userStartDate": {"type": "string"},"userReleaseDate": {"type": "string"},"project": {"type": "string"},"projectId": {"type": "integer"},"moveUnfixedIssuesTo": {"type": "string","format": "uri"},"operations": {"type": "array","items": {"title": "Simple Link","type": "object","properties": {"id": {"type": "string"},"styleClass": {"type": "string"},"iconClass": {"type": "string"},"label": {"type": "string"},"title": {"type": "string"},"href": {"type": "string"},"weight": {"type": "integer"}},"additionalProperties": false}},"remotelinks": {"type": "array","items": {"title": "Remote Entity Link","type": "object","properties": {"name": {"type": "string"},"link": {}},"additionalProperties": false}}},"additionalProperties": false}},"name": {"type": "string"},"roles": {"type": "object","patternProperties": {".+": {"type": "string","format": "uri"}},"additionalProperties": false},"avatarUrls": {"type": "object","patternProperties": {".+": {"type": "string"}},"additionalProperties": false},"projectKeys": {"type": "array","items": {"type": "string"}},"projectCategory": {"title": "Project Category","type": "object","properties": {"id": {"type": "string"},"name": {"type": "string"},"description": {"type": "string"}},"additionalProperties": false},"projectTypeKey": {"type": "string"}},"additionalProperties": false},"role": {"title": "Project Role","type": "object","properties": {"name": {"type": "string"},"id": {"type": "integer"},"description": {"type": "string"},"actors": {"type": "array","items": {"title": "Role Actor","type": "object","properties": {"id": {"type": "integer"},"displayName": {"type": "string"},"type": {"type": "string"},"name": {"type": "string"},"avatarUrl": {"type": "string","format": "uri"}},"additionalProperties": false}}},"additionalProperties": false},"group": {"$ref": "#/definitions/group"}},"additionalProperties": false}},"sharedUsers": {"title": "User Bean List Wrapper","type": "object","properties": {"size": {"type": "integer"},"max-results": {"type": "integer"},"start-index": {"type": "integer"},"end-index": {"type": "integer"},"items": {"type": "array","items": {"$ref": "#/definitions/user"}}},"additionalProperties": false,"required": ["size","max-results","start-index","end-index"]},"subscriptions": {"title": "Filter Subscription Bean List Wrapper","type": "object","properties": {"size": {"type": "integer"},"max-results": {"type": "integer"},"start-index": {"type": "integer"},"end-index": {"type": "integer"},"items": {"type": "array","items": {"title": "Filter Subscription","type": "object","properties": {"id": {"type": "integer"},"user": {"$ref": "#/definitions/user"},"group": {"$ref": "#/definitions/group"}},"additionalProperties": false}}},"additionalProperties": false,"required": ["size","max-results","start-index","end-index"]}},"definitions": {"group": {"title": "Group","type": "object","properties": {"name": {"type": "string"}},"additionalProperties": false},"simple-list-wrapper": {"title": "Simple List Wrapper","type": "object","properties": {"size": {"type": "integer"},"max-results": {"type": "integer"},"items": {"type": "array","items": {"$ref": "#/definitions/group"}}},"additionalProperties": false,"required": ["size"]},"user": {"title": "User","type": "object","properties": {"key": {"type": "string"},"accountId": {"type": "string"},"name": {"type": "string"},"emailAddress": {"type": "string"},"avatarUrls": {"type": "object","patternProperties": {".+": {"type": "string","format": "uri"}},"additionalProperties": false},"displayName": {"type": "string"},"active": {"type": "boolean"},"timeZone": {"type": "string"},"locale": {"type": "string"},"groups": {"$ref": "#/definitions/simple-list-wrapper"},"applicationRoles": {"$ref": "#/definitions/simple-list-wrapper"}},"additionalProperties": false,"required": ["active"]}},"additionalProperties": false,"required": ["favourite"]}',
        'example' => '{"name": "All Open Bugs","description": "Lists all open bugs","jql": "type = Bug and resolution is empty","favourite": true}',
    ),
    array (
        'title' => 'Edit filter',
        'descr' => array (
            'Updates an existing filter, and returns its new value.',
        ),
        'method' => 'PUT',
        'url' => '/rest/api/2/filter/{id}',
        'param' => array (
            array (
                'expand',
                'string',
                'the parameters to expand',
            ),
        ),
        'schema' => '{"id": "https://docs.atlassian.com/jira/REST/schema/filter#","title": "Filter","type": "object","properties": {"id": {"type": "string"},"name": {"type": "string"},"description": {"type": "string"},"owner": {"$ref": "#/definitions/user"},"jql": {"type": "string"},"viewUrl": {"type": "string","format": "uri"},"searchUrl": {"type": "string","format": "uri"},"favourite": {"type": "boolean"},"sharePermissions": {"type": "array","items": {"title": "Filter Permission","type": "object","properties": {"id": {"type": "integer"},"type": {"type": "string"},"project": {"title": "Project","type": "object","properties": {"id": {"type": "string"},"key": {"type": "string"},"description": {"type": "string"},"lead": {"$ref": "#/definitions/user"},"components": {"type": "array","items": {"title": "Component","type": "object","properties": {"name": {"type": "string"},"description": {"type": "string"},"lead": {"$ref": "#/definitions/user"},"leadUserName": {"type": "string"},"assigneeType": {"type": "string","enum": ["PROJECT_DEFAULT","COMPONENT_LEAD","PROJECT_LEAD","UNASSIGNED"]},"assignee": {"$ref": "#/definitions/user"},"realAssigneeType": {"type": "string","enum": ["PROJECT_DEFAULT","COMPONENT_LEAD","PROJECT_LEAD","UNASSIGNED"]},"realAssignee": {"$ref": "#/definitions/user"},"isAssigneeTypeValid": {"type": "boolean"},"project": {"type": "string"},"projectId": {"type": "integer"}},"additionalProperties": false,"required": ["isAssigneeTypeValid"]}},"issueTypes": {"type": "array","items": {"title": "Issue Type","type": "object","properties": {"id": {"type": "string"},"description": {"type": "string"},"iconUrl": {"type": "string"},"name": {"type": "string"},"subtask": {"type": "boolean"},"avatarId": {"type": "integer"}},"additionalProperties": false,"required": ["subtask"]}},"url": {"type": "string"},"email": {"type": "string"},"assigneeType": {"type": "string","enum": ["PROJECT_LEAD","UNASSIGNED"]},"versions": {"type": "array","items": {"title": "Version","type": "object","properties": {"id": {"type": "string"},"description": {"type": "string"},"name": {"type": "string"},"archived": {"type": "boolean"},"released": {"type": "boolean"},"overdue": {"type": "boolean"},"userStartDate": {"type": "string"},"userReleaseDate": {"type": "string"},"project": {"type": "string"},"projectId": {"type": "integer"},"moveUnfixedIssuesTo": {"type": "string","format": "uri"},"operations": {"type": "array","items": {"title": "Simple Link","type": "object","properties": {"id": {"type": "string"},"styleClass": {"type": "string"},"iconClass": {"type": "string"},"label": {"type": "string"},"title": {"type": "string"},"href": {"type": "string"},"weight": {"type": "integer"}},"additionalProperties": false}},"remotelinks": {"type": "array","items": {"title": "Remote Entity Link","type": "object","properties": {"name": {"type": "string"},"link": {}},"additionalProperties": false}}},"additionalProperties": false}},"name": {"type": "string"},"roles": {"type": "object","patternProperties": {".+": {"type": "string","format": "uri"}},"additionalProperties": false},"avatarUrls": {"type": "object","patternProperties": {".+": {"type": "string"}},"additionalProperties": false},"projectKeys": {"type": "array","items": {"type": "string"}},"projectCategory": {"title": "Project Category","type": "object","properties": {"id": {"type": "string"},"name": {"type": "string"},"description": {"type": "string"}},"additionalProperties": false},"projectTypeKey": {"type": "string"}},"additionalProperties": false},"role": {"title": "Project Role","type": "object","properties": {"name": {"type": "string"},"id": {"type": "integer"},"description": {"type": "string"},"actors": {"type": "array","items": {"title": "Role Actor","type": "object","properties": {"id": {"type": "integer"},"displayName": {"type": "string"},"type": {"type": "string"},"name": {"type": "string"},"avatarUrl": {"type": "string","format": "uri"}},"additionalProperties": false}}},"additionalProperties": false},"group": {"$ref": "#/definitions/group"}},"additionalProperties": false}},"sharedUsers": {"title": "User Bean List Wrapper","type": "object","properties": {"size": {"type": "integer"},"max-results": {"type": "integer"},"start-index": {"type": "integer"},"end-index": {"type": "integer"},"items": {"type": "array","items": {"$ref": "#/definitions/user"}}},"additionalProperties": false,"required": ["size","max-results","start-index","end-index"]},"subscriptions": {"title": "Filter Subscription Bean List Wrapper","type": "object","properties": {"size": {"type": "integer"},"max-results": {"type": "integer"},"start-index": {"type": "integer"},"end-index": {"type": "integer"},"items": {"type": "array","items": {"title": "Filter Subscription","type": "object","properties": {"id": {"type": "integer"},"user": {"$ref": "#/definitions/user"},"group": {"$ref": "#/definitions/group"}},"additionalProperties": false}}},"additionalProperties": false,"required": ["size","max-results","start-index","end-index"]}},"definitions": {"group": {"title": "Group","type": "object","properties": {"name": {"type": "string"}},"additionalProperties": false},"simple-list-wrapper": {"title": "Simple List Wrapper","type": "object","properties": {"size": {"type": "integer"},"max-results": {"type": "integer"},"items": {"type": "array","items": {"$ref": "#/definitions/group"}}},"additionalProperties": false,"required": ["size"]},"user": {"title": "User","type": "object","properties": {"key": {"type": "string"},"accountId": {"type": "string"},"name": {"type": "string"},"emailAddress": {"type": "string"},"avatarUrls": {"type": "object","patternProperties": {".+": {"type": "string","format": "uri"}},"additionalProperties": false},"displayName": {"type": "string"},"active": {"type": "boolean"},"timeZone": {"type": "string"},"locale": {"type": "string"},"groups": {"$ref": "#/definitions/simple-list-wrapper"},"applicationRoles": {"$ref": "#/definitions/simple-list-wrapper"}},"additionalProperties": false,"required": ["active"]}},"additionalProperties": false,"required": ["favourite"]}',
        'example' => '{"name": "All Open Bugs","description": "Lists all open bugs","jql": "type = Bug and resolution is empty","favourite": true}',
    ),
    array (
        'title' => 'Delete filter',
        'descr' => array (
            'Delete a filter.',
        ),
        'method' => 'DELETE',
        'url' => '/rest/api/2/filter/{id}',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get filter',
        'descr' => array (
            'Returns a filter given an id',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/filter/{id}',
        'param' => array (
            array (
                'expand',
                'string',
                'the parameters to expand',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Default columns',
        'descr' => array (
            'Returns the default columns for the given filter. Currently logged in user will be used asthe user making such request.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/filter/{id}/columns',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Set columns',
        'descr' => array (
            'Sets the default columns for the given filter.',
        ),
        'method' => 'PUT',
        'url' => '/rest/api/2/filter/{id}/columns',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Reset columns',
        'descr' => array (
            'Resets the columns for the given filter such that the filter no longer has its own column config.',
        ),
        'method' => 'DELETE',
        'url' => '/rest/api/2/filter/{id}/columns',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get share permissions',
        'descr' => array (
            'Returns all share permissions of the given filter.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/filter/{id}/permission',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Add share permission',
        'descr' => array (
            'Adds a share permissions to the given filter. Adding a global permission removes all previous permissions from the filter.',
        ),
        'method' => 'POST',
        'url' => '/rest/api/2/filter/{id}/permission',
        'param' => array (),
        'schema' => '{"id": "https://docs.atlassian.com/jira/REST/schema/share-permission-input#","title": "Share Permission Input","type": "object","properties": {"type": {"type": "string"},"projectId": {"type": "string"},"groupname": {"type": "string"},"projectRoleId": {"type": "string"}},"additionalProperties": false}',
        'example' => '{"type": "group","groupname": "jira-administrators"}',
    ),
    array (
        'title' => 'Get share permission',
        'descr' => array (
            'Returns a single share permission of the given filter.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/filter/{id}/permission/{permissionId}',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Delete share permission',
        'descr' => array (
            'Removes a share permissions from the given filter.',
        ),
        'method' => 'DELETE',
        'url' => '/rest/api/2/filter/{id}/permission/{permission-id}',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get default share scope',
        'descr' => array (
            'Returns the default share scope of the logged-in user.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/filter/defaultShareScope',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Set default share scope',
        'descr' => array (
            'Sets the default share scope of the logged-in user. Available values are GLOBAL and PRIVATE.',
        ),
        'method' => 'PUT',
        'url' => '/rest/api/2/filter/defaultShareScope',
        'param' => array (),
        'schema' => '{"id": "https://docs.atlassian.com/jira/REST/schema/default-share-scope#","title": "Default Share Scope","type": "object","properties": {"scope": {"type": "string","enum": ["GLOBAL","AUTHENTICATED","PRIVATE"]}},"additionalProperties": false}',
        'example' => '{"scope": "GLOBAL"}',
    ),
    array (
        'title' => 'Get favourite filters',
        'descr' => array (
            'Returns the favourite filters of the logged-in user.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/filter/favourite',
        'param' => array (
            array (
                'expand',
                'string',
                'the parameters to expand',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get my filters',
        'descr' => array (
            'Returns the owned filters of the logged-in user.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/filter/my',
        'param' => array (
            array (
                'expand',
                'string',
                'the parameters to expand',
            ),
            array (
                'includeFavourites',
                'boolean',
                '',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Create group',
        'descr' => array (
            'Creates a group by given group parameter',
            'Returns REST representation for the requested group.',
        ),
        'method' => 'POST',
        'url' => '/rest/api/2/group',
        'param' => array (),
        'schema' => '{"id": "https://docs.atlassian.com/jira/REST/schema/add-group#","title": "Add Group","type": "object","properties": {"name": {"type": "string"}},"additionalProperties": false}',
        'example' => '',
    ),
    array (
        'title' => 'Get group',
        'descr' => array (
            'Returns REST representation for the requested group. Allows to get list of active users belonging to thespecified group and its subgroups if "users" expand option is provided. You can page through users list by usingindexes in expand param. For example to get users from index 10 to index 15 use "users[10:15]" expand value. Thiswill return 6 users (if there are at least 16 users in this group). Indexes are 0-based and inclusive.',
            'This resource is deprecated, please use group/member API instead.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/group',
        'param' => array (
            array (
                'groupname',
                'string',
                'A name of requested group.',
            ),
            array (
                'expand',
                'string',
                'List of fields to expand. Currently only available expand is "users".',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Remove group',
        'descr' => array (
            'Deletes a group by given group parameter.',
            'Returns no content',
        ),
        'method' => 'DELETE',
        'url' => '/rest/api/2/group',
        'param' => array (
            array (
                'groupname',
                'string',
                '(mandatory) The name of the group to delete.',
            ),
            array (
                'swapGroup',
                'string',
                'If you delete a group and content is restricted to that group, the content will be hidden from all users.To prevent this, use this parameter to specify a different group to transfer the restrictions (comments and worklogs only) to.',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get users from group',
        'descr' => array (
            'This resource returns a paginated list of users who are members of the specified group and its subgroups.Users in the page are ordered by user names. User of this resource is required to have sysadmin or admin permissions.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/group/member',
        'param' => array (
            array (
                'groupname',
                'string',
                'a name of the group for which members will be returned.',
            ),
            array (
                'includeInactiveUsers',
                'booleanDefault: false',
                'inactive users will be included in the response if set to true.',
            ),
            array (
                'startAt',
                'longDefault: 0',
                'the index of the first user in group to return (0 based).',
            ),
            array (
                'maxResults',
                'intDefault: 50',
                'the maximum number of users to return (max 50).',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Add user to group',
        'descr' => array (
            'Adds given user to a group.',
            'Returns the current state of the group.',
        ),
        'method' => 'POST',
        'url' => '/rest/api/2/group/user',
        'param' => array (
            array (
                'groupname',
                'string',
                'A name of requested group.',
            ),
        ),
        'schema' => '{"id": "https://docs.atlassian.com/jira/REST/schema/update-user-to-group#","title": "Update User To Group","type": "object","properties": {"name": {"type": "string"}},"additionalProperties": false}',
        'example' => '{"name": "charlie"}',
    ),
    array (
        'title' => 'Remove user from group',
        'descr' => array (
            'Removes given user from a group.',
            'Returns no content',
        ),
        'method' => 'DELETE',
        'url' => '/rest/api/2/group/user',
        'param' => array (
            array (
                'groupname',
                'string',
                'A name of requested group.',
            ),
            array (
                'username',
                'string',
                'User to remove from a group',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Find groups',
        'descr' => array (
            'Returns groups with substrings matching a given query. This is mainly for use withthe group picker, so the returned groups contain html to be used as picker suggestions.The groups are also wrapped in a single response object that also contains a header foruse in the picker, specifically Showing X of Y matching groups.',
            'The number of groups returned is limited by the system property "jira.ajax.autocomplete.limit"',
            'The groups will be unique and sorted.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/groups/picker',
        'param' => array (
            array (
                'query',
                'string',
                'a String to match groups agains',
            ),
            array (
                'exclude',
                'string',
                '',
            ),
            array (
                'maxResults',
                'int',
                '',
            ),
            array (
                'userName',
                'string',
                '',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Find users and groups',
        'descr' => array (
            'Returns a list of users and groups matching query with highlighting. This resource cannot be accessedanonymously.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/groupuserpicker',
        'param' => array (
            array (
                'query',
                'string',
                'A string used to search username, Name or e-mail address',
            ),
            array (
                'maxResults',
                'int',
                'the maximum number of users to return (defaults to 50). The maximum allowed value is 1000. Ifyou specify a value that is higher than this number, your search results will be truncated.',
            ),
            array (
                'showAvatar',
                'boolean',
                '',
            ),
            array (
                'fieldId',
                'string',
                'The custom field id, if this request comes from a custom field, such as a user picker. Optional.',
            ),
            array (
                'projectId',
                'string',
                'The list of project ids to further restrict the searchThis parameter can occur multiple times to pass in multiple project ids.Comma separated value is not supported.This parameter is only used when fieldId is present.',
            ),
            array (
                'issueTypeId',
                'string',
                'The list of issue type ids to further restrict the search.This parameter can occur multiple times to pass in multiple issue type ids.Comma separated value is not supported.Special values such as -1 (all standard issue types), -2 (all subtask issue types) are supported.This parameter is only used when fieldId is present.',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Create issue',
        'descr' => array (
            'Creates an issue or a sub-task from a JSON representation.',
            'The fields that can be set on create, in either the fields parameter or the update parameter can be determinedusing the /rest/api/2/issue/createmeta resource.If a field is not configured to appear on the create screen, then it will not be in the createmeta, and a fieldvalidation error will occur if it is submitted.',
            'Creating a sub-task is similar to creating a regular issue, with two important differences:',
            '',
        ),
        'method' => 'POST',
        'url' => '/rest/api/2/issue',
        'param' => array (),
        'schema' => '{"id": "https://docs.atlassian.com/jira/REST/schema/issue-update#","title": "Issue Update","type": "object","properties": {"transition": {"title": "Transition","type": "object","properties": {"id": {"type": "string"},"name": {"type": "string"},"to": {"title": "Status","type": "object","properties": {"statusColor": {"type": "string"},"description": {"type": "string"},"iconUrl": {"type": "string"},"name": {"type": "string"},"id": {"type": "string"},"statusCategory": {"title": "Status Category","type": "object","properties": {"id": {"type": "integer"},"key": {"type": "string"},"colorName": {"type": "string"},"name": {"type": "string"}},"additionalProperties": false}},"additionalProperties": false},"hasScreen": {"type": "boolean"},"fields": {"type": "object","patternProperties": {".+": {"title": "Field Meta","type": "object","properties": {"required": {"type": "boolean"},"schema": {"title": "Json Type","type": "object","properties": {"type": {"type": "string"},"items": {"type": "string"},"system": {"type": "string"},"custom": {"type": "string"},"customId": {"type": "integer"}},"additionalProperties": false},"name": {"type": "string"},"key": {"type": "string"},"autoCompleteUrl": {"type": "string"},"hasDefaultValue": {"type": "boolean"},"operations": {"type": "array","items": {"type": "string"}},"allowedValues": {"type": "array","items": {}}},"additionalProperties": false,"required": ["required"]}},"additionalProperties": false}},"additionalProperties": false},"fields": {"type": "object","patternProperties": {".+": {}},"additionalProperties": false},"update": {"type": "object","patternProperties": {".+": {"type": "array","items": {"title": "Field Operation","type": "object"}}},"additionalProperties": false},"historyMetadata": {"title": "History Metadata","type": "object","properties": {"type": {"type": "string"},"description": {"type": "string"},"descriptionKey": {"type": "string"},"activityDescription": {"type": "string"},"activityDescriptionKey": {"type": "string"},"emailDescription": {"type": "string"},"emailDescriptionKey": {"type": "string"},"actor": {"$ref": "#/definitions/history-metadata-participant"},"generator": {"$ref": "#/definitions/history-metadata-participant"},"cause": {"$ref": "#/definitions/history-metadata-participant"},"extraData": {"type": "object","patternProperties": {".+": {"type": "string"}},"additionalProperties": false}},"additionalProperties": false},"properties": {"type": "array","items": {"title": "Entity Property","type": "object","properties": {"key": {"type": "string"},"value": {}},"additionalProperties": false}}},"definitions": {"history-metadata-participant": {"title": "History Metadata Participant","type": "object","properties": {"id": {"type": "string"},"displayName": {"type": "string"},"displayNameKey": {"type": "string"},"type": {"type": "string"},"avatarUrl": {"type": "string"},"url": {"type": "string"}},"additionalProperties": false}},"additionalProperties": false}',
        'example' => '{"update": {"worklog": [{"add": {"timeSpent": "60m","started": "2011-07-05T11:05:00.000+0000"}}]},"fields": {"project": {"id": "10000"},"summary": "something\'s wrong","issuetype": {"id": "10000"},"assignee": {"name": "homer"},"reporter": {"name": "smithers"},"priority": {"id": "20000"},"labels": ["bugfix","blitz_test"],"timetracking": {"originalEstimate": "10","remainingEstimate": "5"},"security": {"id": "10000"},"versions": [{"id": "10000"}],"environment": "environment","description": "description","duedate": "2011-03-11","fixVersions": [{"id": "10001"}],"components": [{"id": "10000"}],"customfield_30000": ["10000","10002"],"customfield_80000": {"value": "red"},"customfield_20000": "06/Jul/11 3:25 PM","customfield_40000": "this is a text field","customfield_70000": ["jira-administrators","jira-software-users"],"customfield_60000": "jira-software-users","customfield_50000": "this is a text area. big text.","customfield_10000": "09/Jun/81"}}',
    ),
    array (
        'title' => 'Create issues',
        'descr' => array (
            'Creates issues or sub-tasks from a JSON representation.',
            'Creates many issues in one bulk operation.',
            'Creating a sub-task is similar to creating a regular issue. More details can be found in createIssue section:{@link IssueResource#createIssue(IssueUpdateBean)}}',
        ),
        'method' => 'POST',
        'url' => '/rest/api/2/issue/bulk',
        'param' => array (),
        'schema' => '{"id": "https://docs.atlassian.com/jira/REST/schema/issues-update#","title": "Issues Update","type": "object","properties": {"issueUpdates": {"type": "array","items": {"title": "Issue Update","type": "object","properties": {"transition": {"title": "Transition","type": "object","properties": {"id": {"type": "string"},"name": {"type": "string"},"to": {"title": "Status","type": "object","properties": {"statusColor": {"type": "string"},"description": {"type": "string"},"iconUrl": {"type": "string"},"name": {"type": "string"},"id": {"type": "string"},"statusCategory": {"title": "Status Category","type": "object","properties": {"id": {"type": "integer"},"key": {"type": "string"},"colorName": {"type": "string"},"name": {"type": "string"}},"additionalProperties": false}},"additionalProperties": false},"hasScreen": {"type": "boolean"},"fields": {"type": "object","patternProperties": {".+": {"title": "Field Meta","type": "object","properties": {"required": {"type": "boolean"},"schema": {"title": "Json Type","type": "object","properties": {"type": {"type": "string"},"items": {"type": "string"},"system": {"type": "string"},"custom": {"type": "string"},"customId": {"type": "integer"}},"additionalProperties": false},"name": {"type": "string"},"key": {"type": "string"},"autoCompleteUrl": {"type": "string"},"hasDefaultValue": {"type": "boolean"},"operations": {"type": "array","items": {"type": "string"}},"allowedValues": {"type": "array","items": {}}},"additionalProperties": false,"required": ["required"]}},"additionalProperties": false}},"additionalProperties": false},"fields": {"type": "object","patternProperties": {".+": {}},"additionalProperties": false},"update": {"type": "object","patternProperties": {".+": {"type": "array","items": {"title": "Field Operation","type": "object"}}},"additionalProperties": false},"historyMetadata": {"title": "History Metadata","type": "object","properties": {"type": {"type": "string"},"description": {"type": "string"},"descriptionKey": {"type": "string"},"activityDescription": {"type": "string"},"activityDescriptionKey": {"type": "string"},"emailDescription": {"type": "string"},"emailDescriptionKey": {"type": "string"},"actor": {"$ref": "#/definitions/history-metadata-participant"},"generator": {"$ref": "#/definitions/history-metadata-participant"},"cause": {"$ref": "#/definitions/history-metadata-participant"},"extraData": {"type": "object","patternProperties": {".+": {"type": "string"}},"additionalProperties": false}},"additionalProperties": false},"properties": {"type": "array","items": {"title": "Entity Property","type": "object","properties": {"key": {"type": "string"},"value": {}},"additionalProperties": false}}},"additionalProperties": false}}},"definitions": {"history-metadata-participant": {"title": "History Metadata Participant","type": "object","properties": {"id": {"type": "string"},"displayName": {"type": "string"},"displayNameKey": {"type": "string"},"type": {"type": "string"},"avatarUrl": {"type": "string"},"url": {"type": "string"}},"additionalProperties": false}},"additionalProperties": false}',
        'example' => '{"issueUpdates": [{"update": {"worklog": [{"add": {"timeSpent": "60m","started": "2011-07-05T11:05:00.000+0000"}}]},"fields": {"project": {"id": "10000"},"summary": "something\'s wrong","issuetype": {"id": "10000"},"assignee": {"name": "homer"},"reporter": {"name": "smithers"},"priority": {"id": "20000"},"labels": ["bugfix","blitz_test"],"timetracking": {"originalEstimate": "10","remainingEstimate": "5"},"security": {"id": "10000"},"versions": [{"id": "10000"}],"environment": "environment","description": "description","duedate": "2011-03-11","fixVersions": [{"id": "10001"}],"components": [{"id": "10000"}],"customfield_30000": ["10000","10002"],"customfield_80000": {"value": "red"},"customfield_20000": "06/Jul/11 3:25 PM","customfield_40000": "this is a text field","customfield_70000": ["jira-administrators","jira-software-users"],"customfield_60000": "jira-software-users","customfield_50000": "this is a text area. big text.","customfield_10000": "09/Jun/81"}},{"update": {},"fields": {"project": {"id": "1000"},"summary": "something\'s very wrong","issuetype": {"id": "10000"},"assignee": {"name": "jerry"},"reporter": {"name": "kosecki"},"priority": {"id": "20000"},"labels": ["new_release"],"timetracking": {"originalEstimate": "15","remainingEstimate": "5"},"security": {"id": "10000"},"versions": [{"id": "10000"}],"environment": "environment","description": "description","duedate": "2011-04-16","fixVersions": [{"id": "10001"}],"components": [{"id": "10000"}],"customfield_30000": ["10000","10002"],"customfield_80000": {"value": "red"},"customfield_20000": "06/Jul/11 3:25 PM","customfield_40000": "this is a text field","customfield_70000": ["jira-administrators","jira-software-users"],"customfield_60000": "jira-software-users","customfield_50000": "this is a text area. big text.","customfield_10000": "09/Jun/81"}}]}',
    ),
    array (
        'title' => 'Get issue',
        'descr' => array (
            'Returns a full representation of the issue for the given issue key.',
            'An issue JSON consists of the issue key, a collection of fields,a link to the workflow transition sub-resource, and (optionally) the HTML rendered values of any fields that support it(e.g. if wiki syntax is enabled for the description or comments).',
            'The fields param (which can be specified multiple times) gives a comma-separated list of fieldsto include in the response. This can be used to retrieve a subset of fields.A particular field can be excluded by prefixing it with a minus.',
            'By default, all (*all) fields are returned in this get-issue resource. Note: the default is differentwhen doing a jql search -- the default there is just navigable fields (*navigable).',
            'The properties param is similar to fields and specifies a comma-separated list of issueproperties to include. Unlike fields, properties are not included by default. To include them allsend ?properties=*all. You can also include only specified properties or exclude some propertieswith a minus (-) sign.',
            'JIRA will attempt to identify the issue by the issueIdOrKey path parameter. This can be an issue id,or an issue key. If the issue cannot be found via an exact match, JIRA will also look for the issue in a case-insensitive way, orby looking to see if the issue was moved. In either of these cases, the request will proceed as normal (a 302 or other redirectwill not be returned). The issue key contained in the response will indicate the current value of issue\'s key.',
            'The expand param is used to include, hidden by default, parts of response. This can be used to include:',
            '',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/issue/{issueIdOrKey}',
        'param' => array (
            array (
                'fields',
                'string',
                'the list of fields to return for the issue. By default, all fields are returned.',
            ),
            array (
                'expand',
                'string',
                '',
            ),
            array (
                'properties',
                'string',
                'the list of properties to return for the issue. By default no properties are returned.',
            ),
            array (
                'fieldsByKeys',
                'boolean',
                'if true then fields in issues will be referenced by keys instead of ids',
            ),
            array (
                'updateHistory',
                'boolean',
                '',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Delete issue',
        'descr' => array (
            'Delete an issue.',
            'If the issue has subtasks you must set the parameter deleteSubtasks=true to delete the issue.You cannot delete an issue without its subtasks also being deleted.',
        ),
        'method' => 'DELETE',
        'url' => '/rest/api/2/issue/{issueIdOrKey}',
        'param' => array (
            array (
                'deleteSubtasks',
                'string',
                'a String of true or false indicating that any subtasks should also be deleted.  If theissue has no subtasks this parameter is ignored.  If the issue has subtasks and this parameter is missing or false,then the issue will not be deleted and an error will be returned.',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Edit issue',
        'descr' => array (
            'Edits an issue from a JSON representation.',
            'The issue can either be updated by setting explicit the field value(s)or by using an operation to change the field value.',
            'The fields that can be updated, in either the fields parameter or the update parameter, can be determinedusing the /rest/api/2/issue/{issueIdOrKey}/editmeta resource.If a field is not configured to appear on the edit screen, then it will not be in the editmeta, and a fieldvalidation error will occur if it is submitted; however connect add-on with admin scope areable to override the screen security.',
            'If the issue cannot be edited in JIRA due to its workflow status (i.e. it is closed), then you will not be able to edit it with this method.',
            'Specifying a "field_id": field_value in the "fields" is a shorthand for a "set" operation in the "update" section.Field should appear either in "fields" or "update", not in both.',
        ),
        'method' => 'PUT',
        'url' => '/rest/api/2/issue/{issueIdOrKey}',
        'param' => array (
            array (
                'notifyUsers',
                'booleanDefault: true',
                'send the email with notification that the issue was updated to users that watch it.Admin or project admin permissions are required to disable the notification.',
            ),
            array (
                'overrideScreenSecurity',
                'booleanDefault: false',
                'allows to update fields that are not on the screen.Only connect add-on users with admin scope permission are allowed to use this flag.',
            ),
            array (
                'overrideEditableFlag',
                'booleanDefault: false',
                'Updates the issue even if the issue is not editable due to being in a status with jira.issue.editable set to false or missing.Only connect add-on users with admin scope permission are allowed to use this flag.',
            ),
        ),
        'schema' => '{"id": "https://docs.atlassian.com/jira/REST/schema/issue-update#","title": "Issue Update","type": "object","properties": {"transition": {"title": "Transition","type": "object","properties": {"id": {"type": "string"},"name": {"type": "string"},"to": {"title": "Status","type": "object","properties": {"statusColor": {"type": "string"},"description": {"type": "string"},"iconUrl": {"type": "string"},"name": {"type": "string"},"id": {"type": "string"},"statusCategory": {"title": "Status Category","type": "object","properties": {"id": {"type": "integer"},"key": {"type": "string"},"colorName": {"type": "string"},"name": {"type": "string"}},"additionalProperties": false}},"additionalProperties": false},"hasScreen": {"type": "boolean"},"fields": {"type": "object","patternProperties": {".+": {"title": "Field Meta","type": "object","properties": {"required": {"type": "boolean"},"schema": {"title": "Json Type","type": "object","properties": {"type": {"type": "string"},"items": {"type": "string"},"system": {"type": "string"},"custom": {"type": "string"},"customId": {"type": "integer"}},"additionalProperties": false},"name": {"type": "string"},"key": {"type": "string"},"autoCompleteUrl": {"type": "string"},"hasDefaultValue": {"type": "boolean"},"operations": {"type": "array","items": {"type": "string"}},"allowedValues": {"type": "array","items": {}}},"additionalProperties": false,"required": ["required"]}},"additionalProperties": false}},"additionalProperties": false},"fields": {"type": "object","patternProperties": {".+": {}},"additionalProperties": false},"update": {"type": "object","patternProperties": {".+": {"type": "array","items": {"title": "Field Operation","type": "object"}}},"additionalProperties": false},"historyMetadata": {"title": "History Metadata","type": "object","properties": {"type": {"type": "string"},"description": {"type": "string"},"descriptionKey": {"type": "string"},"activityDescription": {"type": "string"},"activityDescriptionKey": {"type": "string"},"emailDescription": {"type": "string"},"emailDescriptionKey": {"type": "string"},"actor": {"$ref": "#/definitions/history-metadata-participant"},"generator": {"$ref": "#/definitions/history-metadata-participant"},"cause": {"$ref": "#/definitions/history-metadata-participant"},"extraData": {"type": "object","patternProperties": {".+": {"type": "string"}},"additionalProperties": false}},"additionalProperties": false},"properties": {"type": "array","items": {"title": "Entity Property","type": "object","properties": {"key": {"type": "string"},"value": {}},"additionalProperties": false}}},"definitions": {"history-metadata-participant": {"title": "History Metadata Participant","type": "object","properties": {"id": {"type": "string"},"displayName": {"type": "string"},"displayNameKey": {"type": "string"},"type": {"type": "string"},"avatarUrl": {"type": "string"},"url": {"type": "string"}},"additionalProperties": false}},"additionalProperties": false}',
        'example' => '{"update":{"summary":[{"set":"Bug in business logic"}],"components":[{"set":""}],"timetracking":[{"edit":{"originalEstimate":"1w 1d","remainingEstimate":"4d"}}],"labels":[{"add":"triaged"},{"remove":"blocker"}]},"fields":{"summary":"This is a shorthand for a set operation on the summary field","customfield_10010":1,"customfield_10000":"This is a shorthand for a set operation on a text custom field"},"historyMetadata":{"type":"myplugin:type","description":"text description","descriptionKey":"plugin.changereason.i18.key","activityDescription":"text description","activityDescriptionKey":"plugin.activity.i18.key","actor":{"id":"tony","displayName":"Tony","type":"mysystem-user","avatarUrl":"http://mysystem/avatar/tony.jpg","url":"http://mysystem/users/tony"},"generator":{"id":"mysystem-1","type":"mysystem-application"},"cause":{"id":"myevent","type":"mysystem-event"},"extraData":{"keyvalue":"extra data","goes":"here"}},"properties":[{"key":"key1","value":\'properties\' : \'can be set at issue create or update time\'},{"key":"key2","value":\'and\' : \'there can be multiple properties\'}]}',
    ),
    array (
        'title' => 'Assign',
        'descr' => array (
            'Assigns an issue to a user.You can use this resource to assign issues when the user submitting the request has the assign permission but not theedit issue permission.If the name is "-1" automatic assignee is used.  A null name will remove the assignee.',
        ),
        'method' => 'PUT',
        'url' => '/rest/api/2/issue/{issueIdOrKey}/assignee',
        'param' => array (),
        'schema' => '{"id": "https://docs.atlassian.com/jira/REST/schema/user#","title": "User","type": "object","properties": {"key": {"type": "string"},"accountId": {"type": "string"},"name": {"type": "string"},"emailAddress": {"type": "string"},"avatarUrls": {"type": "object","patternProperties": {".+": {"type": "string","format": "uri"}},"additionalProperties": false},"displayName": {"type": "string"},"active": {"type": "boolean"},"timeZone": {"type": "string"},"locale": {"type": "string"},"groups": {"$ref": "#/definitions/simple-list-wrapper"},"applicationRoles": {"$ref": "#/definitions/simple-list-wrapper"}},"definitions": {"simple-list-wrapper": {"title": "Simple List Wrapper","type": "object","properties": {"size": {"type": "integer"},"max-results": {"type": "integer"},"items": {"type": "array","items": {"title": "Group","type": "object","properties": {"name": {"type": "string"}},"additionalProperties": false}}},"additionalProperties": false,"required": ["size"]}},"additionalProperties": false,"required": ["active"]}',
        'example' => '{"name": "harry"}',
    ),
    array (
        'title' => 'Get comments',
        'descr' => array (
            'Returns all comments for an issue.',
            'Results can be ordered by the "created" field which means the date a comment was added.',
            '',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/issue/{issueIdOrKey}/comment',
        'param' => array (
            array (
                'startAt',
                'long',
                'the page offset, if not specified then defaults to 0',
            ),
            array (
                'maxResults',
                'int',
                'how many results on the page should be included. Defaults to 50.',
            ),
            array (
                'orderBy',
                'string',
                'ordering of the results.',
            ),
            array (
                'expand',
                'string',
                'optional flags: renderedBody (provides body rendered in HTML)',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Add comment',
        'descr' => array (
            'Adds a new comment to an issue.',
        ),
        'method' => 'POST',
        'url' => '/rest/api/2/issue/{issueIdOrKey}/comment',
        'param' => array (
            array (
                'expand',
                'string',
                'optional flags: renderedBody (provides body rendered in HTML)',
            ),
        ),
        'schema' => '{"id": "https://docs.atlassian.com/jira/REST/schema/comment#","title": "Comment","type": "object","properties": {"id": {"type": "string"},"author": {"$ref": "#/definitions/user"},"body": {"type": "string"},"renderedBody": {"type": "string"},"updateAuthor": {"$ref": "#/definitions/user"},"created": {"type": "string"},"updated": {"type": "string"},"visibility": {"title": "Visibility","type": "object","properties": {"type": {"type": "string","enum": ["group","role"]},"value": {"type": "string"}},"additionalProperties": false},"properties": {"type": "array","items": {"title": "Entity Property","type": "object","properties": {"key": {"type": "string"},"value": {}},"additionalProperties": false}}},"definitions": {"user": {"title": "User","type": "object","properties": {"name": {"type": "string"},"key": {"type": "string"},"accountId": {"type": "string"},"emailAddress": {"type": "string"},"avatarUrls": {"type": "object","patternProperties": {".+": {"type": "string"}},"additionalProperties": false},"displayName": {"type": "string"},"active": {"type": "boolean"},"timeZone": {"type": "string"}},"additionalProperties": false,"required": ["active"]}},"additionalProperties": false}',
        'example' => '{"body": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget venenatis elit. Duis eu justo eget augue iaculis fermentum. Sed semper quam laoreet nisi egestas at posuere augue semper.","visibility": {"type": "role","value": "Administrators"}}',
    ),
    array (
        'title' => 'Update comment',
        'descr' => array (
            'Updates an existing comment using its JSON representation.',
        ),
        'method' => 'PUT',
        'url' => '/rest/api/2/issue/{issueIdOrKey}/comment/{id}',
        'param' => array (
            array (
                'expand',
                'string',
                'optional flags: renderedBody (provides body rendered in HTML)',
            ),
        ),
        'schema' => '{"id": "https://docs.atlassian.com/jira/REST/schema/comment#","title": "Comment","type": "object","properties": {"id": {"type": "string"},"author": {"$ref": "#/definitions/user"},"body": {"type": "string"},"renderedBody": {"type": "string"},"updateAuthor": {"$ref": "#/definitions/user"},"created": {"type": "string"},"updated": {"type": "string"},"visibility": {"title": "Visibility","type": "object","properties": {"type": {"type": "string","enum": ["group","role"]},"value": {"type": "string"}},"additionalProperties": false},"properties": {"type": "array","items": {"title": "Entity Property","type": "object","properties": {"key": {"type": "string"},"value": {}},"additionalProperties": false}}},"definitions": {"user": {"title": "User","type": "object","properties": {"name": {"type": "string"},"key": {"type": "string"},"accountId": {"type": "string"},"emailAddress": {"type": "string"},"avatarUrls": {"type": "object","patternProperties": {".+": {"type": "string"}},"additionalProperties": false},"displayName": {"type": "string"},"active": {"type": "boolean"},"timeZone": {"type": "string"}},"additionalProperties": false,"required": ["active"]}},"additionalProperties": false}',
        'example' => '{"body": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget venenatis elit. Duis eu justo eget augue iaculis fermentum. Sed semper quam laoreet nisi egestas at posuere augue semper.","visibility": {"type": "role","value": "Administrators"}}',
    ),
    array (
        'title' => 'Delete comment',
        'descr' => array (
            'Deletes an existing comment .',
        ),
        'method' => 'DELETE',
        'url' => '/rest/api/2/issue/{issueIdOrKey}/comment/{id}',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get comment',
        'descr' => array (
            'Returns a single comment.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/issue/{issueIdOrKey}/comment/{id}',
        'param' => array (
            array (
                'expand',
                'string',
                'optional flags: renderedBody (provides body rendered in HTML)',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get edit issue meta',
        'descr' => array (
            'Returns the meta data for editing an issue.',
            'The fields in the editmeta correspond to the fields in the edit screen for the issue.Fields not in the screen will not be in the editmeta unless overrideScreenSecurity param is set to true.',
            'If the issue cannot be edited in JIRA due to its workflow status (i.e. it is closed), then no fields will be returned,unless overrideEditableFlag is true.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/issue/{issueIdOrKey}/editmeta',
        'param' => array (
            array (
                'overrideScreenSecurity',
                'booleanDefault: false',
                'also return the edit meta data about fields that are not on the screen.Only connect add-on users with admin scope permission are allowed to use this flag.',
            ),
            array (
                'overrideEditableFlag',
                'booleanDefault: false',
                'also return the edit meta data about fields that are not editable due to being in a status with the jira.issue.editable flag set to false or missing.Only connect add-on users with admin scope permission are allowed to use this flag.',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Notify',
        'descr' => array (
            'Sends a notification (email) to the list or recipients defined in the request.',
        ),
        'method' => 'POST',
        'url' => '/rest/api/2/issue/{issueIdOrKey}/notify',
        'param' => array (),
        'schema' => '{"id": "https://docs.atlassian.com/jira/REST/schema/notification#","title": "Notification","type": "object","properties": {"subject": {"type": "string"},"textBody": {"type": "string"},"htmlBody": {"type": "string"},"to": {"title": "To","type": "object","properties": {"reporter": {"type": "boolean"},"assignee": {"type": "boolean"},"watchers": {"type": "boolean"},"voters": {"type": "boolean"},"users": {"type": "array","items": {"title": "User","type": "object","properties": {"name": {"type": "string"},"key": {"type": "string"},"accountId": {"type": "string"},"emailAddress": {"type": "string"},"avatarUrls": {"type": "object","patternProperties": {".+": {"type": "string"}},"additionalProperties": false},"displayName": {"type": "string"},"active": {"type": "boolean"},"timeZone": {"type": "string"}},"additionalProperties": false,"required": ["active"]}},"groups": {"type": "array","items": {"$ref": "#/definitions/group"}}},"additionalProperties": false,"required": ["reporter","assignee","watchers","voters"]},"restrict": {"title": "Restrict","type": "object","properties": {"groups": {"type": "array","items": {"$ref": "#/definitions/group"}},"permissions": {"type": "array","items": {"title": "Permission","type": "object","properties": {"id": {"type": "string"},"key": {"type": "string"}},"additionalProperties": false}}},"additionalProperties": false}},"definitions": {"group": {"title": "Group","type": "object","properties": {"name": {"type": "string"}},"additionalProperties": false}},"additionalProperties": false}',
        'example' => '{"subject": "Duis eu justo eget augue iaculis fermentum.","textBody": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget venenatis elit. Duis eu justo eget augue iaculis fermentum. Sed semper quam laoreet nisi egestas at posuere augue semper.","htmlBody": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget venenatis elit. Duis eu justo eget augue iaculis fermentum. Sed semper quam laoreet nisi egestas at posuere augue semper.","to": {"reporter": false,"assignee": false,"watchers": true,"voters": true,"users": [{"name": "fred","active": false}],"groups": [{"name": "notification-group","self": "http://www.example.com/jira/rest/api/2/group?groupname=notification-group"}]},"restrict": {"groups": [{"name": "notification-group","self": "http://www.example.com/jira/rest/api/2/group?groupname=notification-group"}],"permissions": [{"id": "10","key": "BROWSE"}]}}',
    ),
    array (
        'title' => 'Get remote issue links',
        'descr' => array (
            'A REST sub-resource representing the remote issue links on the issue.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/issue/{issueIdOrKey}/remotelink',
        'param' => array (
            array (
                'globalId',
                'string',
                'The id of the remote issue link to be returned.  If null (not provided) all remote links for theissue are returned.For a fullexplanation of Issue Link fields please refer tohttps://developer.atlassian.com/display/JIRADEV/Fields+in+Remote+Issue+Links',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Create or update remote issue link',
        'descr' => array (
            'Creates or updates a remote issue link from a JSON representation. If a globalId is provided and a remote issue linkexists with that globalId, the remote issue link is updated. Otherwise, the remote issue link is created.',
        ),
        'method' => 'POST',
        'url' => '/rest/api/2/issue/{issueIdOrKey}/remotelink',
        'param' => array (),
        'schema' => '{"id": "https://docs.atlassian.com/jira/REST/schema/remote-issue-link-create-or-update-request#","title": "Remote Issue Link Create Or Update Request","type": "object","properties": {"globalId": {"type": "string"},"application": {"title": "Application","type": "object","properties": {"type": {"type": "string"},"name": {"type": "string"}},"additionalProperties": false},"relationship": {"type": "string"},"object": {"title": "Remote Object","type": "object","properties": {"url": {"type": "string"},"title": {"type": "string"},"summary": {"type": "string"},"icon": {"$ref": "#/definitions/icon"},"status": {"title": "Status","type": "object","properties": {"resolved": {"type": "boolean"},"icon": {"$ref": "#/definitions/icon"}},"additionalProperties": false}},"additionalProperties": false}},"definitions": {"icon": {"title": "Icon","type": "object","properties": {"url16x16": {"type": "string"},"title": {"type": "string"},"link": {"type": "string"}},"additionalProperties": false}},"additionalProperties": false}',
        'example' => '{"globalId": "system=http://www.mycompany.com/support&id=1","application": {"type": "com.acme.tracker","name": "My Acme Tracker"},"relationship": "causes","object": {"url": "http://www.mycompany.com/support?id=1","title": "TSTSUP-111","summary": "Crazy customer support issue","icon": {"url16x16": "http://www.mycompany.com/support/ticket.png","title": "Support Ticket"},"status": {"resolved": true,"icon": {"url16x16": "http://www.mycompany.com/support/resolved.png","title": "Case Closed","link": "http://www.mycompany.com/support?id=1&details=closed"}}}}',
    ),
    array (
        'title' => 'Delete remote issue link by global id',
        'descr' => array (
            'Delete the remote issue link with the given global id on the issue.',
        ),
        'method' => 'DELETE',
        'url' => '/rest/api/2/issue/{issueIdOrKey}/remotelink',
        'param' => array (
            array (
                'globalId',
                'string',
                'the global id of the remote issue link',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get remote issue link by id',
        'descr' => array (
            'Get the remote issue link with the given id on the issue.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/issue/{issueIdOrKey}/remotelink/{linkId}',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Update remote issue link',
        'descr' => array (
            'Updates a remote issue link from a JSON representation. Any fields not provided are set to null.',
        ),
        'method' => 'PUT',
        'url' => '/rest/api/2/issue/{issueIdOrKey}/remotelink/{linkId}',
        'param' => array (),
        'schema' => '{"id": "https://docs.atlassian.com/jira/REST/schema/remote-issue-link-create-or-update-request#","title": "Remote Issue Link Create Or Update Request","type": "object","properties": {"globalId": {"type": "string"},"application": {"title": "Application","type": "object","properties": {"type": {"type": "string"},"name": {"type": "string"}},"additionalProperties": false},"relationship": {"type": "string"},"object": {"title": "Remote Object","type": "object","properties": {"url": {"type": "string"},"title": {"type": "string"},"summary": {"type": "string"},"icon": {"$ref": "#/definitions/icon"},"status": {"title": "Status","type": "object","properties": {"resolved": {"type": "boolean"},"icon": {"$ref": "#/definitions/icon"}},"additionalProperties": false}},"additionalProperties": false}},"definitions": {"icon": {"title": "Icon","type": "object","properties": {"url16x16": {"type": "string"},"title": {"type": "string"},"link": {"type": "string"}},"additionalProperties": false}},"additionalProperties": false}',
        'example' => '{"globalId": "system=http://www.mycompany.com/support&id=1","application": {"type": "com.acme.tracker","name": "My Acme Tracker"},"relationship": "causes","object": {"url": "http://www.mycompany.com/support?id=1","title": "TSTSUP-111","summary": "Crazy customer support issue","icon": {"url16x16": "http://www.mycompany.com/support/ticket.png","title": "Support Ticket"},"status": {"resolved": true,"icon": {"url16x16": "http://www.mycompany.com/support/resolved.png","title": "Case Closed","link": "http://www.mycompany.com/support?id=1&details=closed"}}}}',
    ),
    array (
        'title' => 'Delete remote issue link by id',
        'descr' => array (
            'Delete the remote issue link with the given id on the issue.',
        ),
        'method' => 'DELETE',
        'url' => '/rest/api/2/issue/{issueIdOrKey}/remotelink/{linkId}',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get transitions',
        'descr' => array (
            'Get a list of the transitions possible for this issue by the current user, along with fields that are required and their types.',
            'Fields will only be returned if expand=transitions.fields.',
            'The fields in the metadata correspond to the fields in the transition screen for that transition.Fields not in the screen will not be in the metadata.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/issue/{issueIdOrKey}/transitions',
        'param' => array (
            array (
                'transitionId',
                'string',
                '',
            ),
            array (
                'skipRemoteOnlyCondition',
                'booleanDefault: false',
                'flag to skip evaluation of {@link RemoteOnlyCondition}, can only be used by add-on users',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Do transition',
        'descr' => array (
            'Perform a transition on an issue.When performing the transition you can update or set other issue fields.',
            'The fields that can be set on transtion, in either the fields parameter or the update parameter can be determinedusing the /rest/api/2/issue/{issueIdOrKey}/transitions?expand=transitions.fields resource.If a field is not configured to appear on the transition screen, then it will not be in the transition metadata, and a fieldvalidation error will occur if it is submitted.',
        ),
        'method' => 'POST',
        'url' => '/rest/api/2/issue/{issueIdOrKey}/transitions',
        'param' => array (),
        'schema' => '{"id": "https://docs.atlassian.com/jira/REST/schema/issue-update#","title": "Issue Update","type": "object","properties": {"transition": {"title": "Transition","type": "object","properties": {"id": {"type": "string"},"name": {"type": "string"},"to": {"title": "Status","type": "object","properties": {"statusColor": {"type": "string"},"description": {"type": "string"},"iconUrl": {"type": "string"},"name": {"type": "string"},"id": {"type": "string"},"statusCategory": {"title": "Status Category","type": "object","properties": {"id": {"type": "integer"},"key": {"type": "string"},"colorName": {"type": "string"},"name": {"type": "string"}},"additionalProperties": false}},"additionalProperties": false},"hasScreen": {"type": "boolean"},"fields": {"type": "object","patternProperties": {".+": {"title": "Field Meta","type": "object","properties": {"required": {"type": "boolean"},"schema": {"title": "Json Type","type": "object","properties": {"type": {"type": "string"},"items": {"type": "string"},"system": {"type": "string"},"custom": {"type": "string"},"customId": {"type": "integer"}},"additionalProperties": false},"name": {"type": "string"},"key": {"type": "string"},"autoCompleteUrl": {"type": "string"},"hasDefaultValue": {"type": "boolean"},"operations": {"type": "array","items": {"type": "string"}},"allowedValues": {"type": "array","items": {}}},"additionalProperties": false,"required": ["required"]}},"additionalProperties": false}},"additionalProperties": false},"fields": {"type": "object","patternProperties": {".+": {}},"additionalProperties": false},"update": {"type": "object","patternProperties": {".+": {"type": "array","items": {"title": "Field Operation","type": "object"}}},"additionalProperties": false},"historyMetadata": {"title": "History Metadata","type": "object","properties": {"type": {"type": "string"},"description": {"type": "string"},"descriptionKey": {"type": "string"},"activityDescription": {"type": "string"},"activityDescriptionKey": {"type": "string"},"emailDescription": {"type": "string"},"emailDescriptionKey": {"type": "string"},"actor": {"$ref": "#/definitions/history-metadata-participant"},"generator": {"$ref": "#/definitions/history-metadata-participant"},"cause": {"$ref": "#/definitions/history-metadata-participant"},"extraData": {"type": "object","patternProperties": {".+": {"type": "string"}},"additionalProperties": false}},"additionalProperties": false},"properties": {"type": "array","items": {"title": "Entity Property","type": "object","properties": {"key": {"type": "string"},"value": {}},"additionalProperties": false}}},"definitions": {"history-metadata-participant": {"title": "History Metadata Participant","type": "object","properties": {"id": {"type": "string"},"displayName": {"type": "string"},"displayNameKey": {"type": "string"},"type": {"type": "string"},"avatarUrl": {"type": "string"},"url": {"type": "string"}},"additionalProperties": false}},"additionalProperties": false}',
        'example' => '{"update": {"comment": [{"add": {"body": "Bug has been fixed."}}]},"fields": {"assignee": {"name": "bob"},"resolution": {"name": "Fixed"}},"transition": {"id": "5"},"historyMetadata": {"type": "myplugin:type","description": "text description","descriptionKey": "plugin.changereason.i18.key","activityDescription": "text description","activityDescriptionKey": "plugin.activity.i18.key","actor": {"id": "tony","displayName": "Tony","type": "mysystem-user","avatarUrl": "http://mysystem/avatar/tony.jpg","url": "http://mysystem/users/tony"},"generator": {"id": "mysystem-1","type": "mysystem-application"},"cause": {"id": "myevent","type": "mysystem-event"},"extraData": {"keyvalue": "extra data","goes": "here"}}}',
    ),
    array (
        'title' => 'Remove vote',
        'descr' => array (
            'Remove your vote from an issue. (i.e. "unvote")',
        ),
        'method' => 'DELETE',
        'url' => '/rest/api/2/issue/{issueIdOrKey}/votes',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Add vote',
        'descr' => array (
            'Cast your vote in favour of an issue.',
        ),
        'method' => 'POST',
        'url' => '/rest/api/2/issue/{issueIdOrKey}/votes',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get votes',
        'descr' => array (
            'A REST sub-resource representing the voters on the issue.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/issue/{issueIdOrKey}/votes',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get issue watchers',
        'descr' => array (
            'Returns the list of watchers for the issue with the given key.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/issue/{issueIdOrKey}/watchers',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Add watcher',
        'descr' => array (
            'Adds a user to an issue\'s watcher list.',
        ),
        'method' => 'POST',
        'url' => '/rest/api/2/issue/{issueIdOrKey}/watchers',
        'param' => array (),
        'schema' => '{"id": "https://docs.atlassian.com/jira/REST/schema/string#","title": "String","type": "string"}',
        'example' => '"fred"',
    ),
    array (
        'title' => 'Remove watcher',
        'descr' => array (
            'Removes a user from an issue\'s watcher list.',
        ),
        'method' => 'DELETE',
        'url' => '/rest/api/2/issue/{issueIdOrKey}/watchers',
        'param' => array (
            array (
                'username',
                'string',
                'a String containing the name of the user to remove from the watcher list. Must not be null.',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get issue worklog',
        'descr' => array (
            'Returns all work logs for an issue.Note: Work logs won\'t be returned if the Log work field is hidden for the project.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/issue/{issueIdOrKey}/worklog',
        'param' => array (
            array (
                'expand',
                'stringDefault: ',
                'optional comma separated list of parameters to expand:  properties (provides worklog properties).',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Add worklog',
        'descr' => array (
            'Adds a new worklog entry to an issue.',
        ),
        'method' => 'POST',
        'url' => '/rest/api/2/issue/{issueIdOrKey}/worklog',
        'param' => array (
            array (
                'adjustEstimate',
                'string',
                '(optional) allows you to provide specific instructions to update the remaining time estimate of the issue.  Valid values are"new" - sets the estimate to a specific value"leave"- leaves the estimate as is"manual" - specify a specific amount to increase remaining estimate by"auto"- Default option.  Will automatically adjust the value based on the new timeSpent specified on the worklog ',
            ),
            array (
                'newEstimate',
                'string',
                '(required when "new" is selected for adjustEstimate) the new value for the remaining estimate field. e.g. "2d"',
            ),
            array (
                'reduceBy',
                'string',
                '(required when "manual" is selected for adjustEstimate) the amount to reduce the remaining estimate by e.g. "2d"',
            ),
            array (
                'expand',
                'stringDefault: ',
                'optional comma separated list of parameters to expand:  properties (provides worklog properties).',
            ),
        ),
        'schema' => '{"id": "https://docs.atlassian.com/jira/REST/schema/worklog#","title": "Worklog","type": "object","properties": {"author": {"$ref": "#/definitions/user"},"updateAuthor": {"$ref": "#/definitions/user"},"comment": {"type": "string"},"created": {"type": "string"},"updated": {"type": "string"},"visibility": {"title": "Visibility","type": "object","properties": {"type": {"type": "string","enum": ["group","role"]},"value": {"type": "string"}},"additionalProperties": false},"started": {"type": "string"},"timeSpent": {"type": "string"},"timeSpentSeconds": {"type": "integer"},"id": {"type": "string"},"issueId": {"type": "string"},"properties": {"type": "array","items": {"title": "Entity Property","type": "object","properties": {"key": {"type": "string"},"value": {}},"additionalProperties": false}}},"definitions": {"user": {"title": "User","type": "object","properties": {"name": {"type": "string"},"key": {"type": "string"},"accountId": {"type": "string"},"emailAddress": {"type": "string"},"avatarUrls": {"type": "object","patternProperties": {".+": {"type": "string"}},"additionalProperties": false},"displayName": {"type": "string"},"active": {"type": "boolean"},"timeZone": {"type": "string"}},"additionalProperties": false,"required": ["active"]}},"additionalProperties": false}',
        'example' => '{"comment": "I did some work here.","visibility": {"type": "group","value": "jira-developers"},"started": "2017-02-21T01:03:28.187+0000","timeSpentSeconds": 12000}',
    ),
    array (
        'title' => 'Get worklog',
        'descr' => array (
            'Returns a specific worklog.Note: The work log won\'t be returned if the Log work field is hidden for the project.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/issue/{issueIdOrKey}/worklog/{id}',
        'param' => array (
            array (
                'expand',
                'stringDefault: ',
                'optional comma separated list of parameters to expand:  properties (provides worklog properties).',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Update worklog',
        'descr' => array (
            'Updates an existing worklog entry.',
            'Note that:',
            '',
        ),
        'method' => 'PUT',
        'url' => '/rest/api/2/issue/{issueIdOrKey}/worklog/{id}',
        'param' => array (
            array (
                'adjustEstimate',
                'string',
                '(optional) allows you to provide specific instructions to update the remaining time estimate of the issue.  Valid values are"new" - sets the estimate to a specific value"leave"- leaves the estimate as is"auto"- Default option.  Will automatically adjust the value based on the new timeSpent specified on the worklog ',
            ),
            array (
                'newEstimate',
                'string',
                '(required when "new" is selected for adjustEstimate) the new value for the remaining estimate field.',
            ),
            array (
                'expand',
                'stringDefault: ',
                'optional comma separated list of parameters to expand:  properties (provides worklog properties).',
            ),
        ),
        'schema' => '{"id": "https://docs.atlassian.com/jira/REST/schema/worklog#","title": "Worklog","type": "object","properties": {"author": {"$ref": "#/definitions/user"},"updateAuthor": {"$ref": "#/definitions/user"},"comment": {"type": "string"},"created": {"type": "string"},"updated": {"type": "string"},"visibility": {"title": "Visibility","type": "object","properties": {"type": {"type": "string","enum": ["group","role"]},"value": {"type": "string"}},"additionalProperties": false},"started": {"type": "string"},"timeSpent": {"type": "string"},"timeSpentSeconds": {"type": "integer"},"id": {"type": "string"},"issueId": {"type": "string"},"properties": {"type": "array","items": {"title": "Entity Property","type": "object","properties": {"key": {"type": "string"},"value": {}},"additionalProperties": false}}},"definitions": {"user": {"title": "User","type": "object","properties": {"name": {"type": "string"},"key": {"type": "string"},"accountId": {"type": "string"},"emailAddress": {"type": "string"},"avatarUrls": {"type": "object","patternProperties": {".+": {"type": "string"}},"additionalProperties": false},"displayName": {"type": "string"},"active": {"type": "boolean"},"timeZone": {"type": "string"}},"additionalProperties": false,"required": ["active"]}},"additionalProperties": false}',
        'example' => '{"comment": "I did some work here.","visibility": {"type": "group","value": "jira-developers"},"started": "2017-02-21T01:03:28.187+0000","timeSpentSeconds": 12000}',
    ),
    array (
        'title' => 'Delete worklog',
        'descr' => array (
            'Deletes an existing worklog entry.',
        ),
        'method' => 'DELETE',
        'url' => '/rest/api/2/issue/{issueIdOrKey}/worklog/{id}',
        'param' => array (
            array (
                'adjustEstimate',
                'string',
                '(optional) allows you to provide specific instructions to update the remaining time estimate of the issue.  Valid values are"new" - sets the estimate to a specific value"leave"- leaves the estimate as is"manual" - specify a specific amount to increase remaining estimate by"auto"- Default option.  Will automatically adjust the value based on the new timeSpent specified on the worklog ',
            ),
            array (
                'newEstimate',
                'string',
                '(required when "new" is selected for adjustEstimate) the new value for the remaining estimate field. e.g. "2d"',
            ),
            array (
                'increaseBy',
                'string',
                '(required when "manual" is selected for adjustEstimate) the amount to increase the remaining estimate by e.g. "2d"',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get create issue meta',
        'descr' => array (
            'Returns the meta data for creating issues. This includes the available projects, issue types and fields,including field types and whether or not those fields are required.Projects will not be returned if the user does not have permission to create issues in that project.',
            'The fields in the createmeta correspond to the fields in the create screen for the project/issuetype.Fields not in the screen will not be in the createmeta.',
            'Fields will only be returned if expand=projects.issuetypes.fields.',
            'The results can be filtered by project and/or issue type, given by the query params.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/issue/createmeta',
        'param' => array (
            array (
                'projectIds',
                'string',
                'combined with the projectKeys param, lists the projects with which to filter the results. If absent, all projects are returned.This parameter can be specified multiple times, and/or be a comma-separated list.Specifiying a project that does not exist (or that you cannot create issues in) is not an error, but it will not be in the results.',
            ),
            array (
                'projectKeys',
                'string',
                'combined with the projectIds param, lists the projects with which to filter the results. If null, all projects are returned.This parameter can be specified multiple times, and/or be a comma-separated list.Specifiying a project that does not exist (or that you cannot create issues in) is not an error, but it will not be in the results.',
            ),
            array (
                'issuetypeIds',
                'string',
                'combinded with issuetypeNames, lists the issue types with which to filter the results. If null, all issue types are returned.This parameter can be specified multiple times, and/or be a comma-separated list.Specifiying an issue type that does not exist is not an error.',
            ),
            array (
                'issuetypeNames',
                'string',
                'combinded with issuetypeIds, lists the issue types with which to filter the results. If null, all issue types are returned.This parameter can be specified multiple times, but is NOT interpreted as a comma-separated list.Specifiying an issue type that does not exist is not an error.',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get issue picker resource',
        'descr' => array (
            'Returns suggested issues which match the auto-completion query for the user which executes this request. This RESTmethod will check the user\'s history and the user\'s browsing context and select this issues, which match the query.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/issue/picker',
        'param' => array (
            array (
                'query',
                'string',
                'the query.',
            ),
            array (
                'currentJQL',
                'string',
                'the JQL in context of which the request is executed. Only issues which match this JQL query will be included in results.',
            ),
            array (
                'currentIssueKey',
                'string',
                'the key of the issue in context of which the request is executed. The issue which is in context will not be included in the auto-completion result, even if it matches the query.',
            ),
            array (
                'currentProjectId',
                'string',
                'the id of the project in context of which the request is executed. Suggested issues will be only from this project.',
            ),
            array (
                'showSubTasks',
                'boolean',
                'if set to false, subtasks will not be included in the list.',
            ),
            array (
                'showSubTaskParent',
                'boolean',
                'if set to false and request is executed in context of a subtask, the parent issue will not be included in the auto-completion result, even if it matches the query.',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Add attachment',
        'descr' => array (
            'Add one or more attachments to an issue.',
            'This resource expects a multipart post. The media-type multipart/form-data is defined in RFC 1867. Most clientlibraries have classes that make dealing with multipart posts simple. For instance, in Java the Apache HTTP Componentslibrary provides aMultiPartEntitythat makes it simple to submit a multipart POST.',
            'In order to protect against XSRF attacks, because this method accepts multipart/form-data, it has XSRF protectionon it.  This means you must submit a header of X-Atlassian-Token: no-check with the request, otherwise it will beblocked.',
            'The name of the multipart/form-data parameter that contains attachments must be "file"',
            'A simple example to upload a file called "myfile.txt" to issue REST-123:',
            '',
        ),
        'method' => 'POST',
        'url' => '/rest/api/2/issue/{issueIdOrKey}/attachments',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get properties keys',
        'descr' => array (
            'Returns the keys of all properties for the issue identified by the key or by the id.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/issue/{issueIdOrKey}/properties',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Delete property',
        'descr' => array (
            'Removes the property from the issue identified by the key or by the id. Ths user removing the property is requiredto have permissions to edit the issue.',
        ),
        'method' => 'DELETE',
        'url' => '/rest/api/2/issue/{issueIdOrKey}/properties/{propertyKey}',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Set property',
        'descr' => array (
            'Sets the value of the specified issue\'s property.',
            'You can use this resource to store a custom data against the issue identified by the key or by the id. The userwho stores the data is required to have permissions to edit the issue.',
            '',
        ),
        'method' => 'PUT',
        'url' => '/rest/api/2/issue/{issueIdOrKey}/properties/{propertyKey}',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get property',
        'descr' => array (
            'Returns the value of the property with a given key from the issue identified by the key or by the id. The user who retrievesthe property is required to have permissions to read the issue.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/issue/{issueIdOrKey}/properties/{propertyKey}',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get properties keys',
        'descr' => array (
            'Returns the keys of all properties for the worklog identified by the key or by the id.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/issue/{issueIdOrKey}/worklog/{worklogId}/properties',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Delete property',
        'descr' => array (
            'Removes the property from the worklog identified by the key or by the id. Ths user removing the property is requiredto have permissions to administer the worklog.',
        ),
        'method' => 'DELETE',
        'url' => '/rest/api/2/issue/{issueIdOrKey}/worklog/{worklogId}/properties/{propertyKey}',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Set property',
        'descr' => array (
            'Sets the value of the specified worklog\'s property.',
            'You can use this resource to store a custom data against the worklog identified by the key or by the id. The userwho stores the data is required to have permissions to administer the worklog.',
            '',
        ),
        'method' => 'PUT',
        'url' => '/rest/api/2/issue/{issueIdOrKey}/worklog/{worklogId}/properties/{propertyKey}',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get property',
        'descr' => array (
            'Returns the value of the property with a given key from the worklog identified by the key or by the id. The user who retrievesthe property is required to have permissions to read the worklog.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/issue/{issueIdOrKey}/worklog/{worklogId}/properties/{propertyKey}',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Link issues',
        'descr' => array (
            'Creates an issue link between two issues.The user requires the link issue permission for the issue which will be linked to another issue.The specified link type in the request is used to create the link and will create a link from the first issueto the second issue using the outward description. It also create a link from the second issue to the first issue using theinward description of the issue link type.It will add the supplied comment to the first issue. The comment can have a restriction who can view it.If group is specified, only users of this group can view this comment, if roleLevel is specified only users who have the specified role can view this comment.The user who creates the issue link needs to belong to the specified group or have the specified role.',
        ),
        'method' => 'POST',
        'url' => '/rest/api/2/issueLink',
        'param' => array (),
        'schema' => '{"id": "https://docs.atlassian.com/jira/REST/schema/link-issue-request#","title": "Link Issue Request","type": "object","properties": {"type": {"title": "Issue Link Type","type": "object","properties": {"id": {"type": "string"},"name": {"type": "string"},"inward": {"type": "string"},"outward": {"type": "string"}},"additionalProperties": false},"inwardIssue": {"$ref": "#/definitions/issue-ref"},"outwardIssue": {"$ref": "#/definitions/issue-ref"},"comment": {"title": "Comment","type": "object","properties": {"id": {"type": "string"},"author": {"$ref": "#/definitions/user"},"body": {"type": "string"},"renderedBody": {"type": "string"},"updateAuthor": {"$ref": "#/definitions/user"},"created": {"type": "string"},"updated": {"type": "string"},"visibility": {"title": "Visibility","type": "object","properties": {"type": {"type": "string","enum": ["group","role"]},"value": {"type": "string"}},"additionalProperties": false},"properties": {"type": "array","items": {"title": "Entity Property","type": "object","properties": {"key": {"type": "string"},"value": {}},"additionalProperties": false}}},"additionalProperties": false}},"definitions": {"issue-ref": {"title": "Issue Ref","type": "object","properties": {"id": {"type": "string"},"key": {"type": "string"},"fields": {"title": "Fields","type": "object","properties": {"summary": {"type": "string"},"status": {"title": "Status","type": "object","properties": {"statusColor": {"type": "string"},"description": {"type": "string"},"iconUrl": {"type": "string"},"name": {"type": "string"},"id": {"type": "string"},"statusCategory": {"title": "Status Category","type": "object","properties": {"id": {"type": "integer"},"key": {"type": "string"},"colorName": {"type": "string"},"name": {"type": "string"}},"additionalProperties": false}},"additionalProperties": false},"issuetype": {"title": "Issue Type","type": "object","properties": {"id": {"type": "string"},"description": {"type": "string"},"iconUrl": {"type": "string"},"name": {"type": "string"},"subtask": {"type": "boolean"},"avatarId": {"type": "integer"}},"additionalProperties": false,"required": ["subtask"]},"priority": {"title": "Priority","type": "object","properties": {"statusColor": {"type": "string"},"description": {"type": "string"},"iconUrl": {"type": "string"},"name": {"type": "string"},"id": {"type": "string"}},"additionalProperties": false}},"additionalProperties": false}},"additionalProperties": false},"user": {"title": "User","type": "object","properties": {"name": {"type": "string"},"key": {"type": "string"},"accountId": {"type": "string"},"emailAddress": {"type": "string"},"avatarUrls": {"type": "object","patternProperties": {".+": {"type": "string"}},"additionalProperties": false},"displayName": {"type": "string"},"active": {"type": "boolean"},"timeZone": {"type": "string"}},"additionalProperties": false,"required": ["active"]}},"additionalProperties": false}',
        'example' => '{"type": {"name": "Duplicate"},"inwardIssue": {"key": "HSP-1"},"outwardIssue": {"key": "MKY-1"},"comment": {"body": "Linked related issue!","visibility": {"type": "group","value": "jira-software-users"}}}',
    ),
    array (
        'title' => 'Get issue link',
        'descr' => array (
            'Returns an issue link with the specified id.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/issueLink/{linkId}',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Delete issue link',
        'descr' => array (
            'Deletes an issue link with the specified id.To be able to delete an issue link you must be able to view both issues and must have the link issue permissionfor at least one of the issues.',
        ),
        'method' => 'DELETE',
        'url' => '/rest/api/2/issueLink/{linkId}',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get issue link types',
        'descr' => array (
            'Returns a list of available issue link types, if issue linking is enabled.Each issue link type has an id, a name and a label for the outward and inward link relationship.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/issueLinkType',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Create issue link type',
        'descr' => array (
            'Create a new issue link type.',
        ),
        'method' => 'POST',
        'url' => '/rest/api/2/issueLinkType',
        'param' => array (),
        'schema' => '{"id": "https://docs.atlassian.com/jira/REST/schema/issue-link-type#","title": "Issue Link Type","type": "object","properties": {"id": {"type": "string"},"name": {"type": "string"},"inward": {"type": "string"},"outward": {"type": "string"}},"additionalProperties": false}',
        'example' => '{"name": "Duplicate","inward": "Duplicated by","outward": "Duplicates"}',
    ),
    array (
        'title' => 'Get issue link type',
        'descr' => array (
            'Returns for a given issue link type id all information about this issue link type.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/issueLinkType/{issueLinkTypeId}',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Delete issue link type',
        'descr' => array (
            'Delete the specified issue link type.',
        ),
        'method' => 'DELETE',
        'url' => '/rest/api/2/issueLinkType/{issueLinkTypeId}',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Update issue link type',
        'descr' => array (
            'Update the specified issue link type.',
        ),
        'method' => 'PUT',
        'url' => '/rest/api/2/issueLinkType/{issueLinkTypeId}',
        'param' => array (),
        'schema' => '{"id": "https://docs.atlassian.com/jira/REST/schema/issue-link-type#","title": "Issue Link Type","type": "object","properties": {"id": {"type": "string"},"name": {"type": "string"},"inward": {"type": "string"},"outward": {"type": "string"}},"additionalProperties": false}',
        'example' => '{"name": "Duplicate","inward": "Duplicated by","outward": "Duplicates"}',
    ),
    array (
        'title' => 'Get issue security schemes',
        'descr' => array (
            'Returns all issue security schemes that are defined.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/issuesecurityschemes',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get issue security scheme',
        'descr' => array (
            'Returns the issue security scheme along with that are defined.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/issuesecurityschemes/{id}',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get issue all types',
        'descr' => array (
            'Returns a list of all issue types visible to the user',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/issuetype',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Create issue type',
        'descr' => array (
            'Creates an issue type from a JSON representation and adds the issue newly created issue type to the default issuetype scheme.',
        ),
        'method' => 'POST',
        'url' => '/rest/api/2/issuetype',
        'param' => array (),
        'schema' => '{"id": "https://docs.atlassian.com/jira/REST/schema/issue-type-create#","title": "Issue Type Create","type": "object","properties": {"name": {"type": "string"},"description": {"type": "string"},"type": {"type": "string","enum": ["subtask","standard"]}},"additionalProperties": false}',
        'example' => '{"name": "name","description": "description","type": "standard"}',
    ),
    array (
        'title' => 'Get issue type',
        'descr' => array (
            'Returns a full representation of the issue type that has the given id.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/issuetype/{id}',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Delete issue type',
        'descr' => array (
            'Deletes the specified issue type. If the issue type has any associated issues, these issues will be migrated tothe alternative issue type specified in the parameter. You can determine the alternative issue types by callingthe /rest/api/2/issuetype/{id}/alternatives resource.',
        ),
        'method' => 'DELETE',
        'url' => '/rest/api/2/issuetype/{id}',
        'param' => array (
            array (
                'alternativeIssueTypeId',
                'string',
                'the id of an issue type to which issues associated with the removed issue type will be migrated.',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Update issue type',
        'descr' => array (
            'Updates the specified issue type from a JSON representation.',
        ),
        'method' => 'PUT',
        'url' => '/rest/api/2/issuetype/{id}',
        'param' => array (),
        'schema' => '{"id": "https://docs.atlassian.com/jira/REST/schema/issue-type-update#","title": "Issue Type Update","type": "object","properties": {"name": {"type": "string"},"description": {"type": "string"},"avatarId": {"type": "integer"}},"additionalProperties": false}',
        'example' => '{"name": "name","description": "description","avatarId": 1}',
    ),
    array (
        'title' => 'Get alternative issue types',
        'descr' => array (
            'Returns a list of all alternative issue types for the given issue type id. The list will contain these issues types, to whichissues assigned to the given issue type can be migrated. The suitable alternatives are issue types which are assignedto the same workflow, the same field configuration and the same screen scheme.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/issuetype/{id}/alternatives',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Create avatar',
        'descr' => array (
            'Creates an avatar for an issue type, for a given issue type Id. The uploaded image will be cropped according tothe crop parameters listed below. If no crop parameters are specified, the image will be cropped to a square.The square will originate at the top left of the image and the length of each side will be set to the smaller ofthe height or width of the image.',
        ),
        'method' => 'POST',
        'url' => '/rest/api/2/issuetype/{id}/avatar2',
        'param' => array (
            array (
                'x',
                'int',
                '(optional) The X coordinate of the top-left corner of the crop region. Default: 0.',
            ),
            array (
                'y',
                'int',
                '(optional) The Y coordinate of the top-left corner of the crop region. Default: 0.',
            ),
            array (
                'size',
                'int',
                '(optional) The length of each side of the crop region. The crop region can only be a square.If omitted and the top-left corner is at (0,0), this defaults to either the height or widthof the image, whichever is smaller.',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get property keys',
        'descr' => array (
            'Returns the keys of all properties for the issue type identified by the id.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/issuetype/{issueTypeId}/properties',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Delete property',
        'descr' => array (
            'Removes the property from the issue type identified by the id. Ths user removing the property is requiredto have permissions to edit the issue type.',
        ),
        'method' => 'DELETE',
        'url' => '/rest/api/2/issuetype/{issueTypeId}/properties/{propertyKey}',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Set property',
        'descr' => array (
            'Sets the value of the specified issue type\'s property.',
            'You can use this resource to store a custom data against an issue type identified by the id. The userwho stores the data is required to have permissions to edit an issue type.',
            '',
        ),
        'method' => 'PUT',
        'url' => '/rest/api/2/issuetype/{issueTypeId}/properties/{propertyKey}',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get property',
        'descr' => array (
            'Returns the value of the property with a given key from the issue type identified by the id. The user who retrievesthe property is required to have permissions to view the issue type.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/issuetype/{issueTypeId}/properties/{propertyKey}',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get auto complete',
        'descr' => array (
            'Returns the auto complete data required for JQL searches.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/jql/autocompletedata',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get field auto complete for query string',
        'descr' => array (
            'Returns auto complete suggestions for JQL search.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/jql/autocompletedata/suggestions',
        'param' => array (
            array (
                'fieldName',
                'string',
                'the field name for which the suggestions are generated.',
            ),
            array (
                'fieldValue',
                'string',
                'the portion of the field value that has already been provided by the user.',
            ),
            array (
                'predicateName',
                'string',
                'the predicate for which the suggestions are generated. Suggestions are generated only for: "by", "from" and "to".',
            ),
            array (
                'predicateValue',
                'string',
                'the portion of the predicate value that has already been provided by the user.',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Validate',
        'descr' => array (),
        'method' => 'POST',
        'url' => '/rest/api/2/licenseValidator',
        'param' => array (),
        'schema' => '{"id": "https://docs.atlassian.com/jira/REST/schema/string#","title": "String","type": "string"}',
        'example' => '',
    ),
    array (
        'title' => 'Get preference',
        'descr' => array (
            'Returns preference of the currently logged in user. Preference key must be provided as input parameter (key). Thevalue is returned exactly as it is. If key parameter is not provided or wrong - status code 404. If value isfound  - status code 200.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/mypreferences',
        'param' => array (
            array (
                'key',
                'string',
                '- key of the preference to be returned.',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Set preference',
        'descr' => array (
            'Sets preference of the currently logged in user. Preference key must be provided as input parameters (key). Valuemust be provided as post body. If key or value parameter is not provided - status code 404. If preference is set- status code 204.',
        ),
        'method' => 'PUT',
        'url' => '/rest/api/2/mypreferences',
        'param' => array (
            array (
                'key',
                'string',
                '- key of the preference to be set.',
            ),
        ),
        'schema' => '{"id": "https://docs.atlassian.com/jira/REST/schema/string#","title": "String","type": "string"}',
        'example' => '',
    ),
    array (
        'title' => 'Remove preference',
        'descr' => array (
            'Removes preference of the currently logged in user. Preference key must be provided as input parameters (key). Ifkey parameter is not provided or wrong - status code 404. If preference is unset - status code 204.',
        ),
        'method' => 'DELETE',
        'url' => '/rest/api/2/mypreferences',
        'param' => array (
            array (
                'key',
                'string',
                '- key of the preference to be removed.',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get user',
        'descr' => array (
            'Returns currently logged user. This resource cannot be accessed anonymously.',
            'The resource accepts the expand param that is used to include, hidden by default, parts of response. This can be used to include:',
            '',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/myself',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get notification schemes',
        'descr' => array (
            'Returns a paginated list of notification schemes. In order to access notification scheme, the calling user isrequired to have permissions to administer at least one project associated with the requested notification scheme. Each scheme containsa list of events and recipient configured to receive notifications for these events. Consumer should allow events without recipients to appear in response.The list is ordered by the scheme\'s name.Follow the documentation of /notificationscheme/{id} resource for all details about returned value.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/notificationscheme',
        'param' => array (
            array (
                'startAt',
                'long',
                'the index of the first notification scheme to return (0 based).',
            ),
            array (
                'maxResults',
                'int',
                'the maximum number of notification schemes to return (max 50).',
            ),
            array (
                'expand',
                'string',
                '',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get notification scheme',
        'descr' => array (
            'Returns a full representation of the notification scheme for the given id. This resource will return anotification scheme containing a list of events and recipient configured to receive notifications for these events. Consumershould allow events without recipients to appear in response. User accessingthe data is required to have permissions to administer at least one project associated with the requested notification scheme.',
            'Notification recipients can be:',
            '',
            '',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/notificationscheme/{id}',
        'param' => array (
            array (
                'expand',
                'string',
                '',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get permission schemes',
        'descr' => array (
            'Returns a list of all permission schemes.',
            'By default only shortened beans are returned. If you want to include permissions of all the schemes,then specify the permissions expand parameter. Permissions will be included also if you specifyany other expand parameter.',
            '',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/permissionscheme',
        'param' => array (
            array (
                'expand',
                'string',
                '',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Create permission scheme',
        'descr' => array (
            'Create a new permission scheme.This method can create schemes with a defined permission set, or without.',
        ),
        'method' => 'POST',
        'url' => '/rest/api/2/permissionscheme',
        'param' => array (
            array (
                'expand',
                'string',
                '',
            ),
        ),
        'schema' => '{"id": "https://docs.atlassian.com/jira/REST/schema/permission-scheme#","title": "Permission Scheme","type": "object","properties": {"name": {"type": "string"},"description": {"type": "string"},"permissions": {"type": "array","items": {"title": "Permission Grant","type": "object","properties": {"holder": {"title": "Permission Holder","type": "object","properties": {"type": {"type": "string"},"parameter": {"type": "string"}},"additionalProperties": false},"permission": {"type": "string"}},"additionalProperties": false}}},"additionalProperties": false}',
        'example' => '{"name": "Example permission scheme","description": "description","permissions": [{"holder": {"type": "group","parameter": "jira-developers"},"permission": "ADMINISTER_PROJECTS"}]}',
    ),
    array (
        'title' => 'Get permission scheme',
        'descr' => array (
            'Returns a permission scheme identified by the given id.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/permissionscheme/{schemeId}',
        'param' => array (
            array (
                'expand',
                'string',
                '',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Delete permission scheme',
        'descr' => array (
            'Deletes a permission scheme identified by the given id.',
        ),
        'method' => 'DELETE',
        'url' => '/rest/api/2/permissionscheme/{schemeId}',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Update permission scheme',
        'descr' => array (
            'Updates a permission scheme.',
            'If the permissions list is present then it will be set in the permission scheme, which basically means it will overwrite any permission grants thatexisted in the permission scheme. Sending an empty list will remove all permission grants from the permission scheme.',
            'To update just the name and description, do not send permissions list at all.',
            'To add or remove a single permission grant instead of updating the whole list at once use the {schemeId}/permission/ resource.',
            '',
        ),
        'method' => 'PUT',
        'url' => '/rest/api/2/permissionscheme/{schemeId}',
        'param' => array (
            array (
                'expand',
                'string',
                '',
            ),
        ),
        'schema' => '{"id": "https://docs.atlassian.com/jira/REST/schema/permission-scheme#","title": "Permission Scheme","type": "object","properties": {"name": {"type": "string"},"description": {"type": "string"},"permissions": {"type": "array","items": {"title": "Permission Grant","type": "object","properties": {"holder": {"title": "Permission Holder","type": "object","properties": {"type": {"type": "string"},"parameter": {"type": "string"}},"additionalProperties": false},"permission": {"type": "string"}},"additionalProperties": false}}},"additionalProperties": false}',
        'example' => '{"name": "Example permission scheme","description": "description","permissions": [{"holder": {"type": "group","parameter": "jira-developers"},"permission": "ADMINISTER_PROJECTS"}]}',
    ),
    array (
        'title' => 'Get permission scheme grants',
        'descr' => array (
            'Returns all permission grants of the given permission scheme.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/permissionscheme/{schemeId}/permission',
        'param' => array (
            array (
                'expand',
                'string',
                '',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Create permission grant',
        'descr' => array (
            'Creates a permission grant in a permission scheme.',
        ),
        'method' => 'POST',
        'url' => '/rest/api/2/permissionscheme/{schemeId}/permission',
        'param' => array (
            array (
                'expand',
                'string',
                '',
            ),
        ),
        'schema' => '{"id": "https://docs.atlassian.com/jira/REST/schema/permission-grant#","title": "Permission Grant","type": "object","properties": {"holder": {"title": "Permission Holder","type": "object","properties": {"type": {"type": "string"},"parameter": {"type": "string"}},"additionalProperties": false},"permission": {"type": "string"}},"additionalProperties": false}',
        'example' => '{"holder": {"type": "group","parameter": "jira-developers"},"permission": "ADMINISTER_PROJECTS"}',
    ),
    array (
        'title' => 'Delete permission scheme entity',
        'descr' => array (
            'Deletes a permission grant from a permission scheme.',
        ),
        'method' => 'DELETE',
        'url' => '/rest/api/2/permissionscheme/{schemeId}/permission/{permissionId}',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get permission scheme grant',
        'descr' => array (
            'Returns a permission grant identified by the given id.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/permissionscheme/{schemeId}/permission/{permissionId}',
        'param' => array (
            array (
                'expand',
                'string',
                '',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get priorities',
        'descr' => array (
            'Returns a list of all issue priorities.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/priority',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get priority',
        'descr' => array (
            'Returns an issue priority.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/priority/{id}',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get all projects',
        'descr' => array (
            'Returns all projects which are visible for the currently logged in user. If no user is logged in, it returns thelist of projects that are visible when using anonymous access.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/project',
        'param' => array (
            array (
                'expand',
                'string',
                'the parameters to expand',
            ),
            array (
                'recent',
                'int',
                'if this parameter is set then only projects recently accessed by the current user (if not logged in then based on HTTP session) will be returned (maximum count limited to the specified number but no more than 20).',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Create project',
        'descr' => array (
            'Creates a new project.',
        ),
        'method' => 'POST',
        'url' => '/rest/api/2/project',
        'param' => array (),
        'schema' => '{"id": "https://docs.atlassian.com/jira/REST/schema/project-input#","title": "Project Input","type": "object","properties": {"key": {"type": "string"},"name": {"type": "string"},"projectTypeKey": {"type": "string"},"projectTemplateKey": {"type": "string"},"description": {"type": "string"},"lead": {"type": "string"},"url": {"type": "string"},"assigneeType": {"type": "string","enum": ["PROJECT_LEAD","UNASSIGNED"]},"avatarId": {"type": "integer"},"issueSecurityScheme": {"type": "integer"},"permissionScheme": {"type": "integer"},"notificationScheme": {"type": "integer"},"categoryId": {"type": "integer"}},"additionalProperties": false}',
        'example' => '{"key": "EX","name": "Example","projectTypeKey": "business","projectTemplateKey": "com.atlassian.jira-core-project-templates:jira-core-project-management","description": "Example Project description","lead": "Charlie","url": "http://atlassian.com","assigneeType": "PROJECT_LEAD","avatarId": 10200,"issueSecurityScheme": 10001,"permissionScheme": 10011,"notificationScheme": 10021,"categoryId": 10120}',
    ),
    array (
        'title' => 'Update project',
        'descr' => array (
            'Updates a project.',
            'Only non null values sent in JSON will be updated in the project.',
            'Values available for the assigneeType field are: "PROJECT_LEAD" and "UNASSIGNED".',
            '',
        ),
        'method' => 'PUT',
        'url' => '/rest/api/2/project/{projectIdOrKey}',
        'param' => array (
            array (
                'expand',
                'string',
                'the parameters to expand in returned project',
            ),
        ),
        'schema' => '{"id": "https://docs.atlassian.com/jira/REST/schema/project-input#","title": "Project Input","type": "object","properties": {"key": {"type": "string"},"name": {"type": "string"},"projectTypeKey": {"type": "string"},"projectTemplateKey": {"type": "string"},"description": {"type": "string"},"lead": {"type": "string"},"url": {"type": "string"},"assigneeType": {"type": "string","enum": ["PROJECT_LEAD","UNASSIGNED"]},"avatarId": {"type": "integer"},"issueSecurityScheme": {"type": "integer"},"permissionScheme": {"type": "integer"},"notificationScheme": {"type": "integer"},"categoryId": {"type": "integer"}},"additionalProperties": false}',
        'example' => '{"key": "EX","name": "Example","projectTypeKey": "business","projectTemplateKey": "com.atlassian.jira-core-project-templates:jira-core-project-management","description": "Example Project description","lead": "Charlie","url": "http://atlassian.com","assigneeType": "PROJECT_LEAD","avatarId": 10200,"issueSecurityScheme": 10001,"permissionScheme": 10011,"notificationScheme": 10021,"categoryId": 10120}',
    ),
    array (
        'title' => 'Delete project',
        'descr' => array (
            'Deletes a project.',
        ),
        'method' => 'DELETE',
        'url' => '/rest/api/2/project/{projectIdOrKey}',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get project',
        'descr' => array (
            'Contains a full representation of a project in JSON format.',
            'All project keys associated with the project will only be returned if expand=projectKeys.',
            '',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/project/{projectIdOrKey}',
        'param' => array (
            array (
                'expand',
                'string',
                'the parameters to expand',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Update project avatar',
        'descr' => array (),
        'method' => 'PUT',
        'url' => '/rest/api/2/project/{projectIdOrKey}/avatar',
        'param' => array (),
        'schema' => '{"id": "https://docs.atlassian.com/jira/REST/schema/avatar#","title": "Avatar","type": "object","properties": {"id": {"type": "string"},"owner": {"type": "string"},"isSystemAvatar": {"type": "boolean"},"isSelected": {"type": "boolean"},"isDeletable": {"type": "boolean"},"urls": {"type": "object","patternProperties": {"\\\\d\\\\dx\\\\d\\\\d": {"type": "string","format": "uri"}},"additionalProperties": false},"selected": {"type": "boolean"}},"additionalProperties": false,"required": ["isSystemAvatar","isSelected","isDeletable","selected"]}',
        'example' => '',
    ),
    array (
        'title' => 'Delete avatar',
        'descr' => array (
            'Deletes avatar',
        ),
        'method' => 'DELETE',
        'url' => '/rest/api/2/project/{projectIdOrKey}/avatar/{id}',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Create avatar',
        'descr' => array (
            'Creates an avatar for a project, for a given project Id or project key. The uploaded image will be cropped accordingto the crop parameters listed below. If no crop parameters are specified, the image will be cropped to a square.The square will originate at the top left of the image and the length of each side will be set to the smaller ofthe height or width of the image.',
        ),
        'method' => 'POST',
        'url' => '/rest/api/2/project/{projectIdOrKey}/avatar2',
        'param' => array (
            array (
                'x',
                'int',
                '(optional) The X coordinate of the top-left corner of the crop region. Default: 0.',
            ),
            array (
                'y',
                'int',
                '(optional) The Y coordinate of the top-left corner of the crop region. Default: 0.',
            ),
            array (
                'size',
                'int',
                '(optional) The length of each side of the crop region. The crop region can only be a square.If omitted and the top-left corner is at (0,0), this defaults to either the height orwidth of the image, whichever is smaller.',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get all avatars',
        'descr' => array (
            'Returns all avatars which are visible for the currently logged in user.  The avatars are grouped intosystem and custom.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/project/{projectIdOrKey}/avatars',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get project components',
        'descr' => array (
            'Contains a full representation of a the specified project\'s components.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/project/{projectIdOrKey}/components',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get all statuses',
        'descr' => array (
            'Get all issue types with valid status values for a project',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/project/{projectIdOrKey}/statuses',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Update project type',
        'descr' => array (
            'Updates the type of a project.',
        ),
        'method' => 'PUT',
        'url' => '/rest/api/2/project/{projectIdOrKey}/type/{newProjectTypeKey}',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get project versions paginated',
        'descr' => array (
            'Returns all versions for the specified project. Results are paginated.',
            'Results can be ordered by the following fields:',
            '',
            '',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/project/{projectIdOrKey}/version',
        'param' => array (
            array (
                'startAt',
                'long',
                'the page offset, if not specified then defaults to 0',
            ),
            array (
                'maxResults',
                'int',
                'how many results on the page should be included. Defaults to 50.',
            ),
            array (
                'orderBy',
                'string',
                'ordering of the results.',
            ),
            array (
                'expand',
                'string',
                'the parameters to expand',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get project versions',
        'descr' => array (
            'Contains a full representation of a the specified project\'s versions.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/project/{projectIdOrKey}/versions',
        'param' => array (
            array (
                'expand',
                'string',
                'the parameters to expand',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get properties keys',
        'descr' => array (
            'Returns the keys of all properties for the project identified by the key or by the id.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/project/{projectIdOrKey}/properties',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Delete property',
        'descr' => array (
            'Removes the property from the project identified by the key or by the id. Ths user removing the property is requiredto have permissions to administer the project.',
        ),
        'method' => 'DELETE',
        'url' => '/rest/api/2/project/{projectIdOrKey}/properties/{propertyKey}',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Set property',
        'descr' => array (
            'Sets the value of the specified project\'s property.',
            'You can use this resource to store a custom data against the project identified by the key or by the id. The userwho stores the data is required to have permissions to administer the project.',
            '',
        ),
        'method' => 'PUT',
        'url' => '/rest/api/2/project/{projectIdOrKey}/properties/{propertyKey}',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get property',
        'descr' => array (
            'Returns the value of the property with a given key from the project identified by the key or by the id. The user who retrievesthe property is required to have permissions to read the project.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/project/{projectIdOrKey}/properties/{propertyKey}',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get project roles',
        'descr' => array (
            'Returns all roles in the given project Id or key, with links to full details on each role.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/project/{projectIdOrKey}/role',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get project role',
        'descr' => array (
            'Returns the details for a given project role in a project together with project role actors.',
            'The project role actor can be either a user or a group.Note that the name of a user actor is the user key.',
            'If you would like to check if a user belongs to the role you need to get all groups to which the user belongsusing /rest/user?userkey={userkey}&expand=groups resource and check if there is a user actor withthe name same as the user key or if there is a group actor with the name as one of the group to which the user belongs.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/project/{projectIdOrKey}/role/{id}',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Set actors',
        'descr' => array (
            'Updates a project role to include the specified actors (users or groups).',
        ),
        'method' => 'PUT',
        'url' => '/rest/api/2/project/{projectIdOrKey}/role/{id}',
        'param' => array (),
        'schema' => '{"id": "https://docs.atlassian.com/jira/REST/schema/project-role-actors-update#","title": "Project Role Actors Update","type": "object","properties": {"id": {"type": "integer"},"categorisedActors": {"type": "object","patternProperties": {".+": {"type": "array","items": {"type": "string"}}},"additionalProperties": false}},"additionalProperties": false}',
        'example' => '{"id": 10360,"categorisedActors": {"atlassian-user-role-actor": ["admin"],"atlassian-group-role-actor": ["jira-developers"]}}',
    ),
    array (
        'title' => 'Add actor users',
        'descr' => array (
            'Adds an actor (user or group) to a project role.',
        ),
        'method' => 'POST',
        'url' => '/rest/api/2/project/{projectIdOrKey}/role/{id}',
        'param' => array (),
        'schema' => '{"type": "object","patternProperties": {".+": {"type": "array","items": {"type": "string"}}},"additionalProperties": false}',
        'example' => '{ "user" : ["admin"] }  or{ "group" : ["jira-developers"] }',
    ),
    array (
        'title' => 'Delete actor',
        'descr' => array (
            'Deletes actors (users or groups) from a project role.',
            '',
            '',
        ),
        'method' => 'DELETE',
        'url' => '/rest/api/2/project/{projectIdOrKey}/role/{id}',
        'param' => array (
            array (
                'user',
                'string',
                'the username to remove from the project role',
            ),
            array (
                'group',
                'string',
                'the groupname to remove from the project role',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get issue security scheme',
        'descr' => array (
            'Returns the issue security scheme for project.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/project/{projectKeyOrId}/issuesecuritylevelscheme',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get notification scheme',
        'descr' => array (
            'Gets a notification scheme associated with the project.Follow the documentation of /notificationscheme/{id} resource for all details about returned value.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/project/{projectKeyOrId}/notificationscheme',
        'param' => array (
            array (
                'expand',
                'string',
                '',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Assign permission scheme',
        'descr' => array (
            'Assigns a permission scheme with a project.',
        ),
        'method' => 'PUT',
        'url' => '/rest/api/2/project/{projectKeyOrId}/permissionscheme',
        'param' => array (
            array (
                'expand',
                'string',
                '',
            ),
        ),
        'schema' => '{"id": "https://docs.atlassian.com/jira/REST/schema/id#","title": "Id","type": "object","properties": {"id": {"type": "integer"}},"additionalProperties": false}',
        'example' => '{"id": 10000}',
    ),
    array (
        'title' => 'Get assigned permission scheme',
        'descr' => array (
            'Gets a permission scheme assigned with a project.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/project/{projectKeyOrId}/permissionscheme',
        'param' => array (
            array (
                'expand',
                'string',
                '',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get security levels for project',
        'descr' => array (
            'Returns all security levels for the project that the current logged in user has access to.If the user does not have the Set Issue Security permission, the list will be empty.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/project/{projectKeyOrId}/securitylevel',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get all project types',
        'descr' => array (
            'Returns all the project types defined on the JIRA instance, not taking into account whetherthe license to use those project types is valid or not.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/project/type',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get project type by key',
        'descr' => array (
            'Returns the project type with the given key.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/project/type/{projectTypeKey}',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get accessible project type by key',
        'descr' => array (
            'Returns the project type with the given key, if it is accessible to the logged in user.This takes into account whether the user is licensed on the Application that defines the project type.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/project/type/{projectTypeKey}/accessible',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get all project categories',
        'descr' => array (
            'Returns all project categories',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/projectCategory',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Create project category',
        'descr' => array (
            'Create a project category via POST.',
        ),
        'method' => 'POST',
        'url' => '/rest/api/2/projectCategory',
        'param' => array (),
        'schema' => '{"id": "https://docs.atlassian.com/jira/REST/schema/project-category#","title": "Project Category","type": "object","properties": {"id": {"type": "string"},"name": {"type": "string"},"description": {"type": "string"}},"additionalProperties": false}',
        'example' => '{"name": "CREATED","description": "Created Project Category"}',
    ),
    array (
        'title' => 'Get project category by id',
        'descr' => array (
            'Contains a representation of a project category in JSON format.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/projectCategory/{id}',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Remove project category',
        'descr' => array (
            'Delete a project category.',
        ),
        'method' => 'DELETE',
        'url' => '/rest/api/2/projectCategory/{id}',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Update project category',
        'descr' => array (
            'Modify a project category via PUT. Any fields present in the PUT will override existing values. As a convenience, if a fieldis not present, it is silently ignored.',
        ),
        'method' => 'PUT',
        'url' => '/rest/api/2/projectCategory/{id}',
        'param' => array (),
        'schema' => '{"id": "https://docs.atlassian.com/jira/REST/schema/project-category#","title": "Project Category","type": "object","properties": {"id": {"type": "string"},"name": {"type": "string"},"description": {"type": "string"}},"additionalProperties": false}',
        'example' => '{"name": "UPDATED","description": "Updated Project Category"}',
    ),
    array (
        'title' => 'Get project',
        'descr' => array (
            'Validates a project key.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/projectvalidate/key',
        'param' => array (
            array (
                'key',
                'string',
                'the project key',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Reindex',
        'descr' => array (
            'Kicks off a reindex.  Need Admin permissions to perform this reindex.',
            'Note that some versions of JIRA may no longer require manual reindexing.In this case, this resource will no-op: a 200 OK response code will returned along with "progress details" thatindicate the work is complete (progress=100%). Subsequent GETs will return 404 to indicate no actua reindex hastaken place.',
            'In the case that an index is actually triggered, this call will be asynchronous: it will return 202 immediatelyand then the caller can call GET on the resource to track progress of the task.',
        ),
        'method' => 'POST',
        'url' => '/rest/api/2/reindex',
        'param' => array (
            array (
                'type',
                'string',
                'Case insensitive String indicating type of reindex.  If omitted, then defaults to BACKGROUND_PREFERRED.',
            ),
            array (
                'indexComments',
                'booleanDefault: false',
                'Indicates that comments should also be reindexed. Not relevant for foreground reindex, where comments are always reindexed.',
            ),
            array (
                'indexChangeHistory',
                'booleanDefault: false',
                'Indicates that changeHistory should also be reindexed. Not relevant for foreground reindex, where changeHistory is always reindexed.',
            ),
            array (
                'indexWorklogs',
                'booleanDefault: false',
                'Indicates that changeHistory should also be reindexed. Not relevant for foreground reindex, where changeHistory is always reindexed.',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get reindex info',
        'descr' => array (
            'Returns information on the system reindexes.  If a reindex is currently taking place then information about this reindex is returned.If there is no active index task, then returns information about the latest reindex task run, otherwise returns a 404indicating that no reindex has taken place.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/reindex',
        'param' => array (
            array (
                'taskId',
                'long',
                'the id of an indexing task you wish to obtain details on.  If omitted, then defaults to the standard behaviour andreturns information on the active reindex task, or the last task to run if no reindex is taking place. .  If there is noreindexing task with that id then a 404 is returned.',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Reindex issues',
        'descr' => array (
            'Reindexes one or more individual issues.  Indexing is performed synchronously - the call returns when indexing ofthe issues has completed or a failure occurs.',
        ),
        'method' => 'POST',
        'url' => '/rest/api/2/reindex/issue',
        'param' => array (
            array (
                'issueId',
                'string',
                'the IDs or keys of one or more issues to reindex.',
            ),
            array (
                'indexComments',
                'booleanDefault: false',
                'Indicates that comments should also be reindexed.',
            ),
            array (
                'indexChangeHistory',
                'booleanDefault: false',
                'Indicates that changeHistory should also be reindexed.',
            ),
            array (
                'indexWorklogs',
                'booleanDefault: false',
                'Indicates that changeHistory should also be reindexed.',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get reindex progress',
        'descr' => array (
            'Returns information on the system reindexes.  If a reindex is currently taking place then information about this reindex is returned.If there is no active index task, then returns information about the latest reindex task run, otherwise returns a 404indicating that no reindex has taken place.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/reindex/progress',
        'param' => array (
            array (
                'taskId',
                'long',
                'the id of an indexing task you wish to obtain details on.  If omitted, then defaults to the standard behaviour andreturns information on the active reindex task, or the last task to run if no reindex is taking place. .  If there is noreindexing task with that id then a 404 is returned.',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Process requests',
        'descr' => array (
            'Executes any pending reindex requests.  Returns a JSON array containing the IDs of the reindex requeststhat are being processed.  Execution is asynchronous - progress of the returned tasks can be monitored throughother REST calls.',
        ),
        'method' => 'POST',
        'url' => '/rest/api/2/reindex/request',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get progress',
        'descr' => array (
            'Retrieves the progress of a single reindex request.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/reindex/request/{requestId}',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get progress bulk',
        'descr' => array (
            'Retrieves the progress of a multiple reindex requests.  Only reindex requests that actually exist will be returnedin the results.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/reindex/request/bulk',
        'param' => array (
            array (
                'requestId',
                'string',
                'the reindex request IDs.',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get resolutions',
        'descr' => array (
            'Returns a list of all resolutions.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/resolution',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get resolution',
        'descr' => array (
            'Returns a resolution.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/resolution/{id}',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get project roles',
        'descr' => array (
            'Get all the ProjectRoles available in JIRA. Currently this list is global.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/role',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Create project role',
        'descr' => array (
            'Creates a new ProjectRole to be available in JIRA.The created role does not have any default actors assigned.',
        ),
        'method' => 'POST',
        'url' => '/rest/api/2/role',
        'param' => array (),
        'schema' => '{"id": "https://docs.atlassian.com/jira/REST/schema/create-update-role-request#","title": "Create Update Role Request","type": "object","properties": {"description": {"type": "string"},"name": {"type": "string"}},"additionalProperties": false}',
        'example' => '{"name": "MyRole","description": "role description"}',
    ),
    array (
        'title' => 'Get project roles by id',
        'descr' => array (
            'Get a specific ProjectRole available in JIRA.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/role/{id}',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Partial update project role',
        'descr' => array (
            'Partially updates a roles name or description.',
        ),
        'method' => 'POST',
        'url' => '/rest/api/2/role/{id}',
        'param' => array (),
        'schema' => '{"id": "https://docs.atlassian.com/jira/REST/schema/create-update-role-request#","title": "Create Update Role Request","type": "object","properties": {"description": {"type": "string"},"name": {"type": "string"}},"additionalProperties": false}',
        'example' => '{"name": "MyRole","description": "role description"}',
    ),
    array (
        'title' => 'Fully update project role',
        'descr' => array (
            'Fully updates a roles. Both name and description must be given.',
        ),
        'method' => 'PUT',
        'url' => '/rest/api/2/role/{id}',
        'param' => array (),
        'schema' => '{"id": "https://docs.atlassian.com/jira/REST/schema/create-update-role-request#","title": "Create Update Role Request","type": "object","properties": {"description": {"type": "string"},"name": {"type": "string"}},"additionalProperties": false}',
        'example' => '{"name": "MyRole","description": "role description"}',
    ),
    array (
        'title' => 'Delete project role',
        'descr' => array (
            'Deletes a role. May return 403 in the future',
        ),
        'method' => 'DELETE',
        'url' => '/rest/api/2/role/{id}',
        'param' => array (
            array (
                'swap',
                'long',
                'if given, removes a role even if it is used in scheme by replacing the role with the given one',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get project role actors for role',
        'descr' => array (
            'Gets default actors for the given role.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/role/{id}/actors',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Add project role actors to role',
        'descr' => array (
            'Adds default actors to the given role. The request data should contain a list of usernames or a list of groups to add.',
        ),
        'method' => 'POST',
        'url' => '/rest/api/2/role/{id}/actors',
        'param' => array (),
        'schema' => '{"id": "https://docs.atlassian.com/jira/REST/schema/actor-input#","title": "Actor Input","type": "object","properties": {"user": {"type": "array","items": {"type": "string"}},"group": {"type": "array","items": {"type": "string"}}},"additionalProperties": false}',
        'example' => '{"user": ["admin"]}',
    ),
    array (
        'title' => 'Delete project role actors from role',
        'descr' => array (
            'Removes default actor from the given role.',
        ),
        'method' => 'DELETE',
        'url' => '/rest/api/2/role/{id}/actors',
        'param' => array (
            array (
                'user',
                'string',
                'if given, removes an actor from given role',
            ),
            array (
                'group',
                'string',
                'if given, removes an actor from given role',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get fields to add',
        'descr' => array (
            'Gets available fields for screen. i.e ones that haven\'t already been added.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/screens/{screenId}/availableFields',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get all tabs',
        'descr' => array (
            'Returns a list of all tabs for the given screen',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/screens/{screenId}/tabs',
        'param' => array (
            array (
                'projectKey',
                'string',
                'the key of the project; this parameter is optional',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Add tab',
        'descr' => array (
            'Creates tab for given screen',
        ),
        'method' => 'POST',
        'url' => '/rest/api/2/screens/{screenId}/tabs',
        'param' => array (),
        'schema' => '{"id": "https://docs.atlassian.com/jira/REST/schema/screenable-tab#","title": "Screenable Tab","type": "object","properties": {"id": {"type": "integer"},"name": {"type": "string"}},"additionalProperties": false}',
        'example' => '',
    ),
    array (
        'title' => 'Rename tab',
        'descr' => array (
            'Renames tab on given screen',
        ),
        'method' => 'PUT',
        'url' => '/rest/api/2/screens/{screenId}/tabs/{tabId}',
        'param' => array (),
        'schema' => '{"id": "https://docs.atlassian.com/jira/REST/schema/screenable-tab#","title": "Screenable Tab","type": "object","properties": {"id": {"type": "integer"},"name": {"type": "string"}},"additionalProperties": false}',
        'example' => '',
    ),
    array (
        'title' => 'Delete tab',
        'descr' => array (
            'Deletes tab to give screen',
        ),
        'method' => 'DELETE',
        'url' => '/rest/api/2/screens/{screenId}/tabs/{tabId}',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get all fields',
        'descr' => array (
            'Gets all fields for a given tab',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/screens/{screenId}/tabs/{tabId}/fields',
        'param' => array (
            array (
                'projectKey',
                'string',
                'the key of the project; this parameter is optional',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Add field',
        'descr' => array (
            'Adds field to the given tab.',
        ),
        'method' => 'POST',
        'url' => '/rest/api/2/screens/{screenId}/tabs/{tabId}/fields',
        'param' => array (),
        'schema' => '{"id": "https://docs.atlassian.com/jira/REST/schema/add-field#","title": "Add Field","type": "object","properties": {"fieldId": {"type": "string"}},"additionalProperties": false}',
        'example' => '{"fieldId": "summary"}',
    ),
    array (
        'title' => 'Remove field',
        'descr' => array (
            'Removes field from given tab',
        ),
        'method' => 'DELETE',
        'url' => '/rest/api/2/screens/{screenId}/tabs/{tabId}/fields/{id}',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Move field',
        'descr' => array (
            'Moves field on the given tab',
        ),
        'method' => 'POST',
        'url' => '/rest/api/2/screens/{screenId}/tabs/{tabId}/fields/{id}/move',
        'param' => array (),
        'schema' => '{"id": "https://docs.atlassian.com/jira/REST/schema/move-field#","title": "Move Field","type": "object","properties": {"after": {"type": "string","format": "uri"},"position": {"type": "string","enum": ["Earlier","Later","First","Last"]}},"additionalProperties": false}',
        'example' => '',
    ),
    array (
        'title' => 'Move tab',
        'descr' => array (
            'Moves tab position',
        ),
        'method' => 'POST',
        'url' => '/rest/api/2/screens/{screenId}/tabs/{tabId}/move/{pos}',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Add field to default screen',
        'descr' => array (
            'Adds field or custom field to the default tab',
        ),
        'method' => 'POST',
        'url' => '/rest/api/2/screens/addToDefault/{fieldId}',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Search using search request',
        'descr' => array (
            'Performs a search using JQL.',
        ),
        'method' => 'POST',
        'url' => '/rest/api/2/search',
        'param' => array (),
        'schema' => '{"id": "https://docs.atlassian.com/jira/REST/schema/search-request#","title": "Search Request","type": "object","properties": {"jql": {"type": "string"},"startAt": {"type": "integer"},"maxResults": {"type": "integer"},"fields": {"type": "array","items": {"type": "string"}},"validateQuery": {"type": "string"},"properties": {"type": "array","items": {"type": "string"}},"fieldsByKeys": {"type": "boolean"}},"additionalProperties": false,"required": ["fieldsByKeys"]}',
        'example' => '{"jql": "project = HSP","startAt": 0,"maxResults": 15,"fields": ["summary","status","assignee"],"fieldsByKeys": false}',
    ),
    array (
        'title' => 'Search',
        'descr' => array (
            'Searches for issues using JQL.',
            'Sorting:the jql parameter is a full JQLexpression which can include an ORDER BY clause.',
            'Fields:The fields param (which can be specified multiple times) gives a comma-separated list of fieldsto include in the response. This can be used to retrieve a subset of fields.A particular field can be excluded by prefixing it with a minus.',
            'By default, only navigable (*navigable) fields are returned in this search resource. Note: the default is differentin the get-issue resource -- the default there all fields (*all).',
            'Properties:The properties param is similar to fields and specifies a comma-separated list of issueproperties to include. Unlike fields, properties are not included by default.It is also not allowed to request all properties.The number of different properties that may be requested in one query is limited to 5.',
            'Query Validation:The validateQuery param offers control over whether to validate and how strictly to treat the validation.',
            'GET vs POST:If the JQL query is too large to be encoded as a query param you should insteadPOST to this resource.',
            'Expanding Issues in the Search Result:It is possible to expand the issues returned by directly specifying the expansion on the expand parameter passedin to this resources.',
            'For instance, to expand the "changelog" for all the issues on the search result, it is neccesary tospecify "changelog" as one of the values to expand.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/search',
        'param' => array (
            array (
                'jql',
                'string',
                'a JQL query string',
            ),
            array (
                'startAt',
                'int',
                'the index of the first issue to return (0-based)',
            ),
            array (
                'maxResults',
                'int',
                'the maximum number of issues to return (defaults to 50). The maximum allowable value isdictated by the JIRA property \'jira.search.views.default.max\'. If you specify a value that is higher than thisnumber, your search results will be truncated.',
            ),
            array (
                'validateQuery',
                'stringDefault: true',
                'Whether to validate the JQL query and how strictly to treat the validation results.Supported values: "strict", "warn", "none" + legacy synonyms "true" and "false"',
            ),
            array (
                'fields',
                'string',
                'the list of fields to return for each issue. By default, all navigable fields are returned.',
            ),
            array (
                'expand',
                'string',
                'A comma-separated list of the parameters to expand.',
            ),
            array (
                'properties',
                'string',
                'the list of properties to return for each issue. By default no properties are returned.',
            ),
            array (
                'fieldsByKeys',
                'boolean',
                'if true then fields in issues will be referenced by keys instead of ids',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get issuesecuritylevel',
        'descr' => array (
            'Returns a full representation of the security level that has the given id.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/securitylevel/{id}',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get server info',
        'descr' => array (
            'Returns general information about the current JIRA server.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/serverInfo',
        'param' => array (
            array (
                'doHealthCheck',
                'boolean',
                '',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Set base u r l',
        'descr' => array (
            'Sets the base URL that is configured for this JIRA instance.',
        ),
        'method' => 'PUT',
        'url' => '/rest/api/2/settings/baseUrl',
        'param' => array (),
        'schema' => '{"id": "https://docs.atlassian.com/jira/REST/schema/string#","title": "String","type": "string"}',
        'example' => 'http://jira.atlassian.com/',
    ),
    array (
        'title' => 'Get issue navigator default columns',
        'descr' => array (
            'Returns the default system columns for issue navigator. Admin permission will be required.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/settings/columns',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Set issue navigator default columns',
        'descr' => array (
            'Sets the default system columns for issue navigator. Admin permission will be required.',
        ),
        'method' => 'PUT',
        'url' => '/rest/api/2/settings/columns',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get statuses',
        'descr' => array (
            'Returns a list of all statuses',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/status',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get status',
        'descr' => array (
            'Returns a full representation of the Status having the given id or name.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/status/{idOrName}',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get status categories',
        'descr' => array (
            'Returns a list of all status categories',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/statuscategory',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get status category',
        'descr' => array (
            'Returns a full representation of the StatusCategory having the given id or key',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/statuscategory/{idOrKey}',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get task',
        'descr' => array (
            'Returns a task progress. When the task is finished, it will contain the result.The result may be an arbitrary JSON, its shape is different for each task type. Consult the documentationof the method that created the task to know what it is.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/task/{taskId}',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Request cancel',
        'descr' => array (
            'Requests that the task that corresponds to the given task id is cancelled.',
        ),
        'method' => 'POST',
        'url' => '/rest/api/2/task/{taskId}/cancel',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Store avatar',
        'descr' => array (
            'Creates an avatar for a given entity, for the given entity ID and type of entity. For example, you can create anavatar for an issue type, given the issue type Id. Uploading an avatar is supported for different types of entitiesacross the JIRA products. However, it is supported for the "project" and "issuetype" entity types for all JIRA products.The uploaded image will be cropped according to the crop parameters listed below. If no crop parameters are specified,the image will be cropped to a square. The square will originate at the top left of the image and the length ofeach side will be set to the smaller of the height or width of the image.',
        ),
        'method' => 'POST',
        'url' => '/rest/api/2/universal_avatar/type/{type}/owner/{entityId}',
        'param' => array (
            array (
                'x',
                'int',
                '(optional) The X coordinate of the top-left corner of the crop region. Default: 0.',
            ),
            array (
                'y',
                'int',
                '(optional) The Y coordinate of the top-left corner of the crop region. Default: 0.',
            ),
            array (
                'size',
                'int',
                '(optional) The length of each side of the crop region. The crop region can only be a square.If omitted and the top-left corner is at (0,0), this defaults to either the height or widthof the image, whichever is smaller.',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get avatars',
        'descr' => array (),
        'method' => 'GET',
        'url' => '/rest/api/2/universal_avatar/type/{type}/owner/{owningObjectId}',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Delete avatar',
        'descr' => array (
            'Deletes avatar',
        ),
        'method' => 'DELETE',
        'url' => '/rest/api/2/universal_avatar/type/{type}/owner/{owningObjectId}/avatar/{id}',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Create user',
        'descr' => array (
            'Create user. By default created user will not be notified with email.If password field is not set then password will be randomly generated.',
        ),
        'method' => 'POST',
        'url' => '/rest/api/2/user',
        'param' => array (),
        'schema' => '{"id": "https://docs.atlassian.com/jira/REST/schema/user-write#","title": "User Write","type": "object","properties": {"key": {"type": "string"},"name": {"type": "string"},"password": {"type": "string"},"emailAddress": {"type": "string"},"displayName": {"type": "string"},"notification": {"type": "string"},"applicationKeys": {"type": "array","items": {"type": "string"}}},"additionalProperties": false}',
        'example' => '{"name": "charlie","password": "abracadabra","emailAddress": "charlie@atlassian.com","displayName": "Charlie of Atlassian","applicationKeys": ["jira-core"]}',
    ),
    array (
        'title' => 'Update user',
        'descr' => array (
            'Modify user. The "value" fields present will override the existing value.Fields skipped in request will not be changed.',
        ),
        'method' => 'PUT',
        'url' => '/rest/api/2/user',
        'param' => array (
            array (
                'username',
                'string',
                'the username',
            ),
            array (
                'key',
                'string',
                'user key',
            ),
        ),
        'schema' => '{"id": "https://docs.atlassian.com/jira/REST/schema/user-write#","title": "User Write","type": "object","properties": {"key": {"type": "string"},"name": {"type": "string"},"password": {"type": "string"},"emailAddress": {"type": "string"},"displayName": {"type": "string"},"notification": {"type": "string"},"applicationKeys": {"type": "array","items": {"type": "string"}}},"additionalProperties": false}',
        'example' => '{"name": "eddie","emailAddress": "eddie@atlassian.com","displayName": "Eddie of Atlassian"}',
    ),
    array (
        'title' => 'Remove user',
        'descr' => array (
            'Removes user.',
        ),
        'method' => 'DELETE',
        'url' => '/rest/api/2/user',
        'param' => array (
            array (
                'username',
                'string',
                'the username',
            ),
            array (
                'key',
                'string',
                'user key',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get user',
        'descr' => array (
            'Returns a user. This resource cannot be accessed anonymously.',
            'The resource accepts the expand param that is used to include, hidden by default, parts of response. This can be used to include:',
            '',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/user',
        'param' => array (
            array (
                'username',
                'string',
                'the username',
            ),
            array (
                'key',
                'string',
                'user key',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Find bulk assignable users',
        'descr' => array (
            'Returns a list of users that match the search string and can be assigned issues for all the given projects.This resource cannot be accessed anonymously.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/user/assignable/multiProjectSearch',
        'param' => array (
            array (
                'username',
                'string',
                'the username',
            ),
            array (
                'projectKeys',
                'string',
                'the keys of the projects we are finding assignable users for, comma-separated',
            ),
            array (
                'startAt',
                'int',
                'the index of the first user to return (0-based)',
            ),
            array (
                'maxResults',
                'int',
                'the maximum number of users to return (defaults to 50). The maximum allowed value is 1000.If you specify a value that is higher than this number, your search results will be truncated.',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Find assignable users',
        'descr' => array (
            'Returns a list of users that match the search string. This resource cannot be accessed anonymously.Please note that this resource should be called with an issue key when a list of assignable users is retrievedfor editing.  For create only a project key should be supplied.  The list of assignable users may be incorrectif it\'s called with the project key for editing.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/user/assignable/search',
        'param' => array (
            array (
                'username',
                'string',
                'the username',
            ),
            array (
                'project',
                'string',
                'the key of the project we are finding assignable users for',
            ),
            array (
                'issueKey',
                'string',
                'the issue key for the issue being edited we need to find assignable users for.',
            ),
            array (
                'startAt',
                'int',
                'the index of the first user to return (0-based)',
            ),
            array (
                'maxResults',
                'int',
                'the maximum number of users to return (defaults to 50). The maximum allowed value is 1000.If you specify a value that is higher than this number, your search results will be truncated.',
            ),
            array (
                'actionDescriptorId',
                'int',
                '',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Default columns',
        'descr' => array (
            'Returns the default columns for the given user. Admin permission will be required to get columns for a userother than the currently logged in user.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/user/columns',
        'param' => array (
            array (
                'username',
                'string',
                'username',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Set columns',
        'descr' => array (
            'Sets the default columns for the given user.  Admin permission will be required to get columns for a userother than the currently logged in user.',
        ),
        'method' => 'PUT',
        'url' => '/rest/api/2/user/columns',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Reset columns',
        'descr' => array (
            'Reset the default columns for the given user to the system default. Admin permission will be required to getcolumns for a user other than the currently logged in user.',
        ),
        'method' => 'DELETE',
        'url' => '/rest/api/2/user/columns',
        'param' => array (
            array (
                'username',
                'string',
                'username',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Change user password',
        'descr' => array (
            'Modify user password.',
        ),
        'method' => 'PUT',
        'url' => '/rest/api/2/user/password',
        'param' => array (
            array (
                'username',
                'string',
                'the username',
            ),
            array (
                'key',
                'string',
                'user key',
            ),
        ),
        'schema' => '{"id": "https://docs.atlassian.com/jira/REST/schema/password#","title": "Password","type": "object","properties": {"password": {"type": "string"},"currentPassword": {"type": "string"}},"additionalProperties": false}',
        'example' => '{"password": "new password"}',
    ),
    array (
        'title' => 'Find users with all permissions',
        'descr' => array (
            'Returns a list of active users that match the search string and have all specified permissions for the project or issue.This resource can be accessed by users with ADMINISTER_PROJECT permission for the project or global ADMIN or SYSADMIN rights.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/user/permission/search',
        'param' => array (
            array (
                'username',
                'string',
                'the username filter, list includes all users if unspecified',
            ),
            array (
                'permissions',
                'string',
                'comma separated list of permissions for project or issue returned users must have, seePermissionsJavaDoc for the list of all possible permissions.',
            ),
            array (
                'issueKey',
                'string',
                'the issue key for the issue for which returned users have specified permissions.',
            ),
            array (
                'projectKey',
                'string',
                'the optional project key to search for users with if no issueKey is supplied.',
            ),
            array (
                'startAt',
                'int',
                'the index of the first user to return (0-based)',
            ),
            array (
                'maxResults',
                'int',
                'the maximum number of users to return (defaults to 50). The maximum allowed value is 1000.If you specify a value that is higher than this number, your search results will be truncated.',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Find users for picker',
        'descr' => array (
            'Returns a list of users matching query with highlighting. This resource cannot be accessed anonymously.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/user/picker',
        'param' => array (
            array (
                'query',
                'string',
                'A string used to search username, Name or e-mail address',
            ),
            array (
                'maxResults',
                'int',
                'the maximum number of users to return (defaults to 50). The maximum allowed value is 1000.If you specify a value that is higher than this number, your search results will be truncated.',
            ),
            array (
                'showAvatar',
                'boolean',
                '',
            ),
            array (
                'exclude',
                'string',
                '',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Find users',
        'descr' => array (
            'Returns a list of users that match the search string and/or property. This resource cannot be accessed anonymously.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/user/search',
        'param' => array (
            array (
                'username',
                'string',
                'A query string used to search username, name or e-mail address',
            ),
            array (
                'startAt',
                'int',
                'the index of the first user to return (0-based)',
            ),
            array (
                'maxResults',
                'int',
                'the maximum number of users to return (defaults to 50). The maximum allowed value is 1000.If you specify a value that is higher than this number, your search results will be truncated.',
            ),
            array (
                'includeActive',
                'boolean',
                'If true, then active users are included in the results (default true)',
            ),
            array (
                'includeInactive',
                'boolean',
                'If true, then inactive users are included in the results (default false)',
            ),
            array (
                'property',
                'string',
                'A query string used to search by property. Property key cannot contain dot or equal sign, value cannot be JSONObject.Example: for following property value: {"something":{"nested":1,"other":2}} you can search: propertyKey.something.nested=1',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Find users with browse permission',
        'descr' => array (
            'Returns a list of active users that match the search string. This resource cannot be accessed anonymouslyand requires the Browse Users global permission.Given an issue key this resource will provide a list of users that match the search string and havethe browse issue permission for the issue provided.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/user/viewissue/search',
        'param' => array (
            array (
                'username',
                'string',
                'the username filter, no users returned if left blank',
            ),
            array (
                'issueKey',
                'string',
                'the issue key for the issue being edited we need to find viewable users for.',
            ),
            array (
                'projectKey',
                'string',
                'the optional project key to search for users with if no issueKey is supplied.',
            ),
            array (
                'startAt',
                'int',
                'the index of the first user to return (0-based)',
            ),
            array (
                'maxResults',
                'int',
                'the maximum number of users to return (defaults to 50). The maximum allowed value is 1000.If you specify a value that is higher than this number, your search results will be truncated.',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get properties keys',
        'descr' => array (
            'Returns the keys of all properties for the user identified by the key or by the id.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/user/properties',
        'param' => array (
            array (
                'userKey',
                'string',
                'key of the user whose properties are to be returned',
            ),
            array (
                'username',
                'string',
                'username of the user whose properties are to be returned',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Delete property',
        'descr' => array (
            'Removes the property from the user identified by the key or by the id. Ths user removing the property is requiredto have permissions to administer the user.',
        ),
        'method' => 'DELETE',
        'url' => '/rest/api/2/user/properties/{propertyKey}',
        'param' => array (
            array (
                'userKey',
                'string',
                'key of the user whose property is to be removed',
            ),
            array (
                'username',
                'string',
                'username of the user whose property is to be removed',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Set property',
        'descr' => array (
            'Sets the value of the specified user\'s property.',
            'You can use this resource to store a custom data against the user identified by the key or by the id. The userwho stores the data is required to have permissions to administer the user.',
            '',
        ),
        'method' => 'PUT',
        'url' => '/rest/api/2/user/properties/{propertyKey}',
        'param' => array (
            array (
                'userKey',
                'string',
                'key of the user whose property is to be set',
            ),
            array (
                'username',
                'string',
                'username of the user whose property is to be set',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get property',
        'descr' => array (
            'Returns the value of the property with a given key from the user identified by the key or by the id. The user who retrievesthe property is required to have permissions to read the user.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/user/properties/{propertyKey}',
        'param' => array (
            array (
                'userKey',
                'string',
                'key of the user whose property is to be returned',
            ),
            array (
                'username',
                'string',
                'username of the user whose property is to be returned',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Create version',
        'descr' => array (
            'Create a version via POST.',
        ),
        'method' => 'POST',
        'url' => '/rest/api/2/version',
        'param' => array (),
        'schema' => '{"id": "https://docs.atlassian.com/jira/REST/schema/version#","title": "Version","type": "object","properties": {"id": {"type": "string"},"description": {"type": "string"},"name": {"type": "string"},"archived": {"type": "boolean"},"released": {"type": "boolean"},"overdue": {"type": "boolean"},"userStartDate": {"type": "string"},"userReleaseDate": {"type": "string"},"project": {"type": "string"},"projectId": {"type": "integer"},"moveUnfixedIssuesTo": {"type": "string","format": "uri"},"operations": {"type": "array","items": {"title": "Simple Link","type": "object","properties": {"id": {"type": "string"},"styleClass": {"type": "string"},"iconClass": {"type": "string"},"label": {"type": "string"},"title": {"type": "string"},"href": {"type": "string"},"weight": {"type": "integer"}},"additionalProperties": false}},"remotelinks": {"type": "array","items": {"title": "Remote Entity Link","type": "object","properties": {"name": {"type": "string"},"link": {}},"additionalProperties": false}}},"additionalProperties": false}',
        'example' => '{"description": "An excellent version","name": "New Version 1","archived": false,"released": true,"releaseDate": "2010-07-06","userReleaseDate": "6/Jul/2010","project": "PXA","projectId": 10000}',
    ),
    array (
        'title' => 'Move version',
        'descr' => array (
            'Modify a version\'s sequence within a project.',
            'The move version bean has 2 alternative field value pairs:',
            '',
        ),
        'method' => 'POST',
        'url' => '/rest/api/2/version/{id}/move',
        'param' => array (),
        'schema' => '{"id": "https://docs.atlassian.com/jira/REST/schema/version-move#","title": "Version Move","type": "object","properties": {"after": {"type": "string","format": "uri"},"position": {"type": "string","enum": ["Earlier","Later","First","Last"]}},"additionalProperties": false}',
        'example' => '{"after": "http://www.example.com/jira/rest/api/2/version/10000"}',
    ),
    array (
        'title' => 'Get version',
        'descr' => array (
            'Returns a project version.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/version/{id}',
        'param' => array (
            array (
                'expand',
                'string',
                '',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Update version',
        'descr' => array (
            'Modify a version via PUT. Any fields present in the PUT will override existing values. As a convenience, if a fieldis not present, it is silently ignored.',
        ),
        'method' => 'PUT',
        'url' => '/rest/api/2/version/{id}',
        'param' => array (),
        'schema' => '{"id": "https://docs.atlassian.com/jira/REST/schema/version#","title": "Version","type": "object","properties": {"id": {"type": "string"},"description": {"type": "string"},"name": {"type": "string"},"archived": {"type": "boolean"},"released": {"type": "boolean"},"overdue": {"type": "boolean"},"userStartDate": {"type": "string"},"userReleaseDate": {"type": "string"},"project": {"type": "string"},"projectId": {"type": "integer"},"moveUnfixedIssuesTo": {"type": "string","format": "uri"},"operations": {"type": "array","items": {"title": "Simple Link","type": "object","properties": {"id": {"type": "string"},"styleClass": {"type": "string"},"iconClass": {"type": "string"},"label": {"type": "string"},"title": {"type": "string"},"href": {"type": "string"},"weight": {"type": "integer"}},"additionalProperties": false}},"remotelinks": {"type": "array","items": {"title": "Remote Entity Link","type": "object","properties": {"name": {"type": "string"},"link": {}},"additionalProperties": false}}},"additionalProperties": false}',
        'example' => '{"self": "http://www.example.com/jira/rest/api/2/version/10000","id": "10000","description": "An excellent version","name": "New Version 1","archived": false,"released": true,"releaseDate": "2010-07-06","overdue": true,"userReleaseDate": "6/Jul/2010","projectId": 10000}',
    ),
    array (
        'title' => 'Delete',
        'descr' => array (
            'Delete a project version.',
        ),
        'method' => 'DELETE',
        'url' => '/rest/api/2/version/{id}',
        'param' => array (
            array (
                'moveFixIssuesTo',
                'string',
                'The version to set fixVersion to on issues where the deleted version is the fix version,If null then the fixVersion is removed.',
            ),
            array (
                'moveAffectedIssuesTo',
                'string',
                'The version to set affectedVersion to on issues where the deleted version is the affected version,If null then the affectedVersion is removed.',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Merge',
        'descr' => array (
            'Merge versions',
        ),
        'method' => 'PUT',
        'url' => '/rest/api/2/version/{id}/mergeto/{moveIssuesTo}',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get version related issues',
        'descr' => array (
            'Returns a bean containing the number of fixed in and affected issues for the given version.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/version/{id}/relatedIssueCounts',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Delete',
        'descr' => array (
            'Delete a project version.',
        ),
        'method' => 'POST',
        'url' => '/rest/api/2/version/{id}/removeAndSwap',
        'param' => array (),
        'schema' => '{"id": "https://docs.atlassian.com/jira/REST/schema/delete-and-replace-version#","title": "Delete And Replace Version","type": "object"}',
        'example' => '',
    ),
    array (
        'title' => 'Get version unresolved issues',
        'descr' => array (
            'Returns the number of unresolved issues for the given version',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/version/{id}/unresolvedIssueCount',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get remote version links by version id',
        'descr' => array (
            'Returns the remote version links associated with the given version ID.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/version/{versionId}/remotelink',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Create or update remote version link',
        'descr' => array (
            'Create a remote version link via POST.  The link\'s global ID will be taken from theJSON payload if provided; otherwise, it will be generated.',
        ),
        'method' => 'POST',
        'url' => '/rest/api/2/version/{versionId}/remotelink',
        'param' => array (),
        'schema' => '{"id": "https://docs.atlassian.com/jira/REST/schema/string#","title": "String","type": "string"}',
        'example' => '{"globalId": "SomeGlobalId","myCustomLinkProperty": true,"colors": ["red","green","blue"],"notes": ["Remote version links may take any well-formed JSON shape that is desired,","provided that they fit within the maximum buffer size allowed,","which is currently 32,768 characters."]}',
    ),
    array (
        'title' => 'Delete remote version links by version id',
        'descr' => array (
            'Delete all remote version links for a given version ID.',
        ),
        'method' => 'DELETE',
        'url' => '/rest/api/2/version/{versionId}/remotelink',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get remote version link',
        'descr' => array (
            'A REST sub-resource representing a remote version link',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/version/{versionId}/remotelink/{globalId}',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Create or update remote version link',
        'descr' => array (
            'Create a remote version link via POST.  The link\'s global ID will be taken from theJSON payload if provided; otherwise, it will be generated.',
        ),
        'method' => 'POST',
        'url' => '/rest/api/2/version/{versionId}/remotelink/{globalId}',
        'param' => array (),
        'schema' => '{"id": "https://docs.atlassian.com/jira/REST/schema/string#","title": "String","type": "string"}',
        'example' => '{"globalId": "SomeGlobalId","myCustomLinkProperty": true,"colors": ["red","green","blue"],"notes": ["Remote version links may take any well-formed JSON shape that is desired,","provided that they fit within the maximum buffer size allowed,","which is currently 32,768 characters."]}',
    ),
    array (
        'title' => 'Delete remote version link',
        'descr' => array (
            'Delete a specific remote version link with the given version ID and global ID.',
        ),
        'method' => 'DELETE',
        'url' => '/rest/api/2/version/{versionId}/remotelink/{globalId}',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get remote version links',
        'descr' => array (
            'Returns the remote version links for a given global ID.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/version/remotelink',
        'param' => array (
            array (
                'globalId',
                'string',
                'the global ID of the remote resource that is linked to the versions',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get all workflows',
        'descr' => array (
            'Returns all workflows.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/workflow',
        'param' => array (
            array (
                'workflowName',
                'string',
                '',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Create property',
        'descr' => array (
            'Add a new property to a transition. Trying to add a property that alreadyexists will fail.',
        ),
        'method' => 'POST',
        'url' => '/rest/api/2/workflow/transitions/{transitionId}/properties',
        'param' => array (
            array (
                'key',
                'string',
                'the name of the property to add.',
            ),
            array (
                'workflowName',
                'string',
                'the name of the workflow to use.',
            ),
            array (
                'workflowMode',
                'string',
                'the type of workflow to use. Can either be "live" or "draft".',
            ),
        ),
        'schema' => '{"id": "https://docs.atlassian.com/jira/REST/schema/property#","title": "Property","type": "object","properties": {"key": {"type": "string"},"value": {"type": "string"}},"additionalProperties": false}',
        'example' => '{"value": "createissue"}',
    ),
    array (
        'title' => 'Update property',
        'descr' => array (
            'Update/add new property to a transition. Trying to update a property that doesnot exist will result in a new property being added.',
        ),
        'method' => 'PUT',
        'url' => '/rest/api/2/workflow/transitions/{transitionId}/properties',
        'param' => array (
            array (
                'key',
                'string',
                'the name of the property to add.',
            ),
            array (
                'workflowName',
                'string',
                'the name of the workflow to use.',
            ),
            array (
                'workflowMode',
                'string',
                'the type of workflow to use. Can either be "live" or "draft".',
            ),
        ),
        'schema' => '{"id": "https://docs.atlassian.com/jira/REST/schema/property#","title": "Property","type": "object","properties": {"key": {"type": "string"},"value": {"type": "string"}},"additionalProperties": false}',
        'example' => '{"value": "createissue"}',
    ),
    array (
        'title' => 'Delete property',
        'descr' => array (
            'Delete a property from the passed transition on the passed workflow. It is not an error to delete a property thatdoes not exist.',
        ),
        'method' => 'DELETE',
        'url' => '/rest/api/2/workflow/transitions/{transitionId}/properties',
        'param' => array (
            array (
                'key',
                'string',
                'the name of the property to add.',
            ),
            array (
                'workflowName',
                'string',
                'the name of the workflow to use.',
            ),
            array (
                'workflowMode',
                'string',
                'the type of workflow to use. Can either be "live" or "draft".',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get properties',
        'descr' => array (
            'Return the property or properties associated with a transition.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/workflow/transitions/{transitionId}/properties',
        'param' => array (
            array (
                'includeReservedKeys',
                'boolean',
                'some keys under the "jira." prefix are editable, some are not. Set this to truein order to include the non-editable keys in the response.',
            ),
            array (
                'key',
                'string',
                'the name of the property key to query. Can be left off the query to return all properties.',
            ),
            array (
                'workflowName',
                'string',
                'the name of the workflow to use.',
            ),
            array (
                'workflowMode',
                'string',
                'the type of workflow to use. Can either be "live" or "draft".',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Create scheme',
        'descr' => array (
            'Create a new workflow scheme.',
            'The body contains a representation of the new scheme. Values not passed are assumed to be set to their defaults.',
        ),
        'method' => 'POST',
        'url' => '/rest/api/2/workflowscheme',
        'param' => array (),
        'schema' => '{"id": "https://docs.atlassian.com/jira/REST/schema/workflow-scheme#","title": "Workflow Scheme","type": "object","properties": {"id": {"type": "integer"},"name": {"type": "string"},"description": {"type": "string"},"defaultWorkflow": {"type": "string"},"issueTypeMappings": {"type": "object","patternProperties": {".+": {"type": "string"}},"additionalProperties": false},"originalDefaultWorkflow": {"type": "string"},"originalIssueTypeMappings": {"type": "object","patternProperties": {".+": {"type": "string"}},"additionalProperties": false},"draft": {"type": "boolean"},"lastModifiedUser": {"title": "User","type": "object","properties": {"key": {"type": "string"},"accountId": {"type": "string"},"name": {"type": "string"},"emailAddress": {"type": "string"},"avatarUrls": {"type": "object","patternProperties": {".+": {"type": "string","format": "uri"}},"additionalProperties": false},"displayName": {"type": "string"},"active": {"type": "boolean"},"timeZone": {"type": "string"},"locale": {"type": "string"},"groups": {"$ref": "#/definitions/simple-list-wrapper"},"applicationRoles": {"$ref": "#/definitions/simple-list-wrapper"}},"additionalProperties": false,"required": ["active"]},"lastModified": {"type": "string"},"updateDraftIfNeeded": {"type": "boolean"},"issueTypes": {"type": "object","patternProperties": {".+": {"title": "Issue Type","type": "object","properties": {"id": {"type": "string"},"description": {"type": "string"},"iconUrl": {"type": "string"},"name": {"type": "string"},"subtask": {"type": "boolean"},"avatarId": {"type": "integer"}},"additionalProperties": false,"required": ["subtask"]}},"additionalProperties": false}},"definitions": {"simple-list-wrapper": {"title": "Simple List Wrapper","type": "object","properties": {"size": {"type": "integer"},"max-results": {"type": "integer"},"items": {"type": "array","items": {"title": "Group","type": "object","properties": {"name": {"type": "string"}},"additionalProperties": false}}},"additionalProperties": false,"required": ["size"]}},"additionalProperties": false}',
        'example' => '{"name": "New Workflow Scheme Name","description": "New Workflow Scheme Description","defaultWorkflow": "DefaultWorkflowName","issueTypeMappings": {"IsueTypeId": "WorkflowName"}}',
    ),
    array (
        'title' => 'Delete scheme',
        'descr' => array (
            'Delete the passed workflow scheme.',
        ),
        'method' => 'DELETE',
        'url' => '/rest/api/2/workflowscheme/{id}',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get by id',
        'descr' => array (
            'Returns the requested workflow scheme to the caller.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/workflowscheme/{id}',
        'param' => array (
            array (
                'returnDraftIfExists',
                'booleanDefault: false',
                'when true indicates that a scheme\'s draft, if it exists, should be queried instead ofthe scheme itself.',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Update',
        'descr' => array (
            'Update the passed workflow scheme.',
            'The body of the request is a representation of the workflow scheme. Values not passed are assumed to indicateno change for that field.',
            'The passed representation can have its updateDraftIfNeeded flag set to true to indicate that the draftshould be created and/or updated when the actual scheme cannot be edited (e.g. when the scheme is being used bya project). Values not appearing the body will not be touched.',
        ),
        'method' => 'PUT',
        'url' => '/rest/api/2/workflowscheme/{id}',
        'param' => array (),
        'schema' => '{"id": "https://docs.atlassian.com/jira/REST/schema/workflow-scheme#","title": "Workflow Scheme","type": "object","properties": {"id": {"type": "integer"},"name": {"type": "string"},"description": {"type": "string"},"defaultWorkflow": {"type": "string"},"issueTypeMappings": {"type": "object","patternProperties": {".+": {"type": "string"}},"additionalProperties": false},"originalDefaultWorkflow": {"type": "string"},"originalIssueTypeMappings": {"type": "object","patternProperties": {".+": {"type": "string"}},"additionalProperties": false},"draft": {"type": "boolean"},"lastModifiedUser": {"title": "User","type": "object","properties": {"key": {"type": "string"},"accountId": {"type": "string"},"name": {"type": "string"},"emailAddress": {"type": "string"},"avatarUrls": {"type": "object","patternProperties": {".+": {"type": "string","format": "uri"}},"additionalProperties": false},"displayName": {"type": "string"},"active": {"type": "boolean"},"timeZone": {"type": "string"},"locale": {"type": "string"},"groups": {"$ref": "#/definitions/simple-list-wrapper"},"applicationRoles": {"$ref": "#/definitions/simple-list-wrapper"}},"additionalProperties": false,"required": ["active"]},"lastModified": {"type": "string"},"updateDraftIfNeeded": {"type": "boolean"},"issueTypes": {"type": "object","patternProperties": {".+": {"title": "Issue Type","type": "object","properties": {"id": {"type": "string"},"description": {"type": "string"},"iconUrl": {"type": "string"},"name": {"type": "string"},"subtask": {"type": "boolean"},"avatarId": {"type": "integer"}},"additionalProperties": false,"required": ["subtask"]}},"additionalProperties": false}},"definitions": {"simple-list-wrapper": {"title": "Simple List Wrapper","type": "object","properties": {"size": {"type": "integer"},"max-results": {"type": "integer"},"items": {"type": "array","items": {"title": "Group","type": "object","properties": {"name": {"type": "string"}},"additionalProperties": false}}},"additionalProperties": false,"required": ["size"]}},"additionalProperties": false}',
        'example' => '{"id": 57585,"name": "Updated Workflow Scheme Name","description": "Updated Workflow Scheme Name","defaultWorkflow": "DefaultWorkflowName","issueTypeMappings": {"IsueTypeId": "WorkflowName"},"updateDraftIfNeeded": false}',
    ),
    array (
        'title' => 'Create draft for parent',
        'descr' => array (
            'Create a draft for the passed scheme. The draft will be a copy of the state of the parent.',
        ),
        'method' => 'POST',
        'url' => '/rest/api/2/workflowscheme/{id}/createdraft',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Delete default',
        'descr' => array (
            'Remove the default workflow from the passed workflow scheme.',
        ),
        'method' => 'DELETE',
        'url' => '/rest/api/2/workflowscheme/{id}/default',
        'param' => array (
            array (
                'updateDraftIfNeeded',
                'boolean',
                'when true will create and return a draft when the workflow scheme cannot be edited(e.g. when it is being used by a project).',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Update default',
        'descr' => array (
            'Set the default workflow for the passed workflow scheme.',
            'The passed representation can have itsupdateDraftIfNeeded flag set to true to indicate that the draft should be created/updated when the actual schemecannot be edited.',
        ),
        'method' => 'PUT',
        'url' => '/rest/api/2/workflowscheme/{id}/default',
        'param' => array (),
        'schema' => '{"id": "https://docs.atlassian.com/jira/REST/schema/default#","title": "Default","type": "object","properties": {"workflow": {"type": "string"},"updateDraftIfNeeded": {"type": "boolean"}},"additionalProperties": false}',
        'example' => '{"workflow": "WorkflowName","updateDraftIfNeeded": false}',
    ),
    array (
        'title' => 'Get default',
        'descr' => array (
            'Return the default workflow from the passed workflow scheme.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/workflowscheme/{id}/default',
        'param' => array (
            array (
                'returnDraftIfExists',
                'booleanDefault: false',
                'when true indicates that a scheme\'s draft, if it exists, should be queried instead ofthe scheme itself.',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get draft by id',
        'descr' => array (
            'Returns the requested draft workflow scheme to the caller.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/workflowscheme/{id}/draft',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Delete draft by id',
        'descr' => array (
            'Delete the passed draft workflow scheme.',
        ),
        'method' => 'DELETE',
        'url' => '/rest/api/2/workflowscheme/{id}/draft',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Update draft',
        'descr' => array (
            'Update a draft workflow scheme. The draft will created if necessary.',
            'The body is a representation of the workflow scheme. Values not passed are assumed to indicate no change for that field.',
        ),
        'method' => 'PUT',
        'url' => '/rest/api/2/workflowscheme/{id}/draft',
        'param' => array (),
        'schema' => '{"id": "https://docs.atlassian.com/jira/REST/schema/workflow-scheme#","title": "Workflow Scheme","type": "object","properties": {"id": {"type": "integer"},"name": {"type": "string"},"description": {"type": "string"},"defaultWorkflow": {"type": "string"},"issueTypeMappings": {"type": "object","patternProperties": {".+": {"type": "string"}},"additionalProperties": false},"originalDefaultWorkflow": {"type": "string"},"originalIssueTypeMappings": {"type": "object","patternProperties": {".+": {"type": "string"}},"additionalProperties": false},"draft": {"type": "boolean"},"lastModifiedUser": {"title": "User","type": "object","properties": {"key": {"type": "string"},"accountId": {"type": "string"},"name": {"type": "string"},"emailAddress": {"type": "string"},"avatarUrls": {"type": "object","patternProperties": {".+": {"type": "string","format": "uri"}},"additionalProperties": false},"displayName": {"type": "string"},"active": {"type": "boolean"},"timeZone": {"type": "string"},"locale": {"type": "string"},"groups": {"$ref": "#/definitions/simple-list-wrapper"},"applicationRoles": {"$ref": "#/definitions/simple-list-wrapper"}},"additionalProperties": false,"required": ["active"]},"lastModified": {"type": "string"},"updateDraftIfNeeded": {"type": "boolean"},"issueTypes": {"type": "object","patternProperties": {".+": {"title": "Issue Type","type": "object","properties": {"id": {"type": "string"},"description": {"type": "string"},"iconUrl": {"type": "string"},"name": {"type": "string"},"subtask": {"type": "boolean"},"avatarId": {"type": "integer"}},"additionalProperties": false,"required": ["subtask"]}},"additionalProperties": false}},"definitions": {"simple-list-wrapper": {"title": "Simple List Wrapper","type": "object","properties": {"size": {"type": "integer"},"max-results": {"type": "integer"},"items": {"type": "array","items": {"title": "Group","type": "object","properties": {"name": {"type": "string"}},"additionalProperties": false}}},"additionalProperties": false,"required": ["size"]}},"additionalProperties": false}',
        'example' => '{"id": 57585,"name": "Updated Workflow Scheme Name","description": "Updated Workflow Scheme Name","defaultWorkflow": "DefaultWorkflowName","issueTypeMappings": {"IsueTypeId": "WorkflowName"},"updateDraftIfNeeded": false}',
    ),
    array (
        'title' => 'Get draft default',
        'descr' => array (
            'Return the default workflow from the passed draft workflow scheme to the caller.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/workflowscheme/{id}/draft/default',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Delete draft default',
        'descr' => array (
            'Remove the default workflow from the passed draft workflow scheme.',
        ),
        'method' => 'DELETE',
        'url' => '/rest/api/2/workflowscheme/{id}/draft/default',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Update draft default',
        'descr' => array (
            'Set the default workflow for the passed draft workflow scheme.',
        ),
        'method' => 'PUT',
        'url' => '/rest/api/2/workflowscheme/{id}/draft/default',
        'param' => array (),
        'schema' => '{"id": "https://docs.atlassian.com/jira/REST/schema/default#","title": "Default","type": "object","properties": {"workflow": {"type": "string"},"updateDraftIfNeeded": {"type": "boolean"}},"additionalProperties": false}',
        'example' => '{"workflow": "WorkflowName","updateDraftIfNeeded": false}',
    ),
    array (
        'title' => 'Get draft issue type',
        'descr' => array (
            'Returns the issue type mapping for the passed draft workflow scheme.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/workflowscheme/{id}/draft/issuetype/{issueType}',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Delete draft issue type',
        'descr' => array (
            'Remove the specified issue type mapping from the draft scheme.',
        ),
        'method' => 'DELETE',
        'url' => '/rest/api/2/workflowscheme/{id}/draft/issuetype/{issueType}',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Set draft issue type',
        'descr' => array (
            'Set the issue type mapping for the passed draft scheme.',
            'The passed representation can have its updateDraftIfNeeded flag set to true to indicate thatthe draft should be created/updated when the actual scheme cannot be edited.',
        ),
        'method' => 'PUT',
        'url' => '/rest/api/2/workflowscheme/{id}/draft/issuetype/{issueType}',
        'param' => array (),
        'schema' => '{"id": "https://docs.atlassian.com/jira/REST/schema/issue-type-mapping#","title": "Issue Type Mapping","type": "object","properties": {"issueType": {"type": "string"},"workflow": {"type": "string"},"updateDraftIfNeeded": {"type": "boolean"}},"additionalProperties": false}',
        'example' => '{"issueType": "IssueTypeId","workflow": "WorkflowName","updateDraftIfNeeded": false}',
    ),
    array (
        'title' => 'Get draft workflow',
        'descr' => array (
            'Returns the draft workflow mappings or requested mapping to the caller.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/workflowscheme/{id}/draft/workflow',
        'param' => array (
            array (
                'workflowName',
                'string',
                'the workflow mapping to return. Null can be passed to return all mappings. Must be a valid workflow name.',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Delete draft workflow mapping',
        'descr' => array (
            'Delete the passed workflow from the draft workflow scheme.',
        ),
        'method' => 'DELETE',
        'url' => '/rest/api/2/workflowscheme/{id}/draft/workflow',
        'param' => array (
            array (
                'workflowName',
                'string',
                'the name of the workflow to delete.',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Update draft workflow mapping',
        'descr' => array (
            'Update the draft scheme to include the passed mapping.',
            'The body is a representation of the workflow mapping.Values not passed are assumed to indicate no change for that field.',
        ),
        'method' => 'PUT',
        'url' => '/rest/api/2/workflowscheme/{id}/draft/workflow',
        'param' => array (
            array (
                'workflowName',
                'string',
                'the name of the workflow mapping to update.',
            ),
        ),
        'schema' => '{"id": "https://docs.atlassian.com/jira/REST/schema/workflow-mapping#","title": "Workflow Mapping","type": "object","properties": {"workflow": {"type": "string"},"issueTypes": {"type": "array","items": {"type": "string"}},"defaultMapping": {"type": "boolean"},"updateDraftIfNeeded": {"type": "boolean"}},"additionalProperties": false}',
        'example' => '{"workflow": "WorkflowName3","issueTypes": ["IssueTypeId"],"updateDraftIfNeeded": true}',
    ),
    array (
        'title' => 'Get issue type',
        'descr' => array (
            'Returns the issue type mapping for the passed workflow scheme.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/workflowscheme/{id}/issuetype/{issueType}',
        'param' => array (
            array (
                'returnDraftIfExists',
                'booleanDefault: false',
                'when true indicates that a scheme\'s draft, if it exists, should be queried instead ofthe scheme itself.',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Delete issue type',
        'descr' => array (
            'Remove the specified issue type mapping from the scheme.',
        ),
        'method' => 'DELETE',
        'url' => '/rest/api/2/workflowscheme/{id}/issuetype/{issueType}',
        'param' => array (
            array (
                'updateDraftIfNeeded',
                'boolean',
                'when true will create and return a draft when the workflow scheme cannot be edited(e.g. when it is being used by a project).',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Set issue type',
        'descr' => array (
            'Set the issue type mapping for the passed scheme.',
            'The passed representation can have its updateDraftIfNeeded flag set to true to indicate thatthe draft should be created/updated when the actual scheme cannot be edited.',
        ),
        'method' => 'PUT',
        'url' => '/rest/api/2/workflowscheme/{id}/issuetype/{issueType}',
        'param' => array (),
        'schema' => '{"id": "https://docs.atlassian.com/jira/REST/schema/issue-type-mapping#","title": "Issue Type Mapping","type": "object","properties": {"issueType": {"type": "string"},"workflow": {"type": "string"},"updateDraftIfNeeded": {"type": "boolean"}},"additionalProperties": false}',
        'example' => '{"issueType": "IssueTypeId","workflow": "WorkflowName","updateDraftIfNeeded": false}',
    ),
    array (
        'title' => 'Get workflow',
        'descr' => array (
            'Returns the workflow mappings or requested mapping to the caller for the passed scheme.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/workflowscheme/{id}/workflow',
        'param' => array (
            array (
                'workflowName',
                'string',
                'the workflow mapping to return. Null can be passed to return all mappings. Must be a valid workflow name.',
            ),
            array (
                'returnDraftIfExists',
                'booleanDefault: false',
                'when true indicates that a scheme\'s draft, if it exists, should be queried instead ofthe scheme itself.',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Delete workflow mapping',
        'descr' => array (
            'Delete the passed workflow from the workflow scheme.',
        ),
        'method' => 'DELETE',
        'url' => '/rest/api/2/workflowscheme/{id}/workflow',
        'param' => array (
            array (
                'workflowName',
                'string',
                'the name of the workflow to delete.',
            ),
            array (
                'updateDraftIfNeeded',
                'boolean',
                'flag to indicate if a draft should be created if necessary to delete the workflowfrom the scheme.',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Update workflow mapping',
        'descr' => array (
            'Update the scheme to include the passed mapping.',
            'The body is a representation of the workflow mapping.Values not passed are assumed to indicate no change for that field.',
            'The passed representation can have its updateDraftIfNeeded flag set to true to indicate that the draftshould be created/updated when the actual scheme cannot be edited.',
        ),
        'method' => 'PUT',
        'url' => '/rest/api/2/workflowscheme/{id}/workflow',
        'param' => array (
            array (
                'workflowName',
                'string',
                'the name of the workflow mapping to update.',
            ),
        ),
        'schema' => '{"id": "https://docs.atlassian.com/jira/REST/schema/workflow-mapping#","title": "Workflow Mapping","type": "object","properties": {"workflow": {"type": "string"},"issueTypes": {"type": "array","items": {"type": "string"}},"defaultMapping": {"type": "boolean"},"updateDraftIfNeeded": {"type": "boolean"}},"additionalProperties": false}',
        'example' => '{"workflow": "WorkflowName3","issueTypes": ["IssueTypeId"],"updateDraftIfNeeded": true}',
    ),
    array (
        'title' => 'Get ids of worklogs deleted since',
        'descr' => array (
            'Returns worklogs id and delete time of worklogs that was deleted since given time.The returns set of worklogs is limited to 1000 elements.This API will not return worklogs deleted during last minute.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/worklog/deleted',
        'param' => array (
            array (
                'since',
                'longDefault: 0',
                'a date time in unix timestamp format since when deleted worklogs will be returned.',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Get worklogs for ids',
        'descr' => array (
            'Returns worklogs for given worklog ids. Only worklogs to which the calling user has permissions, will be included in the result.The returns set of worklogs is limited to 1000 elements.',
        ),
        'method' => 'POST',
        'url' => '/rest/api/2/worklog/list',
        'param' => array (
            array (
                'expand',
                'stringDefault: ',
                'optional comma separated list of parameters to expand:  properties (provides worklog properties).',
            ),
        ),
        'schema' => '{"id": "https://docs.atlassian.com/jira/REST/schema/worklog-ids-request#","title": "Worklog Ids Request","type": "object","properties": {"ids": {"type": "array","items": {"type": "integer"}}},"additionalProperties": false}',
        'example' => '{"ids": [1,2,5,10]}',
    ),
    array (
        'title' => 'Get ids of worklogs modified since',
        'descr' => array (
            'Returns worklogs id and update time of worklogs that was updated since given time.The returns set of worklogs is limited to 1000 elements.This API will not return worklogs updated during last minute.',
        ),
        'method' => 'GET',
        'url' => '/rest/api/2/worklog/updated',
        'param' => array (
            array (
                'since',
                'longDefault: 0',
                'a date time in unix timestamp format since when updated worklogs will be returned.',
            ),
            array (
                'expand',
                'stringDefault: ',
                'optional comma separated list of parameters to expand:  properties (provides worklog properties).',
            ),
        ),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Current user',
        'descr' => array (
            'Returns information about the currently authenticated user\'s session. If the caller is not authenticated theywill get a 401 Unauthorized status code.',
        ),
        'method' => 'GET',
        'url' => '/rest/auth/1/session',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Logout',
        'descr' => array (
            'Logs the current user out of JIRA, destroying the existing session, if any.',
        ),
        'method' => 'DELETE',
        'url' => '/rest/auth/1/session',
        'param' => array (),
        'schema' => '',
        'example' => '',
    ),
    array (
        'title' => 'Login',
        'descr' => array (
            'Creates a new session for a user in JIRA. Once a session has been successfully created it can be used to accessany of JIRA\'s remote APIs and also the web UI by passing the appropriate HTTP Cookie header.',
            'Note that it is generally preferrable to use HTTP BASIC authentication with the REST API. However, this resourcemay be used to mimic the behaviour of JIRA\'s log-in page (e.g. to display log-in errors to a user).',
        ),
        'method' => 'POST',
        'url' => '/rest/auth/1/session',
        'param' => array (),
        'schema' => '{"id": "https://docs.atlassian.com/jira/REST/schema/auth-params#","title": "Auth Params","type": "object","properties": {"username": {"type": "string"},"password": {"type": "string"}},"additionalProperties": false}',
        'example' => '{"username": "fred","password": "freds_password"}',
    ),
);
<?php
return array (
    array (
        'name' => 'getIssuePropertiesKeys',
        'vendorUrl' => '/rest/api/2/issue/{issueIdOrKey}/properties',
        'method' => 'GET',
        'description' => 'Returns the keys of all properties for the issue identified by the key or by the id.',
        'args' => array (
            'issueIdOrKey' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Issue identifier or key.',
            ),
        ),
    ),
    array (
        'name' => 'deleteIssueProperty',
        'vendorUrl' => '/rest/api/2/issue/{issueIdOrKey}/properties/{propertyKey}',
        'method' => 'DELETE',
        'description' => 'Removes the property from the issue identified by the key or by the id.',
        'args' => array (
            'issueIdOrKey' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Issue identifier or key.',
            ),
            'propertyKey' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Property key.',
            ),
        ),
    ),
    array (
        'name' => 'setIssueProperty',
        'vendorUrl' => '/rest/api/2/issue/{issueIdOrKey}/properties/{propertyKey}',
        'method' => 'PUT',
        'description' => 'Sets the value of the specified issue\'s property. You can use this resource to store a custom data against the issue identified by the key or by the id.',
        'args' => array (
            'issueIdOrKey' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Issue identifier or key.',
            ),
            'propertyKey' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Property key.',
            ),
            'value' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Property value.',
            ),
        ),
        'custom' => true,
    ),
    array (
        'name' => 'getIssueProperty',
        'vendorUrl' => '/rest/api/2/issue/{issueIdOrKey}/properties/{propertyKey}',
        'method' => 'GET',
        'description' => 'Returns the value of the property with a given key from the issue identified or the key.',
        'args' => array (
            'issueIdOrKey' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Issue identifier or key.',
            ),
            'propertyKey' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Property key.',
            ),
        ),
    ),
    array (
        'name' => 'getWorklogPropertiesKeys',
        'vendorUrl' => '/rest/api/2/issue/{issueIdOrKey}/worklog/{worklogId}/properties',
        'method' => 'GET',
        'description' => 'Returns the keys of all properties for the worklog identified by the key or by the id.',
        'args' => array (
            'issueIdOrKey' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Issue identifier or key.',
            ),
            'worklogId' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Worklog identifier.',
            ),
        ),
    ),
    array (
        'name' => 'deleteWorklogProperty',
        'vendorUrl' => '/rest/api/2/issue/{issueIdOrKey}/worklog/{worklogId}/properties/{propertyKey}',
        'method' => 'DELETE',
        'description' => 'Removes the property from the worklog identified by the key or by the id.',
        'args' => array (
            'issueIdOrKey' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Issue identifier or key.',
            ),
            'worklogId' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Worklog identifier.',
            ),
            'propertyKey' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Property key.',
            ),
        ),
    ),
    array (
        'name' => 'setWorklogProperty',
        'vendorUrl' => '/rest/api/2/issue/{issueIdOrKey}/worklog/{worklogId}/properties/{propertyKey}',
        'method' => 'PUT',
        'description' => 'Sets the value of the specified worklog\'s property.',
        'args' => array (
            'issueIdOrKey' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Issue identifier or key.',
            ),
            'worklogId' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Worklog identifier.',
            ),
            'propertyKey' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Property key.',
            ),
            'value' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Property value.',
            ),
        ),
        'custom' => true,
    ),
    array (
        'name' => 'getWorklogProperty',
        'vendorUrl' => '/rest/api/2/issue/{issueIdOrKey}/worklog/{worklogId}/properties/{propertyKey}',
        'method' => 'GET',
        'description' => 'Returns the value of the property with a given key from the worklog identified by the key or by the id.',
        'args' => array (
            'issueIdOrKey' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Issue identifier or key.',
            ),
            'worklogId' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Worklog identifier.',
            ),
            'propertyKey' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Property key.',
            ),
        ),
    ),
    array (
        'name' => 'createIssueLink',
        'vendorUrl' => '/rest/api/2/issueLink',
        'method' => 'POST',
        'description' => 'Creates an issue link between two issues.',
        'args' => array (
            'typeName' => array (
                'type' => 'string',
                'example' => '{"name":"Duplicate"}',
                'schema' => '"inward":"string","outward":"string"',
                'info' => 'Type name.',
                'required' => true,
            ),
            'typeId' => array (
                'type' => 'string',
                'example' => '{"name":"Duplicate"}',
                'schema' => '"inward":"string","outward":"string"',
                'info' => 'Type identifier.',
                'required' => true,
            ),
            'typeInward' => array (
                'type' => 'string',
                'example' => '{"name":"Duplicate"}',
                'schema' => '"inward":"string","outward":"string"',
                'info' => 'Type inward.',
                'required' => false,
            ),
            'typeOutward' => array (
                'type' => 'string',
                'example' => '{"name":"Duplicate"}',
                'schema' => '"outward":"string"',
                'info' => 'Type outward.',
                'required' => false,
            ),
            'inwardIssue' => array (
                'type' => 'JSON',
                'example' => '{"key":"HSP-1"}',
                'schema' => '{"$ref":"#\\/definitions\\/issue-ref"}',
                'info' => 'Inward issue. Example {"id": "issueId","key": "issueKey","fields": {"summary": "Issue summary","status": {"statusColor": "#009900","description": "Issue status description","iconUrl": "http://www.example.com/jira/images/icons/priorities/major.png","name": "Name","id": "Id","statusCategory": {"id": 9,"key": "completed","colorName": "green","name": "Completed"}},"issuetype": {"id": "10000","description": "Issue type description","iconUrl": "http://www.example.com/jira/images/icons/priorities/major.png","name": "Name","subtask": false,"avatarId": 10002},"priority": {"statusColor": "#009900","description": "Priority description","iconUrl": "http://www.example.com/jira/images/icons/priorities/major.png","name": "Name","id": "20000"}}}',
                'required' => false,
            ),
            'outwardIssue' => array (
                'type' => 'JSON',
                'example' => '{"key":"MKY-1"}',
                'schema' => '{"$ref":"#\\/definitions\\/issue-ref"}',
                'info' => 'Outward issue. Example {"id": "issueId","key": "issueKey","fields": {"summary": "Issue summary","status": {"statusColor": "#009900","description": "Issue status description","iconUrl": "http://www.example.com/jira/images/icons/priorities/major.png","name": "Name","id": "Id","statusCategory": {"id": 9,"key": "completed","colorName": "green","name": "Completed"}},"issuetype": {"id": "10000","description": "Issue type description","iconUrl": "http://www.example.com/jira/images/icons/priorities/major.png","name": "Name","subtask": false,"avatarId": 10002},"priority": {"statusColor": "#009900","description": "Priority description","iconUrl": "http://www.example.com/jira/images/icons/priorities/major.png","name": "Name","id": "20000"}}}',
                'required' => false,
            ),
            'commentAuthor' => array (
                'type' => 'JSON',
                'example' => '{"body":"Linked related issue!","visibility":{"type":"group","value":"jira-software-users"}}',
                'schema' => '',
                'info' => 'Comment author. Example {"name": "userName","key": "userKey","accountId": "99:27935d01-92a7-4687-8272-a9b8d3b2ae2e","emailAddress": "fred@example.com","avatarUrls": {"16x16": "http://www.example.com/jira/secure/useravatar?size=xsmall&ownerId=fred","24x24": "http://www.example.com/jira/secure/useravatar?size=small&ownerId=fred"},"displayName": "userDisplayName","active": true,"timeZone": "Australia/Sydney"}',
                'required' => false,
            ),
            'commentBody' => array (
                'type' => 'string',
                'example' => '{"body":"Linked related issue!","visibility":{"type":"group","value":"jira-software-users"}}',
                'schema' => '',
                'info' => 'Comment body.',
                'required' => false,
            ),
            'commentRenderedBody' => array (
                'type' => 'string',
                'example' => '{"body":"Linked related issue!","visibility":{"type":"group","value":"jira-software-users"}}',
                'schema' => '',
                'info' => 'Comment rendered body.',
                'required' => false,
            ),
            'commentVisibilityType' => array (
                'type' => 'string',
                'example' => '{"body":"Linked related issue!","visibility":{"type":"group","value":"jira-software-users"}}',
                'schema' => '',
                'info' => 'Comment visibility type. One of "group", "role".',
                'required' => false,
            ),
            'commentVisibilityValue' => array (
                'type' => 'string',
                'example' => '{"body":"Linked related issue!","visibility":{"type":"group","value":"jira-software-users"}}',
                'schema' => '',
                'info' => 'Comment visibility value.',
                'required' => false,
            ),
            'commentProperties' => array (
                'type' => 'Array',
                'example' => '{"body":"Linked related issue!","visibility":{"type":"group","value":"jira-software-users"}}',
                'schema' => '',
                'info' => 'Comment entity property.',
                'required' => false,
            ),
        ),
        'custom' => true,
    ),
    array (
        'name' => 'getIssueLink',
        'vendorUrl' => '/rest/api/2/issueLink/{linkId}',
        'method' => 'GET',
        'description' => 'Returns an issue link with the specified id.',
        'args' => array (
            'linkId' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Link identifier.',
            ),
        ),
    ),
    array (
        'name' => 'deleteIssueLink',
        'vendorUrl' => '/rest/api/2/issueLink/{linkId}',
        'method' => 'DELETE',
        'description' => 'Deletes an issue link with the specified id.',
        'args' => array (
            'linkId' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Link identifier.',
            ),
        ),
    ),
    array (
        'name' => 'getIssueLinkTypes',
        'vendorUrl' => '/rest/api/2/issueLinkType',
        'method' => 'GET',
        'description' => 'Returns a list of available issue link types, if issue linking is enabled.',
        'args' => array (
        ),
    ),
    array (
        'name' => 'createIssueLinkType',
        'vendorUrl' => '/rest/api/2/issueLinkType',
        'method' => 'POST',
        'description' => 'Create a new issue link type.',
        'args' => array (
            'name' => array (
                'example' => '"Duplicate"',
                'schema' => '{"type":"string"}',
                'type' => 'String',
                'info' => 'Name.',
                'required' => true,
            ),
            'inward' => array (
                'example' => '"Duplicated by"',
                'schema' => '{"type":"string"}',
                'type' => 'String',
                'info' => 'Inward issues.',
                'required' => false,
            ),
            'outward' => array (
                'example' => '"Duplicates"',
                'schema' => '{"type":"string"}',
                'type' => 'String',
                'info' => 'Outward issues.',
                'required' => false,
            ),
        ),
    ),
    array (
        'name' => 'getSingleIssueLinkType',
        'vendorUrl' => '/rest/api/2/issueLinkType/{issueLinkTypeId}',
        'method' => 'GET',
        'description' => 'Returns for a given issue link type identifier all information about this issue link type.',
        'args' => array (
            'issueLinkTypeId' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Issue link type identifier.',
            ),
        ),
    ),
    array (
        'name' => 'deleteSingleIssueLinkType',
        'vendorUrl' => '/rest/api/2/issueLinkType/{issueLinkTypeId}',
        'method' => 'DELETE',
        'description' => 'Delete the specified issue link type.',
        'args' => array (
            'issueLinkTypeId' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Issue link type identifier.',
            ),
        ),
    ),
    array (
        'name' => 'updateSingleIssueLinkType',
        'vendorUrl' => '/rest/api/2/issueLinkType/{issueLinkTypeId}',
        'method' => 'PUT',
        'description' => 'Update the specified issue link type.',
        'args' => array (
            'issueLinkTypeId' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Issue link type identifier.',
            ),
            'name' => array (
                'example' => '"Duplicate"',
                'schema' => '{"type":"string"}',
                'type' => 'String',
                'info' => 'Name.',
                'required' => false,
            ),
            'inward' => array (
                'example' => '"Duplicated by"',
                'schema' => '{"type":"string"}',
                'type' => 'String',
                'info' => 'Inward issues.',
                'required' => false,
            ),
            'outward' => array (
                'example' => '"Duplicates"',
                'schema' => '{"type":"string"}',
                'type' => 'String',
                'info' => 'Outward issues.',
                'required' => false,
            ),
        ),
    ),
    array (
        'name' => 'getIssueSecuritySchemes',
        'vendorUrl' => '/rest/api/2/issuesecurityschemes',
        'method' => 'GET',
        'description' => 'Returns all issue security schemes that are defined.',
        'args' => array (),
    ),
    array (
        'name' => 'getIssueSingleSecurityScheme',
        'vendorUrl' => '/rest/api/2/issuesecurityschemes/{id}',
        'method' => 'GET',
        'description' => 'Returns the issue security scheme along with that are defined.',
        'args' => array (
            'id' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Issue security schemes identifier.',
            ),
        ),
    ),
    array (
        'name' => 'getIssueAllTypes',
        'vendorUrl' => '/rest/api/2/issuetype',
        'method' => 'GET',
        'description' => 'Returns a list of all issue types visible to the user.',
        'args' => array (),
    ),
    array (
        'name' => 'createIssueType',
        'vendorUrl' => '/rest/api/2/issuetype',
        'method' => 'POST',
        'description' => 'Creates an issue type from a JSON representation and adds the issue newly created issue type to the default issuetype scheme.',
        'args' => array (
            'name' => array (
                'example' => '"name"',
                'schema' => '{"type":"string"}',
                'type' => 'String',
                'info' => 'Name.',
                'required' => false,
            ),
            'description' => array (
                'example' => '"description"',
                'schema' => '{"type":"string"}',
                'type' => 'String',
                'info' => 'Description.',
                'required' => false,
            ),
            'type' => array (
                'example' => '"standard"',
                'schema' => '{"type":"string","enum":["subtask","standard"]}',
                'type' => 'String',
                'info' => 'Type.',
                'required' => false,
            ),
        ),
    ),
    array (
        'name' => 'getSingleIssueType',
        'vendorUrl' => '/rest/api/2/issuetype/{id}',
        'method' => 'GET',
        'description' => 'Returns a full representation of the issue type that has the given id.',
        'args' => array (
            'id' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Issue type identifier.',
            ),
        ),
    ),
    array (
        'name' => 'deleteSingleIssueType',
        'vendorUrl' => '/rest/api/2/issuetype/{id}',
        'method' => 'DELETE',
        'description' => 'Deletes the specified issue type.',
        'args' => array (
            'id' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Issue type identifier.',
            ),
            'alternativeIssueTypeId' => array (
                'type' => 'string',
                'info' => 'The identifier of an issue type to which issues associated with the removed issue type will be migrated.',
                'required' => false,
            ),
        ),
    ),
    array (
        'name' => 'updateSingleIssueType',
        'vendorUrl' => '/rest/api/2/issuetype/{id}',
        'method' => 'PUT',
        'description' => 'Updates the specified issue type from a JSON representation.',
        'args' => array (
            'id' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Issue type identifier.',
            ),
            'name' => array (
                'example' => '"name"',
                'schema' => '{"type":"string"}',
                'type' => 'String',
                'info' => 'Name.',
                'required' => false,
            ),
            'description' => array (
                'example' => '"description"',
                'schema' => '{"type":"string"}',
                'type' => 'String',
                'info' => 'Description.',
                'required' => false,
            ),
            'avatarId' => array (
                'example' => '1',
                'schema' => '{"type":"integer"}',
                'type' => 'String',
                'info' => 'Avatar identifier.',
                'required' => false,
            ),
        ),
    ),
    array (
        'name' => 'getAlternativeIssueTypes',
        'vendorUrl' => '/rest/api/2/issuetype/{id}/alternatives',
        'method' => 'GET',
        'description' => 'Returns a list of all alternative issue types for the given issue type identifier.',
        'args' => array (
            'id' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Issue type identifier.',
            ),
        ),
    ),
    array (
        'name' => 'createIssueTypeAvatar',
        'vendorUrl' => '/rest/api/2/issuetype/{id}/avatar2',
        'method' => 'POST-FILE',
        'description' => 'Creates an avatar for an issue type, for a given issue type Id.',
        'args' => array (
            'id' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Issue type identifier.',
            ),
            'image' => array (
                'required' => true,
                'type' => 'File',
                'info' => 'Avatar image.',
            ),
            'x' => array (
                'type' => 'int',
                'info' => 'The X coordinate of the top-left corner of the crop region. Default: 0.',
                'required' => false,
            ),
            'y' => array (
                'type' => 'int',
                'info' => 'The Y coordinate of the top-left corner of the crop region. Default: 0.',
                'required' => false,
            ),
            'size' => array (
                'type' => 'int',
                'info' => 'The length of each side of the crop region. The crop region can only be a square.',
                'required' => false,
            ),
        ),
        'custom' => true,
    ),
    array (
        'name' => 'getIssueTypePropertiesKeys',
        'vendorUrl' => '/rest/api/2/issuetype/{issueTypeId}/properties',
        'method' => 'GET',
        'description' => 'Returns the keys of all properties for the issue type identified by the id.',
        'args' => array (
            'issueTypeId' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Issue type identifier.',
            ),
        ),
    ),
    array (
        'name' => 'deleteIssueTypeProperty',
        'vendorUrl' => '/rest/api/2/issuetype/{issueTypeId}/properties/{propertyKey}',
        'method' => 'DELETE',
        'description' => 'Removes the property from the issue type identified by the id.',
        'args' => array (
            'issueTypeId' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Issue type identifier.',
            ),
            'propertyKey' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Property key.',
            ),
        ),
    ),
    array (
        'name' => 'setIssueTypeProperty',
        'vendorUrl' => '/rest/api/2/issuetype/{issueTypeId}/properties/{propertyKey}',
        'method' => 'PUT',
        'description' => 'Sets the value of the specified issue type\'s property.',
        'args' => array (
            'issueTypeId' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Issue type identifier.',
            ),
            'propertyKey' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Property key.',
            ),
            'value' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Property value.',
            ),
        ),
        'custom' => true,
    ),
    array (
        'name' => 'getIssueTypeProperty',
        'vendorUrl' => '/rest/api/2/issuetype/{issueTypeId}/properties/{propertyKey}',
        'method' => 'GET',
        'description' => 'Returns the value of the property with a given key from the issue type identified by the id.',
        'args' => array (
            'issueTypeId' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Issue type identifier.',
            ),
            'propertyKey' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Property key.',
            ),
        ),
    ),
    array (
        'name' => 'getAutoComplete',
        'vendorUrl' => '/rest/api/2/jql/autocompletedata',
        'method' => 'GET',
        'description' => 'Returns the auto complete data required for JQL searches.',
        'args' => array (),
    ),
    array (
        'name' => 'getFieldAutoComplete',
        'vendorUrl' => '/rest/api/2/jql/autocompletedata/suggestions',
        'method' => 'GET',
        'description' => 'Returns auto complete suggestions for JQL search.',
        'args' => array (
            'fieldName' => array (
                'type' => 'string',
                'info' => 'The field name for which the suggestions are generated.',
                'required' => false,
            ),
            'fieldValue' => array (
                'type' => 'string',
                'info' => 'The portion of the field value that has already been provided by the user.',
                'required' => false,
            ),
            'predicateName' => array (
                'type' => 'string',
                'info' => 'The predicate for which the suggestions are generated. Suggestions are generated only for: "by", "from" and "to".',
                'required' => false,
            ),
            'predicateValue' => array (
                'type' => 'string',
                'info' => 'The portion of the predicate value that has already been provided by the user.',
                'required' => false,
            ),
        ),
    ),
    array (
        'name' => 'getMyPreferences',
        'vendorUrl' => '/rest/api/2/mypreferences',
        'method' => 'GET',
        'description' => 'Returns preference of the currently logged in user.',
        'args' => array (
            'key' => array (
                'type' => 'string',
                'info' => 'Key of the preference to be returned.',
                'required' => false,
            ),
        ),
    ),
    array (
        'name' => 'setMyPreference',
        'vendorUrl' => '/rest/api/2/mypreferences',
        'method' => 'PUT',
        'description' => 'Sets preference of the currently logged in user.',
        'args' => array (
            'key' => array (
                'type' => 'string',
                'info' => 'Key of the preference to be set.',
                'required' => true,
            ),
            'value' => array (
                'schema' => '{"id":"https:\\/\\/docs.atlassian.com\\/jira\\/REST\\/schema\\/string#","title":"String","type":"string"}',
                'type' => 'String',
                'info' => 'Preference value.',
                'required' => true,
            ),
        ),
        'custom' => true,
    ),
    array (
        'name' => 'deleteMyPreference',
        'vendorUrl' => '/rest/api/2/mypreferences',
        'method' => 'DELETE',
        'description' => 'Removes preference of the currently logged in user.',
        'args' => array (
            'key' => array (
                'type' => 'string',
                'info' => 'Key of the preference to be removed.',
                'required' => false,
            ),
        ),
    ),
    array (
        'name' => 'getMe',
        'vendorUrl' => '/rest/api/2/myself',
        'method' => 'GET',
        'description' => 'Returns currently logged user.',
        'args' => array (),
    ),
    array (
        'name' => 'getNotificationSchemes',
        'vendorUrl' => '/rest/api/2/notificationscheme',
        'method' => 'GET',
        'description' => 'Returns a paginated list of notification schemes.',
        'args' => array (
            'startAt' => array (
                'type' => 'long',
                'info' => 'The index of the first notification scheme to return (0 based).',
                'required' => false,
            ),
            'maxResults' => array (
                'type' => 'int',
                'info' => 'The maximum number of notification schemes to return (max 50).',
                'required' => false,
            ),
            'expand' => array (
                'type' => 'string',
                'info' => 'The parameters to expand.',
                'required' => false,
            ),
        ),
    ),
    array (
        'name' => 'getSingleNotificationScheme',
        'vendorUrl' => '/rest/api/2/notificationscheme/{id}',
        'method' => 'GET',
        'description' => 'Returns a full representation of the notification scheme for the given id.',
        'args' => array (
            'id' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Notification scheme identifier.',
            ),
            'expand' => array (
                'type' => 'string',
                'info' => 'The parameters to expand.',
                'required' => false,
            ),
        ),
    ),
    array (
        'name' => 'getPermissionSchemes',
        'vendorUrl' => '/rest/api/2/permissionscheme',
        'method' => 'GET',
        'description' => 'Returns a list of all permission schemes.',
        'args' => array (
            'expand' => array (
                'type' => 'string',
                'info' => 'The parameters to expand.',
                'required' => false,
            ),
        ),
    ),
    array (
        'name' => 'createPermissionScheme',
        'vendorUrl' => '/rest/api/2/permissionscheme',
        'method' => 'POST',
        'description' => 'Create a new permission scheme.',
        'args' => array (
            'name' => array (
                'example' => '"Example permission scheme"',
                'schema' => '{"type":"string"}',
                'type' => 'String',
                'info' => 'Permission scheme name.',
                'required' => true,
            ),
            'permissions' => array (
                'type' => 'Array',
                'example' => '[{"holder":{"type":"group","parameter":"jira-developers"},"permission":"ADMINISTER_PROJECTS"}]',
                'schema' => '',
                'info' => 'Permissions. Example [{"holder": {"type": "group","parameter": "jira-developers"},"permission": "ADMINISTER_PROJECTS"}].',
                'required' => true,
            ),
            'description' => array (
                'example' => '"description"',
                'schema' => '{"type":"string"}',
                'type' => 'String',
                'info' => 'Permission scheme description.',
                'required' => false,
            ),
            'expand' => array (
                'type' => 'string',
                'info' => 'The parameters to expand.',
                'required' => false,
            ),
        ),
    ),
    array (
        'name' => 'getSinglePermissionScheme',
        'vendorUrl' => '/rest/api/2/permissionscheme/{schemeId}',
        'method' => 'GET',
        'description' => 'Returns a permission scheme identified by the given id.',
        'args' => array (
            'schemeId' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Scheme identifier.',
            ),
            'expand' => array (
                'type' => 'string',
                'info' => 'The parameters to expand.',
                'required' => false,
            ),
        ),
    ),
    array (
        'name' => 'deletePermissionScheme',
        'vendorUrl' => '/rest/api/2/permissionscheme/{schemeId}',
        'method' => 'DELETE',
        'description' => 'Deletes a permission scheme identified by the given id.',
        'args' => array (
            'schemeId' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Scheme identifier.',
            ),
        ),
    ),
    array (
        'name' => 'updatePermissionScheme',
        'vendorUrl' => '/rest/api/2/permissionscheme/{schemeId}',
        'method' => 'PUT',
        'description' => 'Updates a permission scheme.',
        'args' => array (
            'schemeId' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Permission scheme identifier.',
            ),
            'permissions' => array (
                'type' => 'Array',
                'example' => '[{"holder":{"type":"group","parameter":"jira-developers"},"permission":"ADMINISTER_PROJECTS"}]',
                'schema' => '',
                'info' => 'Permissions. Example [{"holder": {"type": "group","parameter": "jira-developers"},"permission": "ADMINISTER_PROJECTS"}].',
                'required' => true,
            ),
            'name' => array (
                'example' => '"Example permission scheme"',
                'schema' => '{"type":"string"}',
                'type' => 'String',
                'info' => 'Permission scheme name.',
                'required' => false,
            ),
            'description' => array (
                'example' => '"description"',
                'schema' => '{"type":"string"}',
                'type' => 'String',
                'info' => 'Permission scheme description.',
                'required' => false,
            ),
            'expand' => array (
                'type' => 'string',
                'info' => 'The parameters to expand.',
                'required' => false,
            ),
        ),
    ),
    array (
        'name' => 'getPermissionSchemeGrants',
        'vendorUrl' => '/rest/api/2/permissionscheme/{schemeId}/permission',
        'method' => 'GET',
        'description' => 'Returns all permission grants of the given permission scheme.',
        'args' => array (
            'schemeId' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Scheme identifier.',
            ),
            'expand' => array (
                'type' => 'string',
                'info' => 'The parameters to expand.',
                'required' => false,
            ),
        ),
    ),
    array (
        'name' => 'createPermissionGrant',
        'vendorUrl' => '/rest/api/2/permissionscheme/{schemeId}/permission',
        'method' => 'POST',
        'description' => 'Creates a permission grant in a permission scheme.',
        'args' => array (
            'schemeId' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Scheme identifier.',
            ),
            'holderType' => array (
                'type' => 'String',
                'example' => '{"type":"group","parameter":"jira-developers"}',
                'schema' => '{"title":"Permission Holder","type":"object","properties":{"type":{"type":"string"},"parameter":{"type":"string"}},"additionalProperties":false}',
                'info' => 'Permission type.',
                'required' => false,
            ),
            'holderParameter' => array (
                'type' => 'String',
                'example' => '{"type":"group","parameter":"jira-developers"}',
                'schema' => '{"title":"Permission Holder","type":"object","properties":{"type":{"type":"string"},"parameter":{"type":"string"}},"additionalProperties":false}',
                'info' => 'Permission parameter.',
                'required' => false,
            ),
            'permission' => array (
                'example' => '"ADMINISTER_PROJECTS"',
                'schema' => '{"type":"string"}',
                'type' => 'String',
                'info' => 'Permission.',
                'required' => false,
            ),
            'expand' => array (
                'type' => 'string',
                'info' => 'The parameters to expand.',
                'required' => false,
            ),
        ),
    ),
    array (
        'name' => 'deletePermissionSchemeEntity',
        'vendorUrl' => '/rest/api/2/permissionscheme/{schemeId}/permission/{permissionId}',
        'method' => 'DELETE',
        'description' => 'Deletes a permission grant from a permission scheme.',
        'args' => array (
            'schemeId' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Scheme identifier.',
            ),
            'permissionId' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Permission identifier.',
            ),
        ),
    ),
    array (
        'name' => 'getPermissionSchemeGrant',
        'vendorUrl' => '/rest/api/2/permissionscheme/{schemeId}/permission/{permissionId}',
        'method' => 'GET',
        'description' => 'Returns a permission grant identified by the given id.',
        'args' => array (
            'schemeId' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Scheme identifier.',
            ),
            'permissionId' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Permission identifier.',
            ),
            'expand' => array (
                'type' => 'string',
                'info' => 'The parameters to expand.',
                'required' => false,
            ),
        ),
    ),
    array (
        'name' => 'getPriorities',
        'vendorUrl' => '/rest/api/2/priority',
        'method' => 'GET',
        'description' => 'Returns a list of all issue priorities.',
        'args' => array (),
    ),
    array (
        'name' => 'getSinglePriority',
        'vendorUrl' => '/rest/api/2/priority/{id}',
        'method' => 'GET',
        'description' => 'Returns an issue priority.',
        'args' => array (
            'id' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Priority identifier.',
            ),
        ),
    ),
    array (
        'name' => 'getAllProjects',
        'vendorUrl' => '/rest/api/2/project',
        'method' => 'GET',
        'description' => 'Returns all projects which are visible for the currently logged in user.',
        'args' => array (
            'expand' => array (
                'type' => 'string',
                'info' => 'The parameters to expand.',
                'required' => false,
            ),
            'recent' => array (
                'type' => 'int',
                'info' => 'If this parameter is set then only projects recently accessed by the current user.',
                'required' => false,
            ),
        ),
    ),
    array (
        'name' => 'createProject',
        'vendorUrl' => '/rest/api/2/project',
        'method' => 'POST',
        'description' => 'Creates a new project.',
        'args' => array (
            'key' => array (
                'example' => '"EX"',
                'schema' => '{"type":"string"}',
                'type' => 'String',
                'info' => 'Project key.',
                'required' => true,
            ),
            'name' => array (
                'example' => '"Example"',
                'schema' => '{"type":"string"}',
                'type' => 'String',
                'info' => 'Project name.',
                'required' => true,
            ),
            'projectTypeKey' => array (
                'example' => '"business"',
                'schema' => '{"type":"string"}',
                'type' => 'String',
                'info' => 'Project type key.',
                'required' => true,
            ),
            'projectTemplateKey' => array (
                'example' => '"com.atlassian.jira-core-project-templates:jira-core-project-management"',
                'schema' => '{"type":"string"}',
                'type' => 'String',
                'info' => 'Project template key.',
                'required' => true,
            ),
            'description' => array (
                'example' => '"Example Project description"',
                'schema' => '{"type":"string"}',
                'type' => 'String',
                'info' => 'Project description.',
                'required' => false,
            ),
            'lead' => array (
                'example' => '"Charlie"',
                'schema' => '{"type":"string"}',
                'type' => 'String',
                'info' => 'Project lead.',
                'required' => false,
            ),
            'url' => array (
                'example' => '"http:\\/\\/atlassian.com"',
                'schema' => '{"type":"string"}',
                'type' => 'String',
                'info' => 'Project Url.',
                'required' => false,
            ),
            'assigneeType' => array (
                'example' => '"PROJECT_LEAD"',
                'schema' => '{"type":"string","enum":["PROJECT_LEAD","UNASSIGNED"]}',
                'type' => 'String',
                'info' => 'Assignee type. One of "PROJECT_LEAD", "UNASSIGNED".',
                'required' => false,
            ),
            'avatarId' => array (
                'example' => '10200',
                'schema' => '{"type":"integer"}',
                'type' => 'integer',
                'info' => 'Avatar identifier.',
                'required' => false,
            ),
            'issueSecurityScheme' => array (
                'example' => '10001',
                'schema' => '{"type":"integer"}',
                'type' => 'integer',
                'info' => 'Issue security scheme.',
                'required' => false,
            ),
            'permissionScheme' => array (
                'example' => '10011',
                'schema' => '{"type":"integer"}',
                'type' => 'integer',
                'info' => 'Permission scheme.',
                'required' => false,
            ),
            'notificationScheme' => array (
                'example' => '10021',
                'schema' => '{"type":"integer"}',
                'type' => 'integer',
                'info' => 'Notification scheme.',
                'required' => false,
            ),
            'categoryId' => array (
                'example' => '10120',
                'schema' => '{"type":"integer"}',
                'type' => 'integer',
                'info' => 'Category identifier.',
                'required' => false,
            ),
        ),
    ),
    array (
        'name' => 'updateProject',
        'vendorUrl' => '/rest/api/2/project/{projectIdOrKey}',
        'method' => 'PUT',
        'description' => 'Updates a project.',
        'args' => array (
            'projectIdOrKey' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Project identifier or key.',
            ),
            'expand' => array (
                'type' => 'string',
                'info' => 'The parameters to expand in returned project.',
                'required' => false,
            ),
            'key' => array (
                'example' => '"EX"',
                'schema' => '{"type":"string"}',
                'type' => 'String',
                'info' => 'Project key.',
                'required' => false,
            ),
            'name' => array (
                'example' => '"Example"',
                'schema' => '{"type":"string"}',
                'type' => 'String',
                'info' => 'Project name.',
                'required' => false,
            ),
            'projectTypeKey' => array (
                'example' => '"business"',
                'schema' => '{"type":"string"}',
                'type' => 'String',
                'info' => 'Project type key.',
                'required' => false,
            ),
            'projectTemplateKey' => array (
                'example' => '"com.atlassian.jira-core-project-templates:jira-core-project-management"',
                'schema' => '{"type":"string"}',
                'type' => 'String',
                'info' => 'Project template key.',
                'required' => false,
            ),
            'description' => array (
                'example' => '"Example Project description"',
                'schema' => '{"type":"string"}',
                'type' => 'String',
                'info' => 'Project description.',
                'required' => false,
            ),
            'lead' => array (
                'example' => '"Charlie"',
                'schema' => '{"type":"string"}',
                'type' => 'String',
                'info' => 'Project lead.',
                'required' => false,
            ),
            'url' => array (
                'example' => '"http:\\/\\/atlassian.com"',
                'schema' => '{"type":"string"}',
                'type' => 'String',
                'info' => 'Project Url.',
                'required' => false,
            ),
            'assigneeType' => array (
                'example' => '"PROJECT_LEAD"',
                'schema' => '{"type":"string","enum":["PROJECT_LEAD","UNASSIGNED"]}',
                'type' => 'String',
                'info' => 'Assignee type. One of "PROJECT_LEAD", "UNASSIGNED".',
                'required' => false,
            ),
            'avatarId' => array (
                'example' => '10200',
                'schema' => '{"type":"integer"}',
                'type' => 'integer',
                'info' => 'Avatar identifier.',
                'required' => false,
            ),
            'issueSecurityScheme' => array (
                'example' => '10001',
                'schema' => '{"type":"integer"}',
                'type' => 'integer',
                'info' => 'Issue security scheme.',
                'required' => false,
            ),
            'permissionScheme' => array (
                'example' => '10011',
                'schema' => '{"type":"integer"}',
                'type' => 'integer',
                'info' => 'Permission scheme.',
                'required' => false,
            ),
            'notificationScheme' => array (
                'example' => '10021',
                'schema' => '{"type":"integer"}',
                'type' => 'integer',
                'info' => 'Notification scheme.',
                'required' => false,
            ),
            'categoryId' => array (
                'example' => '10120',
                'schema' => '{"type":"integer"}',
                'type' => 'integer',
                'info' => 'Category identifier.',
                'required' => false,
            ),
        ),
    ),
    array (
        'name' => 'deleteProject',
        'vendorUrl' => '/rest/api/2/project/{projectIdOrKey}',
        'method' => 'DELETE',
        'description' => 'Deletes a project.',
        'args' => array (
            'projectIdOrKey' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Project identifier or key.',
            ),
        ),
    ),
    array (
        'name' => 'getSingleProject',
        'vendorUrl' => '/rest/api/2/project/{projectIdOrKey}',
        'method' => 'GET',
        'description' => 'Contains a full representation of a project in JSON format.',
        'args' => array (
            'projectIdOrKey' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Project identifier or key.',
            ),
            'expand' => array (
                'type' => 'string',
                'info' => 'The parameters to expand.',
                'required' => false,
            ),
        ),
    ),
    array (
        'name' => 'updateProjectAvatar',
        'vendorUrl' => '/rest/api/2/project/{projectIdOrKey}/avatar',
        'method' => 'PUT',
        'description' => 'Update project avatar',
        'args' => array (
            'projectIdOrKey' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Project identifier or key.',
            ),
            'id' => array (
                'schema' => '{"type":"string"}',
                'type' => 'String',
                'info' => 'Project avatar identifier.',
                'required' => true,
            ),
            'owner' => array (
                'schema' => '{"type":"string"}',
                'type' => 'String',
                'info' => 'Project avatar owner.',
                'required' => false,
            ),
            'isSystemAvatar' => array (
                'schema' => '{"type":"boolean"}',
                'type' => 'String',
                'info' => 'Is system avatar.',
                'required' => false,
            ),
            'isSelected' => array (
                'schema' => '{"type":"boolean"}',
                'type' => 'boolean',
                'info' => 'Is selected.',
                'required' => false,
            ),
            'isDeletable' => array (
                'schema' => '{"type":"boolean"}',
                'type' => 'boolean',
                'info' => 'Is deletable.',
                'required' => false,
            ),
            'selected' => array (
                'schema' => '{"type":"boolean"}',
                'type' => 'boolean',
                'info' => 'Project avatar selected.',
                'required' => false,
            ),
            'urls' => array (
                'schema' => '',
                'type' => 'JSON',
                'info' => 'Urls. Example {"16x16": "http://www.example.com/jira/secure/useravatar?size=xsmall&ownerId=fred", "32x32": "http://www.example.com/jira/secure/useravatar?size=medium&ownerId=fred"}.',
                'required' => false,
            ),
        ),
    ),
    array (
        'name' => 'deleteProjectAvatar',
        'vendorUrl' => '/rest/api/2/project/{projectIdOrKey}/avatar/{id}',
        'method' => 'DELETE',
        'description' => 'Deletes avatar.',
        'args' => array (
            'projectIdOrKey' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Project identifier or key.',
            ),
            'id' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Avatar identifier.',
            ),
        ),
    ),
    array (
        'name' => 'createProjectAvatar',
        'vendorUrl' => '/rest/api/2/project/{projectIdOrKey}/avatar2',
        'method' => 'POST-FILE',
        'description' => 'Creates an avatar for a project, for a given project Id or project key.',
        'args' => array (
            'projectIdOrKey' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Project identifier or key.',
            ),
            'image' => array (
                'required' => true,
                'type' => 'File',
                'info' => 'Avatar image.',
            ),
            'x' => array (
                'type' => 'int',
                'info' => 'The X coordinate of the top-left corner of the crop region. Default: 0.',
                'required' => false,
            ),
            'y' => array (
                'type' => 'int',
                'info' => 'The Y coordinate of the top-left corner of the crop region. Default: 0.',
                'required' => false,
            ),
            'size' => array (
                'type' => 'int',
                'info' => 'The length of each side of the crop region. The crop region can only be a square.',
                'required' => false,
            ),
        ),
        'custom' => true,
    ),
    array (
        'name' => 'getAllProjectAvatars',
        'vendorUrl' => '/rest/api/2/project/{projectIdOrKey}/avatars',
        'method' => 'GET',
        'description' => 'Returns all avatars which are visible for the currently logged in user.',
        'args' => array (
            'projectIdOrKey' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Project identifier or key.',
            ),
        ),
    ),
    array (
        'name' => 'getProjectComponents',
        'vendorUrl' => '/rest/api/2/project/{projectIdOrKey}/components',
        'method' => 'GET',
        'description' => 'Contains a full representation of a the specified project\'s components.',
        'args' => array (
            'projectIdOrKey' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Project identifier or key.',
            ),
        ),
    ),
    array (
        'name' => 'getAllProjectStatuses',
        'vendorUrl' => '/rest/api/2/project/{projectIdOrKey}/statuses',
        'method' => 'GET',
        'description' => 'Get all issue types with valid status values for a project.',
        'args' => array (
            'projectIdOrKey' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Project identifier or key.',
            ),
        ),
    ),
    array (
        'name' => 'updateProjectType',
        'vendorUrl' => '/rest/api/2/project/{projectIdOrKey}/type/{newProjectTypeKey}',
        'method' => 'PUT',
        'description' => 'Updates the type of a project.',
        'args' => array (
            'projectIdOrKey' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Project identifier or key.',
            ),
            'newProjectTypeKey' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'New project type key.',
            ),
        ),
    ),
    array (
        'name' => 'getProjectVersionsPaginated',
        'vendorUrl' => '/rest/api/2/project/{projectIdOrKey}/version',
        'method' => 'GET',
        'description' => 'Returns all versions for the specified project.',
        'args' => array (
            'projectIdOrKey' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Project identifier or key.',
            ),
            'startAt' => array (
                'type' => 'long',
                'info' => 'The page offset, if not specified then defaults to 0.',
                'required' => false,
            ),
            'maxResults' => array (
                'type' => 'int',
                'info' => 'How many results on the page should be included. Defaults to 50.',
                'required' => false,
            ),
            'orderBy' => array (
                'type' => 'string',
                'info' => 'Ordering of the results.',
                'required' => false,
            ),
            'expand' => array (
                'type' => 'string',
                'info' => 'The parameters to expand.',
                'required' => false,
            ),
        ),
    ),
    array (
        'name' => 'getProjectPropertiesKeys',
        'vendorUrl' => '/rest/api/2/project/{projectIdOrKey}/properties',
        'method' => 'GET',
        'description' => 'Returns the keys of all properties for the project identified by the key or by the id.',
        'args' => array (
            'projectIdOrKey' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Project identifier or key.',
            ),
        ),
    ),
    array (
        'name' => 'deleteProjectProperty',
        'vendorUrl' => '/rest/api/2/project/{projectIdOrKey}/properties/{propertyKey}',
        'method' => 'DELETE',
        'description' => 'Removes the property from the project identified by the key or by the id.',
        'args' => array (
            'projectIdOrKey' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Project identifier or key.',
            ),
            'propertyKey' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Property key.',
            ),
        ),
    ),
    array (
        'name' => 'setProjectProperty',
        'vendorUrl' => '/rest/api/2/project/{projectIdOrKey}/properties/{propertyKey}',
        'method' => 'PUT',
        'description' => 'Sets the value of the specified project\'s property.',
        'args' => array (
            'projectIdOrKey' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Project identifier or key.',
            ),
            'propertyKey' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Property key.',
            ),
            'value' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Property value.',
            ),
        ),
        'custom' => true,
    ),
    array (
        'name' => 'getProjectProperty',
        'vendorUrl' => '/rest/api/2/project/{projectIdOrKey}/properties/{propertyKey}',
        'method' => 'GET',
        'description' => 'Returns the value of the property with a given key from the project identified by the key or by the id.',
        'args' => array (
            'projectIdOrKey' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Project identifier or key.',
            ),
            'propertyKey' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Property key.',
            ),
        ),
    ),
    array (
        'name' => 'getSingleProjectRoles',
        'vendorUrl' => '/rest/api/2/project/{projectIdOrKey}/role',
        'method' => 'GET',
        'description' => 'Returns all roles in the given project Id or key, with links to full details on each role.',
        'args' => array (
            'projectIdOrKey' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Project identifier or key.',
            ),
        ),
    ),
    array (
        'name' => 'getProjectSingleRole',
        'vendorUrl' => '/rest/api/2/project/{projectIdOrKey}/role/{id}',
        'method' => 'GET',
        'description' => 'Returns the details for a given project role in a project together with project role actors.',
        'args' => array (
            'projectIdOrKey' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Project identifier or key.',
            ),
            'id' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Role identifier.',
            ),
        ),
    ),
    array (
        'name' => 'setRoleActors',
        'vendorUrl' => '/rest/api/2/project/{projectIdOrKey}/role/{id}',
        'method' => 'PUT',
        'description' => 'Updates a project role to include the specified actors (users or groups).',
        'args' => array (
            'projectIdOrKey' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Project identifier or key.',
            ),
            'id' => array (
                'required' => true,
                'example' => '10360',
                'schema' => '{"type":"integer"}',
                'type' => 'integer',
                'info' => 'Role identifier.',
            ),
            'categorisedActors' => array (
                'type' => 'JSON',
                'example' => '',
                'schema' => '{"type":"object","patternProperties":{".+":{"type":"array","items":{"type":"string"}}},"additionalProperties":false}',
                'info' => 'Categorised actors. Example {"atlassian-user-role-actor":["admin"],"atlassian-group-role-actor":["jira-developers"]}.',
                'required' => false,
            ),
        ),
    ),
    array (
        'name' => 'addActorToProjectRole',
        'vendorUrl' => '/rest/api/2/project/{projectIdOrKey}/role/{id}',
        'method' => 'POST',
        'description' => 'Adds an actor (user or group) to a project role.',
        'args' => array (
            'projectIdOrKey' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Project identifier or key.',
            ),
            'id' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Role identifier.',
            ),
            'categorisedActors' => array (
                'schema' => '{"type":"object","patternProperties":{".+":{"type":"array","items":{"type":"string"}}},"additionalProperties":false}',
                'type' => 'String',
                'info' => 'Categorised actors. Example {"atlassian-user-role-actor":["admin"],"atlassian-group-role-actor":["jira-developers"]}.',
                'required' => true,
            ),
        ),
    ),
    array (
        'name' => 'deleteActorFromProjectRole',
        'vendorUrl' => '/rest/api/2/project/{projectIdOrKey}/role/{id}',
        'method' => 'DELETE',
        'description' => 'Deletes actors (users or groups) from a project role.',
        'args' => array (
            'projectIdOrKey' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Project identifier or key.',
            ),
            'id' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Role identifier.',
            ),
            'user' => array (
                'type' => 'string',
                'info' => 'The username to remove from the project role.',
                'required' => false,
            ),
            'group' => array (
                'type' => 'string',
                'info' => 'The groupname to remove from the project role.',
                'required' => false,
            ),
        ),
    ),
    array (
        'name' => 'getIssueSecurityScheme',
        'vendorUrl' => '/rest/api/2/project/{projectKeyOrId}/issuesecuritylevelscheme',
        'method' => 'GET',
        'description' => 'Returns the issue security scheme for project.',
        'args' => array (
            'projectKeyOrId' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Project key or identifier.',
            ),
        ),
    ),
    array (
        'name' => 'getNotificationScheme',
        'vendorUrl' => '/rest/api/2/project/{projectKeyOrId}/notificationscheme',
        'method' => 'GET',
        'description' => 'Gets a notification scheme associated with the project.',
        'args' => array (
            'projectKeyOrId' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Project key or identifier.',
            ),
            'expand' => array (
                'type' => 'string',
                'info' => 'The parameters to expand.',
                'required' => false,
            ),
        ),
    ),
    array (
        'name' => 'getAssignedPermissionScheme',
        'vendorUrl' => '/rest/api/2/project/{projectKeyOrId}/permissionscheme',
        'method' => 'GET',
        'description' => 'Gets a permission scheme assigned with a project.',
        'args' => array (
            'projectKeyOrId' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Project key or identifier.',
            ),
            'expand' => array (
                'type' => 'string',
                'info' => 'The parameters to expand.',
                'required' => false,
            ),
        ),
    ),
    array (
        'name' => 'assignPermissionScheme',
        'vendorUrl' => '/rest/api/2/project/{projectKeyOrId}/permissionscheme',
        'method' => 'PUT',
        'description' => 'Assigns a permission scheme with a project.',
        'args' => array (
            'projectKeyOrId' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Project key or identifier.',
            ),
            'id' => array (
                'example' => '10000',
                'schema' => '{"type":"integer"}',
                'type' => 'integer',
                'info' => 'Permission scheme identifier.',
                'required' => false,
            ),
            'expand' => array (
                'type' => 'string',
                'info' => 'The parameters to expand.',
                'required' => false,
            ),
        ),
    ),
    array (
        'name' => 'getSecurityLevelsForProject',
        'vendorUrl' => '/rest/api/2/project/{projectKeyOrId}/securitylevel',
        'method' => 'GET',
        'description' => 'Returns all security levels for the project that the current logged in user has access to.',
        'args' => array (
            'projectKeyOrId' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Project key or identifier.',
            ),
        ),
    ),
    array (
        'name' => 'getAllProjectTypes',
        'vendorUrl' => '/rest/api/2/project/type',
        'method' => 'GET',
        'description' => 'Returns all the project types defined on the JIRA instance.',
        'args' => array (),
    ),
    array (
        'name' => 'getProjectTypeByKey',
        'vendorUrl' => '/rest/api/2/project/type/{projectTypeKey}',
        'method' => 'GET',
        'description' => 'Returns the project type with the given key.',
        'args' => array (
            'projectTypeKey' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Project type key.',
            ),
        ),
    ),
    array (
        'name' => 'getAccessibleProjectTypeByKey',
        'vendorUrl' => '/rest/api/2/project/type/{projectTypeKey}/accessible',
        'method' => 'GET',
        'description' => 'Returns the project type with the given key, if it is accessible to the logged in user.',
        'args' => array (
            'projectTypeKey' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Project type key.',
            ),
        ),
    ),
    array (
        'name' => 'getAllProjectCategories',
        'vendorUrl' => '/rest/api/2/projectCategory',
        'method' => 'GET',
        'description' => 'Returns all project categories.',
        'args' => array (),
    ),
    array (
        'name' => 'createProjectCategory',
        'vendorUrl' => '/rest/api/2/projectCategory',
        'method' => 'POST',
        'description' => 'Create a project category.',
        'args' => array (
            'name' => array (
                'example' => '"CREATED"',
                'schema' => '{"type":"string"}',
                'type' => 'String',
                'info' => 'Project category name.',
                'required' => true,
            ),
            'description' => array (
                'example' => '"Created Project Category"',
                'schema' => '{"type":"string"}',
                'type' => 'String',
                'info' => 'Project category description.',
                'required' => false,
            ),
        ),
    ),
    array (
        'name' => 'getProjectCategoryById',
        'vendorUrl' => '/rest/api/2/projectCategory/{id}',
        'method' => 'GET',
        'description' => 'Contains a representation of a project category in JSON format.',
        'args' => array (
            'id' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Project category identifier.',
            ),
        ),
    ),
    array (
        'name' => 'deleteProjectCategory',
        'vendorUrl' => '/rest/api/2/projectCategory/{id}',
        'method' => 'DELETE',
        'description' => 'Delete a project category.',
        'args' => array (
            'id' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Project category identifier.',
            ),
        ),
    ),
    array (
        'name' => 'updateProjectCategory',
        'vendorUrl' => '/rest/api/2/projectCategory/{id}',
        'method' => 'PUT',
        'description' => 'Modify a project category.',
        'args' => array (
            'id' => array (
                'required' => true,
                'schema' => '{"type":"string"}',
                'type' => 'String',
                'info' => 'Project category identifier.',
            ),
            'name' => array (
                'example' => '"UPDATED"',
                'schema' => '{"type":"string"}',
                'type' => 'String',
                'info' => 'Project category name.',
                'required' => false,
            ),
            'description' => array (
                'example' => '"Updated Project Category"',
                'schema' => '{"type":"string"}',
                'type' => 'String',
                'info' => 'Project category description.',
                'required' => false,
            ),
        ),
    ),
    array (
        'name' => 'validateProject',
        'vendorUrl' => '/rest/api/2/projectvalidate/key',
        'method' => 'GET',
        'description' => 'Validates a project key.',
        'args' => array (
            'key' => array (
                'type' => 'string',
                'info' => 'The project key.',
                'required' => false,
            ),
        ),
    ),
    array (
        'name' => 'getResolutions',
        'vendorUrl' => '/rest/api/2/resolution',
        'method' => 'GET',
        'description' => 'Returns a list of all resolutions.',
        'args' => array (),
    ),
    array (
        'name' => 'getSingleResolution',
        'vendorUrl' => '/rest/api/2/resolution/{id}',
        'method' => 'GET',
        'description' => 'Returns a resolution.',
        'args' => array (
            'id' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Resolution identifier.',
            ),
        ),
    ),
    array (
        'name' => 'getProjectRoles',
        'vendorUrl' => '/rest/api/2/role',
        'method' => 'GET',
        'description' => 'Get all the ProjectRoles available in JIRA. Currently this list is global.',
        'args' => array (),
    ),
    array (
        'name' => 'createProjectRole',
        'vendorUrl' => '/rest/api/2/role',
        'method' => 'POST',
        'description' => 'Creates a new ProjectRole to be available in JIRA.',
        'args' => array (
            'name' => array (
                'example' => '"MyRole"',
                'schema' => '{"type":"string"}',
                'type' => 'String',
                'info' => 'Project role name.',
                'required' => true,
            ),
            'description' => array (
                'example' => '"role description"',
                'schema' => '{"type":"string"}',
                'type' => 'String',
                'info' => 'Project role description.',
                'required' => false,
            ),
        ),
    ),
    array (
        'name' => 'getProjectRolesById',
        'vendorUrl' => '/rest/api/2/role/{id}',
        'method' => 'GET',
        'description' => 'Get a specific ProjectRole available in JIRA.',
        'args' => array (
            'id' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Role identifier.',
            ),
        ),
    ),
    array (
        'name' => 'updateProjectRole',
        'vendorUrl' => '/rest/api/2/role/{id}',
        'method' => 'PUT',
        'description' => 'Fully updates a roles.',
        'args' => array (
            'id' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Project role identifier.',
            ),
            'name' => array (
                'example' => '"MyRole"',
                'schema' => '{"type":"string"}',
                'type' => 'String',
                'info' => 'Project role name.',
                'required' => true,
            ),
            'description' => array (
                'example' => '"role description"',
                'schema' => '{"type":"string"}',
                'type' => 'String',
                'info' => 'Project role description.',
                'required' => true,
            ),
        ),
    ),
    array (
        'name' => 'deleteProjectRole',
        'vendorUrl' => '/rest/api/2/role/{id}',
        'method' => 'DELETE',
        'description' => 'Deletes a role.',
        'args' => array (
            'id' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Role identifier.',
            ),
            'swap' => array (
                'type' => 'long',
                'info' => 'If given, removes a role even if it is used in scheme by replacing the role with the given one.',
                'required' => false,
            ),
        ),
    ),
    array (
        'name' => 'getDefaultActorsForRole',
        'vendorUrl' => '/rest/api/2/role/{id}/actors',
        'method' => 'GET',
        'description' => 'Gets default actors for the given role.',
        'args' => array (
            'id' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Role identifier.',
            ),
        ),
    ),
    array (
        'name' => 'addDefaultActorsToRole',
        'vendorUrl' => '/rest/api/2/role/{id}/actors',
        'method' => 'POST',
        'description' => 'Adds default actors to the given role. The request data should contain a list of usernames or a list of groups to add.',
        'args' => array (
            'id' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Role identifier.',
            ),
            'user' => array (
                'type' => 'String',
                'example' => '["admin"]',
                'schema' => '{"type":"array","items":{"type":"string"}}',
                'info' => 'Comma separated list of users.',
                'required' => false,
            ),
            'group' => array (
                'schema' => '{"type":"array","items":{"type":"string"}}',
                'type' => 'String',
                'info' => 'Comma separated list of groups.  ',
                'required' => false,
            ),
        ),
        'custom' => true,
    ),
    array (
        'name' => 'deleteDefaultActorFromRole',
        'vendorUrl' => '/rest/api/2/role/{id}/actors',
        'method' => 'DELETE',
        'description' => 'Removes default actor from the given role.',
        'args' => array (
            'id' => array (
                'required' => true,
                'type' => 'String',
                'info' => 'Role identifier.',
            ),
            'user' => array (
                'type' => 'string',
                'info' => 'If given, removes an actor from given role.',
                'required' => false,
            ),
            'group' => array (
                'type' => 'string',
                'info' => 'If given, removes an actor from given role.',
                'required' => false,
            ),
        ),
    ),
);
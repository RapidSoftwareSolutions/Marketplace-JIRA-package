<?php
return array (
    array (
        array (
            'name' => 'getScreenFieldsToAdd',
            'vendorUrl' => '/rest/api/2/screens/{screenId}/availableFields',
            'method' => 'GET',
            'description' => 'Gets available fields for screen.',
            'args' => array (
                'screenId' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Screen identifier.',
                ),
            ),
        ),
        array (
            'name' => 'getAllScreenTabs',
            'vendorUrl' => '/rest/api/2/screens/{screenId}/tabs',
            'method' => 'GET',
            'description' => 'Returns a list of all tabs for the given screen.',
            'args' => array (
                'screenId' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Screen identifier.',
                ),
                'projectKey' => array (
                    'type' => 'string',
                    'info' => 'The key of the project.',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'addScreenTab',
            'vendorUrl' => '/rest/api/2/screens/{screenId}/tabs',
            'method' => 'POST',
            'description' => 'Creates tab for given screen.',
            'args' => array (
                'screenId' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Screen identifier.',
                ),
                'name' => array (
                    'schema' => '{"type":"string"}',
                    'type' => 'String',
                    'info' => 'Tab name.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'renameScreenTab',
            'vendorUrl' => '/rest/api/2/screens/{screenId}/tabs/{tabId}',
            'method' => 'PUT',
            'description' => 'Renames tab on given screen.',
            'args' => array (
                'screenId' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Screen identifier.',
                ),
                'tabId' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Tab identifier.',
                ),
                'name' => array (
                    'schema' => '{"type":"string"}',
                    'type' => 'String',
                    'info' => 'Tab name.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'deleteScreenTab',
            'vendorUrl' => '/rest/api/2/screens/{screenId}/tabs/{tabId}',
            'method' => 'DELETE',
            'description' => 'Deletes tab to give screen.',
            'args' => array (
                'screenId' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Screen identifier.',
                ),
                'tabId' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Tab identifier.',
                ),
            ),
        ),
        array (
            'name' => 'getAllScreenFields',
            'vendorUrl' => '/rest/api/2/screens/{screenId}/tabs/{tabId}/fields',
            'method' => 'GET',
            'description' => 'Gets all fields for a given tab.',
            'args' => array (
                'screenId' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Screen identifier.',
                ),
                'tabId' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Tab identifier.',
                ),
                'projectKey' => array (
                    'type' => 'string',
                    'info' => 'The key of the project.',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'addScreenField',
            'vendorUrl' => '/rest/api/2/screens/{screenId}/tabs/{tabId}/fields',
            'method' => 'POST',
            'description' => 'Adds field to the given tab.',
            'args' => array (
                'screenId' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Screen identifier.',
                ),
                'tabId' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Tab identifier.',
                ),
                'fieldId' => array (
                    'example' => '"summary"',
                    'schema' => '{"type":"string"}',
                    'type' => 'String',
                    'info' => 'Field identifier.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'removeScreenField',
            'vendorUrl' => '/rest/api/2/screens/{screenId}/tabs/{tabId}/fields/{id}',
            'method' => 'DELETE',
            'description' => 'Removes field from given tab.',
            'args' => array (
                'screenId' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Screen identifier.',
                ),
                'tabId' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Tab identifier.',
                ),
                'id' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Field identifier.',
                ),
            ),
        ),
        array (
            'name' => 'moveScreenField',
            'vendorUrl' => '/rest/api/2/screens/{screenId}/tabs/{tabId}/fields/{id}/move',
            'method' => 'POST',
            'description' => 'Moves field on the given tab.',
            'args' => array (
                'screenId' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Screen identifier.',
                ),
                'tabId' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Tab identifier.',
                ),
                'id' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Field identifier.',
                ),
                'after' => array (
                    'schema' => '{"type":"string","format":"uri"}',
                    'type' => 'String',
                    'info' => 'A field to place this field after. The value should be the self link of another field.',
                    'required' => true,
                ),
                'position' => array (
                    'schema' => '{"type":"string","enum":["Earlier","Later","First","Last"]}',
                    'type' => 'String',
                    'info' => 'An absolute position, one of "Earlier", "Later", "First", "Last".',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'moveScreenTab',
            'vendorUrl' => '/rest/api/2/screens/{screenId}/tabs/{tabId}/move/{pos}',
            'method' => 'POST',
            'description' => 'Moves tab position.',
            'args' => array (
                'screenId' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Screen identifier.',
                ),
                'tabId' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Tab identifier.',
                ),
                'pos' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'New screen tab position.',
                ),
            ),
        ),
        array (
            'name' => 'addFieldToDefaultScreen',
            'vendorUrl' => '/rest/api/2/screens/addToDefault/{fieldId}',
            'method' => 'POST',
            'description' => 'Adds field or custom field to the default tab.',
            'args' => array (
                'fieldId' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Field identifier.',
                ),
            ),
        ),
        array (
            'name' => 'search',
            'vendorUrl' => '/rest/api/2/search',
            'method' => 'POST',
            'description' => 'Performs a search using JQL.',
            'args' => array (
                'jql' => array (
                    'example' => '"project = HSP"',
                    'schema' => '{"type":"string"}',
                    'type' => 'String',
                    'info' => 'JQL expression.',
                    'required' => true,
                ),
                'fieldsByKeys' => array (
                    'example' => 'false',
                    'schema' => '{"type":"boolean"}',
                    'type' => 'boolean',
                    'info' => 'Fields by keys.',
                    'required' => true,
                ),
                'validateQuery' => array (
                    'schema' => '{"type":"string"}',
                    'type' => 'String',
                    'info' => 'Validate query.',
                    'required' => false,
                ),
                'fields' => array (
                    'type' => 'String',
                    'example' => '["summary","status","assignee"]',
                    'schema' => '{"type":"array","items":{"type":"string"}}',
                    'info' => 'Comma-separated list of fields.',
                    'required' => false,
                ),
                'properties' => array (
                    'schema' => '{"type":"array","items":{"type":"string"}}',
                    'type' => 'String',
                    'info' => 'Comma-separated list of properties.',
                    'required' => false,
                ),
                'startAt' => array (
                    'example' => '0',
                    'schema' => '{"type":"integer"}',
                    'type' => 'integer',
                    'info' => 'Start at element.',
                    'required' => false,
                ),
                'maxResults' => array (
                    'example' => '15',
                    'schema' => '{"type":"integer"}',
                    'type' => 'integer',
                    'info' => 'Max retrieving results.',
                    'required' => false,
                ),
            ),
            'custom' => true,
        ),
        array (
            'name' => 'getIssuesecuritylevel',
            'vendorUrl' => '/rest/api/2/securitylevel/{id}',
            'method' => 'GET',
            'description' => 'Returns a full representation of the security level that has the given identifier.',
            'args' => array (
                'id' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Security level identifier.',
                ),
            ),
        ),
        array (
            'name' => 'getServerInfo',
            'vendorUrl' => '/rest/api/2/serverInfo',
            'method' => 'GET',
            'description' => 'Returns general information about the current JIRA server.',
            'args' => array (
                'doHealthCheck' => array (
                    'type' => 'boolean',
                    'info' => 'Do health check.',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'setBaseURL',
            'vendorUrl' => '/rest/api/2/settings/baseUrl',
            'method' => 'PUT',
            'description' => 'Sets the base URL that is configured for this JIRA instance.',
            'args' => array (
                'value' => array (
                    'schema' => '{"id":"https:\\/\\/docs.atlassian.com\\/jira\\/REST\\/schema\\/string#","title":"String","type":"string"}',
                    'type' => 'String',
                    'info' => 'Base URL.',
                    'required' => true,
                ),
            ),
            'custom' => true,
        ),
        array (
            'name' => 'getIssueNavigatorDefaultColumns',
            'vendorUrl' => '/rest/api/2/settings/columns',
            'method' => 'GET',
            'description' => 'Returns the default system columns for issue navigator.',
            'args' => array (),
        ),
        array (
            'name' => 'setIssueNavigatorDefaultColumns',
            'vendorUrl' => '/rest/api/2/settings/columns',
            'method' => 'PUT',
            'description' => 'Sets the default system columns for issue navigator.',
            'args' => array (),
        ),
        array (
            'name' => 'getStatuses',
            'vendorUrl' => '/rest/api/2/status',
            'method' => 'GET',
            'description' => 'Returns a list of all statuses.',
            'args' => array (),
        ),
        array (
            'name' => 'getSingleStatus',
            'vendorUrl' => '/rest/api/2/status/{idOrName}',
            'method' => 'GET',
            'description' => 'Returns a full representation of the Status having the given id or name.',
            'args' => array (
                'idOrName' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Identifier or name of status.',
                ),
            ),
        ),
        array (
            'name' => 'getStatusCategories',
            'vendorUrl' => '/rest/api/2/statuscategory',
            'method' => 'GET',
            'description' => 'Returns a list of all status categories.',
            'args' => array (),
        ),
        array (
            'name' => 'getStatusCategory',
            'vendorUrl' => '/rest/api/2/statuscategory/{idOrKey}',
            'method' => 'GET',
            'description' => 'Returns a full representation of the StatusCategory having the given id or key.',
            'args' => array (
                'idOrKey' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Identifier or key of status category.',
                ),
            ),
        ),
        array (
            'name' => 'createAvatar',
            'vendorUrl' => '/rest/api/2/universal_avatar/type/{type}/owner/{entityId}',
            'method' => 'POST',
            'description' => 'Creates an avatar for a given entity.',
            'args' => array (
                'type' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Universal avatar type.',
                ),
                'entityId' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Entity identifier.',
                ),
                'image' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Avatar image file.',
                ),
                'x' => array (
                    'type' => 'int',
                    'info' => 'The X coordinate of the top-left corner of the crop region.',
                    'required' => false,
                ),
                'y' => array (
                    'type' => 'int',
                    'info' => 'The Y coordinate of the top-left corner of the crop region.',
                    'required' => false,
                ),
                'size' => array (
                    'type' => 'int',
                    'info' => 'The length of each side of the crop region. The crop region can only be a square.',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'getAvatars',
            'vendorUrl' => '/rest/api/2/universal_avatar/type/{type}/owner/{owningObjectId}',
            'method' => 'GET',
            'description' => 'Get avatars.',
            'args' => array (
                'type' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Universal avatar type.',
                ),
                'owningObjectId' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Universal avatar owning object identifier.',
                ),
            ),
        ),
        array (
            'name' => 'deleteAvatar',
            'vendorUrl' => '/rest/api/2/universal_avatar/type/{type}/owner/{owningObjectId}/avatar/{id}',
            'method' => 'DELETE',
            'description' => 'Deletes avatar.',
            'args' => array (
                'type' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Universal avatar type.',
                ),
                'owningObjectId' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Universal avatar owning object identifier.',
                ),
                'id' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Avatar identifier.',
                ),
            ),
        ),
        array (
            'name' => 'getUser',
            'vendorUrl' => '/rest/api/2/user',
            'method' => 'GET',
            'description' => 'Returns a user.',
            'args' => array (
                'username' => array (
                    'type' => 'string',
                    'info' => 'The username.',
                    'required' => true,
                ),
                'key' => array (
                    'type' => 'string',
                    'info' => 'User key.',
                    'required' => false,
                ),
                'expand' => array (
                    'type' => 'string',
                    'info' => 'Expand result, use "groups", "applicationRoles".',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'findBulkAssignableUsers',
            'vendorUrl' => '/rest/api/2/user/assignable/multiProjectSearch',
            'method' => 'GET',
            'description' => 'Returns a list of users that match the search string and can be assigned issues for all the given projects.',
            'args' => array (
                'projectKeys' => array (
                    'type' => 'string',
                    'info' => 'Comma-separated list of the projects keys we are finding assignable users for.',
                    'required' => true,
                ),
                'username' => array (
                    'type' => 'string',
                    'info' => 'The username.',
                    'required' => false,
                ),
                'startAt' => array (
                    'type' => 'int',
                    'info' => 'The index of the first user to return.',
                    'required' => false,
                ),
                'maxResults' => array (
                    'type' => 'int',
                    'info' => 'The maximum number of users to return.',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'findAssignableUsers',
            'vendorUrl' => '/rest/api/2/user/assignable/search',
            'method' => 'GET',
            'description' => 'Returns a list of users that match the search string.',
            'args' => array (
                'project' => array (
                    'type' => 'string',
                    'info' => 'The key of the project we are finding assignable users for.',
                    'required' => true,
                ),
                'issueKey' => array (
                    'type' => 'string',
                    'info' => 'The issue key for the issue being edited we need to find assignable users for.',
                    'required' => false,
                ),
                'username' => array (
                    'type' => 'string',
                    'info' => 'The username.',
                    'required' => false,
                ),
                'startAt' => array (
                    'type' => 'int',
                    'info' => 'The index of the first user to return.',
                    'required' => false,
                ),
                'maxResults' => array (
                    'type' => 'int',
                    'info' => 'The maximum number of users to return.',
                    'required' => false,
                ),
                'actionDescriptorId' => array (
                    'type' => 'int',
                    'info' => 'Action descriptor identifier.',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'getDefaultColumns',
            'vendorUrl' => '/rest/api/2/user/columns',
            'method' => 'GET',
            'description' => 'Returns the default columns for the given user.',
            'args' => array (
                'username' => array (
                    'type' => 'string',
                    'info' => 'Username.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'setColumns',
            'vendorUrl' => '/rest/api/2/user/columns',
            'method' => 'PUT',
            'description' => 'Sets the default columns for the given user.',
            'args' => array (),
        ),
        array (
            'name' => 'resetDefaultColumns',
            'vendorUrl' => '/rest/api/2/user/columns',
            'method' => 'DELETE',
            'description' => 'Reset the default columns for the given user to the system default.',
            'args' => array (
                'username' => array (
                    'type' => 'string',
                    'info' => 'Username.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'findUsersWithAllPermissions',
            'vendorUrl' => '/rest/api/2/user/permission/search',
            'method' => 'GET',
            'description' => 'Returns a list of active users that match the search string and have all specified permissions for the project or issue.',
            'args' => array (
                'permissions' => array (
                    'type' => 'string',
                    'info' => 'Comma-separated list of permissions for project or issue returned users must have.',
                    'required' => true,
                ),
                'projectKey' => array (
                    'type' => 'string',
                    'info' => 'The optional project key to search for users with if no issueKey is supplied.',
                    'required' => true,
                ),
                'issueKey' => array (
                    'type' => 'string',
                    'info' => 'The issue key for the issue for which returned users have specified permissions.',
                    'required' => false,
                ),
                'username' => array (
                    'type' => 'string',
                    'info' => 'The username filter, list includes all users if unspecified.',
                    'required' => false,
                ),
                'startAt' => array (
                    'type' => 'int',
                    'info' => 'The index of the first user to return.',
                    'required' => false,
                ),
                'maxResults' => array (
                    'type' => 'int',
                    'info' => 'The maximum number of users to return.',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'findUsersByProperty',
            'vendorUrl' => '/rest/api/2/user/search',
            'method' => 'GET',
            'description' => 'Returns a list of users that match the search string and/or property.',
            'args' => array (
                'property' => array (
                    'type' => 'string',
                    'info' => 'A query string used to search by property. Example: propertyKey.something.nested=1.',
                    'required' => true,
                ),
                'username' => array (
                    'type' => 'string',
                    'info' => 'A query string used to search username, name or e-mail address.',
                    'required' => false,
                ),
                'includeActive' => array (
                    'type' => 'boolean',
                    'info' => 'If true, then active users are included in the results.',
                    'required' => false,
                ),
                'includeInactive' => array (
                    'type' => 'boolean',
                    'info' => 'If true, then inactive users are included in the results.',
                    'required' => false,
                ),
                'startAt' => array (
                    'type' => 'int',
                    'info' => 'The index of the first user to return.',
                    'required' => false,
                ),
                'maxResults' => array (
                    'type' => 'int',
                    'info' => 'The maximum number of users to return.',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'findUsersByUsername',
            'vendorUrl' => '/rest/api/2/user/search',
            'method' => 'GET',
            'description' => 'Returns a list of users that match the search string and/or property.',
            'args' => array (
                'username' => array (
                    'type' => 'string',
                    'info' => 'A query string used to search username, name or e-mail address.',
                    'required' => true,
                ),
                'property' => array (
                    'type' => 'string',
                    'info' => 'A query string used to search by property. Example: propertyKey.something.nested=1.',
                    'required' => false,
                ),
                'includeActive' => array (
                    'type' => 'boolean',
                    'info' => 'If true, then active users are included in the results.',
                    'required' => false,
                ),
                'includeInactive' => array (
                    'type' => 'boolean',
                    'info' => 'If true, then inactive users are included in the results.',
                    'required' => false,
                ),
                'startAt' => array (
                    'type' => 'int',
                    'info' => 'The index of the first user to return.',
                    'required' => false,
                ),
                'maxResults' => array (
                    'type' => 'int',
                    'info' => 'The maximum number of users to return.',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'findUsersWithBrowsePermission',
            'vendorUrl' => '/rest/api/2/user/viewissue/search',
            'method' => 'GET',
            'description' => 'Returns a list of active users that match the search string.',
            'args' => array (
                'username' => array (
                    'type' => 'string',
                    'info' => 'The username filter, no users returned if left blank.',
                    'required' => true,
                ),
                'projectKey' => array (
                    'type' => 'string',
                    'info' => 'Project key to search for users with if no issueKey is supplied.',
                    'required' => true,
                ),
                'issueKey' => array (
                    'type' => 'string',
                    'info' => 'The issue key for the issue being edited we need to find viewable users for.',
                    'required' => false,
                ),
                'startAt' => array (
                    'type' => 'int',
                    'info' => 'The index of the first user to return.',
                    'required' => false,
                ),
                'maxResults' => array (
                    'type' => 'int',
                    'info' => 'The maximum number of users to return.',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'getUserPropertiesKeysByUserKey',
            'vendorUrl' => '/rest/api/2/user/properties',
            'method' => 'GET',
            'description' => 'Returns the keys of all properties for the user identified by the key.',
            'args' => array (
                'userKey' => array (
                    'type' => 'string',
                    'info' => 'Key of the user whose properties are to be returned.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'getUserPropertiesKeysByUsername',
            'vendorUrl' => '/rest/api/2/user/properties',
            'method' => 'GET',
            'description' => 'Returns the keys of all properties for the user identified by the username.',
            'args' => array (
                'username' => array (
                    'type' => 'string',
                    'info' => 'Username of the user whose properties are to be returned.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'deleteUserPropertyByUserKey',
            'vendorUrl' => '/rest/api/2/user/properties/{propertyKey}',
            'method' => 'DELETE',
            'description' => 'Removes the property from the user identified by the key.',
            'args' => array (
                'propertyKey' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Property key.',
                ),
                'userKey' => array (
                    'type' => 'string',
                    'info' => 'Key of the user whose property is to be removed.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'deleteUserPropertyByUsername',
            'vendorUrl' => '/rest/api/2/user/properties/{propertyKey}',
            'method' => 'DELETE',
            'description' => 'Removes the property from the user identified by the username.',
            'args' => array (
                'propertyKey' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Property key.',
                ),
                'username' => array (
                    'type' => 'string',
                    'info' => 'Username of the user whose property is to be removed.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'setUserPropertyByUserKey',
            'vendorUrl' => '/rest/api/2/user/properties/{propertyKey}',
            'method' => 'PUT',
            'description' => 'Sets the value of the specified user\'s property.',
            'args' => array (
                'propertyKey' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Property key.',
                ),
                'propertyValue' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Property value.',
                ),
                'userKey' => array (
                    'type' => 'string',
                    'info' => 'Key of the user whose property is to be set.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'setUserPropertyByUsername',
            'vendorUrl' => '/rest/api/2/user/properties/{propertyKey}',
            'method' => 'PUT',
            'description' => 'Sets the value of the specified user\'s property.',
            'args' => array (
                'propertyKey' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Property key.',
                ),
                'propertyValue' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Property value.',
                ),
                'username' => array (
                    'type' => 'string',
                    'info' => 'Username of the user whose property is to be set.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'getUserPropertyByUserKey',
            'vendorUrl' => '/rest/api/2/user/properties/{propertyKey}',
            'method' => 'GET',
            'description' => 'Returns the value of the property with a given key from the user identified by the key or by the id.',
            'args' => array (
                'propertyKey' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Property key.',
                ),
                'userKey' => array (
                    'type' => 'string',
                    'info' => 'Key of the user whose property is to be returned.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'getUserPropertyByUsername',
            'vendorUrl' => '/rest/api/2/user/properties/{propertyKey}',
            'method' => 'GET',
            'description' => 'Returns the value of the property with a given key from the user identified by the username.',
            'args' => array (
                'propertyKey' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Property key.',
                ),
                'username' => array (
                    'type' => 'string',
                    'info' => 'Username of the user whose property is to be returned.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'createVersion',
            'vendorUrl' => '/rest/api/2/version',
            'method' => 'POST',
            'description' => 'Create a version.',
            'args' => array (
                'name' => array (
                    'example' => '"New Version 1"',
                    'schema' => '{"type":"string"}',
                    'type' => 'String',
                    'info' => 'New version name.',
                    'required' => true,
                ),
                'description' => array (
                    'example' => '"An excellent version"',
                    'schema' => '{"type":"string"}',
                    'type' => 'String',
                    'info' => 'New version description.',
                    'required' => false,
                ),
                'archived' => array (
                    'example' => 'false',
                    'schema' => '{"type":"boolean"}',
                    'type' => 'boolean',
                    'info' => 'is archived.',
                    'required' => false,
                ),
                'released' => array (
                    'example' => 'true',
                    'schema' => '{"type":"boolean"}',
                    'type' => 'boolean',
                    'info' => 'Is released.',
                    'required' => false,
                ),
                'releaseDate' => array (
                    'example' => '"2010-07-06"',
                    'type' => 'String',
                    'info' => 'Release date. Example "2010-07-06".',
                    'required' => false,
                ),
                'userReleaseDate' => array (
                    'example' => '"6\\/Jul\\/2010"',
                    'schema' => '{"type":"string"}',
                    'type' => 'String',
                    'info' => 'User release date. Example "6/Jul/2010".',
                    'required' => false,
                ),
                'project' => array (
                    'example' => '"PXA"',
                    'schema' => '{"type":"string"}',
                    'type' => 'String',
                    'info' => 'Project name.',
                    'required' => false,
                ),
                'projectId' => array (
                    'example' => '10000',
                    'schema' => '{"type":"integer"}',
                    'type' => 'integer',
                    'info' => 'Project identifier.',
                    'required' => false,
                ),
                'userStartDate' => array (
                    'schema' => '{"type":"string"}',
                    'type' => 'String',
                    'info' => 'User start date.',
                    'required' => false,
                ),
                'operations' => array (
                    'schema' => '{"type":"array","items":{"title":"Simple Link","type":"object","properties":{"id":{"type":"string"},"styleClass":{"type":"string"},"iconClass":{"type":"string"},"label":{"type":"string"},"title":{"type":"string"},"href":{"type":"string"},"weight":{"type":"integer"}},"additionalProperties":false}}',
                    'type' => 'Array',
                    'info' => 'Simple Links. Example [{"styleClass": "style_class","iconClass": "icon_class","label": "Operation label","title": "Operation title","href": "http://www.example.com/","weight": "10"}].',
                    'required' => false,
                ),
                'remotelinks' => array (
                    'schema' => '{"type":"array","items":{"title":"Remote Entity Link","type":"object","properties":{"name":{"type":"string"},"link":[]},"additionalProperties":false}}',
                    'type' => 'Array',
                    'info' => 'Remote Entity Links. Example [{"name": "string","link": "http://www.example.com/"}].',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'moveVersion',
            'vendorUrl' => '/rest/api/2/version/{id}/move',
            'method' => 'POST',
            'description' => 'Modify a version\'s sequence within a project.',
            'args' => array (
                'id' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Version identifier.',
                ),
                'after' => array (
                    'example' => '"http:\\/\\/www.example.com\\/jira\\/rest\\/api\\/2\\/version\\/10000"',
                    'schema' => '{"type":"string","format":"uri"}',
                    'type' => 'String',
                    'info' => 'A version to place this version after. The value should be the self link of another version.',
                    'required' => true,
                ),
                'position' => array (
                    'schema' => '{"type":"string","enum":["Earlier","Later","First","Last"]}',
                    'type' => 'String',
                    'info' => 'An absolute position, one of "Earlier","Later","First","Last".',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'getVersion',
            'vendorUrl' => '/rest/api/2/version/{id}',
            'method' => 'GET',
            'description' => 'Returns a project version.',
            'args' => array (
                'id' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Version identifier.',
                ),
                'expand' => array (
                    'type' => 'string',
                    'info' => 'Expand parameters.',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'updateVersion',
            'vendorUrl' => '/rest/api/2/version/{id}',
            'method' => 'PUT',
            'description' => 'Modify a version.',
            'args' => array (
                'id' => array (
                    'required' => true,
                    'example' => '"10000"',
                    'schema' => '{"type":"string"}',
                    'type' => 'String',
                    'info' => 'Version identifier.',
                ),
                'name' => array (
                    'example' => '"New Version 1"',
                    'schema' => '{"type":"string"}',
                    'type' => 'String',
                    'info' => 'New version name.',
                    'required' => false,
                ),
                'description' => array (
                    'example' => '"An excellent version"',
                    'schema' => '{"type":"string"}',
                    'type' => 'String',
                    'info' => 'New version description.',
                    'required' => false,
                ),
                'archived' => array (
                    'example' => 'false',
                    'schema' => '{"type":"boolean"}',
                    'type' => 'boolean',
                    'info' => 'is archived.',
                    'required' => false,
                ),
                'released' => array (
                    'example' => 'true',
                    'schema' => '{"type":"boolean"}',
                    'type' => 'boolean',
                    'info' => 'Is released.',
                    'required' => false,
                ),
                'releaseDate' => array (
                    'example' => '"2010-07-06"',
                    'type' => 'String',
                    'info' => 'Release date. Example "2010-07-06".',
                    'required' => false,
                ),
                'overdue' => array (
                    'example' => 'true',
                    'schema' => '{"type":"boolean"}',
                    'type' => 'boolean',
                    'info' => 'Is overdue.',
                    'required' => false,
                ),
                'project' => array (
                    'example' => '"PXA"',
                    'schema' => '{"type":"string"}',
                    'type' => 'String',
                    'info' => 'Project name.',
                    'required' => false,
                ),
                'projectId' => array (
                    'example' => '10000',
                    'schema' => '{"type":"integer"}',
                    'type' => 'integer',
                    'info' => 'Project identifier.',
                    'required' => false,
                ),
                'userStartDate' => array (
                    'schema' => '{"type":"string"}',
                    'type' => 'String',
                    'info' => 'User start date.',
                    'required' => false,
                ),
                'userReleaseDate' => array (
                    'example' => '"6\\/Jul\\/2010"',
                    'schema' => '{"type":"string"}',
                    'type' => 'String',
                    'info' => 'User release date. Example "6/Jul/2010".',
                    'required' => false,
                ),
                'moveUnfixedIssuesTo' => array (
                    'schema' => '{"type":"string","format":"uri"}',
                    'type' => 'String',
                    'info' => 'Move unfixed issues to. The value should be the link.',
                    'required' => false,
                ),
                'operations' => array (
                    'schema' => '{"type":"array","items":{"title":"Simple Link","type":"object","properties":{"id":{"type":"string"},"styleClass":{"type":"string"},"iconClass":{"type":"string"},"label":{"type":"string"},"title":{"type":"string"},"href":{"type":"string"},"weight":{"type":"integer"}},"additionalProperties":false}}',
                    'type' => 'Array',
                    'info' => 'Simple Links. Example [{"styleClass": "style_class","iconClass": "icon_class","label": "Operation label","title": "Operation title","href": "http://www.example.com/","weight": "10"}].',
                    'required' => false,
                ),
                'remotelinks' => array (
                    'schema' => '{"type":"array","items":{"title":"Remote Entity Link","type":"object","properties":{"name":{"type":"string"},"link":[]},"additionalProperties":false}}',
                    'type' => 'Array',
                    'info' => 'Remote Entity Links. Example [{"name": "string","link": "http://www.example.com/"}].',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'deleteVersion',
            'vendorUrl' => '/rest/api/2/version/{id}',
            'method' => 'DELETE',
            'description' => 'Delete a project version.',
            'args' => array (
                'id' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Version identifier.',
                ),
                'moveFixIssuesTo' => array (
                    'type' => 'string',
                    'info' => 'The version to set fixVersion to on issues where the deleted version is the fix version.',
                    'required' => false,
                ),
                'moveAffectedIssuesTo' => array (
                    'type' => 'string',
                    'info' => 'The version to set affectedVersion to on issues where the deleted version is the affected version.',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'mergeVersion',
            'vendorUrl' => '/rest/api/2/version/{id}/mergeto/{moveIssuesTo}',
            'method' => 'PUT',
            'description' => 'Merge versions.',
            'args' => array (
                'id' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Version identifier.',
                ),
                'moveIssuesTo' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Move issues to.',
                ),
            ),
        ),
        array (
            'name' => 'getVersionRelatedIssues',
            'vendorUrl' => '/rest/api/2/version/{id}/relatedIssueCounts',
            'method' => 'GET',
            'description' => 'Returns a bean containing the number of fixed in and affected issues for the given version.',
            'args' => array (
                'id' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Version identifier.',
                ),
            ),
        ),
        array (
            'name' => 'getVersionUnresolvedIssues',
            'vendorUrl' => '/rest/api/2/version/{id}/unresolvedIssueCount',
            'method' => 'GET',
            'description' => 'Returns the number of unresolved issues for the given version.',
            'args' => array (
                'id' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Version identifier.',
                ),
            ),
        ),
        array (
            'name' => 'getRemoteVersionLinksByVersionId',
            'vendorUrl' => '/rest/api/2/version/{versionId}/remotelink',
            'method' => 'GET',
            'description' => 'Returns the remote version links associated with the given version ID.',
            'args' => array (
                'versionId' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Version identifier.',
                ),
            ),
        ),
        array (
            'name' => 'createRemoteVersionLink',
            'vendorUrl' => '/rest/api/2/version/{versionId}/remotelink',
            'method' => 'POST',
            'description' => 'Create a remote version link via POST.  The link\'s global ID will be taken from theJSON payload if provided; otherwise, it will be generated.',
            'args' => array (
                'versionId' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Version identifier.',
                ),
                'globalId' => array (
                    'example' => '"SomeGlobalId"',
                    'type' => 'String',
                    'info' => 'GlobalId.',
                    'required' => false,
                ),
                'myCustomLinkProperty' => array (
                    'example' => 'true',
                    'type' => 'String',
                    'info' => 'MyCustomLinkProperty.',
                    'required' => false,
                ),
                'colors' => array (
                    'type' => 'JSON',
                    'example' => '["red","green","blue"]',
                    'info' => 'Colors.',
                    'required' => false,
                ),
                'notes' => array (
                    'type' => 'JSON',
                    'example' => '["Remote version links may take any well-formed JSON shape that is desired,","provided that they fit within the maximum buffer size allowed,","which is currently 32,768 characters."]',
                    'info' => 'Notes.',
                    'required' => false,
                ),
                'remotelinks' => array (
                    'schema' => '{"id":"https:\\/\\/docs.atlassian.com\\/jira\\/REST\\/schema\\/string#","title":"String","type":"string"}',
                    'type' => 'String',
                    'info' => 'Remotelinks.',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'updateRemoteVersionLink',
            'vendorUrl' => '/rest/api/2/version/{versionId}/remotelink',
            'method' => 'POST',
            'description' => 'Create a remote version link via POST.  The link\'s global ID will be taken from theJSON payload if provided; otherwise, it will be generated.',
            'args' => array (
                'versionId' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Version identifier.',
                ),
                'globalId' => array (
                    'example' => '"SomeGlobalId"',
                    'type' => 'String',
                    'info' => 'GlobalId.',
                    'required' => false,
                ),
                'myCustomLinkProperty' => array (
                    'example' => 'true',
                    'type' => 'String',
                    'info' => 'MyCustomLinkProperty.',
                    'required' => false,
                ),
                'colors' => array (
                    'type' => 'JSON',
                    'example' => '["red","green","blue"]',
                    'info' => 'Colors.',
                    'required' => false,
                ),
                'notes' => array (
                    'type' => 'JSON',
                    'example' => '["Remote version links may take any well-formed JSON shape that is desired,","provided that they fit within the maximum buffer size allowed,","which is currently 32,768 characters."]',
                    'info' => 'Notes.',
                    'required' => false,
                ),
                'remotelinks' => array (
                    'schema' => '{"id":"https:\\/\\/docs.atlassian.com\\/jira\\/REST\\/schema\\/string#","title":"String","type":"string"}',
                    'type' => 'String',
                    'info' => 'Remotelinks.',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'deleteRemoteVersionLinks',
            'vendorUrl' => '/rest/api/2/version/{versionId}/remotelink',
            'method' => 'DELETE',
            'description' => 'Delete all remote version links for a given version ID.',
            'args' => array (
                'versionId' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Version identifier.',
                ),
            ),
        ),
        array (
            'name' => 'getRemoteVersionLink',
            'vendorUrl' => '/rest/api/2/version/{versionId}/remotelink/{globalId}',
            'method' => 'GET',
            'description' => 'A REST sub-resource representing a remote version link.',
            'args' => array (
                'versionId' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Version identifier.',
                ),
                'globalId' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Remote link global identifier.',
                ),
            ),
        ),
        array (
            'name' => 'deleteSingleRemoteVersionLink',
            'vendorUrl' => '/rest/api/2/version/{versionId}/remotelink/{globalId}',
            'method' => 'DELETE',
            'description' => 'Delete a specific remote version link with the given version ID and global ID.',
            'args' => array (
                'versionId' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Version identifier.',
                ),
                'globalId' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Remote link global identifier.',
                ),
            ),
        ),
        array (
            'name' => 'getRemoteVersionLinks',
            'vendorUrl' => '/rest/api/2/version/remotelink',
            'method' => 'GET',
            'description' => 'Returns the remote version links for a given global ID.',
            'args' => array (
                'globalId' => array (
                    'type' => 'string',
                    'info' => 'The global ID of the remote resource that is linked to the versions.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'getAllWorkflows',
            'vendorUrl' => '/rest/api/2/workflow',
            'method' => 'GET',
            'description' => 'Returns all workflows.',
            'args' => array (
                'workflowName' => array (
                    'type' => 'string',
                    'info' => 'Workflow name.',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'deleteWorkflowProperty',
            'vendorUrl' => '/rest/api/2/workflow/transitions/{transitionId}/properties',
            'method' => 'DELETE',
            'description' => 'Delete a property from the passed transition on the passed workflow.',
            'args' => array (
                'transitionId' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Transition identifier.',
                ),
                'key' => array (
                    'type' => 'string',
                    'info' => 'The name of the property to add.',
                    'required' => false,
                ),
                'workflowName' => array (
                    'type' => 'string',
                    'info' => 'The name of the workflow to use.',
                    'required' => false,
                ),
                'workflowMode' => array (
                    'type' => 'string',
                    'info' => 'The type of workflow to use. One of "live", "draft".',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'createWorkflowProperty',
            'vendorUrl' => '/rest/api/2/workflow/transitions/{transitionId}/properties',
            'method' => 'POST',
            'description' => 'Add a new property to a transition.',
            'args' => array (
                'transitionId' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Transition identifier.',
                ),
                'key' => array (
                    'type' => 'string',
                    'info' => 'The name of the property to add.',
                    'schema' => '{"type":"string"}',
                    'required' => true,
                ),
                'value' => array (
                    'example' => '"createissue"',
                    'schema' => '{"type":"string"}',
                    'type' => 'String',
                    'info' => 'Value.',
                    'required' => true,
                ),
                'workflowName' => array (
                    'type' => 'string',
                    'info' => 'The name of the workflow to use.',
                    'required' => false,
                ),
                'workflowMode' => array (
                    'type' => 'string',
                    'info' => 'The type of workflow to use. One of "live", "draft".',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'updateWorkflowProperty',
            'vendorUrl' => '/rest/api/2/workflow/transitions/{transitionId}/properties',
            'method' => 'PUT',
            'description' => 'Update property to a transition.',
            'args' => array (
                'transitionId' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Transition identifier.',
                ),
                'key' => array (
                    'type' => 'string',
                    'info' => 'The name of the property to add.',
                    'schema' => '{"type":"string"}',
                    'required' => true,
                ),
                'value' => array (
                    'example' => '"createissue"',
                    'schema' => '{"type":"string"}',
                    'type' => 'String',
                    'info' => 'The value of the property to add.',
                    'required' => true,
                ),
                'workflowName' => array (
                    'type' => 'string',
                    'info' => 'The name of the workflow to use.',
                    'required' => false,
                ),
                'workflowMode' => array (
                    'type' => 'string',
                    'info' => 'The type of workflow to use. One of "live", "draft".',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'getWorkflowProperties',
            'vendorUrl' => '/rest/api/2/workflow/transitions/{transitionId}/properties',
            'method' => 'GET',
            'description' => 'Return the property or properties associated with a transition.',
            'args' => array (
                'transitionId' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Transition identifier.',
                ),
                'key' => array (
                    'type' => 'string',
                    'info' => 'The name of the property key to query.',
                    'required' => false,
                ),
                'workflowName' => array (
                    'type' => 'string',
                    'info' => 'The name of the workflow to use.',
                    'required' => false,
                ),
                'workflowMode' => array (
                    'type' => 'string',
                    'info' => 'The type of workflow to use. One of "live", "draft".',
                    'required' => false,
                ),
                'includeReservedKeys' => array (
                    'type' => 'boolean',
                    'info' => 'Set this to true in order to include the non-editable keys in the response.',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'createWorkflowScheme',
            'vendorUrl' => '/rest/api/2/workflowscheme',
            'method' => 'POST',
            'description' => 'Create a new workflow scheme. The body contains a representation of the new scheme. Values not passed are assumed to be set to their defaults.',
            'args' => array (
                'name' => array (
                    'example' => '"New Workflow Scheme Name"',
                    'schema' => '{"type":"string"}',
                    'type' => 'String',
                    'info' => 'Name.',
                    'required' => false,
                ),
                'description' => array (
                    'example' => '"New Workflow Scheme Description"',
                    'schema' => '{"type":"string"}',
                    'type' => 'String',
                    'info' => 'Description.',
                    'required' => false,
                ),
                'defaultWorkflow' => array (
                    'example' => '"DefaultWorkflowName"',
                    'schema' => '{"type":"string"}',
                    'type' => 'String',
                    'info' => 'DefaultWorkflow.',
                    'required' => false,
                ),
                'issueTypeMappings' => array (
                    'type' => 'JSON',
                    'example' => '{"IsueTypeId":"WorkflowName"}',
                    'schema' => '{"type":"object","patternProperties":{".+":{"type":"string"}},"additionalProperties":false}',
                    'info' => 'IssueTypeMappings.',
                    'required' => false,
                ),
                'id' => array (
                    'schema' => '{"type":"integer"}',
                    'type' => 'String',
                    'info' => 'identifier.',
                    'required' => false,
                ),
                'originalDefaultWorkflow' => array (
                    'schema' => '{"type":"string"}',
                    'type' => 'String',
                    'info' => 'OriginalDefaultWorkflow.',
                    'required' => false,
                ),
                'originalIssueTypeMappings' => array (
                    'schema' => '{"type":"object","patternProperties":{".+":{"type":"string"}},"additionalProperties":false}',
                    'type' => 'String',
                    'info' => 'OriginalIssueTypeMappings.',
                    'required' => false,
                ),
                'draft' => array (
                    'schema' => '{"type":"boolean"}',
                    'type' => 'boolean',
                    'info' => 'Draft.',
                    'required' => false,
                ),
                'lastModifiedUser' => array (
                    'schema' => '{"title":"User","type":"object","properties":{"key":{"type":"string"},"accountId":{"type":"string"},"name":{"type":"string"},"emailAddress":{"type":"string"},"avatarUrls":{"type":"object","patternProperties":{".+":{"type":"string","format":"uri"}},"additionalProperties":false},"displayName":{"type":"string"},"active":{"type":"boolean"},"timeZone":{"type":"string"},"locale":{"type":"string"},"groups":{"$ref":"#\\/definitions\\/simple-list-wrapper"},"applicationRoles":{"$ref":"#\\/definitions\\/simple-list-wrapper"}},"additionalProperties":false,"required":["active"]}',
                    'type' => 'String',
                    'info' => 'LastModifiedUser.',
                    'required' => false,
                ),
                'lastModified' => array (
                    'schema' => '{"type":"string"}',
                    'type' => 'String',
                    'info' => 'LastModified.',
                    'required' => false,
                ),
                'updateDraftIfNeeded' => array (
                    'schema' => '{"type":"boolean"}',
                    'type' => 'boolean',
                    'info' => 'If set to true, indicate that the draft should be created/updated when the actual scheme cannot be edited.',
                    'required' => false,
                ),
                'issueTypes' => array (
                    'schema' => '{"type":"object","patternProperties":{".+":{"title":"Issue Type","type":"object","properties":{"id":{"type":"string"},"description":{"type":"string"},"iconUrl":{"type":"string"},"name":{"type":"string"},"subtask":{"type":"boolean"},"avatarId":{"type":"integer"}},"additionalProperties":false,"required":["subtask"]}},"additionalProperties":false}',
                    'type' => 'String',
                    'info' => 'IssueTypes.',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'deleteWorkflowScheme',
            'vendorUrl' => '/rest/api/2/workflowscheme/{id}',
            'method' => 'DELETE',
            'description' => 'Delete the passed workflow scheme.',
            'args' => array (
                'id' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Workflow scheme identifier.',
                ),
            ),
        ),
        array (
            'name' => 'getWorkflowScheme',
            'vendorUrl' => '/rest/api/2/workflowscheme/{id}',
            'method' => 'GET',
            'description' => 'Returns the requested workflow scheme to the caller.',
            'args' => array (
                'id' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Workflow scheme identifier.',
                ),
                'returnDraftIfExists' => array (
                    'type' => 'boolean',
                    'info' => 'When true indicates that a scheme\'s draft.',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'updateWorkflowScheme',
            'vendorUrl' => '/rest/api/2/workflowscheme/{id}',
            'method' => 'PUT',
            'description' => 'Update the passed workflow scheme. The body of the request is a representation of the workflow scheme. Values not passed are assumed to indicateno change for that field. The passed representation can have its updateDraftIfNeeded flag set to true to indicate that the draftshould be created and/or updated when the actual scheme cannot be edited (e.g. when the scheme is being used bya project). Values not appearing the body will not be touched.',
            'args' => array (
                'id' => array (
                    'required' => true,
                    'example' => '57585',
                    'schema' => '{"type":"integer"}',
                    'type' => 'String',
                    'info' => 'Workflow scheme identifier.',
                ),
                'name' => array (
                    'example' => '"Updated Workflow Scheme Name"',
                    'schema' => '{"type":"string"}',
                    'type' => 'String',
                    'info' => 'Name.',
                    'required' => false,
                ),
                'description' => array (
                    'example' => '"Updated Workflow Scheme Name"',
                    'schema' => '{"type":"string"}',
                    'type' => 'String',
                    'info' => 'Description.',
                    'required' => false,
                ),
                'defaultWorkflow' => array (
                    'example' => '"DefaultWorkflowName"',
                    'schema' => '{"type":"string"}',
                    'type' => 'String',
                    'info' => 'DefaultWorkflow.',
                    'required' => false,
                ),
                'issueTypeMappings' => array (
                    'type' => 'JSON',
                    'example' => '{"IsueTypeId":"WorkflowName"}',
                    'schema' => '{"type":"object","patternProperties":{".+":{"type":"string"}},"additionalProperties":false}',
                    'info' => 'IssueTypeMappings.',
                    'required' => false,
                ),
                'updateDraftIfNeeded' => array (
                    'example' => 'false',
                    'schema' => '{"type":"boolean"}',
                    'type' => 'boolean',
                    'info' => 'If set to true, indicate that the draft should be created/updated when the actual scheme cannot be edited.',
                    'required' => false,
                ),
                'originalDefaultWorkflow' => array (
                    'schema' => '{"type":"string"}',
                    'type' => 'String',
                    'info' => 'OriginalDefaultWorkflow.',
                    'required' => false,
                ),
                'originalIssueTypeMappings' => array (
                    'schema' => '{"type":"object","patternProperties":{".+":{"type":"string"}},"additionalProperties":false}',
                    'type' => 'String',
                    'info' => 'OriginalIssueTypeMappings.',
                    'required' => false,
                ),
                'draft' => array (
                    'schema' => '{"type":"boolean"}',
                    'type' => 'boolean',
                    'info' => 'Draft.',
                    'required' => false,
                ),
                'lastModifiedUser' => array (
                    'schema' => '{"title":"User","type":"object","properties":{"key":{"type":"string"},"accountId":{"type":"string"},"name":{"type":"string"},"emailAddress":{"type":"string"},"avatarUrls":{"type":"object","patternProperties":{".+":{"type":"string","format":"uri"}},"additionalProperties":false},"displayName":{"type":"string"},"active":{"type":"boolean"},"timeZone":{"type":"string"},"locale":{"type":"string"},"groups":{"$ref":"#\\/definitions\\/simple-list-wrapper"},"applicationRoles":{"$ref":"#\\/definitions\\/simple-list-wrapper"}},"additionalProperties":false,"required":["active"]}',
                    'type' => 'String',
                    'info' => 'LastModifiedUser.',
                    'required' => false,
                ),
                'lastModified' => array (
                    'schema' => '{"type":"string"}',
                    'type' => 'String',
                    'info' => 'LastModified.',
                    'required' => false,
                ),
                'issueTypes' => array (
                    'schema' => '{"type":"object","patternProperties":{".+":{"title":"Issue Type","type":"object","properties":{"id":{"type":"string"},"description":{"type":"string"},"iconUrl":{"type":"string"},"name":{"type":"string"},"subtask":{"type":"boolean"},"avatarId":{"type":"integer"}},"additionalProperties":false,"required":["subtask"]}},"additionalProperties":false}',
                    'type' => 'String',
                    'info' => 'IssueTypes.',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'createDraftForScheme',
            'vendorUrl' => '/rest/api/2/workflowscheme/{id}/createdraft',
            'method' => 'POST',
            'description' => 'Create a draft for the passed scheme. The draft will be a copy of the state of the parent.',
            'args' => array (
                'id' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Workflow scheme identifier.',
                ),
            ),
        ),
        array (
            'name' => 'deleteDefaultWorkflowScheme',
            'vendorUrl' => '/rest/api/2/workflowscheme/{id}/default',
            'method' => 'DELETE',
            'description' => 'Remove the default workflow from the passed workflow scheme.',
            'args' => array (
                'id' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Workflow scheme identifier.',
                ),
                'updateDraftIfNeeded' => array (
                    'type' => 'boolean',
                    'info' => 'When true will create and return a draft when the workflow scheme cannot be edited.',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'updateDefaultWorkflowScheme',
            'vendorUrl' => '/rest/api/2/workflowscheme/{id}/default',
            'method' => 'PUT',
            'description' => 'Set the default workflow for the passed workflow scheme.',
            'args' => array (
                'id' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Workflow scheme identifier.',
                ),
                'workflow' => array (
                    'example' => '"WorkflowName"',
                    'schema' => '{"type":"string"}',
                    'type' => 'String',
                    'info' => 'Workflow name.',
                    'required' => false,
                ),
                'updateDraftIfNeeded' => array (
                    'example' => 'false',
                    'schema' => '{"type":"boolean"}',
                    'type' => 'boolean',
                    'info' => 'If set to true, indicate that the draft should be created/updated when the actual scheme cannot be edited.',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'getDefaultWorkflowScheme',
            'vendorUrl' => '/rest/api/2/workflowscheme/{id}/default',
            'method' => 'GET',
            'description' => 'Return the default workflow from the passed workflow scheme.',
            'args' => array (
                'id' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Workflow scheme identifier.',
                ),
                'returnDraftIfExists' => array (
                    'type' => 'boolean',
                    'info' => 'When true indicates that a scheme\'s draft.',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'getDraftWorkflowScheme',
            'vendorUrl' => '/rest/api/2/workflowscheme/{id}/draft',
            'method' => 'GET',
            'description' => 'Returns the requested draft workflow scheme to the caller.',
            'args' => array (
                'id' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Workflow scheme identifier.',
                ),
            ),
        ),
        array (
            'name' => 'deleteDraftWorkflowScheme',
            'vendorUrl' => '/rest/api/2/workflowscheme/{id}/draft',
            'method' => 'DELETE',
            'description' => 'Delete the passed draft workflow scheme.',
            'args' => array (
                'id' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Workflow scheme identifier.',
                ),
            ),
        ),
        array (
            'name' => 'updateDraftWorkflowScheme',
            'vendorUrl' => '/rest/api/2/workflowscheme/{id}/draft',
            'method' => 'PUT',
            'description' => 'Update a draft workflow scheme. The draft will created if necessary. The body is a representation of the workflow scheme. Values not passed are assumed to indicate no change for that field.',
            'args' => array (
                'id' => array (
                    'required' => true,
                    'example' => '57585',
                    'schema' => '{"type":"integer"}',
                    'type' => 'String',
                    'info' => 'Workflow scheme identifier.',
                ),
                'name' => array (
                    'example' => '"Updated Workflow Scheme Name"',
                    'schema' => '{"type":"string"}',
                    'type' => 'String',
                    'info' => 'Name.',
                    'required' => false,
                ),
                'description' => array (
                    'example' => '"Updated Workflow Scheme Name"',
                    'schema' => '{"type":"string"}',
                    'type' => 'String',
                    'info' => 'Description.',
                    'required' => false,
                ),
                'defaultWorkflow' => array (
                    'example' => '"DefaultWorkflowName"',
                    'schema' => '{"type":"string"}',
                    'type' => 'String',
                    'info' => 'DefaultWorkflow.',
                    'required' => false,
                ),
                'issueTypeMappings' => array (
                    'type' => 'JSON',
                    'example' => '{"IsueTypeId":"WorkflowName"}',
                    'schema' => '{"type":"object","patternProperties":{".+":{"type":"string"}},"additionalProperties":false}',
                    'info' => 'IssueTypeMappings.',
                    'required' => false,
                ),
                'updateDraftIfNeeded' => array (
                    'example' => 'false',
                    'schema' => '{"type":"boolean"}',
                    'type' => 'boolean',
                    'info' => 'If set to true, indicate that the draft should be created/updated when the actual scheme cannot be edited.',
                    'required' => false,
                ),
                'originalDefaultWorkflow' => array (
                    'schema' => '{"type":"string"}',
                    'type' => 'String',
                    'info' => 'OriginalDefaultWorkflow.',
                    'required' => false,
                ),
                'originalIssueTypeMappings' => array (
                    'schema' => '{"type":"object","patternProperties":{".+":{"type":"string"}},"additionalProperties":false}',
                    'type' => 'String',
                    'info' => 'OriginalIssueTypeMappings.',
                    'required' => false,
                ),
                'draft' => array (
                    'schema' => '{"type":"boolean"}',
                    'type' => 'boolean',
                    'info' => 'Draft.',
                    'required' => false,
                ),
                'lastModifiedUser' => array (
                    'schema' => '{"title":"User","type":"object","properties":{"key":{"type":"string"},"accountId":{"type":"string"},"name":{"type":"string"},"emailAddress":{"type":"string"},"avatarUrls":{"type":"object","patternProperties":{".+":{"type":"string","format":"uri"}},"additionalProperties":false},"displayName":{"type":"string"},"active":{"type":"boolean"},"timeZone":{"type":"string"},"locale":{"type":"string"},"groups":{"$ref":"#\\/definitions\\/simple-list-wrapper"},"applicationRoles":{"$ref":"#\\/definitions\\/simple-list-wrapper"}},"additionalProperties":false,"required":["active"]}',
                    'type' => 'String',
                    'info' => 'LastModifiedUser.',
                    'required' => false,
                ),
                'lastModified' => array (
                    'schema' => '{"type":"string"}',
                    'type' => 'String',
                    'info' => 'LastModified.',
                    'required' => false,
                ),
                'issueTypes' => array (
                    'schema' => '{"type":"object","patternProperties":{".+":{"title":"Issue Type","type":"object","properties":{"id":{"type":"string"},"description":{"type":"string"},"iconUrl":{"type":"string"},"name":{"type":"string"},"subtask":{"type":"boolean"},"avatarId":{"type":"integer"}},"additionalProperties":false,"required":["subtask"]}},"additionalProperties":false}',
                    'type' => 'String',
                    'info' => 'IssueTypes.',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'getDefaultDraftWorkflowScheme',
            'vendorUrl' => '/rest/api/2/workflowscheme/{id}/draft/default',
            'method' => 'GET',
            'description' => 'Return the default workflow from the passed draft workflow scheme to the caller.',
            'args' => array (
                'id' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Workflow scheme identifier.',
                ),
            ),
        ),
        array (
            'name' => 'deleteDefaultDraftWorkflowScheme',
            'vendorUrl' => '/rest/api/2/workflowscheme/{id}/draft/default',
            'method' => 'DELETE',
            'description' => 'Remove the default workflow from the passed draft workflow scheme.',
            'args' => array (
                'id' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Workflow scheme identifier.',
                ),
            ),
        ),
        array (
            'name' => 'updateDefaultDraftWorkflowScheme',
            'vendorUrl' => '/rest/api/2/workflowscheme/{id}/draft/default',
            'method' => 'PUT',
            'description' => 'Set the default workflow for the passed draft workflow scheme.',
            'args' => array (
                'id' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Workflow scheme identifier.',
                ),
                'workflow' => array (
                    'example' => '"WorkflowName"',
                    'schema' => '{"type":"string"}',
                    'type' => 'String',
                    'info' => 'Workflow name.',
                    'required' => true,
                ),
                'updateDraftIfNeeded' => array (
                    'example' => 'false',
                    'schema' => '{"type":"boolean"}',
                    'type' => 'boolean',
                    'info' => 'If set to true, indicate that the draft should be created/updated when the actual scheme cannot be edited.',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'getDraftSchemeIssueType',
            'vendorUrl' => '/rest/api/2/workflowscheme/{id}/draft/issuetype/{issueType}',
            'method' => 'GET',
            'description' => 'Returns the issue type mapping for the passed draft workflow scheme.',
            'args' => array (
                'id' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Workflow scheme identifier.',
                ),
                'issueType' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Issue type.',
                ),
            ),
        ),
        array (
            'name' => 'deleteDraftSchemeIssueType',
            'vendorUrl' => '/rest/api/2/workflowscheme/{id}/draft/issuetype/{issueType}',
            'method' => 'DELETE',
            'description' => 'Remove the specified issue type mapping from the draft scheme.',
            'args' => array (
                'id' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Workflow scheme identifier.',
                ),
                'issueType' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Issue type.',
                ),
            ),
        ),
        array (
            'name' => 'setDraftSchemeIssueType',
            'vendorUrl' => '/rest/api/2/workflowscheme/{id}/draft/issuetype/{issueType}',
            'method' => 'PUT',
            'description' => 'Set the issue type mapping for the passed draft scheme.',
            'args' => array (
                'id' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Workflow scheme identifier.',
                ),
                'issueType' => array (
                    'required' => true,
                    'example' => '"IssueTypeId"',
                    'schema' => '{"type":"string"}',
                    'type' => 'String',
                    'info' => 'Issue type.',
                ),
                'workflow' => array (
                    'example' => '"WorkflowName"',
                    'schema' => '{"type":"string"}',
                    'type' => 'String',
                    'info' => 'Workflow name.',
                    'required' => true,
                ),
                'updateDraftIfNeeded' => array (
                    'example' => 'false',
                    'schema' => '{"type":"boolean"}',
                    'type' => 'boolean',
                    'info' => 'If set to true, indicate that the draft should be created/updated when the actual scheme cannot be edited.',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'getDraftWorkflow',
            'vendorUrl' => '/rest/api/2/workflowscheme/{id}/draft/workflow',
            'method' => 'GET',
            'description' => 'Returns the draft workflow mappings or requested mapping to the caller.',
            'args' => array (
                'id' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Workflow scheme identifier.',
                ),
                'workflowName' => array (
                    'type' => 'string',
                    'info' => 'The workflow mapping to return.',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'deleteDraftWorkflowMapping',
            'vendorUrl' => '/rest/api/2/workflowscheme/{id}/draft/workflow',
            'method' => 'DELETE',
            'description' => 'Delete the passed workflow from the draft workflow scheme.',
            'args' => array (
                'id' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Workflow scheme identifier.',
                ),
                'workflowName' => array (
                    'type' => 'string',
                    'info' => 'The name of the workflow to delete.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'updateDraftWorkflowMapping',
            'vendorUrl' => '/rest/api/2/workflowscheme/{id}/draft/workflow',
            'method' => 'PUT',
            'description' => 'Update the draft scheme to include the passed mapping.',
            'args' => array (
                'id' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Workflow scheme identifier.',
                ),
                'workflowName' => array (
                    'type' => 'string',
                    'info' => 'The name of the workflow mapping to update.',
                    'required' => false,
                ),
                'workflow' => array (
                    'example' => '"WorkflowName3"',
                    'schema' => '{"type":"string"}',
                    'type' => 'String',
                    'info' => 'Workflow name.',
                    'required' => false,
                ),
                'issueTypes' => array (
                    'type' => 'Array',
                    'example' => '["IssueTypeId"]',
                    'schema' => '{"type":"array","items":{"type":"string"}}',
                    'info' => 'Issue types array. Example ["IssueTypeId"].',
                    'required' => false,
                ),
                'updateDraftIfNeeded' => array (
                    'example' => 'true',
                    'schema' => '{"type":"boolean"}',
                    'type' => 'boolean',
                    'info' => 'If set to true, indicate that the draft should be created/updated when the actual scheme cannot be edited.',
                    'required' => false,
                ),
                'defaultMapping' => array (
                    'schema' => '{"type":"boolean"}',
                    'type' => 'boolean',
                    'info' => 'Use default mapping.',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'getWorkflowSchemeIssueType',
            'vendorUrl' => '/rest/api/2/workflowscheme/{id}/issuetype/{issueType}',
            'method' => 'GET',
            'description' => 'Returns the issue type mapping for the passed workflow scheme.',
            'args' => array (
                'id' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Workflow scheme identifier.',
                ),
                'issueType' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Issue type.',
                ),
                'returnDraftIfExists' => array (
                    'type' => 'booleanDefault: false',
                    'info' => 'When true indicates that a scheme\'s draft.',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'deleteWorkflowSchemeIssueType',
            'vendorUrl' => '/rest/api/2/workflowscheme/{id}/issuetype/{issueType}',
            'method' => 'DELETE',
            'description' => 'Remove the specified issue type mapping from the scheme.',
            'args' => array (
                'id' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Workflow scheme identifier.',
                ),
                'issueType' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Issue type.',
                ),
                'updateDraftIfNeeded' => array (
                    'type' => 'boolean',
                    'info' => 'When true will create and return a draft when the workflow scheme cannot be edited.',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'setWorkflowSchemeIssueType',
            'vendorUrl' => '/rest/api/2/workflowscheme/{id}/issuetype/{issueType}',
            'method' => 'PUT',
            'description' => 'Set the issue type mapping for the passed scheme.',
            'args' => array (
                'id' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Workflow scheme identifier.',
                ),
                'issueType' => array (
                    'required' => true,
                    'example' => '"IssueTypeId"',
                    'schema' => '{"type":"string"}',
                    'type' => 'String',
                    'info' => 'Issue type.',
                ),
                'workflow' => array (
                    'example' => '"WorkflowName"',
                    'schema' => '{"type":"string"}',
                    'type' => 'String',
                    'info' => 'Workflow name.',
                    'required' => false,
                ),
                'updateDraftIfNeeded' => array (
                    'example' => 'false',
                    'schema' => '{"type":"boolean"}',
                    'type' => 'boolean',
                    'info' => 'If set to true, indicate that the draft should be created/updated when the actual scheme cannot be edited.',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'getWorkflow',
            'vendorUrl' => '/rest/api/2/workflowscheme/{id}/workflow',
            'method' => 'GET',
            'description' => 'Returns the workflow mappings or requested mapping to the caller for the passed scheme.',
            'args' => array (
                'id' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Workflow scheme identifier.',
                ),
                'workflowName' => array (
                    'type' => 'string',
                    'info' => 'The workflow mapping to return.',
                    'required' => false,
                ),
                'returnDraftIfExists' => array (
                    'type' => 'booleanDefault: false',
                    'info' => 'When true indicates that a scheme\'s draft.',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'deleteWorkflow',
            'vendorUrl' => '/rest/api/2/workflowscheme/{id}/workflow',
            'method' => 'DELETE',
            'description' => 'Delete the passed workflow from the workflow scheme.',
            'args' => array (
                'id' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Workflow scheme identifier.',
                ),
                'workflowName' => array (
                    'type' => 'string',
                    'info' => 'The name of the workflow to delete.',
                    'required' => true,
                ),
                'updateDraftIfNeeded' => array (
                    'type' => 'boolean',
                    'info' => 'Flag to indicate if a draft should be created if necessary to delete the workflowfrom the scheme.',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'updateWorkflowMapping',
            'vendorUrl' => '/rest/api/2/workflowscheme/{id}/workflow',
            'method' => 'PUT',
            'description' => 'Update the scheme to include the passed mapping. The body is a representation of the workflow mapping.Values not passed are assumed to indicate no change for that field. The passed representation can have its updateDraftIfNeeded flag set to true to indicate that the draftshould be created/updated when the actual scheme cannot be edited.',
            'args' => array (
                'id' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Workflow scheme identifier.',
                ),
                'workflowName' => array (
                    'type' => 'string',
                    'info' => 'The name of the workflow mapping to update.',
                    'required' => false,
                ),
                'workflow' => array (
                    'example' => '"WorkflowName3"',
                    'schema' => '{"type":"string"}',
                    'type' => 'String',
                    'info' => 'Workflow.',
                    'required' => false,
                ),
                'issueTypes' => array (
                    'type' => 'JSON',
                    'example' => '["IssueTypeId"]',
                    'schema' => '{"type":"array","items":{"type":"string"}}',
                    'info' => 'IssueTypes.',
                    'required' => false,
                ),
                'updateDraftIfNeeded' => array (
                    'example' => 'true',
                    'schema' => '{"type":"boolean"}',
                    'type' => 'boolean',
                    'info' => 'If set to true, indicate that the draft should be created/updated when the actual scheme cannot be edited.',
                    'required' => false,
                ),
                'defaultMapping' => array (
                    'schema' => '{"type":"boolean"}',
                    'type' => 'boolean',
                    'info' => 'DefaultMapping.',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'getWorklogsDeletedSince',
            'vendorUrl' => '/rest/api/2/worklog/deleted',
            'method' => 'GET',
            'description' => 'Returns worklogs id and delete time of worklogs that was deleted since given time.',
            'args' => array (
                'since' => array (
                    'type' => 'long',
                    'info' => 'A date time in unix timestamp format since when deleted worklogs will be returned.',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'getWorklogs',
            'vendorUrl' => '/rest/api/2/worklog/list',
            'method' => 'POST',
            'description' => 'Returns worklogs for given worklog ids. Only worklogs to which the calling user has permissions, will be included in the result.',
            'args' => array (
                'ids' => array (
                    'type' => 'string',
                    'example' => '[1,2,5,10]',
                    'schema' => '{"type":"array","items":{"type":"integer"}}',
                    'info' => 'Comma-separated list of identifiers.',
                    'required' => true,
                ),
                'expand' => array (
                    'type' => 'string',
                    'info' => 'Comma-separated list of parameters to expand.',
                    'required' => false,
                ),
            ),
            'custom' => true,
        ),
        array (
            'name' => 'getWorklogsModifiedSince',
            'vendorUrl' => '/rest/api/2/worklog/updated',
            'method' => 'GET',
            'description' => 'Returns worklogs id and update time of worklogs that was updated since given time.',
            'args' => array (
                'since' => array (
                    'type' => 'long',
                    'info' => 'A date time in unix timestamp format since when updated worklogs will be returned.',
                    'required' => false,
                ),
                'expand' => array (
                    'type' => 'stringDefault:',
                    'info' => 'Optional comma-separated list of parameters to expand.',
                    'required' => false,
                ),
            ),
        ),
    )
);

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
            'description' => 'Sets the default system columns for issue navigator. Admin permission will be required.',
            'args' => array (
            ),
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
            'description' => 'Creates an avatar for a given entity, for the given entity ID and type of entity. For example, you can create anavatar for an issue type, given the issue type Id. Uploading an avatar is supported for different types of entitiesacross the JIRA products. However, it is supported for the "project" and "issuetype" entity types for all JIRA products.The uploaded image will be cropped according to the crop parameters listed below. If no crop parameters are specified,the image will be cropped to a square. The square will originate at the top left of the image and the length ofeach side will be set to the smaller of the height or width of the image.',
            'args' => array (
                'type' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Type.',
                ),
                'entityId' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'EntityId.',
                ),
                'x' => array (
                    'type' => 'int',
                    'info' => '(optional) The X coordinate of the top-left corner of the crop region. Default: 0.',
                    'required' => false,
                ),
                'y' => array (
                    'type' => 'int',
                    'info' => '(optional) The Y coordinate of the top-left corner of the crop region. Default: 0.',
                    'required' => false,
                ),
                'size' => array (
                    'type' => 'int',
                    'info' => '(optional) The length of each side of the crop region. The crop region can only be a square.If omitted and the top-left corner is at (0,0), this defaults to either the height or widthof the image, whichever is smaller.',
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
                    'info' => 'Type.',
                ),
                'owningObjectId' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'OwningObjectId.',
                ),
                'id' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Id.',
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
            'description' => 'Sets the default columns for the given user.  Admin permission will be required to get columns for a userother than the currently logged in user.',
            'args' => array (
            ),
        ),
        array (
            'name' => 'resetDefaultColumns',
            'vendorUrl' => '/rest/api/2/user/columns',
            'method' => 'DELETE',
            'description' => 'Reset the default columns for the given user to the system default. Admin permission will be required to getcolumns for a user other than the currently logged in user.',
            'args' => array (
                'username' => array (
                    'type' => 'string',
                    'info' => 'Username.',
                    'required' => false,
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
            'name' => 'findUsers',
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
            'name' => 'findUsersWithBrowsePermission',
            'vendorUrl' => '/rest/api/2/user/viewissue/search',
            'method' => 'GET',
            'description' => 'Returns a list of active users that match the search string. This resource cannot be accessed anonymouslyand requires the Browse Users global permission.Given an issue key this resource will provide a list of users that match the search string and havethe browse issue permission for the issue provided.',
            'args' => array (
                'username' => array (
                    'type' => 'string',
                    'info' => 'The username filter, no users returned if left blank.',
                    'required' => false,
                ),
                'issueKey' => array (
                    'type' => 'string',
                    'info' => 'The issue key for the issue being edited we need to find viewable users for.',
                    'required' => false,
                ),
                'projectKey' => array (
                    'type' => 'string',
                    'info' => 'The optional project key to search for users with if no issueKey is supplied.',
                    'required' => false,
                ),
                'startAt' => array (
                    'type' => 'int',
                    'info' => 'The index of the first user to return (0-based).',
                    'required' => false,
                ),
                'maxResults' => array (
                    'type' => 'int',
                    'info' => 'The maximum number of users to return (defaults to 50). The maximum allowed value is 1000.If you specify a value that is higher than this number, your search results will be truncated.',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'getUserPropertiesKeys',
            'vendorUrl' => '/rest/api/2/user/properties',
            'method' => 'GET',
            'description' => 'Returns the keys of all properties for the user identified by the key or by the id.',
            'args' => array (
                'userKey' => array (
                    'type' => 'string',
                    'info' => 'Key of the user whose properties are to be returned.',
                    'required' => false,
                ),
                'username' => array (
                    'type' => 'string',
                    'info' => 'Username of the user whose properties are to be returned.',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'deleteUserProperty',
            'vendorUrl' => '/rest/api/2/user/properties/{propertyKey}',
            'method' => 'DELETE',
            'description' => 'Removes the property from the user identified by the key or by the id. Ths user removing the property is requiredto have permissions to administer the user.',
            'args' => array (
                'propertyKey' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'PropertyKey.',
                ),
                'userKey' => array (
                    'type' => 'string',
                    'info' => 'Key of the user whose property is to be removed.',
                    'required' => false,
                ),
                'username' => array (
                    'type' => 'string',
                    'info' => 'Username of the user whose property is to be removed.',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'setUserProperty',
            'vendorUrl' => '/rest/api/2/user/properties/{propertyKey}',
            'method' => 'PUT',
            'description' => 'Sets the value of the specified user\'s property. You can use this resource to store a custom data against the user identified by the key or by the id. The userwho stores the data is required to have permissions to administer the user. .',
            'args' => array (
                'propertyKey' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'PropertyKey.',
                ),
                'userKey' => array (
                    'type' => 'string',
                    'info' => 'Key of the user whose property is to be set.',
                    'required' => false,
                ),
                'username' => array (
                    'type' => 'string',
                    'info' => 'Username of the user whose property is to be set.',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'getUserProperty',
            'vendorUrl' => '/rest/api/2/user/properties/{propertyKey}',
            'method' => 'GET',
            'description' => 'Returns the value of the property with a given key from the user identified by the key or by the id. The user who retrievesthe property is required to have permissions to read the user.',
            'args' => array (
                'propertyKey' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'PropertyKey.',
                ),
                'userKey' => array (
                    'type' => 'string',
                    'info' => 'Key of the user whose property is to be returned.',
                    'required' => false,
                ),
                'username' => array (
                    'type' => 'string',
                    'info' => 'Username of the user whose property is to be returned.',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'createVersion',
            'vendorUrl' => '/rest/api/2/version',
            'method' => 'POST',
            'description' => 'Create a version via POST.',
            'args' => array (
                'description' => array (
                    'example' => '"An excellent version"',
                    'schema' => '{"type":"string"}',
                    'type' => 'String',
                    'info' => 'Description.',
                    'required' => false,
                ),
                'name' => array (
                    'example' => '"New Version 1"',
                    'schema' => '{"type":"string"}',
                    'type' => 'String',
                    'info' => 'Name.',
                    'required' => false,
                ),
                'archived' => array (
                    'example' => 'false',
                    'schema' => '{"type":"boolean"}',
                    'type' => 'String',
                    'info' => 'Archived.',
                    'required' => false,
                ),
                'released' => array (
                    'example' => 'true',
                    'schema' => '{"type":"boolean"}',
                    'type' => 'String',
                    'info' => 'Released.',
                    'required' => false,
                ),
                'releaseDate' => array (
                    'example' => '"2010-07-06"',
                    'type' => 'String',
                    'info' => 'ReleaseDate.',
                    'required' => false,
                ),
                'userReleaseDate' => array (
                    'example' => '"6\\/Jul\\/2010"',
                    'schema' => '{"type":"string"}',
                    'type' => 'String',
                    'info' => 'UserReleaseDate.',
                    'required' => false,
                ),
                'project' => array (
                    'example' => '"PXA"',
                    'schema' => '{"type":"string"}',
                    'type' => 'String',
                    'info' => 'Project.',
                    'required' => false,
                ),
                'projectId' => array (
                    'example' => '10000',
                    'schema' => '{"type":"integer"}',
                    'type' => 'String',
                    'info' => 'ProjectId.',
                    'required' => false,
                ),
                'id' => array (
                    'schema' => '{"type":"string"}',
                    'type' => 'String',
                    'info' => 'Id.',
                    'required' => false,
                ),
                'overdue' => array (
                    'schema' => '{"type":"boolean"}',
                    'type' => 'String',
                    'info' => 'Overdue.',
                    'required' => false,
                ),
                'userStartDate' => array (
                    'schema' => '{"type":"string"}',
                    'type' => 'String',
                    'info' => 'UserStartDate.',
                    'required' => false,
                ),
                'moveUnfixedIssuesTo' => array (
                    'schema' => '{"type":"string","format":"uri"}',
                    'type' => 'String',
                    'info' => 'MoveUnfixedIssuesTo.',
                    'required' => false,
                ),
                'operations' => array (
                    'schema' => '{"type":"array","items":{"title":"Simple Link","type":"object","properties":{"id":{"type":"string"},"styleClass":{"type":"string"},"iconClass":{"type":"string"},"label":{"type":"string"},"title":{"type":"string"},"href":{"type":"string"},"weight":{"type":"integer"}},"additionalProperties":false}}',
                    'type' => 'String',
                    'info' => 'Operations.',
                    'required' => false,
                ),
                'remotelinks' => array (
                    'schema' => '{"type":"array","items":{"title":"Remote Entity Link","type":"object","properties":{"name":{"type":"string"},"link":[]},"additionalProperties":false}}',
                    'type' => 'String',
                    'info' => 'Remotelinks.',
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
                    'info' => 'Id.',
                ),
                'expand' => array (
                    'type' => 'string',
                    'info' => '',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'updateVersion',
            'vendorUrl' => '/rest/api/2/version/{id}',
            'method' => 'PUT',
            'description' => 'Modify a version via PUT. Any fields present in the PUT will override existing values. As a convenience, if a fieldis not present, it is silently ignored.',
            'args' => array (
                'id' => array (
                    'required' => true,
                    'example' => '"10000"',
                    'schema' => '{"type":"string"}',
                    'type' => 'String',
                    'info' => 'Id.',
                ),
                'self' => array (
                    'example' => '"http:\\/\\/www.example.com\\/jira\\/rest\\/api\\/2\\/version\\/10000"',
                    'type' => 'String',
                    'info' => 'Self.',
                    'required' => false,
                ),
                'description' => array (
                    'example' => '"An excellent version"',
                    'schema' => '{"type":"string"}',
                    'type' => 'String',
                    'info' => 'Description.',
                    'required' => false,
                ),
                'name' => array (
                    'example' => '"New Version 1"',
                    'schema' => '{"type":"string"}',
                    'type' => 'String',
                    'info' => 'Name.',
                    'required' => false,
                ),
                'archived' => array (
                    'example' => 'false',
                    'schema' => '{"type":"boolean"}',
                    'type' => 'String',
                    'info' => 'Archived.',
                    'required' => false,
                ),
                'released' => array (
                    'example' => 'true',
                    'schema' => '{"type":"boolean"}',
                    'type' => 'String',
                    'info' => 'Released.',
                    'required' => false,
                ),
                'releaseDate' => array (
                    'example' => '"2010-07-06"',
                    'type' => 'String',
                    'info' => 'ReleaseDate.',
                    'required' => false,
                ),
                'overdue' => array (
                    'example' => 'true',
                    'schema' => '{"type":"boolean"}',
                    'type' => 'String',
                    'info' => 'Overdue.',
                    'required' => false,
                ),
                'userReleaseDate' => array (
                    'example' => '"6\\/Jul\\/2010"',
                    'schema' => '{"type":"string"}',
                    'type' => 'String',
                    'info' => 'UserReleaseDate.',
                    'required' => false,
                ),
                'projectId' => array (
                    'example' => '10000',
                    'schema' => '{"type":"integer"}',
                    'type' => 'String',
                    'info' => 'ProjectId.',
                    'required' => false,
                ),
                'userStartDate' => array (
                    'schema' => '{"type":"string"}',
                    'type' => 'String',
                    'info' => 'UserStartDate.',
                    'required' => false,
                ),
                'project' => array (
                    'schema' => '{"type":"string"}',
                    'type' => 'String',
                    'info' => 'Project.',
                    'required' => false,
                ),
                'moveUnfixedIssuesTo' => array (
                    'schema' => '{"type":"string","format":"uri"}',
                    'type' => 'String',
                    'info' => 'MoveUnfixedIssuesTo.',
                    'required' => false,
                ),
                'operations' => array (
                    'schema' => '{"type":"array","items":{"title":"Simple Link","type":"object","properties":{"id":{"type":"string"},"styleClass":{"type":"string"},"iconClass":{"type":"string"},"label":{"type":"string"},"title":{"type":"string"},"href":{"type":"string"},"weight":{"type":"integer"}},"additionalProperties":false}}',
                    'type' => 'String',
                    'info' => 'Operations.',
                    'required' => false,
                ),
                'remotelinks' => array (
                    'schema' => '{"type":"array","items":{"title":"Remote Entity Link","type":"object","properties":{"name":{"type":"string"},"link":[]},"additionalProperties":false}}',
                    'type' => 'String',
                    'info' => 'Remotelinks.',
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
                    'info' => 'Id.',
                ),
                'moveFixIssuesTo' => array (
                    'type' => 'string',
                    'info' => 'The version to set fixVersion to on issues where the deleted version is the fix version,If null then the fixVersion is removed.',
                    'required' => false,
                ),
                'moveAffectedIssuesTo' => array (
                    'type' => 'string',
                    'info' => 'The version to set affectedVersion to on issues where the deleted version is the affected version,If null then the affectedVersion is removed.',
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
                    'info' => 'Id.',
                ),
                'moveIssuesTo' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'MoveIssuesTo.',
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
                    'info' => 'Id.',
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
                    'info' => 'Id.',
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
                    'info' => 'VersionId.',
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
                    'info' => 'VersionId.',
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
                    'info' => 'VersionId.',
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
                    'info' => 'VersionId.',
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
                    'info' => 'VersionId.',
                ),
                'globalId' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'GlobalId.',
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
                    'info' => 'VersionId.',
                ),
                'globalId' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'GlobalId.',
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
                    'required' => false,
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
                    'info' => '',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'deleteWorkflowProperty',
            'vendorUrl' => '/rest/api/2/workflow/transitions/{transitionId}/properties',
            'method' => 'DELETE',
            'description' => 'Delete a property from the passed transition on the passed workflow. It is not an error to delete a property thatdoes not exist.',
            'args' => array (
                'transitionId' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'TransitionId.',
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
                    'info' => 'The type of workflow to use. Can either be "live" or "draft".',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'createWorkflowProperty',
            'vendorUrl' => '/rest/api/2/workflow/transitions/{transitionId}/properties',
            'method' => 'POST',
            'description' => 'Add a new property to a transition. Trying to add a property that alreadyexists will fail.',
            'args' => array (
                'transitionId' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'TransitionId.',
                ),
                'key' => array (
                    'type' => 'string',
                    'info' => 'The name of the property to add.',
                    'schema' => '{"type":"string"}',
                    'required' => false,
                ),
                'workflowName' => array (
                    'type' => 'string',
                    'info' => 'The name of the workflow to use.',
                    'required' => false,
                ),
                'workflowMode' => array (
                    'type' => 'string',
                    'info' => 'The type of workflow to use. Can either be "live" or "draft".',
                    'required' => false,
                ),
                'value' => array (
                    'example' => '"createissue"',
                    'schema' => '{"type":"string"}',
                    'type' => 'String',
                    'info' => 'Value.',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'updateWorkflowProperty',
            'vendorUrl' => '/rest/api/2/workflow/transitions/{transitionId}/properties',
            'method' => 'PUT',
            'description' => 'Update/add new property to a transition. Trying to update a property that doesnot exist will result in a new property being added.',
            'args' => array (
                'transitionId' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'TransitionId.',
                ),
                'key' => array (
                    'type' => 'string',
                    'info' => 'The name of the property to add.',
                    'schema' => '{"type":"string"}',
                    'required' => false,
                ),
                'workflowName' => array (
                    'type' => 'string',
                    'info' => 'The name of the workflow to use.',
                    'required' => false,
                ),
                'workflowMode' => array (
                    'type' => 'string',
                    'info' => 'The type of workflow to use. Can either be "live" or "draft".',
                    'required' => false,
                ),
                'value' => array (
                    'example' => '"createissue"',
                    'schema' => '{"type":"string"}',
                    'type' => 'String',
                    'info' => 'Value.',
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
                    'info' => 'TransitionId.',
                ),
                'includeReservedKeys' => array (
                    'type' => 'boolean',
                    'info' => 'Some keys under the "jira." prefix are editable, some are not. Set this to truein order to include the non-editable keys in the response.',
                    'required' => false,
                ),
                'key' => array (
                    'type' => 'string',
                    'info' => 'The name of the property key to query. Can be left off the query to return all properties.',
                    'required' => false,
                ),
                'workflowName' => array (
                    'type' => 'string',
                    'info' => 'The name of the workflow to use.',
                    'required' => false,
                ),
                'workflowMode' => array (
                    'type' => 'string',
                    'info' => 'The type of workflow to use. Can either be "live" or "draft".',
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
                    'info' => 'Id.',
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
                    'type' => 'String',
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
                    'type' => 'String',
                    'info' => 'UpdateDraftIfNeeded.',
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
                    'info' => 'Id.',
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
                    'info' => 'Id.',
                ),
                'returnDraftIfExists' => array (
                    'type' => 'booleanDefault: false',
                    'info' => 'When true indicates that a scheme\'s draft, if it exists, should be queried instead ofthe scheme itself.',
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
                    'info' => 'Id.',
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
                    'type' => 'String',
                    'info' => 'UpdateDraftIfNeeded.',
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
                    'type' => 'String',
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
                    'info' => 'Id.',
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
                    'info' => 'Id.',
                ),
                'updateDraftIfNeeded' => array (
                    'type' => 'boolean',
                    'info' => 'When true will create and return a draft when the workflow scheme cannot be edited(e.g. when it is being used by a project).',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'updateDefaultWorkflowScheme',
            'vendorUrl' => '/rest/api/2/workflowscheme/{id}/default',
            'method' => 'PUT',
            'description' => 'Set the default workflow for the passed workflow scheme. The passed representation can have itsupdateDraftIfNeeded flag set to true to indicate that the draft should be created/updated when the actual schemecannot be edited.',
            'args' => array (
                'id' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Id.',
                ),
                'workflow' => array (
                    'example' => '"WorkflowName"',
                    'schema' => '{"type":"string"}',
                    'type' => 'String',
                    'info' => 'Workflow.',
                    'required' => false,
                ),
                'updateDraftIfNeeded' => array (
                    'example' => 'false',
                    'schema' => '{"type":"boolean"}',
                    'type' => 'String',
                    'info' => 'UpdateDraftIfNeeded.',
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
                    'info' => 'Id.',
                ),
                'returnDraftIfExists' => array (
                    'type' => 'booleanDefault: false',
                    'info' => 'When true indicates that a scheme\'s draft, if it exists, should be queried instead ofthe scheme itself.',
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
                    'info' => 'Id.',
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
                    'info' => 'Id.',
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
                    'info' => 'Id.',
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
                    'type' => 'String',
                    'info' => 'UpdateDraftIfNeeded.',
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
                    'type' => 'String',
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
                    'info' => 'Id.',
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
                    'info' => 'Id.',
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
                    'info' => 'Id.',
                ),
                'workflow' => array (
                    'example' => '"WorkflowName"',
                    'schema' => '{"type":"string"}',
                    'type' => 'String',
                    'info' => 'Workflow.',
                    'required' => false,
                ),
                'updateDraftIfNeeded' => array (
                    'example' => 'false',
                    'schema' => '{"type":"boolean"}',
                    'type' => 'String',
                    'info' => 'UpdateDraftIfNeeded.',
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
                    'info' => 'Id.',
                ),
                'issueType' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'IssueType.',
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
                    'info' => 'Id.',
                ),
                'issueType' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'IssueType.',
                ),
            ),
        ),
        array (
            'name' => 'setDraftSchemeIssueType',
            'vendorUrl' => '/rest/api/2/workflowscheme/{id}/draft/issuetype/{issueType}',
            'method' => 'PUT',
            'description' => 'Set the issue type mapping for the passed draft scheme. The passed representation can have its updateDraftIfNeeded flag set to true to indicate thatthe draft should be created/updated when the actual scheme cannot be edited.',
            'args' => array (
                'id' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Id.',
                ),
                'issueType' => array (
                    'required' => true,
                    'example' => '"IssueTypeId"',
                    'schema' => '{"type":"string"}',
                    'type' => 'String',
                    'info' => 'IssueType.',
                ),
                'workflow' => array (
                    'example' => '"WorkflowName"',
                    'schema' => '{"type":"string"}',
                    'type' => 'String',
                    'info' => 'Workflow.',
                    'required' => false,
                ),
                'updateDraftIfNeeded' => array (
                    'example' => 'false',
                    'schema' => '{"type":"boolean"}',
                    'type' => 'String',
                    'info' => 'UpdateDraftIfNeeded.',
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
                    'info' => 'Id.',
                ),
                'workflowName' => array (
                    'type' => 'string',
                    'info' => 'The workflow mapping to return. Null can be passed to return all mappings. Must be a valid workflow name.',
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
                    'info' => 'Id.',
                ),
                'workflowName' => array (
                    'type' => 'string',
                    'info' => 'The name of the workflow to delete.',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'updateDraftWorkflowMapping',
            'vendorUrl' => '/rest/api/2/workflowscheme/{id}/draft/workflow',
            'method' => 'PUT',
            'description' => 'Update the draft scheme to include the passed mapping. The body is a representation of the workflow mapping.Values not passed are assumed to indicate no change for that field.',
            'args' => array (
                'id' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Id.',
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
                    'type' => 'String',
                    'info' => 'UpdateDraftIfNeeded.',
                    'required' => false,
                ),
                'defaultMapping' => array (
                    'schema' => '{"type":"boolean"}',
                    'type' => 'String',
                    'info' => 'DefaultMapping.',
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
                    'info' => 'Id.',
                ),
                'issueType' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'IssueType.',
                ),
                'returnDraftIfExists' => array (
                    'type' => 'booleanDefault: false',
                    'info' => 'When true indicates that a scheme\'s draft, if it exists, should be queried instead ofthe scheme itself.',
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
                    'info' => 'Id.',
                ),
                'issueType' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'IssueType.',
                ),
                'updateDraftIfNeeded' => array (
                    'type' => 'boolean',
                    'info' => 'When true will create and return a draft when the workflow scheme cannot be edited(e.g. when it is being used by a project).',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'setWorkflowSchemeIssueType',
            'vendorUrl' => '/rest/api/2/workflowscheme/{id}/issuetype/{issueType}',
            'method' => 'PUT',
            'description' => 'Set the issue type mapping for the passed scheme. The passed representation can have its updateDraftIfNeeded flag set to true to indicate thatthe draft should be created/updated when the actual scheme cannot be edited.',
            'args' => array (
                'id' => array (
                    'required' => true,
                    'type' => 'String',
                    'info' => 'Id.',
                ),
                'issueType' => array (
                    'required' => true,
                    'example' => '"IssueTypeId"',
                    'schema' => '{"type":"string"}',
                    'type' => 'String',
                    'info' => 'IssueType.',
                ),
                'workflow' => array (
                    'example' => '"WorkflowName"',
                    'schema' => '{"type":"string"}',
                    'type' => 'String',
                    'info' => 'Workflow.',
                    'required' => false,
                ),
                'updateDraftIfNeeded' => array (
                    'example' => 'false',
                    'schema' => '{"type":"boolean"}',
                    'type' => 'String',
                    'info' => 'UpdateDraftIfNeeded.',
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
                    'info' => 'Id.',
                ),
                'workflowName' => array (
                    'type' => 'string',
                    'info' => 'The workflow mapping to return. Null can be passed to return all mappings. Must be a valid workflow name.',
                    'required' => false,
                ),
                'returnDraftIfExists' => array (
                    'type' => 'booleanDefault: false',
                    'info' => 'When true indicates that a scheme\'s draft, if it exists, should be queried instead ofthe scheme itself.',
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
                    'info' => 'Id.',
                ),
                'workflowName' => array (
                    'type' => 'string',
                    'info' => 'The name of the workflow to delete.',
                    'required' => false,
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
                    'info' => 'Id.',
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
                    'type' => 'String',
                    'info' => 'UpdateDraftIfNeeded.',
                    'required' => false,
                ),
                'defaultMapping' => array (
                    'schema' => '{"type":"boolean"}',
                    'type' => 'String',
                    'info' => 'DefaultMapping.',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'getWorklogsDeletedSince',
            'vendorUrl' => '/rest/api/2/worklog/deleted',
            'method' => 'GET',
            'description' => 'Returns worklogs id and delete time of worklogs that was deleted since given time.The returns set of worklogs is limited to 1000 elements.This API will not return worklogs deleted during last minute.',
            'args' => array (
                'since' => array (
                    'type' => 'longDefault: 0',
                    'info' => 'A date time in unix timestamp format since when deleted worklogs will be returned.',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'getWorklogs',
            'vendorUrl' => '/rest/api/2/worklog/list',
            'method' => 'POST',
            'description' => 'Returns worklogs for given worklog ids. Only worklogs to which the calling user has permissions, will be included in the result.The returns set of worklogs is limited to 1000 elements.',
            'args' => array (
                'expand' => array (
                    'type' => 'stringDefault:',
                    'info' => 'Optional comma separated list of parameters to expand:  properties (provides worklog properties).',
                    'required' => false,
                ),
                'ids' => array (
                    'type' => 'JSON',
                    'example' => '[1,2,5,10]',
                    'schema' => '{"type":"array","items":{"type":"integer"}}',
                    'info' => 'Ids.',
                    'required' => false,
                ),
            ),
        ),
        array (
            'name' => 'getWorklogsModifiedSince',
            'vendorUrl' => '/rest/api/2/worklog/updated',
            'method' => 'GET',
            'description' => 'Returns worklogs id and update time of worklogs that was updated since given time.The returns set of worklogs is limited to 1000 elements.This API will not return worklogs updated during last minute.',
            'args' => array (
                'since' => array (
                    'type' => 'longDefault: 0',
                    'info' => 'A date time in unix timestamp format since when updated worklogs will be returned.',
                    'required' => false,
                ),
                'expand' => array (
                    'type' => 'stringDefault:',
                    'info' => 'Optional comma separated list of parameters to expand:  properties (provides worklog properties).',
                    'required' => false,
                ),
            ),
        ),
    )
);

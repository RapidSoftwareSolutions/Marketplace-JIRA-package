<?php
return array (
    array (
            array (
                'name' => 'getIssuePropertiesKeys',
                'vendorUrl' => '/rest/api/2/issue/{issueIdOrKey}/properties',
                'method' => 'GET',
                'description' => 'Returns the keys of all properties for the issue identified by the key or by the id.',
                'args' => array (
                        'issueIdOrKey' => array (
                                'required' => true,
                                'type' => 'String',
                                'info' => 'issueIdOrKey',
                            ),
                    ),
            ),
            array (
                'name' => 'deleteIssueProperty',
                'vendorUrl' => '/rest/api/2/issue/{issueIdOrKey}/properties/{propertyKey}',
                'method' => 'DELETE',
                'description' => 'Removes the property from the issue identified by the key or by the id. Ths user removing the property is requiredto have permissions to edit the issue.',
                'args' => array (
                        'issueIdOrKey' => array (
                                'required' => true,
                                'type' => 'String',
                                'info' => 'issueIdOrKey',
                            ),
                        'propertyKey' => array (
                                'required' => true,
                                'type' => 'String',
                                'info' => 'propertyKey',
                            ),
                    ),
            ),
            array (
                'name' => 'setIssueProperty',
                'vendorUrl' => '/rest/api/2/issue/{issueIdOrKey}/properties/{propertyKey}',
                'method' => 'PUT',
                'description' => 'Sets the value of the specified issue\'s property. You can use this resource to store a custom data against the issue identified by the key or by the id. The userwho stores the data is required to have permissions to edit the issue. .',
                'args' => array (
                        'issueIdOrKey' => array (
                                'required' => true,
                                'type' => 'String',
                                'info' => 'issueIdOrKey',
                            ),
                        'propertyKey' => array (
                                'required' => true,
                                'type' => 'String',
                                'info' => 'propertyKey',
                            ),
                    ),
            ),
            array (
                'name' => 'getIssueProperty',
                'vendorUrl' => '/rest/api/2/issue/{issueIdOrKey}/properties/{propertyKey}',
                'method' => 'GET',
                'description' => 'Returns the value of the property with a given key from the issue identified by the key or by the id. The user who retrievesthe property is required to have permissions to read the issue.',
                'args' => array (
                        'issueIdOrKey' => array (
                                'required' => true,
                                'type' => 'String',
                                'info' => 'issueIdOrKey',
                            ),
                        'propertyKey' => array (
                                'required' => true,
                                'type' => 'String',
                                'info' => 'propertyKey',
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
                                'info' => 'issueIdOrKey',
                            ),
                        'worklogId' => array (
                                'required' => true,
                                'type' => 'String',
                                'info' => 'worklogId',
                            ),
                    ),
            ),
            array (
                'name' => 'deleteWorklogProperty',
                'vendorUrl' => '/rest/api/2/issue/{issueIdOrKey}/worklog/{worklogId}/properties/{propertyKey}',
                'method' => 'DELETE',
                'description' => 'Removes the property from the worklog identified by the key or by the id. Ths user removing the property is requiredto have permissions to administer the worklog.',
                'args' => array (
                        'issueIdOrKey' => array (
                                'required' => true,
                                'type' => 'String',
                                'info' => 'issueIdOrKey',
                            ),
                        'worklogId' => array (
                                'required' => true,
                                'type' => 'String',
                                'info' => 'worklogId',
                            ),
                        'propertyKey' => array (
                                'required' => true,
                                'type' => 'String',
                                'info' => 'propertyKey',
                            ),
                    ),
            ),
            array (
                'name' => 'setWorklogProperty',
                'vendorUrl' => '/rest/api/2/issue/{issueIdOrKey}/worklog/{worklogId}/properties/{propertyKey}',
                'method' => 'PUT',
                'description' => 'Sets the value of the specified worklog\'s property. You can use this resource to store a custom data against the worklog identified by the key or by the id. The userwho stores the data is required to have permissions to administer the worklog. .',
                'args' => array (
                        'issueIdOrKey' => array (
                                'required' => true,
                                'type' => 'String',
                                'info' => 'issueIdOrKey',
                            ),
                        'worklogId' => array (
                                'required' => true,
                                'type' => 'String',
                                'info' => 'worklogId',
                            ),
                        'propertyKey' => array (
                                'required' => true,
                                'type' => 'String',
                                'info' => 'propertyKey',
                            ),
                    ),
            ),
            array (
                'name' => 'getWorklogProperty',
                'vendorUrl' => '/rest/api/2/issue/{issueIdOrKey}/worklog/{worklogId}/properties/{propertyKey}',
                'method' => 'GET',
                'description' => 'Returns the value of the property with a given key from the worklog identified by the key or by the id. The user who retrievesthe property is required to have permissions to read the worklog.',
                'args' => array (
                        'issueIdOrKey' => array (
                                'required' => true,
                                'type' => 'String',
                                'info' => 'issueIdOrKey',
                            ),
                        'worklogId' => array (
                                'required' => true,
                                'type' => 'String',
                                'info' => 'worklogId',
                            ),
                        'propertyKey' => array (
                                'required' => true,
                                'type' => 'String',
                                'info' => 'propertyKey',
                            ),
                    ),
            ),
            array (
                'name' => 'createIssueLink',
                'vendorUrl' => '/rest/api/2/issueLink',
                'method' => 'POST',
                'description' => 'Creates an issue link between two issues.The user requires the link issue permission for the issue which will be linked to another issue.The specified link type in the request is used to create the link and will create a link from the first issueto the second issue using the outward description. It also create a link from the second issue to the first issue using theinward description of the issue link type.It will add the supplied comment to the first issue. The comment can have a restriction who can view it.If group is specified, only users of this group can view this comment, if roleLevel is specified only users who have the specified role can view this comment.The user who creates the issue link needs to belong to the specified group or have the specified role.',
                'args' => array (
                        'type' => array (
                                'type' => 'JSON',
                                'example' => '{"name":"Duplicate"}',
                                'schema' => '{"title":"Issue Link Type","type":"object","properties":{"id":{"type":"string"},"name":{"type":"string"},"inward":{"type":"string"},"outward":{"type":"string"}},"additionalProperties":false}',
                                'info' => 'type',
                                'required' => false,
                            ),
                        'inwardIssue' => array (
                                'type' => 'JSON',
                                'example' => '{"key":"HSP-1"}',
                                'schema' => '{"$ref":"#\\/definitions\\/issue-ref"}',
                                'info' => 'inwardIssue',
                                'required' => false,
                            ),
                        'outwardIssue' => array (
                                'type' => 'JSON',
                                'example' => '{"key":"MKY-1"}',
                                'schema' => '{"$ref":"#\\/definitions\\/issue-ref"}',
                                'info' => 'outwardIssue',
                                'required' => false,
                            ),
                        'comment' => array (
                                'type' => 'JSON',
                                'example' => '{"body":"Linked related issue!","visibility":{"type":"group","value":"jira-software-users"}}',
                                'schema' => '{"title":"Comment","type":"object","properties":{"id":{"type":"string"},"author":{"$ref":"#\\/definitions\\/user"},"body":{"type":"string"},"renderedBody":{"type":"string"},"updateAuthor":{"$ref":"#\\/definitions\\/user"},"created":{"type":"string"},"updated":{"type":"string"},"visibility":{"title":"Visibility","type":"object","properties":{"type":{"type":"string","enum":["group","role"]},"value":{"type":"string"}},"additionalProperties":false},"properties":{"type":"array","items":{"title":"Entity Property","type":"object","properties":{"key":{"type":"string"},"value":[]},"additionalProperties":false}}},"additionalProperties":false}',
                                'info' => 'comment',
                                'required' => false,
                            ),
                    ),
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
                                'info' => 'linkId',
                            ),
                    ),
            ),
            array (
                'name' => 'deleteIssueLink',
                'vendorUrl' => '/rest/api/2/issueLink/{linkId}',
                'method' => 'DELETE',
                'description' => 'Deletes an issue link with the specified id.To be able to delete an issue link you must be able to view both issues and must have the link issue permissionfor at least one of the issues.',
                'args' => array (
                        'linkId' => array (
                                'required' => true,
                                'type' => 'String',
                                'info' => 'linkId',
                            ),
                    ),
            ),
            array (
                'name' => 'getIssueLinkTypes',
                'vendorUrl' => '/rest/api/2/issueLinkType',
                'method' => 'GET',
                'description' => 'Returns a list of available issue link types, if issue linking is enabled.Each issue link type has an id, a name and a label for the outward and inward link relationship.',
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
                                'info' => 'name',
                                'required' => false,
                            ),
                        'inward' => array (
                                'example' => '"Duplicated by"',
                                'schema' => '{"type":"string"}',
                                'type' => 'String',
                                'info' => 'inward',
                                'required' => false,
                            ),
                        'outward' => array (
                                'example' => '"Duplicates"',
                                'schema' => '{"type":"string"}',
                                'type' => 'String',
                                'info' => 'outward',
                                'required' => false,
                            ),
                        'id' => array (
                                'schema' => '{"type":"string"}',
                                'type' => 'String',
                                'info' => 'id',
                                'required' => false,
                            ),
                    ),
            ),
            array (
                'name' => 'getSingleIssueLinkType',
                'vendorUrl' => '/rest/api/2/issueLinkType/{issueLinkTypeId}',
                'method' => 'GET',
                'description' => 'Returns for a given issue link type id all information about this issue link type.',
                'args' => array (
                        'issueLinkTypeId' => array (
                                'required' => true,
                                'type' => 'String',
                                'info' => 'issueLinkTypeId',
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
                                'info' => 'issueLinkTypeId',
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
                                'info' => 'issueLinkTypeId',
                            ),
                        'name' => array (
                                'example' => '"Duplicate"',
                                'schema' => '{"type":"string"}',
                                'type' => 'String',
                                'info' => 'name',
                                'required' => false,
                            ),
                        'inward' => array (
                                'example' => '"Duplicated by"',
                                'schema' => '{"type":"string"}',
                                'type' => 'String',
                                'info' => 'inward',
                                'required' => false,
                            ),
                        'outward' => array (
                                'example' => '"Duplicates"',
                                'schema' => '{"type":"string"}',
                                'type' => 'String',
                                'info' => 'outward',
                                'required' => false,
                            ),
                        'id' => array (
                                'schema' => '{"type":"string"}',
                                'type' => 'String',
                                'info' => 'id',
                                'required' => false,
                            ),
                    ),
            ),
            array (
                'name' => 'getIssueSecuritySchemes',
                'vendorUrl' => '/rest/api/2/issuesecurityschemes',
                'method' => 'GET',
                'description' => 'Returns all issue security schemes that are defined.',
                'args' => array (
                    ),
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
                                'info' => 'id',
                            ),
                    ),
            ),
            array (
                'name' => 'getIssueAllTypes',
                'vendorUrl' => '/rest/api/2/issuetype',
                'method' => 'GET',
                'description' => 'Returns a list of all issue types visible to the user.',
                'args' => array (
                    ),
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
                                'info' => 'name',
                                'required' => false,
                            ),
                        'description' => array (
                                'example' => '"description"',
                                'schema' => '{"type":"string"}',
                                'type' => 'String',
                                'info' => 'description',
                                'required' => false,
                            ),
                        'type' => array (
                                'example' => '"standard"',
                                'schema' => '{"type":"string","enum":["subtask","standard"]}',
                                'type' => 'String',
                                'info' => 'type',
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
                                'info' => 'id',
                            ),
                    ),
            ),
            array (
                'name' => 'deleteSingleIssueType',
                'vendorUrl' => '/rest/api/2/issuetype/{id}',
                'method' => 'DELETE',
                'description' => 'Deletes the specified issue type. If the issue type has any associated issues, these issues will be migrated tothe alternative issue type specified in the parameter. You can determine the alternative issue types by callingthe /rest/api/2/issuetype/{id}/alternatives resource.',
                'args' => array (
                        'id' => array (
                                'required' => true,
                                'type' => 'String',
                                'info' => 'id',
                            ),
                        'alternativeIssueTypeId' => array (
                                'type' => 'string',
                                'info' => 'the id of an issue type to which issues associated with the removed issue type will be migrated.',
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
                                'info' => 'id',
                            ),
                        'name' => array (
                                'example' => '"name"',
                                'schema' => '{"type":"string"}',
                                'type' => 'String',
                                'info' => 'name',
                                'required' => false,
                            ),
                        'description' => array (
                                'example' => '"description"',
                                'schema' => '{"type":"string"}',
                                'type' => 'String',
                                'info' => 'description',
                                'required' => false,
                            ),
                        'avatarId' => array (
                                'example' => '1',
                                'schema' => '{"type":"integer"}',
                                'type' => 'String',
                                'info' => 'avatarId',
                                'required' => false,
                            ),
                    ),
            ),
            array (
                'name' => 'getAlternativeIssueTypes',
                'vendorUrl' => '/rest/api/2/issuetype/{id}/alternatives',
                'method' => 'GET',
                'description' => 'Returns a list of all alternative issue types for the given issue type id. The list will contain these issues types, to whichissues assigned to the given issue type can be migrated. The suitable alternatives are issue types which are assignedto the same workflow, the same field configuration and the same screen scheme.',
                'args' => array (
                        'id' => array (
                                'required' => true,
                                'type' => 'String',
                                'info' => 'id',
                            ),
                    ),
            ),
            array (
                'name' => 'createIssueTypeAvatar',
                'vendorUrl' => '/rest/api/2/issuetype/{id}/avatar2',
                'method' => 'POST',
                'description' => 'Creates an avatar for an issue type, for a given issue type Id. The uploaded image will be cropped according tothe crop parameters listed below. If no crop parameters are specified, the image will be cropped to a square.The square will originate at the top left of the image and the length of each side will be set to the smaller ofthe height or width of the image.',
                'args' => array (
                        'id' => array (
                                'required' => true,
                                'type' => 'String',
                                'info' => 'id',
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
                'name' => 'getIssueTypePropertiesKeys',
                'vendorUrl' => '/rest/api/2/issuetype/{issueTypeId}/properties',
                'method' => 'GET',
                'description' => 'Returns the keys of all properties for the issue type identified by the id.',
                'args' => array (
                        'issueTypeId' => array (
                                'required' => true,
                                'type' => 'String',
                                'info' => 'issueTypeId',
                            ),
                    ),
            ),
            array (
                'name' => 'deleteIssueTypeProperty',
                'vendorUrl' => '/rest/api/2/issuetype/{issueTypeId}/properties/{propertyKey}',
                'method' => 'DELETE',
                'description' => 'Removes the property from the issue type identified by the id. Ths user removing the property is requiredto have permissions to edit the issue type.',
                'args' => array (
                        'issueTypeId' => array (
                                'required' => true,
                                'type' => 'String',
                                'info' => 'issueTypeId',
                            ),
                        'propertyKey' => array (
                                'required' => true,
                                'type' => 'String',
                                'info' => 'propertyKey',
                            ),
                    ),
            ),
            array (
                'name' => 'setIssueTypeProperty',
                'vendorUrl' => '/rest/api/2/issuetype/{issueTypeId}/properties/{propertyKey}',
                'method' => 'PUT',
                'description' => 'Sets the value of the specified issue type\'s property. You can use this resource to store a custom data against an issue type identified by the id. The userwho stores the data is required to have permissions to edit an issue type. .',
                'args' => array (
                        'issueTypeId' => array (
                                'required' => true,
                                'type' => 'String',
                                'info' => 'issueTypeId',
                            ),
                        'propertyKey' => array (
                                'required' => true,
                                'type' => 'String',
                                'info' => 'propertyKey',
                            ),
                    ),
            ),
            array (
                'name' => 'getIssueTypeProperty',
                'vendorUrl' => '/rest/api/2/issuetype/{issueTypeId}/properties/{propertyKey}',
                'method' => 'GET',
                'description' => 'Returns the value of the property with a given key from the issue type identified by the id. The user who retrievesthe property is required to have permissions to view the issue type.',
                'args' => array (
                        'issueTypeId' => array (
                                'required' => true,
                                'type' => 'String',
                                'info' => 'issueTypeId',
                            ),
                        'propertyKey' => array (
                                'required' => true,
                                'type' => 'String',
                                'info' => 'propertyKey',
                            ),
                    ),
            ),
            array (
                'name' => 'getAutoComplete',
                'vendorUrl' => '/rest/api/2/jql/autocompletedata',
                'method' => 'GET',
                'description' => 'Returns the auto complete data required for JQL searches.',
                'args' => array (
                    ),
            ),
            array (
                'name' => 'getFieldAutoComplete',
                'vendorUrl' => '/rest/api/2/jql/autocompletedata/suggestions',
                'method' => 'GET',
                'description' => 'Returns auto complete suggestions for JQL search.',
                'args' => array (
                        'fieldName' => array (
                                'type' => 'string',
                                'info' => 'the field name for which the suggestions are generated.',
                                'required' => false,
                            ),
                        'fieldValue' => array (
                                'type' => 'string',
                                'info' => 'the portion of the field value that has already been provided by the user.',
                                'required' => false,
                            ),
                        'predicateName' => array (
                                'type' => 'string',
                                'info' => 'the predicate for which the suggestions are generated. Suggestions are generated only for: "by", "from" and "to".',
                                'required' => false,
                            ),
                        'predicateValue' => array (
                                'type' => 'string',
                                'info' => 'the portion of the predicate value that has already been provided by the user.',
                                'required' => false,
                            ),
                    ),
            ),
            array (
                'name' => 'getMyPreferences',
                'vendorUrl' => '/rest/api/2/mypreferences',
                'method' => 'GET',
                'description' => 'Returns preference of the currently logged in user. Preference key must be provided as input parameter (key). Thevalue is returned exactly as it is. If key parameter is not provided or wrong - status code 404. If value isfound  - status code 200.',
                'args' => array (
                        'key' => array (
                                'type' => 'string',
                                'info' => '- key of the preference to be returned.',
                                'required' => false,
                            ),
                    ),
            ),
            array (
                'name' => 'setMyPreference',
                'vendorUrl' => '/rest/api/2/mypreferences',
                'method' => 'PUT',
                'description' => 'Sets preference of the currently logged in user. Preference key must be provided as input parameters (key). Valuemust be provided as post body. If key or value parameter is not provided - status code 404. If preference is set- status code 204.',
                'args' => array (
                        'key' => array (
                                'type' => 'string',
                                'info' => '- key of the preference to be set.',
                                'required' => false,
                            ),
                        'avatarId' => array (
                                'schema' => '{"id":"https:\\/\\/docs.atlassian.com\\/jira\\/REST\\/schema\\/string#","title":"String","type":"string"}',
                                'type' => 'String',
                                'info' => 'avatarId',
                                'required' => false,
                            ),
                    ),
            ),
            array (
                'name' => 'deleteMyPreference',
                'vendorUrl' => '/rest/api/2/mypreferences',
                'method' => 'DELETE',
                'description' => 'Removes preference of the currently logged in user. Preference key must be provided as input parameters (key). Ifkey parameter is not provided or wrong - status code 404. If preference is unset - status code 204.',
                'args' => array (
                        'key' => array (
                                'type' => 'string',
                                'info' => '- key of the preference to be removed.',
                                'required' => false,
                            ),
                    ),
            ),
            array (
                'name' => 'getMe',
                'vendorUrl' => '/rest/api/2/myself',
                'method' => 'GET',
                'description' => 'Returns currently logged user. This resource cannot be accessed anonymously. The resource accepts the expand param that is used to include, hidden by default, parts of response. This can be used to include:. .',
                'args' => array (
                    ),
            ),
            array (
                'name' => 'getNotificationSchemes',
                'vendorUrl' => '/rest/api/2/notificationscheme',
                'method' => 'GET',
                'description' => 'Returns a paginated list of notification schemes. In order to access notification scheme, the calling user isrequired to have permissions to administer at least one project associated with the requested notification scheme. Each scheme containsa list of events and recipient configured to receive notifications for these events. Consumer should allow events without recipients to appear in response.The list is ordered by the scheme\'s name.Follow the documentation of /notificationscheme/{id} resource for all details about returned value.',
                'args' => array (
                        'startAt' => array (
                                'type' => 'long',
                                'info' => 'the index of the first notification scheme to return (0 based).',
                                'required' => false,
                            ),
                        'maxResults' => array (
                                'type' => 'int',
                                'info' => 'the maximum number of notification schemes to return (max 50).',
                                'required' => false,
                            ),
                        'expand' => array (
                                'type' => 'string',
                                'info' => '',
                                'required' => false,
                            ),
                    ),
            ),
            array (
                'name' => 'getSingleNotificationScheme',
                'vendorUrl' => '/rest/api/2/notificationscheme/{id}',
                'method' => 'GET',
                'description' => 'Returns a full representation of the notification scheme for the given id. This resource will return anotification scheme containing a list of events and recipient configured to receive notifications for these events. Consumershould allow events without recipients to appear in response. User accessingthe data is required to have permissions to administer at least one project associated with the requested notification scheme. Notification recipients can be:. . .',
                'args' => array (
                        'id' => array (
                                'required' => true,
                                'type' => 'String',
                                'info' => 'id',
                            ),
                        'expand' => array (
                                'type' => 'string',
                                'info' => '',
                                'required' => false,
                            ),
                    ),
            ),
            array (
                'name' => 'getPermissionSchemes',
                'vendorUrl' => '/rest/api/2/permissionscheme',
                'method' => 'GET',
                'description' => 'Returns a list of all permission schemes. By default only shortened beans are returned. If you want to include permissions of all the schemes,then specify the permissions expand parameter. Permissions will be included also if you specifyany other expand parameter. .',
                'args' => array (
                        'expand' => array (
                                'type' => 'string',
                                'info' => '',
                                'required' => false,
                            ),
                    ),
            ),
            array (
                'name' => 'createPermissionScheme',
                'vendorUrl' => '/rest/api/2/permissionscheme',
                'method' => 'POST',
                'description' => 'Create a new permission scheme.This method can create schemes with a defined permission set, or without.',
                'args' => array (
                        'expand' => array (
                                'type' => 'string',
                                'info' => '',
                                'required' => false,
                            ),
                        'name' => array (
                                'example' => '"Example permission scheme"',
                                'schema' => '{"type":"string"}',
                                'type' => 'String',
                                'info' => 'name',
                                'required' => false,
                            ),
                        'description' => array (
                                'example' => '"description"',
                                'schema' => '{"type":"string"}',
                                'type' => 'String',
                                'info' => 'description',
                                'required' => false,
                            ),
                        'permissions' => array (
                                'type' => 'JSON',
                                'example' => '[{"holder":{"type":"group","parameter":"jira-developers"},"permission":"ADMINISTER_PROJECTS"}]',
                                'schema' => '{"type":"array","items":{"title":"Permission Grant","type":"object","properties":{"holder":{"title":"Permission Holder","type":"object","properties":{"type":{"type":"string"},"parameter":{"type":"string"}},"additionalProperties":false},"permission":{"type":"string"}},"additionalProperties":false}}',
                                'info' => 'permissions',
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
                                'info' => 'schemeId',
                            ),
                        'expand' => array (
                                'type' => 'string',
                                'info' => '',
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
                                'info' => 'schemeId',
                            ),
                    ),
            ),
            array (
                'name' => 'updatePermissionScheme',
                'vendorUrl' => '/rest/api/2/permissionscheme/{schemeId}',
                'method' => 'PUT',
                'description' => 'Updates a permission scheme. If the permissions list is present then it will be set in the permission scheme, which basically means it will overwrite any permission grants thatexisted in the permission scheme. Sending an empty list will remove all permission grants from the permission scheme. To update just the name and description, do not send permissions list at all. To add or remove a single permission grant instead of updating the whole list at once use the {schemeId}/permission/ resource. .',
                'args' => array (
                        'schemeId' => array (
                                'required' => true,
                                'type' => 'String',
                                'info' => 'schemeId',
                            ),
                        'expand' => array (
                                'type' => 'string',
                                'info' => '',
                                'required' => false,
                            ),
                        'name' => array (
                                'example' => '"Example permission scheme"',
                                'schema' => '{"type":"string"}',
                                'type' => 'String',
                                'info' => 'name',
                                'required' => false,
                            ),
                        'description' => array (
                                'example' => '"description"',
                                'schema' => '{"type":"string"}',
                                'type' => 'String',
                                'info' => 'description',
                                'required' => false,
                            ),
                        'permissions' => array (
                                'type' => 'JSON',
                                'example' => '[{"holder":{"type":"group","parameter":"jira-developers"},"permission":"ADMINISTER_PROJECTS"}]',
                                'schema' => '{"type":"array","items":{"title":"Permission Grant","type":"object","properties":{"holder":{"title":"Permission Holder","type":"object","properties":{"type":{"type":"string"},"parameter":{"type":"string"}},"additionalProperties":false},"permission":{"type":"string"}},"additionalProperties":false}}',
                                'info' => 'permissions',
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
                                'info' => 'schemeId',
                            ),
                        'expand' => array (
                                'type' => 'string',
                                'info' => '',
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
                                'info' => 'schemeId',
                            ),
                        'expand' => array (
                                'type' => 'string',
                                'info' => '',
                                'required' => false,
                            ),
                        'holder' => array (
                                'type' => 'JSON',
                                'example' => '{"type":"group","parameter":"jira-developers"}',
                                'schema' => '{"title":"Permission Holder","type":"object","properties":{"type":{"type":"string"},"parameter":{"type":"string"}},"additionalProperties":false}',
                                'info' => 'holder',
                                'required' => false,
                            ),
                        'permission' => array (
                                'example' => '"ADMINISTER_PROJECTS"',
                                'schema' => '{"type":"string"}',
                                'type' => 'String',
                                'info' => 'permission',
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
                                'info' => 'schemeId',
                            ),
                        'permissionId' => array (
                                'required' => true,
                                'type' => 'String',
                                'info' => 'permissionId',
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
                                'info' => 'schemeId',
                            ),
                        'permissionId' => array (
                                'required' => true,
                                'type' => 'String',
                                'info' => 'permissionId',
                            ),
                        'expand' => array (
                                'type' => 'string',
                                'info' => '',
                                'required' => false,
                            ),
                    ),
            ),
            array (
                'name' => 'getPriorities',
                'vendorUrl' => '/rest/api/2/priority',
                'method' => 'GET',
                'description' => 'Returns a list of all issue priorities.',
                'args' => array (
                    ),
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
                                'info' => 'id',
                            ),
                    ),
            ),
            array (
                'name' => 'getAllProjects',
                'vendorUrl' => '/rest/api/2/project',
                'method' => 'GET',
                'description' => 'Returns all projects which are visible for the currently logged in user. If no user is logged in, it returns thelist of projects that are visible when using anonymous access.',
                'args' => array (
                        'expand' => array (
                                'type' => 'string',
                                'info' => 'the parameters to expand',
                                'required' => false,
                            ),
                        'recent' => array (
                                'type' => 'int',
                                'info' => 'if this parameter is set then only projects recently accessed by the current user (if not logged in then based on HTTP session) will be returned (maximum count limited to the specified number but no more than 20).',
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
                                'info' => 'key',
                                'required' => false,
                            ),
                        'name' => array (
                                'example' => '"Example"',
                                'schema' => '{"type":"string"}',
                                'type' => 'String',
                                'info' => 'name',
                                'required' => false,
                            ),
                        'projectTypeKey' => array (
                                'example' => '"business"',
                                'schema' => '{"type":"string"}',
                                'type' => 'String',
                                'info' => 'projectTypeKey',
                                'required' => false,
                            ),
                        'projectTemplateKey' => array (
                                'example' => '"com.atlassian.jira-core-project-templates:jira-core-project-management"',
                                'schema' => '{"type":"string"}',
                                'type' => 'String',
                                'info' => 'projectTemplateKey',
                                'required' => false,
                            ),
                        'description' => array (
                                'example' => '"Example Project description"',
                                'schema' => '{"type":"string"}',
                                'type' => 'String',
                                'info' => 'description',
                                'required' => false,
                            ),
                        'lead' => array (
                                'example' => '"Charlie"',
                                'schema' => '{"type":"string"}',
                                'type' => 'String',
                                'info' => 'lead',
                                'required' => false,
                            ),
                        'url' => array (
                                'example' => '"http:\\/\\/atlassian.com"',
                                'schema' => '{"type":"string"}',
                                'type' => 'String',
                                'info' => 'url',
                                'required' => false,
                            ),
                        'assigneeType' => array (
                                'example' => '"PROJECT_LEAD"',
                                'schema' => '{"type":"string","enum":["PROJECT_LEAD","UNASSIGNED"]}',
                                'type' => 'String',
                                'info' => 'assigneeType',
                                'required' => false,
                            ),
                        'avatarId' => array (
                                'example' => '10200',
                                'schema' => '{"type":"integer"}',
                                'type' => 'String',
                                'info' => 'avatarId',
                                'required' => false,
                            ),
                        'issueSecurityScheme' => array (
                                'example' => '10001',
                                'schema' => '{"type":"integer"}',
                                'type' => 'String',
                                'info' => 'issueSecurityScheme',
                                'required' => false,
                            ),
                        'permissionScheme' => array (
                                'example' => '10011',
                                'schema' => '{"type":"integer"}',
                                'type' => 'String',
                                'info' => 'permissionScheme',
                                'required' => false,
                            ),
                        'notificationScheme' => array (
                                'example' => '10021',
                                'schema' => '{"type":"integer"}',
                                'type' => 'String',
                                'info' => 'notificationScheme',
                                'required' => false,
                            ),
                        'categoryId' => array (
                                'example' => '10120',
                                'schema' => '{"type":"integer"}',
                                'type' => 'String',
                                'info' => 'categoryId',
                                'required' => false,
                            ),
                    ),
            ),
            array (
                'name' => 'updateProject',
                'vendorUrl' => '/rest/api/2/project/{projectIdOrKey}',
                'method' => 'PUT',
                'description' => 'Updates a project. Only non null values sent in JSON will be updated in the project. Values available for the assigneeType field are: "PROJECT_LEAD" and "UNASSIGNED". .',
                'args' => array (
                        'projectIdOrKey' => array (
                                'required' => true,
                                'type' => 'String',
                                'info' => 'projectIdOrKey',
                            ),
                        'expand' => array (
                                'type' => 'string',
                                'info' => 'the parameters to expand in returned project',
                                'required' => false,
                            ),
                        'key' => array (
                                'example' => '"EX"',
                                'schema' => '{"type":"string"}',
                                'type' => 'String',
                                'info' => 'key',
                                'required' => false,
                            ),
                        'name' => array (
                                'example' => '"Example"',
                                'schema' => '{"type":"string"}',
                                'type' => 'String',
                                'info' => 'name',
                                'required' => false,
                            ),
                        'projectTypeKey' => array (
                                'example' => '"business"',
                                'schema' => '{"type":"string"}',
                                'type' => 'String',
                                'info' => 'projectTypeKey',
                                'required' => false,
                            ),
                        'projectTemplateKey' => array (
                                'example' => '"com.atlassian.jira-core-project-templates:jira-core-project-management"',
                                'schema' => '{"type":"string"}',
                                'type' => 'String',
                                'info' => 'projectTemplateKey',
                                'required' => false,
                            ),
                        'description' => array (
                                'example' => '"Example Project description"',
                                'schema' => '{"type":"string"}',
                                'type' => 'String',
                                'info' => 'description',
                                'required' => false,
                            ),
                        'lead' => array (
                                'example' => '"Charlie"',
                                'schema' => '{"type":"string"}',
                                'type' => 'String',
                                'info' => 'lead',
                                'required' => false,
                            ),
                        'url' => array (
                                'example' => '"http:\\/\\/atlassian.com"',
                                'schema' => '{"type":"string"}',
                                'type' => 'String',
                                'info' => 'url',
                                'required' => false,
                            ),
                        'assigneeType' => array (
                                'example' => '"PROJECT_LEAD"',
                                'schema' => '{"type":"string","enum":["PROJECT_LEAD","UNASSIGNED"]}',
                                'type' => 'String',
                                'info' => 'assigneeType',
                                'required' => false,
                            ),
                        'avatarId' => array (
                                'example' => '10200',
                                'schema' => '{"type":"integer"}',
                                'type' => 'String',
                                'info' => 'avatarId',
                                'required' => false,
                            ),
                        'issueSecurityScheme' => array (
                                'example' => '10001',
                                'schema' => '{"type":"integer"}',
                                'type' => 'String',
                                'info' => 'issueSecurityScheme',
                                'required' => false,
                            ),
                        'permissionScheme' => array (
                                'example' => '10011',
                                'schema' => '{"type":"integer"}',
                                'type' => 'String',
                                'info' => 'permissionScheme',
                                'required' => false,
                            ),
                        'notificationScheme' => array (
                                'example' => '10021',
                                'schema' => '{"type":"integer"}',
                                'type' => 'String',
                                'info' => 'notificationScheme',
                                'required' => false,
                            ),
                        'categoryId' => array (
                                'example' => '10120',
                                'schema' => '{"type":"integer"}',
                                'type' => 'String',
                                'info' => 'categoryId',
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
                                'info' => 'projectIdOrKey',
                            ),
                    ),
            ),
            array (
                'name' => 'getSingleProject',
                'vendorUrl' => '/rest/api/2/project/{projectIdOrKey}',
                'method' => 'GET',
                'description' => 'Contains a full representation of a project in JSON format. All project keys associated with the project will only be returned if expand=projectKeys. .',
                'args' => array (
                        'projectIdOrKey' => array (
                                'required' => true,
                                'type' => 'String',
                                'info' => 'projectIdOrKey',
                            ),
                        'expand' => array (
                                'type' => 'string',
                                'info' => 'the parameters to expand',
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
                                'info' => 'projectIdOrKey',
                            ),
                        'id' => array (
                                'schema' => '{"type":"string"}',
                                'type' => 'String',
                                'info' => 'id',
                                'required' => false,
                            ),
                        'owner' => array (
                                'schema' => '{"type":"string"}',
                                'type' => 'String',
                                'info' => 'owner',
                                'required' => false,
                            ),
                        'isSystemAvatar' => array (
                                'schema' => '{"type":"boolean"}',
                                'type' => 'String',
                                'info' => 'isSystemAvatar',
                                'required' => false,
                            ),
                        'isSelected' => array (
                                'schema' => '{"type":"boolean"}',
                                'type' => 'String',
                                'info' => 'isSelected',
                                'required' => false,
                            ),
                        'isDeletable' => array (
                                'schema' => '{"type":"boolean"}',
                                'type' => 'String',
                                'info' => 'isDeletable',
                                'required' => false,
                            ),
                        'urls' => array (
                                'schema' => '{"type":"object","patternProperties":{"\\\\d\\\\dx\\\\d\\\\d":{"type":"string","format":"uri"}},"additionalProperties":false}',
                                'type' => 'String',
                                'info' => 'urls',
                                'required' => false,
                            ),
                        'selected' => array (
                                'schema' => '{"type":"boolean"}',
                                'type' => 'String',
                                'info' => 'selected',
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
                                'info' => 'projectIdOrKey',
                            ),
                        'id' => array (
                                'required' => true,
                                'type' => 'String',
                                'info' => 'id',
                            ),
                    ),
            ),
            array (
                'name' => 'createProjectAvatar',
                'vendorUrl' => '/rest/api/2/project/{projectIdOrKey}/avatar2',
                'method' => 'POST',
                'description' => 'Creates an avatar for a project, for a given project Id or project key. The uploaded image will be cropped accordingto the crop parameters listed below. If no crop parameters are specified, the image will be cropped to a square.The square will originate at the top left of the image and the length of each side will be set to the smaller ofthe height or width of the image.',
                'args' => array (
                        'projectIdOrKey' => array (
                                'required' => true,
                                'type' => 'String',
                                'info' => 'projectIdOrKey',
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
                                'info' => '(optional) The length of each side of the crop region. The crop region can only be a square.If omitted and the top-left corner is at (0,0), this defaults to either the height orwidth of the image, whichever is smaller.',
                                'required' => false,
                            ),
                    ),
            ),
            array (
                'name' => 'getAllProjectAvatars',
                'vendorUrl' => '/rest/api/2/project/{projectIdOrKey}/avatars',
                'method' => 'GET',
                'description' => 'Returns all avatars which are visible for the currently logged in user.  The avatars are grouped intosystem and custom.',
                'args' => array (
                        'projectIdOrKey' => array (
                                'required' => true,
                                'type' => 'String',
                                'info' => 'projectIdOrKey',
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
                                'info' => 'projectIdOrKey',
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
                                'info' => 'projectIdOrKey',
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
                                'info' => 'projectIdOrKey',
                            ),
                        'newProjectTypeKey' => array (
                                'required' => true,
                                'type' => 'String',
                                'info' => 'newProjectTypeKey',
                            ),
                    ),
            ),
            array (
                'name' => 'getProjectVersionsPaginated',
                'vendorUrl' => '/rest/api/2/project/{projectIdOrKey}/version',
                'method' => 'GET',
                'description' => 'Returns all versions for the specified project. Results are paginated. Results can be ordered by the following fields:. . .',
                'args' => array (
                        'projectIdOrKey' => array (
                                'required' => true,
                                'type' => 'String',
                                'info' => 'projectIdOrKey',
                            ),
                        'startAt' => array (
                                'type' => 'long',
                                'info' => 'the page offset, if not specified then defaults to 0',
                                'required' => false,
                            ),
                        'maxResults' => array (
                                'type' => 'int',
                                'info' => 'how many results on the page should be included. Defaults to 50.',
                                'required' => false,
                            ),
                        'orderBy' => array (
                                'type' => 'string',
                                'info' => 'ordering of the results.',
                                'required' => false,
                            ),
                        'expand' => array (
                                'type' => 'string',
                                'info' => 'the parameters to expand',
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
                                'info' => 'projectIdOrKey',
                            ),
                    ),
            ),
            array (
                'name' => 'deleteProjectProperty',
                'vendorUrl' => '/rest/api/2/project/{projectIdOrKey}/properties/{propertyKey}',
                'method' => 'DELETE',
                'description' => 'Removes the property from the project identified by the key or by the id. Ths user removing the property is requiredto have permissions to administer the project.',
                'args' => array (
                        'projectIdOrKey' => array (
                                'required' => true,
                                'type' => 'String',
                                'info' => 'projectIdOrKey',
                            ),
                        'propertyKey' => array (
                                'required' => true,
                                'type' => 'String',
                                'info' => 'propertyKey',
                            ),
                    ),
            ),
            array (
                'name' => 'setProjectProperty',
                'vendorUrl' => '/rest/api/2/project/{projectIdOrKey}/properties/{propertyKey}',
                'method' => 'PUT',
                'description' => 'Sets the value of the specified project\'s property. You can use this resource to store a custom data against the project identified by the key or by the id. The userwho stores the data is required to have permissions to administer the project. .',
                'args' => array (
                        'projectIdOrKey' => array (
                                'required' => true,
                                'type' => 'String',
                                'info' => 'projectIdOrKey',
                            ),
                        'propertyKey' => array (
                                'required' => true,
                                'type' => 'String',
                                'info' => 'propertyKey',
                            ),
                    ),
            ),
            array (
                'name' => 'getProjectProperty',
                'vendorUrl' => '/rest/api/2/project/{projectIdOrKey}/properties/{propertyKey}',
                'method' => 'GET',
                'description' => 'Returns the value of the property with a given key from the project identified by the key or by the id. The user who retrievesthe property is required to have permissions to read the project.',
                'args' => array (
                        'projectIdOrKey' => array (
                                'required' => true,
                                'type' => 'String',
                                'info' => 'projectIdOrKey',
                            ),
                        'propertyKey' => array (
                                'required' => true,
                                'type' => 'String',
                                'info' => 'propertyKey',
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
                                'info' => 'projectIdOrKey',
                            ),
                    ),
            ),
            array (
                'name' => 'getProjectSingleRole',
                'vendorUrl' => '/rest/api/2/project/{projectIdOrKey}/role/{id}',
                'method' => 'GET',
                'description' => 'Returns the details for a given project role in a project together with project role actors. The project role actor can be either a user or a group.Note that the name of a user actor is the user key. If you would like to check if a user belongs to the role you need to get all groups to which the user belongsusing /rest/user?userkey={userkey}&expand=groups resource and check if there is a user actor withthe name same as the user key or if there is a group actor with the name as one of the group to which the user belongs.',
                'args' => array (
                        'projectIdOrKey' => array (
                                'required' => true,
                                'type' => 'String',
                                'info' => 'projectIdOrKey',
                            ),
                        'id' => array (
                                'required' => true,
                                'type' => 'String',
                                'info' => 'id',
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
                                'info' => 'projectIdOrKey',
                            ),
                        'id' => array (
                                'required' => true,
                                'example' => '10360',
                                'schema' => '{"type":"integer"}',
                                'type' => 'String',
                                'info' => 'id',
                            ),
                        'categorisedActors' => array (
                                'type' => 'JSON',
                                'example' => '{"atlassian-user-role-actor":["admin"],"atlassian-group-role-actor":["jira-developers"]}',
                                'schema' => '{"type":"object","patternProperties":{".+":{"type":"array","items":{"type":"string"}}},"additionalProperties":false}',
                                'info' => 'categorisedActors',
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
                                'info' => 'projectIdOrKey',
                            ),
                        'id' => array (
                                'required' => true,
                                'type' => 'String',
                                'info' => 'id',
                            ),
                        'categorisedActors' => array (
                                'schema' => '{"type":"object","patternProperties":{".+":{"type":"array","items":{"type":"string"}}},"additionalProperties":false}',
                                'type' => 'String',
                                'info' => 'categorisedActors',
                                'required' => false,
                            ),
                    ),
            ),
            array (
                'name' => 'deleteActorFromProjectRole',
                'vendorUrl' => '/rest/api/2/project/{projectIdOrKey}/role/{id}',
                'method' => 'DELETE',
                'description' => 'Deletes actors (users or groups) from a project role. . .',
                'args' => array (
                        'projectIdOrKey' => array (
                                'required' => true,
                                'type' => 'String',
                                'info' => 'projectIdOrKey',
                            ),
                        'id' => array (
                                'required' => true,
                                'type' => 'String',
                                'info' => 'id',
                            ),
                        'user' => array (
                                'type' => 'string',
                                'info' => 'the username to remove from the project role',
                                'required' => false,
                            ),
                        'group' => array (
                                'type' => 'string',
                                'info' => 'the groupname to remove from the project role',
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
                                'info' => 'projectKeyOrId',
                            ),
                    ),
            ),
            array (
                'name' => 'getNotificationScheme',
                'vendorUrl' => '/rest/api/2/project/{projectKeyOrId}/notificationscheme',
                'method' => 'GET',
                'description' => 'Gets a notification scheme associated with the project.Follow the documentation of /notificationscheme/{id} resource for all details about returned value.',
                'args' => array (
                        'projectKeyOrId' => array (
                                'required' => true,
                                'type' => 'String',
                                'info' => 'projectKeyOrId',
                            ),
                        'expand' => array (
                                'type' => 'string',
                                'info' => '',
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
                                'info' => 'projectKeyOrId',
                            ),
                        'expand' => array (
                                'type' => 'string',
                                'info' => '',
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
                                'info' => 'projectKeyOrId',
                            ),
                        'expand' => array (
                                'type' => 'string',
                                'info' => '',
                                'required' => false,
                            ),
                        'id' => array (
                                'example' => '10000',
                                'schema' => '{"type":"integer"}',
                                'type' => 'String',
                                'info' => 'id',
                                'required' => false,
                            ),
                    ),
            ),
            array (
                'name' => 'getSecurityLevelsForProject',
                'vendorUrl' => '/rest/api/2/project/{projectKeyOrId}/securitylevel',
                'method' => 'GET',
                'description' => 'Returns all security levels for the project that the current logged in user has access to.If the user does not have the Set Issue Security permission, the list will be empty.',
                'args' => array (
                        'projectKeyOrId' => array (
                                'required' => true,
                                'type' => 'String',
                                'info' => 'projectKeyOrId',
                            ),
                    ),
            ),
            array (
                'name' => 'getAllProjectTypes',
                'vendorUrl' => '/rest/api/2/project/type',
                'method' => 'GET',
                'description' => 'Returns all the project types defined on the JIRA instance, not taking into account whetherthe license to use those project types is valid or not.',
                'args' => array (
                    ),
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
                                'info' => 'projectTypeKey',
                            ),
                    ),
            ),
            array (
                'name' => 'getAccessibleProjectTypeByKey',
                'vendorUrl' => '/rest/api/2/project/type/{projectTypeKey}/accessible',
                'method' => 'GET',
                'description' => 'Returns the project type with the given key, if it is accessible to the logged in user.This takes into account whether the user is licensed on the Application that defines the project type.',
                'args' => array (
                        'projectTypeKey' => array (
                                'required' => true,
                                'type' => 'String',
                                'info' => 'projectTypeKey',
                            ),
                    ),
            ),
            array (
                'name' => 'getAllProjectCategories',
                'vendorUrl' => '/rest/api/2/projectCategory',
                'method' => 'GET',
                'description' => 'Returns all project categories.',
                'args' => array (
                    ),
            ),
            array (
                'name' => 'createProjectCategory',
                'vendorUrl' => '/rest/api/2/projectCategory',
                'method' => 'POST',
                'description' => 'Create a project category via POST.',
                'args' => array (
                        'name' => array (
                                'example' => '"CREATED"',
                                'schema' => '{"type":"string"}',
                                'type' => 'String',
                                'info' => 'name',
                                'required' => false,
                            ),
                        'description' => array (
                                'example' => '"Created Project Category"',
                                'schema' => '{"type":"string"}',
                                'type' => 'String',
                                'info' => 'description',
                                'required' => false,
                            ),
                        'id' => array (
                                'schema' => '{"type":"string"}',
                                'type' => 'String',
                                'info' => 'id',
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
                                'info' => 'id',
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
                                'info' => 'id',
                            ),
                    ),
            ),
            array (
                'name' => 'updateProjectCategory',
                'vendorUrl' => '/rest/api/2/projectCategory/{id}',
                'method' => 'PUT',
                'description' => 'Modify a project category via PUT. Any fields present in the PUT will override existing values. As a convenience, if a fieldis not present, it is silently ignored.',
                'args' => array (
                        'id' => array (
                                'required' => true,
                                'schema' => '{"type":"string"}',
                                'type' => 'String',
                                'info' => 'id',
                            ),
                        'name' => array (
                                'example' => '"UPDATED"',
                                'schema' => '{"type":"string"}',
                                'type' => 'String',
                                'info' => 'name',
                                'required' => false,
                            ),
                        'description' => array (
                                'example' => '"Updated Project Category"',
                                'schema' => '{"type":"string"}',
                                'type' => 'String',
                                'info' => 'description',
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
                                'info' => 'the project key',
                                'required' => false,
                            ),
                    ),
            ),
            array (
                'name' => 'getResolutions',
                'vendorUrl' => '/rest/api/2/resolution',
                'method' => 'GET',
                'description' => 'Returns a list of all resolutions.',
                'args' => array (
                    ),
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
                                'info' => 'id',
                            ),
                    ),
            ),
            array (
                'name' => 'getProjectRoles',
                'vendorUrl' => '/rest/api/2/role',
                'method' => 'GET',
                'description' => 'Get all the ProjectRoles available in JIRA. Currently this list is global.',
                'args' => array (
                    ),
            ),
            array (
                'name' => 'createProjectRole',
                'vendorUrl' => '/rest/api/2/role',
                'method' => 'POST',
                'description' => 'Creates a new ProjectRole to be available in JIRA.The created role does not have any default actors assigned.',
                'args' => array (
                        'name' => array (
                                'example' => '"MyRole"',
                                'schema' => '{"type":"string"}',
                                'type' => 'String',
                                'info' => 'name',
                                'required' => false,
                            ),
                        'description' => array (
                                'example' => '"role description"',
                                'schema' => '{"type":"string"}',
                                'type' => 'String',
                                'info' => 'description',
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
                                'info' => 'id',
                            ),
                    ),
            ),
            array (
                'name' => 'updateProjectRole',
                'vendorUrl' => '/rest/api/2/role/{id}',
                'method' => 'PUT',
                'description' => 'Fully updates a roles. Both name and description must be given.',
                'args' => array (
                        'id' => array (
                                'required' => true,
                                'type' => 'String',
                                'info' => 'id',
                            ),
                        'name' => array (
                                'example' => '"MyRole"',
                                'schema' => '{"type":"string"}',
                                'type' => 'String',
                                'info' => 'name',
                                'required' => false,
                            ),
                        'description' => array (
                                'example' => '"role description"',
                                'schema' => '{"type":"string"}',
                                'type' => 'String',
                                'info' => 'description',
                                'required' => false,
                            ),
                    ),
            ),
            array (
                'name' => 'deleteProjectRole',
                'vendorUrl' => '/rest/api/2/role/{id}',
                'method' => 'DELETE',
                'description' => 'Deletes a role. May return 403 in the future.',
                'args' => array (
                        'id' => array (
                                'required' => true,
                                'type' => 'String',
                                'info' => 'id',
                            ),
                        'swap' => array (
                                'type' => 'long',
                                'info' => 'if given, removes a role even if it is used in scheme by replacing the role with the given one',
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
                                'info' => 'id',
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
                                'info' => 'id',
                            ),
                        'user' => array (
                                'type' => 'JSON',
                                'example' => '["admin"]',
                                'schema' => '{"type":"array","items":{"type":"string"}}',
                                'info' => 'user',
                                'required' => false,
                            ),
                        'group' => array (
                                'schema' => '{"type":"array","items":{"type":"string"}}',
                                'type' => 'String',
                                'info' => 'group',
                                'required' => false,
                            ),
                    ),
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
                                'info' => 'id',
                            ),
                        'user' => array (
                                'type' => 'string',
                                'info' => 'if given, removes an actor from given role',
                                'required' => false,
                            ),
                        'group' => array (
                                'type' => 'string',
                                'info' => 'if given, removes an actor from given role',
                                'required' => false,
                            ),
                    ),
            ),
    )
);
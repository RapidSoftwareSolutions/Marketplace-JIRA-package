[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/JIRA/functions?utm_source=RapidAPIGitHub_JIRAFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# JIRA Package
Jira is used for issue tracking and project management by over 25,000 customers in 122 countries around the globe.
* Domain: jira.atlassian.com
* Credentials: jiraUsername, jiraPassword

## How to get credentials: 


## JIRA.getMyPermissions
Returns all permissions in the system and whether the currently logged in user has them.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| projectKey  | String     | Key of project to scope returned permissions for.
| projectId   | String     | Id of project to scope returned permissions for.
| issueKey    | String     | Key of the issue to scope returned permissions for.
| issueId     | String     | Id of the issue to scope returned permissions for.

## JIRA.getAllPermissions
Returns all permissions that are present in the JIRA instance - Global, Project and the global ones added by plugins.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.

## JIRA.getProperty
Returns an application property.

| Field          | Type       | Description
|----------------|------------|----------
| jiraUsername   | credentials| Username in JIRA.
| jiraPassword   | credentials| Password in JIRA.
| jiraName       | String     | Name of JIRA.
| key            | String     | A String containing the property key. Example "jira.home".
| permissionLevel| String     | When fetching a list specifies the permission level of all items in the list.
| keyFilter      | String     | When fetching a list allows the list to be filtered by the property's start of key e.g.

## JIRA.setProperty
Modify an application property via PUT.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| propertiesId| String     | Application property identifier.
| value       | String     | If present in the PUT will override the existing value.

## JIRA.getAdvancedSettings
Returns the properties that are displayed on the "General Configuration > Advanced Settings" page.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.

## JIRA.getApplicationRoles
Returns all ApplicationRoles in the system. Will also return an ETag header containing a version hash of thecollection of ApplicationRoles.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.

## JIRA.getSingleApplicationRole
Returns the ApplicationRole with passed key if it exists.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| roleKey     | String     | ApplicationRole key.

## JIRA.getSingleAttachment
Returns the meta-data for an attachment, including the URI of the actual attached file.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| attachmentId| String     | Attachment identifier.

## JIRA.removeSingleAttachment
Remove an attachment from an issue.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| attachmentId| String     | Attachment identifier.

## JIRA.getAuditingRecords
Returns auditing records filtered using provided parameters.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| filter      | String     | Text query, each record that will be returned must contain the provided text in one of its fields.
| offset      | Number     | The number of record from which search starts.
| limit       | Number     | Maximum number of returned results (if is limit is <= 0 or > 1000, it will be set do default value: 1000).
| from        | String     | Timestamp in past. 'from' must be less or equal 'to'
| to          | String     | Timestamp in past; 'from' must be less or equal 'to'.

#### Example of 'changedValues' field
```json
[{
	"fieldName": "email",
	"changedFrom": "user@atlassian.com",
	"changedTo": "newuser@atlassian.com"
}]
```

#### Example of 'associatedItems' field
```json
[{
	"id": "jira-software-users",
	"name": "jira-software-users",
	"typeName": "GROUP",
	"parentId": "1",
	"parentName": "JIRA Internal Directory"
}]
```

## JIRA.getAllSystemAvatars
Returns all system avatars of the given type.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| avatarType  | String     | System avatar type. Example project, user, issuetype.

## JIRA.getCommentPropertiesKeys
Returns the keys of all properties for the comment identified by the key or by the id.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| commentId   | String     | Comment identified.

## JIRA.deleteCommentProperty
Removes the property from the comment identified by the key or by the id. Ths user removing the property is requiredto have permissions to administer the comment.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| commentId   | String     | Comment identified.
| propertyKey | String     | Property key.

## JIRA.setCommentProperty
Sets the value of the specified comment's property.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| commentId   | String     | Comment identified.
| propertyKey | String     | Property key.

## JIRA.getCommentProperty
Returns the value of the property with a given key from the comment identified by the key or by the id.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| commentId   | String     | Comment identified.
| propertyKey | String     | Property key.

## JIRA.createComponent
Create a component.

| Field              | Type       | Description
|--------------------|------------|----------
| jiraUsername       | credentials| Username in JIRA.
| jiraPassword       | credentials| Password in JIRA.
| jiraName           | String     | Name of JIRA.
| name               | String     | Component name.
| description        | String     | Component description.
| leadUserName       | String     | Component lead user name.
| assigneeType       | String     | Component assignee type. One of "PROJECT_DEFAULT","COMPONENT_LEAD","PROJECT_LEAD","UNASSIGNED".
| isAssigneeTypeValid| Boolean    | Component is assignee type valid.
| project            | String     | Project key.
| projectId          | Number     | Project identifier.
| lead               | String     | Component lead.
| assignee           | String     | Component assignee.
| realAssigneeType   | String     | Real assignee type. One of "PROJECT_DEFAULT","COMPONENT_LEAD","PROJECT_LEAD","UNASSIGNED"
| realAssignee       | String     | Component real assignee.

## JIRA.updateComponent
Modify a component.

| Field              | Type       | Description
|--------------------|------------|----------
| jiraUsername       | credentials| Username in JIRA.
| jiraPassword       | credentials| Password in JIRA.
| jiraName           | String     | Name of JIRA.
| componentId        | String     | Component identifier.
| name               | String     | Component name.
| description        | String     | Component description.
| leadUserName       | String     | Component lead user name.
| assigneeType       | String     | Assignee type. One of "PROJECT_DEFAULT","COMPONENT_LEAD","PROJECT_LEAD","UNASSIGNED".
| isAssigneeTypeValid| Boolean    | Is assignee type valid.
| project            | String     | Component project.
| projectId          | Number     | Component project identifier.
| lead               | String     | Component lead.
| assignee           | String     | Component assignee.
| realAssigneeType   | String     | Real assignee type. One of "PROJECT_DEFAULT","COMPONENT_LEAD","PROJECT_LEAD","UNASSIGNED".
| realAssignee       | String     | Real assignee.

## JIRA.getComponent
Returns a project component.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| componentId | String     | Component identifier.

## JIRA.deleteComponent
Delete a project component.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| componentId | String     | Component identifier.
| moveIssuesTo| String     | The new component applied to issues whose 'id' component will be deleted. If this value is null, then the 'id' component is simply removed from the related isues.

## JIRA.getComponentIssuesCounts
Returns counts of issues related to this component.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| componentId | String     | Component identifier.

## JIRA.getConfiguration
Returns the information if the optional features in JIRA are enabled or disabled.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.

## JIRA.getSelectedTimeTracking
Returns the currently selected time-tracking implementation.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.

## JIRA.selectTimeTracking
Selects a time tracking implementation.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| key         | String     | Implementation key.
| name        | String     | Implementation name.
| url         | String     | Implementation Url.

## JIRA.disableTimeTracking
Disables time tracking.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.

## JIRA.getTimeTrackingList
Retrieve the list of available time tracking implementations.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.

## JIRA.getTimeTrackingConfiguration
Returns the configuration options for time tracking.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.

## JIRA.setTimeTrackingConfiguration
Sets the options for time tracking.

| Field             | Type       | Description
|-------------------|------------|----------
| jiraUsername      | credentials| Username in JIRA.
| jiraPassword      | credentials| Password in JIRA.
| jiraName          | String     | Name of JIRA.
| workingHoursPerDay| Number     | Working hours per day.
| workingDaysPerWeek| Number     | Working days per week.
| timeFormat        | String     | Time format. One of "pretty","days","hours".
| defaultUnit       | String     | Default unit. One of "minute","hour","day","week".

## JIRA.getSingleCustomFieldOption
Returns a full representation of the Custom Field Option that has the given id.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| optionId    | String     | Option identifier.

## JIRA.getDashboards
Returns a list of all dashboards, optionally filtering them.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| filter      | String     | An optional filter that is applied to the list of dashboards. Example "favourite", "my".
| startAt     | Number     | The index of the first dashboard to return (0-based). must be 0 or a multiple ofmaxResults.
| maxResults  | Number     | A hint as to the the maximum number of dashboards to return in each call.

## JIRA.getSingleDashboard
Returns a single dashboard.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| dashboardId | String     | Dashboard identifier.

## JIRA.getDashboardPropertiesKeys
Returns the keys of all properties for the dashboard item identified by the id.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| dashboardId | String     | Dashboard identifier.
| itemId      | String     | Item identifier.

## JIRA.deleteDashboardProperty
Removes the property from the dashboard item identified by the key or by the id.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| dashboardId | String     | Dashboard identifier.
| itemId      | String     | Item identifier.
| propertyKey | String     | Property key.

## JIRA.setDashboardProperty
Sets the value of the specified dashboard item's property.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| dashboardId | String     | Dashboard identifier.
| itemId      | String     | Item identifier.
| propertyKey | String     | Property key.

## JIRA.getDashboardProperty
Returns the value of the property with a given key from the dashboard item identified by the id.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| dashboardId | String     | Dashboard identifier.
| itemId      | String     | Item identifier.
| propertyKey | String     | Property key.

## JIRA.createCustomField
Creates a custom field using a definition.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| name        | String     | Custom field name.
| description | String     | Custom field description.
| type        | String     | Custom field type.
| searcherKey | String     | Custom field searcher key.

## JIRA.getFields
Returns a list of all fields, both System and Custom.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.

## JIRA.createSelectFieldOption
Creates an option for a select list issue field, for a given field key.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| fieldKey    | String     | Field key.
| value       | String     | Option value.

## JIRA.getSelectFieldOptions
Returns all options defined for a select list issue field, for a given field key.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| fieldKey    | String     | Field key.
| startAt     | Number     | The starting index of the returned objects. Base index: 0.
| maxResults  | Number     | The maximum number of items to return per page. Default: 50.

## JIRA.updateSelectFieldOptions
Updates an option for a select list issue field, for a given field key and option Id.

| Field                | Type       | Description
|----------------------|------------|----------
| jiraUsername         | credentials| Username in JIRA.
| jiraPassword         | credentials| Password in JIRA.
| jiraName             | String     | Name of JIRA.
| fieldKey             | String     | Field key.
| optionId             | String     | Option identifier.
| id                   | Number     | Identifier.
| value                | String     | Option value.
| propertiesLeaderName | String     | Options leader name.
| propertiesLeaderEmail| String     | Options leader email.
| propertiesMembers    | String     | Options members.
| propertiesDescription| String     | Options description.
| configScopeProjects  | String     | Comma separated options config scope projects identifier.
| configAttributes     | Array      | Array of Strings, options config attributes.

## JIRA.getSelectFieldSingleOption
Returns an option for a select list issue field, for a given field key and option Id.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| fieldKey    | String     | Field key.
| optionId    | String     | Option identifier.

## JIRA.deleteSelectFieldSingleOption
Deletes an option from a select list issue field, for a given field key and option Id.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| fieldKey    | String     | Field key.
| optionId    | String     | Option identifier.

## JIRA.getAvailableSelectFieldOptions
Returns the options defined for a select list issue field that are available to the currently logged-in user and can be assigned to an issue, for a given field key.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| fieldKey    | String     | Field key.
| startAt     | Number     | The starting index of the returned objects. Base index: 0.
| maxResults  | Number     | The maximum number of items to return per page. Default: 50.
| projectId   | Number     | Only options available for this project will be returned.

## JIRA.searchSelectFieldOptions
Returns the options defined for a select list issue field that are available to the currently logged-in user, for a given field key. The list of options will be paginated.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| fieldKey    | String     | Field key.
| startAt     | Number     | The starting index of the returned objects. Base index: 0.
| maxResults  | Number     | The maximum number of items to return per page. Default: 50.
| projectId   | Number     | Only options available for this project will be returned.

## JIRA.createFilter
Creates a new filter, and returns newly created filter.

| Field           | Type       | Description
|-----------------|------------|----------
| jiraUsername    | credentials| Username in JIRA.
| jiraPassword    | credentials| Password in JIRA.
| jiraName        | String     | Name of JIRA.
| name            | String     | New filter name.
| description     | String     | New filter description.
| jql             | String     | New filter Jql string.
| expand          | String     | The parameters to expand.
| favourite       | Boolean    | New filter is favourite.
| owner           | String     | Owner.
| viewUrl         | String     | View Url.
| searchUrl       | String     | Search Url.
| sharePermissions| Array      | Array of JSON objects, filter Permission.
| sharedUsers     | JSON       | JSON Object, user Bean List Wrapper.
| subscriptions   | JSON       | JSON Object, filter Subscription Bean List Wrapper.

## JIRA.updateFilter
Updates an existing filter, and returns its new value.

| Field           | Type       | Description
|-----------------|------------|----------
| jiraUsername    | credentials| Username in JIRA.
| jiraPassword    | credentials| Password in JIRA.
| jiraName        | String     | Name of JIRA.
| filterId        | String     | Filter identifier.
| name            | String     | New filter name.
| description     | String     | New filter description.
| jql             | String     | New filter Jql string.
| expand          | String     | The parameters to expand.
| favourite       | Boolean    | New filter is favourite.
| owner           | String     | Owner.
| viewUrl         | String     | View Url.
| searchUrl       | String     | Search Url.
| sharePermissions| Array      | Array of JSON objects, filter Permission.
| sharedUsers     | JSON       | JSON Object, user Bean List Wrapper.
| subscriptions   | JSON       | JSON Object, filter Subscription Bean List Wrapper.

## JIRA.deleteFilter
Delete a filter.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| filterId    | String     | Filter identifier.

## JIRA.getFilter
Returns a filter given an id.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| filterId    | String     | Filter identifier.
| expand      | String     | The parameters to expand.

## JIRA.getFilterDefaultColumns
Returns the default columns for the given filter.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| filterId    | String     | Filter identifier.

## JIRA.setFilterDefaultColumns
Sets the default columns for the given filter.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| filterId    | String     | Filter identifier.

## JIRA.resetFilterDefaultColumns
Resets the columns for the given filter such that the filter no longer has its own column config.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| filterId    | String     | Filter identifier.

## JIRA.getFilterSharePermissions
Returns all share permissions of the given filter.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| filterId    | String     | Filter identifier.

## JIRA.addFilterSharePermissions
Adds a share permissions to the given filter. Adding a global permission removes all previous permissions from the filter.

| Field        | Type       | Description
|--------------|------------|----------
| jiraUsername | credentials| Username in JIRA.
| jiraPassword | credentials| Password in JIRA.
| jiraName     | String     | Name of JIRA.
| filterId     | String     | Filter identifier.
| type         | String     | Filter type.
| groupname    | String     | Filter groupname.
| projectId    | String     | Filter project identifier.
| projectRoleId| String     | Filter project role identifier.

## JIRA.getFilterSingleSharePermission
Returns a single share permission of the given filter.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| filterId    | String     | Filter identifier.
| permissionId| String     | Permission identifier.

## JIRA.deleteFilterSingleSharePermission
Removes a share permissions from the given filter.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| filterId    | String     | Filter identifier.
| permissionId| String     | Permission identifier.

## JIRA.getDefaultShareScope
Returns the default share scope of the logged-in user.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.

## JIRA.setDefaultShareScope
Sets the default share scope of the logged-in user.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| scope       | String     | Share scope. One of "GLOBAL","AUTHENTICATED","PRIVATE".

## JIRA.getFavouriteFilters
Returns the favourite filters of the logged-in user.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| expand      | String     | The parameters to expand.

## JIRA.getMyFilters
Returns the owned filters of the logged-in user.

| Field            | Type       | Description
|------------------|------------|----------
| jiraUsername     | credentials| Username in JIRA.
| jiraPassword     | credentials| Password in JIRA.
| jiraName         | String     | Name of JIRA.
| expand           | String     | The parameters to expand.
| includeFavourites| Boolean    | Include favourites.

## JIRA.createGroup
Creates a group by given group parameter.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| name        | String     | Group name.

## JIRA.deleteGroup
Deletes a group by given group parameter.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| groupname   | String     | The name of the group to delete.
| swapGroup   | String     | Specify a different group to transfer the restrictions comments and worklogs to.

## JIRA.getUsersFromGroup
Returns a paginated list of users who are members of the specified group and its subgroups.

| Field               | Type       | Description
|---------------------|------------|----------
| jiraUsername        | credentials| Username in JIRA.
| jiraPassword        | credentials| Password in JIRA.
| jiraName            | String     | Name of JIRA.
| groupname           | String     | A name of the group for which members will be returned.
| includeInactiveUsers| Boolean    | Inactive users will be included in the response if set to true.
| startAt             | Number     | The index of the first user in group to return (0 based).
| maxResults          | Number     | The maximum number of users to return (max 50).

## JIRA.addUserToGroup
Adds given user to a group. Returns the current state of the group.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| groupname   | String     | A name of requested group.
| name        | String     | User name.

## JIRA.deleteUserFromGroup
Removes given user from a group.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| groupname   | String     | A name of requested group.
| username    | String     | User to remove from a group.

## JIRA.findGroups
Returns groups with substrings matching a given query.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| query       | String     | A String to match groups agains.
| exclude     | String     | Exclude group.
| maxResults  | Number     | Max results.
| userName    | String     | User name.

## JIRA.findUsersAndGroups
Returns a list of users and groups matching query with highlighting.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| query       | String     | A string used to search username, Name or e-mail address.
| maxResults  | Number     | The maximum number of users to return (defaults to 50).
| showAvatar  | Boolean    | Show avatar.
| fieldId     | String     | The custom field id.
| projectId   | String     | The list of project ids to further restrict the search.
| issueTypeId | String     | The list of issue type ids to further restrict the search.

## JIRA.createSingleIssue
Creates an issue or a sub-task from a JSON representation.

| Field          | Type       | Description
|----------------|------------|----------
| jiraUsername   | credentials| Username in JIRA.
| jiraPassword   | credentials| Password in JIRA.
| jiraName       | String     | Name of JIRA.
| update         | JSON       | JSON Object, update.
| fields         | JSON       | JSON Object, new issue fields.
| transition     | JSON       | JSON Object, new issue transition.
| historyMetadata| JSON       | JSON Object, new issue history metadata.
| properties     | Array      | Array of JSON objects, entity properties.

#### Example of 'update' field
```json
{
	"worklog": [{
		"add": {
			"timeSpent": "60m",
			"started": "2011-07-05T11:05:00.000+0000"
		}
	}]
}
```

#### Example of 'fields' field
```json
{
	"project": {
		"id": "10000"
	},
	"summary": "something's wrong",
	"issuetype": {
		"id": "10000"
	},
	"assignee": {
		"name": "homer"
	},
	"reporter": {
		"name": "smithers"
	},
	"priority": {
		"id": "20000"
	},
	"labels": ["bugfix", "blitz_test"],
	"timetracking": {
		"originalEstimate": "10",
		"remainingEstimate": "5"
	},
	"security": {
		"id": "10000"
	},
	"versions": [{
		"id": "10000"
	}],
	"environment": "environment",
	"description": "description",
	"duedate": "2011-03-11",
	"fixVersions": [{
		"id": "10001"
	}],
	"components": [{
		"id": "10000"
	}],
	"customfield_30000": ["10000", "10002"]
}
```

## JIRA.createIssues
Creates issues or sub-tasks from a JSON representation. Creates many issues in one bulk operation.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| issueUpdates| Array      | Array of JSON objects, issue updates Object.

#### Example of 'issueUpdates' field
```json
[{
	"update": {
		"worklog": [{
			"add": {
				"timeSpent": "60m",
				"started": "2011-07-05T11:05:00.000+0000"
			}
		}]
	},
	"fields": {
		"project": {
			"id": "10000"
		},
		"summary": "something's wrong",
		"issuetype": {
			"id": "10000"
		},
		"assignee": {
			"name": "homer"
		},
		"reporter": {
			"name": "smithers"
		},
		"priority": {
			"id": "20000"
		},
		"labels": ["bugfix", "blitz_test"],
		"timetracking": {
			"originalEstimate": "10",
			"remainingEstimate": "5"
		},
		"security": {
			"id": "10000"
		},
		"versions": [{
			"id": "10000"
		}],
		"environment": "environment",
		"description": "description",
		"duedate": "2011-03-11",
		"fixVersions": [{
			"id": "10001"
		}],
		"components": [{
			"id": "10000"
		}],
		"customfield_30000": ["10000", "10002"],
		"customfield_80000": {
			"value": "red"
		},
		"customfield_20000": "06/Jul/11 3:25 PM",
		"customfield_40000": "this is a text field",
		"customfield_70000": ["jira-administrators", "jira-software-users"],
		"customfield_60000": "jira-software-users",
		"customfield_50000": "this is a text area. big text.",
		"customfield_10000": "09/Jun/81"
	}
}, {
	"update": [],
	"fields": {
		"project": {
			"id": "1000"
		},
		"summary": "something's very wrong",
		"issuetype": {
			"id": "10000"
		},
		"assignee": {
			"name": "jerry"
		},
		"reporter": {
			"name": "kosecki"
		},
		"priority": {
			"id": "20000"
		},
		"labels": ["new_release"],
		"timetracking": {
			"originalEstimate": "15",
			"remainingEstimate": "5"
		},
		"security": {
			"id": "10000"
		},
		"versions": [{
			"id": "10000"
		}],
		"environment": "environment",
		"description": "description",
		"duedate": "2011-04-16",
		"fixVersions": [{
			"id": "10001"
		}],
		"components": [{
			"id": "10000"
		}],
		"customfield_30000": ["10000", "10002"],
		"customfield_80000": {
			"value": "red"
		},
		"customfield_20000": "06/Jul/11 3:25 PM",
		"customfield_40000": "this is a text field",
		"customfield_70000": ["jira-administrators", "jira-software-users"],
		"customfield_60000": "jira-software-users",
		"customfield_50000": "this is a text area. big text.",
		"customfield_10000": "09/Jun/81"
	}
}]
```

## JIRA.getSingleIssue
Returns a full representation of the issue for the given issue key.

| Field        | Type       | Description
|--------------|------------|----------
| jiraUsername | credentials| Username in JIRA.
| jiraPassword | credentials| Password in JIRA.
| jiraName     | String     | Name of JIRA.
| issueIdOrKey | String     | Issue identifier or key.
| fields       | String     | The list of fields to return for the issue. By default, all fields are returned.
| expand       | String     | Expand.
| properties   | String     | The list of properties to return for the issue.
| fieldsByKeys | Boolean    | If true then fields in issues will be referenced by keys instead of ids.
| updateHistory| Boolean    | Update history.

## JIRA.deleteSingleIssue
Delete an issue.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| issueIdOrKey| String     | Issue identifier or key.

## JIRA.updateSingleIssue
Edits an issue from a JSON representation.

| Field                 | Type       | Description
|-----------------------|------------|----------
| jiraUsername          | credentials| Username in JIRA.
| jiraPassword          | credentials| Password in JIRA.
| jiraName              | String     | Name of JIRA.
| issueIdOrKey          | String     | Issue identifier or key.
| notifyUsers           | Boolean    | Send the email with notification that the issue was updated to users that watch it.
| overrideScreenSecurity| Boolean    | Allows to update fields that are not on the screen.
| overrideEditableFlag  | Boolean    | Updates the issue even if the issue is not editable due to being in a status with jira.issue.editable set to false or missing.
| transition            | JSON       | JSON Object, transition properties.
| fields                | JSON       | JSON Object, fields properties.
| update                | JSON       | JSON Object, update properties.
| historyMetadata       | JSON       | JSON Object, history metadata properties.
| properties            | Array      | Array of JSON objects, issue properties.

## JIRA.assignIssueToUser
Assigns an issue to a user.

| Field           | Type       | Description
|-----------------|------------|----------
| jiraUsername    | credentials| Username in JIRA.
| jiraPassword    | credentials| Password in JIRA.
| jiraName        | String     | Name of JIRA.
| issueIdOrKey    | String     | Issue identifier or key.
| name            | String     | User name.
| key             | String     | Key.
| accountId       | String     | Account identifier.
| emailAddress    | String     | Email address.
| avatarUrls      | JSON       | JSON Object, avatar Urls.
| displayName     | String     | Display name.
| active          | Boolean    | Is active.
| timeZone        | String     | TimeZone.
| locale          | String     | Locale.
| groups          | String     | Groups.
| applicationRoles| String     | Application roles.

## JIRA.getIssueComments
Returns all comments for an issue.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| issueIdOrKey| String     | Issue identifier or key.
| startAt     | Number     | The page offset, if not specified then defaults to 0.
| maxResults  | Number     | How many results on the page should be included. Defaults to 50.
| expand      | String     | Optional flags: renderedBody (provides body rendered in HTML).

## JIRA.addCommentToIssue
Adds a new comment to an issue.

| Field          | Type       | Description
|----------------|------------|----------
| jiraUsername   | credentials| Username in JIRA.
| jiraPassword   | credentials| Password in JIRA.
| jiraName       | String     | Name of JIRA.
| issueIdOrKey   | String     | Issue identifier or key.
| expand         | String     | Optional flags: renderedBody (provides body rendered in HTML).
| body           | String     | Comment body.
| visibilityType | String     | Visibility type. One of "group","role".
| visibilityValue| String     | Visibility value.

## JIRA.updateIssueComment
Updates an existing comment using its JSON representation.

| Field          | Type       | Description
|----------------|------------|----------
| jiraUsername   | credentials| Username in JIRA.
| jiraPassword   | credentials| Password in JIRA.
| jiraName       | String     | Name of JIRA.
| issueIdOrKey   | String     | Issue identifier or key.
| commentId      | String     | Comment identifier.
| expand         | String     | Optional flags: renderedBody (provides body rendered in HTML).
| body           | String     | Comment body.
| visibilityType | String     | Visibility type. One of "group","role".
| visibilityValue| String     | Visibility value.

## JIRA.deleteIssueComment
Deletes an existing comment.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| issueIdOrKey| String     | Issue identifier or key
| commentId   | String     | Comment identifier.

## JIRA.getIssueSingleComment
Returns a single comment.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| issueIdOrKey| String     | Issue identifier or key
| commentId   | String     | Comment identifier.
| expand      | String     | Optional flags: renderedBody (provides body rendered in HTML).

## JIRA.sendIssueNotify
Sends a notification (email) to the list or recipients defined in the request.

| Field              | Type       | Description
|--------------------|------------|----------
| jiraUsername       | credentials| Username in JIRA.
| jiraPassword       | credentials| Password in JIRA.
| jiraName           | String     | Name of JIRA.
| issueIdOrKey       | String     | Issue identifier or key.
| subject            | String     | Notify subject.
| textBody           | String     | Notify text body.
| htmlBody           | String     | Notify Html body.
| showToReporter     | Boolean    | Show to reporter.
| showToAssignee     | Boolean    | Show to assignee.
| showToWatchers     | Boolean    | Show to watchers.
| showToVoters       | Boolean    | Show to voters.
| showToUsers        | Array      | Array of JSON objects, show to users.
| showToGroups       | Array      | Array of JSON objects, show to groups.
| restrictGroups     | Array      | Array of JSON objects, restrict groups.
| restrictPermissions| Array      | Array of JSON objects, restrict groups.

#### Example of 'showToUsers' field
```json
[{
	"name": "fred",
	"active": false
}]
```

#### Example of 'showToGroups' field
```json
[{
	"name": "notification-group",
	"self": "http://www.example.com/jira/rest/api/2/group?groupname=notification-group"
}]
```

#### Example of 'restrictGroups' field
```json
[{
	"name": "notification-group",
	"self": "http://www.example.com/jira/rest/api/2/group?groupname=notification-group"
}]
```

#### Example of 'restrictPermissions' field
```json
[{
	"id": "10",
	"key": "BROWSE"
}]
```

## JIRA.getRemoteIssueLinks
A REST sub-resource representing the remote issue links on the issue.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| issueIdOrKey| String     | Issue identifier or key
| globalId    | String     | The id of the remote issue link to be returned.

## JIRA.createRemoteIssueLink
Create remote issue link from a JSON representation.

| Field                   | Type       | Description
|-------------------------|------------|----------
| jiraUsername            | credentials| Username in JIRA.
| jiraPassword            | credentials| Password in JIRA.
| jiraName                | String     | Name of JIRA.
| issueIdOrKey            | String     | Issue identifier or key.
| applicationType         | String     | Application type.
| applicationName         | String     | Application name.
| relationship            | String     | Relationship.
| issueLinkUrl            | String     | Remote issue link Url.
| issueLinkTitle          | String     | Remote issue link title.
| issueLinkSummary        | String     | Remote issue link summary.
| issueLinkIconUrl        | String     | Remote issue link icon Url.
| issueLinkIconTitle      | String     | Remote issue link icon title.
| issueLinkStatusResolved | Boolean    | Remote issue link status resolved.
| issueLinkStatusIconUrl  | String     | Remote issue link status icon Url.
| issueLinkStatusIconTitle| String     | Remote issue link status icon title.
| issueLinkStatusIconLink | String     | Remote issue link status icon link.

## JIRA.deleteRemoteIssueLinkByGlobalId
Delete the remote issue link with the given global id on the issue.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| issueIdOrKey| String     | Issue identifier or key.
| globalId    | String     | The global id of the remote issue link.

## JIRA.getRemoteIssueLinkById
Get the remote issue link with the given id on the issue.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| issueIdOrKey| String     | Issue identifier or key
| linkId      | String     | Link identifier.

## JIRA.updateRemoteIssueLink
Updates a remote issue link from a JSON representation.

| Field                   | Type       | Description
|-------------------------|------------|----------
| jiraUsername            | credentials| Username in JIRA.
| jiraPassword            | credentials| Password in JIRA.
| jiraName                | String     | Name of JIRA.
| issueIdOrKey            | String     | Issue identifier or key.
| linkId                  | String     | Link identifier.
| globalId                | String     | Global identifier.
| applicationType         | String     | Application type.
| applicationName         | String     | Application name.
| relationship            | String     | Relationship.
| issueLinkUrl            | String     | Remote issue link Url.
| issueLinkTitle          | String     | Remote issue link title.
| issueLinkSummary        | String     | Remote issue link summary.
| issueLinkIconUrl        | String     | Remote issue link icon Url.
| issueLinkIconTitle      | String     | Remote issue link icon title.
| issueLinkStatusResolved | Boolean    | Remote issue link status resolved.
| issueLinkStatusIconUrl  | String     | Remote issue link status icon Url.
| issueLinkStatusIconTitle| String     | Remote issue link status icon title.
| issueLinkStatusIconLink | String     | Remote issue link status icon link.

## JIRA.deleteRemoteIssueLinkById
Delete the remote issue link with the given id on the issue.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| issueIdOrKey| String     | Issue identifier or key.
| linkId      | String     | Link identifier.

## JIRA.getIssueTransitions
Get a list of the transitions possible for this issue by the current user, along with fields that are required and their types.

| Field                  | Type       | Description
|------------------------|------------|----------
| jiraUsername           | credentials| Username in JIRA.
| jiraPassword           | credentials| Password in JIRA.
| jiraName               | String     | Name of JIRA.
| issueIdOrKey           | String     | Issue identifier or key.
| transitionId           | String     | Transition identifier.
| skipRemoteOnlyCondition| Boolean    | Flag to skip evaluation of {@link RemoteOnlyCondition}, can only be used by add-on users.

## JIRA.makeIssueTransition
Perform a transition on an issue.When performing the transition you can update or set other issue fields.

| Field          | Type       | Description
|----------------|------------|----------
| jiraUsername   | credentials| Username in JIRA.
| jiraPassword   | credentials| Password in JIRA.
| jiraName       | String     | Name of JIRA.
| issueIdOrKey   | String     | Issue identifier or key.
| transition     | JSON       | JSON Object, issue transition.
| update         | JSON       | JSON Object, issue update parameters.
| fields         | JSON       | JSON Object, issue fields.
| historyMetadata| JSON       | JSON Object, issue history metadata.
| properties     | Array      | Array of JSON objects, issue properties.

## JIRA.deleteIssueVote
Remove your vote from an issue. (i.e. "unvote").

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| issueIdOrKey| String     | Issue identifier or key.

## JIRA.addIssueVote
Cast your vote in favour of an issue.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| issueIdOrKey| String     | Issue identifier or key.

## JIRA.getIssueVotes
A REST sub-resource representing the voters on the issue.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| issueIdOrKey| String     | Issue identifier or key.

## JIRA.getIssueWatchers
Returns the list of watchers for the issue with the given key.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| issueIdOrKey| String     | Issue identifier or key.

## JIRA.addIssueWatcher
Adds a user to an issue's watcher list.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| issueIdOrKey| String     | Issue identifier or key.
| userName    | String     | User name.

## JIRA.deleteIssueWatcher
Removes a user from an issue's watcher list.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| issueIdOrKey| String     | Issue identifier or key.
| username    | String     | A String containing the name of the user to remove from the watcher list.

## JIRA.getWorklogById
Returns a specific worklog.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| issueIdOrKey| String     | Issue identifier or key.
| worklogId   | String     | Worklog identifier.
| expand      | String     | Comma separated list of parameters to expand.

## JIRA.addIssueWorklog
Adds a new worklog entry to an issue.

| Field           | Type       | Description
|-----------------|------------|----------
| jiraUsername    | credentials| Username in JIRA.
| jiraPassword    | credentials| Password in JIRA.
| jiraName        | String     | Name of JIRA.
| issueIdOrKey    | String     | Issue identifier or key.
| adjustEstimate  | String     | Allows you to provide specific instructions to update the remaining time estimate of the issue.
| newEstimate     | String     | The new value for the remaining estimate field.
| reduceBy        | String     | The amount to reduce the remaining estimate by.
| expand          | String     | Comma separated list of parameters to expand.
| comment         | String     | Worklog comment.
| visibilityType  | String     | Visibility type. One of "group","role".
| visibilityValue | String     | Visibility value.
| started         | String     | Started. Example "2017-02-21T01:03:28.187+0000".
| timeSpentSeconds| Number     | Time spent in seconds.

## JIRA.getIssueWorklog
Returns a specific worklog.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| issueIdOrKey| String     | Issue identifier or key.
| expand      | String     | Comma separated list of parameters to expand.

## JIRA.updateIssueWorklog
Updates an existing worklog entry.

| Field           | Type       | Description
|-----------------|------------|----------
| jiraUsername    | credentials| Username in JIRA.
| jiraPassword    | credentials| Password in JIRA.
| jiraName        | String     | Name of JIRA.
| issueIdOrKey    | String     | Issue identifier or key.
| worklogId       | String     | Worklog identifier.
| adjustEstimate  | String     | Allows you to provide specific instructions to update the remaining time estimate of the issue.
| newEstimate     | String     | The new value for the remaining estimate field.
| reduceBy        | String     | The amount to reduce the remaining estimate by.
| expand          | String     | Comma separated list of parameters to expand.
| comment         | String     | Worklog comment.
| visibilityType  | String     | Visibility type. One of "group","role".
| visibilityValue | String     | Visibility value.
| started         | String     | Started. Example "2017-02-21T01:03:28.187+0000".
| timeSpentSeconds| Number     | Time spent in seconds.

## JIRA.deleteIssueWorklog
Deletes an existing worklog entry.

| Field         | Type       | Description
|---------------|------------|----------
| jiraUsername  | credentials| Username in JIRA.
| jiraPassword  | credentials| Password in JIRA.
| jiraName      | String     | Name of JIRA.
| issueIdOrKey  | String     | Issue identifier or key.
| worklogId     | String     | Worklog identifier.
| adjustEstimate| String     | Allows you to provide specific instructions to update the remaining time estimate of the issue.
| newEstimate   | String     | The new value for the remaining estimate field.
| increaseBy    | String     | The amount to increase the remaining estimate by e.g.

## JIRA.getCreatedIssueMeta
Returns the meta data for creating issues.

| Field         | Type       | Description
|---------------|------------|----------
| jiraUsername  | credentials| Username in JIRA.
| jiraPassword  | credentials| Password in JIRA.
| jiraName      | String     | Name of JIRA.
| projectIds    | String     | Comma-separated list, combined with the projectKeys param, lists the projects with which to filter the results.
| projectKeys   | String     | Comma-separated list, combined with the projectIds param, lists the projects with which to filter the results.
| issuetypeIds  | String     | Comma-separated list, combinded with issuetypeNames, lists the issue types with which to filter the results.
| issuetypeNames| String     | Comma-separated list, Combinded with issuetypeIds, lists the issue types with which to filter the results. If null, all issue types are returned.

## JIRA.getIssuesBasedOnQuery
Returns suggested issues which match the auto-completion query for the user which executes this request.

| Field            | Type       | Description
|------------------|------------|----------
| jiraUsername     | credentials| Username in JIRA.
| jiraPassword     | credentials| Password in JIRA.
| jiraName         | String     | Name of JIRA.
| query            | String     | The query string.
| currentJQL       | String     | The JQL in context of which the request is executed.
| currentIssueKey  | String     | The key of the issue in context of which the request is executed.
| currentProjectId | String     | The id of the project in context of which the request is executed.
| showSubTasks     | Boolean    | If set to false, subtasks will not be included in the list.
| showSubTaskParent| Boolean    | If set to false and request is executed in context of a subtask, the parent issue will not be included in the auto-completion result, even if it matches the query.

## JIRA.addIssueAttachment
Add attachment to an issue.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| issueIdOrKey| String     | Issue identifier or key.
| Attachment  | File       | Issue attachment file.

## JIRA.getIssuePropertiesKeys
Returns the keys of all properties for the issue identified by the key or by the id.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| issueIdOrKey| String     | Issue identifier or key.

## JIRA.deleteIssueProperty
Removes the property from the issue identified by the key or by the id.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| issueIdOrKey| String     | Issue identifier or key.
| propertyKey | String     | Property key.

## JIRA.setIssueProperty
Sets the value of the specified issue's property. You can use this resource to store a custom data against the issue identified by the key or by the id.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| issueIdOrKey| String     | Issue identifier or key.
| propertyKey | String     | Property key.
| value       | String     | Property value.

## JIRA.getIssueProperty
Returns the value of the property with a given key from the issue identified or the key.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| issueIdOrKey| String     | Issue identifier or key.
| propertyKey | String     | Property key.

## JIRA.getWorklogPropertiesKeys
Returns the keys of all properties for the worklog identified by the key or by the id.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| issueIdOrKey| String     | Issue identifier or key.
| worklogId   | String     | Worklog identifier.

## JIRA.deleteWorklogProperty
Removes the property from the worklog identified by the key or by the id.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| issueIdOrKey| String     | Issue identifier or key.
| worklogId   | String     | Worklog identifier.
| propertyKey | String     | Property key.

## JIRA.setWorklogProperty
Sets the value of the specified worklog's property.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| issueIdOrKey| String     | Issue identifier or key.
| worklogId   | String     | Worklog identifier.
| propertyKey | String     | Property key.
| value       | String     | Property value.

## JIRA.getWorklogProperty
Returns the value of the property with a given key from the worklog identified by the key or by the id.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| issueIdOrKey| String     | Issue identifier or key.
| worklogId   | String     | Worklog identifier.
| propertyKey | String     | Property key.

## JIRA.createIssueLink
Creates an issue link between two issues.

| Field                 | Type       | Description
|-----------------------|------------|----------
| jiraUsername          | credentials| Username in JIRA.
| jiraPassword          | credentials| Password in JIRA.
| jiraName              | String     | Name of JIRA.
| typeName              | String     | Type name.
| typeId                | String     | Type identifier.
| typeInward            | String     | Type inward.
| typeOutward           | String     | Type outward.
| inwardIssue           | JSON       | JSON Object, inward issue.
| outwardIssue          | JSON       | JSON Object, outward issue.
| commentAuthor         | JSON       | JSON Object, comment author.
| commentBody           | String     | Comment body.
| commentRenderedBody   | String     | Comment rendered body.
| commentVisibilityType | String     | Comment visibility type. One of "group", "role".
| commentVisibilityValue| String     | Comment visibility value.
| commentProperties     | Array      | Array of JSON objects, comment entity property.

#### Example of 'inwardIssue' field
```json
{
	"id": "issueId",
	"key": "issueKey",
	"fields": {
		"summary": "Issue summary",
		"status": {
			"statusColor": "#009900",
			"description": "Issue status description",
			"iconUrl": "http://www.example.com/jira/images/icons/priorities/major.png",
			"name": "Name",
			"id": "Id",
			"statusCategory": {
				"id": 9,
				"key": "completed",
				"colorName": "green",
				"name": "Completed"
			}
		},
		"issuetype": {
			"id": "10000",
			"description": "Issue type description",
			"iconUrl": "http://www.example.com/jira/images/icons/priorities/major.png",
			"name": "Name",
			"subtask": false,
			"avatarId": 10002
		},
		"priority": {
			"statusColor": "#009900",
			"description": "Priority description",
			"iconUrl": "http://www.example.com/jira/images/icons/priorities/major.png",
			"name": "Name",
			"id": "20000"
		}
	}
}
```

#### Example of 'outwardIssue' field
```json
{
	"id": "issueId",
	"key": "issueKey",
	"fields": {
		"summary": "Issue summary",
		"status": {
			"statusColor": "#009900",
			"description": "Issue status description",
			"iconUrl": "http://www.example.com/jira/images/icons/priorities/major.png",
			"name": "Name",
			"id": "Id",
			"statusCategory": {
				"id": 9,
				"key": "completed",
				"colorName": "green",
				"name": "Completed"
			}
		},
		"issuetype": {
			"id": "10000",
			"description": "Issue type description",
			"iconUrl": "http://www.example.com/jira/images/icons/priorities/major.png",
			"name": "Name",
			"subtask": false,
			"avatarId": 10002
		},
		"priority": {
			"statusColor": "#009900",
			"description": "Priority description",
			"iconUrl": "http://www.example.com/jira/images/icons/priorities/major.png",
			"name": "Name",
			"id": "20000"
		}
	}
}
```

#### Example of 'commentAuthor' field
```json
{
	"name": "userName",
	"key": "userKey",
	"accountId": "99:27935d01-92a7-4687-8272-a9b8d3b2ae2e",
	"emailAddress": "fred@example.com",
	"avatarUrls": {
		"16x16": "http://www.example.com/jira/secure/useravatar?size=xsmall&ownerId=fred",
		"24x24": "http://www.example.com/jira/secure/useravatar?size=small&ownerId=fred"
	},
	"displayName": "userDisplayName",
	"active": true,
	"timeZone": "Australia/Sydney"
}
```

## JIRA.getIssueLink
Returns an issue link with the specified id.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| linkId      | String     | Link identifier.

## JIRA.deleteIssueLink
Deletes an issue link with the specified id.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| linkId      | String     | Link identifier.

## JIRA.getIssueLinkTypes
Returns a list of available issue link types, if issue linking is enabled.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.

## JIRA.createIssueLinkType
Create a new issue link type.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| name        | String     | Name.
| inward      | String     | Inward issues.
| outward     | String     | Outward issues.

## JIRA.getSingleIssueLinkType
Returns for a given issue link type identifier all information about this issue link type.

| Field          | Type       | Description
|----------------|------------|----------
| jiraUsername   | credentials| Username in JIRA.
| jiraPassword   | credentials| Password in JIRA.
| jiraName       | String     | Name of JIRA.
| issueLinkTypeId| String     | Issue link type identifier.

## JIRA.deleteSingleIssueLinkType
Delete the specified issue link type.

| Field          | Type       | Description
|----------------|------------|----------
| jiraUsername   | credentials| Username in JIRA.
| jiraPassword   | credentials| Password in JIRA.
| jiraName       | String     | Name of JIRA.
| issueLinkTypeId| String     | Issue link type identifier.

## JIRA.updateSingleIssueLinkType
Update the specified issue link type.

| Field          | Type       | Description
|----------------|------------|----------
| jiraUsername   | credentials| Username in JIRA.
| jiraPassword   | credentials| Password in JIRA.
| jiraName       | String     | Name of JIRA.
| issueLinkTypeId| String     | Issue link type identifier.
| name           | String     | Name.
| inward         | String     | Inward issues.
| outward        | String     | Outward issues.

## JIRA.getIssueSecuritySchemes
Returns all issue security schemes that are defined.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.

## JIRA.getIssueSingleSecurityScheme
Returns the issue security scheme along with that are defined.

| Field                 | Type       | Description
|-----------------------|------------|----------
| jiraUsername          | credentials| Username in JIRA.
| jiraPassword          | credentials| Password in JIRA.
| jiraName              | String     | Name of JIRA.
| issueSecuritySchemesId| String     | Issue security schemes identifier.

## JIRA.getIssueAllTypes
Returns a list of all issue types visible to the user.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.

## JIRA.createIssueType
Creates an issue type.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| name        | String     | Name.
| type        | String     | Type, one of subtask, standard.
| description | String     | Description.

## JIRA.getSingleIssueType
Returns a full representation of the issue type that has the given id.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| issueTypeId | String     | Issue type identifier.

## JIRA.deleteSingleIssueType
Deletes the specified issue type.

| Field                 | Type       | Description
|-----------------------|------------|----------
| jiraUsername          | credentials| Username in JIRA.
| jiraPassword          | credentials| Password in JIRA.
| jiraName              | String     | Name of JIRA.
| issueTypeId           | String     | Issue type identifier.
| alternativeIssueTypeId| String     | The identifier of an issue type to which issues associated with the removed issue type will be migrated.

## JIRA.updateSingleIssueType
Updates the specified issue type from a JSON representation.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| issueTypeId | String     | Issue type identifier.
| name        | String     | Name.
| description | String     | Description.
| avatarId    | String     | Avatar identifier.

## JIRA.getAlternativeIssueTypes
Returns a list of all alternative issue types for the given issue type identifier.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| issueTypeId | String     | Issue type identifier.

## JIRA.createIssueTypeAvatar
Creates an avatar for an issue type, for a given issue type Id.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| issueTypeId | String     | Issue type identifier.
| image       | File       | Avatar image.
| x           | Number     | The X coordinate of the top-left corner of the crop region. Default: 0.
| y           | Number     | The Y coordinate of the top-left corner of the crop region. Default: 0.
| size        | Number     | The length of each side of the crop region. The crop region can only be a square.

## JIRA.getIssueTypePropertiesKeys
Returns the keys of all properties for the issue type identified by the id.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| issueTypeId | String     | Issue type identifier.

## JIRA.deleteIssueTypeProperty
Removes the property from the issue type identified by the id.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| issueTypeId | String     | Issue type identifier.
| propertyKey | String     | Property key.

## JIRA.setIssueTypeProperty
Sets the value of the specified issue type's property.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| issueTypeId | String     | Issue type identifier.
| propertyKey | String     | Property key.
| value       | String     | Property value.

## JIRA.getIssueTypeProperty
Returns the value of the property with a given key from the issue type identified by the id.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| issueTypeId | String     | Issue type identifier.
| propertyKey | String     | Property key.

## JIRA.getAutoComplete
Returns the auto complete data required for JQL searches.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.

## JIRA.getFieldAutoComplete
Returns auto complete suggestions for JQL search.

| Field         | Type       | Description
|---------------|------------|----------
| jiraUsername  | credentials| Username in JIRA.
| jiraPassword  | credentials| Password in JIRA.
| jiraName      | String     | Name of JIRA.
| fieldName     | String     | The field name for which the suggestions are generated.
| fieldValue    | String     | The portion of the field value that has already been provided by the user.
| predicateName | String     | The predicate for which the suggestions are generated. Suggestions are generated only for: "by", "from" and "to".
| predicateValue| String     | The portion of the predicate value that has already been provided by the user.

## JIRA.getMyPreferences
Returns preference of the currently logged in user.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| key         | String     | Key of the preference to be returned.

## JIRA.setMyPreference
Sets preference of the currently logged in user.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| key         | String     | Key of the preference to be set.
| value       | String     | Preference value.

## JIRA.deleteMyPreference
Removes preference of the currently logged in user.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| key         | String     | Key of the preference to be removed.

## JIRA.getMe
Returns currently logged user.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.

## JIRA.getNotificationSchemes
Returns a paginated list of notification schemes.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| startAt     | Number     | The index of the first notification scheme to return (0 based).
| maxResults  | Number     | The maximum number of notification schemes to return (max 50).
| expand      | String     | The parameters to expand.

## JIRA.getSingleNotificationScheme
Returns a full representation of the notification scheme for the given id.

| Field               | Type       | Description
|---------------------|------------|----------
| jiraUsername        | credentials| Username in JIRA.
| jiraPassword        | credentials| Password in JIRA.
| jiraName            | String     | Name of JIRA.
| notificationSchemeId| String     | Notification scheme identifier.
| expand              | String     | The parameters to expand.

## JIRA.getPermissionSchemes
Returns a list of all permission schemes.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| expand      | String     | The parameters to expand.

## JIRA.createPermissionScheme
Create a new permission scheme.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| name        | String     | Permission scheme name.
| permissions | Array      | Array of JSON objects, permissions.
| description | String     | Permission scheme description.
| expand      | String     | The parameters to expand.

#### Example of 'permissions' field
```json
[{
	"holder": {
		"type": "group",
		"parameter": "jira-developers"
	},
	"permission": "ADMINISTER_PROJECTS"
}]
```

## JIRA.getSinglePermissionScheme
Returns a permission scheme identified by the given id.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| schemeId    | String     | Scheme identifier.
| expand      | String     | The parameters to expand.

## JIRA.deletePermissionScheme
Deletes a permission scheme identified by the given id.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| schemeId    | String     | Scheme identifier.

## JIRA.updatePermissionScheme
Updates a permission scheme.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| schemeId    | String     | Permission scheme identifier.
| permissions | Array      | Array of JSON objects, permissions.
| name        | String     | Permission scheme name.
| description | String     | Permission scheme description.
| expand      | String     | The parameters to expand.

#### Example of 'permissions' field
```json
[{
	"holder": {
		"type": "group",
		"parameter": "jira-developers"
	},
	"permission": "ADMINISTER_PROJECTS"
}]
```

## JIRA.getPermissionSchemeGrants
Returns all permission grants of the given permission scheme.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| schemeId    | String     | Scheme identifier.
| expand      | String     | The parameters to expand.

## JIRA.createPermissionGrant
Creates a permission grant in a permission scheme.

| Field          | Type       | Description
|----------------|------------|----------
| jiraUsername   | credentials| Username in JIRA.
| jiraPassword   | credentials| Password in JIRA.
| jiraName       | String     | Name of JIRA.
| schemeId       | String     | Scheme identifier.
| holderType     | String     | Permission type.
| holderParameter| String     | Permission parameter.
| permission     | String     | Permission.
| expand         | String     | The parameters to expand.

## JIRA.deletePermissionSchemeEntity
Deletes a permission grant from a permission scheme.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| schemeId    | String     | Scheme identifier.
| permissionId| String     | Permission identifier.

## JIRA.getPermissionSchemeGrant
Returns a permission grant identified by the given id.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| schemeId    | String     | Scheme identifier.
| permissionId| String     | Permission identifier.
| expand      | String     | The parameters to expand.

## JIRA.getPriorities
Returns a list of all issue priorities.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.

## JIRA.getSinglePriority
Returns an issue priority.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| priorityId  | String     | Priority identifier.

## JIRA.getAllProjects
Returns all projects which are visible for the currently logged in user.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| expand      | String     | The parameters to expand.
| recent      | Number     | If this parameter is set then only projects recently accessed by the current user.

## JIRA.createProject
Creates a new project.

| Field              | Type       | Description
|--------------------|------------|----------
| jiraUsername       | credentials| Username in JIRA.
| jiraPassword       | credentials| Password in JIRA.
| jiraName           | String     | Name of JIRA.
| key                | String     | Project key.
| name               | String     | Project name.
| projectTypeKey     | String     | Project type key.
| projectTemplateKey | String     | Project template key.
| description        | String     | Project description.
| lead               | String     | Project lead.
| url                | String     | Project Url.
| assigneeType       | String     | Assignee type. One of "PROJECT_LEAD", "UNASSIGNED".
| avatarId           | Number     | Avatar identifier.
| issueSecurityScheme| Number     | Issue security scheme.
| permissionScheme   | Number     | Permission scheme.
| notificationScheme | Number     | Notification scheme.
| categoryId         | Number     | Category identifier.

## JIRA.updateProject
Updates a project.

| Field              | Type       | Description
|--------------------|------------|----------
| jiraUsername       | credentials| Username in JIRA.
| jiraPassword       | credentials| Password in JIRA.
| jiraName           | String     | Name of JIRA.
| projectIdOrKey     | String     | Project identifier or key.
| expand             | String     | The parameters to expand in returned project.
| key                | String     | Project key.
| name               | String     | Project name.
| projectTypeKey     | String     | Project type key.
| projectTemplateKey | String     | Project template key.
| description        | String     | Project description.
| lead               | String     | Project lead.
| url                | String     | Project Url.
| assigneeType       | String     | Assignee type. One of "PROJECT_LEAD", "UNASSIGNED".
| avatarId           | Number     | Avatar identifier.
| issueSecurityScheme| Number     | Issue security scheme.
| permissionScheme   | Number     | Permission scheme.
| notificationScheme | Number     | Notification scheme.
| categoryId         | Number     | Category identifier.

## JIRA.deleteProject
Deletes a project.

| Field         | Type       | Description
|---------------|------------|----------
| jiraUsername  | credentials| Username in JIRA.
| jiraPassword  | credentials| Password in JIRA.
| jiraName      | String     | Name of JIRA.
| projectIdOrKey| String     | Project identifier or key.

## JIRA.getSingleProject
Contains a full representation of a project in JSON format.

| Field         | Type       | Description
|---------------|------------|----------
| jiraUsername  | credentials| Username in JIRA.
| jiraPassword  | credentials| Password in JIRA.
| jiraName      | String     | Name of JIRA.
| projectIdOrKey| String     | Project identifier or key.
| expand        | String     | The parameters to expand.

## JIRA.updateProjectAvatar
Update project avatar

| Field         | Type       | Description
|---------------|------------|----------
| jiraUsername  | credentials| Username in JIRA.
| jiraPassword  | credentials| Password in JIRA.
| jiraName      | String     | Name of JIRA.
| projectIdOrKey| String     | Project identifier or key.
| avatarId      | String     | Project avatar identifier.
| owner         | String     | Project avatar owner.
| isSystemAvatar| String     | Is system avatar.
| isSelected    | Boolean    | Is selected.
| isDeletable   | Boolean    | Is deletable.
| selected      | Boolean    | Project avatar selected.
| urls          | JSON       | JSON Object, urls.

#### Example of 'urls' field
```json
{
	"16x16": "http://www.example.com/jira/secure/useravatar?size=xsmall&ownerId=fred",
	"32x32": "http://www.example.com/jira/secure/useravatar?size=medium&ownerId=fred"
}
```

## JIRA.deleteProjectAvatar
Deletes avatar.

| Field         | Type       | Description
|---------------|------------|----------
| jiraUsername  | credentials| Username in JIRA.
| jiraPassword  | credentials| Password in JIRA.
| jiraName      | String     | Name of JIRA.
| projectIdOrKey| String     | Project identifier or key.
| avatarId      | String     | Avatar identifier.

## JIRA.createProjectAvatar
Creates an avatar for a project, for a given project Id or project key.

| Field         | Type       | Description
|---------------|------------|----------
| jiraUsername  | credentials| Username in JIRA.
| jiraPassword  | credentials| Password in JIRA.
| jiraName      | String     | Name of JIRA.
| projectIdOrKey| String     | Project identifier or key.
| image         | File       | Avatar image.
| x             | Number     | The X coordinate of the top-left corner of the crop region. Default: 0.
| y             | Number     | The Y coordinate of the top-left corner of the crop region. Default: 0.
| size          | Number     | The length of each side of the crop region. The crop region can only be a square.

## JIRA.getProjectComponents
Contains a full representation of a the specified project's components.

| Field         | Type       | Description
|---------------|------------|----------
| jiraUsername  | credentials| Username in JIRA.
| jiraPassword  | credentials| Password in JIRA.
| jiraName      | String     | Name of JIRA.
| projectIdOrKey| String     | Project identifier or key.

## JIRA.getAllProjectStatuses
Get all issue types with valid status values for a project.

| Field         | Type       | Description
|---------------|------------|----------
| jiraUsername  | credentials| Username in JIRA.
| jiraPassword  | credentials| Password in JIRA.
| jiraName      | String     | Name of JIRA.
| projectIdOrKey| String     | Project identifier or key.

## JIRA.updateProjectType
Updates the type of a project.

| Field            | Type       | Description
|------------------|------------|----------
| jiraUsername     | credentials| Username in JIRA.
| jiraPassword     | credentials| Password in JIRA.
| jiraName         | String     | Name of JIRA.
| projectIdOrKey   | String     | Project identifier or key.
| newProjectTypeKey| String     | New project type key.

## JIRA.getProjectVersionsPaginated
Returns all versions for the specified project.

| Field         | Type       | Description
|---------------|------------|----------
| jiraUsername  | credentials| Username in JIRA.
| jiraPassword  | credentials| Password in JIRA.
| jiraName      | String     | Name of JIRA.
| projectIdOrKey| String     | Project identifier or key.
| startAt       | Number     | The page offset, if not specified then defaults to 0.
| maxResults    | Number     | How many results on the page should be included. Defaults to 50.
| orderBy       | String     | Ordering of the results.
| expand        | String     | The parameters to expand.

## JIRA.getProjectPropertiesKeys
Returns the keys of all properties for the project identified by the key or by the id.

| Field         | Type       | Description
|---------------|------------|----------
| jiraUsername  | credentials| Username in JIRA.
| jiraPassword  | credentials| Password in JIRA.
| jiraName      | String     | Name of JIRA.
| projectIdOrKey| String     | Project identifier or key.

## JIRA.deleteProjectProperty
Removes the property from the project identified by the key or by the id.

| Field         | Type       | Description
|---------------|------------|----------
| jiraUsername  | credentials| Username in JIRA.
| jiraPassword  | credentials| Password in JIRA.
| jiraName      | String     | Name of JIRA.
| projectIdOrKey| String     | Project identifier or key.
| propertyKey   | String     | Property key.

## JIRA.setProjectProperty
Sets the value of the specified project's property.

| Field         | Type       | Description
|---------------|------------|----------
| jiraUsername  | credentials| Username in JIRA.
| jiraPassword  | credentials| Password in JIRA.
| jiraName      | String     | Name of JIRA.
| projectIdOrKey| String     | Project identifier or key.
| propertyKey   | String     | Property key.
| value         | String     | Property value.

## JIRA.getProjectProperty
Returns the value of the property with a given key from the project identified by the key or by the id.

| Field         | Type       | Description
|---------------|------------|----------
| jiraUsername  | credentials| Username in JIRA.
| jiraPassword  | credentials| Password in JIRA.
| jiraName      | String     | Name of JIRA.
| projectIdOrKey| String     | Project identifier or key.
| propertyKey   | String     | Property key.

## JIRA.getSingleProjectRoles
Returns all roles in the given project Id or key, with links to full details on each role.

| Field         | Type       | Description
|---------------|------------|----------
| jiraUsername  | credentials| Username in JIRA.
| jiraPassword  | credentials| Password in JIRA.
| jiraName      | String     | Name of JIRA.
| projectIdOrKey| String     | Project identifier or key.

## JIRA.getProjectSingleRole
Returns the details for a given project role in a project together with project role actors.

| Field         | Type       | Description
|---------------|------------|----------
| jiraUsername  | credentials| Username in JIRA.
| jiraPassword  | credentials| Password in JIRA.
| jiraName      | String     | Name of JIRA.
| projectIdOrKey| String     | Project identifier or key.
| roleId        | String     | Role identifier.

## JIRA.setRoleActors
Updates a project role to include the specified actors (users or groups).

| Field            | Type       | Description
|------------------|------------|----------
| jiraUsername     | credentials| Username in JIRA.
| jiraPassword     | credentials| Password in JIRA.
| jiraName         | String     | Name of JIRA.
| projectIdOrKey   | String     | Project identifier or key.
| roleId           | Number     | Role identifier.
| categorisedActors| JSON       | JSON Object, categorised actors.

#### Example of 'categorisedActors' field
```json
{
	"atlassian-user-role-actor": ["admin"],
	"atlassian-group-role-actor": ["jira-developers"]
}
```

## JIRA.addActorToProjectRole
Adds an actor (user or group) to a project role.

| Field         | Type       | Description
|---------------|------------|----------
| jiraUsername  | credentials| Username in JIRA.
| jiraPassword  | credentials| Password in JIRA.
| jiraName      | String     | Name of JIRA.
| projectIdOrKey| String     | Project identifier or key.
| roleId        | String     | Role identifier.
| actors        | String     | Categorised actors.

#### Example of 'actors' field
```json
{
	"user": ["admin"]
}
```

## JIRA.deleteActorFromProjectRole
Deletes actors (users or groups) from a project role.

| Field         | Type       | Description
|---------------|------------|----------
| jiraUsername  | credentials| Username in JIRA.
| jiraPassword  | credentials| Password in JIRA.
| jiraName      | String     | Name of JIRA.
| projectIdOrKey| String     | Project identifier or key.
| roleId        | String     | Role identifier.
| user          | String     | The username to remove from the project role.
| group         | String     | The groupname to remove from the project role.

## JIRA.getIssueSecurityScheme
Returns the issue security scheme for project.

| Field         | Type       | Description
|---------------|------------|----------
| jiraUsername  | credentials| Username in JIRA.
| jiraPassword  | credentials| Password in JIRA.
| jiraName      | String     | Name of JIRA.
| projectKeyOrId| String     | Project key or identifier.

## JIRA.getNotificationScheme
Gets a notification scheme associated with the project.

| Field         | Type       | Description
|---------------|------------|----------
| jiraUsername  | credentials| Username in JIRA.
| jiraPassword  | credentials| Password in JIRA.
| jiraName      | String     | Name of JIRA.
| projectKeyOrId| String     | Project key or identifier.
| expand        | String     | The parameters to expand.

## JIRA.getAssignedPermissionScheme
Gets a permission scheme assigned with a project.

| Field         | Type       | Description
|---------------|------------|----------
| jiraUsername  | credentials| Username in JIRA.
| jiraPassword  | credentials| Password in JIRA.
| jiraName      | String     | Name of JIRA.
| projectKeyOrId| String     | Project key or identifier.
| expand        | String     | The parameters to expand.

## JIRA.assignPermissionScheme
Assigns a permission scheme with a project.

| Field             | Type       | Description
|-------------------|------------|----------
| jiraUsername      | credentials| Username in JIRA.
| jiraPassword      | credentials| Password in JIRA.
| jiraName          | String     | Name of JIRA.
| projectKeyOrId    | String     | Project key or identifier.
| permissionSchemeId| Number     | Permission scheme identifier.
| expand            | String     | The parameters to expand.

## JIRA.getSecurityLevelsForProject
Returns all security levels for the project that the current logged in user has access to.

| Field         | Type       | Description
|---------------|------------|----------
| jiraUsername  | credentials| Username in JIRA.
| jiraPassword  | credentials| Password in JIRA.
| jiraName      | String     | Name of JIRA.
| projectKeyOrId| String     | Project key or identifier.

## JIRA.getAllProjectTypes
Returns all the project types defined on the JIRA instance.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.

## JIRA.getProjectTypeByKey
Returns the project type with the given key.

| Field         | Type       | Description
|---------------|------------|----------
| jiraUsername  | credentials| Username in JIRA.
| jiraPassword  | credentials| Password in JIRA.
| jiraName      | String     | Name of JIRA.
| projectTypeKey| String     | Project type key.

## JIRA.getAccessibleProjectTypeByKey
Returns the project type with the given key, if it is accessible to the logged in user.

| Field         | Type       | Description
|---------------|------------|----------
| jiraUsername  | credentials| Username in JIRA.
| jiraPassword  | credentials| Password in JIRA.
| jiraName      | String     | Name of JIRA.
| projectTypeKey| String     | Project type key.

## JIRA.getAllProjectCategories
Returns all project categories.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.

## JIRA.createProjectCategory
Create a project category.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| name        | String     | Project category name.
| description | String     | Project category description.

## JIRA.getProjectCategoryById
Contains a representation of a project category in JSON format.

| Field            | Type       | Description
|------------------|------------|----------
| jiraUsername     | credentials| Username in JIRA.
| jiraPassword     | credentials| Password in JIRA.
| jiraName         | String     | Name of JIRA.
| projectCategoryId| String     | Project category identifier.

## JIRA.deleteProjectCategory
Delete a project category.

| Field            | Type       | Description
|------------------|------------|----------
| jiraUsername     | credentials| Username in JIRA.
| jiraPassword     | credentials| Password in JIRA.
| jiraName         | String     | Name of JIRA.
| projectCategoryId| String     | Project category identifier.

## JIRA.updateProjectCategory
Modify a project category.

| Field            | Type       | Description
|------------------|------------|----------
| jiraUsername     | credentials| Username in JIRA.
| jiraPassword     | credentials| Password in JIRA.
| jiraName         | String     | Name of JIRA.
| projectCategoryId| String     | Project category identifier.
| name             | String     | Project category name.
| description      | String     | Project category description.

## JIRA.validateProject
Validates a project key.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| key         | String     | The project key.

## JIRA.getResolutions
Returns a list of all resolutions.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.

## JIRA.getSingleResolution
Returns a resolution.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| resolutionId| String     | Resolution identifier.

## JIRA.getProjectRoles
Get all the ProjectRoles available in JIRA. Currently this list is global.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.

## JIRA.createProjectRole
Creates a new ProjectRole to be available in JIRA.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| name        | String     | Project role name.
| description | String     | Project role description.

## JIRA.getProjectRolesById
Get a specific ProjectRole available in JIRA.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| roleId      | String     | Role identifier.

## JIRA.updateProjectRole
Fully updates a roles.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| roleId      | String     | Project role identifier.
| name        | String     | Project role name.
| description | String     | Project role description.

## JIRA.deleteProjectRole
Deletes a role.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| roleId      | String     | Role identifier.
| swap        | Number     | If given, removes a role even if it is used in scheme by replacing the role with the given one.

## JIRA.getDefaultActorsForRole
Gets default actors for the given role.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| roleId      | String     | Role identifier.

## JIRA.addDefaultActorsToRole
Adds default actors to the given role. The request data should contain a list of usernames or a list of groups to add.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| roleId      | String     | Role identifier.
| user        | String     | Comma separated list of users.
| group       | String     | Comma separated list of groups.  

## JIRA.deleteDefaultActorFromRole
Removes default actor from the given role.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| roleId      | String     | Role identifier.
| user        | String     | If given, removes an actor from given role.
| group       | String     | If given, removes an actor from given role.

## JIRA.getScreenFieldsToAdd
Gets available fields for screen.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| screenId    | String     | Screen identifier.

## JIRA.getAllScreenTabs
Returns a list of all tabs for the given screen.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| screenId    | String     | Screen identifier.
| projectKey  | String     | The key of the project.

## JIRA.addScreenTab
Creates tab for given screen.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| screenId    | String     | Screen identifier.
| name        | String     | Tab name.

## JIRA.renameScreenTab
Renames tab on given screen.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| screenId    | String     | Screen identifier.
| tabId       | String     | Tab identifier.
| name        | String     | Tab name.

## JIRA.deleteScreenTab
Deletes tab to give screen.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| screenId    | String     | Screen identifier.
| tabId       | String     | Tab identifier.

## JIRA.getAllScreenFields
Gets all fields for a given tab.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| screenId    | String     | Screen identifier.
| tabId       | String     | Tab identifier.
| projectKey  | String     | The key of the project.

## JIRA.addScreenField
Adds field to the given tab.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| screenId    | String     | Screen identifier.
| tabId       | String     | Tab identifier.
| fieldId     | String     | Field identifier.

## JIRA.removeScreenField
Removes field from given tab.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| screenId    | String     | Screen identifier.
| tabId       | String     | Tab identifier.
| fieldId     | String     | Field identifier.

## JIRA.moveScreenFieldByNeighbours
Moves field on the given tab.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| screenId    | String     | Screen identifier.
| tabId       | String     | Tab identifier.
| fieldId     | String     | Field identifier.
| after       | String     | A field to place this field after. The value should be the self link of another field.

## JIRA.moveScreenFieldByPosition
Moves field on the given tab.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| screenId    | String     | Screen identifier.
| tabId       | String     | Tab identifier.
| fieldId     | String     | Field identifier.
| position    | String     | An absolute position, one of "Earlier", "Later", "First", "Last".

## JIRA.moveScreenTab
Moves tab position.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| screenId    | String     | Screen identifier.
| tabId       | String     | Tab identifier.
| position    | String     | New screen tab position.

## JIRA.addFieldToDefaultScreen
Adds field or custom field to the default tab.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| fieldId     | String     | Field identifier.

## JIRA.search
Performs a search using JQL.

| Field        | Type       | Description
|--------------|------------|----------
| jiraUsername | credentials| Username in JIRA.
| jiraPassword | credentials| Password in JIRA.
| jiraName     | String     | Name of JIRA.
| jql          | String     | JQL expression.
| fieldsByKeys | Boolean    | Fields by keys.
| validateQuery| String     | Validate query.
| fields       | String     | Comma-separated list of fields.
| properties   | String     | Comma-separated list of properties.
| startAt      | Number     | Start at element.
| maxResults   | Number     | Max retrieving results.

## JIRA.getIssuesecuritylevel
Returns a full representation of the security level that has the given identifier.

| Field          | Type       | Description
|----------------|------------|----------
| jiraUsername   | credentials| Username in JIRA.
| jiraPassword   | credentials| Password in JIRA.
| jiraName       | String     | Name of JIRA.
| securityLevelId| String     | Security level identifier.

## JIRA.getServerInfo
Returns general information about the current JIRA server.

| Field        | Type       | Description
|--------------|------------|----------
| jiraUsername | credentials| Username in JIRA.
| jiraPassword | credentials| Password in JIRA.
| jiraName     | String     | Name of JIRA.
| doHealthCheck| Boolean    | Do health check.

## JIRA.setBaseURL
Sets the base URL that is configured for this JIRA instance.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| value       | String     | Base URL.

## JIRA.getIssueNavigatorDefaultColumns
Returns the default system columns for issue navigator.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.

## JIRA.setIssueNavigatorDefaultColumns
Sets the default system columns for issue navigator.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| columns     | String     | Comma separated list of columns.

## JIRA.getStatuses
Returns a list of all statuses.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.

## JIRA.getSingleStatus
Returns a full representation of the Status having the given id or name.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| idOrName    | String     | Identifier or name of status.

## JIRA.getStatusCategories
Returns a list of all status categories.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.

## JIRA.getStatusCategory
Returns a full representation of the StatusCategory having the given id or key.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| idOrKey     | String     | Identifier or key of status category.

## JIRA.createAvatar
Creates an avatar for a given entity.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| type        | String     | Universal avatar type. Example project, user, issuetype.
| entityId    | String     | Entity identifier.
| image       | File       | Avatar image file.
| x           | Number     | The X coordinate of the top-left corner of the crop region.
| y           | Number     | The Y coordinate of the top-left corner of the crop region.
| size        | Number     | The length of each side of the crop region. The crop region can only be a square.

## JIRA.getAvatars
Get avatars.

| Field         | Type       | Description
|---------------|------------|----------
| jiraUsername  | credentials| Username in JIRA.
| jiraPassword  | credentials| Password in JIRA.
| jiraName      | String     | Name of JIRA.
| type          | String     | Universal avatar type. Example project, user, issuetype.
| owningObjectId| String     | Universal avatar owning object identifier.

## JIRA.deleteAvatar
Deletes avatar.

| Field         | Type       | Description
|---------------|------------|----------
| jiraUsername  | credentials| Username in JIRA.
| jiraPassword  | credentials| Password in JIRA.
| jiraName      | String     | Name of JIRA.
| type          | String     | Universal avatar type. Example project, user, issuetype.
| owningObjectId| String     | Universal avatar owning object identifier.
| avatarId      | String     | Avatar identifier.

## JIRA.getUser
Returns a user.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| username    | String     | The username.
| key         | String     | User key.
| expand      | String     | Expand result, use "groups", "applicationRoles".

## JIRA.findBulkAssignableUsers
Returns a list of users that match the search string and can be assigned issues for all the given projects.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| projectKeys | String     | Comma-separated list of the projects keys we are finding assignable users for.
| username    | String     | The username.
| startAt     | Number     | The index of the first user to return.
| maxResults  | Number     | The maximum number of users to return.

## JIRA.findAssignableUsers
Returns a list of users that match the search string.

| Field             | Type       | Description
|-------------------|------------|----------
| jiraUsername      | credentials| Username in JIRA.
| jiraPassword      | credentials| Password in JIRA.
| jiraName          | String     | Name of JIRA.
| project           | String     | The key of the project we are finding assignable users for.
| issueKey          | String     | The issue key for the issue being edited we need to find assignable users for.
| username          | String     | The username.
| startAt           | Number     | The index of the first user to return.
| maxResults        | Number     | The maximum number of users to return.
| actionDescriptorId| Number     | Action descriptor identifier.

## JIRA.getDefaultColumns
Returns the default columns for the given user.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| username    | String     | Username.

## JIRA.setColumns
Sets the default columns for the given user.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| columns     | String     | Comma separated list of columns.

## JIRA.resetDefaultColumns
Reset the default columns for the given user to the system default.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| username    | String     | Username.

## JIRA.findUsersWithAllPermissions
Returns a list of active users that match the search string and have all specified permissions for the project or issue.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| permissions | String     | Comma-separated list of permissions for project or issue returned users must have.
| projectKey  | String     | The optional project key to search for users with if no issueKey is supplied.
| issueKey    | String     | The issue key for the issue for which returned users have specified permissions.
| username    | String     | The username filter, list includes all users if unspecified.
| startAt     | Number     | The index of the first user to return.
| maxResults  | Number     | The maximum number of users to return.

## JIRA.findUsersByProperty
Returns a list of users that match the search string and/or property.

| Field          | Type       | Description
|----------------|------------|----------
| jiraUsername   | credentials| Username in JIRA.
| jiraPassword   | credentials| Password in JIRA.
| jiraName       | String     | Name of JIRA.
| property       | String     | A query string used to search by property. Example: propertyKey.something.nested=1.
| username       | String     | A query string used to search username, name or e-mail address.
| includeActive  | Boolean    | If true, then active users are included in the results.
| includeInactive| Boolean    | If true, then inactive users are included in the results.
| startAt        | Number     | The index of the first user to return.
| maxResults     | Number     | The maximum number of users to return.

## JIRA.findUsersByUsername
Returns a list of users that match the search string and/or property.

| Field          | Type       | Description
|----------------|------------|----------
| jiraUsername   | credentials| Username in JIRA.
| jiraPassword   | credentials| Password in JIRA.
| jiraName       | String     | Name of JIRA.
| username       | String     | A query string used to search username, name or e-mail address.
| property       | String     | A query string used to search by property. Example: propertyKey.something.nested=1.
| includeActive  | Boolean    | If true, then active users are included in the results.
| includeInactive| Boolean    | If true, then inactive users are included in the results.
| startAt        | Number     | The index of the first user to return.
| maxResults     | Number     | The maximum number of users to return.

## JIRA.findUsersWithBrowsePermission
Returns a list of active users that match the search string.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| username    | String     | The username filter, no users returned if left blank.
| projectKey  | String     | Project key to search for users with if no issueKey is supplied.
| issueKey    | String     | The issue key for the issue being edited we need to find viewable users for.
| startAt     | Number     | The index of the first user to return.
| maxResults  | Number     | The maximum number of users to return.

## JIRA.getUserPropertiesKeysByUserKey
Returns the keys of all properties for the user identified by the key.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| userKey     | String     | Key of the user whose properties are to be returned.

## JIRA.getUserPropertiesKeysByUsername
Returns the keys of all properties for the user identified by the username.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| username    | String     | Username of the user whose properties are to be returned.

## JIRA.deleteUserPropertyByUserKey
Removes the property from the user identified by the key.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| propertyKey | String     | Property key.
| userKey     | String     | Key of the user whose property is to be removed.

## JIRA.deleteUserPropertyByUsername
Removes the property from the user identified by the username.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| propertyKey | String     | Property key.
| username    | String     | Username of the user whose property is to be removed.

## JIRA.setUserPropertyByUserKey
Sets the value of the specified user's property.

| Field        | Type       | Description
|--------------|------------|----------
| jiraUsername | credentials| Username in JIRA.
| jiraPassword | credentials| Password in JIRA.
| jiraName     | String     | Name of JIRA.
| propertyKey  | String     | Property key.
| propertyValue| String     | Property value.
| userKey      | String     | Key of the user whose property is to be set.

## JIRA.setUserPropertyByUsername
Sets the value of the specified user's property.

| Field        | Type       | Description
|--------------|------------|----------
| jiraUsername | credentials| Username in JIRA.
| jiraPassword | credentials| Password in JIRA.
| jiraName     | String     | Name of JIRA.
| propertyKey  | String     | Property key.
| propertyValue| String     | Property value.
| username     | String     | Username of the user whose property is to be set.

## JIRA.getUserPropertyByUserKey
Returns the value of the property with a given key from the user identified by the key or by the id.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| propertyKey | String     | Property key.
| userKey     | String     | Key of the user whose property is to be returned.

## JIRA.getUserPropertyByUsername
Returns the value of the property with a given key from the user identified by the username.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| propertyKey | String     | Property key.
| username    | String     | Username of the user whose property is to be returned.

## JIRA.createVersion
Create a version.

| Field        | Type       | Description
|--------------|------------|----------
| jiraUsername | credentials| Username in JIRA.
| jiraPassword | credentials| Password in JIRA.
| jiraName     | String     | Name of JIRA.
| name         | String     | New version name.
| project      | String     | Project name.
| description  | String     | New version description.
| archived     | Boolean    | is archived.
| released     | Boolean    | Is released.
| releaseDate  | String     | Release date. Example "2017-06-07".
| projectId    | Number     | Project identifier.
| userStartDate| String     | User start date.
| operations   | Array      | Array of JSON objects, simple Links.
| remotelinks  | Array      | Array of JSON objects, remote Entity Links.

#### Example of 'operations' field
```json
[{
	"styleClass": "style_class",
	"iconClass": "icon_class",
	"label": "Operation label",
	"title": "Operation title",
	"href": "http://www.example.com/",
	"weight": "10"
}]
```

#### Example of 'remotelinks' field
```json
[{
	"name": "string",
	"link": "http://www.example.com/"
}]
```

## JIRA.moveVersionByNeighbours
Modify a version's sequence within a project.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| versionId   | String     | Version identifier.
| after       | String     | A version to place this version after. The value should be the self link of another version.

## JIRA.moveVersionByPosition
Modify a version's sequence within a project.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| versionId   | String     | Version identifier.
| position    | String     | An absolute position, one of "Earlier","Later","First","Last".

## JIRA.getVersion
Returns a project version.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| versionId   | String     | Version identifier.
| expand      | String     | Expand parameters.

## JIRA.updateVersion
Modify a version.

| Field              | Type       | Description
|--------------------|------------|----------
| jiraUsername       | credentials| Username in JIRA.
| jiraPassword       | credentials| Password in JIRA.
| jiraName           | String     | Name of JIRA.
| versionId          | String     | Version identifier.
| name               | String     | New version name.
| description        | String     | New version description.
| archived           | Boolean    | is archived.
| released           | Boolean    | Is released.
| releaseDate        | String     | Release date. Example "2010-07-06".
| overdue            | Boolean    | Is overdue.
| project            | String     | Project name.
| projectId          | Number     | Project identifier.
| userStartDate      | String     | User start date.
| userReleaseDate    | String     | User release date. Example "6/Jul/2010".
| moveUnfixedIssuesTo| String     | Move unfixed issues to. The value should be the link.
| operations         | Array      | Array of JSON objects, simple Links.
| remotelinks        | Array      | Array of JSON objects, remote Entity Links.

#### Example of 'operations' field
```json
[{
	"styleClass": "style_class",
	"iconClass": "icon_class",
	"label": "Operation label",
	"title": "Operation title",
	"href": "http://www.example.com/",
	"weight": "10"
}]
```

#### Example of 'remotelinks' field
```json
[{
	"name": "string",
	"link": "http://www.example.com/"
}]
```

## JIRA.deleteVersion
Delete a project version.

| Field               | Type       | Description
|---------------------|------------|----------
| jiraUsername        | credentials| Username in JIRA.
| jiraPassword        | credentials| Password in JIRA.
| jiraName            | String     | Name of JIRA.
| versionId           | String     | Version identifier.
| moveFixIssuesTo     | String     | The version to set fixVersion to on issues where the deleted version is the fix version.
| moveAffectedIssuesTo| String     | The version to set affectedVersion to on issues where the deleted version is the affected version.

## JIRA.mergeVersion
Merge versions.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| versionId   | String     | Version identifier.
| moveIssuesTo| String     | Move issues to.

## JIRA.getVersionRelatedIssues
Returns a bean containing the number of fixed in and affected issues for the given version.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| versionId   | String     | Version identifier.

## JIRA.getVersionUnresolvedIssues
Returns the number of unresolved issues for the given version.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| versionId   | String     | Version identifier.

## JIRA.getRemoteVersionLinksByVersionId
Returns the remote version links associated with the given version ID.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| versionId   | String     | Version identifier.

## JIRA.createRemoteVersionLink
Create a remote version link.

| Field               | Type       | Description
|---------------------|------------|----------
| jiraUsername        | credentials| Username in JIRA.
| jiraPassword        | credentials| Password in JIRA.
| jiraName            | String     | Name of JIRA.
| versionId           | String     | Version identifier.
| globalId            | String     | Link global identifier.
| myCustomLinkProperty| String     | Custom link property.
| colors              | String     | Comma-separated list of colors.
| notes               | Array      | Array of Strings, notes.

## JIRA.updateRemoteVersionLink
Update a remote version link.

| Field               | Type       | Description
|---------------------|------------|----------
| jiraUsername        | credentials| Username in JIRA.
| jiraPassword        | credentials| Password in JIRA.
| jiraName            | String     | Name of JIRA.
| versionId           | String     | Version identifier.
| globalId            | String     | Remote link global identifier.
| myCustomLinkProperty| String     | Custom link property.
| colors              | String     | Comma-separated list of colors.
| notes               | Array      | Array of Strings, notes.

## JIRA.deleteRemoteVersionLinks
Delete all remote version links for a given version ID.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| versionId   | String     | Version identifier.

## JIRA.getRemoteVersionLink
A REST sub-resource representing a remote version link.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| versionId   | String     | Version identifier.
| globalId    | String     | Remote link global identifier.

## JIRA.deleteSingleRemoteVersionLink
Delete a specific remote version link with the given version ID and global ID.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| versionId   | String     | Version identifier.
| globalId    | String     | Remote link global identifier.

## JIRA.getRemoteVersionLinks
Returns the remote version links for a given global ID.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| globalId    | String     | The global ID of the remote resource that is linked to the versions.

## JIRA.getAllWorkflows
Returns all workflows.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| workflowName| String     | Workflow name.

## JIRA.deleteWorkflowProperty
Delete a property from the passed transition on the passed workflow.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| transitionId| String     | Transition identifier.
| key         | String     | The name of the property to add.
| workflowName| String     | The name of the workflow to use.
| workflowMode| String     | The type of workflow to use. One of "live", "draft".

## JIRA.createWorkflowProperty
Add a new property to a transition.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| transitionId| String     | Transition identifier.
| key         | String     | The name of the property to add.
| value       | String     | Value.
| workflowName| String     | The name of the workflow to use.
| workflowMode| String     | The type of workflow to use. One of "live", "draft".

## JIRA.updateWorkflowProperty
Update property to a transition.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| transitionId| String     | Transition identifier.
| key         | String     | The name of the property to add.
| value       | String     | The value of the property to add.
| workflowName| String     | The name of the workflow to use.
| workflowMode| String     | The type of workflow to use. One of "live", "draft".

## JIRA.getWorkflowProperties
Return the property or properties associated with a transition.

| Field              | Type       | Description
|--------------------|------------|----------
| jiraUsername       | credentials| Username in JIRA.
| jiraPassword       | credentials| Password in JIRA.
| jiraName           | String     | Name of JIRA.
| transitionId       | String     | Transition identifier.
| workflowName       | String     | The name of the workflow to use.
| key                | String     | The name of the property key to query.
| workflowMode       | String     | The type of workflow to use. One of "live", "draft".
| includeReservedKeys| Boolean    | Set this to true in order to include the non-editable keys in the response.

## JIRA.createWorkflowScheme
Create a new workflow scheme.

| Field                    | Type       | Description
|--------------------------|------------|----------
| jiraUsername             | credentials| Username in JIRA.
| jiraPassword             | credentials| Password in JIRA.
| jiraName                 | String     | Name of JIRA.
| name                     | String     | New workflow scheme name.
| description              | String     | New workflow scheme description.
| defaultWorkflow          | String     | Default workflow name.
| issueTypeMappings        | JSON       | JSON Object, issue type mappings.
| originalDefaultWorkflow  | String     | Original default workflow.
| originalIssueTypeMappings| JSON       | JSON Object, original issue type mappings.
| draft                    | Boolean    | Draft.
| lastModified             | String     | Last modified.
| updateDraftIfNeeded      | Boolean    | If set to true, indicate that the draft should be created/updated when the actual scheme cannot be edited.
| lastModifiedUser         | JSON       | JSON Object, last modified user.
| issueTypes               | JSON       | JSON Object, issue types.

#### Example of 'issueTypeMappings' field
```json
{
	"IsueTypeId": "WorkflowName"
}
```

#### Example of 'originalIssueTypeMappings' field
```json
{
	"IssueTypeId": "WorkflowName2"
}
```

#### Example of 'lastModifiedUser' field
```json
{
	"key": "fred",
	"name": "Fred",
	"displayName": "Fred F. User",
	"accountId": "99:27935d01-92a7-4687-8272-a9b8d3b2ae2e",
	"emailAddress": "fred@example.com",
	"avatarUrls": {
		"32x32": "http://example.com/jira/images/fred.png"
	},
	"active": true,
	"timeZone": "Australia/Sydney",
	"locale": "en-AU",
	"groups": {
		"size": 331,
		"max-results": 50,
		"items": [{
			"name": "Group1"
		}]
	},
	"applicationRoles": {
		"size": 331,
		"max-results": 50,
		"items": [{
			"name": "Role1"
		}]
	}
}
```

#### Example of 'issueTypes' field
```json
{
	"issuetype1": {
		"name": "issuetypeName",
		"description": "issuetypeDescription",
		"subtask": true,
		"avatarId": 10002,
		"iconUrl": "http://example.com/jira/images/icons/issuetypes/task.png"
	}
}
```

## JIRA.deleteWorkflowScheme
Delete the passed workflow scheme.

| Field           | Type       | Description
|-----------------|------------|----------
| jiraUsername    | credentials| Username in JIRA.
| jiraPassword    | credentials| Password in JIRA.
| jiraName        | String     | Name of JIRA.
| workflowSchemeId| String     | Workflow scheme identifier.

## JIRA.getWorkflowScheme
Returns the requested workflow scheme to the caller.

| Field              | Type       | Description
|--------------------|------------|----------
| jiraUsername       | credentials| Username in JIRA.
| jiraPassword       | credentials| Password in JIRA.
| jiraName           | String     | Name of JIRA.
| workflowSchemeId   | String     | Workflow scheme identifier.
| returnDraftIfExists| Boolean    | When true indicates that a scheme's draft.

## JIRA.updateWorkflowScheme
Update the passed workflow scheme.

| Field                    | Type       | Description
|--------------------------|------------|----------
| jiraUsername             | credentials| Username in JIRA.
| jiraPassword             | credentials| Password in JIRA.
| jiraName                 | String     | Name of JIRA.
| workflowSchemeId         | Number     | Workflow scheme identifier.
| name                     | String     | New workflow scheme name.
| description              | String     | New workflow scheme description.
| defaultWorkflow          | String     | Default workflow name.
| issueTypeMappings        | JSON       | JSON Object, issue type mappings.
| updateDraftIfNeeded      | Boolean    | If set to true, indicate that the draft should be created/updated when the actual scheme cannot be edited.
| originalDefaultWorkflow  | String     | Original default workflow.
| originalIssueTypeMappings| JSON       | JSON Object, original issue type mappings.
| draft                    | Boolean    | Draft.
| lastModifiedUser         | JSON       | JSON Object, last modified user.
| lastModified             | String     | Last modified.
| issueTypes               | JSON       | JSON Object, issue types.

#### Example of 'issueTypeMappings' field
```json
{
	"IsueTypeId": "WorkflowName"
}
```

#### Example of 'originalIssueTypeMappings' field
```json
{
	"IssueTypeId": "WorkflowName2"
}
```

#### Example of 'lastModifiedUser' field
```json
{
	"key": "fred",
	"name": "Fred",
	"displayName": "Fred F. User",
	"accountId": "99:27935d01-92a7-4687-8272-a9b8d3b2ae2e",
	"emailAddress": "fred@example.com",
	"avatarUrls": {
		"32x32": "http://example.com/jira/images/fred.png"
	},
	"active": true,
	"timeZone": "Australia/Sydney",
	"locale": "en-AU",
	"groups": {
		"size": 331,
		"max-results": 50,
		"items": [{
			"name": "Group1"
		}]
	},
	"applicationRoles": {
		"size": 331,
		"max-results": 50,
		"items": [{
			"name": "Role1"
		}]
	}
}
```

#### Example of 'issueTypes' field
```json
{
	"issuetype1": {
		"name": "issuetypeName",
		"description": "issuetypeDescription",
		"subtask": true,
		"avatarId": 10002,
		"iconUrl": "http://example.com/jira/images/icons/issuetypes/task.png"
	}
}
```

## JIRA.createDraftForScheme
Create a draft for the passed scheme. The draft will be a copy of the state of the parent.

| Field           | Type       | Description
|-----------------|------------|----------
| jiraUsername    | credentials| Username in JIRA.
| jiraPassword    | credentials| Password in JIRA.
| jiraName        | String     | Name of JIRA.
| workflowSchemeId| String     | Workflow scheme identifier.

## JIRA.deleteDefaultWorkflowScheme
Remove the default workflow from the passed workflow scheme.

| Field              | Type       | Description
|--------------------|------------|----------
| jiraUsername       | credentials| Username in JIRA.
| jiraPassword       | credentials| Password in JIRA.
| jiraName           | String     | Name of JIRA.
| workflowSchemeId   | String     | Workflow scheme identifier.
| updateDraftIfNeeded| Boolean    | When true will create and return a draft when the workflow scheme cannot be edited.

## JIRA.updateDefaultWorkflowScheme
Set the default workflow for the passed workflow scheme.

| Field              | Type       | Description
|--------------------|------------|----------
| jiraUsername       | credentials| Username in JIRA.
| jiraPassword       | credentials| Password in JIRA.
| jiraName           | String     | Name of JIRA.
| workflowSchemeId   | String     | Workflow scheme identifier.
| workflow           | String     | Workflow name.
| updateDraftIfNeeded| Boolean    | If set to true, indicate that the draft should be created/updated when the actual scheme cannot be edited.

## JIRA.getDefaultWorkflowScheme
Return the default workflow from the passed workflow scheme.

| Field              | Type       | Description
|--------------------|------------|----------
| jiraUsername       | credentials| Username in JIRA.
| jiraPassword       | credentials| Password in JIRA.
| jiraName           | String     | Name of JIRA.
| workflowSchemeId   | String     | Workflow scheme identifier.
| returnDraftIfExists| Boolean    | When true indicates that a scheme's draft.

## JIRA.getDraftWorkflowScheme
Returns the requested draft workflow scheme to the caller.

| Field           | Type       | Description
|-----------------|------------|----------
| jiraUsername    | credentials| Username in JIRA.
| jiraPassword    | credentials| Password in JIRA.
| jiraName        | String     | Name of JIRA.
| workflowSchemeId| String     | Workflow scheme identifier.

## JIRA.deleteDraftWorkflowScheme
Delete the passed draft workflow scheme.

| Field           | Type       | Description
|-----------------|------------|----------
| jiraUsername    | credentials| Username in JIRA.
| jiraPassword    | credentials| Password in JIRA.
| jiraName        | String     | Name of JIRA.
| workflowSchemeId| String     | Workflow scheme identifier.

## JIRA.updateDraftWorkflowScheme
Update a draft workflow scheme.

| Field                    | Type       | Description
|--------------------------|------------|----------
| jiraUsername             | credentials| Username in JIRA.
| jiraPassword             | credentials| Password in JIRA.
| jiraName                 | String     | Name of JIRA.
| workflowSchemeId         | Number     | Workflow scheme identifier.
| name                     | String     | Updated workflow scheme name.
| description              | String     | Updated workflow scheme description.
| defaultWorkflow          | String     | Default workflow name.
| issueTypeMappings        | JSON       | JSON Object, issue type mappings.
| updateDraftIfNeeded      | Boolean    | If set to true, indicate that the draft should be created/updated when the actual scheme cannot be edited.
| originalDefaultWorkflow  | String     | Original default workflow.
| originalIssueTypeMappings| JSON       | JSON Object, original issue type mappings.
| draft                    | Boolean    | Draft.
| lastModified             | String     | Last modified.
| lastModifiedUser         | JSON       | JSON Object, last modified user.
| issueTypes               | JSON       | JSON Object, issue types.

#### Example of 'issueTypeMappings' field
```json
{
	"IsueTypeId": "WorkflowName"
}
```

#### Example of 'originalIssueTypeMappings' field
```json
{
	"IssueTypeId": "WorkflowName2"
}
```

#### Example of 'lastModifiedUser' field
```json
{
	"key": "fred",
	"name": "Fred",
	"displayName": "Fred F. User",
	"accountId": "99:27935d01-92a7-4687-8272-a9b8d3b2ae2e",
	"emailAddress": "fred@example.com",
	"avatarUrls": {
		"32x32": "http://example.com/jira/images/fred.png"
	},
	"active": true,
	"timeZone": "Australia/Sydney",
	"locale": "en-AU",
	"groups": {
		"size": 331,
		"max-results": 50,
		"items": [{
			"name": "Group1"
		}]
	},
	"applicationRoles": {
		"size": 331,
		"max-results": 50,
		"items": [{
			"name": "Role1"
		}]
	}
}
```

#### Example of 'issueTypes' field
```json
{
	"issuetype1": {
		"name": "issuetypeName",
		"description": "issuetypeDescription",
		"subtask": true,
		"avatarId": 10002,
		"iconUrl": "http://example.com/jira/images/icons/issuetypes/task.png"
	}
}
```

## JIRA.getDefaultDraftWorkflowScheme
Return the default workflow from the passed draft workflow scheme to the caller.

| Field           | Type       | Description
|-----------------|------------|----------
| jiraUsername    | credentials| Username in JIRA.
| jiraPassword    | credentials| Password in JIRA.
| jiraName        | String     | Name of JIRA.
| workflowSchemeId| String     | Workflow scheme identifier.

## JIRA.deleteDefaultDraftWorkflowScheme
Remove the default workflow from the passed draft workflow scheme.

| Field           | Type       | Description
|-----------------|------------|----------
| jiraUsername    | credentials| Username in JIRA.
| jiraPassword    | credentials| Password in JIRA.
| jiraName        | String     | Name of JIRA.
| workflowSchemeId| String     | Workflow scheme identifier.

## JIRA.updateDefaultDraftWorkflowScheme
Set the default workflow for the passed draft workflow scheme.

| Field              | Type       | Description
|--------------------|------------|----------
| jiraUsername       | credentials| Username in JIRA.
| jiraPassword       | credentials| Password in JIRA.
| jiraName           | String     | Name of JIRA.
| workflowSchemeId   | String     | Workflow scheme identifier.
| workflow           | String     | Workflow name.
| updateDraftIfNeeded| Boolean    | If set to true, indicate that the draft should be created/updated when the actual scheme cannot be edited.

## JIRA.getDraftSchemeIssueType
Returns the issue type mapping for the passed draft workflow scheme.

| Field           | Type       | Description
|-----------------|------------|----------
| jiraUsername    | credentials| Username in JIRA.
| jiraPassword    | credentials| Password in JIRA.
| jiraName        | String     | Name of JIRA.
| workflowSchemeId| String     | Workflow scheme identifier.
| issueType       | String     | Issue type.

## JIRA.deleteDraftSchemeIssueType
Remove the specified issue type mapping from the draft scheme.

| Field           | Type       | Description
|-----------------|------------|----------
| jiraUsername    | credentials| Username in JIRA.
| jiraPassword    | credentials| Password in JIRA.
| jiraName        | String     | Name of JIRA.
| workflowSchemeId| String     | Workflow scheme identifier.
| issueType       | String     | Issue type.

## JIRA.setDraftSchemeIssueType
Set the issue type mapping for the passed draft scheme.

| Field              | Type       | Description
|--------------------|------------|----------
| jiraUsername       | credentials| Username in JIRA.
| jiraPassword       | credentials| Password in JIRA.
| jiraName           | String     | Name of JIRA.
| workflowSchemeId   | String     | Workflow scheme identifier.
| issueType          | String     | Issue type.
| workflow           | String     | Workflow name.
| updateDraftIfNeeded| Boolean    | If set to true, indicate that the draft should be created/updated when the actual scheme cannot be edited.

## JIRA.getDraftWorkflow
Returns the draft workflow mappings or requested mapping to the caller.

| Field           | Type       | Description
|-----------------|------------|----------
| jiraUsername    | credentials| Username in JIRA.
| jiraPassword    | credentials| Password in JIRA.
| jiraName        | String     | Name of JIRA.
| workflowSchemeId| String     | Workflow scheme identifier.
| workflowName    | String     | The workflow mapping to return.

## JIRA.deleteDraftWorkflowMapping
Delete the passed workflow from the draft workflow scheme.

| Field           | Type       | Description
|-----------------|------------|----------
| jiraUsername    | credentials| Username in JIRA.
| jiraPassword    | credentials| Password in JIRA.
| jiraName        | String     | Name of JIRA.
| workflowSchemeId| String     | Workflow scheme identifier.
| workflowName    | String     | The name of the workflow to delete.

## JIRA.updateDraftWorkflowMapping
Update the draft scheme to include the passed mapping.

| Field              | Type       | Description
|--------------------|------------|----------
| jiraUsername       | credentials| Username in JIRA.
| jiraPassword       | credentials| Password in JIRA.
| jiraName           | String     | Name of JIRA.
| workflowSchemeId   | String     | Workflow scheme identifier.
| workflowName       | String     | The name of the workflow mapping to update.
| workflow           | String     | Workflow name.
| issueTypes         | Array      | Array of Strings, issue types array.
| updateDraftIfNeeded| Boolean    | If set to true, indicate that the draft should be created/updated when the actual scheme cannot be edited.
| defaultMapping     | Boolean    | Use default mapping.

#### Example of 'issueTypes' field
```json
[
	"IssueTypeId"
]
```

## JIRA.getWorkflowSchemeIssueType
Returns the issue type mapping for the passed workflow scheme.

| Field              | Type       | Description
|--------------------|------------|----------
| jiraUsername       | credentials| Username in JIRA.
| jiraPassword       | credentials| Password in JIRA.
| jiraName           | String     | Name of JIRA.
| workflowSchemeId   | String     | Workflow scheme identifier.
| issueType          | String     | Issue type.
| returnDraftIfExists| Boolean    | When true indicates that a scheme's draft.

## JIRA.deleteWorkflowSchemeIssueType
Remove the specified issue type mapping from the scheme.

| Field              | Type       | Description
|--------------------|------------|----------
| jiraUsername       | credentials| Username in JIRA.
| jiraPassword       | credentials| Password in JIRA.
| jiraName           | String     | Name of JIRA.
| workflowSchemeId   | String     | Workflow scheme identifier.
| issueType          | String     | Issue type.
| updateDraftIfNeeded| Boolean    | When true will create and return a draft when the workflow scheme cannot be edited.

## JIRA.setWorkflowSchemeIssueType
Set the issue type mapping for the passed scheme.

| Field              | Type       | Description
|--------------------|------------|----------
| jiraUsername       | credentials| Username in JIRA.
| jiraPassword       | credentials| Password in JIRA.
| jiraName           | String     | Name of JIRA.
| workflowSchemeId   | String     | Workflow scheme identifier.
| issueType          | String     | Issue type.
| workflow           | String     | Workflow name.
| updateDraftIfNeeded| Boolean    | If set to true, indicate that the draft should be created/updated when the actual scheme cannot be edited.

## JIRA.getWorkflow
Returns the workflow mappings or requested mapping to the caller for the passed scheme.

| Field              | Type       | Description
|--------------------|------------|----------
| jiraUsername       | credentials| Username in JIRA.
| jiraPassword       | credentials| Password in JIRA.
| jiraName           | String     | Name of JIRA.
| workflowSchemeId   | String     | Workflow scheme identifier.
| workflowName       | String     | The workflow mapping to return.
| returnDraftIfExists| Boolean    | When true indicates that a scheme's draft.

## JIRA.deleteWorkflow
Delete the passed workflow from the workflow scheme.

| Field              | Type       | Description
|--------------------|------------|----------
| jiraUsername       | credentials| Username in JIRA.
| jiraPassword       | credentials| Password in JIRA.
| jiraName           | String     | Name of JIRA.
| workflowSchemeId   | String     | Workflow scheme identifier.
| workflowName       | String     | The name of the workflow to delete.
| updateDraftIfNeeded| Boolean    | Flag to indicate if a draft should be created if necessary to delete the workflowfrom the scheme.

## JIRA.updateWorkflowMapping
Update the scheme to include the passed mapping.

| Field              | Type       | Description
|--------------------|------------|----------
| jiraUsername       | credentials| Username in JIRA.
| jiraPassword       | credentials| Password in JIRA.
| jiraName           | String     | Name of JIRA.
| workflowSchemeId   | String     | Workflow scheme identifier.
| workflowName       | String     | The name of the workflow mapping to update.
| workflow           | String     | Workflow name.
| issueTypes         | Array      | Array of Strings, issue types.
| updateDraftIfNeeded| Boolean    | If set to true, indicate that the draft should be created/updated when the actual scheme cannot be edited.
| defaultMapping     | Boolean    | Default mapping.

## JIRA.getWorklogsDeletedSince
Returns worklogs id and delete time of worklogs that was deleted since given time.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| since       | Number     | A date time in unix timestamp format since when deleted worklogs will be returned.

## JIRA.getWorklogs
Returns worklogs for given worklog ids. Only worklogs to which the calling user has permissions, will be included in the result.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| ids         | String     | Comma-separated list of identifiers.
| expand      | String     | Comma-separated list of parameters to expand.

## JIRA.getWorklogsModifiedSince
Returns worklogs id and update time of worklogs that was updated since given time.

| Field       | Type       | Description
|-------------|------------|----------
| jiraUsername| credentials| Username in JIRA.
| jiraPassword| credentials| Password in JIRA.
| jiraName    | String     | Name of JIRA.
| since       | Number     | A date time in unix timestamp format since when updated worklogs will be returned.
| expand      | String     | Optional comma-separated list of parameters to expand.
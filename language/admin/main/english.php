<?php

/**
**********************
** BTManager v3.0.1 **
**********************
** http://www.btmanager.org/
** https://github.com/blackheart1/BTManager
** http://demo.btmanager.org/index.php
** Licence Info: GPL
** Copyright (C) 2018
** Formerly Known As phpMyBitTorrent
** Created By Antonio Anzivino (aka DJ Echelon)
** And Joe Robertson (aka joeroberts)
** Project Leaders: Black_heart, Thor.
** File main/english.php 2018-04-01 08:30:00 Thor
**
** CHANGES
**
** 2018-02-24 - Added New Masthead
** 2018-02-24 - Added New !defined('IN_PMBT')
** 2018-02-24 - Fixed Spelling
** 2018-04-01 - Amended the Wording of some Sentences
** 2018-04-01 - Amended !defined('IN_PMBT') Corrected Path
** 2018-04-01 - Removed define Language & Changed to Correct Format & Amended templates/admin/main.html
**/

if (!defined('IN_PMBT'))
{
    include_once './../../../security.php';
    die ("Error 404 - Page Not Found");
}

if (empty($lang) || !is_array($lang))
{
    $lang = array();
}

$lang = array_merge($lang, array(
    'ACP_EMAIL_SETTINGS'         => 'email Settings',
    'MAIN_TEXT'                  => 'Welcome to %s ',
    'MAIN_INTRO_EXP'             => 'Thank you for choosing BTManager<br /><br />
    BTManager Features a Fully Fledged BitTorrent Tracker written in PHP, and Supports External Torrent Indexing, DHT, Compact Announce, Alternate Links (eD2K, Magnet), HTTP Basic Authentication, Passkey Authentication, Embedded HTML Editor, Mass Torrent Upload and much, much more.',

    'MENU_TOGGLE'                => 'Hide or Display the Side Menu',
    'FAILED_LOGIN'               => 'Failed Login by User <strong>%s</strong>',
    'ACP_P_RATIO_WARN'           => 'Ratio Monitoring System',
    'SITTINGS_SAVED'             => 'Settings have been Saved for <strong>%s</strong>',
    'DIRECTION'                  => 'ltr',
    'CONTENT_ENCODING'           => 'UTF-8',

    'DENIACC'                    => 'It seems that you are trying to Access a Section <strong>%s</strong> that your Privileges DO NOT Allow.<br />This Action has been Logged!',

    '_SITE_STATS'                => 'Site Statistics',
    'BTSTATS'                    => 'Statistics',
    '_NUMBER_POSTS'              => 'Number of Posts',
    '_POSTS_PER_DAY'             => 'Posts Per Day',
    '_NUMBER_TOPICS'             => 'Number of Topics',
    'TOPICS_PER_DAY'             => 'Topics Per Day',
    '_USERS_PER_DAY'             => 'Users Per Day',
    '_TORRENTS_PER_DAY'          => 'Torrents Per Day',
    '_NUMBER_FILES'              => 'Number of Attachments',
    '_FILES_PER_DAY'             => 'Attachments Per Day',
    '_SITE_STARTED'              => 'Board Started',
    '_AVATAR_DIR_SIZE'           => 'Avatar Directory Size',
    '_DATABASE_SIZE'             => 'Database Size',
    '_UPLOAD_IMAGE_DIR_SIZE'     => 'Image Upload Directory Size',
    '_DATABASE_SERVER_INFO'      => 'Database Server',
    '_GZIP_COMPRESSION'          => 'GZip Compression',
    '_SITE_VERSION'              => 'Site Version',
    '_NUMBER_ORPHAN'             => 'Orphan Attachments',
    '_VERSIONCHECK_FORCE_UPDATE' => 'Check for Latest Version',
    '_STATISTIC_RESYNC_OPTIONS'  => 'Resynchronise or Reset Statistics',
    '_RESET_ONLINE'              => 'Reset Most Users Ever Online',
    '_RESET_DATE'                => 'Reset Site\'s Start Date',

    'SETTING_TOO_LOW'            => 'The Provided Value for the Setting \'%1$s\' is too Low.  The Minimum Acceptable Value is %2$d.',

    'SETTING_TOO_BIG'            => 'The Provided Value for the Setting \'%1$s\' is too High.  The Maximum Acceptable Value is %2$d.',

    'SETTING_TOO_LONG'           => 'The Provided Value for the Setting \'%1$s\' is too Long.  The Maximum Acceptable Length is %2$d.',

    'SETTING_TOO_SHORT'          => 'The Provided Value for the Setting \'%1$s\' is too Short.  The Minimum Acceptable Length is %2$d.',

    '_RESYNC_STATS'              => 'Resynchronise Statistics',
    '_RESYNC_STATS_EXPLAIN'      => 'Resynchronise the Site\'s Statistics',
    '_PURGE_CACHE'               => 'Purge the Cache',
    '_PURGE_CACHE_CONFIRM'       => 'Are you sure you wish to Purge the Cache?',
    '_PURGE_CACHE_EXPLAIN'       => 'Purge ALL Cache Related Items, this includes any Cached Template Files or Queries.',
    '_ADMIN_LOG'                 => 'Logged Administrator Actions',

    '_ADMIN_LOG_INDEX_EXPLAIN'   => 'This gives an Overview of the Last Five Actions carried out by Board Administrators.  A Full Copy of the Log can be Viewed from the appropriate Menu Item or Following the Link below.',

    '_RESYNC_STATS'              => 'Resynchronise Statistics',
    '_RESYNC_STATS_CONFIRM'      => 'Are you sure you wish to Resynchronise Statistics?',
    '_RESYNC_STATS_EXPLAIN'      => 'Recalculates the Total Number of Posts, Topics, Users and Files.',

    'WRITABLE_CONFIG'            => 'Your Configuration File (config.php) is currently Globally Writeable.  We strongly encourage you to Change the Permissions to 640 or at least to 644 (for example: <a href=\'http://en.wikipedia.org/wiki/Chmod\' rel=\'external\'>chmod</a> 640 config.php).',

    '_VERSIONCHECK_FAIL'         => 'Failed to Obtain Latest Version Information.',
    '_VERSIONCHECK_FORCE_UPDATE' => 'Re-Check Version',
    '_VIEW_ADMIN_LOG'            => 'View Administrator Log',
    '_VIEW_INACTIVE_USERS'       => 'View Inactive Users',
    'FORUMS'                     => 'Forums',
    'USERGROUPS'                 => 'Groups',
    'SELECT_ANONYMOUS'           => 'Select Anonymous User',
    'USERNAMES_EXPLAIN'          => 'Place each Username on a Separate Line.',
    'ERR_NOT_NUMERIC'            => 'The Value you entered for [ %1$s ] is NOT Numeric [ %2$s ] Please go back and enter a Numeric Value eg \'1,2,3\'',

    'PARSE_BBCODE'               => 'Parse BBCode',
    'PARSE_SMILIES'              => 'Parse Smilies',
    'PARSE_URLS'                 => 'Parse Links',

    'LOG_ACL_ACCESS_NOTALLOW'      => '<strong>User Attempted to Access an Area their NOT Allowed in</strong><br /> %s',
    'LOG_ACL_ADD_USER_GLOBAL_U_'   => '<strong>Added or Edited User\'s User Permissions</strong><br /> %s',
    'LOG_ACL_ADD_GROUP_GLOBAL_U_'  => '<strong>Added or Edited Group\'s User Permissions</strong><br /> %s',
    'LOG_ACL_ADD_USER_GLOBAL_M_'   => '<strong>Added or Edited User\'s Global Moderator Permissions</strong><br /> %s',
    'LOG_ACL_ADD_GROUP_GLOBAL_M_'  => '<strong>Added or Edited Group\'s Global Moderator Permissions</strong><br /> %s',
    'LOG_ACL_ADD_USER_GLOBAL_A_'   => '<strong>Added or Edited User\'s Administrator Permissions</strong><br /> %s',
    'LOG_ACL_ADD_GROUP_GLOBAL_A_'  => '<strong>Added or Edited Group\'s Administrator Permissions</strong><br /> %s',

    'LOG_ACL_ADD_ADMIN_GLOBAL_A_'  => '<strong>Added or Edited Administrators</strong><br /> %s',
    'LOG_ACL_ADD_MOD_GLOBAL_M_'    => '<strong>Added or Edited Global Moderators</strong><br /> %s',

    'LOG_ACL_ADD_USER_LOCAL_F_'    => '<strong>Added or Edited User\'s Forum Access</strong> from %1$s to %2$s',
    'LOG_ACL_ADD_USER_LOCAL_M_'    => '<strong>Added or Edited User\'s Forum Moderator Access</strong> from %1$s to %2$s',
    'LOG_ACL_ADD_GROUP_LOCAL_F_'   => '<strong>Added or Edited Group\'s Forum Access</strong> from %1$s to %2$s',
    'LOG_ACL_ADD_GROUP_LOCAL_M_'   => '<strong>Added or Edited Group\'s Forum Moderator Access</strong> from %1$s to %2$s',

    'LOG_ACL_ADD_MOD_LOCAL_M_'     => '<strong>Added or Edited Moderators</strong> from %1$s to %2$s',
    'LOG_ACL_ADD_FORUM_LOCAL_F_'   => '<strong>Added or Edited Forum Permissions</strong> from %1$s to %2$s',

    'LOG_ACL_DEL_ADMIN_GLOBAL_A_'  => '<strong>Removed Administrators</strong><br /> %s',
    'LOG_ACL_DEL_MOD_GLOBAL_M_'    => '<strong>Removed Global Moderators</strong><br /> %s',
    'LOG_ACL_DEL_MOD_LOCAL_M_'     => '<strong>Removed Moderators</strong> from %1$s to %2$s',
    'LOG_ACL_DEL_FORUM_LOCAL_F_'   => '<strong>Removed User/Group Forum Permissions</strong> from %1$s to %2$s',

    'LOG_ACL_TRANSFER_PERMISSIONS' => '<strong>Permissions Transferred from</strong> to %s',
    'LOG_ACL_RESTORE_PERMISSIONS'  => '<strong>Own Permissions Restored after using Permissions from</strong> to %s',

    'LOG_ADMIN_AUTH_FAIL'          => '<strong>Failed Administration Login Attempt</strong>',
    'LOG_ADMIN_AUTH_SUCCESS'       => '<strong>Successful Administration Login</strong>',

    'LOG_ATTACHMENTS_DELETED'  => '<strong>Removed User Attachments</strong><br /> %s',
    'LOG_ATTACH_EXT_ADD'       => '<strong>Added or Edited Attachment Extension</strong><br /> %s',
    'LOG_ATTACH_EXT_DEL'       => '<strong>Removed Attachment Extension</strong><br /> %s',
    'LOG_ATTACH_EXT_UPDATE'    => '<strong>Updated Attachment Extension</strong><br /> %s',
    'LOG_ATTACH_EXTGROUP_ADD'  => '<strong>Added Extension Group</strong><br /> %s',
    'LOG_ATTACH_EXTGROUP_EDIT' => '<strong>Edited Extension Group</strong><br /> %s',
    'LOG_ATTACH_EXTGROUP_DEL'  => '<strong>Removed Extension Group</strong><br /> %s',
    'LOG_ATTACH_FILEUPLOAD'    => '<strong>Orphan File Uploaded to Post</strong><br /> ID %1$d - %2$s',
    'LOG_ATTACH_ORPHAN_DEL'    => '<strong>Orphan Files Deleted</strong><br /> %s',
    'LOG_ANNOUNCE'             => '<strong>Announce Error</strong><br /> %s %s',

    'LOG_BAN_EXCLUDE_USER'     => '<strong>Excluded User from being Banned</strong> for Reason <em>%1$s</em><br /> %2$s',
    'LOG_BAN_EXCLUDE_IP'       => '<strong>Excluded IP from being Banned</strong> for Reason <em>%1$s</em><br /> %2$s',
    'LOG_BAN_EXCLUDE_EMAIL'    => '<strong>Excluded email from being Banned</strong> for Reason <em>%1$s</em><br /> %2$s',
    'LOG_BAN_USER'             => '<strong>Banned User</strong> for Reason <em>%1$s</em><br /> %2$s',
    'LOG_BAN_IP'               => '<strong>Banned IP</strong> for Reason <em>%1$s</em><br /> %2$s',
    'LOG_BAN_EMAIL'            => '<strong>Banned email</strong> for Reason <em>%1$s</em><br /> %2$s',
    'LOG_UNBAN_USER'           => '<strong>Unban User</strong><br /> %s',
    'LOG_UNBAN_IP'             => '<strong>Unban IP</strong><br /> %s',
    'LOG_UNBAN_EMAIL'          => '<strong>Unban email</strong><br /> %s',

    'LOG_BBCODE_ADD'           => '<strong>Added New BBCode</strong><br /> %s',
    'LOG_BBCODE_EDIT'          => '<strong>Edited BBCode</strong><br /> %s',
    'LOG_BBCODE_DELETE'        => '<strong>Deleted BBCode</strong><br /> %s',

    'LOG_BOT_ADDED'            => '<strong>New BOT Added</strong><br /> %s',
    'LOG_BOT_DELETE'           => '<strong>Deleted BOT</strong><br /> %s',
    'LOG_BOT_UPDATED'          => '<strong>Existing BOT Updated</strong><br /> %s',

    'LOG_CLEAR_ADMIN'          => '<strong>Cleared Administration Log</strong>',
    'LOG_CLEAR_CRITICAL'       => '<strong>Cleared Error Log</strong>',
    'LOG_CLEAR_MOD'            => '<strong>Cleared Moderator Log</strong>',
    'LOG_CLEAR_USER'           => '<strong>Cleared User Log</strong><br /> %s',
    'LOG_CLEAR_USERS'          => '<strong>Cleared User Logs</strong>',

    'LOG_CONFIG_ATTACH'        => '<strong>Altered Attachment Settings</strong>',
    'LOG_CACHE_SETTING_UPDATE' => '<strong>Altered Cache Settings</strong>',
    'LOG_CONFIG_AUTH'          => '<strong>Altered Authentication Settings</strong>',
    'LOG_CONFIG_AVATAR'        => '<strong>Altered Avatar Settings</strong>',
    'LOG_CONFIG_COOKIE'        => '<strong>Altered Cookie Settings</strong>',
    'LOG_CONFIG_EMAIL'         => '<strong>Altered email Settings</strong>',
    'LOG_CONFIG_FEATURES'      => '<strong>Altered Board Features</strong>',
    'LOG_CONFIG_LOAD'          => '<strong>Altered Load Settings</strong>',
    'LOG_CONFIG_MESSAGE'       => '<strong>Altered Private Message Settings</strong>',
    'LOG_CONFIG_POST'          => '<strong>Altered Post Settings</strong>',
    'LOG_CONFIG_REGISTRATION'  => '<strong>Altered User Registration Settings</strong>',
    'LOG_CONFIG_FEED'          => '<strong>Altered Syndication Feeds Settings</strong>',
    'LOG_CONFIG_SEARCH'        => '<strong>Altered Search Settings</strong>',
    'LOG_CONFIG_SECURITY'      => '<strong>Altered Security Settings</strong>',
    'LOG_CONFIG_SERVER'        => '<strong>Altered Server Settings</strong>',
    'LOG_CONFIG_SETTINGS'      => '<strong>Altered Board Settings</strong>',
    'LOG_CONFIG_SIGNATURE'     => '<strong>Altered Signature Settings</strong>',
    'LOG_CONFIG_VISUAL'        => '<strong>Altered Anti Spam BOT Settings</strong>',

    'LOG_APPROVE_TOPIC'        => '<strong>Approved Topic</strong><br /> %s',
    'LOG_BUMP_TOPIC'           => '<strong>User Bumped Topic</strong><br /> %s',
    'LOG_DELETE_POST'          => '<strong>Deleted Post \'%1$s\' Written by</strong><br /> %2$s',
    'LOG_DELETE_SHADOW_TOPIC'  => '<strong>Deleted Shadow Topic</strong><br /> %s',
    'LOG_DELETE_TOPIC'         => '<strong>Deleted Topic \'%1$s\' Written by</strong><br /> %2$s',
    'LOG_FORK'                 => '<strong>Copied Topic</strong><br /> from %s',
    'LOG_LOCK'                 => '<strong>Locked Topic</strong><br /> %s',
    'LOG_LOCK_POST'            => '<strong>Locked Post</strong><br /> %s',
    'LOG_MERGE'                => '<strong>Merged Posts</strong> into Topic<br /> %s',
    'LOG_MOVE'                 => '<strong>Moved Topic</strong><br /> from %1$s to %2$s',
    'LOG_PM_REPORT_CLOSED'     => '<strong>Closed PM Report</strong><br /> %s',
    'LOG_PM_REPORT_DELETED'    => '<strong>Deleted PM Report</strong><br /> %s',
    'LOG_POST_APPROVED'        => '<strong>Approved Post</strong><br /> %s',
    'LOG_POST_DISAPPROVED'     => '<strong>Unapproved Post \'%1$s\' with the following Reason</strong><br /> %2$s',
    'LOG_POST_EDITED'          => '<strong>Edited Post \'%1$s\' Written by</strong><br /> %2$s',
    'LOG_REPORT_CLOSED'        => '<strong>Closed Report</strong><br /> %s',
    'LOG_REPORT_DELETED'       => '<strong>Deleted Report</strong><br /> %s',
    'LOG_SPLIT_DESTINATION'    => '<strong>Moved Split Posts</strong><br /> to %s',
    'LOG_SPLIT_SOURCE'         => '<strong>Split Posts</strong><br /> from %s',

    'LOG_TOPIC_APPROVED'       => '<strong>Approved Topic</strong><br /> %s',
    'LOG_TOPIC_DISAPPROVED'    => '<strong>Unapproved Topic \'%1$s\' with the following Reason</strong><br />%2$s',
    'LOG_TOPIC_RESYNC'         => '<strong>Resynchronised Topic Counters</strong><br /> %s',
    'LOG_TOPIC_TYPE_CHANGED'   => '<strong>Changed Topic Type</strong><br /> %s',
    'LOG_UNLOCK'               => '<strong>Unlocked Topic</strong><br /> %s',
    'LOG_UNLOCK_POST'          => '<strong>Unlocked Post</strong><br /> %s',

    'LOG_DISALLOW_ADD'         => '<strong>Added Username to Blacklist</strong><br /> %s',
    'LOG_DISALLOW_DELETE'      => '<strong>Deleted Username to Blacklist</strong>',

    'LOG_DB_BACKUP'            => '<strong>Database Backup</strong>',
    'LOG_DB_DELETE'            => '<strong>Deleted Database Backup</strong>',
    'LOG_DB_RESTORE'           => '<strong>Restored Database Backup</strong>',

    'LOG_DOWNLOAD_EXCLUDE_IP'  => '<strong>Excluded IP/Hostname from Download List</strong><br /> %s',
    'LOG_DOWNLOAD_IP'          => '<strong>Added IP/Hostname to Download List</strong><br /> %s',
    'LOG_DOWNLOAD_REMOVE_IP'   => '<strong>Removed IP/Hostname from Download List</strong><br /> %s',

    'LOG_ERROR_JABBER'         => '<strong>Jabber Error</strong><br /> %s',
    'LOG_ERROR_EMAIL'          => '<strong>email Error</strong><br /> %s',

    'LOG_FORUM_ADD'                        => '<strong>Created a New Forum</strong><br /> %s',
    'LOG_FORUM_COPIED_PERMISSIONS'         => '<strong>Copied Forum Permissions</strong> from %1$s<br /> %2$s',
    'LOG_FORUM_DEL_FORUM'                  => '<strong>Deleted Forum</strong><br /> %s',
    'LOG_FORUM_DEL_FORUMS'                 => '<strong>Deleted Forum and its Sub Forums</strong><br /> %s',
    'LOG_FORUM_DEL_MOVE_FORUMS'            => '<strong>Deleted Forum and Moved Sub Forums</strong> to %1$s<br /> %2$s',
    'LOG_FORUM_DEL_MOVE_POSTS'             => '<strong>Deleted Forum and Moved Posts </strong> to %1$s<br /> %2$s',

    'LOG_FORUM_DEL_MOVE_POSTS_FORUMS'      => '<strong>Deleted Forum and its Sub Forums, and Moved Posts</strong> to %1$s<br /> %2$s',

    'LOG_FORUM_DEL_MOVE_POSTS_MOVE_FORUMS' => '<strong>Deleted Forum, and Moved Posts</strong> to %1$s <strong>and Sub Forums</strong> to %2$s<br /> %3$s',

    'LOG_FORUM_DEL_POSTS'                  => '<strong>Deleted Forum and it\'s Posts</strong><br /> %s',
    'LOG_FORUM_DEL_POSTS_FORUMS'           => '<strong>Deleted Forum, it\'s Posts and Sub Forums</strong><br /> %s',
    'LOG_FORUM_DEL_POSTS_MOVE_FORUMS'      => '<strong>Deleted Forum and it\'s Posts, and Moved Sub Forums</strong> to %1$s<br /> %2$s',
    'LOG_FORUM_EDIT'                       => '<strong>Edited Forum Details</strong><br /> %s',
    'LOG_FORUM_MOVE_DOWN'                  => '<strong>Moved Forum</strong> %1$s <strong>below</strong> %2$s',
    'LOG_FORUM_MOVE_UP'                    => '<strong>Moved Forum</strong> %1$s <strong>above</strong> %2$s',
    'LOG_FORUM_SYNC'                       => '<strong>Resynchronised Forum</strong><br /> %s',

    'LOG_GENERAL_ERROR'           => '<strong>A General Error Occurred</strong>: %1$s <br /> %2$s',

    'LOG_GROUP_CREATED'           => '<strong>New Usergroup Created</strong><br /> %s',
    'LOG_GROUP_DEFAULTS'          => '<strong>Group \'%1$s\' Made Default for Members</strong><br /> %2$s',
    'LOG_GROUP_DELETE'            => '<strong>Usergroup Deleted</strong><br /> %s',
    'LOG_GROUP_DEMOTED'           => '<strong>Leaders Demoted in Usergroup</strong> %1$s<br /> %2$s',
    'LOG_GROUP_PROMOTED'          => '<strong>Members Promoted to Leader in Usergroup</strong> %1$s<br /> %2$s',
    'LOG_GROUP_REMOVE'            => '<strong>Members Removed from Usergroup</strong> %1$s<br /> %2$s',
    'LOG_GROUP_UPDATED'           => '<strong>Usergroup Details Updated</strong><br /> %s',
    'LOG_MODS_ADDED'              => '<strong>Added New Leaders to Usergroup</strong> %1$s<br /> %2$s',
    'LOG_USERS_ADDED'             => '<strong>Added New Members to Usergroup</strong> %1$s<br /> %2$s',
    'LOG_USERS_APPROVED'          => '<strong>Users Approved in Usergroup</strong> %1$s<br /> %2$s',
    'LOG_USERS_PENDING'           => '<strong>Users Requested to Join Group \'%1$s\' and need to be Approved</strong><br /> %2$s',

    'LOG_IMAGE_GENERATION_ERROR'  => '<strong>Error While Creating Image</strong><br /> Error in %1$s on Line %2$s: %3$s',

    'LOG_IMAGESET_ADD_DB'         => '<strong>Added New Imageset to Database</strong><br /> %s',
    'LOG_IMAGESET_ADD_FS'         => '<strong>Add New Imageset on Filesystem</strong><br /> %s',
    'LOG_IMAGESET_DELETE'         => '<strong>Deleted Imageset</strong><br /> %s',
    'LOG_IMAGESET_EDIT_DETAILS'   => '<strong>Edited Imageset Details</strong><br /> %s',
    'LOG_IMAGESET_EDIT'           => '<strong>Edited Imageset</strong><br /> %s',
    'LOG_IMAGESET_EXPORT'         => '<strong>Exported Imageset</strong><br /> %s',
    'LOG_IMAGESET_LANG_MISSING'   => '<strong>Imageset Missing \'%2$s\' Localisation</strong><br /> %1$s',
    'LOG_IMAGESET_LANG_REFRESHED' => '<strong>Refreshed \'%2$s\' Localisation of Imageset</strong><br /> %1$s',
    'LOG_IMAGESET_REFRESHED'      => '<strong>Refreshed Imageset</strong><br /> %s',

    'LOG_INACTIVE_ACTIVATE'       => '<strong>Activated Inactive Users</strong><br /> %s',
    'LOG_INACTIVE_DELETE'         => '<strong>Deleted Inactive Users</strong><br /> %s',
    'LOG_INACTIVE_REMIND'         => '<strong>Sent Reminder emails to Inactive Users</strong><br /> %s',
    'LOG_INSTALL_CONVERTED'       => '<strong>Converted from %1$s to phpBB %2$s</strong>',
    'LOG_INSTALL_INSTALLED'       => '<strong>Installed phpBB %s</strong>',

    'LOG_IP_BROWSER_FORWARDED_CHECK' => '<strong>Session IP/Browser/X_FORWARDED_FOR Check Failed</strong><br />User IP <em>%1$s</em> Checked against Session IP <em>%2$s</em>, User Browser String <em>%3$s</em> Checked against Session Browser String <em>%4$s</em> and User X_FORWARDED_FOR String <em>%5$s</em> Checked against Session X_FORWARDED_FOR String <em>%6$s</em>.',

    'LOG_JAB_CHANGED'              => '<strong>Jabber Account Changed</strong>',
    'LOG_JAB_PASSCHG'              => '<strong>Jabber Password Changed</strong>',
    'LOG_JAB_REGISTER'             => '<strong>Jabber Account Registered</strong>',
    'LOG_JAB_SETTINGS_CHANGED'     => '<strong>Jabber Settings Changed</strong>',

    'LOG_LANGUAGE_PACK_DELETED'    => '<strong>Deleted Language Pack</strong><br /> %s',
    'LOG_LANGUAGE_PACK_INSTALLED'  => '<strong>Installed Language Pack</strong><br /> %s',
    'LOG_LANGUAGE_PACK_UPDATED'    => '<strong>Updated Language Pack Details</strong><br /> %s',
    'LOG_LANGUAGE_FILE_REPLACED'   => '<strong>Replaced Language File</strong><br /> %s',
    'LOG_LANGUAGE_FILE_SUBMITTED'  => '<strong>Submitted Language File and Placed in Store Folder</strong><br /> %s',

    'LOG_MASS_EMAIL'        => '<strong>Sent Mass email</strong><br /> %s',
    'LOG_MASS_PM'           => '<strong>Sent Mass PM</strong><br /> %s',

    'LOG_MCP_CHANGE_POSTER' => '<strong>Changed Poster in Topic \'%1$s\'</strong><br /> from %2$s to %3$s',

    'LOG_MODULE_DISABLE'    => '<strong>Module Disabled</strong><br /> %s',
    'LOG_MODULE_ENABLE'     => '<strong>Module Enabled</strong><br /> %s',
    'LOG_MODULE_MOVE_DOWN'  => '<strong>Module Moved Down</strong><br /> %1$s below %2$s',
    'LOG_MODULE_MOVE_UP'    => '<strong>Module Moved Up</strong><br /> %1$s above %2$s',
    'LOG_MODULE_REMOVED'    => '<strong>Module Removed</strong><br /> %s',
    'LOG_MODULE_ADD'        => '<strong>Module Added</strong><br /> %s',
    'LOG_MODULE_EDIT'       => '<strong>Module Edited</strong><br /> %s',

    'LOG_A_ROLE_ADD'        => '<strong>Administration Role Added</strong><br /> %s',
    'LOG_A_ROLE_EDIT'       => '<strong>Administration Role Edited</strong><br /> %s',
    'LOG_A_ROLE_REMOVED'    => '<strong>Administration Role Removed</strong><br /> %s',
    'LOG_F_ROLE_ADD'        => '<strong>Forum Role Added</strong><br /> %s',
    'LOG_F_ROLE_EDIT'       => '<strong>Forum Role Edited</strong><br /> %s',
    'LOG_F_ROLE_REMOVED'    => '<strong>Forum Role Removed</strong><br /> %s',
    'LOG_M_ROLE_ADD'        => '<strong>Moderator Role Added</strong><br /> %s',
    'LOG_M_ROLE_EDIT'       => '<strong>Moderator Role Edited</strong><br /> %s',
    'LOG_M_ROLE_REMOVED'    => '<strong>Moderator Role Removed</strong><br /> %s',
    'LOG_U_ROLE_ADD'        => '<strong>User Role Added</strong><br /> %s',
    'LOG_U_ROLE_EDIT'       => '<strong>User Role Edited</strong><br /> %s',
    'LOG_U_ROLE_REMOVED'    => '<strong>User Role Removed</strong><br /> %s',

    'LOG_PROFILE_FIELD_ACTIVATE'   => '<strong>Profile Field Activated</strong><br /> %s',
    'LOG_PROFILE_FIELD_CREATE'     => '<strong>Profile Field Added</strong><br /> %s',
    'LOG_PROFILE_FIELD_DEACTIVATE' => '<strong>Profile Field Deactivated</strong><br /> %s',
    'LOG_PROFILE_FIELD_EDIT'       => '<strong>Profile Field Changed</strong><br /> %s',
    'LOG_PROFILE_FIELD_REMOVED'    => '<strong>Profile Field Removed</strong><br /> %s',

    'LOG_PRUNE'                => '<strong>Pruned Forums</strong><br /> %s',
    'LOG_AUTO_PRUNE'           => '<strong>Auto Pruned Forums</strong><br /> %s',
    'LOG_PRUNE_USER_DEAC'      => '<strong>Users Deactivated</strong><br /> %s',
    'LOG_PRUNE_USER_DEL_DEL'   => '<strong>Users Pruned and Posts Deleted</strong><br /> %s',
    'LOG_PRUNE_USER_DEL_ANON'  => '<strong>Users Pruned and Posts Retained</strong><br /> %s',

    'LOG_PURGE_CACHE'          => '<strong>Purged Cache</strong>',
    'LOG_PURGE_SESSIONS'       => '<strong>Purged Sessions</strong>',


    'LOG_RANK_ADDED'           => '<strong>Added New Rank</strong><br /> %s',
    'LOG_RANK_REMOVED'         => '<strong>Removed Rank</strong><br /> %s',
    'LOG_RANK_UPDATED'         => '<strong>Updated Rank</strong><br /> %s',

    'LOG_REASON_ADDED'         => '<strong>Added Report/Denial Reason</strong><br /> %s',
    'LOG_REASON_REMOVED'       => '<strong>Removed Report/Denial Reason</strong><br /> %s',
    'LOG_REASON_UPDATED'       => '<strong>Updated Report/Denial Reason</strong><br /> %s',

    'LOG_REFERER_INVALID'      => '<strong>Referrer Validation Failed</strong><br />Referrer was <em>%1$s</em>.  The Request was Rejected and the Session Killed.',

    'LOG_RESET_DATE'           => '<strong>Board Start Date Reset</strong>',
    'LOG_RESET_ONLINE'         => '<strong>Most Users Online Reset</strong>',
    'LOG_RESYNC_POSTCOUNTS'    => '<strong>User Post Counts Resynchronised</strong>',
    'LOG_RESYNC_POST_MARKING'  => '<strong>Topics Resynchronised</strong>',
    'LOG_RESYNC_STATS'         => '<strong>Post, Topic and User Statistics Resynchronised</strong>',

    'LOG_SEARCH_INDEX_CREATED' => '<strong>Created Search Index for</strong><br /> %s',
    'LOG_SEARCH_INDEX_REMOVED' => '<strong>Removed Search Index for</strong><br /> %s',
    'LOG_STYLE_ADD'            => '<strong>Added New Style</strong><br /> %s',
    'LOG_STYLE_DELETE'         => '<strong>Deleted Style</strong><br /> %s',
    'LOG_STYLE_EDIT_DETAILS'   => '<strong>Edited Style</strong><br /> %s',
    'LOG_STYLE_EXPORT'         => '<strong>Exported Style</strong><br /> %s',

    'LOG_TEMPLATE_ADD_DB'         => '<strong>Added New Template Set to the Database</strong><br /> %s',
    'LOG_TEMPLATE_ADD_FS'         => '<strong>Add New Template Set on Filesystem</strong><br /> %s',

    'LOG_TEMPLATE_CACHE_CLEARED'  => '<strong>Deleted Cached Versions of Template Files in Template Set <em>%1$s</em></strong><br /> %2$s',

    'LOG_TEMPLATE_DELETE'         => '<strong>Deleted Template Set</strong><br /> %s',
    'LOG_TEMPLATE_EDIT'           => '<strong>Edited Template Set <em>%1$s</em></strong><br /> %2$s',
    'LOG_TEMPLATE_EDIT_DETAILS'   => '<strong>Edited Template Details</strong><br /> %s',
    'LOG_TEMPLATE_EXPORT'         => '<strong>Exported Template Set</strong><br /> %s',
    'LOG_TEMPLATE_REFRESHED'      => '<strong>Refreshed Template Set</strong><br /> %s',

    'LOG_THEME_ADD_DB'         => '<strong>Added New Theme to the Database</strong><br /> %s',
    'LOG_THEME_ADD_FS'         => '<strong>Add New Theme on Filesystem</strong><br /> %s',
    'LOG_THEME_DELETE'         => '<strong>Theme Deleted</strong><br /> %s',
    'LOG_THEME_EDIT_DETAILS'   => '<strong>Edited Theme Details</strong><br /> %s',
    'LOG_THEME_EDIT'           => '<strong>Edited Theme <em>%1$s</em></strong>',
    'LOG_THEME_EDIT_FILE'      => '<strong>Edited Theme <em>%1$s</em></strong><br /> Modified File <em>%2$s</em>',
    'LOG_THEME_EXPORT'         => '<strong>Exported Theme</strong><br /> %s',
    'LOG_THEME_REFRESHED'      => '<strong>Refreshed Theme</strong><br /> %s',

    'LOG_UPDATE_DATABASE'      => '<strong>Updated Database from Version %1$s to Version %2$s</strong>',
    'LOG_UPDATE_PHPBB'         => '<strong>Updated phpBB from Version %1$s to Version %2$s</strong>',

    'ACP_SUBMIT_CHANGES'       => 'Submit Changes',
    'GENERAL_SETTINGS'         => 'General Settings',
    'LOG_USER_ACTIVE'          => '<strong>User Activated</strong><br /> %s',
    'LOG_USER_BAN_USER'        => '<strong>Banned User via User Management</strong> for Reason \'<em>%1$s</em>\'<br /> %2$s',
    'LOG_USER_BAN_IP'          => '<strong>Banned IP via User Management</strong> for Reason \'<em>%1$s</em>\'<br /> %2$s',
    'LOG_USER_BAN_EMAIL'       => '<strong>Banned email via User Management</strong> for Reason \'<em>%1$s</em>\'<br /> %2$s',
    'LOG_USER_DELETED'         => '<strong>Deleted User</strong><br /> %s',
    'LOG_USER_DEL_ATTACH'      => '<strong>Removed ALL Attachments made by the User</strong><br /> %s',
    'LOG_USER_DEL_AVATAR'      => '<strong>Removed User Avatar</strong><br /> %s',
    'LOG_USER_DEL_OUTBOX'      => '<strong>Emptied User Outbox</strong><br /> %s',
    'LOG_USER_DEL_POSTS'       => '<strong>Removed ALL Posts made by the User</strong><br /> %s',
    'LOG_USER_DEL_SIG'         => '<strong>Removed User Signature</strong><br /> %s',
    'LOG_USER_INACTIVE'        => '<strong>User Deactivated</strong><br /> %s',
    'LOG_USER_MOVE_POSTS'      => '<strong>Moved User Posts</strong><br /> Posts by \'%1$s\' to Forum \'%2$s\'',
    'LOG_USER_NEW_PASSWORD'    => '<strong>Changed User Password</strong><br /> %s',
    'LOG_USER_REACTIVATE'      => '<strong>Forced User Account Reactivation</strong><br /> %s',
    'LOG_USER_REMOVED_NR'      => '<strong>Removed Newly Registered Flag from User</strong><br /> %s',

    'LOG_USER_UPDATE_EMAIL'    => '<strong>User \'%1$s\' Changed email</strong><br /> from \'%2$s\' to \'%3$s\'',
    'LOG_USER_UPDATE_NAME'     => '<strong>Changed Username</strong><br /> from \'%1$s\' to \'%2$s\'',
    'LOG_USER_USER_UPDATE'     => '<strong>Updated User Details</strong><br /> %s',

    'LOG_USER_ACTIVE_USER'     => '<strong>User Account Activated</strong>',
    'LOG_USER_DEL_AVATAR_USER' => '<strong>User Avatar Removed</strong>',
    'LOG_USER_DEL_SIG_USER'    => '<strong>User Signature Removed</strong>',
    'LOG_USER_FEEDBACK'        => '<strong>Added User Feedback</strong><br /> %s',
    'LOG_USER_GENERAL'         => '<strong>Entry Added:</strong><br /> %s',
    'LOG_USER_INACTIVE_USER'   => '<strong>User Account Deactivated</strong>',
    'LOG_USER_LOCK'            => '<strong>User Locked Own Topic</strong><br /> %s',
    'LOG_USER_MOVE_POSTS_USER' => '<strong>Moved ALL Posts to Forum</strong> %s',
    'LOG_USER_REACTIVATE_USER' => '<strong>Forced User Account Reactivation</strong>',
    'LOG_USER_UNLOCK'          => '<strong>User Unlocked Own Topic</strong><br /> %s',
    'LOG_USER_WARNING'         => '<strong>Added User Warning</strong><br /> %s',
    'LOG_USER_WARNING_BODY'    => '<strong>The following Warning was Issued to this User</strong><br /> %s',

    'LOG_USER_GROUP_CHANGE'       => '<strong>User Changed Default Group</strong><br /> %s',
    'LOG_USER_GROUP_DEMOTE'       => '<strong>User Demoted as Leaders from Usergroup</strong><br /> %s',
    'LOG_USER_GROUP_JOIN'         => '<strong>User Joined Group</strong><br /> %s',
    'LOG_USER_GROUP_JOIN_PENDING' => '<strong>User Joined Group and needs to be Approved</strong><br /> %s',
    'LOG_USER_GROUP_RESIGN'       => '<strong>User Resigned Membership from Group</strong><br /> %s',

    'LOG_WARNING_DELETED'      => '<strong>Deleted User Warning</strong><br /> %s',
    'LOG_WARNINGS_DELETED'     => '<strong>Deleted %2$s User Warnings</strong><br /> %1$s', // Example: '<strong>Deleted 2 User Warnings</strong><br /> username'

    'LOG_WARNINGS_DELETED_ALL' => '<strong>Deleted ALL User Warnings</strong><br /> %s',

    'LOG_WORD_ADD'             => '<strong>Added Word Censor</strong><br /> %s',
    'LOG_WORD_DELETE'          => '<strong>Deleted Word Censor</strong><br /> %s',
    'LOG_WORD_EDIT'            => '<strong>Edited Word Censor</strong><br /> %s',

    'LOG_PRUNE_SETTING_UPDATE' => '<strong>Prune Settings Updated</strong>',
    'LOG_HNR_SETTING_UPDATE'   => '<strong>Hit and Run Updated</strong>',

    'GEN_ERROR'             => 'Error!',
    'GUEST'                 => 'Guest',
    'MOD_RULES_PANEL'       => 'Moderate Rules',

    'MENU_AVATAR'           => 'Avatar Settings',
    'MENU_LOGS'             => 'Site Logs',
    'MENU_PAYPAL'           => 'PayPal Settings',
    'MENU_BANS'             => 'Banned Users and Settings',
    'MENU_BBCODES'          => 'BBCodes',
    'MENU_BONOUS'           => 'Bonus Settings',
    'MENU_CATS'             => 'Torrent Categories',
    'MENU_CLIENT_BAN'       => 'Torrent Client Bans',
    'MENU_CLINIC'           => 'Torrent Clinic',
    'MENU_FAQ'              => 'FAQ Manager',
    'MENU_FILTER'           => 'Torrent Upload Filter',
    'MENU_FORUM'            => 'Forum Control Centre',
    'MENU_IMG_BUCKET'       => 'Image Bucket Configuration',
    'MENU_INFO'             => 'Server Information',
    'MENU_IRC'              => 'IRC Configuration',
    'MENU_LEVELS'           => 'Level Configuration',
    'MENU_MASSUPLOAD'       => 'Mass Upload Configuration',
    'MENU_OPTIMIZE'         => 'Database Optimization',
    'MENU_PRUNE'            => 'User Pruning System',
    'MENU_CLOUD'            => 'Search Cloud',
    'MENU_SETTINGS'         => 'Site Configuration',
    'MENU_CACHE_SETTINGS'   => 'Site Cache Settings',
    'MENU_SHOUTBOX'         => 'ShoutBox Configuration',
    'MENU_MESSENGING'       => 'Site Mass Messaging',
    'MENU_SMILIES'          => 'Emoticon Centre',
    'MENU_TORRENTS'         => 'Torrent Monitoring System',
    'MENU_TRACKERS'         => 'External Tracker Monitor',
    'MENU_USERS'            => 'User Management',
    'MENU_USER_PM'          => 'Read PM\'s',
    'MENU_USER_ADD'         => 'Add New User',
    'MENU_WARNED'           => 'Warned Users',
    'MENU_WEB_UPDATE'       => 'Web Update Notices',
    'MENU_SIG_SETTINGS'     => 'Signature Settings',
    'MENU_SIG_SETTINGS_EXP' => 'Here you can Set ALL the Default Settings for Signatures.',
    'MENU_HNR'              => 'Hit and Run Configuration',
    'MENU_ARCADE'           => 'Arcade Configuration',
    'MENU_SHOUT_CAST'       => 'Shoutcast Configuration',
));

?>
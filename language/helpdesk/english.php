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
** File helpdesk/english.php 2018-04-24 06:56:00 Thor
**
** CHANGES
**
** 2018-03-02 - Added New Masthead
** 2018-03-02 - Added New !defined('IN_PMBT')
** 2018-03-02 - Fixed Spelling
** 2018-04-24 - Amended the Wording of some Sentences
**/

if (!defined('IN_PMBT'))
{
    include_once './../../security.php';
    die ('Error 404 - Page Not Found');
}

if (empty($lang) || !is_array($lang))
{
    $lang = array();
}

$lang = array_merge($lang, array(
    'LANG_VERSION'                      => '1.7.3', // created for this version of eTicket
    'LANG_LOCALE'                       => 'en_GB', // [language[_territory][.codeset][@modifier]] (RFC 3066)
    'LANG_FATAL_ERROR'                  => 'Fatal Error',
    'LANG_ERROR'                        => 'Error',
    'LANG_WELCOME'                      => 'Welcome',
    'LANG_REMOVE_FOR_SECURITY_REASONS'  => 'Should be Removed for Security Reasons.',
    'LANG_INC_DIR_NOT_EXIST'            => 'Include Directory DOES NOT Exist.',
    'LANG_DB_COULD_NOT_CONNECT'         => 'Could NOT Connect to Database.',
    'LANG_COULD_NOT_GET_CONF'           => 'Could NOT Retrieve Configuration from Database.',
    'LANG_FIX_ABOVE_ERRORS'             => 'Please Fix the above Errors.',
    'LANG_ERROR_ATTACHMENTS_DIR'        => 'Attachments Directory is Missing or NOT Writeable',
    'LANG_ERROR_BAD_FILETYPE'           => 'is an Unsupported Filetype.',
    'LANG_ERROR_NOT_POSTED'             => 'Could NOT Post your Message.',
    'LANG_ERROR_MISSING_FIELDS'         => 'Required Fields Missing.',
    'LANG_ERROR_INVALID_PASS'           => 'Invalid Password.',
    'LANG_ERROR_USER_EXISTS'            => 'Username already Exists.',
    'LANG_ERROR_PASSWORD_NOMATCH'       => 'Passwords DO NOT Match.',
    'LANG_ERROR_ATTACHMENT_DIR'         => 'Attachment Directory DOES NOT Exist.',
    'LANG_ERROR_CAT_EXISTS'             => 'Category already Exists.',
    'LANG_ERROR_GROUP_EXISTS'           => 'User Group already Exists.',
    'LANG_ERROR_ONE_REP'                => 'You must have at least One Representative.',
    'LANG_ERROR_ONE_CAT'                => 'You must have at least One Category.',
    'LANG_ERROR_NAME_EXISTS'            => 'Name already Exists.',
    'LANG_ERROR_REP_USER_EXISTS'        => 'Representative Username already Exists.',
    'LANG_ERROR_ADMIN_GROUP_NOMOD'      => 'Can NOT Modify Administrator Group.',
    'LANG_ERROR_ADMIN_GROUP_NODEL'      => 'Can NOT Delete Administrator Group.',
    'LANG_ERROR_DEFAULT_CAT_NODEL'      => 'Can NOT Delete Default Category Group.',
    'LANG_ERROR_GROUP_INUSE'            => 'Can NOT Delete User Group, as it\'s Still in Use.',
    'LANG_FAILED'                       => 'Failed',
    'LANG_TRANS_FROM'                   => 'Transferred from',
    'LANG_TRANS_NOTE'                   => 'Transfer Note',
    'LANG_TRANSFER'                     => 'Transfer',
    'LANG_SEND_ALERT'                   => 'Send Alert?',
    'LANG_OPT_MSG'                      => 'Optional Message',
    'LANG_ATTACHMENT'                   => 'Attachment',
    'LANG_HEADERS'                      => 'Headers',
    'LANG_CAT'                          => 'Category',

    'LANG_ERROR_IMAP'                   => 'PHP DOES NOT appear to be Compiled with <a href=\'http://www.php.net/imap\'>imap functions</a> used for POP3.',

    'LANG_ERROR_UNABLE_TO_OPEN_MAILBOX' => 'Unable to Open Mailbox for Category',

    'LANG_LOGIN_TIP'                    => 'If this is your First Time contacting us, please use the \'Open Ticket\' form below to Open a New Ticket.  Otherwise if you would like to View the Status of an Existing Ticket, enter your Details in the \'View Status\' Form.',

    'LANG_OPENED_TICKET_SUBJECT'        => 'Opened New Ticket',

    'LANG_OPENED_TICKET_MSG'            => 'A Support Ticket has been Created and a Representative will get back to you shortly. An email with the Ticket ID has been sent.\nYou will need the Ticket ID along with your email Address to Login and to View the Status of your Ticket(s).\nNOTE: To Send Additional Information regarding your Issue, simply Reply to the email sent to you.',

    'LANG_VIEW_STATUS'                  => 'View Status',
    'LANG_EMAIL'                        => 'Email',
    'LANG_YOUR_EMAIL'                   => 'Your email Address',
    'LANG_TICKET_ID'                    => 'Ticket ID',
    'LANG_STATUS'                       => 'Status',
    'LANG_SUBJECT'                      => 'Subject',
    'LANG_NAME'                         => 'Name',
    'LANG_PRIORITY'                     => 'Priority',
    'LANG_QUERY'                        => 'Query',
    'LANG_SORT_BY'                      => 'Sort By',
    'LANG_DATE'                         => 'Date',
    'LANG_ASC'                          => 'Ascending',
    'LANG_DES'                          => 'Descending',
    'LANG_SEARCH'                       => 'Search',
    'LANG_BASIC'                        => 'Basic',
    'LANG_ADVANCED'                     => 'Advanced',
    'LANG_RESULTS_PP'                   => 'Results Per Page',
    'LANG_TICKETS_PP'                   => 'Tickets Per Page',
    'LANG_SEARCH_TICKETS'               => 'Search Tickets',
    'LANG_TICKETS_FOUND'                => 'Ticket(s) Found',
    'LANG_ERROR_NO_SUBJECT'             => 'Please Enter a Subject.',
    'LANG_ERROR_NO_NAME'                => 'Please Enter your Name.',
    'LANG_ERROR_NO_MSG'                 => 'Please Enter a Message.',
    'LANG_ERROR_INVALID_EMAIL'          => 'Please Enter a Valid email Address.',
    'LANG_WARN_ATTACH_REM'              => 'Attachment Removed',
    'LANG_ERROR_UPLOAD_SECURITY'        => 'Upload Security Error',
    'LANG_ERROR_NO_ATTACH'              => 'Attachments are Disabled',
    'LANG_ATTACHMENTS'                  => 'Attachments',
    'LANG_ERROR_LOGIN'                  => 'Incorrect Login Details.  Please try again!',
    'LANG_LOGIN_PLEASE'                 => 'Please Login',
    'LANG_USER'                         => 'Username',
    'LANG_PASS'                         => 'Password',
    'LANG_NPASS'                        => 'New Password',
    'LANG_VPASS'                        => 'Verify Password',
    'LANG_LOGIN'                        => 'Log In',
    'LANG_ADD'                          => 'Add',
    'LANG_REPLY_TO_MSG'                 => 'Reply to Message',
    'LANG_PRIV_MSG'                     => 'Private Message',
    'LANG_REPLY_AND_CLOSE'              => 'Reply and Close',
    'LANG_PRIV_MSGS'                    => 'Private Messages',
    'LANG_GROUP'                        => 'Group',
    'LANG_SIGNATURE'                    => 'Signature',
    'LANG_ERROR_DENIED'                 => 'Error 403 Access Forbidden.',
    'LANG_ERROR_NOTFOUND'               => 'Error 404 NOT Found.',
    'LANG_BACK_TO_MAIN'                 => 'Back to Main',
    'LANG_BACK_TO_LIST'                 => 'Back to List',
    'LANG_EDIT'                         => 'Edit',
    'LANG_COPY'                         => 'Copy',
    'LANG_EDIT_BANNED'                  => 'Edit Banned',
    'LANG_CONFIRM_DELETE'               => 'Confirm Delete',
    'LANG_DELETE'                       => 'Delete',
    'LANG_DELETE_BANNED'                => 'Delete Banned',
    'LANG_ADD_COPY_BANNED'              => 'Add/Copy Banned',
    'LANG_CREATE_REP'                   => 'Create Representative',
    'LANG_SAVE_CHANGES'                 => 'Save Changes',
    'LANG_CREATE_CAT'                   => 'Create Category',
    'LANG_VIEW'                         => 'View',
    'LANG_ALL'                          => 'ALL',
    'LANG_OPEN'                         => 'Open',
    'LANG_OPEN_TICKET'                  => 'Open Ticket',
    'LANG_RESET'                        => 'Reset',
    'LANG_ADD_NEW'                      => 'Add New',
    'LANG_TICKETS'                      => 'Tickets',
    'LANG_TICKET'                       => 'Ticket',
    'LANG_FROM'                         => 'From',
    'LANG_TO'                           => 'To',
    'LANG_HOST'                         => 'Host',
    'LANG_HIDDEN'                       => 'Hidden',
    'LANG_DEPT'                         => 'Department',
    'LANG_LOW'                          => 'Low',
    'LANG_NORMAL'                       => 'Normal',
    'LANG_HIGH'                         => 'High',
    'LANG_ENABLE'                       => 'Enable',
    'LANG_NEW_TICKET_REPLY'             => 'New Ticket Reply',
    'LANG_NEW_TICKET_REPLY_INFO'        => 'You can Define the Message that will be seen every time a New Ticket is Opened.',
    'LANG_MSG'                          => 'Message',
    'LANG_VARS'                         => 'Variables',
    'LANG_VAR_EMAIL'                    => 'Users email Address',
    'LANG_VAR_SUBJECT'                  => 'Subject of email',
    'LANG_VAR_MESSAGE'                  => 'Incoming Message',
    'LANG_VAR_NAME'                     => 'Name of User',
    'LANG_VAR_DATETIME'                 => 'Date and Time at Send Time',
    'LANG_ROOT_URL'                     => 'Root URL',
    'LANG_NEW_MSG_REPLY'                => 'New Message Reply',
    'LANG_NEW_MSG_REPLY_INFO'           => 'You can Define the Message that will be seen every time a Reply is Made to a Ticket.',
    'LANG_TICKET_LIMIT_REPLY'           => 'Ticket Limit Reply',

    'LANG_TICKET_LIMIT_REPLY_INFO'      => 'This Message will be seen when a User has Reached the Maximum Allowed Opened Tickets (Defined in Preferences).',

    'LANG_TICKET_MAX_VAR'               => 'Maximum Tickets a User can have Open (See Preferences).',
    'LANG_CAT_TRANS_NOTICE'             => 'Category Transfer Notification',
    'LANG_CAT_TRANS_NOTICE_INFO'        => 'This Message will be seen when a Message has been Transferred to a Different Category.',

    'LANG_CAT_NAME_VAR'                 => 'Name of Category Transferred to.',
    'LANG_TRANS_MSG_VAR'                => 'Representative Transfer Note.',
    'LANG_EMAIL_ALERT'                  => 'Email Alert',

    'LANG_EMAIL_ALERT_INFO'             => 'This Message will be seen by ALL Representatives when the System has Received a New Message.',

    'LANG_ADDR_TO_EMAIL'                => 'Addresses to email',
    'LANG_FROM_EMAIL'                   => 'From email',
    'LANG_MSG_VAR'                      => 'Content of Ticket Request.',
    'LANG_WARNING'                      => 'WARNING',
    'LANG_ACC_ATTACH'                   => 'Accept File Attachments',

    'LANG_ACC_ATTACH_TIP'               => 'Before you Enable this Feature you need to Setup the Attachment Directory and Understand the Security Issues Related to Attachments.',

    'LANG_MAX_FILE_SIZE'                => 'Maximum File Size (bytes)',
    'LANG_ATTACH_URL_PATH'              => 'Attachment URL Path',
    'LANG_ATTACH_DIR'                   => 'Attachment Directory',

    'LANG_ATTACH_DIR_TIP'               => 'This Directory MUST Exist and MUST be Writeable (chmod 777) before you can Enable Attachments.  (Note: Must have a Trailing Slash)',

    'LANG_ACC_FILE_TYPES'               => 'Accepted File Types',
    'LANG_REM_TYPE'                     => 'Remove Type',
    'LANG_MAIL'                         => 'Mail',
    'LANG_SAVE_EMAIL_HEADERS'           => 'Save email Headers',
    'LANG_MIN_EMAIL_INT'                => 'Min. email Interval (seconds)',
    'LANG_MAX_OPEN_TICKETS'             => 'Maximum Open Tickets',
    'LANG_REM_ORIGINAL_EMAIL'           => 'Remove Original email',
    'LANG_REM_TAG'                      => 'Removal Tag',
    'LANG_MISC'                         => 'Miscellaneous',
    'LANG_SEARCH_ON_MAIN'               => 'Search on Main Page',
    'LANG_PREF_TIMEZONE'                => 'Preferred Time Zone',
    'LANG_CLOSED'                       => 'Closed',
    'LANG_CLOSE'                        => 'Close',
    'LANG_IN_PROGRESS'                  => 'In Process...',
    'LANG_REOPEN'                       => 'Reopen',
    'LANG_REFRESH'                      => 'Refresh',
    'LANG_GROUP_ACCESS'                 => 'Group Access',
    'LANG_REP'                          => 'Representative',
    'LANG_CREATE_USER_GROUP'            => 'Create User Group',
    'LANG_QUICK_SEARCH'                 => 'Quick Search',
    'LANG_SHOW_ALL'                     => 'Show ALL (Reset)',
    'LANG_EXACT_PHRASE'                 => 'Exact phrase',
    'LANG_ALL_WORDS'                    => 'ALL Words',
    'LANG_ANY_WORD'                     => 'Any Word',
    'LANG_DEL_SEL'                      => 'Delete Selected',
    'LANG_SELECT'                       => 'Select',
    'LANG_SELECT_ALL'                   => 'Select ALL',
    'LANG_UNSELECT'                     => 'Unselect',
    'LANG_PREV'                         => 'Previous',
    'LANG_NEXT'                         => 'Next',
    'LANG_INVALID_RECORD'               => 'Invalid Record!  Key is Null.',
    'LANG_ADD_TO_BANLIST'               => 'Add to Ban List',
    'LANG_NO_RECORDS_FOUND'             => 'No Records Found',
    'LANG_TITLE_MY'                     => 'My Account',
    'LANG_TITLE_CAT'                    => 'Categories',
    'LANG_TITLE_REP'                    => 'Representatives',
    'LANG_TITLE_GROUPS'                 => 'User Groups',
    'LANG_TITLE_PREF'                   => 'Preferences',
    'LANG_TITLE_MAIL'                   => 'Mail Responses',
    'LANG_TITLE_BANLIST'                => 'Ban List',
    'LANG_TITLE_VIEWTICKET'             => 'View Ticket',
    'LANG_TITLE_ADMIN_LOGIN'            => 'Administrator Login',
    'LANG_TITLE_USER_LOGIN'             => 'Login',
    'LANG_TITLE_MY_TICKETS'             => 'My Tickets',
    'LANG_LAST'                         => 'Last',
    'LANG_PAGE'                         => 'Page',
    'LANG_ERROR_MUST_BE_LOGGED_IN'      => 'You must be Logged in to use this Feature',
    'LANG_HELP'                         => 'eTicket Help',

    'LANG_HELP_BODY'                    => '<p>Move your Mouse over the Table Headings and Hold there, a Tool-Tip will appear.<br /><small>* Denotes there is a Private Message.</small></p>',

    'LANG_TIP_TICKET'                   => 'The ID of the Ticket Generated Automatically',
    'LANG_TIP_DATE'                     => 'Date the Ticket was First Raised',
    'LANG_TIP_SUBJECT'                  => 'Subject of the Ticket',
    'LANG_TIP_CAT'                      => 'Category the Ticket is Assigned to',
    'LANG_TIP_PRIORITY'                 => 'How Important the Ticket is to the User',
    'LANG_TIP_FROM'                     => 'Who Raised the Ticket',
    'LANG_TIP_REFRESH'                  => 'Refreshes Page',
    'LANG_TIP_DELETE'                   => 'Deletes the Selected Tickets',
    'LANG_DELETE_CONFIRM'               => 'Are you sure you want to Delete this?',
    'LANG_CAPTCHA_TITLE'                => 'Security Code',
    'LANG_ERROR_CAPTCHA'                => 'You have provided an Invalid Security Code',
    'LANG_SUBMIT'                       => 'Submit',
    'LANG_ERROR_VALUE_EMPTY'            => 'Value can NOT be Empty.  Please Enter Text!',
    'LANG_BANLIST_RECORD_TOTAL'         => 'Records %start to %stop of %total',
    'LANG_DAYS'                         => 'Days',
    'LANG_PAGES'                        => 'Pages',
    'LANG_WITHIN_LAST'                  => 'Within Last',
    'LANG_NO_TICKETS'                   => 'There are NO Tickets to Display',
    'LANG_PREDEFINED'                   => 'Predefined',
    'LANG_ADVANCED_SEARCH'              => 'Advanced Search',
    'LANG_BASIC_SEARCH'                 => 'Basic Search',
    'LANG_USE_DATES'                    => 'Use Dates',
    'LANG_BETWEEN'                      => 'Between',
    'LANG_BIGGER'                       => 'Bigger',
    'LANG_SMALLER'                      => 'Smaller',
    'LANG_UP_ERR_NODATA'                => 'No Uploaded File Data',
    'LANG_UP_ERR_EMPTY'                 => 'Empty Uploaded File Data',
    'LANG_UP_ERR_TOOLONG'               => 'Filename is Too Long',
    'LANG_UP_ERR_INVALIDPATH'           => 'Upload Path is Invalid',
    'LANG_UP_ERR_WRITEPATH'             => 'Upload Path is NOT Writeable',
    'LANG_UP_ERR_NOFILE'                => 'NOT an Uploaded File',
    'LANG_UP_ERR_INVALIDTYPE'           => 'Invalid File Type',
    'LANG_UP_ERR_TOOBIG'                => 'File is Too Big',
    'LANG_UP_ERR_TOOSMALL'              => 'File is Too Small',
    'LANG_UP_ERR_EXISTS'                => 'File already Exists',
    'LANG_UP_ERR_FAILED'                => 'Upload Failed',
    'LANG_ANSWER'                       => 'Answer',
    'LANG_OPTIONAL'                     => 'Optional',
    'LANG_SYSTEM_TIMEZONE'              => 'System Time Zone',
    'LANG_LOCKED'                       => 'Locked',
    'LANG_EMAIL_CONFIRM'                => 'Confirm email',
    'LANG_ERROR_EMAIL_NOMATCH'          => 'email Addresses DO NOT Match.',
    'LANG_TIP_REP'                      => 'Rep the Ticket is Assigned to',
    'LANG_REP_TRANS_NOTICE'             => 'Representative Transfer Notification',

    'LANG_REP_TRANS_NOTICE_INFO'        => 'This Message will be seen when a Message has been Transferred to a Different Representative.',

    'LANG_REP_NAME_VAR'                 => 'Name of Representative Transferred to.',
    'LANG_SETTINGS'                     => 'Settings',
    'LANG_THEME'                        => 'Theme',

    'LANG_TIME_FORMAT'                  => 'Time Format (<a href=\'http://www.php.net/date\' target=\'_new\'>date()</a> OR <a href=\'http://www.php.net/strftime\' target=\'_new\'>strftime()</a>)',

    'LANG_SHORT_DATE_FORMAT'            => 'Short Date Format (<a href=\'http://www.php.net/date\' target=\'_new\'>date()</a> OR <a href=\'http://www.php.net/strftime\' target=\'_new\'>strftime()</a>)',

    'LANG_CHARSET'                      => 'Character Encoding (<a href=\'http://www.iana.org/assignments/character-sets\'>charset)</a>',

    'LANG_PRESIG'                       => 'Pre-Signature Separator (can be Blank)',
    'LANG_SITE_TITLE'                   => 'Site Title',
    'LANG_NO_SUBJECT'                   => 'No Subject',
    'LANG_TICKET_FORMAT'                => 'Ticket Format',
    'LANG_SUBJECT_RE'                   => 'Subject Reply Prefix',
    'LANG_SPAM_WORD'                    => 'Spam Word (In Subject)',
    'LANG_FLOOD_MSG_RATE'               => 'Rate of Flood Messages',
    'LANG_REM'                          => 'Remove',
    'LANG_LOAD'                         => 'Load',
    'LANG_SAVE'                         => 'Save',
    'LANG_ANTISPAM'                     => 'Anti-Spam (perl pipe automail only, using the Ban List)',

    'LANG_ANTISPAM_INFO'                => 'If a User is Detected as Spam by the Ban List, they can Override the Ban List by Replying with the <strong>MAGIC WORD</strong> in the email body.<br />\n(DO NOT take out {MAGICWORD} from the Message, it gets Replaced with the Real Word Automatically)<br />\n(It is Recommended you use a non-existing email Address at your Domain for the email Address)',

    'LANG_ANTISPAM_MAGICWORD'           => 'Anti-Spam Magic Word (NO Whitespace)',
    'LANG_ANSWER_MSG'                   => 'Answer Message',
    'LANG_ANSWER_MSG_INFO'              => 'This is the Template used when Answering a Ticket, changing it is NOT Recommended.',
    'LANG_UNASSIGNED_TICKET'            => 'This Ticket is Unassigned.',
    'LANG_CLAIM_TEXT'                   => 'Do you want to Claim this Ticket?',
    'LANG_CLAIM_IT'                     => 'Claim it',
    'LANG_NEW_TICKET'                   => 'New Ticket',
    'LANG_NEW_TICKET_MSG'               => 'This Ticket was Created for you by a Representative.',
    'LANG_NOMAIL'                       => 'No Mail',
    'LANG_CAPTCHA'                      => 'Captcha',
    'LANG_ACC_CAPTCHA'                  => 'Accept Captcha',
    'LANG_CAPTCHA_TYPE'                 => 'Captcha Type',
    'LANG_CAPTCHA_QUESTION_TITLE'       => 'Security Question',
    'LANG_DEFAULT_CAT'                  => 'Default Category',
    'LANG_FORCE_CATEGORY'               => 'Force Single Category',
    'LANG_CURRENT_THEME'                => 'Current Theme',
    'LANG_MAIL_METHOD'                  => 'Sendmail Method',
    'LANG_SMTP_HOST'                    => 'SMTP Host',
    'LANG_SMTP_PORT'                    => 'SMTP Port',
    'LANG_SMTP_AUTH'                    => 'SMTP Basic Authentication',
    'LANG_SMTP_USER'                    => 'SMTP Authentication Username',
    'LANG_SMTP_PASS'                    => 'SMTP Authentication Password',
    'LANG_NEW'                          => 'New',
    'LANG_NEW_TICKETS'                  => 'New Tickets',
    'LANG_OPEN_TICKETS'                 => 'Open Tickets',
    'LANG_ONHOLD'                       => 'On Hold',
    'LANG_PUTONHOLD'                    => 'Put On Hold',
    'LANG_PUTONHOLD_WOREPLY'            => 'Put On Hold without Replying',
    'LANG_TIP_ONHOLD'                   => 'Places a Ticket On Hold',
    'LANG_ONHOLD_TICKETS'               => 'On Hold Tickets',
    'LANG_AWAITINGCUSTOMER'             => 'Awaiting Customer',
    'LANG_AWAITINGCUSTOMER_TICKETS'     => 'Tickets Awaiting Customer Reply',
    'LANG_REOPENED'                     => 'Re-Opened',
    'LANG_REOPENED_TICKETS'             => 'Tickets Re-Opened',
    'LANG_CUSTREPLIED'                  => 'Customer Replied',
    'LANG_CUSTREPLIED_TICKETS'          => 'Tickets Customer Replied',
    'LANG_CLOSED_TICKETS'               => 'Closed Tickets',
    'LANG_CLOSE_WOREPLY'                => 'Close without Replying',
    'LANG_NEWSTATUS'                    => 'New Status',
    'LANG_CHANGE_TICKET_STATUS'         => 'Set New Status without Replying',
    'LANG_SHOW_TICKETS'                 => 'Show Tickets : ',
    'LANG_SHOW'                         => ' Show ',
    'LANG_WITH_SELECTED'                => 'Selected ',
    'LANG_ACTION'                       => ' Preform ',
    'LANG_SHOW_GRAPHIC'                 => 'Show eTicket Graphic in Footer',
    'LANG_UPGRADE_CHECK'                => 'Check for Upgrades',
    'LANG_VIEW_OPEN'                    => 'View Open Tickets',
    'LANG_ALL_TICKETS'                  => 'ALL Tickets',
    'LANG_TICKET_STATUS'                => 'Ticket Status',
    'LANG_TITLE_DB'                     => 'Database',
    'LANG_DB_OPS'                       => 'Database Operations',
    'LANG_DB_BACKUP'                    => 'Database Backup',
    'LANG_DB_STATUS'                    => 'Database Status',
    'LANG_DB_OPTIMIZE'                  => 'Optimize Database',
    'LANG_DB_TOTALSPACE'                => 'Total Space Used',
    'LANG_DB_USEDKB'                    => 'Used Kilobytes',
    'LANG_DB_OVERHEAD'                  => 'Overhead',
    'LANG_DB_USEDB'                     => 'Used Bytes',
    'LANG_DB_VERSION'                   => 'Table Version',
    'LANG_DB_OPTIMIZING'                => 'Optimizing',
    'LANG_DB_OPTIMIZED'                 => ' Bytes Optimized.',
    'LANG_DB_NEEDS_OPTIMIZE'            => 'Database needs to be Optimized.',
    'LANG_DB_OUTOFDATE'                 => 'Database Out of Date.',
    'LANG_DB_OK'                        => 'OK',
    'LANG_SENDMAIL_PATH'                => 'Path to Sendmail',
    'MY_SUMMARY'                        => 'My Summary',
    'PENDING_TICKETS'                   => 'Pending Tickets',
    'COMPLETED_TICKETS'                 => 'Completed Tickets',
    'INPROGRESS'                        => 'In-Progress',
    'WAITING_ON_INFO'                   => 'Waiting on more Information',
    'NOT_GOING_SOLVE'                   => 'NOT going to Solve',
    'ALL_TICKETS'                       => 'ALL Tickets',
    'OPEN_NEW_TICKET'                   => 'Open a New Help Ticket',

    'HELP_DESK_EXP_NEW_TICKET'          => 'Before using <strong>Our Help Desk</strong><br />make sure to Read <a href=faq.php><strong>FAQ</strong></a> and Search the <a href=forums.php><strong>Forums</strong></a> first!<br />You must be sure to Provide as much Information as possible for your Questions to be Answered.  Questions are Answered in the Order they are Received.  There is a Zero Tolerance Policy for Help Desk Abuse, anyone being Abusive <strong>WILL</strong> have their Accounts Disabled and IP Banned. \'YOU HAVE BEEN WARNED\'',

    'ERROR_NO_SUBJECT'                  => 'NO Subject was Defined',
    'ERROR_NO_PROBLEM'                  => 'NO Problem was Reported',
    'ERROR_NO_CATEGORY'                 => 'NO Category has been Set',
    'ERROR_NO_PRIORITY'                 => 'NO Priority Level has been Set',
    'ERROR_TICKET_NOT_SAVED'            => 'Your Ticket was NOT Saved because it Contained Errors',
    'ERROR_NOT_AUTH_DEL'                => 'You are NOT Authorised to Delete Help Tickets',
    'ERROR_NOT_AUTH_CLOSE'              => 'You are NOT authorised to Close Help tickets',
    'TICKET_SAVED'                      => 'Message Sent!  Await for Reply.<br />You will be contacted by a Member of Staff.',
));

?>
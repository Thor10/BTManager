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
** File acp_trackers/english.php 2018-03-28 10:03:00 Thor
**
** CHANGES
**
** 2018-02-23 - Added New Masthead
** 2018-02-23 - Added New !defined('IN_PMBT')
** 2018-02-23 - Fixed Spelling
** 2018-03-28 - Amended the Wording of some Sentences
** 2018-03-28 - Amended !defined('IN_PMBT') Corrected Path
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
    'INTRO'                => 'External Trackers',
    'TRACKER_ACTIVE'       => 'Tracker is Active',
    'TRACKER_OFF_LINE'     => 'Tracker is Offline',
    'TRACKER_BLACK_LISTED' => 'Tracker is <strong>Blacklisted</strong>',
    'BLACK_LIST'           => 'Blacklist',
    'UNBLACK_LIST'         => 'Remove Blacklist',

    'INTRO_EXP'            => 'With this Panel you can Monitor the Status of External Trackers associated to Torrents.  You can Set a Filter that Prevents the Uploading of Torrents from certain Trackers or you can Force the Tracker Update Viewing Debug Information.',

    'NO_ENTRIES'           => 'No Torrent Entries for this Period.',
    'TOR_NAME'             => 'Torrent Name',
    'ANNOUNCE_URL'         => 'Announce URL',
    'BLACK_LISTED'         => 'Blacklisted',
    'VIEW_LIST'            => 'View Torrents',
    'UPDATE_TOR_NOW'       => 'Update Torrent Now',
    'BANNED_ANNOUNCE'      => 'Blacklist a Tracker',

    'BANNED_ANNOUNCE_EXP'  => 'Insert the Announce URL of the Tracker you want to Blacklist.  ALL Torrents Associated to it will be Refused during Upload.',

    'CANCEL_MOD'           => 'Cancel Modifications',
    'INVALID_INCODING'     => 'Can NOT Decode Tracker Response.  Invalid Encoding!',
    'TRKRAWDATA'           => 'Tracker Reached.  Here is the Encoded Response.',
    'TRACKER_OFFLINE'      => 'Can NOT Contact Tracker.  Tracker will be Set to OffLine',
    'UPDATING'             => 'Updating',
    'DECODED_DATA'         => 'Decoding Completed.  Here is ALL the Scrape Data Obtained.',
    'NOTOR_ERR'            => 'There was an Error',
    'INFO_HASH'            => 'Info Hash',
    'INVALID_ANNOUNCE'     => 'Invalid Announce URL.<br /><strong>"%1$s"</strong>',

    'NO_TORRENTS_LISTED'   => '"%1$s" Has NO Torrents OR has Been Blacklisted (If NOT Blacklisted it has been Removed from the Database.)',

    'PEER_SUMERY'          => 'Found <strong>"%1$s"</strong> Seeds, <strong>"%2$s"</strong> Leechers, <strong>"%3$s"</strong> Completed Downloads for Torrent "%4$s" Info Hash "%5$s"."',
 ));

?>
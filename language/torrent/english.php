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
** File torrent/english.php 2018-03-20 14:08:00 Thor
**
** CHANGES
**
** 2018-03-02 - Added New Masthead
** 2018-03-02 - Added New !defined('IN_PMBT')
** 2018-03-02 - Fixed Spelling
**/

if (!defined('IN_PMBT'))
{
    include_once './../../security.php';
    die ("You can't access this file directly");
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
    'ORDER_BY'         => 'Order by',
    'SEEDS'            => 'Seeds',
    'INCLUDE_DEAD'     => 'Include Dead Torrents',
    'ANONUMUS'         => 'Anonymous',
    'DISPLAY_BY'       => 'Display Torrents by',
    'SORT_CAT'         => 'Sort by Type',
    'SORT_NAME'        => 'Sort by Name',
    'SORT_NUM_FILES'   => 'Sort by Number of files',
    'SORT_SEED'        => 'Sort by Seeds',
    'SORT_LEECH'       => 'Sort by Leechers',
    'SORT_SIZE'        => 'Sort by Size of File',
    'SORT_COMP'        => 'Sort by Times Completed',
    'SORT_COMMENTS'    => 'Sort by Number of Comments',
    'UPLOADED_BY'      => 'Uploaded by',
    'AVERAGE_SPEED'    => 'Average Speed',
    'NUKED_TORRENT'    => 'Nuked Torrent',
    'FREE_TORRENT'     => 'Free Torrent',

    'DHT_SUPPORT_EXP'  => 'This Torrent supports DHT. With a state-of-the-art Client, you\'ll be able to Download this Torrent even if a Central Tracker goes down.',

    'STATS_UPTO_DATE'  => 'Statistics Updated less than 30 minutes ago',
    'TORRENT_DETAILS'  => 'Torrent Details',
    'REFRESHPEER_DATA' => 'Refresh Peer Data',
    'BANNED_TORRENT'   => 'Banned Torrent',
    'BANN_TORRENT'     => 'Ban Torrent',
));

?>
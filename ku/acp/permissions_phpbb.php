<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

/**
*	MODDERS PLEASE NOTE
*
*	You are able to put your permission sets into a separate file too by
*	prefixing the new file with permissions_ and putting it into the acp
*	language folder.
*
*	An example of how the file could look like:
*
*	<code>
*
*	if (empty($lang) || !is_array($lang))
*	{
*		$lang = array();
*	}
*
*	// Adding new category
*	$lang['permission_cat']['bugs'] = 'Bugs';
*
*	// Adding new permission set
*	$lang['permission_type']['bug_'] = 'Bug Permissions';
*
*	// Adding the permissions
*	$lang = array_merge($lang, array(
*		'acl_bug_view'		=> array('lang' => 'Can view bug reports', 'cat' => 'bugs'),
*		'acl_bug_post'		=> array('lang' => 'Can post bugs', 'cat' => 'post'), // Using a phpBB category here
*	));
*
*	</code>
*/

$lang = array_merge($lang, array(
	'permission_cat'	=> array(
		'actions'		=> 'کردارەکان',
		'content'		=> 'ناوەڕۆک',
		'forums'		=> 'مەکۆکان',
		'misc'			=> 'میسک',
		'permissions'	=> 'دەسەڵاتەکان',
		'pm'			=> 'پەیامە تایبەتەکان',
		'polls'			=> 'ڕاپرسییەکان',
		'post'			=> 'پەیام',
		'post_actions'	=> 'کردارەکانی پەیام',
		'posting'		=> 'ناردن',
		'profile'		=> 'پرۆفایل',
		'settings'		=> 'ڕێکخستنەکان',
		'topic_actions'	=> 'کردارەکانی بابەت',
		'user_group'	=> 'بەکارهێنەران &amp; گرووپەکان',
	),

	// With defining 'global' here we are able to specify what is printed out if the permission is within the global scope.
	'permission_type'	=> array(
		'u_'			=> 'دەسەڵاتەکانی بەکارهێنەر',
		'a_'			=> 'دەسەڵاتەکانی بەڕێوەبەر',
		'm_'			=> 'دەسەڵاتەکانی چاودێر',
		'f_'			=> 'دەسەڵاتەکانی چاودێر',
		'global'		=> array(
			'm_'			=> 'دەسەڵاتەکانی چاودێری جیهانی',
		),
	),
));

// User Permissions
$lang = array_merge($lang, array(
	'acl_u_viewprofile'	=> array('lang' => 'دەتوانێ پرۆفایلەکان ببینێ ،ئەندامان لەگەڵ لیستی سەرهێڵ', 'cat' => 'profile'),
	'acl_u_chgname'		=> array('lang' => 'دەتوانێ ناوی بەکارهێنەر بگۆڕی', 'cat' => 'profile'),
	'acl_u_chgpasswd'	=> array('lang' => 'دەتوانێ تێپەڕەوشە بگۆڕێ', 'cat' => 'profile'),
	'acl_u_chgemail'	=> array('lang' => 'دەتوانێ ناونیشانی ئیمەیڵ بگۆڕێ', 'cat' => 'profile'),
	'acl_u_chgavatar'	=> array('lang' => 'دەتوانێ وێنۆچکە بگۆڕێ', 'cat' => 'profile'),
	'acl_u_chggrp'		=> array('lang' => 'دەتوانێ گرووپی بەکارهێنەری بنەڕەت بگۆڕێ', 'cat' => 'profile'),

	'acl_u_attach'		=> array('lang' => 'دەتوانێ پەڕگەکان هاوپێچبکات', 'cat' => 'post'),
	'acl_u_download'	=> array('lang' => 'دەتوانێ پەڕگەکان دابگرێ', 'cat' => 'post'),
	'acl_u_savedrafts'	=> array('lang' => 'دەتوانێ ڕەشنووەکان پاشکەوتبکات', 'cat' => 'post'),
	'acl_u_chgcensors'	=> array('lang' => 'دەتوانێ سانسۆری وشە ناچالاکبکات', 'cat' => 'post'),
	'acl_u_sig'			=> array('lang' => 'دەتوانێ واژۆ بەکارببات', 'cat' => 'post'),

	'acl_u_sendpm'		=> array('lang' => 'دەتوانێ پەیامی تایبەت بنێرێ', 'cat' => 'pm'),
	'acl_u_masspm'		=> array('lang' => 'دەتوانێ پەیامی تایبەت بۆ فرە بەکارهێنەران بنێرێ', 'cat' => 'pm'),
	'acl_u_masspm_group'=> array('lang' => 'دەتوانێ پەیامی تایبەت بۆ گرووپ بنێرێ', 'cat' => 'pm'),
	'acl_u_readpm'		=> array('lang' => 'دەتوانێ پەیامی تایبەت بخوێنێتەوە', 'cat' => 'pm'),
	'acl_u_pm_edit'		=> array('lang' => 'دەتوانێ پەیامە تایبەتەکانی دەستکاریبکا', 'cat' => 'pm'),
	'acl_u_pm_delete'	=> array('lang' => 'دەتوانێ پەیامە تایبەتەکانی لە بوخچەی خۆی بسڕێتەوە', 'cat' => 'pm'),
	'acl_u_pm_forward'	=> array('lang' => 'دەتوانێ پەیامی تایبەت بۆپێش بنێرێ', 'cat' => 'pm'),
	'acl_u_pm_emailpm'	=> array('lang' => 'دەتوانێ پەیامی تایبەت ئیمەیڵ بکات', 'cat' => 'pm'),
	'acl_u_pm_printpm'	=> array('lang' => 'دەتوانێ پەیامی تایبەت چاپبکات', 'cat' => 'pm'),
	'acl_u_pm_attach'	=> array('lang' => 'دەتوانێ پەڕگەکان هاوپێچبکا لە پەیامی تایبەت', 'cat' => 'pm'),
	'acl_u_pm_download'	=> array('lang' => 'دەتوانێ پەڕگەکان دابگرێ لە پەیامی تایبەت', 'cat' => 'pm'),
	'acl_u_pm_bbcode'	=> array('lang' => 'دەتوانێ BBCode بەکارببات لە پەیامی تایبەت', 'cat' => 'pm'),
	'acl_u_pm_smilies'	=> array('lang' => 'دەتوانێ خەندەکان بەکارببات لە پەیامی تایبەت', 'cat' => 'pm'),
	'acl_u_pm_img'		=> array('lang' => 'دەتوانێ تاگی [img] بەکارببات لە پەیامی تایبەت', 'cat' => 'pm'),
	'acl_u_pm_flash'	=> array('lang' => 'دەتوانێ تاگی [flash] بەکارببات لە پەیامی تایبەت', 'cat' => 'pm'),

	'acl_u_sendemail'	=> array('lang' => 'دەتوانێ ئیمەیڵ بنێرێ', 'cat' => 'misc'),
	'acl_u_sendim'		=> array('lang' => 'دەتوانێ پەیامکردنی خێرا بنێرێ', 'cat' => 'misc'),
	'acl_u_ignoreflood'	=> array('lang' => 'دەتوانێ سنووری فلوود پشتگوێ بخات', 'cat' => 'misc'),
	'acl_u_hideonline'	=> array('lang' => 'دەتوانێ باری سەرهێڵ بشارێتەوە', 'cat' => 'misc'),
	'acl_u_viewonline'	=> array('lang' => 'دەتوانێ بەکارهێنەرە شاراوەکانی سەرهێڵ ببینێ', 'cat' => 'misc'),
	'acl_u_search'		=> array('lang' => 'دەتوانێ مەکۆ بگەڕێ', 'cat' => 'misc'),
));

// Forum Permissions
$lang = array_merge($lang, array(
	'acl_f_list'		=> array('lang' => 'دەتوانێ مەکۆ ببینێ', 'cat' => 'post'),
	'acl_f_read'		=> array('lang' => 'دەتوانێ مەکۆ بخوێنێتەوە', 'cat' => 'post'),
	'acl_f_post'		=> array('lang' => 'دەتوانێ بابەتی نوێ بنووسێت', 'cat' => 'post'),
	'acl_f_reply'		=> array('lang' => 'دەتوانێ وەڵامی بابەتەکان بداتەوە', 'cat' => 'post'),
	'acl_f_icons'		=> array('lang' => 'دەتوانێ هێمانی پەیام/بابەت بەکارببات', 'cat' => 'post'),
	'acl_f_announce'	=> array('lang' => 'دەتوانێ ئاگادارییەکان بنێرێ', 'cat' => 'post'),
	'acl_f_sticky'		=> array('lang' => 'دەتوانێ جێگریرەکان بنێرێ', 'cat' => 'post'),

	'acl_f_poll'		=> array('lang' => 'دەتوانێ ڕاپرسییەکان بنێرێ', 'cat' => 'polls'),
	'acl_f_vote'		=> array('lang' => 'دەتوانێ لە ڕاپرسییەکان دەنگبدا', 'cat' => 'polls'),
	'acl_f_votechg'		=> array('lang' => 'دەتوانێ دەنگی چالاک بگۆڕێ', 'cat' => 'polls'),

	'acl_f_attach'		=> array('lang' => 'دەتوانێ پەڕگەکان هاوپێچبکا', 'cat' => 'content'),
	'acl_f_download'	=> array('lang' => 'دەتوانێ پەڕگەکان دابگرێ', 'cat' => 'content'),
	'acl_f_sigs'		=> array('lang' => 'دەتوانێ واژۆکان بەکاربەرێ', 'cat' => 'content'),
	'acl_f_bbcode'		=> array('lang' => 'دەتوانێ BBCode بەکاربەرێت', 'cat' => 'content'),
	'acl_f_smilies'		=> array('lang' => 'دەتوانێ خەندەکان بەکاربەرێت', 'cat' => 'content'),
	'acl_f_img'			=> array('lang' => 'دەتوانێ تاگی [img] بەکارببات', 'cat' => 'content'),
	'acl_f_flash'		=> array('lang' => 'دەتوانێ تاگی [flash] بەکارببات', 'cat' => 'content'),

	'acl_f_edit'		=> array('lang' => 'دەتوانێ پەیامەکانی دەستکاریبکا', 'cat' => 'actions'),
	'acl_f_delete'		=> array('lang' => 'دەتوانێ پەیامەکانی بسڕێتەوە', 'cat' => 'actions'),
	'acl_f_user_lock'	=> array('lang' => 'دەتوانێ بابەتەکانی دابخات', 'cat' => 'actions'),
	'acl_f_bump'		=> array('lang' => 'دەتوانێ لە بابەتەکان بدات', 'cat' => 'actions'),
	'acl_f_report'		=> array('lang' => 'دەتوانێ پەیامەکان ڕاپۆرت بکات', 'cat' => 'actions'),
	'acl_f_subscribe'	=> array('lang' => 'دەتوانێ مەکۆ بەشداربکات', 'cat' => 'actions'),
	'acl_f_print'		=> array('lang' => 'دەتوانێ بابەتەکان چاپبکات', 'cat' => 'actions'),
	'acl_f_email'		=> array('lang' => 'دەتوانێ بابەتەکان ئیمەیڵ بکات', 'cat' => 'actions'),

	'acl_f_search'		=> array('lang' => 'دەتوانێ مەکۆکە بگەڕێ', 'cat' => 'misc'),
	'acl_f_ignoreflood' => array('lang' => 'دەتوانێ سنووری فلوود پشتگوێ بخات', 'cat' => 'misc'),
	'acl_f_postcount'	=> array('lang' => 'کەمکردنی ژمێریاری پەیام<br /><em>تکایە سەرنجی ئەوە بدە کە ئەو ڕێکخستنە تەنها بۆ پەیامە نوێیەکان کاریگەری دەبێت.</em>', 'cat' => 'misc'),
	'acl_f_noapprove'	=> array('lang' => 'دەتوانێ بنێرێ بەبێ پەسەندکردن', 'cat' => 'misc'),
));

// Moderator Permissions
$lang = array_merge($lang, array(
	'acl_m_edit'		=> array('lang' => 'دەتوانێ پەیامەکان دەستکاریبکا', 'cat' => 'post_actions'),
	'acl_m_delete'		=> array('lang' => 'دەتوانێ پەیامەکان بسڕێتەوە', 'cat' => 'post_actions'),
	'acl_m_approve'		=> array('lang' => 'دەتوانێ پەیامەکان پەسەندبکات', 'cat' => 'post_actions'),
	'acl_m_report'		=> array('lang' => 'دەتوانێ ڕاپۆرتەکان دابخات و بسڕێتەوە', 'cat' => 'post_actions'),
	'acl_m_chgposter'	=> array('lang' => 'دەتوانێ نووسری پەیام بگۆڕێت', 'cat' => 'post_actions'),

	'acl_m_move'	=> array('lang' => 'دەتوانێ بابەتەکان بگوازێتەوە', 'cat' => 'topic_actions'),
	'acl_m_lock'	=> array('lang' => 'دەتوانێ بابەتەکان دابخات', 'cat' => 'topic_actions'),
	'acl_m_split'	=> array('lang' => 'دەتوانێ بابەتەکان جیابکات', 'cat' => 'topic_actions'),
	'acl_m_merge'	=> array('lang' => 'دەتوانێ بابەتەکان بلکێنێت', 'cat' => 'topic_actions'),

	'acl_m_info'	=> array('lang' => 'دەتوانێ وردەکاری پەیام ببینێ', 'cat' => 'misc'),
	'acl_m_warn'	=> array('lang' => 'دەتوانێ ئاگادارکردنەوە توشبکات<br /><em>ئەو ڕێکخستنە تەنها جیهانیی پێکدێت. بنچینەکراوی مەکۆ نییە.</em>', 'cat' => 'misc'), // This moderator setting is only global (and not local)
	'acl_m_ban'		=> array('lang' => 'دەتوانێ ڕاگرتنەکان بەڕێوەببات<br /><em>ئەو ڕێکخستنە تەنها جیهانیی پێکدێت. بنچینەکراوی مەکۆ نییە.</em>', 'cat' => 'misc'), // This moderator setting is only global (and not local)
));

// Admin Permissions
$lang = array_merge($lang, array(
	'acl_a_board'		=> array('lang' => 'دەتوانێ ڕێکخستنەکان بگۆڕێ/بپشکنێ بۆ نوێکردنەوەکان', 'cat' => 'settings'),
	'acl_a_server'		=> array('lang' => 'دەتوانێ ڕێکخستنەکانی ڕاژە بگۆڕێت', 'cat' => 'settings'),
	'acl_a_jabber'		=> array('lang' => 'دەتوانێ ڕێکخستنەکانی جابەر بگۆرێت', 'cat' => 'settings'),
	'acl_a_phpinfo'		=> array('lang' => 'دەتوانێ ڕێکخستنەکانی php ببینێت', 'cat' => 'settings'),

	'acl_a_forum'		=> array('lang' => 'دەتوانێ مەکۆکان بەڕێوەببات', 'cat' => 'forums'),
	'acl_a_forumadd'	=> array('lang' => 'دەتوانێ مەکۆ نوێیەکان بەڕێوەببات', 'cat' => 'forums'),
	'acl_a_forumdel'	=> array('lang' => 'دەتوانێ مەکۆکان بسڕێتەوە', 'cat' => 'forums'),
	'acl_a_prune'		=> array('lang' => 'دەتوانێ مەکۆکان وشکبکات', 'cat' => 'forums'),

	'acl_a_icons'		=> array('lang' => 'دەتوانێ خەندە و هێماکانی بابەت/پەیام بگۆرێت', 'cat' => 'posting'),
	'acl_a_words'		=> array('lang' => 'دەتوانێ سانسۆری وشە بگۆڕێت', 'cat' => 'posting'),
	'acl_a_bbcode'		=> array('lang' => 'دەتوانێ تاگەکانی BBCode پێناسەبکات', 'cat' => 'posting'),
	'acl_a_attach'		=> array('lang' => 'دەتوانێ ڕێکخستنە پەیوەندیدارەکانی هاوپێچەکان بگۆرێت', 'cat' => 'posting'),

	'acl_a_user'		=> array('lang' => 'دەتوانێ بەکارهێنەران بەڕێوەببات<br /><em>هەروەها ئەمە بینینی بریکاری وێبگەڕی بەکارهێنەران لەخۆدەگرێت لەناو لیستی بینینی سەرهێڵ.</em>', 'cat' => 'user_group'),
	'acl_a_userdel'		=> array('lang' => 'دەتوانێ بەکارهێنەران بسڕێتەوە/وشکبکاتەوە', 'cat' => 'user_group'),
	'acl_a_group'		=> array('lang' => 'دەتوانێ گرووپەکان بەڕێوەببات', 'cat' => 'user_group'),
	'acl_a_groupadd'	=> array('lang' => 'دەتوانێ گرووپی نوێ زیادبکات', 'cat' => 'user_group'),
	'acl_a_groupdel'	=> array('lang' => 'دەتوانێ گرووپەکان بسڕێتەوە', 'cat' => 'user_group'),
	'acl_a_ranks'		=> array('lang' => 'دەتوانێ پلەکان بەڕێوەببات', 'cat' => 'user_group'),
	'acl_a_profile'		=> array('lang' => 'دەتوانێ خانە ئارەزوومەندەکانی پرۆفایل بەڕێوەببات', 'cat' => 'user_group'),
	'acl_a_names'   	=> array('lang' => 'دەتوانێ ناوە ناچالاککراوەکان بەڕێوەببات', 'cat' => 'user_group'),
	'acl_a_ban'			=> array('lang' => 'دەتوانێ ڕاگرتنەکان بەڕێوەببات', 'cat' => 'user_group'),

	'acl_a_viewauth'	=> array('lang' => 'دەتوانێ دەمامکەکانی دەسەڵات ببینێ', 'cat' => 'permissions'),
	'acl_a_authgroups'	=> array('lang' => 'دەتوانێ دەسەڵاتەکان بگۆڕێ بۆ گرووپە دروستەکان', 'cat' => 'permissions'),
	'acl_a_authusers'	=> array('lang' => 'دەتوانێ دەسەڵاتەکان بگۆڕێ بۆ بەکارهێنەرە دروستەکان', 'cat' => 'permissions'),
	'acl_a_fauth'		=> array('lang' => 'دەتوانێ پۆلی دەسەڵاتەکانی مەکۆ بگۆڕێ', 'cat' => 'permissions'),
	'acl_a_mauth'		=> array('lang' => 'دەتوانێ پۆلی دەسەڵاتەکانی چاودێر بگۆڕێ', 'cat' => 'permissions'),
	'acl_a_aauth'		=> array('lang' => 'دەتوانێ پۆلی دەسەڵاتەکانی بەڕێوەبەر بگۆرێ', 'cat' => 'permissions'),
	'acl_a_uauth'		=> array('lang' => 'دەتوانێ پۆلی دەسەڵاتەکانی بەکارهێنەر بگۆڕێ', 'cat' => 'permissions'),
	'acl_a_roles'		=> array('lang' => 'دەتوانێ یاساکان بەڕێوەببات', 'cat' => 'permissions'),
	'acl_a_switchperm'	=> array('lang' => 'دەتوانێ دەسەڵاتەکانی تر بەکارببات', 'cat' => 'permissions'),

	'acl_a_styles'		=> array('lang' => 'دەتوانێ شێوازەکان بەڕێوەببات', 'cat' => 'misc'),
	'acl_a_viewlogs'	=> array('lang' => 'دەتوانێ لۆگەکان ببینێ', 'cat' => 'misc'),
	'acl_a_clearlogs'	=> array('lang' => 'دەتوانێ لۆگەکان خاوێنبکاتەوە', 'cat' => 'misc'),
	'acl_a_modules'		=> array('lang' => 'دەتوانێ یەکەکان بەڕێوەببات', 'cat' => 'misc'),
	'acl_a_language'	=> array('lang' => 'دەتوانێ گورزەکانی زمان بەڕێوەببات', 'cat' => 'misc'),
	'acl_a_email'		=> array('lang' => 'دەتوانێ ئیمەیڵی گشتی بنێرێت', 'cat' => 'misc'),
	'acl_a_bots'		=> array('lang' => 'دەتوانێ بووتەکان بەڕێوەببات', 'cat' => 'misc'),
	'acl_a_reasons'		=> array('lang' => 'دەتوانێ هۆکارەکانی ڕاپۆرت/ڕەتکردن بەڕێوەببات', 'cat' => 'misc'),
	'acl_a_backup'		=> array('lang' => 'دەتوانێ بنکەدراوە هەڵبگرێت/بهێنێتەوە', 'cat' => 'misc'),
	'acl_a_search'		=> array('lang' => 'دەتوانێ ڕێکخستنەکانی گەڕان بەڕێوەببات', 'cat' => 'misc'),
));

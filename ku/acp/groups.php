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

$lang = array_merge($lang, array(
	'ACP_GROUPS_MANAGE_EXPLAIN'	=> 'لەو پانێڵە دەتوانی هەموو گرووپەکانی بەکارهێنەران بەڕێوەببەی. دەتوانی گرووپە چالاکەکان بسڕیتەوە ،دروستبکەی و دەستکاریان بکەی. زۆرزیاتر ،دەتوانی پێشڕەوی گرووپ هەڵبژێری ،کردنەوە/داخستن/شاردنەوەی باری گرووپ و دانانی ناوی گرووپەکان و باسکردنیان.',
	'ADD_GROUP_CATEGORY'			=> 'Add category',
	'ADD_USERS'	=> 'بەکارهێنەران زیاد بکە',
	'ADD_USERS_EXPLAIN'	=> 'لێرە دەتوانی بەکارهێنەری نوێ بۆ گرووپەکە زیادبکەی. دەتوانی دیاریبکەی لەکوێ ئەو گرووپە ببێتە بنەڕەتی نوێ بۆ بەکارهێنەرە هەڵبژێردراوەکان. لەگەڵ ئەوەش دەتوانی پێناسەیان بکەی وەکو پێشڕەوی هرووپ. تکایە هەر ناوێک لە دێڕێکی جودا بنووسە.',

	'COPY_PERMISSIONS'	=> 'ڕوونووسکردنی دەسەڵاتەکان لە',
	'COPY_PERMISSIONS_EXPLAIN'	=> 'هەر کە دروستکرا، گرووپەکە گەمان دەسەڵاتەکانی ئەو گرووپەی دەبێت کە لێرە دیاری دەکەیت.',
	'CREATE_GROUP'	=> 'گرووپێکی نوێ دروست بکە',

	'GROUPS_NO_MEMBERS'	=> 'ئەم گرووپە هیچ ئەندامێکی نییە',
	'GROUPS_NO_MODS'	=> 'هیچ پێشڕەوێکی گڕووپ دیاری نەکراوە',

	'GROUP_APPROVE'	=> 'ئەندام پەسەند بکە',
	'GROUP_APPROVED'	=> 'ئەندامە پەسەندکراوەکان',
	'GROUP_AVATAR'	=> 'وێنۆچکەی گرووپ',
	'GROUP_AVATAR_EXPLAIN'	=> 'ئەم وێنەیە لە کۆنترۆڵ پانێڵی گرووپ پیشان دەدرێت.',
	'GROUP_CATEGORY_NAME'			=> 'Category name',
	'GROUP_CLOSED'	=> 'داخراو',
	'GROUP_COLOR'	=> 'ڕەنگی گرووپ',
	'GROUP_COLOR_EXPLAIN'	=> 'ڕەنگی ئەندامان پێناسەبکە ناوی بەکارهێنەران دەردەکەون لێی ،بەتاڵ جێی بهێڵە بۆ بنەڕەتی بەکارهێنەر',


	'GROUP_CONFIRM_ADD_USERS'		=> array(
		1	=> 'Are you sure that you want to add the user %2$s to the group?',
		2	=> 'Are you sure that you want to add the users %2$s to the group?',
	),
	'GROUP_CREATED'	=> 'گرووپ بە سەرکەوتوویی دروستکرا.',
	'GROUP_DEFAULT'	=> 'گرووپی بنەڕەتی ئەندام',
	'GROUP_DEFS_UPDATED'	=> 'گرووپی بنەڕەت دانرا بۆ هەموو ئەندامە هەڵبژێردراوەکان.',
	'GROUP_DELETE'	=> 'ئەندام لە گرووپ لاببە',
	'GROUP_DELETED'	=> 'گرووپ سڕایەوە و گرووپە بنەڕەتەکانی بەکارهێنەر بەسەرکەوتوویی دانران.',
	'GROUP_DEMOTE'	=> 'دابەزینی پێشڕەوی گرووپ',
	'GROUP_DESC'	=> 'پەسنی گرووپ',
	'GROUP_DETAILS'	=> 'وردەکارییەکانی گرووپ',
	'GROUP_EDIT_EXPLAIN'	=> 'لێرە دەتوانی گرووپێکی چالاک دەستکاری بکەیت. دەتوانی ناوەکەی بگۆری ،باسکردنی و جۆری (کراوە ،داخراو ..هتد). دەشتوانی فرە هەڵبژاردنی فراوان دابنێی وەکو یارمەتیدان ،پلە ..هتد گۆڕانکاریکراو لێرە لەسەر بەکارهێنەران دەڕوات. ڕێکخستنەکانی ئێستا. تکایە سەرنجی ئەوە بدە کە ئەندامانی گرووپ دەتوانن بەسەر ڕێکخستنی وێنۆچکەی گرووپدا بڕۆن ،جگەلەوەی ئەگەر دەسەڵاتەکانی بەکارهێنەر دابنێی.',
	'GROUP_ERR_USERS_EXIST'	=> 'ئەو بەکارهێنەرانەی دیاریت کردووە پێشووتر ئەندامی ئەو گرووپەن.',
	'GROUP_FOUNDER_MANAGE'	=> 'تەنها بەڕێوەبردنی دۆزەرەوە',
	'GROUP_FOUNDER_MANAGE_EXPLAIN'	=> 'بەڕێوەبردنە دیاریکردنەکەی ئەو گرووپە تەنها بۆ دۆزەرەوەکانە. ئەو بەکارهێنەرانی دەسەڵاتی گرووپیان هەیە هێشتا دەتوانن ئەو گرووپە ببینن وەکو باشی وەکو ئەندامانی گرووپەکە.',
	'GROUP_HIDDEN'	=> 'شاراوە',
	'GROUP_LANG'	=> 'زمانی گرووپ',
	'GROUP_LEAD'	=> 'پێشڕەوەکانی گرووپ',
	'GROUP_LEADERS_ADDED'	=> 'پێشڕەوانی نوێ بۆ گرووپ بە سەرکەوتوویی زیادکران.',
	'GROUP_LEGEND'	=> 'لە ئەفسانە گرووپ نیشانبدە',
	'GROUP_LIST'	=> 'ئەندامە هەنووکەییەکان',
	'GROUP_LIST_EXPLAIN'	=> 'ئەمە لیستێکی تەواوی ئەندامە ئامادەکانە لەگەڵ ئەندامیەتییان بۆ ئەم گرووپە. دەتوانی ئەندامان بسڕیەوە یان نوێ زیادبکەی وەکو ئەوە گونجاوە و دەیبینی.',
	'GROUP_MEMBERS'	=> 'ئەندامانی گرووپ',
	'GROUP_MEMBERS_EXPLAIN'	=> 'ئەمە لیستکردنیێکی تەواوی هەموو ئەندامانی ئەو گرووپەیە. بەشی جودای لەخۆگرووە بۆ پێشڕەوان ،پێچوون و ئەندامە چالاکەکان. لێرەوە دەتوانی هەموو جوڵەکان بەڕێوەببەی کە کێ ئەندامییەتی هەیە لەم گرووپە و دەوریان چییە. بۆ سڕینەوەی پێشڕەوێک بەڵام هێشتنەوەیان لە گرووپەکە دابەزاندن بەکارببە لەباتی سڕینەوە. بە سادەیی بەرزکردن یان پێشخستن بەکارببە بۆ کردنی ئەندامێکی چالاک بۆ پێشڕەو.',
	'GROUP_MESSAGE_LIMIT'	=> 'سنووری پەیامی تایبەتی گرووپ بۆهەر بوخچەیەک',
	'GROUP_MESSAGE_LIMIT_EXPLAIN'	=> 'ئەو ڕێکخستنە بەسەر سنووری پەیامی بوخچەی بۆهەر-بەکارهێنەر دەڕوات. نرخێکی 0 واتا سنووری بنەڕەتی بەکارهێنەرەکە بەکاردەهێنرێت.',
	'GROUP_MODS_ADDED'	=> 'پێشڕەوانی نوێ بۆ گرووپ بە سەرکەوتوویی زیادکران.',
	'GROUP_MODS_DEMOTED'	=> 'ئەندامانی گرووپ بەسەرکەوتوویی بەرزکرانەوە.',
	'GROUP_MODS_PROMOTED'	=> 'ئەندامانی گرووپ بەسەرکەوتوویی بەرزکرانەوە.',
	'GROUP_NAME'	=> 'ناوی گرووپ',
	'GROUP_NAME_TAKEN'	=> 'ناوی ئەو گرووپەی نووسیوتە پێشتر لەکاردایە ،تکایە ناوێکی تر هەڵبژێرە.',
	'GROUP_OPEN'	=> 'کراوە',
	'GROUP_PENDING'	=> 'پێچوونی ئەندامان',
	'GROUP_MAX_RECIPIENTS'	=> 'زۆرترین ژمارەی ڕێگادراو بۆ وەرگرەکان بۆهەر پەیامێکی تایبەت',
	'GROUP_MAX_RECIPIENTS_EXPLAIN'	=> 'زۆرترین ژمارەی ڕێگادراو بۆ وەرگرەکان بۆهەر پەیامێکی تایبەت. ئەگەر 0 نووسرا ،ڕێکخستنی فراوان-مەکۆ بەکاردەبرێت.',
	'GROUP_OPTIONS_SAVE'			=> 'هەڵبژاردنەکانی فراوانی گرووپ',
	'GROUP_PROMOTE'	=> 'بەرزیبکەوە بۆ پێشڕەوی گرووپ',
	'GROUP_RANK'	=> 'پلەی گرووپ',
	'GROUP_RECEIVE_PM'	=> 'گرووپ ئەتوانێت پەیامی تایبەت وەربگرێت',
	'GROUP_RECEIVE_PM_EXPLAIN'	=> 'تکایە سەرنجی ئەوە بدە کە گرووپە شاراوەکان ناتوانرێن پەیامیان بۆ بنێردرێن ،لەگەڵ ڕێزی ئەو ڕێکخستنە.',
	'GROUP_REQUEST'	=> 'ڕوخسەت',
	'GROUP_SETTINGS_SAVE'	=> 'ڕێکخستنەکانی فراوانی گرووپ',
	'GROUP_SKIP_AUTH'				=> 'Exempt group leader from permissions',
	'GROUP_SKIP_AUTH_EXPLAIN'		=> 'If enabled group leader no longer inherit permissions from the group.',
	'GROUP_SPECIAL'					=> 'Pre-defined',
	'GROUP_TEAMPAGE'				=> 'Display group on teampage',
	'GROUP_TYPE'	=> 'جۆری گرووپ',
	'GROUP_TYPE_EXPLAIN'	=> 'ئەمە دیاریدەکات کام بەکارهێنەر دەتوانێ بەشداری بکات لەو گرووپە یان ببینێ.',
	'GROUP_UPDATED'	=> 'ویستراوەکانی گرووپ بە سەرکەوتووی نوێکرانەوە.',

	'GROUP_USERS_ADDED'	=> 'بەکارهێنەرانی نوێ بە سەرکەوتوویی بۆ گرووپ زیادکران.',
	'GROUP_USERS_EXIST'	=> 'بەکارهێنەرانی دیاریکراو پێشتر ئەندامن لە گرووپ.',
	'GROUP_USERS_REMOVE'	=> 'بەکارهێنەران سڕانەوە لە گرووپ و بنەڕەتی نوێ بەسەرکەوتوویی دانرا.',


	'LEGEND_EXPLAIN'				=> 'These are the groups which are displayed in the group legend:',
	'LEGEND_SETTINGS'				=> 'Legend settings',
	'LEGEND_SORT_GROUPNAME'			=> 'Sort legend by group name',
	'LEGEND_SORT_GROUPNAME_EXPLAIN'	=> 'The order below is ignored when this option is enabled.',

	'MANAGE_LEGEND'			=> 'Manage group legend',
	'MANAGE_TEAMPAGE'		=> 'Manage teampage',
	'MAKE_DEFAULT_FOR_ALL'	=> 'Make default group for every member',
	'MEMBERS'				=> 'Members',

	'NO_GROUP'					=> 'No group specified.',
	'NO_GROUPS_ADDED'			=> 'No groups added yet.',
	'NO_GROUPS_CREATED'			=> 'No groups created yet.',
	'NO_PERMISSIONS'			=> 'Do not copy permissions',
	'NO_USERS'					=> 'You haven’t entered any users.',
	'NO_USERS_ADDED'			=> 'No users were added to the group.',
	'NO_VALID_USERS'			=> 'You haven’t entered any users eligible for that action.',

	'SELECT_GROUP'				=> 'Select a group',
	'SPECIAL_GROUPS'			=> 'Pre-defined groups',
	'SPECIAL_GROUPS_EXPLAIN'	=> 'Pre-defined groups are special groups, they cannot be deleted or directly modified. However you can still add users and alter basic settings.',

	'TEAMPAGE'					=> 'Teampage',
	'TEAMPAGE_DISP_ALL'			=> 'All memberships',
	'TEAMPAGE_DISP_DEFAULT'		=> 'User’s default group only',
	'TEAMPAGE_DISP_FIRST'		=> 'First membership only',
	'TEAMPAGE_EXPLAIN'			=> 'These are the groups which are displayed on the teampage:',
	'TEAMPAGE_FORUMS'			=> 'Display moderated forums',
	'TEAMPAGE_FORUMS_EXPLAIN'	=> 'If set to yes, moderators will have a list with all of the forums where they have moderator permissions displayed in their row. This can be very database intensive for big boards.',
	'TEAMPAGE_MEMBERSHIPS'		=> 'Display user memberships',
	'TEAMPAGE_SETTINGS'			=> 'Teampage settings',
	'TOTAL_MEMBERS'				=> 'Members',

	'USERS_APPROVED'				=> 'Users approved successfully.',
	'USER_DEFAULT'					=> 'User default',
	'USER_DEF_GROUPS'				=> 'User defined groups',
	'USER_DEF_GROUPS_EXPLAIN'		=> 'These are groups created by you or another admin on this board. You can manage memberships as well as edit group properties or even delete the group.',
	'USER_GROUP_DEFAULT'			=> 'Set as default group',
	'USER_GROUP_DEFAULT_EXPLAIN'	=> 'Saying yes here will set this group as the default group for the added users.',
	'USER_GROUP_LEADER'				=> 'Set as group leader',
));

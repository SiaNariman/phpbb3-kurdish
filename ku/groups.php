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
	'ALREADY_DEFAULT_GROUP'	=> 'گرووپی دیاریکراو گرووپی بنەڕێتی خۆتە.',
	'ALREADY_IN_GROUP'	=> 'پێشتر ئەندامی گرووپی دیاریکراو بوویت.',
	'ALREADY_IN_GROUP_PENDING'	=> 'پێشتر داوای بەشداریکردنی گرووپی دیاریکراوت کردووە.',

	'CANNOT_JOIN_GROUP'	=> 'ناتوانیت بەشداری ئەم گرووپە بکەیت. تەنها ئەتوانیت بەشداری گرووپە کراوە و ئازادەکان بکەیت.',
	'CANNOT_RESIGN_GROUP'	=> 'ناتوانیت لەم گرووپە بهێنیت. تەنها ئەتوانیت واز لە گرووپە کراوە و ئازادەکان بهێنیت.',
	'CHANGED_DEFAULT_GROUP'	=> 'گرووپی بنەڕەت بە سەرکەوتوویی گۆڕدرا',

	'GROUP_AVATAR'	=> 'وێنۆچکەی گرووپ',
	'GROUP_CHANGE_DEFAULT'	=> 'دڵنیایت لە گۆڕینی ئەندامەتی بنەڕەتیت لە گرووپی “%s”؟',
	'GROUP_CLOSED'	=> 'داخراو',
	'GROUP_DESC'	=> 'پەسنی گرووپ',
	'GROUP_HIDDEN'	=> 'شاراوە',
	'GROUP_INFORMATION'	=> 'زانیاریی گرووپی بەکارهێنەر',
	'GROUP_IS_CLOSED'	=> 'ئەمە گرووپێکی داخراوە، ئەندامە نوێیەکان تەنها ئەتوانن بە بانگهێشتکردن لە لایەن پێشڕەوێکی گرووپەوە ئەتوانن بەشداریی بکەن.',
	'GROUP_IS_FREE'	=> 'ئەمە گرووپێکی کراوە و ئازادە، هەموو ئەندامە نوێیەکان بەخێربێن.',
	'GROUP_IS_HIDDEN'	=> 'ئەمە گرووپێکی شاراوەیە، تەنها ئەندامانی گرووپ ئەتوانن ئێندامەتیی ببینن.',
	'GROUP_IS_OPEN'	=> 'ئەمە گرووپێکی کراوەیە، ئەندامان ئەتوانن داوای بەشداریی بکەن.',
	'GROUP_IS_SPECIAL'	=> 'ئەمە گرووپێکی تایبەتە، گرووپە تایبەتەکان لەلایەن بەڕێوەبەرانی مەکۆوە بەڕێوە دەبرێن.',
	'GROUP_JOIN'	=> 'بەشداریی بکە لە گرووپ',
	'GROUP_JOIN_CONFIRM'	=> 'دڵنیایت ئەتەوێت بەشدار بیت لە گرووپی دیاریکراو؟',
	'GROUP_JOIN_PENDING'	=> 'داوای بەشداری بکە لە گرووپ',
	'GROUP_JOIN_PENDING_CONFIRM'	=> 'دڵنیایت ئەتەوێت داوای بەشداریکردن بکەیت لە لە گرووپی دیاریکراو؟',
	'GROUP_JOINED'	=> 'بە سەرکەوتوویی بەشدار بوویت لە گرووپی دیاریکراودا.',
	'GROUP_JOINED_PENDING'	=> 'بە سەرکەوتووی داوای ئەندامەتیت کرد لە گرووپ. تکایە چاوەڕوان بە تا پێشڕەوێکی گرووپ ئەندامەتیت پەسەند ئەکات.',
	'GROUP_LIST'	=> 'بەڕێوەبردنی بەکارهێنەران',
	'GROUP_MEMBERS'	=> 'ئەندامانی گرووپ',
	'GROUP_NAME'	=> 'ناوی گرووپ',
	'GROUP_OPEN'	=> 'کردنەوە',
	'GROUP_RANK'	=> 'پلەی گرووپ',
	'GROUP_RESIGN_MEMBERSHIP'	=> 'وازهێنان لە ئەندامەتی گرووپ',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	=> 'دڵنیایت لەوەی ئەتەوێت واز لە ئەندمەتی بهێنیت لە گرووپی دیاریکراو؟',
	'GROUP_RESIGN_PENDING'	=> 'وازهێنان لە چاوەڕوانی ئەندامەتی گرووپ.',
	'GROUP_RESIGN_PENDING_CONFIRM'	=> 'دڵنیایت لە پەشیمان بوونەوە لە چاوەڕوانی ئەندامەتیت لە گرووپی دیاریکراو؟',
	'GROUP_RESIGNED_MEMBERSHIP'	=> 'بە سەرکەوتوویی لابرایت لە گرووپی دیاریکراو.',
	'GROUP_RESIGNED_PENDING'	=> 'لە دوای چاوەڕوانیت بۆ وازهێنانت لە گرووپی دیاریکراو ئێستا بە سەرکەوتوویی لابرایت.',
	'GROUP_TYPE'	=> 'جۆری گرووپ',
	'GROUP_UNDISCLOSED'	=> 'شاردنەوەی گرووپ',
	'FORUM_UNDISCLOSED'	=> 'چاودێریی کردنی مەکۆ شاراوەکان',

	'LOGIN_EXPLAIN_GROUP'	=> 'پێویستە بچیتە ژوورەوە بۆ بینینی وردەکارییەکانی گرووپ.',
	'NO_LEADERS'	=> 'تۆ پێشڕەوەی هیچ گرووپێک نیت',
	'NOT_LEADER_OF_GROUP'	=> 'ناتوانرێت کردەی داواکراو بە ئەنجام بگەیەندرێت لەبەر ئەوەی تۆ پێشڕەوی فرووپی دیاریکراو نیت.',
	'NOT_MEMBER_OF_GROUP'	=> 'ناتوانرێت کردەی داواکراو بە ئەنجام بگەیەندرێت لەبەر ئەوەی تۆ ئەندامی گرووپی دیاریکراو نیت یان ئەندامەتیت تا ئێستا پەسەند نەکراوە.',
	'NOT_RESIGN_FROM_DEFAULT_GROUP'	=> 'ڕێت پێ نەدراوە کە واز بهێنیت لە گرووپە بنەڕەتییەکەت',
	'PRIMARY_GROUP'	=> 'گرووپی سەرەتایی',
	'REMOVE_SELECTED'	=> 'دیاریکراو لاببە',
	'USER_GROUP_CHANGE'	=> 'لە گرووپی “%1$s” ـەوە بۆ “%2$s”',
	'USER_GROUP_DEMOTE'	=> 'وازهێنان لە پێشڕەویی',
	'USER_GROUP_DEMOTE_CONFIRM'	=> 'دڵنیایت لە نزم کردنەوەی پلەی خۆت وەک پێشڕەوی گرروپ لە گرووپی دیاریکراو؟',
	'USER_GROUP_DEMOTED'	=> 'بە سەرکەوتوویی پێشڕەویت نزم کرایەوە.',
));

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

// Banning
$lang = array_merge($lang, array(
	'1_HOUR'	=> '١ کاژێر',
	'30_MINS'	=> '٣٠ خولەک',
	'6_HOURS'	=> '٦ کاژێر',

	'ACP_BAN_EXPLAIN'	=> 'لێرە دەتوانی دەستبگریت بەسەر ڕاگرتنی بەکارهێنەران بەهۆی ناویانەوە، IP یان ناونیشانی ئیەمیڵ. ئەو ڕێگایانە بەکارهێنەرێک دووردەخاتەوە لەهەر بەشێکی مەکۆکە. دەتوانی هۆکارێکی کورت بنووسی بۆ ڕاگرتنەکە ئەگەر ویستت. کە تەنها لە تۆمارگەری بەڕێوەبەر نیشان دەدرێت. وە کات و ماوەی ڕاگرتنیش دەتوانرێ دیاریبکرێ. ',
	'BAN_EXCLUDE'	=> 'جیاکردنەوە لە ڕاگرتن',
	'BAN_LENGTH'	=> 'ماوەی قەدەغەکردن',
	'BAN_REASON'	=> 'هۆکاری قەدەغەکردن',
	'BAN_GIVE_REASON'	=> 'هۆکاری ڕاگرترن ( کە ڕاگیراو دەیبینێت)',
	'BAN_UPDATE_SUCCESSFUL'	=> 'لیستی ڕاگیراوان بە سەرکەوتوویی نوێکرایەوە.',
	'BANNED_UNTIL_DATE'		=> 'هەتا %s', // Example: "until Mon 13.Jul.2009, 14:44"
	'BANNED_UNTIL_DURATION'	=> '%1$s (هەتا %2$s)', // Example: "7 days (until Tue 14.Jul.2009, 14:44)"
	'EMAIL_BAN'	=> 'ناونیشانی ئیمەیلێک یان زیاتر ڕابگرە',
	'EMAIL_BAN_EXCLUDE_EXPLAIN'	=> 'ڕێ بەمە بدە کە ناونیشانی ئیمەیلە نووسراوەکان جیا بکاتەوە لە هەموو ڕاگرتنە هەنووکەییەکان.',
	'EMAIL_BAN_EXPLAIN'	=> 'بۆ دیاریکردنی زیاتر لە ناونیشانی ئیمەیلێک هەر یەکەیان لە هێڵێکی نوێ بنووسە. بۆ گرتنی بەشێکی ناونیشانەکە * بەکارببە وەک wildcad، نمونە <samp>*@hotmail.com</samp>، <samp>*@*.domain.tld</samp> وە هەروەها.',
	'EMAIL_NO_BANNED'	=> 'ناونیشانی هیچ ئیمەیلێکی ڕاگیراو نییە.',
	'EMAIL_UNBAN'	=> 'گێڕاندنەوەی ئیمەیلە ڕاگیراوەکان.',
	'EMAIL_UNBAN_EXPLAIN'	=> 'ئەتوانیت ناونیشانی چەند ئیمەیلێکی ڕاگیراو بگێڕیتەوە بە یەک جار بە بەکارهێنانی چەند کلیلێکی تەختەکلیل و مشک لە یەک کاتدا بۆ کۆمپیوتەرەکەت و وێبگەڕەکەت.',
	'IP_BAN'	=> 'IP ـیەک یان زیاتر ڕابگرە',
	'IP_BAN_EXCLUDE_EXPLAIN'	=> 'ڕێ بەمە بدە کەIP ـیە نووسراوەکان جیا بکاتەوە لە هەموو ڕاگرتنە هەنووکەییەکان.',
	'IP_BAN_EXPLAIN'	=> 'بۆ دیاریکردنی چەند IP و ناوی ڕاژەیەکی جیاواز هەر یەکەیان لە هەڵێکی نوێ دابنێ. بۆ دیاریکردنی ڕێژەیەک IP سەرەتا و کۆتایی بە هێمای کەم (-) جیا بکەوە، بۆ دیاریکردنی wildcard ـێک “*” بەکارببە.',
	'IP_HOSTNAME'	=> 'ناونیشانی IPیان ناوی ڕاژە',
	'IP_NO_BANNED'	=> 'ناونیشانی هیچ IP ـیەکی ڕاگیراو نییە.',
	'IP_UNBAN'	=> 'گێڕاندنەوەی IP ـی ڕاگیراو',
	'IP_UNBAN_EXPLAIN'	=> 'ئەتوانیت چەند IP ـیەکی ڕاگیراو بگێڕیتەوە بە یەک جار بە بەکارهێنانی چەند کلیلێکی تەختەکلیل و مشک لە یەک کاتدا بۆ کۆمپیوتەرەکەت و وێبگەڕەکەت.',
	'LENGTH_BAN_INVALID'	=> 'ڕێکەوت پێویستە بە شێوازی <kbd>YYYY-MM-DD</kbd> بێت.',
	'OPTIONS_BANNED'			=> 'ڕاگیراو',
	'OPTIONS_EXCLUDED'			=> 'جیاکراوە',
	'PERMANENT'	=> 'هەمیشەیی',
	'UNTIL'	=> 'هەتا',
	'USER_BAN'	=> 'بەکارهێنەرێک یان زیاتر ڕابگرە',
	'USER_BAN_EXCLUDE_EXPLAIN'	=> 'ڕێ بەمە بدە کە بەکارهێنەرە نووسراوەکان جیا بکاتەوە لە هەموو ڕاگرتنە هەنووکەییەکان.',
	'USER_BAN_EXPLAIN'	=> 'ئەتوانیت چەند بەکارهێنەرێک ڕابگریت بە یەک جار بە نووسینی ناوی هەر ناوێک لە هێڵێکی نوێدا. <span style="text-decoration: underline;">ئەندامێک بدۆزەرەوە</span> بەکار ببە بۆ گەڕان و زیادکردنی بەکارهێنەری زیاتر.',
	'USER_NO_BANNED'	=> 'هیچ بەکارهێنەرێک ڕانەگیراوە',
	'USER_UNBAN'	=> 'گێڕاندنەوەی بەکارهێنەرە ڕاگیراوەکان',
	'USER_UNBAN_EXPLAIN'	=> 'ئەتوانیت چەند بەکارهێنەرێکی ڕاگیراو بگێڕیتەوە بە یەک جار بە بەکارهێنانی چەند کلیلێکی تەختەکلیل و مشک لە یەک کاتدا بۆ کۆمپیوتەرەکەت و وێبگەڕەکەت.',
));

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

// Email settings
$lang = array_merge($lang, array(
	'ACP_MASS_EMAIL_EXPLAIN'	=> 'لێرە دەتوانیت پەیامێک ئیمەیڵ بکەیت بۆ هەموو بەکارهێنەرانت یان هەموو بەکارهێنەرانی گرووپێکی دیاریکراو <strong>بوونی ئەم هەڵبژاردنە بۆ وەرگرتنی ئیمەیڵی گشتی چالاککراوە</strong> ،بۆ لێکۆڵینەوەی ئەوە ئیمەیڵێک دەنێردرێ بۆ ناونیشانی ئیمەیڵی سەپاوی بەڕێوەبەر ،لەگەڵ کاربۆنێکی کوێر نێردراو لەبەربگرەوە بۆ هەموو وەرگرەکان. ڕێکخستنە بنەڕەتەکان تەنها بۆ 50 وەرگر لەخۆ دەگرێت لە ئیمەیڵێکی بۆ وەرگرتی زیاتر ئیمەیڵی زیاتر دەنێردرێ. ئەگەر تۆ گرووپێکی گەورە لە خەڵک ئیمەیڵ دەکەیت تکایە هێمن بە لەدوای ناردنی و پەڕەکە لە ناوەندا ڕامەگرە. ئاساییە بۆ ئیمەیڵکردنی گشتی بۆ ئەوەی کاتێکی درێژ بخایەنێت ،ئاگادار دەکرێیتەوە لەدوای تەواوبوونی کردارەکە.',
	'ALL_USERS'	=> 'هەموو بەکارهێنەران',
	'COMPOSE'	=> 'بەشکردن',
	'EMAIL_SEND_ERROR'	=> 'هەڵەیەک یان زیاتر هەبوو لەکاتی ناردنی ئیمەیڵەکە. تکایە %sلۆگی هەڵە%s بپشکنە بۆ پەیامە هەڵەکانی وردەکاریکراو.',
	'EMAIL_SENT'	=> 'ئەم پەیامە نێردرا.',
	'EMAIL_SENT_QUEUE'	=> 'ئەم پەیامە لە نۆرەدایە بۆ ناردن.',
	'LOG_SESSION'	=> 'دانیشتنی لۆگی مەیڵ بۆ لۆگی شیکاری',
	'SEND_IMMEDIATELY'	=> 'یەکسەر بینێرە',
	'SEND_TO_GROUP'	=> 'بینێرە بۆ گرووپ',
	'SEND_TO_USERS'	=> 'بینێرە بۆ بەکارهێنەران',
	'SEND_TO_USERS_EXPLAIN'	=> 'نووسینی ناوەکان لێرە هەر گرووپێکی دەستنیشان کراوی سەرەوە ڕادەخات. هەر ناوی بەکارهێنەرێک بنووسە لەسەر هێڵێکی نوێ.',
	'MAIL_BANNED'			=> 'ئیمەیڵ بۆ بەکارهێنەرە ڕاگیراوەکان',
	'MAIL_BANNED_EXPLAIN'	=> 'کاتێک ئیمەیڵێک دەنێری بۆ گرووپێک دەتوانی دیاریبکەی کە بەکارهێنەرە ڕاگیراوەکانیش ئەو ئیمەیڵەیان پێبگات یان نا.',
	'MAIL_HIGH_PRIORITY'	=> 'بەرز',
	'MAIL_LOW_PRIORITY'	=> 'نزم',
	'MAIL_NORMAL_PRIORITY'	=> 'ئاسایی',
	'MAIL_PRIORITY'	=> 'یەکەمییەکانی مەیڵ',
	'MASS_MESSAGE'	=> 'پەیامەکەت',
	'MASS_MESSAGE_EXPLAIN'	=> 'تکایە سەرنجی ئەوە بدە کە لەوانەیە تۆ تەنها دەقی نەخش بنووسی. هەموو گەڕاندنەوەکان دەسڕدرێنەوە لەدوای ناردن.',
	'NO_EMAIL_MESSAGE'	=> 'پێویستە پەیامێک بنووسیت.',
	'NO_EMAIL_SUBJECT'	=> 'پێویستە سەردێڕێک بۆ پەیامەکەت بنووسیت.',
));

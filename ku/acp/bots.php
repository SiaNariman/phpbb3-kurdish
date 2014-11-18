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

// Bot settings
$lang = array_merge($lang, array(
	'BOTS'	=> 'بەڕێوەبردنی بۆتەکان',
	'BOTS_EXPLAIN'	=> '"Bots" ,"spiders" یان "crawlers" بریکاری خۆکارکراون ئاساییانە زۆرتر بەکاردەبرێن لەلایەن بزوێنەرەکانی گەڕان بۆ نوێکردنەوەی بنکەدراوەکانیان. لەو کاتەوەی ئەوان سوودێکی زیاتری لێ وەردەگرن لە دانیشتنەکان دەتوانن ژمێریاریی سەردانکەران بکەن. کەمکردنی بار و هەندێکات سەرنەخستی پێڕستی وێبگەکان بەدروست. لێرە دەتوانی جۆرێکی تایبەت لە بەکارهێنەر دیاریبکەی بۆ بەسەرداچوونی ئەو کێشانە.',
	'BOT_ACTIVATE'	=> 'چالاککرن',
	'BOT_ACTIVE'	=> 'چالاکی بووت',
	'BOT_ADD'	=> 'بۆت زیاد بکە',
	'BOT_ADDED'	=> 'بە سەرکەوتوویی بۆتی نوێ زیادکرا',
	'BOT_AGENT'	=> 'گونجاوی بریکار',
	'BOT_AGENT_EXPLAIN'	=> 'کۆڵێک دەگونجێ بۆ بریکاری وێبگەڕەکان ،گونجاندنی بەشکراو ڕێگادراوە.',
	'BOT_DEACTIVATE'	=> 'ناچالاککردن',
	'BOT_DELETED'	=> 'بە سەرکەوتوویی بۆت سڕدرایەوە.',
	'BOT_EDIT'	=> 'دەستکاریکردنی بۆتەکان',
	'BOT_EDIT_EXPLAIN'	=> 'لێرە دەتوانیت دەروازەیەکی بووتێکی چالاک زیاد بکەی یان دەستکاری بکەی. دەتوانی بریکارێک پێناسە بکەیت یان/لەگەڵ دانەیەک یان زیاتر ناونیشانی IP  بۆ گونجاندن. وریابە لەکاتی پێناسەکردنی ناونیشانی بریکار. دەتشتوانی شێوازێک دیاریبکەی لەگەڵ زمان کە بووتە پێیوە مەکۆکە دەکاتەوە. ئەمە لەوانەیە ڕێگات بدات بۆ هێنانەوەی باندبەرینی لەلایەن ڕێکخستنی شێوازێکی سادە بۆ بووتەکان. لەیادت بێت بۆ دانای دەسەڵاتی بەرامبەرکێ بۆ بووتی تایبەتی گرووپی بەکارهێنەر.',
	'BOT_LANG'	=> 'زمانی بۆت',
	'BOT_LANG_EXPLAIN'	=> 'زمانەکە پێشکەشکراوە بۆ بووتەکە وەکو ئەوەی دەگەڕێ.',
	'BOT_LAST_VISIT'	=> 'دوا سەردان',
	'BOT_IP'	=> 'ناونیشانی IP بووت',
	'BOT_IP_EXPLAIN'	=> 'گونجاندنی بەشکراوی ڕێگادراوە ،ناونیشانەکان جیابکەوە بەهۆی مێرگولەوە.',
	'BOT_NAME'	=> 'ناوی بۆت',
	'BOT_NAME_EXPLAIN'	=> 'بەکارهێنراوە تەنها بۆ زانیاری خۆت.',
	'BOT_NAME_TAKEN'	=> 'ناوەکە پێشووتر لە کاردایە لەسەر مەکۆکەت و ناتوانرێ بەکاربهێنرێت بۆ بووتەکە.',
	'BOT_NEVER'	=> 'هەرگیز',
	'BOT_STYLE'	=> 'ڕووخساری بۆت',
	'BOT_STYLE_EXPLAIN'	=> 'شێوازەکە بەکارهێنراوە بۆ مەکۆکە لەلایەن بووتەکە.',
	'BOT_UPDATED'	=> 'بووتی چالاک نوێکراوەیە بەسەرکەوتوویی.',
	'ERR_BOT_AGENT_MATCHES_UA'	=> 'بریکاری بووتەکەی کە تۆ سەپاندووتە بچووکترە بۆ ئەوەی ئێستاکە بەکاری دەهێنیت. تکایە بریکارەکە بخەمڵێنە بۆ ئەو بووتە.',
	'ERR_BOT_NO_IP'	=> 'ناونیشانی IP کە سەپاندووتە نادروست بوو ،یان ناوی خانەخوێیەکە ناوتوانرێ شیکار بکرێ.',
	'ERR_BOT_NO_MATCHES'	=> 'دەبێت تۆ بەلایەنی کەم یەکێک لەو بریکارانە بسەپێنی یان IP بۆ ئەو گونجاندنی بووتە.',
	'NO_BOT'	=> 'هیچ بووتێک نەدۆزرایەوە لەگەڵ ID ــی دیاریکراو.',
	'NO_BOT_GROUP'	=> 'ناتوانرێ گرووپی بووتی تایبەت بدۆزرێتەوە.',
));

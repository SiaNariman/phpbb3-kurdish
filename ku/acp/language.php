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
	'ACP_FILES'	=> 'پەڕگەکانی زمانی بەڕێوەبەرایەتی',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> 'لێرە ئەتوانیت پەڕگەکانی زمان دابمەزرێنیت/بسڕیتەوە. پەڕگەی زمانی بنەڕەت بە ئەستێرەیەک هێما کراوە (*).',
	'EMAIL_FILES'	=> 'قاڵبەکانی ئیمەیل',
	'FILE_CONTENTS'	=> 'ناوەڕۆکەکانی پەڕگە',
	'FILE_FROM_STORAGE'	=> 'پەڕگە لە بوخچەی پاشەکەوتەوە',
	'HELP_FILES'	=> 'پەڕگەکانی یارمەتی',
	'INSTALLED_LANGUAGE_PACKS'	=> 'گورزەی زمانە دامەزراوەکان',
	'INVALID_LANGUAGE_PACK'	=> 'وا دیارە گورزەی زمانی دیارکراو ناتەواوە. تکایە لە گورزەی زمانەکە دڵنیابەوە و جارێکی تر باری بکە، گەر پێویستی کرد.',
	'INVALID_UPLOAD_METHOD'	=> 'ڕێبازی بارکردنی دیاریکراو گونجاو نییە، تکایە ڕێبازێکی تر هەڵبژێرە.',
	'LANGUAGE_DETAILS_UPDATED'	=> 'وردەکارییەکانی زمان بە سەرکەوتوویی نوێکرانەوە.',
	'LANGUAGE_ENTRIES'	=> 'دانەکانی زمان',
	'LANGUAGE_ENTRIES_EXPLAIN'	=> 'لێرە ئەتوانیت گورزەی زمانەکان و ئەوانەش کە هێشتا تەواو وەرنەگێڕدراون، بگۆڕیت.<br /><strong>تێبینی:</strong>هەر کە پەڕگەی زمانێکت گۆڕی، گۆڕانکارییەکان لە بوخچەیەکی تر پاشەکەوت دەکرێن بۆت تا بتوانیت دایان بگریت. گۆڕانکارییەکان لەلایەن بەکارهێنەرانەوە نابیبنرێن هەتا ئەیانکەیتە جێی پەڕگە ڕەسەنەکانی زمان لە وێبگەکەت. (بە بارکردنیان).',
	'LANGUAGE_FILES'	=> 'پەڕگەکانی زمان',
	'LANGUAGE_KEY'	=> 'کلیلی زمان',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'ئەم گورزەی زمانە پێشتر دامەزراوە',
	'LANGUAGE_PACK_DELETED'	=> 'گورزەی زمانی <strong>%s</strong> بە سەرکەوتوویی لابرا. هەموو ئەو بەکارهێنەرانەی ئەم زمانە بەکار دبەن بۆیان گۆڕدرا بە زمانی بنەڕەتی.',
	'LANGUAGE_PACK_DETAILS'	=> 'وردەکارییەکانی گورزەی زمان',
	'LANGUAGE_PACK_INSTALLED'	=> 'گورزەی زمانی <strong>%s</strong> بە سەرکەوتوویی دامەزرا.',
	'LANGUAGE_PACK_CPF_UPDATE'			=> 'ڕستەکانی زمان لە خانە خۆکردەکانی پرۆفایل کۆنووسکران لە زمانی بنەڕەتەوە. تکایە بیانگۆڕە ئەگەر پێویست بوو.',
	'LANGUAGE_PACK_ISO'	=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'	=> 'ناوی ناوچەیی',
	'LANGUAGE_PACK_NAME'	=> 'ناو',
	'LANGUAGE_PACK_NOT_EXIST'	=> 'گورزەی زمانی دیاریکراو بوونی نییە.',
	'LANGUAGE_PACK_USED_BY'	=> 'بەکار دەبرێت لەلایەن (ڕۆبۆتەکانیش)',
	'LANGUAGE_VARIABLE'	=> 'گۆڕاوی زمان',
	'LANG_AUTHOR'	=> 'دانەری گورزەی زمان',
	'LANG_ENGLISH_NAME'	=> 'ناوی ئینگلیزی',
	'LANG_ISO_CODE'	=> 'کۆدی ISO',
	'LANG_LOCAL_NAME'	=> 'ناوی ناوچەیی',
	'MISSING_LANGUAGE_FILE'	=> 'پەڕگەی زمانی لەناوچوو: <strong style="color:red">%s</strong>',
	'MISSING_LANG_VARIABLES'	=> 'گۆڕاوە لەناوچووەکانی زمان',
	'MODS_FILES'	=> 'پەڕگەکانی زمانی پێوەکراوەکان.',
	'NO_FILE_SELECTED'	=> 'هیچ پەڕگەی زمانێکت دیاری نەکردووە.',
	'NO_LANG_ID'	=> 'هیچ گورزەی زمانێکت دیاری نەکردووە.',
	'NO_REMOVE_DEFAULT_LANG'	=> 'ناتوانیت گورزەی زمانی بنەڕەتی بسڕیتەوە.<br />گەر ئەتەوێت ئەم گورزەی زمانە بسڕیتەوە، پێویستە گورزەی زمانی بنەڕەتی مەکۆکەت بگۆڕیت.',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> 'هیچ بوخچەیەکی زمانی لابراو نییە.',
	'REMOVE_FROM_STORAGE_FOLDER'	=> 'لای ببە لە بوخچەی پاشەکەوت',
	'SELECT_DOWNLOAD_FORMAT'	=> 'فۆڕماتی داگرتن دیاری بکە',
	'SUBMIT_AND_DOWNLOAD'	=> 'ناردن و داگرتنی پەڕگە',
	'SUBMIT_AND_UPLOAD'	=> 'ناردن و بارکردنی پەڕگە',
	'THOSE_MISSING_LANG_FILES'	=> 'ئەم پەڕگەی زمانانەی خوارەوە لەناوچوون لە نێو بوخچەی زمانی %s.',
	'THOSE_MISSING_LANG_VARIABLES'	=> 'ئەم گۆڕاوانەی خوارەوەی زمان لەناوچوون لە گورزەی زمانی <strong>%s</strong>.',
	'UNINSTALLED_LANGUAGE_PACKS'	=> 'گورزەی زمانە لابراوەکان.',
	'UNABLE_TO_WRITE_FILE'	=> 'نەتوانرا پەڕگە بنووسرێت بۆ %s',
	'UPLOAD_COMPLETED'	=> 'بارکردنەکە بە سەرکەوتوویی کۆتایی هات.',
	'UPLOAD_FAILED'	=> 'بارکردنەکە شکستی هێنا لەبەر هۆکارێکی نەزانراو. لەوانەیە پێوسیت بێت دەستکارانە پەڕگەکە بار بکەیت.',
	'UPLOAD_METHOD'	=> 'ڕێبازی بارکردن',
	'UPLOAD_SETTINGS'	=> 'ڕێکخستنەکانی بارکردن',
	'WRONG_LANGUAGE_FILE'	=> 'پەڕگەی زمانی دیاریکراو ناتەواوە.',
));
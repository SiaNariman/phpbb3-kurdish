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

// Database Backup/Restore
$lang = array_merge($lang, array(
	'ACP_BACKUP_EXPLAIN'	=> 'لێرە دەتوانیت هەموو داتا پەیوەندیدارەکانی phpBB ــەکەت هەڵبگریت. دەتوانی ئەنجامی ئەرشیفەکە کۆگابکەی لە بوخچەی <samp>store/</samp> یان ڕاستەوخۆ دایبگریت. بەپێی دیمەنکردنی ڕاژەکەت دەتوانی پەڕگەکە بپەستێویت لە ژمارەیەک جۆر پەستاوتندا.',
	'ACP_RESTORE_EXPLAIN'	=> 'ئەمە گەڕاندنەوەی هەموو خشتەکانی phpBB دەگرێتەخۆ لە پەڕگەیەکی پاشەکەوتکراو. ئەگەر ڕاژەکەت پاڵپشتی دەکات دەتوانی دەقی پەستێوراوی gzip یان bzip2 بەکارببەیت و خۆکارانە لە پەستێوراوەکە دەردەهێنرێت.<strong>ئاگاداری</strong> ئەمە هەر داتایەکی چالاک دەنووسێتەوە لەسەریان. گەڕاندنەوەکە لەوانەیە کاتێکی درێژ بخایەنێت بۆ کردارکردن تکایە ئەو پەڕەیە مەگوازەوە تاوەکو ئەمە تەواودەبێت. هەڵگرتنەکان کۆگاکراون لە بوخچەی <samp>store/</samp> و تووشکراون بۆ ئەوەی بەرهەمبێن لەلایەن نەخشەکردنی گەڕاندنەوەی phpBB. هێنانەوەی گەڕاندنەوەکان کە دروست نەکراون لەلایەن سیستەمەکە لەوانەیە کارنەکەن.',
	'BACKUP_DELETE'	=> 'پەڕگەی پشتگیری بە سەرکەوتوویی سڕدرایەوە.',
	'BACKUP_INVALID'	=> 'پەڕگەی دیاریکراو بۆ پشتگیری نەگونجاوە.',
	'BACKUP_OPTIONS'	=> 'هەڵبژاردنەکانی پشتگیری',
	'BACKUP_SUCCESS'	=> 'پەڕگەی پشتگیری بە سەرکەوتوویی دروستکرا.',
	'BACKUP_TYPE'	=> 'جۆری پشتگیری',
	'DATABASE'	=> 'خزمەتگوزارییەکانی بنکەدراوە',
	'DATA_ONLY'	=> 'تەنها دراوە',
	'DELETE_BACKUP'	=> 'پشتگیری بسڕەوە',
	'DELETE_SELECTED_BACKUP'	=> 'دڵنیایت لە سڕینەوەی پەڕگەی پشتگیری دیاریکراو؟',
	'DESELECT_ALL'	=> 'هیچ دیاری مەکە',
	'DOWNLOAD_BACKUP'	=> 'پەڕگەی پشتگیری دابگرە',
	'FILE_TYPE'	=> 'جۆری پەڕگە',
	'FILE_WRITE_FAIL'	=> 'نەتوانرا پەڕگە بنووسرێت لە بوخچەی پاشەکەوت.',
	'FULL_BACKUP'	=> 'پڕ',
	'RESTORE_FAILURE'	=> 'لەوانەیە پەڕگەی پشتگیری تێکچووبێت.',
	'RESTORE_OPTIONS'	=> 'هەڵبژاردنەکان بگێڕەوە',
	'RESTORE_SELECTED_BACKUP'	=> 'دڵنیایت لەوەی کە دەتەوێ پشتگیرییە دیاریکراوەکان بگێڕیەوە؟',
	'RESTORE_SUCCESS'	=> 'بنکەدراوە بە سەرکەوتوویی گێڕدرایەوە.<br /><br />مەکۆکەت پێویستە بگەڕێتەوە بۆ ئەو دۆخەی کە پەڕگەی پشتگیرییەکە دروستکرا.',
	'SELECT_ALL'	=> 'هەمووی دیاری بکە',
	'SELECT_FILE'	=> 'پەڕگەیەک دیاری بکە',
	'START_BACKUP'	=> 'دەست بە پشتگیری بکە',
	'START_RESTORE'	=> 'دەست بکە گێڕاندنەوە بکە',
	'STORE_AND_DOWNLOAD'	=> 'پاشەکەوتی بکە و دایبگرە',
	'STORE_LOCAL'	=> 'پەڕگەکە ناوخۆییانە پاشەکەوت بکە',
	'STRUCTURE_ONLY'	=> 'تەنها پێکهاتە.',
	'TABLE_SELECT'	=> 'دیاریکردنی خشتەکان',
	'TABLE_SELECT_ERROR'	=> 'پێویستە لانی کەم خشتەیەک دیاری بکەیت.',
));

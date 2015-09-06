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
	'ACP_MODULE_MANAGEMENT_EXPLAIN'	=> 'لێرە دەتوانی هەموو جۆرە یەکەکان بەڕێوەببەی. تکایە سەرنجی ئەوە بدە کە کۆنترۆڵ پانێڵی بەڕێوەبەرایەتی سێ قۆناغ قەدبڕی مێنوی هەیە (هاوپۆل -> هاوپۆل -> یەکە) لەڕێگای بوونی دوو قۆناغەکەی تر (هاوپۆل -> یەکە) کە دەبێت بهێڵدرێتەوە. تکایە وریابە کە لەوانەیە خۆت ئەبڵەق بخەیت ئەگەر تۆ یەکەکان ناچالاک بکەیت چونکە یەکەکان خۆیان بەرپرسی بەڕێوەبردنی خۆیانن.',
	'ADD_MODULE'					=> 'یەکە زیادبکە',
	'ADD_MODULE_CONFIRM'			=> 'دڵنیایت کە دەتەوێ یەکەی هەڵبژێردراو زیادبکەی لەگەڵ دۆخی هەڵبژێردراو؟',
	'ADD_MODULE_TITLE'				=> 'یەکە زیادبکە',

	'CANNOT_REMOVE_MODULE'	=> 'ناتوانرێ یەکە بسڕدرێتەوە ،ئەمە پێکهێنراوی منداڵانە. تکایە هەموو منداڵان لابەرە یان بگوازەوە پێش ئەوەی ئەو کردارە بکەیت.',
	'CATEGORY'				=> 'هاوپۆل',
	'CHOOSE_MODE'			=> 'دۆخی یەکە هەڵبژێرە',
	'CHOOSE_MODE_EXPLAIN'	=> 'دۆخی بەکاربردووی یەکەکان هەڵبژێرە',
	'CHOOSE_MODULE'			=> 'یەکە هەڵبژێرە',
	'CHOOSE_MODULE_EXPLAIN'	=> 'پەڕگەی بانگکراو لەلایەن ئەو یەکە هەڵبژێرە',
	'CREATE_MODULE'			=> 'یەکەی نوێ دروستبکە',

	'DEACTIVATED_MODULE'	=> 'یەکە بکوژێنەوە',
	'DELETE_MODULE'			=> 'یەکە بسڕەوە',
	'DELETE_MODULE_CONFIRM'	=> 'دڵنیایت لە بەردەوامبوون بۆ سڕینەوەی ئەو یەکەیە؟',

	'EDIT_MODULE'			=> 'دەستکاری یەکە بکە',
	'EDIT_MODULE_EXPLAIN'	=> 'لێرە دەتوانی ڕێکخستنی دیاریکراوی یەکە بنووسیت.',

	'HIDDEN_MODULE'			=> 'یەکەی شاراوە',

	'MODULE'					=> 'یەکە',
	'MODULE_ADDED'				=> 'یەکە بەسەرکەوتوویی زیادکرا.',
	'MODULE_DELETED'			=> 'یەکە بەسەرکەوتوویی سڕایەوە.',
	'MODULE_DISPLAYED'			=> 'یەکە نیشاندرا',
	'MODULE_DISPLAYED_EXPLAIN'	=> 'ئەگەر تۆ ناخوازیت بۆ نیشاندانی ئەو یەکەیە ،بەڵام دەتەوێ بەکاری بهێنیت ،ئەمە بۆ نەخێر دابنێ.',
	'MODULE_EDITED'				=> 'یەکە بەسەرکەوتوویی دەستکاریکرا.',
	'MODULE_ENABLED'			=> 'یەکە چالاککرا',
	'MODULE_LANGNAME'			=> 'ناوی زمانی یەکە',
	'MODULE_LANGNAME_EXPLAIN'	=> 'ناوی نیشاندراوی یەکە بنووسە. زمانی جێگیر بەکارببە ئەگەر ناو خزمەتکراوە لە پەڕگەی زمان.',
	'MODULE_TYPE'				=> 'جۆری یەکە',

	'NO_CATEGORY_TO_MODULE'	=> 'ناتوانرێ هاوپۆل بخرێتە ناو یەکە. تکایە هەموو منداڵان لابەرە/بگوازەوە پێش بەردەوامبوونی ئەم کردارە.',
	'NO_MODULE'				=> 'هیچ یەکە نەدۆزرایەوە.',
	'NO_MODULE_ID'			=> 'هیچ ناونیشانی یەکە دیارینەکراوە.',
	'NO_MODULE_LANGNAME'	=> 'هیچ ناوی زمانی یەکە دیارینەکراوە.',
	'NO_PARENT'				=> 'بێ خێزان',

	'PARENT'				=> 'خێزان',
	'PARENT_NO_EXIST'		=> 'خێزان بوونی نییە',

	'SELECT_MODULE'			=> 'یەکەیەک هەڵبژێرە',
));

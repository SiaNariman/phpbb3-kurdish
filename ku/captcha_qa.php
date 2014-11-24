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
	'CAPTCHA_QA'				=> 'پرسیار و وەڵام',
	'CONFIRM_QUESTION_EXPLAIN'	=> 'ئەو پرسیارە پرسیارە مانایەکە بۆ دورخستنەوەی فرۆمە خۆکارەکان لەلایەن بوتەکانی سپامەوە',
	'CONFIRM_QUESTION_WRONG'	=> 'تۆ وەڵامێکی هەڵەت بەخشی بۆ ئەو پرسیارە',

	'QUESTION_ANSWERS'			=> 'وڵامەکان',
	'ANSWERS_EXPLAIN'			=> 'تکایە وەڵامێکی گونجاو بۆ پرسیارەکە بنووسە، ۆ هەر دێڕێک وەڵامێک',
	'CONFIRM_QUESTION'			=> 'پرسیار',

	'ANSWER'					=> 'وەڵام',
	'EDIT_QUESTION'				=> 'دەستکاری پرسیار بکە',
	'QUESTIONS'					=> 'پرسیار',
	'QUESTIONS_EXPLAIN'			=> 'چالاککرابێ بەکارهێنەران پرسیاریان لێ دەکرێت کە لێرە دادەنرێت ،دەبێ بە لایەنی کەم پرسیارێک دابنێی و پێویستە وەڵامی پرسیارەکە ئاسان و شیاو بێت Q&amp;A کە پێوەکراوی',
	'QUESTION_DELETED'			=> 'پرسیار سڕایەوە',
	'QUESTION_LANG'				=> 'زمان',
	'QUESTION_LANG_EXPLAIN'		=> 'ئەو زمانەی پرسیارەکە و وەڵامەکەی تێدا نووسراون',
	'QUESTION_STRICT'			=> 'توندی بپشکنە',
	'QUESTION_STRICT_EXPLAIN'	=> 'چالاککردن بۆ ناچارکردنی بەرگی تێکەڵکراو ،خاڵڕێژی و سپیایی',

	'QUESTION_TEXT'				=> 'پرسیار',
	'QUESTION_TEXT_EXPLAIN'		=> 'پرسیارەکە پێشکەشکرا بۆ بەکارهێنەرەکە',

	'QA_ERROR_MSG'				=> 'تکایە هەموو خانەکان پڕ بکەوە و لانی کەم وەڵامێک بنووسە',
	'QA_LAST_QUESTION'			=> 'ناتوانی هەموو پرسیارەکان بسڕیتەوە لەکاتێکدا پێوەکراوەکە چالاکە',
));

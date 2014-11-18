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
	'RECAPTCHA_LANG'				=> 'ku',
	'RECAPTCHA_NOT_AVAILABLE'		=> '<a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a> بەکاربهێنرێت ،پێویستە هەژمارێک دروستبکەیت لە reCaptcha وا داوادەکرێ.',
	'CAPTCHA_RECAPTCHA'				=> 'reCaptcha',
	'RECAPTCHA_INCORRECT'			=> 'ئەو نوسانەی دڵنیابوون کەنوسیوتن، بەداخەوە نادروستە! جاریکی تر هەوڵ بدەرەوە',

	'RECAPTCHA_PUBLIC'				=> 'reCaptcha کلیلی گشتی',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> '<a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a> کلیلەکان دەتوانرێت دەستبکەون لە، reCaptcha کلیلی گشتیت',
	'RECAPTCHA_PRIVATE'				=> 'reCaptcha کلیلی تایبەتی',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> '<a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a> کلیلەکان دەتوانرێن دەستبکەون لە، reCaptcha کلیلی تایبەتیت',

	'RECAPTCHA_EXPLAIN'				=> 'بۆ بەربەستکردنی ئامێرەکانی سپام، تکایە نوسەکان وەکو خۆی لەنێو خانەکەدا بنوسەوە. <br /> لەکاتی ناڕوونیدا، کرتە لەدووگمەی نوێکردنەوەی نوسەکان بکە یان بەدەنگ گوێی لێبگرە! ',
));

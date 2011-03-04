<?php
/**
*
* recaptcha [Sorani Kurdish]
*
* @package language
* @version $Id: captcha_recaptcha.php 9933 2009-08-06 09:12:21Z marshalrusty $
* @copyright (c) 2009 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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
	'RECAPTCHA_LANG'				=> 'en',
	'RECAPTCHA_NOT_AVAILABLE'		=> '<a href="http://recaptcha.net">reCaptcha.net</a> بەکاربهێنرێت ،پێویستە هەژمارێک دروستبکەیت لە reCaptcha وا داوادەکرێ.',
	'CAPTCHA_RECAPTCHA'				=> 'reCaptcha',
	'RECAPTCHA_INCORRECT'			=> 'ئەو نوسانەی دڵنیابوون کەنوسیوتن، بەداخەوە نادروستە! جاریکی تر هەوڵ بدەرەوە',

	'RECAPTCHA_PUBLIC'				=> 'reCaptcha کلیلی گشتی',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> '<a href="http://recaptcha.net">reCaptcha.net</a> کلیلەکان دەتوانرێت دەستبکەون لە، reCaptcha کلیلی گشتیت',
	'RECAPTCHA_PRIVATE'				=> 'reCaptcha کلیلی تایبەتی',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> '<a href="http://recaptcha.net">reCaptcha.net</a> کلیلەکان دەتوانرێن دەستبکەون لە، reCaptcha کلیلی تایبەتیت',

	'RECAPTCHA_EXPLAIN'				=> 'بۆ بەربەستکردنی ئامێرەکانی سپام، تکایە نوسەکان وەکو خۆی لەنێو خانەکەدا بنوسەوە. <br /> لەکاتی ناڕوونیدا، کرتە لەدووگمەی نوێکردنەوەی نوسەکان بکە یان بەدەنگ گوێی لێبگرە! ',
));

?>

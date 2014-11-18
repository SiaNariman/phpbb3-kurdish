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
	'ATTACHMENT'	=> 'هاوپێچ',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'تایبەتمەندییەکانی هاوپێچ ناچالاککراوە.',
	'BOOKMARK_ADDED'	=> 'بابەت بە سەرکەوتوویی دڵخوازکرا.',
	'BOOKMARK_ERR'	=> 'دڵخوازرکردنی بابەت شکستی هێنا. تکایە هەوڵ بدەوە.',
	'BOOKMARK_REMOVED'	=> 'بابەتی دڵخوازکراو بە سەرکەوتوویی لابرا.',
	'BOOKMARK_TOPIC'	=> 'بابەت دڵخواز بکە',
	'BOOKMARK_TOPIC_REMOVE'	=> 'لای ببە لە دڵخوازەکاندا',
	'BUMPED_BY'	=> 'دوا جار لێدراوە لەلایەن %1$s لە %2$s',
	'BUMP_TOPIC'	=> 'لێدانی بابەت',
	'CODE'	=> 'کۆد',
	'COLLAPSE_QR'	=> 'پەیامی خێرا بشارەوە',
	'DELETE_TOPIC'	=> 'بابەت بسڕەوە',
	'DOWNLOAD_NOTICE'	=> 'دەسەڵاتی پێویستت نییە بۆ بینینی پاڕگە هاوپێچکراوەکانی ئەم پەیامە.',
	'EDITED_TIMES_TOTAL'	=> 'دوا دەستکاریی لەلایەن %1$s لە %2$s،  کۆی گشتی %3$d جار دەستکاریی کراوە.',
	'EDITED_TIME_TOTAL'	=> 'دوا دەستکاریی لەلایەن %1$s لە %2$s،  کۆی گشتی %3$d جار دەستکاریی کراوە.',
	'EMAIL_TOPIC'	=> 'ئیمەیل بنێرە بۆ هاوڕێ',
	'ERROR_NO_ATTACHMENT'	=> 'هاوپێچی دیاریکراو چیتر بوونی نییە.',
	'FILE_NOT_FOUND_404'	=> 'پەڕگەی <strong>%s</strong> بوونی نییە.',
	'FORK_TOPIC'	=> 'بابەت ڕوونووس بکە',
	'FULL_EDITOR' => 'دەستکاریکەری تەواوەتی',
	'LINKAGE_FORBIDDEN'	=> 'ڕێت پێ نەدراوە کە بەستەر ببینیت/دابگریت لەم وێبگەیەوە.',
	'LOGIN_NOTIFY_TOPIC'	=> 'ئاگادار کرایتەوە لەم بابەتە، تکایە بچۆ ژوورەوە بۆ بینینی.',
	'LOGIN_VIEWTOPIC'	=> 'مەکۆ پێویستی بەوەیە کە خۆت تۆمار کردبێت و چووبێتیتە ژوورەوە بۆ بینینی ئەم بابەتە',
	'MAKE_ANNOUNCE'	=> 'بیگۆڕە بە "ئاگاداریی"',
	'MAKE_GLOBAL'	=> 'بیگۆڕە بە "گشتیی"',
	'MAKE_NORMAL'	=> 'بیگۆڕە بە "بابەتی ئاسایی"',
	'MAKE_STICKY'	=> 'بیگۆڕە بە "جێگیر"',
	'MAX_OPTIONS_SELECT'	=> 'پێویستە <strong>%d</strong> هەڵبژاردن یان زیاتر دیاریی بکەیت',
	'MAX_OPTION_SELECT'	=> 'پێویستە <strong>1</strong> هەڵبژاردن دیاریی بکەیت',
	'MISSING_INLINE_ATTACHMENT'	=> 'هاوپێچی <strong>%s</strong> چیتر بوونی نییە',
	'MOVE_TOPIC'	=> 'بابەت بگوازەوە',
	'NO_ATTACHMENT_SELECTED'	=> 'هیچ هاوپێچێکت دیاریی نەکردووە بۆ داگرتن یان بینین.',
	'NO_NEWER_TOPICS'	=> 'بابەتی نوێتر نییە لەم مەکۆیە.',
	'NO_OLDER_TOPICS'	=> 'بابەتی کۆنتر نییە لەم مەکۆیە.',
	'NO_UNREAD_POSTS'	=> 'پەیامی نوێی نەخوێندراوە نییە لەم مەکۆیە.',
	'NO_VOTE_OPTION'	=> 'پێویستە هەڵبژاردنێک دیاریی بکەیت بۆ دەنگدان.',
	'NO_VOTES'	=> 'هیچ دەنگێک',
	'POLL_ENDED_AT'	=> 'ڕاپرسیی کۆتایی هات لە %s',
	'POLL_RUN_TILL'	=> 'ڕاپرسیی کۆتایی دێت لە %s',
	'POLL_VOTED_OPTION'	=> 'دەنگت بەم هەڵبژاردنە دا',
	'PRINT_TOPIC'	=> 'بینین بە شێوەی چاپ',
	'QUICK_MOD'	=> 'ئامڕازەکانی جۆری-خێرا',
	'QUICKREPLY'	=> 'پەیامی خێرا',
	'QUOTE'	=> 'ئاماژە',
	'REPLY_TO_TOPIC'	=> 'وەڵامدانەوە بۆ بابەت',
	'RETURN_POST'	=> '%sبگەڕێوە بۆ پەیام%s',
	'SHOW_QR'	=> 'پەیامی خێرا',
	'SUBMIT_VOTE'	=> 'دەنگ بدە',
	'TOTAL_VOTES'	=> 'سەرجەم دەنگەکان',
	'UNLOCK_TOPIC'	=> 'بابەت بکەرەوە',
	'VIEW_INFO'	=> 'وردەکارییەکانی پەیام',
	'VIEW_NEXT_TOPIC'	=> 'بابەتی داهاتوو',
	'VIEW_PREVIOUS_TOPIC'	=> 'بابەتی پێشوو',
	'VIEW_RESULTS'	=> 'بینینی ئەنجامەکان',
	'VIEW_TOPIC_POST'	=> '1 پەیام',
	'VIEW_TOPIC_POSTS'	=> '%d پەیام',
	'VIEW_UNREAD_POST'	=> 'یەکەم پەیامی نەخوێندراوە',
	'VISIT_WEBSITE'	=> 'وێب',
	'VOTE_SUBMITTED'	=> 'دەنگەکەت درا',
	'VOTE_CONVERTED'	=> 'گۆڕینی دەنگەکان پاڵپشتی نەکراوە بۆ ڕاپرسییەکی گۆڕدراو.',
));

?>

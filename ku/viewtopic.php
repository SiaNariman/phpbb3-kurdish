<?php
/**
*  ئەم پەڕگەیە وەرگێڕدراوە
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
'APPROVE'	=> 'پەسەندکردن',
'ATTACHMENT'	=> 'هاوپێچ',
'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'تایبەتمەندێتی هاوپێچەکان ناچاڵاکە .',
'BOOKMARK_ADDED'	=> 'بابەت بەسەرکەوتویی بۆ لیستی دڵخوازەکان زیادکرا.',
'BOOKMARK_ERR'	=> 'زیادکردن بۆ دڵخوازەکان سەرکەوتو نەبوو. تکایە دووبارە هەولدەوە.',
'BOOKMARK_REMOVED'	=> 'بابەت بەسەرکەوتویی لە دڵخوازەکان سڕایەوە.',
'BOOKMARK_TOPIC'	=> 'زیادکردن بۆ دڵخوازەکان',
'BOOKMARK_TOPIC_REMOVE'	=> 'سڕینەوە لە دڵخوازەکان',
'BUMPED_BY'	=> 'دوایین بەرزکردنەوە لەلایەن %1$s لە %2 $s.',
'BUMP_TOPIC'	=> 'بەرزکردنەوەی بابەت',
'CODE'	=> 'کۆد',
'DELETE_TOPIC'	=> 'سڕینەوەی بابەت',
'DELETED_INFORMATION'	=> 'سڕایەوە لەلایەن %1$s لە %2$s',
'DISAPPROVE'	=> 'ڕەتکردن',
'DOWNLOAD_NOTICE'	=> 'دەسەڵاتی بینینی هاوپێچەکانت نییە لەم بەشدارییە.',
'EDITED_TIMES_TOTAL'	=> array(
1	=> 'دوایی دەستکاری لەلایەن %2$s لە %3$s,  %1$d جار دەستکاریکراوە.',
2	=> 'دوایی دەستکاری لەلایەن %2$s لە %3$s,  %1$d جار دەستکاریکراوە.',
),
'EMAIL_TOPIC'	=> 'بنێرە بۆ هاوڕێ',
'ERROR_NO_ATTACHMENT'	=> 'هاوپێچی دیاریکراو بوونی نییە.',
'FILE_NOT_FOUND_404'	=> 'فایلی <strong>%s</strong> بوونی نییە.',
'FORK_TOPIC'	=> 'لەبەرگرتنەوەی بابەت',
'FULL_EDITOR'	=> 'دەستکاریکردنی گشتی &amp; پێشبینین',
'LINKAGE_FORBIDDEN'	=> 'مۆلەتی بینین یان داگرتن یاخود پێکەوە بەستنەوەی بەستەر لە شوێنێکەوە بۆ ئەم سەکۆیەت نییە.',
'LOGIN_NOTIFY_TOPIC'	=> 'ئاگەداریت بۆ هاتووە دەربارەی ئەم بابەتە, تکایە بڕۆ ژوورەوە بۆ خوێندنەوەی ئاگەدارییەکە.',
'LOGIN_VIEWTOPIC'	=> 'پێویستە خۆت تۆمار بکەیت بۆ ئەوەی بتوانی ئەم بابەتە ببینی .',
'MAKE_ANNOUNCE'	=> 'گۆڕینی بۆ “ڕاگەیاندن”',
'MAKE_GLOBAL'	=> 'گۆڕینی بۆ “گشتی”',
'MAKE_NORMAL'	=> 'گۆڕینی بۆ “بابەتی ستاندارد”',
'MAKE_STICKY'	=> 'گۆڕینی بۆ “جێگیرکردن”',
'MAX_OPTIONS_SELECT'	=> array(
1	=> 'دەتوانیت <strong>%d</strong> هەلبژاردن دابنێیت',
2	=> 'دەتوانیت <strong>%d</strong> هەلبژاردن دابنێیت',
),
'MISSING_INLINE_ATTACHMENT'	=> 'هاوپێچی <strong>%s</strong> بوونی نییە',
'MOVE_TOPIC'	=> 'گواستنەوەی بابەت',
'NO_ATTACHMENT_SELECTED'=> 'تۆ هیچ هاوپێچێکت دیاری نەکردوە بۆ داگرتن یان بینین.',
'NO_NEWER_TOPICS'	=> 'هیچ بابەتێکی نوێ لەم بەشەدا نییە.',
'NO_OLDER_TOPICS'	=> 'هیچ بابەتێکی کۆن لەم بەشەدا نییە.',
'NO_UNREAD_POSTS'	=> 'هیچ بەشدارییەکی نوێی نەخوێندراو لەم بابەتەدا نییە.',
'NO_VOTE_OPTION'	=> 'دەبێت یەکێک لە هەلبژاردنەکان دیاری بکەی بۆ دەنگدان.',
'NO_VOTES'	=> 'بێ دەنگدان',
'POLL_ENDED_AT'	=> 'ڕاپرسی کۆتایی دێت لە  %s',
'POLL_RUN_TILL'	=> 'ڕاپرسی بەردەستە تاکو %s',
'POLL_VOTED_OPTION'	=> 'لەم هەلبژاردنە دەنگت داوە',
'POST_DELETED_RESTORE'	=> 'ئەم بەشدارییە سڕایەوە. دەتوانرێت بگەڕێندرێتەوە.',
'PRINT_TOPIC'	=> 'وەشانی بۆ چاپ کردن',
'QUICK_MOD'	=> 'ئامڕازەکانی سەرپەرشتیار',
'QUICKREPLY'	=> 'وەڵام دانەوەی خێرا',
'QUOTE'	=> 'دەق',
'REPLY_TO_TOPIC'	=> 'وەڵام دانەوەی بابەت',
'RESTORE'	=> 'گەڕاندنەوە',
'RESTORE_TOPIC'	=> 'گەڕاندنەوەی بابەت',
'RETURN_POST'	=> '%sگەڕانەوە بۆ لای بەشداری%s',
'SUBMIT_VOTE'	=> 'دەنگدان',
'TOPIC_TOOLS'	=> 'ئامڕازەکانی بابەت',
'TOTAL_VOTES'	=> ' سەرجەم دەنگەکان',
'UNLOCK_TOPIC'	=> ' کردنەوەی بابەت',
'VIEW_INFO'	=> ' وردەكارى بەشداری',
'VIEW_NEXT_TOPIC'	=> 'بابەتی داهاتوو',
'VIEW_PREVIOUS_TOPIC'	=> 'بابەتی پێشتر',
'VIEW_RESULTS'	=> 'بینینی ئەنجامەکان ',
'VIEW_TOPIC_POSTS'	=> array(
1	=> '%d بەشداری',
2	=> '%d بەشداری',
),
'VIEW_UNREAD_POST'	=> 'یەکەم بەشداری نەخوێندراو',
'VOTE_SUBMITTED'	=> 'بەسەرکەوتویی دەنگت دا.',
'VOTE_CONVERTED'	=> 'ناتوانی دەنگەکان پێکەوە ببەستی دوای پرۆسەی دەستکاریکردن.',
));

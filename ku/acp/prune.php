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

// User pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_USERS_EXPLAIN'	=> 'ئەو بەشە ڕێگات دەدات بۆ سڕینەوە و ناچالاککردنی بەکارهێنەران لە مەکۆکەت. هەژمارەکان دەتوانرێن فلتەر بکرێن لە زۆرجۆر ڕێگا؛ بە ژمارەی پەیام ،زۆرترین چالاکی ،هتد. پێوەر لەوانەیە بۆ کاریگەری بەکارهێنەران بەرتەسکی نەهێڵێت. بۆ نموونە ،دەتوانی بەکارهێنەران وشکبکەی کە لە 10 پەیام کەمتریان هەیە ،یان ئەوەی ناچالاکە لەدوای 2008-01-01 .جێگرەوانە ،دەتوانی پێوەرە دەستنیشانراوەکە تێبەپڕێنی بەتەواوی بە نووسینی لیستێک لە بەکارهێنەران (هەر دانەیەک لە دێڕێکی جودا) بۆناو دەقی خانەکە. وریابە لەگەڵ ئەو کردارە! هەرکە بەکارهێنەرێک سڕایەوە ،هیچ ڕێگایەک نییە بۆ گەڕاندنەوەی.',

	'CRITERIA'				=> 'Criteria',

	'DEACTIVATE_DELETE'			=> 'بسڕەوە یان ناچالاکبکە',
	'DEACTIVATE_DELETE_EXPLAIN'	=> 'هەرکوێیەک هەڵبژێرە بۆ ناچالاککردنی بەکارهێنەران یان سرینەوەیان بەتەواوی. تکایە سەرنجبدە کە بەکارهێنەرە سڕاوەکان ناتوانرێن بهێندرێنەوە.',
	'DELETE_USERS'				=> 'بسڕەوە',
	'DELETE_USER_POSTS'			=> 'پەیامە وشککراوەکانی بەکارهێنەر بسڕەوە',
	'DELETE_USER_POSTS_EXPLAIN' => 'پەیامەکان دەسڕێتەوە کە لەلایەن بەکارهێنەری سڕاوە نووسراون ،هیچ کاریگەری نییە ئەگەر بەکارهێنەران ناچالاکبن.',

	'JOINED_EXPLAIN'			=> 'بەروارێک بنووسە لە جۆری <kbd>YYYY-MM-DD</kbd>.',

	'LAST_ACTIVE_EXPLAIN'		=> 'بەروارێک بنووسە لە جۆری <kbd>YYYY-MM-DD</kbd> ،بۆ وشککردنی ئەو بەکارهێنەرانی کە هەرگیز نەهاتوونە ژوورەوە <kbd>0000-00-00</kbd> بنووسە ، مەرجەکان <em>لەپێش</em> لەگەڵ <em>لەدوا</em> پشتگوێدەخرێن.',

	'POSTS_ON_QUEUE'			=> 'Posts Awaiting Approval',
	'PRUNE_USERS_GROUP_EXPLAIN'	=> 'Limit to users within the selected group.',
	'PRUNE_USERS_GROUP_NONE'	=> 'All groups',
	'PRUNE_USERS_LIST'				=> 'بەکارهێنەران بۆ وشککردن',
	'PRUNE_USERS_LIST_DELETE'		=> 'لەگەڵ پێوەری هەڵبژێردراو بۆ وشککردنی بەکارهێنەران ئەو هەژمارانە دەسڕدرێنەوە.',
	'PRUNE_USERS_LIST_DEACTIVATE'	=> 'لەگەڵ پێوەری هەڵبژێردراو بۆ وشککردنی بەکارهێنەران ئەو هەژمارانە ناچالاک دەکرێن.',

	'SELECT_USERS_EXPLAIN'		=> 'ناوی بەکارهێنەری دیاریکراو بنووسە لێرە ،بەکاردەبرێن لە پەسەندی بۆ پێوەری سەرەوە. دۆزەرەوەکان ناتوانرێن وشکبکرێن.',

	'USER_DEACTIVATE_SUCCESS'	=> 'بەکارهێنەرە هەڵبژێردراوەکان بەسەرکەوتوویی ناچالاککران.',
	'USER_DELETE_SUCCESS'		=> 'بەکارهێنەرە هەڵبژێردراوەکان بەسەرکەوتوویی سڕانەوە.',
	'USER_PRUNE_FAILURE'		=> 'هیچ بەکارهێنەرێک لەگەڵ پێوەری دەستنیشانکراو نایەتەوە.',

	'WRONG_ACTIVE_JOINED_DATE'	=> 'بەرواری نووسراو هەڵەیە ،چاوەڕێکراوە لە جۆری <kbd>YYYY-MM-DD</kbd>.',
));

// Forum Pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_FORUMS_EXPLAIN'	=> 'ئەمە هەر بابەتێک کە پەیامی تێدا نەنێردراوە یان لەناو ژمارەیەک ڕۆژ نەبینراوە کە تۆ هەڵتبژرادووە دەسڕێتەوە. ئەگەر تۆ ژمارەیەک نەنووسی ئەوکات هەموو بابەتەکان دەسرێنەوە. لەلایەن بنەڕەت ، ئەو بابەتانە ناسڕێتەوە کە ڕاپرسی تێدایە هەروەکو جێگیر و ئاگادارییەکانیش ناسڕێتەوە.',

	'FORUM_PRUNE'		=> 'وشکی مەکۆ',

	'NO_PRUNE'			=> 'هیچ مەکۆیەک وشکنەکرا.',

	'SELECTED_FORUM'	=> 'مەکۆی هەڵبژێردراو',
	'SELECTED_FORUMS'	=> 'مەکۆ هەڵبژێردراوەکان',

	'POSTS_PRUNED'					=> 'پەیامەکان وشککران',
	'PRUNE_ANNOUNCEMENTS'			=> 'ئاگادارییەکان وشکبکە',
	'PRUNE_FINISHED_POLLS'			=> 'ڕاپرسییە داخراوەکان وشکبکە',
	'PRUNE_FINISHED_POLLS_EXPLAIN'	=> 'بابەتەکان دەسڕێتەوە لەگەڵ ئەو ڕاپرسییانەی کە کۆتایی هاتوون.',
	'PRUNE_FORUM_CONFIRM'			=> 'دڵنیایت کە دەتەوێ مەکۆ دەستنیشان کراوەکان وشکببکەی لەگەڵ ڕێکخستنەکانیان؟ هەرکە سڕایەوە ،هیچ ڕێگایەک نییە بۆ هێنانەوەی پەیام و بابەتە وشککراوەکان.',
	'PRUNE_NOT_POSTED'				=> 'ڕۆژەکان لەدوا نێردراو',
	'PRUNE_NOT_VIEWED'				=> 'ڕۆژەکان لەدوا بینیراو',
	'PRUNE_OLD_POLLS'				=> 'ڕاپرسییە کۆنەکان وشکبکە',
	'PRUNE_OLD_POLLS_EXPLAIN'		=> 'بابەتەکان دەسڕێتەوە لەگەڵ ئەو ڕاپرسییانەی کە ڕۆژانی پەیام دەنگیان تێدا نەدراوە.',
	'PRUNE_STICKY'					=> 'جێگیرەکان وشکبکە',
	'PRUNE_SUCCESS'					=> 'وشککردنی مەکۆکان سەرکەوتووبوو',

	'TOPICS_PRUNED'		=> 'بابەتەکان وشککران',
));

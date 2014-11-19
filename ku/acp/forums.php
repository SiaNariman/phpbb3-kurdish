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

// Forum Admin
$lang = array_merge($lang, array(
	'AUTO_PRUNE_DAYS'	=> 'خۆکار-پاککردنی تەمەنی پەیام',
	'AUTO_PRUNE_DAYS_EXPLAIN'	=> 'ژمارەی ڕۆژەکان لە دوا پەیام لەدوای کام بابەت سڕاوەتەوە.',
	'AUTO_PRUNE_FREQ'	=> 'خۆکار-پاککردنی فیرکوێنسی',
	'AUTO_PRUNE_FREQ_EXPLAIN'	=> 'کات لە ڕۆژەکان لەنێوان ژوانی پاککردنەوەکان',
	'AUTO_PRUNE_VIEWED'	=> 'خۆکار-پاککردنی تەمەنی پەیامی بینراو',
	'AUTO_PRUNE_VIEWED_EXPLAIN'	=> 'ژمارەی ڕۆژەکان لەو کاتەوەی بابەت بینراوە لەدوای ئەوەی کام بابەت سڕاوەتەوە.',
	'AUTO_PRUNE_SHADOW_FREQ'	=> 'Auto-prune shadow topics frequency',
	'AUTO_PRUNE_SHADOW_DAYS'	=> 'Auto-prune shadow topics age',
	'AUTO_PRUNE_SHADOW_DAYS_EXPLAIN'	=> 'Number of days after which shadow topic is removed.',
	'AUTO_PRUNE_SHADOW_FREQ_EXPLAIN'	=> 'Time in days between pruning events.',

	'CONTINUE'						=> 'بەردەوام بە',
	'COPY_PERMISSIONS'	=> 'ڕوونووسکردنی دەسەڵاتەکان لە',
	'COPY_PERMISSIONS_EXPLAIN'		=> 'بۆ ئاسانکردنی دامەزراندنی دەسەڵاتەکە بۆ مەکۆ نوێیەکەت ،دەتوانی دەسەڵاتەکانی مەکۆیەکی چالاک لەبەربگریتەوە.',
	'COPY_PERMISSIONS_ADD_EXPLAIN'	=> 'هەرکە دروستکرا ،مەکۆکە هەمان دەسەڵاتی دەبێت وەکو ئەوەی لێرە هەڵیدەبژێری. ئەگەر هیچ مەکۆیەک هەڵنەبژێردرا مەکۆ دروستکراوە نوێیەکە بینراو نابێت تاوەکو دەسەڵاتەکان دانەنرێن.',
	'COPY_PERMISSIONS_EDIT_EXPLAIN'	=> 'ئەگەر لەبەرگرتنەوەی دەسەڵاتەکان هەڵبژێری ،مەکۆکە هەمان دەسەڵاتی دەبێت وەکو ئەوەی لێرە هەڵیدەبژێری. ئەمە هەر دەسەڵاتێک لەسەر دەنووسێ کە تۆ پێشتر داتناوە بۆ ئەم مەکۆیە لەگەڵ دەسەڵاتەکانی ئەو مەکۆیەی لێرە هەڵیدەبژێری. ئەگەر هیچ مەکۆیەک هەڵنەبژێرا دەسەڵاتی ئێستاکە دەمێنێتەوە.',
	'COPY_TO_ACL'					=> 'لەجیاتی ئەوە ،تۆ دەشتوانی %sدەسەڵاتی نوێ دابمەزرێنی%s بۆ ئەو مەکۆیە.',
	'CREATE_FORUM'	=> 'مەکۆیەکی نوێ دروست بکە',

	'DECIDE_MOVE_DELETE_CONTENT'	=> 'ناوەڕۆک بسڕەوە یان بیگوازەوە بۆ مەکۆیەکی تر',
	'DECIDE_MOVE_DELETE_SUBFORUMS'	=> 'ژێرمەکۆ بسرەوە یان بیگوازەوە بۆ مەکۆیەکی تر',
	'DEFAULT_STYLE'	=> 'ڕووخساری بنەڕەتی',
	'DELETE_ALL_POSTS'	=> 'پەیامەکان بسڕەوە',
	'DELETE_SUBFORUMS'	=> 'ژێرمەکۆ و پەیامەکان بسڕەوە',
	'DISPLAY_ACTIVE_TOPICS'	=> 'ڕێ دان بە بابەتە چالاکەکان',
	'DISPLAY_ACTIVE_TOPICS_EXPLAIN'	=> 'گەر بەڵێ هەڵبژێردرا بابەتە چالاکەکانی ژێرمەکۆ دیاریکراوەکان لەم هاوپۆلەد دەردەکەون',

	'EDIT_FORUM'	=> 'دەستکاریکردنی مەکۆ',
	'ENABLE_INDEXING'	=> 'index ـکردنی گەڕان چالاک بکە',
	'ENABLE_INDEXING_EXPLAIN'	=> 'ئەگەر بەڵێ دانرا. پەیامەکان دەکرێن بۆ ئەو مەکۆیە پێڕست دەکرێن بۆ گەڕان.',
	'ENABLE_POST_REVIEW'	=> 'پیاچوونەوەی بابەتەکان چالاک بکە',
	'ENABLE_POST_REVIEW_EXPLAIN'	=> 'ئەگەر بەڵێ دانرا بەکارهێنەران دەتوانن پەیامەکانیان پێشبینین بکەن ئەگەر پەیامە نوێیەکان کران بۆ بابەتەکە کاتێ بەکارهێنەران دەیاننووسن. ئەمە پێویستە ناچالاک بکرێت بۆ مەکۆ دەمەتەقێیەکان.',
	'ENABLE_QUICK_REPLY'			=> 'پەیامی خێرا چالاک بکە',
	'ENABLE_QUICK_REPLY_EXPLAIN'	=> 'چالاککردنی وەڵامی خێرا لەو مەکۆیە. ئەم ڕێکخستنە وا دەنەنراوە ئەگەر وەڵامە خێراکە فراوانی مەکۆی ناچالاک بکات. پەیامە خێراکە تەنها نیشان دەدرێت بۆ بەکارهێنەران کە دەسەڵاتیان هەیە بۆ نووسین لەو مەکۆیە.',
	'ENABLE_RECENT'	=> 'بابەتە چالاکەکان پیشان بدە',
	'ENABLE_RECENT_EXPLAIN'	=> 'ئەگەر بەڵێ دانرا بابەتەکان دەکرێن بۆ ئەو مەکۆیە نیشان دەدرێن لە لیستی بابەتە چالاکەکان.',
	'ENABLE_TOPIC_ICONS'	=> 'ئایکۆنی بابەت چالاک بکە',

	'FORUM_ADMIN'	=> 'بەڕێوەبەرایەتی مەکۆ',
	'FORUM_ADMIN_EXPLAIN'	=> 'لە phpBB3 هەمووشتێک لەسەر بنچینەی مەکۆ کراوە. هاوپۆلێک تەنها جۆرێکی تایبەتی مەکۆیە. هەر مەکۆیەک دەتوانێ ژمارەیەکی بێ سنوور ژێرمەکۆی هەبێت وە تۆ دەتوانی دیاریبکەی لە کامیان پەیام بنێردرێ یان نا. لێرە دەتوانی مەکۆ تاکەکان زیادبکەی، دەستکاری بکەی ،بسڕیەوە ،داخەیت، بکەیتەوە بە سانایی و بە بوونی کۆمەڵێک کرداری هەمەجۆر. ئەگەر پەیام و بابەتەکانت دەرچوون لە دۆخی گۆڕینەوە دەتوانی دووبارە مەکۆیەک ئاڵوگۆڕ بکەیەوە. <strong>.پێویستە دەسەڵاتە گونجاوەکان دابنێی یان لەبەر بگریتەوە بۆ مەکۆیەکی تازە دروستکراو تاکو نیشان بدرێن.</strong>',
	'FORUM_AUTO_PRUNE'	=> 'خۆکار-وشککردن چالاکبکە',
	'FORUM_AUTO_PRUNE_EXPLAIN'	=> 'وشکەکان مەکۆی بابەتەکان ،تەمەن/فیرکوێنسی دابنێ لە پێرمابستەری خوارەوە.',
	'FORUM_CREATED'	=> 'مەکۆ بەسەرکەوتوویی دروستکرا.',
	'FORUM_DATA_NEGATIVE'	=> 'وشککردنی خەمڵاندنەکان ناتوانرێ کردار بکرێن.',
	'FORUM_DESC_TOO_LONG'	=> 'باسکردنی مەکۆکە زۆر درێژە ،دەبێ کەمتر بێت لە 4000 تیپ.',
	'FORUM_DELETE'	=> 'مەکۆ بسڕەوە',
	'FORUM_DELETE_EXPLAIN'	=> 'مەکۆکەی خوارەوە ڕێگات دەدات بۆ سڕینەوەی مەکۆیەک. ئەگەر مەکۆکە دەتوانرێ بنووسرێ تۆش دەتوانی بڕیار بدەی لەکوێ دەتەوێ هەموو بابەتەکان (یان مەکۆکان) پاڵ بنێت کە لەخۆی گرتووە.',
	'FORUM_DELETED'	=> 'مەکۆ بە سەرکەوتوویی سڕدرایەوە.',
	'FORUM_DESC'	=> 'پەسن',
	'FORUM_DESC_EXPLAIN'	=> 'هەر کۆدکردنێکی HTML نووسراو لێرە نیشاندەدرێت وەکو خۆی.',
	'FORUM_EDIT_EXPLAIN'	=> 'مەکۆکەی خوارەوە ڕێگات دەدات ئەو مەکۆیە ئارەزوومەندانە بکەیت .تکایە سەرنجی ئەوە بدە کە چاودێریکردن و کۆنترۆڵەکانی ژمارەی پەیام دانراون لەڕێگای دەسەڵاتەکانی مەکۆ بۆ هەر بەکارهێنەرێک یان بۆ هەر گرووپێکی بەکارهێنەر.',
	'FORUM_IMAGE'	=> 'وێنەی مەکۆ',
	'FORUM_IMAGE_EXPLAIN'	=> 'شوێن ،پەیوەندی هەیە بۆ شوێنگە/پێڕستی سەرەتای phpBB ،زیادکراوی وێنەیەک بۆ یارمەتیدان لەگەڵ ئەو مەکۆیە.',
	'FORUM_IMAGE_NO_EXIST'            => 'وێنەی دیاریکراوی مەکۆ بوونی نییە',
	'FORUM_LINK_EXPLAIN'	=> 'URL ــی تەواو (لەخۆگرتنی کۆنووسەکان ،وەکو: <samp>http://</samp>) بۆ مەودای شوێنەکە کە کرتەکردنی ئەو مەکۆیە بەکارهێنەرەکە دەبات، نموونە <samp>http://www.chawg.org/</samp>.',
	'FORUM_LINK_TRACK'	=> 'دوای گەڕاندنەوکانی بەستەر بکەوە',
	'FORUM_LINK_TRACK_EXPLAIN'	=> 'تۆمارکردنی ژمارەی کاتەکانی بەستەری مەکۆیەک کە کرتەکراوە.',
	'FORUM_NAME'	=> 'ناوی مەکۆ',
	'FORUM_NAME_EMPTY'	=> 'پێویستە ناوێک بنووسیت بۆ ئەم مەکۆیە',
	'FORUM_PARENT'	=> 'باوانی مەکۆ',
	'FORUM_PASSWORD'	=> 'تێپەڕەوشەی مەکۆ',
	'FORUM_PASSWORD_CONFIRM'	=> 'دڵنیابوون لە تێپەڕەوشەی مەکۆ',
	'FORUM_PASSWORD_CONFIRM_EXPLAIN'	=> 'تەنها پێویستە دابنرێت ئەگەر تێپەڕەوشەی مەکۆیەک نووسرا.',
	'FORUM_PASSWORD_EXPLAIN'	=> 'پێناسە کردنی تێپەڕەوشەیەک بۆ ئەو مەکۆیە ،سیستەمی دەسەڵات بەکارببە لە پەسەندکردنەکان.',
	'FORUM_PASSWORD_UNSET'	=> 'لابردنی تێپەڕەوشەی مەکۆ',
	'FORUM_PASSWORD_UNSET_EXPLAIN'	=> 'ئێرە بپشکنە ئەگەر دەتەوێ تێپەڕەوشەی مەکۆکەت بسڕیتەوە.',
	'FORUM_PASSWORD_OLD'				=> 'تێپەڕەوشەی مەکۆکە ڕێگایەکی هاشکردنی کۆن بەکاردەبات و پێویستە بگۆڕدرێت.',
	'FORUM_PASSWORD_MISMATCH'	=> 'ئەو تێپەڕەوشانەی نووسیتە ناگونجێن و وەکویەک نین.',
	'FORUM_PRUNE_SETTINGS'	=> 'ڕێکخستنەکانی وشکی مەکۆ',
	'FORUM_PRUNE_SHADOW'				=> 'Enable auto-pruning of shadow topics',
	'FORUM_PRUNE_SHADOW_EXPLAIN'			=> 'Prunes the forum of shadow topics, set the frequency/age parameters below.',
	'FORUM_RESYNCED'					=> 'Forum “%s” successfully resynced',
	'FORUM_RULES_EXPLAIN'				=> 'Forum rules are displayed at any page within the given forum.',
	'FORUM_RULES_LINK'					=> 'Link to forum rules',
	'FORUM_RULES_LINK_EXPLAIN'			=> 'You are able to enter the URL of the page/post containing your forum rules here. This setting will override the forum rules text you specified.',
	'FORUM_RULES_PREVIEW'				=> 'Forum rules preview',
	'FORUM_RULES_TOO_LONG'				=> 'The forum rules must be less than 4000 characters.',
	'FORUM_SETTINGS'					=> 'Forum settings',
	'FORUM_STATUS'						=> 'Forum status',
	'FORUM_STYLE'						=> 'Forum style',
	'FORUM_TOPICS_PAGE'					=> 'Topics per page',
	'FORUM_TOPICS_PAGE_EXPLAIN'			=> 'If non-zero this value will override the default topics per page setting.',
	'FORUM_TYPE'						=> 'Forum type',
	'FORUM_UPDATED'						=> 'Forum information updated successfully.',

	'FORUM_WITH_SUBFORUMS_NOT_TO_LINK'		=> 'You want to change a postable forum having subforums to a link. Please move all subforums out of this forum before you proceed, because after changing to a link you are no longer able to see the subforums currently connected to this forum.',

	'GENERAL_FORUM_SETTINGS'	=> 'General forum settings',

	'LINK'						=> 'Link',
	'LIST_INDEX'				=> 'List subforum in parent-forum’s legend',
	'LIST_INDEX_EXPLAIN'		=> 'Displays this forum on the index and elsewhere as a link within the legend of its parent-forum if the parent-forum’s “List subforums in legend” option is enabled.',
	'LIST_SUBFORUMS'			=> 'List subforums in legend',
	'LIST_SUBFORUMS_EXPLAIN'	=> 'Displays this forum’s subforums on the index and elsewhere as a link within the legend if their “List subforum in parent-forum’s legend” option is enabled.',
	'LOCKED'					=> 'Locked',

	'MOVE_POSTS_NO_POSTABLE_FORUM'	=> 'The forum you selected for moving the posts to is not postable. Please select a postable forum.',
	'MOVE_POSTS_TO'					=> 'Move posts to',
	'MOVE_SUBFORUMS_TO'				=> 'Move subforums to',

	'NO_DESTINATION_FORUM'			=> 'You have not specified a forum to move content to.',
	'NO_FORUM_ACTION'				=> 'No action defined for what happens with the forum content.',
	'NO_PARENT'						=> 'No parent',
	'NO_PERMISSIONS'				=> 'Do not copy permissions',
	'NO_PERMISSION_FORUM_ADD'		=> 'You do not have the necessary permissions to add forums.',
	'NO_PERMISSION_FORUM_DELETE'	=> 'You do not have the necessary permissions to delete forums.',

	'PARENT_IS_LINK_FORUM'		=> 'The parent you specified is a forum link. Link forums are not able to hold other forums, please specify a category or forum as the parent forum.',
	'PARENT_NOT_EXIST'			=> 'Parent does not exist.',
	'PRUNE_ANNOUNCEMENTS'		=> 'Prune announcements',
	'PRUNE_STICKY'				=> 'Prune stickies',
	'PRUNE_OLD_POLLS'			=> 'Prune old polls',
	'PRUNE_OLD_POLLS_EXPLAIN'	=> 'Removes topics with polls not voted in for post age days.',

	'REDIRECT_ACL'	=> 'Now you are able to %sset permissions%s for this forum.',

	'SYNC_IN_PROGRESS'			=> 'Synchronizing forum',
	'SYNC_IN_PROGRESS_EXPLAIN'	=> 'Currently resyncing topic range %1$d/%2$d.',

	'TYPE_CAT'			=> 'Category',
	'TYPE_FORUM'		=> 'Forum',
	'TYPE_LINK'			=> 'Link',

	'UNLOCKED'			=> 'Unlocked',
));

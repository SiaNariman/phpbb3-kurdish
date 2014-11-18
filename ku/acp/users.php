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
	'ADMIN_SIG_PREVIEW'	=> 'پیشبینی واژۆ',
	'AT_LEAST_ONE_FOUNDER'	=> 'تۆ ناتوانی ئەو دۆزەرەوەیە بگۆرێ بۆ بەکارهێنەرێکی ئاسایی. پێویستە بەلایەنی کەم دۆزەرەوەیەک هەبێت چالاککرابێ بۆ ئەو مەکۆیە. ئەگەر دەتەوێ ئەو باری بەکارهێنەری دۆزەرەویەە بگۆڕی ،بەکارهێنەرێکی تر بەرزبکەوە بۆ ئەوەی ببێتە یەکەم دۆزەرەوە.',
	'BAN_ALREADY_ENTERED'	=> 'ڕاگرتنەکە پێشووتر بەسەرکەوتوویی نووسرا. لیستی ڕاگرتنەکە نوێنەکرایەوە.',
	'BAN_SUCCESSFUL'	=> 'ڕاگرتن بەسەرکەوتوویی نووسرا.',
	'CANNOT_BAN_ANONYMOUS'			=> 'تۆ ناتوانیت هەژمارێکی نەناسراو ڕابگریت. دەسەڵاتەکان بۆ بەکارهێنەرانی نەناسراو دەتوانرێ دابنرێن لەژێر بەشگری دەسەڵاتەکان.',
	'CANNOT_BAN_FOUNDER'	=> 'ناتوانی هەژماری دۆزەرەوە ڕابگریت',
	'CANNOT_BAN_YOURSELF'	=> 'ناتوانی خۆت ڕابگریت',
	'CANNOT_DEACTIVATE_BOT'	=> 'تۆ ناتوانیت هەژماری بووت ناچالاکبکەیت. تکایە بووتەکە ناچالاک بکەی لەناو پەڕەی بووتەکان لەباتی.',
	'CANNOT_DEACTIVATE_FOUNDER'	=> 'تۆ ڕێگات پێنەدراوە بۆ ناچالاککردنی هەژماری دۆزەرەوە.',
	'CANNOT_DEACTIVATE_YOURSELF'	=> 'تۆ ڕێگات پێنەدراوە بۆ ناچالاککردنی هەژماری خۆت.',
	'CANNOT_FORCE_REACT_BOT'	=> 'تۆ ڕێگات پێنەدراوە بۆ ناچارکردنی چالاککردنەوە لەسەر هەژمارەکانی بووت. تکایە بووتەکە چالاکبکەوە لەناو پەڕەی بووتەکان.',
	'CANNOT_FORCE_REACT_FOUNDER'	=> 'تۆ ناتوانیت چالاککردنەوە ناچاربکەی لەسەر هەژمارەکانی دۆزەرەوە.',
	'CANNOT_FORCE_REACT_YOURSELF'	=> 'تۆ ناتوانیت چالاککردنەوە ناچاربکەی بۆ هەژماری خۆت.',
	'CANNOT_REMOVE_ANONYMOUS'	=> 'تۆ ناتوانیت هەژماری بەکارهێنەری میوان بسڕیتەوە.',
	'CANNOT_REMOVE_YOURSELF'	=> 'تۆ ناتوانیت هەژماری بەکارهێنەری خۆت بسڕیتەوە.',
	'CANNOT_SET_FOUNDER_IGNORED'	=> 'تۆ ناتوانیت بەکارهێنەری پشتگوێخراو بەرزبکەیەوە بۆ ئەوەی ببن بە دۆزەرەوە.',
	'CANNOT_SET_FOUNDER_INACTIVE'	=> 'پێویستە تۆ بەکارهێنەران چالاک بکەی پێش ئەوەی بەرزیان بکەیەوە بۆ دۆزەرەوە ،تەنها بەکارهێنەری چالاککراو دەتوانرێ بەرزبکرێتەوە.',
	'CONFIRM_EMAIL_EXPLAIN'	=> 'تۆ تەنها پێویستە ئەوە دیاریبکەی ئەگەر ناونیشانی ئیمەیڵی بەکارهێنەران دەگۆڕی.',
	'DELETE_POSTS'	=> 'پەیامەکان بسڕەوە',
	'DELETE_USER'	=> 'بەکارهێنەر بسڕەوە',
	'DELETE_USER_EXPLAIN'	=> 'تکایە سەرنجی ئەوە بدە کە سڕینەوەی بەکارهێنەرێک کۆتاییە ،ناتوانرێت بگەڕێندرێنەوە.',
	'FORCE_REACTIVATION_SUCCESS'	=> 'بەسەرکەوتوویی چالاککردنەوە ناچارکرا.',
	'FOUNDER'	=> 'دۆزەرەوە',
	'FOUNDER_EXPLAIN'	=> 'دۆزەرەوان هەموو دەسەڵاتێکی بەڕێوەبردنیان هەیە و دەتوانن هەرگیز ڕانەگیرێن ،بسرێنەوە یان بگۆڕدرین لەلایەن ئەندامە نادۆزەرەوەکان.',
	'GROUP_APPROVE'	=> 'ئەندام پەسەند بکە',
	'GROUP_DEFAULT'	=> 'گرووپ بکە بە بنەڕەت بۆ ئەندام',
	'GROUP_DELETE'	=> 'ئەندام بسڕەوە لە گرووپ',
	'GROUP_DEMOTE'	=> 'پێشڕەوی گرووپ دابەزێنە',
	'GROUP_PROMOTE'	=> 'بەرزبکەوە بۆ پێشڕەوی گرووپ',
	'IP_WHOIS_FOR'	=> 'کێیەتی IP بۆ %s',
	'LAST_ACTIVE'	=> 'دوا چالاکی',
	'MOVE_POSTS_EXPLAIN'	=> 'تکایە مەکۆکە هەڵبژێرە بۆ ئەوەی دەخوازیت بۆ گواستنەوەی هەموو پەیامەکان کە ئەو بەکارهێنەرە نووسیویەتی.',
	'NO_SPECIAL_RANK'	=> 'هیچ پلەی تایبەت پێکنەهینراوە',
	'NO_WARNINGS'			=> 'بێ ئاگاداری',
	'NOT_MANAGE_FOUNDER'	=> 'تۆ هەوڵتدا بۆ بەڕێوەبردنی بەکارهێنەرێک لەگەڵ دۆخی دۆزەرەوە .تەنها دۆزەرەوەکان ڕێگادراون بۆ بەڕێوەبردنی دۆزەرەوەکانی تر.',
	'QUICK_TOOLS'	=> 'ئامڕازە خێراکان',
	'REGISTERED'	=> 'تۆمارکراو',
	'REGISTERED_IP'	=> 'تۆماربوو لە IP ـیەوە',
	'RETAIN_POSTS'	=> 'پەیامەکان بپارێزە',
	'SELECT_FORM'	=> 'فۆڕمێک دیاری بکە',
	'SELECT_USER'	=> 'بەکارهێنەرێک دیاری بکە',
	'USER_ADMIN'	=> 'بەڕێوەبەرایەتی بەکارهێنەر',
	'USER_ADMIN_ACTIVATE'	=> 'هەژمار چالاک بکە',
	'USER_ADMIN_ACTIVATED'	=> 'بەکارهێنەر بە سەرکەوتوویی چالاک کرا.',
	'USER_ADMIN_AVATAR_REMOVED'	=> 'بەسەرکەوتوویی وێنۆچکە سڕایەوە لە هەژماری بەکارهێنەر.',
	'USER_ADMIN_BAN_EMAIL'	=> 'ڕاگرتن بەهۆی ئیمەیڵ',
	'USER_ADMIN_BAN_EMAIL_REASON'	=> 'ناونیشانی ئیمەیڵ ڕاگیرا لەڕێگای بەڕێوەبردنی بەکارهێنەر',
	'USER_ADMIN_BAN_IP'	=> 'ڕاگرتن بەهۆی IP',
	'USER_ADMIN_BAN_IP_REASON'	=> 'IP ڕاگیرا لەڕێگای بەڕێوەبردنی بەکارهێنەر',
	'USER_ADMIN_BAN_NAME_REASON'	=> 'ناوی بەکارهێنەر ڕاگیرا بەهۆی بەڕێوەبردنی بەکارهێنەر',
	'USER_ADMIN_BAN_USER'	=> 'ڕاگرتن بەهۆی ناوی بەکارهێنەر',
	'USER_ADMIN_DEACTIVATE'	=> 'هەژمار ناچالاک بکە',
	'USER_ADMIN_DEACTIVED'	=> 'بەکارهێنەر بە سەرکەوتوویی ناچالاک کرا.',
	'USER_ADMIN_DEL_ATTACH'	=> 'هەموو هاوپێچەکان بسڕەوە',
	'USER_ADMIN_DEL_AVATAR'	=> 'وێنۆچکە بسڕەوە',
	'USER_ADMIN_DEL_OUTBOX'	=> 'ناردنگەی پەیامی تایبەتی بەتاڵبکە',
	'USER_ADMIN_DEL_POSTS'	=> 'هەموو پەیامەکان بسڕەوە',
	'USER_ADMIN_DEL_SIG'	=> 'واژۆ بسڕەوە',
	'USER_ADMIN_EXPLAIN'	=> 'لێرە دەتوانی زانیاری بەکارهێنەران بگۆڕی و بخەمڵێنی لەگەڵ هەڵبژاردنە دیاریکراوەکان.',
	'USER_ADMIN_FORCE'	=> 'چالاککردنەوە ناچاربکە',
	'USER_ADMIN_LEAVE_NR'			=> 'لە تازە تۆماربووەکان بسڕەوە.',
	'USER_ADMIN_MOVE_POSTS'	=> 'هەموو پەیامەکان بگوازەوە',
	'USER_ADMIN_SIG_REMOVED'	=> 'بەسەرکەوتوویی واژۆ سڕایەوە لە هەژماری بەکارهێنەر.',
	'USER_ATTACHMENTS_REMOVED'	=> 'بەسەرکەوتوویی هەموو هاوپێچەکانی بارکراو لەلایەن ئەو بەکارهێنەرە سڕایەوە.',
	'USER_AVATAR_NOT_ALLOWED'		=> 'وێنۆچکە ناتوانرێ نیشان بدرێت چونکە وێنۆچکەکان ناچالاک کراون.',
	'USER_AVATAR_UPDATED'	=> 'بەسەرکەوتوویی وردەکارییەکانی وێنۆچکەی بەکارهێنەر نوێکرایەوە.',
	'USER_AVATAR_TYPE_NOT_ALLOWED'	=> 'وێنۆچکەی ئێستا ناتوانرێ نیشان بدرێت چونکە جۆرەکەی ڕێگا پێنەدراوە.',
	'USER_CUSTOM_PROFILE_FIELDS'	=> 'خانە ئارەزوومەندانەکانی پرۆفایل',
	'USER_DELETED'	=> 'بەکارهێنەر بە سەرکەوتوویی سڕدرایەوە.',
	'USER_GROUP_ADD'	=> 'بەکارهێنەر بۆ گرووپێک زیاد بکە',
	'USER_GROUP_NORMAL'	=> 'بەکارهێنەری پێناسەکراوی گرووپی بەکارهێنەر ئەندامە لە',
	'USER_GROUP_PENDING'	=> 'بەکارهێنەرانی گرووپ لە باری خایەندنن',
	'USER_GROUP_SPECIAL'	=> 'گرووپی بەکارهێنەرانی فرە-پێناسەکراو ئەندامێکە لە',
	'USER_LIFTED_NR'	=> 'بەسەرکەوتوویی دۆخی بەکارهێنەری نوێی تۆماربوو سڕایەوە.',
	'USER_NO_ATTACHMENTS'	=> 'هیچ پەڕگەیەک هاوپێچ نەکراوە بۆ بینین.',
	'USER_OUTBOX_EMPTIED'			=> 'بەسەرکەوتوویی دەرکردەی پەیامی تایبەتی بەکارهێنەر بەتاڵکرا',
	'USER_OUTBOX_EMPTY'				=> 'دەرکردەکانی پەیامی تایبەتی بەکارهێنەر پێشووتر بەتاڵ بوو',
	'USER_OVERVIEW_UPDATED'	=> 'وردەکارییەکانی بەکارهێنەر نوێکرانەوە.',
	'USER_POSTS_DELETED'	=> 'هەموو پەیامەکانی ئەم بەکارهێنەرە بە سەرکەوتوویی سڕدرانەوە.',
	'USER_POSTS_MOVED'	=> 'پەیامەکانی ئەم بەکارهێنەرە بە سەرکەوتووی گوێزرانەوە بۆ مەکۆی دیاریکراو.',
	'USER_PREFS_UPDATED'	=> 'ویستراوەکانی بەکارهێنەر نوێکرانەوە.',
	'USER_PROFILE'	=> 'پڕۆفایلی بەکارهێنەر',
	'USER_PROFILE_UPDATED'	=> 'پڕۆفایلی ئەندام نوێکرایەوە.',
	'USER_RANK'	=> 'پلەی ئەندام',
	'USER_RANK_UPDATED'	=> 'پلەی ئەندام نوێکرایەوە.',
	'USER_SIG_UPDATED'	=> 'واژۆی بەکارهێنەر بە سەرکەوتوویی نوێکرایەوە.',
	'USER_WARNING_LOG_DELETED'		=> 'هیچ زانیارییەک بەردەست نییە.',
	'USER_TOOLS'	=> 'ئامرازە سەرەتاییەکان',
));

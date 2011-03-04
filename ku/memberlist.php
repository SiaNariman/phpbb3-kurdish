<?php
/**
*
* memberlist.php [Sorani Kurdish]
*
* @package language
* @version $Id: $
* @copyright (c) 2008 phpBB Group
* @author 2008-11-28 - Chawg.org Group
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
	'ABOUT_USER'	=> 'پڕۆفایل',
	'ACTIVE_IN_FORUM'	=> 'چالاکترین مەکۆکان',
	'ACTIVE_IN_TOPIC'	=> 'چالاکترین بابەتەکان',
	'ADD_FOE'	=> 'فەرامۆشکراو زیاد بکە',
	'ADD_FRIEND'	=> 'هاوڕێ زیاد بکە',
	'AFTER'	=> 'پاش',
	'ALL'	=> 'هەموو',
	'BEFORE'	=> 'پێش',
	'CC_EMAIL'	=> 'ڕوونووسێک لەم ئیمەیلە بنێرە بۆ خۆت',
	'CONTACT_USER'	=> 'پەیوەندی',
	'DEST_LANG'	=> 'زمان',
	'DEST_LANG_EXPLAIN'	=> 'زمانێکی گونجاو دیاری بکە (ئەگەر هەیە) بۆ وەرگر لەم مەکۆیە.',
	'EMAIL_BODY_EXPLAIN'	=> 'ئەم پەیامە وەک دەقێکی تەخت ئەنێردرێت، هیچ تاگێکی HTML یان BBCode مەنووسە. ناونیشانی گەڕاوە بۆ ئەم پەیامە بۆ ناونیشانی ئیمەیلەکەت ڕێک دەخرێت.',
	'EMAIL_DISABLED'	=> 'ببورە بەڵام هەموو فرمانەکانی پەیوەندیدار بە ئیمەیلەوە ناچالاک کراون.',
	'EMAIL_SENT'	=> 'ئیمەیل نێردرا',
	'EMAIL_TOPIC_EXPLAIN'	=> 'ئەم پەیامە وەک دەقێکی تەخت ئەنێردرێت، هیچ تاگێکی HTML یان BBCode دامەنێ. تکایە سەرنجی ئەوە بدە کە زانیاریی بابەت پێشتر لەم پەیامەدا هەیە. ناونیشانی گەڕاوەی ئەم پەیامە ڕێک دەخرێت بۆ ناونیشانی ئیمەیلەکەت.',
	'EMPTY_ADDRESS_EMAIL'	=> 'پێویستە ناونیشانی ئیمەیلێک دابین بکەیت بۆ وەرگر.',
	'EMPTY_MESSAGE_EMAIL'	=> 'پێوسیتە پەیامێک بنووسیت تا بە ئیمەیل بنێردرێت',
	'EMPTY_MESSAGE_IM'	=> 'پێویستە پەیامێک بنووسیت تا بنێردرێت.',
	'EMPTY_NAME_EMAIL'	=> 'پێوسیتە ناوی ڕاستی وەرگر بنووسیت.',
	'EMPTY_SUBJECT_EMAIL'	=> 'پێویستە سەردێڕێک بۆ ئیمەیلەکە بنووسیت.',
	'EQUAL_TO'	=> 'یەکسانە بە',
	'FIND_USERNAME_EXPLAIN'	=> 'ئەم فۆڕمە بەکار ببە بۆ گەڕان بە دوای ئەندامی دیاریکراو. پێویست ناکات هەموو خانەکان پڕ بکەیتەوە. بۆ دۆزینەوەی دراوەی بەشیی * بەکار ببە. لە کاتی نووسینی ڕێکەوتدا ئەم شێوازە بەکار ببە <kbd>YYYY-MM-DD</kbd>، نمونە <samp>2004-02-29</samp>. Checkbox ـەکان نیشانە بکە بۆ دیاریکردنی بەکارهێنەرێک یان زیاتر (لەوانەیە چەند بەکارهێنەرێک پەسەند بکرێن دەکەوێتە سەر فۆڕمەکە) و کرتە لە دوگمەی دیاریکردن بکە بۆ گەڕانەوە بۆ فۆڕمی پێشوو.',
	'FLOOD_EMAIL_LIMIT'	=> 'ناتوانی ئیمەیلێکی تر بنێریت لەم کاتەدا. تکایە دواتر هەوڵ بدەرەوە.',
	'GROUP_LEADER'	=> 'پێشڕەوی گرووپ',
	'HIDE_MEMBER_SEARCH'	=> 'گەڕانی ئەندام بشارەوە',
	'IM_ADD_CONTACT'	=> 'پەیوەندی زیاد بکە',
	'IM_AIM'	=> 'تکایە سەرنجی ئەوە بدە کە پێویستە پەیامبەری خێرای AOL ـت دامەزراندبێ بۆ بەکارهێنانی.',
	'IM_AIM_EXPRESS'	=> 'AIM پەیامبەری خێرای',
	'IM_DOWNLOAD_APP'	=> 'داوانامە دابگرە',
	'IM_ICQ'	=> 'تکایە سەرنجی ئەوە بدە کە لەوانەیە بەکارهێنەران وایان دیاریی کردبێت کە پەیامی خێرای نەویستراویان پێ نەگات.',
	'IM_JABBER'	=> 'تکایە سەرنجی ئەوە بدە کە لەوانەیە بەکارهێنەران وایان دیاریی کردبێت کە پەیامی خێرای نەویستراویان پێ نەگات.',
	'IM_JABBER_SUBJECT'	=> 'ئەمە پەیامێکی خۆکارە تکایە وەڵام مەدەرەوە! پەیام لە بەکارهێنەر %1$s لە %2$s.',
	'IM_MESSAGE'	=> 'پەیامەکەت',
	'IM_MSNM'	=> 'تکایە سەرنجی ئەوە بدە کە پێویستە پەیامبەری ویندۆز دامەرابێت بۆ بەکارهێنانی ئەمە.',
	'IM_MSNM_BROWSER'	=> 'وێبگەڕەکەت پاڵپشتی ئەمە ناکات',
	'IM_MSNM_CONNECT'	=> 'MSNM پەیوەند نەکراوە.\\nپێویستە پەیوەند بیت بە MSNM ـەوە بۆ بەردەوام بوون.',
	'IM_NAME'	=> 'ناوت',
	'IM_NO_DATA'	=> 'ئەمە زانیارییەکی پەیوەندی تەواوە بۆ ئەم بەکارهێنەەر.',
	'IM_NO_JABBER'	=> 'ببورە، پەیام ناردنی ڕاستەوخۆ بۆ بەکارهێنەرانی جابەر پاڵپشتی نەکراوە لەم مەکۆیە. پێویستت بە ڕاژەخوازێکی جابەرە کە دامەزرابێت لەسەر سیستەمەکەت بۆ پەیوەندی کردن بە وەرگری سەرەوە.',
	'IM_RECIPIENT'	=> 'وەرگر',
	'IM_SEND'	=> 'پەیام بنێرە',
	'IM_SEND_MESSAGE'	=> 'پەیام بنێرە',
	'IM_SENT_JABBER'	=> 'پەیامەکەت بۆ %1$s بە سەرکەوتوویی نێردرا.',
	'IM_USER'	=> 'پەیامێکی خێرا بنێرە',
	'LAST_ACTIVE'	=> 'دوا چالاک',
	'LESS_THAN'	=> 'کەمتر لە',
	'LIST_USER'	=> '1 بەکارهێنەر',
	'LIST_USERS'	=> '%d بەکارهێنەر',
	'LOGIN_EXPLAIN_LEADERS'	=> 'مەکۆ پێویستی بەوەیە کە خۆت تۆمارکردبێت و لە ژوورەوە بیت بۆ بینینی لیستی تیم.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'مەکۆ پێویستی بەوەیە کە خۆت تۆمارکردبێت و لە ژوورەوە بیت بۆ بینینی لیستی ئەندامان',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'مەکۆ پێویستی بەوەیە کە خۆت تۆمارکردبێت و لە ژوورەوە بیت بۆگەڕئن لە بەکارهێنەران.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'مەکۆ پێویستی بەوەیە کە خۆت تۆمارکردبێت و لە ژوورەوە بیت بۆ بینینی پڕۆفایلەکان',
	'MORE_THAN'	=> 'زیاتر لە',
	'NO_EMAIL'	=> 'ڕێت پێ نەدراوە بە ناردنی ئیمەیل بۆ ئەم بەکارهێنەرە.',
	'NO_VIEW_USERS'	=> 'ڕێت پێ نەدراوە بە بینینی لیستی ئەندام یان پڕۆفایلەکان',
	'ORDER'	=> 'ڕیزکردن',
	'OTHER'	=> 'هیتر',
	'POST_IP'	=> 'نێردراو لە IP/domain',
	'RANK'	=> 'پلە',
	'REAL_NAME'	=> 'ناوی وەرگر',
	'RECIPIENT'	=> 'وەرگر',
	'REMOVE_FOE'	=> 'فەرمۆشکراو لاببە',
	'REMOVE_FRIEND'	=> 'هاوڕێ لاببە',
	'SEARCH_USER_POSTS'	=> 'لە پەیامەکانی بەکارهێنەر بگەڕێ',
	'SELECT_MARKED'	=> 'نیشانەکراوەکان دیاری بکە',
	'SELECT_SORT_METHOD'	=> 'ڕێبازی ڕیزکردن دیاری بکە',
	'SEND_AIM_MESSAGE'	=> 'پەیامی AIM بنێرە',
	'SEND_ICQ_MESSAGE'	=> 'پەیامی ICQ بنێرە',
	'SEND_IM'	=> 'پەیام ناردنی خێرا',
	'SEND_JABBER_MESSAGE'	=> 'پەیامی جابەر بنێرە',
	'SEND_MESSAGE'	=> 'پەیام بنێرە',
	'SEND_MSNM_MESSAGE'	=> 'پەیامی MSNM/WLM بنێرە',
	'SEND_YIM_MESSAGE'	=> 'پەیامی YIM بنێرە',
	'SORT_EMAIL'	=> 'ئیمەیل',
	'SORT_LAST_ACTIVE'	=> 'دوا چالاک',
	'SORT_POST_COUNT'	=> 'ژماردنی پەیام',
	'USERNAME_BEGINS_WITH'	=> 'ناوی بەکارهێنەر دەستپێبکات بە',
	'USER_ADMIN'	=> 'بەکارهێنەر بەڕێوە ببە',
	'USER_BAN'	=> 'ڕاگرتن',
	'USER_FORUM'	=> 'ئامارەکانی بەکارهێنەر',
	'USER_LAST_REMINDED'	=> array(
		0		=> 'هیچ وەبیرهێنانەوەیەک نەنێردراوە',
		1		=> '%1$d وەبیرهێنانەوە نێردراوە<br />» %2$s',
	),
	'USER_ONLINE'	=> 'سەرهێڵ',
	'USER_PRESENCE'	=> 'دەرکەوتنی مەکۆ',
	'VIEWING_PROFILE'	=> 'بینینی پڕۆفایل - %s',
	'VISITED'	=> 'دوا سەردان',
	'WWW'	=> 'وێبگە',
));

?>

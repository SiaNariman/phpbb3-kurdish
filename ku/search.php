<?php
/**
*
* search.php [Sorani Kurdish]
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
	'ALL_AVAILABLE'	=> 'هەمووی هەیە',
	'ALL_RESULTS'	=> 'هەموو ئەنجامەکان',
	'DISPLAY_RESULTS'	=> 'ئەنجامەکان پیشان بدە وەک',
	'FOUND_SEARCH_MATCH'	=> 'گەڕان %d ئەنجامی دۆزییەوە',
	'FOUND_SEARCH_MATCHES'	=> 'گەڕان %d ئەنجامی دۆزییەوە',
	'FOUND_MORE_SEARCH_MATCHES'	=> 'گەڕان زیاتر لە %d ئەنجامی دۆزییەوە',
	'GLOBAL'	=> 'ئاگاداری گشتی',
	'IGNORED_TERMS'	=> 'فەرامۆشکراو',
	'IGNORED_TERMS_EXPLAIN'	=> 'ئەو وشانەی خوارەوە لە پرسی گەڕانەکەتدا فەرامۆشکران لەبەر ئەوە وشەی باون: <strong>%s</strong>.',
	'JUMP_TO_POST'	=> 'بازدان بۆ پەیام',
	'LOGIN_EXPLAIN_EGOSEARCH'	=> 'پێویستە خۆت تۆمارکردبێت و لەژوورەوە بیت بۆ بینینی پەیامەکانی خۆت.',
	'LOGIN_EXPLAIN_UNREADSEARCH'=> 'پێویستە خۆت تۆمارکردبێت و لەژوورەوە بیت بۆ بینینی پەیامە نەخوێندراوەکانت.',
	'MAX_NUM_SEARCH_KEYWORDS_REFINE'   => 'زۆر وشەت نووسیوە بۆ گەڕان. تکایە لە %1$d وشە زیاتر مەنووسە.',
	'NO_KEYWORDS'	=> 'پێویستە لانی کەم وشەیەک بنووسیت بۆ گەڕان بۆی. هەر وشەیەک لانی کەم پێویستە لە %d نووسە پێک هاتبێت و زیاتر لە %d نووسەی تیادا نەبێت.',
	'NO_RECENT_SEARCHES'	=> 'هیچ گەڕانێک جێبەجێ نەکراوە بەم دوواییانە.',
	'NO_SEARCH'	=> 'ببورە بەڵام ڕێت پێ نەدراوە سیستەمی گەڕان بەکار ببەیت.',
	'NO_SEARCH_RESULTS'	=> 'هیچ ئەنجامێکی گوونجاو نەدۆزرایەوە.',
	'NO_SEARCH_TIME'	=> 'ببورە بەڵام ناتوانیت لە ئێستادا گەڕان بەکار ببەیت',
	'NO_SEARCH_UNREADS'		=> 'ببورە ،بەڵام گەڕان بۆ پەیامە نەخوێندراوەکان ناچالاککراوە',
	'WORD_IN_NO_POST'	=> 'هیچ پەیامێک نەدۆزرایەوە لەبەر ئەوەی وشەی <strong>%s</strong> لە هیچ پەیامێکدا نەنووسراوە.',
	'WORDS_IN_NO_POST'	=> 'هیچ پەیامێک نەدۆزرایەوە لەبەر ئەوەی وشەکانی <strong>%s</strong> لە هیچ پەیامێکدا نەنووسراون.',
	'POST_CHARACTERS'	=> 'نووسەکانی پەیامەکان',
	'RECENT_SEARCHES'	=> 'دوا گەڕانەکان',
	'RESULT_DAYS'	=> 'ئەنجامەکان سنووردار بکە بۆ پێشوو',
	'RESULT_SORT'	=> 'ئەنجامەکان ڕیز بکە بە پێی',
	'RETURN_FIRST'	=> 'یەکەم بگەڕێوە',
	'RETURN_TO_SEARCH_ADV'	=> 'بگەڕێوە بۆ گەڕانی پەرەسەندوو',
	'SEARCHED_FOR'	=> 'زاراوەی گەڕان بەکاربرا',
	'SEARCHED_TOPIC'	=> 'بابەتە گەڕاوەکان',
	'SEARCH_ALL_TERMS'	=> 'بگەڕێ بۆ هەموو زاراوەکان یان پرس بەکار ببە وەک لێدراوە',
	'SEARCH_ANY_TERMS'	=> 'بگەڕێ بۆ هەر زاراوەیەک',
	'SEARCH_AUTHOR'	=> 'گەڕان بۆ نووسەر',
	'SEARCH_AUTHOR_EXPLAIN'	=> '* بەکار ببە وەک wildcard بۆ گەڕانی بەشیی.',
	'SEARCH_FIRST_POST'	=> 'تەنها یەکەم پەیامی بابەتەکان',
	'SEARCH_FORUMS'	=> 'گەڕان لە مەکۆکان',
	'SEARCH_FORUMS_EXPLAIN'	=> 'ئەو مەکۆ یان مەکۆیانە دیاری بکە کە ئەتەوێت بگەڕێیت تیایدا. گەر لە خوارەوە "گەڕان لە ژێر مەکۆکان" ناچالاک نەکەیت خۆکارانە لە ژێر مەکۆکان دەگەڕێت',
	'SEARCH_IN_RESULTS'	=> 'لەم ئەنجامانە بگەڕێ',
	'SEARCH_KEYWORDS_EXPLAIN'	=> '<strong>+</strong> دابنێ لە پێش هەر وشەیەک کە پێویستە بدۆزرێتەوە و <strong>-</strong> لە پێش هەر وشەیەک کە پێویست نییە بدۆزرێتەوە. لیستێک لە وشە بنووسە کە جیاکرابنەوە بە <strong>|</strong> گەر تەنها یەکێکیان پێویستە بدۆزرێتەوە. * بەکار ببە وەک wildcard بۆ گەڕانی بەشیی. ',
	'SEARCH_MSG_ONLY'	=> 'تەنها دەقی پەیام',
	'SEARCH_OPTIONS'	=> 'هەڵبژاردنەکانی گەڕان',
	'SEARCH_QUERY'	=> 'پرسی گەڕان',
	'SEARCH_SUBFORUMS'	=> 'گەڕان لە ژێر مەکۆکان',
	'SEARCH_TITLE_MSG'	=> 'سەردێڕی پەیام یان دەقی پەیام',
	'SEARCH_TITLE_ONLY'	=> 'تەنها سەردێڕی بابەت',
	'SEARCH_WITHIN'	=> 'بگەڕێ لە',
	'SORT_ASCENDING'	=> 'سەر بەروژوور',
	'SORT_AUTHOR'	=> 'نووسەر',
	'SORT_DESCENDING'	=> 'سەر بەرەوخوار',
	'SORT_FORUM'	=> 'مەکۆ',
	'SORT_POST_SUBJECT'	=> 'سەردێڕی پەیام',
	'SORT_TIME'	=> 'کاتی ناردن',
	'TOO_FEW_AUTHOR_CHARS'	=> 'پێویستە لانی کەم %d نووسە دیاری بکەیت لە ناوی نووسەر.',
));

?>

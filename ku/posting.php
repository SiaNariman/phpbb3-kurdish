<?php
/**
*
* posting.php [Sorani Kurdish]
*
* @package language
* @version $Id: $
* @copyright (c) 2008 phpBB Group
* @author 2008-12-12 - Chawg.org Group
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
	'ADD_ATTACHMENT'	=> 'هاوپێچ بار بکە',
	'ADD_ATTACHMENT_EXPLAIN'	=> 'گەر ئەتەوێت پەڕگەیەک یان چەند پەڕگەیەک زیاد بکەیت لە خوارەوە زانیارییەکان لێبدە.',
	'ADD_FILE'	=> 'ئەم پەڕگەیە زیاد بکە',
	'ADD_POLL'	=> 'دروستکردنی ڕاپرسی',
	'ADD_POLL_EXPLAIN'	=> 'گەر ناتەوێت ڕاپرسی دابنێیت بۆ بابەتەکەت ئەم خانانە بە بەتاڵی جێبهێڵە.',
	'ALREADY_DELETED'	=> 'ببورە بەڵام ئێم پەیامە پێشتر سڕدراوەتەوە.',
	'ATTACH_QUOTA_REACHED'	=> 'ببورە، گەیشتیت بە زۆرترین ڕێژەی ڕێپێدراوی هاوپێچکردنی پەڕگە.',
	'ATTACH_SIG'	=> 'واژۆیەک هاوپێچ بکە (وژۆ ئەتوانرێت بگۆڕدرێت لە کۆنترۆڵ پانێڵی بەکارهێنەر)',
	'BBCODE_A_HELP'	=> 'هاوپێچی بارکراوی ناوهێڵ: [attachment=]filename.ext[/attachment]',
	'BBCODE_B_HELP'	=> 'دەقی تۆخ: [b]دەق[/b]',
	'BBCODE_C_HELP'	=> 'پیشاندانی کۆد: [code]کۆدcode]',
	'BBCODE_E_HELP'	=> 'لیست: توخمی لیست زیاد بکە',
	'BBCODE_F_HELP'	=> 'قەبارەی فۆنت: [size=85]دەقی بچوک[/size]',
	'BBCODE_IS_OFF'	=> '%sBBCode%s <strong>ناکارا</strong> ـیە',
	'BBCODE_IS_ON'	=> '%sBBCode%s <strong>کارا</strong> ـیە',
	'BBCODE_I_HELP'	=> 'دەقی لار: [i]دەق[/i]',
	'BBCODE_L_HELP'	=> 'لیست: [list]دەق[/list]',
	'BBCODE_LISTITEM_HELP'	=> 'دانەی لیست: [*]دەق[/*]',
	'BBCODE_O_HELP'	=> 'لیستی ڕیزکراو: [list=]دەق[/list]',
	'BBCODE_P_HELP'	=> 'تێکردنی وێنە: [img]http://image_url[/img]',
	'BBCODE_Q_HELP'	=> 'دەقی ئاماژە: [quote]دەق[/quote]',
	'BBCODE_S_HELP'	=> 'ڕەنگی فۆنت: [color=red]دەق[/color]  سەرنج: هەروەها ئەتوانیت color=#FF0000 بەکارببەیت.',
	'BBCODE_U_HELP'	=> 'دەقی هەڵ بە ژێردا هاتوو: [u]دەق[/u]',
	'BBCODE_W_HELP'	=> 'تێکردنی URL: [url]http://url[/url] یان [url=http://url]دەقی URL[/url]',
	'BBCODE_D_HELP'	=> 'فلاش: [flash=width,height]http://url[/flash]',
	'BUMP_ERROR'	=> 'ناتوانی ئەوەندە زوو لەم پەیامە بدەیت لە دوای پەیامی پێشوو.',
	'CANNOT_DELETE_REPLIED'	=> 'ببورە بەڵام تۆ تەنها دەتوانیت ئێو پەیامانە بسڕیتەوە کە وەڵامیان نەدراوەتەوە.',
	'CANNOT_EDIT_POST_LOCKED'	=> 'ئێم پەیامە داخراوە. چیتر ناتوانیت دەستکاری بکەیت.',
	'CANNOT_EDIT_TIME'	=> 'چیتر ناتوانیت ئەم بابەتە دەستکاری بکەیت یان بسڕیتەوە.',
	'CANNOT_POST_ANNOUNCE'	=> 'ببورە بەڵام ناتوانیت ئاگاداری بنێریت.',
	'CANNOT_POST_STICKY'	=> 'ببورە بەڵام ناتوانیت بابەتی جێگیر بنێریت.',
	'CHANGE_TOPIC_TO'	=> 'جۆری بابەت بگۆڕە بۆ',
	'CLOSE_TAGS'	=> 'تاگەکان دابخە',
	'CURRENT_TOPIC'	=> 'بابەتی هەنووکەیی',
	'DELETE_FILE'	=> 'پەڕگە بسڕەوە',
	'DELETE_MESSAGE'	=> 'پەیام بسڕەوە',
	'DELETE_MESSAGE_CONFIRM'	=> 'دڵنیایت لە سڕینەوەی ئەم پەیامە؟',
	'DELETE_OWN_POSTS'	=> 'ببورە بەڵام ناتوانیت پەیامەکانی خۆت بسڕیتەوە.',
	'DELETE_POST_CONFIRM'	=> 'دڵنیایت لە سڕینەوەی ئەم پەیامە؟',
	'DELETE_POST_WARN'	=> 'هەر کە پەیامەکە سڕدرایەوە ناتوانرێت بگێڕدرێتەوە',
	'DISABLE_BBCODE'	=> 'BBCode ناچالاک بکە',
	'DISABLE_MAGIC_URL'	=> 'خۆکارانە URL ـەکان مەکە بە بەستەر',
	'DISABLE_SMILIES'	=> 'خەندەکان ناچالاک بکە',
	'DISALLOWED_CONTENT'	=> 'بارکردن ڕەفز کراوەوە لەبەر ئەوەی پەڕگەی بارکراو وەک پەڕگەیەکی هێرشکەر ناسرا.',
	'DISALLOWED_EXTENSION'	=> 'درێژکراوی %s ڕێ پێ نەدراوە.',
	'DRAFT_LOADED'	=> 'ڕەشنووس لە ناوچەی پەیام نووسیندا کرایەوە، ئێستا ئەتوانیت پەیامەکەت تەواو بکەیت.<br />ڕەشنووسەکەت دەسڕدرێتەوە لە دوای ناردنی ئەم پەیامە.',
	'DRAFT_LOADED_PM'	=> 'ڕەشنووس لە ناوچەی پەیام نووسیندا کرایەوە، ئێستا ئەتوانیت پەیامەکە تایبەتییەکەت تەواو بکەیت.<br />ڕەشنووسەکەت دەسڕدرێتەوە لە دوای ناردنی ئەم پەیامە تایبەتە.',
	'DRAFT_SAVED'	=> 'ڕەشنووس بە سەرکەوتوویی پاشەکەوت کرا.',
	'DRAFT_TITLE'	=> 'سەردێڕی ڕەشنووس',
	'EDIT_REASON'	=> 'هۆکاری دەستکاریکردنی ئەم پەیامە',
	'EMPTY_FILEUPLOAD'	=> 'پەڕگەی بارکراو بەتاڵە.',
	'EMPTY_MESSAGE'	=> 'پێویستە پەیامێک بنووسیت لە کاتی ناردن.',
	'EMPTY_REMOTE_DATA'	=> 'نەتوانرا پەڕگە باربکرێت، تکایە دەستکارانە هەوڵ بدە باری بکەیت.',
	'FLASH_IS_OFF'	=> '[flash] <strong>ناکارا</strong> ـیە',
	'FLASH_IS_ON'	=> '[flash] <strong>کارا</strong> ـیە',
	'FLOOD_ERROR'	=> 'ناتوانیت ئەوەندە زوو پەیامێکی تر بنووسیت.',
	'FONT_COLOR'	=> 'ڕەنگی فۆنت',
	'FONT_COLOR_HIDE'	=> 'شاردنەوەی ڕەنگی فۆنت',
	'FONT_HUGE'	=> 'مەزن',
	'FONT_LARGE'	=> 'گەورە',
	'FONT_NORMAL'	=> 'ناوەند',
	'FONT_SIZE'	=> 'قەبارەی فۆنت',
	'FONT_SMALL'	=> 'بچوک',
	'FONT_TINY'	=> 'ورد',
	'GENERAL_UPLOAD_ERROR'	=> 'نەتوانرا هاوپێچ بار بکرێت بۆ %s',
	'IMAGES_ARE_OFF'	=> '[img] <strong>ناکارا</strong> ـیە',
	'IMAGES_ARE_ON'	=> '[img] <strong>کارا</strong> ـیە',
	'INVALID_FILENAME'	=> '%s ناوێکی نەگونجاوی پەڕگەیە.',
	'LOAD'	=> 'کردنەوە',
	'LOAD_DRAFT'	=> 'کردنەوەی ڕەشنووس',
	'LOAD_DRAFT_EXPLAIN'	=> 'لێرە ئەتوانیت ئەو ڕەشنووسە دیاری بکەیت کە ئەتەوێت بەردەوام بیت لە نووسین لەسەری. پەیامی هەنووکەییت هەڵدەوەشێتەوەم هەموو ناوەڕۆکی پەیامی هەنووکەییت دەسڕدرێتەوە. ڕەشنووسەکانت لە کۆنترۆڵ پانێڵي بەکارهێنەردا ببینەم دەستکاری بکە یان بسڕەوە.',
	'LOGIN_EXPLAIN_BUMP'	=> 'پێویستە بچیتە ژوورەوە بۆ لێدانی بابەتەکانی ئەم مەکۆیە.',
	'LOGIN_EXPLAIN_DELETE'	=> 'پێویستە بچیتە ژوورەوە بۆ ئەوەی پەیام بسڕیتەوە لەم مەکۆیە.',
	'LOGIN_EXPLAIN_POST'	=> 'پێویستە بچیتە ژوورەوە بۆ ئەوەی پەیام بنێریت لەم مەکۆیە.',
	'LOGIN_EXPLAIN_QUOTE'	=> 'پێویستە بچیتە ژوورەوە بۆ ئەوەی ئاماژە بە پەیام بدەیت لەم مەکۆیە.',
	'LOGIN_EXPLAIN_REPLY'	=> 'پێویستە بچیتە ژوورەوە بۆ ئەوەی وەڵامی بابەتەکانی ئەم مەکۆیە بدەیتەوە.',
	'MAX_FONT_SIZE_EXCEEDED'	=> 'ئەتوانی تەنها تا قەبارەی %1$d فۆنتەکان بەکار ببەیت.',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> 'پێویستە بەرزی پەڕگە فلاشییەکانت تا %1$d پیکسڵ بێت.',
	'MAX_FLASH_WIDTH_EXCEEDED'	=> 'پێویستە پانی پەڕگە فلاشییەکانت تا %1$d پیکسڵ بێت.',
	'MAX_IMG_HEIGHT_EXCEEDED'	=> 'پێویستە بەرزی وێنەکانت تا %1$d پیکسڵ بێت.',
	'MAX_IMG_WIDTH_EXCEEDED'	=> 'پێویستە پانی وێنەکانت تا %1$d پیکسڵ بێت.',
	'MESSAGE_BODY_EXPLAIN'	=> 'پەیامەکەت لێرە بنووسە، نابێت لە <strong>%d</strong> نووسە زۆرتری تیادا بێت.',
	'MESSAGE_DELETED'	=> 'ئەم پەیامە بە سەرکەوتوویی سڕدرایەوە.',
	'MORE_SMILIES'	=> 'خەندەی زیاتر ببینە',
	'NOTIFY_REPLY'	=> 'ئاگادارم بکەوە کاتێک وەڵامێک نێردرا',
	'NOT_UPLOADED'	=> 'نەتوانرا پەڕگە بار بکرێت.',
	'NO_DELETE_POLL_OPTIONS'	=> 'ناتوانیت هەڵبژاردنە هەبووەکانی ڕاپرسی بسڕیتەوە.',
	'NO_PM_ICON'	=> 'پ ت ئایکۆنی نییە',
	'NO_POLL_TITLE'	=> 'پێویستە ناونیشانی ڕاپرسی بنووسیت.',
	'NO_POST'	=> 'پەیامی داواکراو بوونی نییە.',
	'NO_POST_MODE'	=> 'هیچ جۆرێکی پەیام دیاری نەکراوە.',
	'PARTIAL_UPLOAD'	=> 'پەڕگەی بارکراو بەش بەش بارکرا.',
	'PHP_SIZE_NA'	=> 'قەبارەی پەڕگەی هاوپێچ زۆر گەورەیە.<br />نەتوانرا زۆرترین قەبارەی پێناسەکراو لەلایەن PHP بپێورێت لە php.ini.',
	'PHP_SIZE_OVERRUN'	=> 'قەبارەی پەڕگەی هاوپێچکراو زۆر گەورەیە، زۆرترین قەبارەی بارکراو %1$d %2$s ـە.<br />تکایە سەرنجی ئەوە بدە ئەمە لە php.ini ڕێکخراوە و ناتوانرێت بگۆڕدرێت.',
	'PLACE_INLINE'	=> 'لە ناو هێڵ دایبنێ',
	'POLL_DELETE'	=> 'ڕاپرسی بسڕەوە',
	'POLL_FOR'	=> 'ڕاپرسی کار بکات بۆ',
	'POLL_FOR_EXPLAIN'	=> '0 بنووسە یان بە بەتاڵی جێی بهێڵە تا ڕاپرسی هەرگیز کۆتایی نەیەت.',
	'POLL_MAX_OPTIONS'	=> 'هەڵبژاردنەکان بۆ هەر بەکارهێنەرێک',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> 'ئەمە ژمارەی ئەو هەڵبژاردنانەیە کە پێویستە هەر بەکارهێنەرێک دیاری بکات لە کاتی دەنگدان.',
	'POLL_OPTIONS'	=> 'هەڵبژاردنەکانی ڕاپرسی',
	'POLL_OPTIONS_EXPLAIN'	=> 'هەر هەڵبژاردنێک لە هێڵێکی نوێ دابنێ. پێویستە تا <strong>%d</strong> هەڵبژاردن لێبدەیت.',
	'POLL_OPTIONS_EDIT_EXPLAIN'	=> 'هەر هەڵبژاردنێک لە هێڵێکی نوێدا دابنێ. ئەتوانیت تا <strong>%d</strong> هەڵبژاردن دیاری بکەیت. گەر هەرڵبژاردنت لابردووە یان زیاد کردووە هەرموو دەنگەکانی پێشوو دەسڕدرێتەوە.',
	'POLL_QUESTION'	=> 'پرسیاری ڕاپرسی',
	'POLL_TITLE_TOO_LONG'	=> 'ناونیشانی ڕاپرسی پێویستە کەمتر لە 100 نووسەی تیادا بێت.',
	'POLL_TITLE_COMP_TOO_LONG'	=> 'قەبارەی ناونیشانی ڕاپرسی زۆر درێژە. هەوڵ بدە BBCode ـەکان یان خەندەکان لاببە.',
	'POLL_VOTE_CHANGE'	=> 'ڕێ بە دەنگدانەوە بدە',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> 'گەر چالاک کرا بەکارهێنەران دەتوانن دەنگەکەیان بگۆڕن',
	'POSTED_ATTACHMENTS'	=> 'هاوپێچە نێردراوەکان',
	'POST_APPROVAL_NOTIFY'	=> 'ئاگادار دەکرێیتەوە کاتێک پەیامەکەت پەسەند کرا.',
	'POST_CONFIRMATION'	=> 'دڵنیابوونەوە لە پەیام',
	'POST_CONFIRM_EXPLAIN'	=> 'بۆ قەدەغەکردنی پەیامی خۆکار مەکۆ پێوسیتی بەوەیە کە کۆدێکی دڵنیایی لێبدەیت. کۆد لەو وێنەیە پیشان ئەدرێت کە پێویستە لە خوارەوە ببیبینیت. گەر ئاستی بینینی لاوازە یان ناتوانیت کۆدەکە بخوێنیتەوە تکایە پەیوەندی بە %sبەڕێوەبەری مەکۆ%sوە بکە.',
	'POST_DELETED'	=> 'پەیامەکە بە سەرکەوتوویی سڕدرایەوە.',
	'POST_EDITED'	=> 'ئەم پەیامە بە سەرکەوتوویی دەستکاری کرا.',
	'POST_EDITED_MOD'	=> 'ئەم پەیامە بە سەرکەوتوویی دەستکاری کرا، بەڵام پێویستی بەوەیە کە پەسەند بکرێت لەلایەن چاودێرێک پێش ئەوەی بە ئاشکرا ببینرێت.',
	'POST_GLOBAL'	=> 'گشتیی',
	'POST_ICON'	=> 'ئایکۆنی پەیام',
	'POST_NORMAL'	=> 'ئاسایی',
	'POST_REVIEW'	=> 'پەیاچوونەوەی پەیام',
	'POST_REVIEW_EDIT'			=> 'پیاچوونەوەی پەیام',
	'POST_REVIEW_EDIT_EXPLAIN'	=> 'ئەم پەیامە لە لایەن بەکارهێنەرێکی ترەوە گۆڕدراوە کاتێک دەستکاریت دەکرد. لەوانەیە بتەوێت چاوێک لە دەستکارییەکان بکەیت و دەستکارییەکانی خۆت ڕەک بخەیت.',
	'POST_REVIEW_EXPLAIN'	=> 'لانی کەم پەیامێکی نوێ نێردراوە بۆ ئەم بابەتە. لەوانەیە بتەوێت بە پەیامەکەتدا بچیتەوە لە ژێر ڕووناکی ئەمەدا.',
	'POST_STORED'	=> 'ئەم پەیامە بە سەرکەوتوویی نێردرا.',
	'POST_STORED_MOD'	=> 'ئەم پەیامە بە سەرکەوتوویی نێردرا، بەڵام پێویستی بەوەیە کە پەسەند بکرێت لەلایەن چاودێرێک پێش ئەوەی بە ئاشکرا ببینرێت..',
	'POST_TOPIC_AS'	=> 'بابەت بنێرە وەک',
	'PROGRESS_BAR'	=> 'جێی بەڕێوەچوون',
	'QUOTE_DEPTH_EXCEEDED'	=> 'پێویستە تەنها %1$d ئاماژە تێ بکەیت لە ناو هەر یەکێکدا.',
	'SAVE'	=> 'پاشەکەوتکردن',
	'SAVE_DATE'	=> 'پاشەکەوتکرا لە',
	'SAVE_DRAFT'	=> 'ڕەشنووس پاشەکەوت بکە',
	'SAVE_DRAFT_CONFIRM'	=> 'تکایە سەرنجی ئەوە بدە کە ڕەشنووسە پاشەکەوتکراوەکان تەنها سەردێڕ و پەیامیان تیادایە، یان توخمەکانی تر لادەبرێن. ئەتەوێت ئێستا ڕەشنووسەکەت پاشەکەوت بکەیت؟',
	'SMILIES'	=> 'خەندەکان',
	'SMILIES_ARE_OFF'	=> 'خەندە <strong>ناکارا</strong> ـیە',
	'SMILIES_ARE_ON'	=> 'خەندە <strong>کارا</strong> ـیە',
	'STICKY_ANNOUNCE_TIME_LIMIT'	=> 'سنووری کاتی جێگیر/ئاگاداری',
	'STICK_TOPIC_FOR'	=> 'بابەت جێگیر بکە بۆ',
	'STICK_TOPIC_FOR_EXPLAIN'	=> '0 بنووسە یان بە بەتاڵی جێی بهێڵە بۆ جێگیر/ئاگاداری کۆتایی نەهاتوو. تکایە سەرنجی ئەوە بدە ئەم ژمارەیە پەیوەستە بە ڕێکەوتی پەیامەکەوە.',
	'STYLES_TIP'	=> 'سەرنج: ڕووخسارەکان بە خێرایی جێبەجێ دەکرێن بەسەر دەقە دیاریکراوەکاندا.',
	'TOO_FEW_CHARS'	=> 'پەیامەکەت نووسەی زۆر کەمی تیادایە.',
	'TOO_FEW_CHARS_LIMIT'		=> 'پەیامەکەت نووسەی تیادایە. کەمترین ژمارەی نووسە کە پێویستە بینووسیت %2$d نووسەیە.',
	'TOO_FEW_POLL_OPTIONS'	=> 'پێویستە لانی کەم دوو هەڵبژاردنی ڕاپرسی دیاری بکەیت.',
	'TOO_MANY_ATTACHMENTS'	=> 'ناتوانرێت هاوپێچێکی تر زیاد بکرێت، زۆرترین %d دانەیە.',
	'TOO_MANY_CHARS'	=> 'پەیامەکەت نووسەی زۆری تیادایە.',
	'TOO_MANY_CHARS_POST'	=> 'پەیامەکەت %1$d نووسەی تیادایە. زۆرترین ژمارەی ڕێپێدراوی نووسە %2$d ـیە.',
	'TOO_MANY_CHARS_SIG'	=> 'واژۆکەت %1$d نووسەی تیادایە. زۆرترین ژمارەی ڕێپێدراوی نووسە %2$d ـیە.',
	'TOO_MANY_POLL_OPTIONS'	=> 'هەوڵی دیاریکردنی چەند هەڵبژاردنێکی زۆری ڕاپرسیت کرد.',
	'TOO_MANY_SMILIES'	=> 'پەیامەکەت خەندەی زۆری تیادایە. زۆرتین ژمارەی ڕێ پێدراوی خەندە %d ـە.',
	'TOO_MANY_URLS'	=> 'پەیامەکەت URL ـی زۆری تیادایە. زۆرتین ژمارەی ڕێ پێدراوی URL %d ـە.',
	'TOO_MANY_USER_OPTIONS'	=> 'ناتوانیت هەڵبژاردنی زیاتر دیاری بکەیت بۆ هەر بەکارهێنەرێک لە هەڵبژاردنەکانی هەبووەکانی ڕاپرسیی.',
	'TOPIC_BUMPED'	=> 'بە سەرکەوتوویی لە بابەت درا.',
	'UNAUTHORISED_BBCODE'	=> 'ناتوانیت BBCode ـی تایبەتی بەکار ببەیت: %s.',
	'UNGLOBALISE_EXPLAIN'	=> 'بۆ گێڕاندنەوەی ئەم بابەتە لە بابەتی گشتییەوە بۆ ئاسایی، پێویستە ئەو مەکۆیە دیاری بکەیت کە ئەتەوێت ئەم بابەتەی لێ پیشان بدرێت.',
	'UPDATE_COMMENT'	=> 'لێدوان نوێ بکەوە',
	'URL_INVALID'	=> 'ئەو URL ـەی نووسیوتە نەگونجاوە.',
	'URL_NOT_FOUND'	=> 'نەتوانرا پەڕگەی دیاریکراو بدۆزرێتەوە',
	'URL_IS_OFF'	=> '[url] <strong>ناکارا</strong> ـیە.',
	'URL_IS_ON'	=> '[url] <strong>کارا</strong> ـیە.',
	'USER_CANNOT_BUMP'	=> 'ناتوانیت لە بابەتەکانی ئەم مەکۆیە بدەیت.',
	'USER_CANNOT_DELETE'	=> 'ناتوانیت پەیامەکانی ئەم مەکۆیە بسڕیتەوە.',
	'USER_CANNOT_EDIT'	=> 'ناتوانیت دەستکاری پەیامەکانی ئەم مەکۆیە بکەیت.',
	'USER_CANNOT_REPLY'	=> 'ناتوانیت وەڵام بدەیتەوە لەم مەکۆیە.',
	'USER_CANNOT_FORUM_POST'	=> 'ناتوانیت پەیام بنووسیت لەم مەکۆیە لەبەر ئەوەی جۆری مەکۆ پاڵپشتی ئەوە ناکات.',
	'VIEW_MESSAGE'	=> '%sپەیامە نێردراوەکەت ببینە%s',
	'VIEW_PRIVATE_MESSAGE'	=> '%sپەیامە تایبەتە نێردراوەکەت ببینە%s',
	'WRONG_FILESIZE'	=> 'پەڕگەکە زۆر گەورەیە، زۆرترین قەبارەی ڕێ پێدراو %1d %2s ـە.',
	'WRONG_SIZE'	=> 'پێویستە وێنە لانی کەم %1$d خاڵ پان بێت، %2$d خاڵ بەرز بێت لانی زۆر %3$d خاڵ پان و %4$d خاڵ بەرز بێت. وێنەی نێردراو %5$d خاڵ پانە و %6$d خاڵ بەرزە.',
));

?>

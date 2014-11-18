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

// BBCodes
// Note to translators: you can translate everything but what's between { and }
$lang = array_merge($lang, array(
	'ACP_BBCODES_EXPLAIN'		=> 'BBCode گەشەپێدراوێکی تایبەتی HTML کۆنترۆڵکردنێکی مەزنتر پێشکەش دەکات لەسەر چی و چۆن شتێک نیشانبدرێ. لەو پەڕەیەوە دەتوانی BBCode ــی ئارەزوومەندانە زیادبکەی ،دەستکاری بکەی و بسڕیتەوە.',
	'ADD_BBCODE'				=> 'BBCode ــی نوێ زیادبکە',
	'BBCODE_DANGER'				=> 'ئەو BBCode ــەی کە هەوڵدەدەی زیادی بکەیت وادیارە بۆ بەکارهێنانی {TEXT} بردراوەتە ناو توانایەکی HTML. ئەمە لەوانەیە کێشەیەکی پاراستنی XSS بێت. هەوڵبدە لەباتی {SIMPLETEXT} بەکارببە یان {INTTEXT}. تەنها بەردەوامبە ئەگەر تۆ تێدەگەی مەترسیەکە توشبووە و تۆ وادادەنێی بەکاربردنی {TEXT} باشترە.',
	'BBCODE_DANGER_PROCEED'		=> 'بەردەوامبە', //'I understand the risk',
	'BBCODE_ADDED'				=> 'BBCode بەسەرکەوتوویی دانرا.',
	'BBCODE_EDITED'				=> 'BBCode بەسەرکەوتوویی دەستکاری کرا.',
	'BBCODE_NOT_EXIST'			=> 'ئەو BBCode ــەی هەڵتبژاردووە بوونی نییە.',
	'BBCODE_HELPLINE'			=> 'دێڕی یارمەتی',
	'BBCODE_HELPLINE_EXPLAIN'	=> 'ئەم خانەیە مشکەکە بەسەر دەقی BBCode لەخۆدەگرێت.',
	'BBCODE_HELPLINE_TEXT'		=> 'دەقی دێڕی یارمەتی',
	'BBCODE_HELPLINE_TOO_LONG'	=> 'ئەو دەقی یارمەتییەی نووسیوتە زۆر درێژە.',

	'BBCODE_INVALID_TAG_NAME'	=> 'ئەو ناوی تاگی BBCode ـەی کە هەڵتبژاردووە پێشتر هەیە.',
	'BBCODE_INVALID'			=> 'BBCode ــی تۆ لەگەڵ فۆرمێکی نابەجێ توشبووە.',
	'BBCODE_OPEN_ENDED_TAG'		=> 'BBCode ــی ئارەزوومەندانەت دەبێ هەردوو تاگی داخراو و کراوەی لەخۆگرتبێت.',
	'BBCODE_TAG'				=> 'تاگ',
	'BBCODE_TAG_TOO_LONG'		=> 'ئەو ناوی تاگەی هەڵتبژاردووە زۆر درێژە.',
	'BBCODE_TAG_DEF_TOO_LONG'	=> 'ئەو تاگە پێناسەکردنە کە نووسیوتە زۆر درێژە ،تکایە کورتری بکەوە.',
	'BBCODE_USAGE'				=> 'بەکارهێنانی BBCode',
	'BBCODE_USAGE_EXAMPLE'		=> '<div style="direction:ltr; text-align:center;">[hilight={COLOR}]{TEXT}[/hilight]<br /><br />[font={SIMPLETEXT1}]{SIMPLETEXT2}[/font]</div>',
	'BBCODE_USAGE_EXPLAIN'		=> 'لێرە دەتوانی چۆنیەتی بەکاربردنی BBcode پێناسەبکەیت. هەر گۆڕاوێکی تر لەجێگادابنێوە بەهۆی بیرگەی خستراو (%sلێرە ببینە%s).',

	'EXAMPLE'						=> 'نموونە:',
	'EXAMPLES'						=> 'نموونەکان:',

	'HTML_REPLACEMENT'				=> 'لەجێگادانانەوەکانی HTML',
	'HTML_REPLACEMENT_EXAMPLE'		=> '&lt;span style="background-color: {COLOR};"&gt;{TEXT}&lt;/span&gt;<br /><br />&lt;span style="font-family: {SIMPLETEXT1};"&gt;{SIMPLETEXT2}&lt;/span&gt;',
	'HTML_REPLACEMENT_EXPLAIN'		=> 'لێرە دەتوانی لەجێگادانانەوەکانی بنەڕەتی HTML پیناسەبکەیت. لەیادت نەچێ هێماکانی لەسەرەوە بەکارتهێناوە بیانگەڕێنیتەوە!',

	'TOKEN'					=> 'هێما',
	'TOKENS'				=> 'هێماکان',
	'TOKENS_EXPLAIN'		=> 'هێماکان شوێنگرن بۆ دەرکردەی بەکارهێنەر. دەرکردەکە بەردەست دەبێ تەنها ئەگەر لەگەڵ پێناسەکردنی بنووسەکە بگونجێت. ئەگەر پێویستی کرد ،دەتوانی ژمارەیان بکەی بەزیادکردنی ژمارەیەک وەکو تیپێک لەنێوان مەوداکان ،نموونە {TEXT1}, {TEXT2}.<br /><br /> لەناو لەجێگادانانەوەکانی HTML دەتوانی هەر زمانێکی پێشکەشکراو بەکاربهێنیت لە شوێنگە/پێڕستی زمانەکانت ،وەکو ئەمە: {L_<em>&lt;STRINGNAME&gt;</em>} کە <em>&lt;STRINGNAME&gt;</em> ناوی وەرگێڕاوەکەیە کە دەتەوێ زیادی بکەیت. بۆ نموونە ،{L_WROTE} نیشان دەدرێت وەکو "نووسراو" یان ئەمە بەپێی وەرگێڕانە بۆ زمانی بەکارهێنەر. <br /><br /><strong>تکایە سەرنجی ئەوە بدە کە تەنها ئەو هێمایانەی لەخوارەوە لیستکراون دەتوانرێت بەکاربهێنرێن لەناو BBCode ــە ئارەزوومەندەکان.</strong>',
	'TOKEN_DEFINITION'		=> 'دەتوانێ ببێ بەچی؟',
	'TOO_MANY_BBCODES'		=> 'ناتوانیت هیچ BBCode ــێکی تر دروستبکەی. تکایە BBCode ــێک یان زیاتر بسڕەوە و پاشان دووبارە هەوڵبدەوە.',
	'tokens'	=>	array(
		'TEXT'			 => 'هەر دەقێک ،تیپە لەبیرچووەکان لەخۆبگرێت ،ژمارەکان ،هتد... پێویستە تۆ ئەو هێمایە بەکارنەبەیت لە تاگەکانی HTML. لەباتی ئەوە هەوڵبدە ئەمانە بەکارببە  IDENTIFIER, INTTEXT یان SIMPLETEXT.',
		'SIMPLETEXT'	=> 'تیپەکان لە ئەلفوبێی لاتینی (A-Z) ،ژمارەکان ،نێوانەکان ،مێرگولەکان ،خاڵەکان ،کەمەکان ،کۆیەکان ،ژێرهێما و گۆڕاوەکان',
		'INTTEXT'		=> 'پیتەکانی تیپی یونیکۆد ،ژمارەکان ،نێوانەکان ،مێرگولەکان ،خاڵەکان ،کەمەکان ،کۆیەکان ،نێوانسپییەکان ،ژێرهێماکان.',
		'IDENTIFIER'	=> 'تیپەکان لە ئەلفوبێی لاتینی (A-Z) ,ژمارەکان ،ژێرهێما',
		'NUMBER'		=> 'هەر زنجیرەیەکی پیتەکان',
		'EMAIL'			=> 'ناونیشانی ئیمەیڵێکی دروست',
'URL'			=> ' URLــێکی دروست هەر کۆنووسێک بەکاردەبات (http ,ftp ,هتد ...ناتوانرێ بەکارببرێ بۆ کارەکانی جاڤاسکرێپت). ئەگەر هیچ درا ،"http://" چارەکراوە بۆ ئەم داوە.', 
		'LOCAL_URL'		=> 'URL ــێکی ناوخۆ. URL ــەکە دەبێ پەیوەندیدار بێت بۆ پەڕەی بابەتەکە و ناتوانرێت ناوی ڕاژەیەک لەخۆبگرێت یان کۆنووس.',
		'COLOR'			=> 'ڕەنگێکی HTML ،دەشتوانرێ لە فۆرمێکی ژمارەیی بێت <samp>#FF1234</samp> یان <a href="http://www.w3.org/TR/CSS21/syndata.html#value-def-color">کلیلەوشەی ڕەنگێکی CSS</a> وەکو <samp>fuchsia</samp> یان <samp>InactiveBorder</samp>'
	)
));

// Smilies and topic icons
$lang = array_merge($lang, array(
	'ACP_ICONS_EXPLAIN'		=> 'لەو پەڕەیەوە دەتوانی هێماکان زیادبکەی ،بسڕیتەوە و دەستکاریبکەی  بەکارهێنەران دەتوانن زیادیبکەن بۆ بابەتەکانیان یان پەیامەکانیان. ئەو هێمایانە بەگشتی نیشاندەدرێن لەدوای ناونیشان و سەردێڕی بابەتەکە لە لیستی مەکۆکان ،دەشتوانی گورزەیەکی نوێی هێماکان دابمەزرێنیت و دروستیان بکەیت.',
	'ACP_SMILIES_EXPLAIN'	=> 'خەندەکان یان دەربڕینەکان بچووکن ،هەندێکات وێنەی جووڵێنراون بەکارهاتوون بۆ دەربڕین لە بارێک یان هەستێک. لەو پەڕەیەوە دەتوانی دەربڕینەکان زیادبکەی ،بسڕیتەوە و دەستکاریان بکەی بەکارهێنەران دەتوانن بەکاریان بهێنن لە پەیامەکانیان و پەیامە تایبەتەکان. دەشتوانی گورزەیەکی نوێی خەندەکان دابمەزرێنی و دروستیان بکەیت.',
	'ADD_SMILIES'			=> 'فرە خەندەکان زیادبکە',
	'ADD_SMILEY_CODE'		=> 'کۆدی زیادەی خەندە زیادبکە',
	'ADD_ICONS'				=> 'فرە هێماکان زیادبکە',
	'AFTER_ICONS'			=> 'لەدوای %s',
	'AFTER_SMILIES'			=> 'لەدوای %s',

	'CODE'						=> 'کۆدe',
	'CURRENT_ICONS'				=> 'هێماکانی ئێستا',
	'CURRENT_ICONS_EXPLAIN'		=> 'دەستنیشانی بکە کە چی بکرێت لەگەڵ هێما دامەزراوەکان.',
	'CURRENT_SMILIES'			=> 'خەندەکانی ئێستا',
	'CURRENT_SMILIES_EXPLAIN'	=> 'دەستنیشانی بکە کە چی بکرێت لەگەڵ خەندە دامەزراوەکان',

	'DISPLAY_ON_POSTING'		=> 'لە پەڕەی ناردن نیشانبدە',
	'DISPLAY_POSTING'			=> 'لەسەر پەرەی ناردن',
	'DISPLAY_POSTING_NO'		=> 'لەسەر پەڕەی ناردن نا',

	'EDIT_ICONS'				=> 'Edit icons',
	'EDIT_SMILIES'				=> 'Edit smilies',
	'EMOTION'					=> 'Emotion',
	'EXPORT_ICONS'				=> 'Export and download icons.pak',
	'EXPORT_ICONS_EXPLAIN'		=> '%sOn clicking this link, the configuration for your installed icons will be packaged into <samp>icons.pak</samp> which once downloaded can be used to create a <samp>.zip</samp> or <samp>.tgz</samp> file containing all of your icons plus this <samp>icons.pak</samp> configuration file%s.',
	'EXPORT_SMILIES'			=> 'Export and download smilies.pak',
	'EXPORT_SMILIES_EXPLAIN'	=> '%sOn clicking this link, the configuration for your installed smilies will be packaged into <samp>smilies.pak</samp> which once downloaded can be used to create a <samp>.zip</samp> or <samp>.tgz</samp> file containing all of your smilies plus this <samp>smilies.pak</samp> configuration file%s.',

	'FIRST'			=> 'First',

	'EDIT_ICONS'				=> 'هێماکان دەستکاریبکە',
	'EDIT_SMILIES'				=> 'خەندەکان دەستکاریبکە',
	'EMOTION'					=> 'دەربڕین',
	'EXPORT_ICONS'				=> 'هاوردە بکە و دایبگرە icons.pak',
	'EXPORT_ICONS_EXPLAIN'		=> '%sلەسەر کرتەکردنی ئەم بەستەرە ،ئەو دیمەنکردنەی بۆ هێما دەمەزراوەکانت گورزەدەکرێ بۆناو <samp>icons.pak</samp> هەرکە داگیرا دەتوانرێ بەکارببرێت بۆ دروستکردنی پەڕگەی <samp>.zip</samp>ــێک یان <samp>.tgz</samp> هەموو هێماکان لەخۆدەگرێت لەگەڵ ئەو پەڕگەی دیمەنکردنەی <samp>icons.pak</samp> %s.',

	'EXPORT_SMILIES'			=> 'هاوردە بکە و دایبگرە smilies.pak',
	'EXPORT_SMILIES_EXPLAIN'	=> '%sلەسەر کرتەکردنی ئەم بەستەرە ،ئەو دیمەنکردنەی بۆ خەندە دەمەزراوەکانت گورزەدەکرێ بۆناو <samp>smilies.pak</samp> هەرکە داگیرا دەتوانرێ بەکارببرێت بۆ دروستکردنی پەڕگەی <samp>.zip</samp>ــێک یان <samp>.tgz</samp> هەموو هێماکان لەخۆدەگرێت لەگەڵ ئەو پەڕگەی دیمەنکردنەی <samp>smilies.pak</samp> %s.',

	'FIRST'			=> 'یەکەم',

	'ICONS_ADD'				=> 'هێمایەکی نوێ زیادبکە',
	'ICONS_NONE_ADDED'		=> 'هیچ هێمایەک زیادنەکراوە.',
	'ICONS_ONE_ADDED'		=> 'هێماکە بەسەرکەوتوویی زیادکرا.',
	'ICONS_ADDED'			=> 'هێماکان بەسەرکەوتوویی زیادکران.',
	'ICONS_CONFIG'			=> 'دیمەنکردنی هێما',
	'ICONS_DELETED'			=> 'هێماکە بەسەرکەوتوویی سڕایەوە.',
	'ICONS_EDIT'			=> 'هێما دەستکاریبکە',
	'ICONS_ONE_EDITED'		=> 'هێماکە بەسەرکەوتوویی نوێکرایەوە.',
	'ICONS_NONE_EDITED'		=> 'هیچ هێمایەک نوێنەکراوەتەوە.',
	'ICONS_EDITED'			=> 'هێماکان بەسەرکەوتوویی نوێکرانەوە.',
	'ICONS_HEIGHT'			=> 'بەرزی هێما',
	'ICONS_IMAGE'			=> 'وێنەی هێما',
	'ICONS_IMPORTED'		=> 'ئەو گورزەی هێمایە بەسەرکەوتوویی هێنرا.',
	'ICONS_IMPORT_SUCCESS'	=> 'ئەو گورزەی هێمایانە بەسەرکەوتوویی هێنران.',
	'ICONS_LOCATION'		=> 'شوێنی هێما',
	'ICONS_NOT_DISPLAYED'	=> 'ئەم هێمایانەی خوارەوە لە پەڕەی ناردن نیشان نەدراون.',
	'ICONS_ORDER'			=> 'داوای هێما',
	'ICONS_URL'				=> 'پەڕگەی وێنەی هێما',
	'ICONS_WIDTH'			=> 'پانی هێما',
	'IMPORT_ICONS'			=> 'گورزەی هێماکان دابمەزرینە',
	'IMPORT_SMILIES'		=> 'گورزەی خەندەکان دابمەزرێنە',

	'KEEP_ALL'			=> 'هەموو بهێڵێەوە',

	'MASS_ADD_SMILIES'	=> 'فرە خەندەکان زیادبکە',

	'NO_ICONS_ADD'		=> 'هیچ هێمایەک بەردەست نییە بۆ زیادکردن.',
	'NO_ICONS_EDIT'		=> 'هیچ هێمایەک بەردەست نییە بۆ دڵنیاکردنەوە.',
	'NO_ICONS_EXPORT'	=> 'هیچ هێمایەکەت نییە تاکو لەگەڵی گورزەیەک دروستبکەی.',
	'NO_ICONS_PAK'		=> 'هیچ گورزەیەکی هێماکان نەدۆزرایەوە.',
	'NO_SMILIES_ADD'	=> 'هیچ خەندەیەک بەردەست نییە بۆ زیادکردن.',
	'NO_SMILIES_EDIT'	=> 'هیچ خەندەیەک بەردەست نییە بۆ دڵنیاکردنەوە.',
	'NO_SMILIES_EXPORT'	=> 'هیچ خەندەیەکت نییە تاکو لەگەڵی گورزەیەک دروستبکەی',
	'NO_SMILIES_PAK'	=> 'هیچ گورزەیەکی خەندەکان نەدۆزرایەوە.',

	'PAK_FILE_NOT_READABLE'		=> 'ناتوانرێ پەڕگەی <samp>.pak</samp> بخوێنرێتەوە.',

	'REPLACE_MATCHES'	=> 'گونجاوەکان لەجێدابنێ',

	'SELECT_PACKAGE'			=> 'پەڕگەیەکی گورزە هەڵبژێرە',
	'SMILIES_ADD'				=> 'خەندەیەکی نوێ زیادبکە',
	'SMILIES_NONE_ADDED'		=> 'هیچ خەندەیەک زیادنەکرا.',
	'SMILIES_ONE_ADDED'			=> 'خەندەکە بەسەرکەوتوویی زیادکرا.',
	'SMILIES_ADDED'				=> 'خەندەکان بەسەرکەوتوویی زیادکران.',
	'SMILIES_CODE'				=> 'کۆدی خەندە',
	'SMILIES_CONFIG'			=> 'دیمەنکردنی خەندە',
	'SMILIES_DELETED'			=> 'خەندەکە بەسەرکەوتوویی سڕایەوە.',
	'SMILIES_EDIT'				=> 'خەندە دەستکاریبکە',
	'SMILIE_NO_CODE'			=> 'ئەو خەندەیە “%s” پشتگوێخرا ،هەروەکو هیچ کۆدێک نەنووسرابوو.',
	'SMILIE_NO_EMOTION'			=> 'ئەو خەندەیە “%s” پشتگوێخرا ،هەروەکو هیچ کۆدێک نەنووسرابوو.',
	'SMILIE_NO_FILE'			=> 'ئەو خەندەیە “%s” پشتگوێخرا ،هەروەکو پەڕگەکە بزرە.',
	'SMILIES_NONE_EDITED'		=> 'هیچ خەندەیەک نوێنەکرایەوە.',
	'SMILIES_ONE_EDITED'		=> 'خەندەکە بەسەرکەوتوویی نوێکرایەوە.',
	'SMILIES_EDITED'			=> 'خەندەکان بەسەرکەوتوویی نوێکرانەوە.',
	'SMILIES_EMOTION'			=> 'دەربڕین',
	'SMILIES_HEIGHT'			=> 'بەرزی خەندە',
	'SMILIES_IMAGE'				=> 'وێنەی خەندە',
	'SMILIES_IMPORTED'			=> 'گورزەی خەندەکان بەسەرکەوتوویی زیادکران.',
	'SMILIES_IMPORT_SUCCESS'	=> 'گورزەی خەندەکان بەسەرکەوتوویی هێنران.',
	'SMILIES_LOCATION'			=> 'شوێنی خەندە',
	'SMILIES_NOT_DISPLAYED'		=> 'ئەم خەندانەی خوارەوە لە پەڕەی ناردن نیشان نەدراون.',
	'SMILIES_ORDER'				=> 'داوای خەندە',
	'SMILIES_URL'				=> 'پەڕگەی وێنەی خەندە',
	'SMILIES_WIDTH'				=> 'پانی خەندە',
	'TOO_MANY_SMILIES'			=> 'سنووری خەندەکان %d گەیشت.',

	'WRONG_PAK_TYPE'	=> 'گورزەی دیاریکراو داتای ویستراو لەخۆ ناگرێت.',
));

// Word censors
$lang = array_merge($lang, array(
	'ACP_WORDS_EXPLAIN'		=> 'لەو کۆنترۆڵ پانێڵەوە دەتوانی وشەکان زیادبکەی ،دەستکاریبکەی و بیانسڕیتەوە کە خۆکارانە سانسۆردەکرێن لە مەکۆکانت. خەڵک هێشتا ڕێگادراوە بۆ تۆماربوون لەگەڵ ناوی بەکارهێنەری ئەو وشانەی لەخۆگرتبێت. (*) داواکراوە لە خانەی وشەکە ،نموونە *test* دەگونجێ ،*test لەگەڵ testing دەگونێ ،بەم جۆرە.',
	'ADD_WORD'				=> 'وشەی نوێ زیادبکە',

	'EDIT_WORD'		=> 'دەستکاری سانسۆری وشە بکە',
	'ENTER_WORD'	=> 'دەبێت وشەیەک و جێگرەوەی بنووسیت.',
 
	'NO_WORD'	=> 'هیچ وشەیەک هەڵنەبژێردراوە بۆ دەستکاری.',

	'REPLACEMENT'	=> 'جێگرەوە',

	'UPDATE_WORD'	=> 'سانسۆری وشە نوێبکەوە',

	'WORD'				=> 'وشە',
	'WORD_ADDED'		=> 'سانسۆری وشەکە بەسەرکەوتوویی زیادکرا.',
	'WORD_REMOVED'		=> 'سانسۆری وشە هەڵبژێردراوەکان بەسەرکەوتوویی سڕانەوە.',
	'WORD_UPDATED'		=> 'سانسۆری وشە هەڵبژێردراوەکان بەسەرکەوتوویی نوێکرانەوە.',
));

// Ranks
$lang = array_merge($lang, array(
	'ACP_RANKS_EXPLAIN'		=> 'بەکارهێنانی ئەم فۆرمە دەتوانی پلەکان زیادبکەی ،دەستکاریان بکەی و بیانسڕیتەوە. دەشتوانی پلە تایبەتەکان دروستبکەی کە دەتوانێ بسەپێنڕی بۆ بەکارهێنەرێک لەڕێگای نەخشەی بەڕێوەبردنی بەکارهێنەر.',
	'ADD_RANK'				=> 'پلەی نوێ زیادبکە',

	'MUST_SELECT_RANK'		=> 'پێویستە پلەیەک هەڵبژێری',

	'NO_ASSIGNED_RANK'		=> 'هیچ پلەیەکی تایبەت پێکنەهێنراوە.',
	'NO_RANK_TITLE'			=> 'ناونیشانێکت دیاری نەکردووە بۆ پلەکە',
	'NO_UPDATE_RANKS'		=> 'پلەکە بەسەرکەوتوویی سڕایەوە. هەرچۆنێکە ئەو هەژماری بەکارهێنەرانەی کە ئەم پلەیە بەکاردەهێنن کە نوێنەکراوەتەوە. پێویستە تۆ پلەکە دابنێیەوە بۆ ئەو هەژمارانە. ',

	'RANK_ADDED'			=> 'پلەکە بەسەرکەوتوویی زیادکرا.',
	'RANK_IMAGE'			=> 'وێنەی پلە',
	'RANK_IMAGE_EXPLAIN'	=> 'ئەمە بەکارببە بۆ پێناسەکردنی وێنەیەکی بچووک لەگەڵ پلەکەدا بێتەوە. ڕێچکەکە پەیوەندیدارە بۆ پێڕستی سەرەتای phpBB.',
	'RANK_IMAGE_IN_USE'		=> '(لە کاردایە)',
	'RANK_MINIMUM'			=> 'کەمترین پەیامەکان',
	'RANK_REMOVED'			=> 'پلەکە بەسەرکەوتوویی سڕایەوە.',
	'RANK_SPECIAL'			=> 'پلەیەکی تایبەت دابنێ',
	'RANK_TITLE'			=> 'ناونیشانی پلە',
	'RANK_UPDATED'			=> 'پلەکە بەسەرکەوتوویی نوێکرایەوە.',
));

// Disallow Usernames
$lang = array_merge($lang, array(
	'ACP_DISALLOW_EXPLAIN'	=> 'لێرە دەتوانی ناوی بەکارهێنەران کۆنترۆڵ بکەی کە ڕێگانەدراون بۆ بەکاربردن. ناوە بەکارهێنەرە ناچالاککراوەکان ڕێگادراون بۆ لەخۆگرتنی تیپی *.',
	'ADD_DISALLOW_EXPLAIN'	=> 'دەتوانی ناوێکی بەکارهێەر ناچالاکبکەی بە بەکاربردنی تیپی * بۆ گونجاندنی هەر تیپێک.',
	'ADD_DISALLOW_TITLE'	=> 'ناوی بەکارهێنەرێکی ناچالاک زیادبکە',

	'DELETE_DISALLOW_EXPLAIN'	=> 'دەتوانی ناوێکی بەکارهێنەر ناچالاکبکەی بە هەڵبژاردنی لە لیستەکە و کرتەکردنی ناردن.',
	'DELETE_DISALLOW_TITLE'		=> 'ناوی بەکارهێنەری ناچالاک بسڕەوە',
	'DISALLOWED_ALREADY'		=> 'ئەو ناوەی نووسیووتە پێشووتر ناچالاکە.',
	'DISALLOWED_DELETED'		=> 'ناوە بەکارهێنەرە ناچالاک کراوەکان بەسەرکەوتوویی سڕانەوە.',
	'DISALLOW_SUCCESSFUL'		=> 'ناوە بەکارهێنەرە ناچالاک کراوەکان بەسەرکەوتوویی زیادکران.',

	'NO_DISALLOWED'				=> 'هیچ ناوی بەکارهێنەری ناچالاک نییە.',
	'NO_USERNAME_SPECIFIED'		=> 'تۆ هیچ ناوی بەکارهێنەرێکت نەنوسیووە یان هەڵنەبژاردووە بۆ کردارکردن لەگەڵی.',
));

// Reasons
$lang = array_merge($lang, array(
	'ACP_REASONS_EXPLAIN'	=> 'لێرە دەتوانی هۆکارەکان بەڕێوەببەی کە بەکاردەبرێن لە ڕاپۆرتەکان و پەیامەکانی ڕەتکردنەوە کە پەیامێک پەسەندناکرێت. یەک هۆکاری بنەڕەت هەیە (نیشانکراوە لەگەڵ *) کە ناتوانیت بیسڕیتەوە ،ئەو هۆکارە بەکارهێنراوە بۆ پەیامە ئارەزوومەندەکان ئەگەر هیچ هۆکارێک نەگونجا لەگەڵی.',
	'ADD_NEW_REASON'		=> 'هۆکاری نوێ زیادبکە',
	'AVAILABLE_TITLES'		=> 'ناونیشانی هۆکاری زمانکراوە بەردەستەکان',

	'IS_NOT_TRANSLATED'			=> 'هۆکار زمانکاری <strong>نەکرا</strong>.',
	'IS_NOT_TRANSLATED_EXPLAIN'	=> 'هۆکار زمانکاری <strong>نەکرا</strong>. ئەگەر دەتەوێ بیدەتێ بۆ فۆرمی زمانکردنەکە ،کلیلی ڕاست دیاریبکە لە پەڕگەی زمانەکان بەسی هۆکارەکانی ڕاپۆرت.',
	'IS_TRANSLATED'				=> 'هۆکار زمانکاری کرا.',
	'IS_TRANSLATED_EXPLAIN'		=> 'هۆکار زمانکاری کرا. ئەگەر ئەو ناونیشانەی نووسیوتە دیاریکراوە لەگەڵ پەڕگەی زمانەکان بەشی هۆکارەکانی ڕاپۆرت ،زمانکراوەکە لەو ناونیشانە و باسکردنە بەکاردەبرێت.',

	'NO_REASON'					=> 'هۆکار نەتوانرا بدۆزرێتەوە.',
	'NO_REASON_INFO'			=> 'پێویستە ناونیشانێک و باسکردنێک دیاریبکەی بۆ ئەو هۆکارە.',
	'NO_REMOVE_DEFAULT_REASON'	=> 'تۆ ناتوانیت هۆکاری بنەڕەت بسڕیتەوە "هیتر".',

	'REASON_ADD'				=> 'هۆکاری ڕاپۆرت/ڕەتکردن زیادبکە',
	'REASON_ADDED'				=> 'هۆکاری ڕاپۆرت/ڕەتکردن بەسەرکەوتوویی زیادکرا.',
	'REASON_ALREADY_EXIST'		=> 'هۆکارێک لەگەڵ ئەو ناونیشانە پێشتر هەیە ،تکایە  ناونیشانێکی تر بنووسە بۆ ئەم هۆکارە.',
	'REASON_DESCRIPTION'		=> 'باسکردنی هۆکار',
	'REASON_DESC_TRANSLATED'	=> 'باسکردنی هۆکار نیشانبدە',
	'REASON_EDIT'				=> 'دەستکاری هۆکاری ڕاپۆرت/ڕەتکردن بکە',
	'REASON_EDIT_EXPLAIN'		=> 'لێرە دەتوانی هۆکارێک زیادبکەی یان دەستکاری بکەی. ئەگەر هۆکارەکە وەشانی زمانە وەرگێڕاوەکەیە بەکارهاتووە لەباتی باسکردنی لێرە نووسراو.',
	'REASON_REMOVED'			=> 'هۆکاری ڕاپۆرت/ڕەتکردن بەسەرکەوتوویی سڕایەوە.',
	'REASON_TITLE'				=> 'ناونیشانی هۆکار',
	'REASON_TITLE_TRANSLATED'	=> 'ناونیشانی هۆکار نیشانبدە',
	'REASON_UPDATED'			=> 'هۆکاری ڕاپۆرت/ڕەتکردن بەسەرکەوتوویی نوێکرایەوە.',

	'USED_IN_REPORTS'		=> 'لە ڕاپۆرتەکان بەکارهاتووە',
));

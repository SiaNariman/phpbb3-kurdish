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

// Custom profile fields
$lang = array_merge($lang, array(
	'ADDED_PROFILE_FIELD'	=> 'بەسەرکەوتووی خانەی ئارەزوومەندانەی پرۆفایل زیادکرا',
	'ALPHA_DOTS'			=> 'Alphanumeric and dots (periods)',
	'ALPHA_ONLY'	=> 'تەنها پیت و ژمارە',
	'ALPHA_SPACERS'	=> 'پیت، ژمارە و بۆشایی',
	'ALPHA_UNDERSCORE'		=> 'Alphanumeric and underscores',
	'ALPHA_PUNCTUATION'		=> 'Alphanumeric with comma, dots, underscore and dashes beginning with a letter',
	'ALWAYS_TODAY'	=> 'هەمیشە ڕێکەوتی هەنووکەیی',

	'BOOL_ENTRIES_EXPLAIN'	=> 'ئێستا هەڵبژاردنەکانت لێ بدە',
	'BOOL_TYPE_EXPLAIN'	=> 'جۆرەکە پێناسەبکە ،وەکو خشتەنیشانە ،دوگمەکانی ڕادیۆ. خشتەنیشانەیەک تەنها نیشاندەدرێ ئەگەر نیشانکرا بۆ بەکارهێنەری دراو. لەو بارەدا هەڵبژاردنی زمانی <strong>دووەم</strong> بەکاردەبرێت. دوگمەکانی ڕادیۆ ڕێزی نرخەکان نیشاندەدەن.',

	'CHANGED_PROFILE_FIELD'	=> 'بەسەرکەوتوویی خانەی پرۆفایل گۆڕدرا.',
	'CHARS_ANY'	=> 'هەر نووسەیەک',
	'CHECKBOX'	=> 'خشتەنیشانە',
	'COLUMNS'	=> 'ستوونەکان',
	'CP_LANG_DEFAULT_VALUE'	=> 'نرخی بنەڕەتی',
	'CP_LANG_EXPLAIN'	=> 'پەسنی خانە',
	'CP_LANG_EXPLAIN_EXPLAIN'	=> 'ڕوونکردنەوەکە بۆ ئەو خانەیە پێشکەشکرا بۆ بەکارهێنەرەکە.',
	'CP_LANG_NAME'	=> 'ناو/ناونیشانی خانە پێشکەشکرا بۆ بەکارهێنەرەکە.',
	'CP_LANG_OPTIONS'	=> 'هەڵبژاردنەکان',
	'CREATE_NEW_FIELD'	=> 'خانەیەکی نوێ دروست بکە',
	'CUSTOM_FIELDS_NOT_TRANSLATED'	=> 'بەلایەنی کەم یەک خانەی ئارەزوومەندانەی پرۆفایل وەرنەگێڕدراوە. تکایە زانیاری داواکراو بنووسە بە کرتەکردنی بەستەری "وەرگێڕان".',

	'DEFAULT_ISO_LANGUAGE'	=> 'زمانی بنەڕەت [%s]',
	'DEFAULT_LANGUAGE_NOT_FILLED'	=> 'دەروازەکانی زمان بۆ زمانە بنەڕەتەکە خانەنەکراوە بۆ ئەو خانەیەی پرۆفایل.',
	'DEFAULT_VALUE'	=> 'نرخی بنەڕەتی',
	'DELETE_PROFILE_FIELD'	=> 'خانەی پرۆفایل بسڕەوە',
	'DELETE_PROFILE_FIELD_CONFIRM'	=> 'دڵنیایت لە سڕینەوەی خانەی پرۆفایل؟',
	'DISPLAY_AT_PROFILE'	=> 'لە کۆنترۆڵ پانێڵی بەکارهێنەر نیشانبدە',
	'DISPLAY_AT_PROFILE_EXPLAIN'	=> 'بەکارهێنەرەکە دەتوانێ ئەو خانەی پرۆفایلە بگۆڕێت لەناو کۆنترۆڵ پانێڵی بەکار‌هێنەر.',
	'DISPLAY_AT_REGISTER'	=> 'لە پەردەی تۆماربوون نیشانبدە',
	'DISPLAY_AT_REGISTER_EXPLAIN'	=> 'ئەگەر ئەو هەڵبژاردنە چالاککراوە ،خانەکە نیشاندەدرێت لەسەر تۆماربوون.',
	'DISPLAY_ON_MEMBERLIST'			=> 'Display on memberlist screen',
	'DISPLAY_ON_MEMBERLIST_EXPLAIN'	=> 'If this option is enabled, the field will be displayed in the user rows on the memberlist screen.',
	'DISPLAY_ON_PM'					=> 'Display on view private message screen',
	'DISPLAY_ON_PM_EXPLAIN'			=> 'If this option is enabled, the field will be displayed in the mini-profile on the private message screen.',
	'DISPLAY_ON_VT'					=> 'Display on viewtopic screen',
	'DISPLAY_ON_VT_EXPLAIN'			=> 'ئەگەر ئەو هەڵبژاردنە چالاککرا ،خانەکە نیشاندەدرێ لە بچووکە-پرۆفایل لە پەردەی بابەت.',
	'DISPLAY_PROFILE_FIELD'	=> 'بەگشتی خانەی پرۆفایل نیشانبدە',
	'DISPLAY_PROFILE_FIELD_EXPLAIN'	=> 'خانەی پرۆفایلەکە لە هەموو جێگا ڕێگادراوەکان نیشاندەدرێت لەناو ڕێکخستنی بارکردن. دانانی ئەمە بۆ "نەخێر" خانەکە دەشارێتەوە لە پەڕەکانی بابەت ،پرۆفایلەکان و لیستی ئەندامان.',
	'DROPDOWN_ENTRIES_EXPLAIN'	=> 'هەڵبژاردنەکەت بنووسە ئێستا ،هەر هەڵبژاردنێک لە یەک دێڕ.',

	'EDIT_DROPDOWN_LANG_EXPLAIN'	=> 'تکایە سەرنجی ئەوە بدە کە تۆ دەتوانی دەقی هەڵبژاردنەکان بگۆڕیت و دەشتوانی هەڵبژاردنی نوێ بۆ کاتییەکە زیادبکەی. ئامۆژگاری نەکراوە بۆ زیادکردنی هەڵبژاردنی نوێ لەنێوان هەڵبژاردنە چالاکەکان - ئەمە لەوانەیە ئەنجامەکەی پێکهێنانی هەڵبژاردنێکی هەڵەدا ببینرێتەوە بۆ بەکارهێنەرانت. ئەمە دەشتوانی ڕووبدا ئەگەر هەڵبژاردنەکان بسڕیەوە لە نێوان. سڕینەوەی هەڵبژاردنەکان لە کۆتایی ئەنجامی دەبێت لە بوونی پێکهێنراوی بەکارهێنەران ،ئەم شتە دەگۆڕێتەوە دواوە بۆ بنەڕەتەکە.',
	'EMPTY_FIELD_IDENT'	=> 'ناسینەوەی خانە بەتاڵبکە',
	'EMPTY_USER_FIELD_NAME'	=> 'تکایە ناوێ/ناونیشانێکی خانە بنووسە.',
	'ENTRIES'	=> 'دەروازەکان',
	'EVERYTHING_OK'	=> 'هەموو شتێک باشە',

	'FIELD_BOOL'	=> 'بولیان (بەڵێ/نەخێر)',
	'FIELD_CONTACT_DESC'		=> 'Contact description',
	'FIELD_CONTACT_URL'			=> 'Contact link',
	'FIELD_DATE'	=> 'ڕێکەوت',
	'FIELD_DESCRIPTION'	=> 'پەسنی خانە',
	'FIELD_DESCRIPTION_EXPLAIN'	=> 'ڕوونکردنەوەکە بۆ ئەو خانەیە پێشکەشکرا بۆ بەکارهێنەرەکە.',
	'FIELD_DROPDOWN'	=> 'خشتەی خستنەخوار',
	'FIELD_GOOGLEPLUS'			=> 'Google+',
	'FIELD_IDENT'	=> 'ناسنامەی خانە',
	'FIELD_IDENT_ALREADY_EXIST'	=> 'ناسنامەی هەڵبژێردراوی خانە پێشتر هەیە. تکایە ناوێکی تر هەڵبژێرە.',
	'FIELD_IDENT_EXPLAIN'	=> 'ناسنامەی خانەکە ناوێکە بۆ ناسینەوەی خانەی پرۆفایلەکە لەناو بنکەدراوەکە و داڕێژەکان.',
	'FIELD_INT'	=> 'ژمارەکان',
	'FIELD_IS_CONTACT'			=> 'Display field as a contact field',
	'FIELD_IS_CONTACT_EXPLAIN'	=> 'Contact fields are displayed within the contact section of the user profile and are displayed differently in the mini profile next to posts and private messages. You can use <samp>%s</samp> as a placeholder variable which will be replaced by a value provided by the user.',
	'FIELD_LENGTH'	=> 'درێژی خشتەی دراو',
	'FIELD_NOT_FOUND'	=> 'خانەی پرۆفایل نەدۆزرایەوە.',
	'FIELD_STRING'	=> 'تاکە دەقی خانە',
	'FIELD_TEXT'	=> 'دەقەناوچە',
	'FIELD_TYPE'	=> 'جۆری خانە',
	'FIELD_TYPE_EXPLAIN'	=> 'دواتر ناتوانیت جۆری خانەکە بگۆڕیت',
	'FIELD_URL'					=> 'URL (Link)',
	'FIELD_VALIDATION'	=> 'بەردەستبوونی خانە',
	'FIRST_OPTION'	=> 'یەکەم هەڵبژاردن',

	'HIDE_PROFILE_FIELD'	=> 'خانەی پرۆفایل بشارەوە ',
	'HIDE_PROFILE_FIELD_EXPLAIN'	=> 'تەنها بەڕێوەبەران و چاودێران دەتوانن خانەی پرۆفایل ببینن/پڕبکەنەوە. ئەگەر ئەو هەڵبژاردنە چالاککرابێت ،خانەی پرۆفایلەکە تەنها لە پرۆفایلی بەکارهێنەران نیشاندەدرێت.',

	'INVALID_CHARS_FIELD_IDENT'	=> 'ناسنامەی خانە دەتوانرێ یەنها تیپە نزمبارەکان لەخۆبگرێت a-z لەگەڵ _',
	'INVALID_FIELD_IDENT_LEN'	=> 'درێژی ناسنامەی خانە دەتوانرێ تەنها 17 تیپ بێت.',
	'ISO_LANGUAGE'	=> 'زمان [%s]',

	'LANG_SPECIFIC_OPTIONS'	=> 'هەڵبژاردنە دیاریکراوەکانی زمان [<strong>%s</strong>]',
	'LETTER_NUM_DOTS'			=> 'Any letters, numbers and dots (periods)',
	'LETTER_NUM_ONLY'			=> 'Any letters and numbers',
	'LETTER_NUM_PUNCTUATION'	=> 'Any letters, numbers, comma, dots, underscores and dashes beginning with any letter',
	'LETTER_NUM_SPACERS'		=> 'Any letters, numbers and spacers',
	'LETTER_NUM_UNDERSCORE'		=> 'Any letters, numbers and underscores',

	'MAX_FIELD_CHARS'	=> 'زۆرترین ژمارەت نووسە',
	'MAX_FIELD_NUMBER'	=> 'بەرزترین ژمارەی ڕێ پێدراو',
	'MIN_FIELD_CHARS'	=> 'کەمترین ژمارەی نووسە',
	'MIN_FIELD_NUMBER'	=> 'نزمترین ژمارەی ڕێ پێدراو',

	'NO_FIELD_ENTRIES'	=> 'هیچ دەروازەیەک پێناسەنەکراوە.',
	'NO_FIELD_ID'	=> 'هیچ ناونیشانێکی خانە نەنووسراوە.',
	'NO_FIELD_TYPE'	=> 'هیچ جۆری خانە دیارینەکراوە.',
	'NO_VALUE_OPTION'	=> 'هەڵبژاردن یەکسانە بە نرخی نەنووسراو',
	'NO_VALUE_OPTION_EXPLAIN'	=> 'نرخ بۆ بێ-دەروازە. ئەگەر خانەکە داواکراوە ،بەکارهێنەرەکە هەڵەیەکی بۆ دێت ئەگەر ئەو هەڵبژاردنە هەڵبژێرێ کە لێرە دیاریکراوە.',
	'NUMBERS_ONLY'	=> 'تەنها ژمارە (١-٩)',

	'PROFILE_BASIC_OPTIONS'	=> 'هەڵبژاردنە سەرەتاییەکان',
	'PROFILE_FIELD_ACTIVATED'	=> 'خانەی پرۆفایل بەسەرکەوتوویی چالاککرا.',
	'PROFILE_FIELD_DEACTIVATED'	=> 'خانەی پرۆفایل بەسەرکەوتوویی ناچالاککرا.',
	'PROFILE_LANG_OPTIONS'	=> 'هەڵبژاردنەکانی دیاریکردنی زمان',
	'PROFILE_TYPE_OPTIONS'	=> 'هەڵبژاردنەکانی دیاریکردنی جۆری پرۆفایل',

	'RADIO_BUTTONS'	=> 'دوگمەکانی ڕادیۆ',
	'REMOVED_PROFILE_FIELD'	=> 'بەسەرکەوتوویی خانەی پرۆفایل سڕایەوە.',
	'REQUIRED_FIELD'	=> 'خانەۆ پێویست',
	'REQUIRED_FIELD_EXPLAIN'	=> 'خانەی پرۆفایل ناچاربکە بۆ ئەوەی دەبێ پڕبکرێتەوە یان دیاریبکرێ لەلایەن بەکارهێنەر. ئەمە خانەی پرۆفایلەکە نیشاندەدات لە تۆماربوون لەناو کۆنترۆڵ پانێڵی بەکارهێنەر.',	
	'ROWS'	=> 'ئاسۆکان',

	'SAVE'	=> 'پاشەکەوتکردن',
	'SECOND_OPTION'	=> 'دووەم هەڵبژاردن',
	'SHOW_NOVALUE_FIELD'			=> 'Show field if no value was selected',
	'SHOW_NOVALUE_FIELD_EXPLAIN'	=> 'Determines if the profile field should be displayed if no value was selected for optional fields or if no value has been selected yet for required fields.',
	'STEP_1_EXPLAIN_CREATE'	=> 'لێرە دەتوانی یەکەم پارمێترەکانی بنچینە بنووسی بۆ خانە نوێیەکەی پرۆفایل. ئەو زانیارییە هەنگاوی دواتری دەوێت کە دەتوانی هەڵبژاردنە ماوەکان دابنێی و خانەی پرۆفایلەکەت بخەمڵێنی.',
	'STEP_1_EXPLAIN_EDIT'	=> 'لێرە دەتوانی بنچینەی پارمێتری خانەی پرۆفایلەکەت بگۆڕی. هەڵبژاردنەکانی تر دووبارە-ژمێرراون لەناو هەنگاوی دواتر.',
	'STEP_1_TITLE_CREATE'	=> 'خانەی پرۆفایل زیادبکە',
	'STEP_1_TITLE_EDIT'	=> 'خانەی پرۆفایل دەستکاریبکە',
	'STEP_2_EXPLAIN_CREATE'	=> 'لێرە دەتوانی هەندێ فەرمانی هەڵبژاردنەکان پێناسەبکەی کە لەوانەیە بتەوێ بخەمڵێنی.',
	'STEP_2_EXPLAIN_EDIT'	=> 'لێرە دەتوانی هەندێ فەرمانی هەڵبژاردنەکان بگۆڕی.<br /><strong>تکایە سەرنجی ئەوە بدە کە گۆڕینی بۆ خانەکانی پرۆفایل کاریگەری نابێت لەسەر خانە چالاکەکانی پرۆفایل لەلایەن بەکارهێنەرانی تۆ.</strong>',
	'STEP_2_TITLE_CREATE'	=> 'هەڵبژاردنەکانی دیاریکردنی جۆری پرۆفایل',
	'STEP_2_TITLE_EDIT'	=> 'هەڵبژاردنەکانی دیاریکردنی جۆری پرۆفایل',
	'STEP_3_EXPLAIN_CREATE'	=> 'لەوکاتەی لە زمانێک زیاتر دامەزراندووە لەسەر مەمۆکەت ،دەبێ شتە ماوەکانی زمانەکە پڕبکەیتەوە. خانەی پرۆفایلەکە کاردەکات لەگەڵ زمانی چالاککراوی بنەڕەت ،تۆ دەتوانی شتە ماوەکانی زمانەکە دواتر پڕبکەیتەوە.',
	'STEP_3_EXPLAIN_EDIT'	=> 'لەوکاتەی لە زمانێک زیاترت دامەزراندووە لەسەر مەکۆکەت، دەتوانی شتە ماوەکانی زمانەکە بگۆڕی یان زیادیان بکەی. خانەی پرۆفایلەکە کاردەکات لەگەڵ زمانی چالاککراوی بنەڕەت',
	'STEP_3_TITLE_CREATE'	=> 'پێناسەکردنە ماوەکانی زمان',
	'STEP_3_TITLE_EDIT'				=> 'Language definitions',
	'STRING_DEFAULT_VALUE_EXPLAIN'	=> 'وشەیەکی بنەڕەت بنووسە بۆ نیشاندان ،نەرخێکی بنەڕەت. بەتاڵ جێی بهێڵە ئەگەر دەتەوێ لە یەکەم جێگا بە بەتاڵی نیشانبدرێ.',
	'TEXT_DEFAULT_VALUE_EXPLAIN'	=> 'دەقێکی بنەڕەت بنووسە بۆ نیشاندان ،نرخێکی بنەڕەت. بەتاڵ جێی بهێڵە ئەگەر دەتەوێ لە یەکەم جێگا بە بەتاڵی نیشانبدرێ.',
	'TRANSLATE'	=> 'وەرگێڕان',
	'USER_FIELD_NAME'	=> 'ناو/ناونیشانی خانە پێشکەشکرا بۆ بەکارهێنەرەکە.',
	'VISIBILITY_OPTION'	=> 'هەڵبژاردنەکانی دەرکەوتن',
));

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
	'ACP_ATTACHMENT_SETTINGS_EXPLAIN'	=> 'لێرە دەتوانیت ڕێکخستنە سەرەکییەکان دیمەنبکەیت بۆ هاوپێچەکان لەگەڵ هاوپۆلە پەیوەستکراوە تایبەتەکان.',
	'ACP_EXTENSION_GROUPS_EXPLAIN'		=> 'لێرە دەتوانیت زیادبکەی، بسڕیەوە ،بگۆڕی یان ناچالاک بکەیت گرووپەکانی گەیاندن. هەڵبژاردنە دوورترەکان بەشی هاوپۆلی تایبەت لەخۆدەگرن بۆیان ،گۆڕینی بارگەی داگرتنەکە و دیاریکردنی هێمایەکی بارکردن کە نیشاندەدرێت لەپێش هاوپێچەکان کە سەر بە گرووپەکەیە.',
	'ACP_MANAGE_EXTENSIONS_EXPLAIN'		=> 'لێرە دەتوانیت گەیاندنە ڕێگاپێدراوەکان بەڕێوەببەیت ،بۆ چالاککردنی گەیاندنەکانت تکایە ئامادەبە بۆ بەڕێوەبردنی گرووپەکانی گەیاندن ،ئێمە بەتوندی ئامۆژگاری دەکەین بۆ ڕێگا نەدان بە گەیاندنە پرۆگرامۆکە کردنەکان. (وەکو <code>php</code>, <code>php3</code>, <code>php4</code>, <code>phtml</code>, <code>pl</code>, <code>cgi</code>, <code>py</code>, <code>rb</code>, <code>asp</code>, <code>aspx</code>, وە بەرەودوا).',
	'ACP_ORPHAN_ATTACHMENTS_EXPLAIN'	=> 'لێرە دەتوانیت پەڕگە هەتیوەکان ببینیت ،ئەمە ڕوودەدات زۆرجار ئەگەر بەکارهێنەر پەڕگەیەک هاوپێچ دەکات بەڵام نەک ناردنی پەیامەکە ،تۆ دەتوانی پەڕگەکان بسڕیتەوە یان هاوپێچیان بکەیت بۆ پەیامە چالاکەکان ،هاوپێچکردنیان بۆ پەیامەکان داوای ناونیشانێکی دروستی پەیامەکە دەکات ،پێویستە ئەو ناونیشانە خۆت دیاریبکەیت ،ئەمە هاوپێچە بارکراوەکان تەرخان دەکات بۆ ئەو پەیامەی دەینووسیت.',
	'ADD_EXTENSION'	=> 'درێژکراو زیاد بکە',
	'ADD_EXTENSION_GROUP'	=> 'گرووپی درێژکراو زیاد بکە',
	'ADMIN_UPLOAD_ERROR'	=> 'هەڵە ڕوویدا لەکاتی هاوپێچکردنی پەڕگەیەک: “%s”.',
	'ALLOWED_FORUMS'	=> 'مەکۆ ڕێ پێدراوەکان',
	'ALLOWED_FORUMS_EXPLAIN'	=> 'دەتوانرێ گەیاندنە تەرخانکراوەکان بنێردرێن لە مەکۆ دەستنیشان کراوەکان.',
	'ALLOWED_IN_PM_POST'	=> 'ڕێ پێدراوە',
	'ALLOW_ATTACHMENTS'	=> 'ڕێ دان بە هاوپێچ',
	'ALLOW_ALL_FORUMS'	=> 'ڕێ دان بە هەموو مەکۆکان',
	'ALLOW_IN_PM'	=> 'ڕێ پێدراوە لە پەیامی تایبەت',
	'ALLOW_PM_ATTACHMENTS'	=> 'ڕێ دان بە هاوپێچ لە پەیامی تایبەت',
	'ALLOW_SELECTED_FORUMS'	=> 'تەنها ئەو مەکۆیانەی لە خوارەوە دیاری کراون',
	'ASSIGNED_EXTENSIONS'	=> 'درێژکراوە تۆمارکراوەکان',
	'ASSIGNED_GROUP'	=> 'گرووپی درێژکراوە تۆمارکراوەکان',
	'ATTACH_EXTENSIONS_URL'	=> 'درێژکراوەکان',
	'ATTACH_EXT_GROUPS_URL'	=> 'گرووپەکانی درێژکراوەکان',
	'ATTACH_ID'	=> 'ID',
	'ATTACH_MAX_FILESIZE'	=> 'زۆرترین قەبارەی پەڕگە',
	'ATTACH_MAX_FILESIZE_EXPLAIN'	=> 'زۆرترین قەبارەی هەر پەڕگەیەک، 0 واتە بێ سنوور.',
	'ATTACH_MAX_PM_FILESIZE'	=> 'زۆرترین قەبارەی پەڕگەی پەیامکردن',
	'ATTACH_MAX_PM_FILESIZE_EXPLAIN'	=> 'زۆرترین قەبارە بۆ هەر پەڕگەیەک، لەگەڵ 0 بێسنوور کراوە، بۆ پەیامێکی تایبەت هاوپێچکراوە.',
	'ATTACH_ORPHAN_URL'	=> 'هاوپێچە هەتیوەکان',
	'ATTACH_POST_ID'	=> 'ID پەیام',
	'ATTACH_QUOTA'	=> 'کۆی کواتا هاوپێچەکان',
	'ATTACH_QUOTA_EXPLAIN'	=> 'زۆرترین بۆشایی وەگەڕخەر بەردەستە بۆ هاوپێچەکان بۆ هەرهەموو مەکۆکە، لەگەڵ 0 بێسنوورکراوە.',
	'ATTACH_TO_POST'	=> 'پەڕگە هاوپێچ بکە بۆ پەیام',
	'CAT_FLASH_FILES'	=> 'پەڕگە فلاشییەکان',
	'CAT_IMAGES'	=> 'وێنەکان',
	'CAT_QUICKTIME_FILES'	=> 'پەڕگە ڕەنگاڵەییەکانی Quicktime',
	'CAT_RM_FILES'	=> 'پەڕگە ڕەنگاڵەییەکانی RealMedia',
	'CAT_WM_FILES'	=> 'پەڕگە ڕەنگاڵەییەکانی Windows Media',
	'CHECK_CONTENT'	=> 'پشکنینی پەڕگە هاوپێچکراوەکان',
	'CHECK_CONTENT_EXPLAIN'	=> 'هەندێ وێبگەڕەکان دەتوانن بخەڵەتێنرین بۆ وادانانی جۆرمایمیکی نادروست بۆ پەڕگە بارکراوەکان. ئەو هەڵبژاردنە دڵنیادەبێتەوە کە پەڕگەکانی وەکو ئەمە نەبێتە هۆی ڕەتبوونەوە.',
	'CREATE_GROUP'	=> 'گرووپێکی نوێ دروست بکە',
	'CREATE_THUMBNAIL'	=> 'نینۆچکە دروستبکە',
	'CREATE_THUMBNAIL_EXPLAIN'	=> 'نینۆچکە لە هەموو بارە هەموارەکان دروستبکە',
	'DEFINE_ALLOWED_IPS'	=> 'IPs/hostnames ڕێپێدراوەکان دیاریبکە',
	'DEFINE_DISALLOWED_IPS'	=> 'IPs/hostnames ڕێپێنەدراوەکان دیاریبکە',
	'DOWNLOAD_ADD_IPS_EXPLAIN'	=> 'بۆ دیاریکردنی فرەجۆری IP ــەکان یان hostnames ،هەر دانەیەکیان لە هێڵێکی نوێ بنووسە. بۆ دیاریکردنی کۆمەڵێک لە ناونیشانی IP ،جیاکردنەوەیان دەستپێک و کۆتایی لەگەڵ (-) بەکارببە ،بۆ دیاریکردنی هیتر “*”.بەکارببە',
	'DOWNLOAD_REMOVE_IPS_EXPLAIN'	=> 'دەتوانی فرە ناونیشانیی IP بسڕیتەوە (یان جێبەجێ-نەکردن) لە یەک ڕۆیشتن بە بەکاربردنی کۆمەڵەیەکی گونجاو لە مشک و تەختەکلیل بۆ کۆمپیوتەر و وێبگەڕەکەت.',
	'DISPLAY_INLINED'	=> 'دانانی وێنەکان لەناو هێڵ',
	'DISPLAY_INLINED_EXPLAIN'	=> 'ئەگەر نەخێر بۆ هاوپێچەکانی وێنە دانرا ،وەکو بەستەر نیشانیان دەدات.',
	'DISPLAY_ORDER'	=> 'ڕیزبوونی پیشاندانی هاوپێچەکان',
	'DISPLAY_ORDER_EXPLAIN'	=> 'هاوپێچەکان نیشانبدە ڕێزکراو بەهۆی کات.',
	'EDIT_EXTENSION_GROUP'	=> 'گرووپی زیادە دەستکاری بکە',
	'EXCLUDE_ENTERED_IP'	=> 'ئەوە چالاکبکە بۆ بێبەشکردنی IP/hostname ــی نووسراو.',
	'EXCLUDE_FROM_ALLOWED_IP'	=> 'IP بێبەشبکە لە IPs/hostnames ڕێگادراوەکان',
	'EXCLUDE_FROM_DISALLOWED_IP'	=> 'IP بێبەشبکە لە IPs/hostnames ڕێگانەدراوەکان',
	'EXTENSIONS_UPDATED'			=> 'زیادەکان سەرکەوتووانە نوێکرانەوە.',
	'EXTENSION_EXIST'				=> 'زیادەی %s پێشتر هەیە.',
	'EXTENSION_GROUP'				=> 'گرووپی زیادە',
	'EXTENSION_GROUPS'				=> 'گرووپە زیادەکان',
	'EXTENSION_GROUP_DELETED'		=> 'گرووپی زیادە سەرکەوتووانە سڕایەوە',
	'EXTENSION_GROUP_EXIST'			=> 'گرووپی زیادەی %s پێشتر هەیە.',
	'EXT_GROUP_ARCHIVES'			=> 'ئەرشیفەکان',
	'EXT_GROUP_DOCUMENTS'			=> 'بەڵگەنامەکان',
	'EXT_GROUP_DOWNLOADABLE_FILES'	=> 'پەڕگە بۆداگرتنەکان',
	'EXT_GROUP_FLASH_FILES'			=> 'پەڕگەکانی فلاش',
	'EXT_GROUP_IMAGES'				=> 'وێنەکان',
	'EXT_GROUP_PLAIN_TEXT'			=> 'نەخشەی دەق',
	'EXT_GROUP_QUICKTIME_MEDIA'		=> 'Quicktime Media',
	'EXT_GROUP_REAL_MEDIA'			=> 'Real Media',
	'EXT_GROUP_WINDOWS_MEDIA'		=> 'Windows Media',

	'GO_TO_EXTENSIONS'		=> 'برۆ بۆ پەردەی بەڕێوەبردنی زیادە',
	'GROUP_NAME'			=> 'ناوی گرووپ',

	'IMAGE_LINK_SIZE'			=> 'دووری بەستەری وێنەکان',
	'IMAGE_LINK_SIZE_EXPLAIN'	=> 'هاوپێچی وێنە نیشانبدە وەکو بەستەری دەقی ناوهێڵێک ئەگەر وێنەکە لەوە گەورەتر بوو. بۆ ناچالاککردنی ئەو ڕەوشتە. نرخەکان بۆ 0px لەلایەن 0px دابنێ.',
	'IMAGICK_PATH'	=> 'ڕێچکەی Imagemagick',
	'IMAGICK_PATH_EXPLAIN'	=> 'ڕێچکەی تەواو بۆ نەرمەواڵەی گۆڕینی imagemagick, نموونە. <samp>/usr/bin/</samp>.',
	'MAX_ATTACHMENTS'	=> 'زۆرترین ژمارەی هاوپێچەکان لە پەیامێکدا.',
	'MAX_ATTACHMENTS_PM'	=> 'زۆرترین ژمارەی هاوپێچەکان لە پەیامێکی تایبەت.',
	'MAX_EXTGROUP_FILESIZE'	=> 'زۆرترین قەبارەی پەڕگە',
	'MAX_IMAGE_SIZE'	=> 'زۆرترین دوورییەکانی وێنە',
	'MAX_IMAGE_SIZE_EXPLAIN'	=> 'زۆرترینی قەبارەی هاوپێچەکانی وێنە. هەردوو نرخەکان دانراون بۆ 0px لەلایەن 0px بۆ ناچالاککردنی دوایی پشکنین.',
	'MAX_THUMB_WIDTH'	=> 'زۆرترین فراوانی نینۆچکە لە پیکسل',
	'MAX_THUMB_WIDTH_EXPLAIN'	=> 'نینۆچکەیەکی بەرهەمهاتوو لێرەدا فراوانت دانانرێت.',
	'MIN_THUMB_FILESIZE'	=> 'کەمترین قەبارەی پەڕگەی نینۆچکە',
	'MIN_THUMB_FILESIZE_EXPLAIN'	=> 'نینۆچکەیەک دروست مەکە بۆ وێنەی بچووکتر لەمە.',
	'MODE_INLINE'	=> 'ناو هێڵ',
	'MODE_PHYSICAL'	=> 'فیزیکی',
	'NOT_ALLOWED_IN_PM'	=> 'تەنها لە پەیامەکاندا ڕێ پێدراوە',
	'NOT_ALLOWED_IN_PM_POST'	=> 'ڕێ پێ نەدراوە',
	'NOT_ASSIGNED'	=> 'تۆمار نەکراوە',
	'NO_EXT_GROUP'	=> 'هیچ',
	'NO_EXT_GROUP_NAME'	=> 'ناوی گرووپ نەنووسراوە',
	'NO_EXT_GROUP_SPECIFIED'	=> 'گرووپی زیادە دیارینەکراوە',
	'NO_FILE_CAT'	=> 'هیچ',
	'NO_IMAGE'	=> 'وێنە نییە',
	'NO_THUMBNAIL_SUPPORT'	=> 'پاڵپشتی نینۆچکە ناچالاککراوە. بۆ هەندێ نەخشە وە زیادەی GD پێویستە بۆ بەردەستبوون یان imagemagick دامەزرابێت. هیچیان نەدۆزرانەوە.',
	'NO_UPLOAD_DIR'	=> 'ئەو شوێنی بارکردنەی دیاریتکردووە بوونی نییە.',
	'NO_WRITE_UPLOAD'	=> 'ئەو پێڕست/شوێنگەی بارکردنەی دیاریتکردووە ناتوانرێت بنووسرێ. تکایە دەسەڵاتەکان بخەمڵێنە بۆ ڕێگادانی ڕاژەکاری وب بۆ نووسینی.',
	'ONLY_ALLOWED_IN_PM'	=> 'تەنها لە پەیامی تایبەتی ڕێگاپێدراوە',
	'ORDER_ALLOW_DENY'	=> 'ڕێ دان',
	'ORDER_DENY_ALLOW'	=> 'ڕێ پێ نەدان',
	'REMOVE_ALLOWED_IPS'	=> 'بیسڕەوە یان un-exclude <em>ڕێگادراو</em> IPs/hostnames',
	'REMOVE_DISALLOWED_IPS'	=> 'بیسڕەوە یان un-exclude <em>ڕێگامەمە</em> IPs/hostnames',
	'SEARCH_IMAGICK'	=> 'بگەڕێ بۆ Imagemagick',
	'SECURE_ALLOW_DENY'	=> 'لیستی ڕێگادان/ڕەتکردن',
	'SECURE_ALLOW_DENY_EXPLAIN'	=> 'ڕەوشتی بنەڕەتی بگۆڕە کاتێک داگرتنی پارێزراو چالاککراوە لە لیستی ڕێگادان/ڕەتکردن بۆ <strong>لیستێکی سپی</strong> (ڕێگادان) یان <strong>لیستێکی ڕەش</strong> (ڕەتکردن).',

	'SECURE_DOWNLOADS'	=> 'داگرتنی پارێزراو چالاکبکە',
	'SECURE_DOWNLOADS_EXPLAIN'	=> 'لەگەڵ چالاککردنی ئەو هەڵبژاردنە. داگرتنەکان سنوردارن بۆ ئەو IP’s/hostnames ــانەی کە دیاریدەکەی.',
	'SECURE_DOWNLOAD_NOTICE'	=> 'داگرتنی پارێزراو چالاک نەکراوە. ڕێکخستنەکانی خوارەوە دەچەسپێن لەدوای چالاککردنی داگرتنە پارێزراوەکان.',
	'SECURE_DOWNLOAD_UPDATE_SUCCESS'	=> 'لیستی IP ــەکە  سەرکەوتووانە نوێکرایەوە..',
	'SECURE_EMPTY_REFERRER'	=> 'ئاماژەکاری بەتاڵ ڕێگابدە',
	'SECURE_EMPTY_REFERRER_EXPLAIN'	=> 'داگرتنە پارێزراوەکان بنچینەکراون لەسەر ئاماژەکارەکان. دەتەوێ ڕێگابدەی بۆ داگرتنی ئەو ئاماژەکرارە هاوکردەییانە؟',
	'SETTINGS_CAT_IMAGES'	=> 'ڕێکخستنەکانی هاوپۆلی وێنە',
	'SPECIAL_CATEGORY'	=> 'هاوپۆلی تایبەت',
	'SPECIAL_CATEGORY_EXPLAIN'	=> 'هاوپۆلە تایبەتەکان جیاوازن لەنێوان ئەو ڕێگایەی نیشاندراون لەناو پەیامەکان.',
	'SUCCESSFULLY_UPLOADED'	=> 'سەرکەوتووانە بارکرا',
	'SUCCESS_EXTENSION_GROUP_ADD'	=> 'گروپی زیادە سەرکەوتووانە زیادکرا.',
	'SUCCESS_EXTENSION_GROUP_EDIT'	=> 'گروپی زیادە سەرکەوتووانە نوێکرایەوە.',
	'UPLOADING_FILES'	=> 'پەڕگەکان بار دەکات',
	'UPLOADING_FILE_TO'	=> 'بارکردنی پەڕگەی “%1$s” بۆ ژمارەی ناردن %2$d…',
	'UPLOAD_DENIED_FORUM'	=> 'تۆ دەسەڵاتی ئەوەت نییە بۆ بارکردنی پەڕگە بۆ مەکۆ “%s”',
	'UPLOAD_DIR'	=> 'بوخچەی بارکردن',
	'UPLOAD_DIR_EXPLAIN'	=> 'ڕێچکەی کۆگا بۆ هاوپێچەکان. تکایە سەرنجبدە کە ئەگەر ئەو شوێنگە/پێڕست بگۆرێ لەکاتێکدا هاوپێچی باوکراوت هەیە ئەوا پێویستە بەدەستیی پەڕگەکان لەبەربگریتەوە بۆ جێگا نوێیەکەیان.',
	'UPLOAD_ICON'	=> 'ئایکۆن بار بکە',
	'UPLOAD_NOT_DIR'	=> 'ئەو شوێنی بارکردنەی دیاریتکردووە وا دەرناکەوێ کە شوێنگە/پێڕست بێت.',
));

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
	'ATTACH_POST_TYPE'					=> 'Post type',
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

	'FILES_GONE'			=> 'Some of the attachments you selected for deletion do not exist. They may have been already deleted. Attachments that did exist were deleted.',
	'FILES_STATS_WRONG'		=> 'Your file statistics are likely inaccurate and need to be resynchronised. Actual values: number of attachments = %1$d, total size of attachments = %2$s.<br />Click %3$shere%4$s to resynchronise them.',

	'GO_TO_EXTENSIONS'		=> 'Go to extension management screen',
	'GROUP_NAME'			=> 'Group name',

	'IMAGE_LINK_SIZE'			=> 'Image link dimensions',
	'IMAGE_LINK_SIZE_EXPLAIN'	=> 'Display image attachment as an inline text link if image is larger than this. To disable this behaviour, set the values to 0px by 0px.',
	'IMAGICK_PATH'				=> 'Imagemagick path',
	'IMAGICK_PATH_EXPLAIN'		=> 'Full path to the imagemagick convert application, e.g. <samp>/usr/bin/</samp>.',

	'MAX_ATTACHMENTS'				=> 'Maximum number of attachments per post',
	'MAX_ATTACHMENTS_PM'			=> 'Maximum number of attachments per private message',
	'MAX_EXTGROUP_FILESIZE'			=> 'Maximum file size',
	'MAX_IMAGE_SIZE'				=> 'Maximum image dimensions',
	'MAX_IMAGE_SIZE_EXPLAIN'		=> 'Maximum size of image attachments. Set both values to 0px by 0px to disable dimension checking.',
	'MAX_THUMB_WIDTH'				=> 'Maximum thumbnail width in pixel',
	'MAX_THUMB_WIDTH_EXPLAIN'		=> 'A generated thumbnail will not exceed the width set here.',
	'MIN_THUMB_FILESIZE'			=> 'Minimum thumbnail file size',
	'MIN_THUMB_FILESIZE_EXPLAIN'	=> 'Do not create a thumbnail for images smaller than this.',
	'MODE_INLINE'					=> 'Inline',
	'MODE_PHYSICAL'					=> 'Physical',

	'NOT_ALLOWED_IN_PM'			=> 'Only allowed in posts',
	'NOT_ALLOWED_IN_PM_POST'	=> 'Not allowed',
	'NOT_ASSIGNED'				=> 'Not assigned',
	'NO_ATTACHMENTS'			=> 'No attachments found for this period.',
	'NO_EXT_GROUP'				=> 'None',
	'NO_EXT_GROUP_NAME'			=> 'No group name entered',
	'NO_EXT_GROUP_SPECIFIED'	=> 'No extension group specified.',
	'NO_FILE_CAT'				=> 'None',
	'NO_IMAGE'					=> 'No image',
	'NO_THUMBNAIL_SUPPORT'		=> 'Thumbnail support has been disabled. For proper functionality either the GD extension need to be available or imagemagick being installed. Both were not found.',
	'NO_UPLOAD_DIR'				=> 'The upload directory you specified does not exist.',
	'NO_WRITE_UPLOAD'			=> 'The upload directory you specified cannot be written to. Please alter the permissions to allow the webserver to write to it.',

	'ONLY_ALLOWED_IN_PM'	=> 'Only allowed in private messages',
	'ORDER_ALLOW_DENY'		=> 'Allow',
	'ORDER_DENY_ALLOW'		=> 'Deny',

	'REMOVE_ALLOWED_IPS'			=> 'Remove or un-exclude <em>allowed</em> IPs/hostnames',
	'REMOVE_DISALLOWED_IPS'			=> 'Remove or un-exclude <em>disallowed</em> IPs/hostnames',
	'RESYNC_FILES_STATS_CONFIRM'	=> 'Are you sure you wish to resynchronise file statistics?',

	'SEARCH_IMAGICK'				=> 'Search for Imagemagick',
	'SECURE_ALLOW_DENY'				=> 'Allow/Deny list',
	'SECURE_ALLOW_DENY_EXPLAIN'		=> 'Change the default behaviour when secure downloads are enabled of the Allow/Deny list to that of a <strong>whitelist</strong> (Allow) or a <strong>blacklist</strong> (Deny).',
	'SECURE_DOWNLOADS'				=> 'Enable secure downloads',
	'SECURE_DOWNLOADS_EXPLAIN'		=> 'With this option enabled, downloads are limited to IP’s/hostnames you define.',
	'SECURE_DOWNLOAD_NOTICE'		=> 'Secure Downloads are not enabled. The settings below will be applied after enabling secure downloads.',
	'SECURE_DOWNLOAD_UPDATE_SUCCESS'=> 'The IP list has been updated successfully.',
	'SECURE_EMPTY_REFERRER'			=> 'Allow empty referrer',
	'SECURE_EMPTY_REFERRER_EXPLAIN'	=> 'Secure downloads are based on referrers. Do you want to allow downloads for those omitting the referrer?',
	'SETTINGS_CAT_IMAGES'			=> 'Image category settings',
	'SPECIAL_CATEGORY'				=> 'Special category',
	'SPECIAL_CATEGORY_EXPLAIN'		=> 'Special categories differ between the way presented within posts.',
	'SUCCESSFULLY_UPLOADED'			=> 'Successfully uploaded.',
	'SUCCESS_EXTENSION_GROUP_ADD'	=> 'Extension group successfully added.',
	'SUCCESS_EXTENSION_GROUP_EDIT'	=> 'Extension group successfully updated.',

	'UPLOADING_FILES'				=> 'Uploading files',
	'UPLOADING_FILE_TO'				=> 'Uploading file “%1$s” to post number %2$d…',
	'UPLOAD_DENIED_FORUM'			=> 'You do not have the permission to upload files to forum “%s”.',
	'UPLOAD_DIR'					=> 'Upload directory',
	'UPLOAD_DIR_EXPLAIN'			=> 'Storage path for attachments. Please note that if you change this directory while already having uploaded attachments you need to manually copy the files to their new location.',
	'UPLOAD_ICON'					=> 'Upload icon',
	'UPLOAD_NOT_DIR'				=> 'The upload location you specified does not appear to be a directory.',
));

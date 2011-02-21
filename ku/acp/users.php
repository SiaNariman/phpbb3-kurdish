<?php
/**
*
* acp_users.php [Sorani Kurdish]
*
* @package language
* @version $Id: $
* @copyright (c) 2009 phpBB Group
* @author 2009-06-06 - Chawg.org Group
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
	'ADMIN_SIG_PREVIEW'	=> 'Signature preview',
	'AT_LEAST_ONE_FOUNDER'	=> 'You are not able to change this founder to a normal user. There needs to be at least one founder enabled for this board. If you want to change this users founder status, promote another user to be a founder first.',
	'BAN_ALREADY_ENTERED'	=> 'The ban had been previously entered successfully. The ban list has not been updated.',
	'BAN_SUCCESSFUL'	=> 'Ban entered successfully.',
	'CANNOT_BAN_ANONYMOUS'			=> 'You are not allowed to ban the anonymous account. Permissions for anonymous users can be set under the Permissions tab.',
	'CANNOT_BAN_FOUNDER'	=> 'You are not allowed to ban founder accounts.',
	'CANNOT_BAN_YOURSELF'	=> 'You are not allowed to ban yourself.',
	'CANNOT_DEACTIVATE_BOT'	=> 'You are not allowed to deactivate bot accounts. Please deactivate the bot within the bots page instead.',
	'CANNOT_DEACTIVATE_FOUNDER'	=> 'You are not allowed to deactivate founder accounts.',
	'CANNOT_DEACTIVATE_YOURSELF'	=> 'You are not allowed to deactivate your own account.',
	'CANNOT_FORCE_REACT_BOT'	=> 'You are not allowed to force reactivation on bot accounts. Please reactivate the bot within the bots page instead.',
	'CANNOT_FORCE_REACT_FOUNDER'	=> 'You are not allowed to force reactivation on founder accounts.',
	'CANNOT_FORCE_REACT_YOURSELF'	=> 'You are not allowed to force reactivation of your own account.',
	'CANNOT_REMOVE_ANONYMOUS'	=> 'You are not able to remove the guest user account.',
	'CANNOT_REMOVE_YOURSELF'	=> 'You are not allowed to remove your own user account.',
	'CANNOT_SET_FOUNDER_IGNORED'	=> 'You are not able to promote ignored users to be founders.',
	'CANNOT_SET_FOUNDER_INACTIVE'	=> 'You need to activate users before you promote them to founders, only activated users are able to be promoted.',
	'CONFIRM_EMAIL_EXPLAIN'	=> 'You only need to specify this if you are changing the users e-mail address.',
	'DELETE_POSTS'	=> 'پەیامەکان بسڕەوە',
	'DELETE_USER'	=> 'بەکارهێنەر بسڕەوە',
	'DELETE_USER_EXPLAIN'	=> 'Please note that deleting a user is final, they cannot be recovered.',
	'FORCE_REACTIVATION_SUCCESS'	=> 'Successfully forced reactivation.',
	'FOUNDER'	=> 'Founder',
	'FOUNDER_EXPLAIN'	=> 'Founders have all administrative permissions and can never be banned, deleted or altered by non-founder members.',
	'GROUP_APPROVE'	=> 'ئەندام پەسەند بکە',
	'GROUP_DEFAULT'	=> 'Make group default for member',
	'GROUP_DELETE'	=> 'Remove member from group',
	'GROUP_DEMOTE'	=> 'Demote group leader',
	'GROUP_PROMOTE'	=> 'Promote to group leader',
	'IP_WHOIS_FOR'	=> 'IP whois for %s',
	'LAST_ACTIVE'	=> 'دوا چالاکی',
	'MOVE_POSTS_EXPLAIN'	=> 'Please select the forum to which you wish to move all the posts this user has made.',
	'NO_SPECIAL_RANK'	=> 'No special rank assigned',
	'NO_WARNINGS'			=> 'No warnings.',
	'NOT_MANAGE_FOUNDER'	=> 'You tried to manage a user with founder status. Only founders are allowed to manage other founders.',
	'QUICK_TOOLS'	=> 'ئامڕازە خێراکان',
	'REGISTERED'	=> 'تۆمارکراو',
	'REGISTERED_IP'	=> 'Registered from IP',
	'RETAIN_POSTS'	=> 'پەیامەکان بپارێزە',
	'SELECT_FORM'	=> 'فۆڕمێک دیاری بکە',
	'SELECT_USER'	=> 'بەکارهێنەرێک دیاری بکە',
	'USER_ADMIN'	=> 'بەڕێوەبەرایەتی بەکارهێنەر',
	'USER_ADMIN_ACTIVATE'	=> 'هەژمار چالاک بکە',
	'USER_ADMIN_ACTIVATED'	=> 'بەکارهێنەر بە سەرکەوتوویی چالاک کرا.',
	'USER_ADMIN_AVATAR_REMOVED'	=> 'Successfully removed avatar from user account.',
	'USER_ADMIN_BAN_EMAIL'	=> 'Ban by e-mail',
	'USER_ADMIN_BAN_EMAIL_REASON'	=> 'E-mail address banned via user management',
	'USER_ADMIN_BAN_IP'	=> 'Ban by IP',
	'USER_ADMIN_BAN_IP_REASON'	=> 'IP banned via user management',
	'USER_ADMIN_BAN_NAME_REASON'	=> 'Username banned via user management',
	'USER_ADMIN_BAN_USER'	=> 'Ban by username',
	'USER_ADMIN_DEACTIVATE'	=> 'هەژمار ناچالاک بکە',
	'USER_ADMIN_DEACTIVED'	=> 'بەکارهێنەر بە سەرکەوتوویی ناچالاک کرا.',
	'USER_ADMIN_DEL_ATTACH'	=> 'هەموو هاوپێچەکان بسڕەوە',
	'USER_ADMIN_DEL_AVATAR'	=> 'وێنۆچکە بسڕەوە',
	'USER_ADMIN_DEL_OUTBOX'	=> 'Empty PM outbox',
	'USER_ADMIN_DEL_POSTS'	=> 'هەموو پەیامەکان بسڕەوە',
	'USER_ADMIN_DEL_SIG'	=> 'واژۆ بسڕەوە',
	'USER_ADMIN_EXPLAIN'	=> 'Here you can change your users information and certain specific options.',
	'USER_ADMIN_FORCE'	=> 'Force reactivation',
	'USER_ADMIN_LEAVE_NR'			=> 'Remove from Newly Registered',
	'USER_ADMIN_MOVE_POSTS'	=> 'هەموو پەیامەکان بگوازەوە',
	'USER_ADMIN_SIG_REMOVED'	=> 'Successfully removed signature from user account.',
	'USER_ATTACHMENTS_REMOVED'	=> 'Successfully removed all attachments made by this user.',
	'USER_AVATAR_NOT_ALLOWED'		=> 'The avatar cannot be displayed because avatars have been disallowed.',
	'USER_AVATAR_UPDATED'	=> 'Successfully updated user avatars details.',
	'USER_AVATAR_TYPE_NOT_ALLOWED'	=> 'The current avatar cannot be displayed because its type has been disallowed.',
	'USER_CUSTOM_PROFILE_FIELDS'	=> 'Custom profile fields',
	'USER_DELETED'	=> 'بەکارهێنەر بە سەرکەوتوویی سڕدرایەوە.',
	'USER_GROUP_ADD'	=> 'بەکارهێنەر بۆ گرووپێک زیاد بکە',
	'USER_GROUP_NORMAL'	=> 'User defined groups user is a member of',
	'USER_GROUP_PENDING'	=> 'Groups user is in pending mode',
	'USER_GROUP_SPECIAL'	=> 'Pre-defined groups user is a member of',
	'USER_LIFTED_NR'	=> 'Successfully removed the user’s newly registered status.',
	'USER_NO_ATTACHMENTS'	=> 'هیچ پەڕگەیەک هاوپێچ نەکراوە بۆ بینین.',
	'USER_OUTBOX_EMPTIED'			=> 'Successfully emptied user’s private message outbox.',
	'USER_OUTBOX_EMPTY'				=> 'The user’s private message outbox was already empty.',
	'USER_OVERVIEW_UPDATED'	=> 'وردەکارییەکانی بەکارهێنەر نوێکرانەوە.',
	'USER_POSTS_DELETED'	=> 'هەموو پەیامەکانی ئەم بەکارهێنەرە بە سەرکەوتوویی سڕدرانەوە.',
	'USER_POSTS_MOVED'	=> 'پەیامەکانی ئەم بەکارهێنەرە بە سەرکەوتووی گوێزرانەوە بۆ مەکۆی دیاریکراو.',
	'USER_PREFS_UPDATED'	=> 'ویستراوەکانی بەکارهێنەر نوێکرانەوە.',
	'USER_PROFILE'	=> 'پڕۆفایلی بەکارهێنەر',
	'USER_PROFILE_UPDATED'	=> 'پڕۆفایلی ئەندام نوێکرایەوە.',
	'USER_RANK'	=> 'پلەی ئەندام',
	'USER_RANK_UPDATED'	=> 'پلەی ئەندام نوێکرایەوە.',
	'USER_SIG_UPDATED'	=> 'واژۆی بەکارهێنەر بە سەرکەوتوویی نوێکرایەوە.',
	'USER_WARNING_LOG_DELETED'		=> 'No information available. Possibly the log entry has been deleted.',
	'USER_TOOLS'	=> 'ئامرازە سەرەتاییەکان',
));

?>

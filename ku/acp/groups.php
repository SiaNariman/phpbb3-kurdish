<?php
/**
*
* acp_groups.php [Sorani Kurdish]
*
* @package language
* @version $Id: $
* @copyright (c) 2009 phpBB Group
* @author 2009-05-30 - Chawg.org Group
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
	'ACP_GROUPS_MANAGE_EXPLAIN'	=> 'From this panel you can administrate all your usergroups. You can delete, create and edit existing groups. Furthermore, you may choose group leaders, toggle open/hidden/closed group status and set the group name and description.',
	'ADD_USERS'	=> 'بەکارهێنەران زیاد بکە',
	'ADD_USERS_EXPLAIN'	=> 'Here you can add new users to the group. You may select whether this group becomes the new default for the selected users. Additionally you can define them as group leaders. Please enter each username on a separate line.',
	'COPY_PERMISSIONS'	=> 'ڕوونووسکردنی دەسەڵاتەکان لە',
	'COPY_PERMISSIONS_EXPLAIN'	=> 'هەر کە دروستکرا، گرووپەکە گەمان دەسەڵاتەکانی ئەو گرووپەی دەبێت کە لێرە دیاری دەکەیت.',
	'CREATE_GROUP'	=> 'گرووپێکی نوێ دروست بکە',
	'GROUPS_NO_MEMBERS'	=> 'ئەم گرووپە هیچ ئەندامێکی نییە',
	'GROUPS_NO_MODS'	=> 'هیچ پێشڕەوێکی گڕووپ دیاری نەکراوە',
	'GROUP_APPROVE'	=> 'ئەندام پەسەند بکە',
	'GROUP_APPROVED'	=> 'ئەندامە پەسەندکراوەکان',
	'GROUP_AVATAR'	=> 'وێنۆچکەی گرووپ',
	'GROUP_AVATAR_EXPLAIN'	=> 'ئەم وێنەیە لە کۆنترۆڵ پانێڵی گرووپ پیشان دەدرێت.',
	'GROUP_CLOSED'	=> 'داخراو',
	'GROUP_COLOR'	=> 'ڕەنگی گرووپ',
	'GROUP_COLOR_EXPLAIN'	=> 'Defines the colour members’ usernames will appear in, leave blank for user default.',
	'GROUP_CONFIRM_ADD_USER'	=> 'دڵنیایت لە زیادکردنی بەکارهێنەر %1$s بۆ گرووپ؟',
	'GROUP_CONFIRM_ADD_USERS'	=> 'دڵنیایت لە زیادکردنی بەکارهێنەران %1$s بۆ گرووپ؟',
	'GROUP_CREATED'	=> 'گرووپ بە سەرکەوتوویی دروستکرا.',
	'GROUP_DEFAULT'	=> 'گرووپی بنەڕەتی ئەندام',
	'GROUP_DEFS_UPDATED'	=> 'Default group set for all selected members.',
	'GROUP_DELETE'	=> 'ئەندام لە گرووپ لاببە',
	'GROUP_DELETED'	=> 'Group deleted and user default groups set successfully.',
	'GROUP_DEMOTE'	=> 'Demote group leader',
	'GROUP_DESC'	=> 'پەسنی گرووپ',
	'GROUP_DETAILS'	=> 'وردەکارییەکانی گرووپ',
	'GROUP_EDIT_EXPLAIN'	=> 'Here you can edit an existing group. You can change its name, description and type (open, closed, etc.). You can also set certain group wide options such as colouration, rank, etc. Changes made here override users’ current settings. Please note that group members can override group-avatar settings, unless you set appropriate user permissions.',
	'GROUP_ERR_USERS_EXIST'	=> 'The specified users are already members of this group.',
	'GROUP_FOUNDER_MANAGE'	=> 'Founder manage only',
	'GROUP_FOUNDER_MANAGE_EXPLAIN'	=> 'Restrict management of this group to founders only. Users having group permissions are still able to see this group as well as this group’s members.',
	'GROUP_HIDDEN'	=> 'شاراوە',
	'GROUP_LANG'	=> 'زمانی گرووپ',
	'GROUP_LEAD'	=> 'پێشڕەوەکانی گرووپ',
	'GROUP_LEADERS_ADDED'	=> 'پێشڕەوانی نوێ بۆ گرووپ بە سەرکەوتوویی زیادکران.',
	'GROUP_LEGEND'	=> 'Display group in legend',
	'GROUP_LIST'	=> 'ئەندامە هەنووکەییەکان',
	'GROUP_LIST_EXPLAIN'	=> 'This is a complete list of all the current users with membership of this group. You can delete members (except in certain special groups) or add new ones as you see fit.',
	'GROUP_MEMBERS'	=> 'ئەندامانی گرووپ',
	'GROUP_MEMBERS_EXPLAIN'	=> 'This is a complete listing of all the members of this usergroup. It includes separate sections for leaders, pending and existing members. From here you can manage all aspects of who has membership of this group and what their role is. To remove a leader but keep them in the group use Demote rather than delete. Similarly use Promote to make an existing member a leader.',
	'GROUP_MESSAGE_LIMIT'	=> 'Group private message limit per folder',
	'GROUP_MESSAGE_LIMIT_EXPLAIN'	=> 'This setting overrides the per-user folder message limit. A value of 0 means the user default limit will be used.',
	'GROUP_MODS_ADDED'	=> 'پێشڕەوانی نوێ بۆ گرووپ بە سەرکەوتوویی زیادکران.',
	'GROUP_MODS_DEMOTED'	=> 'Group leaders demoted successfully.',
	'GROUP_MODS_PROMOTED'	=> 'Group members promoted successfully.',
	'GROUP_NAME'	=> 'ناوی گرووپ',
	'GROUP_NAME_TAKEN'	=> 'The group name you entered is already in use, please select an alternative.',
	'GROUP_OPEN'	=> 'کراوە',
	'GROUP_PENDING'	=> 'Pending members',
	'GROUP_MAX_RECIPIENTS'	=> 'Maximum number of allowed recipients per private message',
	'GROUP_MAX_RECIPIENTS_EXPLAIN'	=> 'The maximum number of allowed recipients in a private message. If 0 is entered, the board-wide setting is used.',
	'GROUP_OPTIONS_SAVE'			=> 'Group wide options',
	'GROUP_PROMOTE'	=> 'Promote to group leader',
	'GROUP_RANK'	=> 'پلەی گرووپ',
	'GROUP_RECEIVE_PM'	=> 'گرووپ ئەتوانێت پەیامی تایبەت وەربگرێت',
	'GROUP_RECEIVE_PM_EXPLAIN'	=> 'Please note that hidden groups are not able to be messaged, regardless of this setting.',
	'GROUP_REQUEST'	=> 'ڕوخسەت',
	'GROUP_SETTINGS_SAVE'	=> 'Group wide settings',
	'GROUP_TYPE'	=> 'جۆری گرووپ',
	'GROUP_SKIP_AUTH'			=> 'Exempt group leader from permissions',
	'GROUP_SKIP_AUTH_EXPLAIN'		=> 'If enabled group leader no longer inherit permissions from the group.',	
	'GROUP_TYPE_EXPLAIN'	=> 'This determines which users can join or view this group.',
	'GROUP_UPDATED'	=> 'ویستراوەکانی گرووپ بە سەرکەوتووی نوێکرانەوە.',
	'GROUP_USERS_ADDED'	=> 'بەکارهێنەرانی نوێ بە سەرکەوتوویی بۆ گرووپ زیادکران.',
	'GROUP_USERS_EXIST'	=> 'بەکارهێنەرانی دیاریکراو پێشتر ئەندامن لە گرووپ.',
	'GROUP_USERS_REMOVE'	=> 'Users removed from group and new defaults set successfully.',
	'MAKE_DEFAULT_FOR_ALL'	=> 'Make default group for every member',
	'MEMBERS'	=> 'ئەندامان',
	'NO_GROUP'	=> 'هیچ گرووپێک دیاری نەکراوە.',
	'NO_GROUPS_CREATED'	=> 'تا ئێستا هیچ گرووپێک دروست نەکراوە.',
	'NO_PERMISSIONS'	=> 'دەسەڵاتەکان ڕوونووس مەکە',
	'NO_USERS'	=> 'هیچ بەکارهێنەرێکت نەنووسیوە.',
	'NO_USERS_ADDED'	=> 'هیچ بەکارهێنەرێک زیاد نەکراوە بۆ گرووپ.',
	'NO_VALID_USERS'	=> 'You haven’t entered any users eligible for that action.',
	'SPECIAL_GROUPS'	=> 'Pre-defined groups',
	'SPECIAL_GROUPS_EXPLAIN'	=> 'Pre-defined groups are special groups, they cannot be deleted or directly modified. However you can still add users and alter basic settings.',
	'TOTAL_MEMBERS'	=> 'ئەندامان',
	'USERS_APPROVED'	=> 'بەکارهێنەران بە سەرکەوتوویی پەسەندکران.',
	'USER_DEFAULT'	=> 'User default',
	'USER_DEF_GROUPS'	=> 'User defined groups',
	'USER_DEF_GROUPS_EXPLAIN'	=> 'These are groups created by you or another admin on this board. You can manage memberships as well as edit group properties or even delete the group.',
	'USER_GROUP_DEFAULT'	=> 'وەک گرووپی بنەڕەتی لێ بکە',
	'USER_GROUP_DEFAULT_EXPLAIN'	=> 'Saying yes here will set this group as the default group for the added users.',
	'USER_GROUP_LEADER'	=> 'بیکە بە پێشڕەوی گرووپ',
));

?>

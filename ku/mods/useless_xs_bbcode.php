<?php
/**
*
* Syntax Highlighter [English]
*
* @package language
* @version $Id: useless_xs_bbcode.php $
* @copyright (c) 2008 UseLess
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

// XS BBCode
$lang = array_merge($lang, array(
	'XS_BBCODE_VERSION'			=> 'Syntax Highlighter Version: %1$s Release: %2$s Build: %3$s',
	'XS_BBC_TAGS_TITLE'			=> 'The following BBCode tags are supported',

	'XS_BBC_SYNTAX'				=> 'ڕستەکار',
	'XS_BBC_SELECT'				=> 'دیاریکردن',
	'XS_BBC_EXPAND'				=> 'فراوانکردن',
	'XS_BBC_CONTRACT'			=> 'بچووککردن',

	'XS_BBC_HIDE'				=> 'شاردنەوە',
	'XS_BBC_HIDE_TOGGLE'		=> 'زامن',
	'XS_BBC_SHOW'				=> 'نیشاندان',
	'XS_BBC_FILE'				=> 'ناوی پەڕگە',
	'XS_BBC_DOWNLOAD'			=> 'داگرتن',

	'XS_BBC_SUPPORTED_SYNTAX'	=> 'Supported Syntaxes',
	'XS_BBC_USING_SYNTAX'		=> '%1$s ڕستەکاری',
	'XS_BBC_GESHI_VERSION'		=> 'Using <a href="http://qbnz.com/highlighter/" onclick="window.open(this.href);return false;">GeSHi</a> version: %1$s',
	// Notes
	// The 2 items <TIME> and <VERSION> are replaced by GeSHi so don't change them
	'XS_BBC_GESHI_TIME'			=> 'Parsed in <TIME> seconds,  using <a href="http://qbnz.com/highlighter/" onclick="window.open(this.href);return false;">GeSHi</a> <VERSION>',
	
	'XS_BBC_DEBUG_DEBUG'		=> 'Debug',
	'XS_BBC_DEBUG_CONTENT'		=> 'Content',
	'XS_BBC_GESHI_MISSING'		=> 'The GeSHi class file is missing therefore you\'re unable to continue.',
));

?>
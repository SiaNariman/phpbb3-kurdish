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

if (!defined('IN_PHPBB'))
{
	exit;
}

$synonyms = array(
	'مه‌کۆ'			=> 'مەکۆ',
	'مەكۆ'		=> 'مەکۆ',
	'wp'		=> 'WordPress',
	'کۆمپیتەر'	=> 'کۆمپیوتەر',
	'ئەنتەرنێت'			=> 'ئینتەرنێت',
	'Cutenews'			=> 'CuteNewsRu',
	'andy'				=> 'andrew',
	'anemia'			=> 'anaemia',
	'anemic'			=> 'anaemic',
	'anesthesia'		=> 'anaesthesia',
	'apologize'			=> 'apologise',
	'archean'			=> 'archaean',
	'archeology'		=> 'archaeology',
	'archeozoic'		=> 'archaeozoic',
	'armor'				=> 'armour',
	'artic'				=> 'arctic',
	'attachment'		=> 'attachement',
	'attendence'		=> 'attendance',

	'barbecue'	=> 'barbeque',
	'behavior'	=> 'behaviour',
	'biassed'	=> 'biased',
	'biol'		=> 'biology',
	'buletin'	=> 'bulletin',

	'calender'	=> 'calendar',
	'canceled'	=> 'cancelled',
	'car'		=> 'automobile',
	'catalog'	=> 'catalogue',
	'cenozoic'	=> 'caenozoic',
	'center'	=> 'centre',
	'check'		=> 'cheque',
	'color'		=> 'colour',
	'comission'	=> 'commission',
	'comittee'	=> 'committee',
	'commitee'	=> 'committee',
	'conceed'	=> 'concede',
	'creating'	=> 'createing',
	'curiculum'	=> 'curriculum',

	'defense'		=> 'defence',
	'develope'		=> 'develop',
	'discription'	=> 'description',
	'dulness'		=> 'dullness',

	'encyclopedia'	=> 'encyclopaedia',
	'enroll'		=> 'enrol',
	'esthetic'		=> 'aesthetic',
	'etiology'		=> 'aetiology',
	'exhorbitant'	=> 'exorbitant',
	'exhuberant'	=> 'exuberant',
	'existance'		=> 'existence',

	'favorite'		=> 'favourite',
	'fetus'			=> 'foetus',
	'ficticious'	=> 'fictitious',
	'flavor'		=> 'flavour',
	'flourescent'	=> 'fluorescent',
	'foriegn'		=> 'foreign',
	'fourty'		=> 'forty',

	'gage'			=> 'gauge',
	'geneology'		=> 'genealogy',
	'grammer'		=> 'grammar',
	'gray'			=> 'grey',
	'guerilla'		=> 'guerrilla',
	'gynecology'	=> 'gynaecology',

	'harbor'		=> 'harbour',
	'heighth'		=> 'height',
	'hemaglobin'	=> 'haemaglobin',
	'hematin'		=> 'haematin',
	'hematite'		=> 'haematite',
	'hematology'	=> 'haematology',
	'honor'			=> 'honour',

	'innoculate'	=> 'inoculate',
	'installment'	=> 'instalment',
	'irrelevent'	=> 'irrelevant',
	'irrevelant'	=> 'irrelevant',

	'jeweler'	=> 'jeweller',
	'judgment'	=> 'judgement',

	'labeled'	=> 'labelled',
	'labor'		=> 'labour',
	'laborer'	=> 'labourer',
	'laborers'	=> 'labourers',
	'laboring'	=> 'labouring',
	'licence'	=> 'license',
	'liesure'	=> 'leisure',
	'liquify'	=> 'liquefy',

	'maintainance'	=> 'maintenance',
	'maintenence'	=> 'maintenance',
	'medieval'		=> 'mediaeval',
	'meter'			=> 'metre',
	'milage'		=> 'mileage',
	'millipede'		=> 'millepede',
	'miscelaneous'	=> 'miscellaneous',
	'morgage'		=> 'mortgage',

	'noticable'	=> 'noticeable',

	'occurence'	=> 'occurrence',
	'offense'	=> 'offence',
	'ommision'	=> 'omission',
	'ommission'	=> 'omission',
	'optimize'	=> 'optimise',
	'organize'	=> 'organise',

	'pajamas'			=> 'pyjamas',
	'paleography'		=> 'palaeography',
	'paleolithic'		=> 'palaeolithic',
	'paleontological'	=> 'palaeontological',
	'paleontologist'	=> 'palaeontologist',
	'paleontology'		=> 'palaeontology',
	'paleozoic'			=> 'palaeozoic',
	'pamplet'			=> 'pamphlet',
	'paralell'			=> 'parallel',
	'parl'				=> 'parliament',
	'parlt'				=> 'parliament',
	'pediatric'			=> 'paediatric',
	'pediatrician'		=> 'paediatrician',
	'pediatrics'		=> 'paediatrics',
	'pedodontia'		=> 'paedodontia',
	'pedodontics'		=> 'paedodontics',
	'personel'			=> 'personnel',
	'practise'			=> 'practice',
	'program'			=> 'programme',
	'psych'				=> 'دەروونزانی',

	'questionaire'	=> 'ڕاوەرگرتن',

	'rarify'		=> 'rarefy',
	'reccomend'		=> 'ئامۆژگاریکران',
	'recieve'		=> 'وەرگرتن',
	'resistence'	=> 'بەگری',
	'restaraunt'	=> 'چێشتخانە',

	'savior'			=> 'ڕزگارکەر',
	'sep'				=> 'ئەیلول',
	'seperate'			=> 'جیاکراوە',
	'sept'				=> 'ئەیلول',
	'sieze'				=> 'دەگرێ',
	'summarize'			=> 'summarise',
	'summerize'			=> 'summarise',
	'superceed'			=> 'supercede',
	'superintendant'	=> 'superintendent',
	'supersede'			=> 'supercede',
	'suprise'			=> 'کتوپڕی',
	'surprize'			=> 'کتوپڕی',
	'synchronise'		=> 'هاوکاتدەکات',

	'temperary'		=> 'کاتیی',
	'theater'		=> 'شانۆ',
	'threshhold'	=> 'لێوار',
	'transfered'	=> 'بگۆڕ',
	'truely'		=> 'بەڕاستی',
	'truley'		=> 'بەڕاستی',

	'useable'	=> 'شیاو',

	'valor'	=> 'ئازایەتی',
	'vigor'	=> 'چالاکی',
	'vol'	=> 'قەبارە',

	'whack'		=> 'دۆست',
	'withold'	=> 'ناهێڵێ',

	'yeild'	=> 'بەرهەمدێنێت',
);

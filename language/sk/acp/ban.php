<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @author phpBB3.sk, Senky
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

// Banning
$lang = array_merge($lang, array(
	'1_HOUR'		=> 'hodinu',
	'30_MINS'		=> '30 minút',
	'6_HOURS'		=> '6 hodín',

	'ACP_BAN_EXPLAIN'	=> 'Tu môžete ovládať vylučovanie (banovanie) používateľov podľa mena, IP alebo e-mailovej adresy. Tieto metódy zamedzujú používateľovi prístup k akejkoľvek časti fóra. Ak chcete, môžete dať krátky (255 znakový) dôvod pre vylúčenie. Tento bude zobrazený v zázname (logu) admina. Dĺžka vylúčenia môže byť tiež špecifikovaná. Ak chcete vylúčenie do konca určitého dátumu, radšej než preddefinovanú dĺžku, vyberte <span style="text-decoration: underline;">Až do</span> pre dĺžku vylúčenia a vložte dátum vo formáte yyyy-mm-dd (rrrr-mm-dd).',

	'BAN_EXCLUDE'			=> 'Vyňať z vylúčenia',
	'BAN_LENGTH'			=> 'Dĺžka vylúčenia',
	'BAN_REASON'			=> 'Dôvod vylúčenia',
	'BAN_GIVE_REASON'		=> 'Dôvod zobrazený vylúčenému',
	'BAN_UPDATE_SUCCESSFUL'	=> 'Zoznam vylúčených bol úspešne aktualizovaný.',
	'BANNED_UNTIL_DATE'		=> 'až do %s', // Example: "until Mon 13.Jul.2009, 14:44"
	'BANNED_UNTIL_DURATION'	=> '%1$s (do %2$s)', // Example: "7 days (until Tue 14.Jul.2009, 14:44)"

	'EMAIL_BAN'					=> 'Vylúčiť jednu alebo viac e-mailových adries',
	'EMAIL_BAN_EXCLUDE_EXPLAIN'	=> 'Povoľte možnosť pre vyradenie vloženej adresy z aktívnych vylúčení.',
	'EMAIL_BAN_EXPLAIN'			=> 'Pre určenie viac než jednej e-mailovej adresy, vložte každú z nich na nový riadok. Pre zhodu časti adries použite * ako náhradný znak, napr. <samp>*@hotmail.com</samp>, <samp>*@*.domain.tld</samp>, atď.',
	'EMAIL_NO_BANNED'			=> 'Žiadne vylúčené e-mailové adresy',
	'EMAIL_UNBAN'				=> 'Zrušiť vylúčenie alebo zrušiť vyňatie e-mailov',
	'EMAIL_UNBAN_EXPLAIN'		=> 'Môžete zrušiť vylúčenie (alebo zrušiť vyňatie) viacerých e-mailových adries naraz správnym použitím kombinácie myši a klávesnice na vašom PC a prehliadača. Vyňaté e-mailové adresy budú zvýraznené.',

	'IP_BAN'					=> 'Vylúčiť jednu alebo viac IP',
	'IP_BAN_EXCLUDE_EXPLAIN'	=> 'Povoľte možnosť pre vyradenie vloženej IP z aktívnych vylúčení.',
	'IP_BAN_EXPLAIN'			=> 'Pre určenie rôznych IP alebo názvov hostingov, vložte každú z nich na nový riadok. Pre určenie rozsahu IP adries, oddeľte začiatok a koniec pomlčkou (-), pre určenie zástupných znakov použite *',
	'IP_HOSTNAME'				=> 'IP adresy alebo názvy hostingov',
	'IP_NO_BANNED'				=> 'Žiadne vylúčené IP adresy',
	'IP_UNBAN'					=> 'Zrušiť vylúčenie alebo zrušiť vyňatie IP',
	'IP_UNBAN_EXPLAIN'			=> 'Môžete zrušiť vylúčenie (alebo zrušiť vyňatie) viacerých IP adries naraz správnym použitím kombinácie myši a klávesnice na Vašom PC a prehliadača. Vyňaté IP adresy majú označené pozadie.',

	'LENGTH_BAN_INVALID'		=> 'Dátum musí mať formát <kbd>RRRR-MM-DD</kbd>.',

	'OPTIONS_BANNED'			=> 'Vylúčený (zabanovaný)',
	'OPTIONS_EXCLUDED'			=> 'Vyňatý',

	'PERMANENT'		=> 'Trvalé',

	'UNTIL'						=> 'Až do',
	'USER_BAN'					=> 'Vylúčiť jedno alebo viac používateľských mien',
	'USER_BAN_EXCLUDE_EXPLAIN'	=> 'Povoľte možnosť pre vyňatie vložených používateľov zo všetkých momentálnych vylúčení.',
	'USER_BAN_EXPLAIN'			=> 'Môžete vylúčiť viac používateľov naraz zadaním každého mena do nového riadku. Použite funkciu <span style="text-decoration: underline;">Nájsť člena</span> pre vyhľadanie a automatické zadanie jedného alebo viac používateľov.',
	'USER_NO_BANNED'			=> 'Žiadne vylúčené používateľské mená',
	'USER_UNBAN'				=> 'Zrušiť vylúčenie alebo zrušiť vyňatie používateľských mien',
	'USER_UNBAN_EXPLAIN'		=> 'Môžete zrušiť vylúčenie (alebo zrušiť vyňatie) viacerých používateľov naraz správnym použitím kombinácie myši a klávesnice na Vašom PC a prehliadača. Vyňatí užívatelia sú zvýraznení.',
));

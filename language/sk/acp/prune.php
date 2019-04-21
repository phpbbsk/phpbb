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

// User pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_USERS_EXPLAIN' 		=> 'Táto sekcia vám umožňuje zmazať alebo deaktivovať používateľov na vašom fóre. Účty môžu byť filtrované rôznymi spôsobmi; podľa počtu príspevkov, poslednej aktivity atď. Kritériá je možné kombinovať pre zúženie ovplyvnených účtov. Napríklad môžete prečistiť používateľov s menej ako 10 príspevkami, ktorí zároveň boli neaktívni po 1.1.2012. Môžete taktiež úplne preskočiť výber kritérií vložením zoznamu používateľov (každý na novom riadku) do textového poľa. Buďte opatrní pri prečisťovaní používateľov! Zmazaných používateľov nie je možné vrátiť späť.',

	'CRITERIA'				=> 'Kritériá',

	'DEACTIVATE_DELETE' 		=> 'Deaktivovať alebo zmazať',
	'DEACTIVATE_DELETE_EXPLAIN'	=> 'Vyberte, či chcete používateľov deaktivovať alebo ich úplne zmazať. Prosíme, uvedomte si, že zmazaných používateľov sa už nedá obnoviť!',
	'DELETE_USERS'				=> 'Zmazať',
	'DELETE_USER_POSTS'			=> 'Odstrániť príspevky prečistených používateľov',
	'DELETE_USER_POSTS_EXPLAIN' => 'Odstrániť príspevky zmazaných používateľov, nemá účinok pre deaktivovaní používateľov.',

	'JOINED_EXPLAIN' 			=> 'Zadajte dátum vo formáte <kbd>RRRR-MM-DD</kbd> ',

	'LAST_ACTIVE_EXPLAIN' 		=> 'Zadajte dátum vo formáte <kbd>RRRR-MM-DD</kbd>. Zadajte <kbd>0000-00-00</kbd> pre prečistenie používateľov, ktorí sa nikdy neprihlásili, v tomto prípade budú ignorované podmienky <em>Pred</em> a <em>Po</em> ',

	'POSTS_ON_QUEUE' 			=> 'Príspevky čakajúce na schválenie',
	'PRUNE_USERS_GROUP_EXPLAIN'	=> 'Obmedziť na používateľov z vybranej skupiny.',
	'PRUNE_USERS_GROUP_NONE'	=> 'Všetky skupiny',
	'PRUNE_USERS_LIST' 				=> 'Užívatelia k prečisteniu',
	'PRUNE_USERS_LIST_DELETE'		=> 'S vybranými kritériami pre prečistenie používateľov budú odstránené nasledujúce používateľské účty.',
	'PRUNE_USERS_LIST_DEACTIVATE'	=> 'S vybranými kritériami pre prečistenie používateľov budú deaktivováné nasledujúce používateľské účty.',

	'SELECT_USERS_EXPLAIN' 		=> 'Sem vložte používateľské mená, pre ktoré majú byť použité nastavené kritéria. Zakladatelia fora nemôžu byť prečistení.',

	'USER_DEACTIVATE_SUCCESS' 	=> 'Vybraní užívatelia boli úspešne deaktivovaní.',
	'USER_DELETE_SUCCESS' 		=> 'Vybraní užívatelia boli úspešne zmazaní.',
	'USER_PRUNE_FAILURE' 		=> 'Vybraným kritériám nevyhovujú žiadni užívatelia.',

	'WRONG_ACTIVE_JOINED_DATE' 	=> 'Zadaný dátum nie je správny, použite formát <kbd>RRRR-MM-DD</kbd>.',
));

// Forum Pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_FORUMS_EXPLAIN' 	=> 'Toto zmaže témy, ktoré neboli odoslané alebo zobrazené v počte dní, ktoré vyberiete. Pokiaľ nezadáte číslo, zmazané budú všetky témy. Vo základnom nastavení nezmaže témy s hlasovaniami, ktoré stále bežia, ani dôležité témy a oznámenia.',

	'FORUM_PRUNE' 		=> 'Prečistenie fóra',

	'NO_PRUNE' 			=> 'Žiadne fóra neboli prečistené',

	'SELECTED_FORUM'	=> 'Vybrané fórum',
	'SELECTED_FORUMS' 	=> 'Vybrané fóra',

	'POSTS_PRUNED' 					=> 'Prečistené príspevky',
	'PRUNE_ANNOUNCEMENTS' 			=> 'Prečistiť oznámenia',
	'PRUNE_FINISHED_POLLS' 			=> 'Prečistiť uzavreté hlasovania',
	'PRUNE_FINISHED_POLLS_EXPLAIN' 	=> 'Vymaže témy s hlasovaniami, ktoré už skončili.',
	'PRUNE_FORUM_CONFIRM' 			=> 'Naozaj chcete prečistiť vybrané fóra so špecifikovanými nastaveniami? Ak sa témy raz vymažú, už nie je možné obnoviť prečistené príspevky a témy.',
	'PRUNE_NOT_POSTED' 				=> 'Dni od poslednej odpovede',
	'PRUNE_NOT_VIEWED' 				=> 'Dni od posledného zobrazenia',
	'PRUNE_OLD_POLLS' 				=> 'Prečistiť staré hlasovania',
	'PRUNE_OLD_POLLS_EXPLAIN' 		=> 'Odstráni témy s hlasovaním, v ktorých sa nehlasovalo viac ako je nastavený čas od posledného príspevku.',
	'PRUNE_STICKY' 					=> 'Prečistiť dôležité',
	'PRUNE_SUCCESS' 				=> 'Prečistenie fór bolo úspešné.',

	'TOPICS_PRUNED' 	=> 'Prečistené témy',
));

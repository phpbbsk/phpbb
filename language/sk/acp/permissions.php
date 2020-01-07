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

$lang = array_merge($lang, array(
	'ACP_PERMISSIONS_EXPLAIN'	=> '
		<p>Oprávnenia sú veľmi podrobné a rozdelené do štyroch hlavných skupín, ktoré sú:</p>

		<h2>Globálne oprávnenia</h2>
		<p>Tieto sú používané na kontrolovanie prístupu na globálnej úrovni a platia na celom fóre. Sú ďalej rozdelené na Oprávnenia používateľov, Oprávnenia skupín, Administrátorov a Globálnych Moderátorov.</p>

		<h2>Oprávnenia založené na fórach</h2>
		<p>Tieto sú používané na kontrolovanie prístupu k jednotlivým fóram, pre každé zvlášť. Sú ďalej rozdelené na Oprávnenia fór, Moderátori fóra, používateľské oprávnenia k fóru a Skupinové oprávnenia k fóru.</p>

		<h2>Role oprávnení</h2>
		<p>Tieto sa používajú k vytvoreniu rôznych sád rolí pre rôzne typy odlišných oprávnení, ktoré je neskôr možné použiť na základe rolí. Prednastavené roly by mali pokryť potreby veľkých aj malých diskusných fór, a pokiaľ nie, napriek všetkým druhom oprávnení, môžete pridávať/upravovať/mazať ďalšie roly podľa vašich potrieb.</p>

		<h2>Masky oprávnení</h2>
		<p>Tieto môžete využiť pre zobrazenie aktuálne nastavených oprávnení pridelených používateľom, Moderátorom (Lokálnym aj Globálnym), Administrátorom, alebo Fóram.</p>

		<br />

		<p>Pre ďalšie informácie o nastavení a správe oprávnení na vašom phpBB3 fóre, prosíme, pozrite sa do <a href="https://www.phpbb.com/support/docs/en/3.3/ug/quickstart/permissions/">Kapitoly Nastavenie oprávnení v Sprievodcovi pre rýchly začiatok</a>.</p>
	',

	'ACL_NEVER'				=> 'Nikdy',
	'ACL_SET'				=> 'Nastavenie oprávnení',
	'ACL_SET_EXPLAIN'		=> 'Oprávnenia sú založené na jednoduchom <strong>ÁNO</strong>/<strong>NIE</strong> systéme. Nastavením možnosti <strong>NIKDY</strong> sa používateľovi alebo používateľskej skupine prepíšu všetky iné hodnoty, ktoré sú k danému oprávneniu zaznačené. Pokiaľ si neprajete pre používateľa, alebo skupinu priradiť hodnotu k danej možnosti, nastavte položku na <strong>NIE</strong>. K sú hodnoty pre túto možnosť označené inde, tamtie budú použité prednostne, ináč je predpokladaná možnosť <strong>NIKDY</strong>. Všetky označené objekty (s checkboxom pred nimi) budú kopírovať sadu oprávnení, ktoré ste tu definovali.',
	'ACL_SETTING'			=> 'Nastavenie',

	'ACL_TYPE_A_'			=> 'Administrátorské oprávnenia',
	'ACL_TYPE_F_'			=> 'Oprávnenia fór',
	'ACL_TYPE_M_'			=> 'Moderátorské oprávnenia',
	'ACL_TYPE_U_'			=> 'Používateľské oprávnenia',

	'ACL_TYPE_GLOBAL_A_'	=> 'Administrátorské oprávnenia',
	'ACL_TYPE_GLOBAL_U_'	=> 'Používateľské oprávnenia',
	'ACL_TYPE_GLOBAL_M_'	=> 'Oprávnenia Globálnych Moderátorov',
	'ACL_TYPE_LOCAL_M_'		=> 'Oprávnenia Moderátorov fór',
	'ACL_TYPE_LOCAL_F_'		=> 'Oprávnenia fóra',

	'ACL_NO'				=> 'Nie',
	'ACL_VIEW'				=> 'Zobrazenie oprávnení',
	'ACL_VIEW_EXPLAIN'		=> 'Tu si môžete pozrieť oprávnenia používateľa alebo skupiny, ktoré sa práve využívajú. Červený štvorec znamená, že používateľ/skupina nemá dané oprávnenie, zelený štvorec znamená, že používateľ/skupina dané oprávnenie má.',
	'ACL_YES'				=> 'Áno',

	'ACP_ADMINISTRATORS_EXPLAIN'				=> 'Tu môžete prideliť administrátorské oprávnenia používateľom alebo skupinám. Všetci užívatelia s administrátorskými oprávneniami môžu vidieť do Administrátorského kontrolného panela.',
	'ACP_FORUM_MODERATORS_EXPLAIN'				=> 'Tu môžete označiť používateľov a skupiny ako moderátorov fóra. Pre nastavenie prístupu používateľov k diskusiám, nastaveniu globálnych moderátorov alebo administrátorov použite odpovedajúcu sekciu oprávnení.',
	'ACP_FORUM_PERMISSIONS_EXPLAIN'				=> 'Tu môžete upraviť, ktoré skupiny alebo užívatelia majú prístup k určitým fóram. Pre nastavenie moderátorov alebo administrátorov použite odpovedajúcu sekciu oprávnení.',
	'ACP_FORUM_PERMISSIONS_COPY_EXPLAIN'		=> 'Tu môžete kopírovať nastavenia oprávnenie fóra z jedného fóra na jedno, alebo viac iných fór.',
	'ACP_GLOBAL_MODERATORS_EXPLAIN'				=> 'Tu môžete priradiť moderátorské oprávnenie používateľom alebo skupinám. Títo moderátori sú rovnakí ako bežní moderátori, s tým rozdielom, že majú oprávnenia ku všetkým fóram.',
	'ACP_GROUPS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Tu môžete priradiť oprávnenia fór pre skupiny.',
	'ACP_GROUPS_PERMISSIONS_EXPLAIN'			=> 'Tu môžete priradiť globálne oprávnenia skupinám - používateľské oprávnenia, moderátorské oprávnenia a administrátorské oprávnenia. používateľské oprávnenia zahŕňajú možnosti ako použitie avataru, odosielanie súkromných správ atď.; oprávnenia globálnych moderátorov zahŕňajú možnosti ako schvaľovanie príspevkov, spravovanie tém, spravovanie banov atď. a nakoniec administrátorské oprávnenia ako úpravy oprávnení, definovanie vlastných BB kódov, spravovanie fór atď. Individuálne používateľské oprávnenia by mali byť menené len výnimočne, preferovaná metóda je zaradenie používateľov do skupín a nastavenie oprávnení skupinám.',
	'ACP_ADMIN_ROLES_EXPLAIN'					=> 'Tu môžete spravovať roly pre administratívne oprávnenia. Roly sú oprávnenia, ktoré sa už využívajú, pokiaľ zmeníte danú rolu, položkám, ktoré používajú túto rolu, sa tiež zmenia oprávnenia.',
	'ACP_FORUM_ROLES_EXPLAIN'					=> 'Tu môžete spravovať roly pre oprávnenia pre fóra. Roly sú oprávnenia, ktoré sa už využívajú, pokiaľ zmeníte danú rolu, položkám, ktoré používajú túto rolu, sa tiež zmenia oprávnenia.',
	'ACP_MOD_ROLES_EXPLAIN'						=> 'Tu môžete spravovať roly pre moderátorské oprávnenia. Roly sú oprávnenia, ktoré sa už využívajú, pokiaľ zmeníte danú rolu, položkám, ktoré používajú túto rolu, sa tiež zmenia oprávnenia.',
	'ACP_USER_ROLES_EXPLAIN'					=> 'Tu môžete spravovať roly pre používateľské oprávnenia. Roly sú oprávnenia, ktoré sa už využívajú, pokiaľ zmeníte danú rolu, položkám, ktoré používajú túto rolu, sa tiež zmenia oprávnenia.',
	'ACP_USERS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Tu môžete upraviť oprávnenia fór pre používateľov.',
	'ACP_USERS_PERMISSIONS_EXPLAIN'				=> 'Tu môžete priradiť globálne oprávnenia používateľom - používateľské oprávnenia, moderátorské oprávnenia aj administrátorské oprávnenia. používateľské oprávnenia zahŕňajú možnosti ako použitie avataru, odoslanie súkromných správ atď.; oprávnenia globálnych moderátorov možnosti ako schvaľovanie príspevkov, spravovanie tém, spravovanie banov atď. a nakoniec administrátorské oprávnenia ako úpravy oprávnení, definovanie vlastných BB kódov, spravovanie fór atď. Pre úpravu týchto oprávnení pre väčší počet používateľov je doporučené využiť Oprávnenia skupín. Oprávnenia používateľa by mali byť menené len výnimočne, preferovaná metóda je zaradenie používateľov do skupín a nastavenie oprávnení skupinám.',
	'ACP_VIEW_ADMIN_PERMISSIONS_EXPLAIN'		=> 'Tu si môžete pozrieť využívané administratívne oprávnenia priradené vybraným používateľom/skupinám.',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS_EXPLAIN'	=> 'Tu si môžete pozrieť oprávnenia globálnych moderátorov priradené vybraným používateľom/skupinám.',
	'ACP_VIEW_FORUM_PERMISSIONS_EXPLAIN'		=> 'Tu si môžete pozrieť oprávnenia fór priradené vybraným používateľom/skupinám a fóram.',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS_EXPLAIN'	=> 'Tu si môžete pozrieť moderátorské oprávnenia ku konkrétnym fóram priradené vybraným používateľom/skupinám a fóram.',
	'ACP_VIEW_USER_PERMISSIONS_EXPLAIN'			=> 'Tu si môžete pozrieť využívané uživateľské oprávnenia priradené vybraným používateľom/skupinám.',

	'ADD_GROUPS'				=> 'Pridať skupiny',
	'ADD_PERMISSIONS'			=> 'Pridať oprávnenia',
	'ADD_USERS'					=> 'Pridať používateľov',
	'ADVANCED_PERMISSIONS'		=> 'Pokročilé oprávnenia',
	'ALL_GROUPS'				=> 'Vybrať všetky skupiny',
	'ALL_NEVER'					=> 'Všetko <strong>NIKDY</strong>',
	'ALL_NO'					=> 'Všetko <strong>NIE</strong>',
	'ALL_USERS'					=> 'Vybrať všetkých používateľov',
	'ALL_YES'					=> 'Všetko <strong>ÁNO</strong>',
	'APPLY_ALL_PERMISSIONS'		=> 'Použiť všetky oprávnenia',
	'APPLY_PERMISSIONS'			=> 'Použiť oprávnenia',
	'APPLY_PERMISSIONS_EXPLAIN'	=> 'Oprávnenia a roly definované pre túto položku budú použité len na tejto položke a všetkých ďalších, ktoré sú zaškrtnuté',
	'AUTH_UPDATED'				=> 'Oprávnenia boli aktualizované.',

	'COPY_PERMISSIONS_CONFIRM'				=> 'Ste si istí, že chcete vykonať túto operáciu? Prosím, uvedomte si, že toto prepíše všetky existujúce oprávnenia na vybraných fórach.',
	'COPY_PERMISSIONS_FORUM_FROM_EXPLAIN'	=> 'Zdrojové fórum, odkiaľ chcete skopírovať oprávnenia.',
	'COPY_PERMISSIONS_FORUM_TO_EXPLAIN'		=> 'Fóra, kde chcete skopírovať oprávnenia.',
	'COPY_PERMISSIONS_FROM'					=> 'Skopírovať oprávnenie z',
	'COPY_PERMISSIONS_TO'					=> 'Použiť oprávnenie na',

	'CREATE_ROLE'				=> 'Vytvoriť rolu',
	'CREATE_ROLE_FROM'			=> 'Použiť nastavena z…',
	'CUSTOM'					=> 'Vlastné…',

	'DEFAULT'					=> 'Prednastavené',
	'DELETE_ROLE'				=> 'Odstrániť rolu',
	'DELETE_ROLE_CONFIRM'		=> 'Naozaj chcete odstrániť túto rolu? Položky, ktoré majú túto rolu pridelenú <strong>nestratia</strong> svoje oprávnenia.',
	'DISPLAY_ROLE_ITEMS'		=> 'Zobraziť položky využívajúce túto rolu',

	'EDIT_PERMISSIONS'			=> 'Upraviť oprávnenia',
	'EDIT_ROLE'					=> 'Upraviť rolu',

	'GROUPS_NOT_ASSIGNED'		=> 'Tejto role nebola pridelená žiadna skupina',

	'LOOK_UP_GROUP'				=> 'Vyhľadať používateľskú skupinu',
	'LOOK_UP_USER'				=> 'Vyhľadať používateľa',

	'MANAGE_GROUPS'		=> 'Spravovať skupiny',
	'MANAGE_USERS'		=> 'Spravovať používateľov',

	'NO_AUTH_SETTING_FOUND'		=> 'Oprávnenia neboli definované.',
	'NO_ROLE_ASSIGNED'			=> 'Žiadna rola nebola pridelená',
	'NO_ROLE_ASSIGNED_EXPLAIN'	=> 'Nastavenie tejto role nezmení oprávnenia zobrazené napravo. Pokiaľ chcete prednastaviť/odstrániť všetky oprávnenia, použite odkaz „Všetko <strong>NIE</strong>“.',
	'NO_ROLE_AVAILABLE'			=> 'Nie je dostupná žiadna rola',
	'NO_ROLE_NAME_SPECIFIED'	=> 'Prosíme, dajte meno role.',
	'NO_ROLE_SELECTED'			=> 'Rola nebola nájdená.',
	'NO_USER_GROUP_SELECTED'	=> 'Nevybrali ste žiadneho používateľa alebo skupinu.',

	'ONLY_FORUM_DEFINED'	=> 'Pri vašom výbere ste definovali iba fórum. Prosíme, vyberte ešte aspoň jedného používateľa alebo jednu skupinu.',

	'PERMISSION_APPLIED_TO_ALL'		=> 'Oprávnena a rola budú použité na všetky zaškrtnuté objekty',
	'PLUS_SUBFORUMS'				=> '+subfóra',

	'REMOVE_PERMISSIONS'			=> 'Odstrániť oprávnenia',
	'REMOVE_ROLE'					=> 'Odstrániť rolu',
	'RESULTING_PERMISSION'          => 'Výsledné oprávnenia',
	'ROLE'							=> 'Rola',
	'ROLE_ADD_SUCCESS'				=> 'Rola bola úspešne pridaná.',
	'ROLE_ASSIGNED_TO'				=> 'Užívatelia/skupiny boli priradení k %s',
	'ROLE_DELETED'					=> 'Rola bola úspešne odstránená.',
	'ROLE_DESCRIPTION'				=> 'Popis roly',

	'ROLE_ADMIN_FORUM'			=> 'Admininstrátor fóra',
	'ROLE_ADMIN_FULL'			=> 'Hlavný administrátor',
	'ROLE_ADMIN_STANDARD'		=> 'Bežný administrátor',
	'ROLE_ADMIN_USERGROUP'		=> 'Admininistrátor používateľov a skupín',
	'ROLE_FORUM_BOT'			=> 'Prístup botov',
	'ROLE_FORUM_FULL'			=> 'Plný prístup',
	'ROLE_FORUM_LIMITED'		=> 'Obmedzený prístup',
	'ROLE_FORUM_LIMITED_POLLS'	=> 'Obmedzený prístup + hlasovanie',
	'ROLE_FORUM_NOACCESS'		=> 'Žiadny prístup',
	'ROLE_FORUM_ONQUEUE'		=> 'Nutné schválenie',
	'ROLE_FORUM_POLLS'			=> 'Bežný prístup + hlasovanie',
	'ROLE_FORUM_READONLY'		=> 'Len čítanie',
	'ROLE_FORUM_STANDARD'		=> 'Bežný prístup',
	'ROLE_FORUM_NEW_MEMBER'		=> 'Prístup nových členov fóra',
	'ROLE_MOD_FULL'				=> 'Hlavný moderátor',
	'ROLE_MOD_QUEUE'			=> 'Schvaľovací moderátor',
	'ROLE_MOD_SIMPLE'			=> 'Jednoduchý moderátor',
	'ROLE_MOD_STANDARD'			=> 'Normálny moderátor',
	'ROLE_USER_FULL'			=> 'Všetky funkcie',
	'ROLE_USER_LIMITED'			=> 'Obmedzené funkcie',
	'ROLE_USER_NOAVATAR'		=> 'Bez avatarov',
	'ROLE_USER_NOPM'			=> 'Bez súkromných správ',
	'ROLE_USER_STANDARD'		=> 'Bežné funkcie',
	'ROLE_USER_NEW_MEMBER'		=> 'Vlastnosti nových členov fóra',

	'ROLE_DESCRIPTION_ADMIN_FORUM'			=> 'Má prístup k ovládaniu fór a nastaveniam oprávnení pre fóra.',
	'ROLE_DESCRIPTION_ADMIN_FULL'			=> 'Má prístup ku všetkým administrátorským funkciám na tomto fóre.<br />Nie je doporučené.',
	'ROLE_DESCRIPTION_ADMIN_STANDARD'		=> 'Má prístup ku väčšine možností administrátora, ale nemôže používať nastavenia ohľadom servera a systému.',
	'ROLE_DESCRIPTION_ADMIN_USERGROUP'		=> 'Môže spravovať skupiny a používateľov: môže meniť oprávnenia, nastavenia, spravovať bany a spravovať hodnosti.',
	'ROLE_DESCRIPTION_FORUM_BOT'			=> 'Táto rola je doporučená pre botov a vyhľadávacích robotov.',
	'ROLE_DESCRIPTION_FORUM_FULL'			=> 'Môže využívať všetky možnosti fóra, vrátane odosielania Dôležitých tém a Oznámení. Taktiež môže ignorovať časový interval pre odosielanie príspevkov.<br />Nie je doporučené pre bežných používateľov.',
	'ROLE_DESCRIPTION_FORUM_LIMITED'		=> 'Môže využiť niektoré možnosti fóra, ale nemôže pripájať prílohy a využívať ikony tém.',
	'ROLE_DESCRIPTION_FORUM_LIMITED_POLLS'	=> 'Rovnaké ako Obmedzený prístup, ale môže zakladať hlasovanie.',
	'ROLE_DESCRIPTION_FORUM_NOACCESS'		=> 'Nevidí ani nemá prístup k fóru.',
	'ROLE_DESCRIPTION_FORUM_ONQUEUE'		=> 'Môže využiť väčšinu funkcií fóra vrátane príloh, ale príspevky a témy musia byť schválené moderátorom.',
	'ROLE_DESCRIPTION_FORUM_POLLS'			=> 'Rovnaké ako Bežný prístup, ale môže zakladať hlasovania.',
	'ROLE_DESCRIPTION_FORUM_READONLY'		=> 'Môže čítať témy na fóre, ale nemôže vytvárať nové témy alebo odosielať odpovede.',
	'ROLE_DESCRIPTION_FORUM_STANDARD'		=> 'Môže využívať väčšinu funkcií fóra vrátane príloh a mazania vlastných tém, ale nemôže zamykať vlastné témy a nemôže vytvárať hlasovania.',
	'ROLE_DESCRIPTION_FORUM_NEW_MEMBER'		=> 'Role pre skupinu novo registrovaných používateľov; obsahuje oprávnenie typu <strong> NIKDY </strong> pre obmedzenie možností pre nových používateľov.',
	'ROLE_DESCRIPTION_MOD_FULL'				=> 'Môže využívať všetky možnosti moderátora, vrátane banovania.',
	'ROLE_DESCRIPTION_MOD_QUEUE'			=> 'Môže využiť zoznam príspevkov ku schváleniu pre schvaľovanie a úpravu príspevkov, ale nič iného.',
	'ROLE_DESCRIPTION_MOD_SIMPLE'			=> 'Môže využívať len základné operácie s témami. Nemôže udeľovať varovania alebo používať zoznam príspevkov ku schváleniu.',
	'ROLE_DESCRIPTION_MOD_STANDARD'			=> 'Môže využiť väčšinu nástrojov moderátora, ale nemôže udeliť ban alebo zmeniť autora príspevku.',
	'ROLE_DESCRIPTION_USER_FULL'			=> 'Môže využiť všetkých možností, ktoré používateľ môže mať vrátane zmeny používateľského mena a ignorácie ochranných intervalov.<br />Nie je doporučené.',
	'ROLE_DESCRIPTION_USER_LIMITED'			=> 'Má prístup k niektorým možnostiam používateľa. Prílohy, e-maily alebo instantné správy nie sú povolené.',
	'ROLE_DESCRIPTION_USER_NOAVATAR'		=> 'Má obmedzenú sadu možností a má nemá povolené používať možnosti avatarov.',
	'ROLE_DESCRIPTION_USER_NOPM'			=> 'Má obmedzenú sadu možností a nemôže používať súkromné správy.',
	'ROLE_DESCRIPTION_USER_STANDARD'		=> 'Má prístup k väčšine, ale nie všetkým možnostiam používateľa. Nemôže si ale, napríklad, zmeniť používateľské meno alebo ignorovať ochranné intervaly.',
	'ROLE_DESCRIPTION_USER_NEW_MEMBER'		=> 'Role pro skupinu novo registrovaných používateľov; obsahuje oprávnenia typu <strong>NIKDY</strong> pre obmedzenie možností pre nových používateľov.',

	'ROLE_DESCRIPTION_EXPLAIN'		=> 'Máte možnosť vložiť krátky popis toho, k čomu je rola určená alebo koho označuje. Text, ktorý tu vložíte bude tiež zobrazený v prehľade rolí v administrácií.',
	'ROLE_DESCRIPTION_LONG'			=> 'Popis rola má príliš dlhý popis, skráťte ho na 4000 znakov.',
	'ROLE_DETAILS'					=> 'Detaily role',
	'ROLE_EDIT_SUCCESS'				=> 'Rola bola úspešne upravená.',
	'ROLE_NAME'						=> 'Názov role',
	'ROLE_NAME_ALREADY_EXIST'		=> 'Rola s názvom <strong>%s</strong> už existuje pre daný druh oprávnenia.',
	'ROLE_NOT_ASSIGNED'				=> 'Rola ešte nebola priradená.',

	'SELECTED_FORUM_NOT_EXIST'		=> 'Vybrané fórum (fóra) neexistujú.',
	'SELECTED_GROUP_NOT_EXIST'		=> 'Vybraná skupina (skupiny) neexistujú.',
	'SELECTED_USER_NOT_EXIST'		=> 'Vybraný používateľ (užívatelia) neexistujú.',
	'SELECT_FORUM_SUBFORUM_EXPLAIN'	=> 'Fórum, ktoré tu zvolíte, bude mať zahrnuté aj všetky subfóra.',
	'SELECT_ROLE'					=> 'Vybrať rolu…',
	'SELECT_TYPE'					=> 'Vybrať druh',
	'SET_PERMISSIONS'				=> 'Nastaviť oprávnenia',
	'SET_ROLE_PERMISSIONS'			=> 'Nastaviť oprávnenia role',
	'SET_USERS_PERMISSIONS'			=> 'Nastaviť oprávnenia používateľa',
	'SET_USERS_FORUM_PERMISSIONS'	=> 'Nastavenie oprávnení používateľa pre fóra',

	'TRACE_DEFAULT'					=> 'Oprávnenie má predvolenú hodnotu <strong>NIE</strong> (bez oprávnení), takže oprávnenie môže byť prepísané inými nastaveniami.',
	'TRACE_FOR'						=> 'Sledovať pre',
	'TRACE_GLOBAL_SETTING'			=> '%s (globálne)',
	'TRACE_GROUP_NEVER_TOTAL_NEVER'	=> 'Oprávnenie tejto skupiny je nastavené na <strong>NIKDY</strong> ako výsledné oprávnenie, teda je táto hodnota ponechaná.',
	'TRACE_GROUP_NEVER_TOTAL_NEVER_LOCAL'	=> 'Oprávnenie tejto skupiny pre toto fórum je nastavené na <strong>NIKDY</strong> ako výsledné oprávnenie, preto je táto hodnota ponechaná.',
	'TRACE_GROUP_NEVER_TOTAL_NO'	=> 'Oprávnenie tejto skupiny je nastavené na <strong>NIKDY</strong>, čo sa stáva novou výslednou hodnotou, pretože hodnota zatiaľ nebola nastavená (bola nastavená na <strong>NIE</strong>).',
	'TRACE_GROUP_NEVER_TOTAL_NO_LOCAL'	=> 'Oprávnenie tejto skupiny pre toto fórum je nastavené na <strong>NIKDY</strong>, čo sa stáva novou výslednou hodnotou, pretože hodnota zatiaľ nebola nastavená (bola nastavená na <strong>NIE</strong>).',
	'TRACE_GROUP_NEVER_TOTAL_YES'	=> 'Oprávnenie tejto skupiny je nastavené na <strong>NIKDY</strong>, čo zmení nastavenie oprávnení pre tohoto používateľa z <strong>ÁNO</strong> na <strong>NIKDY</strong>',
	'TRACE_GROUP_NEVER_TOTAL_YES_LOCAL'	=> 'Oprávnenie tejto skupiny pre toto fórum je nastavené na <strong>NIKDY</strong>, čo zmení nastavenie oprávnenia pre tohto používateľa z <strong>ÁNO</strong> na <strong>NIKDY</strong>.',
	'TRACE_GROUP_NO'				=> 'Pre túto skupinu je oprávnenie nastavené na <strong>NIE</strong>, preto je ponechaná pôvodná hodnota.',
	'TRACE_GROUP_NO_LOCAL'			=> 'Pre túto skupinu pre toto fóruv je oprávnenie nastavené na <strong>NIE</strong>, preto je ponechaná pôvodná hodnota.',
	'TRACE_GROUP_YES_TOTAL_NEVER'	=> 'Oprávnenie tejto skupiny je nastavené na <strong>ÁNO</strong>, ale nastavenie oprávnení <strong>NIKDY</strong> nemôžete prepísať.',
	'TRACE_GROUP_YES_TOTAL_NEVER_LOCAL'	=> 'Oprávnenie tejto skupiny pre toto fórum je nastavené na <strong>ÁNO</strong>, ale nastavenie oprávnení <strong>NIKDY</strong> nemôžete prepísať.',
	'TRACE_GROUP_YES_TOTAL_NO'		=> 'Oprávnenia tejto skupiny je nastavené na <strong>ÁNO</strong>, čo sa stáva novou výslednou hodnotou, pretože hodnota zatiaľ nebola nastavená (bola nastavená na <strong>NIE</strong>).',
	'TRACE_GROUP_YES_TOTAL_NO_LOCAL'	=> 'Oprávnenia tejto skupiny pre toto fórum je nastavené na <strong>ÁNO</strong>, čo sa stáva novou výslednou hodnotou, pretože hodnota zatiaľ nebola nastavená (bola nastavená na <strong>NIE</strong>).',
	'TRACE_GROUP_YES_TOTAL_YES'		=> 'Oprávnenie tejto skupiny je nastavené na <strong>ÁNO</strong> a výsledné oprávnenia je už taktiež nastavené na <strong>ÁNO</strong>, takže pôvodná hodnota je ponechaná.',
	'TRACE_GROUP_YES_TOTAL_YES_LOCAL'	=> 'Oprávnenie tejto skupiny pre toto fórum je nastavené na <strong>ÁNO</strong> a výsledné oprávnenie je už taktiež nastavené na <strong>ÁNO</strong>, takže pôvodná hodnota je ponechaná.',
	'TRACE_PERMISSION'				=> 'Sledovať oprávnenie - %s',
	'TRACE_RESULT'					=> 'Sledovať výsledok',
	'TRACE_SETTING'					=> 'Nastavenie sledovania',

	'TRACE_USER_GLOBAL_YES_TOTAL_YES'		=> 'Oprávnenie nezávislé na fóre má hodnotu <strong>ÁNO</strong>, ale výsledná hodnota už má tiež hodnotu <strong>ÁNO</strong>, a tak sa teda nič nemení. %sSledovať globálne oprávnenia%s',
	'TRACE_USER_GLOBAL_YES_TOTAL_NEVER'		=> 'Oprávnenie nezávislé na fóre má hodnotu <strong>ÁNO</strong>, čo prepisujú miestnu hodnotu <strong>NIKDY</strong>. %sSledovať globálne oprávnenia%s',
	'TRACE_USER_GLOBAL_NEVER_TOTAL_KEPT'	=> 'Oprávnenie nezávislé na fóre má hodnotu <strong>NIKDY</strong>, čo neovplyvňuje miestne oprávnenie. %sSledovať globálne oprávnenia%s',

	'TRACE_USER_FOUNDER'					=> 'Tento používateľ je zakladateľ, teda oprávnenia administrátora sú vždy nastavené na <strong>ÁNO</strong>.',
	'TRACE_USER_KEPT'						=> 'Oprávnenie používateľa je nastavené na <strong>NIE</strong>, pôvodná hodnota je teda ponechaná.',
	'TRACE_USER_KEPT_LOCAL'					=> 'Oprávnenie používateľa pre toto fórum je nastavené na <strong>NIE</strong>, pôvodná hodnota je teda ponechaná.',
	'TRACE_USER_NEVER_TOTAL_NEVER'			=> 'Oprávnenie používateľa je nastavené na <strong>NIKDY</strong> a výsledná hodnota je nastavená na <strong>NIKDY</strong>, nič sa teda nemení.',
	'TRACE_USER_NEVER_TOTAL_NEVER_LOCAL'	=> 'Oprávnenie používateľa pre toto fórum je nastavené na <strong>NIKDY</strong> a výsledná hodnota je nastavená na <strong>NIKDY</strong>, nič se teda nemení.',
	'TRACE_USER_NEVER_TOTAL_NO'				=> 'Oprávnenie používateľa je nastavené na <strong>NIKDY</strong>, čo sa stáva výslednou hodnotou, pretože bolo doteraz nastavené len na NIE.',
	'TRACE_USER_NEVER_TOTAL_NO_LOCAL'		=> 'Oprávnenie používateľa pre toto fórum je nastavené na <strong>NIKDY</strong>, čo sa stáva výslednou hodnotou, pretože bolo doteraz nastavená len na NIE.',
	'TRACE_USER_NEVER_TOTAL_YES'			=> 'Oprávnenie používateľa je nastavené na <strong>NIKDY</strong> a nahradzuje predošlú hodnotu <strong>ÁNO</strong>.',
	'TRACE_USER_NEVER_TOTAL_YES_LOCAL'		=> 'Oprávnenie používateľa pre toto fórum je nastavené na <strong>NIKDY</strong> a nahradzuje predošlú hodnotu <strong>ÁNO</strong>.',
	'TRACE_USER_NO_TOTAL_NO'				=> 'Oprávnenie používateľa je nastavené na <strong>NIE</strong> a výsledná hodnota už obsahuje <strong>NIE</strong>, hodnota sa teda mení na <strong>NIKDY</strong>.',
	'TRACE_USER_NO_TOTAL_NO_LOCAL'			=> 'Oprávnenie používateľa pre toto fórum je nastavené na <strong>NIE</strong> a výsledná hodnota už obsahuje NIE, hodnota sa teda mení na <strong>NIKDY</strong>.',
	'TRACE_USER_YES_TOTAL_NEVER'			=> 'Oprávnenie používateľa je nastavené na <strong>ÁNO</strong>, ale výsledné oprávnenie nastavené na <strong>NIKDY</strong> sa nedá prepísať.',
	'TRACE_USER_YES_TOTAL_NEVER_LOCAL'		=> 'Oprávnenie používateľa pre toto fórum je nastavené na <strong>ÁNO</strong>, ale výsledné oprávnenie nastavené na <strong>NIKDY</strong> sa nedá prepísať.',
	'TRACE_USER_YES_TOTAL_NO'				=> 'Oprávnenie používateľa je nastavené na <strong>ÁNO</strong>, čo sa stáva novou výslednou hodnotou, pretože posledná nastavená hodnota bola <strong>NIE</strong>.',
	'TRACE_USER_YES_TOTAL_NO_LOCAL'			=> 'Oprávnenie používateľa pre toto fórum je nastavené na <strong>ÁNO</strong>, čo sa stáva novou výslednou hodnotou, pretože posledná nastavená bola <strong>NIE</strong>.',
	'TRACE_USER_YES_TOTAL_YES'				=> 'Oprávnenie používateľa je nastavené na <strong>ÁNO</strong> a výsledná hodnota je nastavená na <strong>ÁNO</strong>, nič sa teda nemení.',
	'TRACE_USER_YES_TOTAL_YES_LOCAL'		=> 'Oprávnenie používateľa pre toto fórum je nastavené na <strong>ÁNO</strong> a výsledná hodnota je nastavená na <strong>ÁNO</strong>, nič se teda nemení.',
	'TRACE_WHO'								=> 'Kto',
	'TRACE_TOTAL'							=> 'Výsledné',

	'USERS_NOT_ASSIGNED'			=> 'Žiadny užívatelia nebol priradení k tejto role',
	'USER_IS_MEMBER_OF_DEFAULT'		=> 'je členom nasledujúcich prednastavených skupín',
	'USER_IS_MEMBER_OF_CUSTOM'		=> 'je členom nasledujúcich používateľom definovaných skupín',

	'VIEW_ASSIGNED_ITEMS'	=> 'Zobraziť pridelené položky',
	'VIEW_LOCAL_PERMS'		=> 'Miestne oprávnenia',
	'VIEW_GLOBAL_PERMS'		=> 'Globálne oprávnenia',
	'VIEW_PERMISSIONS'		=> 'Zobraziť oprávnenia',

	'WRONG_PERMISSION_TYPE'				=> 'Bol zvolený zlý druh oprávnení.',
	'WRONG_PERMISSION_SETTING_FORMAT'	=> 'Nastavenia oprávnení sú v zlom formáte, phpBB ich nemôže správne spracovať.',
));

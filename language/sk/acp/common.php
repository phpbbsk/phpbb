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

// Common
$lang = array_merge($lang, array(
	'ACP_ADMINISTRATORS'		=> 'Administrátori',
	'ACP_ADMIN_LOGS'			=> 'Administračný log',
	'ACP_ADMIN_ROLES'			=> 'Administrátorské roly',
	'ACP_ATTACHMENTS'			=> 'Prílohy',
	'ACP_ATTACHMENT_SETTINGS'	=> 'Nastavenie príloh',
	'ACP_AUTH_SETTINGS'			=> 'Autentifikácia',
	'ACP_AUTOMATION'			=> 'Automatizácia',
	'ACP_AVATAR_SETTINGS'		=> 'Nastavenie avatarov',

	'ACP_BACKUP'				=> 'Záloha',
	'ACP_BAN'					=> 'Banovanie',
	'ACP_BAN_EMAILS'			=> 'Ban e-mailových adries',
	'ACP_BAN_IPS'				=> 'Ban IP adries',
	'ACP_BAN_USERNAMES'			=> 'Ban užívateľských mien',
	'ACP_BBCODES'				=> 'BB kódy',
	'ACP_BOARD_CONFIGURATION'	=> 'Konfigurácia fóra',
	'ACP_BOARD_FEATURES'		=> 'Vlastnosti fóra',
	'ACP_BOARD_MANAGEMENT'		=> 'Správa fóra',
	'ACP_BOARD_SETTINGS'		=> 'Nastavenia fóra',
	'ACP_BOTS'					=> 'Boti/vyhľadávače',

	'ACP_CAPTCHA'				=> 'CAPTCHA',

	'ACP_CAT_CUSTOMISE'			=> 'Prispôsobenie',
	'ACP_CAT_DATABASE'			=> 'Databáza',
	'ACP_CAT_DOT_MODS'			=> 'Rozšírenia',
	'ACP_CAT_FORUMS'			=> 'Fóra',
	'ACP_CAT_GENERAL'			=> 'Všeobecné',
	'ACP_CAT_MAINTENANCE'		=> 'Správa',
	'ACP_CAT_PERMISSIONS'		=> 'Oprávnenia',
	'ACP_CAT_POSTING'			=> 'Prispievanie',
	'ACP_CAT_STYLES'			=> 'Štýly',
	'ACP_CAT_SYSTEM'			=> 'Systém',
	'ACP_CAT_USERGROUP'			=> 'Užívatelia a skupiny',
	'ACP_CAT_USERS'				=> 'Užívatelia',
	'ACP_CLIENT_COMMUNICATION'	=> 'Komunikácia klientov',
	'ACP_COOKIE_SETTINGS'		=> 'Nastavenia cookies',
	'ACP_CONTACT'				=> 'Stránka s kontaktom',
	'ACP_CONTACT_SETTINGS'		=> 'Nastavenie stránky s kontaktom',
	'ACP_CRITICAL_LOGS'			=> 'Záznamy chýb',
	'ACP_CUSTOM_PROFILE_FIELDS'	=> 'Vlastné polia v profile',

	'ACP_DATABASE'				=> 'Správa databázy',
	'ACP_DISALLOW'				=> 'Zakázať',
	'ACP_DISALLOW_USERNAMES'	=> 'Zakázať užívateľské mená',
	
	'ACP_EMAIL_SETTINGS'		=> 'Nastavenia pre e-mail',
	'ACP_EXTENSION_GROUPS'		=> 'Správa skupín prípon príloh',
	'ACP_EXTENSION_MANAGEMENT'	=> 'Extension management',
	'ACP_EXTENSIONS'			=> 'Správa rozšírení',

	'ACP_FORUM_BASED_PERMISSIONS'	=> 'Oprávnenia založené na fórach',
	'ACP_FORUM_LOGS'				=> 'Záznamy fór',
	'ACP_FORUM_MANAGEMENT'			=> 'Správa fór',
	'ACP_FORUM_MODERATORS'			=> 'Moderátori fór',
	'ACP_FORUM_PERMISSIONS'			=> 'Oprávnenia fór',
	'ACP_FORUM_PERMISSIONS_COPY'	=> 'Kopírovať oprávnenia fóra',
	'ACP_FORUM_ROLES'				=> 'Roly fór',

	'ACP_GENERAL_CONFIGURATION'		=> 'Všeobecná konfigurácia',
	'ACP_GENERAL_TASKS'				=> 'Všeobecné úlohy',
	'ACP_GLOBAL_MODERATORS'			=> 'Globálni moderátori',
	'ACP_GLOBAL_PERMISSIONS'		=> 'Globálne oprávnenia',
	'ACP_GROUPS'					=> 'Skupiny',
	'ACP_GROUPS_FORUM_PERMISSIONS'	=> 'Skupinové oprávnenia fór',
	'ACP_GROUPS_MANAGE'				=> 'Spravovať skupiny',
	'ACP_GROUPS_MANAGEMENT'			=> 'Správa skupiny',
	'ACP_GROUPS_PERMISSIONS'		=> 'Oprávnenia skupín',
	'ACP_GROUPS_POSITION'			=> 'Manage group positions',

	'ACP_HELP_PHPBB'			=> 'Podporte phpBB',

	'ACP_ICONS'					=> 'Ikony tém',
	'ACP_ICONS_SMILIES'			=> 'Ikony tém/smajlíky',
	'ACP_INACTIVE_USERS'		=> 'Neaktívni užívatelia',
	'ACP_INDEX'					=> 'Obsah administrácie',

	'ACP_JABBER_SETTINGS'		=> 'Nastavenia Jabbera',

	'ACP_LANGUAGE'				=> 'Správa jazykov',
	'ACP_LANGUAGE_PACKS'		=> 'Jazykové balíky',
	'ACP_LOAD_SETTINGS'			=> 'Nastavenia zaťaženia',
	'ACP_LOGGING'				=> 'Zaznamenávam',

	'ACP_MAIN'					=> 'Obsah administrácie',
	
	'ACP_MANAGE_ATTACHMENTS'			=> 'Správa príloh',
	'ACP_MANAGE_ATTACHMENTS_EXPLAIN'	=> 'Here you can list and delete files attached to posts and private messages.',
	
	'ACP_MANAGE_EXTENSIONS'		=> 'Spravovať typy súborov',
	'ACP_MANAGE_FORUMS'			=> 'Spravovať fóra',
	'ACP_MANAGE_RANKS'			=> 'Spravovať hodnosti',
	'ACP_MANAGE_REASONS'		=> 'Spravovať dôvody hlásení/zamietnutí',
	'ACP_MANAGE_USERS'			=> 'Spravovať užívateľov',
	'ACP_MASS_EMAIL'			=> 'Hromadný e-mail',
	'ACP_MESSAGES'				=> 'Správy',
	'ACP_MESSAGE_SETTINGS'		=> 'Nastavenia súkromných správ',
	'ACP_MODULE_MANAGEMENT'		=> 'Správa modulov',
	'ACP_MOD_LOGS'				=> 'Moderátorský záznam',
	'ACP_MOD_ROLES'				=> 'Moderátorské roly',

	'ACP_NO_ITEMS'				=> 'Zatiaľ tu nie sú žiadne predmety.',

	'ACP_ORPHAN_ATTACHMENTS'	=> 'Nepripojené prílohy',

	'ACP_PERMISSIONS'			=> 'Oprávnenia',
	'ACP_PERMISSION_MASKS'		=> 'Masky oprávnení',
	'ACP_PERMISSION_ROLES'		=> 'Roly oprávnení',
	'ACP_PERMISSION_TRACE'		=> 'Sledovanie oprávnení',
	'ACP_PHP_INFO'				=> 'Informácie o PHP',
	'ACP_POST_SETTINGS'			=> 'Nastavenia príspevkov',
	'ACP_PRUNE_FORUMS'			=> 'Prečistiť fóra',
	'ACP_PRUNE_USERS'			=> 'Prečistiť užívateľov',
	'ACP_PRUNING'				=> 'Prečisťovanie',

	'ACP_QUICK_ACCESS'			=> 'Rýchly prístup',

	'ACP_RANKS'					=> 'Hodnosti',
	'ACP_REASONS'				=> 'Dôvody schválení/zamietnutí',
	'ACP_REGISTER_SETTINGS'		=> 'Nastavenia registrácie užívateľov',

	'ACP_RESTORE'				=> 'Obnoviť',

	'ACP_FEED'					=> 'Exporty ATOM',
	'ACP_FEED_SETTINGS'			=> 'Nastavenia exportov',

	'ACP_SEARCH'				=> 'Nastavenie vyhľadávania',
	'ACP_SEARCH_INDEX'			=> 'Vyhľadávací index',
	'ACP_SEARCH_SETTINGS'		=> 'Nastavenia vyhľadávania',

	'ACP_SECURITY_SETTINGS'		=> 'Nastavenia zabezpečenia',
	'ACP_SERVER_CONFIGURATION'	=> 'Konfigurácia servera',
	'ACP_SERVER_SETTINGS'		=> 'Nastavenia servera',
	'ACP_SIGNATURE_SETTINGS'	=> 'Nastavenia podpisov',
	'ACP_SMILIES'				=> 'Smajlíky',
	'ACP_STYLE_MANAGEMENT'		=> 'Správa štýlov',
	'ACP_STYLES'				=> 'Štýly',
	'ACP_STYLES_CACHE'			=> 'Vyprázdniť medzipamäť',
	'ACP_STYLES_INSTALL'		=> 'Inštalácia štýlov',

	'ACP_SUBMIT_CHANGES'		=> 'Odoslať zmeny',

	'ACP_TEMPLATES'				=> 'Templaty',
	'ACP_THEMES'				=> 'Témy',

	'ACP_UPDATE'					=> 'Aktualizovanie',
	'ACP_USERS_FORUM_PERMISSIONS'	=> 'Užívateľské oprávnenia fór',
	'ACP_USERS_LOGS'				=> 'Užívateľský záznam',
	'ACP_USERS_PERMISSIONS'			=> 'Oprávnenia užívateľov',
	'ACP_USER_ATTACH'				=> 'Prílohy',
	'ACP_USER_AVATAR'				=> 'Avatar',
	'ACP_USER_FEEDBACK'				=> 'Spätná väzba',
	'ACP_USER_GROUPS'				=> 'Skupiny',
	'ACP_USER_MANAGEMENT'			=> 'Správa užívateľov',
	'ACP_USER_OVERVIEW'				=> 'Prehľad',
	'ACP_USER_PERM'					=> 'Oprávnenia',
	'ACP_USER_PREFS'				=> 'Nastavenia',
	'ACP_USER_PROFILE'				=> 'Profil',
	'ACP_USER_RANK'					=> 'Hodnosť',
	'ACP_USER_ROLES'				=> 'Užívateľské roly',
	'ACP_USER_SECURITY'				=> 'Bezpečnosť užívateľa',
	'ACP_USER_SIG'					=> 'Podpis',
	'ACP_USER_WARNINGS'				=> 'Varovania',

	'ACP_VC_SETTINGS'					=> 'Ochrana proti Spambotom',
	'ACP_VC_CAPTCHA_DISPLAY'			=> 'Náhľad obrázku CAPTCHA',
	'ACP_VERSION_CHECK'					=> 'Skontrolovať aktualizácie',
	'ACP_VIEW_ADMIN_PERMISSIONS'		=> 'Zobraziť administračné oprávnenia',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS'	=> 'Zobraziť oprávnenia moderovania fór',
	'ACP_VIEW_FORUM_PERMISSIONS'		=> 'Zobraziť oprávnenia založené na fórach',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS'	=> 'Zobraziť globálne oprávnenia moderovania',
	'ACP_VIEW_USER_PERMISSIONS'			=> 'Zobraziť oprávnenia založené na užívateľoch',

	'ACP_WORDS'					=> 'Cenzúra slov',

	'ACTION'				=> 'Akcia',
	'ACTIONS'				=> 'Akcie',
	'ACTIVATE'				=> 'Aktivovať',
	'ADD'					=> 'Pridať',
	'ADMIN'					=> 'Administrácia',
	'ADMIN_INDEX'			=> 'Obsah administrácie',
	'ADMIN_PANEL'			=> 'Administrácia fóra',

	'ADM_LOGOUT'			=> 'ACP&nbsp;Odhlásiť',
	'ADM_LOGGED_OUT'		=> 'Úspešne ste sa odhlásili z administračného kontrolného panela',

	'BACK'					=> 'Späť',

	'CANNOT_CHANGE_FILE_GROUP'	=> 'Nie je možné zmeniť skupinu pre tento súbor',
	'CANNOT_CHANGE_FILE_PERMISSIONS'	=> 'Nie je možné zmeniť oprávnenia tohto súboru',
	'CANNOT_COPY_FILES'		=> 'Nie je možné kopírovať súbory',
	'CANNOT_CREATE_SYMLINK'	=> 'Nie je možné vytvoriť odkaz na súbor',
	'CANNOT_DELETE_FILES'	=> 'Nie je možné odstrániť súbory zo systému',
	'CANNOT_DUMP_FILE'		=> 'Nie je možné vypísať súbor',
	'CANNOT_MIRROR_DIRECTORY'	=> 'Nie je možné zrkadliť adresár',
	'CANNOT_RENAME_FILE'	=> 'Nie je možné premenovať súbor zo systému',
	'CANNOT_TOUCH_FILES'	=> 'Nie je možné zistiť, či súbor existuje',

	'CONTAINER_EXCEPTION' => 'V phpBB nastala chyba pri vytváraní kontajnera kvôli nainštalovanému rozšíreniu. Preventívne boli dočasne deaktivované všetky rozšírenia. Prosíme, skúste prečistiť cache. Všetky rozšírenia budú automaticky aktivované akonáhle sa chyba vyrieši. Ak táto chyba pretrváva, prosíme, navštívte <a href="https://www.phpbb.com/support">phpBB.com</a> (v Angličtine) a požiadajte o pomoc.',
	'EXCEPTION' => 'Exception',

	'COLOUR_SWATCH'			=> 'Vzorník bezpečných farieb',
	'CONFIG_UPDATED'		=> 'Nastavenie bolo úspešne aktualizované.',
	'CRON_LOCK_ERROR'		=> 'Nedá sa získať zámok cron-u.',
	'CRON_NO_SUCH_TASK'		=> 'Nie je možné nájsť cron “%s”.',
	'CRON_NO_TASK'			=> 'Momentálne nepotrebuje bežať žiadna cron úloha.',
	'CRON_NO_TASKS'			=> 'Nenašli sa žiadne cron úlohy.',
	'CURRENT_VERSION'		=> 'Aktuálna verzia',

	'DEACTIVATE'				=> 'Deaktivovať',
	'DIRECTORY_DOES_NOT_EXIST'	=> 'Vložená cesta "%s" neexistuje.',
	'DIRECTORY_NOT_DIR'			=> 'Vložená cesta "%s" nie je adresár.',
	'DIRECTORY_NOT_WRITABLE'	=> 'Vložená cesta "%s" nie je zapisovateľná.',
	'DISABLE'					=> 'Zakázať',
	'DOWNLOAD'					=> 'Stiahnuť',
	'DOWNLOAD_AS'				=> 'Stiahnuť ako',
	'DOWNLOAD_STORE'			=> 'Stiahnuť, alebo uložiť súbor',
	'DOWNLOAD_STORE_EXPLAIN'	=> 'Môžete priamo stiahnuť súbor, alebo ho uložiť vo svojom <samp>store/</samp> adresári.',
	'DOWNLOADS'					=> 'Stiahnutia',

	'EDIT'					=> 'Upraviť',
	'ENABLE'				=> 'Povoliť',
	'EXPORT_DOWNLOAD'		=> 'Stiahnuť',
	'EXPORT_STORE'			=> 'Uložiť',

	'GENERAL_OPTIONS'		=> 'Všeobecné možnosti',
	'GENERAL_SETTINGS'		=> 'Všeobecné nastavenia',
	'GLOBAL_MASK'			=> 'Globálna maska oprávnení',

	'INSTALL'				=> 'Inštalovať',
	'IP'					=> 'Užívateľova IP',
	'IP_HOSTNAME'			=> 'IP adresy, alebo názvy hostiteľov',

	'LATEST_VERSION'		=> 'Posledná verzia',
	'LOAD_NOTIFICATIONS'			=> 'Display Notifications',
	'LOAD_NOTIFICATIONS_EXPLAIN'	=> 'Display the notifications list on every page (typically in the header).',
	'LOGGED_IN_AS'			=> 'Ste prihlásený ako:',
	'LOGIN_ADMIN'			=> 'Pre správu fóra musíte byť prihlásený a oprávnený užívateľ.',
	'LOGIN_ADMIN_CONFIRM'	=> 'Pre správu fóra sa musíte znovu prihlásiť.',
	'LOGIN_ADMIN_SUCCESS'	=> 'Úspešne ste sa prihlásili, a teraz budete presmerovaný na Administráciu fóra',
	'LOOK_UP_FORUM'			=> 'Vyberte fórum',
	'LOOK_UP_FORUMS_EXPLAIN'=> 'Môžete vybrať viac než jedno fórum',

	'MANAGE'				=> 'Spravovať',
	'MENU_TOGGLE'			=> 'Zobraziť, alebo skryť postranné menu',
	'MORE'					=> 'Viac',			// Not used at the moment
	'MORE_INFORMATION'		=> 'Viac informácií »',
	'MOVE_DOWN'				=> 'Posunúť dolu',
	'MOVE_UP'				=> 'Posunúť hore',

	'NOTIFY'				=> 'Upozornenie',
	'NO_ADMIN'				=> 'Nemáte oprávnenie spravovať toto fórum.',
	'NO_EMAILS_DEFINED'		=> 'Nebola nájdená žiadna platná e-mailová adresa',
	'NO_FILES_TO_DELETE'	=> 'Prílohy, ktoré ste označili na vymazanie neexistujú.',
	'NO_PASSWORD_SUPPLIED'	=> 'Musíte zadať heslo pre prístup do administrácie fóra.',

	'OFF'					=> 'Vypnuté',
	'ON'					=> 'Zapnuté',

	'PARSE_BBCODE'						=> 'Spracovávať BBCode',
	'PARSE_SMILIES'						=> 'Spracovávať smajlíkov',
	'PARSE_URLS'						=> 'Spracovávať odkazy',
	'PERMISSIONS_TRANSFERRED'			=> 'Oprávnenia boli prenesené',
	'PERMISSIONS_TRANSFERRED_EXPLAIN'	=> 'Teraz máte oprávnenia %1$s. Môžete prechádzať fórum s užívateľským oprávnením, ale nemôžete vstúpiť do administrácie fóra, pretože administrátorské oprávnenia neboli prenesené. Môžete sa kedykoľvek <a href="%2$s"><strong>vrátiť k vašim oprávneniam</strong></a>.',
	'PROCEED_TO_ACP'					=> '%sPokračovať na Administráciu fóra%s',

	'RELEASE_ANNOUNCEMENT'		=> 'Oznámenie',
	'REMIND'							=> 'Pripomenúť',
	'REPARSE_LOCK_ERROR'				=> 'Reparsovanie už prebieha v inom procese.',
	'RESYNC'							=> 'Znovu synchronizovať',

	'RUNNING_TASK'			=> 'Beží úloha: %s.',
	'SELECT_ANONYMOUS'		=> 'Vybrať anonymného užívateľa',
	'SELECT_OPTION'			=> 'Vybrať možnosť',

	'SETTING_TOO_LOW'		=> 'Vložená hodnota pre nastavenie „%1$s“ je príliš malá. Minimálna povolená hodnota je %2$d.',
	'SETTING_TOO_BIG'		=> 'Vložená hodnota pre nastavenie „%1$s“ je príliš vysoká. Najväčšia povolená hodnota je %2$d.',
	'SETTING_TOO_LONG'		=> 'Vložená hodnota pre nastavenie „%1$s“ je príliš dlhá. Najväčšia povolená dĺžka je %2$d.',
	'SETTING_TOO_SHORT'		=> 'Vložená hodnota pre nastavenie „%1$s“ nieje dost dlhá. Minimálna povolená dĺžka je %2$d.',

	'SHOW_ALL_OPERATIONS'	=> 'Ukázať všetky operácie',

	'TASKS_NOT_READY'			=> 'Nepripravené úlohy:',
	'TASKS_READY'			=> 'Pripravené úlohy:',
	'TOTAL_SIZE'			=> 'Celková veľkosť',

	'UCP'					=> 'Užívateľský ovládací panel',
	'USERNAMES_EXPLAIN'		=> 'Vložte každé užívateľské meno na nový riadok',
	'USER_CONTROL_PANEL'	=> 'Užívateľský ovládací panel',

	'UPDATE_NEEDED'			=> 'Fórum nie je aktuálne.',
	'UPDATE_NOT_NEEDED'		=> 'Fórum je aktuálne.',
	'UPDATES_AVAILABLE'		=> 'Sú dostupné aktualizácie:',

	'WARNING'				=> 'Upozornenie',
));

// PHP info
$lang = array_merge($lang, array(
	'ACP_PHP_INFO_EXPLAIN'	=> 'Tato stránka vypisuje informácie o verzii PHP inštalovanej na tomto serveri. Obsahuje detaily o načítaných moduloch, dostupných premenných a predvolených nastaveniach. Tieto informácie môžu byť užitočné pri riešení problémov. Berte na vedomie, že niektoré hostingy môžu z bezpečnostných dôvodov obmedzovať informácie, ktoré sa vám zobrazia. Odporúčame vám, aby ste nikde nezverejňovali zobrazené informácie. Zverejnite ich, iba ak sa na ne pýtajú <a href="https://www.phpbb.com/about/team/">oficiálni členovia tímu</a> na poradných fórach.',

	'NO_PHPINFO_AVAILABLE'	=> 'Nedajú sa zistiť informácie o PHP. Funkcia phpinfo() je vypnutá z bezpečnostných dôvodov.',
));

// Logs
$lang = array_merge($lang, array(
	'ACP_ADMIN_LOGS_EXPLAIN'	=> 'Tento záznam vypisuje všetky činnosti vykonané administrátormi fóra. Môžete ich zoradiť podľa mena, dátumu, IP, alebo akcie. Pokiaľ máte príslušné oprávnenia, môžete zmazať jednotlivé záznamy, alebo celý záznam.',
	'ACP_CRITICAL_LOGS_EXPLAIN'	=> 'Tu sú zobrazené všetky činnosti, ktoré spravilo fórum samo. Tento záznam vám poskytuje informácie, ktoré môžete použiť pre riešenie špecifických problémov, napr. nedoručovanie e-mailov. Môžete ich zoradiť podľa mena, dátumu, IP, alebo akcie. Pokiaľ máte príslušné oprávnenia, môžete zmazať jednotlivé záznamy, alebo celý záznam.',
	'ACP_MOD_LOGS_EXPLAIN'		=> 'Tento záznam vypisuje všetky činnosti vykonané na fórach, témach a príspevkoch, tak isto ako akcie vykonané na užívateľoch moderátormi, vrátane banovania. Môžete ich zoradiť podľa mena, dátumu, IP, alebo akcie. Pokiaľ máte príslušné oprávnenia, môžete zmazať jednotlivé záznamy, alebo celý záznam.',
	'ACP_USERS_LOGS_EXPLAIN'	=> 'Toto vypisuje všetky činnosti uskutočnené užívateľom, alebo na užívateľoch (oznámenia, varovania a užívateľské poznámky).',
	'ALL_ENTRIES'				=> 'Všetky záznamy',

	'DISPLAY_LOG'	=> 'Zobraziť záznamy za posledných',

	'NO_ENTRIES'	=> 'Žiadne záznamy pre toto obdobie',

	'SORT_IP'		=> 'IP adresa',
	'SORT_DATE'		=> 'Dátum',
	'SORT_ACTION'	=> 'Akcia záznamu',
));

// Index page
$lang = array_merge($lang, array(
	'ADMIN_INTRO'				=> 'Ďakujeme, že ste si zvolili phpBB ako riešenie pre vaše fórum. Táto obrazovka vám dá rýchly prehľad o rôznych štatistikách fóra. Odkazy na ľavej strane obrazovky vám dovoľujú spravovať všetky aspekty vášho fóra. Každá stránka obsahuje inštrukcie k použitiu.',
	'ADMIN_LOG'					=> 'Záznam administrátorských činností',
	'ADMIN_LOG_INDEX_EXPLAIN'	=> 'Tu je prehľad posledných piatich akcií vykonaných administrátormi. Úplný záznam si môžete zobraziť zvolením odpovedajúcej položky v menu, alebo kliknutím na nižšie uvedený odkaz.',
	'AVATAR_DIR_SIZE'			=> 'Veľkosť zložky s avatarmi',

	'BOARD_STARTED'		=> 'Dátum spustenia',
	'BOARD_VERSION'     => 'Verzia fóra',

	'DATABASE_SERVER_INFO'	=> 'Databázový server',
	'DATABASE_SIZE'			=> 'Veľkosť databázy',

	// Enviroment configuration checks, mbstring related
	'ERROR_MBSTRING_FUNC_OVERLOAD'					=> 'Funkcia zaťaženia nie je nastavená správne.',
	'ERROR_MBSTRING_FUNC_OVERLOAD_EXPLAIN'			=> '<var>mbstring.func_overload</var> musí byť nastavená na 0 alebo 4. Aktuálnu hodnotu môžete skontrolovať na stránke s <samp>PHP informáciami</samp>.',
	'ERROR_MBSTRING_ENCODING_TRANSLATION'			=> 'Transparentné kódovanie znakov nie je nastavené správne.',
	'ERROR_MBSTRING_ENCODING_TRANSLATION_EXPLAIN'	=> '<var>mbstring.encoding_translation</var> musí byť nastavená na 0. Aktuálnu hodnotu môžete skontrolovať na stránke s <samp>PHP informáciami</samp>.',
	'ERROR_MBSTRING_HTTP_INPUT'						=> 'Konverzia vstupných HTTP znakov nie je nastavené správne.',
	'ERROR_MBSTRING_HTTP_INPUT_EXPLAIN'				=> '<var>mbstring.http_input</var> musí byť nastavená na <samp>pass</samp>. Aktuálnu hodnotu môžete skontrolovať na stránke s <samp>PHP informáciami</samp>.',
	'ERROR_MBSTRING_HTTP_OUTPUT'					=> 'Konverzia výstupných HTTP znakov nie je nastavené správne.',
	'ERROR_MBSTRING_HTTP_OUTPUT_EXPLAIN'			=> '<var>mbstring.http_output</var> musí byť nastavená na <samp>pass</samp>. Aktuálnu hodnotu môžete skontrolovať na stránke s <samp>PHP informáciami</samp>.',

	'FILES_PER_DAY'		=> 'Príloh za deň',
	'FORUM_STATS'		=> 'Štatistiky fóra',

	'GZIP_COMPRESSION'	=> 'GZip kompresia',

	'NO_SEARCH_INDEX'	=> 'Vybraný vyhľadávací backend nemá vyhľadávací index.<br />Prosíme, vytvorte index pre “%1$s” v sekcii %2$svyhľadávací index%3$s.',
	'NOT_AVAILABLE'		=> 'Nedostupné',
	'NUMBER_FILES'		=> 'Počet príloh',
	'NUMBER_POSTS'		=> 'Počet príspevkov',
	'NUMBER_TOPICS'		=> 'Počet tém',
	'NUMBER_USERS'		=> 'Počet užívateľov',
	'NUMBER_ORPHAN'		=> 'Nepripojených príloh',

	'PHP_VERSION'		=> 'PHP verzia',
	'PHP_VERSION_OLD'	=> 'PHP verzia na tomto serveri (%1$s) v budúcnosti nebude podporovaná. Minimálna požadovaná verzia PHP bude %2$s. %3$sDetaily%4$s',

	'POSTS_PER_DAY'		=> 'Príspevkov za deň',

	'PURGE_CACHE'			=> 'Prečistiť medzipamäť',
	'PURGE_CACHE_CONFIRM'	=> 'Ste si istý, že chcete vyprázdniť medzipamäť?',
	'PURGE_CACHE_EXPLAIN'	=> 'Odstránenie všetkých položiek v medzipamäti zhŕňa akékoľvek súčasti šablón alebo dotazov na databázu.',
	'PURGE_CACHE_SUCCESS'	=> 'Medzipamäť bola úspešne vyprázdnená.',

	'PURGE_SESSIONS'			=> 'Prečistiť všetky sessions',
	'PURGE_SESSIONS_CONFIRM'	=> 'Naozaj chcete zmazať všetky sessions? Zmazaním odhlásite všetkych užívateľov.',
	'PURGE_SESSIONS_EXPLAIN'	=> 'Odstráni všetky sessions a odhlási všetkych užívateľov prečistením ich databázovej tabuľky.',
	'PURGE_SESSIONS_SUCCESS'	=> 'Sessions úspešne odstránené.',

	'RESET_DATE'					=> 'Resetovať dátum spustenia fóra',
	'RESET_DATE_CONFIRM'			=> 'Naozaj chcete vynulovať dátum založenia fóra?',
	'RESET_DATE_SUCCESS'				=> 'Dátum založenia fóra vynulovaný',
	'RESET_ONLINE'					=> 'Resetovať rekord online užívateľov',
	'RESET_ONLINE_CONFIRM'			=> 'Naozaj chcete vynulovať počítadlo rekordu naraz prítomných užívateľov?',
	'RESET_ONLINE_SUCCESS'				=> 'Počítadlo rekordu užívateľov vynulované',
	'RESYNC_POSTCOUNTS'				=> 'Resynchronizovať počty príspevkov',
	'RESYNC_POSTCOUNTS_EXPLAIN'		=> 'Len existujúce príspevky budú brané do úvahy. Prečistené príspevky nebudú počítané.',
	'RESYNC_POSTCOUNTS_CONFIRM'		=> 'Naozaj chcete synchronizovať počty príspevkov?',
	'RESYNC_POSTCOUNTS_SUCCESS'			=> 'Počty príspevkov resynchronizované',
	'RESYNC_POST_MARKING'			=> 'Resynchronizovať označené témy',
	'RESYNC_POST_MARKING_CONFIRM'	=> 'Naozaj chcete resynchronizovať označené témy?',
	'RESYNC_POST_MARKING_EXPLAIN'	=> 'Najskôr odznačí všetky témy, a potom správne označí tie, v ktorých užívateľ vykázal aktivitu v posledných šiestich mesiacoch.',
	'RESYNC_POST_MARKING_SUCCESS'	=> 'Označené témy resynchronizované',
	'RESYNC_STATS'					=> 'Resynchronizovať štatistiky',
	'RESYNC_STATS_CONFIRM'			=> 'Naozaj chcete resynchronizovať štatistiky?',
	'RESYNC_STATS_EXPLAIN'			=> 'Prepočíta celkový počet užívateľov, príspevkov, tém a príloh.',
	'RESYNC_STATS_SUCCESS'			=> 'Štatistiky resynchronizované',
	'RUN'							=> 'Spustiť teraz',

	'STATISTIC'					=> 'Štatistika',
	'STATISTIC_RESYNC_OPTIONS'	=> 'Resynchronizovať, alebo vynulovať štatistiky',

	'TIMEZONE_INVALID'	=> 'Vami vybraná časová zóna je neplatná.',
	'TIMEZONE_SELECTED'	=> '(momentálne označená)',
	'TOPICS_PER_DAY'	=> 'Tém za deň',

	'UPLOAD_DIR_SIZE'	=> 'Veľkosť všetkých príloh',
	'USERS_PER_DAY'		=> 'Užívateľov za deň',

	'VALUE'							=> 'Hodnota',
	'VERSIONCHECK_FAIL'				=> 'Nepodarilo sa zistiť informácie o poslednej verzii.',
	'VERSIONCHECK_FORCE_UPDATE'		=> 'Znovu zkontrolovať verziu',
	'VERSION_CHECK'					=> 'Kontrola verzie',
	'VERSION_CHECK_EXPLAIN'			=> 'Skontroluje, či je vaše phpBB aktuálne.',
	'VERSIONCHECK_INVALID_ENTRY'	=> 'Informácie z poslednej verzie obsahujú nepodporované prvky.',
	'VERSIONCHECK_INVALID_URL'		=> 'Informácie z poslednej verzie obsahujú neplatnú URL adresu.',
	'VERSIONCHECK_INVALID_VERSION'	=> 'Informácie z poslednej verzie obsahujú neplatnú verziu.',
	'VERSION_NOT_UP_TO_DATE_ACP'	=> 'Vaše phpBB nie je aktuálne.<br />Nižšie je odkaz na oznámenie o vydaní novšej verzie, ktoré obsahuje viac informácií a tiež inštrukcie k aktualizácii.',
	'VERSION_NOT_UP_TO_DATE_TITLE'	=> 'Vaše phpBB nie je aktuálne.',
	'VERSION_UP_TO_DATE_ACP'		=> 'Vaše phpBB je aktuálne. Momentálne nie sú dostupné žiadne aktualizácie.',
	'VIEW_ADMIN_LOG'				=> 'Zobraziť administrátorský záznam',
	'VIEW_INACTIVE_USERS'			=> 'Zobraziť neaktívnych užívateľov',

	'WELCOME_PHPBB'			=> 'Vitajte v phpBB',
	'WRITABLE_CONFIG'		=> 'Do vášho konfiguračného súboru (config.php) je možné zapisovať. Odporúčame vám zmeniť oprávnenia (CHMOD) tohto súboru na 640 alebo aspoň na 644 (napríklad: <a href="http://en.wikipedia.org/wiki/Chmod" rel="external">chmod</a> 640 config.php).',
));

// Inactive Users
$lang = array_merge($lang, array(
	'INACTIVE_DATE'					=> 'Dátum neaktivity',
	'INACTIVE_REASON'				=> 'Dôvod',
	'INACTIVE_REASON_MANUAL'		=> 'Účet deaktivovaný administrátorom',
	'INACTIVE_REASON_PROFILE'		=> 'Detaily v profile boli zmenené',
	'INACTIVE_REASON_REGISTER'		=> 'Nový registrovaný účet',
	'INACTIVE_REASON_REMIND'		=> 'Nútená reaktivácia účtu',
	'INACTIVE_REASON_UNKNOWN'		=> 'Neznámy',
	'INACTIVE_USERS'				=> 'Neaktívni užívatelia',
	'INACTIVE_USERS_EXPLAIN'		=> 'Toto je zoznam užívateľov, ktorí sa registrovali, ale ich účty nie sú aktívne. Môžete aktivovať, zmazať alebo upozorniť (odoslaním e-mailu) týchto užívateľov, pokiaľ chcete.',
	'INACTIVE_USERS_EXPLAIN_INDEX'	=> 'Toto je zoznam posledných 10 registrovaných užívateľov, ktorí majú neaktívne účty. Účty sú neaktívne buď pretože aktivácia účtu bola povolená v nastaveniach registrácie a účty týchto užívateľov ešte neboli aktivované, alebo pretože tieto účty boli deaktivované. Celý zoznam je dostupný na odkaze nižšie, skadiaľ môžete aktivovať, vymazať alebo upozorniť (poslaním emailu) týchto užívateľov ak si prajete.',

	'NO_INACTIVE_USERS'	=> 'Žiadny neaktívni užívatelia',

	'SORT_INACTIVE'		=> 'Dátum neaktivity',
	'SORT_LAST_VISIT'	=> 'Posledná návšteva',
	'SORT_REASON'		=> 'Dôvod',
	'SORT_REG_DATE'		=> 'Dátum registrácie',
	'SORT_LAST_REMINDER'=> 'Naposledy upozornený',
	'SORT_REMINDER'		=> 'Pripomenutie odoslané',

	'USER_IS_INACTIVE'		=> 'Užívateľ je neaktívny',
));

// Help support phpBB page
$lang = array_merge($lang, array(
	'EXPLAIN_SEND_STATISTICS'	=> 'Prosíme, pošlite informácie o vašom serveri a nastaveniach fóra do phpBB pre štatistickú analýzu. Všetky informácie, ktoré by mohli identifikovať vás alebo vašu stránku boli odstránené - dáta sú absolútne <strong>anonymné</strong>. Rozhodnutia o budúcich verziách phpBB sú založené na týchto informáciách. Štatistiky sú verejne dostupné. Taktiež tieto dáta zdieľame s projektom PHP, ktorý je programovací jazyk, z ktorého je phpBB vytvorené.',
	'EXPLAIN_SHOW_STATISTICS'	=> 'Použitím tlačidla nižšie si budete môcť prezrieť všetky premenné, ktoré budú poslané.',
	'DONT_SEND_STATISTICS'		=> 'Vráťte sa do administrácie, ak nechcete zaslať žiadne informácie.',
	'GO_ACP_MAIN'				=> 'Prejsť na hlavnú stránku administrácie',
	'HIDE_STATISTICS'			=> 'Skryť podrobnosti',
	'SEND_STATISTICS'			=> 'Odoslať štatistiky',
	'SEND_STATISTICS_LONG'		=> 'Odoslať štatistické informácie',
	'SHOW_STATISTICS'			=> 'Zobraziť podrobnosti',
	'THANKS_SEND_STATISTICS'	=> 'Ďakujeme za odoslanie vašich informácií.',
	'FAIL_SEND_STATISTICS'		=> 'phpBB nedokázalo poslať štatistiky',
));

// Log Entries
$lang = array_merge($lang, array(
	'LOG_ACL_ADD_USER_GLOBAL_U_'		=> '<strong>Pridané alebo upravené užívateľské oprávnenie užívateľa</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_U_'		=> '<strong>Pridané alebo upravené užívateľské oprávnenie skupiny</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_M_'		=> '<strong>Pridané alebo upravené globálne moderátorské oprávnenie užívateľa</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_M_'		=> '<strong>Pridané alebo upravené globálne moderátorské oprávnenie skupiny</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_A_'		=> '<strong>Pridané alebo upravené administrátorské oprávnenie užívateľa</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_A_'		=> '<strong>Pridané alebo upravené administrátorské oprávnenie skupiny</strong><br />» %s',

	'LOG_ACL_ADD_ADMIN_GLOBAL_A_'		=> '<strong>Pridaní alebo upravení Administrátori</strong><br />» %s',
	'LOG_ACL_ADD_MOD_GLOBAL_M_'			=> '<strong>Pridaní alebo upravení Globálni Moderátori</strong><br />» %s',

	'LOG_ACL_ADD_USER_LOCAL_F_'			=> '<strong>Pridaný alebo upravený prístup užívateľa k fóru</strong> od %1$s<br />» %2$s',
	'LOG_ACL_ADD_USER_LOCAL_M_'			=> '<strong>Pridaný alebo upravený prístup užívateľa k moderovaniu fóra</strong> od %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_F_'		=> '<strong>Pridaný alebo upravený prístup skupiny k fóru</strong> od %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_M_'		=> '<strong>Pridaný alebo upravený prístup skupiny k moderovaniu fóra</strong> od %1$s<br />» %2$s',

	'LOG_ACL_ADD_MOD_LOCAL_M_'			=> '<strong>Pridaní alebo upravení Moderátori</strong> od %1$s<br />» %2$s',
	'LOG_ACL_ADD_FORUM_LOCAL_F_'		=> '<strong>Pridané alebo upravené oprávnenia k fóru</strong> od %1$s<br />» %2$s',

	'LOG_ACL_DEL_ADMIN_GLOBAL_A_'		=> '<strong>Odstránení Administrátori</strong><br />» %s',
	'LOG_ACL_DEL_MOD_GLOBAL_M_'			=> '<strong>Odstránení Globálni Moderátori</strong><br />» %s',
	'LOG_ACL_DEL_MOD_LOCAL_M_'			=> '<strong>Odstránení Moderátori</strong> od %1$s<br />» %2$s',
	'LOG_ACL_DEL_FORUM_LOCAL_F_'		=> '<strong>Odstránené užívateľské/skupinové oprávnenia k fóru</strong> od %1$s<br />» %2$s',

	'LOG_ACL_TRANSFER_PERMISSIONS'		=> '<strong>Oprávnenia prenesené od</strong><br />» %s',
	'LOG_ACL_RESTORE_PERMISSIONS'		=> '<strong>Vlastné oprávnenie obnovené po používaní oprávnení od</strong><br />» %s',

	'LOG_ADMIN_AUTH_FAIL'		=> '<strong>Neúspešný pokus o prihlásenie administrátora</strong>',
	'LOG_ADMIN_AUTH_SUCCESS'	=> '<strong>Úspešné prihlásenie do administrácie</strong>',

	'LOG_ATTACHMENTS_DELETED'   => '<strong>Zmazané prílohy užívateľa</strong><br />» %s',

	'LOG_ATTACH_EXT_ADD'		=> '<strong>Pridané, alebo upravené typy súborov príloh</strong><br />» %s',
	'LOG_ATTACH_EXT_DEL'		=> '<strong>Odobraté typy súborov príloh</strong><br />» %s',
	'LOG_ATTACH_EXT_UPDATE'		=> '<strong>Aktualizácia typov súborov príloh</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_ADD'	=> '<strong>Pridaná skupina typov súborov</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_EDIT'	=> '<strong>Upravená skupina typov súborov</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_DEL'	=> '<strong>Odstránená skupina typov súborov</strong><br />» %s',
	'LOG_ATTACH_FILEUPLOAD'		=> '<strong>Nepriradená príloha pripojená k príspevku</strong><br />» ID %1$d - %2$s',
	'LOG_ATTACH_ORPHAN_DEL'		=> '<strong>Nepriradená príloha odstránená</strong><br />» %s',

	'LOG_BAN_EXCLUDE_USER'	=> '<strong>Odobratý užívateľ z banu</strong> z dôvodu „<em>%1$s</em>“<br />» %2$s',
	'LOG_BAN_EXCLUDE_IP'	=> '<strong>Odobratá IP z banu</strong> z dôvodu „<em>%1$s</em>“<br />» %2$s',
	'LOG_BAN_EXCLUDE_EMAIL' => '<strong>Odobratý e-mail z banu</strong> z dôvodu „<em>%1$s</em>“<br />» %2$s',
	'LOG_BAN_USER'			=> '<strong>Zabanovaný užívateľ</strong> z dôvodu „<em>%1$s</em>“<br />» %2$s',
	'LOG_BAN_IP'			=> '<strong>Zabanovaná IP</strong> z dôvodu „<em>%1$s</em>“<br />» %2$s',
	'LOG_BAN_EMAIL'			=> '<strong>Zabanovaný e-mail</strong> z dôvodu „<em>%1$s</em>“<br />» %2$s',
	'LOG_UNBAN_USER'		=> '<strong>Užívateľ odbanovaný</strong><br />» %s',
	'LOG_UNBAN_IP'			=> '<strong>IP odbanovaná</strong><br />» %s',
	'LOG_UNBAN_EMAIL'		=> '<strong>E-mail odbanovaný</strong><br />» %s',

	'LOG_BBCODE_ADD'		=> '<strong>Pridaný nový BB kód</strong><br />» %s',
	'LOG_BBCODE_EDIT'		=> '<strong>Úprava BB kódu</strong><br />» %s',
	'LOG_BBCODE_DELETE'		=> '<strong>Odstránenie BB kódu</strong><br />» %s',
	'LOG_BBCODE_CONFIGURATION_ERROR'	=> '<strong>Chyba pri nastavovaní BBkódu</strong>: %1$s<br />» %2$s',

	'LOG_BOT_ADDED'		=> '<strong>Pridaný nový bot</strong><br />» %s',
	'LOG_BOT_DELETE'	=> '<strong>Odstránený bot</strong><br />» %s',
	'LOG_BOT_UPDATED'	=> '<strong>Aktualizácia existujúceho bota</strong><br />» %s',

	'LOG_CLEAR_ADMIN'		=> '<strong>Vyprázdnenie administrátorského záznamu</strong>',
	'LOG_CLEAR_CRITICAL'	=> '<strong>Vyprázdnenie chybového záznamu</strong>',
	'LOG_CLEAR_MOD'			=> '<strong>Vyprázdnenie moderátorského záznamu</strong>',
	'LOG_CLEAR_USER'		=> '<strong>Vyprázdnenie užívateľského záznamu</strong><br />» %s',
	'LOG_CLEAR_USERS'		=> '<strong>Vyprázdnenie užívateľských záznamov</strong>',

	'LOG_CONFIG_ATTACH'			=> '<strong>Zmena nastavení príloh</strong>',
	'LOG_CONFIG_AUTH'			=> '<strong>Zmena nastavení autentifikácie</strong>',
	'LOG_CONFIG_AVATAR'			=> '<strong>Zmena nastavení avatarov</strong>',
	'LOG_CONFIG_COOKIE'			=> '<strong>Zmena nastavení cookies</strong>',
	'LOG_CONFIG_EMAIL'			=> '<strong>Zmena nastavení e-mailov</strong>',
	'LOG_CONFIG_FEATURES'		=> '<strong>Zmena nastavení vlastností fóra</strong>',
	'LOG_CONFIG_LOAD'			=> '<strong>Zmena nastavení zaťaženia servera</strong>',
	'LOG_CONFIG_MESSAGE'		=> '<strong>Zmena nastavení súkromných správ</strong>',
	'LOG_CONFIG_POST'			=> '<strong>Zmena nastavení príspevkov</strong>',
	'LOG_CONFIG_REGISTRATION'	=> '<strong>Zmena nastavení registrácie</strong>',
	'LOG_CONFIG_FEED'			=> '<strong>Zmena nastavení exportov ATOM</strong>',
	'LOG_CONFIG_SEARCH'			=> '<strong>Zmena nastavení vyhľadávania</strong>',
	'LOG_CONFIG_SECURITY'		=> '<strong>Zmena nastavení bezpečnosti</strong>',
	'LOG_CONFIG_SERVER'			=> '<strong>Zmena nastavení servera</strong>',
	'LOG_CONFIG_SETTINGS'		=> '<strong>Zmena nastavení fóra</strong>',
	'LOG_CONFIG_SIGNATURE'		=> '<strong>Zmena nastavení podpisov</strong>',
	'LOG_CONFIG_VISUAL'			=> '<strong>Zmena nastavení anti-spambot</strong>',

	'LOG_APPROVE_TOPIC'			=> '<strong>Schválená téma</strong><br />» %s',
	'LOG_BUMP_TOPIC'			=> '<strong>Užívateľom oživená téma</strong><br />» %s',
	'LOG_DELETE_POST'			=> '<strong>Odstránený príspevok „%1$s“ napísaný užívateľom “%2$s” z nasledujúcich dôvodov</strong><br />» %3$s',
	'LOG_DELETE_SHADOW_TOPIC'	=> '<strong>Odstránená tieňová téma</strong><br />» %s',
	'LOG_DELETE_TOPIC'			=> '<strong>Odstránená téma „%1$s“ napísaný užívateľom “%2$s” z nasledujúcich dôvodov</strong><br />» %3$s',
	'LOG_FORK'					=> '<strong>Skopírovaná téma</strong><br />» z %s',
	'LOG_LOCK'					=> '<strong>Téma zamknutá</strong><br />» %s',
	'LOG_LOCK_POST'				=> '<strong>Zamknutý príspevok</strong><br />» %s',
	'LOG_MERGE'					=> '<strong>Spojené príspevky</strong> do témy<br />» %s',
	'LOG_MOVE'					=> '<strong>Presunutá téma</strong><br />» z %1$s do %2$s',
	'LOG_MOVED_TOPIC'			=> '<strong>Presunutá téma</strong><br />» %s',
	'LOG_PM_REPORT_CLOSED'		=> '<strong>Uzavreté nahlásenie SS</strong><br />» %s',
	'LOG_PM_REPORT_DELETED'		=> '<strong>Odstranené nahlásenie SS</strong><br />» %s',
	'LOG_POST_APPROVED'			=> '<strong>Schválený príspevok</strong><br />» %s',
	'LOG_POST_DISAPPROVED'		=> '<strong>Odmietnutý príspevok „%1$s“ napísaný užívateľom “%3$s” z nasledujúceho dôvodu</strong><br />» %2$s',
	'LOG_POST_EDITED'			=> '<strong>Upravený príspevok „%1$s“ napísaný užívateľom “%2$s” z nasledujúcich dôvodov</strong><br />» %3$s',
	'LOG_POST_RESTORED'			=> '<strong>Príspevok obnovený</strong><br />» %s',
	'LOG_REPORT_CLOSED'			=> '<strong>Uzavreté hlásenie</strong><br />» %s',
	'LOG_REPORT_DELETED'		=> '<strong>Odstránené hlásenie</strong><br />» %s',
	'LOG_RESTORE_TOPIC'			=> '<strong>Téma “%1$s” obnovená, napísaná užívateľom</strong><br />» %2$s',
	'LOG_SOFTDELETE_POST'		=> '<strong>Jemne vymazaný príspevok “%1$s” napísaný užívateľom “%2$s” pre nasledujúce dôvody</strong><br />» %3$s',
	'LOG_SOFTDELETE_TOPIC'		=> '<strong>Jemne vymazaná téma “%1$s” napísaná užívateľom “%2$s” pre nasledujúce dôvody</strong><br />» %3$s',
	'LOG_SPLIT_DESTINATION'		=> '<strong>Presunuté rozdelené príspevky</strong><br />» do %s',
	'LOG_SPLIT_SOURCE'			=> '<strong>Rozdelené príspevky</strong><br />» z %s',

	'LOG_TOPIC_APPROVED'		=> '<strong>Schválená téma</strong><br />» %s',
	'LOG_TOPIC_RESTORED'		=> '<strong>Téma obnovená</strong><br />» %s',
	'LOG_TOPIC_DISAPPROVED'		=> '<strong>Odmietnutá téma „%1$s“ napísaná užívateľom “%3$s” z nasledujúceho dôvodu</strong><br />%2$s',
	'LOG_TOPIC_RESYNC'			=> '<strong>Resynchronizácia počítadiel tém</strong><br />» %s',
	'LOG_TOPIC_TYPE_CHANGED'	=> '<strong>Zmenený typ témy</strong><br />» %s',
	'LOG_UNLOCK'				=> '<strong>Téma odomknutá</strong><br />» %s',
	'LOG_UNLOCK_POST'			=> '<strong>Príspevok odomknutý</strong><br />» %s',

	'LOG_DISALLOW_ADD'		=> '<strong>Pridané zakázané užívateľské meno</strong><br />» %s',
	'LOG_DISALLOW_DELETE'	=> '<strong>Odstránené zakázané užívateľské meno</strong>',

	'LOG_DB_BACKUP'			=> '<strong>Záloha databázy</strong>',
	'LOG_DB_DELETE'			=> '<strong>Odstránená záloha databázy</strong>',
	'LOG_DB_RESTORE'		=> '<strong>Obnova databázy zo zálohy</strong>',

	'LOG_DOWNLOAD_EXCLUDE_IP'	=> '<strong>Odobraná IP/hostiteľ zo zoznamu sťahovaní</strong><br />» %s',
	'LOG_DOWNLOAD_IP'			=> '<strong>Pridaná IP/hostiteľ do zoznamu sťahovaní</strong><br />» %s',
	'LOG_DOWNLOAD_REMOVE_IP'	=> '<strong>Odstránená IP/hostiteľ zo zoznamu sťahovaní</strong><br />» %s',

	'LOG_ERROR_JABBER'		=> '<strong>Chyba Jabbera</strong><br />» %s',
	'LOG_ERROR_EMAIL'		=> '<strong>Chyba v e-maile</strong><br />» %s',
	'LOG_ERROR_CAPTCHA'		=> '<strong>Chyba v CAPTCHA</strong><br />» %s',

	'LOG_FORUM_ADD'							=> '<strong>Vytvorené nové fórum</strong><br />» %s',
	'LOG_FORUM_COPIED_PERMISSIONS'			=> '<strong>Skopírované oprávnenia fóra</strong> z %1$s<br />» %2$s',
	'LOG_FORUM_DEL_FORUM'					=> '<strong>Odstránené fórum</strong><br />» %s',
	'LOG_FORUM_DEL_FORUMS'					=> '<strong>Odstránené fórum a jeho sub-fóra</strong><br />» %s',
	'LOG_FORUM_DEL_MOVE_FORUMS'				=> '<strong>Odstránené fórum a jeho sub-fóra presunuté</strong> do %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS'				=> '<strong>Odstránené fórum a jeho príspevky presunuté </strong> do %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_FORUMS'		=> '<strong>Odstránené fórum a jeho sub-fóra, príspevky presunuté</strong> do %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_MOVE_FORUMS'	=> '<strong>Odstránené fórum a presun jeho príspevkov</strong> do %1$s <strong>a subfór</strong> do %2$s<br />» %3$s',
	'LOG_FORUM_DEL_POSTS'					=> '<strong>Odstránené fórum a jeho príspevky</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_FORUMS'			=> '<strong>Odstránené fórum, jeho príspevky a subfóra</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_MOVE_FORUMS'		=> '<strong>Odstránené fórum s jeho príspevkami, subfóra presunuté</strong> do %1$s<br />» %2$s',
	'LOG_FORUM_EDIT'						=> '<strong>Upravené detaily fóra</strong><br />» %s',
	'LOG_FORUM_MOVE_DOWN'					=> '<strong>Fórum</strong> %1$s <strong>presunuté dole</strong> %2$s',
	'LOG_FORUM_MOVE_UP'						=> '<strong>Fórum</strong> %1$s <strong>presunuté hore</strong> %2$s',
	'LOG_FORUM_SYNC'						=> '<strong>Resynchronizácia fóra</strong><br />» %s',

	'LOG_GENERAL_ERROR'	=> '<strong>Vyskytla sa všeobecná chyba</strong>: %1$s <br />» %2$s',

	'LOG_GROUP_CREATED'		=> '<strong>Vytvorená nová užívateľská skupina</strong><br />» %s',
	'LOG_GROUP_DEFAULTS'	=> '<strong>Skupina „%1$s“ nastavená ako prednastavená pre užívateľov</strong><br />» %2$s',
	'LOG_GROUP_DELETE'		=> '<strong>Užívateľská skupina odstránená</strong><br />» %s',
	'LOG_GROUP_DEMOTED'		=> '<strong>Lídri skupiny degradovaní</strong> %1$s<br />» %2$s',
	'LOG_GROUP_PROMOTED'	=> '<strong>Užívatelia povýšení na lídrov užívateľskej skupiny</strong> %1$s<br />» %2$s',
	'LOG_GROUP_REMOVE'		=> '<strong>Užívatelia odstránení z užívateľskej skupiny</strong> %1$s<br />» %2$s',
	'LOG_GROUP_UPDATED'		=> '<strong>Upravené detaily o užívateľskej skupine</strong><br />» %s',
	'LOG_MODS_ADDED'		=> '<strong>Pridaní noví lídri užívateľskej skupiny</strong> %1$s<br />» %2$s',
	'LOG_USERS_ADDED'		=> '<strong>Pridaní noví užívatelia do užívateľskej skupiny</strong> %1$s<br />» %2$s',
	'LOG_USERS_APPROVED'	=> '<strong>Užívatelia prijatí do užívateľskej skupiny</strong> %1$s<br />» %2$s',
	'LOG_USERS_PENDING'		=> '<strong>Uživatelia zažiadali o vstup do skupiny „%1$s“ a musia byť schválení</strong><br />» %2$s',

	'LOG_IMAGE_GENERATION_ERROR'	=> '<strong>Chyba pri generování obrázka</strong><br />» Chyba v %1$s v riadku %2$s: %3$s',

	'LOG_INACTIVE_ACTIVATE'	=> '<strong>Aktivácia neaktívnych užívateľov</strong><br />» %s',
	'LOG_INACTIVE_DELETE'	=> '<strong>Odstránenie neaktívnych užívateľov</strong><br />» %s',
	'LOG_INACTIVE_REMIND'	=> '<strong>Odoslané pripomienkové e-maily pre neaktívnych užívateľov</strong><br />» %s',
	'LOG_INSTALL_CONVERTED'	=> '<strong>Prechod z %1$s na phpBB %2$s</strong>',
	'LOG_INSTALL_INSTALLED'	=> '<strong>Inštalácia phpBB %s</strong>',

	'LOG_IP_BROWSER_FORWARDED_CHECK'	=> '<strong>Zlyhala kontrola session IP/prehliadača/X_FORWARDED_FOR</strong><br />»Užívateľská IP <em>%1$s</em>“ porovnaná s IP session „<em>%2$s</em>“, užívateľské označenie prehliadača „<em>%3$s</em>“ porovnané s označením prehliadača session „<em>%4$s</em>“ a užívateľský reťazec X_FORWARDED_FOR „<em>%5$s</em>“ porovnaný so session X_FORWARDED_FOR reťazcom „<em>%6$s</em>“.',

	'LOG_JAB_CHANGED'			=> '<strong>Zmena účtu Jabbera</strong>',
	'LOG_JAB_PASSCHG'			=> '<strong>Zmena hesla Jabbera</strong>',
	'LOG_JAB_REGISTER'			=> '<strong>Registrácia Jabber účtu</strong>',
	'LOG_JAB_SETTINGS_CHANGED'	=> '<strong>Zmena nastavení Jabbera</strong>',

	'LOG_LANGUAGE_PACK_DELETED'		=> '<strong>Odstránený jazykový balík</strong><br />» %s',
	'LOG_LANGUAGE_PACK_INSTALLED'	=> '<strong>Inštalácia jazykového balíku</strong><br />» %s',
	'LOG_LANGUAGE_PACK_UPDATED'		=> '<strong>Aktualizácia detailov jazykového balíku</strong><br />» %s',
	'LOG_LANGUAGE_FILE_REPLACED'	=> '<strong>Nahradený jazykový súbor</strong><br />» %s',
	'LOG_LANGUAGE_FILE_SUBMITTED'	=> '<strong>Odoslaný jazykový súbor a nahraný do adresára pre ukladanie</strong><br />» %s',

	'LOG_MASS_EMAIL'		=> '<strong>Odoslaný hromadný e-mail</strong><br />» %s',

	'LOG_MCP_CHANGE_POSTER'	=> '<strong>Zmenený odosielateľ v téme „%1$s“</strong><br />» z %2$s na %3$s',

	'LOG_MODULE_DISABLE'	=> '<strong>Modul vypnutý</strong>» %s',
	'LOG_MODULE_ENABLE'		=> '<strong>Modul zapnutý</strong>» %s',
	'LOG_MODULE_MOVE_DOWN'	=> '<strong>Modul posunutý dole</strong><br />» %1$s pod %2$s',
	'LOG_MODULE_MOVE_UP'	=> '<strong>Modul posunutý hore</strong><br />» %1$s nad %2$s',
	'LOG_MODULE_REMOVED'	=> '<strong>Modul odstránený</strong><br />» %s',
	'LOG_MODULE_ADD'		=> '<strong>Modul pridaný</strong><br />» %s',
	'LOG_MODULE_EDIT'		=> '<strong>Modul upravený</strong><br />» %s',

	'LOG_A_ROLE_ADD'		=> '<strong>Administrátorská rola pridaná</strong><br />» %s',
	'LOG_A_ROLE_EDIT'		=> '<strong>Administrátorská rola upravená</strong><br />» %s',
	'LOG_A_ROLE_REMOVED'	=> '<strong>Administrátorská rola odstránená</strong><br />» %s',
	'LOG_F_ROLE_ADD'		=> '<strong>Rola fóra pridaná</strong><br />» %s',
	'LOG_F_ROLE_EDIT'		=> '<strong>Rola fóra upravená</strong><br />» %s',
	'LOG_F_ROLE_REMOVED'	=> '<strong>Rola fóra odstránená</strong><br />» %s',
	'LOG_M_ROLE_ADD'		=> '<strong>Moderátorská rola pridaná</strong><br />» %s',
	'LOG_M_ROLE_EDIT'		=> '<strong>Moderátorská rola upravená</strong><br />» %s',
	'LOG_M_ROLE_REMOVED'	=> '<strong>Moderátorská rola odstránená</strong><br />» %s',
	'LOG_U_ROLE_ADD'		=> '<strong>Užívateľská rola pridaná</strong><br />» %s',
	'LOG_U_ROLE_EDIT'		=> '<strong>Užívateľská rola upravená</strong><br />» %s',
	'LOG_U_ROLE_REMOVED'	=> '<strong>Užívateľská rola odstránená</strong><br />» %s',

	'LOG_PLUPLOAD_TIDY_FAILED'		=> '<strong>Nebolo možné otvoriť %1$s pre vyčistenie, skontrolujte oprávnenia.</strong><br />Výnimka: %2$s<br />Cesta: %3$s',

	'LOG_PROFILE_FIELD_ACTIVATE'	=> '<strong>Aktivované pole v profile</strong><br />» %s',
	'LOG_PROFILE_FIELD_CREATE'		=> '<strong>Pridané pole v profile</strong><br />» %s',
	'LOG_PROFILE_FIELD_DEACTIVATE'	=> '<strong>Deaktivované pole v profile</strong><br />» %s',
	'LOG_PROFILE_FIELD_EDIT'		=> '<strong>Zmena poľa v profile</strong><br />» %s',
	'LOG_PROFILE_FIELD_REMOVED'		=> '<strong>Odstránenie poľa v profile</strong><br />» %s',

	'LOG_PRUNE'					=> '<strong>Prečistenie fór</strong><br />» %s',
	'LOG_AUTO_PRUNE'			=> '<strong>Automatické prečistenie fór</strong><br />» %s',
	'LOG_PRUNE_SHADOW'		=> '<strong>Automaticky vyčistené tieňové témy</strong><br />» %s',
	'LOG_PRUNE_USER_DEAC'		=> '<strong>Užívatelia deaktivovaní</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_DEL'	=> '<strong>Užívatelia prečistení a príspevky vymazané</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_ANON'	=> '<strong>Užívatelia prečistení a príspevky ponechané</strong><br />» %s',

	'LOG_PURGE_CACHE'			=> '<strong>Prečistená medzipamäť</strong>',
	'LOG_PURGE_SESSIONS'		=> '<strong>Prečistené sessions</strong>',

	'LOG_RANK_ADDED'		=> '<strong>Pridaná nová hodnosť</strong><br />» %s',
	'LOG_RANK_REMOVED'		=> '<strong>Odstránená hodnosť</strong><br />» %s',
	'LOG_RANK_UPDATED'		=> '<strong>Upravená hodnosť</strong><br />» %s',

	'LOG_REASON_ADDED'		=> '<strong>Pridaný dôvod hlásenia/zamietnutia</strong><br />» %s',
	'LOG_REASON_REMOVED'	=> '<strong>Odstránený dôvod hlásenia/zamietnutia</strong><br />» %s',
	'LOG_REASON_UPDATED'	=> '<strong>Aktualizácia dôvodu hlásenia/zamietnutia</strong><br />» %s',

	'LOG_REFERER_INVALID'		=> '<strong>Overenie referenta zlyhalo</strong><br />»Referent bol „<em>%1$s</em>“. Požiadavka bola zrušená a sessions zničené.',
	'LOG_RESET_DATE'			=> '<strong>Resetovaný čas spustenia fóra</strong>',
	'LOG_RESET_ONLINE'			=> '<strong>Resetovaný rekord online užívateľov</strong>',
	'LOG_RESYNC_FILES_STATS'	=> '<strong>Štatistiky súborov resynchronizované</strong>',
	'LOG_RESYNC_POSTCOUNTS'		=> '<strong>Resynchonizácia počtu užívateľských príspevkov</strong>',
	'LOG_RESYNC_POST_MARKING'	=> '<strong>Označené témy synchronizované</strong>',
	'LOG_RESYNC_STATS'			=> '<strong>Príspevky, témy a štatistiky užívateľov resynchronizované</strong>',

	'LOG_SEARCH_INDEX_CREATED'	=> '<strong>Vytvorený vyhľadávací index pre</strong><br />» %s',
	'LOG_SEARCH_INDEX_REMOVED'	=> '<strong>Odstránený vyhľadávací index pre</strong><br />» %s',
	'LOG_SPHINX_ERROR'			=> '<strong>Sphinx chyba</strong><br />» %s',
	'LOG_STYLE_ADD'				=> '<strong>Pridaný nový štýl</strong><br />» %s',
	'LOG_STYLE_DELETE'			=> '<strong>Odstránený štýl</strong><br />» %s',
	'LOG_STYLE_EDIT_DETAILS'	=> '<strong>Upravený štýl</strong><br />» %s',
	'LOG_STYLE_EXPORT'			=> '<strong>Exportovaný štýl</strong><br />» %s',

	// @deprecated 3.1
	'LOG_TEMPLATE_ADD_DB'			=> '<strong>Pridaná nová šablóna do databázy</strong><br />» %s',
	// @deprecated 3.1
	'LOG_TEMPLATE_ADD_FS'			=> '<strong>Pridaná nová šablóna do systému súborov</strong><br />» %s',
	'LOG_TEMPLATE_CACHE_CLEARED'	=> '<strong>Odstránené medzipamätové verzie šablónových súborov pre sadu šablóny <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_DELETE'			=> '<strong>Odstránená sada šablón</strong><br />» %s',
	'LOG_TEMPLATE_EDIT'				=> '<strong>Upravená sada šablón <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_EDIT_DETAILS'		=> '<strong>Upravené detaily šablóny</strong><br />» %s',
	'LOG_TEMPLATE_EXPORT'			=> '<strong>Export šablóny</strong><br />» %s',
	// @deprecated 3.1
	'LOG_TEMPLATE_REFRESHED'		=> '<strong>Obnoveniá sada šablón</strong><br />» %s',

	// @deprecated 3.1
	'LOG_THEME_ADD_DB'			=> '<strong>Pridaná nová téma do databázy</strong><br />» %s',
	// @deprecated 3.1
	'LOG_THEME_ADD_FS'			=> '<strong>Pridaná nová téma do systému súborov</strong><br />» %s',
	'LOG_THEME_DELETE'			=> '<strong>Téma zmazaná</strong><br />» %s',
	'LOG_THEME_EDIT_DETAILS'	=> '<strong>Upravené detaily témy</strong><br />» %s',
	'LOG_THEME_EDIT'			=> '<strong>Editovaná téma <em>%1$s</em></strong>',
	'LOG_THEME_EDIT_FILE'		=> '<strong>Editovaná téma <em>%1$s</em></strong><br />» Upravený súbor <em>%2$s</em>',
	'LOG_THEME_EXPORT'			=> '<strong>Exportovaná téma</strong><br />» %s',
	// @deprecated 3.1
	'LOG_THEME_REFRESHED'		=> '<strong>Obnovenie témy</strong><br />» %s',

	'LOG_UPDATE_DATABASE'	=> '<strong>Aktualizácia databázy z verzie %1$s na verziu %2$s</strong>',
	'LOG_UPDATE_PHPBB'		=> '<strong>Aktualizácia phpBB z verzie %1$s na verziu %2$s</strong>',

	'LOG_USER_ACTIVE'		=> '<strong>Užívateľ aktivovaný</strong><br />» %s',
	'LOG_USER_BAN_USER'		=> '<strong>Zabanovaný užívateľ cez správu užívateľov</strong> z dôvodu „<em>%1$s</em>“<br />» %2$s',
	'LOG_USER_BAN_IP'		=> '<strong>Zabanovaná IP cez správu užívateľov</strong> z dôvodu „<em>%1$s</em>“<br />» %2$s',
	'LOG_USER_BAN_EMAIL'	=> '<strong>Zabanovaný email cez správu užívateľov</strong> z dôvodu „<em>%1$s</em>“<br />» %2$s',
	'LOG_USER_DELETED'		=> '<strong>Zmazaný užívateľ</strong><br />» %s',
	'LOG_USER_DEL_ATTACH'	=> '<strong>Odstránené všetky prílohy od užívateľa</strong><br />» %s',
	'LOG_USER_DEL_AVATAR'	=> '<strong>Odstránený užívateľský avatar</strong><br />» %s',
	'LOG_USER_DEL_OUTBOX'	=> '<strong>Vyprázdnená zložka správ na odoslanie užívateľa</strong><br />» %s',
	'LOG_USER_DEL_POSTS'	=> '<strong>Odstránené všetky príspevky od užívateľa</strong><br />» %s',
	'LOG_USER_DEL_SIG'		=> '<strong>Odstránený podpis užívateľa</strong><br />» %s',
	'LOG_USER_INACTIVE'		=> '<strong>Užívateľ deaktivovaný</strong><br />» %s',
	'LOG_USER_MOVE_POSTS'	=> '<strong>Presunuté užívateľské príspevky</strong><br />» príspevky od „%1$s“ do fóra „%2$s“',
	'LOG_USER_NEW_PASSWORD'	=> '<strong>Zmenené heslo užívateľa</strong><br />» %s',
	'LOG_USER_REACTIVATE'	=> '<strong>Nútená reaktivácia užívateľského účtu</strong><br />» %s',
	'LOG_USER_REMOVED_NR'	=> '<strong>Odstranené označenie „Nový člen fóra“ u užívateľa</strong><br />» %s',

	'LOG_USER_UPDATE_EMAIL'	=> '<strong>Užívateľ „%1$s“ zmenil e-mail</strong><br />» z „%2$s“ na „%3$s“',
	'LOG_USER_UPDATE_NAME'	=> '<strong>Zmenené užívateľské meno</strong><br />» z „%1$s“ na „%2$s“',
	'LOG_USER_USER_UPDATE'	=> '<strong>Aktualizácia detailov užívateľa</strong><br />» %s',

	'LOG_USER_ACTIVE_USER'		=> '<strong>Užívateľský účet aktivovaný</strong>',
	'LOG_USER_DEL_AVATAR_USER'	=> '<strong>Odstránený avatar užívateľa</strong>',
	'LOG_USER_DEL_SIG_USER'		=> '<strong>Odstránený podpis užívateľa</strong>',
	'LOG_USER_FEEDBACK'			=> '<strong>Pridaná spätná väzba k užívateľovi</strong><br />» %s',
	'LOG_USER_GENERAL'			=> '<strong>Pridaný záznam:</strong><br />» %s',
	'LOG_USER_INACTIVE_USER'	=> '<strong>Deaktivácia užívateľského účtu</strong>',
	'LOG_USER_LOCK'				=> '<strong>Užívateľ zamkol svou tému</strong><br />» %s',
	'LOG_USER_MOVE_POSTS_USER'	=> '<strong>Všetky príspevky presunuté do fóra „%s“</strong>',
	'LOG_USER_REACTIVATE_USER'	=> '<strong>Nútená reaktivácia užívateľského účtu</strong>',
	'LOG_USER_UNLOCK'			=> '<strong>Užívateľ odomkol svou tému</strong><br />» %s',
	'LOG_USER_WARNING'			=> '<strong>Pridané varovanie užívateľovi</strong><br />» %s',
	'LOG_USER_WARNING_BODY'		=> '<strong>Užívateľovi bolo udelené následovné varovanie</strong><br />» %s',

	'LOG_USER_GROUP_CHANGE'			=> '<strong>Užívateľ zmenil prednastavenú skupinu</strong><br />» %s',
	'LOG_USER_GROUP_DEMOTE'			=> '<strong>Užívateľ zosadený z líderstva skupiny</strong><br />» %s',
	'LOG_USER_GROUP_JOIN'			=> '<strong>Užívateľ vstúpil do skupiny</strong><br />» %s',
	'LOG_USER_GROUP_JOIN_PENDING'	=> '<strong>Užívateľ vstúpil do skupiny a čaká na schválenie</strong><br />» %s',
	'LOG_USER_GROUP_RESIGN'			=> '<strong>Užívateľ vystúpil zo skupiny</strong><br />» %s',

	'LOG_WARNING_DELETED'		=> '<strong>Odstránené varovanie užívateľa</strong><br />» %s',
	'LOG_WARNINGS_DELETED'		=> array(
		1 => '<strong>Odstránené varovanie užívateľa</strong><br />» %1$s',
		2 => '<strong>Odstránené %2$d varovania užívateľa</strong><br />» %1$s', // Example: '<strong>Deleted 2 user warnings</strong><br />» username'
		3 => '<strong>Odstránených %2$d varovaní užívateľa</strong><br />» %1$s',
	),
	'LOG_WARNINGS_DELETED_ALL'	=> '<strong>Odstránené všetky varovania užívateľa</strong><br />» %s',

	'LOG_WORD_ADD'			=> '<strong>Pridané cenzúrované slovo</strong><br />» %s',
	'LOG_WORD_DELETE'		=> '<strong>Odstránené cenzúrované slovo</strong><br />» %s',
	'LOG_WORD_EDIT'			=> '<strong>Upravené cenzúrované slovo</strong><br />» %s',

	'LOG_EXT_ENABLE'	=> '<strong>Rozšírenie povolené</strong><br />» %s',
	'LOG_EXT_DISABLE'	=> '<strong>Rošírenie zakázané</strong><br />» %s',
	'LOG_EXT_PURGE'		=> '<strong>Vymazané údaje rozšírenia</strong><br />» %s',
	'LOG_EXT_UPDATE'	=> '<strong>Rozšírenie aktualizované</strong><br />» %s',
));

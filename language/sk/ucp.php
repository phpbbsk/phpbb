<?php
/**
*
* ucp [Slovak]
*
* @package language
* @version $Id: ucp.php,v 1.136 2010/01/05 23:00:00 phpbb3.sk Exp $
* @copyright (c) 2007 phpBB Group
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

// Privacy policy and T&C
$lang = array_merge($lang, array(
	'TERMS_OF_USE_CONTENT'	=> 'Vstupom na “%1$s” (ďalej len “my”, “nás”, “náš”, “%1$s”, “%2$s”), súhlasíte s právnym vymedzením nasledujúcich podmienok. Ak nesúhlasíte s právnym vymedzením všetkých nasledujúcich podmienok, potom, prosím, nevstupujte a/alebo nepoužívajte “%1$s”. Tieto podmienky môžme kedykoľvek zmeniť a my spravíme všetko preto, aby sme Vás informovali o týchto zmenách, avšak bude rozumné, ak tieto podmienky budete pravidelne kontrolovať počas pravidelného používania “%1$s”, pretože musíte súhlasiť s každou zmenou týchto podmienok, ktoré budú aktualizované a/alebo upravené.<br />
	<br />
	Naše fórum beží na systéme phpBB (ďalej len “oni”, “im”, “ich”, “phpBB software”, “www.phpbb.com”, “phpBB Group”, “phpBB tímy”), čo je elektronický konferenčný systém vydávaný pod “<a href="http://www.gnu.org/licenses/gpl-license.php">General Public License</a>” (ďalej len “GPL”) a ktorý môže byť stiahnutý z <a href="http://www.phpbb.com/">www.phpbb.com</a>. Softvér phpBB  umožňuje internetové diskusie a GPL mu striktne zakazuje určovať čo môžme a/alebo nemôžme v rámci povoleného obsahu a/alebo správy. Pre ďalšie informácie o phpBB, navštívte, prosím: <a href="http://www.phpbb.com/">http://www.phpbb.com/</a>.<br />
	<br />
	Súhlasíte s tým, že nebudete odosielať žiadne urážlivé, obscénne, vulgárne, ohováracie, nenávistné, výhražné, sexuálne orientované príspevky alebo posielať akýkoľvek iný materiál, ktorý môže porušovať ktorékoľvek zákony krajiny, v ktorej sa nachádzate Vy či v ktorej sa nachádza “%1$s” alebo medzinárodné právo. Takéto konanie môže viesť k okamžitému a trvalému vylúčeniu, s upozornením Vášho poskytovateľa internetového pripojenia, ak sa budeme domnievať, že to bude od nás požadované. IP adresa všetkých Vašich príspevkov je zaznamenávaná na pomoc vo vymožiteľnosti týchto podmienok. Súhlasíte s tým, že “%1$s” má právo kedykoľvek odstrániť, upraviť, presunúť alebo uzamknúť ktorúkoľvek tému, ktorá by porušovala tieto podmienky. Ako užívateľ, súhlasíte s ukladaním do databázy akejkoľvek informácie, ktorú vložíte. Hoci táto informácia nebude zverejnená/poskytnutá žiadnej tretej strane bez Vášho súhlasu, ani “%1$s” ani phpBB nenesú zodpovednosť za akýkoľvek pokus o prienik (hacking), ktorý môže viesť k zneužitiu týchto údajov.
	',

	'PRIVACY_POLICY'		=> 'Tieto zásady dopodrobna vysvetľujú ako “%1$s” spolu s pridruženými spoločnosťami (ďalej len “my”, “nás”, “náš”, “%1$s”, “%2$s”) a phpBB (ďalej len “oni”, “ich”, “im”, “phpBB softvér”, “www.phpbb.com”, “phpBB Group”, “phpBB tímy”) používajú akékoľvek údaje zhromaždené počas akéhokoľvek spojenia s Vami (ďalej len “Vaše údaje”).<br />
	<br />
	Vaše údaje sú zhromažďované dvomi spôsobmi. Najskôr, prehliadanie “%1$s” spôsobí, že phpBB softvér vytvorí určitý počet cookies, čo sú malé textové súbory, ktoré sú stiahnuté do Vášho PC na miesto, kde Váš internetový prehliadač ukladá dočasné súbory. Prvé dve cookies obsahujú len informáciu na identifikáciu užívateľa (ďalej len “užívateľovo id”) a informáciu na identifikáciu anonymného spojenia (ďalej len “id spojenia”), ktoré Vám automaticky priradí phpBB softvér. Tretí cookie bude vytvorený vtedy, keď zobrazíte témy na “%1$s” a tento je použitý na rozpoznanie, ktoré témy už boli zobrazené, čím sa zvýši komfort Vášho prehliadania.<br />
	<br />
	Môžme tiež vytvárať cookies, ktoré sú mimo phpBB softvéru, počas prehliadania “%1$s”, avšak tieto sú mimo rámec tohto dokumentu, ktorého cieľom je pokryť stránky vytvárané prostredníctvom phpBB softvéru. Druhý spôsob, ktorým zhromažďujeme Vaše údaje, je prostredníctvom toho, čo nám sami odošlete. Toto môže byť, avšak nielen: odoslaním ako anonymný užívateľ (ďalej len “anonymné príspevky”), registrovaný na “%1$s” (ďalej len “Vaše konto”) a Vami odoslané príspevky po registrácii a počas prihlásenia (ďalej len “Vaše príspevky”).<br />
	<br />
	Vaše konto bude bezpodmienečne obsahovať minimálne jednoznačne identifikovateľné meno (ďalej len “Vaše užívateľské meno”), osobné heslo pre prihlásenie sa na Vaše konto  (ďalej len “Vaše heslo”) a osobnú, platnú e-mailovú adresu (ďalej len “Váš e-mail”). Vaše údaje pre Vaše konto na “%1$s” sú chránené zákonom na ochranu údajov a dát, ktoré sú v platnosti v krajine kde sme umiestnení. Akýkoľvek údaj navyše Vášho užívateľského mena, Vášho hesla a Vášho e-mailu, ktorý je požadovaný “%1$s” počas registrácie vybočujú z toho, čo považujeme za povinné a čo za dobrovoľné. Vo všetkých prípadoch, máte možnosť určiť, ktorý údaj Vášho konta bude verejne zobrazený. Okrem toho, vo Vašom konte, máte možnosť zvoliť si alebo zrušiť možnosť automaticky generovaných e-mailov prostredníctvom phpBB softvéru.<br />
	<br />
	Vaše heslo je šifrované (jednosmerný hash), takže je zabezpečené. Napriek tomu, je odporúčané, aby ste nepoužívali rovnaké heslo na rôznych internetových stránkach. Vaše heslo je možnosťou pre prístup k Vášmu kontu na “%1$s”, takže si ho, prosím, chráňte. Nik v spojitosti s “%1$s”, phpBB alebo akoukoľvek 3. stranou, nie je za žiadnych okolností oprávnený žiadať od Vás Vaše heslo. V prípade, že zabudnete svoje heslo na prístup k Vášmu kontu, môžete použiť funkciu “Zabudol som svoje heslo”, ktorá je dostupná v rámci phpBB softvéru. Tento proces bude od Vás vyžadovať vloženie Vášho užívateľského mena a Vášho e-mailu, potom phpBB softvér vygeneruje nové heslo, ktoré Vám znovu umožní prístup k Vášmu kontu.<br />
	',
));

// Common language entries
$lang = array_merge($lang, array(
	'ACCOUNT_ACTIVE'				=> 'Vaše konto bolo teraz aktivované. Ďakujeme, že ste sa zaregistrovali',
	'ACCOUNT_ACTIVE_ADMIN'			=> 'Konto bolo teraz aktivované',
	'ACCOUNT_ACTIVE_PROFILE'		=> 'Váš účet bol úspešne raktivovaný.',
	'ACCOUNT_ADDED'					=> 'Ďakujeme, že ste sa zaregistrovali, Vaše konto bolo vytvorené. Môžete sa teraz prihlásiť s Vašim menom a heslom',
	'ACCOUNT_COPPA'					=> 'Vaše konto bolo vytvorené, no potrebuje byť schválené. Skontrolujte si svoju e-mailovú schránku, kde sa nachádzajú podrobnosti.',
	'ACCOUNT_EMAIL_CHANGED'			=> 'Váš účet bol aktualizovaný. Fórum ale vyžaduje, aby ste po tejto zmene reaktivovali svoj účet. Aktivačný kľúč bol zaslaný na uvedenú e-mailovú adresu. Tam nájdete ďalšie informácie ako postupovať.',
	'ACCOUNT_EMAIL_CHANGED_ADMIN'	=> 'Váš účet bol aktualizovaný. Fórum ale vyžaduje reaktiváciu účtu administrátormi po zmene e-mailovej adresy. Bol im zaslaný e-mail a budete informovaní, akonáhle bude váš účet aktívny.',
	'ACCOUNT_INACTIVE'				=> 'Vaše konto bolo vytvorené. Avšak, keďže toto fórum vyžaduje aktiváciu konta, aktivačný kľúč bol zaslaný na e-mailovú adresu, ktorú ste poskytli počas registrácie. Skontrolujte si, prosím, svoju e-mailovú schránku, kde sa nachádzajú ďalšie informácie',
	'ACCOUNT_INACTIVE_ADMIN'		=> 'Vaše konto bolo vytvorené. Avšak, toto fórum vyžaduje aktiváciu konta administrátorom. Bol mu zaslaný e-mail a Vy budete informovaní keď bude Vaše konto aktivované',
	'ACTIVATION_EMAIL_SENT'			=> 'Aktivačný e-mail bol odoslaný na Vašu e-mailovú adresu.',
	'ACTIVATION_EMAIL_SENT_ADMIN'	=> 'Aktivačný e-mail bol odoslaný na e-mailové adresy administrátorov.',
	'ADD'							=> 'Pridať',
	'ADD_BCC'						=> 'Pridať[skrytý]',
	'ADD_FOES'						=> 'Pridať nových nepriateľov',
	'ADD_FOES_EXPLAIN'				=> 'Môžete naraz vložiť niekoľko užívateľov, každého na samostatnom riadku',
	'ADD_FOLDER'					=> 'Pridať zložku',
	'ADD_FRIENDS'					=> 'Pridať nových priateľov',
	'ADD_FRIENDS_EXPLAIN'			=> 'Môžete naraz vložiť niekoľko užívateľov, každého na samostatnom riadku',
	'ADD_NEW_RULE'					=> 'Pridať nové pravidlo',
	'ADD_RULE'						=> 'Pridať pravidlo',
	'ADD_TO'						=> 'Pridať [komu]',
	'ADD_USERS_UCP_EXPLAIN'		=> 'Tu môžete pridať nových používateľov do skupiny. Môžete zvoliť, či táto skupina bude ich nová východisková. Každé užívateľské meno dajte na novú riadku.',
	'ADMIN_EMAIL'					=> 'Administrátori mi môžu zasielať e-mailom informácie',
	'AGREE'							=> 'Súhlasím s podmienkami',
	'ALLOW_PM'						=> 'Umožní užívateľom odosielať Vám súkromné správy',
	'ALLOW_PM_EXPLAIN'				=> 'Buďte si vedomí toho, že admini a moderátori Vám budú môcť vždy poslať správu.',
	'ALREADY_ACTIVATED'				=> 'Už ste si konto aktivovali',
	'ATTACHMENTS_EXPLAIN'			=> 'Toto je zoznam príloh, ktoré ste vytvorili v príspevkoch v tomto fóre.',
	'ATTACHMENTS_DELETED'			=> 'Prílohy boli úspešne zmazané.',
	'ATTACHMENT_DELETED'			=> 'Príloha bola úspešne zmazaná.',
	'AVATAR_CATEGORY'				=> 'Kategória',
	'AVATAR_EXPLAIN'				=> 'Maximálne rozmery; šírka %1$d pixelov, výška %2$d pixelov, veľkosť súboru %3$.2f KiB.',
	'AVATAR_FEATURES_DISABLED'		=> 'Avatary sú v tejto chvíli na fóre vypnuté.',
	'AVATAR_GALLERY'				=> 'Miestna galéria',
	'AVATAR_GENERAL_UPLOAD_ERROR'	=> 'Avatar nie je možné nahrať do %s',
	'AVATAR_NOT_ALLOWED'					=> 'Váš avatar nebude zobrazený, pretože avatary sú globálne vypnuté.',
	'AVATAR_PAGE'					=> 'Stránka',
	'AVATAR_TYPE_NOT_ALLOWED'			=> 'Váš súčasný avatar nebude zobrazený, pretože tento typ avatarov bol zakázaný.',

	'BACK_TO_DRAFTS'			=> 'Späť k uloženým konceptom',
	'BACK_TO_LOGIN'				=> 'Späť na prihlasovaciu obrazovku',
	'BIRTHDAY'					=> 'Deň narodenia',
	'BIRTHDAY_EXPLAIN'			=> 'Nastavením roku sa zobrazí Váš vek, keď budete mať narodeniny.',
	'BOARD_DATE_FORMAT'			=> 'Môj formát dátumu',
	'BOARD_DATE_FORMAT_EXPLAIN'	=> 'Použitá syntax je totožná s PHP funkciou <a href="http://www.php.net/date">date()</a>',
	'BOARD_DST'					=> 'Letný čas je nastavený',
	'BOARD_LANGUAGE'			=> 'Môj jazyk',
	'BOARD_STYLE'				=> 'Môj štýl fóra',
	'BOARD_TIMEZONE'			=> 'Moje časové pásmo',
	'BOOKMARKS'					=> 'Záložky',
	'BOOKMARKS_EXPLAIN'			=> 'Môžete si v témach vytvárať záložky pre ďalšie vyhľadávanie. Označte zaškrtávacie políčko pre každú záložku, ktorú chcete zmazať a potom stlačte tlačidlo <em>Odstráňte označené záložky</em>.',
	'BOOKMARKS_DISABLED'		=> 'Na tomto fóre sú záložky zablokované',
	'BOOKMARKS_REMOVED'			=> 'Záložky boli úspešne odstránené',

	'CANNOT_EDIT_MESSAGE_TIME'	=> 'Tú správu už nemôžete upravovať alebo zmazať',
	'CANNOT_MOVE_TO_SAME_FOLDER'=> 'Správy nemôžu byť presunuté do zložky, ktorú chcete odstrániť.',
	'CANNOT_MOVE_FROM_SPECIAL'   => 'Správy nemôžu byť presunuté zo zložky k odoslaniu.',
	'CANNOT_RENAME_FOLDER'		=> 'Táto zložka nemôže byť premenovaná.',
	'CANNOT_REMOVE_FOLDER'		=> 'Táto zložka nemôže byť odstránená.',
	'CHANGE_DEFAULT_GROUP'		=> 'Zmeniť prednastavenú skupinu',
	'CHANGE_PASSWORD'			=> 'Zmeniť heslo',
	'CLICK_GOTO_FOLDER'			=> '%1$sÍsť do Vašej “%3$s” zložky%2$s',
	'CLICK_RETURN_FOLDER'		=> '%1$sVrátiť sa do Vašej “%3$s” zložky%2$s',
	'CONFIRMATION'				=> 'Potvrdenie registrácie',
	'CONFIRM_CHANGES'			=> 'Potvrdiť zmeny',
	'CONFIRM_EMAIL'				=> 'Potvrdiť e-mailovú adresu',
	'CONFIRM_EMAIL_EXPLAIN'		=> 'Toto potrebujete určiť len v prípade, že si zmeníte e-mailovú adresu.',
	'CONFIRM_EXPLAIN'			=> 'Pre zabránenie automatických registrácií administrátor fóra vyžaduje, aby ste vložili potvrdzovací kód. Kód je zobrazený v obrázku, ktorý by ste mali dole vidieť. Ak ste zrakovo postihnutí alebo nemôžete z iného dôvodu prečítať kód, kontaktujte, prosím, %sAdministrátora fóra%s.',
	'VC_REFRESH'						=> 'Obnoviť overovací kód',
	'VC_REFRESH_EXPLAIN'		=> 'Pokiaľ sa nedá prečítať overovací kód, vygenerujte si nový kliknutím na tlačidlo.',
  'CONFIRM_PASSWORD'			=> 'Potvrdiť nové heslo',
	'CONFIRM_PASSWORD_EXPLAIN'	=> 'Svoje heslo musíte potvrdiť len v prípade, že ste ho vyššie zmenili',
	'COPPA_BIRTHDAY'			=> 'Pre pokračovanie registrácie, napíšte, kedy ste sa narodili.',
	'COPPA_COMPLIANCE'			=> 'COPPA povolenie',
	'COPPA_EXPLAIN'				=> 'Uvedomte si, prosím, že potvrdením vytvoríte svoje konto. Avšak, konto nemôže byť aktivované, pokiaľ Vašu registráciu nepovolí Váš rodič alebo zákonný zástupca. e-mailom Vám bude odoslaný potrebný formulár s podrobnosťami kam ho poslať.',
	'CREATE_FOLDER'				=> 'Pridať zložku…',
	'CURRENT_IMAGE'				=> 'Súčasný obraz',
	'CURRENT_PASSWORD'			=> 'Súčasné heslo',
	'CURRENT_PASSWORD_EXPLAIN'	=> 'Musíte svoje súčasné heslo potvrdiť, ak ho chcete zmeniť, alebo zmeniť e-mailovú adresu či užívateľské meno.',
	'CUR_PASSWORD_EMPTY'		=> 'Nezadali ste súčastné heslo.',
	'CUR_PASSWORD_ERROR'		=> 'Súčasné heslo, ktoré ste zadali je nesprávne.',
	'CUSTOM_DATEFORMAT'			=> 'Voliteľné…',

	'DEFAULT_ACTION'			=> 'Predvolená akcia',
	'DEFAULT_ACTION_EXPLAIN'	=> 'Táto akcia sa vykoná, ak nič z vyššie uvedeného nebude použiteľné',
	'DEFAULT_ADD_SIG'			=> 'Štandardne vkladať môj podpis',
	'DEFAULT_BBCODE'			=> 'Štandardne umožniť BBCode',
	'DEFAULT_NOTIFY'			=> 'Štandardne ma upozorniť na odpovede',
	'DEFAULT_SMILIES'			=> 'Štandardne aktivovať smajlíky',
	'DEFINED_RULES'				=> 'Definované pravidlá',
	'DELETED_TOPIC'				=> 'Téma bola odstránená',
	'DELETE_ATTACHMENT'			=> 'Zmazať prílohu',
	'DELETE_ATTACHMENTS'		=> 'Zmazať prílohy',
	'DELETE_ATTACHMENT_CONFIRM'	=> 'Ste si istí, že chcete zmazať túto prílohu?',
	'DELETE_ATTACHMENTS_CONFIRM'=> 'Ste si istí, že chcete zmazať tieto prílohy?',
	'DELETE_AVATAR'				=> 'Zmazať obrázok',
	'DELETE_COOKIES_CONFIRM'	=> 'Ste si istí, že chcete zmazať všetky cookies nastavené týmto fórom?',
	'DELETE_MARKED_PM'			=> 'Zmazať označené správy',
	'DELETE_MARKED_PM_CONFIRM'	=> 'Ste si istí, že chcete zmazať všetky označené správy?',
	'DELETE_OLDEST_MESSAGES'	=> 'Zmazať najstaršie správy',
	'DELETE_MESSAGE'			=> 'Zmazať správu',
	'DELETE_MESSAGE_CONFIRM'	=> 'Ste si istí, že chcete zmazať túto súkromnú správu?',
	'DELETE_MESSAGES_IN_FOLDER'	=> 'Zmazať všetky správy vnútri odstraňovanej zložky',
	'DELETE_RULE'				=> 'Zmazať pravidlo',
	'DELETE_RULE_CONFIRM'		=> 'Ste si istí, že chcete zmazať toto pravidlo?',
	'DEMOTE_SELECTED'			=> 'Znížiť vybrané',
	'DISABLE_CENSORS'			=> 'Umožniť cenzurovanie slov',
	'DISPLAY_GALLERY'			=> 'Zobraziť galériu',
	'DOMAIN_NO_MX_RECORD_EMAIL'	=> 'Vložená e-mailová doména nemá platný MX záznam.',
	'DOWNLOADS'					=> 'Stiahnuté súbory',
	'DRAFTS_DELETED'			=> 'Všetky vybraté koncepty boli úspešne zmazané.',
	'DRAFTS_EXPLAIN'			=> 'Tu môžete zobraziť, upraviť a zmazať Vaše uložené koncepty.',
	'DRAFT_UPDATED'				=> 'Koncept bol úspešne aktualizovaný.',

	'EDIT_DRAFT_EXPLAIN'		=> 'Tu môžete upraviť Váš koncept. Koncepty neobsahujú prílohu a anketu.',
	'EMAIL_BANNED_EMAIL'		=> 'Nie je možné použiť zadanú e-mailovú adresu.',
	'EMAIL_INVALID_EMAIL'		=> 'Zadaná e-mailová adresa je neplatná.',
	'EMAIL_REMIND'				=> 'Musíte zadať e-mailovú adresu, ktorú máte nastavenú v profile. Ak ste si ju nemenili, tak je to adresa, ktorú ste zadali pri registrácii.',
	'EMAIL_TAKEN_EMAIL'			=> 'Zadaná e-mailová adresa je už používaná',
	'EMPTY_DRAFT'				=> 'Musíte vložiť správu pre potvrdenie Vašich zmien',
	'EMPTY_DRAFT_TITLE'			=> 'Musíte vložiť názov konceptu',
	'EXPORT_AS_XML'				=> 'Exportovať ako XML',
	'EXPORT_AS_CSV'				=> 'Exportovať ako CSV',
	'EXPORT_AS_CSV_EXCEL'		=> 'Exportovať ako CSV (Excel)',
	'EXPORT_AS_TXT'				=> 'Exportovať ako TXT',
	'EXPORT_AS_MSG'				=> 'Exportovať ako MSG',
	'EXPORT_FOLDER'				=> 'Exportovať zložku',

	'FIELD_REQUIRED'					=> 'Pole “%s” musí byť vyplnené.',
	'FIELD_TOO_SHORT'					=> 'Pole “%1$s” je príliš krátke, požadovaných je minimálne %2$d znakov.',
	'FIELD_TOO_LONG'					=> 'Pole “%1$s” je príliš dlhé, požadovaných je maximálne %2$d znakov.',
	'FIELD_TOO_SMALL'					=> 'Hodnota “%1$s” je príliš malá, je minimálne požadovaná hodnota %2$d.',
	'FIELD_TOO_LARGE'					=> 'Hodnota “%1$s” je príliš veľká, je maximálne požadovaná hodnota %2$d.',
	'FIELD_INVALID_CHARS_NUMBERS_ONLY'	=> 'Pole “%s” obsahuje neplatné znaky, povolené sú len čísla.',
	'FIELD_INVALID_CHARS_ALPHA_ONLY'	=> 'Pole “%s” obsahuje neplatné znaky, povolené sú len čísla a písmená.',
	'FIELD_INVALID_CHARS_SPACERS_ONLY'	=> 'Pole “%s” obsahuje neplatné znaky, povolené sú len čísla, písmená, medzera alebo znaky -+_[].',
	'FIELD_INVALID_DATE'				=> 'Pole “%s” obsahuje neplatný dátum.',
	'FIELD_INVALID_VALUE'				=> 'Poled “%s” obsahuje neplatnú hodnotu.',

	'FOE_MESSAGE'				=> 'Správa od nepriateľa',
	'FOES_EXPLAIN'				=> 'Nepriatelia sú užívatelia, ktorí budú štandardne ignorovaní. Príspevky od nich nebudú plne zobrazené a súkromné správy od nich nebudú povolené. Uvedomte si, prosím, že nemôžete ignorovať moderátorov alebo administrátorov.',
	'FOES_UPDATED'				=> 'Váš zoznam nepriateľov bol úspešne aktualizovaný',
	'FOLDER_ADDED'				=> 'Zložka bola úspešne pridaná',
	'FOLDER_MESSAGE_STATUS'		=> '%1$d z %2$d uložených správ',
	'FOLDER_NAME_EMPTY'			=> 'Musíte zadať názov adresára.',
	'FOLDER_NAME_EXIST'			=> 'Zložka <strong>%s</strong> už existuje',
	'FOLDER_OPTIONS'			=> 'Možnosti zložky',
	'FOLDER_RENAMED'			=> 'Zložka bola úspešne premenovaná',
	'FOLDER_REMOVED'			=> 'Zložka bola úspešne odstránená',
	'FOLDER_STATUS_MSG'			=> 'Zložka je na %1$d%% plná (%2$d z %3$d uložených správ)',
	'FORWARD_PM'				=> 'Pošli ďalej SS',
	'FORCE_PASSWORD_EXPLAIN'	=> 'Predtým, než budete môcť prehliadať fórum, si musíte zmeniť heslo',
	'FRIEND_MESSAGE'			=> 'Správa od priateľa',
	'FRIENDS'					=> 'Priatelia',
	'FRIENDS_EXPLAIN'			=> 'Priatelia Vám umožnia rýchly prístup k členom, s ktorými často komunikujete. Ak to štýl umožňuje, akýkoľvek príspevok odoslaný priateľom môže byť zvýraznený.',
	'FRIENDS_OFFLINE'			=> 'Offline',
	'FRIENDS_ONLINE'			=> 'Online',
	'FRIENDS_UPDATED'			=> 'Váš zoznam priateľov bol úspešne aktualizovaný',
	'FULL_FOLDER_OPTION_CHANGED'=> 'Možnosť plnej zložky bola úspešne zmenená',
	'FWD_ORIGINAL_MESSAGE'		=> '-------- Pôvodná správa --------',
	'FWD_SUBJECT'				=> 'Predmet: %s',
	'FWD_DATE'					=> 'Dátum: %s',
	'FWD_FROM'					=> 'Od koho: %s',
	'FWD_TO'					=> 'Komu: %s',

	'GLOBAL_ANNOUNCEMENT'		=> 'Všeobecný oznam',

	'HIDE_ONLINE'				=> 'Skryť môj online status',
	'HIDE_ONLINE_EXPLAIN'		=> 'Zmena tohto nastavenia sa prejaví až pri ďalšiom prihlásení.',
	'HOLD_NEW_MESSAGES'			=> 'Neakceptovať nové správy (Nové správy budú podržané v úzadí až dovtedy, kým nebude dostatok priestoru)',
	'HOLD_NEW_MESSAGES_SHORT'	=> 'Nové správy budú podržané v úzadí',

	'IF_FOLDER_FULL'			=> 'Ak je zložka plná',
	'IMPORTANT_NEWS'			=> 'Dôležité oznamy',
	'INVALID_USER_BIRTHDAY'			=> 'Vložený deň narodenia, nie je platný dátum.',
	'INVALID_CHARS_USERNAME'	=> 'Užívateľské meno obsahuje zakázané znaky.',
	'INVALID_CHARS_NEW_PASSWORD'=> 'Heslo neobsahuje požadované znaky.',
	'ITEMS_REQUIRED'			=> 'Položky označené * sú povinnými položkami a je nutné ich vyplniť',

	'JOIN_SELECTED'				=> 'Spojiť vybrané',

	'LANGUAGE'					=> 'Jazyk',
	'LINK_REMOTE_AVATAR'		=> 'Odkaz mimo stránky',
	'LINK_REMOTE_AVATAR_EXPLAIN'=> 'Vložte URL avatara, ktorý chcete pripojiť.',
	'LINK_REMOTE_SIZE'			=> 'Rozmery avataru',
	'LINK_REMOTE_SIZE_EXPLAIN'	=> 'Určite šírku a výšku avatara, nechajte prázdne pre automatické overenie.',
	'LOGIN_EXPLAIN_UCP'			=> 'Prihláste sa prosím, aby Vám bol umožnený prístup k Ovládaciemu panelu užívateľa',
	'LOGIN_REDIRECT'			=> 'Úspešne ste sa prihlásili.',
	'LOGOUT_FAILED'				=> 'Neboli ste odhlásený, pretože nesúhlasila ID session. Ak problémy pretrvávajú, kontaktujte administrátora fóra.',
	'LOGOUT_REDIRECT'			=> 'Úspešne ste sa odhlásili.',

	'MARK_IMPORTANT'				=> 'Označiť ako dôležité',
	'MARKED_MESSAGE'				=> 'Označená správa',
	'MAX_FOLDER_REACHED'			=> 'Bol dosiahnutý maximálny počet povolených užívateľom definovaných zložiek',
	'MESSAGE_BY_AUTHOR'				=> 'od',
	'MESSAGE_COLOURS'				=> 'Farby správy',
	'MESSAGE_DELETED'				=> 'Správa bola úspešne zmazaná',
	'MESSAGE_HISTORY'				=> 'História správ',
	'MESSAGE_REMOVED_FROM_OUTBOX'	=> 'Táto správa bola odstránená jej autorom ešte pred jej doručením',
	'MESSAGE_SENT_ON'				=> 'dňa',
	'MESSAGE_STORED'				=> 'Vaša správa bola úspešne odoslaná',
	'MESSAGE_TO'					=> 'Komu',
	'MESSAGES_DELETED'				=> 'Správy boli úspešne zmazané',
	'MOVE_DELETED_MESSAGES_TO'		=> 'Presunúť správy z odstránenej zložky do',
	'MOVE_DOWN'						=> 'Presunúť nadol',
	'MOVE_MARKED_TO_FOLDER'			=> 'Označené presunúť do %s',
	'MOVE_PM_ERROR'					=> 'Počas presúvania správ do novej zložky nastala chyba, presunulo sa len %1d z %2d správ.',
	'MOVE_TO_FOLDER'				=> 'Presunúť do zložky',
	'MOVE_UP'						=> 'Presunúť nahor',

  'NEW_EMAIL_CONFIRM_EMPTY'		=> 'Nezadali ste vašu e-mailovú adresu pre jej potvrdenie.',
	'NEW_EMAIL_ERROR'				=> 'E-mailová adresy, ktoré ste zadali sa nezhodujú.',
	'NEW_FOLDER_NAME'				=> 'Názov novej zložky',
	'NEW_PASSWORD'					=> 'Nové heslo',
	'NEW_PASSWORD_CONFIRM_EMPTY'	=> 'Nezadali ste vaše heslo pre jeho potvrdenie.',
	'NEW_PASSWORD_ERROR'			=> 'Heslá, ktoré ste zadali sa nezhodujú.',
	'NOTIFY_METHOD'					=> 'Metóda upozorňovania',
	'NOTIFY_METHOD_BOTH'			=> 'Obidve',
	'NOTIFY_METHOD_EMAIL'			=> 'Len e-mailom',
	'NOTIFY_METHOD_EXPLAIN'			=> 'Metóda pre posielanie správ prostredníctvom fóra.',
	'NOTIFY_METHOD_IM'				=> 'Len Jabber',
	'NOTIFY_ON_PM'					=> 'Upozorniť ma na nové správy',
	'NOT_ADDED_FRIENDS_ANONYMOUS'	=> 'Nemôžete vložiť anonymného užívateľa do Vášho zoznamu priateľov.',
	'NOT_ADDED_FRIENDS_FOES'		=> 'Nemôžete vložiť do Vášho zoznamu priateľov tých užívateľov, ktorí sú na zozname nepriateľov.',
	'NOT_ADDED_FRIENDS_BOTS'		=> 'Nemôžete pridať botov do vášho zoznamu priateľov.',
	'NOT_ADDED_FRIENDS_SELF'		=> 'Nemôžete sa pridať do Vášho zoznamu priateľov.',
	'NOT_ADDED_FOES_MOD_ADMIN'		=> 'Nemôžete vložiť administrátorov a moderátorov do Vášho zoznamu nepriateľov.',
	'NOT_ADDED_FOES_ANONYMOUS'		=> 'Nemôžete vložiť anonymného užívateľa do Vášho zoznamu nepriateľov.',
	'NOT_ADDED_FOES_BOTS'			=> 'Nemôžete pridať botov do vášho zoznamu nepriateľov.',
	'NOT_ADDED_FOES_FRIENDS'		=> 'Nemôžete vložiť do Vášho zoznamu nepriateľov tých užívateľov, ktorí sú na zozname priateľov.',
	'NOT_ADDED_FOES_SELF'			=> 'Nemôžete sa pridať do Vášho zoznamu nepriateľov.',
	'NOT_AGREE'						=> 'Nesúhlasím s týmito podmienkami',
	'NOT_ENOUGH_SPACE_FOLDER'		=> 'Cieľová zložka “%s” sa zdá byť plná. Požadovaná akcia nebola vykonaná.',
	'NOT_MOVED_MESSAGE'				=> '1 Vaša súkromná správa je pozdržaná, pretože zložka je plná.',
	'NOT_MOVED_MESSAGES'			=> '%d Vašich súkromných správ je pozdržaných, pretože zložka je plná.',
	'NO_ACTION_MODE'				=> 'Nie je určená akcia so správou.',
	'NO_AUTHOR'						=> 'Nie je definovaný autor pre túto správu',
	'NO_AVATAR_CATEGORY'			=> 'Žiadny',

	'NO_AUTH_DELETE_MESSAGE'		=> 'Nemáte oprávnenie na mazanie súkromných správ.',
	'NO_AUTH_EDIT_MESSAGE'			=> 'Nemáte oprávnenie na úpravu súkromných správ.',
	'NO_AUTH_FORWARD_MESSAGE'		=> 'Nemáte oprávnenie na preposielanie súkromných správ.',
	'NO_AUTH_GROUP_MESSAGE'			=> 'Nemáte oprávnenie na posielanie súkromných správ skupinám užívateľov.',
	'NO_AUTH_PASSWORD_REMINDER'		=> 'Nemáte oprávnenie na zažiadanie nového hesla.',
	'NO_AUTH_READ_HOLD_MESSAGE'		=> 'Nemáte oprávnenie na čítanie súkromných správ, ktoré sú podržané.',
	'NO_AUTH_READ_MESSAGE'			=> 'Nemáte oprávnenie na čítanie súkromných správ.',
	'NO_AUTH_READ_REMOVED_MESSAGE'	=> 'Nemáte oprávnenie na čítanie tejto súkromnej správy, pretože bola odstránená jej autorom.',
	'NO_AUTH_SEND_MESSAGE'			=> 'Nemáte oprávnenie na posielanie súkromných správ.',
	'NO_AUTH_SIGNATURE'				=> 'Nemáte oprávnenie na definovanie podpisu',

	'NO_BCC_RECIPIENT'			=> 'Žiadny',
	'NO_BOOKMARKS'				=> 'Nemáte žiadne záložky',
	'NO_BOOKMARKS_SELECTED'		=> 'Nevybrali ste žiadne záložky',
	'NO_EDIT_READ_MESSAGE'		=> 'Súkromná správa už nemôže byť upravená, pretože bola prečítaná.',
	'NO_EMAIL_USER'				=> 'Použitý e-mail/užívateľské meno nemôže byť nájdený',
	'NO_FOES'					=> 'Zatiaľ nie sú definovaní žiadni nepriatelia',
	'NO_FRIENDS'				=> 'Zatiaľ nie sú definovaní žiadni priatelia',
	'NO_FRIENDS_OFFLINE'		=> 'Žiadni priatelia nie sú offline',
	'NO_FRIENDS_ONLINE'			=> 'Žiadni priatelia nie sú online',
	'NO_GROUP_SELECTED'			=> 'Nie je určená žiadna skupina užívateľov',
	'NO_IMPORTANT_NEWS'			=> 'Nie sú prítomné žiadne dôležité oznamy',
	'NO_MESSAGE'				=> 'Súkromná správa nemôže byť nájdená',
	'NO_NEW_FOLDER_NAME'		=> 'Musíte určiť názov novej zložky',
	'NO_NEWER_PM'				=> 'Nie sú žiadne novšie správy',
	'NO_OLDER_PM'				=> 'Nie sú žiadne staršie správy',
	'NO_PASSWORD_SUPPLIED'		=> 'Nemôžete sa prihlásiť bez hesla.',
	'NO_RECIPIENT'				=> 'Nie je určený žiadny príjemca',
	'NO_RULES_DEFINED'			=> 'Nie sú určené žiadne pravidlá',
	'NO_SAVED_DRAFTS'			=> 'Nie sú uložené žiadne koncepty',
	'NO_TO_RECIPIENT'			=> 'Žiadny',
	'NO_WATCHED_FORUMS'			=> 'Nesledujete žiadne fóra.',
	'NO_WATCHED_SELECTED'		=> 'Nevybrali ste žiadne sledované témy alebo fóra.',
	'NO_WATCHED_TOPICS'			=> 'Nesledujete žiadne témy.',

	'PASS_TYPE_ALPHA_EXPLAIN'	=> 'Heslo musí mať dĺžku %1$d až %2$d znakov a musí obsahovať písmená a čísla.',
	'PASS_TYPE_ANY_EXPLAIN'		=> 'Musí mať od %1$d do %2$d znakov.',
	'PASS_TYPE_CASE_EXPLAIN'	=> 'Heslo musí mať dĺžku %1$d až %2$d znakov a musí obsahovať malé aj veľké písmená.',
	'PASS_TYPE_SYMBOL_EXPLAIN'	=> 'Heslo musí mať od %1$d do %2$d znakov a musí obsahovať malé aj veľké písmená, čísla a symboly.',
	'PASSWORD'					=> 'Heslo',
	'PASSWORD_ACTIVATED'		=> 'Vaše nové heslo bolo aktivované',
	'PASSWORD_UPDATED'			=> 'Vaše heslo bolo úspešne odoslané na Vašu pôvodnú e-mailovú adresu.',
	'PERMISSIONS_RESTORED'		=> 'Pôvodné oprávnenia boli úspešne obnovené.',
	'PERMISSIONS_TRANSFERRED'	=> 'Oprávnenia od <strong>%s</strong> boli úspešne prenesené, teraz môžete prezerať fórum s jeho/jej užívateľskými oprávneniami.<br />Všimnite si, prosím, že oprávnenia administrátora neboli prenesené. Kedykoľvek sa môžete vrátiť k svojim pôvodným oprávneniam.',
	'PM_DISABLED'				=> 'Posielanie súkromných správ bolo na tomto fóre zablokované',
	'PM_FROM'					=> 'Od',
	'PM_FROM_REMOVED_AUTHOR'	=> 'Táto správa bola odoslaná užívateľom, ktorý už nie je zaregistrovaný.',
	'PM_ICON'					=> 'Ikona SS',
	'PM_INBOX'					=> 'Doručená pošta',
	'PM_NO_USERS'				=> 'Zadaní užívatelia neexistujú.',
	'PM_OUTBOX'					=> 'Správy na odoslanie',
	'PM_SENTBOX'				=> 'Odoslaná pošta',
	'PM_SUBJECT'				=> 'Predmet správy',
	'PM_TO'						=> 'Odoslať komu',
	'PM_USERS_REMOVED_NO_PM'	=> 'Niektorí užívatelia nemohli byť pridaní, pretože majú zakázané prijímanie Súkromných správ.',
	'POPUP_ON_PM'				=> 'Vyskakovacie okno pri príchode novej súkromnej správy',
	'POST_EDIT_PM'				=> 'Upraviť správu',
	'POST_FORWARD_PM'			=> 'Preposlať správu',
	'POST_NEW_PM'				=> 'Odoslať správu',
	'POST_PM_LOCKED'			=> 'Posielanie súkromných správ je zakázané',
	'POST_PM_POST'				=> 'Citovať príspevok',
	'POST_QUOTE_PM'				=> 'Citovať správu',
	'POST_REPLY_PM'				=> 'Odpovedať na správu',
	'PRINT_PM'					=> 'Vytlačiť zobrazené',
	'PREFERENCES_UPDATED'		=> 'Vaše nastavenia boli aktualizované.',
	'PROFILE_INFO_NOTICE'		=> 'Uvedomte si, prosím, že táto informácia bude viditeľná pre iných členov. Buďte opatrní pri vkladaní akýchkoľvek súkromných podrobností. Akékoľvek pole označené * musí byť vyplnené.',
	'PROFILE_UPDATED'			=> 'Váš profil bol aktualizovaný.',

	'RECIPIENT'							=> 'Prijímateľ',
	'RECIPIENTS'						=> 'Prijímatelia',
	'REGISTRATION'						=> 'Registrácia',
	'RELEASE_MESSAGES'					=> '%sUvoľniť všetky pozdržané správy%s… budú znovu zatriedené do príslušnej zložky, ak bol vytvorený dostatok priestoru.',
	'REMOVE_ADDRESS'					=> 'Odstrániť adresu',
	'REMOVE_SELECTED_BOOKMARKS'			=> 'Odstrániť vybraté záložky',
	'REMOVE_SELECTED_BOOKMARKS_CONFIRM'	=> 'Ste si istí, že chcete odstrániť všetky vybraté záložky?',
	'REMOVE_BOOKMARK_MARKED'			=> 'Odstrániť označené záložky',
	'REMOVE_FOLDER'						=> 'Odstrániť zložku',
	'REMOVE_FOLDER_CONFIRM'				=> 'Ste si istí, že chcete odstrániť túto zložku?',
	'RENAME'							=> 'Premenovať',
	'RENAME_FOLDER'						=> 'Premenovať zložku',
	'REPLIED_MESSAGE'					=> 'Odpovedané na správu',
	'REPLY_TO_ALL'						=> 'Odpovedať odosielateľovi a všetkým adresátom',
	'REPORT_PM'							=> 'Nahlásiť súkromnú správu',
	'RESIGN_SELECTED'					=> 'Na vybratých zrušiť označenie',
	'RETURN_FOLDER'						=> '%1$sVrátiť sa k predchádzajúcej zložke%2$s',
	'RETURN_UCP'						=> '%sVrátiť sa do Ovládacieho panela užívateľa%s',
	'RULE_ADDED'						=> 'Pravidlo bolo úspešne pridané',
	'RULE_ALREADY_DEFINED'				=> 'Toto pravidlo bolo predtým definované',
	'RULE_DELETED'						=> 'Pravidlo bolo úspešne odstránené',
	'RULE_NOT_DEFINED'					=> 'Pravidlo nebolo korektne určené',
	'RULE_REMOVED_MESSAGE'				=> 'Jedna súkromná správa bola odstránená z dôvodu uplatnenia filtrov súkromných správ.',
	'RULE_REMOVED_MESSAGES'				=> '%d súkromných správ bolo odstránených z dôvodu uplatnenia filtrov súkromných správ.',

	'SAME_PASSWORD_ERROR'		=> 'Nové heslo, ktoré ste zadali, je totožné s Vašim pôvodným heslom',
	'SEARCH_YOUR_POSTS'			=> 'Zobraziť Vaše správy',
	'SEND_PASSWORD'				=> 'Odoslať heslo',
	'SENT_AT'					=> 'Odoslané', // Used before dates in private messages
	'SHOW_EMAIL'				=> 'Užívatelia ma môžu kontaktovať e-mailom',
	'SIGNATURE_EXPLAIN'			=> 'Toto je blok textu, ktorý môže byť vložený do príspevkov, ktoré vytvoríte, no je obmedzený na %d znakov',
	'SIGNATURE_PREVIEW'			=> 'Váš podpis bude takto zobrazený v príspevkoch',
	'SIGNATURE_TOO_LONG'		=> 'Váš podpis je príliš dlhý.',
	'SORT'						=> 'Triediť',
	'SORT_COMMENT'				=> 'Popis súboru',
	'SORT_DOWNLOADS'			=> 'Počet stiahnutí',
	'SORT_EXTENSION'			=> 'Prípona',
	'SORT_FILENAME'				=> 'Názov súboru',
	'SORT_POST_TIME'			=> 'Čas odoslania',
	'SORT_SIZE'					=> 'Veľkosť súboru',

	'TIMEZONE'					=> 'Časové pásmo',
	'TO'						=> 'Komu',
	'TOO_MANY_RECIPIENTS'		=> 'Pokúsili ste sa poslať súkromný správu príliš veľa príjemcom',
	'TOO_MANY_REGISTERS'		=> 'Prekročili ste maximálny počet pokusov o registráciu počas tohto spojenia. Skúste to neskôr, prosím.',

	'UCP'						=> 'Ovládací panel užívateľa',
	'UCP_ACTIVATE'				=> 'Aktivovať konto',
	'UCP_ADMIN_ACTIVATE'		=> 'Uvedomte si, prosím, že budete potrebovať vložiť platnú e-mailovú adresu predtým, než bude Vaše konto aktivované. Administrátor skontroluje Vaše konto a ak ho povolí, budete o tom informovaní e-mailom na adrese, ktorú zadáte počas registrácie.',
	'UCP_AIM'					=> 'AOL Instant Messenger',
	'UCP_ATTACHMENTS'			=> 'Prílohy',
	'UCP_COPPA_BEFORE'			=> 'Pred %s',
	'UCP_COPPA_ON_AFTER'		=> 'Dňa alebo neskôr %s',
	'UCP_EMAIL_ACTIVATE'		=> 'Uvedomte si, prosím, že budete potrebovať vložiť platnú e-mailovú adresu predtým, než bude Vaše konto aktivované. Dostanete e-mail s aktivačným linkom, na adresu, ktorú zadáte počas registrácie.',
	'UCP_ICQ'					=> 'ICQ číslo',
	'UCP_JABBER'				=> 'Adresa Jabber-a',

	'UCP_MAIN'					=> 'Celkový náhľad',
	'UCP_MAIN_ATTACHMENTS'		=> 'Organizovať prílohy',
	'UCP_MAIN_BOOKMARKS'		=> 'Organizovať záložky',
	'UCP_MAIN_DRAFTS'			=> 'Organizovať koncepty',
	'UCP_MAIN_FRONT'			=> 'Úvodná stránka',
	'UCP_MAIN_SUBSCRIBED'		=> 'Organizovať odbery',

	'UCP_MSNM'					=> 'Windows Live Messenger',
	'UCP_NO_ATTACHMENTS'		=> 'Neodoslali ste žiadne súbory',

	'UCP_PREFS'					=> 'Nastavenia fóra',
	'UCP_PREFS_PERSONAL'		=> 'Upraviť celkové nastavenia',
	'UCP_PREFS_POST'			=> 'Upraviť predvoľby odosielania príspevkov',
	'UCP_PREFS_VIEW'			=> 'Upraviť možnosti zobrazenia',

	'UCP_PM'					=> 'Súkromné správy',
	'UCP_PM_COMPOSE'			=> 'Písať správu',
	'UCP_PM_DRAFTS'				=> 'Organizovať koncepty SS',
	'UCP_PM_OPTIONS'			=> 'Upraviť voľby',
	'UCP_PM_POPUP'				=> 'Súkromné správy',
	'UCP_PM_POPUP_TITLE'		=> 'Vyskakovacie okno súkromnej správy',
	'UCP_PM_UNREAD'				=> 'Neprečítané správy',
	'UCP_PM_VIEW'				=> 'Zobraziť správy',

	'UCP_PROFILE'				=> 'Profil',
	'UCP_PROFILE_AVATAR'		=> 'Upraviť avatar',
	'UCP_PROFILE_PROFILE_INFO'	=> 'Upraviť profil',
	'UCP_PROFILE_REG_DETAILS'	=> 'Upraviť nastavenia konta',
	'UCP_PROFILE_SIGNATURE'		=> 'Upraviť podpis',

	'UCP_USERGROUPS'			=> 'Skupiny užívateľov',
	'UCP_USERGROUPS_MEMBER'		=> 'Upraviť členstvo v skupine',
	'UCP_USERGROUPS_MANAGE'		=> 'Organizovať skupiny užívateľov',

	'UCP_REGISTER_DISABLE'			=> 'Vytvorenie nového konta nie je momentálne možné.',
	'UCP_REMIND'					=> 'Poslať heslo',
	'UCP_RESEND'					=> 'Poslať aktivačný e-mail',
	'UCP_WELCOME'					=> 'Vitajte v Ovládacom paneli užívateľa. Odtiaľto môžete sledovať, zobraziť a aktualizovať Váš profil, nastavenia, odoberané fóra a témy. Môžete tiež odoslať správy iným užívateľom (ak je to povolené). Uistite sa, prosím, že si prečítate akýkoľvek oznam predtým, než budete pokračovať.',
	'UCP_YIM'						=> 'Yahoo Messenger',
	'UCP_ZEBRA'						=> 'Priatelia a nepriatelia',
	'UCP_ZEBRA_FOES'				=> 'Organizovať nepriateľov',
	'UCP_ZEBRA_FRIENDS'				=> 'Organizovať priateľov',
	'UNDISCLOSED_RECIPIENT'			=> 'Neznámy doručiteľ',
	'UNKNOWN_FOLDER'				=> 'Neznáma zložka',
	'UNWATCH_MARKED'				=> 'Označené nesledovať',
	'UPLOAD_AVATAR_FILE'			=> 'Nahrať z Vášho PC',
	'UPLOAD_AVATAR_URL'				=> 'Nahrať pomocou URL',
	'UPLOAD_AVATAR_URL_EXPLAIN'		=> 'Vložte URL miesta, kde sa nachádza obrázok, tento bude prihratý na túto stránku.',
	'USERNAME_ALPHA_ONLY_EXPLAIN'	=> 'Užívateľské meno musí byť dlhé medzi %1$d a %2$d znakmi a obsahovať len písmená a čísla',
	'USERNAME_ALPHA_SPACERS_EXPLAIN'=> 'Užívateľské meno musí byť dlhé medzi %1$d a %2$d znakmi a obsahovať len písmená, čísla, medzeru alebo -+_[] znaky.',
	'USERNAME_ASCII_EXPLAIN'		=> 'Užívateľské meno musí byť %1$d až %2$d znakov dlhé a môže sa skladať iba z ASCII znakov.',
	'USERNAME_LETTER_NUM_EXPLAIN'	=> 'Užívateľské meno musí byť %1$d až %2$d znakov dlhé a môže sa skladať iba z písmen a číslic.',
	'USERNAME_LETTER_NUM_SPACERS_EXPLAIN'=> 'Užívateľské meno musí byť %1$d až %2$d znakov dlhé a môže sa skladať iba z písmen, číslic, medzery alebo znakov -+_[].',
	'USERNAME_CHARS_ANY_EXPLAIN'	=> 'Dĺžka musí byť medzi %1$d a %2$d znakmi.',
	'USERNAME_TAKEN_USERNAME'		=> 'Užívateľské meno, ktoré ste vložili je už používané. Vyberte si, prosím, iné meno.',
	'USERNAME_DISALLOWED_USERNAME'	=> 'Užívateľské meno, ktoré ste vložili bolo vylúčené (udelený ban).',
	'USER_NOT_FOUND_OR_INACTIVE'	=> 'Užívateľské mená, ktoré ste určili nemôžu byť nájdené alebo ich užívatelia nie sú aktivovaní.',

	'VIEW_AVATARS'				=> 'Zobrazovať avatarov',
	'VIEW_EDIT'					=> 'Zobraziť/Upraviť',
	'VIEW_FLASH'				=> 'Zobrazovať Flash animácie',
	'VIEW_IMAGES'				=> 'Zobrazovať obrázky v príspevkoch',
	'VIEW_NEXT_HISTORY'			=> 'Ďalšia SS v histórii',
	'VIEW_NEXT_PM'				=> 'Ďalšia SS',
	'VIEW_PM'					=> 'Zobraziť správu',
	'VIEW_PM_INFO'				=> 'Detaily správy',
	'VIEW_PM_MESSAGE'			=> '1 správa',
	'VIEW_PM_MESSAGES'			=> '%d správ',
	'VIEW_PREVIOUS_HISTORY'		=> 'Predchádzajúca SS v histórii',
	'VIEW_PREVIOUS_PM'			=> 'Predchádzajúca SS',
	'VIEW_SIGS'					=> 'Zobrazovať podpisy',
	'VIEW_SMILIES'				=> 'Zobrazovať smajlíky ako obrázky',
	'VIEW_TOPICS_DAYS'			=> 'Zobrazovať témy z predchádzajúcich dní',
	'VIEW_TOPICS_DIR'			=> 'Zobrazovať smerovanie poradia tém',
	'VIEW_TOPICS_KEY'			=> 'Zobrazovať témy triedené podľa',
	'VIEW_POSTS_DAYS'			=> 'Zobrazovať príspevky z predchádzajúcich dní',
	'VIEW_POSTS_DIR'			=> 'Zobrazovať smerovanie poradia príspevkov',
	'VIEW_POSTS_KEY'			=> 'Zobrazovať príspevky triedené podľa',

	'WATCHED_EXPLAIN'			=> 'Nižšie sa nachádza zoznam fór a tém, ktoré ste prihlásili k odberu. Budete tiež informovaní o každom novom príspevku. Pre odhlásenie, označte fórum alebo tému a stlačte tlačidlo <em>Označené nesledovať</em>.',
	'WATCHED_FORUMS'			=> 'Sledované fóra',
	'WATCHED_TOPICS'			=> 'Sledované témy',
	'WRONG_ACTIVATION'			=> 'Aktivačný kľúč, ktorý ste použili sa nezhoduje so žiadnym kľúčom v databáze',

	'YOUR_DETAILS'				=> 'Vaša aktivita',
	'YOUR_FOES'					=> 'Vaši nepriatelia',
	'YOUR_FOES_EXPLAIN'			=> 'Pre odstránenie užívateľských mien, vyberte ich a potvrďte',
	'YOUR_FRIENDS'				=> 'Vaši priatelia',
	'YOUR_FRIENDS_EXPLAIN'		=> 'Pre odstránenie užívateľských mien, vyberte ich a potvrďte',
	'YOUR_WARNINGS'				=> 'Vaša úroveň upozornenia',

	'PM_ACTION' => array(
		'PLACE_INTO_FOLDER'	=> 'Vložiť do zložky',
		'MARK_AS_READ'		=> 'Označiť ako prečítané',
		'MARK_AS_IMPORTANT'	=> 'Označiť správu',
		'DELETE_MESSAGE'	=> 'Zmazať správu'
	),
	'PM_CHECK' => array(
		'SUBJECT'	=> 'Predmet',
		'SENDER'	=> 'Odosielateľ',
		'MESSAGE'	=> 'Správa',
		'STATUS'	=> 'Stav správy',
		'TO'		=> 'Odoslané komu'
	),
	'PM_RULE' => array(
		'IS_LIKE'		=> 'je ako',
		'IS_NOT_LIKE'	=> 'nie je ako',
		'IS'			=> 'je',
		'IS_NOT'		=> 'nie je',
		'BEGINS_WITH'	=> 'začína s',
		'ENDS_WITH'		=> 'konči s',
		'IS_FRIEND'		=> 'je priateľ',
		'IS_FOE'		=> 'je nepriateľ',
		'IS_USER'		=> 'je užívateľ',
		'IS_GROUP'		=> 'je v skupine užívateľov',
		'ANSWERED'		=> 'zodpovedané',
		'FORWARDED'		=> 'preposlané',
		'TO_GROUP'		=> 'do mojej predvolenej skupiny užívateľov',
		'TO_ME'			=> 'mne'
	),


	'GROUPS_EXPLAIN'	=> 'Skupiny užívateľov umožňujú adminom fóra lepšiu správu užívateľov. Štandardne budete priradení do vybranej skupiny a táto bude Vaša predvolená skupina. Táto skupina určuje ako Vás uvidia iní užívatelia, napr. farba Vášho užívateľského mena, avatar, hodnosť, atď. V závislosti od toho, či to admin povolí, si môžete zmeniť svoju predvolenú skupinu. Môžete byť tiež priradení alebo Vám bude umožnené pripojiť sa k iným skupinám. Niektoré skupiny Vám poskytnú extra práva k zobrazeniu obsahu alebo zvýšia Vaše možnosti v iných oblastiach.',
	'GROUP_LEADER'		=> 'Vodcovstvá',
	'GROUP_MEMBER'		=> 'Členstvá',
	'GROUP_PENDING'		=> 'Nevyriešené členstvá',
	'GROUP_NONMEMBER'	=> 'Ne-členstvá',
	'GROUP_DETAILS'		=> 'Detaily skupiny',

	'NO_LEADER'		=> 'Žiadne vodcovstvá v skupinách',
	'NO_MEMBER'		=> 'Žiadne členstvá v skupinách',
	'NO_PENDING'	=> 'Žiadne nevyriešené členstvá',
	'NO_NONMEMBER'	=> 'Žiadne ne-členstvá',
));

?>

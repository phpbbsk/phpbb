<?php
/**
*
* acp_board [Slovak]
*
* @package language
* @version $Id: board.php,v 1.101 2007/10/15 00:00:00 shaggy Exp $
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

// Board Settings
$lang = array_merge($lang, array(
	'ACP_BOARD_SETTINGS_EXPLAIN'	=> 'Tu môžete určovať základné nastavenia vášho fóra, počínajúc názvom fóra, cez registráciu užívateľov až po nastavenia súkromných správ.',
	'CUSTOM_DATEFORMAT'				=> 'Vlastný…',
	'DEFAULT_DATE_FORMAT'			=> 'Formát dátumu',
	'DEFAULT_DATE_FORMAT_EXPLAIN'	=> 'Použitá syntax je zhodná s PHP funkciou <code>date</code>.',
	'DEFAULT_LANGUAGE'				=> 'Predvolený jazyk',
	'DEFAULT_STYLE'					=> 'Predvolený vzhľad',
	'DISABLE_BOARD'					=> 'Zablokovať fórum',
	'DISABLE_BOARD_EXPLAIN'			=> 'Týmto zneprístupníte fórum pre užívateľov. Môžete tiež vložiť krátku (255 znakov) správu, ktorá sa bude zobrazovať.',
	'OVERRIDE_STYLE'				=> 'Nahradiť užívateľom zvolený vzhľad',
	'OVERRIDE_STYLE_EXPLAIN'		=> 'Použije prednastavený vzhľad namiesto užívateľom zvoleného.',
	'SITE_DESC'						=> 'Popis fóra',
	'SITE_NAME'						=> 'Názov fóra',
	'SYSTEM_DST'					=> 'Používať letný čas',
	'SYSTEM_TIMEZONE'				=> 'Časové pásmo fóra',
	'WARNINGS_EXPIRE'				=> 'Trvanie varovania',
	'WARNINGS_EXPIRE_EXPLAIN'		=> 'Počet dní, ktoré musia uplynúť, než sa varovanie automaticky odstráni z užívateľského profilu.',
));

// Board Features
$lang = array_merge($lang, array(
	'ACP_BOARD_FEATURES_EXPLAIN'	=> 'Tu môžete zapnúť/vypnúť jednotlivé funkcie fóra.',
	
	'ALLOW_ATTACHMENTS'			=> 'Povoliť prílohy ',
	'ALLOW_BIRTHDAYS'			=> 'Povoliť narodeniny',
	'ALLOW_BIRTHDAYS_EXPLAIN'	=> 'Povoliť vkladanie narodenín a zobrazenie veku v užívateľskom profile. Upozorňujeme, že výpis narodenín v obsahu fóra je riadený nastavením zaťaženia.',
	'ALLOW_BOOKMARKS'			=> 'Povoliť záložky',
	'ALLOW_BOOKMARKS_EXPLAIN'	=> 'Užívateľ si môže ukladať osobné záložky.',
	'ALLOW_BBCODE'				=> 'Povoliť BBCode',
	'ALLOW_FORUM_NOTIFY'		=> 'Povoliť sledovanie fóra',
	'ALLOW_NAME_CHANGE'			=> 'Povoliť zmenu užívateľského mena',
	'ALLOW_NO_CENSORS'			=> 'Povoliť zrušenie cenzúry',
	'ALLOW_NO_CENSORS_EXPLAIN'	=> 'Užívateľ môže zrušiť cenzúru slov.',
	'ALLOW_PM_ATTACHMENTS'		=> 'Povoliť prílohy v súkromných správach',
	'ALLOW_SIG'					=> 'Povoliť podpisy',
	'ALLOW_SIG_BBCODE'			=> 'Povoliť BBCode v podpisoch užívateľov',
	'ALLOW_SIG_FLASH'			=> 'Povoliť použitie <code>[FLASH]</code> BBCode značky v podpisoch užívateľov',
	'ALLOW_SIG_IMG'				=> 'Povoliť použitie <code>[IMG]</code> BBCode značky v podpisoch užívateľov',
	'ALLOW_SIG_LINKS'			=> 'Povoliť použitie odkazov v podpisoch užívateľov',
	'ALLOW_SIG_LINKS_EXPLAIN'	=> 'Ak nie je povolené <code>[URL]</code> BBCode značka a automatické oživovanie URL sú zakázané.',
	'ALLOW_SIG_SMILIES'			=> 'Povoliť používanie smajlíkov v podpisoch užívateľov',
	'ALLOW_SMILIES'				=> 'Povoliť smajlíky (emotikony)',
	'ALLOW_TOPIC_NOTIFY'		=> 'Povoliť sledovanie témy',
	'BOARD_PM'					=> 'Súkromné správy',
	'BOARD_PM_EXPLAIN'			=> 'Povoliť alebo zakázať súkromné správy pre všetkých užívateľov.',
));

// Avatar Settings
$lang = array_merge($lang, array(
	'ACP_AVATAR_SETTINGS_EXPLAIN'	=> 'Avatary sú vo všeobecnosti malé, jedinečné obrázky, s ktorými je spájaný konkrétny užívateľ. V závislosti od vzhľadu, sú pri prezeraní tém fóra väčšinou umiestnené pod užívateľským menom. Tu môžete nastaviť, ako môžu užívatelia definovať svojich avatarov. Pre možnosť pridávať ďalších avatarov je dôležité, aby existoval adresár uvedený nižšie a aby web server mohol doň zapisovať. Limity veľkosti súborov platia iba nahraných (uploadovaných) avatarov, nevzťahujú sa na externé obrázky.',

	'ALLOW_LOCAL'					=> 'Povoliť galériu avatarov',
	'ALLOW_REMOTE'					=> 'Povoliť vzdialených avatarov',
	'ALLOW_REMOTE_EXPLAIN'			=> 'Obrázok avatara na inom serveri.',
	'ALLOW_UPLOAD'					=> 'Povoliť nahrávanie avatarov',
	'AVATAR_GALLERY_PATH'			=> 'Cesta ku galérii avatarov',
	'AVATAR_GALLERY_PATH_EXPLAIN'	=> 'Cesta z koreňového adresára (s inštaláciou phpBB) pre prednastavené avatary, napr.:<samp>images/avatars/gallery</samp>',
	'AVATAR_STORAGE_PATH'			=> 'Cesta na ukladanie avatarov',
	'AVATAR_STORAGE_PATH_EXPLAIN'	=> 'Cesta z koreňového adresára (s inštaláciou phpBB), napr.: <samp>images/avatars/upload</samp>',
	'MAX_AVATAR_SIZE'				=> 'Maximálne rozmery avataru',
	'MAX_AVATAR_SIZE_EXPLAIN'		=> 'Šírka x Výška  v pixeloch.',
	'MAX_FILESIZE'					=> 'Maximálna veľkosť súboru s avatarom',
	'MAX_FILESIZE_EXPLAIN'			=> 'Pre nahrávané avatary.',
	'MIN_AVATAR_SIZE'				=> 'Minimálne rozmery obrázku postavičky',
	'MIN_AVATAR_SIZE_EXPLAIN'		=> 'Šírka x Výška  v pixeloch.',
));

// Message Settings
$lang = array_merge($lang, array(
	'ACP_MESSAGE_SETTINGS_EXPLAIN'		=> 'Tu môžete meniť nastavenia pre komunikáciu prostredníctvom súkromných správ',

	'ALLOW_BBCODE_PM'			=> 'Povoliť BBCode v súkromných správach',
	'ALLOW_FLASH_PM'			=> 'Povoliť použitie BBcode značky <code>[FLASH]</code>',
	'ALLOW_FLASH_PM_EXPLAIN'	=> 'Upozornenie: aj keď povolíte používanie Flashu v súkromných správach, závisí to od oprávnení.',
	'ALLOW_FORWARD_PM'			=> 'Povoliť preposielanie súkromných správ',
	'ALLOW_IMG_PM'				=> 'Povoliť použitie BBcode značky <code>[IMG]</code>',
	'ALLOW_MASS_PM'				=> 'Povoliť posielanie súkromných správ viacerým užívateľom a skupinám',
	'ALLOW_MASS_PM_EXPLAIN'		=> 'Posielanie skupinám môže byť upravené pre každú skupinu zvlášť na strane s nastaveniami skupiny.',
	'ALLOW_PRINT_PM'			=> 'Povoliť náhľad pred tlačou pri súkromných správach',
	'ALLOW_QUOTE_PM'			=> 'Povoliť citácie v súkromných správach',
	'ALLOW_SIG_PM'				=> 'Povoliť podpis v súkromných správach',
	'ALLOW_SMILIES_PM'			=> 'Povoliť smajlíkov v súkromných správach',
	'BOXES_LIMIT'				=> 'Maximálny počet súkromných správ na jednu schránku',
	'BOXES_LIMIT_EXPLAIN'		=> 'Tu nastavte maximálny počet správ, ktoré môžu prijať užívatelia do každej svojej schránky. Ak chcete povoliť neobmedzený počet správ, zadajte 0.',
	'BOXES_MAX'					=> 'Maximálny počet zložiek na súkromné správy',
	'BOXES_MAX_EXPLAIN'			=> 'Určuje počet osobných zložiek, ktoré si môžu užívatelia vytvoriť pre súkromné správy.',
	'ENABLE_PM_ICONS'			=> 'Povoliť použitie tematických ikoniek v súkromných správach',
	'FULL_FOLDER_ACTION'		=> 'Predvolená akcia pri plnej schránke',
	'FULL_FOLDER_ACTION_EXPLAIN'=> 'Predvolená akcia, ktorá sa vykoná, ak je užívateľova schránka plná a ak nie je možné použiť akciu nastavenú užívateľom. Pre zložku "odoslané správy" je vždy predvolenou akciou zmazanie starých správ.',
	'HOLD_NEW_MESSAGES'			=> 'Podržať nové správy',
	'PM_EDIT_TIME'				=> 'Obmedziť dobu upravovania',
	'PM_EDIT_TIME_EXPLAIN'		=> 'Obmedzí dobu, počas ktorej môže užívateľ upraviť nedoručenú súkromnú správu. Pre neobmedzenú editáciu zadajte 0.',
	'PM_MAX_RECIPIENTS'			=> 'Maximálny povolený počet príjemcov',
	'PM_MAX_RECIPIENTS_EXPLAIN'	=> 'Maximálny počet príjemcov jednej súkromnej správy. Zadajte 0 pre neobmedzený počet príjemcov. Toto nastavenie môže byť upravené pre každú skupinu na stránke s nastaveniami skupiny.',
));

// Post Settings
$lang = array_merge($lang, array(
	'ACP_POST_SETTINGS_EXPLAIN'			=> 'Tu sa nastavujú základné hodnoty pre odosielanie správ a príspevkov.',
	'ALLOW_POST_LINKS'					=> 'Povoliť odkazy v príspevkoch a súkromných správach',
	'ALLOW_POST_LINKS_EXPLAIN'			=> 'Ak nie je táto možnosť povolená, značka <code>[URL]</code> a automatické oživovanie URL je vypnuté.',
	'ALLOW_POST_FLASH'					=> 'Povoliť použitie značky <code>[FLASH]</code> v príspevkoch. ',
	'ALLOW_POST_FLASH_EXPLAIN'			=> 'Ak nie je táto možnosť povolená, značka <code>[FLASH]</code> je v príspevkoch vypnutá.',
	'ENABLE_QUEUE_TRIGGER'			=> 'Povoliť schvaľovanie príspevkov',
	'ENABLE_QUEUE_TRIGGER_EXPLAIN'	=> 'Umožňuje nastaviť, aby bolo potrebné schváliť všetky príspevky užívateľov, ktorých počet príspevkov je menší ako hodnota nastavená nižšie. Toto nastavenie neovplyvňuje oprávnenia pre schvaľovanie príspevkov alebo tém.',
	'QUEUE_TRIGGER_POSTS'			=> 'Počet príspevkov pre prispievanie bez nutnosti schvaľovania',
	'QUEUE_TRIGGER_POSTS_EXPLAIN'	=> 'Ak je zapnuté schvaľovanie príspevkov, toto je počet príspevkov, ktorý užívateľ musí dosiahnuť, aby mohol odosielať príspevky bez nutnosti schvaľovania. Ak počet príspevkov daného užívateľa je menší ako toto číslo, príspevok je automaticky zaradený medzi príspevky čakajúce na schválenie.',

	'BUMP_INTERVAL'					=> 'Interval oživenia (bump)',
	'BUMP_INTERVAL_EXPLAIN'			=> 'Počet minút, hodín, či dní od posledného príspevku v téme a možnosti oživiť (bump) túto tému.',
	'CHAR_LIMIT'					=> 'Maximálny počet znakov na príspevok alebo súkromnú správu',
	'CHAR_LIMIT_EXPLAIN'			=> 'Počet znakov povolených pre každú správu. Pre žiadne obmedzenia, zadajte 0.',
	'DISPLAY_LAST_EDITED'			=> 'Zobraziť dátum poslednej úpravy',
	'DISPLAY_LAST_EDITED_EXPLAIN'	=> 'Nastaví, či sa má zobrazovať informácia, kedy a kým bol príspevok naposledy upravený',
	'EDIT_TIME'						=> 'Obmedziť dobu upravovania',
	'EDIT_TIME_EXPLAIN'				=> 'Obmedzí dobu, počas ktorej môže užívateľ upraviť svoj príspevok. Pre neobmedzenú editáciu zadajte 0.',
	'FLOOD_INTERVAL'				=> 'Ochranný interval',
	'FLOOD_INTERVAL_EXPLAIN'		=> 'Počet sekúnd, ktoré musí užívateľ počkať, kým bude môcť pridať ďalší príspevok. Ak chcete umožniť užívateľom aby mohli ignorovať toto nastavenie, zmeňte ich oprávnenia.',
	'HOT_THRESHOLD'					=> 'Počet príspevkov v obľúbených témach',
	'HOT_THRESHOLD_EXPLAIN'			=> 'Určite minimálny počet príspevkov, kedy sa téma označí ako obľúbená. Nastavením na 0 sa funkcia deaktivuje.',
	'MAX_POLL_OPTIONS'				=> 'Maximálny počet možností hlasovania',
	'MAX_POST_FONT_SIZE'			=> 'Maximálna veľkosť písma v príspevku',
	'MAX_POST_FONT_SIZE_EXPLAIN'	=> 'Zadajte 0 pre neobmedzenú veľkosť písma.',
	'MAX_POST_IMG_HEIGHT'			=> 'Maximálna výška obrázku v príspevku',
	'MAX_POST_IMG_HEIGHT_EXPLAIN'	=> 'Maximálna výška obrázku/flash súboru, ktorá je povolená v príspevku. Zadajte 0 pre nastavenie bez obmedzenia.',
	'MAX_POST_IMG_WIDTH'			=> 'Maximálna šírka obrázku v príspevku',
	'MAX_POST_IMG_WIDTH_EXPLAIN'	=> 'Maximálna šírka obrázku/flash súboru, ktorá je povolená v príspevku. Zadajte 0 pre nastavenie bez obmedzenia.',
	'MAX_POST_URLS'					=> 'Maximálny počet odkazov v príspevku',
	'MAX_POST_URLS_EXPLAIN'			=> 'Najvyšší povolený počet odkazov v príspevku. Zadajte 0 pre nastavenie bez obmedzenia počtu odkazov.',
	'POSTING'						=> 'Odosielanie',
	'POSTS_PER_PAGE'				=> 'Príspevkov na stranu',
	'QUOTE_DEPTH_LIMIT'				=> 'Maximálny počet vnorených citácií',
	'QUOTE_DEPTH_LIMIT_EXPLAIN'		=> 'Maximálny počet citácií, ktoré môžu byť do seba vnorené. Zadajte 0 pre nastavenie neobmedzeného počtu vnorených citácií.',
	'SMILIES_LIMIT'					=> 'Maximálny počet smajlíkov v príspevku',
	'SMILIES_LIMIT_EXPLAIN'			=> 'Maximálny počet smajlíkov, ktorý je možné použiť v príspevku. Zadajte 0 pre nastavenie bez obmedzenia počtu smajlíkov.',
	'TOPICS_PER_PAGE'				=> 'Tém na stranu',
));

// Signature Settings
$lang = array_merge($lang, array(
	'ACP_SIGNATURE_SETTINGS_EXPLAIN'	=> 'Tu môžete nastaviť východzie hodnoty pre podpisy',

	'MAX_SIG_FONT_SIZE'				=> 'Maximálna veľkosť písma v podpise',
	'MAX_SIG_FONT_SIZE_EXPLAIN'		=> 'Maximálna veľkosť písma, ktoré je povolené použiť v podpise. Zadajte 0 pre neobmedzenú veľkosť.',
	'MAX_SIG_IMG_HEIGHT'			=> 'Maximálna výška obrázku v podpise',
	'MAX_SIG_IMG_HEIGHT_EXPLAIN'	=> 'Maximálna výška obrázku/flash súboru, ktorá je povolená v podpise. Zadajte 0 pre neobmedzenú výšku.',
	'MAX_SIG_IMG_WIDTH'				=> 'Maximálna šírka obrázku v podpise',
	'MAX_SIG_IMG_WIDTH_EXPLAIN'		=> 'Maximálna šírka obrázku/flash súboru, ktorá je povolená v podpise. Zadajte 0 pre neobmedzenú šírku.',
	'MAX_SIG_LENGTH'				=> 'Maximálna dĺžka podpisu',
	'MAX_SIG_LENGTH_EXPLAIN'		=> 'Maximálny počet znakov v podpise.',
	'MAX_SIG_SMILIES'				=> 'Maximálny počet smajlíkov v podpise',
	'MAX_SIG_SMILIES_EXPLAIN'		=> 'Maximálny počet smajlíkov, ktorý je povolené mať v podpise. Zadajte 0 pre neobmedzený počet.',
	'MAX_SIG_URLS'					=> 'Maximálny počet odkazov v podpise',
	'MAX_SIG_URLS_EXPLAIN'			=> 'Maximálny počet odkazov, ktorý je povolené mať v podpise. Zadajte 0 pre neobmedzený počet.',
));

// Registration Settings
$lang = array_merge($lang, array(
	'ACP_REGISTER_SETTINGS_EXPLAIN'		=> 'Tu môžete upraviť registráciu a nastavenia súvisiace s užívateľským profilom.',

	'ACC_ACTIVATION'			=> 'Aktivácia účtu',
	'ACC_ACTIVATION_EXPLAIN'	=> 'Stanovuje, či má užívateľ okamžitý prístup k fóru, alebo vyžadovaná určitá forma aktivácie. Môžete taktiež úplne zakázať nové registrácie.',
	'ACC_ADMIN'					=> 'Administrátorom',
	'ACC_DISABLE'				=> 'Zakáž',
	'ACC_NONE'					=> 'Žiadna',
	'ACC_USER'					=> 'Užívateľom',
//	'ACC_USER_ADMIN'			=> 'User + Admin',
	'ALLOW_EMAIL_REUSE'			=> 'Povoliť použitie zhodnej emailovej adresy',
	'ALLOW_EMAIL_REUSE_EXPLAIN'	=> 'Viacerí užívatelia sa budú môcť zaregistrovať pod jednou emailovou adresou.',
	'COPPA'						=> 'COPPA',
	'COPPA_FAX'					=> 'COPPA faxové číslo',
	'COPPA_MAIL'				=> 'COPPA poštová adresa',
	'COPPA_MAIL_EXPLAIN'		=> 'Toto je poštová adresa, kde rodičia budú posielať registračné formuláre COPPA (platí iba v USA)',
	'ENABLE_COPPA'				=> 'Zapnúť COPPA',
	'ENABLE_COPPA_EXPLAIN'		=> 'Vyžaduje od užívateľov prehlásenie, že majú 13 a viac rokov, pre zhodu so zákonom COPPA (USA). Ak je vypnuté, skupiny špecifické pre COPPA sa nebudú zobrazovať.',
	'MAX_CHARS'					=> 'Max',
	'MIN_CHARS'					=> 'Min',
	
	'NO_AUTH_PLUGIN'			=> 'Nebol nájdený vhodný plugin pre autorizáciu.',
	'PASSWORD_LENGTH'			=> 'Dĺžka hesla',
	'PASSWORD_LENGTH_EXPLAIN'	=> 'Minimálny a maximálny počet znakov v hesle.',
	'REG_LIMIT'					=> 'Počet pokusov o registráciu',
	'REG_LIMIT_EXPLAIN'			=> 'Počet pokusov, ktoré môže užívateľ realizovať na overovacom kóde, kým bude daná session uzamknutá.',
	'USERNAME_ALPHA_ONLY'		=> 'Iba alfanumerické znaky',
	'USERNAME_ALPHA_SPACERS'	=> 'Alfanumerické znaky a medzery ',
	'USERNAME_ASCII'			=> 'ASCII (bez medzinárodného unicode)',
	'USERNAME_LETTER_NUM'		=> 'Akékoľvek písmeno a číslo',
	'USERNAME_LETTER_NUM_SPACERS'	=> 'Akékoľvek písmeno, číslo a medzery',
	'USERNAME_CHARS'			=> 'Limit znakov užívateľského mena',
	'USERNAME_CHARS_ANY'		=> 'Akýkoľvek znak',
	'USERNAME_CHARS_EXPLAIN'	=> 'Obmedziť druh znakov, ktoré môžu byť použité v užívateľskom mene, ako medzery sú chápané; medzera (space), -, +, _, [ a ]',
	'USERNAME_LENGTH'			=> 'Dĺžka užívateľského meno',
	'USERNAME_LENGTH_EXPLAIN'	=> 'Minimálny a maximálny počet znakov v užívateľskom mene.',
));

// Visual Confirmation Settings
$lang = array_merge($lang, array(
	'ACP_VC_SETTINGS_EXPLAIN'		=> 'Tu môžete definovat možnosti vizuálneho overovania a nastavenia CAPTCHA.',

	'CAPTCHA_GD'							=> 'GD CAPTCHA',
	'CAPTCHA_GD_FOREGROUND_NOISE'			=> 'GD CAPTCHA so šumom na popredí',
	'CAPTCHA_GD_EXPLAIN'					=> 'Použiť GD pre vytvorenie zložitejšej CAPTCHA.',
	'CAPTCHA_GD_FOREGROUND_NOISE_EXPLAIN'	=> 'Použiť šum na popredí pre zložitejšiu CAPTCHA ak používate GD.',
	'CAPTCHA_GD_X_GRID'						=> 'GD CAPTCHA so šumom na pozadí v x-ovej osi',
	'CAPTCHA_GD_X_GRID_EXPLAIN'				=> 'Použite nižšie hodnoty tohto nastavenia pre sťaženie CAPTCHA. 0 vypne šum na x-ovej osi.',
	'CAPTCHA_GD_Y_GRID'						=> 'GD CAPTCHA so šumom na y-ovej osi',
	'CAPTCHA_GD_Y_GRID_EXPLAIN'				=> 'Použite nižšie hodnoty tohto nastavenia pre sťaženie CAPTCHA. 0 vypne šum na y-ovej osi.',
	
	'CAPTCHA_GD_WAVE'								=> 'Vlnová deformácia GD CAPTCHA',
	'CAPTCHA_GD_WAVE_EXPLAIN'				=> 'Táto možnosť deformuje obrázok podľa sínusovej vlny.',
	'CAPTCHA_GD_3D_NOISE'						=> 'Pridať 3D objekty ako šum',
	'CAPTCHA_GD_3D_NOISE_EXPLAIN'		=> 'Táto možnosť pridá rôzne klamlivé objekty cez písmena.',
	'CAPTCHA_GD_FONTS'							=> 'Použiť rôzne fonty',
	'CAPTCHA_GD_FONTS_EXPLAIN'			=> 'Toto nastavenie určuje koľko rôzných tvarov písmen bude použitých. Môžete použiť štandardné tvary alebo uviesť svoje. Pridanie malých písmen je taktiež možné.',
	'CAPTCHA_FONT_DEFAULT'					=> 'Prednastavené',
	'CAPTCHA_FONT_NEW'							=> 'Nové tvary',
	'CAPTCHA_FONT_LOWER'						=> 'Použiť male písmena',

	'CAPTCHA_PREVIEW_MSG'					=> 'Vaše úpravy vizuálneho overovania neboli uložené. Toto je iba náhľad.',
	'CAPTCHA_PREVIEW_EXPLAIN'				=> 'Takto bude vyzerať CAPTCHA pri použití súčasných nastavení. Použite tlačidlo náhľad pre obnovenie. Upozorňujeme, že CAPTCHA sú náhodné a jednotlivé náhľady sa od seba líšia.',
	'VISUAL_CONFIRM_POST'					=> 'Povoliť vizuálne overovanie príspevkov pre anonymných užívateľov',
	'VISUAL_CONFIRM_POST_EXPLAIN'			=> 'Vyžaduje, aby anonymní užívatelia pri odoslaní príspevku zadali náhodne vygenerovaný kód pre ochranu proti spamu.',
	'VISUAL_CONFIRM_REG'					=> 'Povoliť vizuálne overovanie pri registrácii',
	'VISUAL_CONFIRM_REG_EXPLAIN'			=> 'Vyžaduje, aby noví užívatelia pri registrácii vložili náhodne vygenerovaný kód pre ochranu proti hromadným registráciám.',
	'VISUAL_CONFIRM_REFRESH'						=> 'Povoliť užívateľom obnoviť obrázok CAPTCHA',
	'VISUAL_CONFIRM_REFRESH_EXPLAIN'		=> 'Povolí užívateľom vyžiadať si nový obrázok v prípade, že ho nemôžu vylúštiť pri registrácií.',
));

// Cookie Settings
$lang = array_merge($lang, array(
	'ACP_COOKIE_SETTINGS_EXPLAIN'		=> 'Tu môžete definovať obsah dát obsiahnutých v cookies odosielaných do prehliadačov návštevníkov. Vo väčšine prípadov by mali prednastavené hodnoty bez problémov vyhovovať. Pokiaľ je však potrebné niektoré upraviť, buďte opatrní; ich zlé nastavenie môže zabrániť užívateľom v prihlásení.',

	'COOKIE_DOMAIN'				=> 'Doména cookie',
	'COOKIE_NAME'				=> 'Názov cookie',
	'COOKIE_PATH'				=> 'Cesta ku cookie',
	'COOKIE_SECURE'				=> 'Zabezpečená cookie',
	'COOKIE_SECURE_EXPLAIN'		=> 'Ak váš server beží výhradne cez SSL, nastavte na povolené, ak nie tak nastavte zakázané. Povolenie pri serveri nebežiacom cez SSL môže vyústiť do chýb servera počas presmerovávania.',
	'ONLINE_LENGTH'				=> 'Doba zobrazenia online',
	'ONLINE_LENGTH_EXPLAIN'		=> 'Doba v minútach, po ktorej sa neaktívny užívatelia nebudú objavovať v zoznamoch online užívateľov - čím je hodnota vyššia, tým je náročnejšie spracovanie tohto zoznamu.',
	'SESSION_LENGTH'			=> 'Dĺžka platnosti Session',
	'SESSION_LENGTH_EXPLAIN'	=> 'Session stratí platnosť po uplynutí tohto času (v sekundách).',
));

// Load Settings
$lang = array_merge($lang, array(
	'ACP_LOAD_SETTINGS_EXPLAIN'	=> 'Tu je možné zapnúť a vypnúť niektoré funkcie fóra, pre zníženie nárokov na server. Na väčšine serverov nie je potrebné vypínať akékoľvek funkcie. Každopádne na niektorých systémoch, či zdieľaných hostingoch môže byť užitočné vypnúť funkcie, ktoré pre svoje použitie skutočne nepotrebujete. Môžeš taktiež stanoviť limity zaťaženia systému a aktívnych sessions, po ktorých prekročení sa fórum odpojí.',

	'CUSTOM_PROFILE_FIELDS'			=> 'Voliteľné polia profilu',
	'LIMIT_LOAD'					=> 'Obmedzenie systémového zaťaženia',
	'LIMIT_LOAD_EXPLAIN'			=> 'Ak zaťaženie systému počas jednej minúty prekročí túto hodnotu, fórum sa odpojí, 1.0 sa rovná ~100% vyťaženia jedného procesora. Toto funguje iba na UNIXových serveroch.',
	'LIMIT_SESSIONS'				=> 'Obmedzenie sessions',
	'LIMIT_SESSIONS_EXPLAIN'		=> 'Ak počet sessions prekročí túto hodnotu počas doby jednej minúty, fórum sa odpojí. Zadajte 0 pre neobmedzený počet sessions.',
	'LOAD_CPF_MEMBERLIST'			=> 'Zobrazovať voliteľné polia profilu v zozname užívateľov',
	'LOAD_CPF_VIEWPROFILE'			=> 'Zobrazovať voliteľné polia profilu v užívateľských profiloch',
	'LOAD_CPF_VIEWTOPIC'			=> 'Zobrazovať voliteľné polia profilu v zobrazeniach tém',
	'LOAD_USER_ACTIVITY'			=> 'Zobrazovať aktivitu užívateľov',
	'LOAD_USER_ACTIVITY_EXPLAIN'	=> 'Zobrazuje najaktívnejšiu tému/fórum v užívateľovom profile a užívateľskom kontrolnom paneli. Odporúča sa vypnúť túto funkciu pri fórach s viac ako milión príspevkami.',
	'RECOMPILE_STYLES'			=> 'Nanovo kompilovať staré šablóny',
	'RECOMPILE_STYLES_EXPLAIN'	=> 'Skontroluje zmenené súbory šablón a prekompiluje ich.',
	'YES_ANON_READ_MARKING'			=> 'Povoliť označovanie tém pre anonymných užívateľov',
	'YES_ANON_READ_MARKING_EXPLAIN'	=> 'Uchováva informáciu o čítaných/nečítaných témach aj pre anonymných užívateľov. Ak je vypnuté, zobrazujú sa im všetky témy ako prečítané.',
	'YES_BIRTHDAYS'					=> 'Povoliť vypisovanie narodenín',
	'YES_BIRTHDAYS_EXPLAIN'			=> 'Ak nie je táto možnosť zapnutá, výpis narodenín sa nebude zobrazovať. Pre správne fungovanie musia byť povolené aj narodeniny.',	
	'YES_JUMPBOX'					=> 'Povoliť zobrazovanie Skočiť na',
	'YES_MODERATORS'				=> 'Povoliť zobrazovanie Moderátorov',
	'YES_ONLINE'					=> 'Povoliť vypisovanie pripojených užívateľov',
	'YES_ONLINE_EXPLAIN'			=> 'Zobrazovať pripojených užívateľov na stránkach indexu, fór a a tém.',
	'YES_ONLINE_GUESTS'				=> 'Povoliť anonymných v Kto je on-line',
	'YES_ONLINE_GUESTS_EXPLAIN'		=> 'Povolí vypisovanie anonymných užívateľov v časti Kto je on-line.',
	'YES_ONLINE_TRACK'				=> 'Povoliť obrázkové zobrazenie online stavu',
	'YES_ONLINE_TRACK_EXPLAIN'		=> 'Zobrazí pomocou obrázku užívateľov online stav v profiloch a zobrazeniach tém. ',
	'YES_POST_MARKING'				=> 'Povoliť bodky na témach',
	'YES_POST_MARKING_EXPLAIN'		=> 'Označuje, či užívateľ prispel do diskusie.',
	'YES_READ_MARKING'				=> 'Povoliť značenie tém na serveri',
	'YES_READ_MARKING_EXPLAIN'		=> 'Uchováva informáciu o čítaných/nečítaných témach v databáze namiesto uchovávania v cookie.',
));

// Auth settings
$lang = array_merge($lang, array(
	'ACP_AUTH_SETTINGS_EXPLAIN'	=> 'phpBB podporuje overovacie plug-iny a moduly. Tie umožňujú stanoviť, ako sú užívatelia overovaní pri prihlasovaní sa do fóra. Štandardne sú k dispozícii tri plug-iny; DB, LDAP a Apache. Nie všetky metódy vyžadujú dodatočné informácie, preto vyplňte iba polia, ktoré sú pre danú metódu dôležité.',

	'AUTH_METHOD'				=> 'Vyber metódu overenia',

	'APACHE_SETUP_BEFORE_USE'	=> 'Pred zapnutím tejto metódy overovania v phpBB, musíš najskôr nastaviť apache overovanie. Maj pri tom na pamäti, že užívateľské meno pre apache overovanie, musí byť rovnaké, ako tvoje phpBB užívateľské meno.',

	'LDAP_DN'					=> 'LDAP báza <var>dn</var>',
	'LDAP_DN_EXPLAIN'			=> 'Toto je tzv. Distinguished Name, lokalizujúce užívateľské informácie napr. <samp>o=My Company,c=US</samp>',
	'LDAP_EMAIL'				=> 'LDAP emailový atribút',
	'LDAP_EMAIL_EXPLAIN'		=> 'Sem zadajte názov vášho vloženého emailového atribútu (ak nejaký existuje), aby bolo možné automaticky nastaviť emailovú adresu pre nových užívateľov. Ponechajte toto pole prázdne a užívatelia prihlásený po prvý krát budú mať prázdnu emailovú adresu.',
	'LDAP_INCORRECT_USER_PASSWORD'	=> 'Pripojenie k LDAP serveru sa so zadanými údajmi nepodarilo.',
	'LDAP_NO_EMAIL'				=> 'Stanovený emailový atribút neexistuje.',
	'LDAP_NO_IDENTITY'			=> 'Nebolo možné nájsť prihlasovaciu identitu pre %s',
	'LDAP_PASSWORD'					=> 'LDAP heslo',
	'LDAP_PASSWORD_EXPLAIN'			=> 'Zanechajte prázdne pre použitie anonymného prístupu. V opačnom prípade, vyplňte heslo pre hore uvedeného užívateľa. <strong>UPOZORNENIE:</strong> Toto heslo bude uložené ako nezakódovaný text, viditeľný pre každého, kto má prístup k vašej databáze.',
	'LDAP_PORT'                  => 'Port LDAP servera',
	'LDAP_PORT_EXPLAIN'            => 'Môžete uviesť iný ako prednastavený port 389 a ten sa následne použije pre spojenie s LDAP serverom.',
  'LDAP_SERVER'				=> 'Názov LDAP servera',
	'LDAP_SERVER_EXPLAIN'		=> 'Ak používate LDAP, toto je názov resp. IP adresa LDAP servera. Prípadne môžete uviesť URL adresu ldap://hostname:port/',
	'LDAP_UID'					=> 'LDAP <var>uid</var>',
	'LDAP_UID_EXPLAIN'			=> 'Toto je kľúč, pod ktorých sa vyhľadáva daná login identita, napr. <var>uid</var>, <var>sn</var>, atď.',
	'LDAP_USER'						=> 'LDAP užívateľ <var>dn</var>',
	'LDAP_USER_EXPLAIN'				=> 'Zanechajte prázdne pre anonymný prístup. Ak je vyplnené, phpBB sa pokúsi pripojiť na server ako daný užívateľ, napr. <samp>uid=Username,ou=MyUnit,o=MyCompany,c=US</samp>. Vyžadované pre Active Directory Servere.',
	'LDAP_USER_FILTER'				=> 'LDAP filter užívateľa',
	'LDAP_USER_FILTER_EXPLAIN'      => 'Rôznymi nastaveniami filtrov môžete dodatočne obmedziť vyhľadávanie objektov. Ak napríklad zadáte <samp>objectClass=posixGroup</samp> prejaví sa to použitím <samp>(&(uid=$username)(objectClass=posixGroup))</samp>',
));

// Server Settings
$lang = array_merge($lang, array(
	'ACP_SERVER_SETTINGS_EXPLAIN'	=> 'Tu stanovujete dôležité nastavenia serveru a domény. Prosím, ubezpečte sa, že informácie ktoré vkladáte sú správne, v prípade chýb budú odoslané emaily, obsahujúce nesprávnu informáciu. Pri vkladní názvu domény majte prosím na pamäti, že musím obsahovať aj http:// či označenie pre iný protokol. Číslo portu meňte iba v prípade, ak ste si istý tým, že server používa inú hodnotu - port 80 je správny vo väčšine prípadov.',

	'ENABLE_GZIP'				=> 'Povoliť GZip kompresiu',
	'ENABLE_GZIP_EXPLAIN'		=> 'Generovaný obsah bude pred odoslaním užívateľovi skomprimovaný. To môže znížiť objem prenesených dát, ale zvýši zaťaženie CPU na strane serveru aj užívateľa.',
	'FORCE_SERVER_VARS'			=> 'Prepíš serverové URL nastavenia',
	'FORCE_SERVER_VARS_EXPLAIN'	=> 'Ak je zapnuté, serverové nastavenia definované tu, budú použité namiesto automaticky získaných hodnôt',
	'ICONS_PATH'				=> 'Cesta k ikonám témy',
	'ICONS_PATH_EXPLAIN'		=> 'Cesta z tvojho domovského phpBB adresára, napr. <samp>images/icons</samp>',
	'PATH_SETTINGS'				=> 'Nastavenia ciest',
	'RANKS_PATH'				=> 'Cesta k ikonám hodnotení',
	'RANKS_PATH_EXPLAIN'		=> 'Cesta z tvojho domovského phpBB adresára, napr. <samp>images/ranks</samp>',
	'SCRIPT_PATH'				=> 'Cesta ku skriptom',
	'SCRIPT_PATH_EXPLAIN'		=> 'Cesta relatívna od názvu domény, napr. <samp>/phpBB3</samp>.',
	'SERVER_NAME'				=> 'Názov domény',
	'SERVER_NAME_EXPLAIN'		=> 'Názov domény, z ktorej beží toto fórum (napríklad: <samp>www.foo.bar</samp>)',
	'SERVER_PORT'				=> 'Port servera',
	'SERVER_PORT_EXPLAIN'		=> 'Port, na ktorom beží váš server (väčšinou 80). Zmeňte iba ak je stanovený íný port',
	'SERVER_PROTOCOL'			=> 'Protokol servera',
	'SERVER_PROTOCOL_EXPLAIN'	=> 'Tieto nastavenia sa používajú pre komunikačný protokol servera pre prípad, že sú zmenené/nie sú nastavené v adrese. Ak je toto pole ponechané prázdne, alebo sa protokol nenachádza v adrese, potom sa protokol zisťuje z nastavení zabepečenia cookie (<samp>http://</samp> alebo <samp>https://</samp>).',
	'SERVER_URL_SETTINGS'		=> 'Nastavenia URL servera',
	'SMILIES_PATH'				=> 'Cesta k ikonám smajlíkov',
	'SMILIES_PATH_EXPLAIN'		=> 'Cesta z domovského phpBB adresára, napr. <samp>images/smilies</samp>.',
	'UPLOAD_ICONS_PATH'			=> 'Cesta k ikonkám typov súborov',
	'UPLOAD_ICONS_PATH_EXPLAIN'	=> 'Cesta z domovského phpBB adresára, napr. <samp>images/upload_icons</samp>.',
));

// Security Settings
$lang = array_merge($lang, array(
	'ACP_SECURITY_SETTINGS_EXPLAIN'		=> 'Tu môžete meniť nastavenia týkajúce sa prihlasovania a session',

	'ALL'							=> 'Všetko',
	'ALLOW_AUTOLOGIN'				=> 'Povoliť trvalé prihlásenia',
	'ALLOW_AUTOLOGIN_EXPLAIN'		=> 'Nastavuje, či je povolené automatické prihlásenie užívateľa pri návšteve fóra.',
	'AUTOLOGIN_LENGTH'				=> 'Maximálny počet dní pre trvalé prihlásenia (v dňoch)',
	'AUTOLOGIN_LENGTH_EXPLAIN'		=> 'Doba v dňoch, po ktorej uplynutí prestanú byť trvalé prihlásenia platné, alebo nula pre neobmedzenú dobu.',
	'BROWSER_VALID'					=> 'Overiť prehliadač',
	'BROWSER_VALID_EXPLAIN'			=> 'Overí internetový prehliadač pre každú session, pre zvýšenie bezpečnosti.',
	'CHECK_DNSBL'					=> 'Skontroluj IP na DNS Čiernej listine',
	'CHECK_DNSBL_EXPLAIN'			=> 'Ak je zapnuté, bude overovať IP na nasledujúcich DNSBL službách pri registrácii a posielaní príspevkov: <a href="http://spamcop.net">spamcop.net</a> a <a href="http://spamhaus.org">spamhaus.org</a>. Toto overenie môže chvíľu trvať, v závislosti od nastavenia serveru. Ak sú predpokladané spomalenia fóra, alebo je oznamovaných príliš veľa pozitívnych identifikácií, vypnite toto nastavenie.',
	'CLASS_B'						=> 'A.B',
	'CLASS_C'						=> 'A.B.C',
	'EMAIL_CHECK_MX'				=> 'Over na doméne správnosť MX záznamu emailov',
	'EMAIL_CHECK_MX_EXPLAIN'		=> 'Ak je zapnuté, MX záznam vloženej emailovej adresy je overovaný pri registrácií a zmene profilu.',
	'FORCE_PASS_CHANGE'				=> 'Vyžadovať zmenu hesla',
	'FORCE_PASS_CHANGE_EXPLAIN'		=> 'Vyžaduje od užívateľa aby menil svoje heslo po stanovenom počte dní alebo nastavte nulu pre vypnutie tejto funkcie.',
	'FORM_TIME_MAX'					=> 'Maximálny čas pre odoslanie formulára',
	'FORM_TIME_MAX_EXPLAIN'			=> 'Čas, ktorý ma užívateľ na odoslanie formulára. Pre vypnutie použite -1. Nezabúdajte, že formulár sa môže stať neplatný ak vyprší platnosť session - bez ohľadu na toto nastavenie.',
	'FORM_SID_GUESTS'				=> 'Previazať formulár so session hosťa',
	'FORM_SID_GUESTS_EXPLAIN'		=> 'Ak povolíte túto možnosť, formulár otvorený hosťom bude závislý od jeho session. Toto nastavenie spôsobuje problémy u niektorých providerov.',
	'FORWARDED_FOR_VALID'			=> 'Overenie hlavičky <var>X_FORWARDED_FOR</var>',
	'FORWARDED_FOR_VALID_EXPLAIN'	=> 'Užívateľ zostane prihlásený, iba pokiaľ bude súhlasiť odoslaná hlavička <var>X_FORWARDED_FOR</var> s tou z minulého požiadavku. Bany budú kontrolované podľa IP adries v <var>X_FORWARDED_FOR</var>.',
	'IP_VALID'						=> 'Overovanie IP pre session',
	'IP_VALID_EXPLAIN'				=> 'Stanovuje, aká časť z užívateľovej IP sa používa pre overenie session; <samp>Všetky</samp> porovná celú adresu, <samp>A.B.C</samp> porovná prvé 3 čísla x.x.x, <samp>A.B</samp> prvé 2 x.x, <samp>Nič</samp> vypne overovanie.',
	'MAX_LOGIN_ATTEMPTS'			=> 'Maximálne číslo pokusov o prihlásenie',
	'MAX_LOGIN_ATTEMPTS_EXPLAIN'	=> 'Po prekročení tohto čísla, pri neúspešných pokusoch o prihlásenie, užívateľ musí dodatočne potvrdzovať svoj login vizuálne (vizuálne potvrdzovanie).',
	'NO_IP_VALIDATION'				=> 'Nič',
	'NO_REF_VALIDATION'				=> 'Nič',
	'PASSWORD_TYPE'					=> 'Zložitosť hesiel',
	'PASSWORD_TYPE_EXPLAIN'			=> 'Stanovuje, aké zložité musí byť heslo pri jeho zadávaní, či zmene, nasledujúce možnosti obsahujú aj predošlé.',
	'PASS_TYPE_ALPHA'				=> 'Musí obsahovať alfanumerické znaky',
	'PASS_TYPE_ANY'					=> 'Žiadne požiadavky',
	'PASS_TYPE_CASE'				=> 'Musí obsahovať veľké aj malé písmená',
	'PASS_TYPE_SYMBOL'				=> 'Musí obsahovať symboly',
	'REF_HOST'						=> 'Iba overený host',
	'REF_PATH'						=> 'Taktiež overený path',
	'REFERER_VALID'					=> 'Overený referent',
	'REFERER_VALID_EXPLAIN'			=> 'Ak je zapnuté, referent POST požiadavka bude skontrolovaná pre host/script path nastavenia. Toto môže spôsobiť problémy s fórami, ktoré požívajú niekoľko domén alebo externé prihlasovanie.',
	'TPL_ALLOW_PHP'					=> 'Povoliť php v šablónach',
	'TPL_ALLOW_PHP_EXPLAIN'			=> 'Ak je táto možnosť zapnutá, <code>PHP</code> a <code>INCLUDEPHP</code> značky budú rozpoznané a výsledok vložený do šablón.',
));

// Email Settings
$lang = array_merge($lang, array(
	'ACP_EMAIL_SETTINGS_EXPLAIN'	=> 'Táto informácia sa používa, keď fórum posiela emaily vašim užívateľom. Prosím, uistite sa, že e-mailová adresa je správna, všetky vrátené či nedoručené správy budú pravdepodobne doručené na túto adresu. Ak váš hosting neposkytuje štandardnú (na PHP postavenú) službu pre odosielanie emailov, môžete namiesto toho posielať správy priamo cez SMTP. Toto vyžaduje adresu vhodného servera (opýtajte sa svojho poskytovateľa, ak neviete). Ak server vyžaduje overenie (a iba ak ho vyžaduje), vložte potrebné meno a heslo.',

	'ADMIN_EMAIL'					=> 'Email adresa pre odpovede',
	'ADMIN_EMAIL_EXPLAIN'			=> 'Táto adresa bude použitá ako adresa pre odpovede vo všetkých emailoch.',
	'BOARD_EMAIL_FORM'				=> 'Užívatelia posielajú emaily cez fórum',
	'BOARD_EMAIL_FORM_EXPLAIN'		=> 'Namiesto zobrazovania užívateľských emailových adries, užívatelia môžu posielať emaily prostredníctvom fóra.',
	'BOARD_HIDE_EMAILS'				=> 'Skryť emailové adresy',
	'BOARD_HIDE_EMAILS_EXPLAIN'		=> 'Táto funkcia úplne skryje e-mailové adresy pre ostatných užívateľov.',
	'CONTACT_EMAIL'					=> 'Kontaktná emailová adresa',
	'CONTACT_EMAIL_EXPLAIN'			=> 'Táto adresa bude použitá vždy, keď bude potrebný nejaký konkrétny kontakt, napr. spam, chybové hlášky, atď.',
	'EMAIL_FUNCTION_NAME'			=> 'Názov mailovacej funkcie',
	'EMAIL_FUNCTION_NAME_EXPLAIN'	=> 'Názov funkcie, ktorá zabezpečuje posielanie emailových správ prostredníctvom PHP.',
	'EMAIL_PACKAGE_SIZE'			=> 'Veľkosť emailového balíka',
	'EMAIL_PACKAGE_SIZE_EXPLAIN'	=> 'Toto je počet emailových správ odoslaných v jednom balíku. Týka sa interného nastavenia odosielania správa. Nastavte hodnotu na 0, ak máte problémy s nedoručenými e-mailami.',
	'EMAIL_SIG'						=> 'Podpis v emailoch',
	'EMAIL_SIG_EXPLAIN'				=> 'Tento text bude pripojený ku všetkým emailom, ktoré fórum pošle.',
	'ENABLE_EMAIL'					=> 'Povoliť fórom odosielané emaily',
	'ENABLE_EMAIL_EXPLAIN'			=> 'Ak je vypnuté, fórum nebude posielať žiadne emaily.',
	'SMTP_AUTH_METHOD'				=> 'Metóda overenia pre SMTP',
	'SMTP_AUTH_METHOD_EXPLAIN'		=> 'Iba ak je stanovené meno/heslo, opýtajte sa svojho poskytovateľa, ak ste si nie istý tým, ktorú metódu použiť.',
	'SMTP_CRAM_MD5'					=> 'CRAM-MD5',
	'SMTP_DIGEST_MD5'				=> 'DIGEST-MD5',
	'SMTP_LOGIN'					=> 'LOGIN',
	'SMTP_PASSWORD'					=> 'SMTP heslo',
	'SMTP_PASSWORD_EXPLAIN'			=> 'Heslo zadávaj iba v prípade, že ho tvoj SMTP server vyžaduje.',
	'SMTP_PLAIN'					=> 'PLAIN',
	'SMTP_POP_BEFORE_SMTP'			=> 'POP-BEFORE-SMTP',
	'SMTP_PORT'						=> 'Port SMTP serveru',
	'SMTP_PORT_EXPLAIN'				=> 'Zmeňte toto nastavenie iba v prípade, ak viete, že váš SMTP server používa iný port.',
	'SMTP_SERVER'					=> 'Adresa SMTP servera',
	'SMTP_SETTINGS'					=> 'SMTP nastavenia',
	'SMTP_USERNAME'					=> 'SMTP užívateľské meno',
	'SMTP_USERNAME_EXPLAIN'			=> 'Vložte užívateľské meno iba ak to váš SMTP server vyžaduje.',
	'USE_SMTP'						=> 'Použiť SMTP server pre emaily',
	'USE_SMTP_EXPLAIN'				=> 'Zvoľte "Áno" ak chcete alebo musíte posielať emaily prostredníctvom servera, namiesto posielania cez funkciu mail.',
));

// Jabber settings
$lang = array_merge($lang, array(
	'ACP_JABBER_SETTINGS_EXPLAIN'	=> 'Tu môžete zapnúť a nastaviť použitie Jabberu pre rýchle dopisovanie (instant messaging) a oznámenia fóra. Jabber je protokol s verejným zdrojovým kódom a preto je dostupný pre každého. Niektoré Jabber servery ponúkajú brány či prevody, ktoré umožňujú kontaktovať užívateľov iných sietí. Nie všetky servery ponúkajú všetky prevody a zmeny v protokoloch môžu prevody znefunkčniť. Majte na pamäti, že môže trvať niekoľko sekúnd, kým sa upravia nastavenia Jabber konta, nevypínajte skript, kým nedokončí prácu!',

	'JAB_ENABLE'				=> 'Zapnúť Jabber',
	'JAB_ENABLE_EXPLAIN'		=> 'Zapnúť používanie Jabber rýchleho dopisovania (IM) a oznámení',
	'JAB_GTALK_NOTE'			=> 'Berte na vedomie, že GTalk nebude fungovať, pretože sa nedá nájsť funkcia <samp>dns_get_record</samp>. Táto funkcia nie je dostupná v PHP4 a nie je implementovaná vo Windows platformách. V súčasnosti nepracuje na BSD systémoch, ani na Mac OS.',
	'JAB_PACKAGE_SIZE'			=> 'Veľkosť Jabber balíka',
	'JAB_PACKAGE_SIZE_EXPLAIN'	=> 'Toto je počet správ odoslaných v jednom balíku. Ak je nastavené na 0, správa bude odoslaná okamžite a nebude zdržaná pre neskoršie odoslanie.',
	'JAB_PASSWORD'				=> 'Jabber heslo',
	'JAB_PORT'					=> 'Jabber port',
	'JAB_PORT_EXPLAIN'			=> 'Ponechajte prázdne, pokiaľ ste si nie istý tým, že to nie je vo vašom prípade port 5222',
	'JAB_SERVER'				=> 'Jabber server',
	'JAB_SERVER_EXPLAIN'		=> 'Pozri %sjabber.org%s pre zoznam serverov.',
	'JAB_SETTINGS_CHANGED'		=> 'Jabber nastavenia úspešne zmenené.',
	'JAB_USE_SSL'				=> 'Použiť SSL pri pripojení',
	'JAB_USE_SSL_EXPLAIN'		=> 'Pokiaľ povolíte túto možnosť, phpBB sa pokúsi naviazať zabezpečené spojenie. Port Jabberu bude nastavený na 5223, pokiaľ je zvolený port 5222.',
	'JAB_USERNAME'				=> 'Užívateľské meno alebo Jabber ID',
	'JAB_USERNAME_EXPLAIN'		=> 'Vložte užívateľské meno alebo platné Jabber ID. Nebude kontrolovaná platnosť tejto položky. Pokiaľ uvediete iba užívateľské meno (časť pred zavináčom), vaše Jabber ID bude toto meno dokopy so serverom, ktorý ste uviedli vyššie. Dalšou možnosťou je zadať kompletné JID, napr. uzivatel@jabber.org',
));

?>

<?php defined('BASEPATH') or exit('No direct script access allowed');

// labels
$lang['header']			=	'Žingsnis 2: Reikalavimų tikrinimas';
$lang['intro_text']		= 	'Antras žingsnis reikalingas tam, kad patikrinti ar jūsų serveris tinka FatCMS. Dauguma serverių turi palaikyti jį be problemų.';
$lang['mandatory']		= 	'Būtina';
$lang['recommended']	= 	'Pageidautina';

$lang['server_settings']= 	'HTTP serverio nustatymai';
$lang['server_version']	=	'Jūsų serverio programa:';
$lang['server_fail']	=	'Jūsų serverio programa nepalaikoma, FatCMS gali veikti nekorektiškai. Jeigu jūsų PHP bei MySQL versijos yra tinkančios, FatCMS turi veikti be problemų tiesiog nenaudojant "gražių linkų".';

$lang['php_settings']	=	'PHP nustatymai';
$lang['php_required']	=	'FatCMS reikalaja PHP versijos %s arba didesnės.';
$lang['php_version']	=	'Jūsų serveris šiuo metu naudoja';
$lang['php_fail']		=	'Jūsų PHP versija yra nepalaikoma. FatCMS reikalauja PHP versijos %s arba naujasnės kad veiktu korektiškai.';

$lang['mysql_settings']	=	'MySQL nustatymai';
$lang['mysql_required']	=	'FatCMS reikalauja prieimo prie MySQL duomenų bazės, minimali versija 5.0.';
$lang['mysql_version1']	=	'Jusų serveris šiuo metu naudoja';
$lang['mysql_version2']	=	'Jusų klientas šiuo metu naudoja';
$lang['mysql_fail']		=	'Jųsų MySQL versija nėra palaikoma. FatCMS reikalauja MySQL versijos 5.0 arba naujasnės kad veiktu korektiškai.';

$lang['gd_settings']	=	'GD nustatymai';
$lang['gd_required']	= 	'FatCMS reikalauja GD bibliotekos 1.0 arba naujasnės kad apdoroti nuotraukas.';
$lang['gd_version']		= 	'Jusų serveris šiuo metu naudoja';
$lang['gd_fail']		=	'Nepavyko nustatyti GD bibliotekos veriją. Dažniausiai tai reiškia kad GD biblioteka nėra idiegta į serverį. FatCMS vistiek veiks, tačiau kaikurios funkcijos susijusios su nuotrauku apdorojimų neveiks. Yra stipriai rekomenduojama ijungti GD bibliotekos palaikymą.';

$lang['summary']		=	'Rezultatas';

$lang['zlib']			=	'Zlib';
$lang['zlib_required']	= 	'FatCMS reikalauja Zlib tam kad išarchyvuoti ir instaliuoti temas.';
$lang['zlib_fail']		=	'Zlib nebuvo rastas. Dažniausiai tai reiškia kad Zlib nebuvo instaliuotas. FatCMS vistiek veiks korektiškai, tačiau negalesite instaliuoti naujų temų. Yra patartina idiegti Zlib palaikymą.';

$lang['curl']			=	'Curl';
$lang['curl_required']	=	'FatCMS reikalauja Curl tam kad galetu jungtis su kitais adresais.';
$lang['curl_fail']		=	'Curl nebuvo rastas. Dažniausiai tai reiškia kad Curl nebuvo instaliuotas. FatCMS vistiek veiks korektiškai, tačiau kaikurios funkcijos gali neveikti. Yra stipriai rekomenduojama ijungti Curl bibliotekos palaikymą.';

$lang['summary_success']	=	'Jųsu serveris atitinka visiems FatCMS reikalavimas tam kad veiktu korektiškai, pareikite prie sekančio žingsnio paspausdami žemiau esanti mygtuką.';
$lang['summary_partial']	=	'Jūsų serveris atitinka <em>gaugumos</em> FatCMS reikalavimų. Tai reiškia, kad FatCMS turetu veikti korektiškai, tačiau jus gali aptikti problemos pvz. dirbant ir apdoruojant nuotraukas ir t.t.';
$lang['summary_failure']	=	'Panašu į tai, kad jūsų serveris neatitinka FatCMS reikalavimų. Prašome susisiekti su jūsų svetainės administratoriumi arba svetainių talpinimo administratoriumi, kad išspręsti šitą problmą.';
$lang['next_step']		=	'Tęsti į sekanti žingsnį';
$lang['step3']			=	'Žingsnis 3';
$lang['retry']			=	'Bandyti dar kartą';

// messages
$lang['step1_failure']	=	'Prašome įrašyti reikiamus duomenų bazes duomenys..';
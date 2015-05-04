<?php defined('BASEPATH') or exit('No direct script access allowed');

 /**
 * Swedish translation.
 *
 * @author		marcus@incore.se
 * @package		FatCMS  
 * @link		http://pyrocms.com
 * @date		2012-10-22
 * @version		1.1.0
 */

$lang['header'] = 'Steg 2: Kontrollera systemkrav';
$lang['intro_text'] = 'Det andra steget i installationsprocessen är att kontrollera om din server stöder FatCMS. De flesta servrar ska kunna köra det utan några problem.';
$lang['mandatory'] = 'Obligatorisk';
$lang['recommended'] = 'Rekommenderad';
$lang['server_settings'] = 'HTTP Server inställningar';
$lang['server_version'] = 'Din servermjukvara:';
$lang['server_fail'] = 'FatCMS har inte stöd för din servermjukvara och kommer inte att fungera. Men om PHP och MySQL installationerna är uppdaterade bör FatCMS fungera korrekt. Doch utan stöd för enkla URL:er';
$lang['php_settings'] = 'PHP-inställningar';
$lang['php_required'] = 'FatCMS kräver PHP version %s eller högre.';
$lang['php_version'] = 'Din server kör just nu version';
$lang['php_fail'] = 'Din PHP version stöds inte. FatCMS kräver PHP version %s eller högre för att kunna köras.';
$lang['mysql_settings'] = 'MySQL inställningar';
$lang['mysql_required'] = 'FatCMS kräver en en MySQL-databas som kör version 5.0 eller högre.';
$lang['mysql_version1'] = 'Din server kör för närvarande';
$lang['mysql_version2'] = 'Din klient kör för närvarande';
$lang['mysql_fail'] = 'Din MySQL version stöds inte. FatCMS kräver MySQL version 5.0 eller senare.';
$lang['gd_settings'] = 'GD-bibliotek, Inställningar';
$lang['gd_required'] = 'FatCMS kräver GD biblioteket 1.0 eller högre för att hantera bilder.';
$lang['gd_version'] = 'Din server kör för närvarande version';
$lang['gd_fail'] = 'Vi kan inte bestämma version av GD biblioteket. Detta innebär vanligtvis att GD biblioteket inte är installerat. FatCMS kommer fortfarande fungera korrekt, men en del av bildfunktionaliteten kanske inte fungerar. Vi rekommenderar att du aktiverar/installerar GD biblioteket.';
$lang['summary'] = 'Summering';
$lang['zlib'] = 'Zlib';
$lang['zlib_required'] = 'FatCMS kräver Zlib för att göra unzip på och installera teman.';
$lang['zlib_fail'] = 'Zlib kan inte hittas. Detta innebär oftast att Zlib inte är installerat. FatCMS kommer fortfarande fungera korrekt, men installation av teman kommer inte att fungera. Det rekommenderas starkt att du installerar zlib.';
$lang['curl'] = 'Curl';
$lang['curl_required'] = 'FatCMS kräver Curl för att göra anslutningar till andra webbplatser.';
$lang['curl_fail'] = 'Curl kan inte hittas. Detta innebär förmodligen att Curl inte är installerat. FatCMS kommer fortfarande fungera korrekt, men vissa funktioner kommer att saknas eller inte fungera korrekt. Det rekommenderas starkt att du aktiverar/installerar Curl-biblioteket.';
$lang['summary_success'] = 'Servern uppfyller alla krav för FatCMS, gå till nästa steg genom att klicka på knappen nedan.';
$lang['summary_partial'] = 'Servern uppfyller <em>de flesta</em> av kraven för FatCMS. Detta innebär att FatCMS ska kunna fungera korrekt, men det finns en chans att du kommer att uppleva problem med saker som bildstorleksändring etc.';
$lang['summary_failure'] = 'Det verkar som om din server inte uppfyllde kraven för att köra FatCMS. Kontakta din serveradministratör eller webbhotell för att få detta löst.';
$lang['next_step'] = 'Fortsätt till nästa steg';
$lang['step3'] = 'Steg 3';
$lang['retry'] = 'Försök igen';
$lang['step1_failure'] = 'Fyll i databasinställningarna i formuläret nedan.';
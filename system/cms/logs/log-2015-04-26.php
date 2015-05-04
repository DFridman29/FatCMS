<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

ERROR - 2015-04-26 17:59:47 --> Severity: Notice  --> Only variable references should be returned by reference /customers/9/3/7/tapic.co/httpd.www/pih/system/codeigniter/core/Common.php 272
ERROR - 2015-04-26 17:59:47 --> Severity: Warning  --> session_start(): Cannot send session cache limiter - headers already sent (output started at /customers/9/3/7/tapic.co/httpd.www/pih/system/codeigniter/core/Exceptions.php:183) /customers/9/3/7/tapic.co/httpd.www/pih/system/cms/hooks/pick_language.php 31
ERROR - 2015-04-26 17:59:47 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /customers/9/3/7/tapic.co/httpd.www/pih/system/codeigniter/core/Exceptions.php:183) /customers/9/3/7/tapic.co/httpd.www/pih/system/codeigniter/libraries/Session/drivers/Session_cookie.php 701
ERROR - 2015-04-26 18:00:32 --> Severity: Notice  --> Only variable references should be returned by reference /customers/9/3/7/tapic.co/httpd.www/pih/system/codeigniter/core/Common.php 272
ERROR - 2015-04-26 18:00:32 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /customers/9/3/7/tapic.co/httpd.www/pih/system/codeigniter/core/Exceptions.php:183) /customers/9/3/7/tapic.co/httpd.www/pih/system/codeigniter/core/Security.php 214
ERROR - 2015-04-26 18:00:32 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /customers/9/3/7/tapic.co/httpd.www/pih/system/codeigniter/core/Exceptions.php:183) /customers/9/3/7/tapic.co/httpd.www/pih/system/codeigniter/core/Security.php 214
ERROR - 2015-04-26 18:00:32 --> Severity: Warning  --> session_start(): Cannot send session cache limiter - headers already sent (output started at /customers/9/3/7/tapic.co/httpd.www/pih/system/codeigniter/core/Exceptions.php:183) /customers/9/3/7/tapic.co/httpd.www/pih/system/cms/hooks/pick_language.php 31
ERROR - 2015-04-26 18:00:32 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /customers/9/3/7/tapic.co/httpd.www/pih/system/codeigniter/core/Exceptions.php:183) /customers/9/3/7/tapic.co/httpd.www/pih/system/codeigniter/libraries/Session/drivers/Session_cookie.php 701
ERROR - 2015-04-26 18:00:32 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /customers/9/3/7/tapic.co/httpd.www/pih/system/codeigniter/core/Exceptions.php:183) /customers/9/3/7/tapic.co/httpd.www/pih/system/codeigniter/libraries/Session/drivers/Session_cookie.php 701
ERROR - 2015-04-26 18:00:32 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /customers/9/3/7/tapic.co/httpd.www/pih/system/codeigniter/core/Exceptions.php:183) /customers/9/3/7/tapic.co/httpd.www/pih/system/codeigniter/helpers/url_helper.php 556
ERROR - 2015-04-26 18:04:04 --> Severity: Notice  --> Only variable references should be returned by reference /customers/9/3/7/tapic.co/httpd.www/pih/system/codeigniter/core/Common.php 272
ERROR - 2015-04-26 18:05:15 --> Severity: Notice  --> Only variable references should be returned by reference /customers/9/3/7/tapic.co/httpd.www/pih/system/codeigniter/core/Common.php 272
ERROR - 2015-04-26 18:06:17 --> Severity: Notice  --> Only variable references should be returned by reference /customers/9/3/7/tapic.co/httpd.www/pih/system/codeigniter/core/Common.php 272
ERROR - 2015-04-26 18:07:51 --> Severity: Notice  --> Only variable references should be returned by reference /customers/9/3/7/tapic.co/httpd.www/pih/system/codeigniter/core/Common.php 272
ERROR - 2015-04-26 19:12:52 --> Severity: Notice  --> Undefined property: stdClass::$type_id /customers/9/3/7/tapic.co/httpd.www/pih/system/cms/modules/pages/models/page_m.php 215
ERROR - 2015-04-26 19:12:52 --> Severity: Notice  --> Undefined property: stdClass::$entry_id /customers/9/3/7/tapic.co/httpd.www/pih/system/cms/modules/pages/models/page_m.php 234
ERROR - 2015-04-26 19:12:52 --> Severity: Notice  --> Undefined property: stdClass::$meta_robots_no_index /customers/9/3/7/tapic.co/httpd.www/pih/system/cms/modules/pages/controllers/pages.php 212
ERROR - 2015-04-26 19:12:52 --> Severity: Notice  --> Undefined property: stdClass::$meta_robots_no_follow /customers/9/3/7/tapic.co/httpd.www/pih/system/cms/modules/pages/controllers/pages.php 213
ERROR - 2015-04-26 19:13:20 --> Query error: Unknown column 'c.user_name' in 'field list' - Invalid query: SELECT `c`.*, IF(c.user_id > 0, m.display_name, c.user_name) as user_name, IF(c.user_id > 0, u.email, c.user_email) as user_email, `u`.`username`, `m`.`display_name`
FROM `default_comments` `c`
LEFT JOIN `default_users` `u` ON `c`.`user_id` = `u`.`id`
LEFT JOIN `default_profiles` `m` ON `m`.`user_id` = `u`.`id`
WHERE `c`.`is_active` =  1
ORDER BY `c`.`created_on` desc
 LIMIT 5
ERROR - 2015-04-26 19:35:38 --> End user session - reason: Could not find a user identified by email:DFridman29@gmail.com

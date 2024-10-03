<?php

//////////////////////////////////////////////////////////////////////////////80
// Configuration
//////////////////////////////////////////////////////////////////////////////80
// Copyright (c) Atheos & Liam Siira (Atheos.io), distributed as-is and without
// warranty under the MIT License. See [root]/docs/LICENSE.md for more

define("BASE_PATH", __DIR__);

// BASE URL TO ATHEOS (without trailing slash)
define("BASE_URL", "saim.me/blob/master");

// Add an install domain to the page title
define("DOMAIN", "");

// SESSION LIFETIME IN SECONDS (e.g. 7200 = 2 hours)
define("LIFETIME", false);

// TIMEZONE
define("TIMEZONE", "Asia/Tashkent");

// DEVELOPMENT MODE
define("DEVELOPMENT", false);

// EXTERNAL AUTHENTICATION
// define("AUTH_PATH", "/path/to/customauth.php");

//////////////////////////////////////////////////////////////////////////////80
// ** EDIT AT YOUR OWN RISK **
//////////////////////////////////////////////////////////////////////////////80

// SECURITY HEADERS, SET TO FALSE TO DISABLE ALL
define ("HEADERS", serialize(array(
	"Strict-Transport-Security: max-age=31536000; includeSubDomains; preload",
	"X-Frame-Options: SAMEORIGIN",
	"X-XSS-Protection: 1; mode=block",
	"X-Content-Type-Options: nosniff",
	"Referrer-Policy: no-referrer",
	"Feature-Policy: sync-xhr 'self'",
	"Access-Control-Allow-Origin: *"
)));

//////////////////////////////////////////////////////////////////////////////80
// ** DO NOT EDIT CONFIG BELOW **
//////////////////////////////////////////////////////////////////////////////80

// PATHS
define("COMPONENTS", BASE_PATH . "/components");
define("LIBRARIES", BASE_PATH . "/libraries");
define("PLUGINS", BASE_PATH . "/plugins");
define("DATA", BASE_PATH . "/data");
define("WORKSPACE", BASE_PATH . "/workspace");


define("UPDATEURL", "");
define("MARKETURL", "");
define("GITHUBAPI", "");

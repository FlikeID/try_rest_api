<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

// require 'handlers/config.php';
$data_base = require 'handlers/config.php';

require 'rest/rest.php';

RESTapi($data_base);


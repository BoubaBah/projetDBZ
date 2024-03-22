<?php
require('config.php');

require dirname(__DIR__) . ('\function\db.fn.php');
require dirname(__DIR__) . ('\function\medicament.fn.php');
require dirname(__DIR__) . ('\function\user.fn.php');

$db = getPDOLink($config);
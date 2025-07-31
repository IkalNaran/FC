<?php
require_once 'src/controllers/AuthController.php';

$auth = new AuthController();
$auth->login();

require_once 'src/controllers/BlmController.php';


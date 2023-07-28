<?php
if (!session_id()) session_start();

require_once '../app/views/auth/login.php';

require_once '../app/init.php';

$app = new App;

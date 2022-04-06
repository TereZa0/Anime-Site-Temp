<?php
require_once('../temp/source.php');
if (!isset($TPL)) {
    $TPL = new source();
    $TPL->title = "Home";
    $TPL->bodycontent = __FILE__;
    include "../layout/layout.php";
    exit;
}

require('../Database/connections.php');
?>
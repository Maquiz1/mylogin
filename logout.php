<?php
    require 'core.inc.php';
    session_destroy();
    // header('Location: ' .$http_referer);
    header('Location: successfully_logout.php');
?>
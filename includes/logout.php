<?php

    include_once 'user_session.php';
    include_once 'adm.php';

    $userSession = new UserSession();
    $userSession->closeSession();

    $userSes = new UserSes();
    $userSes->closeSession();

    header("location: ../index.php");

?>
<?php

//Filtra y deja entrar a cualquiera
$endpoints_without_access_token = array(
    'auth',
    'regsiter',
    'send-reset-password-email',
    'create-account',
    'reset_password',
);

//Filtra y solo deja acceder con token
$endpoints_with_access_token = array(
    "roulette",
    "blackjack"
);

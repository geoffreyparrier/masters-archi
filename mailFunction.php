<?php

function isEmpty(array $get, string $parameter) {
    return empty($_GET) || empty($get[$parameter]);
}

function isValid(string $mail) {
    return !filter_var($mail, FILTER_VALIDATE_EMAIL);
}

function extractDomain($mail) {
    return explode('@', $mail)[1];
}

function isSpam(string $domain, array $spam) : bool {
    return in_array($domain, $spam);
}
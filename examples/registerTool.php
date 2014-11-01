<?php

require_once('../src/whatsprot.class.php');

$debug = true;

echo "####################\n";
echo "#                  #\n";
echo "# WA Register Tool #\n";
echo "#                  #\n";
echo "####################\n";

echo "\n\nUsername (country code + number without + or 00): ";
$username = trim(fgets(STDIN));
$identity = "";
echo "\nNickname: ";
$nickname = trim(fgets(STDIN));

// Create a instance of WhastPort.
$w = new WhatsProt($username, $identity, $nickname, $debug);

echo "\n\nType sms or voice: ";
$option = fgets(STDIN);

try {
    $w->codeRequest(trim($option));
} catch (Exception $e) {
    echo "\nError: $e";
    exit(0);
}

echo "\n\nEnter the received code: ";
$code = fgets(STDIN);

try {
    $result = $w->codeRegister(trim($code));
    echo "\nYour password is: " . $result->pw;
} catch (Exception $e) {
    echo "\Error: $e";
    exit(0);
}

<?php
session_start();
require '../vendor/autoload.php';
require 'functions.php';

$name = trim(filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
$email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));
$password = trim(filter_input(INPUT_POST, 'password', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
$newsletter = filter_input(INPUT_POST, 'newsletter', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

loginSent($name, $email, $password, $newsletter);



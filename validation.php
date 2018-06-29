<?php

use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Validation;

require "vendor/autoload.php";

if($_POST)
{
    $validation = Validation::createValidator();
    $errors = [];
    $errors = $validation->validate(
        $_POST['name'],
        [
            new NotBlank()
        ]
    );
    $errors = $validation->validate(
        $_POST['email'],
        [
            new NotBlank(),
            new Email()
        ]
    );
    $errors = $validation->validate(
        $_POST['body'],
        [
            new NotBlank(),
        ]
    );

    $isValid = true;
    foreach ($errors as $error)
    {
        if(!empty($error))
        {
            $isValid = false;
            break;
        }
    }
    if(!$isValid)
    {
        header('Location: '.$_SERVER['HTTP_REFERER']);
        exit;
    }
    $message = "Mail: {$_POST['email']}"."\r\n"."Firma/Imie: {$_POST['name']}"."\r\n".$_POST['body'];
        mail("kontakt@pawelged.pl", "mail z portfolio",$message);
        header('Location: '.$_SERVER['HTTP_REFERER']);}


exit;
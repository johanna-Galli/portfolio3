<?php
/**************************
//1ER TEST :

/*$err = [];
foreach ($_POST as $key => $value) {
    $err[$key]["value"] = $value;
    if(empty($value)) {
        $err[$key]["message"] = "Vous devez remplir ce champ !";
    } 
}
echo json_encode($err);
*/


/*$errName = [];
$errSubject = [];

$errMail = [];
$errMessage = [];*/

/*******************************************/

$err = [];

//traitement name
$name = $_POST["name"];
$subject = $_POST["subject"];
$mail = $_POST["mail"];
$message = $_POST["message"];

//name
if (empty($name)) {
    $error = "Champ vide";
    $err["name"] = [
        "err" => $error
    ];
} else if (preg_match("/^[a-zA-Z ]+$/", $name)) {
    $err["name"] = [
        "value" => $name,
        "err" => "Aucune erreur"
    ];
} else {
    $err["name"] = [
        "err" => "Champ ne correspond pas"
    ];
}

//subject 
if (empty($subject)) {
    $error = "Champ vide";
    $err["subject"] = [
        "err" => $error
    ];
} else {
    $err["subject"] = [
        "value" => $subject,
        "err" => "aucune erreur"
    ];
}

//mail
if (empty($mail)) {
    $err["mail"] = [
        "err" => "Champ vide"
    ];
} else if (preg_match("#^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]{2,}\.[a-z]{2,4}$#", $mail)) {
    $err["mail"] = [
        "value" => $mail,
        "err" => "aucune erreur"
    ];
} else {
    $err["mail"] = [
        "err" => "Champ ne correspond pas"
    ];
}

//si champ message est vide
if (empty($message)) {
    $error = "Champ vide";
    $err["message"] = [
        "err" => $error
    ];
} else {
    $err["message"] = [
        "value" => $message,
        "err" => "aucune erreur"
    ];
}

echo json_encode($err);
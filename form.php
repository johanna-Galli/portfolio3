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
$name = trim($_POST["name"]);
$subject = trim($_POST["subject"]);
$mail = trim($_POST["mail"]);
$message = trim($_POST["message"]);

$goodName = null;
$goodSubject = null;
$goodMail = null;
$goodMessage = null;

//name
if (empty($name)) {
    $error = "Champ vide";
    $err["name"] = [
        "err" => $error
    ];
    $goodName = null;
} else if (preg_match("/^[a-zA-Z ]+$/", $name)) {
    $err["name"] = [
        "value" => $name,
        "err" => "Aucune erreur"
    ];
    $goodName = $name;
} else {
    $err["name"] = [
        "err" => "Champ ne correspond pas"
    ];
    $goodName = null;
}

//subject 
if (empty($subject)) {
    $error = "Champ vide";
    $err["subject"] = [
        "err" => $error
    ];
    $goodSubject = null;
} else {
    $err["subject"] = [
        "value" => $subject,
        "err" => "aucune erreur"
    ];
    $goodSubject = $subject;
}

//mail
if (empty($mail)) {
    $err["mail"] = [
        "err" => "Champ vide"
    ];
    $goodMail = null;
} else if (preg_match("#^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]{2,}\.[a-z]{2,4}$#", $mail)) {
    $err["mail"] = [
        "value" => $mail,
        "err" => "aucune erreur"
    ];
    $goodMail = $mail;
} else {
    $err["mail"] = [
        "err" => "Champ ne correspond pas"
    ];
    $goodMail = null;
}

//si champ message est vide
if (empty($message)) {
    $error = "Champ vide";
    $err["message"] = [
        "err" => $error
    ];
    $goodMessage = null;
} else {
    $err["message"] = [
        "value" => $message,
        "err" => "aucune erreur"
    ];
    $goodMessage = $message;
}

echo json_encode($err);

if ($goodName != null && $goodSubject != null && $goodMail != null && $goodMessage != null) {
    //on charge Swiftmailer
    require_once('vendor/autoload.php');

    //on instancie un nouveau corps de document mail
    $sujet = 'From portfolio :' . $goodSubject;
    $message = (new Swift_Message($sujet));

    //contenu mail
    $mailBody ='
        <html>
        <body>
            <div class="main">
                <div class="body">
                    <h1 class="title">Bonjour Johanna !</h1>
                    <h3>Vous venez de recevoir un mail de la part de : ' . $goodName . '. </h3>
                    <p>voici son message : <br> ' . $goodMessage . '</p> 

                    <br>
                    <p>À bientôt !</p>
                </div>
            </div>
            <style type="text/css">
                .main {
                    margin: 20px;
                    box-shadow: 0px 5px 20px rgba(153, 28, 59, 0.1);
                    max-width: 100%;
                }
                .body {
                    padding: 20px;
                    text-align: center;
                    font-family: "Gill Sans", sans-serif;
                }
                .title {
                    color: #991c3b;
                }
                .link {
                    padding: 3px;
                    border-style: solid 1px;
                    border-color: #991c3b;
                    color: #991c3b;
                }
                .logo {
                    max-height:130px;
                    max-width:130px;
                }
            </style>
        </body>
        </html>';

    //on instancie une nouvelle méthode d'envois du mail
    $transport = (new Swift_SmtpTransport('smtp.mailtrap.io', 465))
        //Port 25 ou 465 selon votre configuration
        //identifiant et mot de passe pour votre swiftmailer
        ->setUsername('fb4412351e7042')
        ->setPassword('9377fb0dbcb0f8');

    //on instancie un nouveau mail
    $mailer = new Swift_Mailer($transport);
    //on instancie un nouveau corps de document mail
    $message
        ->setFrom([$goodMail])
        ->setTo(['galli.johanna.g2@gmail.com'])
        ->setBody($mailBody, 'text/html');

    //on récupère et modifie le header du mail pour l'envois en HTML
    $type = $message->getHeaders()->get('Content-Type');
    $type->setValue('text/html');
    $type->setParameter('charset', 'utf-8');
    //On envois le mail en local
    $resultJohanna = $mailer->send($message);
    return $resultJohanna;
} 
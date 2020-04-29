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

//traitement inputs
$name = trim($_POST["name"]);
$subject = trim($_POST["subject"]);
$mail = trim($_POST["mail"]);
$message = trim($_POST["message"]);

//instancie les variables
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

$resultJohanna = null;

echo json_encode($err);

if ($goodName != null && $goodSubject != null && $goodMail != null && $goodMessage != null) {

    //si on est en local
    if ($_SERVER['SERVER_NAME'] === "localhost") {
        //on charge Swiftmailer
        require_once('vendor/autoload.php');

        //on instancie un nouveau corps de document mail
        $sujet = 'From portfolio :' . $goodSubject;
        $message = (new Swift_Message($sujet));

        //contenu mail
        $mailBody = '
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
        $envoi = $mailer->send($message);

        if ($envoi) {
            //var_dump("mail envoyé");

            $err["envoiMail"] = [
                "envoiMail" => "envoye"
            ];
        } else {
            //var_dump("mail pas envoyé");

            $err["envoiMail"] = [
                "envoiMail" => "pas envoye"
            ];
        }
    }

    //si on est en ligne
    if ($_SERVER['SERVER_NAME'] === "johannag.promo-36.codeur.online") {

        $to = "galli.johanna.g2@gmail.com";

        //l'en-tête Content-type
        $headers[] = 'MIME-Version: 1.0';
        $headers[] = 'Content-type: text/html; charset=iso-8859-1' . '\r\n';

        $headers[] = 'From: ' . $goodMail; //provenance
        $headers[] = 'To: ' . $to . ' <' . $to . '>' . "\r\n"; //destinataire
        $subject = 'mail envoyé depuis portfolio : ' . $goodSubject;



        //contenu mail
        $mailBody = '
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

        // Envoi
        $envoi = mail($to, $subject, $mailBody, implode("\r\n", $headers));

        //Si l'envoi à été effectué alors on envoi un mail a la personne qui m'a contacté
        if ($envoi) {



            /*
            //l'en-tête Content-type
            $headers[] = 'MIME-Version: 1.0';
            $headers[] = 'Content-type: text/html; charset=iso-8859-1' . '\r\n';

            $headers[] = 'From: ' . $to ; //provenance
            $headers[] = 'To: ' . $goodMail . ' <' . $goodMail . '>' . "\r\n"; //destinataire
            $subject = 'Contact portfolio Johanna Galli :' . $goodSubject;*/

            //contenu mail
            $mailBody2 = '
            <html>
            <body>
            <div class="main">
                <div class="body">
                    <h1 class="title">Bonjour ' . $goodName . ' !</h1>
                    <h3>Vous venez d\'envoyer un mail à Johanna Galli. </h3>
                    <p>Voiçi le contenu de votre message :' . $goodMessage . '</p>
                    <br>
                    <p>Merci et à bientôt !</p>
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

            mail($goodMail, "Mail envoyé a Johanna Galli", $mailBody2, implode("\r\n", $headers));

            /*
            // Envoi
            mail($goodMail, $subject, $mailBody, implode("\r\n", $headers));*/
        }
    }
}

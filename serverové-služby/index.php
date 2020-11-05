<?php
require_once 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    use Symfony\Component\Dotenv\Dotenv;
    $dotenv = new Dotenv();
    $dotenv->load(__DIR__. '/.env');
    
    $mail = new Nette\Mail\Message;
    $mail -> setFrom('Pokus o NetteMail <kristianklimek@email.cz>')
          ->addTo('klimekkristian@gmail.com')
          ->setSubject('První zpráva přes SMTP z Nette Maileru')
          ->setBody('Dobrý den, \ntoto je testování');
            var_dump($_ENV['EMAIL_EMAIL']);
          $mailer = new Nette\Mail\SmtpMailer([
            'host' => $_ENV['EMAIL_HOST'],
            'port' => $_ENV['EMAIL_PORT'],
            'username' => $_ENV['EMAIL_EMAIL'],
            'password' => $_ENV['EMAIL_PASSWORD'],
            'secure' => $_ENV['EMAIL_SECURE'],
        ]);
        $mailer->send($mail);
    ?>
</body>

</html>
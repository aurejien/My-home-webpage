<?php
if ($_SERVER['REQUEST_METHOD']=='POST') {
    
    $name    = htmlentities($_POST['name']);
    $email   = htmlentities($_POST['email']);
    $message = htmlentities($_POST['message']);
    
    $destinataire = 'hello@aurelienj.com'; // Adresse email du webmaster (à personnaliser)
    $sujet = 'Message from AURELIENJ'; // Titre de l'email
    $contenu = '<html><head><title>Titre du message</title></head><body>';
    $contenu .= '<p><strong>Nom</strong>: '.$name.'</p>';
    $contenu .= '<p><strong>Email</strong>: '.$email.'</p>';
    $contenu .= '<p><strong>Message</strong>: '.$message.'</p>';
    $contenu .= '</body></html>'; 

    $headers = 'MIME-Version: 1.0'."\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
    
    mail($destinataire, $sujet, $contenu, $headers); // Fonction principale qui envoi l'email
    echo '
    <script type="text/javascript">
    alert("MESSSSAGE SENNNDDD");
    </script>';
    
    $nom = $email = $message = NULL;
    unset($_POST);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<!-- Google Tag Manager -->
    <script>
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TX4T2LP');
    </script>
<!-- End Google Tag Manager -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="./static/main.css" rel="stylesheet" type="text/css" />
    <link href="./static/desktop_device.css" media="(min-width: 1024px)" rel="stylesheet"  type="text/css" />
    <link href="./static/tablet_device.css" media="(min-width: 768px) and  (max-width: 1023px)" rel="stylesheet"  type="text/css" />
    <link href="./static/mobile_device.css" media="(max-width: 767px)" rel="stylesheet"  type="text/css" />

    <title>AURELIEN J | JUNIOR WEB DEVELOPER</title>
</head>
<body>
<!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TX4T2LP"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <div class="home_box">
        <div class="nav">
            <div class="logo kursor"><a>AURELIEN J</a></div>
            <div class="nav_bar">
                <div class="nav_item item_1 kursor"><a>WORK</a></div>
                <div class="nav_item item_2 kursor"><a>ABOUT</a></div>
                <div class="nav_item item_3 kursor"><a>CONTACT</a></div>
            </div>
        </div>
        <!-- ----------------- -->
        <div class="logo_box">
            <div class="logo_center lt">JUNIOR</div>
            <div class="logo_center lc">FRONT-END</div>
            <div class="logo_center lb">DEVELOPER</div>
        </div>
        <!-- ----------------- -->
        <div class="footer">
            <div class="footer_left">copyright © 2021 - All Right Reserved</div>
            <div class="footer_right">
                <div class="icone kursor"><a href="https://twitter.com/aurejien"><img src="./assets/icones/twitter.png" alt="twitter"></a></div>
                <div class="icone kursor"><a href="https://github.com/aurejien"><img src="./assets/icones/github.png" alt="github"></a></div>
                <div class="icone kursor"><a href="#"><img src="./assets/icones/discord.png" alt="discord"></a></div>
            </div>
        </div>
    
        <!-- ----------------- -->
        <div class="project_box box"></div>
        <!-- ----------------- -->
        <div class="about_box box"></div>
        <!-- ----------------- -->
        <div class="contact_box box">
            <div class="form_box">
                <form method="POST" action="">
                    <input type="text" id="name" name="name" placeholder="Your name.." required >
                    <input type="email" id="email" name="email" placeholder="Your email.." required >
                    <textarea id="message" name="message" placeholder="Your text.." required ></textarea>
                    <input type="submit" id="submit" value="Submit">
                </form>
            </div>
        </div>
        <!-- ----------------- -->
    </div>
        <!-- ----------------- -->

    <script src="./JS/index.js"></script>
</body>
</html>

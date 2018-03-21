<?php
if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
    $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
}
$ip = $_SERVER["REMOTE_ADDR"];
?>
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <title>Altros</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="Altros, altros, minecraft" />
    <meta name="description" content="Altros." />
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/img/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="theme-color" content="#008280">
</head>

<body>
<div class="flex">
    <div class="content">
        <div id="avatar"></div>
        <br>
        <span id="title">
            Altros
        </span>
        <br>
        <span id="sub-title">Welcome.</span>
        <hr/>

        <div class="links">
            <a href="https://github.com/Altros" target="_blank"><i class="fa fa-github" aria-hidden="true"></i> GitHub</a>
            <a href="https://telegram.me/Senior" target="_blank"><i class="fa fa-telegram" aria-hidden="true"></i> Telegram</a>
            <a href="mailto:me@altros.space"><i class="fa fa-envelope" aria-hidden="true"></i> Email</a>
            <a href="https://twitter.com/Altrvs" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a>
            <a href="https://csgofrog.com" target="_blank"><i class="fa fa-key" aria-hidden="true"></i> CSGOFROG (Moderator On It)</a>
        </div>
        <hr style="border-style: dashed; color: #c7c7c7"/>
        <div class="links">
            <a href="https://waifu.one" target="_blank"><i class="fa fa-gear" aria-hidden="true"></i> Mastodon Instance</a>
            <a href="https://lolitsareinthe.club/" target="_blank">
                <i class="fa fa-heart" aria-hidden="true"></i> Free File and Pomf hosting</a>
            <a href="https://track.altros.space" target="_blank"><i class="fa fa-globe" aria-hidden="true"></i> Minecraft Server Tracker</a>
        </div>
    </div>
</div>
<script src="assets/js/typed.min.js" type="text/javascript"></script>
<script src="assets/js/text-scramble.js" type="text/javascript"></script>
<script type="text/javascript">
    let phrases;
    let counter = 0;

    const userLang = navigator.language || navigator.userLanguage;

    if (userLang.indexOf("it") === 0) {
        phrases = ['Bienvenue <?php echo $ip; ?>,', 'ton IP sera sauvegardé.', 'altros.space', 'altros.space - Administrateur Système Junior'];
    } else {
        phrases = ['Welcome <?php echo $ip; ?>,', 'your IP will not be stored.', 'altros.space', 'altros.space - Junior System Administrator'];
    }

    const el = document.querySelector('#sub-title');
    const fx = new TextScramble(el);

    const next = () => {
        fx.setText(phrases[counter]).then(() => {
            switch (counter) {
                case 0:
                    setTimeout(next, 2000);
                    break;
                case 1:
                    setTimeout(next, 1500);
                    break;
                case 2:
                    setTimeout(next, 900);
                    break;
                case 3:
                    setTimeout(next, 800);
                    break;
                default:
                    return;
            }
        });
        counter++;
    };
    next();
</script>
</body>

</html>
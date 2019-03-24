<!DOCTYPE html>
<html lang="ru">
<head>
    <title><?=$title?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="description" content="<?= $meta_description ?>"/>
    <link rel="stylesheet" type="text/css" href="css/main.css"/>
    <link rel="stylesheet" type="text/css" href="css/contact_form.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"/>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
    
    <div class="bg-purple">
        <header>
            <nav>
                <a href="template.php"><img class="logo" src="http://ashuraliev.com/fp/images/logos/purplewifi-logo.png" alt="PurpleWiFi logo"></a>
                <input type="checkbox" id="chk">
                    <label for="chk" class="show-menu-btn">
                        <i class="fas fa-bars"></i>
                    </label>
            
                <ul class="menu">
                    <?= makeLinks($nav1) ?>
                    <!--<li><a href="#" class="selected">Главная</a></li>-->
                    <!--<li><a href="#">Как Это Работает</a></li>-->
                    <!--<li><a href="#">О Нас</a></li>-->
                    <!--<li><a href="#">Контакт</a></li>-->
                    <label for="chk" class="hide-menu-btn">
                        <i class="fas fa-times"></i>
                    </label>
                </ul>
            </nav>
        </header>
    </div>
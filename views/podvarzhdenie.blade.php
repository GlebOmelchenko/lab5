<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Соберу само</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/podverzhdenie.css">
</head>
<body>
    <div class="container">


        <header class="header">
            <div class="wrapper">

                <div class="header__logo">
                    <a href="./index">
                        <img src="./img/svg/Group 11.svg" alt="Главная">
                    </a>
                </div>

                <div class="menu">
                    <nav class="top-menu">
                        <ul class="menu-main">
                            <li><a href="./index"> <img src="./img/svg/house 1.svg" alt="Главная"> Главная</a></li>
                            <li><a href="./kompany"><img src="./img/svg/competitor 1.svg" alt="О компании"> О компании</a></li>
                            <li><a href="./contacts"><img src="./img/svg/apple 1.svg" alt="Контакты"> Контакты</a></li>
                            <li><a href="./zakazvubor"><img src="./img/svg/order 1.svg" alt="Заказ"> Заказ</a></li>
                        </ul>
                    </nav>
                </div>

                <div class="header__account">
                    <a href="account_avtor">
                        <img src="./img/svg/round-account-button-with-user-inside 1.svg" alt="Аккаунь">
                    </a>
                </div>
                <h2 class="razdelenie"></h2>
            </div>
        </header>









        <P class="zagolovok">Подвердите заказ</P>
        <div class="forma">
            <form action="proverka2" method="post">
            <p class="text">Ведите, пожалуйста, номер телефона:</p>
            <input type="text" name = "phone" class="pole" size="40">
            <p class="text2">Выберите способ доставки товара:</p>
            <input type="text" name = "sposobdostavki" class="sposobdostavki" size="40">
                <button type="submit" class="knopka">
                <p class="knopka_text">Подвердить заказ</p>
                </button>
            </form>
        </div>



        <footer class="footer">
            <div class="footer__logo">
                <a href="./index">
                    <img src="./img/svg/Group 11.svg" alt="Главная">
                </a>
            </div>
            <a href="./zakazvubor" class="footer__a_magaz"><p class="footer__magaz">Магазин</p></a>
            <p class="footer__vopros">Частые вопросы</p>
            <a href="./kompany" class="footer__a_magaz"><p class="footer__vopros1">О компании</p></a>
            <a href="./contacts" class="footer__a_kontakt"><p class="footer__kontakt">Контакты</p></a>
            <p class="footer__kontakt1">+380937713988</p>
            <div class="inst"><a href="https://www.instagram.com"><img src="./img/svg/instagram 1.svg" alt="Инста"></a></div>
            <div class="face"><a href="https://www.facebook.com/"><img src="./img/svg/facebook 1.svg" alt="Фейсбук"></a></div>
            <div class="telega"><a href="https://web.telegram.org/"><img src="./img/svg/telegram 1.svg" alt="Телеграм"></a></div>
        </footer>


    </div>
</body>
</html>

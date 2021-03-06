<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Главная</title>
</head>
<body>
    <div class="fon">


        @extends('header');


        <div class="block_pokupka">
            <div class="glavnaya__pokupka">
                <p class="text_pokupka">Покупка ПК</p>
                <h2 class="pokupka_razdelenie"></h2>
                <p class="infapokupka">Наша компания предлагает вам услугу с помощью которой вы сможете приобрести себе полностью новенький игровой компьютер всего за один клик.</p>
                <a href="./zakazvubor" class="pokupka__a_zakaz">
                    <div class="pokupka_zakaz">
                        <p class="pokupka__zakaz">
                            Сделать заказ
                        </p>
                    </div>
                </a>
            </div>
            <img src="./img/sistemkik.png" alt="" class="pokupka_sistemnik">
        </div>


        <div class="block_infa1">
            <div class="infa1__pokupka">
                <p class="text_infa1">Почему именно мы?</p>
                <h2 class="infa1_razdelenie"></h2>
                <p class="infa1">Наша компания помимо сборки ПК предлагает выбор комплектующих и всегда выполняет все условия клиента в частности возможности поиска гарнитуры и установки ПО.</p>
            </div>
            <img src="./img/hero3-1-min 1.png" alt="" class="infa1_sistemnik">
        </div>


        <div class="block_infa2">
            <div class="infa2__vopros1">
                <p class="text1_infa2">Зачем нужен ПК?</p>
                <h2 class="infa2_razdelenie1"></h2>
                <p class="infa2_1">     С помощью компьютеров можно писать книги, письма и отчеты,хранить информацию (наподобие списков, адресов и баз данных), делать сложные расчеты, конструировать технику, рисовать, редактировать фотографии и еще много чего другого..</p>
            </div>
            <img src="./img/Group 22.png" alt="" class="infa2_sistemnik">
            <div class="infa2__vopros2">
                <p class="text2_infa1"> Комплектующие ПК</p>
                <h2 class="infa2_razdelenie2"></h2>
                <p class="infa2_2">Центральный процессор (CPU, ЦПУ)
                    Материнская плата (Motherboard, или просто Мать)
                    Оперативная память (RAM, Оперативка)
                    Видеокарта (или видео адаптер)
                    Жесткий диск (HDD, винчестер, винт)
                    Оптически привод (CD-ROM, DVD-ROM)
                    Блок питания
                    Корпус.</p>
            </div>
            <img src="./img/Group 23.png" alt="" class="infa2_koplekt">
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

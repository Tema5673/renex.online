
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Imgui" />
    <meta name="description" content="Лучший игровой сервер SAMP ANDROID">
    <link rel="shortcut icon" href="/uploads/rghzmwa73Qb9kTYaEDSlfc270b77qmOZQVtWsGtQ.png" type="image/png">
    <meta name="csrf-token" content="oVl5tdHd3WRCMUNgCHtaezwRrv1ZXiXB4HYXC4kW">
    <title>Name Mobile - Магазин</title>
    <link rel="stylesheet" href="/css/style.min.css">
    <link rel="stylesheet" href="/css/media.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css" integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q" crossorigin="anonymous">
    <script src="https://www.google.com/recaptcha/api.js?render=6LdhHuQZAAAAALzV6fozm4DnHYcdjbvbvq7h_Q3u"></script>
</head>
<body>
<header>
    <div class="container">
        <div class="row">
            <div class="col-xl-2 col-lg-3 col-md-4 col-xs-2 col-2 logo">
                <a href="/">
                    <img src="/uploads/SOnPdGA9ictHoIu9jUcPE8BlHlj3cHW0aTGF5Oyh.png" alt="" class="logotip">
                    <img src="/uploads/rghzmwa73Qb9kTYaEDSlfc270b77qmOZQVtWsGtQ.png" alt="" class="favicon">
                </a>
            </div>
            <div class="col-xl-8 col-lg-6 col-md-4 col-xs-5 col-5 menu">
                <div class="mobile_menu">
                    <img src="/img/icons/menu.png" class="icon_menu" alt="">
                    <img src="/img/icons/close.png" class="icon_close" alt="">
                </div>
                <ul class="nav_menu">
                    <a href="https://namerp/ru/home">
                        <li class="">Главная</li>
                    </a>
                    <a href="https://forum.name-rp.ru">
                        <li>Форум</li>
                    </a>
                    <a href="https://vk.com/namerp">
                        <li>Новости</li>
                    </a>
                    <a href="https://namerp.ru/ru/shop">
                        <li class="active">Донат</li>
                    </a>
                    <a href="https://name-rp.ru/ru/play">
                        <li class="">Как играть?</li>
                    </a>
                    <div class="dropdown otherdrop">
                        <li type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Карта
                        </li>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                            <a class="dropdown-item" href="https://name-rp.ru/ru/map/1">Name RP | One</a>


                        </div>
                    </div>



                </ul>
                <div class="dropdown language">
                    <button class="btn " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="/img/lang/RU.png" alt=""> <i class="fas fa-sort-down"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="https://name-rp.ru/setlocale/ru"><img src="/img/lang/RU.png" alt=""> Русский</a>
                        <a class="dropdown-item" href="https://name-rp.ru/setlocale/en"><img src="/img/lang/EN.png" alt=""> English</a>
                        <a class="dropdown-item" href="https://name-rp.ru/setlocale/UA"><img src="/img/lang/UA.png" alt=""> Украинский</a>
                        <a class="dropdown-item" href="https://name-rp.ru/setlocale/KZ"><img src="/img/lang/KZ.png" alt=""> Казахский</a>

                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-4 col-xs-5 col-5 profile">
                <div class="profile_block " onclick="modals_app.openModal('login')">
                    <div class="text">Личный кабинет </div><i class="fas fa-user-tie"></i>
                </div>
            </div>
        </div>
    </div>
</header>
<section class="section__shop">

    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="donate_container vueForms" data-aos="slide-down" data-aos-delay="00" data-aos-duration="1000">
                    <div class="picture_block">
                        <img src="/img/person_donate.png" alt="">
                    </div>

                    <form class="form_block" action="https://name-rp.ru/ru/action/payment" method="POST" v-on:submit.prevent="onSubmit" id="qiwi_modal">

                        <input type="hidden" name="_token" value="oVl5tdHd3WRCMUNgCHtaezwRrv1ZXiXB4HYXC4kW">							<div class="title">Пополнение счета через QIWI</div>

                        <div class="form_wrap">
                            <div class="label">Введите никнейм</div>
                            <div class="input_wrap">
                                <img src="/img/icons/user_icon.png" alt="" class="icon">
                                <input type="text" name="account" placeholder="Name_Surname">
                            </div>
                        </div>
                        <div class="form_wrap">
                            <div class="label">Введите сумму</div>
                            <div class="input_wrap">
                                <img src="/img/icons/donate_icon.png" alt="" class="icon">
                                <input type="number" name="sum" value="100">
                            </div>
                        </div>
                        <div class="forn_wrap" style="width:100%;display: flex;flex-wrap: wrap;justify-content: space-between;">
                            <button>Пополнить</button>
                            <button type="button" class="change_form" data-hide="qiwi_modal" data-show="unitpay_modal">Другие способы оплаты ➞</button>
                        </div>





                    </form>
                    <form class="form_block" action="https://unitpay.money/pay/" method="POST" style="display: none;" id="unitpay_modal">

                        <input type="hidden" name="_token" value="oVl5tdHd3WRCMUNgCHtaezwRrv1ZXiXB4HYXC4kW">							<div class="title">Пополнение счета через <br>  Банковские карты, ЮМоней, WebMoney, Apple Pay, Samsung Pay,<br> Мобильные платежи</div>

                        <div class="form_wrap">
                            <div class="label">Выберите сервер</div>
                            <div class="input_wrap">
                                <img src="/img/icons/list_server.png" alt="" class="icon">
                                <select name="server_id" id="">
                                    <option selected>Выберите сервер</option>
                                    <option value="1">Name SERVER ONE</option>
                                </select>
                            </div>
                        </div>
                        <div class="form_wrap">
                            <div class="label">Введите никнейм</div>
                            <div class="input_wrap">
                                <img src="/img/icons/user_icon.png" alt="" class="icon">
                                <input type="text" name="account" placeholder="Name_Surname">
                            </div>
                        </div>
                        <div class="form_wrap">
                            <div class="label">Введите сумму</div>
                            <div class="input_wrap">
                                <img src="/img/icons/donate_icon.png" alt="" class="icon">
                                <input type="number" name="sum" value="100">
                            </div>
                        </div>
                        <div class="forn_wrap" style="width:100%;display: flex;flex-wrap: wrap;justify-content: space-between;">
                            <button>Пополнить</button>
                            <button type="button" class="change_form" data-show="qiwi_modal" data-hide="unitpay_modal">Через QIWI ➞</button>
                        </div>





                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 project_info">
                <div class="name">© 2021 name-rp.ru</div>
                <div class="desc">GTA San Andreas в режиме RolePlay</div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 logo_footer">
                <img src="/uploads/XB8SYxI8cWOwj3o8x1rz7er9rxwN9MhArvj0NXTE.png" alt="">
            </div>
            <div class="col-xl-4 col-lg-4 footer_links">
                <a href="#" >Пользовательское соглашение</a>
                <a href="">Положение об отказе от ответственности</a>
            </div>
        </div>
    </div>
</footer>
<div class="modal_wrap modals_block" >
    <div class="container">
        <div class="row">

            <div class="modal_block dropgame" id="VueLogin">
                <div class="content">
                    <div class="header">
                        <div class="imageDrop">
                            <img src="/img/money.png" alt="">
                        </div>
                        <div class="info">
                            <div class="title">Игровая валюта</div>
                            <div class="value">50000$</div>
                        </div>
                    </div>
                    <button type="submit">Забрать</button>
                </div>
            </div>


            <div class="modal_block login " id="VueLogin">
                <div class="close_modal" @click="closeModal('login')">
                    <i class="fas fa-times"></i>
                </div>
                <form action="https://name-rp.ru/ru/profile/actionLogin" method="POST" id="formLogin" v-on:submit.prevent="onSubmit">

                    <div class="form_block">
                        <input type="hidden" name="_token" value="oVl5tdHd3WRCMUNgCHtaezwRrv1ZXiXB4HYXC4kW">								<div class="title">Авторизация</div>
                        <div class="form_wrap">
                            <div class="label">Выберите сервер</div>
                            <div class="input_wrap">
                                <img src="/img/icons/list_server.png" alt="" class="icon">
                                <select name="server" id="">
                                    <option value="0">Выберите сервер</option>
                                    <option value="1">Name RP | One</option>
                                </select>
                            </div>
                        </div>
                        <div class="form_wrap">
                            <div class="label">Введите никнейм</div>
                            <div class="input_wrap">
                                <img src="/img/icons/user_icon.png" alt="" class="icon">
                                <input type="text" name="name" placeholder="Name_Surname">
                            </div>
                        </div>
                        <div class="form_wrap">
                            <div class="label">Введите пароль</div>
                            <div class="input_wrap">
                                <img src="/img/icons/pass_icon.png" alt="" class="icon">
                                <input type="password" name="password">
                            </div>
                        </div>
                        <input type="hidden" class="g-recaptcha-response" name="g-recaptcha-response" />
                        <button type="submit">Войти</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<script src="/js/libs/jquery-3.5.1.min.js"></script>
<script src="/js/libs/aos.js"></script>
<script>
    AOS.init({
        disable : 'mobile',
        duration: 400,
        once: false,
        anchorPlacement: 'bottom',
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/vue"></script>

<script src="/js/libs/popper.min.js"></script>
<script src="/js/libs/bootstrap.min.js"></script>

<script src="/js/libs/jquery.nice-select.min.js"></script>
<script src="/js/libs/bootstrap-notify.min.js"></script>
<script src="/js/main.js"></script>
</body>
</html>
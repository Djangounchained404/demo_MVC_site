<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!--    свои стили-->
    <link rel="stylesheet" href="../../../public/style/style_index.css">
    <link rel="stylesheet" href="../../../public/style/fonts.css">
    <link rel="stylesheet" href="../../../public/style/main.css">
    <link rel="stylesheet" href="../../../public/style/style_register.css">
    <script src="/public/scripts/jquery.js"></script>
    <script src="/public/scripts/script_index.js"></script>

    <title> <?php echo $title;?></title>
</head>
<body>


<header class="header">
    <div class="header__inner">


            <div class="col-4 header__logo-pos">
                <img class="header__img" width="200" src="../../../public/images/logo.jpg" alt="Туалетная бумага СОЛО">
            </div>

            <div class="col-4 header__inner_row">
                <div class="header__inner_col_1"><img class="phone__img"  src="../../../public/images/icon/telephone.png" alt="Туалетная бумага СОЛО"></div>
                <div class="header__inner_col_2"><p class="header__tel_num"><a href="tel:+79139084576" class="header__tel_num_a"><strong>+79139084576</strong></a></p></div>
            </div>
            <div class="col-4 header__inner_but">
                <button type="button" class="btn btn-warning header-but-index">Заказать звонок</button>
            </div>

    </div>
    <div class="row header_btn_row">

        <div class="col-2 ">
            <button type="button" class="btn btn-warning header-but-index_2" onclick="window.location.href = '/';"><strong>Главная</strong></button>
        </div>
        <div class="col-2 ">
            <button type="button" class="btn btn-warning header-but-index_2"><strong>Продукция</strong></button>
        </div>
        <div class="col-2">
            <button type="button" class="btn btn-warning header-but-index_2"><strong>Сертификаты</strong></button>
        </div>
        <div class="col-2 ">
            <button type="button" class="btn btn-warning header-but-index_2"><strong>Контакты</strong></button>
        </div>
    </div>

    </div>

        </div>

</header>


        <?php echo $content;?>

<footer>

    <div class="col-10 index-row-text-about-company">
        <div class="row index-text-about-company-into ">
            <div class="col-4">
                <img class="header__img" width="200" src="../../../public/images/logo.jpg" alt="Туалетная бумага СОЛО">

            </div>
            <div class="col-4">
                <span><h2><strong>Контакты</strong></h2></span>
                <span><strong>Адрес:</strong> Россия, 633004, Новосибирская обл., город Бердск, ул. Зеленая роща, 7/34</span>
                <br>
                <span><strong>Телефон:</strong>
                    <a href="tel:+79139084576" > <strong>+79139084576</strong></a><br>
<!--                <a href="tel: +79138916971" > <strong>+79138916971</strong></a><br>-->
<!--                <a href="tel:+79538804909" > <strong>+79538804909</strong></a></span><br>-->
                <span><strong>Email:</strong> <a href="mailto:solo4576@mail.ru">solo4576@mail.ru</a></span>
                <br>
                <span><strong>Рабочие дни/часы:</strong> Пн - Пт / 9:00 - 18:00</span>
            </div>

        </div>
    </div>

</footer>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- === style css === -->
    <link rel="stylesheet" href="<?php echo base_url() ?>/login/css/style.css">

    <!-- === box icon === -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>


    <title>Document</title>
</head>

<body>

    <div class="l-form">
        <div class="shape1"></div>
        <div class="shape2"></div>


        <div class="form">
            <img src="<?php echo base_url() ?>/login/img/asa.png" alt="" class="form__img">

            <form action="" class="form__content">
                <h1 class="form__title">Welcome</h1>

                <div class="form__div form__div-one">
                    <div class="form__icon">
                        <i class='bx bx-user-circle'></i>
                    </div>

                    <div class="form__div-input">
                        <label for="" class="form__label">Username</label>
                        <input type="text" class="form__input">
                    </div>
                </div>

                <div class="form__div">
                    <div class="form__icon">
                        <i class='bx bx-lock'></i>
                    </div>

                    <div class="form__div-input">
                        <label for="" class="form__label">Password</label>
                        <input type="password" class="form__input">
                    </div>
                </div>

                <a href="#" class="form__forgot">Forgot Password</a>

                <input type="submit" class="form__button" value="Login">

                <div class="form__social">
                    <span class="form__social-text">Our Login With</span>

                    <a href="#" class="form__social-icon"><i class='bx bxl-facebook'></i></a>
                    <a href="#" class="form__social-icon"><i class='bx bxl-google'></i></a>
                    <a href="#" class="form__social-icon"><i class='bx bxl-instagram'></i></a>
                </div>
            </form>
        </div>
    </div>
    <!-- ==== main js ===== -->
    <script src="<?php echo base_url() ?>/login/js/main.js"></script>
</body>

</html>
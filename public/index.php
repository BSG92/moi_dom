<!DOCTYPE html>
<?php

require_once '../app/require.php';

// Error reporting ***TURN OFF ON PRODUCTION***
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
// /etc/php/.../php.ini
//************************************ */
$DIR="/var/www/html";
?>

<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- this base fixes relative url errors -->
        <base href="http://localhost/moi_dom/" target="_blank">
        
<!-- INCLUDING ALL bootstrap css files -->
    <?php
        // $cssfiles = glob("assets/bootstrap-dist/css/"."*.css");
        // foreach($cssfiles as $cssfile){
        //     echo "<link rel=\"stylesheet\" href=$cssfile" . ">";
        // }
    ?>
<!-- END OF ALL bootstrap css files -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">
        
        <link rel="stylesheet" href="assets/slick.min.css">
        <!-- Custom Theme Style & Color pallette -->
        <link rel="stylesheet" type="text/css" href="assets/style.css">
        
        <title>Construction Site</title>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a href="#" class="bi bi-house-fill navbar-brand"
                style="font-style: bold; font-family: 'Varela Round', sans-serif;">Мой Дом</a>
                <button
                class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navmenu"> <span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navmenu">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a href="#home" class="nav-link" target="_self" rel="noreferrer">Главный</a>
                        </li>
                        <li class="nav-item">
                            <a href="#about" class="nav-link" target="_self" rel="noreferrer">О нас</a>
                        </li>
                        <li class="nav-item">
                            <a href="#services" class="nav-link" target="_self" rel="noreferrer">услуги</a>
                        </li>
                        <li class="nav-item">
                            <a href="#projects" class="nav-link" target="_self" rel="noreferrer">Проекты</a>
                        </li>
                        <li class="nav-item">
                            <a href="#contacts" class="nav-link" target="_self" rel="noreferrer">Контакты</a>
                        </li>
                    </ul>
                    <img style="width:20px; height:20px" src="assets/images/ru.svg" alt="Russian">
                    <div>...</div>
                    <img style="width:20px; height:20px" src="assets/images/en.svg" alt="English">
                </div>
            </div>            
        </nav>
        <div id="home" class="welcome-slider">
            <img src="assets/images/welcome_slider/img-int-276724.jpg" alt="">
            <img src="assets/images/welcome_slider/img-int-584399.jpg" alt="">
            <img src="assets/images/welcome_slider/img-int-ksenia-chernaya-3952034.jpg" alt="">
            <img src="assets/images/welcome_slider/img-int-max-vakhtbovych-7018402.jpg" alt="">        
        </div> <!-- welcome slider END -->

        <!-- <img style="background-repeat:no-repeat; background-size:cover; width:'100%'; height:'100%';" src="assets/images/slider.jpg"> -->

        <!-- <div class="hori-spacer"></div> -->

        <!-- Who we are -->
        <section id="about">
            <section class="bg-white">
                <div class="hori-spacer"></div>
                <div class="hori-spacer"></div>
                <div class="hori-spacer"></div>
                <div class="container text-sub-title">
                    <h1>О нас</h1>
                    <div class="hori-spacer"></div>
                    <div class="hori-spacer"></div>
                    <div class="hori-spacer"></div>
                    <p class="lead sub-text">
                    Это официальный сайт двух строительных фирм - ИП Арсенин и ИП Давыдов, созданный нами для того, чтобы вам было легче принять решение в выборе услуг по внутренней отделке квартир, домов, коттеджей, пентхаусов, многоквартирных домов, коммерческих помещений, офисов, детских дошкольных, школьных , а так же других образовательных и социальных учреждений. 
                    </p>
                    <p class="lead">
                    Сделав свой выбор в нашу пользу, вы обеспечите себя гарантом качества и надежности, а самое главное - оставите внутри себя прекрасные чувства и эмоции по итогу выполненной работы. 
                    </p>
                    <p class="lead">Заключив договор , вам не придётся больше переживать о 
предстоящем ремонте, дизайне отделки, графике работ и закупке материалов.
                    </p>
                    <p class="lead">Мы максимально сэкономим ваше время, финансы и честно ответим на все ваши вопросы. </p>
                    <p class="lead">Бесплатную консультацию и фиксированную стоимость  работ вы можете получить, просто позвонив нам или написав  в социальных сетях.</p>
                    <p class="lead">Достаточно будет одной встречи, для обсуждения деталей и построения плана работ.</p>
                    <p class="lead">Вкус вашего комфортного пребывания в доме - то, к чему мы стремимся.</p>
                </div>
                <div class="hori-spacer"></div>
                <div class="hori-spacer"></div>
                <div class="hori-spacer"></div>
            </section>
        </section>

        <!-- What we do? boxes -->
        <section class="p-5" id="services">
            <div class="container">
                <h1>Наши услуги</h1>
                <div class="row text-center">
                    <div class="col-md text-sub-title">
                    <div class="card text-dark">
                        <div class="card-body">
                            <img src="assets/images/construction-consultant.jpg" alt="Consultation">
                            <div class="hori-spacer"></div>
                            <h5 class="card-title">Consultation</h5>
                            <p class="card-text">Sample text</p>
                            <button class="btn btn-warning">Know more</button>
                        </div>
                    </div>    
                    </div>
                    <div class="col-md text-sub-title">
                        <div class="card text-dark">
                            <div class="card-body">
                                <img src="assets/images/designing.jpg" alt="Designing">
                                <div class="hori-spacer"></div>
                                <h5 class="card-title">Designing & Planning</h5>
                                <p class="card-text">Sample text</p>
                                <button class="btn btn-warning">Know more</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md text-sub-title">
                        <div class="card text-dark">
                            <div class="card-body">
                                <img src="assets/images/reconstruction-services.jpg" alt="Reconstruction">
                                <div class="hori-spacer"></div>
                                <h5 class="card-title">Reconstruction Services</h5>
                                <p class="card-text">Sample text</p>
                                <button class="btn btn-warning">Know more</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Us -->
        <section class="bg-black text-white">
            <div class="container" id="contacts">
                <div class="hori-spacer"></div>
                <div class="hori-spacer"></div>
                <div class="hori-spacer"></div>

                <h1>Contact Us</h1>

                <div class="hori-spacer"></div>
                <div class="hori-spacer"></div>
                <div class="hori-spacer"></div>
                <div class="hori-spacer"></div>
                
                <div class="row">
                    <div class="col-md">
                        <div class="bi bi-phone-fill">&nbsp; +7 (123) 456 789</div>
                        <div class="hori-spacer"></div>
                        <div class="bi bi-envelope-fill">&nbsp; query@moidom.ru</div>
                        <div class="hori-spacer"></div>
                        <div class="bi bi-whatsapp">&nbsp; +7 (123) 456 789</div>
                        
                        <div class="bg-dark card mt-3">
                            <div class="card-body">
                                <div class="card-text text-white text-center">
                                    <div class="hori-spacer"></div>

                                    <div class="text-thick">Follow Us On</div>
                                    <div class="hori-spacer"></div>
                                    <div class="hori-spacer"></div>
                                    <a href="https://www.instagram.com/my_homebuilder/" target="_blank" class="bi bi-instagram text-yellow"
                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="@my_homebuilder"></a>
                                    &nbsp;
                                    <a href="https://facebook.com" target="_blank" class="bi bi-facebook text-yellow"
                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="@username"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<!-- INCLUDING ALL bootstrap js files -->
<?php
    // $jsfiles = glob("assets/bootstrap-dist/js/"."*.js");
    // foreach($jsfiles as $jsfile){
    //    // echo " src=$jsfile" .basename($jsfile)."</script>";
    //    echo "<script src=$jsfile"."></script>";
    // }
?>
<!-- <script> -->
<!-- //     let parallaxImage = document.getElementById('parallax-image');
//     let parallaxBottom = document.getElementById('parallax-bottom');

//     window.addEventListener('scroll', function(){
//         let value = window.scrollY;
//         parallaxBottom.style.top = value * 0.25 + 'px';
//         console.log("scroll value: " + value);
//     }); -->
<!-- </script> -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="assets/jquery-3.6.0.js"></script>
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="assets/slick.min.js"></script>
<script src="assets/slick-welcome-slider.js"></script>
<script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    });
</script>
<!-- END OF ALL bootstrap js files -->
    
</body>
</html>
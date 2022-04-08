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
                    <h1 class="lng-title_about_us">О нас</h1>
                    <div class="hori-spacer"></div>
                    <div class="hori-spacer"></div>
                    <div class="hori-spacer"></div>
                    <p class="lead sub-text lng-about_us_1">
                    Это официальный сайт строительной фирмы - ИП Арсенин, созданный нами для того, чтобы вам было легче принять решение в выборе услуг по внутренней отделке квартир, домов, коттеджей, пентхаусов, многоквартирных домов, коммерческих помещений, офисов, детских дошкольных, школьных , а так же других образовательных и социальных учреждений. 
                    </p>
                    <p class="lead lng-about_us_2">
                    Сделав свой выбор в нашу пользу, вы обеспечите себя гарантом качества и надежности, а самое главное - оставите внутри себя прекрасные чувства и эмоции по итогу выполненной работы. 
                    </p>
                    <p class="lead lng-about_us_3">Заключив договор , вам не придётся больше переживать о 
предстоящем ремонте, дизайне отделки, графике работ и закупке материалов.
                    </p>
                    <p class="lead lng-about_us_4">Мы максимально сэкономим ваше время, финансы и честно ответим на все ваши вопросы.</p>
                    <p class="lead lng-about_us_5">Бесплатную консультацию и фиксированную стоимость  работ вы можете получить, просто позвонив нам или написав  в социальных сетях.</p>
                    <p class="lead lng-about_us_6">Достаточно будет одной встречи, для обсуждения деталей и построения плана работ.</p>
                    <p class="lead lng-about_us_7">Вкус вашего комфортного пребывания в доме - то, к чему мы стремимся.</p>
                </div>
                <div class="hori-spacer"></div>
                <div class="hori-spacer"></div>
                <div class="hori-spacer"></div>
            </section>
        </section>

        <!-- What we do? boxes -->
        <section class="p-5" id="services">
            <div class="container">
                <h1 class="lng-title_services">Наши услуги</h1>
                <div class="row text-center">
                    <div class="col-md text-sub-title">
                    <div class="card text-dark">
                        <div class="card-body">
                            <img src="assets/images/reconstruction-services.jpg" alt="Construction">
                            <div class="hori-spacer"></div>
                            <h5 class="card-title lng-work_construction">Строительно–отделочные работы </h5>
                            <!-- <p class="card-text">Sample text</p> -->
                            <a class="btn btn-warning lng-know_more_construction" href="<?php echo URLROOT; ?>/prices" >Узнать больше</a>
                        </div>
                    </div>    
                    </div>
                    <div class="col-md text-sub-title">
                        <div class="card text-dark">
                            <div class="card-body">
                                <img src="assets/images/electrical-works.jpg" alt="Electrical">
                                <div class="hori-spacer"></div>
                                <h5 class="card-title lng-work_electrical">Электромонтажные работы</h5>
                                <!-- <p class="card-text">Sample text</p> -->
                                <a class="btn btn-warning lng-know_more_electrical" href="<?php echo URLROOT; ?>/prices/electrical" >Узнать больше</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md text-sub-title">
                        <div class="card text-dark">
                            <div class="card-body">
                                <img src="assets/images/plumbing-works.webp" alt="Plumbing">
                                <div class="hori-spacer"></div>
                                <h5 class="card-title lng-work_plumbing">Сантехнические  работы</h5>
                                <!-- <p class="card-text">Sample text</p> -->
                                <a class="btn btn-warning lng-know_more_plumbing" href="<?php echo URLROOT; ?>/prices/plumbing" >Узнать больше</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md text-sub-title">
                        <div class="card text-dark">
                            <div class="card-body">
                                <img src="assets/images/repair-works.webp" alt="Repair">
                                <div class="hori-spacer"></div>
                                <h5 class="card-title lng-work_repairing">Ремонт</h5>
                                <!-- <p class="card-text">Sample text</p> -->
                                <button class="btn btn-secondary lng-know_more_repairing" disabled>Узнать больше</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Customer Reviews -->
        <section id="reviews" style="margin-bottom: 1em;">
            <div class="container">
                <h1 class="lng-client_reviews">Наши клиенты говорят...</h1>
                <div class="hori-spacer"></div>
                <div class="hori-spacer"></div>

                <div class="reviews-slider" style="display: flex;">
                    <?php 
                        foreach ($data['reviews'] as $review) {
                            // echo $review->id . ' || Name: ' . $review->name .
                            //         ' || Review: ' . $review->review;
                            // echo '<br>';

                            echo '<div class="card text-dark" style="margin-right: 2rem; max-width: 30rem">
                                    <div class="card-body">
                                    <blockquote class="blockquote mb-0">
                                            <p>' . $review->review . '</p>
                                            <footer class="blockquote-footer">' . $review->name . '</footer>
                                        </blockquote>
                                        <div class="card-footer">' . $review->date . '</div>
                                    </div>
                                </div>';
                        } 
                    ?>
                    <!-- <div class="card text-dark" style="margin-right: 1em">
                        <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <p>A well-known quote, contained in a blockquote element. I'm purposefully making the sooooo long to test this out. I really really hope things work out</p>
                            <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                        </blockquote>
                        <div class="card-footer">Date published</div>
                        </div>
                    </div>
                    <div class="card text-dark">
                        <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <p>A well-known quote, contained in a blockquote element. I'm purposefully making the sooooo long to test this out. I really really hope things work out</p>
                            <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                        </blockquote>
                        <div class="card-footer">Date published</div>
                        </div>
                    </div> -->
                </div>

            </div>
        </section>

        <!-- Contact Us -->
        <section class="bg-black text-white">
            <div class="container" id="contacts">
                <div class="hori-spacer"></div>
                <div class="hori-spacer"></div>
                <div class="hori-spacer"></div>

                <h1 class="lng-get_in_touch">Свяжитесь с нами</h1>

                <div class="hori-spacer"></div>
                <div class="hori-spacer"></div>
                <div class="hori-spacer"></div>
                <div class="hori-spacer"></div>
                
                <div class="row">
                    <div class="col-md">
                        <div><span class="bi bi-whatsapp text-yellow"></span>&nbsp; 8-921-479-54-35</div>
                        <div class="hori-spacer"></div>
                        <div><span class="bi bi-phone-fill text-yellow"></span>&nbsp; 8-968-188-14-41</div>
                        <div class="hori-spacer"></div>
                        <div><span class="bi bi-envelope-fill text-yellow"></span>&nbsp; vovadavydov522@gmail.com</div>

                        <div class="row mt-5">
                            <div>
                                <span class="bi bi-house text-yellow" style="font-style: bold; font-family: 'Varela Round', sans-serif;"></span>
                                &nbsp;
                                <div class="lng-address_line_1">Ленсоветовский 23,</div>
                                   <div class="lng-address_line_2">посёлок Шушары,</div>
                                    <div class="lng-address_line_3">Санкт-Петербург,</div>
                                    <div class="lng-address_line_4">Россия</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <!-- <iframe src="https://yandex.ru/maps/org/zhk_dobrynya/133858123731/?ll=30.471598%2C59.756596&z=17" frameborder="0"
                            loading="lazy" width="600px" height="500px"></iframe> -->
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2009.5030247582386!2d30.469655123598255!3d59.75770693822565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x469627bb80153069%3A0x94031ec1603a078c!2z0JbQmiDQlNC-0LHRgNGL0L3Rjw!5e0!3m2!1sru!2sru!4v1647934704499!5m2!1sru!2sru" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            <a href="https://yandex.ru/maps/org/zhk_dobrynya/133858123731/?ll=30.471598%2C59.756596&z=17"
                                class="text-yellow lng-open_yandex_maps" style="text-decoration: none;" target="_blank" >Открыть в Яндекс картах</a>
                    </div>
                </div>
                <div class="row">
                <div class="bg-dark card mt-3">
                            <div class="card-body">
                                <div class="card-text text-white text-center">
                                    <div class="hori-spacer"></div>

                                    <div class="text-thick lng-join_us">Присоединяйтесь к нам</div>
                                    <div class="hori-spacer"></div>
                                    <div class="hori-spacer"></div>
                                    <span style="display:flex; justify-content: center;">
                                        <a href="https://www.instagram.com/my_homebuilder/" target="_blank" class="bi bi-instagram text-yellow"
                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                        title="@my_homebuilder"></a>
                                        &nbsp;

                                        <a href="https://vk.com/myhomespb78" target="_blank" class="text-yellow"
                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                        title="@myhomespb78"><img src="assets/images/logos/vk.svg" 
                                        style="width: 20px; height: 20px;" alt="myhomespb78"></a>
                                    </span>
                                        
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

<!-- Content END -->

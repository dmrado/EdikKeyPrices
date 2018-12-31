@extends(request()->route()->getController()->parentView)

<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Чипы</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#services">Услуги</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#portfolio">Марка авто</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#about">Модель Авто</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#team">Наименование работ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#contact">Контакты</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Header -->
<header class="masthead">
    <div class="container">
        <div class="intro-text">
            <div class="intro-lead-in">Добро пожаловать на сайт нашего техцентра!</div>
            <div class="intro-heading text-uppercase">Chippy</div>
            <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Наша деятельность</a>
        </div>
    </div>
</header>

<!-- Наши услуги -->
<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">Наши услуги</h2>
                <h3 class="section-subheading text-muted">Мы занимаемся изготовлением дубликатов чипованных ключей всех видов.</h3>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
            </span>
                <h4 class="service-heading">Для автомобилей</h4>
                <p class="text-muted">Многочисленные автопроизводители, работающие на мировом рынке, соревнуются во многом, но, пожалуй, одним из главных показателей является неприступность автомобиля. Автомобильные ключи с чипом – это большой прогресс в борьбе с угонами и кражами автомобилей по всему миру.</p>
            </div>
            <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
            </span>
                <h4 class="service-heading">Для мотоциклов</h4>
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
            </div>
            <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
            </span>
                <h4 class="service-heading">Для квартир и домофонов</h4>
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Grid -->
<section class="bg-light" id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">Марка Авто</h2>
                <h3 class="section-subheading text-muted">Здесь вы можете выбрать свой автомобиль</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                    <div class="portfolio-hover">
                       <!-- <div class="portfolio-hover-content">-->
                            <i class="fas fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <!-- <img class="img-fluid" src="img/portfolio/01-thumbnail.jpg"  alt="">-->
                </a>
                <div class="portfolio-caption">
                    <tr>
                        <td align="center" valign="middle"><a href="/acura"><img src="/sites/default/files/pictures/acura.jpg" alt="Acura" /></a></td>
                        <td align="center" valign="middle"><a href="/alfa_romeo"><img src="/sites/default/files/pictures/alfa_romeo.jpg" alt="Alfa romeo" /></a></td>
                        <td align="center" valign="middle"><a href="/audi"><img src="/sites/default/files/pictures/audi.jpg" alt="Audi" /></a></td>
                        <td align="center" valign="middle"><a href="/bmw"><img src="/sites/default/files/pictures/bmw.jpg" alt="BMW" /></a></td>
                        <td align="center" valign="middle"><a href="/buick"><img src="/sites/default/files/pictures/buick.jpg" alt="Buick" /></a></td>
                        <td align="center" valign="middle"><a href="/cadillac"><img src="/sites/default/files/pictures/cadillac.jpg" alt="Cadillac" /></a></td>
                        <td align="center" valign="middle"><a href="/chevrolet"><img src="/sites/default/files/pictures/chevrolet.jpg" alt="Chevrolet" /></a></td>
                    </tr>
                    <tr>
                        <td align="center" valign="middle"><a href="/chrysler"><img src="/sites/default/files/pictures/chrysler.jpg" alt="Chrysler" /></a></td>
                        <td align="center" valign="middle"><a href="/citroen"><img src="/sites/default/files/pictures/citroen.jpg" alt="Citroen" /></a></td>
                        <td align="center" valign="middle"><a href="/dodge"><img src="/sites/default/files/pictures/dodge.jpg" alt="Dodge" /></a></td>
                        <td align="center" valign="middle"><a href="/eagle"><img src="/sites/default/files/pictures/eagle.jpg" alt="Eagle" /></a></td>
                        <td align="center" valign="middle"><a href="/fiat"><img src="/sites/default/files/pictures/fiat.jpg" alt="Fiat" /></a></td>
                        <td align="center" valign="middle"><a href="/ford"><img src="/sites/default/files/pictures/ford.jpg" alt="Ford" /></a></td>
                        <td align="center" valign="middle"><a href="/gmc"><img src="/sites/default/files/pictures/gmc.jpg" alt="GMC" /></a></td>
                    </tr>
                    <tr>
                        <td align="center" valign="middle"><a href="/holden"><img src="/sites/default/files/pictures/holden.jpg" alt="Holden" /></a></td>
                        <td align="center" valign="middle"><a href="/honda"><img src="/sites/default/files/pictures/honda.jpg" alt="Honda" /></a></td>
                        <td align="center" valign="middle"><a href="/hummer"><img src="/sites/default/files/pictures/hummer.jpg" alt="Hummer" /></a></td>
                        <td align="center" valign="middle"><a href="/hyundai"><img src="/sites/default/files/pictures/hyundai.jpg" alt="Hyundai" /></a></td>
                        <td align="center" valign="middle"><a href="/infiniti"><img src="/sites/default/files/pictures/infiniti.jpg" alt="Infiniti" /></a></td>
                        <td align="center" valign="middle"><a href="/isuzu"><img src="/sites/default/files/pictures/isuzu.gif" alt="Isuzu" /></a></td>
                        <td align="center" valign="middle"><a href="/iveco"><img src="/sites/default/files/pictures/iveco.jpg" alt="Iveco" /></a></td>
                    </tr>
                    <tr>
                        <td align="center" valign="middle"><a href="/jeep"><img src="/sites/default/files/pictures/jeep.jpg" alt="Jeep" /></a></td>
                        <td align="center" valign="middle"><a href="/kia"><img src="/sites/default/files/pictures/kia.png" alt="Kia" /></a></td>
                        <td align="center" valign="middle"><a href="/lada"><img src="/sites/default/files/pictures/lada.jpg" alt="Lada" /></a></td>
                        <td align="center" valign="middle"><a href="/lancia"><img src="/sites/default/files/pictures/lancia.jpg" alt="Lancia" /></a></td>
                        <td align="center" valign="middle"><a href="/lexus"><img src="/sites/default/files/pictures/lexus.jpg" alt="Lexus" /></a></td>
                        <td align="center" valign="middle"><a href="/mazda"><img src="/sites/default/files/pictures/mazda.jpg" alt="Mazda" /></a></td>
                        <td align="center" valign="middle"><a href="/mercedes"><img src="/sites/default/files/pictures/mercedes.jpg" alt="Mercedes" /></a></td>
                    </tr>
                    <tr>
                        <td align="center" valign="middle"><a href="/mercury"><img src="/sites/default/files/pictures/mercury.jpg" alt="Mercury" /></a></td>
                        <td align="center" valign="middle"><a href="/mitsubishi"><img src="/sites/default/files/pictures/mitsubishi.jpg" alt="Mitsubishi" /></a></td>
                        <td align="center" valign="middle"><a href="/nissan"><img src="/sites/default/files/pictures/nissan.jpg" alt="Nissan" /></a></td>
                        <td align="center" valign="middle"><a href="/oldsmobile"><img src="/sites/default/files/pictures/oldsmobile.png" alt="Oldsmobile" /></a></td>
                        <td align="center" valign="middle"><a href="/opel"><img src="/sites/default/files/pictures/opel.jpg" alt="Opel" /></a></td>
                        <td align="center" valign="middle"><a href="/peugeot"><img src="/sites/default/files/pictures/peugeot.jpg" alt="Peugeot" /></a></td>
                        <td align="center" valign="middle"><a href="/pontiac"><img src="/sites/default/files/pictures/pontiac.jpg" alt="Pontiac" /></a></td>
                    </tr>
                    <tr>
                        <td align="center" valign="middle"><a href="/porsche"><img src="/sites/default/files/pictures/porsche.jpg" alt="Porsche" /></a></td>
                        <td align="center" valign="middle"><a href="/proton"><img src="/sites/default/files/pictures/proton.jpg" alt="Proton" /></a></td>
                        <td align="center" valign="middle"><a href="/renault"><img src="/sites/default/files/pictures/renault.jpg" alt="Renault" /></a></td>
                        <td align="center" valign="middle"><a href="/saab"><img src="/sites/default/files/pictures/saab.jpg" alt="Saab" /></a></td>
                        <td align="center" valign="middle"><a href="/saturn"><img src="/sites/default/files/pictures/saturn.jpg" alt="Saturn" /></a></td>
                        <td align="center" valign="middle"><a href="/ssangyong"><img src="/sites/default/files/pictures/ssangyong.jpg" alt="Ssangyong" /></a></td>
                        <td align="center" valign="middle"><a href="/seat"><img src="/sites/default/files/pictures/seat.jpg" alt="Seat" /></a></td>
                    </tr>
                    <tr>
                        <td align="center" valign="middle"><a href="/skoda"><img src="/sites/default/files/pictures/skoda.jpg" alt="Skoda" /></a></td>
                        <td align="center" valign="middle"><a href="/subaru"><img src="/sites/default/files/pictures/subaru.jpg" alt="Subaru" /></a></td>
                        <td align="center" valign="middle"><a href="/suzuki"><img src="/sites/default/files/pictures/suzuki.jpg" alt="Suzuki" /></a></td>
                        <td align="center" valign="middle"><a href="/toyota"><img src="/sites/default/files/pictures/toyota.jpg" alt="Toyota" /></a></td>
                        <td align="center" valign="middle"><a href="/volkswagen"><img src="/sites/default/files/pictures/volkswagen.gif" alt="Volkswagen" /></a></td>
                        <td align="center" valign="middle"><a href="/volvo"><img src="/sites/default/files/pictures/volvo.png" alt="Volvo" /></a></td>
                        <td align="center" valign="middle"></td>
                    </tr>
                    </table>
                    <p class="tabletitle"><a href="moto">Чипованные ключи для мотоциклов</a></p>
                    <div align="center">
                        <table width="100%">
                            <tr>
                                <td align="center" valign="middle"><a href="/aprilia"><img src="/sites/default/files/pictures/aprilia.gif" alt="Aprilia moto" /></a></td>
                                <td align="center" valign="middle"><a href="/honda_moto"><img src="/sites/default/files/pictures/honda_moto.png" alt="Honda moto" /></a></td>
                                <td align="center" valign="middle"><a href="/kawasaki"><img src="/sites/default/files/pictures/kawasaki.jpg" alt="Kawasaki moto" /></a></td>
                                <td align="center" valign="middle"><a href="/moto_guzzi"><img src="/sites/default/files/pictures/moto_guzzi.jpg" alt="Moto guzzi moto" /></a></td>
                                <td align="center" valign="middle"><a href="/suzuki_moto"><img src="/sites/default/files/pictures/suzuki.jpg" alt="Suzuki moto" /></a></td>
                                <td align="center" valign="middle"><a href="/yamaha"><img src="/sites/default/files/pictures/yamaha.jpg" alt="Yamaha moto" /></a></td>
                            </tr>
                        </table>
                    </div>
                    {{--<p class="text-muted">Illustration</p>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-md-4 col-sm-6 portfolio-item">--}}
                {{--<a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">--}}
                    {{--<div class="portfolio-hover">--}}
                        {{--<div class="portfolio-hover-content">--}}
                            {{--<i class="fas fa-plus fa-3x"></i>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<img class="img-fluid" src="img/portfolio/02-thumbnail.jpg" alt="">--}}
                {{--</a>--}}
                {{--<div class="portfolio-caption">--}}
                    {{--<h4>Explore</h4>--}}
                    {{--<p class="text-muted">Graphic Design</p>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-md-4 col-sm-6 portfolio-item">--}}
                {{--<a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">--}}
                    {{--<div class="portfolio-hover">--}}
                        {{--<div class="portfolio-hover-content">--}}
                            {{--<i class="fas fa-plus fa-3x"></i>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<img class="img-fluid" src="img/portfolio/03-thumbnail.jpg" alt="">--}}
                {{--</a>--}}
                {{--<div class="portfolio-caption">--}}
                    {{--<h4>Finish</h4>--}}
                    {{--<p class="text-muted">Identity</p>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-md-4 col-sm-6 portfolio-item">--}}
                {{--<a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">--}}
                    {{--<div class="portfolio-hover">--}}
                        {{--<div class="portfolio-hover-content">--}}
                            {{--<i class="fas fa-plus fa-3x"></i>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<img class="img-fluid" src="img/portfolio/04-thumbnail.jpg" alt="">--}}
                {{--</a>--}}
                {{--<div class="portfolio-caption">--}}
                    {{--<h4>Lines</h4>--}}
                    {{--<p class="text-muted">Branding</p>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-md-4 col-sm-6 portfolio-item">--}}
                {{--<a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">--}}
                    {{--<div class="portfolio-hover">--}}
                        {{--<div class="portfolio-hover-content">--}}
                            {{--<i class="fas fa-plus fa-3x"></i>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<img class="img-fluid" src="img/portfolio/05-thumbnail.jpg" alt="">--}}
                {{--</a>--}}
                {{--<div class="portfolio-caption">--}}
                    {{--<h4>Southwest</h4>--}}
                    {{--<p class="text-muted">Website Design</p>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-md-4 col-sm-6 portfolio-item">--}}
                {{--<a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">--}}
                    {{--<div class="portfolio-hover">--}}
                        {{--<div class="portfolio-hover-content">--}}
                            {{--<i class="fas fa-plus fa-3x"></i>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<img class="img-fluid" src="img/portfolio/06-thumbnail.jpg" alt="">--}}
                {{--</a>--}}
                {{--<div class="portfolio-caption">--}}
                    {{--<h4>Window</h4>--}}
                    {{--<p class="text-muted">Photography</p>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    </div>
</section>

<!-- About -->
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">Модель авто</h2>
                <h3 class="section-subheading text-muted">Виберите модель вашего автомобиля и год выпуска.</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <ul class="timeline">
                    <li>
                        <div class="timeline-image">
                            <img class="rounded-circle img-fluid" src="img/about/1.jpg" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2009-2011</h4>
                                <h4 class="subheading">Our Humble Beginnings</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <img class="rounded-circle img-fluid" src="img/about/2.jpg" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>March 2011</h4>
                                <h4 class="subheading">An Agency is Born</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image">
                            <img class="rounded-circle img-fluid" src="img/about/3.jpg" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>December 2012</h4>
                                <h4 class="subheading">Transition to Full Service</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <img class="rounded-circle img-fluid" src="img/about/4.jpg" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>July 2014</h4>
                                <h4 class="subheading">Phase Two Expansion</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>Перейти
                                <br>к оценке
                                <br>стоимости</h4>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Наименгование работ -->
<section class="bg-light" id="team">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">Наименование работ</h2>
                <h3 class="section-subheading text-muted">Выберите работы для вашего ключа.</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="img/team/1.jpg" alt="">
                    <h4>Чиповка</h4>
                    <p class="text-muted">Программирование чипа <br/> и прошивка бортового компьютера автомобиля, при необходимости;
                    </p>
                    <ul class="list-inline social-buttons">
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="img/team/2.jpg" alt="">
                    <h4>Заточка</h4>
                    <p class="text-muted">Заточка лезвий ключа. Перфорированные, тубулярные, крестообразные, сувальдные, «английского» типа и др.
                        </p>
                    <ul class="list-inline social-buttons">
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="img/team/3.jpg" alt="">
                    <h4>Адаптация</h4>
                    <p class="text-muted">Привязка к кнопкам, <br/>адаптация ключа <br/>к <br/>автомобилю.</p>
                    <ul class="list-inline social-buttons">
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <p class="large text-muted"><a href="javascript:
                
                var total = "
                    >Итого:</a></p>
            </div>
        </div>
    </div>
</section>

<!-- Clients -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <a href="#">
                    <img class="img-fluid d-block mx-auto" src="img/logos/envato.jpg" alt="">
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="#">
                    <img class="img-fluid d-block mx-auto" src="img/logos/designmodo.jpg" alt="">
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="#">
                    <img class="img-fluid d-block mx-auto" src="img/logos/themeforest.jpg" alt="">
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="#">
                    <img class="img-fluid d-block mx-auto" src="img/logos/creative-market.jpg" alt="">
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Contact -->
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">Contact Us</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form id="contactForm" name="sentMessage" novalidate="novalidate">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <span class="copyright">Copyright &copy; Your Website 2018</span>
            </div>
            <div class="col-md-4">
                <ul class="list-inline social-buttons">
                    <li class="list-inline-item">
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="list-inline quicklinks">
                    <li class="list-inline-item">
                        <a href="#">Privacy Policy</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">Terms of Use</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<!-- Portfolio Modals -->

<!-- Modal 1 -->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2 class="text-uppercase">Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-fluid d-block mx-auto" src="img/portfolio/01-full.jpg" alt="">
                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                            <ul class="list-inline">
                                <li>Date: January 2017</li>
                                <li>Client: Threads</li>
                                <li>Category: Illustration</li>
                            </ul>
                            <button class="btn btn-primary" data-dismiss="modal" type="button">
                                <i class="fas fa-times"></i>
                                Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal 2 -->
<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2 class="text-uppercase">Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-fluid d-block mx-auto" src="img/portfolio/02-full.jpg" alt="">
                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                            <ul class="list-inline">
                                <li>Date: January 2017</li>
                                <li>Client: Explore</li>
                                <li>Category: Graphic Design</li>
                            </ul>
                            <button class="btn btn-primary" data-dismiss="modal" type="button">
                                <i class="fas fa-times"></i>
                                Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal 3 -->
<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2 class="text-uppercase">Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-fluid d-block mx-auto" src="img/portfolio/03-full.jpg" alt="">
                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                            <ul class="list-inline">
                                <li>Date: January 2017</li>
                                <li>Client: Finish</li>
                                <li>Category: Identity</li>
                            </ul>
                            <button class="btn btn-primary" data-dismiss="modal" type="button">
                                <i class="fas fa-times"></i>
                                Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal 4 -->
<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2 class="text-uppercase">Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-fluid d-block mx-auto" src="img/portfolio/04-full.jpg" alt="">
                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                            <ul class="list-inline">
                                <li>Date: January 2017</li>
                                <li>Client: Lines</li>
                                <li>Category: Branding</li>
                            </ul>
                            <button class="btn btn-primary" data-dismiss="modal" type="button">
                                <i class="fas fa-times"></i>
                                Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal 5 -->
<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2 class="text-uppercase">Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-fluid d-block mx-auto" src="img/portfolio/05-full.jpg" alt="">
                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                            <ul class="list-inline">
                                <li>Date: January 2017</li>
                                <li>Client: Southwest</li>
                                <li>Category: Website Design</li>
                            </ul>
                            <button class="btn btn-primary" data-dismiss="modal" type="button">
                                <i class="fas fa-times"></i>
                                Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal 6 -->
<div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2 class="text-uppercase">Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-fluid d-block mx-auto" src="img/portfolio/06-full.jpg" alt="">
                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                            <ul class="list-inline">
                                <li>Date: January 2017</li>
                                <li>Client: Window</li>
                                <li>Category: Photography</li>
                            </ul>
                            <button class="btn btn-primary" data-dismiss="modal" type="button">
                                <i class="fas fa-times"></i>
                                Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

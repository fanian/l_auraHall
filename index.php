<?php
include_once('referal.php');
?>
<!DOCTYPE html>
<!--[if lt IE 7] <html class="no-js lt-ie9 lt-ie8 lt-ie7"--><!--[if IE 7] <html class="no-js lt-ie9 lt-ie8"--><!--[if IE 8] <html class="no-js lt-ie9"--><!--[if gt IE 8]><!-->
<html class="no-js">
  <!--<![endif]-->
  <head>
    <meta charset="utf-8" />
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
    <meta content="" name="description" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>AuraHall - интерьерная фотостудия</title>
      <link href="stylesheets/styles.css" media="screen" rel="stylesheet" type="text/css" />
      <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  </head>
  <body>

    <header>
      <div class="wrapper clearfix">
        <div class="logo">
          <img src="images/logo.png" />
        </div>
        <div class="caption">
          <strong>Фотосессии в студии и на природе</strong><span>Интерьерная фотостудия в аренду</span>
        </div>
        <div class="tel">
          (843) 253-75-83<span>Казань, ул. Саид-Галеева 6, этаж 6</span>
        </div>
      </div>
    </header>
    <div class="menu">
        <div class="wrapper clearfix">
            <nav>
                <ul>
                    <li class="current"> <a data-scroll data-options="easing: easeInQuad" href="#about">о нас</a></li>
                    <li><a data-scroll data-options="easing: easeInQuad" href="#works">наши работы </a></li>
                    <li><a data-scroll data-options="easing: easeInQuad" href="#price">цены</a></li>
                    <li><a data-scroll data-options="easing: easeInQuad" href="#testimonials">отзывы </a></li>
                    <li><a data-scroll data-options="easing: easeInQuad" href="#sertificates">подарочные сертификаты </a></li>
                    <li><a data-scroll data-options="easing: easeInQuad" href="#rent">аренда фотостудии </a></li>
                </ul>
            </nav>


        </div>
        <div class="social fr">
            <a class="circle vk" href="http://vk.com/aurahall" target="_blank" title="Наша группа ВКонтакте">
                <i class="fa fa-vk"></i>
            </a>
            <a class="circle insta" href="http://instagram.com/aurahallstudio" target="_blank" title="Наша страница в Instagram">
                <i class="fa fa-instagram" style="display: inline-block !important;"></i>
            </a>
        </div>
    </div>
    <div class="form-block circle big">
      <h2>
        Только до 15 июня!
      </h2>
      <p>
        Закажи фотосессию и получи<br />фотокнигу в Подарок!
      </p>
      <form action="sendmessage.php" method="post" id="first_form">
        <input name="name" placeholder="Имя" required type="text" />
          <input name="phone" placeholder="Телефон" required type="text" />
          <button>Заказать</button>
      </form>

    </div>
    <div class = "slide_header">
      <div class="slides-container cycle-slideshow"
        data-cycle-fx="fade"
        data-cycle-timeout="0"
        data-cycle-prev=".slide_header .prev"
        data-cycle-next=".slide_header .next"
        data-cycle-auto-height="1920:1080"      >
          <div class="cycle-pager"></div>
          <img src="images/top-slider/1.jpg"/>
          <img src="images/top-slider/2.jpg"/>
          <img src="images/top-slider/3.jpg"/>
          <img src="images/top-slider/5.jpg"/>
          <img src="images/top-slider/6.jpg"/>
          <img src="images/top-slider/7.jpg"/>
          <img src="images/top-slider/8.jpg"/>
          <img src="images/top-slider/9.jpg"/>
          <img src="images/top-slider/10.jpg"/>
      </div>


        <div class="slides-navigation">
        <span class="next"><i class="fa fa-chevron-right"></i></span>
          <span class="prev"><i class="fa fa-chevron-left"></i></span>
      </div>
    </div>
    <span id="about"></span><div class="who-we">

      <div class="title">
        <h2>
          <span></span>кто мы и что мы делаем<span></span>
        </h2>
      </div>
      <div class="wrapper">
        <h2>
          <span>Aura Hall</span>- это команда профессиональных фотографов, стилистов и визажистов.
        </h2>
        <ul>
          <li class="i1">
            Это персональные и&nbsp;<span>семейные фотосессии&nbsp;</span>
              креативные&nbsp;<span>фотосеты&nbsp;</span>удивительные<br />
              <span>фотоэксперименты&nbsp;</span>в студии и на природе
          </li>
          <li class="i2">
            Это качественная&nbsp;<span>свадебная фото- и видеосъемка&nbsp;</span>от 2 до 16 часов
          </li>
          <li class="i3">
            Это&nbsp;<span>подарочные сертификаты&nbsp;</span>- незабываемый подарок для вас и ваших близких
          </li>
          <li class="i4">
            Это&nbsp;<span>интерьерная фотостудия в аренду&nbsp;</span>для профессиональных фотографов и<br />любителей
          </li>
          <li class="i5">
            Это рекламная фотосъемка для журналов и каталогов
          </li>
        </ul>
      </div>
    </div><div class="our-team">
      <div class="our-team_wrapper">
        <div class="title">
          <h2>
            <span></span>Наши креативные специалисты<span></span>
          </h2>
        </div>
        <ul>
          <li>
            <img src="images/our-team/1.jpg" /><br /><span>Елена<br />Осикова</span>
            <p>
              руководитель<br />фотостудии,<br />ведущий фотограф
            </p>
          </li>
          <li>
            <img src="images/our-team/2.jpg" /><br /><span>Марина<br />Чинук</span>
            <p>
              фотограф
            </p>
          </li>
          <li>
            <img src="images/our-team/3.jpg" /><br /><span>Татьяна<br />Ларичкина</span>
            <p>
              фотограф,<br />администратор<br />фотостудии
            </p>
          </li>
          <li>
            <img src="images/our-team/4.jpg" /><br /><span>Алена<br />Гусакова</span>
            <p>
              фотограф,<br />администратор<br />фотостудии
            </p>
          </li>
          <li>
            <img src="images/our-team/5.jpg" /><br /><span>Лилия<br />Абдулаева</span>
            <p>
              ведущий<br />специалист-<br />визажист
            </p>
          </li>
          <li>
            <img src="images/our-team/6.jpg" /><br /><span>Диана<br />Шакина</span>
            <p>
              pr-менеджер,<br />администратор<br />фотостудии
            </p>
          </li>
          <li>
            <img src="images/our-team/7.jpg" /><br /><span>Вероника<br />Сафина</span>
            <p>
              стилист-<br />визажист
            </p>
          </li>
        </ul>
        <div class="bubbles clearfix">
          <div class="item i1">
            <div class="title-top">
              <span>4</span>
              <p>
                года
              </p>
            </div>
            <p>
              Более 4 лет на<br />рынке фотографии
            </p>
          </div>
          <div class="item i2">
            <div class="title-top">
              <span>400</span>
              <p>
                фотосессий
              </p>
            </div>
            <p>
              Мы провели более 400<br />фотосессий в студии и<br />на природе
            </p>
          </div>
          <div class="item i3">
            <div class="title-top">
              <span>60</span>
              <p>
                свадеб
              </p>
            </div>
            <p>
              Более 60 счастливых<br />пар фотографировала<br />наша команда
            </p>
          </div>
          <div class="item i4">
            <div class="title-top">
              <span>85%</span>
              <p>
                постоянных<br />клиентов
              </p>
            </div>
            <p>
              85% клиентов приходят к нам<br />на фотосессию повторно,<br />а также  рекомендуют нас<br />своим близким
            </p>
          </div>
        </div>
      </div>
        <span id="works"></span></div><div class="our-works">
      <div class="uzor">
        <div class="our-works_wrapper">
          <div class="title">
            <h2>
              <span></span>Наши работы<span></span>
            </h2>
          </div>
          <div class="sl-block">
            <div class="controls">
              <div class="prev"></div>
              <div class="next"></div>
            </div>
            <div class="slider cycle-slideshow"
                 data-cycle-fx="scrollHorz"
                 data-cycle-timeout="0"
                 data-cycle-prev=".our-works .prev"
                 data-cycle-next=".our-works .next"
                 data-cycle-slides="> div">
              <div class="item">
                  <a class="fancybox" href="images/our-works/slider/i1.jpg" rel="works">
                    <img alt="" src="images/our-works/slider/pi1.jpg" /><span class="border"></span></a>
                  <a class="fancybox" href="images/our-works/slider/i2.jpg" rel="works">
                      <img alt="" src="images/our-works/slider/pi2.jpg" /><span class="border"></span></a>
                  <a class="fancybox" href="images/our-works/slider/i3.jpg" rel="works">
                      <img alt="" src="images/our-works/slider/pi3.jpg" /><span class="border"></span></a>
                  <a class="fancybox" href="images/our-works/slider/i4.jpg" rel="works">
                      <img alt="" src="images/our-works/slider/pi4.jpg" /><span class="border"></span></a>
              </div>
              <div class="item">
                <a class="fancybox" href="images/our-works/slider/i5.jpg" rel="works">
                    <img alt="" src="images/our-works/slider/pi5.jpg" /><span class="border"></span></a>
                  <a class="fancybox" href="images/our-works/slider/i6.jpg" rel="works">
                      <img alt="" src="images/our-works/slider/pi6.jpg" /><span class="border"></span></a>
                  <a class="fancybox" href="images/our-works/slider/i7.jpg" rel="works">
                      <img alt="" src="images/our-works/slider/pi7.jpg" /><span class="border"></span></a>
                  <a class="fancybox" href="images/our-works/slider/i8.jpg" rel="works">
                      <img alt="" src="images/our-works/slider/pi8.jpg" /><span class="border"></span></a>
                  </div>
                <div class="item">
                  <a class="fancybox" href="images/our-works/slider/i9.jpg" rel="works">
                      <img alt="" src="images/our-works/slider/pi9.jpg" /><span class="border"></span></a>
                  <a class="fancybox" href="images/our-works/slider/i10.jpg" rel="works">
                      <img alt="" src="images/our-works/slider/pi10.jpg" /><span class="border"></span></a>
                  <a class="fancybox" href="images/our-works/slider/i11.jpg" rel="works">
                      <img alt="" src="images/our-works/slider/pi11.jpg" /><span class="border"></span></a>
                  <a class="fancybox" href="images/our-works/slider/i12.jpg" rel="works">
                      <img alt="" src="images/our-works/slider/pi12.jpg" /><span class="border"></span></a>
                    </div>
                <div class="item">
                  <a class="fancybox" href="images/our-works/slider/i33.jpg" rel="works">
                        <img alt="" src="images/our-works/slider/pi33.jpg" /><span class="border"></span></a>
                  <a class="fancybox" href="images/our-works/slider/i14.jpg" rel="works">
                      <img alt="" src="images/our-works/slider/pi14.jpg" /><span class="border"></span></a>
                  <a class="fancybox" href="images/our-works/slider/i15.jpg" rel="works">
                      <img alt="" src="images/our-works/slider/pi15.jpg" /><span class="border"></span></a>
                  <a class="fancybox" href="images/our-works/slider/i16.jpg" rel="works">
                      <img alt="" src="images/our-works/slider/pi16.jpg" /><span class="border"></span></a>
                </div>
                <div class="item">
                  <a class="fancybox" href="images/our-works/slider/i17.jpg" rel="works">
                      <img alt="" src="images/our-works/slider/pi17.jpg" /><span class="border"></span></a>
                  <a class="fancybox" href="images/our-works/slider/i18.jpg" rel="works">
                      <img alt="" src="images/our-works/slider/pi18.jpg" /><span class="border"></span></a>
                  <a class="fancybox" href="images/our-works/slider/i19.jpg" rel="works">
                      <img alt="" src="images/our-works/slider/pi19.jpg" /><span class="border"></span></a>
                  <a class="fancybox" href="images/our-works/slider/i20.jpg" rel="works">
                      <img alt="" src="images/our-works/slider/pi20.jpg" /><span class="border"></span></a>
                </div>
                <div class="item">
                  <a class="fancybox" href="images/our-works/slider/i21.jpg" rel="works">
                      <img alt="" src="images/our-works/slider/pi21.jpg" /><span class="border"></span></a>
                  <a class="fancybox" href="images/our-works/slider/i22.jpg" rel="works">
                      <img alt="" src="images/our-works/slider/pi22.jpg" /><span class="border"></span></a>
                  <a class="fancybox" href="images/our-works/slider/i23.jpg" rel="works">
                      <img alt="" src="images/our-works/slider/pi23.jpg" /><span class="border"></span></a>
                  <a class="fancybox" href="images/our-works/slider/i24.jpg" rel="works">
                      <img alt="" src="images/our-works/slider/pi24.jpg" /><span class="border"></span></a>
                 </div>
                 <div class="item">
                  <a class="fancybox" href="images/our-works/slider/i25.jpg" rel="works">
                      <img alt="" src="images/our-works/slider/pi25.jpg" /><span class="border"></span></a>
                  <a class="fancybox" href="images/our-works/slider/i26.jpg" rel="works">
                      <img alt="" src="images/our-works/slider/pi26.jpg" /><span class="border"></span></a>
                  <a class="fancybox" href="images/our-works/slider/i27.jpg" rel="works">
                      <img alt="" src="images/our-works/slider/pi27.jpg" /><span class="border"></span></a>
                  <a class="fancybox" href="images/our-works/slider/i28.jpg" rel="works">
                      <img alt="" src="images/our-works/slider/pi28.jpg" /><span class="border"></span></a>
                  </div>
                  <div class="item">
                  <a class="fancybox" href="images/our-works/slider/i29.jpg" rel="works">
                      <img alt="" src="images/our-works/slider/pi29.jpg" /><span class="border"></span></a>
                  <a class="fancybox" href="images/our-works/slider/i30.jpg" rel="works">
                      <img alt="" src="images/our-works/slider/pi30.jpg" /><span class="border"></span></a>
                  <a class="fancybox" href="images/our-works/slider/i31.jpg" rel="works">
                      <img alt="" src="images/our-works/slider/pi31.jpg" /><span class="border"></span></a>
                  <a class="fancybox" href="images/our-works/slider/i32.jpg" rel="works">
                      <img alt="" src="images/our-works/slider/pi32.jpg" /><span class="border"></span></a>
                   </div>

              </div>
            </div>
          </div>
          <div class="want-too">

            <div class="text-block">

              <p>
                  Возникли вопросы? Звони!
              </p>
              <span> (843) 253-75-83</span>
              <p>
                наши консультанты помогут<br />сделать правильный выбор!
              </p>
            </div>
          </div>
        </div>
      </div>

    <span id="price"></span><div class="our_price">
        <div class="our_price_wrapper clearfix">
            <div class="title">
                <h2>
                    <span></span>Наши расценки<span></span>
                </h2>
                <h3>фотосессии в студии и на природе</h3>
            </div>
            <div class="item">
                <div class="img"><img src="images/our-price/baby.jpg" alt="baby"/>
                <span>2500 р</span>
                </div>
                <h3>baby</h3>
                <h4>фотосессия в студии
                    или  с выездом на дом
                    2 костюмчика
                    из нашей коллекции на выбор
                    30 обработанных фотографий
                    для детей до 1 года</h4>
            </div>
            <div class="item">
                <div class="img"><img src="images/our-price/light.jpg" alt="light"/><span>3000 р</span></div>
                <h3>light</h3>
                <h4>фотосессия в студии
                    или на природе
                    1-2 ваших наряда
                    30-40 обработанных фотографий
                    персональные, семейные съемки</h4>
            </div>
            <div class="item">
                <div class="img"><img src="images/our-price/standart.jpg" alt="standart"/><span>4500 р</span></div>
                <h3>standart</h3>
                <h4>фотосессия в студии
                    или на природе
                    профессиональный макияж
                    и укладка
                    1-2 ваших наряда
                    30-40 обработанных фотографий
                    персональные, семейные съемки</h4>
            </div>
            <div class="item">
                <div class="img"><img src="images/our-price/premium.jpg" alt="premium"/><span>10 000 р</span></div>
                <h3>premium</h3>
                <h4>фотосессия в студии или на природе
                    разработка 3 образов
                    с подбором вашей и дизайнерской
                    одежды, аксессуаров
                    и предметов декора
                    60-80 обработанных фотографий
                    персональные, семейные съемки</h4>
            </div>
        </div>
        <div class="our_price_wrapper season clearfix">
            <h3>сезонные акции</h3>
            <div class="item">
                <div class="img"><img src="images/our-price/horseTrip.jpg" alt="Horse Trip"/>
                    <span>5500 р <h5>3200 р</h5></span></div>
                <h3>фотопрогулка с лошадями</h3>
                <h4>профессиональный макияж
                    фотосессия в 1-2 ваших нарядах
                    на природе с прекрасной лошадкой
                    5 фотографий  с полной ретушью,
                    до 100 фотографий на диске</h4>
            </div>
            <div class="item">
                <div class="img"><img src="images/our-price/colorCrazy.jpg" alt="Color Crazy"/>
                    <span>4100 р <h5>2200 р</h5></span></div>
                <h3>фотопроект “цветное безумие”</h3>
                <h4>яркий смелый макияж
                    разработка креативного образа под вашу внешность
                    фотосессия в студии
                    5 фотографий с полной ретушью
                    до 100 фотографий на диске</h4>
            </div>
        </div>
    </div>

    <div class="price_form">
        <div class="wrapper">

            <div class="want-too">
                <div class="form-block circle">
                    <h2>
                        Только до 15 июня!

                    </h2>
                    <p>Закажи фотосессию по акции<br /> со скидкой 45%</p>
                    <form action="sendmessage.php" method="post" id="second_form">
                        <input name="name" placeholder="Имя" required type="text" />
                        <input name="phone" placeholder="Телефон" required type="text" />
                        <button>Узнать больше</button>
                    </form>
                </div>
                <div class="text-block">

                    <p>
                        Возникли вопросы? Звони!
                    </p>
                    <span> (843) 253-75-83</span>
                    <p>
                        наши консультанты помогут<br />сделать правильный выбор
                    </p>
                </div>
            </div>
        </div>
    </div>


    <span id="testimonials"></span></div><div class="reviews">
      <div class="reviews_wrapper clearfix">
        <div class="title">
          <h2>
            <span></span>отзывы о нас<span></span>
          </h2>
        </div>
        <div class="rev-block clearfix">
          <div class="avatar-name fl">
            <img src="images/reviews/ava/i1.jpg" /><br /><span>Альбина<br />Хисамова</span>
          </div>
          <div class="rev-text rev-text_center fl">
              <p>
                  Хочу выразить благодарность Мариночке за позитивнуюфотосъемку! Очень замечательные девочки,
                  создали прекрасную атмосферу в волшебной студии! :)
              </p>
          </div>
            <div class="example fl">
                <img src="images/reviews/ex/i1.jpg" />
            </div>
        </div>
          <div class="rev-block clearfix">
              <div class="avatar-name fl">
                  <img src="images/reviews/ava/i2.jpg" /><br /><span>Евгения<br />Егорова</span>
              </div>
              <div class="rev-text fl">
                  <p>
                      Вчера фотографировала доченьку в студии "Aura Hall". Я В ВОСТОРГЕ!!!
                      Это самая лучшая студия, которая только может быть! Интерьер - выше всяких похвал,
                      продуманна каждая деталь! Там очень уютно, светло, не хочется оттуда уходить.
                      Ребенок чувствовал себя в студии,
                      как дома! Есть возможность снимать как при студийном, так и при дневном освещении.
                      Оборудование - отличное! Елена - наиприятнейший человек!!!
                      Спасибо вам огромное за такую чудесную студию, за помощь, за вкусный чай с печеньками)))
                      Уже купила абонемент в эту студию,и уверенна что скоро куплю еще))) СПАСИБО!
                  </p>
          </div>
          <div class="example fl">
            <img src="images/reviews/ex/i2.jpg" />
          </div>
        </div>
        <div class="rev-block clearfix">
          <div class="avatar-name fl">
            <img src="images/reviews/ava/i3.jpg" /><br /><span>Чулпан<br />Галяутдинова</span>
          </div>
          <div class="rev-text fl">
              <p>
                  В день нашей свадебной фото сессии я очень волновалась,
                  но когда уже получила конверт с готовыми фотографиями была очень приятно удивлена,
                  все выглядело волшебно, по крайней мере оформление свадебного диска.
                  Мы мчались домой в преддверии новогодней суеты, чтобы поскорее посмотреть результат.
                  Я смотрела фотографии и не могла оторваться смотрела и пересматривала снова,
                  не заметила как 1,5 часа прошло, будто была где то в космосе. Фотографии выглядели как картинки с журнала,
                  я смотрела на нас и думала как это безумно красиво и вполне естественно. Жалко только,
                  что на улице в день нашей свадьбы было достаточно холодно и более "красивыми" ,
                  интересными мы смотрелись в помещении (ресторане).Так что я сделала вывод,
                  что холод нас победил=(Но не смотря на это я думаю, что среди множества фотографов
                  я сделала правильный выбор в пользу Елены. Я её почти не заметила, она тихо выполняла свою работу,
                  а я спокойно радовалась происходящему процессу. Когда я уже закончила просматривать фотографии я поймала
                  себя на мысли, что хочу снова радоваться таланту этого фотографа и пригласить её
                  еще на многие наши семейные события=)))СНИМАЮ ШЛЯПУ И КЛАНЯЮСЬ ЗА ПРОДЕЛАННЫЙ ТРУД=)))спасибо,
                  что терпели мои капризы=)))
              </p>
          </div>
          <div class="example fl">
            <img src="images/reviews/ex/i3.jpg" />
          </div>
        </div>
        <div class="other-reviews">
          <div class="rev-block clearfix">
            <div class="avatar-name fl">
              <img src="images/reviews/ava/i7.jpg" /><br /><span>Дина Г.<br /></span>
            </div>
            <div class="rev-text fl">
              <p>
                Восторг, восторг и еще раз восторг!Есть события, впечатления и переживания которых
                  складывают нашу жизнь.
                  Таким для меня стал подарок от моих близких друзей – фотосессия у Елены Осиковой в её чудесной
                  атмосферной фотостудии
                  "Aura Hall". Чему я безумна рада!И какое же это удовольствие побывать в руках настоящего
                  профессионала!Работы
                  Елены нечто большее, чем просто фотография. Это цельный образ, соединяющий в себе тонкий
                  вкус, гармонию, чувство прекрасного. Это кадр из фильма, который завораживает,
                  и мы непременно хотим узнать, что произойдет с героиней, о
                  причине её молчания, и что его прервет, кто стоит рядом, кого мы не видим. Еще один миг
                  , и сюжет продолжит своё развитие. Это удивительное качество её работ!Позы подсказаны и выверены,
                  в этом плане
                  быть её моделью очень комфортно, ты всегда уверена, что будешь выглядеть наилучшим образом.
                  Вместе с тем абсолютно
                  отсутствовала «диктатура» фотографа, работая с ней чувствуешь необычайную легкость от творческого полета. Она
                  сумела найти в потаенных уголках меня новую, я не знала, что могу быть такой!Меня обрадовало
                  , что Лена согласилась на мою задумку и классно воплотила трэш-образ девушка-насекомое.
                  Это был очень захватывающий эксперимент! Спасибо огромное за то, что любые сумасшедшие идеи
                  принимаются и претворяются в жизнь, на это способен только настоящий художник!
              </p>
            </div>
            <div class="example fl">
              <img src="images/reviews/ex/i7.jpg" />
            </div>
          </div>
          <div class="rev-block clearfix">
            <div class="avatar-name fl">
              <img src="images/reviews/ava/i8.jpg" /><br /><span>Юлия<br />Варюхина</span>
            </div>
            <div class="rev-text fl">
              <p>
                Спасибо, Лена, за уютный уголок для творчества, отдыха, позитива и
                  вдохновения!) Чудесная студия, приветливая гостеприимная хозяйка!
                  Отрадно, что в Казани появилась настоящая интерьерная студия с хорошим светом и безграничными
                  возможностями для творчества) Сделано с любовью - это про вас!)) Обязательно к вам вернемся)
              </p>
            </div>
            <div class="example fl">
              <img src="images/reviews/ex/i8.jpg" />
            </div>
          </div>
          <div class="rev-block clearfix">
            <div class="avatar-name fl">
              <img src="images/reviews/ava/i4.jpg" /><br /><span>Татьяна<br />Ларина</span>
            </div>
            <div class="rev-text fl">
              <p>
                Выражаю огромную благодарность лично Вам и всей студии в целом
                  за Вашу клиентоориентированность, способность найти выход из
                  сложных ситуаций, помочь советом и "делом". Искренне благодарны
                  Вам, Елена, за доброжелательность, индивидуальный подход к каждому клиенту
                  и помощь в исправлении ситуации, вызванной форс-мажорными
                  обстоятельствами.Желаем Вам процветания, творческих успехов и благодарных клиентов!
                  И еще раз спасибо Вам!!!))
              </p>
            </div>
            <div class="example fl">
              <img src="images/reviews/ex/i4.jpg" />
            </div>
          </div>
          <div class="rev-block clearfix">
            <div class="avatar-name fl">
              <img src="images/reviews/ava/i6.jpg" /><br /><span>Елена<br />Кирсанова</span>
            </div>
            <div class="rev-text fl">
              <p>
                Очень понравилось в студии, уютно, приятно находится. Все очень вежливы, так же
                  приятны такие мелочи как чай и конфетки. Понравилось Елена Осикова, хороший фотограф,
                  с ней легко сниматься, время пролетает незаметно. Приду обязательно ещё раз.
              </p>
            </div>
            <div class="example fl">
              <img src="images/reviews/ex/i6.jpg" />
            </div>
          </div>
          <div class="rev-block clearfix">
            <div class="avatar-name fl">
              <img src="images/reviews/ava/i5.jpg" /><br /><span>Олеся<br />Князева</span>
            </div>
            <div class="rev-text fl">
              <p>
                Замечательная, теплая обстановка! Чисто и все обдумано! Поразила именно чистота, видна забота!
                  Так приятно было снимать!!!! Не тратили время на перестановки, уборку ненужных вещей, лежащих
                  под ногами! Не отвлекались на это и только творили и творили! Спасибо вам за такое чудесное
                  место!!!!!!! Будем чаще у вас!!!))
              </p>
            </div>
            <div class="example fl">
              <img src="images/reviews/ex/i5.jpg" />
            </div>
          </div>
        </div>
        <span class="show-all">Посмотреть еще</span>
      </div>
    </div>
    <span id="sertificates"></span><div class="price-big-block">
        <div class="price_wrapper">
            <div class="title white">
                <h2>
                    <span></span>ищете ценный запоминающийся подарок?<span></span>
                </h2>
            </div>
            <div class="content clearfix">
                <img alt="" class="fl" src="images/price-img.png" />
                <div class="text fl">
                    <p>
                        Мы оформляем подарочные сертификаты на все наши фотосессии и на часы аренды фотостудии.<br />Плюшевый мишка будет пылиться на полке, конфеты съедятся, цветы завянут, а яркие профессиональные фотографии будут долго радовать вас!
                    </p>
                    <a href="aurahall-pricelist.pdf" class="underline"> Скачайте подробный прайс-лист на наши услуги</a>
                </div>
            </div>
            <div class="price-form">
                <h2>
                    Закажите подарочный сертификат с бесплатной доставкой прямо сейчас!
                </h2>
                <form action="sendmessage.php" method="post" id="price_form">
                    <input name="name" placeholder="Имя" required type="text" />
                    <input name="phone" placeholder="Телефон" required type="text" />
                    <button>Получить сертификат</button>
                </form>
            </div>
        </div>
    </div>

    <span id="rent"></span> <div class="rent-slider">
      <div class="wrapper">
        <div class="title">
          <h2>
            <span></span>
            <p>
              аренда фотостудии -<br />съемочного зала “Aura Hall”
            </p>
            <span></span>
          </h2>
        </div>
        <div class="slider">
          <div class="items cycle-slideshow"
               data-cycle-fx="scrollHorz"
               data-cycle-timeout="0"
               data-cycle-prev=".rent-slider .left"
               data-cycle-next=".rent-slider .right"
               data-cycle-slides="> div">
            <div class="item">
              <img src="images/rent/slider/i1.jpg" />
              <div class="caption">
                <h2>
                  Aura hall
                </h2>
                <hr />
                <ul>
                  <li>
                    - интерьер в стиле Кантри
                  </li>
                  <li>
                    - состаренная мебель и аксессуары
                  </li>
                  <li>
                    - дизайнерский текстиль ручной работы
                  </li>
                </ul>
              </div>
            </div>
            <div class="item">
              <img src="images/rent/slider/i2.jpg" />
              <div class="caption">
                <h2>
                  Aura hall
                </h2>
                <hr />
                <ul>
                  <li>
                    - камин в классическом стиле
                  </li>
                  <li>
                    - старое фортепиано
                  </li>
                  <li>
                    - свечи
                  </li>
                  <li>
                    - для романтических фотосессий
                  </li>
                </ul>
              </div>
            </div>
            <div class="item">
              <img src="images/rent/slider/i3.jpg" />
              <div class="caption">
                <h2>
                  Aura hall
                </h2>
                <hr />
                <ul>
                  <li>
                    ретро-вещицы:
                  </li>
                  <li>
                    - чемоданы
                  </li>
                  <li>
                    - фотоаппарат
                  </li>
                  <li>
                    - посуда
                  </li>
                </ul>
              </div>
            </div>
            <div class="item">
              <img src="images/rent/slider/i4.jpg" />
              <div class="caption">
                <h2>
                  Aura hall
                </h2>
                <hr />
                <ul>
                  <li>
                    - множество цветочных композиций
                  </li>
                  <li>
                    - подвесные качели
                  </li>
                  <li>
                    - деревянная стена и забор
                  </li>
                </ul>
              </div>
            </div>
            <div class="item">
              <img src="images/rent/slider/i5.jpg" />
              <div class="caption">
                <h2>
                  Aura hall
                </h2>
                <hr />
                <ul>
                  <li>
                    - множество цветочных композиций
                  </li>
                  <li>
                    - подвесные качели
                  </li>
                  <li>
                    - деревянная стена и забор
                  </li>
                </ul>
              </div>
            </div>
            <div class="item">
              <img src="images/rent/slider/i6.jpg" />
              <div class="caption">
                <h2>
                  Aura hall
                </h2>
                <hr />
                <ul>
                  <li>
                    - цветы в человеческий рост
                  </li>
                  <li>
                    - эксклюзивные аксессуары
                  </li>
                  <li>
                    - разноцветные бумажные фоны
                  </li>
                  <li>
                    - профессиональный свет
                  </li>
                </ul>
              </div>
            </div>
            <div class="item">
              <img src="images/rent/slider/i7.jpg" />
              <div class="caption">
                <h2>
                  Aura hall
                </h2>
                <hr />
                <ul>
                  <li>
                    - вся мебель, аксессуары,
                  </li>
                  <li>
                    декорации, оборудование,
                  </li>
                  <li>
                    предметы интерьера
                  </li>
                  <li>
                    входят в стоимость аренды
                  </li>
                </ul>
              </div>
            </div>
              <div class="item">
                  <img src="images/rent/slider/i8.jpg" />
                  <div class="caption">
                      <h2>
                          Aura hall
                      </h2>
                      <hr />
                      <ul>
                          <li>
                              - множество интерьерных зон
                          </li>
                          <li>
                              - Дизайнерские аксессуары
                          </li>
                          <li>
                              - состаренная мебель
                          </li>

                      </ul>
                  </div>
              </div>
              <div class="item">
                  <img src="images/rent/slider/i9.jpg" />
                  <div class="caption">
                      <h2>
                          Aura hall
                      </h2>
                      <hr />
                      <ul>
                          <li>
                              - множество интерьерных зон
                          </li>
                          <li>
                              - Дизайнерские аксессуары
                          </li>
                          <li>
                              - состаренная мебель
                          </li>

                      </ul>
                  </div>
              </div>
          </div>
          <div class="controls">
            <div class="left"></div>
            <div class="right"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="descr-price-block">
      <div class="wrapper clearfix">
        <div class="left-block fl">
          <h2>
            Что вы найдете в нашей студии?
          </h2>
          <ul>
              <li>
                  съемочный зал 60 кв.м.
              </li>
              <li>
                  7 интерьерных зон в различных стилях
              </li>
              <li>
                  мебель и аксессуары ручной работы
              </li>
              <li>
                  естественный свет и профессиональное
              </li>
              <li>
                  фотооборудование Bowens
              </li>
              <li>
                  услуги профессиональных визажистов,
              </li>
              <li>
                  удобная гримерка
              </li>
              <li>
                  работа 24 часа в сутки
              </li>
              <li>
                  возможность аренды полного дня/ночи
              </li>
          </ul>
        </div>
        <div class="price-maps fr">
          <div class="price-block clearfix">
            <h2>
              Стоимость аренды студии
            </h2>
              <div class="fl">
                  <strong>аренда на 1 час:</strong><br />будни до 18-00 700р/час<br />будни после 18-00, выходные<br />и праздничные дни 800р/час
              </div>
              <div class="fr">
                  <strong>аренда от 2 часов и более:</strong><br />будни до 18-00 600р/час<br />будни после 18-00, выходные<br />и праздничные дни 700р/час
              </div>
          </div>
          <div class="maps">
            <h2>
              Где мы находимся
            </h2>
            <script charset="utf-8" src="http://api-maps.yandex.ru/services/constructor/1.0/js/?sid=_0kybf9Kkz8LmTWhPTCab6tE12ghTFDF&width=473&height=240" type="text/javascript"></script>
          </div>
        </div>
      </div>
    </div>
    <div class="calendar-form">
      <div class="calendar_wrapper clearfix">
        <div class="title">
          <h2>
            <span></span>календарь занятости фотостудии<span></span>
          </h2>
        </div>
        <iframe frameborder="0" height="400" scrolling="no" src="https://www.google.com/calendar/embed?showPrint=0&amp;mode=WEEK&amp;height=394&amp;wkst=2&amp;bgcolor=%23ffffff&amp;src=osikovaphoto%40gmail.com&amp;color=%23875509&amp;ctz=Europe%2FMoscow" style=" border-width:0 " width="600"></iframe>
        <div class="form-block fr">
          <h3>
            Забронировать фотостудию
          </h3>
          <form action="sendmessage.php" method="post" id="calendar_form">
            <input name="name" placeholder="Имя" required="" type="text" />
            <input name="phone" placeholder="Телефон" required="" type="text" />
            <div class="date">
              <input class="date" name="date" placeholder="д.д. м.м. г.г" type="text" required/>
              <select name="start">
                <option selected="" value="0">
                  Начало
                </option>
                <option value="1">
                  01:00
                </option>
                <option value="130">
                  01:30
                </option>
                <option value="0200">
                  02:00
                </option>
                <option value="0230">
                  02:30
                </option>
                <option value="0300">
                  03:00
                </option>
                <option value="0330">
                  03:30
                </option>
                <option value="0400">
                  04:00
                </option>
                <option value="0430">
                  04:30
                </option>
                <option value="0500">
                  05:00
                </option>
                <option value="0530">
                  05:30
                </option>
                <option value="0600">
                  06:00
                </option>
                <option value="0630">
                  06:30
                </option>
                <option value="0700">
                  07:00
                </option>
                <option value="0730">
                  07:30
                </option>
                <option value="0800">
                  08:00
                </option>
                <option value="0830">
                  08:30
                </option>
                <option value="0900">
                  09:00
                </option>
                <option value="0930">
                  09:30
                </option>
                <option value="1000">
                  10:00
                </option>
                <option value="1030">
                  10:30
                </option>
                <option value="1100">
                  11:00
                </option>
                <option value="1130">
                  11:30
                </option>
                <option value="1200">
                  12:00
                </option>
                <option value="1230">
                  12:30
                </option>
                <option value="1300">
                  13:00
                </option>
                <option value="1330">
                  13:30
                </option>
                <option value="1400">
                  14:00
                </option>
                <option value="1430">
                  14:30
                </option>
                <option value="1500">
                  15:00
                </option>
                <option value="1530">
                  15:30
                </option>
                <option value="1600">
                  16:00
                </option>
                <option value="1630">
                  16:30
                </option>
                <option value="1700">
                  17:00
                </option>
                <option value="1730">
                  17:30
                </option>
                <option value="1800">
                  18:00
                </option>
                <option value="1830">
                  18:30
                </option>
                <option value="1900">
                  19:00
                </option>
                <option value="1930">
                  19:30
                </option>
                <option value="2000">
                  20:00
                </option>
                <option value="2030">
                  20:30
                </option>
                <option value="2100">
                  21:00
                </option>
                <option value="2130">
                  21:30
                </option>
                <option value="2200">
                  22:00
                </option>
                <option value="2230">
                  22:30
                </option>
                <option value="2300">
                  23:00
                </option>
                <option value="2330">
                  23:30
                </option>
              </select><select name="finish">
                <option selected="" value="0">
                  Конец
                </option>
                <option value="0100">
                  01:00
                </option>
                <option value="0130">
                  01:30
                </option>
                <option value="0200">
                  02:00
                </option>
                <option value="0230">
                  02:30
                </option>
                <option value="0300">
                  03:00
                </option>
                <option value="0330">
                  03:30
                </option>
                <option value="0400">
                  04:00
                </option>
                <option value="0430">
                  04:30
                </option>
                <option value="0500">
                  05:00
                </option>
                <option value="0530">
                  05:30
                </option>
                <option value="0600">
                  06:00
                </option>
                <option value="0630">
                  06:30
                </option>
                <option value="0700">
                  07:00
                </option>
                <option value="0730">
                  07:30
                </option>
                <option value="0800">
                  08:00
                </option>
                <option value="0830">
                  08:30
                </option>
                <option value="0900">
                  09:00
                </option>
                <option value="0930">
                  09:30
                </option>
                <option value="1000">
                  10:00
                </option>
                <option value="1030">
                  10:30
                </option>
                <option value="1100">
                  11:00
                </option>
                <option value="1130">
                  11:30
                </option>
                <option value="1200">
                  12:00
                </option>
                <option value="1230">
                  12:30
                </option>
                <option value="1300">
                  13:00
                </option>
                <option value="1330">
                  13:30
                </option>
                <option value="1400">
                  14:00
                </option>
                <option value="1430">
                  14:30
                </option>
                <option value="1500">
                  15:00
                </option>
                <option value="1530">
                  15:30
                </option>
                <option value="1600">
                  16:00
                </option>
                <option value="1630">
                  16:30
                </option>
                <option value="1700">
                  17:00
                </option>
                <option value="1730">
                  17:30
                </option>
                <option value="1800">
                  18:00
                </option>
                <option value="1830">
                  18:30
                </option>
                <option value="1900">
                  19:00
                </option>
                <option value="1930">
                  19:30
                </option>
                <option value="2000">
                  20:00
                </option>
                <option value="2030">
                  20:30
                </option>
                <option value="2100">
                  21:00
                </option>
                <option value="2130">
                  21:30
                </option>
                <option value="2200">
                  22:00
                </option>
                <option value="2230">
                  22:30
                </option>
                <option value="2300">
                  23:00
                </option>
                <option value="2330">
                  23:30
                </option>
              </select>
            </div>
            <button>Забронировать</button>
            <div class="tel-block">
              <p>
                Или позвоните
              </p>
              <span> (843) 253-75-83</span>
            </div>
          </form>

        </div>
        <a href="#how_to_buy" class="fancybox">Как сделать заказ?</a>
        <a href="#consultation" class="fancybox">Бесплатная консультация специалиста</a>
      </div>
    </div>

    <footer>
      <div class="footer_wrapper clearfix">
          <a class="logo-descr fl" href=""><img alt="" src="images/footer-logo.png" /><br />
              <span>Декорированные фотосессии в студии и на природе <br />Интерьерная фотостудия в аренду</span></a>
          <div class="right-block fr">
          <h2> (843) 253-75-83
          </h2>
          <p>
              ООО “Аура Холл”, г. Казань, ул. Саид-Галеева, д.6, этаж 6, оф.605<br />
              огрн 1131690049270<br />
              инн/кпп 1655273530/165501001</p>
        </div>
      </div>
    </footer>
    <div id="tnx">
      <h2>
        Cпасибо за обращение!
      </h2>
      <p>
        В ближайшее время<br>с Вами свяжется наш менеджер.</br>
      </p>
    </div>
    <a class="tnx-link fancybox" href="#tnx"></a>
 <div id="how_to_buy" class="how_to_buy">
     <h3>Как сделать заказ?</h3>

     <p>Lorem ipsum dolor sit amet, everti necessitatibus vis ut.</p>

     <p>Lorem ipsum dolor sit amet, everti necessitatibus vis ut.</p>

     <p>Lorem ipsum dolor sit amet, everti necessitatibus vis ut,
         Lorem ipsum dolor sit amet, everti necessitatibus vis ut! В течении 15 минут с вами свяжется оператор и примет у Вас заказ.</p>

     <p>Если у Вас остались вопросы, оставьте свой номер для консультации,
     мы поможем Вам с выбором и ответим на все Ваши вопросы!</p>

     <p>Если Вы не хотите ждать, звоните прямо сейчас по номеру 8 843 253 75 83 - Звонок бесплатный!</p>
 </div>
    <div id="consultation" class="consultation">
        <div class="form-block fr">
            <h3>
                Бесплатная<br />
                <span>консультация специалиста</span>
            </h3>
            <form action="sendmessage.php" method="post" id="consultation_form">
                <input name="name" placeholder="Имя" required="" type="text" />
                <input name="phone" placeholder="Телефон" required="" type="text" />
                <input name="email" placeholder="Email" required="" type="text" />
                <button>Заказать</button>
                <div class="tel-block">
                    <p>
                        Оператор свяжется с Вами<br />
                        в течение 15 минут
                    </p>
                </div>
            </form>
        </div>
    </div>
  <script src="javascripts/jquery-1.11.1.min.js" type="text/javascript"></script>
  <script src="javascripts/jquery.cycle2.min.js"></script>
  <script src="javascripts/smooth-scroll.js"></script>
  <script src="javascripts/all.js" type="text/javascript"></script>

  <script>
      smoothScroll.init({
          speed: 1000,
          easing: 'easeInOutCubic',
          offset: 0,
          updateURL: false,
          callbackBefore: function ( toggle, anchor ) {},
          callbackAfter: function ( toggle, anchor ) {}
      });
  </script>
  </body>
</html>
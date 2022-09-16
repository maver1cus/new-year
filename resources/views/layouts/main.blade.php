<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="format-detection" content="telephone=no">
  <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
  <title>@yield('title')</title>

  <script
    src="https://api-maps.yandex.ru/2.1/?apikey=c6ed20ff-8557-42da-abe0-9819f7fe7e1c&lang=ru_RU"
    type="text/javascript"
  ></script>

  @vite(['resources/styles/site/app.scss'])
  @vite(['resources/js/site/app.ts'])
</head>
<div class="out">
  <header class="page-header">
    <x-main-menu :products="$products" />
  </header>
  <main>
    <section class="promo">
      <img src="resources/images/logo.png" alt="">
      <div class="promo__top">
        <a class="promo__link" href="mailto:vamsadik@mail.ru">vamsadik@mail.ru</a>
        <x-logo/>
        <a class="promo__link promo__link--big" href="tel:84956425854">8 (495) 642 58 54</a>
      </div>
      <div class="promo__content">
        <h1 class="promo__title">Ёлка на новый год купить со скидкой от <b>30%</b> до <b>50%</b></h1>
      </div>
    </section>
    <div class="content">
      @yield('content')
    </div>

    <section class="map" id="contacts">
      <div class="map__caption">
        <p class="map__text">выбрать, оплатить и забрать самостоятельно вы можете по адресу:</p>
        <p class="map__text map__text--color">12КМ ОТ МКАД ПО РУБЛЕВО-УСПЕНСКОМУ Ш. В ОБЛАСТЬ, СЕЛО ВЕРХНЕЕ САРЕЕВО</p>
        <p class="map__text">ежедневно с 8.00 до 20.00</p>
        <p class="map__text map__text--small">продаже растений осуществляеться без перерывов и выходных</p>
      </div>
      <div class="map__image">
        <div id="YMapsID" style="height: 45rem;"></div>
      </div>
    </section>
  </main>
  <footer class="footer">
    <div class="footer__wrapper">
      <x-logo class="logo--bottom"/>
      <div class="footer__delivery delivery">
        <h2 class="delivery__title">НИЗКИЕ ЦЕНЫ НА елки <b>ДОСТАВКА по москве и области</b> ОПТ, РОЗНИЦА</h2>
        <div class="delivery__lists">
          <ul class="delivery__list">
            <li class="delivery__item">Алтуфьевское шоссе</li>
            <li class="delivery__item">Боровское шоссе</li>
            <li class="delivery__item">Быковское шоссе</li>
            <li class="delivery__item">Варшавское шоссе</li>
            <li class="delivery__item">Волоколамское шоссе</li>
            <li class="delivery__item">Горьковское шоссе</li>
            <li class="delivery__item">Дмитровское шоссе</li>
          </ul>
          <ul class="delivery__list">
            <li class="delivery__item">Егорьевское шоссе</li>
            <li class="delivery__item">Ильинское шоссе</li>
            <li class="delivery__item">Калужское шоссе</li>
            <li class="delivery__item">Каширское шоссе</li>
            <li class="delivery__item">Киевское шоссе</li>
            <li class="delivery__item">Куркинское шоссе</li>
            <li class="delivery__item">Ленинградское шоссе</li>
          </ul>
          <ul class="delivery__list">
            <li class="delivery__item">Минское шоссе</li>
            <li class="delivery__item">Можайское шоссе</li>
            <li class="delivery__item">Новокоширское шоссе</li>
            <li class="delivery__item">Новорижское шоссе</li>
            <li class="delivery__item">Новорязанское шоссе</li>
            <li class="delivery__item">Новосходненское шоссе</li>
            <li class="delivery__item">Носовихинское шоссе</li>
          </ul>
          <ul class="delivery__list">
            <li class="delivery__item">Оставшковское шоссе</li>
            <li class="delivery__item">Пятницкое шоссе</li>
            <li class="delivery__item">Рогачевское шоссе</li>
            <li class="delivery__item">Рублево-Успенское шоссе</li>
            <li class="delivery__item">Рублевское шоссе</li>
            <li class="delivery__item">Рязанское шоссе</li>
            <li class="delivery__item">Симферополское шоссе</li>
          </ul>
          <ul class="delivery__list">
            <li class="delivery__item">Сколковское шоссе</li>
            <li class="delivery__item">Фряновское шоссе</li>
            <li class="delivery__item">Щелковское шоссе</li>
            <li class="delivery__item">Ярославское шоссе</li>
          </ul>
        </div>

      </div>
      <div class="footer__promo">
        <a href="tel:84956425854" class="footer__item">8 (495) 642 58 54</a>
        <a href="mailto:vamsadik@mail.ru" class="footer__item">VAMSADIK@MAIL.RU</a>
        <span class="footer__item">ХОТИТЕ ЁЛКУ ЗА 500 РУБ</span>
        <button class="button">да хочу</button>
      </div>
      <div class="footer__copyright copyright">
        <ul class="copyright__list">
          <li class="copyright__item">ОГРН 51377464515</li>
          <li class="copyright__item">ИНН 7743955898</li>
        </ul>

        <ul class="copyright__list">
          <li class="copyright__item">ООО ёлочный-базар 2012 - 2022</li>
          <li class="copyright__item">WWW.ЁЛОЧЫНЙ-БАЗАР.МОСКВА</li>
        </ul>
      </div>
      <p class="copyright__text">Все материалы данного сайта являются объектами авторского права (в том числе дизайн). Запрещается копирование, распространение (в том числе путем копирования на другие сайты и ресурсы в Интернете) или любое иное использование информации и объектов без предварительного согласия правообладателя.</p>
    </div>
  </footer>
</div>
<body>
</body>
</html>

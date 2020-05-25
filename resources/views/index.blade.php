@extends('layouts.app')
@section('content')

<link rel="apple-touch-icon" sizes="180x180" href="https://halykbank.kz/themes/halyk/assets/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://halykbank.kz/themes/halyk/assets/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://halykbank.kz/themes/halyk/assets/favicon-16x16.png">
    <link rel="manifest" href="https://halykbank.kz/themes/halyk/assets/site.webmanifest">
    <link rel="mask-icon" href="https://halykbank.kz/themes/halyk/assets/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#00aba9">
    <meta name="theme-color" content="#ffffff">
    <meta name="HandheldFriendly" content="true">
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, width=device-width">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,400&display=swap"
        rel="stylesheet"/>
    <!-- <link rel="stylesheet" href="https://halykbank.kz/themes/halyk/assets/styles/vendor.min.css"> -->
    <link rel="stylesheet" href="https://halykbank.kz/themes/halyk/assets/css/app-bb8742c38b.css">


<main class="content">


  <section class="media__slider_top">
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="item__image" data-vibrant>
            <div class="img lazy"
            data-background-image="https://halykbank.kz/storage/app/uploads/public/5eb/6fa/3c0/5eb6fa3c065ae951942382.jpg"
            data-background-image-sm="https://halykbank.kz/storage/app/uploads/public/5e9/996/781/5e9996781d690602880304.jpg"
            data-background-image-gradient="https://halykbank.kz/storage/app/uploads/public/35f/4b2/c00/thumb__30_0_0_0_auto.jpg">
          </div>
        </div>
        <div class="item__slide">
          <div class="item__slider_content">
            <h1 class="color-white">
              Депозиты<br />
              надежного<br />
              банка</h1>
              <div class="item__slider_footer">
                <a href="https://halykbank.kz/deposit/srochnye-vklady"
                class="btn btn-secondary btn-large btn-primary"
                style="color: white" >
                Онлайн открытие</a>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="item__image" data-vibrant>
            <div class="img lazy"
            data-background-image="https://halykbank.kz/storage/app/uploads/public/5eb/a22/0f3/5eba220f371f4020680736.jpg"
            data-background-image-sm="https://halykbank.kz/storage/app/uploads/public/5eb/a21/fe4/5eba21fe4078c317224290.jpg"
            data-background-image-gradient="https://halykbank.kz/storage/app/uploads/public/cac/cb1/4dc/thumb__30_0_0_0_auto.jpg">
          </div>
        </div>
        <div class="item__slide">
          <div class="item__slider_content">
            <h1 class="color-green">
              Открыть карту,<br />
              не посещая банк</h1>
              <div class="item__slider_footer">
                <a href="https://halykbank.kz/homebank"
                class="btn btn-secondary btn-large btn-yellow"
                style="color: black" >
                Подробнее</a>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="item__image" data-vibrant>
            <div class="img lazy"
            data-background-image="https://halykbank.kz/storage/app/uploads/public/5eb/bc2/a0e/5ebbc2a0e1f3b488060614.jpg"
            data-background-image-sm="https://halykbank.kz/storage/app/uploads/public/5ea/be7/9b8/5eabe79b89598382969090.jpg"
            data-background-image-gradient="https://halykbank.kz/storage/app/uploads/public/a24/90b/7ba/thumb__30_0_0_0_auto.jpg">
          </div>
        </div>
        <div class="item__slide">
          <div class="item__slider_content">
            <h1 class="color-green">
              Обменивайте<br />
              бонусы в<br />
              Sulpak выгодно</h1>
              <div class="item__slider_footer">
                <a href="https://halykbank.kz/promo/64"
                class="btn btn-secondary btn-large btn-yellow"
                style="color: black" >
                Подробнее</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="section__carousel_controls">
      <div class="btn__carousel_prev"><i class="icon icon-chevron-left"></i></div>
      <div class="btn__carousel_next"><i class="icon icon-chevron-right"></i></div>
      <div class="carousel__pagination"></div>
    </div>
  </section>

  <section class="section section__exchange_rates_index">
    <div class="section__exchange_rates_wrap">
      <div class="section__title">
        <h3>Курсы валют</h3>
      </div>
      <div class="exchange__rates_cont _js_currency_widget"  v-cloak>
        <div class="exchange_rates">
          <div class="exchange_rates_wrap">
            <div class="currency__icon">
              <i class="icon icon-tenge"></i>
            </div>
            <div class="currency__columns">
              <div class="currency__column" v-for="item in findCurrency(rateCollection, ['USD', 'EUR', 'RUB'])">
                <!-- Массив валют можно поменть если будут нужны другие валюты -->
                <div class="currency__title">${item.name}</div>
                <div class="currency__group">
                  <div class="currency__value up">${item.buy}</div>
                  <div class="currency__value down">${item.sell}</div>
                </div>
              </div>
            </div>
          </div>
          <div class="exchange__rates_link">
            <a href="https://halykbank.kz/exchange-rates">Все курсы валют <i
              class="icon icon-chevron-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section section__index__products_card">
      <div class="section__title">
        <h3>Популярное</h3>
      </div>
      <div class="section__products_card_wrap">
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="product__card">
                <div class="product__card_wrap">
                  <div class="card__img" data-vibrant>
                    <div class="img lazy"
                    data-background-image="https://halykbank.kz/storage/app/uploads/public/e09/c65/f78/thumb__544_332_0_0_auto.jpg"
                    data-background-image-gradient="https://halykbank.kz/storage/app/uploads/public/e09/c65/f78/thumb__30_0_0_0_auto.jpg">
                  </div>
                </div>
                <div class="card__item_content">
                  <div class="card__item_content_wrap">
                    <div class="card__title">5% бонусов </div>
                    <div class="list_style">
                      <ul>
                        <li>На все платежи </li>
                      </ul>
                    </div>
                    <a href="https://halykbank.kz/promo/58" class="btn btn-primary btn-hollow btn-block">Подробнее</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="product__card">
              <div class="product__card_wrap">
                <div class="card__img" data-vibrant>
                  <div class="img lazy"
                  data-background-image="https://halykbank.kz/storage/app/uploads/public/8df/fce/ad7/thumb__544_332_0_0_auto.jpg"
                  data-background-image-gradient="https://halykbank.kz/storage/app/uploads/public/8df/fce/ad7/thumb__30_0_0_0_auto.jpg">
                </div>
              </div>
              <div class="card__item_content">
                <div class="card__item_content_wrap">
                  <div class="card__title">Доставим карту бесплатно</div>
                  <div class="list_style">
                    <ul>
                      <li>Бесплатная доставка</li>
                      <li>Нур-Султан и Алматы</li>
                    </ul>
                  </div>
                  <a href="https://halykbank.kz/card/dostavka" class="btn btn-primary btn-hollow btn-block">Заказать карту</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="product__card">
            <div class="product__card_wrap">
              <div class="card__img" data-vibrant>
                <div class="img lazy"
                data-background-image="https://halykbank.kz/storage/app/uploads/public/0a4/5c6/968/thumb__544_332_0_0_auto.jpg"
                data-background-image-gradient="https://halykbank.kz/storage/app/uploads/public/0a4/5c6/968/thumb__30_0_0_0_auto.jpg">
              </div>
            </div>
            <div class="card__item_content">
              <div class="card__item_content_wrap">
                <div class="card__title">Установите приложение которое не запущено</div>
                <div class="list_style">
                  <ul>
                    <li>Без посещения отделений</li>
                    <li>Сотни услуг без комиссий</li>
                  </ul>
                </div>
                <a href="https://homebank.kz/" class="btn btn-primary btn-hollow btn-block">Установить приложение</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="product__card">
          <div class="product__card_wrap">
            <div class="card__img" data-vibrant>
              <div class="img lazy"
              data-background-image="https://halykbank.kz/storage/app/uploads/public/00b/169/cf7/thumb__544_332_0_0_auto.jpg"
              data-background-image-gradient="https://halykbank.kz/storage/app/uploads/public/00b/169/cf7/thumb__30_0_0_0_auto.jpg">
            </div>
          </div>
          <div class="card__item_content">
            <div class="card__item_content_wrap">
              <div class="card__title">1% бонус на все карты</div>
              <div class="list_style">
                <ul>
                  <li>На все платежи</li>
                  <li>На все карты</li>
                </ul>
              </div>
              <a href="https://halykbank.kz/bonuscard" class="btn btn-primary btn-hollow btn-block">Подробнее</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section__carousel_controls">
  <div class="carousel__pagination carousel__pagination_primary carousel__pagination_center"></div>
</div>
</div>
</section>


<section class="section__index_promo_block">
  <div class="section__index_promo_block_wrap">
    <div class="promo__block_img" data-vibrant>
      <div class="img lazy" data-background-image="https://halykbank.kz/storage/app/uploads/public/5be/e94/7ed/5bee947ed618f078418070.png"
      data-background-image-gradient="https://halykbank.kz/storage/app/uploads/public/8d8/1e9/d6e/thumb__30_0_0_0_auto.png">
    </div>
  </div>

    <a href="https://halykbank.kz/homebank" class="btn btn-secondary btn-large" target="_blank">Мне тоже пора</a>
  </div>
</div>
</section>
</main>
<!-- end .content -->
</div>
<!-- .footer -->
<footer class="footer">
  <div class="footer__wrap">
    <div class="footer__left">
      <div class="footer__nav">
        <ul class="list-inline">
          <li role="presentation" class="  ">
            <a href="https://halykbank.kz/tariffs" >
              Тарифы
            </a>

          </li>
        </ul>
      </div>
      <div class="copyright">
        <p></p>
      </div>
      <div class="footer-amphibia">
        powered by <a href="http://dl.iitu.kz/">Laravel courses</a>
      </div>
    </div>

      <div class="columns">
        <div class="col">
          <div class="footer__title">Контакт-центр</div>
          <a href="tel:7111" class="link-icon phone"><i class="icon icon-phone"></i>7111</a>
        </div>
        <div class="col">
          <div class="footer__title">Мы в соц. сетях</div>
          <ul class="social__list">
            <li><a href="https://www.facebook.com/halykbank/" target="_blank"><i
              class="icon icon-fb"></i></a></li>
              <li><a href="https://www.instagram.com/halykbank.kz/" target="_blank"><i
                class="icon icon-ins"></i></a></li>
                <li><a href="https://twitter.com/halykbank_kz" target="_blank"><i
                  class="icon icon-tw"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </footer><!-- end .footer -->
    </div>
    <!-- end .wrapper -->

    <script src="https://halykbank.kz/themes/halyk/assets/js/fullpage-704d5db8ea.js"></script>
    <script src="https://halykbank.kz/themes/halyk/assets/js/vendor-1ef6690e8b.js"></script>
    <script src="https://halykbank.kz/themes/halyk/assets/js/app-9e1c815a53.js"></script>
    <script src="/modules/system/assets/js/framework.combined-min.js"></script>
    <link rel="stylesheet" property="stylesheet" href="/modules/system/assets/css/framework.extras-min.css">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-53PNJTK"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
      <!-- End Google Tag Manager (noscript) -->

      <script type="text/javascript" src="https://halyk.ailabs.kz/aicc/chat-widget2/uniq-chat.js"></script>
      <script>
        var chat_client = 'halyk', chat_mode=2, ailabs_user_id = null, ailabs_user_info  = {'user_intent_category_label':'HALYKBANK'};
        AILabsChatStart();
      </script>
      @endsection

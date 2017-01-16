<main class="home">
  <div class="container-fluid">
    <div class="">
      <section class="carousel-1">
        <div id="carousel-1-id" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators  carousel-1__indicators">
            <li class="carousel-1__indicator  active" data-target="#carousel-1-id" data-slide-to="0" ></li>
            <li class="carousel-1__indicator"         data-target="#carousel-1-id" data-slide-to="1" ></li>
            <li class="carousel-1__indicator"         data-target="#carousel-1-id" data-slide-to="2" ></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">

            <div class="item active"><!--сделаnm вместо div ссылку-->
              <div class="image-wrapper image-carousel-1-wrapper">
                <img class="image" src="images/home/carousel-1/carousel-1(0).jpg" alt="...">
              </div>
              <div class="carousel-caption carousel-1-text">
                <span class="carousel-1__above-title-text  text-source-sans-pro-semibold-14-up-ls-2  grey-838182">Furniture design ideas</span><br>
                <h3 class="carousel-1__product-title">
                  <span class="carousel-1__product-title-top-text  text-montserrat-bold-65-up  black-3b3b3b">Lighting</span><br>
                  <span class="carousel-1__product-title-bottom-text  text-montserrat-bold-52-up  black-7a7a7a">pendant lamps</span>
                </h3>
                <p class="carousel-1__under-title-text  text-source-sans-pro-light-16-it  grey-838182">Consectetur adipisicing elit. Beatae accusamus,<br> optio, repellendus inventore </p>
                <a class="carousel-1__action-link-text  text-montserrat-bold-16-upper  grey-838182" href="#">Shop now</a>
              </div>
            </div>

            <?php for ($i = 1; $i <= 2; ++$i): ?>
            <div class="item"><!--сделаnm вместо div ссылку-->
              <div class="image-wrapper image-carousel-1-wrapper">
                <img class="image" src="images/home/carousel-1/carousel-1(<?php echo $i; ?>).jpg" alt="...">
              </div>
              <div class="carousel-caption carousel-1-text">
                <span class="carousel-1__above-title-text  text-source-sans-pro-semibold-14-up-ls-2  grey-838182">Furniture design ideas</span><br>
                <h3 class="carousel-1__product-title">
                  <span class="carousel-1__product-title-top-text  text-montserrat-bold-65-up  black-3b3b3b">Lighting</span><br>
                  <span class="carousel-1__product-title-bottom-text  text-montserrat-bold-52-up  black-7a7a7a">pendant lamps</span>
                </h3>
                <p class="carousel-1__under-title-text  text-source-sans-pro-light-16-it  grey-838182">Consectetur adipisicing elit. Beatae accusamus,<br> optio, repellendus inventore </p>
                <a class="carousel-1__action-link-text  text-montserrat-bold-16-upper grey-838182" href="#">Shop now</a>
              </div>
            </div>
            <? endfor; ?>

          </div>

          <!-- Controls -->
          <a class="left left carousel-control" href="#carousel-1-id" role="button" data-slide="prev">
            <span class="sr-only">Previous</span>
          </a>
          <a class="right left carousel-control" href="#carousel-1-id" role="button" data-slide="next">
            <span class="sr-only">Next</span>
          </a>
        </div>
      </section>
    </div>
  </div>


  <div class="container">
    <!--Masonry-4 Grid-1-->
    <section class="masonry-4-grid-1">
      <div class="row">

        <div class="col-lg-4">
          <div class="masonry-4-grid-1__item  masonry-4-grid-1__item-1">
            <a class="image-wrapper  masonry-4-grid-1__image-wrapper-1" href="#">
              <img class="image" src="images/home/masonry-4-grid-1/masonry-4-grid-1(1).jpg" alt="385x480">
            </a>
            <h3 class="masonry-4-grid-1__item-title  text-source-sans-pro-light-24-up-ls-2  grey-696969">My smal writting desk</h3>
            <span class="masonry-4-grid-1__action-link">
              <span class="masonry-4-grid-1__action-link-text  text-montserrat-bold-14-upper  grey-868686">Shop now</span>
              <svg class="masonry-4-grid-1__action-link-icon" width="25" height="25" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                <path d="M845 1395l454-454q19-19 19-45t-19-45l-454-454q-19-19-45-19t-45 19l-102 102q-19 19-19 45t19 45l307 307-307 307q-19 19-19 45t19 45l102 102q19 19 45 19t45-19zm819-499q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"/>
              </svg>
            </span>
            <span class="product-price  text-montserrat-regular-18-upper  grey-868686">
              <span class="">€</span>
              <span class="">129</span>
            </span>
            <span class="product-discont  text-montserrat-bold-36-upper  white-ffffff  yellow-eed24c">
              <span class="">-20</span>
              <span class="">&#37;</span>
            </span>
          </div>
        </div>

        <div class="masonry-4-grid-1__middle-part  col-lg-4">
          <div class="row">
            <div class="col-lg-12  col-sm-6">
              <div class="masonry-4-grid-1__item  masonry-4-grid-1__item-2">
                <a class="image-wrapper  masonry-4-grid-1__image-wrapper-2" href="#">
                  <img class="image" src="images/home/masonry-4-grid-1/masonry-4-grid-1(1).jpg" alt="385x230">
                </a>
                <h3 class="masonry-4-grid-1__item-title  text-source-sans-pro-light-24-up-ls-2  grey-696969">My smal writting desk</h3>
                <span class="masonry-4-grid-1__action-link">
                  <span class="masonry-4-grid-1__action-link-text  text-montserrat-bold-14-upper  grey-868686">Shop now</span>
                  <svg class="masonry-4-grid-1__action-link-icon" width="25" height="25" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                    <path d="M845 1395l454-454q19-19 19-45t-19-45l-454-454q-19-19-45-19t-45 19l-102 102q-19 19-19 45t19 45l307 307-307 307q-19 19-19 45t19 45l102 102q19 19 45 19t45-19zm819-499q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"/>
                  </svg>
                </span>
                <span class="product-price  text-montserrat-regular-18-upper  grey-868686">
                  <span class="">€</span>
                  <span class="">129</span>
                </span>

              </div>
            </div>
            <div class="col-lg-12  col-sm-6">
              <div class="masonry-4-grid-1__item  masonry-4-grid-1__item-3">
                <a class="image-wrapper  masonry-4-grid-1__image-wrapper-2" href="#">
                  <img class="image" src="images/home/masonry-4-grid-1/masonry-4-grid-1(1).jpg" alt="385x230">
                </a>
                <h3 class="masonry-4-grid-1__item-title  text-source-sans-pro-light-24-up-ls-2  grey-696969">My smal writting desk</h3>
                <span class="masonry-4-grid-1__action-link">
                  <span class="masonry-4-grid-1__action-link-text  text-montserrat-bold-14-upper  grey-868686">Shop now</span>
                  <svg class="masonry-4-grid-1__action-link-icon" width="25" height="25" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                    <path d="M845 1395l454-454q19-19 19-45t-19-45l-454-454q-19-19-45-19t-45 19l-102 102q-19 19-19 45t19 45l307 307-307 307q-19 19-19 45t19 45l102 102q19 19 45 19t45-19zm819-499q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"/>
                  </svg>
                </span>
                <span class="product-price  text-montserrat-regular-18-upper  grey-868686">
                  <span class="">€</span>
                  <span class="">129</span>
                </span>

              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="masonry-4-grid-1__item  masonry-4-grid-1__item-1">
            <a class="image-wrapper  masonry-4-grid-1__image-wrapper-1" href="#">
              <img class="image" src="images/home/masonry-4-grid-1/masonry-4-grid-1(1).jpg" alt="385x480">
            </a>
            <h3 class="masonry-4-grid-1__item-title  text-source-sans-pro-light-24-up-ls-2  grey-696969">My smal writting desk</h3>
            <span class="masonry-4-grid-1__action-link">
              <span class="masonry-4-grid-1__action-link-text  text-montserrat-bold-14-upper  grey-868686">Shop now</span>
              <svg class="masonry-4-grid-1__action-link-icon" width="25" height="25" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                <path d="M845 1395l454-454q19-19 19-45t-19-45l-454-454q-19-19-45-19t-45 19l-102 102q-19 19-19 45t19 45l307 307-307 307q-19 19-19 45t19 45l102 102q19 19 45 19t45-19zm819-499q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"/>
              </svg>
            </span>
            <span class="product-price  text-montserrat-regular-18-upper  grey-868686">
              <span class="">€</span>
              <span class="">129</span>
            </span>
            <span class="product-discont  text-montserrat-bold-36-upper  white-ffffff  yellow-eed24c">
              <span class="">-20</span>
              <span class="">&#37;</span>
            </span>
          </div>
        </div>

      </div>
    </section>
  </div>



    <section class="carousel-1-4_2">

      <div class="container">
      <div class="carousel-1-4_2__categories">
        <a class="carousel-1-4_2__category-link  text-montserrat-regular-18-upper  black-3a3a3a  active" href="#">Featured</a>
        <a class="carousel-1-4_2__category-link  text-montserrat-regular-18-upper  grey-868686"          href="#">Latest</a>
        <a class="carousel-1-4_2__category-link  text-montserrat-regular-18-upper  grey-868686"          href="#">Best Seller</a>
      </div>
      </div>

      <div class="container  carousel-1-4_2__container">
      <ul class="carousel-1-4_2__list" id="carousel-1-4_2-container">

        <?php for ($i = 0; $i <= 10; ++$i): ?>
        <li class="item carousel-1-4_2-container__item  text-center">
          <div class="carousel-1-4_2__top-items">
            <a class="image-wrapper  carousel-1-4_2__image-wrapper" href="#">
              <img class="image" src="images/home/carousel_1-4_2/Black-Living-Rooms-Ideas-Inspiration.png" alt="carousel-1-4-home image">
            </a>
            <div class="rating  rating-3-stars">
              <svg width="20" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                <path d="M1201 1004l306-297-422-62-189-382-189 382-422 62 306 297-73 421 378-199 377 199zm527-357q0 22-26 48l-363 354 86 500q1 7 1 20 0 50-41 50-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z"/>
              </svg>
              <svg width="20" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                <path d="M1201 1004l306-297-422-62-189-382-189 382-422 62 306 297-73 421 378-199 377 199zm527-357q0 22-26 48l-363 354 86 500q1 7 1 20 0 50-41 50-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z"/>
              </svg>
              <svg width="20" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                <path d="M1201 1004l306-297-422-62-189-382-189 382-422 62 306 297-73 421 378-199 377 199zm527-357q0 22-26 48l-363 354 86 500q1 7 1 20 0 50-41 50-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z"/>
              </svg>
              <svg width="20" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                <path d="M1201 1004l306-297-422-62-189-382-189 382-422 62 306 297-73 421 378-199 377 199zm527-357q0 22-26 48l-363 354 86 500q1 7 1 20 0 50-41 50-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z"/>
              </svg>
            </div>
            <h3 class="carousel-1-4_2__product-title">
              <a class="text-source-sans-pro-semibold-14-cap  grey-757575" href="#">Bombi chair</a>
            </h3>
            <span class="product-price  text-myriad-pro-regular-18-up  black-000000">
              <span class="">&euro;</span>
              <span class="">129</span>
            </span>
            <div class="marker-new  text-montserrat-bold-14-upper  white-ffffff  black-000000-bg">New</div>
            <div class="marker-discont  text-montserrat-bold-14-upper  white-ffffff  green-b2cc29-bg">
              <span class="">20</span>
              <span class="">&#37;</span>
              <span class="">Off</span>
            </div>
          </div>
          <div class="carousel-1-4_2__bottom-items">
            <a class="image-wrapper  carousel-1-4_2__image-wrapper" href="#">
              <img class="image" src="images/home/carousel_1-4_2/Black-Living-Rooms-Ideas-Inspiration.png" alt="carousel-1-4-home image">
            </a>
            <div class="rating  rating-3-stars">
              <svg width="20" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                <path d="M1201 1004l306-297-422-62-189-382-189 382-422 62 306 297-73 421 378-199 377 199zm527-357q0 22-26 48l-363 354 86 500q1 7 1 20 0 50-41 50-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z"/>
              </svg>
              <svg width="20" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                <path d="M1201 1004l306-297-422-62-189-382-189 382-422 62 306 297-73 421 378-199 377 199zm527-357q0 22-26 48l-363 354 86 500q1 7 1 20 0 50-41 50-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z"/>
              </svg>
              <svg width="20" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                <path d="M1201 1004l306-297-422-62-189-382-189 382-422 62 306 297-73 421 378-199 377 199zm527-357q0 22-26 48l-363 354 86 500q1 7 1 20 0 50-41 50-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z"/>
              </svg>
              <svg width="20" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                <path d="M1201 1004l306-297-422-62-189-382-189 382-422 62 306 297-73 421 378-199 377 199zm527-357q0 22-26 48l-363 354 86 500q1 7 1 20 0 50-41 50-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z"/>
              </svg>
            </div>
            <h3 class="carousel-1-4_2__product-title">
              <a class="text-source-sans-pro-semibold-14-cap  grey-757575" href="#">Bombi chair</a>
            </h3>
            <span class="product-price  text-myriad-pro-regular-18-up  black-000000">
              <span class="">&euro;</span>
              <span class="">129</span>
            </span>
            <div class="marker-new  text-montserrat-bold-14-upper  white-ffffff  black-000000-bg">New</div>
            <div class="marker-discont  text-montserrat-bold-14-upper  white-ffffff  green-b2cc29-bg">
              <span class="">20</span>
              <span class="">&#37;</span>
              <span class="">Off</span>
            </div>
          </div>
        </li>
        <? endfor; ?>

      </ul>


      <div class="carousel-1-4_2-navigation  hidden-sm  hidden-xs">
        <a class="carousel-1-4_2-navigation__prev" role="button">
          <svg class="carousel-1-4_2-navigation__prev-icon" width="40" height="40" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
            <path d="M1427 301l-531 531 531 531q19 19 19 45t-19 45l-166 166q-19 19-45 19t-45-19l-742-742q-19-19-19-45t19-45l742-742q19-19 45-19t45 19l166 166q19 19 19 45t-19 45z"/>
          </svg>
        </a>
        <a class="carousel-1-4_2-navigation__next" role="button">
          <svg class="carousel-1-4_2-navigation__next-icon" width="40" height="40" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
            <path d="M1363 877l-742 742q-19 19-45 19t-45-19l-166-166q-19-19-19-45t19-45l531-531-531-531q-19-19-19-45t19-45l166-166q19-19 45-19t45 19l742 742q19 19 19 45t-19 45z"/>
          </svg>
        </a>
      </div>
      </div>

    </section>



  <div class="container-fluid">
    <section class="carousel-2-4 text-center">
<div class="container  carousel-2-4__wrapper">
      <h1 class="text-montserrat-bold-26-upper  black-3a3a3a">Best seller</h1>
      <p class="carousel-2-4__under-title  text-source-sans-pro-semibold-14-up-ls-2  grey-a0a0a0">Excepteur sint occaecat</p>


      <ul class="carousel-2-4-container" id="carousel-2-4-container">

        <?php for ($i = 0; $i <= 11; ++$i): ?>
        <li class="item carousel-2-4-container__item  text-center">

            <a class="image-wrapper  carousel-2-4__image-wrapper" href="#">
              <img class="image" src="images/home/carousel_1-4/carousel-1-4-home(1).jpg" alt="carousel-1-4-home image">
            </a>
            <h3 class="carousel-2-4-container__product-title">
              <a class="text-source-sans-pro-semibold-18-cap  grey-757575" href="#">Bombi chair</a>
            </h3>
            <span class="product-price  text-myriad-pro-regular-23-up  black-000000">
              <span class="">&euro;</span>
              <span class="">129</span>
            </span>
            <div class="marker-best-price  text-montserrat-bold-14-upper  white-ffffff  yellow-eed24c">Best price</div>
            <div class="marker-discont  text-montserrat-bold-14-upper  white-ffffff  green-b2cc29-bg">
              <span class="">20</span>
              <span class="">&#37;</span>
              <span class="">Off</span>
            </div>

        </li>
        <? endfor; ?>

      </ul>

      <div class="carousel-2-4-navigation  hidden-sm  hidden-xs">
        <a class="carousel-2-4-navigation__prev" role="button">
          <svg width="40" height="40" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
            <path d="M1427 301l-531 531 531 531q19 19 19 45t-19 45l-166 166q-19 19-45 19t-45-19l-742-742q-19-19-19-45t19-45l742-742q19-19 45-19t45 19l166 166q19 19 19 45t-19 45z"/>
          </svg>
        </a>
        <a class="carousel-2-4-navigation__next" role="button">
          <svg width="40" height="40" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
            <path d="M1363 877l-742 742q-19 19-45 19t-45-19l-166-166q-19-19-19-45t19-45l531-531-531-531q-19-19-19-45t19-45l166-166q19-19 45-19t45 19l742 742q19 19 19 45t-19 45z"/>
          </svg>
        </a>
      </div>
</div>
    </section>
  </div>


  <div class="container">
    <section class="featured-products">
      <div class="row">
        <?php for ($i = 0; $i <= 3; ++$i): ?>
        <div class="col-lg-3  col-sm-6">
          <article class="featured-product">
            <b class=" featured-product__title-home  text-montserrat-bold-20-cap  black-3a3a3a">Featured products</b>
            <ul class="featured-products__list-home">

              <?php for ($j = 0; $j <= 2; ++$j): ?>
                <?php require $block_2_data -> Get_data( 'home', 'last-section' )['path']; ?>
              <? endfor; ?>

            </ul>

          </article>
        </div>
        <? endfor; ?>
      </div>
    </section>
  </div>
</main>
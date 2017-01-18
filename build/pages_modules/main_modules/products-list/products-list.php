<main class="products-list">
  <div class="container-fluid text-center">
    <?php require $block_1_data -> Get_data( 'products-list', 'main-info' )['path']; ?>
  </div>
  <div class="container">
    <div class="row">


      <div class="col-md-4">
        <?php require_once 'pages_modules/other_modules/asides/aside_1/aside_1.php'; ?>
      </div>


      <div class="col-md-8">

        <div class="products-list-options  text-myriad-pro-regular-14  grey-a5a5a5">
          <div class="row">
            <div class="col-lg-4  col-sm-6">
              <div class="products-list__results">
                Showing
                <b><span class="products-list__begining-results-value">1</span></b>
                -
                <b><span class="products-list__ending-results-value">15</span></b>
                of
                <b><span class="products-list__total-results-value">90</span></b>
              </div>
              <div class="products-list__page-results">
                View
                <a href="#" class="products-list__view-results-value  text-myriad-pro-regular-14  grey-a5a5a5">15</a>
                <a href="#" class="products-list__view-results-value  text-myriad-pro-regular-14  grey-a5a5a5">30</a>
                <a href="#" class="products-list__view-results-value  text-myriad-pro-regular-14  grey-a5a5a5">45</a>
                <a href="#" class="products-list__view-results-value  text-myriad-pro-regular-14  grey-a5a5a5">All</a>
              </div>
            </div>
            <div class="col-lg-2  hidden-md  hidden-sm  hidden-xs"></div>
            <div class="col-lg-6  col-sm-6  text-right  product-list__options-list-wrapper">
              <div class="btn-group  product-list__options-list">
                <div class="sorting-options-list-wrapper">
                  <button type="button" class="btn btn-default dropdown-toggle sorting-options-button  grey-a5a5a5" data-toggle="dropdown">
                    <span class="sorting-options-button__text"></span>Default Sorting
                    <svg  class="sorting-options-button__icon" width="20" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1395 736q0 13-10 23l-466 466q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l393 393 393-393q10-10 23-10t23 10l50 50q10 10 10 23z"/>
                    </svg>
                  </button>
                  <ul class="dropdown-menu sorting-options-list" role="menu">
                  <li><a href="#">by price</a></li>
                  <li><a href="#">by title</a></li>
                  <li><a href="#">by collection</a></li>
                  <li><a href="#">by date</a></li>
                  <li><a href="#">by reviews</a></li>
                </ul>
                </div>
                <a href="#" class="products-list__view-normal">
                  <svg width="20" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M832 1024v384q0 52-38 90t-90 38h-512q-52 0-90-38t-38-90v-384q0-52 38-90t90-38h512q52 0 90 38t38 90zm0-768v384q0 52-38 90t-90 38h-512q-52 0-90-38t-38-90v-384q0-52 38-90t90-38h512q52 0 90 38t38 90zm896 768v384q0 52-38 90t-90 38h-512q-52 0-90-38t-38-90v-384q0-52 38-90t90-38h512q52 0 90 38t38 90zm0-768v384q0 52-38 90t-90 38h-512q-52 0-90-38t-38-90v-384q0-52 38-90t90-38h512q52 0 90 38t38 90z"/></svg>
                </a>
                <a href="#" class="products-list__view-extended">
                  <svg width="20" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M256 1312v192q0 13-9.5 22.5t-22.5 9.5h-192q-13 0-22.5-9.5t-9.5-22.5v-192q0-13 9.5-22.5t22.5-9.5h192q13 0 22.5 9.5t9.5 22.5zm0-384v192q0 13-9.5 22.5t-22.5 9.5h-192q-13 0-22.5-9.5t-9.5-22.5v-192q0-13 9.5-22.5t22.5-9.5h192q13 0 22.5 9.5t9.5 22.5zm0-384v192q0 13-9.5 22.5t-22.5 9.5h-192q-13 0-22.5-9.5t-9.5-22.5v-192q0-13 9.5-22.5t22.5-9.5h192q13 0 22.5 9.5t9.5 22.5zm1536 768v192q0 13-9.5 22.5t-22.5 9.5h-1344q-13 0-22.5-9.5t-9.5-22.5v-192q0-13 9.5-22.5t22.5-9.5h1344q13 0 22.5 9.5t9.5 22.5zm-1536-1152v192q0 13-9.5 22.5t-22.5 9.5h-192q-13 0-22.5-9.5t-9.5-22.5v-192q0-13 9.5-22.5t22.5-9.5h192q13 0 22.5 9.5t9.5 22.5zm1536 768v192q0 13-9.5 22.5t-22.5 9.5h-1344q-13 0-22.5-9.5t-9.5-22.5v-192q0-13 9.5-22.5t22.5-9.5h1344q13 0 22.5 9.5t9.5 22.5zm0-384v192q0 13-9.5 22.5t-22.5 9.5h-1344q-13 0-22.5-9.5t-9.5-22.5v-192q0-13 9.5-22.5t22.5-9.5h1344q13 0 22.5 9.5t9.5 22.5zm0-384v192q0 13-9.5 22.5t-22.5 9.5h-1344q-13 0-22.5-9.5t-9.5-22.5v-192q0-13 9.5-22.5t22.5-9.5h1344q13 0 22.5 9.5t9.5 22.5z"/></svg>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="products-list">
          <div class="row">
          <?php for ($j = 0; $j <= 14; ++$j): ?>
            <div class="col-lg-4  col-sm-6">
              <article class="product-item-square-1">

                <a class="image-wrapper product-item-square-1__image-wrapper" href="#">
                  <img class="image" src="images/products-list/product-item/product-item.png" alt="product-item">
                </a>

                <div class="rating  rating-3-stars">
                  <svg width="20" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1201 1004l306-297-422-62-189-382-189 382-422 62 306 297-73 421 378-199 377 199zm527-357q0 22-26 48l-363 354 86 500q1 7 1 20 0 50-41 50-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z"/></svg>
                  <svg width="20" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1201 1004l306-297-422-62-189-382-189 382-422 62 306 297-73 421 378-199 377 199zm527-357q0 22-26 48l-363 354 86 500q1 7 1 20 0 50-41 50-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z"/></svg>
                  <svg width="20" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1201 1004l306-297-422-62-189-382-189 382-422 62 306 297-73 421 378-199 377 199zm527-357q0 22-26 48l-363 354 86 500q1 7 1 20 0 50-41 50-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z"/></svg>
                  <svg width="20" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1201 1004l306-297-422-62-189-382-189 382-422 62 306 297-73 421 378-199 377 199zm527-357q0 22-26 48l-363 354 86 500q1 7 1 20 0 50-41 50-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z"/></svg>
                </div>

                <h3 class="product-item-square-1__title">
                  <a class="text-source-sans-pro-semibold-18-cap  grey-757575" href="#">Marvelous modern 3 seater</a>
                </h3>

                <span class="product-price  text-myriad-pro-regular-23-up  black-000000">
                  <span class="">&euro;</span>
                  <span class="">129</span>
                </span>

                <div class="marker-new  text-montserrat-bold-14-upper  white-ffffff  black-000000-bg">New</div>
                <div class="marker-discont  text-montserrat-bold-14-upper  white-ffffff  green-b2cc29-bg">
                  <span class="">20</span>
                  <span class="">&#37;</span>
                  <span class="">Off</span>
                </div>

              </article>
            </div>
          <? endfor; ?>
          </div>
        </div>

        <nav class="page-navigation  text-center" aria-label="Page navigation">
          <ul class="pagination  text-montserrat-bold-16-cap  grey-757575">
            <li>
              <a href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
              </a>
            </li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li>
              <a href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
              </a>
            </li>
          </ul>
        </nav>

      </div>


    </div>
  </div>
</main>
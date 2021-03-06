<aside class="aside-1">
  <div class="row">

    <div class="col-md-12  col-sm-6">
      <section class="aside-section  pdoduct-filter-1">
        <b class="aside-title  text-montserrat-bold-23-upper  black-494949">Filter</b>

        <form class="pdoduct-filter-1__form form-horizontal" action="" id="product-filter-1-form">

          <fieldset class="pdoduct-filter-1__by-brands">
            <legend class="pdoduct-filter-1__legend  text-source-sans-pro-semibold-14  grey-959596">Filter by Brands</legend>
            <ul class="pdoduct-filter-1__brands-list  black-919191">
              <?php for ($i = 0; $i <= 10; ++$i): ?>
                <li class="aside-filter-option">
                  <div class="row">
                    <div class="col-xs-9">
                      <label class="schon-label clearfix">
                        <input class="schon-input" type="checkbox">
                        <span class="cr">
                          <i class="cr-icon glyphicon-ok"></i>
                        </span>
                        Casali
                      </label>
                    </div>
                    <div class="col-xs-3 text-right">
                      <span class="aside-filter-option-products-quantity">120</span>
                    </div>
                  </div>
                </li>
              <? endfor; ?>
            </ul>
          </fieldset>

          <fieldset class="pdoduct-filter-1__by-price">
            <legend class="pdoduct-filter-1__legend  text-source-sans-pro-semibold-14  grey-959596">Filter by Price</legend>
            <div class="pdoduct-filter-1__price-regulator" id="slider-range"></div>
            <div class="row">
              <div class="col-xs-8  pdoduct-filter-1__data-prices-wrapper-outer">
                <div class="pdoduct-filter-1__data-prices-wrapper-inner  form-group  text-myriad-pro-regular-14  black-494949">
                  <label class="" for="amount">Price:</label>
                  <input class="pdoduct-filter-1__price-regulator-input" type="text" id="amount" readonly >
                </div>
              </div>
              <div class="col-xs-4  text-right">
                <button class="schon-button  text-myriad-pro-regular-14  white-ffffff  black-3a3a3a-bg" type="submit">Filter</button>
              </div>
            </div>
          </fieldset>

        </form>
      </section>
    </div>


    <div class="col-md-12  col-sm-6">
      <section class="aside-section  categories-list-1">
        <b class="aside-title  text-montserrat-bold-23-upper  black-494949">Categories</b>

        <ul class="categories-list-1__list">
          <?php for ($i = 0; $i <= 10; ++$i): ?>
            <li class="categories-list-1__list-item">
              <div class="row">
                <div class="col-xs-8">
                  <a href="#" class="categories-list-1__list-link  text-montserrat-bold-16-upper  grey-757575">Chairs</a>
                </div>
                <div class="col-xs-4  text-right">
                  <span class="text-montserrat-regular-13  grey-757575">100</span>
                </div>
              </div>
            </li>
          <? endfor; ?>
        </ul>

      </section>
    </div>
  </div>


  <section class="aside-section  hot-sale-products">
    <b class=" hot-sale-products__title-aside  aside-title  text-montserrat-bold-23-upper  black-494949">Hot sale</b>
    <ul class="hot-sale-products__list-aside">

      <?php for ($j = 0; $j <= 4; ++$j): ?>
        <?php require $block_2_data -> Get_data( 'products-list', 'sidebar-bottom' )['path']; ?>
      <? endfor; ?>

    </ul>
  </section>



</aside>
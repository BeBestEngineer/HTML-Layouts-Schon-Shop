<aside class="aside-1">
  <section class="pdoduct-filter-1">
    <b class="text-montserrat-bold-23-upper  black-494949">Filter</b>

    <form class="pdoduct-filter-1__form form-horizontal" action="" id="product-filter-1-form">

      <fieldset class="pdoduct-filter-1__by-brands">
        <legend class="text-source-sans-pro-semibold-14  grey-959596">Filter by Brands</legend>
        <ul class="pdoduct-filter-1__brands-list">
          <?php for ($i = 0; $i <= 10; ++$i): ?>
            <li class="pdoduct-filter-1__brand-item">
              <div class="form-group">
                <div class="col-lg-9 ">
                  <label class="text-source-sans-pro-light-13  grey-959596">
                    <input class="" type="checkbox" value="Casali-value">
              <span class="cr">
                <i class="cr-icon glyphicon glyphicon-ok"></i>
              </span>
                    Casali
                  </label>
                </div>
                <div class="col-lg-3  text-right">
                  <span class="text-source-sans-pro-light-13  grey-959596">120</span>
                </div>
              </div>
            </li>
          <? endfor; ?>
        </ul>
      </fieldset>

      <fieldset class="pdoduct-filter-1__by-price">
        <legend class="text-source-sans-pro-semibold-14  grey-959596">Filter by Price</legend>
        <div id="slider-range"></div>
        <div class="row">
          <div class="col-lg-8">
            <div class="form-group  text-myriad-pro-regular-14  black-494949">
              <label class="" for="amount">Price:</label>
              <input class="pdoduct-filter-1__price-regulator-input" type="text" id="amount" readonly >
            </div>
          </div>
          <div class="col-lg-4  text-right">
            <button class="pdoduct-filter-1__button text-myriad-pro-regular-14  white-ffffff  black-3a3a3a-bg" type="submit">Filter</button>
          </div>
        </div>
      </fieldset>

    </form>
  </section>


  <section class="categories-list-1">
    <b class="text-montserrat-bold-23-upper  black-494949">Categories</b>

    <ul class="categories-list-1__list">
      <?php for ($i = 0; $i <= 10; ++$i): ?>
        <li class="categories-list-1__list-item">
          <div class="row">
            <div class="col-lg-8">
              <a href="#" class="categories-list-1__list-link  text-montserrat-bold-16-upper  grey-757575">Chairs</a>
            </div>
            <div class="col-lg-4  text-right">
              <span class="text-montserrat-regular-13  grey-757575">100</span>
            </div>
          </div>
        </li>
      <? endfor; ?>
    </ul>

  </section>
  
  
  <section class="hot-sale">
    <ul class="featured-products__list">

      <?php for ($j = 0; $j <= 4; ++$j): ?>
        <?php require $block_2_data -> Get_data( 'products-list', 'sidebar-bottom' )['path']; ?>
      <? endfor; ?>

    </ul>
  </section>

</aside>
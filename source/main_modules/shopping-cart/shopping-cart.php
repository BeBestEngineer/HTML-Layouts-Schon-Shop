<div class="container-fluid text-center">
  <?php require $block_1_data -> Get_data( 'shopping-cart', 'main-info' )['path']; ?>
</div>


<main class="shopping-cart">
  <div class="container">
    <div class="row">
      <section class="process text-center  ">

          <div class="container  text-source-sans-pro-bold-30-up  grey-838182">
              <div class="process__step  active">
                <a class="process__step-link  process-line" href="#">01</a><br>
                <b class="process__step-info  text-source-sans-pro-bold-16-capitalize">Shoping Cart</b>
              </div>


              <div class="process__step  hidden-xs">
                <a class="process__step-link  process-line" href="#">02</a><br>
                <b class="process__step-info  text-source-sans-pro-bold-16-capitalize">Checkout</b>
              </div>


              <div class="process__step  hidden-xs">
                <a class="process__step-link" href="#">03</a><br>
                <b class="process__step-info  text-source-sans-pro-bold-16-capitalize">Order Complete</b>
              </div>
          </div>

      </section>
    </div>


    <div class="row">
      <div class="shopping-cart__table">
        <div class="shopping-cart__head  text-source-sans-pro-bold-16-up  grey-838182">
          <div class="row">
            <div class="col-sm-6  col-xs-6  shopping-cart__head-product-column">Product</div>
            <div class="col-xs-2  hidden-xs">Price</div>
            <div class="col-xs-1  hidden-xs">Quantity</div>
            <div class="col-xs-2  col-xs-6">Total</div>
            <div class="col-xs-1  hidden-xs"></div>
          </div>
        </div>
        <ul class="shopping-cart__list">
        <?php for ($i = 0; $i <= 2; ++$i): ?>
          <li class="shopping-cart__item">
            <div class="row">
              <div class="col-sm-2  hidden-xs  shopping-cart__col-product-photo">
                <a class="shopping-cart__image-wrapper" href="#">
                  <img class="image" src="images/shopping-cart/shopping-cart-item(1).png" alt="carousel-1-4-home image">
                </a>
              </div>

              <div class="col-sm-4  col-xs-6   shopping-cart__col-product-info">
                <h3 class=""><a class="text-source-sans-pro-bold-18-cap  grey-757575" href="#">Marvelous Modern 3 Seater</a></h3>
              </div>

              <div class="col-sm-2  hidden-xs   shopping-cart__col-product-price">
                <div class="product-price  text-myriad-pro-regular-18-up  black-000000">
                  <span class="">&euro;</span>
                  <span class="">129</span>
                </div>
              </div>

              <div class="col-sm-1  hidden-xs  shopping-cart__col-product-quantity">
                <div class="product__quantity-buttons  product__info-text">
                  <button class="product__quantity-more" type="button">
                    <svg width="20" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1395 1184q0 13-10 23l-50 50q-10 10-23 10t-23-10l-393-393-393 393q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l466 466q10 10 10 23z"></path>
                    </svg>
                  </button>
                  <input class="product__quantity-value  text-montserrat-bold-18-upper  grey-979797" value="1" type="text">
                  <button class="product__quantity-less" type="button">
                    <svg width="20" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1395 736q0 13-10 23l-466 466q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l393 393 393-393q10-10 23-10t23 10l50 50q10 10 10 23z"></path>
                    </svg>
                  </button>
                </div>
              </div>

              <div class="col-sm-2  col-xs-3 shopping-cart__col-product-total-price">
                <span class="total-price  text-myriad-pro-regular-18-up  black-000000">
                  <span class="">&euro;</span>
                  <span class="">129</span>
                </span>
              </div>

              <div class="col-sm-1  shopping-cart__col-product-actions">
                <div class="action">
                  <a href="#" class="shopping-cart__delete-item">
                    <svg width="20" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1490 1322q0 40-28 68l-136 136q-28 28-68 28t-68-28l-294-294-294 294q-28 28-68 28t-68-28l-136-136q-28-28-28-68t28-68l294-294-294-294q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 294 294-294q28-28 68-28t68 28l136 136q28 28 28 68t-28 68l-294 294 294 294q28 28 28 68z"/>
                    </svg>
                  </a>
                </div>
              </div>

            </div><!--row-->
          </li>
        <? endfor; ?>

        </ul>
      </div>
    </div>


    <div class="row">
      <div class="col-lg-12 ">
        <div class="shopping-cart__form-apply-wrapper  text-center">
          <form class="form-inline  shopping-cart__form-apply">
          <div class="form-group">
            <input type="text" class="form-control     form-input-middle  forms-input  grey-f0f0f0-bg  text-source-sans-pro-light-14  placeholder-color-909090" id="" placeholder="You coupon code">
            <button type="submit" class="schon-button  form-button-middle  shopping-cart__form-apply-button  text-montserrat-bold-18-upper  white-ffffff  yellow-cba233">
              <span class="">Apply</span>
            </button>
          </div>
        </form>
        </div>
      </div>
    </div>


    <div class="shopping-cart__calculate">
      <div class="row" >
        <div class="col-md-5" style="position: static;">

          <b class="shopping-cart__result-title  text-montserrat-regular-18-upper  black-000000">Calculate shipping</b>
          <form class="shopping-cart__form" action="">

            <div class="input-group">
              <input type="text" class="form-control  shopping-cart__form-input  forms-input  grey-f0f0f0-bg  text-source-sans-pro-light-14  placeholder-color-909090" aria-label="..." placeholder="Select country">
              <div class="input-group-btn">
                <button type="button" class="shopping-cart__form-dropdown-button  btn  btn-default  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <svg class="shopping-cart__form-dropdown-icon" width="20" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1395 736q0 13-10 23l-466 466q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l393 393 393-393q10-10 23-10t23 10l50 50q10 10 10 23z"/>
                  </svg>
                </button>
                <ul class="dropdown-menu dropdown-menu-right">
                  <li><a href="#">Russia</a></li>
                  <li><a href="#">China</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">USA</a></li>
                  <li><a href="#">Canada</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">Germany</a></li>
                  <li><a href="#">Franca</a></li>
                </ul>
              </div><!-- /btn-group -->
            </div><!-- /input-group -->

            <div class="input-group">
              <input type="text" class="form-control  shopping-cart__form-input  forms-input  grey-f0f0f0-bg  text-source-sans-pro-light-14  placeholder-color-909090" aria-label="..." placeholder="State/Province">
              <div class="input-group-btn">
                <button type="button" class="shopping-cart__form-dropdown-button  btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <svg class="shopping-cart__form-dropdown-icon" width="20" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1395 736q0 13-10 23l-466 466q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l393 393 393-393q10-10 23-10t23 10l50 50q10 10 10 23z"/>
                  </svg>
                </button>
                <ul class="dropdown-menu dropdown-menu-right">
                  <li><a href="#">West Siberis</a></li>
                  <li><a href="#">East Siberia</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">Far East</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">Moskowia</a></li>
                  <li><a href="#">West North</a></li>
                </ul>
              </div><!-- /btn-group -->
            </div><!-- /input-group -->

            <div class="input-group">
              <input type="text" class="form-control  shopping-cart__form-input  forms-input  grey-f0f0f0-bg  text-source-sans-pro-light-14  placeholder-color-909090" aria-label="..." placeholder="Zip/Postal code">
              <div class="input-group-btn">
                <button type="button" class="shopping-cart__form-dropdown-button  btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <svg class="shopping-cart__form-dropdown-icon" width="20" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1395 736q0 13-10 23l-466 466q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l393 393 393-393q10-10 23-10t23 10l50 50q10 10 10 23z"/>
                  </svg>
                </button>
                <ul class="dropdown-menu dropdown-menu-right">
                  <li><a href="#">644000</a></li>
                  <li><a href="#">655000</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">675000</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">600000</a></li>
                  <li><a href="#">700000</a></li>
                </ul>
              </div><!-- /btn-group -->
            </div><!-- /input-group -->
            <button type="submit" class="schon-button  shopping-cart__form-button  text-montserrat-bold-18-upper  white-ffffff  green-88bd6e-bg">
              <span class="button-text">Update total</span>
              <svg  class="button-icon  hidden-xs" width="20" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                <path d="M1639 1056q0 5-1 7-64 268-268 434.5t-478 166.5q-146 0-282.5-55t-243.5-157l-129 129q-19 19-45 19t-45-19-19-45v-448q0-26 19-45t45-19h448q26 0 45 19t19 45-19 45l-137 137q71 66 161 102t187 36q134 0 250-65t186-179q11-17 53-117 8-23 30-23h192q13 0 22.5 9.5t9.5 22.5zm25-800v448q0 26-19 45t-45 19h-448q-26 0-45-19t-19-45 19-45l138-138q-148-137-349-137-134 0-250 65t-186 179q-11 17-53 117-8 23-30 23h-199q-13 0-22.5-9.5t-9.5-22.5v-7q65-268 270-434.5t480-166.5q146 0 284 55.5t245 156.5l130-129q19-19 45-19t45 19 19 45z"/>
              </svg>
            </button>
          </form>

        </div>

        <div class="col-md-1"></div>

        <div class="col-md-6" style="position: static;">
        <b class="shopping-cart__result-title  shopping-cart__result-title-cart text-montserrat-regular-18-upper  black-000000">Cart total</b>

        <div class="shopping-cart__cart-result">
          <table class="table  shopping-cart__table-cart-result">
            <tbody>
              <tr>
                <td>
                  <span class="text-montserrat-regular-16-upper  grey-838182">Cart subtotal</span>
                </td>
                <td class="">
                  <span class="text-myriad-pro-regular-24-up  black-000000">
                    <span class="">&euro;</span>
                    <span class="">1299,00</span>
                  </span>
                </td>
              </tr>
                <tr>
                  <td>
                    <span class="text-montserrat-regular-16-upper  grey-838182">Shipping</span>
                  </td>
                  <td class="">
                    <span class="text-myriad-pro-regular-14  black-000000" style="line-height: 25px;">
                      Free shipping
                    </span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <span class="text-montserrat-regular-16-upper  grey-838182">Cart total</span>
                  </td>
                  <td class="">
                    <span class="text-myriad-pro-regular-24-up  black-000000">
                      <span class="">&euro;</span>
                      <span class="">1299,00</span>
                    </span>
                  </td>
                </tr>
            </tbody>
          </table>
        </div>

        <button type="button" class="schon-button  shopping-cart__procwwd-checkout-button  text-montserrat-bold-18-upper  white-ffffff  green-88bd6e-bg">
          <span class="button-text">Proceed to checkout</span>
          <svg  class="button-icon  hidden-xs" width="20" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
            <path d="M1671 566q0 40-28 68l-724 724-136 136q-28 28-68 28t-68-28l-136-136-362-362q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 295 656-657q28-28 68-28t68 28l136 136q28 28 28 68z"/>
          </svg>
        </button>
      </div>
      </div>
    </div>

  </div>
</main>


<main class="shopping-cart">
  <div class="container-fluid text-center">
    <?php require $block_1_data -> Get_data( 'shopping-cart', 'main-info' )['path']; ?>
  </div>

  <div class="container">
    <div class="row">
      <section class="process text-center  ">

          <div class="container-fluid">
            <div class="col-lg-4">
              <a href="#" class="process-circle  process-line  text-source-sans-pro-bold-30-up grey-838182">01</a><br>
              <b class="process-step-info  text-source-sans-pro-bold-16-capitalize  grey-9f9f9f">Shoping Cart</b>
            </div>
            <div class="col-lg-4">
              <a href="#" class="process-circle  process-line  text-source-sans-pro-bold-30-up grey-838182">02</a><br>
              <b class="process-step-info  text-source-sans-pro-bold-16-capitalize  grey-9f9f9f">Checkout</b>
            </div>
            <div class="col-lg-4">
              <a href="#" class="process-circle  text-source-sans-pro-bold-30-up grey-838182">03</a><br>
              <b class="process-step-info  text-source-sans-pro-bold-16-capitalize  grey-9f9f9f">Order Complete</b>
            </div>
          </div>

      </section>
    </div>


    <div class="row">
      <div class="shopping-cart__table">
        <div class="shopping-cart__head  text-source-sans-pro-bold-16-up  grey-838182">
          <div class="row">
            <div class="col-lg-8">Product</div>
            <div class="col-lg-1">Price</div>
            <div class="col-lg-1">Quantity</div>
            <div class="col-lg-1">Total</div>
            <div class="col-lg-1"></div>
          </div>
        </div>
        <?php for ($i = 0; $i <= 2; ++$i): ?>
          <div class="shopping-cart__item">
            <div class="row">
              <div class="col-lg-2">
                <a class="image-wrapper  shopping-cart__image-wrapper" href="#">
                  <img class="image" src="images/shopping-cart/shopping-cart-item(1).png" alt="carousel-1-4-home image">
                </a>
              </div>

              <div class="col-lg-6">
                <h3 class="text-source-sans-pro-bold-18-cap  grey-757575">Marvelous Modern 3 Seater</h3>
              </div>

              <div class="col-lg-1">
                <div class="product-price  text-myriad-pro-regular-18-up  black-000000">
                  <span class="">&euro;</span>
                  <span class="">129</span>
                </div>
              </div>

              <div class="col-lg-1">
                <div class="product-quantity">
                  <button type="button" class="btn  btn-default  dropdown-toggle  sorting-options-button  text-source-sans-pro-bold-18-up  black-000000" data-toggle="dropdown">
                    1
                    <svg width="20" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg" fill="#a1a1a1">
                      <path d="M1395 736q0 13-10 23l-466 466q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l393 393 393-393q10-10 23-10t23 10l50 50q10 10 10 23z"/>
                    </svg>
                  </button>
                  <ul class="dropdown-menu sorting-options-list  text-source-sans-pro-bold-18-up  black-000000" role="menu">
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                  </ul>
                </div>
              </div>

              <div class="col-lg-1">
                <span class="total-price  text-myriad-pro-regular-18-up  black-000000">
                  <span class="">&euro;</span>
                  <span class="">129</span>
                </span>
              </div>

              <div class="col-lg-1">
                <div class="action">
                  <a href="#" class="shopping-cart__delete-item">
                    <svg width="20" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1490 1322q0 40-28 68l-136 136q-28 28-68 28t-68-28l-294-294-294 294q-28 28-68 28t-68-28l-136-136q-28-28-28-68t28-68l294-294-294-294q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 294 294-294q28-28 68-28t68 28l136 136q28 28 28 68t-28 68l-294 294 294 294q28 28 28 68z"/>
                    </svg>
                  </a>
                </div>
              </div>

            </div><!--row-->
          </div>
        <? endfor; ?>

      </div>
    </div>


    <div class="row">
      <div class="col-lg-12">
        <form class="form-inline">
          <div class="form-group">
            <input type="text" class="form-control" id="" placeholder="You coupon code">
          </div>
          <button type="submit" class="shopping-cart__apply-button  text-montserrat-bold-18-upper  white-ffffff  yellow-cba233">Apply</button>
        </form>
      </div>
    </div>


    <div class="row">
      <div class="col-lg-6">

        <b class="shopping-cart__result-title  text-montserrat-regular-18-upper  black-000000">Calculate shipping</b>
        <form class="shopping-cart__form" action="">

          <div class="input-group">
            <input type="text" class="form-control" aria-label="..." placeholder="Select country">
            <div class="input-group-btn">
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <svg width="20" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                  <path
                      d="M1395 736q0 13-10 23l-466 466q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l393 393 393-393q10-10 23-10t23 10l50 50q10 10 10 23z"/>
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
            <input type="text" class="form-control" aria-label="..." placeholder="State/Province">
            <div class="input-group-btn">
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <svg width="20" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                  <path
                      d="M1395 736q0 13-10 23l-466 466q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l393 393 393-393q10-10 23-10t23 10l50 50q10 10 10 23z"/>
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
            <input type="text" class="form-control" aria-label="..." placeholder="Zip/Postal code">
            <div class="input-group-btn">
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <svg width="20" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                  <path
                      d="M1395 736q0 13-10 23l-466 466q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l393 393 393-393q10-10 23-10t23 10l50 50q10 10 10 23z"/>
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
          <button type="submit" class="shopping-cart__update-button  text-montserrat-bold-18-upper  white-ffffff  green-88bd6e-bg">
            Update total
            <svg width="20" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
              <path d="M1639 1056q0 5-1 7-64 268-268 434.5t-478 166.5q-146 0-282.5-55t-243.5-157l-129 129q-19 19-45 19t-45-19-19-45v-448q0-26 19-45t45-19h448q26 0 45 19t19 45-19 45l-137 137q71 66 161 102t187 36q134 0 250-65t186-179q11-17 53-117 8-23 30-23h192q13 0 22.5 9.5t9.5 22.5zm25-800v448q0 26-19 45t-45 19h-448q-26 0-45-19t-19-45 19-45l138-138q-148-137-349-137-134 0-250 65t-186 179q-11 17-53 117-8 23-30 23h-199q-13 0-22.5-9.5t-9.5-22.5v-7q65-268 270-434.5t480-166.5q146 0 284 55.5t245 156.5l130-129q19-19 45-19t45 19 19 45z"/>
            </svg>
          </button>
        </form>

      </div>


      <div class="col-lg-6">
        <b class="shopping-cart__result-title  text-montserrat-regular-18-upper  black-000000">Cart total</b>
        <ul class="shopping-cart__cart-result">

          <li class="shopping-cart__cart-result-item">
            <div class="row">
              <div class="col-lg-8  text-source-sans-pro-bold-16-up  grey-868686">
                Cart subtotal
              </div>
              <div class="col-lg-4">
                <span class="product-price  text-myriad-pro-regular-24-up  black-000000">
                  <span class="">&euro;</span>
                  <span class="">1299,00</span>
                </span>
              </div>
            </div>
          </li>

          <li class="shopping-cart__cart-result-item">
            <div class="row">
              <div class="col-lg-8  text-source-sans-pro-bold-16-up  grey-868686">
                Shipping
              </div>
              <div class="col-lg-4">
                <span class="product-shipping__text  text-myriad-pro-regular-14  black-000000">Free shipping</span>
              </div>
            </div>
          </li>

          <li class="shopping-cart__cart-result-item">
            <div class="row">
              <div class="col-lg-8  text-source-sans-pro-bold-16-up  grey-868686">
                Cart total
              </div>
              <div class="col-lg-4">
                <span class="product-price  text-myriad-pro-regular-24-up  black-000000">
                  <span class="">&euro;</span>
                  <span class="">1299,00</span>
                </span>
              </div>
            </div>
          </li>

        </ul>

        <button type="button" class="shopping-cart__procwwd-checkout-button  text-montserrat-bold-18-upper  white-ffffff  green-88bd6e-bg">
          Proceed to checkout
          <svg width="20" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
            <path d="M1671 566q0 40-28 68l-724 724-136 136q-28 28-68 28t-68-28l-136-136-362-362q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 295 656-657q28-28 68-28t68 28l136 136q28 28 28 68z"/>
          </svg>
        </button>
      </div>
    </div>


  </div>
</main>


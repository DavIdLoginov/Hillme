<footer class="footer">
  <div class="container">
    <div class="footer__inner">
      <div class="footer__aside">
        <div class="product-verification" id="verify">
          <div class="product-verification__title">Product verification</div>
          <div class="product-verification__text">Hillme Product Verification Center Enter or paste the security code</div>

          <form class="product-verification__form" action="blocks/form-handler.php">
            <div class="product-verification__form-row">
              <div class="product-verification__input-wrapper">
                <input type="text" class="product-verification__input form-control" name="number" required placeholder="Security code number">
              </div>
              <div class="product-verification__btn-wrapper">
                <button type="submit" class="product-verification__btn btn btn_outline">submit</button>
              </div>
            </div>
          </form>

          <div class="product-verification__footer">Copyright 2023 INTERNATIONAL,INC.</div>
        </div>
      </div>

      <div class="footer__content">
        <div class="row">
          <div class="col-md">
            <div class="footer__main">
              <div class="footer__row row">
                <div class="col-sm">
                  <div class="footer__section-title">Company</div>
                  <div class="footer__nav">
                    <ul>
                      <li><a href="index.php"<?= $page === 'home' ? ' class="is-active"' : ''; ?>>Home</a></li>
                      <li><a href="products-classic.php"<?= $page === 'products' ? ' class="is-active"' : ''; ?>>Products</a></li>
                      <li><a href="about.php"<?= $page === 'about' ? ' class="is-active"' : ''; ?>>About us</a></li>
                      <li><a href="partner.php"<?= $page === 'partner' ? ' class="is-active"' : ''; ?>>Become a partner</a></li>
                    </ul>
                  </div>
                </div>
                
                <div class="col-sm">
                  <div class="footer__section-title">Contact Us</div>
                  <div class="footer__contacts">
                    <ul>
                      <li>Phone: +861881095851</li>
                      <li>Email: @861881095851</li>
                      <li>Monday-Friday GMT+8</li>
                      <li>9:00am-12:00am,<br> 1:30pm-6:00pm</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <div class="footer__bottom">
              <div class="footer__row row align-items-center">
                <div class="col-sm">
                  <div class="footer__logo">
                    <a href="index.php">
                      <img src="images/logo.svg" alt="">
                    </a>
                  </div>
                </div>

                <div class="col-sm">
                  <div class="footer__social">
                    <ul>
                      <li><a href="#"><svg class="icon" width="21" height="21"><use xlink:href="#icon-social-ig"></use></svg></a></li>
                      <li><a href="#"><svg class="icon" width="19" height="21"><use xlink:href="#icon-social-tt"></use></svg></a></li>
                      <li><a href="#"><svg class="icon" width="30" height="21"><use xlink:href="#icon-social-yt"></use></svg></a></li>
                      <li><a href="#"><svg class="icon" width="34" height="21"><use xlink:href="#icon-social-vk"></use></svg></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-auto">
            <div class="footer__qr">
              <div class="footer__qr-item">
                <img src="images/qr.png" alt="">
              </div>
              <div class="footer__qr-item">
                <img src="images/qr.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

<div class="popup-window" id="alert-window">
  <div class="popup-window__logo">
    <img src="images/logo.svg" alt="">
  </div>
  <div class="popup-window__content">
    <h2>Please verify that you 21&nbsp;years of&nbsp;age or&nbsp;over.</h2>
    <p>we need to make sure that you can use our website</p>
  </div>
  <div class="popup-window__buttons">
    <div class="row gy-3">
      <div class="col-sm">
        <button type="button" class="btn btn_block btn_border btn_round js-years-verify-no">I am not yet 21</button>
      </div>
      <div class="col-sm">
        <button type="button" class="btn btn_block btn_round js-years-verify-yes" data-fancybox-close>I am 21+</button>
      </div>
    </div>
  </div>
</div>
<?php include("header.php") ?>
<div class="preloader">
    <div class="preloader__image"></div>
</div>
<div class="page-wrapper">

    <div class="stricky-header stricked-menu main-menu">
        <div class="sticky-header__content"></div>
    </div>
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header__bg"></div><!-- /.page-header__bg -->
        <div class="page-header-shape-1"></div><!-- /.page-header-shape-1 -->
        <div class="page-header-shape-2"></div><!-- /.page-header-shape-2 -->
        <div class="page-header-shape-3"></div><!-- /.page-header-shape-3 -->
        <div class="container">
            <div class="page-header__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index.php">Home</a></li>
                    <li><span>/</span></li>
                    <li>PLATFORMS & TRADING TOOLS</li>
                </ul>
                <h2>Charts</h2>
            </div>
        </div>
    </section>

    <div class="container" style="padding: 75px 0">
        <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div id="tradingview_ef2bf"></div>
  <div class="tradingview-widget-copyright"><a href="https://in.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text">Track all markets on TradingView</span></a></div>
  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
  <script type="text/javascript">
  new TradingView.widget(
  {
  "width": 980,
  "height": 610,
  "symbol": "NASDAQ:AAPL",
  "interval": "D",
  "timezone": "Etc/UTC",
  "theme": "light",
  "style": "1",
  "locale": "in",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "allow_symbol_change": true,
  "container_id": "tradingview_ef2bf"
}
  );
  </script>
</div>
<!-- TradingView Widget END -->
        </div>
        <section class="cta-one">
            <div class="cta-one-bg" style="
            background-image: url(assets/images/backgrounds/cta-one-bg.png);
          "></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="cta-one__inner row">
                            <div class="cta-one__left col-lg-8">
                                <h2 class="cta-one__title">
                                    Get in Touch with Us
                                </h2>
                                <p style="color: aliceblue;"> Feel free to contact us through any of the channels below, and we'll respond to your inquiry as soon as possible.</p>
                            </div>
                            <div class="cta-one__right col-lg-4" style="display: flex; justify-content: end;">
                                <a href="contact-us.php" class="thm-btn cta-one__btn">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include("footer.php") ?>
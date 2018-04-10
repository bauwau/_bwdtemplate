<!DOCTYPE html lang="en">
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="<?= $page->description ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="http://clientdomain.com<?= $page->uri ?>" />

    <title><?= $page->title ?></title>

<!-- OPEN GRAPH TAGS -->

    <!-- Use open graph tags to customize link previews. https://developers.facebook.com/docs/sharing/webmasters -->
    <meta property="og:url"           content="http://clientdomain.com<?= $page->uri ?>" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="<?= $page->title ?>" />
    <meta property="og:description"   content="<?= $page->description ?>" />
    <meta property="og:image"         content="http://clientdomain.com/path/image.jpg" />

<!-- FAVICON --><!--http://favicomatic.com-->

    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="http://clientdomain.com/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://clientdomain.com/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://clientdomain.com/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://clientdomain.com/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="http://clientdomain.com/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="http://clientdomain.com/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="http://clientdomain.com/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="http://clientdomain.com/apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="http://clientdomain.com/favicon-196x196.png" sizes="196x196" />
    <link rel="icon" type="image/png" href="http://clientdomain.com/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="http://clientdomain.com/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="http://clientdomain.com/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="http://clientdomain.com/favicon-128.png" sizes="128x128" />
    <meta name="application-name" content="Career Education Systems"/>
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="http://clientdomain.com/mstile-144x144.png" />
    <meta name="msapplication-square70x70logo" content="http://clientdomain.com/mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="http://clientdomain.com/mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo" content="http://clientdomain.com/mstile-310x150.png" />
    <meta name="msapplication-square310x310logo" content="http://clientdomain.com/mstile-310x310.png" />

<!-- STYLE -->

    <link rel="stylesheet" href="/css/normalize.min.css">
    <!-- <link rel="stylesheet/less" href="/css/main.less"> -->
    <link rel="stylesheet" href="/css/main.css">
    <!--<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700,700italic" rel="stylesheet" type="text/css">-->

<!-- DEFAULT SCRIPTS -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
    <!-- <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script> -->
    <!-- <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script> -->
    <!-- <script src="js/main.js"></script> -->

    <!-- <script src="https://use.fontawesome.com/XXXXXXXXXXXXX.js"></script> -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>

    <!--<script src="/js/vendor/dropit.js"></script>-->

<!-- set options before less.js script -->
    <!-- <script>
      less = {
        env: "development",
        async: false,
        fileAsync: false,
        poll: 1000,
        functions: {},
        dumpLineNumbers: "comments",
        relativeUrls: false,
        rootpath: ":/a.com/"
      };
    </script> -->
    <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.7.2/less.min.js"></script> -->

  </head>
  <body class="<?= $page->bodyClass ?>">
    <!--[if lt IE 7]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

<!-- TOP BAR -->

    <div class="top-bar wrapper">
      <div class="container">
        <nav role="navigation" class="nav">
          <ul>
            <li><a href="">link 1</a></li>
            <li><a href="">link 2</a></li>
            <li><a class="" rel="leanModal" name="contact" href="#contact">Contact</a></li>
            <li><a class="toggler" href="#login">Login</a></li>
          </ul>
        </nav>
        <div id="login" class="togglee">
          <form class="login">
            <input id="email" class="input" type="email" placeholder="email" required/>
            <input id="password" class="input" type="password" placeholder="password" required/>
            <input type="submit" class="primary-button" value="Login"/>
          </form>
        </div>
      </div>
    </div> <!-- top-bar wrapper -->

<!-- HEADER -->

    <header class="wrapper">
      <div class="container">
        <div class="logo-title"><a href="/"><img data-src="holder.js/250x100?outline=yes" alt="" /></a></div>
        <nav id="menu" role="navigation" class="dropdown-nav">
          <ul>
            <li><a href="">1 Link</a></li>
            <li><a href="#" tabindex="0">2 Parent <i class="fa fa-caret-down"></i></a>
              <ul>
                <li><a href="">2.1 Link</a></li>
                <li><a href="#">2.2 Parent <i class="fa fa-caret-right"></i></a>
                  <ul>
                    <li><a href="">2.2.1 Link</a></li>
                    <li><a href="">2.2.2 Link</a></li>
                    <li><a href="">2.2.3 Link</a></li>
                  </ul>
                </li>
                <li><a href="">2.3 Link</a></li>
              </ul>
            </li>
            <li><a href="">3 Link</a></li>
            <li><a href="#" tabindex="0">4 Parent <i class="fa fa-caret-down"></i></a>
              <ul>
                <li><a href="">4.1 Link</a></li>
                <li><a href="#" tabindex="0">4.2 Parent <i class="fa fa-caret-right"></i></a>
                  <ul>
                    <li><a href="">4.2.1 Link</a></li>
                    <li><a href="">4.2.2 Link</a></li>
                    <li><a href="">4.2.3 Link</a></li>
                  </ul>
                </li>
                <li><a href="">4.3 Link</a></li>
              </ul>
            </li>
            <li><a href="">5 Link</a></li>
            <li><a href="">6 Link</a></li>
          </ul>
        </nav><!-- nav -->
      </div>
    </header> <!-- header -->

<!-- BANNER/SLIDER -->

    <div class="rslides-wrapper">
      <ul class="rslides">
        <li><a href=""><p class="caption pull-left">Lorem ipsum dolor sit amet.</p><img src="/img/img-placeholder-800.jpg" alt="" /></a></li>
        <li><a href=""><p class="caption">Lorem ipsum dolor sit amet.</p><img data-src="holder.js/100%x400?outline=yes" alt="" /></a></li>
        <li><a href=""><p class="caption">Lorem ipsum dolor sit amet.</p><img data-src="holder.js/100%x400?outline=yes" alt="" /></a></li>
        <li><a href=""><p class="caption">Lorem ipsum dolor sit amet.</p><img data-src="holder.js/100%x400?outline=yes" alt="" /></a></li>
      </ul>
    </div>

<!-- MAIN -->

    <main class="wrapper">
      <div class="container">

          <?php include ($page->contentLocation); ?>

      </div>
    </main> <!-- main -->

<!-- FOOTER -->

    <footer class="wrapper">
      <div class="container">
        <nav role="navigation" class="horiz-nav">
          <ul>
            <li><a href="">link 1</a></li>
            <li><a href="">link 2</a></li>
            <li><a href="">link 3</a></li>
          </ul>
        </nav>
      </div>
    </footer> <!-- footer -->

<!-- BOTTOM BAR -->

    <div class="bottom-bar wrapper">
      <div class="container">
        <p><small>&copy; Copyrightholder. All rights reserved.</small></p>
        <p><small>Design / Hosting by <a href="http://bauwau.com" target="_blank">BauWau Design</a></small></p>
      </div>
    </div> <!-- bottom-bar -->

<!-- SLICKNAV -->

    <script src="/js/vendor/slicknav.min.js"></script>
    <script>
      $(function(){
        $('#menu').slicknav({
        label: '',
        duration: 300,
        easingOpen: 'linear',
        easingClosed: 'linear'
        })
      });
    </script>

<!-- LEAN MODAL -->

    <script src="/js/vendor/leanModal.min.js"></script>

    <!--Use when there's only one modal on a page-->
    <!--<script>$("#modal").leanModal({ top : 200, overlay : 0.4, closeButton: ".modal_close" });</script>-->

    <!--Use when there are multiple modals on a page-->
    <script>$("a[rel*=leanModal]").leanModal({ top : 200, overlay : 0.4, closeButton: ".modal_close" });</script>

<!-- TOGGLE -->
    <script type="text/javascript">
      $(document).ready(function () {
        $('.toggler').click(
          function(){
            $($(this).attr('href')).toggle('1000');
          return false;
          }
        );
      });
    </script>

<!--GOOGLE ANALYTICS -->

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>

<!-- CONTACT FORM MODAL -->

    <div id="contact" class="modal">
      <div class="modal_close"><i class="fa fa-times-circle fa-lg" aria-hidden="true"></i></div>
      <h3>Contact</h3>
      <form method="post" action="/securemail.php" name="Conact">
        <input type="hidden" name="env_report" value="REMOTE_HOST,REMOTE_ADDR,HTTP_USER_AGENT,AUTH_TYPE,REMOTE_USER" />

        <!-- STEP 2: Put your email address in the 'recipients' value.
                     Note that you also have to allow this email address in the
                     $TARGET_EMAIL setting within formmail.php!
        -->
        <input type="hidden" name="recipients" value="bauwaudesign%%@%%gmail.com" />

        <!-- STEP 3: Specify required fields in the 'required' value - or leave unchanged.
                NOTE: DO NOT put your email address and name here.
                "Your email address" and "Your name" are error messages for your users to see,
                not placeholders for you to replace.
        -->
        <input type="hidden" name="required" value="EmailAddr:Your email address,FullName:Your name,human:Must be a robot" />

        <!-- STEP 4: Put your subject line in the 'subject' value. -->
        <input type="hidden" name="subject" value="A message sent through your website contact form" />

        <!-- ALL DONE! Visit our site for HOW TO guides and more complex features. -->

        <!-- this derives (creates) "email" and "realname" special fields from the input fields -->
        <!--<input type="hidden" name="derive_fields" value="email=EmailAddr,realname=FullName,imgverify=g-recaptcha-response" />-->
        <input type="hidden" name="derive_fields" value="email=EmailAddr,realname=FullName,imgverify=g-recaptcha-response" />

        <!-- this excludes the "email" and "realname" special fields from the body of the email you receive -->
        <input type="hidden" name="mail_options" value="Exclude=email;realname" />

        <!-- redirect the user after completion -->
        <input type="hidden" name="good_url" value="/contact-thankyou.php" />
        <input type="hidden" name="bad_url" value="/contact-error.php" />

        <p><input type="text" name="FullName" class="input" placeholder="Your full name" required /></p>
        <p><input type="text" name="EmailAddr" class="input" placeholder="Your email address" required /></p>
        <p><input type="checkbox" name="mailinglist" class="radio" />Add me to your mailing list.</p>
        <!--<p><input type="checkbox" name="booking" class="radio" /> Contact me about booking.</p>-->
        <p><textarea name="mesg" class="input" placeholder="Please enter your message"></textarea></p>
        <!--<p><div class="g-recaptcha" data-sitekey="6LeVayATAAAAABgOZfwDr6F6DicTBOClLClDrAwW"></div></p>-->
        <p>Are you human or robot?<br>
        <input type="text" name="human" class="input" placeholder="Your answer (required)" pattern="human" required /></p>

        <p><input type="submit" class="primary-button" value="Send" /><!--<small><a href="#">Cancel</a></small>--></p>
      </form>
    </div>

<!-- HOLDER -->

    <script src="/js/vendor/holder/holder.js"></script>

  </body>
</html>

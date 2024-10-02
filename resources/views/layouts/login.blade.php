
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-90680653-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-90680653-2');
    </script>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <!-- <meta name="twitter:site" content="@bootstrapdash">
    <meta name="twitter:creator" content="@bootstrapdash">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Azia">
    <meta name="twitter:description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="twitter:image" content="https://www.bootstrapdash.com/azia/img/azia-social.png"> -->

    <!-- Facebook -->
    <!-- <meta property="og:url" content="https://www.bootstrapdash.com/azia">
    <meta property="og:title" content="Azia">
    <meta property="og:description" content="Responsive Bootstrap 4 Dashboard Template">

    <meta property="og:image" content="https://www.bootstrapdash.com/azia/img/azia-social.png">
    <meta property="og:image:secure_url" content="https://www.bootstrapdash.com/azia/img/azia-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600"> -->

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="BootstrapDash">

    <title>Aplikasi Skoring Seni Silat</title>

    <!-- vendor css -->
    <link href="{{ asset('azia') }}/lib/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('azia') }}/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="{{ asset('azia') }}/lib/typicons.font/typicons.css" rel="stylesheet">

    <!-- azia CSS -->
    <link rel="stylesheet" href="{{ asset('azia') }}/css/azia.css">

  </head>
  <body class="az-body">

    <div class="az-signin-wrapper">
      <div class="az-card-signin">
        <h1 class="az-logo">triple<span>-</span>s</h1>
        <div class="az-signin-header">
          <h2>Welcome back!</h2>
          <h4>Silahkan login dulu</h4>

          <form action="index.html">
            <div class="form-group">
              <label>Email</label>
              <input type="text" class="form-control" placeholder="Enter your email" value="demo@bootstrapdash.com">
            </div><!-- form-group -->
            <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control" placeholder="Enter your password" value="thisisademo">
            </div><!-- form-group -->
            <button class="btn btn-az-primary btn-block">Sign In</button>
          </form>
        </div><!-- az-signin-header -->
        <div class="az-signin-footer">
          <p>Aplikasi <strong>triple-s</strong> (skoring seni silat)</p>
          <p>Versi digunakan <strong>0.0.1</strong></p>
        </div><!-- az-signin-footer -->
      </div><!-- az-card-signin -->
    </div><!-- az-signin-wrapper -->

    <script src="{{ asset('azia') }}/lib/jquery/jquery.min.js"></script>
    <script src="{{ asset('azia') }}/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('azia') }}/lib/ionicons/ionicons.js"></script>
    <script src="{{ asset('azia') }}/js/jquery.cookie.js" type="text/javascript"></script>
    <script src="{{ asset('azia') }}/js/jquery.cookie.js" type="text/javascript"></script>

    <script src="{{ asset('azia') }}/js/azia.js"></script>
    <script>
      $(function(){
        'use strict'

      });
    </script>
  </body>
</html>

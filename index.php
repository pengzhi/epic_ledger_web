<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Sign in &middot; Epic Ledger</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }
        .middle {
            max-width: 300px;
            padding: 19px 29px 29px;
            margin: 0 auto 20px;
        }

        .nav-tabs {
            border-bottom: none;
        }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="../assets/ico/favicon.png">
  </head>

  <body>

    <div class="container">
        
        <div class="tabbable middle"> <!-- Only required for left/right tabs -->
            <ul class="nav nav-tabs" style="margin:0px">
                <li class="active"><a href="#tab1" data-toggle="tab">Sign In</a></li>
                <li><a href="#tab2" data-toggle="tab">Register</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab1">
                    <form class="form-signin">
                        <h2 class="form-signin-heading">Welcome</h2>
                        <input type="text" class="input-block-level" placeholder="Email address">
                        <input type="password" class="input-block-level" placeholder="Password">
                        <label class="checkbox">
                          <input type="checkbox" value="remember-me"> Remember me
                        </label>
                        <button class="btn btn-large btn-primary" type="submit">Sign in</button>
                    </form>
                </div>
                <div class="tab-pane" id="tab2">
                   <form class="form-signin">
                        <h2 class="form-signin-heading">Register</h2>
                        <input type="text" class="input-block-level" placeholder="Email address">
                        <input type="password" class="input-block-level" placeholder="Password">
                        <input type="password" class="input-block-level" placeholder="Re-enter Password">
                        <button class="btn btn-large btn-primary" type="submit">Sign me up</button>
                    </form>
                </div>
            </div>
        </div>



    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-1.9.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>

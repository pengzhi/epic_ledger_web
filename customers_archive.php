<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Customer &middot; Epic Ledger</title>
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

    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">

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
        
        <div class="row">
            <div class="span3">
                <ul class="nav nav-pills nav-stacked">
                    <li class=""><a href="user_account.php">Account</a></li>
                </ul>
            </div>
            <div class="span9">
                <ul class="nav nav-tabs">
                <li class="active"><a href="#">Customers</a></li>
                <li ><a class="not-purchased" href="#">Vendors</a></li>
                </ul>
            </div>
        </div>

        <div class="row">

            <div class="span3">
                <ul class="nav nav-tabs nav-stacked">
                <li class="active"><a href="user_dashboard.php">Bronze</a></li>
                <li><a href="user_account.php">Silver</a></li>
                <li><a href="user_company.php">Gold</a></li>
                <li><a href="user_company.php">Diamond</a></li>
                </ul>
            </div>
            
            <div class="span9">
                <div style="float:right">
                <p>
                <a href="customers_add.php" class="btn btn-primary" type="button">Add +</a>
                <a href="customers_archive.php" class="btn disabled" type="button">Archive</a>
                </p>
                </div>

                <div class="clearfix"></div>
                
                <div class="row">
                    <div class="span9">
                        <div class="white-box">

                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="tabs-left">
            <div class="tab-content">


            </div>
        </div>
    
    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-1.9.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>


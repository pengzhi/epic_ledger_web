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
                <ul class="nav nav-pills nav-stacked no-bottom">
                    <li class=""><a href="user_account.php">Account</a></li>
                </ul>
            </div>
            <div class="span9">
                <ul class="nav nav-tabs no-bottom">
                <li><a href="customers_add.php">Customers</a></li>
                <li class="active"><a href="#" >Vendors</a></li>
                <li class="pull-right"><a href="index.php">Log Out</a></li>
                </ul>
            </div>
        </div>

        <div class="row">

            <div class="span3">
                <ul class="nav nav-tabs nav-stacked">
                <li><a href="customers_add.php">Bronze</a></li>
                <li class="active"><a href="product_purchase.php">Silver</a></li>
                <li><a href="product_purchase.php">Gold</a></li>
                <li><a href="product_purchase.php">Diamond</a></li>
                </ul>
            </div>
            
            <div class="span9">

                <div class="row">
                    <div class="span9">
                    <div class="white-box-no-top">

<div class="row-fluid">
            <ul class="thumbnails">
              <li class="span4">
                <div class="thumbnail">
                  <img alt="300x200" data-src="holder.js/300x200" style="width: 300px; height: 200px;" src="data:image/png;base64,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">
                  <div class="caption">
                    <h3>Silver Package</h3>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p>
                        <a class="btn btn-large btn-danger" href="#">Buy</a> 
                    </p>
                  </div>
                </div>
              </li>
              <li class="span8">
                <div class="thumbnail">
                <img data-src="js/holder.js/600x150" alt="">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et vestibulum augue. Aliquam erat volutpat. Praesent egestas, nulla vitae convallis fringilla, lorem neque viverra massa, ut fringilla elit nisl ut sem.</p>
                </div>
              </li>
              <li class="span8">
                <div class="thumbnail">
                <img data-src="js/holder.js/600x150" alt="">
                <p>Quisque at felis nec est eleifend ultrices sit amet fermentum justo. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer tellus felis, facilisis ac elementum ac, lobortis at sem.</p>
                </div>              
              </li>
            </ul>
          </div>
                        
                    </div>
                </div>
            </div>

        </div>
    
    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-1.9.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/main.js"></script>
    <script src="js/holder.js"></script>
  </body>
</html>


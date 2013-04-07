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
    <link href="css/jquery.dataTables.css" rel="stylesheet">
    <link href="css/table.css" rel="stylesheet">
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
                <li class="active"><a href="#">Customers</a></li>
                <li ><a id="tab_vendors" class="not-purchased" href="#" title="Please buy the Silver package to unlock this feature">Vendors</a></li>
                <li class="pull-right"><a href="index.php">Log Out</a></li>
                </ul>
            </div>
        </div>

        <div class="row">

            <div class="span3">
                <ul class="nav nav-tabs nav-stacked">
                <li class="active"><a href="customers_add.php">Bronze</a></li>
                <li><a href="product_purchase.php">Silver</a></li>
                <li><a href="product_purchase.php">Gold</a></li>
                <li><a href="product_purchase.php">Diamond</a></li>
                </ul>
            </div>
            
            <div class="span9">
                <div class="white-box customers-action-bar">
                <div class="pull-right">
                <a href="customers_add.php" class="btn btn-primary" type="button">Add +</a>
                <a href="customers_archive.php" class="btn disabled" type="button">Archive</a>
                </div>
                </div>
 
                <div class="row">
                    <div class="span9">
                        <div class="white-box">
                            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="customers_archive_table" width="100%">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>04/12/2013</td>
                                    <td>ABC Inc.</td>
                                    <td>$50.00</td>
                                </tr>
                                <tr>
                                    <td>05/21/2013</td>
                                    <td>No Name Unlimited</td>
                                    <td>$21.00</td>
                                </tr>
                                <tr>
                                    <td>06/08/2013</td>
                                    <td>President's Choice</td>
                                    <td>$15.00</td>
                                </tr>
                                </tbody>
                            </table>
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
    <script src="js/jquery.dataTables.js"></script>
    <script src="js/main.js"></script>
    <script src="js/DT_bootstrap.js"></script>
  </body>
</html>


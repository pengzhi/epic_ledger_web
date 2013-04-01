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
                <li><a href="product_page.php">Silver</a></li>
                <li><a href="product_page.php">Gold</a></li>
                <li><a href="product_page.php">Diamond</a></li>
                </ul>
            </div>
            
            <div class="span9">
                <div style="float:right">
                <p>
                <a href="customers_add.php" class="btn btn-primary disabled" type="button">Add +</a>
                <a href="customers_archive.php" class="btn" type="button">Archive</a>
                </p>
                </div>

                <div class="clearfix"></div>
                
                <div class="navbar no-bottom" style="width:100%">
                <div class="navbar-inner">
                    <ul id="customers_ul" class="nav">
                        <li id="customers_li_1" class="active"><a href="#">Step 1</a></li>
                        <li id="customers_li_2"><a href="#">Step 2</a></li>
                        <li id="customers_li_3"><a href="#">Step 3</a></li>
                        <li id="customers_li_4"><a href="#">Confirmation</a></li>
                        <li id="customers_li_5"><a href="#">Pay</a></li>
                    </ul>
                </div>
                </div>

                <div class="row">
                    <div class="span9">
                    <form id="custormer_part1" class="white-box form-horizontal">
                            <div class="control-group">
                                <label class="control-label">From</label>
                                <div class="controls">
                                    <input type="text" class="input-small" placeholder="Enter Date">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">To</label>
                                <div class="controls">
                                    <input type="text" class="input-small" placeholder="Enter Date">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">No. of customer invoices </label>
                                <div class="controls">
                                    <input type="text" class="input-small" placeholder="1,2,10...">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">No. of Customers </label>
                                <div class="controls">
                                    <input type="text" class="input-small" placeholder="1,2,10...">
                                </div>    
                            </div>  
                            <div class="control-group">
                                <div class="controls">
                                    <button id="part1_next" type="button" class="btn btn-primary">Next</button>
                                </div>
                            </div>
                    </form>
                    <form id="custormer_part2" class="white-box form-horizontal no-display">
                            <div class="control-group">
                                <div class="controls">
                                <label class="checkbox">
                                <input type="checkbox"> Sales by Customer Report
                                </label>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls">
                                <label class="checkbox">
                                <input type="checkbox"> Complete Customer Lists 
                                </label>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls">
                                <label class="checkbox">
                                <input type="checkbox"> AR Aging Report 
                                </label>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls">
                                <label style="display:inline">No. of customer payments received</label>
                                <input type="text" class="input-small form-inline" placeholder="1,2,10...">
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls">
                                    <button id="part2_back" type="button" class="btn">Back</button>
                                    <button id="part2_next" type="button" class="btn btn-primary">Next</button>
                                </div>
                            </div>            
                    </form>

                    <form id="custormer_part3" class="white-box form-horizontal no-display">
                            <div class="control-group">
                                <label class="control-label">Your Price is</label>
                                <div class="controls">
                                    <input type="text" class="input-small" placeholder="$10.00">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Upload Your Invoices</label>
                                <div class="controls">
                                    <input type="text" class="input-medium" placeholder="click to upload">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Upload Your Deposit Slips</label>
                                <div class="controls">
                                    <input type="text" class="input-medium" placeholder="click to upload">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">&nbsp;</label>
                                <div class="controls">&nbsp;</div>    
                            </div>  
                            <div class="control-group">
                                <div class="controls">
                                    <button id="part3_back" type="button" class="btn">Back</button>
                                    <button id="part3_next" type="button" class="btn btn-primary">Next</button>
                                </div>
                            </div>                             
                    </form>

                    <form id="custormer_part4" class="white-box form-horizontal no-display">
                            <div class="control-group">
                                <label class="control-label">&nbsp;</label>
                                <div class="controls">[ list of items from previous steps.. ]</div>    
                            </div>
                            <div class="control-group">
                                <label class="control-label">&nbsp;</label>
                                <div class="controls">&nbsp;</div>    
                            </div>
                            <div class="control-group">
                                <label class="control-label">&nbsp;</label>
                                <div class="controls">&nbsp;</div>    
                            </div>
                            <div class="control-group">
                                <label class="control-label">&nbsp;</label>
                                <div class="controls">&nbsp;</div>    
                            </div>                             
                            <div class="control-group">
                                <div class="controls">
                                    <button id="part4_back" type="button" class="btn">Back</button>
                                    <button id="part4_next" type="button" class="btn btn-primary">Next</button>
                                </div>
                            </div> 
                    </form>

                    <form id="custormer_part5" class="white-box form-horizontal no-display">
                            <div class="control-group">
                                <label class="control-label">&nbsp;</label>
                                <div class="controls">[ paypal stuff here.. ]</div>    
                            </div>
                            <div class="control-group">
                                <label class="control-label">&nbsp;</label>
                                <div class="controls">&nbsp;</div>    
                            </div>
                            <div class="control-group">
                                <label class="control-label">&nbsp;</label>
                                <div class="controls">&nbsp;</div>    
                            </div>
                            <div class="control-group">
                                <label class="control-label">&nbsp;</label>
                                <div class="controls">&nbsp;</div>    
                            </div>                             
                            <div class="control-group">
                                <div class="controls">
                                    <button id="part5_back" class="btn" type="button">Back</button>
                                    <button id="part5_buy" class="btn btn-danger" type="button">Pay</button>
                                </div>
                            </div> 
                        
                        </p>
                    </form>

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


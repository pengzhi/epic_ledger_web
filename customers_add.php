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
    <link href="css/bootstrap-fileupload.css" rel="stylesheet">
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
                <a href="customers_add.php" class="btn btn-primary disabled" type="button">Add +</a>
                <a href="customers_archive.php" class="btn" type="button">Archive</a>
                </div>
                </div>

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
                                <div class="controls" style="padding-left:5px">

<div id="fileupload_1" class="fileupload fileupload-new" data-provides="fileupload">
<div class="input-append">
<div class="uneditable-input span3">
    <i class="icon-file fileupload-exists"></i> 
    <span class="fileupload-preview"></span>
</div>
<span class="btn btn-file">
<span class="fileupload-new">Select file</span>
<span class="fileupload-exists">Change</span><input type="file" /></span>
<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
</div>
</div>

<button id="add_more_files" class="btn btn-small" type="button">Add more files</button>


                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Upload Your Deposit Slips</label>
                                <div class="controls" style="padding-left:5px">
                                
<div id="fileupload_2" class="fileupload fileupload-new" data-provides="fileupload">
<div class="input-append">
<div class="uneditable-input span3">
    <i class="icon-file fileupload-exists"></i> 
    <span class="fileupload-preview"></span>
</div>
<span class="btn btn-file">
<span class="fileupload-new">Select file</span>
<span class="fileupload-exists">Change</span><input type="file" /></span>
<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
</div>
</div>

<button id="add_more_files_2" class="btn btn-small" type="button">Add more files</button>
                                
                                
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
<div class="controls">

    <div class="alert alert-block">
    <h5>
        <i class="icon-star" style="vertical-align:-15%"></i>
        Read Our Money Back Guarantee Policy
        <i class="icon-star" style="vertical-align:-15%"></i>
    </h5>
    <ol>
    <li>Nunc imperdiet aliquam urna, quis cursus massa molestie eu. Cras urna mi, laoreet sed cursus eget, auctor ut velit. Nulla faucibus ante euismod augue rutrum sit amet pharetra odio tempus.</li>
    <li>Nullam pellentesque, felis non fringilla tincidunt, metus mauris posuere justo, eu sagittis magna tellus tristique urna. Vestibulum et arcu vel sem mattis sollicitudin.</li>
    <li>Phasellus ac dolor risus. Sed vitae est in nibh ultrices rhoncus. Nulla dictum lectus vel mauris tincidunt facilisis.</li>
    </ol>
    </div>

</div>
</div>


<div class="control-group">
<div class="controls">
<h5>Terms and Conditions</h5>
</div>
<div class="controls" style="height:200px;overflow-y:auto">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum arcu eros, ullamcorper in lacinia vitae, auctor sit amet nulla. Duis pellentesque mauris risus. 
Pellentesque pulvinar suscipit odio, ut venenatis nulla dapibus eu. Duis sapien leo, consectetur sit amet cursus non, aliquet ac nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Integer eleifend arcu at lorem mollis vitae rhoncus neque laoreet. 
Sed vehicula libero sed ante imperdiet gravida. Etiam sed cursus sem. Aenean adipiscing suscipit mollis. Nunc imperdiet arcu pellentesque sem pulvinar pharetra. Fusce a lorem mauris, ut euismod orci. In eget est eu mauris fermentum mattis et et lectus.

Nunc eget dui est. Nam fermentum bibendum sem, sed venenatis turpis suscipit vel. Praesent in iaculis justo. Nulla erat orci, porttitor et mollis vitae, adipiscing vel felis. Duis scelerisque elementum ullamcorper. Cras dictum libero eu felis gravida pretium. Donec ultrices vulputate est auctor posuere. Praesent mattis, arcu eu lacinia blandit, lectus neque dignissim lectus, auctor laoreet velit massa id arcu. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse ac enim augue. Nam id mattis purus. Suspendisse potenti.
</div>
</div>

<div class="control-group">
<div class="controls">
<label class="checkbox">
<input type="checkbox"> I Accept 
</label>
</div>
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
    <script src="js/bootstrap-fileupload.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>


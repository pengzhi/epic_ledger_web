<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Company &middot; Epic Ledger</title>
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
        width:100%;
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

        <div class="row">
            <div class="span3">
                <ul class="nav nav-pills nav-stacked">
                    <li class=""><a href="customers_add.php">Dashboard</a></li>
                </ul>
            </div>
            <div class="span9">
                <legend>Edit Your Company</legend>
            </div>
        </div>

        <div class="row">

            <div class="span3">
                <ul class="nav nav-tabs nav-stacked">
                <li><a href="user_account.php">Account</a></li>
                <li class="active"><a href="user_company.php">Company</a></li>
                </ul>
            </div>
            
             <div class="span9">
                <form class="form-horizontal">

                    <div class="control-group">
                        <label class="control-label" for="CompanyName">Company Name</label>
                        <div class="controls">
                            <input type="text" id="CompanyName">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="Address">Address</label>
                        <div class="controls">
                            <input type="text" id="Address">
                        </div>
                    </div>
                    
                     <div class="control-group">
                        <label class="control-label" for="PhoneNumber">Phone #</label>
                        <div class="controls">
                            <input type="text" id="PhoneNumber">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="FaxNumber">Fax #</label>
                        <div class="controls">
                            <input type="text" id="FaxNumber">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="Email">E-mail</label>
                        <div class="controls">
                            <input type="text" id="Email">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="WebSite">Web Site</label>
                        <div class="controls">
                            <input type="text" id="WebSite">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="einssn">EIN/SSN</label>
                        <div class="controls">
                            <input type="text" id="einssn">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="FiscalYear">Fiscal Year</label>
                        <div class="controls">
                            <input type="text" id="FiscalYear">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="TaxYear">Tax Year</label>
                        <div class="controls">
                            <input type="text" id="TaxYear">
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="controls">
                            <button class="btn btn-large btn-primary" type="submit">Update</button>
                        </div>
                    </div>    
                </form>
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

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>About - Business Casual - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="brand">Clemence Store</div>
    <div class="address-bar">Mabirizi Plaza| Kampala-Uganda, CA 90210 |+256.756.841.859</div>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html">Clemence Store</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="about.html">About</a>
                    </li>
                    <li>
                        <a href="blog.html">Blog</a>
                    </li>
                    <li>
                        <a href="contact.html">Contact</a>
                    </li>
                    <li>
                        <a href="login.php">Login</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                  <hr>
                    <h2 class="intro-text text-center">
                        <strong>Clemence Store Forms</strong>
                    </h2>
                    <hr>
        
                    <h4 class="intro-text text-center">
                        <strong><a href="view.php">Store Sheet</a>&nbsp;<a href="store.php">Add Item</a>&nbsp;<a href="sub.php">Remove Item</a>
                            &nbsp;<a href="edit.php">Edit Stock</a>&nbsp;<a href="logout.php">Logout</a> </strong>
                    </h4>
                    <?php
include ("connection.php");

$strquery = "SELECT * from store_tbl where id= '" . $_GET["id"] . "' ";
$results = mysql_query ($strquery);
$row = mysql_fetch_array($results);

?>
                
                <div class="col-md-6">
                    <form id="add" name="add" method="get" action="update.php">
<table border="0" align="center">
  <tr>
    <td ><strong>Hospital Name:</strong></td>
    <td ><input name="name" type="text" id="name" value="<?php echo $row["name"]; ?>"/></td>
  </tr>
  <tr>
    <td>
     
        <strong>
        <label>Medicine Name</label></strong></td>
    <td><input name="mname" type="text" id="mname" value="<?php echo $row["mname"]; ?>"/></td>
  </tr>
  <tr><td>
  <strong>
        <label>Quantity:</label></strong></td>
    <td><input name="quantity" type="text" id="quantity" value="<?php echo $row["quantity"]; ?>"/></td>
  </tr>
  <tr><td>
  <strong>
        <label>Unit Price:</label></strong></td>
    <td><input name="uprice" type="text" id="uprice" value="<?php echo $row["uprice"]; ?>"/></td>
  </tr>
    <tr>
    <td ><strong>Item to Remove:</strong></td>
    <td ><input name="balance" type="text" id="balance" value="<?php echo $row["balance"]; ?>"/></td>
  </tr>
  <tr>
    <td><input name="id" type="hidden" id="section2"  value=" <?php echo $row["id"]; ?>" /></td>
      <td>  <input name="bprice" type="hidden" id="section3"  value=" <?php echo $row["bprice"]; ?>" /></td>
        <td><input name="tprice" type="hidden" id="section4"  value=" <?php echo $row["tprice"]; ?>" /></td>
        <td><input name="rprice" type="hidden" id="section5"  value=" <?php echo $row["rprice"]; ?>" /></td><tr>
        
    <tr><td>&nbsp;</td><td><input type="submit" name="Submit" value="Update" /></td>
  </tr>
</table>
<label><br />
</label></form>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; clemence store</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

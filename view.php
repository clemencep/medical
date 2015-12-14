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
                    <h2 class="intro-text text-center">This
                        <strong>Clemence Medical Store Sheet</strong>
                    </h2>
                    <hr>
                     <h4 class="intro-text text-center">
                        <strong><a href="view.php">Store Sheet</a>&nbsp;<a href="store.php">Add Item</a>&nbsp;<a href="sub.php">Remove Item</a>
                            &nbsp;<a href="edit.php">Edit Stock</a>&nbsp;<a href="logout.php">Logout</a> </strong>
                    </h4>
                </div>
                <div class="col-md-6">
                    <img class="img-responsive img-border-left" src="img/slide-2.jpg" alt="">
                </div>
                <div class="col-lg-12 text-center">
                <div class="col-md-6">
                 <!-- SEARCH FORM START FROM HERE -->
<form id="form1" name="form1" method="get" action="search.php">
<label>Search:
<input name="search" type="text" id="search" />
</label>
<p>
<label>
<input name="do" type="submit" id="do" value="Search" />
</label>
</p>
</form>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>

</p>

<h1 align="center">Medical Store Sheet</h1>
<table width="1000" border="1" align="center">
<tr>
<td width="289"><strong> Hospital Name</strong></td>
<td width="214"><strong>Medecine Name</strong></td>
<td width="214"><strong>Quantity</strong></td>
<td width="214"><strong>Unit Price</strong></td>
<td width="214"><strong>Removed Quant</strong></td>
<td width="214"><strong>Removed Price</strong></td>
<td width="214"><strong>Price Entered Item</strong></td>
<td width="214"><strong>Total Price</strong></td>
<td width="57"><strong> ID </strong></td>
<td width="161"><strong> Actions </strong></td>
</tr>

<?php
include ("connection.php");

$strquery="SELECT * from store_tbl";
$results=mysql_query($strquery);
$num=mysql_num_rows($results);

$i=0;
while ($i< $num)

{
$name=mysql_result($results,$i,"name");
$mname=mysql_result($results,$i,"mname");
$quant=mysql_result($results,$i,"quantity");
$unit=mysql_result($results,$i,"uprice");
$balance=mysql_result($results,$i,"balance");
$bprice=mysql_result($results,$i,"bprice");
$rprice=mysql_result($results,$i,"rprice");
$tprice=mysql_result($results,$i,"tprice");
$id=mysql_result($results,$i,"id");

?>

<tr>
<td><?php echo $name ; ?></td>
<td><?php echo $mname ; ?></td>
<td><?php echo $quant ; ?></td>
<td><?php echo $unit ; ?></td>
<td><?php echo $balance ; ?></td>
<td><?php echo $bprice ; ?></td>
<td><?php echo $rprice ; ?></td>
<td><?php echo $tprice ; ?></td>
<td><?php echo $id ; ?></td>
<td><?php echo " <a href='edit.php?do=edit&id=" . $id . "'> edit </a> "; ?> | <?php echo " <a href='delete.php?id=" . $id . "'> delete </a> "; ?></td>
</tr>

<?php

  $i++;
  }
  ?>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>

</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp; </p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>



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

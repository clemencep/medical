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
<?php
session_start();
if(isset($_SESSION['id'])!="")
{
    header("Location: store.php");
}
$sql=mysql_connect("localhost","root","")or die ("server error, check your network please and try again ");
mysql_select_db("medical_db",$sql) or die ("database  error, chek your network and try again ") ;

if(isset($_POST['signup']))
{
    $names = $_POST['names'];
    $uname = $_POST['uname'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $adresse = $_POST['adresse'];
    $upass = md5($_POST['password']);
    $a = date("y-m-d");
    
    if(mysql_query("INSERT INTO login_tbl(names,uname,tel,email,adresse,password) VALUES('$names','$uname','$tel','$email','$adresse','$upass')"))
    {
        ?>
        <script>alert('successfully registered !! Please Login ');</script>
        <?php
    }
    else
    {
        ?>
        <script>alert('error while registering you...');</script>
        <?php
    }
}
?>


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
                        <a href="about.php">About</a>
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
                    <h2 class="intro-text text-center">JOIN
                        <strong>Clemence Medical Store</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-6">
                    <img class="img-responsive img-border-left" src="img/slide-2.jpg" alt="">
                </div>
                <div class="col-md-6">
                  <form id="form1" name="form1" method="post" action="">
  <table width="200" border="0">
    <tr>
      <td colspan="2">Sign up from here</td>
    </tr>
    <tr>
      <b><td>Names</td></b>
      <td><label for="names"></label>
      <input type="text" name="names" id="names" /></td>
    </tr>
    <tr>
      <b><td>Username</td></b>
      <td><label for="uname"></label>
      <input type="text" name="uname" id="uname" /></td>
    </tr>
    <tr>
      <b><td>Phone Number</td></b>
      <td><label for="tel"></label>
      <input type="text" name="tel" id="tel" /></td>
    </tr>
    <tr>
      <b><td>Email</td></b>
      <td><label for="email"></label>
      <input type="text" name="email" id="email" /></td>
    </tr>
    <tr>
      <b><td>Adresse</td></b>
      <td><label for="adresse"></label>
      <input type="text" name="adresse" id="adresse" /></td>
    </tr>
    <tr>
      <b><td>Password</td></b>
      <td><label for="password"></label>
      <input type="password" name="password" id="password" /></td>
    </tr>
    <tr>
      <td><input type="submit" name="signup" id="signup" value="Sign Up" /></td>
      <b><td><a href="login.php">Login now</td></b>
    </tr>
  </table>
</form>

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

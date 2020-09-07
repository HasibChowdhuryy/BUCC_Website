


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BRAC University Computer Club</title>

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
	
	<!-- jQuery -->
    <script src="js/jquery.js"></script>
	


</head>

<body>

    <div class="brand"><img src="img/ClubLogo.png"></div>

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
                <a class="navbar-brand" href="index.php">BRAC University Computer Club</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">About</a>
                    </li>
                    <li>
                        <a href="eb.php">Executive Body</a>
                    </li>
					<li>
                        <a href="events.php">Events</a>
                    </li>
					<li>
                        <a href="achivements.php">Achivements</a>
                    </li>
                    <li>
                        <a href="blog.php">Blog</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">
	<div class="row"><h2 align="center"><strong>
            <div class="box">
                <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bucc";

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$bracu_id=$_POST['bracu_id'];
$bracu_department=$_POST['bracu_department'];
$vjudge_username=$_POST['vjudge_username'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO radixpc (name, email, phone, bracu_id, bracu_department, vjudge_username)
VALUES ('$name', '$email', '$phone', '$bracu_id', '$bracu_department', '$vjudge_username')";

if ($conn->query($sql) === TRUE) {
  echo "Your registeration for RADIX Programming Contest is successful.";
} else {
  echo "Error: All of the details are required";
}

$conn->close();
?>
            </div></strong></h2>
        </div>
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Registration form for 
                        <strong>RADIX Competitive Programming Contest</strong>
                    </h2>
					<div id="add_err2"></div>
                    <hr>       
                    <form role="form" action="adduser.php" method="POST">
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label>Name</label>
                                <input type="text" id="name" name="name" maxlength="25" class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Email Address</label>
                                <input type="email" id="email" name="email" maxlength="25" class="form-control">
                            </div>
							<div class="form-group col-lg-4">
                                <label>Phone</label>
                                <input type="tel" id="phone" name="phone" maxlength="15" class="form-control">
                            </div>
							<div class="clearfix"></div>
                            <div class="form-group col-lg-4">
                                <label>BRACU ID</label>
                                <input type="tel" id="bracu_id" name="bracu_id" maxlength="10" class="form-control">
                            </div>
							<div class="form-group col-lg-4">
                                <label>BRACU Department</label>
                                <input type="text" id="bracu_department" name="bracu_department" maxlength="10" class="form-control">
                            </div>
							
							
                            <div class="form-group col-lg-4">
                                <label>Vjudge ID</label>
                                <input type="text" id="vjudge_username" name="vjudge_username" maxlength="25" class="form-control">
                            </div>

                            
                            <div class="form-group col-lg-12">
                                <button type="submit" id="register" class="btn btn-default">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; BRAC Universirty Computer Club, 2020</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	<!-- jQuery -->
    <script src="js/jquery.js"></script>
	
</body>

</html>


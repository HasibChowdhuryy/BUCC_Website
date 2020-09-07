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
	
		<script type="text/javascript">
        $(document).ready(function () {

            $("#contact").click(function () {

                fname = $("#fname").val();
                email = $("#email").val();
                message = $("#message").val();

                $.ajax({
                    type: "POST",
                    url: "sendblogmsg.php",
                    data: "fname=" + fname + "&email=" + email + "&message=" + message,
                    success: function (html) {
                        if (html == 'true') {

                            $("#add_err2").html('<div class="alert alert-success"> \
                                                 <strong>Message Sent!</strong> \ \
                                                 </div>');

                        } else if (html == 'fname_long') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>First Name</strong> must cannot exceed 50 characters. \ \
                                                 </div>');
						
						} else if (html == 'fname_short') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>First Name</strong> must exceed 2 characters. \ \
                                                 </div>');
												 
						} else if (html == 'email_long') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Email</strong> must cannot exceed 50 characters. \ \
                                                 </div>');
						
						} else if (html == 'email_short') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Email</strong> must exceed 2 characters. \ \
                                                 </div>');
												 
						} else if (html == 'eformat') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Email</strong> format incorrect. \ \
                                                 </div>');
												 
						} else if (html == 'message_long') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Message</strong> must cannot exceed 50 characters. \ \
                                                 </div>');
						
						} else if (html == 'message_short') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Message</strong> must exceed 2 characters. \ \
                                                 </div>');


                        } else {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Error</strong> processing request. Please try again. \ \
                                                 </div>');
                        }
                    },
                    beforeSend: function () {
                        $("#add_err2").html("loading...");
                    }
                });
                return false;
            });
        });
    </script>

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

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
			
				<h1 class="text-center">Welcome to BUCC Blog</h1><br><h3 align="center">Read - Learn - Upgrade</h3>
                </div>
			</div>
			<div class="box">
                <div class="col-lg-12 text-center">
                    <h2>Five apps for tracking the time spent on projects<br><br><hr><h3>By Hasib Chowdhury<h3>
                        
                        <small>July 13, 2020</small>
                    </h2>
                    <p>Make sure you're compensated for every minute you put in on a project. The apps on this list will help you account for how, where, and when you spent your time.</p>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Read More</button>
                    
                </div>
			</div>
			<div class="box">
                <div class="col-lg-12 text-center">
                    <h2>86% of businesses say they're not ready for the next stage of the Data Age<br><br><hr><h3>By Hamed Efaz<h3>
                        
                        <small>July 09, 2020</small>
                    </h2>
                    <p>Businesses not only risk falling behind but become subject to and vulnerable to myriad potential cybersecurity breaches.</p>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">Read More</button>
                    
                </div>
			</div>
			<div class="box">
                <div class="col-lg-12 text-center">
                    <h2>Python programming in the final frontier: Microsoft and NASA release student learning portal.<br><br><hr><h3>By Hasib Chowdhury<h3>
                        
                        <small>June 13, 2020</small>
                    </h2>
                    <p>Sweetened with caramel sauce and topped with whipped cream, this will make you happy any time of day.</p>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal3">Read More</button>
                    
                </div>
			</div>

        </div>
		
		<div class="row">
			<div class="col-lg-12 text-center">
                    <ul class="pager">
                        <li class="next"><a href="#">Previous Blogs &rarr;</a>
                        </li>
                    </ul>
                </div></div>
		
		<div class="box">
            <div class="col-lg-12 text-center">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Publish Your Writing in 
                        <strong>BUCC Blog</strong>
                    </h2>
                    <hr>
					<p>Fill the form to apply for publishing your writings in BUCC Blog.</p>
                    <div id="add_err2"></div>
                    <form role="form">
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label>Name</label>
                                <input type="text" id="fname" name="fname" maxlength="25" class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Email Address</label>
                                <input type="email" id="email" name="email" maxlength="25" class="form-control">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label>Message</label>
                                <textarea class="form-control" id="message" name="message" maxlength="100" rows="6"></textarea>
                            </div>
                            <div class="form-group col-lg-12">                           
                                <button type="submit"  id="contact" class="btn btn-default">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

	<!-- Modal 1 -->
	<div id="myModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Five apps for tracking the time spent on projects<br><h5>By Hasib Chowdhury</h5></h4>
		  </div>
		  <div class="modal-body">
			<p>For busy consultants and freelancers, keeping track of your time is essential. If you don't stay on top of it, your billing won't be accurate and you won't be able to back up your claims if there's ever any dispute. The apps on this list will help you track and document all the time you put in on a project.<br><br>
			1: Time Fencer<br>Time Fencer is a lightweight application for tracking the time spent on projects. You can enter client information, work details, and time spent, then view this information within a report. The application is simplistic, but it might be a good choice for those who need basic time tracking capabilities without the learning curve.<br><br>
			1: Time Fencer<br>Time Fencer is a lightweight application for tracking the time spent on projects. You can enter client information, work details, and time spent, then view this information within a report. The application is simplistic, but it might be a good choice for those who need basic time tracking capabilities without the learning curve.<br><br>
			1: Time Fencer<br>Time Fencer is a lightweight application for tracking the time spent on projects. You can enter client information, work details, and time spent, then view this information within a report. The application is simplistic, but it might be a good choice for those who need basic time tracking capabilities without the learning curve.<br><br>
			1: Time Fencer<br>Time Fencer is a lightweight application for tracking the time spent on projects. You can enter client information, work details, and time spent, then view this information within a report. The application is simplistic, but it might be a good choice for those who need basic time tracking capabilities without the learning curve.<br><br>
			1: Time Fencer<br>Time Fencer is a lightweight application for tracking the time spent on projects. You can enter client information, work details, and time spent, then view this information within a report. The application is simplistic, but it might be a good choice for those who need basic time tracking capabilities without the learning curve.<br><br>
			</p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>

	  </div>
	</div>
	
	<!-- Modal 2 -->
	<div id="myModal2" class="modal fade" role="dialog">
	  <div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">86% of businesses say they're not ready for the next stage of the Data Age<br><h5>By Hamed Efaz</h5></h4>
		  </div>
		  <div class="modal-body">
			<p>Businesses not only risk falling behind but become subject to and vulnerable to myriad potential cybersecurity breaches. Eighty-six percent of organizations said today they're not ready for the fast-approaching next stage, with only 14% indicating they're prepared.<br>

But the business leaders all seem to understand the value of data: 81% responded that data is "very" or "extremely" valuable to their organization, and 47% of them admitted they fear they'll fall behind competitors.<br>
The sheer volume of data grows so exponentially, and it's faster than the average organization can keep up, the report revealed. Two-thirds (67%) of respondents expect to witness the quantity of data to grow nearly five times by 2025. <br>
The 2,260 people surveyed by TRUE Global Intelligence as directed by Splunk, are global business and IT managers from the US, France, China, Australia, UK, Germany, Japan, and the Netherlands.<br>
"The Data Age is here," said Doug Merritt, president and CEO of Splunk, in a press release. "We can now quantify how data is taking center stage in industries around the world."<br>
Emerging technologies accelerated, powered, and contributed to the continual rapid growth of data. Nearly half (49%) of respondents expect to use the emerging tech to harness data's power, but on average, only 42% of each representing the technologies (listed below) believe they have complete comprehension of all emerging tech.<br>
</p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>

	  </div>
	</div>
	
	<!-- Modal 3 -->
	<div id="myModal3" class="modal fade" role="dialog">
	  <div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Python programming in the final frontier: Microsoft and NASA release student learning portal.<br><h5>By Hasib Chowdhury</h5></h4>
		  </div>
		  <div class="modal-body">
			<p>Over the decades, NASA has inspired generations of computer scientists, astronauts, and others to broaden humankind's knowledge of the ever-expanding cosmos. In recent years, machine learning, AI, and other technologies have been tapped to assist with a host of operational tasks and procedures ranging from confirming new exoplanets to artificial intelligence (AI) astronaut assistants. To teach the next generation of computer scientists the basics of Python programming, Microsoft recently announced a partnership with NASA to create a series of lessons based on space exploration efforts.<br>

Python programming in the final frontier<br>
Overall, the project includes three different NASA-inspired lessons. These learning pathways were created by computer scientist and entrepreneur Sarah Guthals to teach programming fundamentals using space exploration challenges and themes. The Introduction to Python for Space Exploration lesson will provide students with "an introduction to the types of space exploration problems that Python and data science can influence." Made up of eight units in total, this module also details the upcoming Artemis lunar exploration mission.<br>
In another learning path, students will learn to design an AI model capable of classifying different types of space rocks depicted in random photos, according to Microsoft. However, the company recommends a "basic understanding of Python for Data Science" as a prerequisite for this particular lesson.<br>
The last of the three learning paths serves as an introduction to machine learning and demonstrates ways these technologies can help assist with space exploration operations. <br>
Students are presented real-world NASA challenges, particularly rocket launch delays, and learn how the agency can leverage machine learning to resolve the issues.<br>
The primary objective of the machine learning lesson is "to get students excited and curious to discover how machine learning could help solve other problems in space discovery and different aspects of life," according to Microsoft.</p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>

	  </div>

    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; BRAC University Computer Club, 2020</p>
                </div>
            </div>
        </div>
    </footer>


    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

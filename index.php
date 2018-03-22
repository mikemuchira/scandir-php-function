<!DOCTYPE html>
<html>
<head>
	<title> Scandir PHP func </title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/mdb.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<link rel="shortcut icon" href="assets/brand-logo.ico">

	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
</head>
<body>

<!--Navbar-->
<header>
	<nav class="navbar navbar-expand-lg navbar-light default-color lighten-4">

	    <!-- Navbar brand -->
	    <a class="navbar-brand" href="index.php">
	    	<img src="assets/brand-logo.png"> (Sir Stark)
	    </a>

	    <!-- Collapse button -->
	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav"
	        aria-expanded="false" aria-label="Toggle navigation">
	        <span class="navbar-toggler-icon"></span>
	    </button>

	    <!-- Collapsible content -->
	    <div class="collapse navbar-collapse" id="basicExampleNav">

	        <!-- Links -->
	        <ul class="navbar-nav mr-auto">
	            <li class="nav-item active">
	                <a class="nav-link" href="#">Home
	                    <span class="sr-only">(current)</span>
	                </a>
	            </li>
	            <li class="nav-item">
	                <a class="nav-link" href="#">Ultimate Hub</a>
	            </li>
	            <li class="nav-item">
	                <a class="nav-link" href="#">Cyber Cyborg Hawk</a>
	            </li>

	            <!-- Dropdown -->
	            <li class="nav-item dropdown">
	                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
	                <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
	                    <a class="dropdown-item" href="#">Action</a>
	                    <a class="dropdown-item" href="#">Another action</a>
	                    <a class="dropdown-item" href="#">Something else here</a>
	                </div>
	            </li>

	        </ul>
	        <!-- Links -->

	        <form class="form-inline">
	        	<div class="md-form mt-0">
	        		<button type="button" class="btn btn-info" data-toggle="modal" data-target="#source-code-text"> show souce code as plain text </button>
	        	</div>
	            <div class="md-form mt-0">
	                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
	            </div>
	        </form>
	    </div>
	    <!-- Collapsible content -->

	</nav>
</header>
<!--/.Navbar-->


		<div class="modal fade" id="source-code-text" tabindex="-1" role="dialog" aria-labelledby="source-code-text" aria-hidden="true">
		    <div class="modal-dialog" role="document">
		        <div class="modal-content">
		            <div class="modal-header">
		                <h5 class="modal-title" id="source-code-text"> Project Source Code as plain text </h5>
		                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		                    <span aria-hidden="true">&times;</span>
		                </button>
		            </div>
		            <div class="modal-body">
		               <?php
$myfile = fopen("source-code.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($myfile)) {
  echo fgets($myfile) . "<br>";
}
fclose($myfile);
		               ?>
		            </div>
		            <div class="modal-footer">
		                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		            </div>
		        </div>
		    </div>
		</div>

<br>
<main>
<div class="container-fluid">
<!--Card group-->
<div class="card-deck">

    <!--Card-->
    <div class="card mb-4">

        <!--Card image-->
        <div class="view overlay">
            <img class="img-fluid" src="assets/source-code.png" alt="Card image cap">
            <a href="">
                <div class="mask rgba-white-slight"></div>
            </a>
        </div>
        <!--Card image-->

        <!--Card content-->
        <div class="card-body">

            <!--Title-->
            <h4 class="card-title">Project Source code</h4>

            <!--Text-->
            <p class="card-text"> Shows the project's source code snapshot from Stark's Lab monitor.</p>

            <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#source-code"> show more </button>
        </div>
        <!--Card content-->
		<div class="modal fade" id="source-code" tabindex="-1" role="dialog" aria-labelledby="source-code" aria-hidden="true">
		    <div class="modal-dialog modal-full-height modal-top" role="document">
		        <div class="modal-content">
		            <div class="modal-header">
		                <h5 class="modal-title" id="source-code"> Project Source Code Snapshot </h5>
		                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		                    <span aria-hidden="true">&times;</span>
		                </button>
		            </div>
		            <div class="modal-body">
		               <img src="assets/source-code.png" width="100%" height="100%">
		            </div>
		            <div class="modal-footer">
		                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		            </div>
		        </div>
		    </div>
		</div>
    </div>
    <!--Card-->

    <!--Card-->
    <div class="card mb-4">

        <!--Card image-->
        <div class="view overlay">
				<img class="img-fluid" src="assets/ui.png" alt="Card image cap">
            <a href="#">
                <div class="mask rgba-white-slight"></div>
            </a>
        </div>
        <!--Card image-->

        <!--Card content-->
        <div class="card-body">
            <!--Title-->
            <h4 class="card-title">The output </h4>

            <!--Text-->
            <p class="card-text">This shows the output of this demo.</p>

            <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#output">        show more </button>
        </div>
        <!--Card content-->
		<div class="modal fade" id="output" tabindex="-1" role="dialog" aria-labelledby="output" aria-hidden="true">
		    <div class="modal-dialog modal-full-height modal-top" role="document">
		        <div class="modal-content">
		            <div class="modal-header">
		                <h5 class="modal-title" id="output">Project Output Snapshot</h5>
		                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		                    <span aria-hidden="true">&times;</span>
		                </button>
		            </div>
		            <div class="modal-body">
		                <img src="assets/ui.png" width="100%" height="100%">
		            </div>
		            <div class="modal-footer">
		                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		            </div>
		        </div>
		    </div>
		</div>
    </div>
    <!--Card-->

    <!--Card-->
    <div class="card mb-4">

        <!--Card image-->
        <div class="view overlay">
            <img class="img-fluid" src="assets/thanks.png" alt="Card image cap">
            <a href="#!">
                <div class="mask rgba-white-slight"></div>
            </a>
        </div>
        <!--Card image-->

        <!--Card content-->
        <div class="card-body">
            <!--Title-->
            <h4 class="card-title">Thank you</h4>

            <!--Text-->
            <p class="card-text">This marks the end of todays Demo. Thanks and Goodbye.</p>

            <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#end">        show more </button>
        </div>
        <!--Card content-->
		<div class="modal fade" id="end" tabindex="-1" role="dialog" aria-labelledby="end" aria-hidden="true">
		    <div class="modal-dialog modal-full-height modal-top" role="document">
		        <div class="modal-content">
		            <div class="modal-header">
		                <h5 class="modal-title" id="end">Modal title</h5>
		                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		                    <span aria-hidden="true">&times;</span>
		                </button>
		            </div>
		            <div class="modal-body">
		                <img src="assets/thanks.png" width="100%" height="100%">
		            </div>
		            <div class="modal-footer">
		                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		            </div>
		        </div>
		    </div>
		</div>
    </div>
    <!--Card-->

</div>
<!--Card group-->
</div>

</main>

<!--Footer-->
<footer class="page-footer font-small blue-grey lighten-4 pt-0">

    <div style="background-color: #21d192;">
        <div class="container">
            <!--Grid row-->
            <div class="row py-4 d-flex align-items-center">

                <!--Grid column-->
                <div class="col-12 col-md-5 text-left mb-4 mb-md-0">
                    <h6 class="mb-0 white-text text-center text-md-left">
                        <strong>Get connected with us on social networks!</strong>
                    </h6>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-12 col-md-7 text-center text-md-right">
                    <!--Facebook-->
                    <a class="fb-ic ml-0">
                        <i class="fa fa-facebook white-text mr-lg-4"> </i>
                    </a>
                    <!--Twitter-->
                    <a class="tw-ic">
                        <i class="fa fa-twitter white-text mr-lg-4"> </i>
                    </a>
                    <!--Google +-->
                    <a class="gplus-ic">
                        <i class="fa fa-google-plus white-text mr-lg-4"> </i>
                    </a>
                    <!--Linkedin-->
                    <a class="li-ic">
                        <i class="fa fa-linkedin white-text mr-lg-4"> </i>
                    </a>
                    <!--Instagram-->
                    <a class="ins-ic">
                        <i class="fa fa-instagram white-text mr-lg-4"> </i>
                    </a>
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->
        </div>
    </div>

    <!--Footer Links-->
    <div class="container mt-5 mb-4 text-center text-md-left">
        <div class="row mt-3">

            <!--First column-->
            <div class="col-md-3 col-lg-4 col-xl-3 mb-4 dark-grey-text">
                <h6 class="text-uppercase font-weight-bold">
                    <strong>Ultimate Hub</strong>
                </h6>
                <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>Simple Scandir PHP function demo by SIr Stark.</p>
            </div>
            <!--/.First column-->

            <!--Second column-->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4 dark-grey-text">
                <h6 class="text-uppercase font-weight-bold">
                    <strong>Products</strong>
                </h6>
                <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <a href="#!" class="dark-grey-text">Ultimate Hub</a>
                </p>
                <p>
                    <a href="#!" class="dark-grey-text">Sir Stark Technologies</a>
                </p>
                <p>
                    <a href="#!" class="dark-grey-text">Cyber Cyborg Hawk</a>
                </p>
                <p>
                    <a href="#!" class="dark-grey-text">Chess Masters</a>
                </p>
            </div>
            <!--/.Second column-->

            <!--Third column-->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4 dark-grey-text">
                <h6 class="text-uppercase font-weight-bold">
                    <strong>Useful links</strong>
                </h6>
                <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <a href="#!" class="dark-grey-text">Your Account</a>
                </p>
                <p>
                    <a href="#!" class="dark-grey-text">Enroll at UltimateHub Developers</a>
                </p>
                <p>
                    <a href="#!" class="dark-grey-text">Source codes</a>
                </p>
                <p>
                    <a href="#!" class="dark-grey-text">More</a>
                </p>
            </div>
            <!--/.Third column-->

            <!--Fourth column-->
            <div class="col-md-4 col-lg-3 col-xl-3 dark-grey-text">
                <h6 class="text-uppercase font-weight-bold">
                    <strong>Contact</strong>
                </h6>
                <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <i class="fa fa-home mr-3"></i> Meru 972-60200</p>
                <p>
                    <i class="fa fa-envelope mr-3"></i> sirstarktechnologies@gmail.com</p>
                <p>
                    <i class="fa fa-phone mr-3"></i> +254 719 439 141</p>
            </div>
            <!--/.Fourth column-->

        </div>
    </div>
    <!--/.Footer Links-->

    <!-- Copyright-->
    <div class="footer-copyright py-3 text-center">
        © 2018 Copyright:
        <a href="https://mdbootstrap.com/material-design-for-bootstrap/">
            <strong> SirStarktechnologies </strong>
        </a>
    </div>
    <!--/.Copyright -->

</footer>
<!--/.Footer-->

	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/mdb.min.js"></script>
</body>
</html>
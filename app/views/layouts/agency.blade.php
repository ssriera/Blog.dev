<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Stephanie Riera</title>

    <!-- Bootstrap Core CSS -->
    <link href="theme/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link href="theme/css/agency.css" rel="stylesheet">


    <!-- Custom Fonts -->
    <link href="theme/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<link rel="icon" 
      type="image/png" 
      href="theme/img/favicon.ico">

</head>



<body id="page-top" class="index">

<!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Stephanie Riera</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left">
                    <li>
                        <a href="https://github.com/ssriera"><i class="fa fa-2x fa-github"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-2x fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/in/stephanieriera/en"><i class="fa fa-2x fa-linkedin"></i></a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                   {{--  <li>
                        <a class="page-scroll" href="{{{action('PostsController@index')}}}">Blog</a>
                    </li> --}}
                    <li>
                        <a class="page-scroll" href="#skills">Skills</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Portfolio</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="{{{action('HomeController@showResume')}}}">Resume</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About Me</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    @yield('header')    

    @yield('content')
     
    @yield('contact')

   
    
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright"> &copy; Riera 2015</span>
                </div>
               
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                       <!--  <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li> -->
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- jQuery -->
    <script src="theme/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="theme/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="theme/js/classie.js"></script>
    <script src="theme/js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="theme/js/jqBootstrapValidation.js"></script>
    <script src="theme/js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="theme/js/agency.js"></script>
 
</body>

</html>

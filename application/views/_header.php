<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>WeatheredWatcher</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
     <?=link_tag('css/bootstrap.css'); ?>
     <?=link_tag('css/style.css'); ?>
    
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-146052-10']);
      _gaq.push(['_trackPageview']);
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>
  </head>
<body data-spy="scroll" data-target=".bs-docs-sidebar">
   <!-- Navbar
    ================================================== -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="./admin">weatheredwatcher</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><?=anchor('/', 'Home');?></li>
                            <li><?=anchor('about', 'About');?></li>
                            <li><?=anchor('projects', 'Projects & Portfolio');?></li>
                            <li><?=anchor('blog/', 'Blog');?></li>
                            <li><?=anchor('speaking', 'Speaking');?></li>
                            <li><?=anchor('contact', 'Contact');?></li>

            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- Subhead
================================================== -->
<header class="jumbotron subhead" id="overview">
  <div class="container">
    <h1>weatheredwatcher</h1>
    <p class="lead">creating choas since 1981.</p>
    
  </div>
</header>

  <div class="container">
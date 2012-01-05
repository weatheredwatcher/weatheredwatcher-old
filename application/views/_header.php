<!doctype html>
<!--

@name: _header.php
@description: This is the header partial for weatheredwatcher.
@author: David Duggins

-->
<head>

<title>WeatheredWatcher</title>

 <?= link_tag('stylesheets/coolblue.css'); ?>
  <?= link_tag('stylesheets/jquery.twitter.css'); ?>
  <script src="http://www.weatheredwatcher.com/javascripts/jquery-1.3.2.min.js" type="text/javascript" charset="utf-8"></script>
  <script src="http://www.weatheredwatcher.com/javascripts/jquery.twitter.js" type="text/javascript" charset="utf-8"></script>
   

<meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
<meta name="author" content="David Duggins, based on a design by Erwin Aligam - styleshout.com" />
<meta name="description" content="This is the online home for opensource enthusiast, developer and speaker David Duggins" />
<meta name="robots" content="index, follow, noarchive" />
<meta name="googlebot" content="noarchive" />
<link rel="alternate" type="application/rss+xml" href="http://feeds.feedburner.com/Weatheredwatcher"/>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-11027228-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
		<script type="text/javascript">
			$(document).ready(function() {
				$("#twitter").getTwitter({
					userName: "davidduggins",
					numTweets: 5,
					loaderText: "Loading tweets...",
					slideIn: true,
					slideDuration: 750,
					showHeading: true,
					headingText: "Latest Tweets",
					showProfileLink: true,
					showTimestamp: true
				});
			});
		</script>

<meta name="google-site-verification" content="4o679b7thPnyi9byPY6rkFqLmeT5xphjsdZWlikn6hU" />
</head>

<body>

<!--header -->
<div id="header-wrap"><div id="header">

        <a name="top"></a>

        <h1 id="logo-text"><a href="index.html" title="">weatheredwatcher</a></h1>
	
        <p id="slogan">creating chaos since 1981 </p>

        <div  id="nav">
                <ul>
                        <li><?=anchor('site/', 'Home');?></li>
                        <li><?=anchor('about', 'About');?></li>
                        <li><?=anchor('projects', 'Projects & Portfolio');?></li>
                        <li><?=anchor('blog/', 'Blog');?></li>
                        <li><?=anchor('speaking', 'Speaking');?></li>
                        <li><?=anchor('/contact', 'Contact');?></li>
                </ul>
        </div>

   <p id="rss">
      <a href="http://feeds.feedburner.com/Weatheredwatcher">Grab the RSS feed</a>
   </p>

   <form id="quick-search" method="get" action="index.html">
      <fieldset class="search">
         <label for="qsearch">Search:</label>
         <input class="tbox" id="qsearch" type="text" name="qsearch" value="Search..." title="Start typing and hit ENTER" />
         <button class="btn" title="Submit Search">Search</button>
      </fieldset>
   </form>

<!--/header-->
</div></div>


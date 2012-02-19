<!--

@name: _sidebar.php
@description: This is the blog sidebar partial for weatheredwatcher.
@author: David Duggins

-->

<!-- sidebar -->
<?
	$grav_url = "http://www.gravatar.com/avatar/" . md5("davidduggins@me.com") . "?d=" . urlencode("http://www.weatheredwatcher.com/images/DavidDuggins.jpg") . "&s=40";
	
?>
            <div id="sidebar">

    <div class="about-me">

            <h3>About Me</h3>
                  <p>
                  <a href="index.html"><?=img($grav_url);?></a>
        I was born in Greensboro NC. When I was 12 my family moved overseas to the Country of Kazakhstan. It was there I meet my wife Arina and learned the Russian Language. My wife and I live in Columbia SC with our daughter who was born in 2005. I am currently a Software Consultant that works with start-up.  I mainly build in PHP, Rails and Python.

When it comes to web-sites, I prefer to hand code my HTML. I am currently developing everything on either a Mac or Linux. I develop PHP and Ruby on Rails with TextMate and eMacs. I deploy to Linux. <a href="/about">Learn more...</a>
                            </p>

     </div>



                    <div class="sidemenu">

                            <h3>Friends/Blogroll</h3>
        <ul>
                                    <li><a href="http://www.iangreulichonline.com" title="Ian Greulich Online">Ian Greulich Online <br /></a>
                </li>
                                    <li><a href="http://jedschneider.posterous.com/" title="Jed Schneider">Jed Schneider <br />
                    <span>crashland, again</span></a>
                </li>
                                    <li><a href="http://www.nonone.org/blog" title="Abe">Blogging is Futile <br /></a>
                </li>
                                    <li><a href="http://amayita.livejournal.com/" title="Amayita">If I can't Dance to it, it's Not My Revolution <br />
                    <span>The Girl named after a Web Browser</span></a>
                </li>
                                    <li><a href="http://sylvannovelust.blogspot.com/" title="Jim Tidd">Sylvannovelust <br /></a>
                </li>
                                    <li><a href="http://graemefouste.posterous.com/" title="Graeme Fouste">Graeme Fouste <br /></a>
                </li>
   <li><a href="http://blog.linuxgrrl.com/">Máirín Duffy</a></li>
                            </ul>

                    </div>
<div id="twitter"></div>
     <div class="popular">

                            
                    </div>

  <!-- /sidebar -->
            </div>
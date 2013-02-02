<!--

@name: _sidebar.php
@description: This is the blog sidebar partial for weatheredwatcher.
@author: David Duggins

-->

<!-- sidebar -->
<?
	$grav_url = "http://www.gravatar.com/avatar/" . md5("weatheredwatcher@gmail.com") . "?d=" . urlencode("http://www.weatheredwatcher.com/images/DavidDuggins.jpg") . "&s=40";
	
?>
            <div id="sidebar" class="span3">

    <div class="about-me">

            <h3>About Me</h3>
                  <p>
                  <a href="index.html"><?=img($grav_url);?></a>
                  On a bright and cheery July day in 1981 I was born....and I have been creating chaos ever since! Nerd. Linux Geek. Free Software Evangelist. developer.
        </p>

     </div>



                    <div class="sidemenu">

                            <h3>Friends/Blogroll</h3>
        <ul>
                                    <li><a href="http://www.greulich.me/" title="Ian Greulich Online">Ian Greulich<br /></a>
                </li>
                                    <li><a href="http://jedschneider.posterous.com/" title="Jed Schneider">Jed Schneider <br />
                    <span>crashland, again</span></a>
                </li>
                                    <li><a href="http://www.noone.org/blog" title="Abe">Blogging is Futile <br /></a>
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
                    <div>
    <a href="http://debian.org/"><?=img('img/debian.png'); ?></a>
    <a href="http://www.catb.org/hacker-emblem/"><?=img('img/hacker.png'); ?></a><br />
    <a href="http://creativecommons.org/licenses/by-sa/3.0/"><?=img('img/cc-license_80x15.png'); ?></a>
    
    </div>
<div id="twitter"></div>
     <div class="popular">

                            
                    </div>
<div>
<iframe src="http://githubbadge.appspot.com/badge/weatheredwatcher?s=1" style="border: 0;height: 142px;width: 200px;overflow: hidden;" frameBorder=0></iframe>
    </div>
  <!-- /sidebar -->
            </div>
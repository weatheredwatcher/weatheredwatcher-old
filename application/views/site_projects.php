<?= $this->load->view('_header');?>
<!-- content-outer -->
<div id="content-wrap" class="clear" >

        <!-- content -->
   <div id="content">

        <!-- main -->
           <div id="main">
			<h3>Projects and Portfolio</h3>
			<p>
			<span class="project">This site</span> is really one of my little projects.  This is my new and improved site.  It's hand coded in Rails 3
			and although it is currently not functioning, it will contain my blog shortly.  I was using posterous for my blog, and my site just pulled in a RSS stream.  Now I am in the process of migrating the entries from posterous to my new system here.  It will give a bit more streamlined and together feel.
			</p>
			<h3>Sow</h3><p> Sow is an open-source script that I wrote in Ruby to create a project structure for html or php based projects.  It creates the project folder, folders for images css, and javascript.
			It also creates a XHTML Strict index.html page, as well as download three javascript libraries.  It is easy to customize for anyones needs.  You can get the code from the project page on GitHub <a href="http://github.com/weatheredwatcher/Sow">http://github.com/weatheredwatcher/Sow</a>

			It is released under the GPL.
			</p>

        <!-- /main -->
                </div>
				 <!-- sidebar -->
						     <?= $this->load->view('_sidebar');?>           
			     <!-- /sidebar -->
     

    <!-- content -->
        </div>

<!-- /content-out -->
</div>
<?= $this->load->view('_footer');?>
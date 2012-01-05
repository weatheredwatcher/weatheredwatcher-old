<?= $this->load->view('_header');?>
<!-- content-outer -->
<div id="content-wrap" class="clear" >

        <!-- content -->
   <div id="content">

        <!-- main -->
           <div id="main">
			   <div id="scrapbook">
			   <?=img('scrapbook1.jpg';)?>
			   <?=img('scrapbook2.jpg';)?>
			   <?=img('scrapbook3.jpg';)?>
			   <?=img('scrapbook4.jpg';)?>
			   </div>
			  <p>
Hey!  My name is David Duggins and this is my site!  I am a php developer living currently in Columbia SC.  I have the greatest two jobs in the world!  One, I am a freelance developer working for myself and two I am the father of an awesome little red-headed geek-girl or 6!  Take some time to look around!</p>

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
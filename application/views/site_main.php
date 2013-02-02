<?= $this->load->view('_header');?>
<!-- content-outer -->
<div id="content-wrap" class="clear" >

        <!-- content -->
   <div id="content">
    <h2>Namaste!</h2>
        <!-- main -->
           <div id="main" class="span8">
			   <div id="scrapbook">
			   <?=img('img/scrapbook1.jpg');?>
			   <?=img('img/scrapbook2.jpg');?>
			   <?=img('img/scrapbook3.jpg');?>
			   <?=img('img/scrapbook4.jpg');?>
			   </div>
			  <p>
Hey!  Welcome to my own little home on the web.  </p>

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
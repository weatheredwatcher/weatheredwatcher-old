<?= $this->load->view('_header');?>
<!-- content-outer -->
<div id="content-wrap" class="clear" >

        <!-- content -->
   <div id="content">

        <!-- main -->
           <div id="main">
<%= yield %>

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
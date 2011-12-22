<?= $this->load->view('_header');?>
<!-- content-outer -->
<div id="content-wrap" class="clear" >

        <!-- content -->
   <div id="content">

        <!-- main -->
           <div id="main">
<?php foreach($entries as $entry): ?>
	
	<?=$entry->title; ?>
	<?=$entry->entry; ?>
	

        <!-- /main -->
                </div>
	 <!-- sidebar -->
			     <?= $this->load->view('blog/_sidebar');?>           
     <!-- /sidebar -->

    <!-- content -->
        </div>

<!-- /content-out -->
</div>
<?= $this->load->view('_footer');?>
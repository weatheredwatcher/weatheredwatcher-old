<?= $this->load->view('_header');?>
<!-- content-outer -->
<div id="content-wrap" class="clear" >

        <!-- content -->
   <div id="content">

        <!-- main -->
           <div id="main">
<?php foreach($results as $entry): ?>
	
	<h3><a href="blog/page/<?=$entry->slug;?>"><?=$entry->title; ?></a></h3>
	<?=$entry->entry; ?>
<?php endforeach; ?>
<?=$links?>

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
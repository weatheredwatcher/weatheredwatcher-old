<?= $this->load->view('../../_header');?>
<!-- content-outer -->
<div id="content-wrap" class="clear" >

        <!-- content -->
   <div id="content">

        <!-- main -->
           <div id="main" class="span8">
<?php foreach($results as $entry): ?>
	
	<h3><a href="/blog/page/<?=$entry->slug;?>"><?=$entry->title; ?></a></h3>
    <i><?=$entry->timestamp; ?></i><br />
	<?=$entry->entry; ?>
<?php endforeach; ?>
<br />
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
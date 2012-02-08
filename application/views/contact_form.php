<?= $this->load->view('_header');?>


<!-- content-outer -->
<div id="content-wrap" class="clear" >

        <!-- content -->
   <div id="content">

        <!-- main -->
           <div id="main">
           
<?=form_open('contact/send_email'); ?>
<?=form_label('From:', 'from'); ?> 
<?=form_input('from', ''); ?><br />
<?=form_label('Subject:', 'subject'); ?> 
<?=form_input('subject', ''); ?><br />
<?=form_label('Message:', 'message'); ?>
<?=form_textarea('message', '',array('cols' => '50')); ?> <br />
<?=form_submit('submit', 'Submit'); ?>
<?=form_close(); ?>


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
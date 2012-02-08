<?= $this->load->view('_header');?>

<?php

$from_data = array(
              'name'        => 'from',
              'maxlength'   => '100',
              'size'        => '50'
              );
$message_data = array(
              'name'        => 'message',
              'cols'        => '50'
              );

?>
<!-- content-outer -->
<div id="content-wrap" class="clear" >

        <!-- content -->
   <div id="content">

        <!-- main -->
           <div id="main">
           
<?=form_open('contact/send_email'); ?>
<?=form_label('From:', 'from'); ?> 
<?=form_input($from_data); ?><br />
<?=form_label('Subject:', 'subject'); ?> 
<?=form_input('subject', ''); ?><br />
<?=form_label('Message:', 'message'); ?>
<?=form_textarea($message_data); ?> <br />
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
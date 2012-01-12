<?php

$login = array(
              'name'        => 'login',
              'id'          => 'login',
              'value'       => 'Username',
              'maxlength'   => '100',
              'size'        => '50',
              'onClick'     => 'form_onCLick()',
              'onFocus'     => 'form_onFocus()'
               );


$password = array(
             'name'        => 'password',
             'id'          => 'password',
             'value'       => '',
             'maxlength'   => '100',
		  	 'type'        => 'password',
             'size'        => '50',
             'onClick'     => 'form_onCLick()',
             'onFocus'     => 'form_onFocus()'
              );


$submit = array(
    'name' => 'submit',
    'class' => 'submit',
	'width' => '100',
    'value' => 'Submit',
    'type' => 'submit'
);
$attributes = array('class' => 'login', 'id' => 'login_form');

?>
<?php $this->load->view("admin/_header.php");?>
	<!-- Navigation -->
	
		<div class="navigation">
				<ul>
					<li><?=anchor('admin/write', 'WRITE');?></li>
					<li><?=anchor('admin/manage', 'MANAGE');?></li>
					<li><?=anchor('admin/settings', 'SETTINGS');?></li>
					<li><?=anchor('admin/users', 'USERS');?></li>
				</ul>
			
				<div id="searchform">
					<form method="get" action="">
					<input value="find something good..." class="search_box" name="search" onclick="this.value='';" type="text">
					<input class="search_btn" value="SEARCH" type="submit">
					</form>
				</div>
			
		</div>
		
		<div class="clear"></div>
	
	
		<div class="content">
			<!-- Intro -->

						<div class="in author">
							<h2>Login:</h2>
							<p></p>
						</div>

						<div class="line"></div>
	<!-- Login Form -->
	
						<form method='post' action='/admin/auth'>
						Username<br />
						<input type='text' name='login[username]' value='' /><br /><br />
						Password<br />
						<input type='password' name='login[password]' value='' /><br /><br />
						<input type='submit' value='Login'>
						</form>
				
	
	

		
		</div>
		
		
		<?php $this->load->view('admin/_footer');?>		
		
	</div>


</body></html>
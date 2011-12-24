<?php $this->load->view("admin/_header.php");?>
	<!-- Navigation -->
	
		<div class="navigation">
				<ul>
					<li><?=anchor('admin/write', 'WRITE');?></li>
					<li><?=anchor('admin/manage', 'MANAGE', 'class="active"');?></li>
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
							<h2>Settings</h2>
							<p></p>
						</div>

						<div class="line"></div>
	<!-- Checks -->
	
			<div class="check_main">
					
				<div class="check">
					<div class="good">Currently there are no custom setting for this site.</div>
				</div>
				
				
			</div>
			
		
				
				
	
	

		
		</div>
		
		
		<?php $this->load->view('admin/_footer');?>		
		
	</div>


</body></html>
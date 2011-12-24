<?php $this->load->view("admin/_header.php");?>
	<!-- Navigation -->
	
		<div class="navigation">
				<ul>
					<li><?=anchor('admin/write', 'WRITE');?></li>
					<li><?=anchor('admin/manage', 'MANAGE');?></li>
					<li><?=anchor('admin/settings', 'SETTINGS');?></li>
					<li><?=anchor('admin/users', 'USERS', 'class="active"');?></li>
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
							<h2>User Management</h2>
							<p></p>
						</div>

						<div class="line"></div>
	<!-- Checks -->
	
			<div class="check_main">
					
				<div class="check" style="display:none;">
					<div class="good"><img src="stylesheets/check.gif" alt="check" class="icon">Nice work <strong>Ninja Admin!</strong></div>
				</div>
				<div class="check" style="display:none;">
					<div class="bad"><img src="stylesheets/x.gif" alt="check" class="icon">You need more training, please <a href="#">try again</a>.</div>
				</div>
				
			</div>
			
			<div class="in">			
				<table class="table_main" border="0" cellpadding="10" cellspacing="0" width="850">
				  <tbody><tr style="background-color: rgb(217, 216, 216); font-size: 14px;">
					<td width="179"><strong>USER</strong></td>
					<td width="184"><strong>EMAIL</strong></td>
					<td width="273"><strong>PASSWORD</strong></td>
					<td width="132"><strong>DO IT</strong></td>
				  </tr>
				  <?php foreach($users as $user): ?>
					<tr>
					
					<td><?=$user->username;?></td>
					<td><a href="mailto:<?=$user->email;?>"><?=$user->email;?></a></td>
					<td><?=$user->password;?></td>
					<td><a href="#">EDIT  </a><span class="v_line">| </span> <a href="#" class="delete">DELETE </a></td>
				  </tr>
				<?php endforeach; ?>
				</tbody></table>

			</div>
				
				
	
	

		
		</div>
		
		
		<?php $this->load->view('admin/_footer');?>		
		
	</div>


</body></html>
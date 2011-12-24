<?php $this->load->view("admin/_header.php");?>
	<!-- Navigation -->
	
		<div class="navigation">
				<ul>
					<li><a href="#">WRITE</a></li>
					<li><a href="#">MANAGE</a></li>
					<li><a href="#">SETTINGS</a></li>
					<li><a href="#" class="active">USERS</a></li>
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
							<h2>Write a New Post</h2>
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
					<td width="273"><strong>SOMETHING</strong></td>
					<td width="132"><strong>DO IT</strong></td>
				  </tr>
				  <tr class="gray">
					<td>Bruce Lee </td>
					<td><a href="#">bruce@kungfu.com</a></td>
					<td>Loriem ipsum dolor sit amet </td>
					<td><a href="#">EDIT  </a><span class="v_line">| </span> <a href="#" class="delete">DELETE </a></td>
				  </tr>
				  <tr>
					<td>Jackie Chan</td>
					<td><a href="#">thechan@yahoo.com</a></td>
					<td>Loriem ipsum dolor sit amet </td>
					<td><a href="#">EDIT  </a><span class="v_line">| </span> <a href="#" class="delete">DELETE </a></td>
				  </tr>
				  <tr class="gray">
					<td>John Claude Van Damme</td>
					<td><a href="#">vandamme@gmail.com</a></td>
					<td>Loriem ipsum dolor sit amet </td>
					<td><a href="#">EDIT  </a><span class="v_line">| </span> <a href="#" class="delete">DELETE </a></td>
				  </tr>
				   <tr>
					<td>Ben Johnson </td>
					<td><a href="#">ben@kungu.com</a></td>
					<td>Loriem ipsum dolor sit amet </td>
					<td><a href="#">EDIT  </a><span class="v_line">| </span> <a href="#" class="delete">DELETE </a></td>
				  </tr>
				</tbody></table>

			</div>
				
				
	
	

		
		</div>
		
		
		<?php $this->load->view('admin/_footer');?>		
		
	</div>


</body></html>
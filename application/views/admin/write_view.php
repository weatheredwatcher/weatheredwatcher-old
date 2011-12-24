<?php $this->load->view("admin/_header.php");?>
	<!-- Navigation -->
	
		<div class="navigation">
					<ul>
						<li><?=anchor('admin/write', 'WRITE', 'class="active"');?></li>
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
			
	<!-- Form -->

				<div class="in forms">
					<form id="form1" name="form1" method="post" action="admin/insert_page">
	
      				<p><strong>TITLE</strong><br>
					<input name="name" class="box" type="text"></p>
					 
	  				<p><strong>AUTHOR</strong><br>
							<select name="date_end" class="box2">
        					<?php foreach($authors as $author):?>
                             <option><?=$author->username?></option>
							<?php endforeach;?>
					  </select></p>
					
	  				<p><strong>STORY</strong><br>
					<textarea name="mes" rows="5" cols="30" class="box"></textarea></p> 

					<p><input name="submit" id="submit" tabindex="5" class="com_btn" value="SUBMIT" type="submit"></p>
					</form>
			
				</div>
				
				
				
	
	

		
		</div>
		
		
		<?php $this->load->view('admin/_footer');?>		
		
	</div>


</body></html>
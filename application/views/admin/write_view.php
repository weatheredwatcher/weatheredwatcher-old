<?php $this->load->view("admin/_header.php");?>
	<!-- Navigation -->
	
		<div class="navigation">
				<ul>
					<li><a href="#" class="active">WRITE</a></li>
					<li><a href="#">MANAGE</a></li>
					<li><a href="#l">SETTINGS</a></li>
					<li><a href="#">USERS</a></li>
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
					
				<div class="check">
					<div class="good" style="display:none;"><img src="stylesheets/check.gif" alt="check" class="icon">Nice work <strong>Ninja Admin!</strong></div>
				</div>
				<div class="check">
					<div class="bad" style="display:none;"><img src="stylesheets/x.gif" alt="check" class="icon">You need more training, please <a href="#">try again</a>.</div>
				</div>
				
			</div>
			
	<!-- Form -->
			
				<div class="in forms">
					<form id="form1" name="form1" method="post" action="">
	
      				<p><strong>TITLE</strong><br>
					<input name="name" class="box" type="text"></p>
					 
	  				<p><strong>AUTHOR</strong><br>
							<select name="date_end" class="box2">
        					<option selected="selected"> Bruce Lee</option>
							<option>Jackie Chan</option>
        					<option>John Claude Van Damme</option>
        					<option>Ben Johnson</option>
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
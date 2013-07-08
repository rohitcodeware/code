<table><!--login_form_table_open-->
		<tr><!--login_form_tr_open-->
			<td id="td_left"><bR /><!--td_left_open-->
					<script src="js/video.js"></script><br /><br /><br /><br />
					<video id="my_video_1" class="video-js vjs-default-skin" controls preload="auto" width="640" height="345" poster="my_video_poster.png" data-setup="{}">
					<source src="video/movie.mp4" type='video/mp4'>
					</video>
			</td><!--td_left_closed-->
			<td id="td_right"><br /><!--td_right_open-->
				<h2>LOGIN</h2>
				<div id="login_form"><br /><!--login_form_Open-->
					<center>
					<form method="" action=""><!--login_form_open-->
							<input type="text" value="Email or Username"  class="logintext" onclick="if(this.value=='Email or Username'){this.value=''}" onblur="if(this.value==''){this.value='Email or Username'}">
				
							<input type="text" value="Password" class="logintext" onclick="if(this.value=='Password'){this.value=''}" onblur="if(this.value==''){this.value='Password'}" style="margin:10px" />
							<input type="submit" name="" value="Login" title="Login" /> &nbsp;&nbsp;&nbsp;&nbsp;<a href="forgotPassword.php">Forgot password?</a><br /><br />
					</form><!--login_form_closed-->
					<div id="login_or" style="position:relative; top:12px !important; top:0px;"></div>
					</center>
				</div><!--login_form_Closed-->
				<div id="fb_tw_div"><!--fb_tw_div_Open-->
					<center>
							<a href="#"><p id="fb" title="facebook"></p></a>
							<a href="#"><p id="tw" title="twitter"></p></a>
					</center>
				</div><!--fb_tw_div_Closed-->
			</td><!--td_right_closed-->
		</tr><!--login_form_tr_closed-->
</table><!--login_form_table_closed-->
<?php 
include("./php/Auth.php"); //include auth.php file on all secure pages 
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Merge</title>
		
		<link rel="stylesheet" type="text/css" href="css/settings.css">
		<script src="client.js" type="text/javascript"></script><!-- just in order to work with Flujd, an npm package for live programming -->
        <script src="js/ajax.js" type="text/javascript"></script>
		<script src="js/settings.js" type="text/javascript"></script>
	</head>
	<body onload="fetch_info()">
		<header id="header" >
			<span id="logo_container">
				merge
			</span>
			<nav class="navs">
				<ul class="navs_ul">
					<li class="navs_li">
						<a id="desk_link" href="http://localhost/merge/main.php">
							<img id="desk_img" alt="back_arrow" src="assets/img/back_arrow.png" />
							My desk
						</a>	
					</li>
					<li class="navs_li" id="logout">
						<a id="logout_link" href="php/Logout.php">
							<img id="logout_img" alt="logout" src="assets/img/logout.png" />
						</a>
					</li>
				</ul>
			</nav>
		</header>
		<header id="settings_header">
			<span>
				Account Settings
			</span>
		</header>
		
		<div class="card">
			<div class="card_title" id="space_left">
				<p>Space left</p>
			</div>
		</div>
		<div class="card">
			<div class="card_title">
				<p>Personal settings</p>
			</div>
			<div class="card_content">
				<table>
					<tr>
						<td class="row_title">Nickname</td>
						<td id="nickname">
                        
                        </td>
						<td class="modify" onclick="showChangeName()">
							<img class="edit" alt="edit" src="assets/img/edit.png">
							Modify
						</td>
					</tr>
					<tbody class="change" id="change_name_id">
						<tr>
							<th>New nickname</th>
							<td>
								<input class="validate" name="name" type="text" placeholder="new nickname"
                                       id="newnick" required>
							</td>
						</tr>
						<tr>
							<td></td>
							<td class="confirm">
								<button onclick="modify_nick()">CONFIRM</button>
							</td>
						</tr>
					</tbody>
					<tr>
						<td class="row_title">Mail</td>
						<td id="email">
                        
                        </td>
						<td class="modify" onclick="showChangeMail()">
							<img class="edit" alt="edit" src="assets/img/edit.png">
							Modify
						</td>
					</tr>
					<tbody class="change" id="change_mail_id">
						<tr>
							<th>New mail</th>
							<td>
								<input class="validate" name="mail" type="text" placeholder="new mail" id="Email" required>
							</td>
						</tr>
						<tr>
							<td></td>
							<td class="confirm">
								<button onclick="modify_email()">CONFIRM</button>
							</td>
						</tr>
					</tbody>
					<tr>
						<td class="row_title">Password</td>
						<td>****</td>
						<td class="modify" onclick="showChangePassword()">
							<img class="edit" alt ="edit" src="assets/img/edit.png">
							Modify
						</td>
					</tr>
					<tbody class="change" id="change_password_id">
						<tr>
							<th>Old password</th>
							<td>
								<input class="validate" name="username" id="oldpassword" type="password" placeholder="**********" required>
							</td>
						</tr>
						<tr>
							<th>New password</th>
							<td>
								<input class="validate" id="password" name="username" type="password" placeholder="**********" required>
							</td>
						</tr>
						<tr>
							<th>Confirm password</th>
							<td>
								<input class="validate" id="confirmed_password" name="username" type="password" placeholder="**********" required>
							</td>
						</tr>
						<tr>
							<td></td>
							<td class="confirm">
								<button onclick="validate()">CONFIRM</button>
							</td>
						</tr>
					</tbody>
					<tr>
						<td class="row_title">Image</td>
						<td id="profile_pic">
							
						</td>
						<td class="modify" >
							<!-- <img class="edit" src="assets/img/edit.png">
							Modify-->
                            <label>
                                <div>
                                        <img class="edit" alt="edit" src="assets/img/edit.png">
							             Modify
                                </div>
                                 <form id="file-form" method="POST" enctype= "multipart/form-data">
                                <input type="file" id="prof_pic" hidden name="input_file" onchange="upload_profile_pic()"/>
                                </form>
                            </label>
						</td>
					</tr>
				</table>
			</div>
		</div>
		<div class="card">
			<div class="card_title" id="danger_zone_title">
				<p>Danger zone</p>
			</div>
			<div class="card_content" id="danger_zone_content" onclick="delete_profile()">
				<p>Delete account</p>
			</div>
		</div>
	</body>
</html>
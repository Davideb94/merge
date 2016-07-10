<?php 
include("./php/Auth.php"); //include auth.php file on all secure pages 
?>

<!DOCTYPE html>
<html>
	
	<head>
		<meta charset="utf-8">
		<title>Merge</title>
		
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<script src="client.js" type="text/javascript"></script><!-- just in order to work with Flujd, an npm package for live programming -->
		<script src="js/main.js" type="text/javascript"></script>
        <script src="js/ajax.js" type="text/javascript"></script>
	</head>
	
	<body onload="start()">
		<header id="header">
			<div id="logo_container">
				<p>merge</p>
			</div>
			<ul class="navs_ul" id="hamburger_menu">
				<li onclick="showMenu()" class="navs_li">
					<div class="vertical_center"></div>
					<div class="vertical_center">
						<img class="navs_img" src="assets/img/hamburger.png" alt="hamburger"/>
					</div>
					<div class="vertical_center"></div>
				</li>
			</ul>
			<nav class="navs">
				<ul class="navs_ul" id="navs_ul">
					<li class="navs_li" id="search_block">
						<div class="vertical_center"></div>
						<div class="vertical_center">
							<input id="search" type="text" placeholder="search@mail.com" onkeyup="showResult(this.value)"
                            onblur="closeresult()">
							<img src="assets/img/search.svg" alt="search" id="search_icon">
						</div>
                        <!-- searching -->
                        <span id="result_search">
                            
                        </span>
                        
						<div class="vertical_center"></div>
					</li>
					<li class="navs_li" onclick="showNotifications()">
						<div class="vertical_center"></div>
						<div class="vertical_center">
							<a href="#">
								<img class="navs_img" alt="notification" src="assets/img/notification.svg" />
							</a>
						</div>
						<div class="vertical_center"></div>
						<!-- drop down menu -->
						<span id="notifications_menu">
						</span>
					</li>
				  	<li class="navs_li" onclick="window.location.href='http://localhost/merge/settings.html'">
						<div class="vertical_center"></div>
						<div class="vertical_center">
							<a href="http://localhost/merge/settings.html">
								<img class="navs_img" alt="settings" src="assets/img/settings.svg" />
							</a>
						</div>
						<div class="vertical_center"></div>
					</li>
					<li class="navs_li" id="profile_elem">
					
					</li>
					<li class="navs_li" id="logout">
						<div class="vertical_center"></div>
						<div class="vertical_center">
							<a href="php/Logout.php">
								<img id="logout_img" alt="logout" src="assets/img/logout.png" />
							</a>
						</div>
						<div class="vertical_center"></div>
					</li>
				</ul>
			</nav>
		</header>
		
		<aside>
			<div class="aside_container" id="desks"><!--UI BUG: aside_title must stay on top when scrolling-->
				<div class="aside_title">
					<img id="desk_pic" alt="desk" src="assets/img/desk.png"/>
					DESKS
				</div>
				<div class="list_container">
					<ul class="aside_list" id="aside_list_desks">	
                            <!--
                                HERE PHP REALTIME CONTENT

                            -->
                       
					</ul>
				</div>
			</div>
			
			<div class="aside_container" id="people">
				<div class="aside_title">
					<img id="people_pic" alt="people" src="assets/img/people.png"/>
					PEOPLE
				</div>
				<div class="list_container">
					<ul class="aside_list" id="aside_list_contacts">
							<!--
                                HERE PHP REALTIME CONTENT

                            -->		
					</ul>
				</div>
			</div>
		</aside>
		<main>
			<ul class="tab_head">
				<li id="my_desk_tab" class="tab_active" onclick="openTab('mydesk')">
					<a href="#" id="link_mydesk">My Desk</a>
				</li>
				<li id="others_tab" onclick="openTab('others')">
					<a href="#" id="link_others">Others</a>
				</li>
			</ul>
			<div id="my_desk" class="tab">
				<!--
                    HERE PHP REALTIME CONTENT

                -->
			</div>
			<div id="others" class="tab">
                <!--
                    HERE PHP REALTIME CONTENT

                -->
			</div>
            <form id="file-form" method="POST" enctype= "multipart/form-data">
				<label>
                    <div class="add_file" id="add_button">
						<div class="plus">+</div>
					</div>
					<input type="file" id="input_file" name="input_file" onchange="loadfile()" multiple/>
                </label>
            </form>
		</main>
	</body>
	
</html>

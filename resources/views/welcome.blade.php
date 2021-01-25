<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<meta name="Wallington Academy - After School Tutorials" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="/assets/style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
    }
    
    body {
      font-family: "Nunito", sans-serif;
    }
    
    /* Navigation */
    
    .nav-container {
      position: absolute;
      width: 100%;
      height: 90px;
      left: 0px;
      top: 0px;
    
      filter: drop-shadow(0px 16px 60px rgba(0, 0, 0, 0.08));
    }
    
    .logo {
      padding-left: 50px;
      height: 109px;
    }
    .wrapper {
      max-width: 100%;
      margin: 0, auto;
    }
    
    nav {
      display: flex;
      align-items: center;
      justify-content: space-between;
      font-size: 18px;
    }
    
    nav ul {
      display: flex;
    }
    
    .nav-items li {
      list-style: none;
      margin-right: 20px;
    }
    
    .nav-buttons {
      padding-right: 50px;
    }
    
    .nav-buttons li {
      list-style: none;
      margin-left: 20px;
    }
    .nav-items li a {
      text-decoration: none;
      color: #333333;
      font-weight: 600;
      line-height: 25px;
    }
    .nav-buttons li a {
      text-decoration: none;
      font-weight: 600;
    }
    
    .login {
      text-decoration: none;
      color: #333333;
      font-weight: 600;
      line-height: 25px;
    }
    .reg-button {
      background: #1d6771;
      padding: 13px 41px;
      font-size: 16px;
      color: white;
      font-weight: 600;
      width: 124px;
      height: 48px;
      left: 1241px;
      top: 21px;
      border-radius: 8px;
    }
    
    .hero-content {
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      padding: 0px;
    
      position: absolute;
      width: 564px;
      height: 337px;
      left: 50px;
      top: 226px;
    }
    .person-image {
      position: absolute;
      width: 810px;
      height: 602px;
      right: 50px;
      top: 50px;
    }
    .person-study {
      height: 602px;
    }
    .tagline {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: flex-start;
      padding: 0px;
    
      position: static;
      width: 564px;
      height: 237px;
      left: 0px;
      top: 0px;
    }
    
    .hero-text {
      /* 11 Plus Exam */
    
      position: static;
      width: 564px;
      height: 78px;
      right: 0px;
      top: calc(50% - 78px / 2);
    
      font-family: Nunito;
      font-style: normal;
      font-weight: bold;
      font-size: 58px;
      line-height: 120%;
      /* identical to box height, or 78px */
    
      letter-spacing: 0.2px;
    
      color: #333333;
    }
    .sub-hero-text {
      position: static;
      height: 55px;
      right: 217px;
      top: calc(50% - 55px / 2 + 7px);
    
      font-family: Nunito;
      font-style: normal;
      font-weight: bold;
      font-size: 38px;
      line-height: 120%;
      /* or 55px */
    
      letter-spacing: 0.2px;
    
      color: #333333;
    
      /* Inside Auto Layout */
    
      flex: none;
      order: 1;
      flex-grow: 0;
      /* margin: 0px 20px; */
    }
    .sub-sub-hero-text {
      position: static;
      width: 475px;
      height: 64px;
      right: 89px;
      top: calc(50% - 64px / 2 + 86.5px);
    
      font-family: Nunito;
      font-style: normal;
      font-weight: normal;
      font-size: 20px;
      line-height: 160%;
      /* or 32px */
    
      color: #666666;
    
      /* Inside Auto Layout */
    
      flex: none;
      order: 2;
      flex-grow: 0;
      /* margin: 0px 20px; */
    }
    
    .phone-number {
      display: flex;
      flex-direction: row;
      align-items: center;
      padding: 0px;
    
      position: static;
      width: 461px;
      height: 60px;
      left: 0px;
      top: 277px;
    
      filter: drop-shadow(0px 10px 20px rgba(0, 0, 0, 0.1));
    
      /* Inside Auto Layout */
    
      flex: none;
      order: 1;
      flex-grow: 0;
    }
    input::placeholder {
      position: absolute;
      width: 152px;
      height: 18px;
      left: 30px;
      top: 21px;
    
      font-family: Nunito;
      font-style: normal;
      font-weight: normal;
      font-size: 16px;
      line-height: 18px;
      /* identical to box height, or 112% */
    
      display: flex;
      align-items: center;
      text-transform: capitalize;
    
      color: #999999;
    }
    
    input {
      position: absolute;
      width: 461px;
      height: 60px;
      left: 0px;
      top: 0px;
      background: #ffffff;
      border: 1px solid #1d6771;
      box-sizing: border-box;
      border-radius: 8px;
      /* margin: 10px; */
      padding-left: 30px;
    }
    .join-button {
      display: flex;
      flex-direction: row;
      align-items: center;
      padding: 13px 18px;
    
      position: absolute;
      width: 106px;
      height: 44px;
      right: 8px;
      top: calc(50% - 44px / 2);
    
      background: #1d6771;
      border-radius: 8px;
    
      font-style: normal;
      font-weight: bold;
      font-size: 14px;
      line-height: 18px;
    
      display: flex;
      align-items: center;
      text-align: center;
      justify-content: center;
      letter-spacing: 0.3px;
      text-decoration: none;
      color: #ffffff;
    }
    </style>
</head>

<body>
	<!--[if lt IE 7]>
			<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->

	<div class="nav-container">
		<div class="wrapper">
			<nav>
				<div class="logo">
					<img src="/assets/assets/logo.png" alt="wallington-logo">
				</div>
				<ul class="nav-items">
					<li><a href="classes.html">Live Classes</a></li>
          <li><a href="packages.html">Packages</a></li>
					<li><a href="packages.html">11+Exam</a></li>
					<li><a href="study-material.html">Study Material</a></li>
				</ul>
				<ul class="nav-buttons">
          <li><a class="reg-button" href="http://academy.test/login">Login</a></li>
				</ul>
			</nav>
		</div>
	</div>
	<div class="header-container">
		<div class="wrapper">
			<div class="hero-content">
				<div class="tagline">
					<div class="hero-text">11 Plus Exam</div>
					<div class="sub-hero-text">Prepare With Us</div>
					<div class="sub-sub-hero-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quaerat,
						fuga
						corrupti!</div>
				</div>
				<form class="phone-number">
					<input type="text" id="phone-number" name="phone-number" placeholder="Enter Mobile Number"><br>
					<a href="#join-now" class="join-button">Join Now!</a>
				</form>

			</div>
			<div class="person-image">
				<img src="/assets/assets/person-animated.gif" alt="studying-student-animation" class="person-study">
			</div>
		</div>
	</div>
	<!-- <script src="" async defer></script> -->
</body>

</html>
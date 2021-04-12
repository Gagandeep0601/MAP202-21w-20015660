<?php

if (!isset($_SESSION['auth'])) {
    header('Location: /login');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous"> 
		<link rel="stylesheet" href="https://bootswatch.com/4/darkly/bootstrap.min.css"> <!--theme is added -->
        <link rel="icon" href="/favicon.png">
        <title>MAP 202</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="mobile-web-app-capable" content="yes">
    </head>
    <body>

		<!-- nav bar is added -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/home">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/courses">Departments</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/insert">Insert Detail</a>
      </li>
		<li class="nav-item">
        <a class="nav-link" href="/staff">Staff Detail</a>
      </li>
		<li class="nav-item">
        <a class="nav-link" href="/manager">Manager Detail</a>
      </li>
		 <li class="nav-item">
        <a class="nav-link" href="/admin">Admin Detail</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/register/delete">Delete Account</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="/logout/index">Logout</a>
      </li>
    </ul>
 </div>
</nav>
	<span class="badge badge-info"><?= $_SESSION['weather']?></span>
        <!--
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="/home">COSC</a>
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <div class="navbar-collapse collapse" id="navbar-main">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/logout">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
        -->
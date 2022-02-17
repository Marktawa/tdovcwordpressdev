<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" media="all" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<script type="text/javascript">
	function myFunction() {
    var x = document.getElementById("navbar-small");
    if (x.style.display === "block") {
      x.style.display = "none";
    } else {
      x.style.display = "block";
    }
  }
</script>

<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Twatasha Disabled and OVC Organization</title>
  <?php wp_head();?>
</head>

<body>
  <div id="page-wrapper">
    <header id="header-large">
      <a href="#" id="logo-placeholder">Twatasha Disabled & OVC Organisation</a>
      <nav id="navbar">
        <a href="pages/about-us.html">About Us</a>
        <a href="pages/news/index.html">News</a>
        <a href="pages/our-work.html">Our Work</a>
        <a href="pages/contact-us.html">Contact Us</a>
        <a href="pages/donate.html">Donate</a>
      </nav>
    </header>
    <header id="header-small">
      <a href="#" id="logo-small">Twatasha Disabled & OVC Organisation</a>
      <a href="#" id="logo-smallest">TDOVC</a>
      <nav id="navbar-small">
        <a href="pages/about-us.html">About Us</a>
        <a href="pages/news/index.html">News</a>
        <a href="pages/our-work.html">Our Work</a>
        <a href="pages/contact-us.html">Contact Us</a>
        <a href="pages/donate.html">Donate</a>
      </nav>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
      </a>
    </header>
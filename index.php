<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<title>作者专用</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


下载的font-awesome.min.css无法使用，原因未知 
<link rel="stylesheet" href="/css/font-awesome.min.css">-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="/css/w3.css">
<link rel="stylesheet" href="/css/w3-theme-black.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
.w3-sidenav a,.w3-sidenav h4 {padding: 12px;}
.w3-navbar li a {
    padding-top: 12px;
    padding-bottom: 12px;
}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <ul class="w3-navbar w3-theme w3-top w3-left-align w3-large">
    <li class="w3-opennav w3-right w3-hide-large">
      <a class="w3-hover-white w3-large w3-theme-l1" href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-bars"></i></a>
    </li>
    <li><a href="index.php" class="w3-theme-l1">主页</a></li>
    <li class="w3-hide-small"><a href="add_edit.php" class="w3-hover-white">编辑新书</a></li>
    <li class="w3-hide-small"><a href="newbook.php" class="w3-hover-white">添加新书</a></li>
    <li class="w3-hide-small"><a href="editbook.php" class="w3-hover-white">完结作品</a></li>
    <li class="w3-hide-small"><a href="#" class="w3-hover-white">作者简介</a></li>
    <li class="w3-hide-medium w3-hide-small"><a href="#" class="w3-hover-white">写作心得</a></li>
    <li class="w3-hide-medium w3-hide-small"><a href="#" class="w3-hover-white">写作素材</a></li>
    <li class="w3-hide-medium w3-hide-small"><a href="addnewbook.php" class="w3-hover-white">网页格式备份</a></li>
  </ul>
</div>

<!-- Sidenav -->
<nav class="w3-sidenav w3-collapse w3-theme-l5 w3-animate-left" style="z-index:3;width:250px;margin-top:51px;" id="mySidenav">
<!--  <a href="javascript:void(0)" onclick="w3_close()" class="w3-right w3-xlarge w3-padding-large w3-hover-black w3-hide-large" title="">
    <i class="fa fa-remove"></i></a>-->
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-right w3-xlarge w3-padding-large w3-hover-black w3-hide-large" title="close menu">
    <i class="fa fa-remove"></i></a>   
  
  <h4><b>作品分类</b></h4>
  <a href="#" class="w3-hover-black">东方玄幻</a>
  <a href="#" class="w3-hover-black">西方魔幻</a>
  <a href="#" class="w3-hover-black">童话故事</a>
  <a href="#" class="w3-hover-black">谈情说爱</a>
  <a href="#" class="w3-hover-black">科幻侦探</a>
  <a href="#" class="w3-hover-black">恐怖灵异</a>
</nav>

<!-- Overlay effect when opening sidenav on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- Main content: shift it to the right by 250 pixels when the sidenav is visible -->
<div class="w3-main" style="margin-left:250px">

  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal">小说1</h1>
      <p>小说简介。小说简介。小说简介。小说简介。小说简介。小说简介。小说简介。小说简介。小说简介。小说简介。
	  小说简介。小说简介。小说简介。小说简介。</p>
    </div>
    <div class="w3-third w3-container">
      <p class="w3-border w3-padding-large w3-padding-32 w3-center"><img src="/img/1.jpg" alt="Flowers" style="width:100%;"></p>
    </div>
  </div>

  <div class="w3-row">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal">小说2</h1>
      <p>小说简介。小说简介。小说简介。小说简介。小说简介。小说简介。小说简介。小说简介。小说简介。小说简介。
	  小说简介。小说简介。小说简介。小说简介。小说简介。小说简介。小说简介。小说简介。小说简介。小说简介。小说简介。小说简介。小说简介。小说简介。
	  小说简介。小说简介。小说简介。小说简介。</p>
    </div>
    <div class="w3-third w3-container">
      <p class="w3-border w3-padding-large w3-padding-32 w3-center"><img src="/img/1.jpg" alt="Flowers" style="width:100%;"></p>
    </div>
  </div>

  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal">小说3</h1>
      <p>小说简介。小说简介。小说简介。小说简介。小说简介。小说简介。小说简介。小说简介。小说简介。小说简介。
	  小说简介。小说简介。小说简介。小说简介。小说简介。小说简介。小说简介。小说简介。小说简介。小说简介。小说简介。小说简介。小说简介。小说简介。
	  小说简介。小说简介。小说简介。小说简介。</p>
    </div>
    <div class="w3-third w3-container">
      <p class="w3-border w3-padding-large w3-padding-32 w3-center"><img src="/img/1.jpg" alt="Flowers" style="width:100%;"></p>
    </div>
  </div>

  <!-- Pagination -->
  <div class="w3-center w3-padding-64">
    <ul class="w3-pagination">
      <li><a class="w3-black" href="#p">1</a></li>
      <li><a class="w3-hover-black" href="#">2</a></li>
      <li><a class="w3-hover-black" href="#">3</a></li>
      <li><a class="w3-hover-black w3-hide-small" href="#">4</a></li>
      <li><a class="w3-hover-black w3-hide-small" href="#">5</a></li>
      <li><a class="w3-hover-black" href="#">»</a></li>
    </ul>
  </div>

  <footer id="myFooter">
    <div class="w3-container w3-theme-l2 w3-padding-32">
      <h4>读一本好书，就像是和一位智者的对话</h4>
    </div>

    <div class="w3-container w3-theme-l1">
     <p>——每日格言</p> 
    </div>
  </footer>

<!-- END MAIN -->
</div>

<script>
// Get the Sidenav
var mySidenav = document.getElementById("mySidenav");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidenav, and add overlay effect
function w3_open() {
    if (mySidenav.style.display === 'block') {
        mySidenav.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidenav.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

// Close the sidenav with the close button
function w3_close() {
    mySidenav.style.display = "none";
    overlayBg.style.display = "none";
}
</script>

</body>
</html>

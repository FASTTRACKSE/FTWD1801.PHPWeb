<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.navbar {
    overflow: hidden;
    background-color: #333;
    font-family: Arial, Helvetica, sans-serif;
  
}

.navbar a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
    color: #EA5355;
}

.dropdown-content {
    display: none;
    position: absolute;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    /*color: #EA5355;*/
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;
    color: black;
}

.dropdown:hover .dropdown-content {
    display: block;
}
.menu-left {
    margin-left: 850px;
}
.content {
    background-color: black;
    
}
</style>
</head>
<body>
<div class="container">
<div class="navbar">
  <a href=""><b>HOTLINE</b> : 0938 803 633</a>
  <div class="menu-left">
  <div class="dropdown">
    <button class="dropbtn"><b>SEARCH</b></button>
    <div class="dropdown-content">
      <a href="#">
          <form action="">
            <input type="text" placeholder="Search.." name="search" style="height: 30px;">
            <button type="submit" style="height: 30px;" ><i class="fa fa-search"></i></button>
          </form>
      </a>
  </div>
</div>
      <div class="dropdown">
    <button class="dropbtn"><b>ACOUNT</b></button>
    <div class="dropdown-content">
      <a href="#"><b>ĐĂNG NHẬP</b></a>
      <a href="#"><b>ĐĂNG KÝ</b></a>
    </div>
  </div> 
  <a href=""><b>MY CART</b></a>
<div class="dropdown">
    <button class="dropbtn"><i class="fa fa-shopping-cart" style="color: white;"></i></button>
    <div class="dropdown-content">
      <a href="#"></a>
      <a href="#"></a>
      <a href="#"></a>
    </div>
  </div> 
</div>
</div>
<div class="content" >
<img src="http://cdn.nhanh.vn/cdn/store/7136/store_1514252913_443.png" style="margin-left: 450px;">
</div>
<div class="navbar">
  <a href="#home">Home</a>
  <a href="#news">News</a>
  <div class="dropdown">
    <button class="dropbtn">Dropdown 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </div> 
</div>


</div>
</body>
</html>

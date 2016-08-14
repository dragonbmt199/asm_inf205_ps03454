<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MobileStore</title>
    <link href="../view/css/css.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="../view/js/jquery-1.11.2.min.js"></script>        
    <script type="text/javascript" charset="utf-8" src="../view/js/dropdown.js"></script>  
    <script type="text/javascript" src="../view/js/jssor.js"></script>
    <script type="text/javascript" src="../view/js/jssor.slider.js"></script>
    <script type="text/javascript" src="../view/js/form.js"></script>
</head>

<body>
   	<header><!-- Phần header --> 
        <a class="logo" href="../controller/index.php"><img src="../view/img/logo.jpg" /></a>
        <div class="seach"><!-- khung tìm kiếm -->
            	<form method="get" action="" id="searchbox">
				<input type="text" class="search_query_top" name="search_query" value="Search" onfocus="if(this.value=='Search')this.value='';" onblur="if(this.value=='')this.value='Search';" autocomplete="off">
                <a class="a_seach" href="">Go!</a>
                </form>
        </div><!--end khung tìm kiếm -->
        <div class="menu_user">
            <!-- menu link -->
            <div class="nav">
		    <ul>
		<li><a href="?action=cpanel">Cpanel</a></li>
		<li><a href="?action=products_list">QL sản phẩm</a></li>
		<li><a href="?action=orders_manager">QL đơn hàng</a></li>
		<li style="border-right:none;"><a href="">QL user</a></li>
			</ul>
            </div>
			<!-- end menu link -->            
     	<div class="user"><!-- menu use -->
        <?php
            if(isset($_SESSION['Administrator'])){
                $username = $_SESSION['Administrator'];
                session_destroy();
                echo "
                <ul>
                <li class='your_account'>
                <a class='a_account' href=''>Wellcome Guest!</a>
                </li>
                <li class='cart'>
                <a class='a_account' href=''>Giỏ hàng:</a> <span class='color_999'>(trống)</span>
                </li>
                <li class='login'>( <a href='?action=login_admin'>Đăng nhập</a> )</li>
                </ul>";
            }  else { echo"
                <ul>
                <li class='your_account'>
                <a class='a_account' href=''>Wellcome Guest!</a>
                </li>
                <li class='cart'>
                <a class='a_account' href=''>Giỏ hàng:</a> <span class='color_999'>(trống)</span>
                </li>
                <li class='login'>( <a href='?action=login_admin'>Đăng nhập</a> )</li>
                </ul>";
            }
        ?>
        </div>
          	
         </div>
    </header><!-- end header -->
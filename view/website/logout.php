<?php include '../view/website/header_logout.php'; ?>

    <section id="middle">
    
    	<div id="mid_left">
            <?php include '../view/website/noidung_nav_left.php'; ?>
        </div>
        
    	<div id="mid_right">
        	<div class="banner"><!-- Banner -->
            <?php include '../view/website/banner.php'; ?>
       </div><!--End Banner -->

       <div class="frame_mid">
        <div class="frame_mid_gt">
            <h2>&nbsp;</h2>
            <br />
            <table width="530" border="1" cellpadding="0" cellspacing="5" id="tb"> 
  <tr>
  <td>
      <?php
      if (isset($_SESSION['check'])){
          echo "<center>"
          . "<h3>Chúc mừng bạn đã đăng xuất thành công!</h3>"
          . "<br/>"
          . "<a href='?action=home'>Trở về trang chủ</a>"
          . "</center>";
      }
        else {
            echo "<center>"
            ."<h2>Bạn chưa đăng nhập!</h2>"
            . "<a href='?action=login'>Đăng nhập</a>"
            ."</center>";    
            }
      ?>
  </td>
  </tr>
  <tr>
</table>
            <br>
            <h3>CÔNG TY CỔ PHẦN MOBILE STORE</h3>
        <p class="p_gt"><span class="color_black">Văn phòng điều hành:</span> <br /> 
        Lầu 5 toà nhà Etown 2, 364 Cộng Hoà, phường 13, quận Tân Bình, TP. Hồ Chí Minh. <a href="https://goo.gl/maps/7xJ7y">Xem bản đồ</a></p>
        <p class="p_gt"><span class="color_black">Số điện thoại:</span>
        <br /> 08 34548654</p>
        <p class="p_gt"><span class="color_black">Email:</span><br />Info@MobileStore.com</p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m19!1m8!1m3!1d3919.119063868339!2d106.641229!3d10.802192!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3175294f6e58cf0f%3A0x9d0099dbd18aaa24!2zVMOyYSBOaMOgIEUuVG93biwgMzY0IEPhu5luZyBIw7JhLCAxMywgVMOibiBCw6xuaCwgSOG7kyBDaMOtIE1pbmgsIFZp4buHdCBOYW0!3m2!1d10.802192!2d106.641229!5e0!3m2!1svi!2s!4v1434314645493" width="530" height="270" frameborder="0" style="border:0; margin-left:10px; margin-bottom:10px;"></iframe>
          </div>
         
       </div>
             <!-- end frame mid -->
        <div id="frame_right"> 
            	<div class="frame_menu_left">     
            	<div class="left_frame">
                	<h4><a href="">SPECIALS</a></h4>   
                    <a href="?action=samsungs6"><img style="margin-top:10px;" src="../view/img/picdt/samsung-galaxy-s6-edge-200x200.jpg" alt="samsung" width="188px;" />	</a>
                    <p class="p_right">Có khuyến mãi <br />
                    <span class="txt_red">19.990.000₫</span><br />
                     <a class="a_right" style="color:#000" href="?action=samsungs6">Samsung Galaxy S6 Edge</a>
                  </p>
                     </div>
                    <div class="hotline" style="margin-top:10px">
                	<h1 id="h1">HOTLINE</h1>  
                    <p>Bán hàng: <br />
                     <span>1900.6789</span>
                     </p>
                    <p>Góp ý, khiếu nại: <br />
                     <span>1900.6789</span>
                     </p>
                     <p>Bảo hành sản phẩm: <br />
                      <span>1900.6789</span>
                    </p>
                </div>
                </div>
            </div><!-- end right_frame -->
   </div>
             <!-- end mid right -->    
        
    </section><!--End section middle -->

<?php include '../view/website/footer.php'; ?>




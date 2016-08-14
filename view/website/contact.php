<?php include '../view/website/header.php'; ?>

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
            <h2>Thông tin liên hệ</h2>
            <br />
            <h3>Gửi ý kiến phản hồi:</h3>
            <P class="p_gt">Quý vị có thể gửi thư tối chúng tôi bằng cách hoàn tất mẫu dưới đây. Để chúng tôi có thể trả lời thư của Quý vị xin vui lòng khai báo đầy đủ.</P>                  
            <form name="guiykien" action="#" onSubmit="return validate()">
            <table width="530" border="1" cellpadding="0" cellspacing="5" id="tb">
              <tr>
    <td width="135">Tiêu đề:</td>
    <td width="380"><input name="TieuDe" type="text"  size="28" placeholder="Nhập tiêu đề" /> <span id="tieude"></span></td>
  </tr>
  <tr>
    <td>Họ và Tên:</td>
    <td><input name="HoTen" type="text" size="28" placeholder="VD: Nguyễn Văn A" /> <span id="hoten"></span></td>
  </tr>
  <tr>
    <td>Địa chỉ Email:</td>
    <td><input name="DCEmail" type="text" size="28" placeholder="@gmail.com" /> <span id="emailx"></span></td>
  </tr>
  <tr>
    <td>Điện thoại:</td>
    <td><input name="DienThoai" type="tel" size="28" placeholder="+84" /> <span id="dienthoai"></span></td>
  </tr>
  <tr>
    <td>Gửi đến bộ phận:</td>
    <td><select name="BoPhan" id="Guiden" >
    <option selected="selected">--Chọn bộ phận gửi đến--</option>
    <option>Bán hàng</option>
    <option>Góp ý, khiếu nại</option>
    <option>Bào hành sản phẩm</option>
    </select> <span id="guiden1"></span></td>
  </tr>
  <tr>
    <td valign="top">Nội dung:</td>
    <td valign="middle"><textarea name="NoiDung" id="txtarea"></textarea>
    <class id="noidung"></class>
    </td>
  </tr>
   <tr>
    <td>Mã chống spam:</td>
    <td><input name="maSpam" type="text" size="15" />  
        <input name="ngaunhien" type="text" disabled="disabled" size="15" readonly="readonly" value="12345" style="text-align:center;" />
        <span id="maspam"></span></button></td>
  </tr>
  <tr>
  <td>&nbsp;</td>
  <td><input id="ip_sm" name="Submit" type="submit" value="Gửi" onclick="return validate()"/> <input id="ip_sm" name="reset" type="reset" value="Nhập lại" /></td>
  </tr>
</table>
</form>
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
                <a href=""><img class="left_quangcao" src="../view/img/hinhQc1.jpg" alt="qc"  /></a>
                <div class="hotline">
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




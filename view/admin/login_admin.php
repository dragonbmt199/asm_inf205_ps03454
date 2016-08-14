<?php include '../view/admin/header_admin.php'; ?>

<section id="middle">
    <div id="middle_admin">
    <?php
        if(empty($_SESSION['Administrator'])){
            $messages="";
        }else{
            $messages=$_SESSION['Administrator'];
        }

    ?>   
            <form name="DangNhapad" method="post" action="?action=login_cpanel_action">
            <table width="530" border="1" cellpadding="0" cellspacing="5" id="tb"> 
     <tr>
    <td width="135">Tên đăng nhập:</td>
    <td width="380"><input name="username" type="text"  size="28"  /> </td>
  </tr>
  <tr>
    <td width="135">Mật khẩu: </td>
    <td width="380"><input name="password" type="password"  size="28" /> </td>
  </tr>
  <tr>
  <td>&nbsp;</td>
  <td><input id="ip_sm" name="login_cpanel_action" type="submit" value="Đăng nhập" /> 
      <input id="ip_sm" name="NhapLai" type="reset" value="Nhập lại" /></td>
  </tr>
    <tr>
  <td width="135">&nbsp;</td>
  <td width="380"><a class="txt_a_login" href="">Quên mật khẩu?</a></td>
  </tr>
  <tr>
  <td width="135">&nbsp;</td>
  <td width="380"><a class="txt_a_login" href="../controller/index.php">Bạn chưa có tài khoản? Đăng kí ngay?</a></td>
  </tr>
  <tr>
</table>
</form>
    </div>   
        
     
</section>

<?php include '../view/website/footer.php'; ?>
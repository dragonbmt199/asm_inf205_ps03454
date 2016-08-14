<?php include '../view/admin/header_logout.php'; ?>

<section id="middle">
    <div id="middle_admin">
         <?php
      if (isset($_SESSION['Administratol'])){
          $_SESSION = array();
          session_destroy();
          echo "<center>"
          . "<h3>Chúc mừng bạn đã đăng xuất thành công!</h3>"
          . "<br/>"
          . "<a href='?action=cpanel'>Trở về trang chủ</a>"
          . "<a href='index.php'>Trở về trang chủ người dùng</a>"
          . "</center>";
      }
        else {
            echo "<center>"
            ."<h2>Bạn chưa đăng nhập!</h2>"
            . "<a href='?action=login_admin'>Đăng nhập</a>"
            ."</center>";    
            }
      ?>
</section>

<?php include '../view/website/footer.php'; ?>
<?php
// @Another: Nguyễn Nhật Vĩnh
// Mã sinh viên: PS03454
// Lớp: PT10306
 include '../model/connect.php';
 include '../model/user.php';
 include "../model/products.php"; 
 include '../model/cart.php';
 include '../model/order.php';
 include "../model/contacts.php";
// Khởi tạo session
    session_start();
// Tạo mảng thông tin về giỏ hàng
if(!isset($_SESSION['cartview']))
    $_SESSION['cartview'] = array();

if(isset($_GET["action"]))
        $action=$_GET["action"]; 
    elseif (isset($_POST['action']))
    {
        $action=$_POST["action"];
    }
    else
        $action="home";
     
//Xóa dữ liệu của biến Messages
unset($_SESSION['messages']);
       
switch ($action){
    // Gọi trang chủ
    case "home":
        include "../view/website/home.php";
        break;
        // Gọi trang sản phẩm
    case "products":
        include "../view/website/products.php";
        break;
    //Show sản phẩm theo nhóm
       case "products_smathphone":
           $action="products_smathphone";
           $Category ="Smath Phone";
           include '../view/website/products.php';
            break;
        case "products_dtsachtay":
           $action="products_dtsachtay";
           $Category ="Điện thoại sách tay";
           include '../view/website/products.php';
            break;
        case "products_dtcu":
           $action="products_dtcu";
           $Category ="Điện thoại cũ";
           include '../view/website/products.php';
            break;
    case "payments":
            
           $username = $_SESSION['check'];
          
           $quest = new user();
           $result = $quest->getInfoById($username); 
           $userid=$result[0];
          
            $o = new order();
            $orderid = $o->createOrder($userid);
            $_SESSION['order_id']=$orderid;
           
            $total = 0;
            
            foreach($_SESSION['cartview'] as $key => $item)
                 {
                 $o->insertOrderDetail($orderid,$key,$item['cost'], $item['qty'], $item['total']);
                 $total += $item['total'];
                 }
                 $o->updateOrderTotal($orderid, $total);
           include "../view/website/products_payments.php";
            break;
         case "show_order":
             if (isset($_SESSION['order_id']))
             {
                 include "../view/website/products_payments.php";
                 break;
             }
             else
             {
                 
                 header ("Location:index.php?action=show_cart");
                 break;
             }
    case "orders_view":
        include '../view/admin/orders_view.php';
        break;
    case "products_details":
            include "../view/website/products_details.php";
            break;
    case "add_cart":
            echo add_item($_POST['productkey'],$_POST['itemqty']);
            include "../view/website/products_addcart.php";
            break;
        case "show_cart":
            include '../view/website/products_addcart.php';
            break;
         case "update_cart":
            $new_list = $_POST['newqty'];
            foreach($new_list as $key => $qty){
                if($_SESSION['cartview'][$key] != $qty){
                update_item($key,$qty);
                }
            } 
            include '../view/website/products_addcart.php';
        break;
        case "empty_cart":
            unset($_SESSION['cartview']);
            include '../view/website/products_addcart.php';
            break;
    // Gọi trang đăng nhập 
    case "login":
        include '../view/website/login.php';
        break;
    case "gologin":
            $username = $_POST['username'];
            $_SESSION['username'] = $username;
            $password = $_POST['password'];
            $_SESSION['password'] = $password;
            $remember = $_POST['remember'];
             
            $user = new user();
            if ($username=="" || $password=="")
            {
                $_SESSION['messages'] = "Bạn phải nhập thông tin đầy đủ";
                include "../view/website/login.php";
                break;
            }
            else
            {
                if($user->checkUser($username,$password))
                {
                   
                    $result = $user->userid($username, $password);
                    $userid = $result[0];
                    if($remember){
                    $time=time()+60*60*24;
                    setcookie("user","$username",$time);
                    setcookie("pass","$password",$time);
                    }
                // Tạo mặc định biến Session cho người dùng sau khi đăng nhập thành công
                $_SESSION['check'] = $username;
                header ("Location:index.php");
                break;
                 }
                else
                {
                    $_SESSION['messages'] = "Tên đăng nhập chưa chính xác !";
                    include "../view/website/login.php";
                    break;
                }
            }
    // Gọi trang đổi mật khẩu
    case "change_password":
        include '../view/website/change_password.php';
        break;
    case "change_password_action":
        $username = $_POST['username'];
        $password = $_POST['password'];
        if($_POST['newpassword'] != $_POST['renewpassword']){
        $_SESSION['messages'] = "Mật khẩu và mật khẩu nhập lại không chính xác!  <br/>";
         include "../view/website/change_password.php";
         break;
        } else{
               $newpassword = $_POST['newpassword'];
        }
        $user1 = new user();
        
        if($username=="" || $password ==""){
            $_SESSION['messages'] = "Bạn phải nhập thông tin đầy đủ";
            include "../view/website/register.php";
            break;
        }  else {
            if($user1->checkUser($username, $password)== TRUE){
                $_SESSION['messages']= "Bạn đã thay đổi mật khẩu thành công!";
                $user1->updatePassword($username, $newpassword);  
                include '../view/website/change_password.php';
            }  else {
                 $_SESSION['messages']= "Đổi mật khẩu không thành công! Vui lòng kiểm tra lại!";
                include '../view/website/change_password.php';
            }
        }
        break;
    // Gọi trang cấp lại mật khẩu      
    case "reset_password":
        include '../view/website/reset_password.php';
        break;
    case "reset_password_action":
        $username = $_POST['username'];
        $_SESSION['username'] = $username;
        $email = $_POST['email'];
        $_SESSION['email'] = $email;
        
        $user = new user();
            if ($username=="" || $email=="")
            {
                $_SESSION['messages'] = "Bạn phải nhập thông tin đầy đủ";
                include "../view/website/reset_password.php";
                break;
            }
            else{
                if($user->checkInfo($username, $email)==TRUE){
                    $newpassword = $user->getPassword();
                    $_SESSION['messages']= "<h2>Mật khẩu mới của bạn là '< $newpassword >'!</h2>";
                    $user->updatePassword($username, $newpassword);
                    include "../view/website/reset_password.php";
                    break;
                }else{
                    $_SESSION['messages']= "Không lấy được mật khẩu mơi!";
                    include '../view/website/reset_password.php';
                }             
            }
        
    // Gọi trang đăng kí
    case "register":
        include '../view/website/register.php';
        break;
     case "go_register":  
            $fullname = $_POST['fullname'];
            $username = $_POST['username'];  
            if($_POST['password'] != $_POST['repassword']){
                $_SESSION['messages'] = "Mật khẩu và mật khẩu nhập lại không chính xác!  <br/>";
               include "../view/website/register.php";
                break;
            } else{
               $password = $_POST['password'];
               }
            $email = $_POST['email'];  
            $diachi = $_POST['diachi'];
            $sdt = $_POST['sdt']; 
            $contactdesc = $_POST['contactdesc'];
            $permissions = $_POST['permissions'];
            
            
            $user = new user();
            
        if ($fullname==""||$username==""||$password==""||$email==""||$diachi==""||$sdt=""||$permissions="")
            {
                $_SESSION['messages'] = "Bạn phải nhập thông tin đầy đủ";
                include "../view/website/register.php";
                break;
            }
        else
        {   
            if($user->checkPassword($username, $email) == FALSE)
            {
                $_SESSION['messages'] = "Ðăng kí thành công! Bạn có thể đăng nhập!";
                $user->insertUser($fullname,$username,$password,$email,$diachi,$sdt,$permissions);  
                $contact = new contacts();
                $contact->addContact($fullname, $email, $sdt, $contactdesc);
                include '../view/website/login.php';
                break;
            }
            else {
                 $_SESSION['messages'] = "Tài khoản đã được đăng kí!";
                    include "../view/website/register.php";
                    break;
                }              
        }
    // Gọi trang sản phẩm samsung s6 edge
    case "samsungs6":
        include "../view/website/samsungs6.php";
        break;
    // Gọi trang giới thiệu
    case "about":
        include "../view/website/about.php";
        break;
    // Gọi trang liên hệ
    case "contact":
        include "../view/website/contact.php";
        break;   
    // Gọi trang đăng xuất
    case "logout":
        include "../view/website/logout.php";
}
?>


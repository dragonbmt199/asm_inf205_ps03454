<?php include "../view/admin/header_admin.php";
$objQuest = null;
$objQuest = new products();
$quest = $objQuest->getProductById($_GET['id']);
$productid = $quest[0];
$productname = $quest[1];
$productimage = $quest[2];
$productprice = $quest[3];
$productdes = $quest[4];
$productcategoty = $quest[5];
$productbrand = $quest[6];
$productgroup = $quest[7];
$productsale = $quest[8];
$cauhinh = $quest[9];
?>
<section id="middle">
    <div id="middle_admin">
    	<center><h1 style=" margin: 20px; color: #900; font-size: 24px;">Chỉnh sửa sản phẩm</h1></center>
        <form action="administrator.php?action=update_product_action" method="post" enctype="multipart/form-data">
              
        <center><table>
            <tr><td colspan="2" align="center"><img src="../view/img/picdt/<?php echo "$productimage" ?>" width="400px"/></td></tr>
            <tr>
                <td><label for="LtbProducts">Chọn mặt hàng</label></td>
                <td align="left">
                    <?php
                    switch($productgroup)
                    {
                        case "Điện thoại":?>
                            <select name="LtbProducts">
                            <?php echo'<option>'."$productcategoty".'</option>' ?>
                            <option>Smath Phone</option>
                            <option>Điện thoại sách tay</option>
                            <option>Điện thoại cũ</option>
                            </select>
                        <?php break;

                        case "Phụ kiện điện thoại":?>
                            <select name="LtbProducts">
                            <?php echo'<option>'."$productcategoty".'</option>' ?>
                            <option>Điện thoại</option>
                            <option>Phụ kiện</option>    
                            </select>
                        <?php break;
                        }?>      
                </td>
            </tr>
            <tr>
                <td>
                    <label for="LtbBrand">Chọ hãng sản xuất</label></td>
                </td>
                <td align="left">
                    <select name="LtbBrand" id="LtbBrand">
                        <?php echo'<option>'."$productbrand".'</option>' ?>
                            <option>Nokia</option>
                            <option>Samsung</option>
                            <option>Sony</option>
                            <option>Sky</option>
                            <option>HTC</option>
                            <option>IPhone</option>
                            <option>Philips</option>
                            <option>LG</option>
                            <option>Oppo</option>
                            <option>Khác</option>
                            </select>
                </td>
            </tr>
            
            <tr>
                <td>
                    <label for="txtTenSP">Tên sản phẩm</label></td>
                 </td>
                 <td align="left">
                     <input style="width: 330px" type="text" name="txtTenSP"  value="<?php echo"$productname" ?>">
                 </td>
            </tr>
            
            <tr>
                <td>
                    <label for="file">Chọn hình ảnh sản phẩm</label></td>
                 </td>
                 <td align="left">
                     <input type="file" name="file" id="file">
                 </td>
            </tr>
            
            <tr>
                <td>
                    <label for="txtGiaSP">Giá sản phẩm</label></td>
                 </td>
                 <td align="left">
                     <input type="text" name="txtGiaSP" value="<?php echo"$productprice" ?>">
                 </td>
            </tr>
            
            <tr>
                <td>
                    <label for="txtMotaSP">Mô tả sản phẩm</label></td>
                 </td>
                 <td align="left">
                     <textarea name="txtMotaSP" cols="40" rows="15"  ><?php echo"$productdes"?></textarea>
                 </td>
            </tr>
            
            <tr>
                <td>
                    <label for="txtMotaSP">Cấu hình sản phẩm</label></td>
                 </td>
                 <td align="left">
                     <textarea name="txtCauHinh" cols="40" rows="15"  ><?php echo"$cauhinh"?></textarea>
                 </td>
            </tr>
            
            <tr>
                
                 <td align="left">
                     <input type="hidden" name="txtIDSP" value="<?php echo"$productid" ?>">
                 </td>
            </tr>
            
            <tr>
                <td colspan="2" align="center">
                <input type="submit" name="submit" value="Chỉnh sửa sản phẩm"/>
                
            </tr>
            
        </table></center>
        </form>
        <div class="clear"></div>
 </div>
 </section>
   <?php include "../view/website/footer.php";?>
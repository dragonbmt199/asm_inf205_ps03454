<?php include "../view/admin/header_admin.php";?>
</script>
<section id="middle">
<div id="middle_admin">
    	<center><h1 style=" margin: 20px; color: #900; font-size: 24px;">Thêm sản phẩm mới</h1></center>
        <br/><br/>
        <form action="../controller/administrator.php"  method="post" enctype="multipart/form-data">
            <input type="hidden"  name="action" value="addproducts_step3" action="addproducts_step3" />
        <center><table>
            <tr>
                <td><label for="LoaiMH">Chọn mặt hàng</label></td>
                <td align="left">
                    <?php
                    switch($product)
                    {
                        case "Điện thoại": ?>
                            <select name="LoaiMH">
                            <option>Smath Phone</option>
                            <option>Điện thoại sách tay</option>
                            <option>Điện thoại cũ</option>
                            </select>
                        <?php break;
                       
                        case "Phụ kiện":?>
                            <select name="LoaiMH" >
                            <option>#</option>
                            </select>
                        <?php break;
                        
                    }?>
                     
                </td>
            </tr>
            <tr>
                <td>
                    <label for="LoaiBrand">Chọn nhà sản xuất</label></td>
                </td>
                <td align="left">
                    <select name="LoaiBrand">
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
                     <input type="text" name="txtTenSP">
                 </td>
            </tr>
            
            <tr>
                <td>
                    <label for="file">Hình ảnh sản phẩm</label></td>
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
                     <input type="text" name="txtGiaSP">
                 </td>
            </tr>
            
            <tr>
                <td>
                    <label for="txtMotaSP">Mô tả sản phẩm</label></td>
                 </td>
                 <td align="left">
                     <textarea name="txtMotaSP" cols="40" rows="5"></textarea>
                 </td>
            </tr>
            
            <tr>
                <td>
                    <label for="txtMotaSP">Cấu hình sản phẩm:</label></td>
                 </td>
                 <td align="left">
                     <textarea name="txtCauHinh" cols="40" rows="5">
    <b> Màn hình:                         </b><br />
    <b> HĐH:                              </b> <br />
    <b> CPU:                              </b><br />
    <b> Camera:                           </b> <br />
    <b> Pin:                              </b> <br />
                     </textarea>
                 </td>
            </tr>
            
            <tr>
                <td colspan="2" align="center">
                <input type="submit" name="submit" value="Thêm sản phẩm mới" />
                <input type="reset"  value="Reset"/></td>
            </tr>
        </table></center>
            <br/><br/>
        </form>
    </div>
</section>
   <?php include "../view/website/footer.php";?>


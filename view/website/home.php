<?php include '../view/website/header.php'; ?>

 <section id="middle">
    
    	<div id="mid_left">
            <?php include '../view/website/noidung_nav_left.php'; ?>
        </div>
        
    	<div id="mid_right">
        <div class="banner"><!-- Banner -->
            <?php include '../view/website/banner.php'; ?>
       </div><!--End Banner -->
       <div id="frame_mid">
                	<a href=""><img class="frame_qc" src="../view/img/qc.gif" /> </a>
          <div class="frame_mid_down">
                    	<div class="frame_tieude_mid"> <h3 id="h3">CÁC SẢN PHẨM</h3>   </div>
                    	<?php
                        $pro = new Products();
                        $display = 6;
                        $Category = "Smath Phone";
                        $start = (isset($_GET['start']) && (int)$_GET['start']>=0) ? $_GET['start'] : 0;
                        $result = $pro->getListPageOrderProduct($start, $display, $Category);
                        
                        while($set = $result->fetch()):                         
                        ?>
                        <div class="frame_sanpham">
                        	<a href=""><img class="thumbnail_sp" src="<?php echo '../view/img/picdt/'.$set['productImage']?>" alt="sp1" /></a> 
                          <p class="p_right"><?php echo $set['productSale'] ?></p>
                            <p class="txt_red"><?php echo number_format($set['productPrice'])?>₫</p>
                             <a class="a_right" href="?action=products_details&productID=<?php echo $set['productID'] ?>"><?php echo $set['productName'] ?></a>
                        </div>
                        <?php                     
                        endwhile;
                        ?>
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
        </div>        <!-- end mid right -->    
        
    </section><!--End section middle -->
<?php include '../view/website/footer.php'; ?>
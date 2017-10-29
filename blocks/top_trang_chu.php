<div id="slide-left">

         <?php 
            $tinmoinhat = TinMoiNhat_MotTin();
            $row_tinmoinhat_mottin = mysql_fetch_array($tinmoinhat);
         ?>
        	<div id="slideleft-main">
                <img src="upload/tintuc/<?php echo $row_tinmoinhat_mottin['urlHinh'] ?>"  /><br />
                <h2 class="title"><a href="index.php?p=chitiettin&idTin=<?php echo $row_tinmoinhat_mottin['idTin'] ?>"><?php echo $row_tinmoinhat_mottin['TieuDe'] ?></a> </h2>
                <div class="des">
                    <?php echo $row_tinmoinhat_mottin['TomTat'] ?>
                </div>  
        	</div>

            <div id="slideleft-scroll">
            	
              <div class="content_scoller width_common">
            <ul>
              <?php
                  $bontinmoi = TinMoi_bontin();
                  while ($row_bontinmoi = mysql_fetch_array($bontinmoi)) {
              ?>
               <li>
                <div class="title_news">
               		<a href="#" class="txt_link"> Bị bắt vì chụp ảnh selfie với váy ăn trộm </a> 
                </div>
              </li>
              <?php
                }
              ?>
            </ul>
            </div>			
            
			<div id="gocnhin">
                <img alt="" src="http://khoapham.vn/images/logoKhoaPham.png" width="100%"></a>
                <div class="title_news"></div>
            </div>
                
            </div>
</div>


     
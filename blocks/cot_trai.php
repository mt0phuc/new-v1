<div class="box-cat">
	<div class="cat">
    	<div class="main-cat">
        	<a href="#">Tin xem nhiều</a>
        </div>
       
        <div class="clear"></div>
        <div class="cat-content">
        <?php
            $tin_xemnhieu = TinXemNhieu();
            while ($row_xemnhieu = mysql_fetch_array($tin_xemnhieu)) {
                # code...
        ?>	
            <div class="col1">
            	<div class="news">
                  <img class="images_news" src="upload/tintuc/<?php echo $row_xemnhieu['urlHinh'] ?>"  />
                    <h3 class="title" ><a href="#"><?php echo $row_xemnhieu['TieuDe'] ?></a><span class="hit"><?php echo $row_xemnhieu['SoLanXem'] ?></span></h3>
                    <div class="clear"></div>
				</div>
            </div>
            
         <?php
             }
         ?>     
        </div>
    </div>
</div>
<div class="clear"></div>


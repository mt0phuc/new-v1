<?php
	function TinMoiNhat_MotTin(){
		// lấy ra 1 tin mới nhất
		$qr = "
			SELECT * FROM tin
			ORDER BY idtin DESC
			LIMIT 0,1
		";
		return mysql_query($qr);
	}

	function TinMoi_bontin(){
		$qr="
			SELECT * FROM tin
			ORDER BY idtin DESC
			LIMIT 1,6;
		";
		return mysql_query($qr);
	}

	function TinXemNhieu(){
		$qr="
			SELECT * FROM tin
			ORDER BY SOLanXem DESC 
			limit 0,7;
		";
		return mysql_query($qr);
	}
?>
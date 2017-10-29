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
			LIMIT 1,10;
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
	function TinMoiNhat_TheoLoaiTin_MotTin($idLT){
		// lấy ra 1 tin mới nhất
		$qr = "
			SELECT * FROM tin
			where idLT = $idLT
			ORDER BY idtin DESC
			LIMIT 0,1
		";
		return mysql_query($qr);
	}

	function TinMoi_TheoLoaiTin_bontin($idLT){
		$qr="
			SELECT * FROM tin
			where idLT = $idLT
			ORDER BY idtin DESC
			LIMIT 1,8;
		";
		return mysql_query($qr);
	}
	 function TenLoaitin($idLT){
		$qr= "SELECT Ten
		FROM loaitin 
		where idLT = $idLT";
		$LoaiTin = mysql_query($qr);
		$row_loaitin = mysql_fetch_array($iloaitin);
		return $row['ten'];
	}
	
?>
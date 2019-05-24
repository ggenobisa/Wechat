<?php 

	// 卡密和密码 
	
	if(@!$_POST['num']){

	}else{

		for ($c=1; $c <= $_POST['num']; $c++) { 

			$kahao = "";
			for ($i=1; $i <=15 ; $i++) { 
				$kahao .= rand(0,9);
			}

			$kami = "";

			$kami_str = "zxcvbnmasdfghjklqwertyuiopZXCVBNMAFGHJKLQWERTYUIOP";

			$kami_arr = str_split($kami_str);

			for ($i=1; $i <=10 ; $i++) { 
				$kami .= $kami_arr[rand(0,count($kami_arr)-1)];
			}
			echo $kahao." ".$kami."<br/>";
		}
		
		exit();
	}
	
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 		<form action="" method="POST">
 			Number: <input type="text" name="num">
 			<input type="submit" name="" value="SEND">
 		</form>
 </body>
 </html>
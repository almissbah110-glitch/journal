<?php

		$filename = $_FILES['file']['name'];
		$filesize = $_FILES['file']['size'];
		$tmpname = $_FILES['file']['tmp_name'];
		$filetype = $_FILES['file']['type'];
		$folder = "uploads/";
		$maxfile = "1024000";
		$typefile = array('application/msword','application/vnd.openxmlformats-officedocument.wordprocessingml.document');
		$micro = microtime();

		if(isset($_POST['submit'])){
			if (empty($filename)) {
				echo '<h1><br /><center>يرجى تحديد الملف ';
			}else if ($filesize > $maxfile) {
				echo "<h1><br /><center>حجم الملف كبير جدا ";
			}else if (!in_array($filetype,$typefile)){
				echo "<h1><br /><center>الملف غير مسموح ";
			}else {
				echo "<h1><br /><center>تم ارسال الملف بنجاح </center>";
				move_uploaded_file($tmpname,$folder.$micro.$filename);
			}
			header("refresh:1; url=contact.html");
		}
?>
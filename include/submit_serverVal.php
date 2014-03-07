<?php
	if(isset($_POST['designerName']) && isset($_POST['title']) && isset($_POST['materials']) && isset($_POST['description']) && isset($_POST['designerAddress']) &&	isset($_POST['designerPhone']) && isset($_POST['designerEmail']))
	{
		if ((exif_imagetype($_FILES["uploadedfile_front"]["tmp_name"]) == IMAGETYPE_GIF || exif_imagetype($_FILES["uploadedfile_front"]["tmp_name"]) == IMAGETYPE_JPEG || exif_imagetype($_FILES["uploadedfile_front"]["tmp_name"]) == IMAGETYPE_PNG || exif_imagetype($_FILES["uploadedfile_front"]["tmp_name"]) == IMAGETYPE_BMP)
		&& $_FILES["uploadedfile_front"]["size"] < 500001)
		{
			if ((exif_imagetype($_FILES["uploadedfile_back"]["tmp_name"]) == IMAGETYPE_GIF || exif_imagetype($_FILES["uploadedfile_back"]["tmp_name"]) == IMAGETYPE_JPEG || exif_imagetype($_FILES["uploadedfile_back"]["tmp_name"]) == IMAGETYPE_PNG || exif_imagetype($_FILES["uploadedfile_back"]["tmp_name"]) == IMAGETYPE_BMP)
			&& $_FILES["uploadedfile_back"]["size"] < 500001)
			{
				if ((exif_imagetype($_FILES["uploadedfile_detail"]["tmp_name"]) == IMAGETYPE_GIF || exif_imagetype($_FILES["uploadedfile_detail"]["tmp_name"]) == IMAGETYPE_JPEG || exif_imagetype($_FILES["uploadedfile_detail"]["tmp_name"]) == IMAGETYPE_PNG || exif_imagetype($_FILES["uploadedfile_detail"]["tmp_name"]) == IMAGETYPE_BMP)
				&& $_FILES["uploadedfile_detail"]["size"] < 500001)
				{
					if ((exif_imagetype($_FILES["uploadedfile_before"]["tmp_name"]) == IMAGETYPE_GIF || exif_imagetype($_FILES["uploadedfile_before"]["tmp_name"]) == IMAGETYPE_JPEG || exif_imagetype($_FILES["uploadedfile_before"]["tmp_name"]) == IMAGETYPE_PNG || exif_imagetype($_FILES["uploadedfile_before"]["tmp_name"]) == IMAGETYPE_BMP)
					&& $_FILES["uploadedfile_before"]["size"] < 500001)
					{
						$designerName = $_POST['designerName'];
						$title = $_POST['title'];
						$materials = $_POST['materials'];
						$description = $_POST['description'];
						$fashion = $_POST['fashion'];
						$designerAddress = $_POST['designerAddress'];
						$designerPhone = $_POST['designerPhone'];
						$designerEmail = $_POST['designerEmail'];
						$ageGroup = $_POST['ageGroup'];
						$haveModel = $_POST['haveModel'];
						$modelName = $_POST['modelName'];
						$modelAge = $_POST['modelAge'];
						$guardianName = $_POST['guardianName'];
						$willModel = $_POST['willModel'];
						$today = date('His'); 					
								
						// Create folder for design entry with date							
						if(mkdir("Test2014/" . $title . "_" . $today, 0777))
						{
							// create info csv in folder
							$dir = 'Test2014/' . $title . '_' . $today;
							$file = $dir . '/info.csv';
							$csvData_info = $designerName . "|" . $title . "|" . $materials . "|" . $description . "|" . $fashion . "|" . $designerAddress . "|" . $designerPhone . "|" . $designerEmail . "|" . $ageGroup . "|" . $haveModel . "|" . $modelName . "|" . $modelAge . "|" . $guardianName . "|" . $willModel ."\n";
							file_put_contents($file, $csvData_info);
							
							// upload the front image to uploads directory									    
							if (file_exists($dir . "/" . $_FILES["uploadedfile_front"]["name"]))
							{
								echo $_FILES["uploadedfile_front"]["name"] . " already exists. ";
							}
							else
							{
								move_uploaded_file($_FILES["uploadedfile_front"]["tmp_name"], $dir . "/" . $_FILES["uploadedfile_front"]["name"]);
							}
							
							// upload the back image to uploads directory									    
							if (file_exists($dir . "/" . $_FILES["uploadedfile_back"]["name"]))
							{
								echo $_FILES["uploadedfile_back"]["name"] . " already exists. ";
							}
							else
							{
								move_uploaded_file($_FILES["uploadedfile_back"]["tmp_name"], $dir . "/" . $_FILES["uploadedfile_back"]["name"]);
							}
							
							// upload the detail image to uploads directory									    
							if (file_exists($dir . "/" . $_FILES["uploadedfile_detail"]["name"]))
							{
								echo $_FILES["uploadedfile_detail"]["name"] . " already exists. ";
							}
							else
							{
								move_uploaded_file($_FILES["uploadedfile_detail"]["tmp_name"], $dir . "/" . $_FILES["uploadedfile_before"]["name"]);
							}
							
							// upload the before image to uploads directory									    
							if (file_exists($dir . "/" . $_FILES["uploadedfile_before"]["name"]))
							{
								echo $_FILES["uploadedfile_before"]["name"] . " already exists. ";
							}
							else
							{
								move_uploaded_file($_FILES["uploadedfile_before"]["tmp_name"], $dir . "/" . $_FILES["uploadedfile_before"]["name"]);
							}
						}
						// Redirect to confirmation page
						header("Location: http://simplycsl.org/green/submit_true.php");
					}
					else print '<p style="color:red">*Unrecognized file type for before image</p>';
				}
				else print '<p style="color:red">*Unrecognized file type for detail image</p>';
			}
			else print '<p style="color:red">*Unrecognized file type for back image</p>';
		}
		else print '<p style="color:red">*Unrecognized file type for front image</p>';
	}
?>
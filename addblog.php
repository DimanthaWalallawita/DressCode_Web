<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Items</title>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="formStyle.css">
</head>

<body>

    <section>
        <article>
            <form action="addblog.php" method="post" enctype="multipart/form-data">
                <div>
                    <h1>
                        Add Items To database
                    </h1>
                </div>
                
                <div>
                    <label for="brand">Brand Name :</label>
                    <input type="text" id="txtTitle" name="txtTitle" placeholder="Enter Brand Name" required>
                </div>
                
                    
                <div>
                    <label for="description">Description :</label>
					<textarea id="txtDescription" name="txtDescription" rows="10" cols="50" placeholder="Enter your advertisment description here"></textarea>
                </div>
    
                <div>
                    <label for="image">Image</label>
                    <input type="file" name="imageFile" required>
                </div>
    
                <label for="chkPublish" class="checkbox">Publish the Advertisement
                    <input type="checkbox" name="chkPublish">
                </label>
    
                <div class="addpost">
                    <button name="btnSubmit">Add Post</button>
                </div>
				
				<div class="addpost">
                    <button name="back"><a href="index.php">Account</a></button>
                </div>
				
				<?php
					if(isset($_POST["btnSubmit"]))
					{
						$brand = $_POST["txtTitle"];
		
						$image = "uploads/".basename($_FILES["imageFile"]["name"]);
						move_uploaded_file($_FILES["imageFile"]["tmp_name"],$image);

                        $description = $_POST["txtDescription"];
		
						if (isset($_POST["chkPublish"]))
						{
							$status = 1;
						}
						else
						{
							$status = 0;
						}
		
						$con = mysqli_connect("localhost","root","","ppaproject");
		
						if (!$con)
						{
							die("Sorry!!! We are facing technical issue..");
						}
		
						$sql = "INSERT INTO `tblblog` (`advertisementID`, `brand`, `imagePath`,`description`, `publish`) VALUES (NULL, '".$brand."', '".$image."', '".$description."', '".$status."');";
		
						if (mysqli_query($con, $sql) > 0)
						{
							echo "Advertisement uploaded successfully!";
						}
						else
						{
							echo "Oops!! Something went wrong, please select the file again!";
						}
					}
				?>
				
            </form>
        </article>
    </section>
    
</body>

</html>
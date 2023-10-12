<?php session_start();
?>

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
            <form action="items.php" method="post" enctype="multipart/form-data">
                <div>
                    <h1>
                        Add Items To database
                    </h1>
                </div>
                
                <div>
                    <label for="ProductName">Brand Name :</label>
                    <input type="text" id="txtTitle" name="txtTitle" placeholder="Enter Brand Name" required>
                </div>
                
                    
                <div>
                    <label for="Description">Description :</label>
                    <input type="text" id="txtDescription" name="txtDescription" placeholder="Enter Description">
                </div>

                <div>
                    <label for="price">Price : </label>
                    <input type="text" id="txtprice" name="txtprice" placeholder="Enter price" required>
                </div>
    
                <div>
                    <label for="image">Image</label>
                    <input type="file" name="imageFile" required>
                </div>
    
                <div>
                    <label for="category">Category     </label>
                    <select name="lstCategory">
                        <option value="Men">Men</option>
						<option value="Women">Women</option>
                    </select>
                </div>
    
                <div>
                    <label for="contactNumber">Contact Number <span style="color: red; font-size: 20px;">*</span></label>
                    <input type="text" name="txtContactNumber" placeholder="Your Contact Number" >
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
						$productname = $_POST["txtTitle"];
						$description = $_POST["txtDescription"];
                        $price = $_POST["txtprice"];
						$contactNumber = $_POST["txtContactNumber"];
						$category = $_POST["lstCategory"];
		
						$image = "uploads/".basename($_FILES["imageFile"]["name"]);
						move_uploaded_file($_FILES["imageFile"]["tmp_name"],$image);
		
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
		
						$sql = "INSERT INTO `tblitems` (`advertisementID`, `productName`, `description`,`item_price`, `publish`, `imagePath`, `contactNumber`, `category`) VALUES (NULL, '".$productname."', '".$description."', '".$price."', '".$status."', '".$image."', '".$contactNumber."', '".$category."')";
		
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
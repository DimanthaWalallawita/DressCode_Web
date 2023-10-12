<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Responsive Payment getway form design in Hindi</title>
	<link rel="stylesheet" type="text/css" href="payment.css">

	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script src="sweetalert2.all.min.js"></script>
	<script src="sweetalert2.min.js"></script>
	<link rel="stylesheet" href="sweetalert2.min.css">

	<script>
		function dilevery()
		{
			Swal.fire({
  					position: 'center',
  					icon: 'success',
  					title: 'Your Order is On the way',
  					showConfirmButton: false,
  					timer: 3500
					})
		}

		function cardPayment()
		{
			let name = document.getElementById("txtname").value;
			let email = document.getElementById("txtemail").value;
			let address = document.getElementById("txtaddress").value;
			let city = document.getElementById("txtcity").value;
			let select = document.getElementById("txtselect").value;
			let zip = document.getElementById("txtzip").value;
			let card = document.getElementById("txtcard").value;
			let month = document.getElementById("txtmonth").value;
			let year = document.getElementById("txtyear").value;
			let cvv = document.getElementById("txtcvn").value;

			if(name=="" || email=="" || address=="" || city=="" || select=="" || zip=="" || card=="" || month=="" || year=="" || cvv==""){
				Swal.fire({
  					position: 'center',
  					icon: 'error',
  					title: 'Please Check Your Data',
  					showConfirmButton: false,
  					timer: 3500
					})
			}
			else{
				Swal.fire({
  					position: 'center',
  					icon: 'success',
  					title: 'Your Order is On the way',
  					showConfirmButton: false,
  					timer: 3500
					})
			}
		}

	</script>
</head>
<body>
<header>
	<div class="container">
		<div class="left">
			<h3>BILLING ADDRESS</h3>
			<form>
				Full name
				<input type="text" id="txtname" placeholder="Enter name">
				Email
				<input type="text" id="txtemail" placeholder="Enter email">

				Address
				<input type="text" id="txtaddress" placeholder="Enter address">
				
				City
				<input type="text" id="txtcity" placeholder="Enter City">
				<div id="zip">
					<label>
						State
						<select id="txtselect">
							<option>Choose State..</option>
							<option>Kandy</option>
							<option>Collombo</option>
							<option>Jaffna</option>
							<option>Ampara</option>
							<option>Kuruagala</option>
						</select>
					</label>
						<label>
						Zip code
						<input type="number" id="txtzip" placeholder="Zip code">
					</label>
				</div>
			</form>
		</div>
		<div class="right">
			<h3>PAYMENT</h3>
			<form>
				Accepted Card <br>
				<img src="img/card1.png" width="100">
				<img src="img/card2.png" width="50">
				<br><br>

				Credit card number
			<input type="text" id="txtcard" placeholder="Enter card number">
				
				Exp month
				<input type="text" id="txtmonth" placeholder="Enter Month">
				<div id="zip">
					<label>
						Exp year
						<select id="txtyear">
							<option>Choose Year..</option>
							<option>2023</option>
							<option>2024</option>
							<option>2025</option>
							<option>2026</option>
						</select>
					</label>
						<label>
						CVV
						<input type="number" id="txtcvn" placeholder="CVV">
					</label>
				</div>
			</form>
			<input onClick="cardPayment()" style="margin-bottom:5px;" type="submit" name="" value="Proceed to Checkout">
			----------------------------or----------------------------
			<input onClick="dilevery()" style="margin-top:5px; margin-bottom:8px;" type="submit" name="" value="Cash on Dilevery">
		</div>
	</div>
</header>
</body>
</html>
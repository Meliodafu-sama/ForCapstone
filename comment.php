<!DOCTYPE html>
<html>
<head>
	<title>Sample</title>
</head>

<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" href="comment.css">

<body>

	<form action="insert.php" method="POST">
		<div class="nameinput">
			<input type="text" 
				name="name"
				class="firstInput" 
				placeholder="Your Name" />	
		</div>

		<div>
			<input type="email" 
				name="email"
				class="secondInput"
				placeholder="Your Email" />
		</div>
	
		<div>
			<textarea 
				name="review"
				class="reviewInput" 
				placeholder="Your Review"></textarea>
		</div>

		<div class="rating">
			<input type="radio" 
				name="star"
				id="star1"
				value="5" />
			<label for="star1"></label>

			<input type="radio" 
				name="star"
				id="star2" 
				value="4" />
			<label for="star2"></label>

			<input type="radio" 
				name="star"
				id="star3" 
				value="3" />
			<label for="star3"></label>

			<input type="radio" 
				name="star"
				id="star4"
				value="2" />
			<label for="star4"></label>

			<input type="radio" 
				name="star"
				id="star5"
				value="1" />
			<label for="star5"></label>
		</div>

		<input type="submit" 
				class="btn_submit" 
				value="submit"/>
	</form>

</body>
</html>
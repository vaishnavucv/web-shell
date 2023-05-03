<!DOCTYPE html>
<html>
<head>
	<title>AJAX Command Runner</title>
	<style>
		.output-box {
			background-color: black;
			color: green;
			padding: 10px;
			margin-top: 20px;
		}
		.loader {
			border: 10px solid #f3f3f3;
			border-top: 10px solid green;
			border-radius: 50%;
			width: 50px;
			height: 50px;
			animation: spin 2s linear infinite;
			margin: 0 auto;
		}
		@keyframes spin {
			0% { transform: rotate(0deg); }
			100% { transform: rotate(360deg); }
		}
	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script>
		$(document).ready(function() {
			$('#command-form').submit(function(event) {
				event.preventDefault();
				var formData = $(this).serialize();
				$('#output-box').html('<div class="loader"></div>');
				$.ajax({
					type: 'POST',
					url: 'command.php',
					data: formData,
					success: function(response) {
						$('#output-box').html('<div class="output-box">' + response + '</div>');
					}
				});
			});
		});
	</script>
</head>
<body>

	<h1>AJAX Command Runner</h1>

	<form id="command-form">
		<label for="command">Enter a command:</label>
		<input type="text" id="command" name="command">
		<button type="submit">Run Command</button>
	</form>

	<div id="output-box"></div>

</body>
</html>


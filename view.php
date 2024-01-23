<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Game</title>
</head>
<body>
	<!-- TODO: add a form for the user to play the game -->
	<h1>Language Quiz Game</h1>
	<form method="post">
		<!-- Input field for user to enter translation -->
		<label for="translation">Translate the word:</label>
        <input type="text" id="translation" name="translation" required>
        <!-- Submit button -->
        <button type="submit">Submit Answer</button>
    </form>
</body>
</html>
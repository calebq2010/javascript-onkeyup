<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
</head>
<body>

<p>This example uses the HTML DOM to assign an "onkeyup" event to an input element.</p>

<p>Press a key insidethe text field and release it to set the text to uppercase.</p>

Enter your text: <input type="text" id="fname">

<script >
	
document.getElementById("fname").onkeyup = function() {myFunction()};

function myFunction(){
	var x = document.getElementById("fname");
	x.value = x.value.toUpperCase();
}

</script>	
</body>
</html>
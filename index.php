<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>onkeyup</title>
	<script src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
	<style>
	</style>
</head>
<body>
Enter your name: <input type="text" id="fname" onkeydown="myFunction()"> 

<!-- onkeyup function is above. There are 3 differnt types: onkeydown, onkeyup and onkeypress. For example onkeydown takes effect when the user hits the keydown it will input, when onkeyup it will input the change at the time the key is released, onkeypress is at the time the key is pressed -->

<p>When you leave the input field, a function is triggered which transforms the input text to upper case.</p>

<div id="divid"></div>

<script type= "text/javascript">

function myFunction(){
	var input = document.getElementById('fname')
	var div = document.getElementById('divid');
	div.innerHTML = input.value;
}

</script>
</body>
</html>
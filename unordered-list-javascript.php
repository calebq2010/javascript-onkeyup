<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>unordered-list</title>
	<script src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
	<style>
	</style>
</head>
<body>

Enter text here: <input type="text" id="theList" onkeyup="filter(this)" />

<p>Unordered List</p>

<ul style="list-style-type:square" id="theList">
	<li>Caleb</li>
	<li>Elijah</li>
	<li>Kayla</li>
	<li>Nate</li>
	<li>Matt</li>

</ul>

<script>
	
function filter(element) {
	var value = $(element).val();


	$("#theList > li").each(function(){
		if ($(this).text().search(value) > -1) {
			$(this).show();
		}
		else {
			$(this).hide();
		}
	});
}

</script>	
</body>
</html>
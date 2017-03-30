<!DOCTYPE html>
<html>
<head>
<title>Search Films</title>
</head>

<body>
<style>
body{
background-color: lightgrey;
}

#content{
    position: absolute;
    top:200px;
    left: 560px;
    width: 775px;
    height: 605px;
}


</style>
<h1 align="center" style="font-size:400%;">Film Finder</h1>
<form method="GET" action="search.php">
	<h2 align="center"> Enter a film category </h2>
	<div id="content">
	<input  type="text" name="query" placeholder="Search..." style="float:center">
	<button type="submit">Search</button>
	</div>
 
</form>
</body>
</html>
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
    width: 200px;
    height: 50px;
}


#content2{
    position: absolute;
    top:300px;
    left: 100px;
    width: 200px;
    height: 50px;
	
}
#content3{
    position: absolute;
    top:300px;
    left: 500px;
    width: 200px;
    height: 50px;
	
}
#content4{
    position: absolute;
    top:300px;
    left: 900px;
    width: 200px;
    height: 50px;
	
}
</style>
<h1 align="center" style="font-size:400%;">Film Finder</h1>
<form method="GET" action="search.php">
	<h2 align="center"> Enter a film category </h2>
	<div id="content">
	<input  type="text" name="query" placeholder="Search..." style="float:center">
	<br><br>
	<button type="submit">Search</button>
	</div>
 
</form>
<div id="content2">
<img src="https://resizing.flixster.com/vaPQCoknYjWV9t0h7m0oeOY3RcU=/206x305/v1.bTsxMTE2NjQyNTtqOzE3MzY0OzEyMDA7ODAwOzEyMDA"  style="float:left;width:304px;height:308px;">
</div>
<div id="content3">
<img src="https://s-media-cache-ak0.pinimg.com/236x/4d/b3/3e/4db33e691c3e84de4a6ec31273109165.jpg"  style="float:left;width:304px;height:308px;">
</div>

<div id="content4">
<img src="http://schmoesknow.com/wp-content/uploads/2014/02/1759273206_1369792720.jpg"  style="float:left;width:304px;height:308px;">
</div>

</body>
</html>
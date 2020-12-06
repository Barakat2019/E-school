<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>E-school</title>
	<link rel="stylesheet" href="..\css/navigation-bar/style.css">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container d-flex align-items-center px-4">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <form action="#" class="searchform order-lg-last">
          <div class="form-group d-flex">
            <input type="text" class="form-control pl-3" placeholder="Search">
            <button type="submit" placeholder="" class="form-control search"><span class="ion-ios-search"></span></button>
          </div>
        </form>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav mr-auto">
	        	<li class="nav-item"><a href="home.php" class="nav-link pl-0" aria-selected="true">Home</a></li>
	        	<li class="nav-item"><a href="" class="nav-link" aria-selected="false">About</a></li>
	        	<li class="nav-item"><a href="Admin.php" class="nav-link" aria-selected="false">Manager</a></li>
	        	<li class="nav-item"><a href="login.php" class="nav-link" aria-selected="false">Login</a></li>
	        	<li class="nav-item"><a href="" class="nav-link" aria-selected="false">Blog</a></li>
	          <li class="nav-item"><a href="" class="nav-link" aria-selected="false">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>

</body>
<script src="../js/jquery/jquery.min.js"></script>

<script>
	$(document).ready(function(){
		  $('ul li a').click(function(){
    	  	 $('li a').removeClass("active1");
    		 $(this).addClass("active1");
			});
		});

</script>
</html>
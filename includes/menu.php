<nav class="navbar navbar-inverse">
        <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
<!--             <img alt="Cube Technosoft" src="images/cube_ts_logo_rev_01.png" height="75px" width="75px"/> -->
             <img alt="Cube Technosoft" src="images/logo.png" height="75px" width="75px"/>
        </div>
            <!-- Menu Items -->
            <div class="collapse navbar-collapse" id="mainNavBar">
                <ul class="nav navbar-nav">
					<li><a href="">                 </a></li>              
                    <li><a href="index.php">Home</a></li>
                    <li><a href="training.php">Training</a></li>
					<li><a href="placement.php">Placement</a></li>
<!-- 					<li><a href="products.php">Products</a></li> -->
					<li><a href="services.php">Services</a></li>
<?php              
               global $login_setup;
if ($login_setup==="ok")
{
	include 'log.php';
}
?>
                
    			
    			
            </div>
        </div>
    </nav>

<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }

  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }

?>



<!DOCTYPE html>

<head>
  <title>The Independent Day of Bangladesh</title>
  
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=9" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>
  
</head>

<body>
  <div id="main">
	
	<div id="menubar">
	  <div id="welcome"><h2>THE INDEPENDENCE DAY</h2>
	    
	  </div><!--close welcome-->
      
      <div id="menu_items">
	    <ul id="menu">
          <li><a href="home.php">Home</a></li>
          </li>
          <li><a href="history.php">History</a></li>
          
        
          <li><a href="photos.php">Photos</a></li>
         
          <li><a href="videos.php">Videos</a></li>
          
          <li><a href="recipes.php">Recipes</a></li>
          
          <li><a href="poems.php">Poems</a></li>
          
        </ul></div><!--close menu-->
    </div><!--close menubar-->	
	
	<div id="site_content">	

	  <div class="sidebar_container">       
		<div class="sidebar">
         <!-- <div class="sidebar_item">
            <h2>BANGLADESH</h2>
            <p>On 16th December,1971 Bangladesh has got an achievement as an independent nation against Pakistan.</p>
          </div>  --><!--close sidebar_item--> 
        </div><!--close sidebar-->     -->		
		<div class="sidebar">
          <div class="sidebar_item">
            
            <h2> <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <h3>
          <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
          ?>
        </h3>
      </div>
    <?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
      <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
      <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?></h2><br><br><br><br><br><br>
<h2>Some important images</h2>
            <h3><marquee speed="4"><center>
                                            <img src="pic/s1.jpg" width="350" height="180">
                                            <img src="pic/s2.jpg" width="350" height="180">
                                            <img src="pic/ss.jpg" width="350" height="180">
                                            <img src="pic/sss.jpg" width="350" height="180">
                                            <img src="pic/ssss.jpg" width="350" height="180">
                                            <img src="pic/s1.jpg" width="350" height="180">
                                            <img src="pic/s2.jpg" width="350" height="180">
                                            <img src="pic/ss.jpg" width="350" height="180">
                                            <img src="pic/sss.jpg" width="350" height="180">
                                            <img src="pic/ssss.jpg" width="350" height="180"
                                            </center></marquee></h3>
                  
		  </div><!--close sidebar_item--> 
        </div><!--close sidebar-->  
		<div class="sidebar">
          <div class="sidebar_item">
            <h3></h3>
            <p></p>         
		  </div><!--close sidebar_item--> 
        </div><!--close sidebar-->  		
        <div class="sidebar">
          <div class="sidebar_item">
            <h2>Contact</h2>
            <p>Phone: +60 1125800758</p>
            <p>Email: <a href="https://mail.google.com/mail/u/0/?tab=mm#inbox">ratansrsts@gmail.com</a></p>
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
       </div><!--close sidebar_container-->	
	
      <div class="slideshow">  
		<ul class="slideshow">
          <li class="show"><img width="680" height="400" src="images/0.jpg" alt="THE NATIONAL FLAG OF BANGLADESH"></li>
          <li><img width="680" height="400" src="images/1.jpg" alt="Historical image at Comilla Buddho Bihar"</li>
          <li><img width="680" height="400" src="images/3.jpg" alt="Pakistanis in Bangladesh Suerrendered!"</li>
        </ul>  	
	  </div><!--close slideshow-->  
	   
	   <div id="content">
        <div class="content_item">
		  <div class="form_settings">
            <h2><font size="6">BANGLADESH IS AN INDEPENDENT NATION FROM ON 16 DECMBER,1971.</font></h2>
             

            
  <div id="footer">
	 
  </div><!--close footer-->  	
  
</body>
</html>

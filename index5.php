<?php 
$page_title = "Tae Home";
$page_description = "Description of this page";
include("header.php"); ?>
<body>
<div id="slider">
    <div id="tooplate_wrapper">
        <div id="tooplate_sidebar">
            <div id="header">
            	<h1><a href="#">Vertiwood Template</a></h1>
            </div>
            <div id="menu">
                <ul class="navigation">
                	<li><a href="index5.php" class="selected">TAE</a></li>
                    <li><a href="index5.php#document">Documentos</a></li>
                    <li><a href="index5.php#multimedia" class="last">Multimedia</a></li>
                </ul>
            </div>
        </div> <!-- end of sidebar -->      	
        <div id="content">
       	  	<div class="scroll">
        	  <div class="scrollContainer">
                <div class="panel" id="home">
				
                	<h2>Bienvenido al tae</h2>   
                    <p><em>El TAE-UMSA le proporciona a usted la información necesaria sobre los contenidos.</em></p>	           
                    <img src="images/tae_logo.png" alt="Image 01" width="100%" height="100%" />             
                
                </div> <!-- end of home -->

                <div class="panel" id="document">
                	<h2>Documentos</h2>
                    <div class="center">
                    <a href="libretos.php"><img src="images/libreto1.png" alt="Image 03" rel="nofollow" height="80" width="80" class="image_wrapper" /><p class="madera"><strong>Libretos</strong></p></a>                    
                    <a href="revistas.php"><img src="images/revista1.png" alt="Image 03" rel="nofollow" height="80" width="80" class="image_wrapper" /><p class="madera"><strong>Revistas</strong></p></a>
                    <a href="libros.php"><img src="images/libro1.png" alt="Image 03" rel="nofollow" height="80" width="80" class="image_wrapper" /><p class="madera"><strong>Libros</strong></p></a>
                    </div>
                    
                </div> <!-- end of document -->
        	  	
                <div class="panel" id="multimedia">
                    <h2>Multimedia</h2>
                    <div class="center">
                    <br/><br/>
                    <a href="audios.php"><img src="images/audio1.png" alt="Image 03" rel="nofollow" height="100" width="100" class="image_wrapper" /><p class="madera"><strong>Audio</strong></p></a>
                    <a href="videos.php"><img src="images/movie.png" alt="Image 03" href="#home" rel="nofollow" height="100" width="100" class="image_wrapper" /><p class="madera"><strong>Videos</strong></p></a>                            
                    </div>
                    
        	  	</div> <!-- end of multimedia -->
                  
                </div> <!-- end of scroll -->
            </div>
        <div class="cleaner"></div>
        </div>
    </div> <!-- end of content -->
    <?php include("footer.html");?>
</div>
</body>
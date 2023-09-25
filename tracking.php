<?php 

include("topbar.php");

include("library.php");

$location = "";

$activity = new Activities();

if (isset($_POST['search'])) {

    $item = $_POST['user_input'];

      $display = $activity->itemTracking($item); 

       if (is_array($display)) {
                        
            foreach ($display as $value) {
                
                    $location = $value['venue'];
                // echo '<li class="list-group-item">Current item location: '.$location.'</li>';
                echo '<script>alert("'.$location.'")</script>';
                
               
            }
        }else {
            // echo '<li class="list-group-item">No result found</li>';
            echo '<script>alert("no results found")</script>';
        }
    

   
    
}



?>

<style type="text/css">
	.track{

		height: 300px;
		background-color:#e6e6e6;
	}
</style>

 <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5">
        <div class="owl-carousel header-carousel position-relative mb-5">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carousel-1.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(6, 3, 21, .5);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">Transport & Logistics Solution</h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">#1 Place For Your <span class="text-primary">Logistics</span> Solution</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">Your trusted global shipping company</p>
                                <a href="about.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                               <!--  <a href="" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Free Quote</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carousel-2.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(6, 3, 21, .5);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">Transport & Logistics Solution</h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">#1 Place For Your <span class="text-primary">Transport</span> Solution</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">Import and export on the new world experience</p>
                                <a href="about.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                                <!-- <a href="" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Free Quote</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- tracking -->
    <div class="container-fluid track">

    	 <form method="post">
                    <div class="input-group">
    <input type="text" class="form-control" style="padding: 10px;"  placeholder="Tracking ID" name="user_input" required>
                    <div class="input-group-append">
    <button type="submit" class="btn btn-primary px-3" name="search">Track & Trace</button>
                    </div>
                </div> 
                </form>

                        <!-- displaying search results -->
                        <ul class="list-group">

                            <?php 



                           

                               
                             

                        ?>
                  
                </ul>



    	
    </div>
    <!-- tracking -->


    <!-- footer -->

    <?php include("footer.php"); ?>

    <!-- footer -->

     <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>






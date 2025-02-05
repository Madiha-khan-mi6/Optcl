<?php include "header.php";?>

<body>

  <!--header-->
  
  <header>

    <?php include "navigation.php";?>

  </header>
  
  <div data-scroll-container>


    <section class="non-vh desktop-view" data-scroll-section>
      
      <div class="container-fluid bg-white">
        <div class="spacer-120"></div>
        <div class="spacer-40"></div>

        <div class="container">
          <h3 class="fnt-blue d-flex align-items-center">
            <img src="img/drop-yellow-en.svg" class="img-fluid fa-mar-right-20"> 
            Distributors
          </h3>
          <div class="spacer-20"></div>

          <p class="fnt-20">We are excited about your interest in becoming a distributor of our products. Please fill out the following form and a representative from our office will contact you to discuss opportunities.</p>
          <div class="spacer-20"></div>

          <img src="img/dist-banner.jpg" class="img-fluid w-100 br-rad-shadowed">

        </div>

      </div>

    </section>

    <section class="desktop-view" data-scroll-section>
      
      <div class="container-fluid bg-white">
        <div class="spacer-120"></div>

        <div class="container">
           <h3>Application Form</h3>
           <div class="spacer-20"></div>

           <form action="">
             <div class="row">

               <div class="col-md-4">
                 <input type="text" name="fullname" class="form-control cu-control" placeholder="Name" required>
                 <div class="spacer-20"></div>
               </div>

                <div class="col-md-4">
                 <input type="tel" name="phone" class="form-control cu-control" placeholder="Phone Number" required>
                 <div class="spacer-20"></div>
               </div>

                <div class="col-md-4">
                 <input type="email" name="email" class="form-control cu-control" placeholder="Email" required>
                 <div class="spacer-20"></div>
               </div>

                <div class="col-md-6">
                 <input type="text" name="add1" class="form-control cu-control" placeholder="Address 1" required>
                 <div class="spacer-20"></div>
               </div> 

                <div class="col-md-6">
                 <input type="text" name="add12" class="form-control cu-control" placeholder="Address 2">
                 <div class="spacer-20"></div>
               </div>  

               <div class="col-md-4">
                 <input type="text" name="city" class="form-control cu-control" placeholder="City" required>
                 <div class="spacer-20"></div>
               </div>  

               <div class="col-md-4">
                 <input type="text" name="gov" class="form-control cu-control" placeholder="Governorate" required>
                 <div class="spacer-20"></div>
               </div> 

               <div class="col-md-4">
                 <input type="text" name="postal" class="form-control cu-control" placeholder="Postal Code" required>
                 <div class="spacer-20"></div>
               </div>

                <div class="col-md-3">
                 <<button class="btn btn-warning btn-yellow w-100">Send <i class="fa-solid fa-location-arrow"></i></button>
               </div>


             </div>
           </form>

        </div>

      
        <div class="spacer-40"></div>
      </div>
      
      
    </section>


    <?php include "footer-page.php";?>

  </div>

  <?php include "scripts.php";?>
   
  </body>
</html>

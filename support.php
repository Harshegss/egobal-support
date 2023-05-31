<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="manifest" href="manifest.json" />
    <link rel="icon" href="assets/images/favicon/2.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="assets/images/favicon/2.png" />
    <meta name="theme-color" content="#e22454" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="apple-mobile-web-app-title" content="Huawei" />
    <meta name="msapplication-TileImage" content="assets/images/favicon/2.png" />
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Huawei">
    <meta name="keywords" content="Huawei">
    <meta name="author" content="Huawei">
    <link rel="icon" href="assets/images/favicon/2.png" type="image/x-icon" />
    <title>Voxo : Support</title>

    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&amp;display=swap" rel="stylesheet">

    <!-- bootstrap css -->
    <link id="rtl-link" rel="stylesheet" type="text/css" href="assets/css/vendors/bootstrap.css">

    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/font-awesome.css">

    <!-- feather icon css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/feather-icon.css">

    <!-- animation css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/animate.css">

    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/slick/slick-theme.css">

    <!-- Theme css -->
    <link id="color-link" rel="stylesheet" type="text/css" href="assets/css/demo2.css">
    <link rel="stylesheet" type="text/css" href="assets/css/custom.css">

</head>

<body class="theme-color2 light ltr">

    <!--navigation Bar-->
    <?php include 'navbar.php'?>
    <!--end navigation bar-->
    
    <!-- Breadcrumb section start -->
    <section class="breadcrumb-section py-3 ">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="h2 text-start">Support</h>
                  
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb section end -->

    <!-- Contact Section Start -->


    
    <section class="contact-section section-b-space ">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-7 form-test">
                    <!-- <div class="materialContainer">
                        <div class="material-details">
                            <div class="title title1 title-effect mb-1 title-left">
                                <h2>Contact Us</h2>
                                <p class="ms-0 w-100">Your email address will not be published. Required fields are
                                    marked *</p>
                            </div>
                        </div>
                        <div class="row g-4 mt-md-1 mt-2">
                            <div class="col-md-6">
                                <label for="first" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="first" placeholder="Enter Your First Name"
                                    required>
                            </div>
                            <div class="col-md-6">
                                <label for="last" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="last" placeholder="Enter Your Last Name"
                                    required>
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email"
                                    placeholder="Enter Your Email Address" required>
                            </div>
                            <div class="col-md-6">
                                <label for="email2" class="form-label">Confirm Email</label>
                                <input type="email" class="form-control" id="email2"
                                    placeholder="Enter Your Confirm Email Address" required>
                            </div>

                            <div class="col-12">
                                <label for="comment" class="form-label">Comment</label>
                                <textarea class="form-control" id="comment" rows="5" required></textarea>
                            </div>

                            <div class="col-auto">
                                <button class="btn btn-solid-default" type="submit">Submit</button>
                            </div>
                        </div>
                    </div> -->
              
                    <form id="regForm" action="" >

                        <h2 class="text-center mb-4">Describe about & Issue : </h2>
                        
                        <!-- One "tab" for each step in the form: -->
                        <div class="tab ">
                            <!-- <label class="mb-2 px-3"><strong> Name: </strong> </label>  -->
                          <p><input type="text" placeholder="First name..." oninput="this.className = ''" required></p>
                          <p><input  type="text"  placeholder="Last name..." oninput="this.className = ''" required></p>
                        </div>
                        
                        <div class="tab">
                           <!-- <label> Contact Info: </label>  -->
                          <p><input  type="email" class="email"  placeholder="E-mail..." oninput="this.className = ''" required></p>
                          <p><input  type="text"  placeholder="Phone..." oninput="this.className = ''" required></p>
                        </div>
                        
                        <div class="tab">
                            <!-- <label> Birthday: </label>  -->
                          <p><input type="text" placeholder="Address" oninput="this.className = ''" required></p>
                          <p><input type="number" placeholder="Zip Code" oninput="this.className = ''" required></p>
                        
                        </div>
                        
                        <div class="tab">
                            <!-- <label> Login Info: </label> -->
                          <p>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Describe your issue"></textarea>
                          </p>
                        
                        </div>
                        
                        <div style="overflow:auto;">
                          <div style="float:right;">
                            <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                            <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                          </div>
                        </div>
                        
                        <!-- Circles which indicates the steps of the form: -->
                        <div style="text-align:center;margin-top:40px;">
                          <span class="step"></span>
                          <span class="step"></span>
                          <span class="step"></span>
                          <span class="step"></span>
                        </div>
                        
                        </form>   
              
              
              
              
                </div>

                <div class="col-lg-5">
                    <div class="contact-details">
                        <div>
                            <h2>Let's get in touch</h2>
                            <h5 class="font-light">We're open for any suggestion or just to have a chat</h5>
                            <div class="contact-box">
                                <div class="contact-icon">
                                    <i data-feather="map-pin"></i>
                                </div>
                                <div class="contact-title">
                                    <h4>Live Chat :</h4>
                                   <h6 class="btn bg-light border corder-2">Live Chat</h6>
                                </div>
                            </div>

                            <div class="contact-box">
                                <div class="contact-icon">
                                    <i data-feather="phone"></i>
                                </div>
                                <div class="contact-title">
                                    <h4>Phone Number :</h4>
                                    <p>+ 185659635</p>
                                    <p>+ 658651167</p>
                                </div>
                            </div>

                            <div class="contact-box">
                                <div class="contact-icon">
                                    <i data-feather="mail"></i>
                                </div>
                                <div class="contact-title">
                                    <h4>Email Address :</h4>
                                    <p>voxo123@gmail.com</p>
                                    <p>voxo987@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Map Section start -->
    <!-- <section class="contact-section">
        <div class="container-fluid">
            <div class="row gy-4">
                <div class="col-12 p-0">
                    <div class="location-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13004069.896900944!2d-104.65611544442767!3d37.27565371492453!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2sin!4v1649149282556!5m2!1sen!2sin" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Map Section End -->

    <!-- Subscribe Section Start -->
    <section class="subscribe-section section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-6">
                    <div class="subscribe-details">
                        <h2 class="mb-3">Subscribe Our News</h2>
                        <h6 class="font-light">Subscribe and receive our newsletters to follow the news about our fresh
                            and fantastic Products.</h6>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mt-md-0 mt-3">
                    <div class="subsribe-input">
                        <div class="input-group">
                            <input type="text" class="form-control subscribe-input" placeholder="Your Email Address">
                            <button class="btn btn-solid-default" type="button">Button</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Subscribe Section End -->
    
     <!-- service section end -->
    <div class="pages border-top border-3 pt-4 pb-3" >
        <div class="container">
            <p> <a href="index.php">Home</a> &nbsp; / &nbsp; <a href="javascript:void();"> Support </a></p>
        </div>
    </div>

    <!--footer-->
    <?php include'footer.php'?>
    <!--end Footer-->

    <script>
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab
        
        function showTab(n) {
          // This function will display the specified tab of the form...
          var x = document.getElementsByClassName("tab");
          x[n].style.display = "block";
          //... and fix the Previous/Next buttons:
          if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
          } else {
            document.getElementById("prevBtn").style.display = "inline";
          }
          if (n == (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = "Submit";
          } else {
            document.getElementById("nextBtn").innerHTML = "Next";
          }
          //... and run a function that will display the correct step indicator:
          fixStepIndicator(n)
        }
        
        function nextPrev(n) {
          // This function will figure out which tab to display
          var x = document.getElementsByClassName("tab");
          // Exit the function if any field in the current tab is invalid:
          if (n == 1 && !validateForm()) return false;
          // Hide the current tab:
          x[currentTab].style.display = "none";
          // Increase or decrease the current tab by 1:
          currentTab = currentTab + n;
          // if you have reached the end of the form...
          if (currentTab >= x.length) {
            // ... the form gets submitted:
            document.getElementById("regForm").submit();
            return false;
          }
          // Otherwise, display the correct tab:
          showTab(currentTab);
        }
        
        function validateForm() {
          // This function deals with validation of the form fields
          var x, y, i, valid = true;
          x = document.getElementsByClassName("tab");
          y = x[currentTab].getElementsByTagName("input");
          // A loop that checks every input field in the current tab:
          for (i = 0; i < y.length; i++) {
            // If a field is empty...
            if (y[i].value == "") {
              // add an "invalid" class to the field:
              y[i].className += " invalid";
              // and set the current valid status to false
              valid = false;
            }
          }
          // If the valid status is true, mark the step as finished and valid:
          if (valid) {
            document.getElementsByClassName("step")[currentTab].className += " finish";
          }
          return valid; // return the valid status
        }
        
        function fixStepIndicator(n) {
          // This function removes the "active" class of all steps...
          var i, x = document.getElementsByClassName("step");
          for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
          }
          //... and adds the "active" class on the current step:
          x[n].className += " active";
        }

        // function ValidateEmail(inputText){
        //     var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/; 
        //     if(inputText.value.match(mailformat)){
        //         return true;
        //     }
        //     else {
        //         return false;
        //     }
        // }

    </script>

    

</body>

</html>
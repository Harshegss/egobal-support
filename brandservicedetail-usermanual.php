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
    <title>Product</title>

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
    <style>
      header.nav-down .navbar-searchbar {
    position: fixed;}
   </style>
</head>

<body class="theme-color2 light ltr "><!--  -->
    <!-- preloader -->
     <!-- <div class="loader-container">
      <div class="loader"></div>
    </div> -->
    <!-- end preloader -->

    <!--navigation Bar-->
    <?php include 'navbar.php'?>
    <!--end navigation bar-->

     
     
     
    <!-- mannual -->

        <section class="prdetails-section trick-section section-b-space section-t-space bg-light" >
            <div class="container p-0">
                <h1 class="h2 text-center">Manual Downloads</h1>
                <hr style="padding:1px 0">
                <div class="row g-4">
                    <div class="col-lg-7 border-end border-2 ">
                        <div class="mannualContainer">
                          <form methord ="post" action="support.php">
                            <div class="row g-4 mt-md-1 mt-2">
                                <div class="col-md-12">
                                    
                                    <input type="text" class="form-control" id="name" placeholder="Enter Your  Name"  autocomplete="off" required >
                                </div>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" id="email" placeholder="Enter Your Email"  autocomplete="off" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="phone" placeholder="Enter Your Phone"  autocomplete="off" required >
                                </div>
                                <div class="col-md-12">
                                    <input type="search"  class="form-control" id="modalinpit" placeholder="Enter a Device Modal"   autocomplete="off" required>
                                </div>
                                <div class="col-lg-12 text-center">
                                    <button id="submit"  class="btn bg-secondary text-light rounded rounded-5" type="submit">Search</button>
                                </div>
                            </div>
                          </form>
                          <div class="manual-list">
                             <ul class="list-unstyled">
                                 <li id="m1" >mannual am zt3 </li>
                                 <li id="m2">mannual2 st yx 1</li>
                                 <li id="m3">mannual3 ip t192</li>
                                 <li id="m4">mannual4 dsjkhefjkvas</li>
                             </ul>
                          </div>

                        </div>
                    </div>
                    <div class="col-lg-5 p-4">
                      <div class="output">
                         <div class="m1 mb-3">
                            <h4><a href="assets/manual/lorem-ipsum.pdf" target="_blank">This is mannual 1 &nbsp; &nbsp;<i class="fa fa-download"></i> &nbsp;&nbsp;Download </a></h4>
                         </div>
                         <div class="m2 mb-3">
                            <h4><a href="assets/manual/lorem-ipsum.pdf" target="_blank">This is mannual 2 &nbsp; &nbsp;<i class="fa fa-download"></i> &nbsp;&nbsp;Download </a></h4>
                         </div>
                         <div class="m3 mb-3">
                            <h4><a href="assets/manual/lorem-ipsum.pdf" target="_blank">This is mannual 3 &nbsp; &nbsp;<i class="fa fa-download"></i> &nbsp;&nbsp;Download </a></h4>
                         </div>
                         <div class="m4 mb-3">
                            <h4><a href="assets/manual/lorem-ipsum.pdf" target="_blank">This is mannual 4 &nbsp; &nbsp;<i class="fa fa-download"></i> &nbsp;&nbsp;Download </a></h4>
                         </div>
                      </div>  
                    </div>    
                    <h4 class="reslt text-center text-dark border border-2 p-2 "> Form is successful submited</h4>
                </div>
            


            </div>
        </section>
    <!-- end mannual -->





    <!-- service section end -->
        <div class="pages border-top border-3 pt-4 pb-3" >
            <div class="container">
                <p> <a href="javascript:void();">Home</a> &nbsp; / &nbsp; <a href="javascript:void();"> product Detail </a></p>
            </div>
        </div>
        <!--footer-->
        <?php include'footer.php'?>
        <!--end footer-->
        
        <script>
       
        $(document).ready(function(){
            $("#modalinpit").on("keyup",function(){
            $(".manual-list").css("display","block");    
            var value = $(this).val().toLowerCase();
            $(".manual-list .list-unstyled li").filter(function(){
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
            });
         
            $(".manual-list .list-unstyled li").click(function(){
               const txt = $(this).text(); 
               $("#modalinpit").val(txt);
               $(".manual-list").css("display","none");
            //  console.log(txt);
            });

            $("#submit").click(function(){
                // const mval = $("#modalinpit").val().toLowerCase(); 
                $("input").each(function(){
                    if($(this).val()!==""){
                        $(".output").show('slow');
                    }
                    else{
                    console.log("Please fill the form")    
                    }

                });
               
                // $(".output").css("display","block");
               
            }); 

            // This is Form Submission without reloading 

            $('form').on('submit', function(event) {
            event.preventDefault();
              
            // It returns a array of object 
            let userinfo = $(this).serializeArray();
            let user = {};
            userinfo.forEach((value) => {
                  
                // Dynamically create an object
                user[value.name] = value.value;
            });
            let url = "https://reqres.in/api/users";
            $.ajax({
                method: "POST",
                url: url,
                data: user
            }).done(function(msg) {
                  
                // When the request is successful
                $('.reslt').show('slow');
                //  $('.reslt').show('slow').text('user mannual is successfully created with Id ' + msg.id);
            }).fail(function(err, textstatus, error) {
                $('.reslt').show('slow').text(textstatus);
            });
        });





        });
    </script>

   
</body>
</html>
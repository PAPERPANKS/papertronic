<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tinkering with paper circuit</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700" rel="stylesheet">
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">    
    <script>
      function myFunction() {
      var x = document.getElementById("chat_window");
      var chat_btn = document.getElementById("chat_btn");
      if (x.style.display === "none") {
        x.style.display = "block";
        document.getElementById("chat_icon").className = "far fa-times-circle fa-2x";
        chat_btn.className = "btn btn-danger btn-lg";
      } else {
        x.style.display = "none";
        document.getElementById("chat_icon").className = "far fa-comment-dots fa-2x";
        chat_btn.className = "btn btn-primary btn-lg";
      }  
  }
</script>
  </head>

<!-- This site is converting visitors into subscribers and customers with  - http://app.rocketbots.io 
dws63526@zzrgg.com-->

<!-- <script id="rocketbots__widget" src="https://rocketbots.oss-cn-hongkong.aliyuncs.com/webchat/widget/widget.js?cId=411d232109d7acf3b5286e5e4e20fe022f1ea8a61f9a97b6ec13b4bbd281d180"></script> -->

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
  <div class="site-wrap"  id="home-section">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    <div class="container d-none d-lg-block">
      <div class="row">
        <div class="col-12 text-center mb-4 mt-5">
            <h1 class="mb-0 site-logo"><a href="index.php" class="text-black h2 mb-0">Tinkering with paper circuit<span class="text-primary">.</span> </a></h1>
          </div>
      </div>
    </div>
    <header class="site-navbar py-md-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-md-6 col-xl-2  d-block d-lg-none">
            <h1 class="mb-0 site-logo"><a href="index.php" class="text-black h2 mb-0">Tinkering with paper circuit<span class="text-primary">.</span> </a></h1>
          </div>

          <div class="col-12 col-md-10 main-menu">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="#" class="nav-link">Home</a></li>
                <li><a href="#" class="nav-link">Features</a></li>
                <li><a href="#" class="nav-link">About Us</a></li>
                <li><a href="#" class="nav-link">Testimonials</a></li>
                <li><a href="#" class="nav-link">Blog</a></li>
                <li><a href="#" class="nav-link">Contact</a></li>
              </ul>
            </nav>
          </div>


          <div class="col-6 col-md-6 d-inline-block d-lg-none ml-md-0" ><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>
    

    <div class="site-blocks-cover">
      <div class="container">
        <div class="row align-items-center justify-content-center">

          <div class="col-md-12" style="position: relative;">
            
            <img src="images/landing_1.png" alt="Image" class="img-fluid img-absolute">

            <div class="row mb-4">
              <div class="col-lg-4 mr-auto">
                <h1>Tinkering With Paper Circuit</h1>
                <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam assumenda ea quo cupiditate facere deleniti fuga officia.</p>
                <div>
                  <a href="#" class="btn btn-primary mr-2 mb-2">Get Started</a>
                </div>
              </div>
              
              
            </div>

          </div>
        </div>
      </div>
    </div>  




    <div class="site-section bg-light" id="contact-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">Get In Touch</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-7 mb-5">

            

            <form action="#" class="p-5 bg-white">
              
              <h2 class="h4 text-black mb-5">Contact Form</h2> 

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname">First Name</label>
                  <input type="text" id="fname" class="form-control rounded-0">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="lname">Last Name</label>
                  <input type="text" id="lname" class="form-control rounded-0">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label> 
                  <input type="email" id="email" class="form-control rounded-0">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="subject">Subject</label> 
                  <input type="subject" id="subject" class="form-control rounded-0">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">Message</label> 
                  <textarea name="message" id="message" cols="30" rows="7" class="form-control rounded-0" placeholder="Write your notes or questions here..."></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Send Message" class="btn btn-primary mr-2 mb-2">
                </div>
              </div>

  
            </form>
          </div>
        
        </div>
        
      </div>
    </div>

    <div class="footer py-5 border-top text-center">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12">
            <p class="mb-0">
              <a href="#" class="p-3"><span class="icon-facebook"></span></a>
              <a href="#" class="p-3"><span class="icon-twitter"></span></a>
              <a href="#" class="p-3"><span class="icon-instagram"></span></a>
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <p class="mb-0">
              Tinkering With Paper Circuit | Paperpanks
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="" style="position: fixed; bottom: 5px; right: 20px; z-index: 1000001; box-sizing: border-box; min-width: 60px; overflow: hidden; min-height: 60px;">
      <div>
        <button id="chat_btn" type="button" class="btn btn-primary btn-lg" onClick="myFunction();">
        <i id="chat_icon" style="display:block;" class="far fa-comment-dots fa-2x"></i>
      </div>
      <div id="chat_window"style="display:none;">
        <iframe width="350" height="430" allow="microphone;" src="https://console.dialogflow.com/api-client/demo/embedded/b7f9d845-791d-497c-91fe-6a5bdec5152a"></iframe>
      </div>
    </div>
    
  </div> <!-- .site-wrap -->    
  </body>
</html>
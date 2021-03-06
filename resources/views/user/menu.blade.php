<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>E-cafe</title>
<!--
    
TemplateMo 558 E-cafe

https://templatemo.com/tm-558-klassy-cafe

-->
    <!-- Additional CSS Files -->

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" type="text/css" href="assets/css/flex-slider.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
{{-- <link rel="stylesheet" type="text/css" href="css/bootstrap.css"> --}}

{{-- <link rel="stylesheet" type="text/css" href="css/responsive.css"> --}}
{{-- <link rel="stylesheet" type="text/css" href="css/app.css"> --}}

<!-- ChatBot -->
<link rel="stylesheet" type="text/css" href="css/jquery.convform.css">





    </head>
    
    <body>


        <!-- ChatBot -->
<div class="chat_icon" style="color: #FB6355;">
	<i class='fa fa-comments' aria-hidden="true"></i>
</div>

<div class="chat_box">
	<div class="my-conv-form-wrapper">
		<form action="" method="GET" class="hidden">
			

      <select data-conv-question="Hello! How can I help you" name="category">
        <option value="WebDevelopment">About E-cafe?</option>
        <option value="DigitalMarketing">E-cafe info?</option>
      </select>

      <div data-conv-fork="category">
        <div data-conv-case="E-farm">
          <input type="text" name="domainName" data-conv-question="Please, tell me your email">    
        </div>
        <div data-conv-case="E-farm" data-conv-fork="first-question2">
          <input type="text" name="companyName" data-conv-question="Please, enter your email"> 
        </div>
      </div>

			

      <input type="text" name="name" data-conv-question="Please, Enter your name first">

      <input type="text" data-conv-question="Hi {name}, <br> It's a pleasure to meet you." data-no-answer="true">

      <input data-conv-question="Enter your e-mail" data-pattern="^[a-zA-Z0-9.!#$%&???*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" type="email" name="email" required placeholder="What's your e-mail?">


      <select data-conv-question="Please Confirm">
        <option value="Yes">Confirm</option>
      </select>
			{{-- <input type="text" name="Thanks" data-conv-question="Thanks for providing your information,we will contact you soon..."> --}}

  	</form>
	</div>
</div>
<!-- ChatBot end -->
    
    <!-- ***** Preloader Start ***** -->
    {{-- <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>   --}}
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="{{url('/')}}" class="logo">
                            <img style="height: 80px;width:80px" src="assets/images/klassy-logo.png" align="E-cafe html template">
                        </a>

                        <a class="menu-trigger" href="">

                            <span>Menu</span>


                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="{{url('/')}}" class="">Home</a></li>
                            <li class="scroll-to-section"><a href="{{url('about')}}">About</a></li>
                           	
                        
                           
                      
                            <li class="scroll-to-section"><a href="{{url('menu')}}">Menu</a></li>
                            <li class="scroll-to-section"><a href="{{url('chefs')}}">Chefs</a></li> 
                            <li class="submenu">
                                <a href="javascript:;">Features</a>
                                <ul>
                                    <li><a href="#">Features Page 1</a></li>
                                    <li><a href="#">Features Page 2</a></li>
                                    <li><a href="#">Features Page 3</a></li>
                                    <li><a href="#">Features Page 4</a></li>
                                </ul>
                            </li>
                            <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                            <li class="scroll-to-section"><a href="{{url('/contact')}}">Contact Us</a></li> 
                            <li class="scroll-to-section">

                                @auth
                                                                
                                <a href="{{url('showcart',Auth::user()->id)}}">
                                ????[{{$count}}]
                               </a>

                                @endauth
                        
                            </li> 

                            <li class="scroll-to-section">

                              @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                       <li> <x-app-layout>
 
                      </x-app-layout>
                      </li>
                    @else
                        <li><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>

                        @if (Route::has('register'))
                           <li><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
                        @endif
                    @endauth
                </div>
            @endif

                            </li>
                        </ul>        
                        {{-- <a class='menu-trigger'>
                            <span>Menu</span>
                        </a> --}}
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>


    <section class="section" id="menu">
  <div class="container">
      <div class="row">
          <div class="col-lg-4 ">
              <div class="section-heading">
                  <h6>Our Menu</h6>
                  <h2>Our selection of cakes with quality taste</h2>
              </div>
          </div>
      </div>
  </div>
  <div class="menu-item-carousel">
      <div class="col-lg-12">
          <div class="owl-menu-item owl-carousel">


            @foreach($data as $data)

            <form action="{{url('addcart',$data->id)}}" method="POST">
                @csrf
              
            
            
            <div class="item">
                  <div style="background-image: url('/foodimage/{{$data->image}}');" class='card'>
                      <div class="price"><h6>{{$data->price}}</h6></div>
                      <div class='info'>
                        <h1 class='title'>{{$data->title}}</h1>
                        <p class='description'>{{$data->description}}</p>
                        <div class="main-text-button">
                            <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                        </div>
                      </div>
                  </div>

                  <input type="number" name="quantity" min="1" value="1" style="width: 80px;">
                  <input style="background-color: #FB5849; color:white;" type="submit" value="Add to Cart">
            </div>
        </form>
            @endforeach
              

              
          </div>
      </div>
  </div>
</section>
    
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xs-12">
                    <div class="right-text-content">
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="logo">
                        <a href="index.html"><img src="" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-12">
                    <div class="left-text-content">
                        <p>?? Copyright E-cafe Co.
                        
                        <br>Design by: Fahim Mahmud</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="js/jquery.convform.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>

<script type="text/javascript">
	portfolioList = document.querySelectorAll('.portfolio-box');
	portfolioList.forEach(function(portfolioPic) {
		portfolioPic.addEventListener('click',function(){
			bg = this.style.backgroundImage;
			document.getElementById('port_pop_pic_bg').classList.add("active")
			document.getElementById('port_pop_pic').style.backgroundImage = bg
			document.getElementById('port_pop_pic').classList.add("active")
		});	
	})
	document.getElementById('port_pop_pic_bg').addEventListener('click',function(){
			document.getElementById('port_pop_pic_bg').classList.remove("active")
			document.getElementById('port_pop_pic').classList.remove("active")
	})
</script>
  </body>
</html>
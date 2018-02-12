<!DOCTYPE html>
<html>
<head>
	<title>WMSoft</title>
	<meta charset="utf-8">
	<!-- <meta name="viewport" content="width=device-width,initial-scale=1"> -->

	<link rel="stylesheet" type="text/css" href="{{ asset("data/css/bootstrap.min.css")}}">
	<link rel="stylesheet" type="text/css" href="{{ asset("data/css/animate.css")}}">
	<link rel="stylesheet" type="text/css" href="{{ asset("data/css/style.css")}}">
	<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
	<link rel="shortcut icon" type="image/png" href="{{ asset("data/img/title-img.png")}}">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

	<script type="text/javascript" src="{{ asset("data/js/jquery.min.js")}}"></script>
	<script type="text/javascript" src="{{ asset("data/js/bootstrap.min.js")}}"></script>
	<script type="text/javascript" src="{{ asset("data/js/jquery.fullPage.min.js")}}"></script>
	
</head>
<body>
<!-- ===== menu button ===== -->
<div class="container">
	<div class="row">
  	<ul class="menu"> 
	  <li data-menuanchor="secondPage">
	    <a href="#secondPage">About</a>
	  </li>
	  <li data-menuanchor="3rdPage">
	    <a href="#3rdPage">Services</a>
	  </li>
	  <li data-menuanchor="firstPage">
	    <a href="#firstPage"><img class="logo" src="{{ asset("data/img/logo.jpg")}}"></a>
	  </li>
	  <li data-menuanchor="4thpage">
	    <a href="#4thpage">Portfolio</a>
	  </li>
	  <li data-menuanchor="lastPage">
	    <a href="#lastPage">Contact</a>
	  </li>
	</ul>
</div>
</div>
<!-- ===== main section ===== -->
<div id="fullpage">
	<!-- ===== first main section ===== -->
	<div class="section section1" id="section1 firstPage">
	  <!-- <div class="home-section">
	  	
	  </div> -->
	</div>
	<!-- ===== second about section ===== -->
	<div class="section section2" id="section2">
	  <!-- <h1 class="header-text">About us</h1> -->
	  <div class="about-section">
		<h1 class="welcome-message animate-top">
		  <hr class="welcome-message-line" />
			Welcome to WMSoft
		  <hr class="welcome-message-line" />
		</h1>
		<p class="about-description animate-top">
	  	  Motivated software engineers who make the world way better by making astonishing applications and excellent websites, program, improvement of terms of reference, SEO-promotion, interviews on the advancement of ventures on the Web. The portable application advancement group comprises of exceedingly qualified experts with the most recent instruments and innovations for creating applications for portable gadgets based on iOS stages (iPhone / iPad) and Android.
	  	</p>
  	  	  <h1 class="animate-top">Our Process</h1>
  	  	  <h3 class="animate-top">this is how we roll</h3>
  	  	  <div class="col-md-3">
  	  	    <div class="second-section-content">
  	  		  <img src="{{ asset("data/img/icon/contact.png")}}" class="animate-top">
  	  		  <i class="fa fa-angle-right" aria-hidden="true"></i>
  	  		  <h3 class="animate-top">Contact</h3>
  	  	    </div>
  	      </div>
  	      <div class="col-md-3">
  	  	    <div class="second-section-content">
  	  		  <img src="{{ asset("data/img/icon/discussion.png")}}" class="animate-top">
  	  		  <i class="fa fa-angle-right" aria-hidden="true"></i>
  	  		  <h3 class="animate-top">Discussion</h3>
  	  	    </div>
  	      </div>
  	      <div class="col-md-3">
  	  	    <div class="second-section-content">
  	  		  <img src="{{ asset("data/img/icon/development.png")}}" class="animate-top">
  	  		  <i class="fa fa-angle-right" aria-hidden="true"></i>
  	  		  <h3 class="animate-top">Development</h3>
  	  	    </div>
  	      </div>
  	      <div class="col-md-3">
  	  	    <div class="second-section-content">
  	  		  <img src="{{ asset("data/img/icon/devolve.png")}}" class="animate-top">
  	  		  <h3 class="animate-top">Devolve</h3>
  	  	    </div>
  	      </div>
  		</div>
	</div>
	<!--===== third service section =====-->
	<div class="section section3" id="section3">
	  <!-- <h1 class="header-text">Our services</h1> -->
	  <main>
		<div class="slideshow">
      <div class="slides slides--images">
        @foreach($services as $key => $service)
          <div class="slide1 {{ $key==0 ? "slide--current": ""}}"><div class="slide__img"><img src="{{ asset('storage/'.$service->image) }}"></div></div>
        @endforeach
      </div>
		  <div class="slides slides--titles">
        @foreach($services as $key => $service)
		    <div class="slide1 {{ $key==0 ? "slide--current" : "" }}">
          <h2 class="slide__title animate-top">{{ $service->title }}<br>
            <p>{{ $service->description }}</p>
          </h2>
        </div>
        @endforeach
		  </div>
		  <nav class="slidenav1">
		    <button class="slidenav__item1 slidenav__item--prev animate-left">
		      <i class="fa fa-angle-left" aria-hidden="true"></i>
			</button>
			<button class="slidenav__item2 slidenav__item--next animate-right">
			  <i class="fa fa-angle-right" aria-hidden="true"></i>
			</button>
		  </nav>
		</div>
	  </main>
	</div>
	<!--===== fourth portfolio section =====-->
	<div class="section section4" id="section4">
	  <div class="portfolio-block">
		<div id="slider">
		  <a href="#" class="control_next">></a>
		  <a href="#" class="control_prev"><</a>
		  <ul class="portfolio-image">
            @foreach( $portfolios as $portfolio)
              <li class="col-md-6">
                <a onclick="openModal('{{$portfolio->description}}')">
                  <img alt="image" src="{{ asset("storage/".$portfolio->image) }}">
                  <div class="decription-wrap">
                    <div class="image-bg">
                       <p class="desc">{{ $portfolio->title }}</p>
                    </div>
                  </div>
                </a>
              </li>
            @endforeach
          </ul>  
		</div>
	  </div>
	</div>
	<!--===== fifth contact section =====-->
	<div class="section section5" id="section5">
	  <!-- <h1 class="header-text">Contact us</h1> -->
  	  <div class="contact-block-main">
  	    <div class="row">
  	      <div class="col-md-6 col-sm-6 col-xs-6 upper-row">
  		    <h3 style="margin-top: 30px;" class="pulse">Get in touch</h3>
  		    <p>Please fill out this form and we will bet in touch with you shortly</p>
  		  	<div class="info-section">
  		  	  <div class="row">
  		  	    <i class="far fa-envelope"></i>
  		  	    <h5>wmsoft@gmail.com</h5>
  		  	  </div>
  		  	  <div class="row">
  		  	    <i class="fa fa-mobile" aria-hidden="true"></i>
  		  	    <h5>+998977603165</h5>
  		  	  </div>
  		  	  <div class="row">
  		  	    <i class="fa fa-map-marker" aria-hidden="true"></i>
  		  	    <h5>Tashkent city, Uzbekistan</h5>
  		  	  </div>
  		  	</div>
  		  </div>
  		  <div class="col-md-6 col-sm-6 col-xs-6 contact-block">
  		    <h3>Say something</h3>
  		    <form method="POST" name="myForm">
  		      <input type="text" name="name" class="form-control contact-form" placeholder="Name" required />
  		      <input type="number" name="phone" class="form-control contact-form" placeholder="Phone" required="Please input" />
  		      <input type="email" name="email" class="form-control contact-form" placeholder="Email" required />
  		      <textarea class="form-control contact-form" name="message" minlength="3" cols="30" rows="4" placeholder="Message"></textarea>
  		      <button id="contactSubmit" class="contactSubmit-hover" type="submit" name="submit">Send</button>
  		    </form>
  		  </div>
  		</div>
  		<div class="row bottom-row">
  		  <div class="col-md-6 col-sm-6 col-xs-6">
  		    <div class="row">
  		   	  <h2>WMSoft</h2>
  		  	  <p>Software development company</p>
  		  	</div>
  		  	<div class="row">
  		  	  <ul class="bottom-nav">
  		  	    <li><a href="#firstPage" class="hvr-underline-from-center">Home</a></li>
  		  	    <li><a href="#secondPage" class="hvr-underline-from-center">About</a></li>
  		  	    <li><a href="#3rdPage" class="hvr-underline-from-center">Services</a></li>
  		  	    <li><a href="#4thPage" class="hvr-underline-from-center">Portfolio</a></li>
  		  	    <li><a href="#lastPage" class="hvr-underline-from-center">Contacts</a></li>
  		  	  </ul>
  		  	</div>
  		  </div>
  		</div>
  	  </div>
	</div>
</div>

<!-- modal form -->
<center>
  <div id="ask-modal" class="modal">
    <div class="modal-content animate">
      <!-- <span onclick="document.getElementById('ask-modal').style.display='none'" class="close" title="Закрыть">
        <img src="data/img/fancy_close.png" />
      </span> -->
      <h1 id = "description"></h1>
    </div>
  </div>
</center>

<script type="text/javascript">
	jQuery(document).ready(function ($) {
  
	var slideCount = $('#slider ul li').length;
	var slideWidth = $('#slider ul li').width();
	var slideHeight = $('#slider ul li').height();
	var sliderUlWidth = slideCount * slideWidth;
	
	$('#slider').css({ width: slideWidth, height: slideHeight });
	
	$('#slider ul').css({ width: sliderUlWidth, marginLeft: - slideWidth });
	
    $('#slider ul li:last-child').prependTo('#slider ul');

    function moveLeft() {
        $('#slider ul').animate({
            left: + slideWidth
        }, 200, function () {
            $('#slider ul li:last-child').prependTo('#slider ul');
            $('#slider ul').css('left', '');
        });
    };

    function moveRight() {
        $('#slider ul').animate({
            left: - slideWidth
        }, 200, function () {
            $('#slider ul li:first-child').appendTo('#slider ul');
            $('#slider ul').css('left', '');
        });
    };

    $('a.control_prev').click(function () {
        moveLeft();
    });

    $('a.control_next').click(function () {
        moveRight();
    });

});    
</script>
  <script type="text/javascript">
	// Get the modal
	var modal = document.getElementById('ask-modal');

	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
	    if (event.target == modal) {
	        modal.style.display = "none";
	    }
	}

  function openModal(desc){
    document.getElementById('ask-modal').style.display='block';
    document.getElementById('description').innerHTML = desc;
  }


  </script>

  <script src="{{ asset("data/js/anime.min.js")}}"></script>
  <script src="{{ asset("data/js/main.js")}}"></script>

  <script type="text/javascript">
	$('#fullpage').fullpage({
	  anchors: ['firstPage', 'secondPage', '3rdPage', '4thpage', 'lastPage'], menu: '#button',
	  /*easingcss3: 'cubic-bezier(0.150, 0.860, 0.320, 1.275)',*/
	  onLeave: function(index, nextIndex, direction){
		var leavingSection = $(this);
		if(index == 1 && direction =='down'){
		  $(".animate-top").addClass("fadeInUp");
		  $(".animate-bottom").addClass("fadeInUp");
		}
		else if(index == 2 && direction =='down'){
		  $(".animate-top").addClass("fadeInUp");
		  $(".animate-bottom").addClass("fadeInUp");
		}
		else if(index == 4 && direction =='down'){
		  $(".contact-block").addClass("bounceIn");
		}
		else if(index == 2 || index == 3 || index == 4 || index == 5 && direction == 'up'){
		  $(".animate-top").removeClass("fadeInUp");
		  $(".animate-bottom").removeClass("fadeInUp");
		  $(".contact-block").removeClass("bounceIn");
		}
	  }
	});
  </script>
  <script type="text/javascript">
    
  </script>

</body>
</html>
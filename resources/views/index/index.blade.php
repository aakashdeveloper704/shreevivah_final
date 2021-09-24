<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://use.fontawesome.com/36b71aca00.js"></script>
	<title>Shree Vivah</title>
	
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset('css/main.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('public/assets/css/main.css' ) }}"> -->
    <link rel="stylesheet" type="text/css"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
 
    <meta name="google-site-verification" content="oo7O9UcsOzKK9kFQKobRs5-HN5i5ThzaA3y_RlRy8rE" />
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,500,500italic,700,700italic,300italic,300'
        rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i"
        rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <script src="{{asset('js/angular.min.js') }}"></script>
    

    <script src="{{ asset('/js/angular-sanitize.js' ) }}"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <style>
        #slideshow-wrapper {
            z-index: 1;
            margin: 40px auto 0px 10px;
            -webkit-perspective: 1000px;
            -moz-perspective: 1000px;
            -o-perspective: 1000px;
            perspective: 1000px;
        }

        #slideshow {
            position: absolute;
            list-style-type: none;
            padding: 5px 0px;
            height: 100px;
            width: 100px;
            margin-top: -30px;
            -webkit-transform-style: preserve-3d;
            -moz-transform-style: preserve-3d;
            -o-transform-style: preserve-3d;
            transform-style: preserve-3d;
        }

        #slideshow>* {
            display: block;
            position: absolute;
        }

        #slideshow img {
            pointer-events: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -o-user-select: none;
            user-select: none;
            -webkit-border-radius: 4px;
            border-radius: 4px;
            /* box-shadow: 0 0 5px #ccc; */
            width: 170px;
            height: 170px;
        }

        #slideshow .front {
            -webkit-transform: translateZ(50px);
            -moz-transform: translateZ(50px);
            -o-transform: translateZ(50px);
            transform: translateZ(50px);
            opacity: 1;
            -webkit-transition: -webkit-transform 1s, opacity 1s;
            -moz-transition: -moz-transform 1s, opacity 1s;
            -o-transition: -o-transform 1s, opacity 1s;
            transition: transform 1s, opacity 1s;
        }

        #slideshow .right {
            -webkit-transform: rotateY(90deg) translateZ(100px);
            -moz-transform: rotateY(90deg) translateZ(100px);
            -o-transform: rotateY(90deg) translateZ(100px);
            transform: rotateY(90deg) translateZ(100px);
            opacity: 0;
            -webkit-transition: -webkit-transform 1s, opacity 1s;
            -moz-transition: -moz-transform 1s, opacity 1s;
            -o-transition: -o-transform 1s, opacity 1s;
            transition: transform 1s, opacity 1s;
        }

        #slideshow .left {
            -webkit-transform: rotateY(-90deg) translateZ(10px) translateX(-360px);
            -moz-transform: rotateY(-90deg) translateZ(10px) translateX(-360px);
            -o-transform: rotateY(-90deg) translateZ(10px) translateX(-360px);
            transform: rotateY(-90deg) translateZ(10px) translateX(-360px);
            opacity: 0;
            -webkit-transition: -webkit-transform 1s, opacity 1s;
            -moz-transition: -moz-transform 1s, opacity 1s;
            -o-transition: -o-transform 1s, opacity 1s;
            transition: transform 1s, opacity 1s;
        }

                        /* second cube */
input[type='file'] {
    width:400px;
    height:25px;
    opacity:0
}
#val {
    width: 400px;
    height:25px;
    position: absolute;
    font-size:13px;
    line-height: 25px;
    text-indent: 10px;
    pointer-events: none;
}
#button {
    cursor: pointer;
    display: block;
    background-color: purple;
    height: 25px;
    color: white;
    font-size: 11px;
    line-height: 25px;
    margin-top: 3%;
    text-align: center;
    /* -webkit-transition: 500ms all; */
    /* -moz-transition: 500ms all; */
    /* transition: 500ms all; */
}

/* #button:hover {
    background-color: blue;
} */

    </style>
</head>

<body>
<!-- hi chaitali -->

    <!-- header with logo -->
    <nav class="navbar-expand-sm">
        <div class="navbar-collapse w-100" id="navbarSupportedContent">
            <div class="container-fluid ">
                <div class="row ">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-3">  <img class="image-fluid d-block mx-auto slogan" src="Images/Slogan@4x-8.png" alt="">  </div>
                    <div class="log col-lg-4 col-md-4 col-sm-4 col-3"><a href="./index.php"> <img class="image-fluid  d-block mx-auto logo" src="Images/Final Logo png1.png" alt></a> </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-4 text-center"> <a href="{!! url('login'); !!}"> <button class="  btn login">Login</button></a>  </div>
                </div>
            </div>
        </div>
        <img src="Images/header-4.png" class="img-fluid background_img" />
    </nav>
   

    <section class="bgimage_set">
        <div class="container">
            <div class="row">
                <div class="cube_top col-sm-12 col-md-12 col-lg-6 text-center">
                    <div class="wrapper">
                        <div>
                            <div class="image-cube ">
                                <div class="front1"> <img class="img-fluid" src="Images/4.jpg" height=""> </div>
                                <div class="right1"> <img class="img-fluid" src="Images/2.jpg" height=""> </div>
                                <div class="back1"> <img class="img-fluid" src="Images/1.jpg" height=""> </div>
                                <div class="left1"> <img class="img-fluid" src="Images/3.jpg" height=""> </div>
                            </div>
                            <div class="minicube">
                                <div class="side s-1"></div>
                                <!-- <div class="side s-2"></div> -->
                                <div class="side s-3"></div>
                                <div class="side s-4"></div>
                                <div class="side s-5"></div>
                                <!-- <div class="side s-6"></div> -->
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-sm-6 col-md-12 col-lg-6">
					<div class="lakota">
						<div class="text-center mob">
							<h2  id="free"> FREE REGISTRATION </h2>
							<h3 id="easy"> EASY, TRUSTED AND SECURE </h3>
						</div>  
						<form id="left" autocomplete="off">
                        @csrf
							<div class="form-group">
									<label class="register_lable" for="fname">Gender*</label>
                                    <select name="gender" id="gender" class="form-control" place-holder="Select">
                                        <option value="Choose One">Select</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
							</div>
							<div class="form-group">
								<label class="register_lable" for="cars">Marital Status*</label>
								<select name="marital_status" id="cars" class="form-control" place-holder="Choose One">
									<option value="Choose One">Select</option>
									<option value="Never Married">Never Married</option>
									<option value="Divorce">Divorce</option>
									<option value="Widoowed">Widoowed</option>
									<option value="Seprated">Seprated</option>
								</select>
							</div>
							<div class="form-group">
								<label class="register_lable" for="cars">Grom / Bride Name*</label>
								<div class="row">
									<div id="groom"class="col-md-4 col-sm-2" style="padding-right:0px;">
										<select name="grom_bride"  id="grom" class="form-control" place-holder="Choose One" style="padding-right: 0px;" >
                                            <option value="Choose One">Select</option>
											<option value="ChooseOne">Mr.</option>
											<option value="Mrs">Mrs.</option>
											<option value="Shri">Shri.</option>
											<option value="Shmt">Shmt.</option>
										</select>
									</div>
									
									<div class="col-md-8 col-sm-8">
										<input name="fullname" id="name" class="first form-control" placeholder="  First  &nbsp; &nbsp;&nbsp;&nbsp;  Middle  &nbsp;&nbsp;&nbsp; Last" required="" type="text" oninvalid="this.setCustomValidity('Enter Full Name')" oninput="this.setCustomValidity('')" id="ctl00_ContentPlaceHolder1_txt_name" value="" class="nametxt" onkeyup="return capitalize_Words(this.id)">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="register_lable" id="email" for="email">Email ID*</label>
								<input type="text" id="email" name="email" class="form-control"  placeholder="Your Email ID" /> 
							</div>
							<div class="form-group">
								<label class="register_lable" for="Mobile">Mobile number*</label>
								<input type="text" id="mobile" name="mobile" class="form-control" placeholder="Your Mobile Number" />
							</div>
							<div class="form-group">
								<label class="register_lable" for="religion">Religion*</label>
								<select name="religion" id="cars" class="form-control" place-holder="Choose One">
                                    <option value="ChooseOne">Select</option>
									<option value="Hindu">Hindu</option>
									<option value="Muslim">Muslim</option>
									<option value="Sikh">Sikh</option>
									<option value="Christian">Christian</option>
									<option value="Buddhist">Buddhist</option>
									<option value="Jain">Jain</option>
									<option value="Parsi">Parsi</option>
									<option value="Jewshi">Jewshi</option>
									<option value="Spiritual">Spiritual</option>
									<option value="No Religion">No Religion</option>
									<option value="Other">Other</option>
								</select>
							</div>
							<div class="form-group">
								<label class="register_lable" for="Caste">Caste*</label>
								<select name="caste" id="cars2" class="form-control" place-holder="Choose One">
                                    <option value="Choose One">Select</option>
									<option value="Caste">Caste</option>
								</select>
							</div>
							<!-- <div class="form-group">
								<label class="register_lable" for="photo">Your Photo*</label>
								<input type="file" id="photo" name="photo" placeholder="Your Photo..." />
							</div> -->
                            <div class="form-group">
                                <input type="file" id="photo" name="file" placeholder="Your Photo..."/>
                                <span id='val'></span>
                                <span id='button' class="new1">Select File</span>
                            </div>
                            <div class="form-group ">
                                <p id="terms">By Clicking Register, You Agree To Our <a style="color:#fff; font-weight: 700;" href="">Terms &amp; Conditions</a></p>
                            </div>
							<div class="form-group text-center"> 
                                <button type="button" id="save_btn" name="submit" class="regi"><b>Register</b></button> 
                            
                            </div>         
						</form>
					</div>
				</div>
			</div>
		</div>
    </section>

    <!-- Section Second -->

    <section class="bgimage_set1">
        <div class="container-fluid text-center">
            <ul class='circle-container text-center'>
                <a class="zero" href="{{asset('web_pre_post')}}"></a>
                <a class="one" href="{{asset('web_pre_marriage')}}"></a>
                <a class="two" href="{{asset('web_pre_marital')}}"></a>
                <a class="three" href="{{asset('web_shopping_for_engagement')}}"></a>
                <a class="four" href="{{asset('web_refer_and_earn')}}"></a>
                <a class="five" href="{{asset('web_joinus')}}"></a>
                <a class="six" href="{{asset('web_otherservice')}}"></a>
                <a class="seven" href="{{asset('web_membership_plains')}}"></a>
                <a class="eight" href="{{asset('web_kundali')}}"></a>
            </ul>
            <img class="nine" src='Images/Center Circle-01.png' alt="..." />

        </div>
    <div class="container text-center">
        <button class="btn register_now">Register Now</button>
    </div>
    </section>
	
    <section class="bgimage_set2">
        <div class="container">
            <div class="row">
            <div class="col-lg-12">
                <div id="img_center"> 
                <img src="Images/PNG Logo.png " class="img4 img-fluid rounded mx-auto d-block"></div>
                
				<div class="myPara">
                    <div class="small col col-md-12">
						Marriage is the gift of love that you give to your spouse every day, with never-ending promise that you will walk side by side. The simplest way to explain a marriage is â€œTwo individuals decide to spend the rest of their lives together as companions.<br><br>
						
						WE SHREEVIVAH knowing this fact committed to provide you BEST MATRIMONY SERVICES like your family member with utmost care and authenticity. At Shreevivah you need not to compromise with situations and people. You can discover a life partner on your own terms as you could get access to a wide variety of profiles in front of you. You just require to fill in certain necessary information on our registration portal and you may begin your search.<br><br>
						
						WE SHREEVIVAH provides you an easy platform to introduce yourself and to make yours search journey Easy, Trusted and Secure. SHREEVIVAH provides wide range of profiles as well as facilitates like Kundali Matching, Pre-Marital Health Check-up and Pre-Marriage background verification to ensure that you have chosen the â€œTRUE LIFE PARTNERâ€ for you. Moreover, SHREEVIVAH attempts to make your Wedding Journey excited and joyful by offering Pre & Post Engagement and Marriage services and Shopping Point.<br><br>
						
						WE SHREEVIVAH offers you the amazing opportunity to earn money in a very simple way. At SHREEVIVAH anyone can make a â€œReferral and Earn Moneyâ€ as a rewards for helping your friends or families to find their â€œTRUE LIFE PARTENER. WE SHREEVIVAH also provides you a great opportunity to build up your career by joining us as our Employee/ Agent/ Advisor for financial benefit and rewards. WE SHREEVIVAH offers all varieties of religious people, so according to your priorities you can find out your partner who is familiar with your Lifestyles and Like-minded. So, donate waste much time and REGISTER NOW to find your TRUE LIFE PARTNER with ease.
                           
                    </div>
                   
                </div>
            </div>
            </div>
        </div>
        <div class="container-fluid text-center">
            <button class="btn register_now1">Register Now</button>
        </div>
    </section>
    <section class="bgimage_set3">
        <div class="container">
            <div id="img_center"> 
                <img src="Images/PNG Logo.png " class="img4 img-fluid rounded mx-auto d-block"></div>
            <div class="row">
				<div class="col-lg-12 text-left">
					<p class="myh1">Be inspired by Real Weddings</p>
					<p class="myh2">FIND INSPIRATION FOR YOUR SPECIAL DAY.<br> YOURS COULD BE THE NEXT SUCCESS STORY.</p>
				</div>
			</div>

			<div class="row" style="margin-bottom: 40px;">
                    <div class="  col-md-4  text-center">
                        <div class="card success_story leftcard">
                            <img class="img-fluid" src="Images/Left_card1.PNG" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Jyoti and Rahul</h5>
                                <p class="card-text ">My family was looking for same matches for me who would since long but we couldn't find a good match.We have... </p>
                                <a href="#" class="btn know btnprimary">Know More</a>
                            </div>
                        </div>
                    </div>	
				<div class="col-md-4 text-center">
                        <div class="card success_story rightcard">
                            <img class="img-fluid" src="Images/centre_card1.PNG" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Anjush &  Pahuja</h5>
                                <p class="card-text">I always wanted an understanding life partner understand me and respect my profession as...</p>
                                <a href="#" class="btn know btnprimary">Know More</a>
                            </div>
                        </div>
                    </div>
				<div class="col-md-4 text-center">
					<div class="card success_story centercard">
						<img class="img-fluid"src="Images/right_card1.PNG" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title">Surbhi and Sahil</h5>
							<p class="card-text">I have been working as a IT Software professional in Mexico for last 3 years and I always  wanted to...</p>
							<a href="#" class="btn know btnprimary">Know More</a>
						</div>
					</div>
				</div>
            </div>
            <div class="container text-center"> <button class=" btn register_now2 ">Register Now</button>  </div>
        </div>

    </section>

    @include('footer.footer')
    <!-- <footer class="footer">
        <div class="container">
            <div class="row">
                <div id="footer-col1" class="footer-col">


                    <h4>company</h4>
                    <ul>
                        <li><a href="./aboutus.php">About us</a></li>
                        <li><a href="./successstories.php">Success Story</a></li>
                        <li><a href="./blogs.php">Blogs</a></li>
                        <li><a href="careers.php">Careers</a></li>
                    </ul>
                </div>
                

                <div id="footer-col2" class="footer-col">
                    <h4>Policies</h4>
                    <ul>
                        <li><a href="./privacy.php">Privacy Policy</a></li>
                        <li><a href="./term.php">Terms of use </a></li>
                        <li><a href="./payment.php">Payment Policy</a></li>
                        <li><a href="./disclaimer.php">Disclaimer</a></li>
                    </ul>
                </div>
                <div id="footer-col3" class="footer-col">
                    <h4 id="footer-col">Our Other Services</h4>
                    <ul id>
                        <li><a href="./membership_topup.php">Membership and Top-Up Plans</a></li>
                        <li><a href="./kundali_matching.php">Kundali Matching </a></li>
                        <li><a href="./pre&post.php">Pre & Post Engagement & Marriage Services</a></li>
                        <li><a href="./background_verification.php">Pre-Marriage Background Verification</a></li>
                        <li><a href="./checkup.php">Pre-Marriage Health Check-Up</a></li>
                        <li><a href="./shopping.php">Shopping for Engagement & Marriage</a></li>
                        <li><a href="./refer_join.php">Refer & And Earn</a></li>
                        <li><a href="./joinus.php">Join Us As Our Employee / Agent / Advisor / Franchisee</a></li>
                        <li><a href="./otherservices.php">Other Services</a></li>
                    </ul>
                </div>
                <div id="footer-col4" class="footer-col">
                    <h4>Help And Support</h4>
                    <ul>
                        <li><a href="./memberlogin.php">Member Login</a></li>
                        <li><a href="./register.php">Register Now</a></li>
                        <li><a href="./ContactUsNew.php">Contact Us</a></li>

                    </ul>
                </div>
                <div id="footer-col5" class="footer-col">
                    <h4>Social Media</h4>
                    <div id="social-links">
                        
                        <ul style="display: flex;">
                            <li class="social_link" id="fac"></li>
                            <li class="social_link" id="what"></li>
                            <li class="social_link" id="you"></li>
                        </ul>
                    </div>  
                    <div id="social-links1">  
                            <ul style="display: flex;">
                            <li class="social_link" id="insta"></li>
                            <li class="social_link" id="twi"></li>
                            <li class="social_link" id="linkd"></li>
                        </ul>
                    </div>
					 
                    <h4 id="ad">Advertising</h4>

                    <div id="slideshow-wrapper">
                        <ul id="slideshow">
                            <li id="HP_Top_Elite" target="_blank"><img id="img1" src="Images/1.jpg" alt="Shree Vivah" /> </a></li>
                            <li id="HP_Top_Elite" target="_blank"><img id="img1" src="Images/2.jpg" alt="Shree Vivah" /> </a></li>
                            <li id="HP_Top_Elite" target="_blank"><img id="img1" src="Images/3.jpg"  alt="Shree Vivah" /> </a></li>
                            <li id="HP_Top_Elite" target="_blank"><img id="img1" src="Images/4.jpg" alt="Shree Vivah" /> </a></li>
                        </ul>
                    </div>
                
                </div>
                <h4 id="services">Our Services</h4>
                <div id="slideshow-wrapper1">
                    <ul id="slideshow1">
                        <li id="HP_Top_Elite" target="_blank"><img id="img1" src="Images/1.jpg" alt="Shree Vivah" /> </a></li>
                        <li id="HP_Top_Elite" target="_blank"><img id="img1" src="Images/2.jpg" alt="Shree Vivah" /> </a></li>
                        <li id="HP_Top_Elite" target="_blank"><img id="img1" src="Images/3.jpg"  alt="Shree Vivah" /> </a></li>
                        <li id="HP_Top_Elite" target="_blank"><img id="img1" src="Images/4.jpg" alt="Shree Vivah" /> </a></li>
                    </ul>
                </div>
                
            </div>
            
        </div>
       <div class="container text-center">  <h3 id="copy">Copyright © 2021 ShreeVivah All Rights Reserved</h3> </div>
    </footer> -->



    
    <script type="text/javascript">



$('#save_btn').click(function() {
    console.log($('#left').serialize());
       
        $.ajax({
            type: 'POST',
            url: "{{route('index.insert')}}",
            data: $('#left').serialize(),
            success: function(data) {
                console.log(data);
                data.code == 200 ? swal("Success", data.message, 'success') : swal("Error", data.message, 'error');
            }
        });
    });



function slideShow() {
    // '*' to work with any element, not only 'li's
    this.slides = $('#slideshow > *');
    this.count = this.slides.length - 1;
    this.initslide = 0;
    this.auto = null;

    this.selectTitles();
    this.ActivateAuto();
};

slideShow.prototype.selectTitles = function () {
    var that = this;
    // $('#slideshow-wrapper').append('<select></select>');        
};

slideShow.prototype.nextSlide = function () {
    this.initslide = (this.initslide++ >= this.count) ? 0 : this.initslide++;
    this.animateSlide();
    //console.log(this.initslide);
};

slideShow.prototype.animateSlide = function () {
    var currentSlide = this.initslide;
    var nextSlide = ((currentSlide + 1) > this.count) ? 0 : currentSlide + 1;
    var prevSlide = ((currentSlide - 1) < 0) ? this.count - 1 : currentSlide - 1;

    $('#slideshow > *').removeClass().not($('#slideshow > *').filter(function (index) {
        return index === currentSlide || index === nextSlide || index === prevSlide;
    })).addClass('left');
    $('#slideshow > *:eq(' + prevSlide + ')').addClass('left');
    $('#slideshow > *:eq(' + nextSlide + ')').addClass('right');
    $('#slideshow > *:eq(' + currentSlide + ')').addClass('front');

    //Animate Dropdown menu
    //$('select option').removeAttr("selected");
    //$('select option:eq('+currentSlide+')').prop('selected',true);
};

slideShow.prototype.ActivateAuto = function () {
    var that = this;
    this.animateSlide();
    this.auto = window.setInterval(function () {
        that.nextSlide();
    }, 4000);
};
</script>
<script type="text/javascript">
$(function () {
    new slideShow();
});



function slideShow1() {
    // '*' to work with any element, not only 'li's
    this.slides = $('#slideshow1 > *');
    this.count = this.slides.length - 1;
    this.initslide = 0;
    this.auto = null;

    this.selectTitles();
    this.ActivateAuto();
};

slideShow1.prototype.selectTitles = function () {
    var that = this;
    // $('#slideshow-wrapper').append('<select></select>');        
};

slideShow1.prototype.nextSlide = function () {
    this.initslide = (this.initslide++ >= this.count) ? 0 : this.initslide++;
    this.animateSlide();
    //console.log(this.initslide);
};

slideShow1.prototype.animateSlide = function () {
    var currentSlide = this.initslide;
    var nextSlide = ((currentSlide + 1) > this.count) ? 0 : currentSlide + 1;
    var prevSlide = ((currentSlide - 1) < 0) ? this.count - 1 : currentSlide - 1;

    $('#slideshow1 > *').removeClass().not($('#slideshow1 > *').filter(function (index) {
        return index === currentSlide || index === nextSlide || index === prevSlide;
    })).addClass('left');
    $('#slideshow1 > *:eq(' + prevSlide + ')').addClass('left');
    $('#slideshow1 > *:eq(' + nextSlide + ')').addClass('right');
    $('#slideshow1 > *:eq(' + currentSlide + ')').addClass('front');

    //Animate Dropdown menu
    //$('select option').removeAttr("selected");
    //$('select option:eq('+currentSlide+')').prop('selected',true);
};

slideShow1.prototype.ActivateAuto = function () {
    var that = this;
    this.animateSlide();
    this.auto = window.setInterval(function () {
        that.nextSlide();
    }, 4000);
};

$('#button').click(function(){
    $("input[type='file']").trigger('click');
})

$("input[type='file']").change(function(){
    $('#val').text(this.value.replace(/C:\\fakepath\\/i, ''))
    $('#button').text('')
})
</script>
<script type="text/javascript">
$(function () {
    new slideShow1();
});
</script>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>

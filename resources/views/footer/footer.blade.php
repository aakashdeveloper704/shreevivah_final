<head>
    <link rel="stylesheet" href="{{asset('css/main.css') }}">
    <link rel="stylesheet" type="text/css"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
 
    <meta name="google-site-verification" content="oo7O9UcsOzKK9kFQKobRs5-HN5i5ThzaA3y_RlRy8rE" />
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,500,500italic,700,700italic,300italic,300'
        rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i"
        rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <script src="{{asset('js/angular.min.js') }}"></script>
    <script src="{{asset('js/angular-sanitize.js') }}"></script>
    <link rel="stylesheet" href="{{asset('css/main.css') }}">
    <!-- <link rel="stylesheet" href="bootstrap.min.css"> -->
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
    </style>
</head>
<footer class="footer">
<!-- <<<<<<< Updated upstream -->
        <div class="container text-left">
    
        <div class="container" style="text-align:left;">
<!-- >>>>>>> Stashed changes -->
            <div class="row">
                <div id="footer-col1" class="footer-col">


                    <h4>company</h4>
                    <ul>
                        <li><a href="{{asset ('web_aboutus') }}">About us</a></li>
                        <li><a href="{{asset ('web_successstories') }}">Success Story</a></li>
                        <li><a href="{{asset ('web_blogs') }}">Blogs</a></li>
                        <li><a href="{{asset ('web_careers') }}">Careers</a></li>
                    </ul>
                </div>
                

                <div id="footer-col2" class="footer-col">
                    <h4>Policies</h4>
                    <ul>
                        <li><a href="{{asset ('web_privacy') }}">Privacy Policy</a></li>
                        <li><a href="{{asset ('web_terms_use') }}">Terms of use </a></li>
                        <li><a href="{{asset ('web_payment') }}">Payment Policy</a></li>
                        <li><a href="{{asset ('web_disclaimer') }}">Disclaimer</a></li>
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
                        <!-- <ul class="social_link" id="fac"> </ul>
                        <ul class="social_link" id="what"></ul>
                        <ul class="social_link" id="you"></ul> -->
                        <ul style="display:flex;">
                            <li class="social_link" id="fac"></li>
                            <li class="social_link" id="what"></li>
                            <li class="social_link" id="you"></li>
                        </ul>
                    </div>  
                    <div id="social-links1">  
                        <!-- <ul class="social_link" id="insta"></ul>
                        <ul class="social_link" id="twi"></ul>
                        <ul class="social_link" id="linkd"></ul>
                         -->

                         <ul style="display:flex;">
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
                    

                    <script type="text/javascript">
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
       <div class="container">  <h3 style="text-align:center;"id="copy">Copyright © 2021 ShreeVivah All Rights Reserved</h3> </div>
    </footer>
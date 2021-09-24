<!doctype html>
<html lang="en">
<head>
      <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/main.css') }}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset('css/top_up.css') }}">
    <title>Kundali Matching</title>
    <style>
        .centered1 {
            position: absolute;
            top: 58%;
            left: 50%;
            font-weight:900;
        font-size: 3vw;
            transform: translate(-50%, -50%);
        }
        .container1 {
    margin-bottom: 4%;
}
.desgin{
    width: 100%;
}
.desgin1{
    width: 45%;
    margin-top: -5%;
}
#kndlg {
    top: 16%;
}
#rgkd {
    border-radius: 1px;
}
label {
    color: #e41ae8;
    font-size: x-large;
    font-weight: 900;
    line-height: 2em;
}
.cen {
    padding: 13px 20px 8px 11%;
    line-height: 3em;
}

/* round check box */


/* .bbtn {
    float: left;
} */
input[type="radio"] {
    width: 15px;
    height: 15px;
    box-shadow: 3px 0 10px grey;
    border-radius: 999px;
    -webkit-appearance: inherit;
    border-bottom: 0px solid black;
    position: relative;
    box-sizing: border-box;
    background-color: white;
}
input[type="radio"]:checked:before {
  content:"";
  position:absolute;
  border-radius: 999px;
  left:25%;
  top:25%;
  width:50%;
  height:50%;
  background: #bf2abf;
}

         p, span {
    font-weight: 600;
    color: black;
}
        .lorem {
            text-align: left;
        } 

        @media (max-width: 1024) {
            #top_row {
    margin-left: -8%;
    margin-right: 3%;
}
        }
@media (max-width:2560px) {
    #txt1 {
    font-size: 3vw;
}
.centered {
font-size: 2vw;}
}
        
       @media (min-width: 0px) and (max-width: 500px) {
        .centered1 {
            /* font-size: 15px; */
        }
        .top_in_row {
    margin-left: -4%;}

          .rounded
          {
            padding:1rem !important;
          }  

       }
        .rounded
        {
        padding:3rem;
        }
        .container {
        position: relative;
        color: white;
        }
        .centered {
        position: absolute;
        top: 50%;
        left: 50%;
        font-weight:900;
        font-size: 3vw;
        transform: translate(-50%, -50%);
        }
        .top-right {
            position: absolute;
            top: 100px;
            right: 16px;
        }
        #registerbackground
        {
            background: rgba(255, 255, 255, 0.5);
            margin: 50px 0px 0px 0px;
            
        }
        #registerform1
        {
            font-size:12px;
        }

        h5
        {
            padding:40px;
        }

@media (max-width: 500px) {
          h5 {
            font-size: 16px;
            padding: 22px;
          }
          .centered {
            font-size: 4vw;
          }

        #txt1 {
            font-size: 15px;
        }
        .desgin1 {
            width: 70vw;
            margin-top: -5%;
            margin-left: 9%;
        }
        #kndlg {
            top: 16%;
            font-size: 5vw;
            margin-left: 13vw;
        }
        label {
            margin-top: -10%;
    font-size: 9px;
    width: 77vw;
}
        form {
            display: grid;
        }
     }

     @media (max-width: 375px) { 

        #txt1{
            font-size: 13px;
        }
        label {
    margin-top: -12%;
    font-size: 8px;
    width: 76vw;
}

     }
@media (max-width: 320px) {
    #txt1 {
    font-size: 3.5vw;
}
h5 {
    padding: 12px;
}
.desgin1 {
    width: 70vw;
    margin-top: -5%;
    margin-left: 10%;
}
label {
    margin-top: -12%;
    font-size: 7px;
    width: 86vw;
}
#kndlg {
    top: 12%;
    font-size: 5vw;
    left: 50%;
}
}

     #bt1,#bt3,#bt5 {

    margin-bottom: 6%;
}
.top_plan_inner_box {
    border: 4px solid white;
    /* height: 375px; */
    height: auto;
    /* margin-top: 15px; */
    margin-bottom: 15px;
    border-top: 0px;
}
.top_plan {
    /* height: 475px; */
    border: 4px solid white;
    margin: 5px;
    height: auto;
    display: flex;
    margin-right: 15px;
    margin-left: 15px;
    border-top-left-radius: 25px;
    border-top-right-radius: 25px;
    /* width: 30%; */
}


 

         #bt1 {
             background-color: #5ca22e;

         }
         .plan {
            background-color:#376619;
         }
         #bt3 {
             background-color: #ff00c8 ;
         }
         .plan2 {
             background-color: #e523c0;
         }



         @media(min-width:770) and (max-width: 1024px){
            .top_in_row {
    margin-left: -10%;
    margin-right: 0.5%;
}
         }
@media (min-width:499px) and (max-width: 800px) {
    .textt {
        font-size: 15px;
    }
    label {
        font-size: 15px;
    }
    form {
        font-size: 15px;

    }
    #kndlg {
    top: 13%;
}
label {
    font-size: 15px;
}
}
         

         }

    
    </style>
</head>
<body>
@include('header.header')
        
  <div class="bg-image text-center shadow-1-strong rounded text-dark" style="background-image: url('./Images/pink-web-bg.jpg');height:auto;"> 
        <div class="container ">
            <img class="desgin" src="./Images/header-5.png" alt="Image Not Found" >
        <div class="centered kun" id="txt">Kundali Matching</div>  
        </div>
          <div id="registerbackground"><h5 class="lorem">
              <div class="container">
                <div class="container1">
                
                    <img class="desgin1 text-center" src="Images/inhd.png" alt="Image Not Found">
                    <div class="centered1 text-center" id="kndlg" >Kundali Login</div>

                    <div class="container">

                    </div>


                    <div class="container">
                    
                    <form action="#" class="text-center">
                       
                          <input class="bbtn" type="radio" id="register" name="fav_language" value="register">
                          <label for="register" class="textt">I am registered member and I want to check Kundali</label><br>
                          <input class="bbtn" type="radio" id="register" name="fav_language" value="register">
                          <label   for="register" class="textt">I am not registered member and I want to check Kundali</label><br>
                        </form>
</h5></div>     



          <section class="bgimage_set">
            <div class="container">
                <div class="container1">
                    <img class="desgin" src="Images/header-5.png" alt="Image Not Found">
                    <div class="centered1" id="txt1" >Kundali Matching Plans</div>
                </div>


            </div>
            <div class="container cont">
            <div class="container">
                <div class="row top_in_row" id="top_row">
                    <div style="background-color:#376619" class="col-lg-4 col-md-3 col-7 top_plan">
                        <div class="col-md-12 col-sm-12 div_cover">
                            <div style="background-color:#4caf50" class="text-center col-md-12 col-sm-12 top_plan_inner_top">
                                <p id="cd_hd" >SILVER PLAN</p>
                            </div>
                            <div style="background-color:#d7f6c5" class="text-center col-md-12 col-sm-12 top_plan_inner_box">
                                <span id="rup" >₹100 <del id="sml">₹150</del></span>
                                <p>(Plus GST)</p>
                                <span>You Can match 5 Kundali</span>
                                <hr></hr>
                                <div class="container">
                                    <div id="bt1">
                                            <button class="plan container">Register Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="background-color: #9e1083" class="col-lg-4 col-md-3  col-7 top_plan">
                        <div class="col-md-12 col-sm-12 div_cover">
                        <div style="background-color:#a21aad  " class="text-center col-md-12 col-sm-12 top_plan_inner_top">
                            <p id="cd_hd" >GOLDEN PLAN</p>
                        </div>
                       <div style="background-color:#ffc4f2 " class="text-center col-md-12 col-sm-12 top_plan_inner_box">
                            <span id="rup">₹200 <del  id="sml">250</del></span>
                            <p>(Plus GST)</p>
                            <span>You can match 10 Kundali</span>
                            <hr id="wh"></hr>

                            <div class="container">
                                <div id="bt3">
                                        <button class="plan2 container">Register Now</button>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div style="background-color:#90054d" class="col-lg-4 col-md-3  col-7 top_plan">
                        <div class="col-md-12 col-sm-12 div_cover">
                        <div style="background-color:#ef3798" class="text-center col-md-12 col-sm-12 top_plan_inner_top">
                            <p id="cd_hd">DIAMOND PLAN</p>
                        </div>
                        <div style="background-color:#fca7d3" class=" text-center col-md-12 col-sm-12 top_plan_inner_box">
                            <span id="rup" >₹300 <del  id="sml">₹350</del></span>
                            <p>(Plus GST)</p>
                            <span>You can match 15 Kundali</span>
                            <hr></hr>

                            <div class="container">
                                <div id="bt5">
                                        <button class="container plan3">Register Now</button>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
</div>
@include('footer.footer')
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
  </html>
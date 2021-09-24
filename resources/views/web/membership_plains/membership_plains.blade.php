<!doctype html>
<html lang="en">
<head>
      <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="main.css"> -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset('css/membership.css') }}">
    <title>Membership Plans</title>
    <style>
.login {
    margin-top: 10% !important;
}
.login:hover {
    margin-top: 5.5% !important;
}
         .top_in-row{
            margin-left: -15%;
         }
        .lorem {
            text-align: left;
        } 
       @media (min-width: 0px) and (max-width: 430px) {
           
          .rounded
          {
            padding:1rem !important;
          }  

          #contactback
          {
            width:60px;
            height:60px;
          }
       }
      @media (min-width: 1850px) {
        
        #contactback
        {
          float:right;
          margin-top:130px;
          width:180px;
          height:180px;
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
        #registerform
        {
            background-color:white;
            margin:20px;
            padding:20px;
            margin-bottom:10px;
            padding-bottom:20px;
            font-size:12px;
        }   
        #registerform1
        {
            font-size:12px;
        }
        #contactback
        {
          float:right;
        }
        h5
        {
            padding:40px;
        }

        
        }

        
@media (max-width: 500px) {
          h5 {
            font-size: 35px;
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
    margin-right: 8px;
    margin-left: -1px;
    border-top-left-radius: 25px;
    border-top-right-radius: 25px;
    /* width: 30%; */
}
span {
    color: black;
    text-align: left;
}
.blk {
    color: black;
}



    </style>
</head>
<body>
@include('header.header')        
  <div class="bg-image text-center shadow-1-strong rounded text-dark" style="background-image: url('./Images/pink-web-bg.jpg');height:auto;"> 
        <div class="container ">
            <img class="desgin" src="./Images/header-5.png" alt="Image Not Found" style="width:100%;">
        <div class="centered kun" id="txt">Membership Plans</div>  
        </div>
          <div id="registerbackground"><h5 class="lorem" style="color:purple;font-size: auto ; margin-bottom: 3%;font-weight:bold;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident ipsa voluptates est eligendi, magni possimus culpa non quos laborum! Neque necessitatibus ea nobis molestiae vero voluptates laboriosam ratione modi blanditiis?</h5></div>     



          <!-- <section class="bgimage_set"> -->
            <!-- <div class="container cont"> -->
            <div class="container">
                <div class="row top_in_row" id="top_row">
                <div style="background-color:#022667" class="col-lg-3 col-md-3 col-sm-3 col-12 top_plan" id="top_plan1">
                        <div class="col-md-12 col-sm-12 div_cover">
                            <div style="background-color:rgba(41,170,222,255)" class="text-center col-md-12 col-sm-12 top_plan_inner_top">
                                <p id="cd_hd" >FREE MEMBERSHIP</p>
                            </div>
                            <div style="background-color:#acc8f9" class="text-center col-md-12 col-sm-12 top_plan_inner_box">
                                <span id="rup" >₹0 </span>
                                <br><br>
                                <span>Profile Creating / Editing / Listing</span>
                                <hr></hr>
                                <span>Photo Uploading/ Editing / View</span>
                                <hr></hr>
                                <span>Access to Website for 3 Months</span>
                                <hr></hr>
                                <div class="container">
                                    <div id="bt11">
                                        <div id="bt12">
                                            <button class="plan4 container">Register Now</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="background-color:#107515" class="col-lg-3 col-md-3 col-sm-3 col-12 top_plan" id="top_plan1">
                        <div class="col-md-12 col-sm-12 div_cover">
                            <div style="background-color:#4caf50" class="text-center col-md-12 col-sm-12 top_plan_inner_top">
                                <p id="cd_hd" >SILVER MEMBERSHIP</p>
                            </div>
                            <div style="background-color:#81ed85" class="text-center col-md-12 col-sm-12 top_plan_inner_box">
                                <span id="rup" >₹650 <del id="sml">₹850</del></span>
                                <p class="blk" style=" text-align: center">(Plus GST)</p>
                                <span>Profile Creating / Editing / Listing</span>
                                <hr></hr>
                                <span>Photo Uploading/ Editing / View</span>
                                <hr></hr>
                                <span>Access to Website for 6 Months</span>
                                <hr></hr>
                                <span>Kundali Matching fo 15 profiles</span>
                                <hr></hr>
                                <span>View 25 Contact Details</span>
                                <hr></hr>
                                <span>Send Interest Message to 25 Profiles</span>
                                <hr></hr>
                                <span>Recieved Unlimited Interest</span>
                                <hr></hr>
                                <span>Search Relevand Profiles</span>
                                <hr></hr>
                                <span>Get Auto Matches</span>
                                <hr></hr>
                                <span>Latest Profiles Through Emails</span>
                                <hr></hr>
                                <span>View Profile Visitors Information</span>
                                <hr></hr>
                                <span>Block Profile</span>
                                <hr></hr>
                                <span>Define Patner Preference</span>
                                <hr></hr>
                                <span>Sutiable Partner Profile Preference</span>
                                <hr></hr>
                                <span>Discount Offer on Meetup Events</span>
                                <hr></hr>

                                <div class="container">
                                    <div id="bt1">
                                        <div id="bt2">
                                            <button class="plan container">Register Now</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="background-color:#3f0479" class="col-lg-3 col-md-3   col-sm-3 col-12 top_plan" id="top_plan1">
                        <div class="col-md-12 col-sm-12 div_cover">
                        <div style="background-color:#8f06f9" class="text-center col-md-12 col-sm-12 top_plan_inner_top">
                            <p id="cd_hd" >GOLDEN MEMBERSHIP</p>
                        </div>
                       <div style="background-color:#be98f4" class="text-center col-md-12 col-sm-12 top_plan_inner_box">
                            <span id="rup">₹950 <del  id="sml">₹1250</del></span>
                            <p class="blk" style=" text-align: center">(Plus GST)</p>
                            <span>Profile Creating / Editing / Listing</span>
                                <hr></hr>
                                <span>Photo Uploading/ Editing / View</span>
                                <hr></hr>
                                <span>Access to Website for 3 Months</span>
                                <hr></hr>
                                <span>Kundali Matching fo 15 profiles</span>
                                <hr></hr>
                                <span>View 25 Contact Details</span>
                                <hr></hr>
                                <span>Send Interest Message to 25 Profiles</span>
                                <hr></hr>
                                <span>Recieved Unlimited Interest</span>
                                <hr></hr>
                                <span>Search Relevand Profiles</span>
                                <hr></hr>
                                <span>Get Auto Matches</span>
                                <hr></hr>
                                <span>Latest Profiles Through Emails</span>
                                <hr></hr>
                                <span>View Profile Visitors Information</span>
                                <hr></hr>
                                <span>Block Profile</span>
                                <hr></hr>
                                <span>Define Patner Preference</span>
                                <hr></hr>
                                <span>Sutiable Partner Profile Preference</span>
                                <hr></hr>
                                <span>Discount Offer on Meetup Events</span>
                                <hr></hr>

                            <div class="container">
                                <div id="bt3">
                                    <div id="bt4">
                                        <button class="plan2 container">Register Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div style="background-color:#90054d" class="col-lg-3 col-md-3 col-sm-3  col-12 top_plan" id="top_plan1">
                        <div class="col-md-12 col-sm-12 div_cover">
                        <div style="background-color:#ef3798" class="text-center col-md-12 col-sm-12 top_plan_inner_top">
                            <p id="cd_hd">DIAMOND MEMBERSHIP</p>
                        </div>
                        <div style="background-color:#fca7d3" class=" text-center col-md-12 col-sm-12 top_plan_inner_box">
                            <span id="rup" >₹300 <del  id="sml">₹350</del></span>
                            <p class="blk" style=" text-align: center">(Plus GST)</p>
                            <span>Profile Creating / Editing / Listing</span>
                                <hr></hr>
                                <span>Photo Uploading/ Editing / View</span>
                                <hr></hr>
                                <span>Access to Website for 3 Months</span>
                                <hr></hr>
                                <span>Kundali Matching fo 15 profiles</span>
                                <hr></hr>
                                <span>View 25 Contact Details</span>
                                <hr></hr>
                                <span>Send Interest Message to 25 Profiles</span>
                                <hr></hr>
                                <span>Recieved Unlimited Interest</span>
                                <hr></hr>
                                <span>Search Relevand Profiles</span>
                                <hr></hr>
                                <span>Get Auto Matches</span>
                                <hr></hr>
                                <span>Latest Profiles Through Emails</span>
                                <hr></hr>
                                <span>View Profile Visitors Information</span>
                                <hr></hr>
                                <span>Block Profile</span>
                                <hr></hr>
                                <span>Define Patner Preference</span>
                                <hr></hr>
                                <span>Sutiable Partner Profile Preference</span>
                                <hr></hr>
                                <span>Discount Offer on Meetup Events</span>
                                <hr></hr>

                            <div class="container">
                                <div id="bt5">
                                    <div id="bt6">
                                        <button class="container plan3">Register Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>



        <section>
            <div class="container">
                    <img class="desgin" src="Images/header-5.png" alt="Image Not Found" style="width:100%;">
                    <div class="centered1" id="txt1" >Top Up Plans</div>

                <div id="registerbackground">
                    <h5 class="lorem" style="color:purple;font-size:auto ; margin-bottom: 3%; font-weight:bold;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident ipsa voluptates est eligendi, magni possimus culpa non quos laborum! Neque necessitatibus ea nobis molestiae vero voluptates laboriosam ratione modi blanditiis?</h5>
                </div>
</div>

            <div class="container">
                <div class="row top_in_row " id="top_row1">
                    <div style="background-color:#02337b" class="col-lg-4 col-md-3 col-7 top_plan">
                        <div class="col-md-12 col-sm-12 div_cover">
                            <div style="background-color:#276ae2" class="text-center col-md-12 col-sm-12 top_plan_inner_top">
                                <p id="cd_hd" >BASIC TOP UP</p>
                            </div>
                            <div style="background-color:#acc8f9" class="text-center col-md-12 col-sm-12 top_plan_inner_box">
                                <span id="rup" >₹100 <del id="sml">₹150</del></span>
                                <p class="blk" style=" text-align: center">(Plus GST)</p>
                                <span>Access to Website for 2 Months</span>
                                <hr></hr>
                                <span>Kundali Matching for 5 profiles</span>
                                <hr></hr>
                                <span>View 20 Contact Details</span>
                                <hr></hr>
                                <span>Send Interest Message to 20 profiles</span>
                                <div class="container">
                                    <div id="bt13">
                                        <div id="bt24">
                                            <button class="plan5 container">Select Plan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="background-color:#3f0479" class="col-lg-4 col-md-3  col-7 top_plan">
                        <div class="col-md-12 col-sm-12 div_cover">
                        <div style="background-color:#8f06f9" class="text-center col-md-12 col-sm-12 top_plan_inner_top">
                            <p id="cd_hd" >STANDARD TOP UP</p>
                        </div>
                       <div style="background-color:#be98f4" class="text-center col-md-12 col-sm-12 top_plan_inner_box">
                            <span id="rup">₹400 <del  id="sml">450</del></span>
                            <p class="blk" style=" text-align: center">(Plus GST)</p>
                            <span>Access to Website for 4 Months</span>
                            <hr id="wh"></hr>
                            <span>Kundali Matching for 10 profiles</span>
                            <hr></hr>
                            <span>View 30 Contact Details</span>
                            <hr></hr>
                            <span>Send Interest Message to 30 profiles</span>
                            <div class="container">
                                <div id="bt3">
                                    <div id="bt4">
                                        <button class="plan2 container">Select Plan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div style="background-color:#90054d" class="col-lg-4 col-md-3  col-7 top_plan">
                        <div class="col-md-12 col-sm-12 div_cover">
                        <div style="background-color:#ef3798" class="text-center col-md-12 col-sm-12 top_plan_inner_top">
                            <p id="cd_hd">PREMIUM TOP UP</p>
                        </div>
                        <div style="background-color:#fca7d3" class=" text-center col-md-12 col-sm-12 top_plan_inner_box">
                            <span id="rup" >₹600 <del  id="sml">₹650</del></span>
                            <p class="blk">(Plus GST)</p>
                            <span>Access to Website for 6 Months</span>
                            <hr></hr>
                            <span>Kundali Matching for 15 profiles</span>
                            <hr></hr>
                            <span>View 40 Contact Details</span>
                            <hr></hr>
                            <span>Send Interest Message to 40 profiles</span>
                            <div class="container">
                                <div id="bt5">
                                    <div id="bt6">
                                        <button class="container plan3">Select Plan</button>
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
            <!-- </div>
    </section> -->
</div>
@include('footer.footer')
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
  </html>
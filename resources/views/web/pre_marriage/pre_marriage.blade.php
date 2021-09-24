<!doctype html>
<html lang="en">
<head>
      <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/main.css') }}">
    <!-- <link rel="stylesheet" href="top_up.css"> -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css') }}">
    <title>Verification</title>
    <style>

        

        .lorem {
            text-align: left;
        } 
        #btn1 {
            border: 1px solid white;
            background-color: #ec0ce0;
            border-radius: 10px;
            padding: 2px 2px 2px 2px;
            box-shadow: 2px 3px 5px 0px;
            width: 130px;
            display: inline-block;
            margin-bottom: 2%;
        }
        #btn2 {
            border: 1px solid white;
            background-color: #49b949;
            border-radius: 10px;
            padding: 2px 2px 2px 2px;
            box-shadow: 2px 3px 5px 0px;
            width: 130px;
            display: inline-block;
        }
        #btn3 {
            border: 1px solid white;
            background-color: #02337b;
            border-radius: 10px;
            padding: 2px 2px 2px 2px;
            box-shadow: 2px 3px 5px 0px;
            width: 130px;
            display: inline-block;
        }
        #btn1 .plan{
            background-color: #e31ae8;
            width: -webkit-fill-available;
            border: 1px solid white;
            border-radius: 6px;
            color: white;
            font-weight: 700;
        }
        #btn2 .plan {
            background-color:#49b949;
            width: -webkit-fill-available;
            border: 1px solid white;
            border-radius: 6px;
            color: white;
            font-weight: 700;
        }
        #btn3 .plan{
            background-color: #31b4d0;
            width: -webkit-fill-available;
            border: 1px solid white;
            border-radius: 6px;
            color: white;
            font-weight: 700;
        }
        .btnright
         {
             float: right;
             padding-right: 1em;

         }
         .btnright1
         {
             float: center;
             padding-right: 1em;

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
        font-size: 2vw;
        font-weight: 900;
        transform: translate(-50%, -50%);
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
    @media (max-width: 768px) {
          
        }
        
        @media (max-width: 500px) {
          .desgin {
            height: 4em;
          }
          .lorem {
              margin-top: 3em;
              margin-bottom: -2em;
          }
          .centered {
            font-size: 3vw;
          }
          h5 {
            font-size: 16px;
          }
 

     }
    </style>
</head>
<body>
   @include('header.header')

  <div class="bg-image text-center shadow-1-strong rounded text-dark" style="background-image: url('./Images/pink-web-bg.jpg');height:auto;"> 
        <div class="container ">
            <img class="desgin" src="./Images/header-5.png" alt="Image Not Found" style="width:100%;">
          <div class="centered txt">Pre-Marriage Background Verification</div>  
        </div>
        <div id="registerbackground">
        <br>
    <br>
    <div class="btnright">
    <div id="btn1">
    <button class="plan container">Download</button>
    </div>
    <div id="btn2">
    <button class="plan container">Contact Us</button>
    </div>
    <div id="btn3">
    <button class="plan container">Pay</button>
    </div>
    </div>
    <br>
          <h5 class="lorem" id="lor" style="color:purple;font-size: ; font-weight:bold;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident ipsa voluptates est eligendi, magni possimus culpa non quos laborum! Neque necessitatibus ea nobis molestiae vero voluptates laboriosam ratione modi blanditiis?</h5>
  <br>
    <div class="btnright1">
    <div id="btn1">
    <button class="plan container">Download</button>
    </div>
    <div id="btn2">
    <button class="plan container">Contact Us</button>
    </div>
    <div id="btn3">
    <button class="plan container">Pay</button>
    </div>

    </div>
    <br>
    </div>
    </div>
    </div>
  @include('footer.footer')
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
  </html>
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
    <title>Terms of Use</title>
    <style>
              .lorem {
            text-align: left;
        } 
        a {
          color:white;
          text-decoration: none !important;
        }
        a:link {
          text-decoration: none  !important;
        }
        
        a:visited {
          text-decoration: none  !important;
        }
        a:hover {
          color: white  !important;
        }
        a:active {
          color: white !important;
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
      @media (max-width: 1024px) {
     .privacy {
        width: 136%;
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
        .centered {
        position: absolute;
        top: 50%;
        left: 50%;
        font-size: 4vw;
        font-weight: 900;
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
        .dropdown {
           visibility: hidden;
        }
        .privacy {
          width: 134%;
          border: 3px solid white;
          display: flex;
          flex-direction: row;
          flex-wrap: nowrap;
          justify-content: flex-start;
          align-items: center;
          background-color: #efad34;
          padding: 20px 0px 20px 10px;
          }
        .pri, .trm, .pym, .disc {
          padding: 10px 20px 10px 20px;
          border-radius: 6px;
          font-size: x-large;
          font-weight: 700;
          background-color: #e31ae8;
          border: 3px solid white;
          margin-right: 25px;
          color: white;
          cursor: pointer;
        }
        @media (max-width: 768px) {
          .pri, .trm, .pym, .disc {
             font-size: large;
          }
          .privacy {
             width: 142%;
          }
          .pri, .trm, .pym, .disc {
            margin-right: 11px;
          }

        }
        @media (max-width: 500px) {
          h5 {
            font-size: 16px;
          }
          .privacy {
            width: 257%;
            display: flow-root;
          }
          .pri, .trm,.pym,.disc {
            margin-bottom: 1%;
            margin-left: 2%;
          }
          li {
            /* background-color: #efad34; */
            list-style: none;
          }
          .centered {
            font-size: 26px;
          }
        }
        @media (min-width: 325px) and (max-width:400px) {
          .centered {
            font-size: 23px;
          }
        }
        @media (min-width: 0px) and (max-width:324px) {
          .centered {
            font-size: 19px;
          }
        }
     }
    </style>
</head>
<body>
@include('header.header')
        <div class="privacy">
        <!-- <nav class="navbar navbar-dark bg-dark"> -->

        <div  class="pri col-lg-2 col-md-2 col-4"><a href="./privacy.php"><span>Privacy Policy<span></a></div>
            <div  class="trm col-lg-2 col-md-2 col-4"><a href="./term.php"><span>Terms of Use<span></a></div>
            <div  class="pym col-lg-2 col-md-2 col-4"><a href="./payment.php"><span>Payment Policy<span></a></div>
            <div class="disc col-lg-2 col-md-2 col-4"><a href="./disclaimer.php"><span>Disclaimer<span></a></div>
    </div>
  <div class="bg-image text-center shadow-1-strong rounded text-dark" style="background-image: url('./Images/pink-web-bg.jpg');height:auto;"> 
        <div class="container ">
            <img src="./Images/header-5.png" alt="Image Not Found" style="width:100%;">
          <div class="centered txt" style="font-size:auto;">Terms of Use</div>  
        </div>
          <div id="registerbackground"><h5 class="lorem" style="color:purple; font-weight:bold;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident ipsa voluptates est eligendi, magni possimus culpa non quos laborum! Neque necessitatibus ea nobis molestiae vero voluptates laboriosam ratione modi blanditiis?</h5></div>
    </div>      
  </div>
@include('footer.footer')
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
  </html>
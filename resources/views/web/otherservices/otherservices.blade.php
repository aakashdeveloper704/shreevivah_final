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
    <title>Other Services</title>
    <style>

        .txt {
            font-size: 24px;
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
        .centered {
        position: absolute;
        top: 50%;
        left: 50%;
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

        
        }
    @media (max-width: 768px) {
          .txt {
            font-size: 24px;
          }
        }
        
        @media (max-width: 500px) {

          h5 {
            font-size: 16px;
          }
          .txt {
    font-size: 13px;
}

     }

     @media (max-width: 375px) { 
      .txt {
          font-size: 11px;  
        }
     }

     @media (min-width: 0px)  and (max-width: 325px){ 
      .txt {
          font-size: 11px;  
        }
     }
    </style>
</head>
<body>
    <div>
@include('header.header')
</div>
  <div class="bg-image text-center shadow-1-strong rounded text-dark" style="background-image: url('./Images/pink-web-bg.jpg');height:auto;"> 
        <div class="container ">
            <img src="./Images/header-5.png" alt="Image Not Found" style="width:100%;">
          <div class="centered txt">Other Services</div>  
        </div>
          <div id="registerbackground"><h5 class="lorem" style="color:purple;font-size: ; font-weight:bold;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident ipsa voluptates est eligendi, magni possimus culpa non quos laborum! Neque necessitatibus ea nobis molestiae vero voluptates laboriosam ratione modi blanditiis?</h5></div>
    </div>      
  </div>

  @include('footer.footer')
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
  </html>
<!doctype html>
<html lng="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/main.css') }}">
    <link rel="stylesheet" href="{{asset('css/top_up.css') }}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css') }}">
    <title>Payment Policy</title>
    <style>
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

            .rounded {
                padding: 1rem !important;
            }

            #contactback {
                width: 60px;
                height: 60px;
            }
        }

        @media (max-width: 1024px) {
            .privacy {
                width: 136%;
            }
        }

        @media (min-width: 1850px) {

            #contactback {
                float: right;
                margin-top: 130px;
                width: 180px;
                height: 180px;
            }
        }

        .rounded {
            padding: 3rem;
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
        font-size: 4vw;
            transform: translate(-50%, -50%);
        }

        .top-right {
            position: absolute;
            top: 100px;
            right: 16px;
        }

       

        #registerform {
            background-color: white;
            margin: 20px;
            padding: 20px;
            margin-bottom: 10px;
            padding-bottom: 20px;
            font-size: 12px;
        }

        #registerform1 {
            font-size: 12px;
        }

        #contactback {
            float: right;
        }

        h5 {
            padding: 40px;
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

        .pri,
        .trm,
        .pym,
        .disc {
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

            .pri,
            .trm,
            .pym,
            .disc {
                font-size: large;
            }

            .privacy {
                width: 142%;
            }

            .pri,
            .trm,
            .pym,
            .disc {
                margin-right: 11px;
            }

            .txt {
                width: 60%;
            }
        }

        @media (max-width: 500px) {
            h5 {
                font-size: 35px;
            }

            .privacy {
                width: 257%;
                display: flow-root;
            }

            .pri,
            .trm,
            .pym,
            .disc {
                margin-bottom: 1%;
                margin-left: 2%;
            }
            .desgin {
            height: 5em;
          }
            li {
                /* background-color: #efad34; */
                list-style: none;
            }

        }

        body {
            padding: 40px 0;
        }

        .grid{
            width: 79%;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            grid-gap: 20px;
            align-items: stretch;
            margin-left: 110px;
            margin-top: 51px;
        }

        .grid>article {
            border: 1px solid #ccc;
            box-shadow: 2px 2px 6px 0px rgba(0, 0, 0, 0.3);
        }

        .grid>article img {
            max-width: 100%;
        }

        .grid .text {
            padding: 20px;
        }

        .text {
            background-color: white;
            color: #a81b98;
            padding: 65px;
        }

        .btn1 {
            background-color: #909;
            width: 56%;
            border-radius: 10px;
            text-align: center;
            margin-top: 10px;
            margin-left: 25%;
            font-size: 10px;
            border: 4px solid #e5db60;
        }
        @media (min-width:10px) and (max-width:320px){
            .grid{
                margin-left: -9px;
            }
        }
        @media (min-width:330px) and (max-width:380px){
            .grid{
                margin-left: 24px;
            }
        }
        @media (min-width:390px) and (max-width:480px){
            .grid{
                margin-left: 40px;
            }
        }
        @media (min-width:760px) and (max-width:780px){
            .grid{
                margin-left: 70px;
            }
        }

        .privcy{
            color:rgb(197 27 235);
            border: 2px solid white!important;
            border-radius:10px !important;
            font-weight:600;
        }


        .desgin {
          width: 100%;
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
        .centered {
        position: absolute;
        top: 50%;
        left: 50%;
        font-weight: 900;
        font-size: 4vw;
        transform: translate(-50%, -50%);
        }

        @media (max-width:2560px) {
    .cemtered {
        font-size: 4vw;
    }
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
        width: 138%;
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
        .dropdown {
           visibility: hidden;
        }
        .privacy {
          width: 138%;
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
             width: 147%;
          }
          .pri, .trm, .pym, .disc {
            margin-right: 5px;
          }
          .pri {
              margin-left: -0.5%;
          }

        }
        @media (max-width: 500px) {
          h5 {
            font-size: 16px;
            text-align: left;
          }
          .privacy {
            width: 257%;
            display: flow-root;
          }
          .pri, .trm,.pym,.disc {
            margin-bottom: 1%;
            margin-left: 2%;
          }
          .centered {
            font-size: 5vw;
          }
          li {
            /* background-color: #efad34; */
            list-style: none;
          }
          .desgin {
            height: 5em;
          }
        }
     }
    </style>
</head>

<body>
@include('header.header')
<div class="privacy">
    <!-- <nav class="navbar navbar-dark bg-dark"> -->

        <div  class="pri col-lg-2 col-md-2 col-4"><a href="{{'web_aboutus'}}"><span class= "a">About Us<span></a></div>
        <div  class="trm col-lg-2 col-md-2 col-4"><a href="{{'web_successstories'}}"><span class= "a">Success Stories<span></a></div>
        <div  class="pym col-lg-2 col-md-2 col-4"><a href="{{'web_blogs'}}"><span class= "a">Blogs<span></a></div>
        <div class="disc col-lg-2 col-md-2 col-4"><a href="{{'web_careers'}}"><span class= "a">Careers<span></a></div>
</div>
    <!-- <div style="background: #e5920e;padding-bottom:10px;" class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-md-">
                <a href="#" class="btn privcy">About Us</a>
            </div>
            <div class="col-sm-3 col-md-3">
                <a href="#" class="btn privcy">Success Stories</a>
            </div>
            <div class="col-sm-3 col-md-3">
                <a href="#" class="btn privcy">Blogs</a>
            </div>
            <div class="col-sm-3 col-md-3">
                <a href="#" class="btn privcy">Careers</a>
            </div>
        </div>
    </div> -->
    <div class="bg-image text-center shadow-1-strong rounded text-dark"
        style="background-image: url('./Images/pink-web-bg.jpg');height:auto;">
        <div class="container ">
            <img class="desgin" src="./Images/header-5.png" style="width:100%;">
            <div class="centered txt" >Blogs</div><br>
        </div>
        
        <div class="container">
            <main class="grid">
                <article>
                    <img src="Images/Left_card1.PNG" alt="Sample photo">
                    <div class="text">
                        <h3>Rahul and Pooja</h3>
                        <p>Collaboratively administrate empowered markets via plug-and-play networks.</p>
                        <a href="Images/Left_card1.PNG" class="btn1 btn-primary btn-block">Know More</a>
                    </div>
                </article>
                <article>
                    <img src="Images/Left_card1.PNG" alt="Sample photo">
                    <div class="text">
                        <h3>Rahul and Pooja</h3>
                        <p>Collaboratively administrate empowered markets via plug-and-play networks</p>
                        <a href="Images/Left_card1.PNG" class="btn1 btn-primary btn-block">Know More</a>
                    </div>
                </article>
                <article>
                    <img src="Images/Left_card1.PNG" alt="Sample photo">
                    <div class="text">
                        <h3>Rahul and Pooja</h3>
                        <p>Collaboratively administrate empowered markets via plug-and-play networks</p>
                        <a href="Images/Left_card1.PNG" class="btn1 btn-primary btn-block">Know More</a>
                    </div>
                </article>
                <article>
                    <img src="Images/Left_card1.PNG" alt="Sample photo">
                    <div class="text">
                        <h3>Rahul and Pooja</h3>
                        <p>Collaboratively administrate empowered markets via plug-and-play networks</p>
                        <a href="Images/Left_card1.PNG" class="btn1 btn-primary btn-block">Know More</a>
                    </div>
                </article>
                
            </main>
        </div>
    </div>
    </div>
    </div>
@include('footer.footer')
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>
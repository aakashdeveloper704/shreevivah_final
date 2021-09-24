<!doctype html>
<html lang="en">
  <head>
    <style>
       @media (min-width: 0px) and (max-width: 340px) {
          #table tr td
          {
              width: 10%;
              font-size:10px;
              margin-bottom:10px;
          } 
          #table2 tr td
          {
              width: 10%;
              font-size:10px;
              margin-bottom:10px;
          } 
          .rounded
          {
            padding:1rem !important;
          }  
      #table tr td
      {
          width: 50%;
          border:1px solid black;
      }  
      #table2 tr td
      {
          width: 50%;
          border:1px solid black;
          font-size:13px;
      } 
      
      .rounded
      {
        padding:3rem;
      }
      
      /* #rect {
  animation-duration: 6s;
  animation-name: slidein;
}

@keyframes slidein {
  from {
    margin-top: 100%;
    width: 300%; 
  }

  to {
    margin-top: 0%;
    width: 100%;
  }
} */
}
              /* Container holding the image and the text */
.container {
  position: relative;
  color: white;
}
/* Centered text */
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.article{
  width:900px;
  margin:30px;
  padding:12px;
  background:#efefef;
  border-radius:5px;
}
.image{
  background:silver;
  width:500px;
  height:400px;
  border-radius:5px;
  padding:20px;
  color:#efefef;
  font-size:8rem;
  &.right{
    float:right;
    margin-left:20px;
  }
  &.left{
    float:left;
    margin-right:30px;
  }
}

.content{
  padding: 0 20px;
  color:#444;
  .headline{
  }
}

#button {
    cursor: pointer;
    display: block;
    background-color: #a6234a;
    height: 25px;
    color: white;
    font-size: 40px;
    line-height: 25px;
    margin-top: 3%;
    text-align: center;
    /* -webkit-transition: 500ms all; */
    /* -moz-transition: 500ms all; */
    /* transition: 500ms all; */
}

canvas
{
  background: wheat;
  font-family: Times New Roman
  border: 1px solid black;
  width: 300px;
  height: 300px;
  margin: 30px;
  /* background-image: url('https://png.pngtree.com/png-clipart/20190924/original/pngtree-user-vector-avatar-png-image_4830521.jpg'); */
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
}

.fa-desktop:before {
    content: "\f108";
    float: left;
    background: #b31547;
    padding: 17px;
    margin-top: -18px;
    margin-left: -17px;
    /* background-size: 118px; */
    width: 12%;
    /* height: 1px; */
    font-size: 36px;
}
//ClearFix
.group{
  &:before,
  &:after {
    content: "";
    display: table;
  } 
  &:after {
    clear: both;
  }
}
.page-item.disabled .page-link{
    margin-left:15px !important;
}
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script>
      function checkPosition() {
      if (window.matchMedia('(max-width: 340px)').matches) 
      {

      }
      else
      {
        
      }
}
    </script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Profile Photo Video Gallery</title>
  </head>
  <body>
    @include('header.header')
    
    <div class="bg-image text-center shadow-1-strong rounded text-dark" style="background-image: url('./Images/yellow-web-bg.jpg');height:auto; padding-bottom:32px"> 
    
      <h3 id="rect" class="border1" style="background-color:#FFA500;padding: 30px;text-align: left; border: 4px solid;
  border-color: #800080;" >
      Profile Photo Video Gallery
</h3>
      
      <div class="container"> 
          
      <h1 style="background-color:#fffff0;color:#bd1769;padding: 15px; height:auto; padding-bottom:23px; margin-top: 25px">
      <b>Profile Photo Video Gallery</b>
</h1>
    
    <div class="container" style="background-color:#fffff0;color:#bd1769;padding: 15px; height:auto; margin-top: 35px">    
        <div class="row">
            <div class="col-md-6 ">
                <div class="col-md-12 bg-white shadow-lg" style="margin-top: 20px">
            </div> 
   </div>
 </div>
    <div class="col-md-12 ">
        <div class="container">
            <div class="row">
                <h3 class="text-justify" style="color:black;"><b>Get more responses by adding your photos</b></h3>
            </div>

   <div class="row" >
       <h4 class="text-justify" style="color:black;">You can increase your profile visibility by adding more photographs. You can add maximum
           6 photographs in your profile and you can't update same image twice.
           Please upload the photos as per instructions given below.
       </h4>
   </div>

   <div class="row">
       <div class="col-md-4">
       <canvas class="row" style="padding:40px" id="canvas1">
    <img src="" alt="">
    </canvas>
       </div>
       <div class="col-md-8">
           <div class="container">
               <h1 style="color:black; padding:20px" id="upload">Upload Image</h1>
           </div>
  <div class="form-group">
        <input type="file" id="fgFile" multiple="false" onChange="uploadFG()" placeholder="Your Photo..."/>
            <span id='val'></span>
                <span id='button' style="padding:18px; cursor: pointer;
                    display: block;
                    background-color: #a6234a;
                    height: 60px;
                    color: white;
                    font-size: 46px;
                    line-height: 26px;
                    margin-top: 3%;
                    text-align: center;" class="fas fa-desktop new1">From Computer</span>
            </div>
        </div>
       </div>
   </div>
</div>
   </div>


   <div class="container" style="background-color:#fffff0;color:#bd1769;padding: 15px; height:auto; margin-top: 35px">    
    <div class="row">
  <div class="col-md-6 ">
    <div class="col-md-12 bg-white shadow-lg" style="margin-top: 20px">
    
    </div> 
  
   </div>
 </div>
 <div class="col-md-12 ">
 
  <div class="container">
<div class="row">
  <h3 class="text-justify" style="color:black;"><b>Get more responses by adding your videos</b></h3>
   </div>

   <div class="row" >
       <h4 class="text-justify" style="color:black;">You can increase your profile visibility by adding video. You can add only
           one video as par speech line and instruction given below.
           
       </h4>
   </div>

   <div class="row">
       <div class="col-md-4">
       <canvas class="row" style="padding:40px" id="canvas1"></canvas>
       </div>
       <div class="col-md-8">
           <div class="container">
               <h1 style="color:black; padding:20px" id="upload">Upload Video</h1>
           </div>
           <div class="form-group">
                <input type="file" id="fgFile" multiple="false" onChange="uploadFG()" placeholder="Your Photo..."/>
                    <span id='val'></span>
                    <span id='button' style="padding:18px; cursor: pointer;
                        display: block;
                        background-color: #a6234a;
                        height: 60px;
                        color: white;
                        font-size: 46px;
                        line-height: 26px;
                        margin-top: 3%;
                        text-align: center;" class="fas fa-desktop new1">From Computer</span>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<div class="row">
  <div class="col-md-6 ">
    <div class="col-md-12 bg-white shadow-lg" style="margin-top: 20px">
    
    </div> 
</div>

</div>
<div>
    <h1 class="text-justify" style="color:#b814ca;margin-left: 12px;">Instruction for Uploading photo</h1>
</div>
<div class="container">
    <div class="container p-3 my-3 text-white" style="background-color:#b814ca; height:110px">
    </div>

<div>
    <h1 class="text-justify" style="color:#b814ca;">Instruction for Uploading video</h1>
</div>
<!-- <div class="container"> -->
<div class="container p-3 my-3 text-white" style="background-color:#b814ca; height:110px">
<!-- </div> -->
</div>
</div>
</div>
  @include('footer.footer')
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
<script>
    var imgFG = null;
var imgBG = null;

function uploadFG()
{
  var fileInput = document.getElementById("fgFile");
  var canvas = document.getElementById("canvas1");
  imgFG = new SimpleImage(fileInput);
  imgFG.drawTo(canvas);
}

function composite()
{
  clearCanvases();
  var canvas1 = document.getElementById("canvas1");
  var outputImage = new SimpleImage(imgFG.width, imgFG.height);
  for (var pixel of imgFG.values())
    {
      if (pixel.getGreen() > pixel.getRed() + pixel.getBlue())
        {
          var x = pixel.getX();
          var y = pixel.getY();
          var newPixel = imgBG.getPixel(x, y);
          outputImage.setPixel(x, y, newPixel);
        }
      else
        {
          outputImage.setPixel(pixel.getX(), pixel.getY(), pixel);
        }
    }
  outputImage.drawTo(canvas1);
  
}

function clearCanvases()
{
  var canvas1 = document.getElementById("canvas1");
  var context = canvas1.getContext("2d");
  context.clearRect(0, 0, canvas1.width, canvas1.height);
  
}
</script>
<script src="https://www.dukelearntoprogram.com/course1/common/js/image/SimpleImage.js"></script>
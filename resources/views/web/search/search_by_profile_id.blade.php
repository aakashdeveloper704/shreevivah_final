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
    <link rel="stylesheet" href="{{asset('bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Search by profile ID</title>
  </head>
  <body>
@include('header.header')
    <div class="bg-image text-center shadow-1-strong rounded text-dark" style="background-image: url('./Images/yellow-web-bg.jpg');height:auto;"> 
      <!-- <div class="container">
        <img src="./Images/header-5.png" alt="Image Not Found" style="width:100%;">
        <div class="centered" style="font-size:auto;">Payment Receipt</div>  
    </div> -->
    <!-- <div id="rect" ></div> -->
    
    
      <h3 id="rect" class="border1" style="background-color:#FFA500;padding: 30px;text-align: left; border: 4px solid;
  border-color: #800080;" >
      Search by Profile ID
</h3>
      
      <br>
      <div class="container">
      <strong>
      <h1 style="background-color:#fffff0;color:#bd1769;padding: 10px; height:70px;">
      <b>Search by profile ID</b>
</h1>
    </strong>
    <br>
    <div class="container col-md-4">
    <h5 style="background-color:#fffff0;color:#bd1769;padding: 15px; height:70px ">
      <label for="">Profile ID</label>
      <input type="text"> 
      </div>
</h5>
    
    <a href="#" class="btn btn-primary"style="background-color: rgb(191 42 191) !important; padding: 3px 30px 7px 30px; border-radius: 16px;">Search</a>
<br>
    <br>
    <h6 class="text-sm-left" style="background-color:#c51beb;color:#FFFFFF;padding: 7px; height:30px">
      <b>We have 1 matched profiles for your applied search.</b>
</h6>
    <br>
    
    <div class="row">
  <div class="col-md-12 ">
    <div class="col-md-6 bg-white offset-md-3">
    <div class="row">
  <div class="col-sm-6">
    <img class="card-img p-4" src="https://i.pinimg.com/originals/a5/69/e2/a569e2baf76cd50b9a568e6f9ab86fc3.jpg" alt="Card image"/>
  </div>
  <div class="col-sm-6">
    <div class="card-body-right"><br>
    <h4 class="card-title text-sm-left text-secondary">ABC</h4>
      <h4 class="card-title text-sm-left text-secondary">346327846</h4>
      <h4 class="card-title text-sm-left text-secondary">Age: 31 Years 1 Months</h4>
      <h4 class="card-title text-sm-left text-secondary">Heghit: 5.5</h4>
      <h4 class="card-title text-sm-left text-secondary">Religion:</h4>
      <h4 class="card-title text-sm-left text-secondary">Caste: Marathi</h4>
      <h4 class="card-title text-sm-left text-secondary">Education: MBA</h4>
      <h4 class="card-title text-sm-left text-secondary">Location: Mumbai</h4>
      <h4 class="card-title text-sm-left text-secondary">Heghit:</h4>
      <a href="#" class="btn btn-primary float-right"style="background-color: rgb(191 42 191) !important; padding: 3px 30px 7px 30px; border-radius: 16px;">View Profile</a>

    </div>
     </div>
  </div> 
   </div>
    </div>

</div>
<br>
<br>
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

<!doctype html>
<html lang="en">
<head>
      <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css" />
    <link rel="stylesheet" href="{{asset('css/main.css') }}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset('css/membership.css') }}">
    <title>Advance Search</title>
    
 
  <style>
 @charset "UTF-8";
* {
  box-sizing: border-box;
}

.dropdown {
  position: relative;
  margin-bottom: 20px;
}
.dropdown .dropdown-list {
  padding: 25px 20px;
  background: #fff;
  position: absolute;
  top: 50px;
  left: 0;
  right: 0;
  border: 1px solid rgba(0, 0, 0, 0.2);
  max-height: 223px;
  overflow-y: auto;
  background: #fff;
  display: none;
  z-index: 10;
}
.dropdown .checkbox {
  opacity: 0;
  transition: opacity 0.2s;
}
.dropdown .dropdown-label {
  display: block;
  height: 44px;
  font-size: 16px;
  line-height: 42px;
  background: #fff;
  border: 1px solid rgba(0, 0, 0, 0.2);
  padding: 0 40px 0 20px;
  cursor: pointer;
  position: relative;
}
.dropdown .dropdown-label:before {
  content: "▼";
  position: absolute;
  right: 20px;
  top: 50%;
  transform: translateY(-50%);
  transition: transform 0.25s;
  transform-origin: center center;
}
.dropdown.open .dropdown-list {
  display: block;
}
.dropdown.open .checkbox {
  transition: 2s opacity 2s;
  opacity: 1;
}
.dropdown.open .dropdown-label:before {
  transform: translateY(-50%) rotate(-180deg);
}

.checkbox {
  margin-bottom: 20px;
}
.checkbox:last-child {
  margin-bottom: 0;
}
.checkbox .checkbox-custom {
  display: none;
}
.checkbox .checkbox-custom-label {
  display: inline-block;
  position: relative;
  vertical-align: middle;
  cursor: pointer;
}
.checkbox .checkbox-custom + .checkbox-custom-label:before {
  content: "";
  background: transparent;
  display: inline-block;
  vertical-align: middle;
  margin-right: 10px;
  text-align: center;
  width: 12px;
  height: 12px;
  border: 1px solid rgba(0, 0, 0, 0.3);
  border-radius: 2px;
  margin-top: -2px;
}
.checkbox .checkbox-custom:checked + .checkbox-custom-label:after {
  content: "";
  position: absolute;
  top: 2px;
  left: 4px;
  height: 4px;
  padding: 2px;
  transform: rotate(45deg);
  text-align: center;
  border: solid #000;
  border-width: 0 2px 2px 0;
}
.checkbox .checkbox-custom-label {
  line-height: 16px;
  font-size: 16px;
  margin-right: 0;
  margin-left: 0;
  color: black;
}

         .top_in-row{
            margin-left: -15%;
         }
        
      
      @media (min-width: 1850px) {
       
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
       
        }

        
@media (max-width: 500px) {

  .note2 {
    color: #070507;
    font-size: 12px;
    text-align: center;
    margin-bottom: 3%;
    font-weight: 600;
  }
}


 


@media (min-width:550px) and (max-width:4000px) {
  .note2{
    color:black;
    font-size: 30px ; 
    text-align: center; 
    margin-bottom: 3%;
    font-weight:600;
  }
} 
.note{
    margin-top: -10%;
    padding-bottom: 10%;
    color: black;
  }
.form-contro{
  padding: 5px 15px;
  width:100%;
  color:grey;
  font-size: 12px;
  border:1px solid pink;
  border-radius:1px;
}

.container11 { 
  width: auto;
  height: 100px;
  color: grey;
  overflow-y: scroll;
  font-size: 12px;
  padding-left: 10px;
  border:2px solid #ccc;
}
.ftbtn{
    margin-top: 10px;
    padding: 10px;
    border: 2px solid #fefb5e;
    border-radius: 10px;
    font-size: 14px;
    font-weight: 600;
    background-color: #bf2abf;
    color: white;
    box-shadow: 3px 0px 8px 0px pink;
}
    </style>
</head>
<body>
@include('header.header')        
<div class="bg-image text-center shadow-1-strong rounded text-dark" style="background-image: url('./Images/yellow-web-bg.jpg');height:auto;"> 
  <div id="registerbackground"><p class="lorem" style="color:#bf2abf;font-size: 30px ; text-align: center; margin-bottom: 3%;font-weight:bold;">Advance Search</p></div>     


  <div class="container" style="background-color:white; padding:20px; text-align:left; font-size:auto;">
  <div class="row">
    <div class="col">
      <div class="form-group row">
      <label for="inputPassword" class="col-sm-2 col-form-label" style="color:black;">Gender</label>
      <div class="col-sm-10">
      <select name="cars" class="form-contro">
    <option value="volvo">Male</option>
    <option value="saab">Female</option>
  </select>
      </div>
    </div>
    </div>
    <div class="col">
    <div class="form-group row">
      <label for="inputPassword" class="col-sm-2 col-form-label" style="color:black; ">Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-contro" style="width:100%;
  color:pink;
  font-size: 12px;
  border:1px solid pink;
  border-radius:1px;" placeholder="Name">
      </div>
    </div>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <div class="form-group row">
      <label for="inputPassword" class="col-sm-2 col-form-label" style="color:black;">Birth Year</label>
      <div class="col-sm-4">
      <select name="cars" class="form-contro">
    <option >2001</option>
    <option >2002</option>
  </select>
      </div>
      <div class="col-sm-2" style="text-align:center;">
        <label for="inputPassword"  style="color:black; ">To</label>
      </div>
      <div class="col-sm-4">
      <select name="cars" class="form-contro">
    <option >2020</option>
    <option >2021</option>
  </select>
      </div>
    </div>
    </div>
    <div class="col">
    <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label" style="color:black;">Height</label>
      <div class="col-sm-4">
        <input type="select" class="form-contro" id="inputPassword" placeholder="Select">
      </div>
      <div class="col-sm-2" style="text-align:center;">
        <label for="inputPassword"  style="color:black;">To</label>
      </div>
      <div class="col-sm-4">
        <input type="select" class="form-contro" id="inputPassword" placeholder="Select">
  </div>
</div>
</div>
</div>
<!-- this is minimize card -->
<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <p style="color:black;">Var/ Vadhu Work Locaton, Caste, and Education</p>
        <button  type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="
    /* margin-left: 99%; */
    float: right;
    width: 22px;
    height: 20px;
    margin-top: -16px;
    border-radius: 25em;
    background-color: white;
    color: red;
    border: 1px solid red;">
          −
        </button>
      
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      
    
    <div class="card-body">
    <div class="container" style="background-color:white; padding:20px; text-align:left; font-size:auto;">
  <div class="row">
    <div class="col">
      <div class="form-group row">
      <label for="inputPassword" class="col-sm-3 col-form-label" style="color:black;">Select Country</label>
      <div class="col-sm-9">
      <div class="container11">
    <input type="checkbox" /> UK<br />
    <input type="checkbox" /> India <br />
    <input type="checkbox" /> China<br />
    <input type="checkbox" /> USA <br />
    <input type="checkbox" /> Germany <br />
    
</div>
      

      
      </div>
    </div>
    </div>
    <div class="col">
    <div class="form-group row">
      <label for="inputPassword" class="col-sm-3 col-form-label" style="color:black; ">State</label>
      <div class="col-sm-9">
      <div class="container11">
    <input type="checkbox" /> Andhra Pradesh<br />
    <input type="checkbox" /> Andaman and Nicobar Islands <br />
    <input type="checkbox" /> Arunachal Pradesh<br />
    <input type="checkbox" /> Assam <br />
    <input type="checkbox" /> Bihar <br />
    
</div>
      </div>
    </div>
    </div>
</div>
</div>
</div>
</div>
<!-- this is minimize card -->
<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <p style="color:black;">Education and Occupation</p>
        <button  type="button" data-toggle="collapse" data-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne" style="
    /* margin-left: 99%; */
    float: right;
    width: 22px;
    height: 20px;
    margin-top: -16px;
    border-radius: 25em;
    background-color: white;
    color: red;
    
    border: 1px solid red;">
          −
        </button>
      
    </div>

    <div id="collapseOne1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      
    
    <div class="card-body">
    <div class="container" style="background-color:white; padding:20px; text-align:left; font-size:auto;">
  <div class="row">
    <div class="col">
      <div class="form-group row">
      <label for="inputPassword" class="col-sm-3 col-form-label" style="color:black;">Education Level</label>
      <div class="col-sm-9">
      
      <div class="container11">
    <input type="checkbox" /> Graduation<br />
    <input type="checkbox" /> Post Graduation <br />
    <input type="checkbox" /> Doesn't Matter<br />
    <input type="checkbox" /> Still stydying <br />
    <input type="checkbox" /> Masteres <br />
    
</div> 
      
      </div>
    </div>
    </div>
    <div class="col">
    <div class="form-group row">
      <label for="inputPassword" class="col-sm-3 col-form-label" style="color:black; ">Occupation</label>
      <div class="col-sm-9">
      <div class="container11">
    <input type="checkbox" /> Doesn't Matter<br />
    <input type="checkbox" /> 5 Lakhs+ <br />
    <input type="checkbox" /> 10Lakh+<br />
    <input type="checkbox" /> 10 lakh+ <br />
    <input type="checkbox" /> 15 Lakhs <br />
      </div>
    </div>
    </div>
</div>

</div>
</div>
<div class="row">
    <div class="col">
      <div class="form-group row">
      <label for="inputPassword" class="col-sm-3 col-form-label" style="color:black;">Anual Income in INR</label>
      <div class="col-sm-9">
        <input type="password" class="form-contro" ><br><p style="color:black; padding-top:5px; padding-bottom:-5px; font-size:10px;">To</p><br><input type="password" class="form-contro" ><br>
      </div>
    </div>
    </div>
    <div class="col">
    <div class="form-group row">
      <label for="inputPassword" class="col-sm-3 col-form-label" style="color:black; ">Order Profile by</label>
      <div class="col-sm-9">
      
      <INPUT TYPE="Radio" >
      <LABEL  style="color:black; padding:10px;">Recent Login</LABEL><br>
      
      <INPUT TYPE="Radio" >
      <LABEL  style="color:black; padding:10px;">Recent Registration</LABEL>
      </div>
    </div>
    </div>
  </div>
</div>
</div>
</div>

</div>
    </div>
  </div>

    </div>  <button class="ftbtn" style="margin-top:10px;">Search</button> 
    <button class="ftbtn" style="margin-top:10px;">Save Search</button>
  </div>


</div>   
</div>
@include('footer/footer')
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
  </html>
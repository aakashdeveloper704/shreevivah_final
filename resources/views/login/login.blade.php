<!doctype html>
<html lang="en">
  <head>
      <style>
          @media (min-width: 0px) and (max-width: 430px) {
          .form-check{
            font-size:12px!important;
          }
        }
          .loginbackground
          {
            border: 1px solid white;
            border-radius: 25px;
            width:100%;
            background-color: #e6cc07;
            box-shadow: 8px 8px 8px #888888;
            padding:15px;
          }
          .loginback
          {
            border:white 1px solid;
            border-radius: 25px;
            width:100%;
            background-color: white;
            box-shadow: 5px 5px 5px #000000;
            margin:0px;
          }
          .btn
          {
              padding:20px;
          }
          .forgot
          {
              float:right;
          }
          body{
            padding-top:4.2rem;
            padding-bottom:4.2rem;
            background:rgba(0, 0, 0, 0.76);
            }
      </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Login Page</title>
  </head>
  <body>
      <div class="container">
            <div class="loginbackground">
                <div class="loginback">
                <img src="./Images/Slogan@4x-8.png" alt="Image Not Found" width="100%" height="200px">
                <br>
                <strong><h1 class="text-center" style="color:orange;border-color:purple;text-shadow: 0 0 5px purple, 0 0 5px purple;">JOIN US</h1></strong>
                <strong><h1 class="text-center" style="color:purple;font-weight:700;">Login to your account</h1></strong>
                
                <form method="POST" action="{{ route('login.login') }}">
                @csrf
                <div class="form-group" style="margin:20px;">
                    <label >Email address</label>
                    <input type="email" name="username" id="username" class="form-control" placeholder="Enter email"> 
                    @error('username')
                                <span class="text-danger">{{$message}}</span>
                            @enderror              
                </div>
                <div class="form-group" style="margin:20px;">
                    <label>Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    @error('password')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                  </div>
                <div class="form-group form-check" style="margin:20px;">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Stay logged in</label>
                    <a href="" class="text-info forgot" style="padding-right:0px;">Forgot Password?</a>
                </div>
                <br>
                <div class="form-group text-center">
                    <!-- <a href="" class="btn bg-info text-light" id="login" style="width: 250px;">Submit</a> -->
                  <button type="submit" class="btn bg-info text-light" id="login" style="width: 250px;">Submit</button>
                  </div>
                <div class="text-center">
                    OR
                </div><br>
                <div class="form-group text-center">
                    <a href="" class="btn bg-info text-light" style="width: 250px;">Login With OTP</a>
                </div>
                <div class="text-center">
                    OR
                </div><br>
                <div class="form-group text-center">
                    <div>Don't have an account?</div> 
                    <a href="" class="btn text-light" style="width: 150px;background-color:#3b5998;">REGISTER FREE</a>
                </div>
                @if(Session::has('error'))
                            <span class="text-danger">{{Session::get('error')}}</span>
                        @endif
                </form>
                <br>
                <br>
                </div>
            </div>
      </div>
  </body>
</html>
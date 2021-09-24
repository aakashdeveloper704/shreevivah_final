<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Delete</title>
    <link rel="stylesheet" href="{{asset('css/main.css') }}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css') }}">
    <style>
                        .alg {
            margin-top: -7%;
        }
        span{
            width: 100%;
        }
                .kun {
            color:#c51beb;
            padding:15px;
            font-weight: 900;
            font-size: 3vw;
            background-color: rgb(255 255 240 / 70%);
        }
        .back2 {
            background-color: #e0d4d4;
            margin-top: 3%;
            padding: 5px 5px;
        }
        .front2 {
            background-color: white;
            padding: 10% 6%;
        }
        p {
            color: #f75d5d;
            font-weight: 700;
            text-shadow: 1px 1px #e0d4d4;
        }
        input[type='radio']:after {
        width: 15px;
        height: 15px;
        border-radius: 15px;
        top: -2px;
        left: -1px;
        position: relative;
        background-color: white;
        content: '';
        display: inline-block;
        visibility: visible;
        border: 2px solid #bf2abf;
        
    }

    input[type='radio']:checked:after {
        width: 15px;
        height: 15px;
        border-radius: 15px;
        top: -2px;
        left: -1px;
        position: relative;
        background-color: #bf2abf;
        content: '';
        display: inline-block;
        visibility: visible;
        border: 2px solid #bf2abf;
        box-shadow: 1px 1px 1px 1px purple;
    }
    .radio {
        padding: 1px 4%;
    }
    label {
        margin-right: 11px;
        margin-left: 5px;
    }
    .src {
        font-weight: 800;
        color: black;
    }
    .height {
        height:auto;
    }

    @media (max-width: 500px) {
.bgimage_set1 {
    width: 100% !important;
}
    }
    @media (max-width: 768px) {
        #btnn {
            padding: 16px 23px;
        }
        #btnn1 {
            padding: 4px 23px;
            margin-left: 37%;
        }
    }
    </style>
</head>
<body>
@include('header.header')
<section class="bgimage_set1">
    <div class="container">
        <div class="row alg">
            <span>
                <p class="kun text-center">Delete Profile</p>
            </span>
        </div>
    </div>
<div class="container height">
    <div class="row col-md-12 col-sm-12 ">
        <div class="container back2">
            <div class="text-center front2">
                <p>We Would like to Know Why You Want to</p>
                <p>Delete Your Profile?</p>
                <div class="text-justify text-left radio">
                    <input type="radio" id="radio1" name="radio1"/> 
                    <label>Married</label>
                    <input type="radio" id="radio2" name="radio1"/> 
                    <label>Other Reasons</label><br>
                    <label for="source" class="src">Source</label><br>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-3 col-12">
                            <input type="radio" id="radio3" name="radio2"/> 
                            <label class="src">Shree Vivah</label>
                        </div>
                        <div class="col-lg-4 col-md-5 col-sm-3 col-12">
                            <input type="radio" id="radio4" name="radio2"/> 
                            <label class="src">Other Matrimonial</label>
                        </div>
                        <div class="col-lg-4 col-md-3 col-sm-3 col-12">
                            <input type="radio" id="radio5" name="radio2"/> 
                            <label class="src">Other</label><br>
                        </div>
                    </div>
                    <label class="src">Comment</label><br>
                    <div class="row">
                    <textarea id="text" name="textarea" rows="5" cols="90"></textarea>
                    </div>
                </div>
                <button class="mt-3 btn text-center">Delete My Profile</button>
            </div>
        </div>
    </div>
</div>
</section>

    @include('footer.footer')

</body>
</html>
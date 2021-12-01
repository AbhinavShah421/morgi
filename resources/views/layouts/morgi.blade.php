<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css/navbar.css">

    <title>App Name - @yield('title')</title>
  </head>
  <body>
        <div class="container-fluid">
        <style>
        h2.gardient {            
            background: -webkit-linear-gradient(180deg, #D4CBFA 0%, #8464DD 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .b-radius-17{
          border-radius: 25px !important;
        }
        .bg-darkblue{
            /* background-color: #00043c !important; */
            background-color: #fff !important;
        }
        .theme-color{
          background-color: #fff !important;
        }
        .theme-btn {
          color: #fff;
          font-size: 24px;
          font-weight: 200!important;
          background-color: #5e54aa;
          border-color: #5e54aa;
          padding: 18px 0;
          border-radius: 40px!important;
          width:80%;
        }
        .theme-btn:hover {
           background: #fff;
           color: #5e54aa;
        }
        .page-head-text{
            font-weight: 600;
        }
        .p-text-gray{
          font-size: 22px;
          color: #757575;
        }
        .privacy-text{
          font-size: 18px;
          color: #757575;
        }
        .theme-text-head{
          font-size: 26px;
          color: #5e54aa;
        }
        .black-bg-section{
          background: black;
          color: #fff;
          padding: 30px 0;
        }
        .card-text{
          font-size:24px;
        }
        .theme-bg-section{
          margin: 0px;
          background: #5e54aa;
          color: #fff;
        }
    </style>


<div class='dashboard'>
            <div class="dashboard-nav">
                <header>
                    <a href="#!" class="menu-toggle">
                        <i class="fas fa-bars"></i>
                    </a> 
                    <div href="#!" class="close" style="
                            display: inline;
                            position: absolute;
                            left: 30px;
                            font-size: 30px;
                        ">
                        <i class="fas fa-times"></i>
                    </div>
                  </header>
                <nav class="dashboard-nav-list"><a href="#" class="dashboard-nav-item"><i class="fas fa-home"></i>
                    Home </a>
                        <a href="#" class="dashboard-nav-item active"><i class="fa fa-user"></i> Join as Rookie
                        </a>
                        <a href="#" class="dashboard-nav-item"><i class="fa fa-user"></i>Login</a>
                        <a href="#" class="dashboard-nav-item">FAQ</a>
                        <a href="#" class="dashboard-nav-item">What is Morgi</a>
                        <a href="#" class="dashboard-nav-item">A word from our president</a>
                        <a href="#" class="dashboard-nav-item">Our mission</a>
                        <a href="#" class="dashboard-nav-item">Who we are</a>
                        <a href="#" class="dashboard-nav-item"><i class="fa fa-file"></i>Legal and Policies</a>
                  
                </nav>
            </div>
            <div class='dashboard-app mt-0'>
        <!-- <header class='dashboard-toolbar'><a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a></header>
        <div class='dashboard-content'>
            <div class='container'>
                <div class='card'>
                    <div class='card-header'>
                        <h1>Welcome back Jim</h1>
                    </div>
                    <div class='card-body'>
                        <p>Your account type is: Administrator</p>
                    </div>
                </div>
            </div>
        </div> -->



    <div class="row">
        <div class="col-md-12  px-0 bg-darkblue" >
            <div class="d-flex justify-content-between my-3 px-4">
                <a href="#!" class="menu-toggle"><i class="fas fa-bars" style="display:none;"></i></a>
                <img src="{{ asset('images/logo.png') }}" />
                <a href="#" class="btn btn-warning rounded font-weight-bolder btn-sm b-radius-17 align-self-center">Sign Up!</a>
            </div>
            @yield('content')
       
  
            <div class="d-flex w-50 my-4 mx-auto justify-content-between">
                <a href="#"><img src="{{ asset('images/fb.png') }}" /></a>
                <a href="#"><img src="{{ asset('images/insta.png') }}" /></a>
                <a href="#"><img src="{{ asset('images/tiktok.png') }}" /></a>
            </div>
          </div>
          </div>
        </div>
        </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!-- 
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/navbar.js"></script>
  </body>
</html>
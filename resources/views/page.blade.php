@extends('layouts.morgi')

@section('content')
    <style>
        h2.gardient {            
            background: -webkit-linear-gradient(180deg, #D4CBFA 0%, #8464DD 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .b-radius-17{
            border-radius: 17px !important;
        }
        .bg-darkblue{
            /* background-color: #00043c !important; */
            background-color: #00043c !important;
        }
    </style>


<div class='dashboard'>
    <div class="dashboard-nav">
        <header>
            <a href="#!" class="menu-toggle">
                <i class="fas fa-bars"></i>
            </a>
            <a href="#"class="brand-logo"><i
                class="fas fa-anchor"></i> <span>BRAND</span></a></header>
        <nav class="dashboard-nav-list"><a href="#" class="dashboard-nav-item"><i class="fas fa-home"></i>
            Home </a><a
                href="#" class="dashboard-nav-item active"><i class="fas fa-tachometer-alt"></i> dashboard
        </a><a
                href="#" class="dashboard-nav-item"><i class="fas fa-file-upload"></i> Upload </a>
            <div class='dashboard-nav-dropdown'><a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle"><i
                    class="fas fa-photo-video"></i> Media </a>
                <div class='dashboard-nav-dropdown-menu'><a href="#"
                                                            class="dashboard-nav-dropdown-item">All</a><a
                        href="#" class="dashboard-nav-dropdown-item">Recent</a><a
                        href="#" class="dashboard-nav-dropdown-item">Images</a><a
                        href="#" class="dashboard-nav-dropdown-item">Video</a></div>
            </div>
            <div class='dashboard-nav-dropdown'><a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle"><i
                    class="fas fa-users"></i> Users </a>
                <div class='dashboard-nav-dropdown-menu'><a href="#"
                                                            class="dashboard-nav-dropdown-item">All</a><a
                        href="#" class="dashboard-nav-dropdown-item">Subscribed</a><a
                        href="#"
                        class="dashboard-nav-dropdown-item">Non-subscribed</a><a
                        href="#" class="dashboard-nav-dropdown-item">Banned</a><a
                        href="#" class="dashboard-nav-dropdown-item">New</a></div>
            </div>
            <div class='dashboard-nav-dropdown'><a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle"><i
                    class="fas fa-money-check-alt"></i> Payments </a>
                <div class='dashboard-nav-dropdown-menu'><a href="#"
                                                            class="dashboard-nav-dropdown-item">All</a><a
                        href="#" class="dashboard-nav-dropdown-item">Recent</a><a
                        href="#" class="dashboard-nav-dropdown-item"> Projections</a>
                </div>
            </div>
            <a href="#" class="dashboard-nav-item"><i class="fas fa-cogs"></i> Settings </a><a
                    href="#" class="dashboard-nav-item"><i class="fas fa-user"></i> Profile </a>
          <div class="nav-item-divider"></div>
          <a
                    href="#" class="dashboard-nav-item"><i class="fas fa-sign-out-alt"></i> Logout </a>
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
                <a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a>
                <img src="{{ asset('images/logo.png') }}" />
                <a href="#" class="btn btn-warning rounded font-weight-bolder btn-sm b-radius-17">Sign Up!</a>
            </div>
           <div class="col-md-5 mx-auto">
            <!--  -->
            <div class="card mt-5 bg-darkblue">
                <img src="{{ asset('images/Logo_Morgi.png') }}" class="card-img" alt="...">
                <div class="card-img-overlay text-center text-white font-weight-bolder d-flex flex-column">
                   <h2 class="mt-auto">Get a leg-up</h2>
                   <h2  class="gardient">when you need one</h2>
                   <a href="#" class="btn btn-warning rounded font-weight-bolder w-75 mt-4 mx-auto b-radius-17">Get Started it's Free </a>
                </div>
            </div>

            <!--  -->
            <div class="card bg-darkblue mt-4" >                
                <div class="card-body">
                    <p class="card-text  text-white text-center font-size-lg h5  px-5">Join 1000s of rookies that are getting the tools for success</p>
                </div>
                <!--  -->
                <img src="{{ asset('images/img1.png') }}" class="card-img-top w-75 mx-auto" alt="..." />
            </div>


             <!--  -->
             <div class="card bg-darkblue mt-5" >                
                <!--  -->
                <img src="{{ asset('images/icon_noexperience.png') }}" class="img-fluid w-25 mx-auto" alt="..." />

                <div class="card-body">
                    <p class="card-text  text-white text-center w-75 mx-auto text-center">We all need help from time to time. At Morgi you will find the help you need.</p>
                </div>                
            </div>


             <!--  -->
             <div class="card bg-darkblue mt-5" >                
                <!--  -->
                <img src="{{ asset('images/icon_noexperience.png') }}" class="img-fluid w-25 mx-auto" alt="..." />

                <div class="card-body">
                    <p class="card-text  text-white text-center w-75 mx-auto text-center">Leaders from around the world are ready to lend a helping hand: Monthly recurring gift and support, tips, a bit of advice, and mentorship.</p>
                </div>                
            </div>


             <!--  -->
             <div class="card bg-darkblue mt-5" >                
                <!--  -->
                <img src="{{ asset('images/icon_noexperience.png') }}" class="img-fluid w-25 mx-auto" alt="..." />

                <div class="card-body">
                    <p class="card-text  text-white text-center w-75 mx-auto text-center">With Morgi, you get to have fun hanging out with rookies like you, hosting parties, and more. All you need is to want it.</p>
                </div>                
            </div>

            <!--  -->
            <div class="d-flex flex-column justify-content-center">
                <a href="#" class="btn btn-warning rounded font-weight-bolder mt-4 mx-auto b-radius-17">Get Started it's Free </a>
                <small class="text-muted w-75 mx-auto text-center px-4 mt-4">By clicking ‘Sign up’ you state that you agree to our Terms & Conditions and Privacy policy</small>
                <small class="text-muted w-75 mx-auto text-center px-4 mt-4">Morgi 2021 All Rights Reserved</small>
            </div>

            <div class="d-flex w-50 my-4 mx-auto justify-content-between">
                <a href="#"><img src="{{ asset('images/fb.png') }}" /></a>
                <a href="#"><img src="{{ asset('images/insta.png') }}" /></a>
                <a href="#"><img src="{{ asset('images/tiktok.png') }}" /></a>
            </div>
            </div>
        </div>
    </div>


    </div> 
    </div> 


   
    
      
@endsection
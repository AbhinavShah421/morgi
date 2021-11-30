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
                <a href="#" class="btn btn-warning rounded font-weight-bolder btn-sm b-radius-17 align-self-center">Sign Up!</a>
            </div>
           <div class="col-md-5 mx-auto">
           <!--  -->
            <div class="card bg-darkblue mt-5" >                
                <!--  -->
                <img src="{{ asset('images/Logo_Morgi.png') }}" />

                <div class="card-body text-center">
                    <h1 class=" text-white text-center  mx-auto text-center font-weight-bold">{{ settings()->group('default')->get('page_2_header_title') }}</h1>
                    <p class="card-text  text-white text-center mx-auto text-center text-muted mt-2">{{ settings()->group('default')->get('page_2_header_paragraph') }}</p>

                    <a href="#" class="btn btn-warning rounded font-weight-bolder px-5 mx-auto my-4 b-radius-17" > Continue </a>

                    <p class="card-text  text-white text-center mx-auto text-center mt-2">{{ settings()->group('default')->get('page_2_header_paragraph_2') }}</p>
                </div>                
            </div>

            <!--  -->
            <div class="d-flex flex-column justify-content-center">
                <small class="text-muted w-75 mx-auto text-center px-4 mt-4">{{ settings()->group('default')->get('privacy_policy') }}</small>
                <small class="text-muted w-75 mx-auto text-center px-4 mt-4">{{ settings()->group('default')->get('term_and_condition') }}</small>
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
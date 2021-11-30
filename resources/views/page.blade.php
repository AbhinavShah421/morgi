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
            background-color: #fff !important;
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
            <a href="#!" class="menu-toggle" ><i class="fas fa-bars" style="display:none;"></i></a>
                <img src="{{ asset('images/logo.png') }}" />
                <a href="#" class="btn btn-warning rounded font-weight-bolder btn-sm b-radius-17 align-self-center">Join Morgi</a>
            </div>
           <div class="col-md-5 mx-auto">
                        
            <!--  -->
            <div class="card mt-5 bg-darkblue">                
                <div class="card-body text-center text-white ">
                <h1 class="mt-auto">Looking for an inspriation for your next book ?</h1>
                   <p class="my-4">{{ settings()->group('default')->get('page_1_header_paragraph') }}</p>
                   <a href="#" class="btn btn-warning rounded font-weight-bolder w-75 my-3 mx-auto b-radius-17">Become A Leader </a>
                   <img src="{{ asset('images/img1.png') }}" class="card-img-top w-75 mx-auto" alt="..." />
                </div>
            </div>


            <div class="card mt-2 bg-darkblue">                
                <div class="card-body text-center  ">
                    <h1 class="mt-auto text-black font-weight-bolder">Get Connected</h1>
                   <p class="my-4">{{ settings()->group('default')->get('page_1_header_paragraph') }}</p>                   
                   <img src="{{ asset('images/img1.png') }}" class="card-img-top w-75 mx-auto my-3" alt="..." />
                   <a href="#" class="btn btn-warning rounded font-weight-bolder w-75 my-3 mx-auto b-radius-17">Become A Leader </a>
                </div>
            </div>


            <!--  -->
            <div class="card bg-darkblue mt-2 text-center" >                
                <div class="card-body">
                    <h2 class="mt-auto mb-4">How it works</h2>
                    <!--  -->
                    <h6>Join Morgi as a leader</h6>
                    <p class="card-text  text-white text-center font-size-lg h5  px-5">{{ settings()->group('default')->get('page_1_header_paragraph') }}</p>

                    <!--  -->
                    <h6 class="mt-4">Explore Cookies profiles</h6>
                    <p class="card-text  text-white text-center font-size-lg h5  px-5">{{ settings()->group('default')->get('page_1_header_paragraph') }}</p>

                    <!--  -->
                    <h6 class="mt-4">Get Connected</h6>
                    <p class="card-text  text-white text-center font-size-lg h5  px-5">{{ settings()->group('default')->get('page_1_header_paragraph') }}</p>

                </div>               
            </div>


             <!--  -->
             <div class="card bg-darkblue mt-5 text-center" >                
                <!--  -->
                <h2 class="px-4">The Morgi.org Leaders Network </h2>
                <div class="card-body">
                    <p class="card-text  text-white text-center w-75 mx-auto text-center">{{ settings()->group('default')->get('page_1_noexperience_paragraph') }}</p>
                </div>                
            </div>


            
             <!--  -->
             <div class="card bg-darkblue mt-5" >                
                <!--  -->                
                <div class="card-body text-center">
                    <h5>Giving is better than recieving. Because giving starts the receiving process. - Jim Rohn</h5>                    
                </div>                
            </div>


            <!--  -->
            <div class="d-flex flex-column justify-content-center">         
                <a href="#" class="btn btn-warning rounded font-weight-bolder w-75 my-3 mx-auto b-radius-17">Join Morgi </a>       
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
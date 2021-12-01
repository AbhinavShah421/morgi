@extends('layouts.morgi')

@section('content')
           <div class="col-md-5 mx-auto">
                        
            <!--  -->
            <div class="card mt-5 bg-darkblue">                
                <div class="card-body text-center text-black ">
                <h1 class="mt-auto page-head-text">Looking for an inspriation for your next book ?</h1>
                   <p class="my-4 p-text-gray">{{ settings()->group('default')->get('page_1_header_paragraph') }}</p>
                   <a href="#" class="btn rounded font-weight-bolder w-75 my-3 mx-auto theme-btn">Become A Leader </a>
                   <img src="{{ asset('images/img1.png') }}" class="card-img-top w-75 mx-auto" alt="..." />
                </div>
            </div>


            <div class="card mt-2 bg-darkblue">                
                <div class="card-body text-center  ">
                    <h1 class="mt-auto text-black font-weight-bolder">Get Connected</h1>
                   <p class="my-4 p-text-gray">{{ settings()->group('default')->get('page_1_header_paragraph') }}</p>                   
                   <img src="{{ asset('images/img1.png') }}" class="card-img-top w-75 mx-auto" alt="..." />
                   <a href="#" class="btn btn-warning rounded font-weight-bolder w-75 my-3 mx-auto theme-btn">Learn more</a>
                </div>
            </div>


            <!--  -->
            <div class="card bg-darkblue mt-2 text-center" >                
                <div class="card-body">
                    <h2 class="mt-auto mb-4 font-weight-bolder">How it works</h2>
                    <!--  -->
                    <h6 class="theme-text-head">Join Morgi as a leader</h6>
                    <p class="card-text p-text-gray text-black text-center font-size-lg h5  px-5">{{ settings()->group('default')->get('page_1_header_paragraph') }}</p>

                    <!--  -->
                    <h6 class="mt-4 theme-text-head">Explore Cookies profiles</h6>
                    <p class="card-text p-text-gray text-black text-center font-size-lg h5  px-5">{{ settings()->group('default')->get('page_1_header_paragraph') }}</p>

                    <!--  -->
                    <h6 class="mt-4 theme-text-head">Get Connected</h6>
                    <p class="card-text p-text-gray text-black text-center font-size-lg h5  px-5">{{ settings()->group('default')->get('page_1_header_paragraph') }}</p>

                </div>               
            </div>


             <!--  -->
             <div class="card black-bg-section mt-5 text-center" >                
                <!--  -->
                <h2 class="px-4">The Morgi.org Leaders Network </h2>
                <div class="card-body">
                    <p class="card-text  text-black text-center w-100 mx-auto text-center" >{{ settings()->group('default')->get('page_1_noexperience_paragraph') }}</p>
                </div>                
            </div>


            
             <!--  -->
             <div class="theme-bg-section d-flex flex-column justify-content-center" >                
                <!--  -->                
                <div class="card-body text-center pb-0">
                    <h5 class="mb-0" style="font-weight:600">"Giving is better than recieving. Because giving starts the receiving process." - Jim Rohn</h5>                    
                </div>      
                <a href="#" class="btn btn-warning rounded font-weight-bolder w-75 my-3 mx-auto p-2" style="font-size:22px;border-radius:30px!important">Join Morgi </a>               
            </div>


            <!--  -->
            <div class="d-flex flex-column justify-content-center">         
                 
                <small class="text-muted w-100 mx-auto text-center privacy-text mt-4">{{ settings()->group('default')->get('privacy_policy') }}</small>
                <small class="text-muted w-100 mx-auto text-center privacy-text mt-4">{{ settings()->group('default')->get('term_and_condition') }}</small>
            </div>

            
            </div>
        </div>
    </div>


    </div> 
    </div> 


   
    
      
@endsection
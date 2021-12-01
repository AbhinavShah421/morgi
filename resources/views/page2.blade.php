@extends('layouts.morgi')

@section('content')

           <div class="col-md-5 mx-auto">
           <!--  -->
            <div class="card bg-darkblue mt-5" >                
                <!--  -->
                <img src="{{ asset('images/Logo_Morgi.png') }}" />

                <div class="card-body text-center">
                    <h1 class=" text-black text-center  mx-auto text-center font-weight-bold">{{ settings()->group('default')->get('page_2_header_title') }}</h1>
                    <p class="card-text  text-black text-center mx-auto text-center text-muted mt-2">{{ settings()->group('default')->get('page_2_header_paragraph') }}</p>

                    <a href="#" class="btn rounded font-weight-bolder px-5 mx-auto my-4 theme-btn" > Continue </a>

                    <p class="card-text  text-black text-center mx-auto text-center mt-2">{{ settings()->group('default')->get('page_2_header_paragraph_2') }}</p>
                </div>                
            </div>

            <!--  -->
            <div class="d-flex flex-column justify-content-center">
                <small class="text-muted w-100 mx-auto text-center privacy-text mt-4">{{ settings()->group('default')->get('privacy_policy') }}</small>
                <small class="text-muted w-100 mx-auto text-center privacy-text mt-4">{{ settings()->group('default')->get('term_and_condition') }}</small>
            </div>

           
            </div>
        </div>
    

   
    
      
@endsection
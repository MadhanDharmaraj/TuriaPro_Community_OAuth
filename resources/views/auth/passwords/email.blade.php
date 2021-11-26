@extends('blank-layouts.layout')
@section('content')
<section class="row flexbox-container">
   <div class="col-xl-7 col-md-9 col-10 d-flex justify-content-center px-0">
  
      <div class="card bg-authentication rounded-0 mb-0">
	   <div class="card_middle">
         <div class="row m-0">

            <div class="col-lg-6 d-lg-block d-none text-center align-self-center">
               <img src="{{asset('packa/images/pages/forgot-password.png')}}" alt="branding logo">
            </div>

            <div class="col-lg-6 col-12 p-0">
               <div class="card rounded-0 mb-0 px-2 py-1">

                  @if (session('status'))
                  <div class="alert alert-success" role="alert">
                     {{ session('status') }}
                  </div>
                  @endif

                  <div class="card-header pb-1">
                     <div class="card-title">
                        <h4 class="mb-0">{{ __('Recover your password') }}</h4>
                     </div>
                  </div>

                  <p class="px-2 mb-0">{{ __("Please enter your email address and we'll send you a password reset link.")}}</p>

                  <div class="card-content">
                     <div class="card-body">

                        <form method="POST" action="{{ route('password.email') }}">
                           @csrf
                           <div class="form-label-group">
                              <input id="email" type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="{{ __('E-Mail Address') }}" value="{{ old('email') }}" required autocomplete="email" autofocus>
                              <label for="inputEmail">{{ __('E-Mail Address') }}</label>

                              @error('email')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                              
                           </div>
                        

                        <div class="float-md-left d-block mb-1">
                           <a href="{{route('login')}}" class="btn btn-outline-primary btn-block px-75">{{__("Back to Login")}}</a>
                        </div>

                        <div class="float-md-right d-block mb-1">
                           <button type="submit" class="btn btn-primary btn-block px-75">
                           {{ __('Send Reset Link') }}
                           </button>
                        </div>

                        </form>
                     </div>
                  </div>

               </div>
            </div>
         </div>
         </div>
      </div>
   </div>
</section>
@endsection
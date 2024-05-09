@extends('layouts.app')
@section('content')

        <!-- 500 Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
                        <h1 class="display-1">500</h1>
                        <h1 class="mb-4">Internal Server Error</h1>
                        <p class="mb-4">We’re sorry, Something Wrong Happened! Maybe go to our home page ?</p>
                        <a class="btn btn-primary py-3 px-5" href="{{ route("home")}}">Go Back To Home</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- 500 End -->


@endsection
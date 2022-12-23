@extends('layouts.front.login-site')
@section('content')

<!-- Sub banner start -->
<div class="sub-banner mb-5">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>Contact Us</h1>
            <ul class="breadcrumbs">
                <li><a href="index.html">Home</a></li>
                <li class="active">Contact Detailss</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub banner end -->

@include('front/sections/contact_form')
@endsection

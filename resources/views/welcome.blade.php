@extends('template.wrapper')

@section('content')
 <!-- Start Header -->
 @include('template.startheader')
 <!-- Start Header -->

 <!-- Start Mobile Menu Area  -->
 @include('template.startmobile')
 <!-- End Mobile Menu Area  -->

 <!-- Start Banner Area -->
 <h1 class="d-none">Home Life Style Blog</h1>
 @include('template.startbanner')
 <!-- End Banner Area -->


 <!-- Start Tab Area  -->
 @include('template.starttab')
 <!-- End Tab Area  -->


 <!-- Start Post Grid Area  -->
 @include('template.postgrid')
 <!-- End Post Grid Area  -->

 <!-- Start Video Area  -->
 @include('template.video')
 <!-- End Video Area  -->

 <!-- Start Categories List  -->
 @include('template.categorylist')
 <!-- Start Categories List  -->

 <!-- Start Post List Wrapper  -->
 @include('template.postlist')
 <!-- End Post List Wrapper  -->

 <!-- Start Instagram Area  -->
 @include('template.instagram')
 <!-- End Instagram Area  -->


 <!-- Start Footer Area  -->
 @include('template.footer')
 <!-- End Footer Area  -->
@endsection

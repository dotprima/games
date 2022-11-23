@extends('template.wrapper')

@section('content')
 

 <!-- Start Post List Wrapper  -->
 <livewire:post-list />
 <!-- End Post List Wrapper  -->
 
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



 <!-- Start Instagram Area  -->
 @include('template.instagram')
 <!-- End Instagram Area  -->


 <!-- Start Footer Area  -->
 @include('template.footer')
 <!-- End Footer Area  -->
@endsection

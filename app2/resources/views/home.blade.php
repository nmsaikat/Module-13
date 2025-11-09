@extends('layout.app')

@section('content')
    <!-- Service Section -->
     @include('component.service')

    <!-- Team Section -->
     @include('component.team')

    <!-- Skills Section -->
     @include('component.skills')

    <!-- Portfolio Section -->
     @include('component.portfolio')

    <!-- Testimonial Section -->
     @include('component.testimonial')

    <!-- Contact Section -->
     @include('component.contact')
@endsection
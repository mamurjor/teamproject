@extends('layouts.app')

@section('maincontent')


@include('websitepart.header')
@include('websitepart.nav')

@include('websitepart.about')


@include('websitepart.resume')
@include('websitepart.counter')
@include('websitepart.service')
@include('websitepart.pricing')
@include('websitepart.hireme')
@include('websitepart.portfolio')
@include('websitepart.blog')
@include('websitepart.contact')
@include('websitepart.footer')

    
@endsection
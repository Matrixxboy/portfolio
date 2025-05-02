@extends('layouts.app')
@section('content')
@vite(['resources/css/landingPage.css'])
<div class="text-color-secondary">
        @include('pages.homePageSections.landing')
        @include('pages.homePageSections.aboutme')
        @include('pages.homePageSections.cards')
        @include('pages.homePageSections.certificate')
    </div>
@endsection


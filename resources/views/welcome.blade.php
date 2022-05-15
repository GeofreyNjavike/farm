@extends('layouts.front.base')

@section('content')
    <x-front.navbar />
    <x-front.header />


    <main id="main">
        <x-front.about />
        <x-front.cta />
        <x-front.services />

    </main>

    <x-front.footer />

   
@endsection

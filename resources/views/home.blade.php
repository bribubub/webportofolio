@extends('layouts.app')

@section('title', ' - Home')

@section('content')
<section id="home" class="section-container bg-gradient-to-br from-gray-800 to-gray-900 text-white rounded-lg m-4 p-8 shadow-2xl border border-gray-700">
    <div class="container mx-auto text-center px-4 md:px-8 max-w-4xl">
        <img src="https://placehold.co/180x180/DAA520/FFFFFF?text=JP" alt="Profile Picture" class="rounded-full mx-auto mb-8 border-4 border-amber-400 shadow-xl">
        <h1 class="text-5xl md:text-7xl font-extrabold leading-tight mb-6 animate-fade-in-down drop-shadow-lg text-amber-300">
            Hello, I'm [Your Name]
        </h1>
        <p class="text-2xl md:text-4xl font-light mb-10 animate-fade-in-up drop-shadow-md text-gray-200">
            A [Your Profession/Role] passionate about building innovative and impactful web solutions.
        </p>
        <a href="{{ url('/portfolio') }}" class="bg-amber-500 hover:bg-amber-600 text-gray-900 font-bold py-4 px-10 rounded-full text-xl shadow-lg transform transition duration-300 hover:scale-105 inline-block focus:outline-none focus:ring-4 focus:ring-amber-300 focus:ring-opacity-75">
            Explore My Work
        </a>
    </div>
</section>
@endsection

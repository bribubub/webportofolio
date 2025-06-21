@extends('layouts.app')

@section('title', 'Your Name - Home')

@section('content')
<section id="home" class="section-padding flex items-center justify-center min-h-screen">
    <div class="container mx-auto text-center px-4 md:px-8 max-w-5xl">
        <div class="relative w-48 h-48 mx-auto mb-10 animate-fadeIn animation-delay-200">
            <img src="https://placehold.co/192x192/3B82F6/FFFFFF?text=JP" alt="Profile Picture" class="rounded-full w-full h-full object-cover border-4 border-blue-500 shadow-xl transition-transform duration-300 hover:scale-105">
            <span class="absolute bottom-2 right-2 block h-6 w-6 rounded-full bg-green-500 ring-4 ring-gray-900 animate-pulse-subtle" title="Available for hire"></span>
        </div>
        <h1 class="text-5xl md:text-7xl font-extrabold leading-tight mb-6 animate-slideInUp animation-delay-400">
            <span class="text-gray-100">Hi, I'm </span><span class="text-gradient"> [Your Name]</span>
        </h1>
        <p class="text-xl md:text-2xl font-light mb-12 text-gray-300 animate-slideInUp animation-delay-600 leading-relaxed">
            A passionate <span class="text-blue-300">[Your Profession/Role]</span> dedicated to building innovative and user-centric web applications.
        </p>
        <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-6 animate-fadeIn animation-delay-800">
            <a href="{{ url('/portfolio') }}" class="btn-primary-gradient text-white font-bold py-3 px-8 rounded-full text-lg shadow-lg transform transition duration-300 hover:scale-105 focus:outline-none focus:ring-4 focus:ring-blue-300 focus:ring-opacity-75">
                View My Work
            </a>
            <a href="{{ url('/contact') }}" class="bg-gray-700 hover:bg-gray-600 text-gray-200 font-bold py-3 px-8 rounded-full text-lg shadow-lg transform transition duration-300 hover:scale-105 focus:outline-none focus:ring-4 focus:ring-gray-500 focus:ring-opacity-75">
                Get In Touch
            </a>
        </div>
    </div>
</section>
@endsection

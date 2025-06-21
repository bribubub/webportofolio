@extends('layouts.app')

@section('title', 'Your Name - Resume')

@section('content')
<section id="resume" class="section-padding flex items-center justify-center">
    <div class="container mx-auto text-center px-4 md:px-8 max-w-4xl card-base rounded-2xl p-8 lg:p-12 animate-fadeIn">
        <h2 class="text-4xl md:text-5xl font-bold text-center mb-8 text-gradient animate-slideInUp">My Resume</h2>
        <p class="text-lg md:text-xl text-gray-300 mb-10 leading-relaxed animate-fadeIn animation-delay-200">
            For a comprehensive overview of my professional experience, academic background, and detailed skill set, please feel free to download my resume. It provides a deeper dive into my contributions and qualifications.
        </p>
        <a href="[Link to your Resume PDF]" target="_blank" class="inline-flex items-center btn-primary-gradient text-white font-bold py-4 px-10 rounded-full text-xl shadow-xl transform transition duration-300 hover:scale-105 focus:outline-none focus:ring-4 focus:ring-blue-300 focus:ring-opacity-75 animate-slideInUp animation-delay-400">
            <svg class="w-7 h-7 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l3-3m-3 3l-3-3m2-8h7a2 2 0 012 2v7M5 19v-7a2 2 0 012-2h2"></path></svg>
            Download Full Resume
        </a>
        <div class="mt-16 text-gray-400 text-sm animate-fadeIn animation-delay-600">
            <p>If you have any issues with the download or require a different format, please don't hesitate to <a href="{{ url('/contact') }}" class="text-blue-400 hover:underline">contact me</a>.</p>
        </div>
    </div>
</section>
@endsection

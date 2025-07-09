@extends('layouts.app')

@section('title', 'Rafi Nurfadhil Putra - RESTful API Service Detail')

@section('content')
<section id="project-detail" class="section-padding bg-gradient-to-br from-gray-950 via-gray-900 to-gray-950 text-white">
    <div class="container mx-auto max-w-5xl px-6 py-20 opacity-0" data-animate="fadeIn" data-delay="100">
        <a href="{{ url('/portfolio') }}" class="text-blue-400 hover:text-blue-300 flex items-center mb-10 text-lg transition duration-300 ease-in-out">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
            Back to Portfolio
        </a>

        <h1 class="text-4xl md:text-5xl font-extrabold text-gradient mb-8 opacity-0" data-animate="slideInUp" data-delay="200">RESTful API Service: Inventory Management</h1>

        <div class="mb-12 opacity-0" data-animate="fadeIn" data-delay="400">
            <img src="{{ asset('smkproject1.3.jpg') }}" alt="RESTful API Service Main Image" class="w-full rounded-xl shadow-2xl border border-gray-700">
        </div>

        <div class="space-y-6 text-lg text-gray-300 leading-relaxed opacity-0" data-animate="slideInUp" data-delay="600">
            <h2 class="text-3xl font-semibold text-blue-400 mb-4">Project Overview</h2>
            <p>
                The project at SMK Taruna Bhakti was a complete overhaul of the school's previous network infrastructure. Initially, the school relied on a traditional copper-based network that often faced limitations in speed, stability, and scalability. To address these issues, we replaced the entire system with a fiber optic-based solution, which significantly improved data transmission quality and future-proofed the network.
            </p>
            <p>
               The work involved designing a new network layout, pulling fiber optic cables throughout the school building, and installing updated networking equipment such as routers, switches, and firewalls. This transformation not only enhanced the performance and security of the school's network but also ensured that students and staff could benefit from a faster, more reliable digital environment.
            </p>

            <h2 class="text-3xl font-semibold text-blue-400 mb-4">What We Do In There?</h2>
            <ul class="list-disc list-inside space-y-2 pl-4">
                <li>Set Up Mikrotik</li>
                <li>Testing Mikrotik</li>
                <li>splicing fiber optic</li> 
            </ul>

            <h2 class="text-3xl font-semibold text-blue-400 mb-4">Challenges</h2>
            <p>
                the challenge is that it takes a long time about 2 months and also extra patience to go through it and cooperation between teams is also needed to connect between the server and also all routers in the school.
            </p>

            <h2 class="text-3xl font-semibold text-blue-400 mb-4">Screenshots / Demos</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-6">
                <div>
                    <img src="{{ asset('smkproject1.2.jpg') }}" alt="API Endpoint List Screenshot" class="w-full rounded-lg shadow-md mb-4">
                    <p class="text-sm text-gray-400 text-center"></p>
                </div>
                 <div>
                    <img src="{{ asset('smkproject1.jpg') }}" alt="Swagger UI Screenshot" class="w-full rounded-lg shadow-md mb-4">
                    <p class="text-sm text-gray-400 text-center"></p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
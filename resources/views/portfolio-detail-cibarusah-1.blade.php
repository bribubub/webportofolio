@extends('layouts.app')

@section('title', 'Rafi Nurfadhil Putra - Cibarusah Project 1 Detail')

@section('content')
<section id="project-detail" class="section-padding bg-gradient-to-br from-gray-950 via-gray-900 to-gray-950 text-white">
    <div class="container mx-auto max-w-5xl px-6 py-20 opacity-0" data-animate="fadeIn" data-delay="100">
        <a href="{{ url('/portfolio') }}" class="text-blue-400 hover:text-blue-300 flex items-center mb-10 text-lg transition duration-300 ease-in-out">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
            Back to Portfolio
        </a>

        <h1 class="text-4xl md:text-5xl font-extrabold text-gradient mb-8 opacity-0" data-animate="slideInUp" data-delay="200">Cibarusah Project 1: Create A New Server Network and Attach A Aable Netwrok</h1>

        <div class="mb-12 opacity-0" data-animate="fadeIn" data-delay="400">
            <img src="{{ asset('cibarusah1.jpg') }}" alt="Cibarusah Project 1 Main Image" class="w-full rounded-xl shadow-2xl border border-gray-700">
        </div>

        <div class="space-y-6 text-lg text-gray-300 leading-relaxed opacity-0" data-animate="slideInUp" data-delay="600">
            <h2 class="text-3xl font-semibold text-blue-400 mb-4">Project Overview</h2>
            <p>
        This project involved building and maintaining a network infrastructure for a Vocational High School located in Cibarusah. The main objectives were to design and implement a functional and stable network system, perform structured cable pulling to all classrooms, and ensure that the entire setup was correctly installed and operational. The scope of work included setting up routers and switches, organizing cable management, and verifying connectivity across the school to support both teaching and administrative needs. 
        </p>
            <p>
            The project was carried out over the course of three full days and was a collaborative effort between several students and a supervising instructor. This not only provided hands-on experience for the students but also ensured that the network was built with both technical precision and teamwork. The outcome was a significant improvement in the school’s digital infrastructure, enabling smoother access to online resources and internal systems.
            </p>

            <h2 class="text-3xl font-semibold text-blue-400 mb-4">What We Do In There?</h2>
            <ul class="list-disc list-inside space-y-2 pl-4">
                <li>creating a server local for a network</li>
                <li>set up some router connect to server</li>
                <li>set up and maintenance the pc class to connect server with a cable</li>
                <li>retract cable network to various classrooms</li>
            </ul>

            <h2 class="text-3xl font-semibold text-blue-400 mb-4">Challenges </h2>
            <p>
                The main challenge is to build a stable internet system as well as a location which is rather complicated and uses only a small budget.
            </p>

            <h2 class="text-3xl font-semibold text-blue-400 mb-4">Screenshots / Demos</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-6">
                <div>
                    <img src="{{ asset('cibarusah1.3.jpg') }}" alt="Task List Screenshot" class="w-full rounded-lg shadow-md mb-4">
                    <p class="text-sm text-gray-400 text-center"></p>
                </div>
                <div>
                    <img src="{{ asset('cibarusah1.2.jpg') }}" alt="Collaboration View" class="w-full rounded-lg shadow-md mb-4">
                    <p class="text-sm text-gray-400 text-center"></p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
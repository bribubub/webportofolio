@extends('layouts.app')

@section('title', 'Rafi Nurfadhil Putra - Internship In Winata Detail')

@section('content')
<section id="project-detail" class="section-padding bg-gradient-to-br from-gray-950 via-gray-900 to-gray-950 text-white">
    <div class="container mx-auto max-w-5xl px-6 py-20 opacity-0" data-animate="fadeIn" data-delay="100">
        <a href="{{ url('/portfolio') }}" class="text-blue-400 hover:text-blue-300 flex items-center mb-10 text-lg transition duration-300 ease-in-out">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
            Back to Portfolio
        </a>

        <h1 class="text-4xl md:text-5xl font-extrabold text-gradient mb-8 opacity-0" data-animate="slideInUp" data-delay="200">project cibubur maintenance and attach a new connection</h1>

        <div class="mb-12 opacity-0" data-animate="fadeIn" data-delay="400">
            <img src="{{ asset('cibubur1.jpg') }}" alt="Internship Project Main Image" class="w-full rounded-xl shadow-2xl border border-gray-700">
        </div>

        <div class="space-y-6 text-lg text-gray-300 leading-relaxed opacity-0" data-animate="slideInUp" data-delay="600">
            <h2 class="text-3xl font-semibold text-blue-400 mb-4">Project Overview</h2>
            <p>
            During the project in Cibubur, I was responsible for carrying out routine maintenance on the existing network infrastructure.At the same time, I also worked on the installation of a new network system for a company located in the area. 
            </p>
            <p>
            This included setting up the necessary hardware, configuring network devices, and ensuring that the system was stable and fully operational by the end of the deployment.
            </p>

            <h2 class="text-3xl font-semibold text-blue-400 mb-4">What We Do In There?</h2>
            <ul class="list-disc list-inside space-y-2 pl-4">
                <li>Set Up A New Router</li>
                <li>Attach A New Connection Network </li>
            </ul>

            <h2 class="text-3xl font-semibold text-blue-400 mb-4">Challenges</h2>
            <p>
                One of the main challenges we faced during the project was the complexity of the location. The office was situated in a residential house, which presented several difficulties in terms of planning and execution. Unlike a typical office setup, the layout of a house lacks structured cabling paths and dedicated spaces for network equipment. This made it harder for us to determine the most efficient way to route cables and position the devices. Additionally, the router we needed to install was located on the second floor, which required extra effort to ensure signal strength and network stability throughout the entire building, especially on the lower floor and in rooms with thicker walls or obstructions.
            </p>

            <h2 class="text-3xl font-semibold text-blue-400 mb-4">Screenshots / Demos</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-6">
                <div>
                    <img src="{{ asset('cibubur1.4.jpg') }}" alt="User Profile Screenshot" class="w-full rounded-lg shadow-md mb-4">
                    <p class="text-sm text-gray-400 text-center"></p>
                </div>
                <div>
                    <img src="{{ asset('cibubur1.5.jpg') }}" alt="Post Feed Screenshot" class="w-full rounded-lg shadow-md mb-4">
                    <p class="text-sm text-gray-400 text-center"></p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
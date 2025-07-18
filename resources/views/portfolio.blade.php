@extends('layouts.app')

@section('title', 'Your Name - Portfolio')

@section('content')
<section id="portfolio" class="section-padding">
    <div class="container mx-auto px-4 md:px-8 max-w-7xl card-base rounded-2xl p-8 lg:p-12 opacity-0" data-animate="fadeIn" data-delay="100">
        <h2 class="text-4xl md:text-5xl font-bold text-center mb-12 text-gradient opacity-0" data-animate="slideInUp" data-delay="200">My Recent Work</h2>
        <p class="text-center text-gray-400 text-lg mb-10 max-w-3xl mx-auto opacity-0" data-animate="fadeIn" data-delay="400">
            Here are some of my recent projects that showcase my skills in full-stack development, IoT, and networking. Each project highlights different aspects of my expertise, from web applications to network configurations.
        </p>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            
            <div class="card-base rounded-xl overflow-hidden group opacity-0" data-animate="slideInUp" data-delay="500">
                <img src="{{ asset('WhatsApp Image 2025-07-08 at 08.55.52_8779aa83.jpg') }}" alt="E-commerce Platform Thumbnail" class="w-full h-56 object-cover object-center border-b border-gray-700 transform group-hover:scale-105 transition duration-300">
                <div class="p-6">
                    <h3 class="text-2xl font-semibold mb-3 text-blue-300">BRIN Project</h3>
                    <p class="text-gray-400 text-sm mb-4 line-clamp-3">
                        Brin project make especially in camera so it will detect using esp 32 cam
                </p>
                    <a href="{{ url('/portfolio/brin-project') }}" class="text-blue-400 hover:text-blue-300 font-medium text-lg flex items-center group">
                        View Project
                        <svg class="w-5 h-5 ml-2 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4-4m0 0l-4-4m4 4H3"></path></svg>
                        </a>
                </div>
            </div>

            
            <div class="card-base rounded-xl overflow-hidden group opacity-0" data-animate="slideInUp" data-delay="700">
                <img src="{{ asset('cibarusah1.jpg') }}" alt="Task Management App Thumbnail" class="w-full h-56 object-cover object-center border-b border-gray-700 transform group-hover:scale-105 transition duration-300">
                <div class="p-6">
                    <h3 class="text-2xl font-semibold mb-3 text-blue-300">Cibarusah Project 1</h3>
                    <p class="text-gray-400 text-sm mb-4 line-clamp-3">
                        Build a networking system in cibarusah school and konfiguration the network using mikrotik and ubiquiti
                    </p>
                    <a href="{{ url('/portfolio/cibarusah-project-1') }}" class="text-blue-400 hover:text-blue-300 font-medium text-lg flex items-center group">
                     View Project
                    <svg class="w-5 h-5 ml-2 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4-4m0 0l-4-4m4 4H3"></path></svg>
                    </a>
                </div>
            </div>

            
            <div class="card-base rounded-xl overflow-hidden group opacity-0" data-animate="slideInUp" data-delay="900">
                <img src="{{ asset('cibarusah2.1.jpg') }}" alt="Blog Platform Thumbnail" class="w-full h-56 object-cover object-center border-b border-gray-700 transform group-hover:scale-105 transition duration-300">
                <div class="p-6">
                    <h3 class="text-2xl font-semibold mb-3 text-blue-300">Cibarusah Project 2</h3>
                    <p class="text-gray-400 text-sm mb-4 line-clamp-3">
                        Management system server printer for cibarusah school, allowing students to print their assignments directly from their devices. The system includes user authentication, print job management, and a web interface for easy access and mantenance some computers.
                    </p>
                    <a href="{{ url('/portfolio/cibarusah-project-2') }}" class="text-blue-400 hover:text-blue-300 font-medium text-lg flex items-center group">
                     View Project
                     <svg class="w-5 h-5 ml-2 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4-4m0 0l-4-4m4 4H3"></path></svg>
                      </a>
                </div>
            </div>

           
            <div class="card-base rounded-xl overflow-hidden group opacity-0" data-animate="slideInUp" data-delay="1100">
                <img src="{{ asset('cibubur1.jpg') }}" alt="Social Media Clone Thumbnail" class="w-full h-56 object-cover object-center border-b border-gray-700 transform group-hover:scale-105 transition duration-300">
                <div class="p-6">
                    <h3 class="text-2xl font-semibold mb-3 text-blue-300">project kuningan </h3>
                    <p class="text-gray-400 text-sm mb-4 line-clamp-3">
                        Management system for a buried company, configuration, and security measures. The project involved setting up routers, switches, and firewalls to ensure a robust and secure network infrastructure.
                </p>
                    <a href="{{ url('/portfolio/internship-winata') }}" class="text-blue-400 hover:text-blue-300 font-medium text-lg flex items-center group">
                     View Project
                        <svg class="w-5 h-5 ml-2 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4-4m0 0l-4-4m4 4H3"></path></svg>
                      </a>
                </div>
            </div>

            
            <div class="card-base rounded-xl overflow-hidden group opacity-0" data-animate="slideInUp" data-delay="1300">
                <img src="smkproject1.3.jpg" alt="RESTful API Service Thumbnail" class="w-full h-56 object-cover object-center border-b border-gray-700 transform group-hover:scale-105 transition duration-300">
                <div class="p-6">
                    <h3 class="text-2xl font-semibold mb-3 text-blue-300">SMK Taruna Bhakti Project 1</h3>
                    <p class="text-gray-400 text-sm mb-4 line-clamp-3">
                        Management networking system for SMK Taruna Bhakti, including network design, configuration, and security measures. The project involved setting up routers, switches, and firewalls to ensure a robust and secure network infrastructure for the school 
                    </p>
                    <a href="{{ url('/portfolio/restful-api-service') }}" class="text-blue-400 hover:text-blue-300 font-medium text-lg flex items-center group">
                     View Project
                      <svg class="w-5 h-5 ml-2 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4-4m0 0l-4-4m4 4H3"></path></svg>
                     </a>
                </div>
            </div>

            
            <div class="card-base rounded-xl overflow-hidden group opacity-0" data-animate="slideInUp" data-delay="1500">
                <img src="smkproject2.2.jpg" alt="Data Visualization Thumbnail" class="w-full h-56 object-cover object-center border-b border-gray-700 transform group-hover:scale-105 transition duration-300">
                <div class="p-6">
                    <h3 class="text-2xl font-semibold mb-3 text-blue-300">SMK Taruna Bhakti Project 2</h3>
                    <p class="text-gray-400 text-sm mb-4 line-clamp-3">
                        Maintenance and assembling computer for SMK Taruna Bhakti, ensuring all systems are up-to-date and running smoothly. The project involved diagnosing hardware issues, upgrading components, and implementing security measures to protect the school's IT infrastructure.
                    </p>
                    <a href="{{ url('/portfolio/data-visualization') }}" class="text-blue-400 hover:text-blue-300 font-medium text-lg flex items-center group">
                    View Project
                         <svg class="w-5 h-5 ml-2 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4-4m0 0l-4-4m4 4H3"></path></svg>
                     </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

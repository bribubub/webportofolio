@extends('layouts.app')

@section('title', 'Rafi Nurfadhil Putra - BRIN Project Detail')

@section('content')
<section id="project-detail" class="section-padding bg-gradient-to-br from-gray-950 via-gray-900 to-gray-950 text-white">
    <div class="container mx-auto max-w-5xl px-6 py-20 opacity-0" data-animate="fadeIn" data-delay="100">
        <a href="{{ url('/portfolio') }}" class="text-blue-400 hover:text-blue-300 flex items-center mb-10 text-lg transition duration-300 ease-in-out">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
            Back to Portfolio
        </a>

        <h1 class="text-4xl md:text-5xl font-extrabold text-gradient mb-8 opacity-0" data-animate="slideInUp" data-delay="200">BRIN Project: Smart Camera IoT</h1>

        <div class="mb-12 opacity-0" data-animate="fadeIn" data-delay="400">
             <img src="{{ asset('WhatsApp Image 2025-07-08 at 08.55.52_8779aa83.jpg') }}" alt="Cibarusah Project 1 Main Image" class="w-full rounded-xl shadow-2xl border border-gray-700">
        </div>

        <div class="space-y-6 text-lg text-gray-300 leading-relaxed opacity-0" data-animate="slideInUp" data-delay="600">
            <h2 class="text-3xl font-semibold text-blue-400 mb-4">Project Overview</h2>
            <p>
                This BRIN project focuses on developing an intelligent camera system that utilizes IoT (Internet of Things) devices, specifically the ESP32-CAM. The goal is to detect certain objects or conditions in real-time and provide automatic notifications. The system is designed for applications in agriculture
            </p>
            <p>
                Key technologies used include the ESP32-CAM microcontroller for image acquisition, Wi-Fi communication for data transfer, and integration with a cloud platform for data processing and storage.            </p>

            <h2 class="text-3xl font-semibold text-blue-400 mb-4">Features & Technologies Used</h2>
            <ul class="list-disc list-inside space-y-2 pl-4">
                <li>Hardware: ESP32-CAM (Microcontroller with integrated camera)</li>
                <li>Programming Language: Arduino (untuk ESP32)</li>
                <li>Communication: Wi-Fi (HTTP/MQTT)</li>
                <li>Local storage: Image/video data storage, analysis.</li>
            </ul>

            <h2 class="text-3xl font-semibold text-blue-400 mb-4">Challenges</h2>
            <p>
            One of the main challenges was optimizing object detection performance on resource-constrained hardware (ESP32-CAM) and ensuring efficient data transfer. The solution involved firmware optimization, image compression, and the use of lightweight communication protocols.            </p>

            <h2 class="text-3xl font-semibold text-blue-400 mb-4">Screenshots / Demos</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-6">
                <div>
                    <img src="{{ asset('Screenshot_20250508-114112.jpg') }}" alt="Demo Screenshot 1" class="w-full rounded-lg shadow-md mb-4">                    <p class="text-sm text-gray-400 text-center"></p>
                </div>
                <div>
                    <img src="{{ asset('Screenshot_20250508-114120.jpg') }}" alt="Demo Screenshot 1" class="w-full rounded-lg shadow-md mb-4">
                    <p class="text-sm text-gray-400 text-center"></p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
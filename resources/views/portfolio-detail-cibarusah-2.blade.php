@extends('layouts.app')

@section('title', 'Rafi Nurfadhil Putra - Cibarusah Project 2 Detail')

@section('content')
<section id="project-detail" class="section-padding bg-gradient-to-br from-gray-950 via-gray-900 to-gray-950 text-white">
    <div class="container mx-auto max-w-5xl px-6 py-20 opacity-0" data-animate="fadeIn" data-delay="100">
        <a href="{{ url('/portfolio') }}" class="text-blue-400 hover:text-blue-300 flex items-center mb-10 text-lg transition duration-300 ease-in-out">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
            Back to Portfolio
        </a>

        <h1 class="text-4xl md:text-5xl font-extrabold text-gradient mb-8 opacity-0" data-animate="slideInUp" data-delay="200">Cibarusah Project 2: Mentoring Junior Team Members And Create Server Printer With Maintenance PC </h1>

        <div class="mb-12 opacity-0" data-animate="fadeIn" data-delay="400">
            <img src="{{ asset('cibarusah2.1.jpg') }}" alt="Cibarusah Project 2 Main Image" class="w-full rounded-xl shadow-2xl border border-gray-700">
        </div>

        <div class="space-y-6 text-lg text-gray-300 leading-relaxed opacity-0" data-animate="slideInUp" data-delay="600">
            <h2 class="text-3xl font-semibold text-blue-400 mb-4">Project Overview</h2>
            <p>
                This project represents the development phase of the initial Cibarusah project, focusing on the enhancement and ongoing maintenance of the existing network infrastructure. The goal is to ensure a more stable and efficient system that supports future expansion and improved performance.
            </p>
            <p>
                In addition to the technical work, this stage also includes mentoring and supervising junior team members. It involves guiding them through collaborative processes, helping them understand their roles, and ensuring they develop good work habits and technical skills through hands-on experience in a real project environment.
            </p>

            <h2 class="text-3xl font-semibold text-blue-400 mb-4">What We Do In There?</h2>
            <ul class="list-disc list-inside space-y-2 pl-4">
                <li>maintenance and update pc</li>
                <li>creating server for printer</li>
            </ul>
            <h2 class="text-3xl font-semibold text-blue-400 mb-4">Challenges</h2>
            <p>
                Junior team members had limited technical experience, requiring additional guidance and supervision. Coordination among the team was initially inefficient due to unclear division of tasks and inconsistent communication. The project also faced tight deadlines and limited resources, including budget and equipment. In addition, on-site conditions such as complicated cable routing and connectivity issues added to the difficulties of implementation and maintenance.
            </p>

            <h2 class="text-3xl font-semibold text-blue-400 mb-4">Screenshots / Demos</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-6">
                <div>
                    <img src="{{ asset('cibarusah2.2.jpg') }}" alt="CMS Dashboard Screenshot" class="w-full rounded-lg shadow-md mb-4">
                    <p class="text-sm text-gray-400 text-center"></p>
                </div>
                <div>
                    <img src="{{ asset('cibarusah2.3.jpg') }}" alt="Blog Post View" class="w-full rounded-lg shadow-md mb-4">
                    <p class="text-sm text-gray-400 text-center"></p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@extends('layouts.app')

@section('title', 'Rafi Nurfadhil Putra - Interactive Data Visualization Detail')

@section('content')
<section id="project-detail" class="section-padding bg-gradient-to-br from-gray-950 via-gray-900 to-gray-950 text-white">
    <div class="container mx-auto max-w-5xl px-6 py-20 opacity-0" data-animate="fadeIn" data-delay="100">
        <a href="{{ url('/portfolio') }}" class="text-blue-400 hover:text-blue-300 flex items-center mb-10 text-lg transition duration-300 ease-in-out">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
            Back to Portfolio
        </a>

        <h1 class="text-4xl md:text-5xl font-extrabold text-gradient mb-8 opacity-0" data-animate="slideInUp" data-delay="200">Interactive Data Visualization Dashboard</h1>

        <div class="mb-12 opacity-0" data-animate="fadeIn" data-delay="400">
            <img src="{{ asset('smkproject2.2.jpg') }}" alt="Data Visualization Dashboard Main Image" class="w-full rounded-xl shadow-2xl border border-gray-700">
        </div>

        <div class="space-y-6 text-lg text-gray-300 leading-relaxed opacity-0" data-animate="slideInUp" data-delay="600">
            <h2 class="text-3xl font-semibold text-blue-400 mb-4">Project Overview</h2>
            <p>
            This project focused on the maintenance and assembly of computers for SMK Taruna Bhakti, with the main goal of ensuring that all systems were up-to-date, clean, and running smoothly. The tasks involved a complete check-up of each computer unit, diagnosing hardware problems, performing routine cleaning, and replacing any damaged or underperforming components. I was responsible not only for assembling and testing the systems but also for ensuring that each unit was properly cleaned and maintained to prevent overheating or dust-related issues.
            </p>
            <p>
            In some cases, we used a practical method called “cannibalization,” where working components were taken from other broken or unused computers to replace faulty parts. This method helped us save both time and cost, especially when spare parts were limited. After completing repairs or replacements, I also conducted power-on tests to confirm that the devices could boot and function normally. These final checks were crucial in verifying that each system was ready for daily use by students and teachers. Overall, the project ensured that the school’s IT infrastructure was not only operational but also clean and well-maintained.
            </p>

            <h2 class="text-3xl font-semibold text-blue-400 mb-4">What We Do In There?</h2>
            <ul class="list-disc list-inside space-y-2 pl-4">
                <li>Identifying faulty or underperforming components in each computer unit.</li>
                <li>Replacing damaged parts with working ones, sometimes using parts from other unused or broken computers </li>
                <li>Performing thorough cleaning to remove dust and improve cooling efficiency.</li>
                <li> Running power-on and boot tests after repairs to confirm that systems are fully functional.</li>
            </ul>

            <h2 class="text-3xl font-semibold text-blue-400 mb-4">Challenges </h2>
            <p>
                The main challenges in this project were the limited spare parts and the severely damaged condition of the computer. We overcame this by cannibalizing components from other units. In addition, repeated cleaning and checking processes were required to get all the devices up and running properly.
            </p>

            <h2 class="text-3xl font-semibold text-blue-400 mb-4">Screenshots / Demos</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-6">
                <div>
                    <img src="{{ asset('smkproject2.jpg') }}" alt="Dashboard Overview Screenshot" class="w-full rounded-lg shadow-md mb-4">
                    <p class="text-sm text-gray-400 text-center"></p>
                </div>
                <div>
                    <img src="{{ asset('smkproject2.4.jpg') }}" alt="Filter Interaction Screenshot" class="w-full rounded-lg shadow-md mb-4">
                    <p class="text-sm text-gray-400 text-center"></p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
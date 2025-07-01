@extends('layouts.app')

@section('title', 'Rafi Nurfadhil Putra - Internship In Winata Detail')

@section('content')
<section id="project-detail" class="section-padding bg-gradient-to-br from-gray-950 via-gray-900 to-gray-950 text-white">
    <div class="container mx-auto max-w-5xl px-6 py-20 opacity-0" data-animate="fadeIn" data-delay="100">
        <a href="{{ url('/portfolio') }}" class="text-blue-400 hover:text-blue-300 flex items-center mb-10 text-lg transition duration-300 ease-in-out">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
            Back to Portfolio
        </a>

        <h1 class="text-4xl md:text-5xl font-extrabold text-gradient mb-8 opacity-0" data-animate="slideInUp" data-delay="200">Internship In Winata: Social Media Platform Exploration</h1>

        <div class="mb-12 opacity-0" data-animate="fadeIn" data-delay="400">
            <img src="https://placehold.co/800x500/1e293b/60A5FA?text=Internship+Project+Image" alt="Internship Project Main Image" class="w-full rounded-xl shadow-2xl border border-gray-700">
        </div>

        <div class="space-y-6 text-lg text-gray-300 leading-relaxed opacity-0" data-animate="slideInUp" data-delay="600">
            <h2 class="text-3xl font-semibold text-blue-400 mb-4">Project Overview</h2>
            <p>
                Selama masa magang di Winata, saya terlibat dalam eksplorasi dan pengembangan platform media sosial sederhana yang berfokus pada fungsionalitas inti: profil pengguna, pembuatan postingan, fitur suka (liking), dan komentar. Proyek ini bertujuan untuk mensimulasikan interaksi sosial dunia nyata dalam skala yang lebih kecil.
            </p>
            <p>
                Penekanan utama diberikan pada desain database yang skalabel dan efisiensi pengambilan data untuk memastikan pengalaman pengguna yang lancar, meskipun ini adalah versi yang disederhanakan dari platform media sosial.
            </p>

            <h2 class="text-3xl font-semibold text-blue-400 mb-4">Features & Technologies Used</h2>
            <ul class="list-disc list-inside space-y-2 pl-4">
                <li>**Frontend:** HTML, CSS (Tailwind CSS), JavaScript</li>
                <li>**Backend:** PHP, Laravel Framework</li>
                <li>**Database:** MySQL</li>
                <li>**Core Features:** User profiles, post creation, like/comment functionality</li>
                <li>**API Development:** RESTful API for social interactions</li>
            </ul>

            <h2 class="text-3xl font-semibold text-blue-400 mb-4">Challenges & Solutions</h2>
            <p>
                Tantangan termasuk membangun interaksi sosial yang responsif dan mengelola hubungan data yang kompleks dalam database. Solusinya melibatkan penggunaan Eloquent ORM Laravel secara efisien dan desain API yang terstruktur.
            </p>

            <h2 class="text-3xl font-semibold text-blue-400 mb-4">Screenshots / Demos</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-6">
                <div>
                    <img src="https://placehold.co/400x250/1e293b/60A5FA?text=User+Profile" alt="User Profile Screenshot" class="w-full rounded-lg shadow-md mb-4">
                    <p class="text-sm text-gray-400 text-center">Tampilan profil pengguna</p>
                </div>
                <div>
                    <img src="https://placehold.co/400x250/1e293b/60A5FA?text=Post+Feed" alt="Post Feed Screenshot" class="w-full rounded-lg shadow-md mb-4">
                    <p class="text-sm text-gray-400 text-center">Tampilan feed postingan</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
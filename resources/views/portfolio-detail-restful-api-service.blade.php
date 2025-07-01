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
            <img src="https://placehold.co/800x500/1e293b/60A5FA?text=API+Service+Image" alt="RESTful API Service Main Image" class="w-full rounded-xl shadow-2xl border border-gray-700">
        </div>

        <div class="space-y-6 text-lg text-gray-300 leading-relaxed opacity-0" data-animate="slideInUp" data-delay="600">
            <h2 class="text-3xl font-semibold text-blue-400 mb-4">Project Overview</h2>
            <p>
                Proyek ini melibatkan perancangan dan implementasi API RESTful yang komprehensif untuk manajemen inventaris. API ini dilengkapi dengan otentikasi yang kuat (menggunakan JWT), validasi input yang teliti, dan operasi CRUD (Create, Read, Update, Delete) penuh untuk berbagai entitas inventaris.
            </p>
            <p>
                API ini didokumentasikan dengan cermat menggunakan spesifikasi Swagger/OpenAPI, memastikan kemudahan integrasi oleh aplikasi klien (frontend, mobile apps) yang akan menggunakannya. Fokus pada keamanan, skalabilitas, dan kemudahan penggunaan API.
            </p>

            <h2 class="text-3xl font-semibold text-blue-400 mb-4">Features & Technologies Used</h2>
            <ul class="list-disc list-inside space-y-2 pl-4">
                <li>**Backend:** PHP, Laravel Framework</li>
                <li>**API Standard:** RESTful principles</li>
                <li>**Authentication:** JWT (JSON Web Tokens)</li>
                <li>**Database:** MySQL</li>
                <li>**Operations:** Full CRUD operations (Create, Read, Update, Delete)</li>
                <li>**Documentation:** Swagger / OpenAPI</li>
                <li>**Validation:** Server-side input validation</li>
            </ul>

            <h2 class="text-3xl font-semibold text-blue-400 mb-4">Challenges & Solutions</h2>
            <p>
                Tantangan utama adalah memastikan keamanan API yang ketat dengan otentikasi JWT dan menangani validasi input yang kompleks secara efisien. Solusinya melibatkan penggunaan paket otentikasi Laravel Passport atau Sanctum, dan penerapan service layer untuk logika bisnis.
            </p>

            <h2 class="text-3xl font-semibold text-blue-400 mb-4">Screenshots / Demos</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-6">
                <div>
                    <img src="https://placehold.co/400x250/1e293b/60A5FA?text=API+Endpoint+List" alt="API Endpoint List Screenshot" class="w-full rounded-lg shadow-md mb-4">
                    <p class="text-sm text-gray-400 text-center">Daftar endpoint API</p>
                </div>
                <div>
                    <img src="https://placehold.co/400x250/1e293b/60A5FA?text=Swagger+UI" alt="Swagger UI Screenshot" class="w-full rounded-lg shadow-md mb-4">
                    <p class="text-sm text-gray-400 text-center">Tampilan dokumentasi Swagger UI</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
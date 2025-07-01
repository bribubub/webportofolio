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
            <img src="https://placehold.co/800x500/1e293b/60A5FA?text=BRIN+Project+Image" alt="BRIN Project Main Image" class="w-full rounded-xl shadow-2xl border border-gray-700">
        </div>

        <div class="space-y-6 text-lg text-gray-300 leading-relaxed opacity-0" data-animate="slideInUp" data-delay="600">
            <h2 class="text-3xl font-semibold text-blue-400 mb-4">Project Overview</h2>
            <p>
                Proyek BRIN ini berfokus pada pengembangan sistem kamera cerdas yang memanfaatkan perangkat IoT (Internet of Things), khususnya ESP32-CAM. Tujuannya adalah untuk mendeteksi objek atau kondisi tertentu secara real-time dan memberikan notifikasi otomatis. Sistem ini dirancang untuk aplikasi di bidang keamanan, pemantauan lingkungan, atau analisis perilaku di area terbatas.
            </p>
            <p>
                Teknologi utama yang digunakan mencakup mikrokontroler ESP32-CAM untuk akuisisi gambar, komunikasi Wi-Fi untuk transfer data, dan integrasi dengan platform cloud untuk pemrosesan dan penyimpanan data.
            </p>

            <h2 class="text-3xl font-semibold text-blue-400 mb-4">Features & Technologies Used</h2>
            <ul class="list-disc list-inside space-y-2 pl-4">
                <li>**Hardware:** ESP32-CAM (Mikrokontroler dengan kamera terintegrasi)</li>
                <li>**Programming Language:** Arduino (untuk ESP32), PHP/Laravel (untuk backend)</li>
                <li>**Communication:** Wi-Fi (HTTP/MQTT)</li>
                <li>**Cloud Integration:** Penyimpanan data gambar/video, analisis, dan sistem notifikasi</li>
                <li>**Object Detection:** (Opsional, jika diimplementasikan: penggunaan library deteksi objek ringan)</li>
            </ul>

            <h2 class="text-3xl font-semibold text-blue-400 mb-4">Challenges & Solutions</h2>
            <p>
                Salah satu tantangan utama adalah optimasi performa deteksi objek pada hardware dengan sumber daya terbatas (ESP32-CAM) dan memastikan transfer data yang efisien. Solusinya melibatkan optimasi firmware, kompresi gambar, dan penggunaan protokol komunikasi yang ringan.
            </p>

            <h2 class="text-3xl font-semibold text-blue-400 mb-4">Screenshots / Demos</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-6">
                <div>
                    <img src="https://placehold.co/400x250/1e293b/60A5FA?text=Demo+Screenshot+1" alt="Demo Screenshot 1" class="w-full rounded-lg shadow-md mb-4">
                    <p class="text-sm text-gray-400 text-center">Tampilan dashboard pemantauan</p>
                </div>
                <div>
                    <img src="https://placehold.co/400x250/1e293b/60A5FA?text=Demo+Screenshot+2" alt="Demo Screenshot 2" class="w-full rounded-lg shadow-md mb-4">
                    <p class="text-sm text-gray-400 text-center">Notifikasi deteksi objek</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
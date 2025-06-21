@extends('layouts.app')

@section('title', 'Your Name - About Me')

@section('content')
<section id="about" class="section-padding">
    <div class="container mx-auto px-4 md:px-8 max-w-6xl card-base rounded-2xl p-8 lg:p-12 animate-fadeIn">
        <h2 class="text-4xl md:text-5xl font-bold text-center mb-12 text-gradient animate-slideInUp">About Me</h2>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
            <div class="space-y-6 text-lg leading-relaxed text-gray-300 animate-slideInLeft animation-delay-200">
                <p>
                    Hello! I'm [Your Name], a dedicated and innovative <span class="text-blue-300">[Your Profession/Role]</span> with a profound passion for crafting intuitive and high-performance web applications. My journey into technology commenced with <span class="font-medium text-blue-200">[mention an early experience or inspiration, e.g., discovering web development through a simple HTML page, tinkering with old computers]</span>, which swiftly evolved into a deep fascination for how software can seamlessly blend creativity with practical problem-solving to shape our digital world.
                </p>
                <p>
                    I proudly graduated from <span class="font-medium text-blue-200">[Your University/Institution]</span> with a <span class="font-medium text-blue-200">[Your Degree]</span> in <span class="font-medium text-blue-200">[Your Major]</span>, where I specialized in <span class="font-medium text-blue-200">[mention a specialization, e.g., advanced full-stack development, human-computer interaction, scalable cloud architectures]</span>. My academic tenure was marked by hands-on projects, rigorous theoretical studies, and a constant drive to master core principles like <span class="font-medium text-blue-200">[mention specific academic strengths, e.g., object-oriented design patterns, efficient algorithms, secure coding practices]</span>. I am particularly drawn to <span class="font-medium text-blue-200">[mention a specific area like user-centric design, performance optimization, or building robust APIs]</span>, always striving to deliver solutions that are not just functional, but also elegant and maintainable.
                </p>
                <p>
                    Beyond the code editor, I am a firm believer in lifelong learning. I frequently engage with new technologies, participate in online courses, and follow industry trends to ensure my skill set remains cutting-edge and aligned with the demands of modern web development. My goal is to build impactful digital experiences that are both robust and delightful to use.
                </p>
            </div>
            <div class="bg-gray-800 p-8 rounded-xl shadow-inner border border-gray-700 animate-fadeIn animation-delay-400">
                <h3 class="text-3xl font-semibold mb-6 text-blue-400 border-b border-gray-700 pb-3">Interests & What Drives Me</h3>
                <ul class="list-disc list-inside text-gray-300 space-y-3 pl-4">
                    <li>Exploring the latest advancements in web technologies and emerging frameworks.</li>
                    <li>Contributing to open-source projects, giving back to the community that has taught me so much.</li>
                    <li>Tackling complex coding challenges on platforms like LeetCode and HackerRank to sharpen my algorithmic thinking.</li>
                    <li>Capturing the beauty of the world through photography, often finding inspiration for design.</li>
                    <li>Engaging with non-fiction literature, especially on topics like artificial intelligence, psychology, and futuristic concepts.</li>
                    <li>Volunteering for tech mentorship programs or local coding initiatives.</li>
                    <li>[Add a personal hobby, e.g., perfecting the art of homebrewing, exploring new hiking trails, or playing strategic board games].</li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection

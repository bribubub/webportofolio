@extends('layouts.app')

@section('title', ' - About Me')

@section('content')
<section id="about" class="section-container bg-gray-800 text-gray-200 rounded-lg m-4 p-8 shadow-2xl border border-gray-700">
    <div class="container mx-auto px-4 md:px-8 max-w-5xl">
        <h2 class="text-4xl md:text-5xl font-bold text-center mb-12 text-amber-400">About Me</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-start">
            <div class="text-lg leading-relaxed">
                <p class="mb-6">
                    Hello! I'm [Your Name], a dedicated and innovative [Your Profession/Role] with a profound passion for crafting intuitive and high-performance web applications. My journey into technology commenced with [mention an early experience or inspiration, e.g., discovering web development through a simple HTML page, tinkering with old computers], which swiftly evolved into a deep fascination for how software can seamlessly blend creativity with practical problem-solving to shape our digital world.
                </p>
                <p class="mb-6">
                    I proudly graduated from [Your University/Institution] with a [Your Degree] in [Your Major], where I specialized in [mention a specialization, e.g., advanced full-stack development, human-computer interaction, scalable cloud architectures]. My academic tenure was marked by hands-on projects, rigorous theoretical studies, and a constant drive to master core principles like [mention specific academic strengths, e.g., object-oriented design patterns, efficient algorithms, secure coding practices]. I am particularly drawn to [mention a specific area like user-centric design, performance optimization, or building robust APIs], always striving to deliver solutions that are not just functional, but also elegant and maintainable.
                </p>
                <p class="mb-6">
                    Beyond the code editor, I am a firm believer in lifelong learning. I frequently engage with new technologies, participate in online courses, and follow industry trends to ensure my skill set remains cutting-edge and aligned with the demands of modern web development.
                </p>
            </div>
            <div class="bg-gray-700 p-8 rounded-xl shadow-inner border border-gray-600">
                <h3 class="text-2xl font-semibold mb-6 text-amber-400">My Interests & What Drives Me</h3>
                <ul class="list-disc list-inside text-gray-300 space-y-3">
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

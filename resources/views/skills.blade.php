@extends('layouts.app')

@section('title', 'Your Name - Skills')

@section('content')
<section id="skills" class="section-padding">
    <div class="container mx-auto px-4 md:px-8 max-w-6xl card-base rounded-2xl p-8 lg:p-12 animate-fadeIn">
        <h2 class="text-4xl md:text-5xl font-bold text-center mb-12 text-gradient animate-slideInUp">My Expertise</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            <!-- Technical Skills -->
            <div class="card-base rounded-xl p-8 animate-slideInUp animation-delay-200">
                <h3 class="text-3xl font-semibold mb-6 text-blue-400 border-b border-gray-700 pb-3">Technical Skills</h3>
                <ul class="space-y-6">
                    <li>
                        <div class="flex justify-between items-center mb-1">
                            <span class="text-gray-200 text-lg">Laravel & PHP</span>
                            <span class="text-base font-medium text-blue-300">Advanced</span>
                        </div>
                        <div class="w-full bg-gray-700 rounded-full h-3">
                            <div class="bg-blue-500 h-3 rounded-full animate-pulse-width" style="width: 90%;"></div>
                        </div>
                    </li>
                    <li>
                        <div class="flex justify-between items-center mb-1">
                            <span class="text-gray-200 text-lg">JavaScript (React.js, Vue.js)</span>
                            <span class="text-base font-medium text-blue-300">Proficient</span>
                        </div>
                        <div class="w-full bg-gray-700 rounded-full h-3">
                            <div class="bg-blue-500 h-3 rounded-full animate-pulse-width" style="width: 80%;"></div>
                        </div>
                    </li>
                    <li>
                        <div class="flex justify-between items-center mb-1">
                            <span class="text-gray-200 text-lg">HTML & CSS (Tailwind CSS)</span>
                            <span class="text-base font-medium text-blue-300">Expert</span>
                        </div>
                        <div class="w-full bg-gray-700 rounded-full h-3">
                            <div class="bg-blue-500 h-3 rounded-full animate-pulse-width" style="width: 95%;"></div>
                        </div>
                    </li>
                    <li>
                        <div class="flex justify-between items-center mb-1">
                            <span class="text-gray-200 text-lg">Database (MySQL, PostgreSQL)</span>
                            <span class="text-base font-medium text-blue-300">Proficient</span>
                        </div>
                        <div class="w-full bg-gray-700 rounded-full h-3">
                            <div class="bg-blue-500 h-3 rounded-full animate-pulse-width" style="width: 75%;"></div>
                        </div>
                    </li>
                    <li>
                        <div class="flex justify-between items-center mb-1">
                            <span class="text-gray-200 text-lg">Version Control (Git, GitHub)</span>
                            <span class="text-base font-medium text-blue-300">Advanced</span>
                        </div>
                        <div class="w-full bg-gray-700 rounded-full h-3">
                            <div class="bg-blue-500 h-3 rounded-full animate-pulse-width" style="width: 90%;"></div>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- Soft Skills -->
            <div class="card-base rounded-xl p-8 animate-slideInUp animation-delay-400">
                <h3 class="text-3xl font-semibold mb-6 text-blue-400 border-b border-gray-700 pb-3">Soft Skills</h3>
                <ul class="list-disc list-inside space-y-4 text-gray-300 pl-4">
                    <li>**Problem-Solving:** Adept at dissecting complex challenges and architecting elegant, scalable solutions.</li>
                    <li>**Communication:** Articulate and effective communicator, fostering clear and productive collaboration.</li>
                    <li>**Teamwork:** Proven ability to thrive in collaborative environments, contributing to shared success.</li>
                    <li>**Adaptability:** Eager to learn and rapidly integrate new technologies and methodologies.</li>
                    <li>**Time Management:** Highly organized and efficient, consistently delivering projects on schedule.</li>
                    <li>**Critical Thinking:** Analyzes situations thoroughly to make informed decisions.</li>
                    <li>**Leadership:** Capable of guiding and motivating teams towards common goals.</li>
                </ul>
            </div>

            <!-- Tools & Methodologies -->
            <div class="card-base rounded-xl p-8 animate-slideInUp animation-delay-600">
                <h3 class="text-3xl font-semibold mb-6 text-blue-400 border-b border-gray-700 pb-3">Tools & Methodologies</h3>
                <ul class="list-disc list-inside space-y-4 text-gray-300 pl-4">
                    <li>**IDEs:** VS Code, PhpStorm, IntelliJ IDEA</li>
                    <li>**Project Management:** Jira, Trello, Asana, Azure DevOps</li>
                    <li>**Deployment:** Docker, Kubernetes, AWS (EC2, S3, Lambda), Netlify, Vercel</li>
                    <li>**Methodologies:** Agile (Scrum, Kanban), Test-Driven Development (TDD), CI/CD</li>
                    <li>**Testing:** PHPUnit, Jest, Cypress, Postman (for API testing)</li>
                    <li>**Design Tools:** Figma, Adobe XD (for UI/UX prototyping)</li>
                    <li>**Others:** GraphQL, Redis, Nginx</li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection

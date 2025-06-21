@extends('layouts.app')

@section('title', 'Your Name - Skills')

@section('content')
<section id="skills" class="section-container bg-gray-800 text-gray-200 rounded-lg m-4 p-8 shadow-2xl border border-gray-700">
    <div class="container mx-auto px-4 md:px-8 max-w-5xl">
        <h2 class="text-4xl md:text-5xl font-bold text-center mb-12 text-amber-400">My Expertise</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Technical Skills -->
            <div class="bg-gray-700 p-8 rounded-xl shadow-lg border-t-4 border-amber-500 hover:shadow-2xl transition duration-300 ease-in-out transform hover:-translate-y-2">
                <h3 class="text-3xl font-semibold mb-6 text-amber-300">Technical Skills</h3>
                <ul class="space-y-5">
                    <li>
                        <div class="flex justify-between items-center mb-1">
                            <span class="text-gray-200 text-lg">Laravel & PHP</span>
                            <span class="text-base font-medium text-gray-400">Advanced</span>
                        </div>
                        <div class="w-full bg-gray-600 rounded-full h-3">
                            <div class="bg-amber-500 h-3 rounded-full" style="width: 90%;"></div>
                        </div>
                    </li>
                    <li>
                        <div class="flex justify-between items-center mb-1">
                            <span class="text-gray-200 text-lg">JavaScript (React.js, Vue.js)</span>
                            <span class="text-base font-medium text-gray-400">Proficient</span>
                        </div>
                        <div class="w-full bg-gray-600 rounded-full h-3">
                            <div class="bg-amber-500 h-3 rounded-full" style="width: 80%;"></div>
                        </div>
                    </li>
                    <li>
                        <div class="flex justify-between items-center mb-1">
                            <span class="text-gray-200 text-lg">HTML & CSS (Tailwind CSS)</span>
                            <span class="text-base font-medium text-gray-400">Expert</span>
                        </div>
                        <div class="w-full bg-gray-600 rounded-full h-3">
                            <div class="bg-amber-500 h-3 rounded-full" style="width: 95%;"></div>
                        </div>
                    </li>
                    <li>
                        <div class="flex justify-between items-center mb-1">
                            <span class="text-gray-200 text-lg">Database (MySQL, PostgreSQL)</span>
                            <span class="text-base font-medium text-gray-400">Proficient</span>
                        </div>
                        <div class="w-full bg-gray-600 rounded-full h-3">
                            <div class="bg-amber-500 h-3 rounded-full" style="width: 75%;"></div>
                        </div>
                    </li>
                    <li>
                        <div class="flex justify-between items-center mb-1">
                            <span class="text-gray-200 text-lg">Version Control (Git, GitHub)</span>
                            <span class="text-base font-medium text-gray-400">Advanced</span>
                        </div>
                        <div class="w-full bg-gray-600 rounded-full h-3">
                            <div class="bg-amber-500 h-3 rounded-full" style="width: 90%;"></div>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- Soft Skills -->
            <div class="bg-gray-700 p-8 rounded-xl shadow-lg border-t-4 border-amber-500 hover:shadow-2xl transition duration-300 ease-in-out transform hover:-translate-y-2">
                <h3 class="text-3xl font-semibold mb-6 text-amber-300">Soft Skills</h3>
                <ul class="list-disc list-inside space-y-4 text-gray-200">
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
            <div class="bg-gray-700 p-8 rounded-xl shadow-lg border-t-4 border-amber-500 hover:shadow-2xl transition duration-300 ease-in-out transform hover:-translate-y-2">
                <h3 class="text-3xl font-semibold mb-6 text-amber-300">Tools & Methodologies</h3>
                <ul class="list-disc list-inside space-y-4 text-gray-200">
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

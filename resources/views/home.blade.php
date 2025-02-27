@extends('layout')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-lg">
    <h2 class="text-3xl font-bold mb-4">{{ __('home.greeting') }}</h2>
    <p class="text-lg mb-4">Welcome to my programming portfolio. Here you will find a collection of my projects, skills, and experiences in software development.</p>
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Project 1 -->
        <div class="bg-gray-100 p-4 rounded-lg shadow">
            <h3 class="text-2xl font-semibold mb-2">Project 1</h3>
            <p class="text-gray-700">Description of the first project. This project showcases my skills in web development using Laravel and Vue.js.</p>
        </div>
        
        <!-- Project 2 -->
        <div class="bg-gray-100 p-4 rounded-lg shadow">
            <h3 class="text-2xl font-semibold mb-2">Project 2</h3>
            <p class="text-gray-700">Description of the second project. This project demonstrates my ability to create RESTful APIs and integrate them with front-end frameworks.</p>
        </div>
        
        <!-- Project 3 -->
        <div class="bg-gray-100 p-4 rounded-lg shadow">
            <h3 class="text-2xl font-semibold mb-2">Project 3</h3>
            <p class="text-gray-700">Description of the third project. This project highlights my experience in database design and optimization using MySQL and PostgreSQL.</p>
        </div>
        
        <!-- Project 4 -->
        <div class="bg-gray-100 p-4 rounded-lg shadow">
            <h3 class="text-2xl font-semibold mb-2">Project 4</h3>
            <p class="text-gray-700">Description of the fourth project. This project showcases my skills in DevOps, including CI/CD pipelines and containerization with Docker.</p>
        </div>
    </div>
</div>
@endsection
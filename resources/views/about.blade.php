@extends('layout')

@section('content')
    <div class="container py-5">
        <!-- About Me Section -->
        <section class="mb-5">
            <h2 class="fw-semibold mb-4 text-center">About Me</h2>
            <div class="row g-4 mt-4 align-items-center">
                <div class="col-md-4 text-center">
                    <img src="{{ asset('images/P size.jpg') }}" alt="Profile Photo" 
                         class="img-fluid rounded-circle mb-3 shadow-sm" style="max-width: 200px;">
                </div>
                <div class="col-md-8">
                    <p class="lead">Hello! I’m <strong>Jackson Awe</strong>, an IT expert with over <strong>5 years of experience</strong> in full-stack development, system design, cloud engineering, and network security.</p>
                    <p class="text-muted">I help businesses build secure, scalable, and efficient digital solutions, leveraging my skills in software development, Linux administration, and enterprise firewall management (Cisco, Sophos). I’ve worked with startups and enterprises in Insurancetech and Healthtech, delivering robust systems and optimizing IT infrastructure.</p>
                    <p class="text-muted">I’m passionate about clean code, system performance, and staying ahead of the curve in technology innovation.</p>
                    <a href="https://www.firstassurance.co.tz" target="_blank" class="btn btn-primary mt-3">View My Projects</a>
                </div>
            </div>
        </section>

        <hr class="my-5">

        <!-- Education Section -->
        <section class="mb-5">
            <h3 class="fw-semibold mb-3">🎓 Education</h3>
            <ul class="list-unstyled">
                <li class="mb-2">
                    <strong>BSc in Business Information Systems</strong> — University of Dodoma <span class="text-muted">(2015–2019)</span>
                </li>
                <li class="mb-2">
                    <strong>Certificate in Network Security</strong> — Colledge Of Informatics and Virtual Educations <span class="text-muted">(2020)</span>
                </li>
                <li class="mb-2">
                    <strong>B1 Level German Language</strong> — Goethe Institute <span class="text-muted">(2025)</span>
                </li>

            </ul>
        </section>

        <!-- Work Experience Section -->
        <section class="mb-5">
            <h3 class="fw-semibold mb-3">💼 Work Experience</h3>
            <ul class="list-unstyled">
                <li class="mb-3">
                    <strong>Senior Full-Stack Developer</strong> at Firstassurance Company <span class="text-muted">(2020–Present)</span>
                    <p class="text-muted mb-0">Lead development of scalable web applications, implemented CI/CD pipelines, and managed Linux-based servers and Sophos/Cisco firewall configurations.</p>
                </li>
                <li class="mb-3">
                    <strong>Backend Developer</strong> at Firstassurance Company <span class="text-muted">(2019–2022)</span>
                    <p class="text-muted mb-0">Designed RESTful APIs, optimized database performance, and supported network security enhancements.</p>
                </li>
                <li class="mb-3">
                    <strong>Freelance Web Developer</strong> <span class="text-muted">(2017–2019)</span>
                    <p class="text-muted mb-0">Built custom websites and provided IT support, including Linux server setups for small businesses.</p>
                </li>
            </ul>
        </section>

        <!-- Tech Skills Section -->
        <section class="mb-5">
            <h3 class="fw-semibold mb-3">🛠️ Tech Skills</h3>
            <div class="d-flex flex-wrap gap-2">
                <span class="badge bg-dark text-white px-3 py-2">Laravel</span>
                <span class="badge bg-dark text-white px-3 py-2">PHP</span>
                <span class="badge bg-dark text-white px-3 py-2">JavaScript</span>
                <span class="badge bg-dark text-white px-3 py-2">Vue.js</span>
                <span class="badge bg-dark text-white px-3 py-2">MySQL</span>
                <span class="badge bg-dark text-white px-3 py-2">Docker</span>
                <span class="badge bg-dark text-white px-3 py-2">Git</span>
                <span class="badge bg-dark text-white px-3 py-2">AWS</span>
                <span class="badge bg-dark text-white px-3 py-2">CI/CD</span>
                <span class="badge bg-dark text-white px-3 py-2">Linux</span>
                <span class="badge bg-dark text-white px-3 py-2">Cisco</span>
                <span class="badge bg-dark text-white px-3 py-2">Sophos</span>
            </div>
        </section>
    </div>
@endsection
@extends('layout')

@section('content')
    <div class="container py-5">
        <!-- Header Section -->
        <div class="text-center mb-5">
           
            <h1 class="display-4 fw-bold mb-4">Hi, I'm Jackson Awe</h1>
            <p class="lead text-muted">
                An experienced IT professional specializing in software development, cloud infrastructure, and cybersecurity.
            </p>
        </div>

         <div class="col-md-12 text-center">
                <img src="{{ asset('images/P size.jpg') }}" alt="Profile Photo" 
                     class="img-fluid rounded-circle mb-3 shadow-sm" style="max-width: 200px;">
            </div>

        <!-- What I Do Section -->
        <section class="mt-5">
            <h2 class="text-center fw-semibold mb-4">What I Do</h2>
            <div class="row g-4 mt-3">
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body text-center">
                            <h4 class="card-title fw-bold">Web Development</h4>
                            <p class="card-text text-muted">
                                Building modern, scalable, and secure web applications using Laravel, JavaScript, and RESTful APIs.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body text-center">
                            <h4 class="card-title fw-bold">Cloud & DevOps</h4>
                            <p class="card-text text-muted">
                                Deploying and managing applications on AWS, Azure, and Google Cloud using CI/CD pipelines and containerization.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body text-center">
                            <h4 class="card-title fw-bold">Cybersecurity</h4>
                            <p class="card-text text-muted">
                                Securing digital infrastructure through penetration testing, vulnerability assessments, and best security practices.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body text-center">
                            <h4 class="card-title fw-bold">Network Security & Firewalls</h4>
                            <p class="card-text text-muted">
                                Configuring and managing enterprise-grade firewalls like Cisco and Sophos to protect networks from threats.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body text-center">
                            <h4 class="card-title fw-bold">Linux System Administration</h4>
                            <p class="card-text text-muted">
                                Optimizing and securing Linux servers for high-performance hosting, automation, and system reliability.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body text-center">
                            <h4 class="card-title fw-bold">IT Infrastructure Support</h4>
                            <p class="card-text text-muted">
                                Providing technical support, system upgrades, and disaster recovery planning to ensure business continuity.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Tech Stack Section -->
        <section class="mt-5">
            <h2 class="text-center fw-semibold mb-4">Tech Stack</h2>
            <p class="text-center text-muted mb-3">
                Here are some of the tools and technologies I use regularly:
            </p>
            <div class="d-flex flex-wrap justify-content-center gap-2">
                <span class="badge bg-dark text-white px-3 py-2">Laravel</span>
                <span class="badge bg-dark text-white px-3 py-2">Linux</span>
                <span class="badge bg-dark text-white px-3 py-2">PHP</span>
                <span class="badge bg-dark text-white px-3 py-2">JavaScript</span>
                <span class="badge bg-dark text-white px-3 py-2">MySQL</span>
                <span class="badge bg-dark text-white px-3 py-2">Docker</span>
                <span class="badge bg-dark text-white px-3 py-2">Git</span>
                <span class="badge bg-dark text-white px-3 py-2">AWS</span>
                <span class="badge bg-dark text-white px-3 py-2">Cisco</span>
                <span class="badge bg-dark text-white px-3 py-2">Sophos</span>
            </div>
        </section>

        <!-- Call to Action Section -->
        <section class="mt-5 text-center">
            <h2 class="fw-semibold mb-4">Let’s Work Together</h2>
            <p class="text-muted mb-4">
                If you're looking for a reliable and skilled IT expert to bring your ideas to life or secure your systems, feel free to
                <a href="/contact" class="text-primary fw-medium text-decoration-none">get in touch</a>.
            </p>
            <a href="/contact" class="btn btn-primary btn-lg">Contact Me</a>
        </section>
    </div>
@endsection
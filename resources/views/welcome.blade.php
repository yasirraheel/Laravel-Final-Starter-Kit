<x-frontend-layout>
    <div class="row">
        <div class="col-12">
            <!-- Hero Section -->
            <div class="card mb-30">
                <div class="card-body p-5">
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <h1 class="mb-3">Welcome to Laravel Starter</h1>
                            <p class="lead mb-4">A powerful, professional, and scalable starter kit for your next big project. Built with Laravel 11 and Dashmin.</p>
                            @auth
                                <a href="{{ route('dashboard') }}" class="btn btn-primary btn-lg px-4 me-3">Go to Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="btn btn-primary btn-lg px-4 me-3">Log In</a>
                                <a href="{{ route('register') }}" class="btn btn-outline-primary btn-lg px-4">Register</a>
                            @endauth
                        </div>
                        <div class="col-lg-5 text-center mt-4 mt-lg-0">
                             <img src="{{ asset('Dashmin_html/assets/img/media/congratulation-img.png') }}" alt="Welcome" class="img-fluid" style="max-height: 300px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card mb-30">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="icon-box bg-primary-light rounded p-3 d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                             <i class="icofont-speed-meter fs-3 text-primary" style="font-size: 24px;"></i>
                        </div>
                        <div class="text-right">
                            <h4 class="mb-1">Fast</h4>
                            <p class="mb-0">Optimized Performance</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card mb-30">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="icon-box bg-success-light rounded p-3 d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                             <i class="icofont-shield fs-3 text-success" style="font-size: 24px;"></i>
                        </div>
                        <div class="text-right">
                            <h4 class="mb-1">Secure</h4>
                            <p class="mb-0">Enterprise Grade</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card mb-30">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="icon-box bg-warning-light rounded p-3 d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                             <i class="icofont-ui-browser fs-3 text-warning" style="font-size: 24px;"></i>
                        </div>
                        <div class="text-right">
                            <h4 class="mb-1">Modern UI</h4>
                            <p class="mb-0">Dashmin Template</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card mb-30">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="icon-box bg-info-light rounded p-3 d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                             <i class="icofont-code fs-3 text-info" style="font-size: 24px;"></i>
                        </div>
                        <div class="text-right">
                            <h4 class="mb-1">Clean Code</h4>
                            <p class="mb-0">Laravel 11 Standards</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About/Content Section -->
    <div class="row">
        <div class="col-lg-6">
             <div class="card mb-30 h-100">
                 <div class="card-body">
                     <h3 class="card-title mb-4">Why Choose Us?</h3>
                     <p>We provide a robust foundation for your web applications, ensuring you can focus on building features rather than setting up boilerplate code. Our starter kit includes:</p>
                     <ul class="list-unstyled mt-3">
                         <li class="mb-2"><i class="icofont-check-circled text-success mr-2"></i> Role-based Access Control</li>
                         <li class="mb-2"><i class="icofont-check-circled text-success mr-2"></i> User Management</li>
                         <li class="mb-2"><i class="icofont-check-circled text-success mr-2"></i> System Settings</li>
                         <li class="mb-2"><i class="icofont-check-circled text-success mr-2"></i> Responsive Design</li>
                     </ul>
                 </div>
             </div>
        </div>
        <div class="col-lg-6">
             <div class="card mb-30 h-100">
                 <div class="card-body">
                     <h3 class="card-title mb-4">Get Started Today</h3>
                     <p>Join thousands of developers who are building amazing things with our tools.</p>
                     <div class="mt-4">
                         <a href="https://laravel.com/docs" target="_blank" class="btn btn-primary btn-lg btn-block mb-3">Read Documentation</a>
                         <a href="#" class="btn btn-outline-secondary btn-lg btn-block">Contact Support</a>
                     </div>
                 </div>
             </div>
        </div>
    </div>
</x-frontend-layout>

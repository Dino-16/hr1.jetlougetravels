@extends('layouts.guest')

@section('content')
    <div class="login-container">
        <div class="row g-0">
                <!-- Left Side - Welcome -->
                <div class="col-lg-6 login-left">
                <div class="floating-shapes">
                    <div class="shape"></div>
                    <div class="shape"></div>
                    <div class="shape"></div>
                </div>

                <div class="logo-container">
                    <div class="logo-box">
                    <img src="jetlouge_logo.png" alt="Jetlouge Travels">
                    </div>
                    <h1 class="brand-text">Jetlouge Travels</h1>
                    <p class="brand-subtitle">Admin Portal</p>
                </div>

                <h2 class="welcome-text">Welcome Back!</h2>
                <p class="welcome-subtitle">
                    Access your travel management dashboard to monitor bookings,
                    manage customers, and grow your travel business.
                </p>

                <ul class="feature-list">
                    <li>
                    <i class="bi bi-check"></i>
                    <span>Manage bookings & reservations</span>
                    </li>
                    <li>
                    <i class="bi bi-check"></i>
                    <span>Track customer interactions</span>
                    </li>
                    <li>
                    <i class="bi bi-check"></i>
                    <span>Monitor business analytics</span>
                    </li>
                    <li>
                    <i class="bi bi-check"></i>
                    <span>Secure admin access</span>
                    </li>
                </ul>
                </div>

                <!-- Right Side - Login Form -->
                <div class="col-lg-6 login-right">
                <h3 class="text-center mb-4" style="color: var(--jetlouge-primary); font-weight: 700;">
                    Sign In to Your Account
                </h3>

                <form id="loginForm">
                    <div class="mb-3">
                    <label for="email" class="form-label fw-semibold">Email Address</label>
                    <div class="input-group">
                        <span class="input-group-text">
                        <i class="bi bi-envelope"></i>
                        </span>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                    </div>
                    </div>

                    <div class="mb-3">
                    <label for="password" class="form-label fw-semibold">Password</label>
                    <div class="input-group">
                        <span class="input-group-text">
                        <i class="bi bi-lock"></i>
                        </span>
                        <input type="password" class="form-control" id="password" placeholder="Enter your password" required>
                        <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                        <i class="bi bi-eye"></i>
                        </button>
                    </div>
                    </div>

                    <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="rememberMe">
                    <label class="form-check-label" for="rememberMe">
                        Remember me
                    </label>
                    </div>

                    <a href="{{ route('dashboard') }}" class="btn btn-login mb-3">
                    <i class="bi bi-box-arrow-in-right me-2"></i>
                    Sign In
                    </a>

                    <div class="text-center">
                    <a href="#" class="btn-forgot">Forgot your password?</a>
                    </div>

                    <hr class="my-4">

                    <div class="text-center">
                    <p class="mb-2">Don't have an account?</p>
                    <a href="register.html" class="btn btn-outline-primary">
                        <i class="bi bi-person-plus me-2"></i>
                        Create New Account
                    </a>
                    </div>
                </form>
            </div>
        </div>
  </div>
@endsection

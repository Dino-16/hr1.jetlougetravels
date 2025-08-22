<!-- Sidebar -->
<aside id="sidebar" class="bg-white border-end p-3 shadow-sm">

    <!-- Profile Section -->
    <div class="profile-section text-center">
        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=150&h=150&fit=crop&crop=face"
            alt="Admin Profile" class="profile-img mb-2">
        <h6 class="fw-semibold mb-1">John Anderson</h6>
        <small class="text-muted">Travel Administrator</small>
    </div>

    <!-- Navigation Menu -->
    <ul class="nav flex-column">
        <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="nav-link text-dark {{  request()->is('dashboard') ? 'active' : '' }}">
                <i class="bi bi-speedometer2 me-2"></i> Dashboard
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('open-requests') }}" class="nav-link text-dark {{  request()->is('open-requests') ? 'active' : '' }}">
                <i class="bi bi-file-earmark-plus me-2"></i> Open Requests
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('posting') }}" class="nav-link text-dark {{  request()->is('posting') ? 'active' : '' }}">
                <i class="bi bi-briefcase me-2"></i> Posting
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('referrals') }}" class="nav-link text-dark {{  request()->is('referrals') ? 'active' : '' }}">
                <i class="bi bi-person-plus me-2"></i> Referrals
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('applicants') }}" class="nav-link text-dark {{  request()->is('applicants') ? 'active' : '' }} ">
                <i class="bi bi-person-vcard me-2"></i> Applicants</a>
        </li>
        <li class="nav-item">
            <a href="{{ route('filtered-pool') }}" class="nav-link text-dark {{  request()->is('filtered-pool') ? 'active' : '' }} ">
                <i class="bi bi-person-lines-fill me-2"></i> Filtered Pool
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('interview-pipeline') }}" class="nav-link text-dark {{  request()->is('interview-pipeline') ? 'active' : '' }} ">
            <i class="bi bi-people-fill me-2"></i> Interview Pipeline
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('hiring-offer') }}" class="nav-link text-dark {{  request()->is('hiring-offer') ? 'active' : '' }} ">
                <i class="bi bi-award me-2"></i> Hiring Offer
            </a>
        </li>
         <li class="nav-item">
            <a href="{{ route('social') }}" class="nav-link text-dark {{  request()->is('social') ? 'active' : '' }} ">
                <i class="bi bi-award me-2"></i> Manage Shoutouts
            </a>
        </li>
    </ul>

</aside>

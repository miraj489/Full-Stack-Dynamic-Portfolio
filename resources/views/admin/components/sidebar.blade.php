<?php
// Sidebar component view
?>

<!-- Sidebar Navigation -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-header">
        <h2>Portfolio Admin</h2>
        <button class="toggle-btn" onclick="toggleSidebar()">
            <i class="fas fa-bars"></i>
        </button>
    </div>

    <nav class="sidebar-nav">
        <a href="#" class="nav-item active" onclick="showSection('dashboard')">
            <i class="fas fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
        <a href="#" class="nav-item" onclick="showSection('profile')">
            <i class="fas fa-user"></i>
            <span>Profile</span>
        </a>
        <a href="#" class="nav-item" onclick="showSection('projects')">
            <i class="fas fa-project-diagram"></i>
            <span>Projects</span>
        </a>
        <a href="#" class="nav-item" onclick="showSection('skills')">
            <i class="fas fa-code"></i>
            <span>Skills</span>
        </a>
        <a href="#" class="nav-item" onclick="showSection('experience')">
            <i class="fas fa-briefcase"></i>
            <span>Experience</span>
        </a>
        <a href="#" class="nav-item" onclick="showSection('education')">
            <i class="fas fa-graduation-cap"></i>
            <span>Education</span>
        </a>
        <a href="#" class="nav-item" onclick="showSection('achievements')">
            <i class="fas fa-trophy"></i>
            <span>Achievements</span>
        </a>
        <a href="#" class="nav-item" onclick="showSection('about')">
            <i class="fas fa-info-circle"></i>
            <span>About</span>
        </a>
        <a href="{{ url('/') }}" class="nav-item" target="_blank">
            <i class="fas fa-home"></i>
            <span>View Portfolio</span>
        </a>
    </nav>

    <div class="user-section">
        <div class="user-info">
            <div class="user-avatar">
                {{ strtoupper(substr($user->name, 0, 1)) }}
            </div>
            <div class="user-details">
                <h4>{{ $user->name }}</h4>
                <p>Administrator</p>
            </div>
        </div>
        <a href="{{ route('logout') }}" class="logout-btn">
            <i class="fas fa-sign-out-alt"></i>
            <span>Logout</span>
        </a>
    </div>
</div>

<style>
    /* Sidebar Navigation */
    .sidebar {
        position: fixed;
        left: 0;
        top: 0;
        width: 280px;
        height: 100vh;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        transition: all 0.3s ease;
        z-index: 1000;
        box-shadow: 2px 0 10px rgba(0,0,0,0.1);
    }

    .sidebar.collapsed {
        width: 70px;
    }

    .sidebar-header {
        padding: 20px;
        border-bottom: 1px solid rgba(255,255,255,0.1);
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .sidebar-header h2 {
        font-size: 18px;
        font-weight: 600;
        transition: opacity 0.3s ease;
    }

    .sidebar.collapsed .sidebar-header h2 {
        opacity: 0;
    }

    .toggle-btn {
        background: none;
        border: none;
        color: white;
        font-size: 18px;
        cursor: pointer;
        padding: 5px;
        border-radius: 4px;
        transition: background 0.3s ease;
    }

    .toggle-btn:hover {
        background: rgba(255,255,255,0.1);
    }

    .sidebar-nav {
        padding: 20px 0;
        height: calc(100vh - 200px);
        overflow-y: auto;
    }

    .nav-item {
        display: flex;
        align-items: center;
        padding: 15px 20px;
        color: rgba(255,255,255,0.9);
        text-decoration: none;
        transition: all 0.3s ease;
        border-left: 3px solid transparent;
    }

    .nav-item:hover, .nav-item.active {
        background: rgba(255,255,255,0.1);
        color: white;
        border-left-color: #ffd700;
    }

    .nav-item i {
        font-size: 18px;
        width: 20px;
        margin-right: 15px;
        transition: margin 0.3s ease;
    }

    .sidebar.collapsed .nav-item i {
        margin-right: 0;
    }

    .nav-item span {
        transition: opacity 0.3s ease;
    }

    .sidebar.collapsed .nav-item span {
        opacity: 0;
    }

    .user-section {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        padding: 15px 20px;
        border-top: 1px solid rgba(255,255,255,0.1);
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    }

    .user-info {
        display: flex;
        align-items: center;
        margin-bottom: 12px;
        transition: opacity 0.3s ease;
    }

    .sidebar.collapsed .user-info {
        opacity: 0;
    }

    .user-avatar {
        width: 35px;
        height: 35px;
        border-radius: 50%;
        background: #ffd700;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        color: #333;
        margin-right: 10px;
        font-size: 14px;
    }

    .user-details h4 {
        font-size: 13px;
        margin-bottom: 2px;
    }

    .user-details p {
        font-size: 11px;
        opacity: 0.7;
    }

    .logout-btn {
        background: rgba(255,255,255,0.1);
        color: white;
        padding: 8px 12px;
        border: none;
        border-radius: 6px;
        text-decoration: none;
        font-size: 13px;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        transition: all 0.3s ease;
    }

    .logout-btn:hover {
        background: rgba(255,255,255,0.2);
    }

    .logout-btn i {
        margin-right: 6px;
    }

    .sidebar.collapsed .logout-btn span {
        display: none;
    }
</style>

<script>
    function toggleSidebar() {
        const sidebar = document.getElementById('sidebar');
        const mainContent = document.getElementById('mainContent');
        
        sidebar.classList.toggle('collapsed');
        mainContent.classList.toggle('expanded');
    }

    function showSection(section) {
        // Update active nav item
        document.querySelectorAll('.nav-item').forEach(item => {
            item.classList.remove('active');
        });
        event.target.closest('.nav-item').classList.add('active');

        // Update page title and breadcrumb
        const titles = {
            'dashboard': { title: 'Dashboard', breadcrumb: 'Home > Dashboard' },
            'profile': { title: 'Profile Management', breadcrumb: 'Home > Profile' },
            'projects': { title: 'Projects', breadcrumb: 'Home > Projects' },
            'skills': { title: 'Skills & Expertise', breadcrumb: 'Home > Skills' },
            'experience': { title: 'Work Experience', breadcrumb: 'Home > Experience' },
            'education': { title: 'Education', breadcrumb: 'Home > Education' },
            'achievements': { title: 'Achievements', breadcrumb: 'Home > Achievements' },
            'about': { title: 'About Section', breadcrumb: 'Home > About' }
        };

        document.getElementById('pageTitle').textContent = titles[section].title;
        document.getElementById('breadcrumb').textContent = titles[section].breadcrumb;

        // Show/hide sections
        if (section === 'dashboard') {
            document.getElementById('dashboard-section').style.display = 'block';
            document.getElementById('other-sections').style.display = 'none';
        } else {
            document.getElementById('dashboard-section').style.display = 'none';
            document.getElementById('other-sections').style.display = 'block';
        }
    }

    // Auto-collapse sidebar on mobile
    if (window.innerWidth <= 768) {
        document.getElementById('sidebar').classList.add('collapsed');
        document.getElementById('mainContent').classList.add('expanded');
    }
</script>

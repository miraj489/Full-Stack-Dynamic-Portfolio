
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Education - Miraj's Portfolio</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* Fix page title visibility */
        .page-title {
            color: #fff !important;
            text-shadow: 0 2px 4px rgba(0,0,0,0.5);
            margin-bottom: 20px;
            font-size: 2.5rem;
            font-weight: 700;
            text-align: center;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <ul>
            <li><a href="{{ url('/') }}"><i class="fas fa-home"></i> Home</a></li>
            <li><a href="{{ url('/about') }}"><i class="fas fa-user"></i> About</a></li>
            <li><a href="{{ url('/skills') }}"><i class="fas fa-code"></i> Skills</a></li>
            <li><a href="{{ url('/education') }}" class="active"><i class="fas fa-graduation-cap"></i> Education</a></li>
            <li><a href="{{ url('/work') }}"><i class="fas fa-briefcase"></i> Experience</a></li>
            <li><a href="{{ url('/contact') }}"><i class="fas fa-envelope"></i> Contact</a></li>
        </ul>
    </nav>

    <!-- Main Content -->
    <div class="main-content">
        <div class="container">
            <h1 class="page-title"><i class="fas fa-graduation-cap"></i> My Education</h1>
            
            <div class="cards-grid">
                <!-- University Card -->
                <div class="card">
                    <div class="card-image">
                        <img src="{{ asset('assets/images/university.jpeg') }}" alt="Daffodil International University" />
                    </div>
                    <div class="card-content">
                        <div class="card-icon">
                            <i class="fas fa-university"></i>
                        </div>
                        <h2>Bachelor of Science</h2>
                        <h3>Computer Science & Engineering</h3>
                        <p class="institution">Daffodil International University</p>
                        
                        <div class="education-info">
                            <div class="info-item">
                                <i class="fas fa-calendar"></i>
                                <span>2022 - 2026</span>
                            </div>
                            <div class="info-item">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Dhaka, Bangladesh</span>
                            </div>
                            <div class="info-item">
                                <i class="fas fa-medal"></i>
                                <span>CGPA: 3.45/4.0</span>
                            </div>
                        </div>

                        <div class="subjects">
                            <h4>Major Subjects:</h4>
                            <div class="subject-tags">
                                <span>Web Development</span>
                                <span>Database Systems</span>
                                <span>Data Structures</span>
                                <span>Algorithms</span>
                                <span>Software Engineering</span>
                                <span>OOP</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- School & College Card -->
                <div class="card">
                    <div class="card-image">
                        <img src="{{ asset('assets/images/collegejpeg.jpeg') }}" alt="Pabna Government College" />
                    </div>
                    <div class="card-content">
                        <div class="card-icon">
                            <i class="fas fa-school"></i>
                        </div>
                        <h2>Higher Secondary & Secondary</h2>
                        <h3>Science Group</h3>
                        <p class="institution">Pabna Government Institutions</p>
                        
                        <div class="education-levels">
                            <div class="level">
                                <h4><i class="fas fa-graduation-cap"></i> HSC (2018-2020)</h4>
                                <p>Pabna Government College</p>
                                <span class="grade">GPA: 4.22/5.0</span>
                            </div>
                            <div class="level">
                                <h4><i class="fas fa-school"></i> SSC (2016-2018)</h4>
                                <p>Pabna Government High School</p>
                                <span class="grade">GPA: 4.33/5.0</span>
                            </div>
                        </div>

                        <div class="subjects">
                            <h4>Core Subjects:</h4>
                            <div class="subject-tags">
                                <span>Mathematics</span>
                                <span>Physics</span>
                                <span>Chemistry</span>
                                <span>Biology</span>
                                <span>English</span>
                                <span>Bangla</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

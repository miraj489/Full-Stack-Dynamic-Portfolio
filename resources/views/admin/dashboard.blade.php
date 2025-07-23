<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Dynamic Portfolio</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f8f9fa;
            overflow-x: hidden;
        }

        /* Main Content */
        .main-content {
            margin-left: 280px;
            transition: margin-left 0.3s ease;
            min-height: 100vh;
        }

        .main-content.expanded {
            margin-left: 70px;
        }

        .header {
            background: white;
            padding: 20px 30px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header h1 {
            color: #333;
            font-size: 28px;
            font-weight: 600;
        }

        .breadcrumb {
            color: #666;
            font-size: 14px;
        }

        .content {
            padding: 30px;
        }

        .dashboard-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .stat-card {
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.07);
            display: flex;
            align-items: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 15px rgba(0,0,0,0.1);
        }

        .stat-icon {
            width: 60px;
            height: 60px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            color: white;
            margin-right: 20px;
        }

        .stat-icon.projects { background: linear-gradient(135deg, #667eea, #764ba2); }
        .stat-icon.skills { background: linear-gradient(135deg, #f093fb, #f5576c); }
        .stat-icon.experience { background: linear-gradient(135deg, #4facfe, #00f2fe); }
        .stat-icon.education { background: linear-gradient(135deg, #43e97b, #38f9d7); }

        .stat-info h3 {
            font-size: 24px;
            color: #333;
            margin-bottom: 5px;
        }

        .stat-info p {
            color: #666;
            font-size: 14px;
        }

        .dashboard-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
        }

        .dashboard-card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.07);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .dashboard-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }

        .card-header {
            padding: 20px 25px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
        }

        .card-header h3 {
            font-size: 18px;
            margin-bottom: 5px;
        }

        .card-header p {
            font-size: 14px;
            opacity: 0.9;
        }

        .card-body {
            padding: 25px;
        }

        .card-actions {
            display: flex;
            gap: 10px;
            margin-top: 20px;
        }

        .btn {
            padding: 10px 20px;
            border: none;
            border-radius: 6px;
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        .btn-primary {
            background: #007bff;
            color: white;
        }

        .btn-primary:hover {
            background: #0056b3;
            transform: translateY(-1px);
        }

        .btn-outline {
            background: transparent;
            color: #007bff;
            border: 1px solid #007bff;
        }

        .btn-outline:hover {
            background: #007bff;
            color: white;
        }

        .btn i {
            margin-right: 8px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .main-content {
                margin-left: 70px;
            }

            .header {
                padding: 15px 20px;
            }

            .header h1 {
                font-size: 24px;
            }

            .content {
                padding: 20px;
            }

            .dashboard-stats {
                grid-template-columns: 1fr;
            }

            .dashboard-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <!-- Include Sidebar Component -->
    @include('admin.components.sidebar', ['user' => $user])

    <!-- Main Content -->
    <div class="main-content" id="mainContent">
        <div class="header">
            <div>
                <h1 id="pageTitle">Dashboard</h1>
                <div class="breadcrumb" id="breadcrumb">Home > Dashboard</div>
            </div>
            <div>
                <a href="{{ url('/') }}" target="_blank" style="background: #007bff; color: white; padding: 10px 20px; border-radius: 6px; text-decoration: none; font-size: 14px; display: inline-flex; align-items: center; transition: all 0.3s ease;">
                    <i class="fas fa-external-link-alt" style="margin-right: 8px;"></i>
                    Visit Portfolio
                </a>
            </div>
        </div>

        <div class="content" id="content">
            <!-- Dashboard Section -->
            <div id="dashboard-section">
                <div class="dashboard-stats">
                    <div class="stat-card">
                        <div class="stat-icon projects">
                            <i class="fas fa-project-diagram"></i>
                        </div>
                        <div class="stat-info">
                            <h3>5</h3>
                            <p>Total Projects</p>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon skills">
                            <i class="fas fa-code"></i>
                        </div>
                        <div class="stat-info">
                            <h3>12</h3>
                            <p>Technical Skills</p>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon experience">
                            <i class="fas fa-briefcase"></i>
                        </div>
                        <div class="stat-info">
                            <h3>3</h3>
                            <p>Work Experience</p>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon education">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <div class="stat-info">
                            <h3>2</h3>
                            <p>Education Records</p>
                        </div>
                    </div>
                </div>

                <div class="dashboard-grid">
                    <div class="dashboard-card">
                        <div class="card-header">
                            <h3>Personal Profile</h3>
                            <p>Manage your personal information and bio</p>
                        </div>
                        <div class="card-body">
                            <p>Update your profile picture, contact details, and professional summary.</p>
                            <div class="card-actions">
                                <a href="#" class="btn btn-primary" onclick="showSection('profile')">
                                    <i class="fas fa-edit"></i> Edit Profile
                                </a>
                                <a href="#" class="btn btn-outline">
                                    <i class="fas fa-eye"></i> Preview
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="dashboard-card">
                        <div class="card-header">
                            <h3>Projects Portfolio</h3>
                            <p>Showcase your best work and projects</p>
                        </div>
                        <div class="card-body">
                            <p>Add, edit, or remove projects from your portfolio with images and descriptions.</p>
                            <div class="card-actions">
                                <a href="#" class="btn btn-primary" onclick="showSection('projects')">
                                    <i class="fas fa-plus"></i> Add Project
                                </a>
                                <a href="#" class="btn btn-outline">
                                    <i class="fas fa-list"></i> View All
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="dashboard-card">
                        <div class="card-header">
                            <h3>Skills & Expertise</h3>
                            <p>Display your technical and soft skills</p>
                        </div>
                        <div class="card-body">
                            <p>Organize your skills by categories and proficiency levels.</p>
                            <div class="card-actions">
                                <a href="#" class="btn btn-primary" onclick="showSection('skills')">
                                    <i class="fas fa-code"></i> Manage Skills
                                </a>
                                <a href="#" class="btn btn-outline">
                                    <i class="fas fa-chart-bar"></i> Analytics
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="dashboard-card">
                        <div class="card-header">
                            <h3>Work Experience</h3>
                            <p>Professional experience and career history</p>
                        </div>
                        <div class="card-body">
                            <p>Add your work experience, responsibilities, and achievements.</p>
                            <div class="card-actions">
                                <a href="#" class="btn btn-primary" onclick="showSection('experience')">
                                    <i class="fas fa-briefcase"></i> Add Experience
                                </a>
                                <a href="#" class="btn btn-outline">
                                    <i class="fas fa-timeline"></i> Timeline
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="dashboard-card">
                        <div class="card-header">
                            <h3>Education & Certifications</h3>
                            <p>Academic background and achievements</p>
                        </div>
                        <div class="card-body">
                            <p>Manage your educational qualifications and certifications.</p>
                            <div class="card-actions">
                                <a href="#" class="btn btn-primary" onclick="showSection('education')">
                                    <i class="fas fa-graduation-cap"></i> Add Education
                                </a>
                                <a href="#" class="btn btn-outline">
                                    <i class="fas fa-certificate"></i> Certificates
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="dashboard-card">
                        <div class="card-header">
                            <h3>Awards & Achievements</h3>
                            <p>Recognition and accomplishments</p>
                        </div>
                        <div class="card-body">
                            <p>Highlight your awards, honors, and significant achievements.</p>
                            <div class="card-actions">
                                <a href="#" class="btn btn-primary" onclick="showSection('achievements')">
                                    <i class="fas fa-trophy"></i> Add Achievement
                                </a>
                                <a href="#" class="btn btn-outline">
                                    <i class="fas fa-medal"></i> View All
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Other sections will be loaded here -->
            <div id="other-sections" style="display: none;">
                <div style="text-align: center; padding: 50px;">
                    <i class="fas fa-cog fa-3x" style="color: #ddd; margin-bottom: 20px;"></i>
                    <h3 style="color: #666; margin-bottom: 10px;">Feature Coming Soon</h3>
                    <p style="color: #999;">This section is under development and will be available soon.</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
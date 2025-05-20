<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Helperfind Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <style>
        /* Sidebar Styles */
        .sidebar {
            width: 250px;
            min-height: 100vh;
            background-color: #18548c;
            color: white;
            transition: width 0.3s;
            position: relative;
        }
        .sidebar.collapsed {
            width: 60px;
        }
        .sidebar.collapsed .sidebar-content {
            display: none;
        }
        
        /* User Profile Section */
        .user-profile {
            display: flex;
            align-items: center;
            padding: 15px;
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }
        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 10px;
        }
        .user-info {
            display: flex;
            flex-direction: column;
        }
        .user-name {
            font-weight: bold;
            font-size: 14px;
        }
        .user-email {
            font-size: 12px;
            opacity: 0.8;
        }
        
        /* Menu Styles */
        .nav {
            flex-direction: column;
            padding: 10px 0;
        }
        .nav-link {
            color: white !important;
            padding: 10px 15px;
            display: flex;
            align-items: center;
        }
        .nav-link.active {
            background-color: rgba(255,255,255,0.1);
        }
        .nav-link i {
            margin-right: 10px;
        }
        
        /* Logout Button */
        .logout-btn {
            position: absolute;
            bottom: 20px;
            left: 0;
            right: 0;
            padding: 0 15px;
        }
        
        /* Toggle Button */
        .toggle-sidebar {
            position: absolute;
            top: 15px;
            right: 15px;
            cursor: pointer;
            color: white;
        }
        
        /* Main Content Styles */
        .card {
            display: flex;
            flex-direction: row;
            align-items: center;
            margin-bottom: 15px;
        }
        .card img {
            width: 80px;
            height: 120px;
            object-fit: cover;
            background-color: #e9ecef;
        }
        .card-body {
            padding-left: 15px;
        }
        .btn-primary {
            background-color: #18548c;
            border-color: #18548c;
        }
        .vertical-section {
            width: 30%;
            margin-right: 2%;
        }
    </style>
</head>
<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <div class="sidebar" id="sidebar">
            <!-- User Profile -->
            <div class="user-profile">
                <img src="images/user-avatar.png" class="user-avatar" alt="User">
                <div class="user-info">
                    <span class="user-name">User</span>
                    <span class="user-email">user@mail.com</span>
                </div>
            </div>
            
            <!-- Toggle Button -->
            <div class="toggle-sidebar" onclick="toggleSidebar()">
                <i class="bi bi-arrow-right-circle" id="sidebar-icon"></i>
            </div>
            
            <!-- Menu -->
            <div class="sidebar-content">
                <ul class="nav">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="bi bi-tag"></i> Helpertog
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link active">
                            <i class="bi bi-search"></i> Helperfind
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="bi bi-question-circle"></i> Helperassist
                        </a>
                    </li>
                </ul>
                
                <!-- Logout Button -->
                <div class="logout-btn">
                    <button class="btn btn-light btn-block">
                        <i class="bi bi-box-arrow-left"></i> Log Out
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Main Content -->
        <div class="container-fluid p-4">
            <h3>Helperfind Dashboard</h3>
            <p>Filter PRT Berdasarkan</p>
            
            <div class="d-flex">
                <!-- Bagian Vertikal Pertama -->
                <div class="vertical-section">
                    <div class="card">
                        <img src="D:\User PC\Documents\FED5026231126\image-4.png" class="card-img-left" alt="Intan Permata">
                        <div class="card-body">
                            <h5 class="card-title">Intan Permata</h5>
                            <p class="card-text">Baby Sitter<br>Surabaya</p>
                            <p>⭐ 4.5/5.0</p>
                            <a href="#" class="btn btn-primary">Selengkapnya</a>
                        </div>
                    </div>
                    <div class="card">
                        <img src="D:\User PC\Documents\FED5026231126\image-4.png" class="card-img-left" alt="Sumairi">
                        <div class="card-body">
                            <h5 class="card-title">Sumairi</h5>
                            <p class="card-text">Perawat Lansia<br>Pasuruan</p>
                            <p>⭐ 4.5/5.0</p>
                            <a href="#" class="btn btn-primary">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                
                <!-- Bagian Vertikal Kedua -->
                <div class="vertical-section">
                    <div class="card">
                        <img src="D:\User PC\Documents\FED5026231126\image-4.png" class="card-img-left" alt="Rofiq">
                        <div class="card-body">
                            <h5 class="card-title">Rofiq</h5>
                            <p class="card-text">Supir Pribadi<br>Surabaya</p>
                            <p>⭐ 4.5/5.0</p>
                            <a href="#" class="btn btn-primary">Selengkapnya</a>
                        </div>
                    </div>
                    <div class="card">
                        <img src="D:\User PC\Documents\FED5026231126\image-4.png" class="card-img-left" alt="Nagisa Natsumi">
                        <div class="card-body">
                            <h5 class="card-title">Nagisa Natsumi</h5>
                            <p class="card-text">PRT<br>Surabaya</p>
                            <p>⭐ 4.5/5.0</p>
                            <a href="#" class="btn btn-primary">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                
                <!-- Bagian Vertikal Ketiga -->
                <div class="vertical-section">
                    <div class="card">
                        <img src="D:\User PC\Documents\FED5026231126\image-4.png" class="card-img-left" alt="Andri Wulan">
                        <div class="card-body">
                            <h5 class="card-title">Andri Wulan</h5>
                            <p class="card-text">PRT<br>Tuban</p>
                            <p>⭐ 4.5/5.0</p>
                            <a href="#" class="btn btn-primary">Selengkapnya</a>
                        </div>
                    </div>
                    <div class="card">
                        <img src="D:\User PC\Documents\FED5026231126\image-4.png" class="card-img-left" alt="Roniah">
                        <div class="card-body">
                            <h5 class="card-title">Roniah</h5>
                            <p class="card-text">Baby Sitter<br>Surabaya</p>
                            <p>⭐ 4.5/5.0</p>
                            <a href="#" class="btn btn-primary">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const icon = document.getElementById('sidebar-icon');
            sidebar.classList.toggle('collapsed');
            if (sidebar.classList.contains('collapsed')) {
                icon.classList.remove('bi-arrow-right-circle');
                icon.classList.add('bi-arrow-left-circle');
            } else {
                icon.classList.remove('bi-arrow-left-circle');
                icon.classList.add('bi-arrow-right-circle');
            }
        }
    </script>
</body>
</html>
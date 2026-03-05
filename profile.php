<?php
$page_title = 'Profil Saya - Topkets';
$active_page = '';
$qrcode = true;
$extra_css = '<style>
        .profile-page {
            padding: 40px 0 60px;
            background: #f8f9fa;
            min-height: calc(100vh - 200px);
        }
        .profile-container {
            display: grid;
            grid-template-columns: 300px 1fr;
            gap: 30px;
        }
        .profile-sidebar {
            background: white;
            padding: 30px;
            border-radius: 12px;
            dbox-shadow: 0 2px 8px rgba(0,0,0,0.1);
            height: fit-content;
            position: sticky;
            top: 100px;
        }
        .profile-avatar {
            text-align: center;
            margin-bottom: 25px;
        }
        .avatar-img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 15px;
            border: 4px solid #FF5A5F;
            background: #e0e0e0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 36px;
            color: #767676;
            margin: 0 auto 15px;
        }
        .profile-name {
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 5px;
            color: #484848;
        }
        .profile-email {
            color: #767676;
            font-size: 14px;
        }
        .profile-menu {
            margin-top: 25px;
        }
        .profile-menu a {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 15px;
            border-radius: 8px;
            transition: all 0.3s;
            margin-bottom: 5px;
            color: #484848;
            cursor: pointer;
        }
        .profile-menu a:hover,
        .profile-menu a.active {
            background: #f8f9fa;
            color: #FF5A5F;
        }
        .profile-menu a i {
            width: 20px;
            text-align: center;
        }
        .profile-content {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        .profile-section {
            display: none;
        }
        .profile-section.active {
            display: block;
            animation: fadeIn 0.3s;
        }
        .section-title {
            font-size: 24px;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 2px solid #f0f0f0;
            color: #484848;
        }
        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #484848;
        }
        .form-control {
            width: 100%;
            padding: 12px 16px;
            border: 2px solid #EBEBEB;
            border-radius: 8px;
            font-size: 15px;
            transition: all 0.3s;
        }
        .form-control:focus {
            outline: none;
            border-color: #FF5A5F;
            box-shadow: 0 0 0 3px rgba(255,90,95,0.1);
        }
        .btn {
            padding: 12px 24px;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            border: none;
            font-size: 15px;
        }
        .btn-primary {
            background: linear-gradient(135deg, #FF5A5F, #FF7E7E);
            color: white;
        }
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(255,90,95,0.3);
        }
        .btn-outline {
            border: 2px solid #484848;
            background: transparent;
            color: #484848;
        }
        .btn-outline:hover {
            background: #484848;
            color: white;
        }
        .welcome-message {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 30px;
            border-radius: 12px;
            margin-bottom: 30px;
            text-align: center;
        }
        .welcome-message h2 {
            font-size: 28px;
            margin-bottom: 10px;
        }
        .welcome-message p {
            opacity: 0.9;
        }
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }
        .stat-card {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 12px;
            text-align: center;
        }
        .stat-card i {
            font-size: 32px;
            color: #FF5A5F;
            margin-bottom: 10px;
        }
        .stat-card h3 {
            font-size: 28px;
            margin-bottom: 5px;
            color: #484848;
        }
        .stat-card p {
            color: #767676;
            font-size: 14px;
        }
        
        .ticket-tabs {
            display: flex;
            gap: 10px;
            margin-bottom: 25px;
            border-bottom: 2px solid #f0f0f0;
            padding-bottom: 10px;
        }
        .tab-btn {
            padding: 10px 20px;
            background: transparent;
            border: none;
            cursor: pointer;
            font-weight: 600;
            color: #767676;
            transition: all 0.3s;
            border-radius: 8px 8px 0 0;
        }
        .tab-btn.active {
            color: #FF5A5F;
            background: #fff5f5;
        }
        .tickets-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
        }
        .ticket-card {
            background: white;
            border: 2px solid #f0f0f0;
            border-radius: 12px;
            padding: 20px;
            cursor: pointer;
            transition: all 0.3s;
        }
        .ticket-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
            border-color: #FF5A5F;
        }
        .ticket-card-header h3 {
            font-size: 18px;
            margin-bottom: 8px;
            color: #484848;
        }
        .ticket-card-header p {
            color: #767676;
            font-size: 14px;
        }
        .ticket-card-body {
            margin: 15px 0;
        }
        .ticket-detail-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            padding-bottom: 10px;
            border-bottom: 1px solid #f0f0f0;
        }
        .ticket-detail-row:last-child {
            border-bottom: none;
        }
        .ticket-detail-label {
            color: #767676;
            font-size: 14px;
        }
        .ticket-detail-value {
            font-weight: 600;
            color: #484848;
        }
        .ticket-status {
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
        }
        .ticket-status.confirmed {
            background: #d4edda;
            color: #155724;
        }
        .ticket-status.pending {
            background: #fff3cd;
            color: #856404;
        }
        .ticket-status.cancelled {
            background: #f8d7da;
            color: #721c24;
        }
        .view-ticket-btn {
            color: #FF5A5F;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .wishlist-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 20px;
        }
        .wishlist-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            transition: all 0.3s;
            position: relative;
        }
        .wishlist-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
        }
        .wishlist-image {
            width: 100%;
            height: 180px;
            background-size: cover;
            background-position: center;
        }
        .wishlist-info {
            padding: 15px;
        }
        .wishlist-title {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 8px;
            color: #484848;
        }
        .wishlist-date {
            color: #767676;
            font-size: 14px;
            margin-bottom: 8px;
        }
        .wishlist-price {
            font-size: 18px;
            font-weight: 700;
            color: #FF5A5F;
            margin-bottom: 10px;
        }
        .wishlist-actions {
            display: flex;
            gap: 10px;
        }
        .wishlist-actions .btn {
            flex: 1;
            padding: 8px 16px;
            font-size: 14px;
        }
        .remove-wishlist {
            position: absolute;
            top: 10px;
            right: 10px;
            width: 35px;
            height: 35px;
            background: white;
            border: none;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 8px rgba(0,0,0,0.2);
            transition: all 0.3s;
        }
        .remove-wishlist:hover {
            background: #FF5A5F;
            color: white;
            transform: scale(1.1);
        }
        
        .empty-state {
            text-align: center;
            padding: 60px 20px;
        }
        .empty-state i {
            font-size: 64px;
            color: #ddd;
            margin-bottom: 20px;
        }
        .empty-state h3 {
            font-size: 20px;
            margin-bottom: 10px;
            color: #484848;
        }
        .empty-state p {
            color: #767676;
            margin-bottom: 20px;
        }
        
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5);
            z-index: 1000;
            align-items: center;
            justify-content: center;
        }
        .modal.show {
            display: flex;
        }
        .modal-content {
            background: white;
            border-radius: 12px;
            max-width: 800px;
            max-height: 90vh;
            overflow-y: auto;
            width: 90%;
        }
        .modal-header {
            padding: 20px;
            border-bottom: 2px solid #f0f0f0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .modal-header h3 {
            margin: 0;
            color: #484848;
        }
        .modal-close {
            background: none;
            border: none;
            font-size: 28px;
            cursor: pointer;
            color: #767676;
        }
        .modal-body {
            padding: 20px;
        }
        .modal-footer {
            padding: 20px;
            border-top: 2px solid #f0f0f0;
            display: flex;
            gap: 10px;
            justify-content: flex-end;
        }
        .eticket-card {
            border: 2px solid #f0f0f0;
            border-radius: 12px;
            overflow: hidden;
        }
        .eticket-header {
            background: linear-gradient(135deg, #FF5A5F, #FF7E7E);
            color: white;
            padding: 20px;
            text-align: center;
        }
        .eticket-header h2 {
            margin: 0 0 10px 0;
            font-size: 24px;
        }
        .eticket-body {
            padding: 20px;
            display: grid;
            grid-template-columns: 1fr auto;
            gap: 20px;
        }
        .eticket-info {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }
        .info-row {
            display: flex;
            justify-content: space-between;
            padding-bottom: 8px;
            border-bottom: 1px solid #f0f0f0;
        }
        .info-label {
            color: #767676;
            font-size: 14px;
        }
        .info-value {
            font-weight: 600;
            color: #484848;
        }
        .eticket-qr {
            text-align: center;
        }
        .qr-code {
            margin-bottom: 10px;
        }
        .qr-text {
            font-size: 12px;
            color: #767676;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @media (max-width: 992px) {
            .profile-container {
                grid-template-columns: 1fr;
            }
            .profile-sidebar {
                position: static;
            }
            .form-grid {
                grid-template-columns: 1fr;
            }
            .eticket-body {
                grid-template-columns: 1fr;
            }
        }
    </style>';
$extra_js = '<script src="js/wishlist-api.js"></script>
    <script src="js/animations.js"></script>
    <script src="js/profile-api.js"></script>
    <script src="js/profile.js"></script>';

include 'includes/header.php';
?>

    <!-- Profile Page Content -->
    <section class="profile-page">
        <div class="container">
            <div class="profile-container">
                <!-- Profile Sidebar -->
                <aside class="profile-sidebar">
                    <div class="profile-avatar">
                        <div class="avatar-img"><i class="fas fa-user"></i></div>
                        <div class="profile-name" id="sidebar-name">User</div>
                        <div class="profile-email" id="sidebar-email">user@topkets.id</div>
                    </div>
                    
                    <div class="profile-menu">
                        <a href="#" class="active" data-section="dashboard">
                            <i class="fas fa-home"></i>
                            Dashboard
                        </a>
                        <a href="#" data-section="profile-info">
                            <i class="fas fa-user"></i>
                            Informasi Profil
                        </a>
                        <a href="#" data-section="my-tickets">
                            <i class="fas fa-ticket-alt"></i>
                            Tiket Saya
                        </a>
                        <a href="#" data-section="wishlist">
                            <i class="fas fa-heart"></i>
                            Wishlist
                        </a>
                        <a href="#" data-section="settings">
                            <i class="fas fa-cog"></i>
                            Pengaturan
                        </a>
                    </div>
                </aside>
                
                <!-- Profile Content -->
                <main class="profile-content">
                    <!-- Dashboard Section -->
                    <div class="profile-section active" id="dashboard">
                        <div class="welcome-message">
                            <h2>Selamat Datang, <span id="welcome-name">User</span>! 👋</h2>
                            <p>Terima kasih telah bergabung dengan Topkets. Jelajahi event terbaru dan pesan tiketmu sekarang!</p>
                        </div>
                        
                        <h2 class="section-title">Statistik Anda</h2>
                        <div class="stats-grid">
                            <div class="stat-card">
                                <i class="fas fa-ticket-alt"></i>
                                <h3 id="stat-tickets">0</h3>
                                <p>Total Tiket</p>
                            </div>
                            <div class="stat-card">
                                <i class="fas fa-calendar-check"></i>
                                <h3 id="stat-upcoming">0</h3>
                                <p>Event Mendatang</p>
                            </div>
                            <div class="stat-card">
                                <i class="fas fa-heart"></i>
                                <h3 id="stat-wishlist">0</h3>
                                <p>Wishlist</p>
                            </div>
                            <div class="stat-card">
                                <i class="fas fa-star"></i>
                                <h3 id="stat-completed">0</h3>
                                <p>Event Selesai</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Profile Info Section -->
                    <div class="profile-section" id="profile-info">
                        <h2 class="section-title">Informasi Profil</h2>
                        
                        <form id="profile-form">
                            <div class="form-grid">
                                <div class="form-group">
                                    <label for="firstName">Nama Depan</label>
                                    <input type="text" id="firstName" class="form-control" required>
                                </div>
                                
                                <div class="form-group">
                                    <label for="lastName">Nama Belakang</label>
                                    <input type="text" id="lastName" class="form-control">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" class="form-control" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="phone">Nomor Telepon</label>
                                <input type="tel" id="phone" class="form-control" placeholder="+62 812-3456-7890">
                            </div>
                            
                            <div class="form-group">
                                <label for="birthDate">Tanggal Lahir</label>
                                <input type="date" id="birthDate" class="form-control">
                            </div>
                            
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> Simpan Perubahan
                            </button>
                        </form>
                    </div>
                    
                    <!-- My Tickets Section -->
                    <div class="profile-section" id="my-tickets">
                        <h2 class="section-title">Tiket Saya</h2>
                        
                        <div class="ticket-tabs">
                            <button class="tab-btn active" data-status="all">Semua</button>
                            <button class="tab-btn" data-status="upcoming">Akan Datang</button>
                            <button class="tab-btn" data-status="past">Selesai</button>
                            <button class="tab-btn" data-status="cancelled">Dibatalkan</button>
                        </div>
                        
                        <div class="tickets-grid" id="tickets-grid"></div>
                        
                        <div class="empty-state" id="empty-tickets" style="display: none;">
                            <i class="fas fa-ticket-alt"></i>
                            <h3>Belum Ada Tiket</h3>
                            <p>Anda belum memiliki tiket. Pesan tiket untuk event favorit Anda sekarang!</p>
                            <a href="events.php" class="btn btn-primary">Jelajahi Event</a>
                        </div>
                    </div>
                    
                    <!-- Wishlist Section -->
                    <div class="profile-section" id="wishlist">
                        <h2 class="section-title">Wishlist Saya</h2>
                        
                        <div class="wishlist-grid" id="wishlist-grid"></div>
                        
                        <div class="empty-state" id="empty-wishlist" style="display: none;">
                            <i class="fas fa-heart"></i>
                            <h3>Wishlist Kosong</h3>
                            <p>Anda belum menambahkan event ke wishlist. Jelajahi event favorit Anda!</p>
                            <a href="events.php" class="btn btn-primary">Jelajahi Event</a>
                        </div>
                    </div>
                    
                    <!-- Settings Section -->
                    <div class="profile-section" id="settings">
                        <h2 class="section-title">Pengaturan Akun</h2>
                        
                        <form id="settings-form">
                            <div class="form-group">
                                <label for="notifications">Notifikasi Email</label>
                                <select id="notifications" class="form-control">
                                    <option value="all">Semua Notifikasi</option>
                                    <option value="important">Hanya yang Penting</option>
                                    <option value="none">Tidak Ada</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="language">Bahasa</label>
                                <select id="language" class="form-control">
                                    <option value="id">Bahasa Indonesia</option>
                                    <option value="en">English</option>
                                </select>
                            </div>
                            
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> Simpan Pengaturan
                            </button>
                        </form>
                        
                        <div style="margin-top: 40px; padding-top: 30px; border-top: 2px solid #f0f0f0;">
                            <h3 style="margin-bottom: 20px; color: #484848;">Tindakan Akun</h3>
                            <button class="btn btn-outline" style="margin-right: 10px;">
                                <i class="fas fa-key"></i> Ubah Password
                            </button>
                            <button class="btn btn-outline" style="color: #dc3545; border-color: #dc3545;">
                                <i class="fas fa-trash"></i> Hapus Akun
                            </button>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </section>

    <!-- Ticket Detail Modal -->
    <div class="modal" id="ticket-modal">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Detail E-Ticket</h3>
                <button class="modal-close">&times;</button>
            </div>
            <div class="modal-body" id="ticket-detail"></div>
            <div class="modal-footer">
                <button class="btn btn-primary" id="modal-download-ticket">
                    <i class="fas fa-download"></i> Download
                </button>
                <button class="btn btn-outline" id="modal-email-ticket">
                    <i class="fas fa-envelope"></i> Kirim Email
                </button>
            </div>
        </div>
    </div>

    <!-- Logout Confirmation Modal -->
    <div class="modal" id="logout-modal">
        <div class="modal-content" style="max-width: 400px; text-align: center; padding: 30px;">
            <div style="margin-bottom: 20px;">
                <div style="width: 80px; height: 80px; background: #ffebee; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto;">
                    <i class="fas fa-sign-out-alt" style="font-size: 32px; color: #FF5A5F;"></i>
                </div>
            </div>
            <h3 style="margin-bottom: 10px; color: #484848; font-size: 24px;">Konfirmasi Keluar</h3>
            <p style="color: #767676; margin-bottom: 30px;">Apakah Anda yakin ingin keluar dari akun Anda?</p>
            <div style="display: flex; gap: 15px; justify-content: center;">
                <button class="btn btn-outline" onclick="closeLogoutModal()" style="min-width: 120px;">Batal</button>
                <button class="btn btn-primary" onclick="confirmLogout()" style="min-width: 120px; background: #FF5A5F; border-color: #FF5A5F;">Ya, Keluar</button>
            </div>
        </div>
    </div>

<?php include 'includes/footer.php'; ?>
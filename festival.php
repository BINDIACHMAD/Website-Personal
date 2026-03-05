<?php
$page_title = 'Festival - Topkets';
$active_page = 'festival';
$search_placeholder = 'Cari festival...';
$search_id = 'search-input';
$extra_js = '<script src="js/events-api.js"></script>
    <script src="js/animations.js"></script>';

include 'includes/header.php';
?>

    <!-- Festival Page Content -->
    <section class="events-page">
        <div class="container">
            <div class="page-header">
                <h1 class="animate-fade-in-down">Festival Musik & Seni</h1>
                <p class="animate-fade-in-up">Temukan festival musik, seni, dan budaya terbaik di Indonesia</p>
            </div>

            <!-- Featured Banner -->
            <div class="featured-banner scroll-reveal" style="background: linear-gradient(135deg, rgba(0, 166, 153, 0.9), rgba(255, 90, 95, 0.8)), url('https://images.unsplash.com/photo-1470229722913-7c0e2dbbafd3?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80'); background-size: cover; background-position: center;">
                <div class="banner-content">
                    <h2>We The Fest 2024</h2>
                    <p>Festival musik terbesar dengan lineup artis internasional dan lokal</p>
                    <a href="event-detail.php?id=we-the-fest" class="btn btn-primary">Lihat Detail</a>
                </div>
            </div>

            <!-- Events Grid -->
            <div class="events-section">
                <div class="events-grid" id="festival-events">
                    <!-- Events will be loaded by JavaScript -->
                </div>
            </div>

            <!-- Festival Categories -->
            <div class="festival-categories">
                <h2 class="section-title scroll-reveal">Jenis Festival</h2>
                <div class="categories-grid">
                    <div class="category-card scroll-reveal hover-lift">
                        <div class="category-icon">
                            <i class="fas fa-music"></i>
                        </div>
                        <h3>Festival Musik</h3>
                        <p>Rock, Jazz, EDM, dan berbagai genre musik lainnya</p>
                    </div>
                    <div class="category-card scroll-reveal hover-lift">
                        <div class="category-icon">
                            <i class="fas fa-palette"></i>
                        </div>
                        <h3>Festival Seni</h3>
                        <p>Pameran seni, instalasi, dan pertunjukan visual</p>
                    </div>
                    <div class="category-card scroll-reveal hover-lift">
                        <div class="category-icon">
                            <i class="fas fa-utensils"></i>
                        </div>
                        <h3>Festival Kuliner</h3>
                        <p>Food festival dan pesta kuliner dari berbagai daerah</p>
                    </div>
                    <div class="category-card scroll-reveal hover-lift">
                        <div class="category-icon">
                            <i class="fas fa-monument"></i>
                        </div>
                        <h3>Festival Budaya</h3>
                        <p>Festival tradisional dan pertunjukan budaya nusantara</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
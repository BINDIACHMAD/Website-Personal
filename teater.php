<?php
$page_title = 'Teater - Topkets';
$active_page = 'teater';
$search_placeholder = 'Cari pertunjukan teater...';
$search_id = 'search-input';
$extra_js = '<script src="js/events-api.js"></script>
    <script src="js/animations.js"></script>';

include 'includes/header.php';
?>

    <!-- Teater Page Content -->
    <section class="events-page">
        <div class="container">
            <div class="page-header">
                <h1 class="animate-fade-in-down">Pertunjukan Teater</h1>
                <p class="animate-fade-in-up">Nikmati karya seni pertunjukan terbaik dari berbagai grup teater</p>
            </div>

            <!-- Featured Banner -->
            <div class="featured-banner scroll-reveal" style="background: linear-gradient(135deg, rgba(148, 0, 211, 0.9), rgba(75, 0, 130, 0.8)), url('https://images.unsplash.com/photo-1574267432553-4b4628081c31?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80'); background-size: cover; background-position: center;">
                <div class="banner-content">
                    <h2>Musikal Laskar Pelangi</h2>
                    <p>Adaptasi musikal dari novel fenomenal karya Andrea Hirata</p>
                    <a href="event-detail.php?id=musikal-laskar-pelangi" class="btn btn-primary">Lihat Detail</a>
                </div>
            </div>

            <!-- Events Grid -->
            <div class="events-section">
                <div class="events-grid" id="teater-events">
                    <!-- Events will be loaded by JavaScript -->
                </div>
            </div>

            <!-- Teater Companies -->
            <div class="teater-companies">
                <h2 class="section-title scroll-reveal">Grup Teater Terkenal</h2>
                <div class="companies-grid">
                    <div class="company-card scroll-reveal hover-lift">
                        <div class="company-logo">
                            <i class="fas fa-theater-masks"></i>
                        </div>
                        <h3>Teater Koma</h3>
                        <p>Grup teater legendaris dengan berbagai karya fenomenal</p>
                    </div>
                    <div class="company-card scroll-reveal hover-lift">
                        <div class="company-logo">
                            <i class="fas fa-mask"></i>
                        </div>
                        <h3>Teater Kita</h3>
                        <p>Inovasi dalam pertunjukan teater kontemporer</p>
                    </div>
                    <div class="company-card scroll-reveal hover-lift">
                        <div class="company-logo">
                            <i class="fas fa-crown"></i>
                        </div>
                        <h3>Teater Mandiri</h3>
                        <p>Pertunjukan klasik dan adaptasi sastra dunia</p>
                    </div>
                    <div class="company-card scroll-reveal hover-lift">
                        <div class="company-logo">
                            <i class="fas fa-star"></i>
                        </div>
                        <h3>Teater Satu</h3>
                        <p>Eksperimen dalam bentuk dan teknik pertunjukan</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
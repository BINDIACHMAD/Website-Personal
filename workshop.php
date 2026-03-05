<?php
$page_title = 'Workshop - Topkets';
$active_page = 'workshop';
$search_placeholder = 'Cari workshop...';
$search_id = 'search-input';
$extra_js = '<script src="js/events-api.js"></script>
    <script src="js/animations.js"></script>';

include 'includes/header.php';
?>

    <!-- Workshop Page Content -->
    <section class="events-page">
        <div class="container">
            <div class="page-header">
                <h1 class="animate-fade-in-down">Workshop & Kelas Kreatif</h1>
                <p class="animate-fade-in-up">Tingkatkan skill dan eksplorasi passion Anda dengan workshop terbaik</p>
            </div>

            <!-- Featured Banner -->
            <div class="featured-banner scroll-reveal" style="background: linear-gradient(135deg, rgba(255, 193, 7, 0.9), rgba(255, 152, 0, 0.8)), url('https://images.unsplash.com/photo-1516035069371-29a1b244cc32?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80'); background-size: cover; background-position: center;">
                <div class="banner-content">
                    <h2>Workshop Fotografi Dasar</h2>
                    <p>Pelajari teknik dasar fotografi dari fotografer profesional</p>
                    <a href="event-detail.php?id=workshop-fotografi" class="btn btn-primary">Daftar Sekarang</a>
                </div>
            </div>

            <!-- Events Grid -->
            <div class="events-section">
                <div class="events-grid" id="workshop-events">
                    <!-- Events will be loaded by JavaScript -->
                </div>
            </div>

            <!-- Workshop Benefits -->
            <div class="workshop-benefits">
                <h2 class="section-title scroll-reveal">Mengapa Ikut Workshop?</h2>
                <div class="benefits-grid">
                    <div class="benefit-card scroll-reveal">
                        <div class="benefit-icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <h3>Belajar dari Ahli</h3>
                        <p>Diajarkan langsung oleh praktisi dan profesional di bidangnya</p>
                    </div>
                    <div class="benefit-card scroll-reveal">
                        <div class="benefit-icon">
                            <i class="fas fa-hands-helping"></i>
                        </div>
                        <h3>Praktik Langsung</h3>
                        <p>Kesempatan untuk praktik langsung dengan bimbingan instruktur</p>
                    </div>
                    <div class="benefit-card scroll-reveal">
                        <div class="benefit-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h3>Networking</h3>
                        <p>Bertemu dengan orang-orang yang memiliki minat yang sama</p>
                    </div>
                    <div class="benefit-card scroll-reveal">
                        <div class="benefit-icon">
                            <i class="fas fa-certificate"></i>
                        </div>
                        <h3>Sertifikat</h3>
                        <p>Dapatkan sertifikat partisipasi yang dapat memperkaya CV</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
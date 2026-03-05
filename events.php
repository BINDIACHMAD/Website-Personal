<?php
$page_title = 'Konser - Topkets';
$active_page = 'events';
$search_placeholder = 'Cari event...';
$search_id = 'search-input';
$extra_js = '<script src="js/events-api.js"></script>
    <script src="js/animations.js"></script>';

include 'includes/header.php';
?>

    <!-- Events Page Content -->
    <section class="events-page">
        <div class="container">
            <div class="page-header">
                <h1 class="animate-fade-in-down">Konser Musik</h1>
                <p class="animate-fade-in-up">Temukan konser musik terbaik dari artis favorit Anda</p>
            </div>

            <!-- Featured Banner -->
            <div class="featured-banner scroll-reveal" style="background: linear-gradient(135deg, rgba(255, 90, 95, 0.9), rgba(255, 126, 95, 0.8)), url('https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80'); background-size: cover; background-position: center;">
                <div class="banner-content">
                    <h2>Coldplay: Music of the Spheres</h2>
                    <p>Saksikan penampilan spektakuler dengan visual effects yang memukau</p>
                    <a href="event-detail.php?id=coldplay" class="btn btn-primary">Beli Tiket</a>
                </div>
            </div>

            <!-- Events Grid -->
            <div class="events-section">
                <div class="events-grid" id="konser-events">
                    <!-- Events will be loaded by JavaScript -->
                </div>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
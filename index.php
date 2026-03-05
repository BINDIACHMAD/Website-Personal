<?php
$page_title = 'Topkets - Tiket Konser & Event';
$active_page = 'home';
$search_id = 'hero-search';
$extra_js = '<script src="js/api-config.js"></script>
			<script src="js/home-api.js"></script>
   			<script src="js/animations.js"></script>';

include 'includes/header.php';
?>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1 class="animate-fade-in-down">Temukan Pengalaman Terbaikmu</h1>
            <p class="animate-fade-in-up">Jelajahi berbagai acara konser, festival, dan hiburan terbaik di Indonesia</p>
            <div class="search-bar animate-fade-in-up">
                <input type="text" placeholder="Cari konser, artis, atau lokasi..." id="hero-search">
                <button id="hero-search-btn"><i class="fas fa-search"></i> Cari Event</button>
            </div>
        </div>
    </section>

    <!-- Categories -->
    <section class="categories">
        <div class="container">
            <h2 class="section-title">Kategori Populer</h2>
            <div class="categories-grid">
                <a href="events.php" class="category-card hover-lift">
                    <div class="category-icon">
                        <i class="fas fa-music"></i>
                    </div>
                    <h3>Konser Musik</h3>
                    <p>Rock, Pop, Jazz, dan lainnya</p>
                </a>
                <a href="teater.php" class="category-card hover-lift">
                    <div class="category-icon">
                        <i class="fas fa-theater-masks"></i>
                    </div>
                    <h3>Teater</h3>
                    <p>Drama, Musikal, Komedi</p>
                </a>
                <a href="festival.php" class="category-card hover-lift">
                    <div class="category-icon">
                        <i class="fas fa-star"></i>
                    </div>
                    <h3>Festival</h3>
                    <p>Musik, Seni, Budaya</p>
                </a>
                <a href="workshop.php" class="category-card hover-lift">
                    <div class="category-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3>Workshop</h3>
                    <p>Belajar dan Berkembang</p>
                </a>
            </div>
        </div>
    </section>

    <!-- Upcoming Events -->
    <section class="events">
        <div class="container">
            <div class="events-header">
                <h2 class="section-title">Event Mendatang</h2>
                <a href="events.php" class="view-all">Lihat Semua <i class="fas fa-chevron-right"></i></a>
            </div>
            <div class="events-grid" id="upcoming-events">
                <!-- Events will be loaded by JavaScript -->
            </div>
        </div>
    </section>

    <!-- Featured Events -->
    <section class="featured-events">
        <div class="container">
            <h2 class="section-title">Event Unggulan</h2>
            <div class="featured-slider">
                <div class="featured-slide active" data-event="coldplay">
                    <div class="slide-content">
                        <h3>Coldplay: Music of the Spheres World Tour</h3>
                        <p>Experience the spectacular world tour of Coldplay with stunning visual effects and their greatest hits.</p>
                        <a href="event-detail.php?id=coldplay" class="btn btn-primary">Beli Tiket Sekarang</a>
                    </div>
                </div>
                <div class="featured-slide" data-event="java-jazz">
                    <div class="slide-content">
                        <h3>Java Jazz Festival 2026</h3>
                        <p>Festival jazz terbesar di Indonesia dengan musisi jazz ternama dari dalam dan luar negeri.</p>
                        <a href="event-detail.php?id=java-jazz" class="btn btn-primary">Beli Tiket Sekarang</a>
                    </div>
                </div>
                <div class="featured-slide" data-event="dwp">
                    <div class="slide-content">
                        <h3>DWP 2025: Djakarta Warehouse Project</h3>
                        <p>Festival musik elektronik terbesar di Asia Tenggara dengan lineup DJ internasional terbaik.</p>
                        <a href="event-detail.php?id=dwp" class="btn btn-primary">Beli Tiket Sekarang</a>
                    </div>
                </div>
                <div class="slider-nav">
                    <div class="slider-dot active" data-slide="0"></div>
                    <div class="slider-dot" data-slide="1"></div>
                    <div class="slider-dot" data-slide="2"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section class="how-it-works">
        <div class="container">
            <h2 class="section-title">Cara Memesan Tiket</h2>
            <div class="steps">
                <div class="step">
                    <div class="step-number">1</div>
                    <h3>Cari Event</h3>
                    <p>Temukan event yang ingin Anda hadiri dengan mudah</p>
                </div>
                <div class="step">
                    <div class="step-number">2</div>
                    <h3>Pilih Tiket</h3>
                    <p>Pilih jenis dan jumlah tiket yang diinginkan</p>
                </div>
                <div class="step">
                    <div class="step-number">3</div>
                    <h3>Bayar</h3>
                    <p>Selesaikan pembayaran dengan metode pilihan Anda</p>
                </div>
                <div class="step">
                    <div class="step-number">4</div>
                    <h3>E-Ticket</h3>
                    <p>Terima e-ticket di email dan siap untuk menghadiri event</p>
                </div>
            </div>
        </div>
    </section>


<?php include 'includes/footer.php'; ?>
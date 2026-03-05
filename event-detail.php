<?php
$page_title = 'Coldplay: Music of the Spheres World Tour - Topkets';
$active_page = 'events';
$leaflet_map = true;
$extra_js = '<script src="js/events-api.js"></script>
    <script src="js/checkout-integration.js"></script>
    <script src="js/animations.js"></script>
    <script src="js/events-api.js"></script>';

include 'includes/header.php';
?>

    <!-- Event Detail Content -->
    <section class="event-detail">
        <div class="container">
            <div class="event-detail-header">
                <div class="breadcrumb">
                    <a href="index.php">Beranda</a>
                    <i class="fas fa-chevron-right"></i>
                    <a href="events.php">Konser</a>
                    <i class="fas fa-chevron-right"></i>
                    <span>Coldplay: Music of the Spheres World Tour</span>
                </div>
                
                <div class="event-header-content">
                    <div class="event-gallery">
                        <div class="main-image">
                            <img src="https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" alt="Coldplay Concert">
                        </div>
                        <div class="thumbnail-images">
                            <div class="thumbnail active">
                                <img src="https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Coldplay 1">
                            </div>
                            <div class="thumbnail">
                                <img src="https://images.unsplash.com/photo-1506157786151-b8491531f063?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Coldplay 2">
                            </div>
                            <div class="thumbnail">
                                <img src="https://images.unsplash.com/photo-1470229722913-7c0e2dbbafd3?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Coldplay 3">
                            </div>
                        </div>
                    </div>
                    
                    <div class="event-info-sidebar">
                        <div class="event-basic-info">
                            <h1>Coldplay: Music of the Spheres World Tour</h1>
                            <div class="event-meta">
                                <div class="meta-item">
                                    <i class="far fa-calendar"></i>
                                    <span>15 November 2023 • 19:00 WIB</span>
                                </div>
                                <div class="meta-item">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>Stadion Utama Gelora Bung Karno, Jakarta</span>
                                </div>
                                <div class="meta-item">
                                    <i class="fas fa-tag"></i>
                                    <span>Konser Musik • Internasional</span>
                                </div>
                            </div>
                            
                            <div class="event-price">
                                <span class="price-from">Mulai dari</span>
                                <span class="price-amount">Rp 750.000</span>
                            </div>
                            
                            <div class="event-actions">
                                <button class="btn btn-primary btn-large" id="buy-ticket-btn">
                                    <i class="fas fa-ticket-alt"></i>
                                    Beli Tiket
                                </button>
                                <button class="btn btn-outline" id="wishlist-btn">
                                    <i class="far fa-heart"></i>
                                    Wishlist
                                </button>
                                <button class="btn btn-outline" id="share-btn">
                                    <i class="fas fa-share"></i>
                                    Bagikan
                                </button>
                            </div>
                        </div>
                        
                        <div class="event-countdown">
                            <h3>Event akan dimulai dalam:</h3>
                            <div class="countdown-timer">
                                <div class="countdown-item">
                                    <span class="countdown-number" id="days">00</span>
                                    <span class="countdown-label">Hari</span>
                                </div>
                                <div class="countdown-item">
                                    <span class="countdown-number" id="hours">00</span>
                                    <span class="countdown-label">Jam</span>
                                </div>
                                <div class="countdown-item">
                                    <span class="countdown-number" id="minutes">00</span>
                                    <span class="countdown-label">Menit</span>
                                </div>
                                <div class="countdown-item">
                                    <span class="countdown-number" id="seconds">00</span>
                                    <span class="countdown-label">Detik</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="event-detail-content">
                <div class="event-tabs">
                    <div class="tab-nav">
                        <button class="tab-btn active" data-tab="description">Deskripsi</button>
                        <button class="tab-btn" data-tab="tickets">Tiket</button>
                        <button class="tab-btn" data-tab="location">Lokasi</button>
                        <button class="tab-btn" data-tab="terms">Syarat & Ketentuan</button>
                    </div>
                    
                    <div class="tab-content">
                        <div class="tab-pane active" id="description">
                            <h2>Tentang Event</h2>
                            <p>MUSIC OF THE SPHERES WORLD TOUR hadir di Jakarta! Saksikan penampilan spektakuler Coldplay dengan visual effects yang memukau dan setlist terbaik mereka.</p>
                            
                            <h3>Lineup</h3>
                            <ul>
                                <li>Coldplay (Headliner)</li>
                                <li>Special Guest: TBA</li>
                                <li>Opening Act: Local Band</li>
                            </ul>
                            
                            <h3>Setlist Highlights</h3>
                            <p>Nikmati lagu-lagu terbaik Coldplay termasuk Yellow, The Scientist, Viva La Vida, Paradise, A Sky Full of Stars, dan hits terbaru dari album Music of the Spheres.</p>
                        </div>
                        
                        <div class="tab-pane" id="tickets">
                            <h2>Pilihan Tiket</h2>
                            <div class="ticket-options">
                                <div class="ticket-option">
                                    <div class="ticket-info">
                                        <h3>Regular</h3>
                                        <span class="ticket-price">Rp 200.000</span>
                                    </div>
                                    <div class="ticket-action">
                                        <div class="quantity-selector">
                                            <button class="qty-btn minus">-</button>
                                            <span class="qty-value">0</span>
                                            <button class="qty-btn plus">+</button>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="ticket-option">
                                    <div class="ticket-info">
                                        <h3>VIP</h3>
                                        <span class="ticket-price">Rp 550.000</span>
                                    </div>
                                    <div class="ticket-action">
                                        <div class="quantity-selector">
                                            <button class="qty-btn minus">-</button>
                                            <span class="qty-value">0</span>
                                            <button class="qty-btn plus">+</button>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="ticket-option">
                                    <div class="ticket-info">
                                        <h3>VVIP</h3>
                                        <span class="ticket-price">Rp 990.000</span>
                                    </div>
                                    <div class="ticket-action">
                                        <div class="quantity-selector">
                                            <button class="qty-btn minus">-</button>
                                            <span class="qty-value">0</span>
                                            <button class="qty-btn plus">+</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="ticket-summary">
                                <div class="summary-item">
                                    <span>Total Tiket:</span>
                                    <span id="total-tickets">0</span>
                                </div>
                                <div class="summary-item">
                                    <span>Total Harga:</span>
                                    <span id="total-price">Rp 0</span>
                                </div>
                                <button class="btn btn-primary btn-large" id="continue-booking">Lanjutkan Pembelian</button>
                            </div>
                        </div>
                        
                        <div class="tab-pane" id="location">
                            <h2>Lokasi Event</h2>
                            <div class="location-info">
                                <div id="map"></div>
                                <div class="location-details">
                                    
                                </div>
                            </div>
                        </div>
                        
                        <div class="tab-pane" id="terms">
                            <h2>Syarat & Ketentuan</h2>
                            <div class="terms-content">
                                <h3>Ketentuan Umum</h3>
                                <ul>
                                    <li>Tiket tidak dapat dikembalikan atau diuangkan</li>
                                    <li>Wajib menunjukkan e-ticket dan identitas asli saat masuk</li>
                                    <li>Dilarang membawa makanan dan minuman dari luar</li>
                                    <li>Anak di bawah 12 tahun harus didampingi orang tua</li>
                                </ul>
                                
                                <h3>Protokol Kesehatan</h3>
                                <ul>
                                    <li>Wajib menggunakan masker di area venue</li>
                                    <li>Patuhi physical distancing yang ditetapkan</li>
                                    <li>Tunjukkan sertifikat vaksin (jika diperlukan)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Events -->
    <section class="related-events">
        <div class="container">
            <h2 class="section-title">Event Serupa</h2>
            <div class="events-grid" id="related-events">
                <!-- Related events will be loaded by JavaScript -->
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
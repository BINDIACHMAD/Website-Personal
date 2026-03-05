<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fix Wishlist Schema - Topkets</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background: #f5f5f5;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
            border-bottom: 3px solid #e74c3c;
            padding-bottom: 10px;
        }
        .success {
            background: #d4edda;
            color: #155724;
            padding: 15px;
            border-radius: 5px;
            margin: 15px 0;
            border-left: 4px solid #28a745;
        }
        .error {
            background: #f8d7da;
            color: #721c24;
            padding: 15px;
            border-radius: 5px;
            margin: 15px 0;
            border-left: 4px solid #dc3545;
        }
        .info {
            background: #d1ecf1;
            color: #0c5460;
            padding: 15px;
            border-radius: 5px;
            margin: 15px 0;
            border-left: 4px solid #17a2b8;
        }
        pre {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 5px;
            overflow-x: auto;
        }
        .btn {
            background: #e74c3c;
            color: white;
            padding: 12px 24px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            text-decoration: none;
            display: inline-block;
            margin-top: 20px;
        }
        .btn:hover {
            background: #c0392b;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🔧 Perbaikan Wishlist Schema</h1>
        
        <?php
        require_once __DIR__ . '/api/config/database.php';

        try {
            $database = new Database();
            $db = $database->getConnection();
            
            echo '<div class="info">✓ Koneksi database berhasil</div>';
            
            // Check if created_at column exists
            $stmt = $db->query("SHOW COLUMNS FROM wishlist LIKE 'created_at'");
            $columnExists = $stmt->fetch();
            
            if (!$columnExists) {
                echo '<div class="info">⚙️ Menambahkan kolom created_at ke tabel wishlist...</div>';
                
                // Add created_at column with default timestamp
                $db->exec("
                    ALTER TABLE wishlist 
                    ADD COLUMN created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
                ");
                
                echo '<div class="success">✓ Berhasil menambahkan kolom created_at!</div>';
            } else {
                echo '<div class="success">✓ Kolom created_at sudah ada</div>';
            }
            
            // Verify the table structure
            echo '<h2>Struktur Tabel Wishlist Saat Ini:</h2>';
            $stmt = $db->query("DESCRIBE wishlist");
            $columns = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            echo '<pre>';
            foreach ($columns as $column) {
                echo sprintf(
                    "%-15s %-20s %-10s %-10s\n",
                    $column['Field'],
                    $column['Type'],
                    $column['Null'],
                    $column['Key']
                );
            }
            echo '</pre>';
            
            // Test wishlist query
            echo '<h2>Test Query Wishlist:</h2>';
            $testQuery = "SELECT COUNT(*) as total FROM wishlist";
            $stmt = $db->query($testQuery);
            $result = $stmt->fetch();
            
            echo '<div class="success">';
            echo "✓ Total wishlist items: " . $result['total'] . "<br>";
            echo "✓ Query wishlist berfungsi dengan baik!";
            echo '</div>';
            
            echo '<div class="success">';
            echo '<strong>🎉 Perbaikan Selesai!</strong><br>';
            echo 'Sistem wishlist sekarang sudah berfungsi dengan baik.<br>';
            echo 'Silakan refresh halaman profil Anda dan coba fitur wishlist.';
            echo '</div>';
            
        } catch (Exception $e) {
            echo '<div class="error">';
            echo '<strong>✗ Error:</strong><br>';
            echo htmlspecialchars($e->getMessage());
            echo '</div>';
        }
        ?>
        
        <a href="profile.php?section=wishlist" class="btn">Kembali ke Wishlist</a>
    </div>
</body>
</html>
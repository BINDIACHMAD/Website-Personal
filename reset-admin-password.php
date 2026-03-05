<?php
/**
 * Reset Admin Password
 * Script untuk reset password admin ke 'admin123'
 */

require_once 'api/config/database.php';

try {
    $database = new Database();
    $db = $database->getConnection();
    
    // Generate new password hash for 'admin123'
    $newPassword = 'admin123';
    $passwordHash = password_hash($newPassword, PASSWORD_BCRYPT);
    
    // Update admin password
    $query = "UPDATE users SET password = :password WHERE email = 'admin@topkets.id' AND role = 'admin'";
    $stmt = $db->prepare($query);
    $stmt->bindParam(':password', $passwordHash);
    
    if ($stmt->execute()) {
        echo "✅ SUCCESS!\n\n";
        echo "Password admin berhasil direset!\n";
        echo "Email: admin@topkets.id\n";
        echo "Password: admin123\n\n";
        echo "Password Hash: " . $passwordHash . "\n\n";
        echo "Silakan login dengan kredensial di atas.\n";
    } else {
        echo "❌ GAGAL!\n";
        echo "Gagal update password.\n";
    }
    
} catch (Exception $e) {
    echo "❌ ERROR!\n";
    echo "Error: " . $e->getMessage() . "\n";
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Topkets</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/animations.css">
    <style>
        .auth-page {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--light-gray);
            padding: 40px 20px;
        }
        .auth-container {
            background: var(--light);
            padding: 40px;
            border-radius: 10px;
            box-shadow: var(--shadow);
            width: 100%;
            max-width: 400px;
        }
        .auth-header {
            text-align: center;
            margin-bottom: 30px;
        }
        .auth-header h1 {
            margin-bottom: 10px;
            color: var(--dark);
        }
        .auth-header p {
            color: var(--gray);
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
        }
        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid var(--border);
            border-radius: 5px;
            font-size: 16px;
            transition: var(--transition);
        }
        .form-control:focus {
            outline: none;
            border-color: var(--primary);
        }
        .password-input {
            position: relative;
        }
        .toggle-password {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: var(--gray);
            cursor: pointer;
        }
        .auth-footer {
            text-align: center;
            margin-top: 20px;
        }
        .auth-footer a {
            color: var(--primary);
            font-weight: 500;
        }
    </style>
</head>
<body>
    <div class="auth-page">
        <div class="auth-container">
            <div class="auth-header">
                <h1>Masuk ke Akun Anda</h1>
                <p>Selamat datang kembali! Silakan masuk ke akun Anda.</p>
            </div>
            
            <form id="login-form">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="email@example.com" required>
                </div>
                
                <div class="form-group">
                    <label for="password">Password</label>
                    <div class="password-input">
                        <input type="password" id="password" name="password" class="form-control" placeholder="Masukkan password" required>
                        <button type="button" class="toggle-password">
                            <i class="fas fa-eye"></i>
                        </button>
                    </div>
                </div>
                
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-large" style="width: 100%;">Masuk</button>
                </div>
            </form>
            
            <div class="auth-footer">
                <p>Belum punya akun? <a href="register.php">Daftar di sini</a></p>
            </div>
            
            <div class="demo-credentials" style="margin-top: 20px; padding: 15px; background: var(--light-gray); border-radius: 5px; font-size: 14px;">
                <p><strong>Demo Credentials:</strong></p>
                <p>Email: demo@topkets.id</p>
                <p>Password: password</p>
            </div>
        </div>
    </div>

    <!-- Load API config first, then auth.js -->
    <script src="js/api-config.js"></script>
    <script src="js/auth.js"></script>
    <script src="js/animations.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Tastify</title>
    <link rel="stylesheet" href="assets/login.css">
</head>
<body class="admin-login">

    <!-- ADMIN NAVBAR -->
    <header class="login-navbar admin-navbar">

        <div class="login-logo">
            <img src="images/logo-tastify.png" alt="Tastify Logo">
        </div>

        <div class="admin-navbar-title">
            TASTIFY ADMIN PORTAL
        </div>

        <a href="login-user.php" class="back-user">
            User Login
        </a>

    </header>

    <!-- ADMIN LOGIN CONTENT -->
    <main class="login-container">

        <section class="login-left">
            <div class="login-card admin-card">

                <div class="admin-label">
                    ADMINISTRATOR ACCESS
                </div>

                <h1>Admin Login</h1>

                <p class="login-subtitle">
                    Welcome to Tastify Management System
                </p>

                <form action="" method="POST">

                    <div class="form-group">
                        <label for="admin-email">Admin ID / Email</label>
                        <input
                            type="text"
                            id="admin-email"
                            name="admin_email"
                            placeholder="Enter your admin ID or email"
                            required
                        >
                    </div>

                    <div class="form-group">
                        <label for="admin-password">Password</label>
                        <input
                            type="password"
                            id="admin-password"
                            name="admin_password"
                            placeholder="Enter your password"
                            required
                        >
                    </div>

                    <div class="remember-row admin-remember">
                        <label>
                            <input type="checkbox" name="remember">
                            <span>Remember This Device</span>
                        </label>
                    </div>

                    <button type="submit" class="login-button admin-button">
                        Admin Login
                    </button>

                    <a href="#" class="forgot-password">
                        Forgot Password?
                    </a>

                    <div class="admin-security">
                        Authorized personnel only.
                        Please keep your account secure.
                    </div>

                </form>
            </div>
        </section>

        <!-- ADMIN BACKGROUND -->
        <section class="login-right admin-right">
            <div class="image-overlay">
                <h2>Manage Tastify</h2>
                <p>Control, organize, and manage your foodspot platform.</p>
            </div>
        </section>

    </main>

</body>
</html>
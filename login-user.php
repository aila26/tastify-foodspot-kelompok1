<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login User - Tastify</title>
    <link rel="stylesheet" href="assets/login.css">
</head>
<body class="user-login">

    <!-- NAVBAR -->
    <header class="login-navbar">
        <div class="login-logo">
            <img src="images/logo-tastify.png" alt="Tastify Logo">
        </div>

        <nav>
            <a href="index.php">HOME</a>
            <a href="#">RESTAURANT</a>
            <a href="#">MENU</a>
            <a href="#">CHALLENGES</a>
            <a href="#">FOOD POINTS</a>
        </nav>

        <div class="nav-icons">
            <a href="#" aria-label="Search">⌕</a>
            <a href="#" aria-label="Profile">♙</a>
        </div>
    </header>

    <!-- LOGIN CONTENT -->
    <main class="login-container">

        <!-- FORM USER -->
        <section class="login-left">
            <div class="login-card">

                <h1>Login</h1>
                <p class="login-subtitle">Welcome back to Tastify!</p>

                <form action="" method="POST">

                    <div class="form-group">
                        <label for="username">Username</label>
                        <input
                            type="text"
                            id="username"
                            name="username"
                            required
                        >
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input
                            type="password"
                            id="password"
                            name="password"
                            required
                        >
                    </div>

                    <div class="remember-row">
                        <label>
                            <input type="checkbox" name="remember">
                            <span>Remember Me</span>
                        </label>
                    </div>

                    <button type="submit" class="login-button">
                        Login
                    </button>

                    <a href="#" class="forgot-password">
                        Forgot Password
                    </a>

                    <p class="switch-login">
                        Are you an admin?
                        <a href="login-admin.php">Login as Admin</a>
                    </p>

                </form>
            </div>
        </section>

        <!-- GAMBAR RESTORAN -->
        <section class="login-right">
            <div class="image-overlay">
                <h2>Discover Your Favorite Taste</h2>
                <p>Explore the best restaurants with Tastify.</p>
            </div>
        </section>

    </main>

</body>
</html>
<?php

$foods = [
    [
        "name" => "Spicy Ramen",
        "image" => "image/spicy-ramen.jpg",
        "rating" => "4,6"
    ],
    [
        "name" => "Beef Burger",
        "image" => "image/beef-burger.jpeg",
        "rating" => "3,3"
    ],
    [
        "name" => "Sushi Roll",
        "image" => "image/sushi-roll.jpg.jpeg",
        "rating" => "4,2"
    ],
    [
        "name" => "Brownies",
        "image" => "image/brownies.jpg.jpeg",
        "rating" => "4,5"
    ],
    [
        "name" => "Spaghetti Carbonara",
        "image" => "image/spaghetti-carbonara.jpg.jpeg",
        "rating" => "3,4"
    ],
    [
        "name" => "Tuna Melt Pizza",
        "image" => "image/tuna-melt-pizza.jpeg",
        "rating" => "4,4"
    ]
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tastify Foodspot - Home</title>

    <link rel="stylesheet" href="assets/style.css">

    

    <!-- Font Awesome untuk ikon -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap"
        rel="stylesheet">
</head>

<body>

    <div class="page">

        <!-- JUDUL HOME -->
        <div class="page-heading">
            
        </div>

        <!-- NAVBAR -->
        <header class="navbar">

            <div class="logo">
                <img src="images/logo-tastify.png" alt="">
            </div>

            <nav class="nav-menu">
                <a href="index.php" class="active">HOME</a>
                <a href="#">RESTAURANT</a>
                <a href="#">MENU</a>
                <a href="#">CHALLENGES</a>
                <a href="#">FOOD POINTS</a>
            </nav>

            <div class="nav-icons">
                <a href="#" aria-label="Search">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </a>

                <a href="#" aria-label="Profile">
                    <i class="fa-regular fa-user"></i>
                </a>
            </div>

        </header>

        <!-- HERO SECTION -->
        <section class="hero">

            <div class="hero-content">

                <h1>Temukan Rasa Favoritmu</h1>

                <p>
                    Jelajahi berbagai restoran, menu, dan tempat makan terbaik di sekitarmu
                </p>

                <div class="search-box">

                    <i class="fa-solid fa-magnifying-glass"></i>

                    <input type="text"
                        placeholder="Cari restoran, makanan, atau lokasi...">

                </div>

            </div>

        </section>

        <!-- FEATURE BUTTONS -->
        <section class="features">

            <a href="#" class="feature-card">

                <i class="fa-solid fa-dice"></i>

                <div class="feature-text">
                    <h3>RANDOM FOOD PICKER</h3>
                    <p>Spin & Get Food</p>
                </div>

            </a>

            <a href="#" class="feature-card">

                <i class="fa-solid fa-wallet"></i>

                <div class="feature-text">
                    <h3>BUDGET SLIDER</h3>
                    <p>Find By Prize</p>
                </div>

            </a>

            <a href="#" class="feature-card">

                <i class="fa-solid fa-burger"></i>

                <div class="feature-text">
                    <h3>FOOD CHALLENGE</h3>
                    <p>Earn Badges & Points</p>
                </div>

            </a>

        </section>

        <!-- TRENDING FOOD -->
        <section class="trending">

            <h2>
                <span>🔥</span>
                TRENDING FOOD
            </h2>

            <div class="food-container">

                <?php foreach ($foods as $food): ?>

                    <div class="food-card">

                        <img src="<?= $food['image']; ?>" 
                            alt="<?= $food['name']; ?>">
                        <div class="food-info">

                            <h3>
                                <?php echo htmlspecialchars($food['name']); ?>
                            </h3>

                            <div class="rating">
                                <i class="fa-solid fa-star"></i>

                                <span>
                                    <?php echo htmlspecialchars($food['rating']); ?>
                                </span>
                            </div>

                        </div>

                    </div>

                <?php endforeach; ?>

            </div>

        </section>

    </div>

</body>
</html>
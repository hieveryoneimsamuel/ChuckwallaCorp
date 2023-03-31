<head>
    <title>
        <?php echo $title ?>
    </title>
    <meta charset="UTF-8">
    <meta name="author" content="Samuel Chamberlain, Elena Wolvington, Chloe Burke">
    <meta name="description" content="Chuckwalla Corp M1">
    <!-- <?php echo Asset::css($css) ?> putting this here has no effect -->
    <?php echo Asset::css($css) ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,400;0,700;1,400&family=Rubik:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <h1 id="header-content"> Chuckwalla <span style='color: #F19149;'>Corp</span></h1>
        <img src="https://cs.colostate.edu:4444/~ewolving/m1/assets/img/ChuckwallaCorp.png" alt="Chuckwalla Logo">
    </header>

    <div class="links">
        <nav>
            <ol>
                <li><a href="https://cs.colostate.edu:4444/~ewolving/m1/index/company/index">HOME</a></li>
                <li><a href="https://cs.colostate.edu:4444/~ewolving/m1/index/company/colors.php">COLORS</a></li>
                <li><a href="https://cs.colostate.edu:4444/~ewolving/m1/index/company/about.php">ABOUT</a></li>
                <li><a href="https://en.wikipedia.org/wiki/Chuckwalla" alt="wikipedia page">CHUCKWALLA INFO</a></li>
            </ol> 
        </nav>
    </div>

    <main id="content">
        <?php echo "<h2>$title</h2>"; ?>

        <?php echo $content; ?>
    </main>

    <footer>
        <p>Chuckwalla Corporation. 2023</p>   
    </footer>
</body>
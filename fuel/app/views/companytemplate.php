<head>
    <title>
        <?php echo $title ?>
    </title>
    <meta charset="UTF-8">
    <meta name="author" content="Samuel Chamberlain, Elena Wolvington, Chloe Burke, Alex Glimco, Cassidy Roberts">
    <meta name="description" content="Chuckwalla Corp M2">
    
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,400;0,700;1,400&family=Rubik:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- <?php echo Asset::css($css) ?> putting this here has no effect -->
    <?php echo Asset::css($css) ?>
    <?php echo Asset::js($js) ?>
</head>

<body>
    <header>
        <h1 id="header-content"> Chuckwalla <span style='color: #F19149;'>Corp</span></h1>
        <img src="https://cs.colostate.edu:4444/~cburke10/m2/assets/img/ChuckwallaCorp.png" alt="Chuckwalla Logo">
    </header>

    <div class="links">
        <nav>
            <ol>
                <li><a href="https://cs.colostate.edu:4444/~stchambe/m2/index/company/index">HOME</a></li>
                <li><a href="https://cs.colostate.edu:4444/~stchambe/m2/index/company/colors">COLORS</a></li>
                <li><a href="https://cs.colostate.edu:4444/~stchambe/m2/index/company/about">ABOUT</a></li>
                <li><a href="https://en.wikipedia.org/wiki/Chuckwalla" alt="wikipedia page">CHUCKWALLA INFO</a></li>
            </ol> 
        </nav>
    </div>

    <main id="content">
        <?php echo "<h2>$title</h2>"; ?>

        <?php echo $content; ?>
    </main>

    <footer>
        <p>&copy; Chuckwalla Corporation, 2023</p>   
    </footer>
</body>

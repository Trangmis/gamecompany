<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameCompany - All Games</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,400,700|Roboto:400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <!-- navigation -->        
    <nav class="nav__sticky">
		<input type="checkbox" class="nav--checkbox" id="nav-toggle">
		<label for="nav-toggle" class="nav--button">
			<span class="nav--icon">&nbsp;</span>
		</label>
        <div class="nav">
            <a href="../index.php" class="logo">LOGO</a>
            <ul id="nav-list">
                <li class=""><a href="../index.php">HOME</a></li>
                <li class="nav-dropdown">INFORMATION
                    <ul class="nav-dropdown--contents">
                        <li class=""><a href="../aboutus.php">About Us</a></li>
                        <li class=""><a href="#">Statistics</a></li>
                    </ul>
                </li>
                <li class="nav-current"><a href="#">GAME STORE</a></li>
                <li class=""><a href="../register.php">REGISTER</a></li>
                <li class=""><a href="../signin.php">SIGN IN</a></li>
                <li class=""><a href="../premiummember.php">START TRIAL</a></li>
            </ul>
        </div>
    </nav>

    <main>
        <!--dashboard-->
        <section class="dashboard">
            <div class="container">                
                <!-- left-nav -->
                <nav class="left-nav">
                    <div class="left-nav--title"><h3>GAME STORE</h3></div>
                    <ul>
                        <li class=""><a href="latestgame.php">Latest Game</a></li>
                        <li class=""><a href="topselling.php">Top Selling Games</a></li>
                        <li class="left-nav--active"><a href="#">All Games</a></li>
                    </ul>
                </nav>
              <!-- dynamic display area -->
                <div class="display">
                    <div class="container-box">
                        <div class="row">
                            <div class="row-item">
                                <div class="game-card">forest game</div>
                                <button class="btn btn--viewinfo">View Info</button>
                                </div>
                                <div class="row-item">
                                    <div class="game-card">city game</div>
                                <button class="btn btn--viewinfo">View Info</button>
                                </div>
                                <div class="row-item">
                                    <div class="game-card">forest game 2</div>
                                <button class="btn btn--viewinfo">View Info</button>
                                </div>
                                <div class="row-item">
                                    <div class="game-card">war game</div>
                                <button class="btn btn--viewinfo">View Info</button>
                                </div>
                                <div class="row-item">
                                    <div class="game-card">war game 2</div>
                                <button class="btn btn--viewinfo">View Info</button>
                                </div>
                                <div class="row-item">
                                    <div class="game-card">war game 3</div>
                                <button class="btn btn--viewinfo">View Info</button>
                                </div>
                                <div class="row-item">
                                    <div class="game-card">war game 4</div>
                                <button class="btn btn--viewinfo">View Info</button>
                                </div>
                                <div class="row-item">
                                    <div class="game-card">peace game</div>
                                <button class="btn btn--viewinfo">View Info</button>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="row container">
            <div class="row-item">
                <ul class="footer-list">
                    <li class="footer-title">THE TEAM</li>
                    <li class="footer-contents">
                        <ul class="footer-contents--item">
                            <li>Team Member 1</li>
                            <li>Team Member 2</li>
                            <li>Team Member 3</li>
                            <li>Team Member 4</li>
                            <li>Team Member 5</li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="row-item">
                <ul class="footer-list">
                    <li class="footer-title">SERVICES</li>
                    <li class="footer-contents">
                        <ul class="footer-contents--item">
                            <li><a href="allgames.php">Game Store</a></li>
                            <li><a href="../premiummember.php">Memberships</a></li>
                            <li><a href="latestgame.php">Latest Game</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="row-item">
                <ul class="footer-list">
                    <li class="footer-title">INFORMATION</li>
                    <li class="footer-contents">
                        <ul class="footer-contents--item">
                            <li><a href="#">Sales Statistics</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="../aboutus.php">About Us</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="row-item">
                <ul class="footer-list">
                    <li class="footer-title">ACCOUNT</li>
                    <li class="footer-contents">
                        <ul class="footer-contents--item">
                            <li><a href="../register.php">Register</a></li>
                            <li><a href="../signin.php">Sign In</a></li>
                            <li><a href="../mydashboard/account.php">Account info</a></li>
                            <li><a href="../mydashboard/leaderboard.php">Leaderboard</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="row-item">
                <div class="logo footer-logo">&copy;GameCompany</div>
            </div>
        </div>
    </footer>
</body>
</html>

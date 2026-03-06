<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="wrapper">
        <main class="main-content">
            <!-- Left Side Mockup (hidden on small screens) -->
            <div class="phones-container">
                <img src="https://static.cdninstagram.com/images/instagram/xig/homepage/phones/home-phones.png?__makehaste_cache_breaker=HOgRclNOosk"
                    alt="Phones" class="phones-bg">
                <div class="screenshot-container">
                    <img src="https://static.cdninstagram.com/images/instagram/xig/homepage/screenshots/screenshot1.png?__makehaste_cache_breaker=HOgRclNOosk"
                        alt="Screenshot" class="screenshot active">
                    <img src="https://static.cdninstagram.com/images/instagram/xig/homepage/screenshots/screenshot2.png?__makehaste_cache_breaker=HOgRclNOosk"
                        alt="Screenshot" class="screenshot">
                    <img src="https://static.cdninstagram.com/images/instagram/xig/homepage/screenshots/screenshot3.png?__makehaste_cache_breaker=HOgRclNOosk"
                        alt="Screenshot" class="screenshot">
                    <img src="https://static.cdninstagram.com/images/instagram/xig/homepage/screenshots/screenshot4.png?__makehaste_cache_breaker=HOgRclNOosk"
                        alt="Screenshot" class="screenshot">
                </div>
            </div>

            <!-- Right Side Login Box -->
            <div class="right-column">
                <div class="card login-card">
                    <div class="logo-container">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2a/Instagram_logo.svg/2880px-Instagram_logo.svg.png"
                            alt="Instagram" class="logo">
                    </div>

                    <form id="login-form">
                        <div class="input-wrapper">
                            <input type="text" id="username" name="username"
                                aria-label="Phone number, username, or email" required>
                            <label for="username" class="input-label">Phone number, username, or email</label>
                        </div>

                        <div class="input-wrapper">
                            <input type="password" id="password" name="password" aria-label="Password" required>
                            <label for="password" class="input-label">Password</label>
                            <button type="button" class="show-password" id="show-password-btn">Show</button>
                        </div>

                        <button type="submit" class="login-btn" id="login-btn" disabled>Log in</button>

                        <div class="divider">
                            <div class="line"></div>
                            <div class="or">OR</div>
                            <div class="line"></div>
                        </div>

                        <a href="#" class="fb-login">
                            <span class="fb-icon"></span>
                            <span class="fb-text">Log in with Facebook</span>
                        </a>

                        <a href="#" class="forgot-password">Forgot password?</a>
                    </form>
                </div>

                <div class="card signup-card">
                    <p>Don't have an account? <a href="signup.php" class="signup-link">Sign up</a></p>
                </div>

                <div class="get-app-container">
                    <p>Get the app.</p>
                    <div class="app-store-badges">
                        <a href="#" class="badge"><img alt="Get it on Google Play"
                                src="https://static.cdninstagram.com/rsrc.php/v3/yt/r/Yfc020c87j0.png"></a>
                        <a href="#" class="badge"><img alt="Get it from Microsoft"
                                src="https://static.cdninstagram.com/rsrc.php/v3/yz/r/c5Rp7Ym-Klz.png"></a>
                    </div>
                </div>
            </div>
        </main>

        <footer>
            <div class="footer-links">
                <a href="#">Meta</a>
                <a href="#">About</a>
                <a href="#">Blog</a>
                <a href="#">Jobs</a>
                <a href="#">Help</a>
                <a href="#">API</a>
                <a href="#">Privacy</a>
                <a href="#">Terms</a>
                <a href="#">Locations</a>
                <a href="#">Instagram Lite</a>
                <a href="#">Threads</a>
                <a href="#">Contact Uploading & Non-Users</a>
                <a href="#">Meta Verified</a>
            </div>
            <div class="footer-bottom">
                <select aria-label="Switch Display Language">
                    <option value="en">English</option>
                    <option value="es">Español</option>
                    <option value="fr">Français</option>
                </select>
                <span>© 2024 Instagram from Meta</span>
            </div>
        </footer>
    </div>
    <script src="script.js"></script>
</body>

</html>
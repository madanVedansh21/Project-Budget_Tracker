<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="/vite.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Project-Budget_Tracker - Take Control of Your Finances</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
</head>

<body>
    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="logo">
                <h2>Budget<span>Tracker</span></h2>
            </div>
            <nav class="nav">
                <ul class="nav-list">
                    <li><a href="#features" class="nav-link">Features</a></li>
                    <li><a href="#about" class="nav-link">About</a></li>
                    <li><a href="#contact" class="nav-link">Contact</a></li>
                </ul>
            </nav>
            <div class="mobile-nav-toggle">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="container">
            <div class="hero-content">
                <h1 class="fade-in">Track Your Budget, Take Control of Your Finances</h1>
                <p class="fade-in delay-1">A simple yet powerful tool to monitor your spending, track your savings, and
                    achieve your financial goals.</p>
                <a href="#signup" class="btn btn-primary fade-in delay-2">Get Started</a>
            </div>
            <div class="hero-image fade-in delay-3">
                <div class="dashboard-preview"></div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features" id="features">
        <div class="container">
            <h2 class="section-title">Powerful Features</h2>
            <p class="section-description">Everything you need to manage your finances effectively</p>

            <div class="features-grid">
                <div class="feature-card slide-up">
                    <div class="feature-icon transactions-icon"></div>
                    <h3>Add/Delete Transactions</h3>
                    <p>Easily record your income and expenses with just a few clicks.</p>
                </div>

                <div class="feature-card slide-up delay-1">
                    <div class="feature-icon categories-icon"></div>
                    <h3>Categorize Transactions</h3>
                    <p>Organize your spending with customizable categories for better insights.</p>
                </div>

                <div class="feature-card slide-up delay-2">
                    <div class="feature-icon insights-icon"></div>
                    <h3>Real-time Insights</h3>
                    <p>Get instant visualization of your spending patterns and financial health.</p>
                </div>

                <div class="feature-card slide-up delay-3">
                    <div class="feature-icon calendar-icon"></div>
                    <h3>Date-wise Tracking</h3>
                    <p>View your financial history chronologically to spot trends over time.</p>
                </div>

                <div class="feature-card slide-up delay-4">
                    <div class="feature-icon storage-icon"></div>
                    <h3>Data Persistence</h3>
                    <p>Your data is securely stored locally, so you never lose your financial records.</p>
                </div>

                <div class="feature-card slide-up delay-5">
                    <div class="feature-icon design-icon"></div>
                    <h3>Clean UI</h3>
                    <p>Enjoy a beautiful, intuitive interface that makes budget tracking a pleasure.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about" id="about">
        <div class="container">
            <div class="about-content fade-in">
                <h2 class="section-title">About Budget Tracker</h2>
                <p>Budget Tracker is designed to help you gain clarity and control over your personal finances. Whether
                    you're saving for a big purchase, trying to reduce debt, or simply want to be more mindful of your
                    spending, our app provides the tools you need to succeed.</p>
                <p>With an intuitive interface and powerful features, Budget Tracker makes it easy to track your income
                    and expenses, categorize your transactions, and visualize your financial health in real-time.</p>
            </div>
            <div class="about-image fade-in delay-2">
                <div class="app-mockup"></div>
            </div>
        </div>
    </section>

    <!-- Sign Up Section -->
    <section class="signup" id="signup">
        <div class="container">
            <h2 class="section-title">Ready to Take Control?</h2>
            <p class="section-description">Start your journey to financial freedom today</p>

            <form class="signup-form fade-in">
                <div class="form-group">
                    <input type="text" id="name" placeholder="Your Name" required>
                </div>
                <div class="form-group">
                    <input type="email" id="email" placeholder="Your Email" required>
                </div>
                <button type="submit" class="btn btn-primary">Create Free Account</button>
            </form>

            <p class="privacy-note fade-in delay-1">We respect your privacy and will never share your information.</p>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer" id="contact">
        <div class="container">
            <div class="footer-content">
                <div class="footer-logo">
                    <h2>Budget<span>Tracker</span></h2>
                    <p>Take control of your finances</p>
                </div>

                <div class="footer-links">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#features">Features</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#signup">Sign Up</a></li>
                    </ul>
                </div>

                <div class="footer-contact">
                    <h3>Contact Us</h3>
                    <p>Email: bt24cse021@iiitn.ac.in </p>
                    <p>Phone: (+91) 87350 47450 </p>
                </div>
            </div>
        </div>
    </footer>

    <script type="module" src="js/main.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css"/>
    <title>Project PHP</title>
</head>
<body>
    <section class="main">
        <nav>
            <a href=# class="logo">
                <h1>Klaysus</h1>
            </a>

            <ul>
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#">Features</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
        <div class="main-heading">
            <h1>Create Prespectives With Virtual Reality</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio eaque sed quasi sequi culpa?</p>
            <a class="main-btn" href="#">Contact</a>
        </div>
    </section>

    <section class="features">
        <div class="feature-container">
            <div class="feature-box">
                <div class="f-img">
                    <img alt="" src="images/info-icon1.png"/>
                </div>
                <div class="f-text">
                    <h4>Web Development</h4>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <a href="#" class="main-btn">Check</a>
                </div>
            </div>

            <div class="feature-box">
                <div class="f-img">
                    <img alt="" src="images/info-icon2.png"/>
                </div>
                <div class="f-text">
                    <h4>Software Development</h4>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <a href="#" class="main-btn">Check</a>
                </div>
            </div>

            <div class="feature-box">
                <div class="f-img">
                    <img alt="" src="images/info-icon3.png"/>
                </div>
                <div class="f-text">
                    <h4>App Development</h4>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <a href="#" class="main-btn">Check</a>
                </div>
            </div>
        </div>
    </section>

    <section class="about">
        <div class="about-img">
            <img alt="" src="images/About.jpg">
        </div>
        <div class="about-text">
            <h2>Start Tracking Your Statistics</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas libero officia, nesciunt minus iste 
                sapiente facere recusandae! Exercitationem rem impedit illum, nobis ex debitis esse.</p>
            <button class="main-btn" href="#">Read More</button>
        </div>
    </section>

    <section class="contact">
        <div class="contact-heading">
            <h1>Contact Us</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
        <form action="userinformation.php" method="post">
            <input type="text" name="user" placeholder="Your Full Name"/>
            <input type="email" name="email" placeholder="Your E-mail"/>
            <textarea name="message" placeholder="Type Your Message Here........"></textarea>
            <button class="main-btn contact-btn" type="submit">Continue</button>
        </form>
    </section>
    
</body>
</html>
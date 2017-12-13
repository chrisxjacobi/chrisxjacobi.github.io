<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="resources/css/style.css">
    <link rel="stylesheet" type="text/css" href="resources/css/queries.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500" rel="stylesheet">

    <title>Chris Jacobi | Web Developer</title>

    <link rel="apple-touch-icon" sizes="180x180" href="resources/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="resources/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="resources/favicons/favicon-16x16.png">
    <link rel="manifest" href="resources/favicons/manifest.json">
    <link rel="mask-icon" href="resources/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="resources/favicons/favicon.ico">
    <meta name="msapplication-config" content="resources/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

</head>

<body>

    <!--navigation-->
    <nav class="nav">
        <ul class="main-nav">
            <li><a href="index.html#projects">projects</a></li>
            <li><a href="index.html#about">about</a></li>
            <li><a href="#contact">contact</a></li>
        </ul>
        <ul class="social-links">
            <li><a href="https://github.com/chrisxjacobi"><i class="fa fa-github-alt" aria-hidden="true"></i></a></li>
            <li><a href="https://www.linkedin.com/in/chrisxjacobi/"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            <li><a href="contact.html"><i class="fa fa-envelope-open-o" aria-hidden="true"></i></a></li>
        </ul>
    </nav>

    <!--header/intro container-->
    <div class="container header">
        <h2 id="name">Chris Jacobi</h2>

        <div class="jumbotron">
            <p id="dev">Front-end web developer in Austin, TX</p>
            <p id="after">Available for full-time and freelance opportunities</p>
        </div>
    </div>

    <section class="section-contact" id="contact">

        <div class="form-box" id="form">
            <div class="row">
                <h2>We're happy to hear from you</h2>
            </div>

            <div class="row">
                <form method="post" action="mailer.php" class="contact-form">
                    <div class="row">

                        <?php 
                        
                    if ($_GET['success'] == 1) {
                        echo "<div class=\"form-messages success\">
                            Thank you! Your message has been sent
                        </div>"
                    }
                        
                    if ($_GET['success'] == -1) {
                        echo "<div class=\"form-messages error\">
                            Oops! Try again!
                        </div>"
                    }
                            
                        ?>

                        <div class="col span-1-of-3">
                            <label for="name">Name</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="text" name="name" id="name" placeholder="Your name" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="email">Email</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="email" name="email" id="email" placeholder="Your email" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="find-us">How did you find us?</label>
                        </div>
                        <div class="col span-2-of-3">
                            <select name="find-us" id="find-us">
                            <option value="friends" selected>Friends</option>
                            <option value="search">Search engine</option>
                            <option value="ad">Advertisement</option>
                            <option value="other">Other</option>
                        </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>Newsletter?</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="checkbox" name="news" id="news" checked>Yes, please
                        </div>
                    </div>

                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>Drop us a line</label>
                        </div>
                        <div class="col span-2-of-3">
                            <textarea name="message" placeholder="Your message"></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>&nbsp;</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="submit" value="Send it!">
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </section>


    <!--footer-->

    <div class="footer navbar-fixed-bottom">
        <ul>
            <li><a href='#'><i class="fa fa-github-alt " aria-hidden="true "></i></a></li>
            <li><a href='#'><i class="fa fa-linkedin " aria-hidden="true "></i></a></li>
            <li><a href='#'><i class="fa fa-envelope-open-o " aria-hidden="true "></i></a></li>
        </ul>
        <p>&copy; 2016 chris jacobi</p>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="vendors/js/jquery.waypoints.min.js"></script>
    <script src="resources/js/app.js"></script>
</body>

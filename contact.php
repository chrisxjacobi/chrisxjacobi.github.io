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

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="well well-sm">
                    <form class="form-horizontal" action="" method="post">
                        <fieldset>
                            <legend class="text-center">get in touch</legend>

                            <!-- Name input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="name">name</label>
                                <div class="col-md-9">
                                    <input id="name-contact" name="name" type="text" class="form-control">
                                </div>
                            </div>

                            <!-- Email input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="email">email</label>
                                <div class="col-md-9">
                                    <input id="email" name="email" type="text" class="form-control">
                                </div>
                            </div>

                            <!-- Message body -->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="message">message</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" id="message" name="message" rows="5"></textarea>
                                </div>
                            </div>

                            <!-- Form actions -->
                            <div class="form-group">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn">submit</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
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
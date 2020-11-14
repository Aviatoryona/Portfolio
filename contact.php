<!DOCTYPE html>
<html>
    <?php
    session_start();
    if (!isset($_SESSION['location'])) {
        header("location:index.php");
    }
    $_SESSION['appname'] = "Contact";
    include './header.php';
    ?>

    <body>
        <div id="top"></div>
        <?php
        include './section1.php';
        ?>
        <section>
            <div class="cover">
                <div id="main-slider" class="flexslider overlay">
                    <ul class="slides">
                        <li>
                            <img src="img/header-featured5.jpg" class="img-responsive center-block">
                            <div class="flex-caption">
                                <h3>Get In Touch</h3>
                                <p>Stay connect with me and follow the updates.</p>
                            </div>
                        </li>
                        <li>
                            <img src="img/header-featured9.jpg" class="img-responsive center-block">
                            <div class="flex-caption">
                                <h3>Let's Play Around</h3>
                                <p>Call me and hang out with my friends will be awesome.</p>
                            </div>
                        </li>
                        <li>
                            <img src="img/header-featured8.jpg" class="img-responsive center-block">
                            <div class="flex-caption">
                                <h3>Buy Me a Coffee</h3>
                                <p>We love coffee, let the stress go and take a break for a moment yeah.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="container contact">
                <div class="row">
                    <div class="col-md-6">
                        <header>
                            <h4>MAIL ME</h4>
                            <h1>FILL THE FORM</h1>
                            <p class="mbmd">Fill the name and full contact so we can respond your feedback and improve the website soon.</p>
                        </header>
                        <form action="404.php" method="post">
                            <div class="form-group">
                                <label class="control-label" for="feedback-name">Full Name</label>
                                <input type="text" name="feedback-name" id="feedback-name" class="form-control" placeholder="Enter your name" />
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="feedback-email">Email Address</label>
                                <input type="text" name="feedback-email" id="feedback-email" class="form-control" placeholder="Enter your email" />
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="feedback-message">Message</label>
                                <textarea name="feedback-message" rows="5" class="form-control" placeholder="Enter your name" id="feedback-message"></textarea>
                            </div>
                            <div class="form-group text-right">
                                <button type="submit" class="btn btn-invert">SUBMIT FEEDBACK</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <header>
                            <h4>CONTACT ME</h4>
                            <h1>GET IN TOUCH</h1>
                        </header>

                        <h4><?php echo $_SESSION['user']; ?></h4>
                        <p>I'm a software engineer ready to support for your business solutions</p>

                        <ul class="list-unstyled contact-list">
                            <li><strong>Email </strong> <a href="mailto:<?php echo $_SESSION['email']; ?>"><?php echo $_SESSION['email']; ?></a></li>
                            <li><strong>Telephone </strong> <a href="tel:<?php echo $_SESSION['contact']; ?>"><?php echo $_SESSION['contact']; ?></a></li>
                            <li><strong>Address </strong> <?php echo $_SESSION['address']; ?></li>
                        </ul>

                        <!--                        <h4>Sketch Project Studio</h4>
                                                <p class="text-muted">Game Developer Studio</p>
                                                <p>Sketch Project is a game developer currently based in <?php //echo $_SESSION['location'];   ?>, we build high quality
                                                    entertainment and serious game. This startup founded by <?php //echo $_SESSION['user'];   ?> in his spare time.
                                                    We hope Sketch Project can stand along professional developer in the world. If you interest to build games, please get in touch with us.
                                                </p>-->

                        <ul class="list-inline">
                            <li><a href="index.php">About</a></li>
                            <li><a href="data/">Resume</a></li>
                            <!--                            <li><a href="">Blog</a></li>-->
                            <li><a href="hire.php">Hire Me</a></li>
                            <li><a href="faq.php">F.A.Q</a></li>
                        </ul>

                        <br>
                        <p class="hidden-xs mbxs">&copy; Copyright 2015 <?php echo $_SESSION['user']; ?> All rights reserved.</p>
                    </div>
                </div>
            </div>
        </section>

        <?php
        include './footer.php';
        ?>
    </body>
</html>
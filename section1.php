<section id="header1" style="background-color: white;display: none">
    <div class="container">
        <div class="mainmenu_wrap">
            <nav class="navbar">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h1 class="logo">
                        <a class="navbar-brand" href="index.php">
                            <img src="img/logo2.png" alt="MYK's Logo"/>
                        </a>
                        <?php echo $_SESSION['user']; ?>
                    </h1>
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav sf-menu responsive-menu superfish">
                        <li class="active"><a href="#about">About</a></li>
                        <li><a href="#education">Education</a></li>
                        <li><a href="#experience">Experience</a></li>
                        <li><a href="#skill">Skill</a></li>
                        <li><a href="#portfolio">Portfolio</a></li>
                        <li class="dropdown">
                            <a href="#">Pages</a>
                            <ul class="nav dropdown-menu">
                                <li><a href="hire.php">Hire Me</a></li>
                                <!--                                <li><a href="#">Blog</a></li>-->
                                <li><a href="faq.php">F.A.Q</a></li>
                                <li><a href="contact.php">Contact</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</section>

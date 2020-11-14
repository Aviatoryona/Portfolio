<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <?php
    $_SESSION['appname'] = "Home";
    $_SESSION['user'] = "Yonathaniel K";
    $_SESSION['email'] = "aviatoryona67@gmail.com";
    $_SESSION['contact'] = "+254711268164";
    $_SESSION['contact2'] = "+254701953920";
    $_SESSION['address'] = "166 80306 Mgange, Kenya";
    $_SESSION['location'] = "Mombasa, Kenya";
    include './header.php';
    ?>

    <body oncontextmenu="return false">
        <div id="top"></div>
        <?php
        include './section1.php';
        ?>

        <section>
            <div class="cover">
                <div id="main-slider" class="flexslider featured">
                    <ul class="slides">
                        <li>
                            <img src="img/header-featured11.jpg" class="img-responsive center-block">
                        </li>
                        <li>
                            <img src="img/header-featured3.jpg" class="img-responsive center-block">
                        </li>
                        <li>
                            <img src="img/header-featured12.jpg" class="img-responsive center-block">
                        </li>
                    </ul>
                </div>
                <div class="profile">
                    <div class="avatar">
                        <img src="img/avatar.jpg">
                    </div>
                    <p class="name"><?php echo $_SESSION['user']; ?><span class="hidden-xs"> | </span><span class="role">Software Developer</span>
                    </p>
                </div>
            </div>
            <div class="container cv">
                <div class="row">
                    <div class="col-md-3 hidden-xs hidden-sm">
                        <ul id="mainmenu" class="list-unstyled cv-nav">
                            <li class="active"><a href="#about">About</a></li>
                            <li><a href="#personal">Personal</a></li>
                            <li><a href="#education">Education</a></li>
                            <li><a href="#experience">Experience</a></li>
                            <li><a href="#skill">Skill</a></li>
                            <li><a href="#portfolio">Portfolio</a></li>
                            <li><a href="#download">Download</a></li>
                        </ul>
                    </div>
                    <div class="col-md-9">
                        <div class="about">
                            <h1 class="greeting"><strong>Hello</strong> People</h1>
                            <p>Hey, I am Mbogho Yonathaniel K <?= intval(date('Y')) - 1995 ?> years old, they call me Aviator, I'm an introvert engineer, founder and CEO of Concorde Software Solutions,a technological company based in Kenya and I have
                                come and live at Mombasa - Kenya, I like to draw, play games, sleep, screw
                                up people's life and build something awesome like application software. I practice everyday by the way.</p>
                            <p>Welcome to my personal website, here you can found my latest works, achievement, history, papers
                                and blog posts. Presently I am working as a freelancer.</p>
                            <div class="row">
                                <div class="col-md-7">
                                    <ul class="list-inline list-unstyled social">
                                        <li><a href="https://www.facebook.com/AviattorYonathaniel" target="_blank"
                                               class="link-facebook"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="https://www.twitter.com/aviatoryona" target="_blank"
                                               class="link-twitter"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="https://plus.google.com/+Aviatoryona" target="_blank"
                                               class="link-google"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="https://www.behance.net/aviatoryona" target="_blank"
                                               class="link-behance"><i class="fa fa-behance"></i></a></li>
                                        <li><a href="https://www.linkedin.com/in/yonathaniel-mbogho-a11499113" target="_blank"
                                               class="link-linkedin"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="https://www.github.com/Aviatoryona" target="_blank"
                                               class="link-github"><i class="fa fa-github-alt"></i></a></li>
                                    </ul>
                                </div>
                                <div class="col-md-5 hidden-xs">
                                    <p class="signature"><?php echo $_SESSION['user']; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="cv-detail">
                            <div class="resume">
                                <div class="resume-section">
                                    <h3 id="about">PERSONAL DETAIL</h3>
                                    <div class="activity">
                                        <ul class="list-unstyled list-border">
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-4">Name</div>
                                                    <div class="col-md-8 value">Mbogho K. Yonathaniel</div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-4">Day of Birthday</div>
                                                    <div class="col-md-8 value">19<sup>th</sup> May 1995</div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-4">Gender</div>
                                                    <div class="col-md-8 value">Male</div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-4">Nationality</div>
                                                    <div class="col-md-8 value">Kenyan</div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-4">Address</div>
                                                    <div class="col-md-8 value">166, 80306 Mgange Kenya
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-4">Contact</div>
                                                    <div class="col-md-8 value">
                                                        <a href="tel:+254711268164">+254711268164</a> /
                                                        <a href="tel:+254701953920">+254701953920</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-4">Email</div>
                                                    <a class="col-md-8 value" href="mailto:aviatoryona67@gmail.com">
                                                        aviatoryona67@gmail.com
                                                    </a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-4">Website</div>
                                                    <a class="col-md-8 value" href="https://www.linkedin.com/in/yonathaniel-mbogho-a11499113">https://www.linkedin.com/in/yonathaniel-mbogho-a11499113</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="resume-section">
                                    <h3 id="personal">PERSONAL PROFILE</h3>
                                    <p>
                                        I'm a software developer who has been freelancing for 2 years, Basically I am a calm
                                        and quite type of person. I am very passionate about my work. Moreover I am at
                                        very ease when working in a collaboration as team, and ready to be self learner. I
                                        always persistent and discipline. My weakness is public speaking, my communication
                                        skills which I am trying to improve day by day but I am working on it. It may be also
                                        positive sometimes. I love working with my passion about design and programming and been
                                        wanting to jump into it if there is an opportunity. Currently i’m focusing on learning
                                        user experience and design semantic & component as UX/UI designer That's all
                                        about me. Born in a famiy of seven, four sisters and 2 brothers. My father passed away in 2010 after short illness,my mother's name is Mrs.
                                        Janegrace she is a pensioner. That's all about my family. Thank you.
                                    </p>
                                </div>

                                <div class="resume-section">
                                    <h3 id="education">EDUCATION</h3>
                                    <div class="activity">
                                        <ul class="list-unstyled list-border">
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-7">
                                                        <p><strong>Bachelors Degree</strong></p>
                                                        <p>University of Kisii - Bsc Software Engineering</p>
                                                    </div>
                                                    <div class="col-md-5 text-right">
                                                        <p>2014 - 2018</p>
                                                        <p>Kisii, Kenya</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-7">
                                                        <p><strong>High School</strong></p>
                                                        <p>Wareng High School</p>
                                                    </div>
                                                    <div class="col-md-5 text-right">
                                                        <p>2011 - 2013</p>
                                                        <p>Eldoret, Kenya</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-7">
                                                        <p><strong>High School</strong></p>
                                                        <p>Mwakiwiwi Secondary School</p>
                                                    </div>
                                                    <div class="col-md-5 text-right">
                                                        <p>2010 - 2011</p>
                                                        <p>Mgange, Kenya</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-7">
                                                        <p><strong>Primary School</strong></p>
                                                        <p>Mwavunyu Primary School</p>
                                                    </div>
                                                    <div class="col-md-5 text-right">
                                                        <p>2001 - 2009</p>
                                                        <p>Mrughua, Kenya</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-7">
                                                        <p><strong>Other</strong></p>
                                                        <p>IBM Penetration Tester</p>
                                                    </div>
                                                    <div class="col-md-5 text-right">
                                                        <p>2016</p>
                                                        <p>Kisii, Kenya</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-7">
                                                        <p><strong>Online</strong></p>
                                                        <p>Banking, Electrical and Eletronics engineering<br/>
                                                            <a href="https//alison.com/">Alison</a></p>
                                                    </div>
                                                    <div class="col-md-5 text-right">
                                                        <p>2014</p>
                                                        <p>Eldoret, Kenya</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="resume-section">
                                    <h3 id="experience">EXPERIENCE</h3>
                                    <div class="activity">
                                        <ul class="list-unstyled list-border">
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-7">
                                                        <p><strong>Drivers Instructor Market</strong></p>
                                                        <p>Software Developer</p>
                                                    </div>
                                                    <div class="col-md-5 text-right">
                                                        <p>2019-2020</p>
                                                        <p>Web & Mobile developer</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-7">
                                                        <p><strong>Kenya Coast National Polytechnic</strong></p>
                                                        <p> Technician</p>
                                                    </div>
                                                    <div class="col-md-5 text-right">
                                                        <p>2018-2019</p>
                                                        <p>IT Technician</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-7">
                                                        <p><strong>Software Developer</strong></p>
                                                        <p>Android & Distributed systems development</p>
                                                    </div>
                                                    <div class="col-md-5 text-right">
                                                        <p>2016 - Now</p>
                                                        <p>software developer</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-7">
                                                        <p><strong>Insurance</strong></p>
                                                        <p>General Adjusters Kenya, Core Supervisor
                                                            (Insurance Group)</p>
                                                    </div>
                                                    <div class="col-md-5 text-right">
                                                        <p>2014-2015</p>
                                                        <p>Junior record keeper</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-7">
                                                        <p><strong>Sales Marketer</strong></p>
                                                        <p>Sales and Marketing. Door to door marketing
                                                            and selling.</p>
                                                    </div>
                                                    <div class="col-md-5 text-right">
                                                        <p>2013 - 2014</p>
                                                        <p>Sales and Marketing</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="resume-section">
                                    <h3 id="skill">SKILLS & ATTRIBUTES</h3>
                                    <div class="activity">
                                        <h4 class="skill-title">Programming</h4>
                                        <ul class="list-unstyled list-border">
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <p>Python</p>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <p>Django, Flask</p>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="skill-level text-right" data-skill="3"></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <p>Java</p>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <p>Spring, Hibernate & JPA, Java Android</p>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="skill-level text-right" data-skill="5"></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <p>PHP</p>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <p>Native, Laravel, Code Igniter</p>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="skill-level text-right" data-skill="4"></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <p>ASP</p>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <p>Native ASP.net Basic</p>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="skill-level text-right" data-skill="3"></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <p>Javascript</p>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <p>JQuery, NodeJS, AngularJS</p>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="skill-level text-right" data-skill="4"></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <p>Actionscript 3</p>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <p>AIR Native, Starling, Feathers</p>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="skill-level text-right" data-skill="2"></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <p>Front-end Web</p>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <p>LESS, SASS, Compass,Bootstrap, Foundation</p>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="skill-level text-right" data-skill="4"></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <p>Database</p>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <p>MySQL, MSSQL, PosgreSQL, MongoDB</p>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="skill-level text-right" data-skill="4"></div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>

                                        <h4 class="skill-title">Design & Animation</h4>
                                        <ul class="list-unstyled list-border">
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <p>Hand Drawing</p>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <p>Illustration, perspective, character</p>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="skill-level text-right" data-skill="2"></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <p>Adobe Photoshop</p>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <p>Image Manipulation, Retouching</p>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="skill-level text-right" data-skill="2"></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <p>Adobe Flash</p>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <p>Animation, presentation</p>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="skill-level text-right" data-skill="2"></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <p>Adobe Illustrator</p>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <p>Icon & character design, UI prototyping</p>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="skill-level text-right" data-skill="2"></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <p>Adobe After Effect</p>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <p>Basic compositing, product showcase</p>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="skill-level text-right" data-skill="1"></div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <h4 class="skill-title">Others</h4>
                                        <ul class="list-unstyled list-border">
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <p>Management</p>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <p>Trello, Agile, Scrum</p>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="skill-level text-right" data-skill="1"></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <p>English</p>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <p>Fluent</p>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="skill-level text-right" data-skill="5"></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <p>Networking</p>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <p>Share-Office networking</p>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="skill-level text-right" data-skill="4"></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <p>Operating System</p>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <p>Windows, Linux, Mac</p>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="skill-level text-right" data-skill="5"></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <p>Office Software</p>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <p>Word, Excel, Power Point</p>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="skill-level text-right" data-skill="5"></div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="resume-section">
                                    <h3 id="portfolio">PORTFOLIO</h3>
                                    <p>
                                        These are some of my projects, finished and ongoing. Give <a href="mailto:aviatoryona67@gmail.com">feedback</a> or <a href="tel:+254711268164">Call Me</a> :)
                                    </p>
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="portfolio">
                                                <div class="image-wrapper">
                                                    <img src="img/portfolio/screencapture-live-browserstack-dashboard-2019-09-11-17_27_36.png" alt="C4D"
                                                         class="img-responsive select-image-preview"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="portfolio">
                                                <div class="image-wrapper">
                                                    <img src="img/portfolio/screencapture-carfordrivingtest-dashboard-2019-09-19-19_25_17.png" alt="C4D Mobile"
                                                         class="img-responsive select-image-preview"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="portfolio">
                                                <div class="image-wrapper">
                                                    <img src="img/portfolio/screencapture-localhost-9190-car4drivingtest-admin-manage-index-2019-12-03-16_34_46.png" alt="aDMIN"
                                                         class="img-responsive select-image-preview"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="portfolio">
                                                <div class="image-wrapper">
                                                    <img src="img/portfolio/Screenshot_20200310-093911.png" alt="The Biz"
                                                         class="img-responsive select-image-preview"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="portfolio">
                                                <div class="image-wrapper">
                                                    <img src="img/portfolio/Screenshot_20200310-093941.png" alt="FESTA"
                                                         class="img-responsive select-image-preview"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="portfolio">
                                                <div class="image-wrapper">
                                                    <img src="img/portfolio/Screenshot_20200310-094041.png" alt="C4D fLUTTER"
                                                         class="img-responsive select-image-preview"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="portfolio">
                                                <div class="image-wrapper">
                                                    <img src="img/portfolio/Designs/screencapture-localhost-9190-car4drivingtest-dashboard-details-driving-course-2019-10-03-23_11_23.png" alt="The Biz"
                                                         class="img-responsive select-image-preview"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="portfolio">
                                                <div class="image-wrapper">
                                                    <img src="img/portfolio/Designs/screencapture-localhost-9190-car4drivingtest-dashboard-details-hire-car-2019-10-03-23_11_52.png" alt="FESTA"
                                                         class="img-responsive select-image-preview"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="portfolio">
                                                <div class="image-wrapper">
                                                    <img src="img/portfolio/Designs/screencapture-localhost-9190-car4drivingtest-dashboard-profile-2019-10-03-23_13_13.png" alt="C4D fLUTTER"
                                                         class="img-responsive select-image-preview"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="portfolio">
                                                <div class="image-wrapper">
                                                    <img src="img/portfolio/c4dlearner/_20191216_174710.png" alt="The Biz"
                                                         class="img-responsive select-image-preview"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="portfolio">
                                                <div class="image-wrapper">
                                                    <img src="img/portfolio/c4dlearner/_20191216_174810.png" alt="FESTA"
                                                         class="img-responsive select-image-preview"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="portfolio">
                                                <div class="image-wrapper">
                                                    <img src="img/portfolio/c4dlearner/_20191216_175720.png" alt="C4D fLUTTER"
                                                         class="img-responsive select-image-preview"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="portfolio">
                                                <div class="image-wrapper">
                                                    <img src="img/portfolio/Inst C4D/_20191216_004323.png" alt="The Biz"
                                                         class="img-responsive select-image-preview"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="portfolio">
                                                <div class="image-wrapper">
                                                    <img src="img/portfolio/Inst C4D/_20191216_004407.png" alt="FESTA"
                                                         class="img-responsive select-image-preview"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="portfolio">
                                                <div class="image-wrapper">
                                                    <img src="img/portfolio/Inst C4D/_20191216_004809.png" alt="C4D fLUTTER"
                                                         class="img-responsive select-image-preview"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="portfolio">
                                                <div class="image-wrapper">
                                                    <img src="img/portfolio/screencapture-carfordrivingtest-2020-01-22-08_19_13.png" alt="More"
                                                         class="img-responsive select-image-preview"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="portfolio">
                                                <div class="image-wrapper">
                                                    <img src="img/more.jpg" alt="More"
                                                         class="img-responsive select-image-preview"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <a href="data/Yonathaniel-Mbogho-Resume.pdf" id="download" class="btn btn-invert">
                                    DOWNLOAD RESUME
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
        include './footer.php';
        ?>

    </body>

    <!-- Mirrored from www.angga-ari.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 May 2018 10:37:45 GMT -->
</html>

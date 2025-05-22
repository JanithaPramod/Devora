<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEVORA | Home</title>

    <link rel="stylesheet" href="home.css" />
    <link rel="stylesheet" href="scrollbar.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="devora 2.png" type="x-icon">

</head>

<body class="home-body">

    <?php

    include "header.php";

    ?>

    <section class="home-section ">

        <div class="carousel">
            <!-- list item -->
            <div class="list">
                <div class="item">
                    <img src="well.jpg">
                    <div class="content">
                        <div class="author">WELCOME TO,</div>
                        <div class="topic">DEVORA (PVT) LTD.</div>
                        <div class="title">Software Company</div>
                        <div class="des">
                            <!-- lorem 50 -->
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut sequi, rem magnam nesciunt minima placeat, itaque eum neque officiis unde, eaque optio ratione aliquid assumenda facere ab et quasi ducimus aut doloribus non numquam. Explicabo, laboriosam nisi reprehenderit tempora at laborum natus unde. Ut, exercitationem eum aperiam illo illum laudantium?
                        </div>
                        <div class="img"></div>
                    </div>
                </div>
                <div class="item">
                    <img src="two.png">
                    <div class="content">
                        <div class="author">DEVORA</div>
                        <div class="title">GATHERING</div>
                        <div class="topic">REQUIRENMENT</div>
                        <div class="des">
                            Requirement gathering is the first and most crucial phase of software development. It involves understanding the client's needs, business goals, and technical expectations to define clear project objectives. This process includes meetings, interviews, surveys, and documentation to ensure that the final software aligns with user needs. Effective requirement gathering helps prevent misunderstandings, scope creep, and costly changes later in development.
                        </div>

                    </div>
                </div>
                <div class="item">
                    <img src="three.png">
                    <div class="content">
                        <div class="author">DEVORA</div>
                        <div class="title">REQUIRENMENT</div>
                        <div class="topic">PROCESSING</div>
                        <div class="des">
                            Processing in a software company involves analysing gathered requirements, designing system architecture, coding, testing, debugging, and refining the software. This phase ensures functionality, efficiency, and reliability by following development methodologies. Proper processing minimizes errors, enhances performance, and ensures the final product meets client expectations and industry standards..
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="four.jpg">
                    <div class="content">
                        <div class="author">DEVORA</div>
                        <div class="title">FINAL PROJECT</div>
                        <div class="topic">HANDOVER</div>
                        <div class="des">
                            Processing involves analysing requirements, designing, coding, testing, and refining the software to ensure functionality and efficiency. After successful validation, the handover phase includes finalizing documentation, deploying the software, providing training if needed, and officially delivering it to the client. This ensures a smooth transition and client satisfaction
                        </div>

                    </div>
                </div>
            </div>
            <!-- list thumnail -->
            <div class="thumbnail">
                <div class="item">
                    <img src="well.jpg">
                    <div class="content">
                        <div class="title">
                            WELCOME
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="two.png">
                    <div class="content">
                        <div class="title">
                            GATHERING REQUIRENMENT
                        </div>

                    </div>
                </div>
                <div class="item">
                    <img src="three.png">
                    <div class="content">
                        <div class="title">
                            REQUIRENMENT PROCESSING
                        </div>

                    </div>
                </div>
                <div class="item">
                    <img src="four.jpg">
                    <div class="content">
                        <div class="title">
                            FINAL PROJECT HANDOVER
                        </div>

                    </div>
                </div>
            </div>
            <!-- next prev -->

            <div class="arrows">
                <button id="prev">
                    < </button>
                        <button id="next">></button>
            </div>
            <!-- time running -->
            <div class="time"></div>
        </div>

    </section>

    <section class="about">

        <div class="head-txt">

            <h1>Short <span>introduction</span></h1>

        </div>

        <div class="about-content">

            <div class="about-image">

                <img src="home-about.jpeg" />

            </div>

            <div class="about-txt">

                <p>

                    <span>At DEVORA</span>, we are passionate about harnessing the power of technology to drive innovation and deliver exceptional software solutions.
                    Founded with the mission to bridge the gap between businesses and cutting-edge technology, we specialize in custom software development,
                    digital transformation, and enterprise solutions tailored to meet the unique needs of our clients.
                    <br><br>
                    Our team of skilled developers, designers, and strategists work closely with clients to understand their challenges and provide innovative
                    solutions that not only address their immediate needs but also set them up for long-term success. Whether it’s creating dynamic web
                    applications, building seamless mobile experiences, or designing robust enterprise solutions, we pride ourselves on delivering high-quality,
                    scalable, and secure software products.
                    <br><br>
                    At DEVORA, we believe in collaboration, transparency, and continuous improvement. We empower businesses of all sizes by providing them with
                    the tools they need to stay ahead in an ever-evolving digital landscape. Our commitment to excellence and customer satisfaction drives
                    everything we do, ensuring that each project is a step toward transforming our clients' visions into reality.
                    <br><br>
                    Let DEVORA be your trusted partner in software development and innovation. Together, we can create technology solutions that propel your
                    business forward.

                </p>

                <button onclick="goAbout();"><span>Read more</span></button>

            </div>

        </div>

    </section>

    <section class="services">

        <div class="head-txt">

            <h1>Our <span>Services</span></h1>

        </div>

        <div class="services-content">

            <div class="card">

                <i class='bx bxs-store-alt i'></i>
                <h2>E-commerce Website</h2>

            </div>

            <div class="card">

                <i class='bx bx-male-female i'></i>
                <h2>Personal Website</h2>

            </div>

            <div class="card">

                <i class='bx bxs-user i'></i>
                <h2>Portfolio Website</h2>

            </div>

            <div class="card">

                <i class='bx bxl-blogger i'></i>
                <h2>Blogs</h2>

            </div>

            <div class="card">

                <i class='bx bx-briefcase i'></i>
                <h2>Business Website</h2>

            </div>

            <div class="card">

                <i class='bx bx-book-open i'></i>
                <h2>Education Websites</h2>

            </div>

        </div>

        <div class="all-services">

            <a href="loadServices.php"><button><span>See More</span></button></a>

        </div>

    </section>

    <section class="contact" id="contact">

        <div class="head-txt">

            <h1>Contact <span>Us</span></h1>

        </div>

        <div class="contact-content">

            <form action="#">

                <div class="input_box">
                    <input type="text" id="user" class="input-field" required>
                    <label for="user" class="label">Name...</label>
                    <i class="fa-regular fa-user"></i>
                </div>
                <div class="input_box">
                    <input type="email" id="pass" class="input-field" required>
                    <label for="pass" class="label">Email...</label>
                    <i class="fa-solid fa-envelope"></i>
                </div>
                <div class="input_box">
                    <input type="password" id="pass" class="input-field" required>
                    <label for="pass" class="label">Mobile Number...</label>
                    <i class="fa-solid fa-phone"></i>
                </div>
                <textarea placeholder="Message..." class="message"></textarea>
                <button type="submit"><span>Send</span></button>

            </form>

            <div class="contact-img">

                <img src="image/contact.jpg">

            </div>

        </div>

    </section>

    <?php

    include "footer.php";

    ?>

    <script src="slide.js"></script>
</body>

</html>

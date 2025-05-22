<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply For Employees | Devora</title>

    <link rel="stylesheet" href="apply.css">
    <link rel="stylesheet" href="scrollbar.css">
    <link rel="shortcut icon" href="image/devora 2.png" type="image/x-icon">

</head>

<body class="applybody">

    <?php

    include "header.php";

    ?>

   <div class="apply-main">

        <div class="head-apply">

            <h1>Apply for <span>Employees.</span></h1>

        </div>

        <div class="paragraph">

        Thank you for your interest in joining our team at Devora! We’re excited that you’re considering a career with us and are eager 
        to learn more about your skills, experience, and passion for innovation.

        <br><br>

        Our application process is designed to be simple and straightforward, ensuring that you can showcase your talents effectively. 
        Here’s what you can expect:

        <br><br>

        <ol>

            <li><span>Explore Opportunities:</span> Browse our open positions to find the role that best matches your expertise and career goals.</li>
            <br>
            <li><span>Submit Your Application:</span> Complete the online application form and upload your resume. Don’t forget to include a cover letter highlighting why you’re a great fit for our team! <br>
            <a href="https://drive.google.com/file/d/1SvtsMhEjYWoFm2q4Gdwtp9tXmTYt7xK3/view?usp=sharing">Download Application</a></li><br>
            <li><span>upload your completed PDF document to this E-mail. <a href="mailto:devorapvtltd@gmail.com">devorapvtltd@gmail.com</a> :</span> </li><br>
            <li><span>Interview Process:</span> If your application stands out, we’ll reach out to schedule an interview. This may include technical assessments, team interviews, or discussions with leadership.</li><br>
            <li><span>Offer and Onboarding:</span> Successful candidates will receive an offer to join our team. We’ll guide you through the onboarding process to ensure a smooth transition into your new role.</li>

        </ol>

        <br><br>

        <div style="text-align: center;">

        At Devora, we value creativity, collaboration, and a commitment to excellence. If you’re ready to make an impact in the software industry, we’d love to hear from you. 
        <br>Apply today and take the first step toward an exciting career with us!

        </div>

        <br>

        Devora is an equal opportunity employer. We celebrate diversity and are committed to creating an inclusive environment for all employees.

        </div>

   </div>

   <?php
   
        include "footer.php"

   ?>

    <script>
        document.addEventListener("contextmenu", function(e) {
            e.preventDefault(); // Disable right-click
        });

        document.addEventListener("keydown", function(e) {
            if (e.key === "F12" || (e.ctrlKey && e.shiftKey && e.key === "I") || (e.ctrlKey && e.key === "u") || (e.ctrlKey && e.key === "c")) {
                e.preventDefault(); // Disable Inspect Element & View Source
            }
        });
    </script>

</body>

</html>
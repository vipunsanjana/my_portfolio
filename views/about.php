<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
    <script src="https://unpkg.com/typed.js@2.0.15/dist/typed.umd.js"></script>
    <link rel="stylesheet" href="../styles/project.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
</head>
<body>
    <header class="header" style="background: rgba(10, 115, 13, 0.2);">
        <a href="" class="logo">Portfolio...Vipun Sanjana</a>
        <nav class="navbar">
            <a href="../" style="--i:1" class="active">Home</a>
            <a href="about.php" style="--i:2">About</a>
            <a href="skills.php" style="--i:3">Skills</a>
            <a href="project.php" style="--i:4">Projects</a>
            <a href="contact.php" style="--i:5">Contact</a>
        </nav>
    </header>
    <section class="about" id="about" style="margin-top: 100px;">
        <div class="about-img">

            <img src="../assets/new.png" alt="" srcset="" style="width: 600px; height: 900px; margin-top: 20px; animation-delay: 2s;
            
            @keyframes slideLeft{
    0%{
        opacity: 0;
        transform: translateX(100px);
        -webkit-transform: translateX(100px);
        -moz-transform: translateX(100px);
        -ms-transform: translateX(100px);
        -o-transform: translateX(100px);
    }
    100%{
        opacity: 1;
        transform: translateX(0px);
        -webkit-transform: translateX(0px);
        -moz-transform: translateX(0px);
        -ms-transform: translateX(0px);
        -o-transform: translateX(0px);
    }
}
            animation: slideLeft 2s ease forwards;
    -webkit-animation: slideLeft 2s ease forwards;" class="image" >
        </div>
        <div class="about-text">
            <h2>About <span>Me</span></h2>
            <h4>Software Engineer</h4>
            <p>I'm a software engineer with expertise in React, Node.js, Spring Boot, Java, Python, HTML, and CSS. <br>
                I pursued my undergraduate studies in Software Engineering at the University of Kelaniya. <br>
                Before that, I completed my A-levels in physical science at Sripale College, <br>
                Horana, achieving an A in Combined Maths, and B grades in Physics and Chemistry.
            </p>
            <a href="cv.pdf" download="cv.pdf" class="btn-box">Download CV</a>
            <!-- <button  class="btn-box" >Download CV</button> -->
        </div>
    </section>
    <div class="last-text">

        <p>&copy; Developerd by Vipun Sanjana for beter web <script>
            let date = new Date().getFullYear();;
            document.write(date);</script></p>
    </div>
</body>
</html>
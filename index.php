<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
    <script src="https://unpkg.com/typed.js@2.0.15/dist/typed.umd.js"></script>
</head>
<body>
    <header class="header" style="background: rgba(10, 115, 13, 0.2);">
        <a href="assets/nnnn.jpg" class="logo">Portfolio...Vipun Sanjana</a>
        <nav class="navbar">
            <a href="" style="--i:1" class="active">Home</a>
            <a href="views/about.php" style="--i:2">About</a>
            <a href="views/skills.php" style="--i:3">Skills</a>
            <a href="views/project.php" style="--i:4">Projects</a>
            <a href="views/contact.php" style="--i:5">Contact</a>
        </nav>
    </header>
    <section class="home">
        <div class="home-content">
            <h3>Hello, It's me</h3>
            <h1>Vipun Sanjana</h1>
            <h3>And I'm a <span class="text" id="text" style="color: rgb(165, 200, 52);"></span></h3>
            <p>As a dedicated software engineer, I thrive on crafting innovative solutions that bridge technology with real-world needs.
                With a passion for both front-end and back-end development.
                <br><br>Expertise extends to mobile app development and harnessing big data for insightful analysis. 
                I'm driven to shape the digital landscape with my code......
            </p>
            
            <div class="home-sci">
                <a href="https://www.facebook.com/profile.php?id=100093119705638&mibextid=ZbWKwL" style="--i:6"><i class="bx bxl-facebook"></i></a>
                <a href="https://instagram.com/sanjanavipun?utm_source=qr&igshid=MzNlNGNkZWQ4Mg==" style="--i:7"><i class="bx bxl-instagram"></i></a>
                <a href="https://wa.me/778780559" style="--i:8"><i class="bx bxl-whatsapp"></i></a>
                <a href="https://www.linkedin.com/in/vipun-sanjana-13a9911b1" style="--i:9"><i class="bx bxl-linkedin"></i></a>
                <a href="http://https://github.com/vipunsanjana" style="--i:10"><i class="bx bxl-github"></i></a>
            </div>
            
            <a href="views/about.php" class="btn-box">More About Me</a>
            
        </div>

        <div>
            <img src="assets/new.png" alt="" style="width: 600px; height: 750px; margin-top: 20px; margin-left: 10px;" class="image">
        </div>
        

        <span class="home-imgHover"></span>
    </section>

    <div class="last-text">

        <p>&copy; Developerd by Vipun Sanjana for beter web <script>
            let date = new Date().getFullYear();;
            document.write(date);</script></p>
    </div>

    <script src="controller/app.js"></script>
</body>
</html>
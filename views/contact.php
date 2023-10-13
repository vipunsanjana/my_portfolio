<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="../styles/contact.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
    <script src="https://unpkg.com/typed.js@2.0.15/dist/typed.umd.js"></script>
</head>
<body>
    <header class="header" style="background: rgba(10, 115, 13, 0.2);">
        <a href="#" class="logo">Portfolio...</a>
        <nav class="navbar">
            <a href="../" style="--i:1" class="active">Home</a>
            <a href="about.php" style="--i:2">About</a>
            <a href="skills.php" style="--i:3">Skills</a>
            <a href="project.php" style="--i:4">Projects</a>
            <a href="contact.php" style="--i:5">Contact</a>
        </nav>
    </header>
    <section class="contact">
        <div class="contact-text">
            <h2>Contact <span>Me</span></h2>
            <br><br>
            <h4>Let;s work Together</h4>
            <br><br>
            <p>"As a software engineer, I'm committed to building innovative solutions and enhancing user experiences through technology. <br>
                If you're interested in collaborating on exciting projects, have questions about my work, or would like to discuss potential opportunities, please don't hesitate to reach out.<br>
                Your ideas and feedback are invaluable, and I'm eager to connect with fellow professionals, clients, and enthusiasts. <br>
                Let's start a conversation today and explore how we can harness the power of software to achieve your goals."<br>
            </p>

            <div class="contact-list">
                <li><i class="bx bxs-send"></i>vipunsanjana34@gmail.com</li>
                <li><i class="bx bxs-phone"></i>077-8780559</li>
            </div>
            <div class="contact-icons">
                <a href="https://www.facebook.com/profile.php?id=100093119705638&mibextid=ZbWKwL"><i class="bx bxl-facebook-circle"></i></a>
                <a href="https://instagram.com/sanjanavipun?utm_source=qr&igshid=MzNlNGNkZWQ4Mg=="><i class="bx bxl-instagram"></i></a>
                <a href="https://wa.me/778780559"><i class="bx bxl-whatsapp"></i></a>
                <a href="https://www.linkedin.com/in/vipun-sanjana-13a9911b1"><i class="bx bxl-linkedin"></i></a>
                <a href="http://https://github.com/vipunsanjana"><i class="bx bxl-github"></i></a>
            </div>
        </div>

        <div class="contact-form">
            <form role="form" action="../controller/control.php" method="POST">
                <input type="text" placeholder="Enter Your Name" name="name1" value="<?php if(isset($_GET['name'])) echo $_GET['name'];?>" required>
                <input type="text" placeholder="Enter Your Phone Number" value="<?php if(isset($_GET['phone_number'])) echo $_GET['phone_number'];?>" name="phone_number" required>
                <input type="email" placeholder="Enter Your E-mail" value="<?php if(isset($_GET['email'])) echo $_GET['email'];?>" name="email" required>
                <input type="text" placeholder="Enter Your Subject" name="sub"  value="<?php if(isset($_GET['Sub'])) echo $_GET['Sub'];?>">
                <textarea name="message" id="" cols="40" rows="10" placeholder="Enter Your Message" value="<?php if(isset($_GET['message'])) echo $_GET['message'];?>" required></textarea>
                
                <button type="submit" class="send" name="register">Submit</button>
            </form>
        </div>
    </section>    
    <div class="last-text">

        <p>&copy; Developerd by Vipun Sanjana for beter web <script>
            let date = new Date().getFullYear();;
            document.write(date);</script>
        </p>
    </div>
</body>
</html>
<html>
<head>
    <title>Travel Guide</title>
</head>
<body background="Pics/Home.jpeg" style="background-size: cover; background-repeat: no-repeat;">
    <header style="background-color: #333; padding: 20px; text-align: center; color: #fff;">
        <h1 style="margin: 0;">Travel Guide</h1>
        <nav>
            <ul style="list-style: none; padding: 0; margin: 20px 0; text-align: center;">
                <li style="display: inline-block; margin: 0 10px;"><a href="index.html" style="color: #fff; text-decoration: none;">Home</a></li>
                <li style="display: inline-block; margin: 0 10px;"><a href="destination.html" style="color: #fff; text-decoration: none;">Destination</a></li>
                <li style="display: inline-block; margin: 0 10px;"><a href="tips.html" style="color: #fff; text-decoration: none;">Travel Tips</a></li>
                <li style="display: inline-block; margin: 0 10px;"><a href="gallery.html" style="color: #fff; text-decoration: none;">Gallery</a></li>
                <li style="display: inline-block; margin: 0 10px;"><a href="blog.html" style="color: #fff; text-decoration: none;">Blog</a></li>
                <li style="display: inline-block; margin: 0 10px;"><a href="contact.html" style="color: #fff; text-decoration: none;">Contact Us</a></li>
            </ul>
        </nav>
    </header>
    <main style="padding: 20px; padding-bottom: 60px;"> 
        <section id="map" style="display: flex; justify-content: center; align-items: center; margin-bottom: 40px;">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.0854103655795!2d144.9631578158325!3d-37.814107979751434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0xf577d7ae2f4534db!2sFederation%20Square!5e0!3m2!1sen!2sau!4v1602188344981!5m2!1sen!2sau"
                width="600"
                height="450"
                style="border: 0; width: 100%; height: 400px; border-radius: 8px;"
                allowfullscreen=""
                loading="lazy">
            </iframe>
        </section>

        <section id="contact-form" style="display: flex; justify-content: center; align-items: center; height: calc(100vh - 80px);"> <!-- Adjusted height to account for header and footer -->
            <div style="text-align: center;">
                <h2>Get in Touch With Us</h2>
                <form method="POST" style="display: inline-block; text-align: left;"> <!-- Added method="POST" -->
                    <label for="name" style="font-weight: bold;">Name:</label><br>
                    <input type="text" name="name" required style="width: 300px; margin-bottom: 10px; padding: 8px; border: 1px solid #ddd; border-radius: 4px; font-size: 16px;"><br><br>
                    <label for="email" style="font-weight: bold;">Email:</label><br>
                    <input type="email" name="email" required style="width: 300px; margin-bottom: 10px; padding: 8px; border: 1px solid #ddd; border-radius: 4px; font-size: 16px;"><br><br>
                    <label for="message" style="font-weight: bold;">Message:</label><br>
                    <textarea name="message" required style="width: 300px; height: 100px; margin-bottom: 10px; padding: 8px; border: 1px solid #ddd; border-radius: 4px; font-size: 16px;"></textarea><br><br>
                    <button type="submit" name="send" style="padding: 10px 20px; border: none; border-radius: 4px; background-color: #333; color: #fff; font-size: 16px; cursor: pointer;">Send</button>
                </form>
            </div>
        </section>
    </main>

    <footer style="background-color: #333; padding: 20px; text-align: center;">
        <p style="color: #fff; margin: 0; font-size: 14px;">&copy; Travel Guide. All rights reserved.</p>
        <div style="margin-top: 10px;">
            <a href="https://www.instagram.com" style="color: #fff; text-decoration: none; margin: 0 10px;">Instagram</a> |
            <a href="https://www.facebook.com" style="color: #fff; text-decoration: none; margin: 0 10px;">Facebook</a> |
            <a href="https://twitter.com" style="color: #fff; text-decoration: none; margin: 0 10px;">Twitter</a>
        </div>
    </footer>
</body>
</html>

<?php
if (isset($_POST["send"])) {  
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
   
    
    $c = mysqli_connect("localhost", "root", ""); 

   mysqli_select_db($c,"travel");
   
    $i = "INSERT INTO contact (user_name, mail_id, message_us) VALUES ('$name', '$email', '$message')";  


    $res = mysqli_query($c, $i);

    if ($res) {
        echo "<script>alert('Message Sent');</script>";
    } else {
        echo "<script>alert('Message not sent');</script>";
    }

    mysqli_close($c);
}
?>

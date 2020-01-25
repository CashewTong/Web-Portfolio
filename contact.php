<?php

if (isset($_POST['Submit'])){
    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $message = $_POST['subject'];

    $mailTo = "matthew0517@hotmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an email from ".$name.".\n\n".$message;

    mail($mailTo, $txt, $headers);

    header("Location: index.html?mailsend");
}


/////
///  <section class="contact" id="contact">
//        <div class="container">
//            <div class="section_heading">
//                <h1>Contact</h1>
//                <h6>Let's work together!</h6>
//            </div>
//            <form action="" data-aos="fade-up" data-aos-delay="300">
//                <label for="name">Name:</label>
//                <input type="text" id="name" name="name" placeholder="Enter your name..." required>
//                <label for="email">Email:</label>
//                <input type="email" id="email" name="email" placeholder="Enter your email..." required>
//                <label for="subject">Subject</label>
//                <textarea name="subject" id="subject" cols="10" rows="10"></textarea>
//                <input type="submit" value="Submit">
//            </form>
//        </div>
//    </section>
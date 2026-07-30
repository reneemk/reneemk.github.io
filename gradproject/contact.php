<!DOCTYPE html>
<html lang="en">
 <head>
     <!--
  Name: Renee Martin-Kratzer
  Date: July 29, 2026
  Course: Web Design and Development
  Description: This is the contact page for the Missouri Photo Workshop's Traveling Exhibit. -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact Us</title>
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
         <!-- Link to external CSS for styling -->  <link rel="stylesheet" href="style.css">
       <!-- Link to external CSS for navigation styling -->  <link rel="stylesheet" href="nav.css">
    </head>
    <body>
        <!-- include header -->
    <?php 
    require_once("header.php");
    ?>
       <!-- The main content will go below -->
        <main>
         <h1>Contact Us</h1>
         <h2>Are you interested in bringing the Missouri Photo Workshop to your town? Do you have questions about the workshop?</h2>
        <h3>Please fill out the form below.</h3>
         <!-- The form content is below -->
         <form action="mailto:bkratzer@gmail.com" method="post" enctype="text/plain">
            <label for="title">Choose a title:</label><br>
            <select id="title" name="title" required>
                <option value="" selected disabled>Title</option>
                <option value="mr">Mr.</option>
                <option value="mrs">Mrs.</option>
                <option value="ms">Ms.</option>
                <option value="dr">Dr.</option>
            </select><br>
            <label for="firstname">First name:</label><br>
            <input type="text" id="firstname" name="firstname" placeholder="Enter your first name" required><br>
            <label for="lastname">Last name:</label><br>
            <input type="text" id="lastname" name="lastname" placeholder="Enter your last name" required><br>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" placeholder="Enter your email" required><br>
            <label for="phone">Phone number:</label><br>
            <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required><br>
            <label for="interest">What are you contacting us about?</label><br>
            <select id="interest" name="interest">
                <option value="" selected disabled>Select an option</option>
                <option value="exhibit">Bringing the exhibit to my town</option>
                <option value="workshop">Questions about the workshop</option>
                <option value="other">Other inquiries</option>
            </select><br>
             <label for="message">Message:</label><br>
            <textarea id="message" name="message" placeholder="Enter your message" required></textarea><br>
            <input type="submit" value="Submit">
        </form>
         </main>
         <!-- include footer -->
     <?php
    require_once("footer.php");
    ?>
    </body>
</html> 
<!-- end of HTML -->

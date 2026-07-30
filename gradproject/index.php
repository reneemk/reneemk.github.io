<!DOCTYPE html>
<html lang="en">
 <head>
     <!--
  Name: Renee Martin-Kratzer
  Date: July 29, 2026
  Course: Web Design and Development
  Description: This is the index (home) page for my MPW Exhibit website that I'm creating for my Web Design and Development course. It includes the basic structure of an HTML document, with a linked CSS file for styling.-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
        <title>Missouri Photo Workshop's Traveling Exhibit</title>
       <!-- Link to external CSS for styling -->  
                <link rel="stylesheet" href="style.css">
        <!-- Link to external CSS for navigation styling -->  
                <link rel="stylesheet" href="nav.css">
        <!-- Custom font used here --> 
                <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Prata&display=swap" rel="stylesheet">
    </head>
    <body>
        <!-- include header -->
    <?php 
    require_once("header.php");
    ?>
    <main>
       <!-- The hero section is below with styling in the style.css file linked above-->
        <section class="hero">
         <h1>"Small Towns, Big Stories"</h1>
         <h2>Welcome to the Missouri Photo Workshop’s legacy exhibit.</h2>
        <h3>This exhibit features photographs from the 77 workshops that have been held in more than 50 small towns across Missouri.</h3> 
         <blockquote>
            Show truth with a camera. Ideally, truth is a matter of personal integrity. In no circumstances will a posed or fake photograph be tolerated.
        <cite>&mdash; Cliff Edom, MPW Workshop founder</cite>
        </blockquote>
        <p><a href="themes.php" class="button">Learn more</a></p>
        </section>
        </main>
         <!-- include footer -->
     <?php
    require_once("footer.php");
    ?>
    </body>
</html> 
<!-- end of HTML -->

<!DOCTYPE html>
<html lang="en">
 <head>
     <!--
  Name: Renee Martin-Kratzer
  Date: July 29, 2026
  Course: Web Design and Development
  Description: This is the resources page for my MPW Exhibit website that I'm creating for my Web Design and Development course. It includes the basic structure of an HTML document, with a linked CSS file for styling.-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
        <title>Resources</title>
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
            <h1>Resources about the Missouri Photo Workshop</h1>
               <!--I indented the second and third paragraphs here. I know the instructions said to do every other paragraph, but this looks better, and indenting the paragraphs before each list looked awkward. I hope this is OK. The first section on this page is below-->
<section id="books" class="resource-box">
            <h2>Missouri Photo Workshop Books</h2>
          <p class="intro drop-cap">The first books to come out of the workshop were completed under the leadership of Professor Angus McDougall. He chose five small river towns in Missouri as the site of five workshops, and a River Town book series followed. The books focus on the towns of Lupus, Berger, Rhineland, Glasgow and Arrow Rock.</p>
        <p class="body-text">This tradition of publishing a book that features the photo stories from the workshop was revived in 2008, 2009, 2010 and 2011. These books feature the rural towns of St. James, Festus/Crystal City, Macon and Clinton.</p>
        <p class="body-text">These books are available for viewing in person at the <a href="https://library.missouri.edu/journalism/" target="_blank" rel="noopener noreferrer">University of Missouri’s Journalism Library</a>. The hours and location are listed on the main page.
        </p>
        <figure>
            <img src="webcontent/Clintonmunoz01.jpg" alt="A man reads a newspaper in a barber shop located in Clinton, Missouri." class="Clinton-image">
            <figcaption>
                A man reads the Clinton Democrat as he waits to get his hair cut at the Barbery Center. "In small towns like Clinton, everyone knows what everyone else is doing. They just read the newspaper to see who got caught," said a local resident. Photo by Roberto Munoz.
            </figcaption>
        </figure>
</section>
       <!-- The second section is below -->
 <section id="news" class="resource-box">
         <h2>In the News</h2>
         <p><b>Press coverage of the 75th Missouri Photo Workshop exhibit:</b></p>
         <ul class="unordered-list">
         <li>
            <b><a href="https://www.neh.gov/article/small-town-faces-and-places" target="_blank" rel="noopener noreferrer">Humanities, The Magazine of the National Endowment of the Humanities: “Small Town Faces and Places”</a></b><br>This article explains how the 75 photographs were displayed by grouping them into themes. </li>
         <li>
            <b><a href="https://missourilife.com/75-years-of-photos/" target="_blank" rel="noopener noreferrer">Missouri Life Magazine: “75 years of photos”</a></b><br>This state magazine includes a story about the exhibit and its purpose. Some photographs from the exhibit are also featured.</li>
        <li>
             <b><a href="https://www.columbiatribune.com/picture-gallery/news/local/2023/11/03/exhibit-features-images-from-75-years-of-the-missouri-photo-workshop/71437835007/" target="_blank" rel="noopener noreferrer">Columbia Tribune: “Exhibit features images from 75 years of the Missouri Photo Workshop”</a></b><br>This Columbia newspaper shares a few photographs featured in the exhibit.</li>   
        <li>
            <b><a href="https://www.columbiamissourian.com/news/local/missouri-photo-workshop-aims-to-show-truth-with-a-camera/article_6e9c89b2-5d52-11ee-a49d-a36a74459788.html" target="_blank" rel="noopener noreferrer">Columbia Missourian: “Missouri Photo Workshop aims to show truth with a camera”</a></b><br>Focusing on the 75th workshop, this article explores the background of the workshop while also mentioning the special exhibit.</li>
        <li>
                <b><a href="https://journalism.missouri.edu/2023/10/missouri-photo-workshop-celebrates-75th-anniversary-returns-to-sedalia-after-43-years/" target="_blank" rel="noopener noreferrer">Missouri School of Journalism: "Missouri Photo Workshop celebrates 75th anniversary, returns to Sedalia after 43 years"</a></b><br>This story is about the 75th workshop that was held in Sedalia and includes information about the exhibit.</li>    
        </ul>   
        <p><b>Sources listed in APA format:</b></p>
    <ul class="sources">
        <li>75 Years of Photos. (2024, January 24). <em>Missouri Life.</em> https://missourilife.com/75-years-of-photos/</li>
        <li>Fitzgerald, A. (2023, October 5). Missouri Photo Workshop celebrates 75th anniversary, returns to Sedalia after 43 years. <em>Mizzou School of Journalism.</em> https://journalism.missouri.edu/2023/10/missouri-photo-workshop-celebrates-75th-anniversary-returns-to-sedalia-after-43-years/</li>
    <li>Maillet, O. (2004). Small town faces and places. <em>National Endowment for the Humanities.</em>  https://www.neh.gov/article/small-town-faces-and-places</li>
    <li>Small towns, big stories: Exhibit features images from 75 years of Missouri Photo Workshop. (2023, November 3). <em>Columbia Daily Tribune.</em> https://www.columbiatribune.com/picture-gallery/news/local/2023/11/03/exhibit-features-images-from-75-years-of-the-missouri-photo-workshop/71437835007/</li>
    <li>Stover, B. (2023, September 28). Missouri Photo Workshop aims to show truth with a camera. <em>Columbia Missourian.</em> https://www.columbiamissourian.com/news/local/missouri-photo-workshop-aims-to-show-truth-with-a-camera/article_6e9c89b2-5d52-11ee-a49d-a36a74459788.html</li>
    </ul>
</section>
       <!-- The third section is below -->
<section id="past" class="resource-box">
    <h2>Past Workshops</h2>
    <p><b>Missouri Photo Workshop:</b> Learn more about the organization that hosts an annual workshop focused on photojournalism: <a href="https://missouriphotoworkshop.org/" target="_blank" rel="noopener noreferrer">MPW Website</a></p>
    <p><b>Where have we been? </b>View list of the towns and stories that have come out of this yearly workshop. This link leads you to photo stories from 1999 and after: <a href="https://missouriphotoworkshop.org/year-by-year/" target="_blank" rel="noopener noreferrer">View the year-by-year archive</a></p>
    <div class="director-layout">
    <table class="director-table">
        <caption>Directors of the Missouri Photo Workshop</caption>
        <thead>
            <tr>
        <th scope="col">Years Served</th>
        <th scope="col">Directors</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>1949-1985</td>
            <td>Cliff and Vi Edom</td>
        </tr>
        <tr>
            <td>1986-2000</td>
            <td>Bill Kuykendall and Duane Daily</td>
        </tr>
        <tr>
            <td>2001-2017</td>
            <td>David Rees and Jim Curley</td>
        </tr>
        <tr>
            <td>2018-2019</td>
            <td>David Rees, Jim Curley and Brian Kratzer</td>
        </tr>
        <tr>
            <td>2020-2021</td>
            <td>Brian Kratzer and Alyssa Schukar</td>
        </tr>
        <tr>
            <td>2022-current</td>
            <td>Brian Kratzer</td>
        </tr>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="2">
                    Current through 2026
                </td>
            </tr>
        </tfoot>
    </table> 
    <figure>
        <img src="webcontent/yearbyyear_missourimap.jpg" alt="Map of Missouri with red dots for the towns that have hosted the workshop" class="director-image">
    <figcaption>The Missouri Photo Workshop has taken place in towns across the state. Map courtesy of the Missouri Photo Workshop.
    </figcaption>
</figure>   
</div>
</section>  
</main>
 <!-- include footer -->
     <?php
    require_once("footer.php");
    ?>
    </body>
</html> 
<!-- end of HTML -->

<!DOCTYPE html>
<html lang="en">
 <head>
     <!--
  Name: Renee Martin-Kratzer
  Date: July 29, 2026
  Course: Web Design and Development
  Description: This is the Exhibit Themes page. -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Missouri Photo Workshop's Exhibit Themes</title>
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
        <main class="theme-grid">
        <!-- Row 1 content-->
        <section class="intro">
      <h1>Common Themes Represented in the Missouri Photo Workshop Exhibit</h1>
        <p>The Missouri Photo Workshop teaches photographers to tell visual stories that are intimate and compelling. The photographers apply the lessons they learn to report on stories about contemporary life. These stories touch upon a wide range of topics, including social issues, environmental concerns and local culture. Personalizing these topics by following a subject closely for a week makes the issues easier for viewers to comprehend and the reporting more powerful. Not all Missouri Photo Workshop stories relate to a larger issue. Some stories focus on individuals and capture what their lives are like at this time.  
            </p>
            </section>
         <!-- Row 2 content-->
<section class="photo-item">
<figure>
    <img src="webcontent/dailylifempw19-1967-mr-p-026Rpd.jpg" alt="A girl in a classroom balances a pencil on her lip.">
    <figcaption>Photograph by Charles Dresner. Third-grader Jenny Rhukamp is distracted from the lesson that her teacher wants her to work on. The school serves as one of Marshall's community hubs.
    </figcaption>
</figure>
<h2>Daily Life</h2>
<p>Workshop photographers are challenged with finding interesting stories in small communities filled with people going about their daily lives. The photographers find excellent stories about the day-to-day routines that are the heartbeat of a community. Examples include townsfolk interacting at a coffee shop, or a group of teens gathering on a weekend night. These mundane, regular happenings can reveal a lot about a person.
</p>
</section>
        <section class="photo-item">
            <figure>
                <img src="webcontent/hardshipMPW64-2012-Troy_M_HEMMELGARN_390_GJ3A4196.jpg" alt="A man in a wheelchair leans in to kiss a horse.">
            <figcaption>Photograph by Dan Hemmelgarn. Tom Seeley and Mike the mule share a tender moment. Seeley, who has cerebral palsy, loves horses. He works four days a week at the Lincoln County Sheltered Workshop and relishes his time with friends and horses.
    </figcaption>
            </figure>
            <h2>Overcoming Challenges</h2>
            <p>While small town life can appear idyllic to outsiders, these towns are not immune to the problems that people face across America. Several brave community members have willingly shared their struggles with mental and physical health, poverty, abuse, addiction and incarceration. These stories reflect the people’s realities and help provide a complete picture of what citizens are going through.
            </p>
        </section>
       <!-- Row 3 content-->
    <section class="featured-photo">
        <figure>
            <img src="webcontent/familydynamicsmpw01-1949-co-p-047.jpg" alt="A newlywed couple laugh together in their small apartment.">
            <figcaption>Photo by Dulcie Witt. The Herman newlyweds have a lot to laugh about, but they don’t get many chances to relax. Al Herman was one of the many WWII veterans who returned to school after the war, and he spent most of his days taking classes and studying.
            </figcaption>
        </figure>
        <h2>Family Dynamics</h2>
        <p>Many families include complex relationships that can be rewarding and frustrating. Workshop photojournalists learn to observe the big and small moments that can contribute to an overall narrative. Over the years, stories have focused on family members who rise to challenges as well as those who struggle to connect to the people in their life.   
        </p>
    </section>
                </main>
                 <!-- include footer -->
     <?php
    require_once("footer.php");
    ?>
    </body>
</html> 
<!-- end of HTML -->

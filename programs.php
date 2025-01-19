<?php include("header.php"); ?>

<?php include("hrbar1.php"); ?>
<!-- end horizontalbar -->
<style>

body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    color: #333; 
    background-color: #ffffff; 
}

.post {
    background-color: white;
    padding: 5px;
    border-radius: 8px;
    box-shadow: 0 10px 16px rgb(65, 26, 238);
}
/* Title Styling */
h2.title {
    font-size: 24px;
    color: #007bff; 
    margin-bottom: 20px;
}

/* Entry Text */
.entry {
    font-size: 16px;
    color: #333;
}

/* Hyperlink Styling */
a {
    text-decoration: none;
    color: #007bff; 
}

a:hover {
    text-decoration: underline; 
}


.pdf-container {
    overflow: auto;
    margin-top: 20px;
}

#pdf-frame {
    width: 100%;
    height: 500px;
    border: none;
}

/* Lists Styling */
ul {
    margin-left: 0px;
    padding-left: 20px; /* Ensure proper indentation */
}

ul li {
    font-size: 16px;
    
}

ul li ul {
    margin-left: 20px; /* Further indent nested lists */
}

/* Meta Text Styling */
.meta {
    font-size: 14px;
    color: #777; /* Lighter color for metadata */
    text-align: center;
    margin-top: 20px;
}

/* Responsive Design */
@media (max-width: 768px) {
    h2.title {
        font-size: 22px; /* Slightly smaller title for smaller screens */
    }

    .entry {
        font-size: 14px; /* Smaller font size for entry text */
    }

    #pdf-frame {
        height: 400px; /* Smaller iframe height for medium screens */
    }

    ul {
        font-size: 14px; /* Smaller list font size */
    }
}

@media (max-width: 480px) {
    h2.title {
        font-size: 18px; /* Smaller title for mobile screens */
    }
    #icidn-header {
        background-size:contain; /* Ensures the background image fits the content */
        background-position:center; /* Centers the background image */
    }

    .entry {
        font-size: 14px; /* Maintain font size for content */
    }
    

    #pdf-frame {
        width: 100%;
        height: 350px; /* Further reduce iframe height for mobile screens */
    }

    ul {
        font-size: 14px; /* Consistent font size for lists */
    }
}

</style>

<!-- start content -->
<div id="content">
    <div class="post">
        <h2 class="title"><a href="programs.php">PROGRAMS</a></h2>

        <div class="entry">

            <h2 style="color: #007bff;"><u>ICIDN-2023 Program Timetable</u></h2>

            <p align="justify" style="font-size: 16px; color: black;">
                Please download the 
                <a href="ICIDN2023_Program_TimeTable_Finale.pdf" style="color: #007bff; font-size: 16px;">ICIDN-2023 Program Timetable</a> 
                for more information.
            </p>

            <!-- Responsive iframe for the PDF -->
            <div class="pdf-container">
                <iframe src="http://www.icidn-nepal.com/ICIDN2023_Program_TimeTable_Finale.pdf" 
                        width="99%" height="600" style="border:0;" allowfullscreen=""
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <h2 style="color: #007bff;"><u>ORAL PRESENTATION</u></h2>

            <p align="justify" style="font-size: 16px; color: black;">
                Information for the ICIDN-2023 Oral Presenter:
            </p>
            <dl>
                <strong>The presentation time varies by the talk type:</strong> 
                        <li>Plenary Lecture (45 minutes)</li>
                        <li>Keynote Lecture (30 minutes)</li>
                        <li>Invited Lecture (20 minutes)</li>
                        <li>Oral Presentation (15 minutes)</li>  
            
                <li><strong>For the time and date of your talk, please refer to the program timetable above.</strong></li>
                <li><strong>Presentation format:</strong> PowerPoint slides.</li>
            </dl>

            <h2 style="color: #007bff;"><u>POSTER PRESENTATION</u></h2>

            <p align="justify" style="font-size: 16px; color: black;">
                Information for the ICIDN-2023 Poster Presenter:
            </p>
            <dl>
                <li>POSTER board size is 92 cm (breadth) and 145 cm (height).</li>
                <li>Please print your poster in Portrait mode.</li>
            </dl>

            <h4>&nbsp;</h4>
        </div>

        <p class="meta">Last Updated on December 13, 2023</p>
    </div>

    <div style="clear: both;">&nbsp;</div>
</div>

<?php include("footer.php"); ?>

<?php include("header.php"); ?>
<?php include("hrbar1.php"); ?>

<!-- end horizontalbar -->
<div id="page">
    <!-- start content -->
    <div id="content">
        <div class="post">
            <h2 class="title"><a href="venue.php">VENUE</a></h2>
            <div class="entry">
                <h2 class="venue-heading">Conference Venue</h2>

                <p class="venue-description">
                    <b>ICIDN-2023 will be held at the premises of:</b><br><br>
                    <b>Nepal Academy of Science and Technology (NAST)</b><br>
                    Khumaltar, Lalitpur, Nepal<br>
                    Website: <a href="https://nast.gov.np" class="venue-link">https://nast.gov.np</a><br>
                    Google map: Please see below.<br>
                </p>

                <div class="map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28498514.84782003!2d54.038608555028915!3d29.3168786079054!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb17624b17beb9%3A0x16a8449f116b5fe!2sNepal%20Academy%20of%20Science%20and%20Technology!5e0!3m2!1sen!2sus!4v1701723933230!5m2!1sen!2sus" 
                    loading="lazy" allowfullscreen></iframe>
                </div>
            </div>

            <p class="meta">Last Updated on December 4, 2023</p>
        </div>
    </div>
</div>

<?php include("footer.php"); ?>

<style>
/* General Body Styling */
body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    margin: 0;
    padding: 0;
    color: #333;
}

/* Content Styling */
#content {
    padding: 20px;
    box-shadow: 0 10px 16px rgb(65, 26, 238);
}

/* Venue Heading */
.venue-heading {
    font-size: 2em;
    color: blue;
}

/* Venue Description Styling */
.venue-description {
    font-size: 1.2em;
    color: #444;
}

.venue-description b {
    font-weight: bold;
}

/* Venue Link Styling */
.venue-link {
    color: blue;
    text-decoration: underline;
}

/* Map Container Styling */
.map-container {
    margin-top: 20px;
    max-width: 100%;
    width: 100%;
}

iframe {
    width: 100%;
    height: 450px;
    border: none;
    border-radius: 10px;
}

/* Meta Data Styling */
.meta {
    font-size: 0.9em;
    color: gray;
}

/* Responsive Design for Tablets and Smaller Devices */
@media (max-width: 768px) {
    #content {
        padding: 15px;
    }

    .venue-heading {
        font-size: 1.8em;
    }

    .venue-description {
        font-size: 1em;
    }

    .map-container iframe {
        height: 300px;
    }
}

/* Responsive Design for Mobile Devices */
@media (max-width: 480px) {
    #content {
        padding: 10px;
    }

    .venue-heading {
        font-size: 1.6em;
    }

    .venue-description {
        font-size: 0.9em;
    }

    .map-container iframe {
        height: 250px;
    }
}


</style>

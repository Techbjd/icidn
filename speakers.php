<?php include("header.php"); ?>
<?php include("hrbar1.php"); ?>

<div id="page">
    <!-- start content -->
    <div id="content">
        <div class="post">
            <h4 class="title"> 
                <span style="color: black;">Information regarding the confirmed Speakers of ICIDN-2023 will be updated periodically!</span>
            </h4>
            <div class="entry">
                <h2 style="color: green;">Confirmed Speakers (A-Z)</h2>

                <table class="speakers-table">
                    <tr>
                        <td>
                            <img src="images/Bragg.png" alt="Prof. Robert R. Bragg" class="speaker-img">
                        </td>
                        <td>
                            <b>Paradigm shift in medicine from treatment to prevention</b><br>
                            <h3 style="color: brown;">Prof. Robert R. BRAGG, PhD</h3>
                            <i>Department of Microbial, Biochemical and Food Biotechnology,<br>
                            University of the Free State, Bloemfontein, SOUTH AFRICA</i>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <img src="images/Kaur.png" alt="Prof. Punit Kaur" class="speaker-img">
                        </td>
                        <td>
                            <b>Genome profiling of <i>Salmonella</i> Typhi clinical isolates from Northern India to identify resistance mechanism for development of novel drug candidates</b><br>
                            <h3 style="color: brown;">Prof. Punit KAUR, PhD</h3>
                            <i>Department of Biophysics, All India Institute of Medical Sciences (AIIMS),<br>
                            New Delhi, INDIA</i>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <img src="images/Pun2023.png" alt="Dr. Sher Bahadur Pun" class="speaker-img">
                        </td>
                        <td>
                            <b>Emerging Challenges in Rabies Elimination in Nepal</b><br>
                            <h3 style="color: brown;">Dr. Sher Bahadur PUN, MD, PhD</h3>
                            <i>Clinical Research Unit, Sukraraj Tropical & Infectious Disease Hospital,<br>
                            Kathmandu, NEPAL</i>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <img src="images/Rai.png" alt="Prof. Shiba Kumar Rai" class="speaker-img">
                        </td>
                        <td>
                            <b>Dengue virus infection in Nepal- An increasing trend</b><br>
                            <h3 style="color: brown;">Prof. Shiba Kumar RAI, PhD</h3>
                            <i>Department of Microbiology, Nepal Medical College,<br>
                            Kathmandu, NEPAL</i>
                        </td>
                    </tr>
                </table>

                <p class="meta">Last Updated on December 11, 2023</p>
            </div>
            <div style="clear: both;">&nbsp;</div>
        </div>
    </div>
</div>

<?php include("footer.php"); ?>

<style>
/* Body and Background */
body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    margin: 0;
    padding: 0;
    background-color: #f9f9f9; /* Light gray background for better readability */
    color: #333; /* Default text color */
}

/* Page Content */
#content {
    padding: 20px;
}

/* Speaker Table */
.speakers-table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0;
}

.speakers-table td {
    vertical-align: top;
    padding: 10px;
    border-bottom: 1px solid #ddd;
}

.speakers-table img {
    max-width: 100%; /* Responsive image size */
    height: auto;
    border-radius: 10px; /* Slight rounding for better aesthetics */
}

/* Headings and Titles */
.title {
    font-size: 1.8em;
    font-weight: bold;
}

h2 {
    font-size: 1.6em;
    color: green;
}

h3 {
    font-size: 1.4em;
    color: brown;
}

/* Meta Information */
.meta {
    font-size: 0.9em;
    color: gray;
}

/* Responsive Design */
@media (max-width: 768px) {
    .speakers-table td {
        display: block;
        width: 100%;
    }

    .speakers-table td:first-child {
        text-align: center;
    }
    
    .speakers-table td img {
        margin: auto;
    }

    .title {
        font-size: 1.4em;
    }

    h2 {
        font-size: 1.4em;
    }

    h3 {
        font-size: 1.2em;
    }
}

@media (max-width: 480px) {
    body {
        font-size: 14px; /* Adjust font size for small screens */
    }

    .title {
        font-size: 1.2em;
    }

    h2 {
        font-size: 1.2em;
    }

    h3 {
        font-size: 1em;
    }
}
</style>

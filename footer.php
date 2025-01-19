<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
    <style>
        /* General Footer Styling */
        body {
            margin: 0;
            overflow-x: hidden; /* Prevent horizontal scroll */
            font-size: 16px; /* Base font size for scaling */
        }

        #footer {
            background-color: #ffffff; /* Set the background color to white */
            padding: 5px;
            font-family: Arial, sans-serif;
            border-radius: 20px;
        }

        /* Organization Section */
        .organization {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap; /* Allow images to wrap when needed */
            gap: 5px;
            width: 100%; /* Ensure container doesn't exceed 100% of the viewport width */
        }

        .organization div {
            text-align: left;
            padding: 5px;
            flex: 0 0 100%; /* Make each image container take 100% of available width */
            max-width: 150px; /* Prevent images from getting too large */
            box-sizing: border-box;
        }
     
        /* Footer Image Styling */
        .organization img {
            display: block;
            width: 100%;
            max-width: 160px;
            height: auto;
            margin: 10px 0;
        }

        /* Label Styling */
        .organization div .label {
            display: block;
            font-size: 0.8rem;
            font-weight: bold;
            color: green;
            margin-bottom: 10px;
            text-align: center;
        }

        /* Responsive Design for Tablets and Small Screens */
        @media only screen and (max-width: 768px) {
            .organization {
                justify-content: space-evenly; /* Adjust layout for tablets */
            }

            .organization img {
                max-width: 120px; /* Limit image size on tablet */
            }

            .organization div .label {
                font-size: 0.95rem; /* Adjust font size for tablets */
            }

            .organization div {
                flex: 0 0 45%; /* Two items per row on tablets */
            }
        }

        /* Mobile View */
        @media only screen and (max-width: 480px) {
            .organization img {
                max-width: 100px; /* Further reduce image size on mobile */
            }

            .organization div .label {
                font-size: 0.85rem; /* Further adjust font size on mobile */
            }

            .organization div {
                flex: 0 0 48%; /* Two items per row on mobile */
            }
        }

        /* Center Content Styling */
        .center-content {
            text-align: center;
            font-family: 'Arial', sans-serif;
            font-size: 1.5rem; /* Default font size */
            color: #333;
            padding: 10px;
        }

        .center-content a {
            color: blue;
            text-decoration: none;
        }

        /* Responsive Styling for Center Content */
        @media only screen and (max-width: 768px) {
            .center-content {
                font-size: 0.95rem; /* Adjust font size for tablets */
            }

            .center-content a {
                font-size: 0.95rem;
            }
        }

        @media only screen and (max-width: 480px) {
            .center-content {
                font-size: 0.85rem; /* Further reduce font size on small screens */
            }

            .center-content a {
                font-size: 0.85rem;
            }
        }

    </style>
</head>
<body>


<div id="footer">
    <div class="organization">
        <div >
            <span class="label">Organized by:</span>
            <a href="http://icidn-nepal.com">
                <img src="images/NFMM_logo23.jpg" alt="NFMM Logo">
            </a>
        </div>

        <div>
            <span class="label"> </span>
            <a href="https://www.nepalpolymer.org">
                <img src="images/NPI_logo23.jpg" alt="NPI Logo" >
            </a>
        </div>

        <div>
            <span class="label"> </span>
            <a href="http://ctnsdg.ac.cn/en/">
                <img src="images/CoEBio_logo23.jpg" alt="CoEBio Logo">
            </a>
        </div>

        <div>
            <span class="label"> </span>
            <a href="https://biomedical.edu.np/">
                <img src="images/cbeas.png" alt="CBEAS Logo">
            </a>
        </div>

        <div class="orgimg">
            <span class="label">In Collaboration with:</span>
            <a href="https://nast.gov.np/">
                <img src="images/NASTLogo.png" alt="NAST Logo">
            </a>
        </div>

        <div>
            <span class="label">Supported by:</span>
            <a href="http://www.biologists.com">
                <img src="images/CoB_logo23.jpg" alt="CoB Logo">
            </a>
        </div>
    </div>

    <div class="center-content">
        <b>Contact:</b> ICIDN-2023 Secretariat </br>
        Kirtipur-05, Kathmandu 44618, Nepal </br>
        P. O. Box 24411, Kathmandu, Nepal, Phone: +977-984-144-2230 (R Pandit) </br>
        <font color="black">E-mail:</font> <a href="mailto:icidn2023@gmail.com">
            <font color="blue">icidn2023@gmail.com</a> </font> ,
        <font color="black"> Website:</font> <a href="http://www.icidn-nepal.com/index.php">
            <font color="blue">www.icidn-nepal.com</a> </font> <br/>
        <font color="black">This page is maintained by <a href="mailto:santoshthapa2003@yahoo.com">S Thapa</a>|&copy ICIDN 2012-2023 </font> <br/>
    </div>
</div>

</body>
</html>



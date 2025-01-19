<?php include("header.php"); ?>

<?php include("hrbar1.php"); ?>
<!-- end horizontalbar -->		  	

<div id="page">
  <!-- start content -->
  <div id="content">

    <div class="post">

      <h2 class="title"><a href="publications.php">PUBLICATIONS</a></h2>

      <div class="entry">
        <h2><font color="blue">Book of Abstracts</h2></font>

        <p align="justify">
    <font size="4" color="black">For direct download ICIDN-2023 Book of Abstracts  </font>
    <!-- Create a download button-style link -->
    <a href="ICIDN2023_BookOfAbstracts.pdf" download="ICIDN-2023 Book of Abstracts" style="text-decoration: none;">
        <button style="padding: 10px 2px;  background-color: #e4e8fd; color: blue; border: none; border-radius: 5px;  font-size: 16px; cursor: pointer;">
          click here
        </button>
    </a>
</p>

          </a>
        </p>

        <!-- PDF Iframe Viewer -->
        <div id="pdf-viewer-container" style="width: 100%; height: 800px; overflow: hidden; border: 1px solid #ddd; position: relative;">
          <iframe src="ICIDN2023_BookOfAbstracts.pdf" width="100%" height="100%" style="border: none;"></iframe>
        </div>

      </div>

      <p class="meta">Last Updated on December 15, 2023</p>

    </div>

    <div style="clear: both;">&nbsp;</div>

  </div>

<?php include("footer.php"); ?>
</div>

<!-- Responsive CSS -->
 <style>
/* Global Styles */
body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    margin: 0;
    padding: 0;
    background-color: #ffffff; /* White background */
    color: #333; /* Default text color */
}

#content {
    padding: 20px;
    max-width: 1200px;
    margin: 0 auto;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
}

/* Heading and Titles */
h2.title {
    font-size: 2rem;
    color: #0056b3;
    margin-bottom: 20px;
}

h3 {
    font-size: 1.5rem;
    color: #0056b3;
    margin-top: 20px;
}

h2 font {
    color: blue;
}

/* Button Styling */
button {
    padding: 10px 15px;
    background-color: #e4e8fd;
    color: #0056b3;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s;
}

button:hover {
    background-color: #c8d4ff;
}

/* PDF Viewer Container */
#pdf-viewer-container {
    width: 100%;
    height: 800px;
    overflow: hidden;
    border: 1px solid #ddd;
    position: relative;
    margin-top: 20px;
}

/* Responsive Design for Laptop and Below */
@media (max-width: 1366px) { /* Laptops and large screens */
    body {
        font-size: 15px; /* Slightly smaller font for laptops */
    }

    h2.title {
        font-size: 1.75rem; /* Adjust title size for laptops */
    }

    button {
        font-size: 14px; /* Slightly smaller button text */
        padding: 8px 12px;
    }

    #pdf-viewer-container {
        height: 700px; /* Adjust viewer height for laptops */
    }
}

/* Responsive Design for Tablets (iPad Portrait Mode) */
@media (max-width: 1024px) { /* iPad Portrait Mode */
    body {
        font-size: 14px; /* Smaller font for tablets */
    }

    h2.title {
        font-size: 1.5rem; /* Adjust title size for tablets */
    }

    button {
        padding: 8px 12px; /* Smaller buttons for tablets */
        font-size: 13px;
    }

    #pdf-viewer-container {
        height: 600px; /* Adjust viewer height for iPads */
    }
}

/* Responsive Design for Tablets (iPad Landscape Mode) */
@media (max-width: 768px) { /* iPad Landscape Mode / Smaller Tablets */
    body {
        font-size: 13px; /* Small font for smaller tablets */
    }

    h2.title {
        font-size: 1.4rem; /* Adjust title size for iPad landscape */
    }

    button {
        padding: 8px 12px;
        font-size: 12px;
    }

    #pdf-viewer-container {
        height: 500px; /* Adjust viewer height for iPad Landscape */
    }
}

/* Mobile Devices */
@media (max-width: 600px) { /* Mobile Devices */
    body {
        font-size: 12px; /* Small font for mobile devices */
    }

    h2.title {
        font-size: 1.2rem; /* Adjust title size for mobile screens */
    }

    button {
        padding: 6px 10px; /* Smaller button for mobile */
        font-size: 12px;
    }

    #pdf-viewer-container {
        height: 350px; /* Adjust viewer height for mobile screens */
    }

    #pdf-frame {
        width: 100%;
        height: 350px; /* Further reduce iframe height for mobile screens */
    }
}

/* Fine-tuning for smaller mobile screens (very small screens like old phones) */
@media (max-width: 480px) { /* Very Small Screens */
    body {
        font-size: 11px; /* Small font for very small screens */
    }

    h2.title {
        font-size: 1.1rem; /* Title size for very small screens */
    }

    button {
        padding: 5px 8px; /* Even smaller button for very small screens */
        font-size: 10px;
    }

    #pdf-viewer-container {
        height: 300px; /* Very small height for mobile screens */
    }
}

</style>
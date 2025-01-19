<div id="page">
<?php include("header.php"); ?>
<?php include("hrbar1.php"); ?>

    
    <div id="content">
        <div class="post">
            <h2 class="title">
                <a href="CallForAbstract.php">Call for Abstract</a>
            </h2>
            <div class="entry">
                <p class="intro-text">
                    We invite contributions for oral and/or poster presentations at ICIDN-2023. 
                    <strong>Abstracts can be submitted in all aspects of infectious diseases and nanomedicine. You can submit your research abstract related to the following topics, but not limited to:</strong>
                </p>
                
                <ul class="styled-list">
                    <li>Microbiology of infectious diseases</li>
                    <li>Water-borne, food-borne, vector-borne, zoonotic diseases</li>
                    <li>Blood-associated and sexually transmitted infections</li>
                    <li>Neglected tropical diseases</li>
                    <li>Emerging infectious diseases</li>
                    <li>SARS-CoV2 and COVID-19 pandemic</li>
                    <li>Epidemiology of infectious diseases of human and other species</li>
                    <li>Infectious disease surveillance</li>
                    <li>Mathematical models for infectious disease dynamics</li>
                    <li>Impact of climate change on infectious diseases</li>
                    <li>Microbiomes in health and infectious diseases</li>
                    <li>Cellular and molecular pathogenesis of infectious diseases</li>
                    <li>Host-pathogen interactions in infectious diseases</li>
                    <li>Defense mechanisms of the host against infectious pathogens</li>
                    <li>Innate and adaptive immune response against infectious pathogens</li>
                    <li>Infection and inflammation</li>
                    <li>Immunopathology of infectious diseases</li>
                    <li>Immune-evasion in infectious pathogens</li>
                    <li>Omics-technology in the diagnosis of infectious diseases</li>
                    <li>Prevention and treatment of infectious diseases</li>
                    <li>Antimicrobial resistance (AMR) and challenges</li>
                    <li>Alternative treatments like bacteriophage therapy</li>
                    <li>Vaccine development</li>
                    <li>Drug design</li>
                    <li>Nanomaterials and biomaterials</li>
                    <li>Antimicrobial properties of metal nanoparticles</li>
                    <li>Approaches for drug delivery</li>
                    <li>Targeted therapies</li>
                    <li>Tissue engineering</li>
                    <li>Regenerative and personalized nanomedicine</li>
                    <li>Novel materials and technologies for diagnosis and treatment</li>
                </ul>

                <p class="abstract-info">
                    Please refer to the <a href="http://www.icidn-nepal.com/abstractsubmission.php" class="abstract-link">Abstract Submission page</a> 
                    for more information on guidelines to submit your abstract for ICIDN-2023.
                </p>
            </div>

            <p class="meta">Last Updated on July 17, 2023</p>
        </div>
    </div>
</div>

<?php include("footer.php"); ?>
</div>
<!-- Updated CSS -->
<style>
   
    /* Content Section */
    #content {
        width: 100%;
        padding: 2rem 0.5rem;
        background: #ffffff;
        border-radius: 10px;
        border: 1px solid #ddd;
       
    }

    /* Title Styling */
    h2.title a {
        font-size: 2.25rem;
        color: #007BFF;
        font-weight: 700;
        text-decoration: none;
    }

    h2.title a:hover {
        color: #0056b3;
        text-decoration: underline;
    }

    /* Styled List Section */
    .styled-list {
        list-style: none;
        padding-left: 0;
        margin: 20px 0;
    }

    .styled-list li {
        padding: 10px 0;
        font-size: 1.2rem;
        color: #333;
        border-bottom: 1px solid #ddd;
        position: relative;
        padding-left: 25px;
    }

    .styled-list li::before {
        content: "•";
        font-size: 1.5rem;
        color: #007BFF;
        position: absolute;
        left: 0;
        top: 50%;
        transform: translateY(-50%);
    }

    /* Introductory Text */
    .intro-text {
        font-size: 1.2rem;
        line-height: 1.8;
        color: #333;
        margin-bottom: 20px;
    }

    /* Abstract Info Section */
    .abstract-info {
        font-size: 1rem;
        line-height: 1.5;
        color: #555;
        margin-top: 20px;
    }

    .abstract-link {
        color: #007BFF;
        font-weight: bold;
        text-decoration: underline;
    }

    .abstract-link:hover {
        color: #0056b3;
    }

    /* Meta Information */
    .meta {
        font-size: 0.875rem;
        color: #666;
        text-align: center;
        margin-top: 30px;
    }

    /* Mobile Optimization */
    @media (max-width: 768px) {
        

        h2.title a {
            font-size: 1.8rem;
        }

        .styled-list li {
            font-size: 1rem;
        }

        .intro-text, .abstract-info {
            font-size: 1rem;
        }
    }

    @media (max-width: 480px) {
        #page {
            padding: 0px;
        }

        h2.title a {
            font-size: 1.6rem;
        }

        .styled-list li {
            font-size: 0.9rem;
        }

        .intro-text, .abstract-info {
            font-size: 0.9rem;
        }

        .meta {
            font-size: 0.8rem;
        }
    }
</style>

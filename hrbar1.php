<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Responsive navigation menu with dropdowns and mobile optimization">
    <title>Professional Navbar</title>
    <style>
        /* Global Styles */
        :root {
            --main-bg-color: #001f3f;
            --hover-color: #007BFF;
            --text-color: #ffffff;
            --text-hover-color: #ffffff;
            --dropdown-bg-color: #ffffff;
            --dropdown-text-color: #333;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: var(--dropdown-text-color);
            font-size: 16px;
        }

        a {
            text-decoration: none;
            color: inherit;
            transition: color 0.3s ease;
        }

        a:hover {
            color: var(--hover-color);
        }

        /* Navbar Container */
        #navContainer {
            background-color: var(--main-bg-color);
            box-shadow: 0 0.25rem 0.5rem rgba(0, 0, 0, 0.1);
            padding: 0.625rem 1.25rem;
        }

        .menu-icon {
            display: none;
            font-size: 1.875rem;
            color: var(--text-color);
            cursor: pointer;
        }

        /* Main Menu Styling */
        #navMenu {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        #navMenu > li {
            position: relative;
        }

        #navMenu > li > a {
            padding: 0.625rem 1.25rem;
            color: var(--text-color);
            font-size: 1.125rem;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        #navMenu > li > a:hover {
            background-color: var(--hover-color);
            border-radius: 0.3125rem;
        }

        /* Dropdown Menu */
        #navMenu li ul {
            position: absolute;
            top: 100%;
            left: 0;
            background-color: var(--dropdown-bg-color);
            list-style: none;
            margin: 0;
            padding: 0.625rem 0;
            box-shadow: 0 0.25rem 0.5rem rgba(0, 0, 0, 0.1);
            display: none;
            z-index: 1000;
        }

        #navMenu li.show > ul {
            display: block;
        }

        #navMenu li ul li {
            padding: 0;
        }

        #navMenu li ul li a {
            display: block;
            padding: 0.625rem 1.25rem;
            color: var(--dropdown-text-color);
            font-size: 1rem;
        }

        #navMenu li ul li a:hover {
            background-color: var(--hover-color);
            color: var(--text-hover-color);
        }

        /* Mobile Styles */
        @media (max-width: 48rem) {
            .menu-icon {
                display: block;
            }

            #navMenu {
                flex-direction: column;
                display: none;
                width: 100%;
                background-color: var(--main-bg-color);
                padding: 0;
                border-radius: 0.3125rem;
            }

            #navMenu.show {
                display: flex;
            }

            #navMenu > li {
                width: 100%;
            }

            #navMenu > li > a {
                width: 100%;
                text-align: left;
                padding: 1rem 1.25rem;
            }

            #navMenu > li + li {
                margin-top: 0.5rem;
            }

            #navMenu > li ul {
                position: static;
                width: 100%;
                box-shadow: none;
            }

            #navMenu li ul li a {
                padding-left: 1.875rem;
            }
        }
    </style>
</head>
<body>

<div id="navContainer">
    <!-- Hamburger Menu Icon -->
    <div class="menu-icon" onclick="toggleMenu()">☰</div>

    <!-- Navigation Menu -->
    <ul id="navMenu">
        <li><a href="index.php">Home</a></li>
        <li>
            <a href="Registration.php" class="dropdown-link">Registration</a>
            <ul>
                <li><a href="CallForAbstract.php">Call for Abstract</a></li>
                <li><a href="abstractsubmission.php">Abstract Submission</a></li>
                <li><a href="venue.php">Venue</a></li>
                <li><a href="deadlines.php">Deadlines</a></li>
                <li><a href="process1.php">Process</a></li>
            </ul>
        </li>
        <li>
            <a href="programs.php" class="dropdown-link">Programs</a>
            <ul>
                <li><a href="speakers.php">Speakers</a></li>
            </ul>
        </li>
        <li><a href="Committees.php">Committees</a></li>
        <li><a href="publications.php">Publications</a></li>
        <li><a href="PastConferences.php">Past Conferences</a></li>
    </ul>
</div>

</body>
</html> 

<script>
    // Toggle mobile menu visibility
    function toggleMenu() {
        const navMenu = document.getElementById('navMenu');
        navMenu.classList.toggle('show');
    }

    // Detect touch-enabled devices
    const isTouchDevice = 'ontouchstart' in window || navigator.maxTouchPoints > 0;

    if (isTouchDevice) {
        // Handle dropdown behavior for touch devices
        document.querySelectorAll('.dropdown-link').forEach(link => {
            link.addEventListener('click', function (event) {
                const parentLi = this.parentElement;

                if (window.innerWidth <= 1024) { // Only for mobile-sized screens
                    if (!parentLi.classList.contains('show')) {
                        event.preventDefault(); // Prevent immediate navigation
                        parentLi.classList.add('show'); // Show dropdown

                        // Navigate to the link after a delay
                        setTimeout(() => {
                            window.location.href = this.href;
                        }, 5000); // Adjust the delay time here
                    }
                }
            });
        });
    } else {
        // Handle hover behavior for non-touch devices
        document.querySelectorAll('#navMenu > li').forEach(menuItem => {
            menuItem.addEventListener('mouseenter', () => {
                menuItem.classList.add('show');
            });

            menuItem.addEventListener('mouseleave', () => {
                menuItem.classList.remove('show');
            });
        });
    }
</script>


</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Set the primary theme color */
        .bg-theme {
            background-color: #174FA2;
        }
        .text-theme {
            color: #174FA2;
        }
     
/* Service box styling */
.service-box {
            position: relative;
            overflow: hidden;
            color: #fff;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding: 1.5rem;
            background-size: cover;
            background-position: center;
            transition: transform 0.4s ease-in-out; /* Zoom-in effect */
        }
        .service-box:hover {
            transform: scale(1.05); /* Slight zoom on hover */
        }

        /* Gradient overlay */
        .service-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to bottom, rgba(23, 79, 162, 0.5), rgba(23, 79, 162, 0.8));
            z-index: 1;
        }

        /* Content overlay */
        .service-content {
            position: relative;
            z-index: 2;
        }

        /* Seamless, smaller button */
        .service-button {
            background-color: #DCE46B;
            color: #174FA2;
            padding: 0.3rem 0.75rem;
            font-weight: bold;
            border-radius: 0.25rem;
            transition: background-color 0.3s ease;
            font-size: 0.875rem; /* Smaller font size */
        }
        .service-button:hover {
            background-color: #b3cb51;
        }

        /* Separator line */
        .service-separator {
            width: 50px;
            height: 2px;
            background-color: #DCE46B;
            margin: 0.5rem 0;
        }

        
        .highlight-text {
            color: #174FA2;
            font-weight: bold;
        }

        .left-line {
    position: fixed;       /* Keeps the line fixed on the screen while scrolling */
    left: 0;               /* Aligns it to the very left of the viewport */
    top: 0;                /* Starts from the top of the viewport */
    height: 100vh;         /* Full height of the screen */
    width: 15px;            /* Adjust thickness as needed */
    background-color: #DCE46B; /* Theme color for the line */
    z-index: 10;           /* Ensures the line is above other content */
}

.faq-button {
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
}

.faq-button:hover {
    background-color: #c3c13e; /* Adjust hover color if desired */
}

.faq-content {
    transition: max-height 0.3s ease, padding 0.3s ease;
}


    </style>
</head>
<body class="bg-gray-100">

<!-- Container -->
<div class="max-w-screen-lg mx-auto">

<!-- Header Section -->
<header class="flex items-center justify-between py-4">
    <!-- Logo -->
    <div class="flex items-center">
        <img src="images/logo.png" alt="Logo" class="h-12 w-auto mr-4">
    </div>

    <!-- Navigation Items (Align to the right) -->
    <nav class="flex space-x-6">
        <a href="#home" class="text-theme font-semibold hover:text-gray-700">Home</a>
        <a href="#about" class="text-theme font-semibold hover:text-gray-700">About</a>
        <a href="#services" class="text-theme font-semibold hover:text-gray-700">Services</a>
        <a href="#contact" class="text-theme font-semibold hover:text-gray-700">Contact</a>
    </nav>
</header>

<!-- Left Vertical Line -->
<div class="left-line"></div>

<!-- Banner Section -->
<section class="grid grid-cols-1 md:grid-cols-2 gap-6 bg-theme text-white p-8 pb-0 rounded-lg mt-4">
    <!-- Left Grid: Centered Wording -->
    <div class="flex flex-col justify-center">
        <h1 class="text-4xl font-bold mb-4">Welcome to Our Website</h1>
        <h2 class="text-2xl font-light mb-6">We provide the best solutions for your needs.</h2>
        <p class="mb-6">Discover more about our services and see how we can help you achieve your goals.</p>
        <!-- Button -->
        <a href="#consultation" class="inline-block bg-[#DCE46B] text-[#174FA2] font-bold py-3 px-6 rounded-lg hover:bg-[#c3c13e] transition-all">
            Book Consultation Now
        </a>
    </div>
    <!-- Right Grid: Image aligned to the bottom -->
    <div class="flex items-stretch justify-center">
        <img src="images/car.png" alt="Banner Image" class="rounded-lg w-full h-full object-cover">
    </div>
</section>


<!-- Trusted by These Companies Section -->
<section class="my-12">
    <h2 class="text-center text-3xl font-bold mb-6 text-[#174FA2]">Trusted by These Companies</h2>

    <!-- Logos Display Section -->
    <div class="flex justify-center space-x-6">
        <!-- Logos (6 logos displayed in a row) -->
        <img src="images/logo1.png" alt="Company 1" class="h-16">
        <img src="images/logo2.png" alt="Company 2" class="h-16">
        <img src="images/logo3.png" alt="Company 3" class="h-16">
        <img src="images/logo4.png" alt="Company 4" class="h-16">
        <img src="images/logo5.png" alt="Company 5" class="h-16">
        <img src="images/logo6.png" alt="Company 6" class="h-16">
    </div>
</section>

<!-- Feature / Why Choose Us Section -->
<section class="my-20 px-6 md:px-12">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
        
        <!-- Left Column: Title with large text -->
        <div class="text-center lg:text-left">
            <h2 class="text-4xl md:text-5xl font-extrabold text-[#174FA2] mb-6">
                We’re here to give you <span class="highlight-text">effective ideas.</span>
            </h2>
        </div>

        <!-- Right Column: Smaller Info Section -->
        <div class="space-y-8">
            <!-- Pro Team -->
            <div class="flex items-start">
                <div class="mr-4 text-[#174FA2] text-3xl">
                    <i class="fas fa-users"></i>
                </div>
                <div>
                    <h3 class="text-xl font-semibold text-[#174FA2]">Pro Team</h3>
                    <p class="text-gray-700">Sit ed perspiciatis unde omnis iste natus error sit voluptatem veritatis iste accusantium aperiam doloremque sed aperiam voluptatem.</p>
                </div>
            </div>

            <!-- Great Experience -->
            <div class="flex items-start">
                <div class="mr-4 text-[#174FA2] text-3xl">
                    <i class="fas fa-trophy"></i>
                </div>
                <div>
                    <h3 class="text-xl font-semibold text-[#174FA2]">Great Experience</h3>
                    <p class="text-gray-700">Iste sit aperiam ed unde omnis iste natus error sit voluptatem veritatis iste accusantium aperiam doloremque sed aperiam voluptatem.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- "How We Work" Section -->
<section class="my-16">
    <h2 class="text-center text-3xl font-bold text-[#174FA2] mb-10">How We Work</h2>

    <!-- Grid layout for the steps -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">

        <!-- Step 1: Discovery & Research -->
        <div class="flex flex-col items-center p-6 bg-white rounded-lg hover:shadow-xl hover:bg-[#DCE46B] hover:text-[#174FA2] transition-all">
            <h3 class="text-xl font-semibold text-[#174FA2] mb-4">Discovery & Research</h3>
            <p class="text-gray-700 text-center">Set a foundation for the project by aligning on vision and scope to ensure all stakeholders are on the same page.</p>
        </div>

        <!-- Step 2: Strategy & Planning -->
        <div class="flex flex-col items-center p-6 bg-white  rounded-lg  hover:shadow-xl hover:bg-[#DCE46B] hover:text-[#174FA2] transition-all">
            <h3 class="text-xl font-semibold text-[#174FA2] mb-4">Strategy & Planning</h3>
            <p class="text-gray-700 text-center">Organize the project into achievable milestones to streamline design and development workflows.</p>
        </div>

        <!-- Step 3: Wireframing & Prototyping -->
        <div class="flex flex-col items-center p-6 bg-white  rounded-lg hover:shadow-xl hover:bg-[#DCE46B] hover:text-[#174FA2] transition-all">
            <h3 class="text-xl font-semibold text-[#174FA2] mb-4">Wireframing & Prototyping</h3>
            <p class="text-gray-700 text-center">Validate ideas and functionality with stakeholders and users before moving into high-fidelity design.</p>
        </div>

        <!-- Step 4: Visual Design & UI Design -->
        <div class="flex flex-col items-center p-6 bg-white  rounded-lg  hover:shadow-xl hover:bg-[#DCE46B] hover:text-[#174FA2] transition-all">
            <h3 class="text-xl font-semibold text-[#174FA2] mb-4">Visual Design & UI Design</h3>
            <p class="text-gray-700 text-center">Ensure the user interface is visually engaging, brand-aligned, and promotes a seamless user experience.</p>
        </div>

        <!-- Step 5: Development & Implementation -->
        <div class="flex flex-col items-center p-6 bg-white  rounded-lg  hover:shadow-xl hover:bg-[#DCE46B] hover:text-[#174FA2] transition-all">
            <h3 class="text-xl font-semibold text-[#174FA2] mb-4">Implementation</h3>
            <p class="text-gray-700 text-center">Build a high-performing, scalable product.</p>
        </div>

        <!-- Step 6: Testing & Optimization -->
        <div class="flex flex-col items-center p-6 bg-white  rounded-lg hover:shadow-xl hover:bg-[#DCE46B] hover:text-[#174FA2] transition-all">
            <h3 class="text-xl font-semibold text-[#174FA2] mb-4">Testing & Optimization</h3>
            <p class="text-gray-700 text-center">Quality assurance (QA) testing for usability, functionality, and performance across different devices and browsers.</p>
        </div>

    </div>
</section>

<!-- Our Services Section -->
<section class="my-20 px-4 md:px-12">
    <h2 class="text-center text-4xl font-extrabold text-[#174FA2] mb-12">Our Services</h2>

    <!-- Service Boxes Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-0">
        
        <!-- Service Box 1 -->
        <div class="service-box" style="background-image: url('images/c1.jpg');">
            <div class="service-overlay"></div>
            <div class="service-content">
                <h3 class="text-2xl font-bold mb-2">Digital Systems & Solutions</h3>
                <div class="service-separator"></div> <!-- Separator line -->
                <p class="mb-4">Innovative digital solutions for business automation, CRM, and ERP systems.</p>
                <button class="service-button">Learn More</button>
            </div>
        </div>

        <!-- Service Box 2 -->
        <div class="service-box" style="background-image: url('images/c2.jpg');">
            <div class="service-overlay"></div>
            <div class="service-content">
                <h3 class="text-2xl font-bold mb-2">UI/UX Design</h3>
                <div class="service-separator"></div> <!-- Separator line -->
                <p class="mb-4">Creating intuitive and visually appealing interfaces for web and mobile.</p>
                <button class="service-button">Learn More</button>
            </div>
        </div>

        <!-- Service Box 3 -->
        <div class="service-box" style="background-image: url('images/c3.jpg');">
            <div class="service-overlay"></div>
            <div class="service-content">
                <h3 class="text-2xl font-bold mb-2">Backend Infrastructure</h3>
                <div class="service-separator"></div> <!-- Separator line -->
                <p class="mb-4">Scalable backend solutions, API development, and cloud infrastructure.</p>
                <button class="service-button">Learn More</button>
            </div>
        </div>

        <!-- Service Box 4 -->
        <div class="service-box" style="background-image: url('your-image4.jpg');">
            <div class="service-overlay"></div>
            <div class="service-content">
                <h3 class="text-2xl font-bold mb-2">Project Management</h3>
                <div class="service-separator"></div> <!-- Separator line -->
                <p class="mb-4">Streamlined project management with agile methodology and resource allocation.</p>
                <button class="service-button">Learn More</button>
            </div>
        </div>

        <!-- Service Box 5 -->
        <div class="service-box" style="background-image: url('your-image5.jpg');">
            <div class="service-overlay"></div>
            <div class="service-content">
                <h3 class="text-2xl font-bold mb-2">User Acceptance Testing</h3>
                <div class="service-separator"></div> <!-- Separator line -->
                <p class="mb-4">Thorough testing to ensure product quality and user satisfaction.</p>
                <button class="service-button">Learn More</button>
            </div>
        </div>

        <!-- Service Box 6 -->
        <div class="service-box" style="background-image: url('your-image6.jpg');">
            <div class="service-overlay"></div>
            <div class="service-content">
                <h3 class="text-2xl font-bold mb-2">Data Analytics</h3>
                <div class="service-separator"></div> <!-- Separator line -->
                <p class="mb-4">Data-driven insights and analytics to inform strategic business decisions.</p>
                <button class="service-button">Learn More</button>
            </div>
        </div>

    </div>
</section>

<!-- New Section: Less code, less effort -->
<section class="my-20 px-6 md:px-12 text-center">
    <div>
        <!-- Title -->
        <h2 class="text-4xl font-extrabold text-[#174FA2] mb-4">
            Less code, less effort.
        </h2>
        
        <!-- Description -->
        <p class="text-xl text-gray-700 mb-12">
            Cut off the noise, focus on what matters.
        </p>

        <!-- Image with 20px border -->
        <div class="overflow-hidden">
            <img src="images/group.jpg" alt="Less Code Image" class="w-full borderborder-8 border-[#174FA2] rounded-xl">
        </div>
    </div>
</section>

<!-- Team Members Section -->
<!-- <section class="my-20 px-6 md:px-12">
    <h2 class="text-center text-4xl font-extrabold text-[#174FA2] mb-12">Meet Our Team</h2>

   
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-12">

      
        <div>
            <h3 class="text-3xl font-bold text-[#174FA2] mb-6">People & Management</h3>
            <div class="pl-6">
                <h4 class="text-xl font-semibold text-[#174FA2]">HAKIM</h4>
                <p class="text-lg font-light text-gray-600">PEOPLE</p>
            </div>
        </div>

      
        <div>
            <h3 class="text-3xl font-bold text-[#174FA2] mb-6">Business Development</h3>
            <div class="pl-6">
                <h4 class="text-xl font-semibold text-[#174FA2]">LUQMAN</h4>
                <p class="text-lg font-light text-gray-600">BD</p>
            </div>
        </div>

      
        <div>
            <h3 class="text-3xl font-bold text-[#174FA2] mb-6">Creative</h3>
            <div class="space-y-6 pl-6">
                <div>
                    <h4 class="text-xl font-semibold text-[#174FA2]">EDDIE</h4>
                    <p class="text-lg font-light text-gray-600">CREATIVE</p>
                </div>
                <div>
                    <h4 class="text-xl font-semibold text-[#174FA2]">FARA</h4>
                    <p class="text-lg font-light text-gray-600">CREATIVE</p>
                </div>
            </div>
        </div>

      
        <div>
            <h3 class="text-3xl font-bold text-[#174FA2] mb-6">Product</h3>
            <div class="pl-6">
                <h4 class="text-xl font-semibold text-[#174FA2]">ZURA</h4>
                <p class="text-lg font-light text-gray-600">PRODUCT</p>
            </div>
        </div>

        <div>
            <h3 class="text-3xl font-bold text-[#174FA2] mb-6">Development</h3>
            <div class="space-y-6 pl-6">
                <div>
                    <h4 class="text-xl font-semibold text-[#174FA2]">HAWA</h4>
                    <p class="text-lg font-light text-gray-600">DEVELOPER</p>
                </div>
                <div>
                    <h4 class="text-xl font-semibold text-[#174FA2]">ZATI</h4>
                    <p class="text-lg font-light text-gray-600">DEVELOPER</p>
                </div>
            </div>
        </div>

        
        <div>
            <h3 class="text-3xl font-bold text-[#174FA2] mb-6">Operations</h3>
            <div class="space-y-6 pl-6">
                <div>
                    <h4 class="text-xl font-semibold text-[#174FA2]">MIRA</h4>
                    <p class="text-lg font-light text-gray-600">SUPPORT</p>
                </div>
                <div>
                    <h4 class="text-xl font-semibold text-[#174FA2]">ERFIE</h4>
                    <p class="text-lg font-light text-gray-600">OPERATION</p>
                </div>
            </div>
        </div>

    </div>
</section> -->

<!-- Friends in Alliances Section -->
<!-- <section class="my-20 px-6 md:px-12">
    <h2 class="text-center text-4xl font-extrabold text-[#174FA2] mb-12">Friends in Alliances</h2>

  
    <div class="flex justify-center space-x-12">

   
        <div class="w-3/2 flex justify-center">
            <img src="images/fp.png" alt="Company 1" class="h-40 max-w-full">
        </div>

     
        <div class="w-3/2 flex justify-center">
            <img src="images/tb.png" alt="Company 2" class="h-40 max-w-full">
        </div>

    </div>
</section> -->

<!-- FAQ Section -->
<!-- <section id="faq" class="my-20 px-6 md:px-12">
    <h2 class="text-center text-4xl font-extrabold text-[#174FA2] mb-12">Frequently Asked Questions</h2>

    <div class="faq-container space-y-4">
        FAQ Item 1
        <div class="faq-item">
            <button class="faq-button w-full text-left rounded-lg shadow-md bg-[#174FA2] text-white px-4 py-3 font-semibold transition-all" onclick="toggleFaq(event)">
                What services do you provide?
            </button>
            <div class="faq-content p-4 bg-white text-gray-700 rounded-lg shadow-md mt-2 hidden">
                We offer a range of services, including UI/UX design, backend infrastructure, project management, and more.
            </div>
        </div>

        FAQ Item 2
        <div class="faq-item">
            <button class="faq-button w-full text-left rounded-lg shadow-md bg-[#174FA2] text-white px-4 py-3 font-semibold transition-all" onclick="toggleFaq(event)">
                How can I book a consultation?
            </button>
            <div class="faq-content p-4 bg-white text-gray-700 rounded-lg shadow-md mt-2 hidden">
                You can book a consultation through our website's booking form or contact us directly.
            </div>
        </div>

        FAQ Item 3
        <div class="faq-item">
            <button class="faq-button w-full text-left rounded-lg shadow-md bg-[#174FA2] text-white px-4 py-3 font-semibold transition-all" onclick="toggleFaq(event)">
                What is the typical project timeline?
            </button>
            <div class="faq-content p-4 bg-white text-gray-700 rounded-lg shadow-md mt-2 hidden">
                The project timeline varies depending on the scope. We generally follow a structured process, starting with discovery and ending with testing and deployment.
            </div>
        </div>
    </div>
</section>

<script>
    function toggleFaq(event) {
        const button = event.target;
        const content = button.nextElementSibling;

        Toggle the visibility of the answer
        if (content.classList.contains("hidden")) {
            content.classList.remove("hidden");
            button.classList.add("shadow-lg"); 
        } else {
            content.classList.add("hidden");
            button.classList.remove("shadow-lg"); 
        }
    }
</script> -->

<!-- Contact Form Section -->
<section id="contact-form" class="py-16 px-6 bg-gray-100">
    <h2 class="text-center text-3xl font-semibold text-[#174FA2] mb-10">Get in Touch</h2>

    <!-- Form Wrapper for Centering -->
    <form class="max-w-4xl mx-auto space-y-6">
        
        <!-- Name Fields Side by Side -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- First Name -->
            <div class="w-full">
                <label for="firstName" class="block text-gray-600 font-medium mb-2">First Name</label>
                <input type="text" id="firstName" name="firstName" class="w-full border border-gray-300 rounded-lg p-3 bg-transparent placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-[#174FA2]" placeholder="John">
            </div>
            <!-- Last Name -->
            <div class="w-full">
                <label for="lastName" class="block text-gray-600 font-medium mb-2">Last Name</label>
                <input type="text" id="lastName" name="lastName" class="w-full border border-gray-300 rounded-lg p-3 bg-transparent placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-[#174FA2]" placeholder="Doe">
            </div>
        </div>

        <!-- Company and Services Fields Side by Side -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Company -->
            <div class="w-full">
                <label for="company" class="block text-gray-600 font-medium mb-2">Company (or Personal)</label>
                <input type="text" id="company" name="company" class="w-full border border-gray-300 rounded-lg p-3 bg-transparent placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-[#174FA2]" placeholder="Company or 'Personal'">
            </div>
            <!-- Services Dropdown -->
            <div class="w-full">
                <label for="services" class="block text-gray-600 font-medium mb-2">Services</label>
                <select id="services" name="services" class="w-full border border-gray-300 rounded-lg p-3 bg-transparent text-gray-500 focus:outline-none focus:ring-2 focus:ring-[#174FA2]">
                    <option value="" disabled selected>Select a service</option>
                    <option value="uiux-design">UI/UX Design</option>
                    <option value="backend-infrastructure">Backend Infrastructure</option>
                    <option value="project-management">Project Management</option>
                    <option value="consulting">Consulting</option>
                </select>
            </div>
        </div>

        <!-- Project Description Field Full Width -->
        <div class="w-full">
            <label for="projectDescription" class="block text-gray-600 font-medium mb-2">Project Description (Briefly)</label>
            <textarea id="projectDescription" name="projectDescription" rows="4" class="w-full border border-gray-300 rounded-lg p-3 bg-transparent placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-[#174FA2]" placeholder="Provide a brief description..."></textarea>
        </div>

        <!-- Submit Button Centered -->
        <div class="text-center mt-6">
            <button type="submit" class="bg-[#174FA2] text-white font-semibold rounded-full py-2 px-8 shadow-sm hover:shadow-md hover:bg-[#1D5BC8] transition duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#174FA2]">
                Submit
            </button>
        </div>
    </form>
</section>

<!-- Footer Section -->
<footer class="bg-[#174FA2] text-white py-12 px-6 rounded-lg mb-12">
    <div class="max-w-6xl mx-auto">
        <!-- Footer Top Section with Logo, Navigation, and Social Links -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-8">
            <!-- Logo and Company Info -->
            <div class="text-center md:text-left">
                <!-- Company Logo as an Image -->
                <img src="images/footer.png" alt="Company Logo" class="h-12 mb-4" />
                <p class="mt-4 text-white">Your trusted partner for cutting-edge solutions. We deliver exceptional results with a focus on quality and innovation.</p>
                <div class="mt-6 space-x-4">
                    <!-- Social Links -->
                    <a href="#" class="text-white hover:text-[#174FA2] transition duration-200">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="text-white hover:text-[#174FA2] transition duration-200">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="text-white hover:text-[#174FA2] transition duration-200">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="#" class="text-white hover:text-[#174FA2] transition duration-200">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="text-center md:text-left">
                <h3 class="text-lg font-semibold text-white">Quick Links</h3>
                <ul class="mt-4 space-y-3">
                    <li><a href="#" class="text-white hover:text-[#174FA2] transition duration-200">Home</a></li>
                    <li><a href="#" class="text-white hover:text-[#174FA2] transition duration-200">Services</a></li>
                    <li><a href="#" class="text-white hover:text-[#174FA2] transition duration-200">Portfolio</a></li>
                    <li><a href="#" class="text-white hover:text-[#174FA2] transition duration-200">Contact</a></li>
                </ul>
            </div>

            <!-- Contact Information -->
            <div class="text-center md:text-left">
                <h3 class="text-lg font-semibold text-white">Contact Us</h3>
                <p class="mt-4 text-white">1234 Street Name, City, Country</p>
                <p class="mt-2 text-white">Phone: +123 456 7890</p>
                <p class="mt-2 text-white">Email: info@company.com</p>
            </div>
        </div>

        <!-- Footer Bottom Section -->
        <div class="border-t border-gray-700 pt-6 text-center">
            <p class="text-white text-sm">© 2024 Company Name. All rights reserved.</p>
        </div>
    </div>
</footer>


</div>

</body>
</html>


<!DOCTYPE html>
<html lang="en" data-pg-collapsed>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Design of the Week Template 12 - Pinegrow Web Editor</title>
        <link href="tailwind.css" rel="stylesheet" type="text/css">
        <script>/* Pinegrow Interactions, do not remove */ (function(){try{if(!document.documentElement.hasAttribute('data-pg-ia-disabled')) { window.pgia_small_mq=typeof pgia_small_mq=='string'?pgia_small_mq:'(max-width:767px)';window.pgia_large_mq=typeof pgia_large_mq=='string'?pgia_large_mq:'(min-width:768px)';var style = document.createElement('style');var pgcss='html:not(.pg-ia-no-preview) [data-pg-ia-hide=""] {opacity:0;visibility:hidden;}html:not(.pg-ia-no-preview) [data-pg-ia-show=""] {opacity:1;visibility:visible;display:block;}';if(document.documentElement.hasAttribute('data-pg-id') && document.documentElement.hasAttribute('data-pg-mobile')) {pgia_small_mq='(min-width:0)';pgia_large_mq='(min-width:99999px)'} pgcss+='@media ' + pgia_small_mq + '{ html:not(.pg-ia-no-preview) [data-pg-ia-hide="mobile"] {opacity:0;visibility:hidden;}html:not(.pg-ia-no-preview) [data-pg-ia-show="mobile"] {opacity:1;visibility:visible;display:block;}}';pgcss+='@media ' + pgia_large_mq + '{html:not(.pg-ia-no-preview) [data-pg-ia-hide="desktop"] {opacity:0;visibility:hidden;}html:not(.pg-ia-no-preview) [data-pg-ia-show="desktop"] {opacity:1;visibility:visible;display:block;}}';style.innerHTML=pgcss;document.querySelector('head').appendChild(style);}}catch(e){console&&console.log(e);}})()</script>
    </head>
    <body class="font-serif text-gray-500"> 
        <?php
            // Database connection
            $host = 'localhost';
            $dbname = 'staffs_airways';
            $username = 'root';
            $password = 'Sun@!77Jetty:com';

            $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

            // Fetch only available planes
            $query = 'SELECT * FROM planes WHERE availability_status = "available"';
            $stmt = $conn->prepare($query);
            $stmt->execute();
            $planes = $stmt->fetchAll(PDO::FETCH_ASSOC);
        ?>
        <header class="bg-gray-900 bg-opacity-95 py-2">
            <div class="container mx-auto relative">
                <link rel="stylesheet" href="tailwind.css">
                <nav class="flex flex-wrap items-center px-4">
                    <!-- Company Brand -->
                    <a href="#" class="font-bold font-sans hover:text-opacity-75 inline-flex items-center leading-none mr-4 space-x-1 text-primary-500 text-xl uppercase">
                        <svg
                            version="1.0"
                            xmlns="http://www.w3.org/2000/svg"
                            width="2.5em"
                            xml:space="preserve"
                            fill="currentColor"
                            viewBox="0 0 100 100"
                            height="2.5em"
                        >
                            <!-- Replace this SVG with your company's logo or relevant icon -->
                            <path d="... SVG path data here ..."></path>
                        </svg>
                        <span>Staffs_Airways</span>
                    </a>

                    <!-- Hamburger Menu for Mobile -->
                    <button
                        class="hover:bg-primary-500 hover:text-white ml-auto px-3 py-2 rounded text-white lg:hidden"
                        data-name="nav-toggler"
                    >
                        <!-- The lines of the hamburger menu -->
                        <span class="block border-b-2 border-current my-1 w-6"></span>
                        <span class="block border-b-2 border-current my-1 w-6"></span>
                        <span class="block border-b-2 border-current my-1 w-6"></span>
                    </button>

                    <!-- Navigation Menu -->
                    <div
                        class="flex-1 hidden space-y-2 w-full lg:flex lg:items-center lg:space-x-4 lg:space-y-0 lg:w-auto"
                        data-name="nav-menu"
                    >
                        <!-- Main Navigation Links -->
                        <div class="flex flex-col mr-auto lg:flex-row">
                            <a href="#" class="hover:text-gray-400 lg:p-4 py-2 text-white">Home</a>
                            <a href="#" class="hover:text-gray-400 lg:p-4 py-2 text-white">Flights</a>
                            <a href="index.php" class="hover:text-gray-400 lg:p-4 py-2 text-white">Plane Rentals</a>
                            <a href="aircraf.php" class="hover:text-gray-400 lg:p-4 py-2 text-white">Aircraft</a>
                            <a href="#" class="hover:text-gray-400 lg:p-4 py-2 text-white">Support</a>
                        </div>

                        <!-- Log In/Sign Up -->
                        <div class="flex-wrap inline-flex items-center py-1 space-x-2">
                            <a href="#" class="border border-primary-500 hover:bg-primary-500 hover:text-white inline-block px-6 py-2 text-primary-500">Log In</a>
                            <a href="#" class="bg-primary-500 border border-primary-500 hover:bg-primary-600 inline-block px-6 py-2 text-white">Sign Up</a>
                        </div>
                    </div>
                </nav>
            </div>
            <script>
                // Toggle the visibility of the navigation menu
                document.querySelector('[data-name="nav-toggler"]').addEventListener('click', function () {
                    const navMenu = document.querySelector('[data-name="nav-menu"]');
                    navMenu.classList.toggle('hidden'); // Toggle the hidden class to show/hide the menu
                });
            </script>
        </header>

        


        <main>
            <section class="bg-secondary-500 poster relative text-gray-300">
                <div class="container mx-auto pb-24 pt-72 px-4">
                    <div class="-mx-4 flex flex-wrap items-center space-y-6 lg:space-y-0">
                        <div class="px-4 w-full md:w-9/12 xl:w-7/12 2xl:w-6/12"> 
                            <p class="font-bold font-sans mb-1 text-2xl text-white">Plane Rentals</p>
                            <h1 class="font-bold mb-6 text-5xl text-white md:leading-tight lg:leading-tight lg:text-6xl">
                                For Your <span class="text-primary-500">Business Trips</span> or <span class="text-primary-500">Leisure Flights</span>
                            </h1>                             
                        </div>
                        <div class="bg-white1 p-6" style=" padding: 20px">
                            <h2 class="font-bold mb-2 text-gray-900 text-xl">Find the Perfect Plane for Your Journey</h2>
                            <form action="search_planes.php" method="POST"> 
                                    <div class="-mx-2 flex flex-wrap items-center" style = "padding: 20px">
                                        <!-- Departure Location -->
                                        <div class="p-2 w-full sm:flex-1">
                                            <!-- <label for="departure_location" class="sr-only">Departure Location</label> -->
                                            <input class="input1" type="text" name="departure_location" required  placeholder="From"/>
                                            <input class="input2" type="text" name="arrival_location" required  placeholder="To"/>
                                        </div>

                                        <!-- Arrival Location -->
                                        <!--div class="p-2 w-full sm:flex-1">
                                            <-!-- <label for="arrival_location" class="sr-only">Arrival Location</label> -!->
                                            <-!-- <input class="input2" type="text" name="arrival_location" required  placeholder="Enter your arrival location..."/> -!->
                                        </div-->

                                        <!-- Rental Date -->
                                        <div class="p-2 w-full sm:w-4/12">
                                            <label for="rental_date" class="sr-only">Date & Time</label>
                                            <input class="input3"  type="date" name="rental_date"required />
                                            <input class="input4" type="time"  name="rental_time"required />
                                        </div>

                                        <!-- Rental Time -!->
                                        <div class="p-2 w-full sm:w-4/12">
                                            <-!-- <label for="rental_time" class="sr-only">Rental Time</label> -!->
                                            <-!-- <input class="input4" type="time"  name="rental_time"required /> -!->
                                        </div-->

                                        <!-- Number of Passengers -->
                                        <div class="p-2 w-full sm:w-4/12">
                                            <label for="num_passengers" class="sr-only"><br></br><b>Passengers</b></label>
                                            <input class="input5" type="number"  name="num_passengers"min="1"required />
                                        </div>
 
                                        <!-- Search Button -->
                                        <div class="p-2 text-right w-full sm:flex-initial sm:w-auto">
                                            <button type="submit" class="bg-primary-500 hover:bg-primary-600 inline-block px-6 py-2 text-center text-white">
                                                <span>Search</span>
                                            </button>
                                        </div>                                         
                                    </div>                                     
                            </form>
                         </div>
                    </div>
                </div>
            </section>
        
            <?php
                // This script handles the form submission
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    // Process the form data
                    $departure_location = $_POST['departure_location'];
                    $arrival_location = $_POST['arrival_location'];
                    $rental_date = $_POST['rental_date'];
                    $rental_time = $_POST['rental_time'];
                    $num_passengers = $_POST['num_passengers'];

                    // Validate the form data
                    $is_valid = true; // You can add additional validation logic here

                    if ($is_valid) {
                        // Query to fetch available planes based on input data
                        $query = "SELECT * FROM planes WHERE departure_location = '$departure_location' AND arrival_location = '$arrival_location'";
                        $result = $conn->query($query);
                        
                        // Include the rest of the code to display available planes if the form is submitted and data is valid
                    }
                }
            ?>
            <!-- Include necessary Tailwind CSS (Assuming Tailwind is used) -->
            <!-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.0.0/dist/tailwind.min.css" rel="stylesheet"> -->


            <!-- Section with collapsible content -->
            <section class="py-24">
                <div class="container mx-auto px-4 space-y-12">
                    <!-- Plane Rental Information -->
                    <div class="flex flex-wrap items-center">
                        <!-- Image placeholder, replace with a relevant plane rental image -->
                        <div class="py-4 w-full lg:w-6/12">
                            <img src= "IMG_6280.AVIF" width="5000" height="1000" alt="Plane Image">
                        </div>

                        <!-- Description Section -->
                        <div class="py-4 w-full lg:w-6/12">
                            <div class="bg-white lg:-ml-12 lg:pl-12 lg:py-12">
                                <h2 class="mb-2 text-primary-500 text-xl">Plane Rentals & Much More</h2>
                                <h3 class="capitalize font-bold mb-4 text-4xl text-gray-900 xl:text-5xl">
                                    Experience Plane Rental Like Never Before
                                </h3>
                                <div class="bg-primary-500 mb-6 pb-1 w-2/12"></div>
                                <p class="mb-6">
                                    Experience the freedom and flexibility that only our plane rental service can provide.
                                    Our fleet is meticulously maintained, offering top-notch safety and comfort for all your
                                    travel needs. Whether you're booking for business or leisure, we ensure a smooth and reliable journey every time.
                                </p>

                                <!-- Collapsible content -->
                                <div id="extra-content" class="hidden"> <!-- Initially hidden -->
                                    <p>
                                        In addition to our premium rental services, we offer customized packages, including guided tours,
                                        advanced safety training, and luxury accommodations. Our experienced pilots are ready to provide
                                        personalized services to make your journey unforgettable.
                                    </p>
                                </div>

                                <!-- Button to toggle content visibility -->
                                <a
                                    id="toggle-content-btn"
                                    class="bg-primary-500 hover:bg-primary-600 inline-block px-6 py-2 text-white cursor-pointer"
                                >
                                    See More
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-wrap items-center">
                        <div class="py-4 w-full lg:w-4/12 xl:mr-auto xl:w-3/12">
                            <h4 class="capitalize font-bold mb-2 text-3xl text-gray-900">Our Service is Built with Trust</h4>
                            <p>
                                Trust is the foundation of our plane rental service. We prioritize safety, reliability, and customer satisfaction. With experienced pilots, a modern fleet, and 24/7 support, you can count on a seamless and secure experience every time.
                            </p>


                        </div>
                        <div class="py-4 w-full lg:w-8/12">
                            <div class="-mx-4 flex flex-wrap">
                                <!-- Feature 1: Insured & Safe -->
                                <div class="p-4 w-full md:w-4/12">
                                    <div> 
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 65 65" xml:space="preserve" fill-rule="evenodd" clip-rule="evenodd" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="2" stroke="currentColor" width="5rem" height="5rem" class="h-20 mb-3 text-primary-500 w-20">
                                            <path d="M13 50v-1.849a2.73 2.73 0 0 0-.741-1.87l-4.038-4.293A4.499 4.499 0 0 1 7 38.907V21.998A2.998 2.998 0 0 1 9.998 19h.004A2.999 2.999 0 0 1 13 21.998V27m38 23v-1.849c0-.695.265-1.364.741-1.87l4.038-4.293A4.499 4.499 0 0 0 57 38.907V21.998A2.998 2.998 0 0 0 54.002 19h-.004A2.999 2.999 0 0 0 51 21.998V27M29 56.379v-4.933c0-.383-.152-.751-.424-1.022A1.442 1.442 0 0 0 27.554 50H13.446c-.383 0-.751.152-1.022.424A1.442 1.442 0 0 0 12 51.446v4.933m23 0v-4.933c0-.383.152-.751.424-1.022A1.442 1.442 0 0 1 36.446 50h14.108c.383 0 .751.152 1.022.424.272.271.424.639.424 1.022v4.933" fill="none" stroke-width="2"></path>
                                            <path d="M28 50v-5.491c0-2.439-1-4.771-2.767-6.453l-7.49-7.13a2.71 2.71 0 0 0-3.785.047l-.002.002a2.767 2.767 0 0 0 0 3.912l4.527 4.527M36 50v-5.491c0-2.439 1-4.771 2.767-6.453l7.49-7.13a2.71 2.71 0 0 1 3.785.047l.002.002a2.767 2.767 0 0 1 0 3.912l-4.527 4.527M22.25 16.464a1.499 1.499 0 0 1 1.5-1.5h3.75a1.5 1.5 0 0 0 1.5-1.5V9.5A1.5 1.5 0 0 1 30.5 8h3A1.5 1.5 0 0 1 35 9.5v3.964a1.5 1.5 0 0 0 1.5 1.5h3.75a1.5 1.5 0 0 1 1.5 1.5V19.5a1.503 1.503 0 0 1-1.5 1.5H36.5a1.503 1.503 0 0 0-1.5 1.5v4a1.5 1.5 0 0 1-1.5 1.5h-3a1.5 1.5 0 0 1-1.5-1.5v-4a1.503 1.503 0 0 0-1.5-1.5h-3.75a1.503 1.503 0 0 1-1.5-1.5v-3.036z" fill="none" stroke-width="2"></path>
                                        </svg>
                                        <h4 class="font-bold text-gray-900 text-xl">Insured &amp; Safe</h4> 
                                    </div> 
                                </div>
            
                                <!-- Feature 2: Certified Pilots -->
                                <div class="p-4 w-full md:w-4/12">
                                    <div> 
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 65 65" xml:space="preserve" fill-rule="evenodd" clip-rule="evenodd" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="2" stroke="currentColor" width="5rem" height="5rem" class="h-20 mb-3 text-primary-500 w-20">
                                            <path d="M49.972 21.334c.003-2.264.011-4.339.028-5.976a2.574 2.574 0 0 0-1.082-2.109 2.596 2.596 0 0 0-2.344-.351m-.249.334-.002.001m-16.987-.534a17.589 17.589 0 0 1-11.907.2l-.003-.001A2.596 2.596 0 0 0 14 15.358v18.717m17.455 18.167 11.83-6.799" fill="none" stroke-width="2"></path>
                                            <path d="M54 14.908a6.172 6.172 0 0 0-8.146-5.848l-.002.001a14.905 14.905 0 0 1-9.999-.166l-2.623-.984a3.507 3.507 0 0 0-2.46 0l-2.623.984a14.905 14.905 0 0 1-9.999.166l-.002-.001A6.172 6.172 0 0 0 10 14.908V34.14a17.257 17.257 0 0 0 8.263 14.728l11.35 6.93a3.504 3.504 0 0 0 3.573.048l12.156-6.986A17.256 17.256 0 0 0 54 33.898v-18.99z" fill="none" stroke-width="2" stroke-linecap="butt"></path>
                                            <circle cx="32" cy="26" r="5" fill="none" stroke-width="2"></circle>
                                            <path d="M21.169 40.5C23.64 36.554 27.574 34 32 34c4.426 0 8.36 2.554 10.831 6.5" fill="none" stroke-width="2"></path>
                                        </svg>
                                        <h4 class="font-bold text-gray-900 text-xl">Certified Pilots</h4></h4> 
                                    </div> 
                                </div>
            
                                <!-- Feature 3: 24/7 Support -->
                                <div class="p-4 w-full md:w-4/12">
                                    <div> 
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 65 65" xml:space="preserve" fill-rule="evenodd" clip-rule="evenodd" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="2" stroke="currentColor" width="5rem" height="5rem" class="h-20 mb-3 text-primary-500 w-20">
                                            <path d="M38.028 13.749c8.148 2.342 14.116 9.856 14.116 18.753m-.479 4.315c-1.966 8.695-9.745 15.195-19.03 15.195m-4.854-.61c-8.423-2.159-14.656-9.807-14.656-18.9m.48-4.314c1.966-8.695 9.744-15.195 19.03-15.195m0 33.193v7.316m-13.1-7.9 1.674-1.674m-2.258-11.426h-7.316m7.9-13.099 1.674 1.674m11.426-9.575v7.317m11.425 2.258 1.674-1.674m7.901 13.099h-7.316M44.06 43.928l1.674 1.674" fill="none" stroke-width="2"></path>
                                            <circle cx="32.635" cy="32.502" r="26" fill="none" stroke-width="2"></circle>
                                            <path d="M37.039 34.711a2.369 2.369 0 0 1 1.652 2.01l.214 2a2.177 2.177 0 0 1-2.167 2.412h-.001c-5.92 0-10.727-4.807-10.727-10.728 0-1.799.444-3.495 1.228-4.985a2.779 2.779 0 0 1 2.365-1.44c.457-.051.973-.064 1.467-.077a1.956 1.956 0 0 1 2.004 2.038l-.17 4.093a1.522 1.522 0 0 1-.934 1.34l-1.584.66a6.562 6.562 0 0 0 2.251 3.485l1.456-1.725 2.946.917z" fill="none" stroke-width="2"></path>
                                        </svg>
                                        <h4 class="font-bold text-gray-900 text-xl">24/7 Support</h4> 
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <!-- END of Section with collapsible content -->

            <!-- JavaScript to toggle content visibility -->
            <script>
                document.getElementById('toggle-content-btn').addEventListener('click', function() {
                    var extraContent = document.getElementById('extra-content');
                    var isVisible = !extraContent.classList.contains('hidden');  // Check if content is visible

                    if (isVisible) {
                        extraContent.classList.add('hidden');  // Hide content
                        this.textContent = 'See More';  // Change button text
                    } else {
                        extraContent.classList.remove('hidden');  // Show content
                        this.textContent = 'See Less';  // Change button text
                    }
                });
            </script>
            <!-- END of JavaScript to toggle content visibility -->
            
            <!---Plane presentations--> 
            <?php
                // Fetch the initial set of planes (first 6)
                $initialCount = 6; // Initial count of planes
                $query = "SELECT * FROM planes LIMIT $initialCount"; // Fetch the first 6 planes
                $stmt = $conn->prepare($query);
                $stmt->execute();
                $initialPlanes = $stmt->fetchAll(PDO::FETCH_ASSOC);

                // Fetch all planes for "See More"
                $query = "SELECT * FROM planes"; // Fetch all planes
                $stmt = $conn->prepare($query);
                $stmt->execute();
                $allPlanes = $stmt->fetchAll(PDO::FETCH_ASSOC);
            ?>
            <section class="bg-gray-50 py-24">
                <div class="container mx-auto px-4">
                    <div class="-mx-4 flex flex-wrap items-center mb-6">
                        <div class="px-4 w-full md:flex-1">
                            <h2 class="font-medium mb-1 text-primary-500 text-xl">Our Top Planes</h2>
                            <h3 class="capitalize font-bold mb-4 text-4xl text-gray-900">Planes for All Your Needs</h3>
                            <div class="bg-primary-500 mb-6 pb-1 w-2/12"></div>
                        </div>
                    </div>

                    <div class="-mx-3 flex flex-wrap justify-center mb-12" id="plane-container">
                        <?php
                        // Display initial planes (first 6)
                        for ($i = 0; $i < 6; $i++) {
                            if ($i >= count($allPlanes)) {
                                break;
                            }

                            $plane = $allPlanes[$i];

                            echo "
                            <div class='p-3 w-full md:w-6/12 lg:w-4/12'>
                                <div class='bg-white border shadow-md text-gray-500'>
                                    <a href='#'>
                                        <img src='IMG_6281.JPG' class='hover:opacity-90 w-full' alt='Plane' width='600' height='450' />
                                    </a>
                                    <div class='p-6'>
                                        <h4 class='font-bold mb-2 text-gray-900 text-xl'>
                                            <a href='#' class='hover:text-gray-500'>{$plane['model']}</a>
                                        </h4>
                                        <p class='mb-2 text-sm'>{$plane['description']}</p>
                                        <hr class='border-gray-200 my-4' />
                                        <div class='flex items-center justify-between'>
                                            <div class='inline-flex items-center py-1 space-x-1'>
                                                <span>{$plane['rating']}</span>
                                                <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='currentColor' width='1.125em' height='1.125em' class='text-primary-500'>
                                                    <g>
                                                        <path d='M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928z'></path>
                                                    </g>
                                                </svg>
                                                <span>({$plane['number_of_reviews']} reviews)</span>
                                            </div>
                                            <p class='font-bold text-gray-900'>\${$plane['rental_price_per_hour']}/h</p>
                                        </div>
                                    </div>
                                </div>
                            </div>";
                        }
                        ?>
                    </div>

                    <div class="flex justify-center mt-8">
                        <button id="plane-see-more" class="bg-primary-500 hover:bg-primary-600 px-6 py-2 text-white">
                            See More
                        </button>
                        <button id="plane-see-less" class="bg-primary-500 hover:bg-primary-600 px-6 py-2 text-white" style="display: none; margin-left: 20px">
                            See Less
                        </button>
                    </div>
                </div>

                <script>
                    const allPlanes = <?php echo json_encode($allPlanes); ?>;
                    let currentStartIndex = 6;
                    const planesPerPage = 3;

                    // Function to load additional planes
                    function loadPlanes(startIndex, count) {
                        const container = document.getElementById("plane-container");

                        for (let i = startIndex; i < startIndex + count; i++) {
                            if (i >= allPlanes.length) {
                                break;
                            }

                            const plane = allPlanes[i];

                            const planeDiv = document.createElement("div");
                            planeDiv.className = "p-3 w-full md:w-6/12 lg:w-4/12";

                            planeDiv.innerHTML = `
                                <div class='bg-white border shadow-md text-gray-500'>
                                    <a href='#'>
                                        <img src='IMG_6289.JPG' class='hover:opacity-90 w-full' alt='Plane' width='600' height='450' />
                                    </a>
                                    <div class='p-6'>
                                        <h4 class='font-bold mb-2 text-gray-900 text-xl'>
                                            <a href='#' class='hover:text-gray-500'>${plane['model']}</a>
                                        </h4>
                                        <p>${plane['description']}</p>
                                        <hr class='border-gray-200 my-4' />
                                        <div class='flex items-center justify-between'>
                                            <div class='inline-flex items-center py-1 space-x-1'>
                                                <span>${plane['rating']}</span>
                                                <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='currentColor' width='1.125em' height='1.125em' class='text-primary-500'>
                                                    <g>
                                                        <path d='M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928z'></path>
                                                    </g>
                                                </svg>
                                                <span>(${plane['number_of_reviews']} reviews)</span>
                                            </div>
                                            <p class='font-bold text-gray-900'>$${plane['rental_price_per_hour']}/h </p>
                                        </div>
                                    </div>
                                </div>`;

                            container.appendChild(planeDiv);
                        }
                    }
                        
                    // Function to remove planes (for "See Less")
                    function removePlanes(count) {
                        const container = document.getElementById("plane-container");

                        for (let i = 0; i < count; i++) {
                            if (container.childNodes.length <= 6) {
                                break; // Don't remove if fewer than initial planes
                            }

                            container.removeChild(container.lastChild);
                        }

                        currentStartIndex -= count;
                    }

                    document.getElementById("plane-see-more").addEventListener("click", function() {
                        loadPlanes(currentStartIndex, planesPerPage);
                        currentStartIndex += planesPerPage;

                        if (currentStartIndex >= allPlanes.length) {
                            this.style.display = "none"; // Hide "See More" if all planes are displayed
                        }

                        document.getElementById("plane-see-less").style.display = "block"; // Show "See Less"
                    });

                    document.getElementById("plane-see-less").addEventListener("click", function() {
                        removePlanes(planesPerPage);

                        if (currentStartIndex < allPlanes.length) {
                            document.getElementById("plane-see-more").style.display = "block"; // Show "See More" if not all planes are displayed
                        }

                        if (currentStartIndex <= 6) {
                            this.style.display = "none"; // Hide "See Less" if only initial planes are displayed
                        }
                    });
                </script>
            </section>
            <!-- END ofPlane presentations--> 
            
            <!-- Fletching by model-->
            <!-- <?php
                // // Fetch all unique plane models from the database
                // $query = "SELECT DISTINCT model FROM planes";
                // $stmt = $conn->prepare($query);
                // $stmt->execute();
                // $models = $stmt->fetchAll(PDO::FETCH_ASSOC);

                // // Define the initial number of models to display and increment step for "See More"
                // $initialModelCount = 4;
                // $incrementStep = 4;
            ?>
            <section class="py-24">
                <div class="container mx-auto px-4">
                    <div class="-mx-4 flex flex-wrap items-center mb-6">
                        <div class="px-4 w-full md:flex-1">
                            <h2 class="font-medium mb-1 text-primary-500 text-xl">Our Fleet</h2>
                            <h3 class="capitalize font-bold mb-4 text-4xl text-gray-900">Browse by Model</h3>
                            <div class="bg-primary-500 mb-6 pb-1 w-2/12"></div>
                        </div>
                    </div>
                    <div class="-mx-3 flex flex-wrap justify-center" id="model-container">
                        <?php
                        // Display the initial set of models
                        for ($i = 0; $i < $initialModelCount; $i++) {
                            if ($i >= count($models)) {
                                break;
                            }

                            $modelName = $models[$i]['model'];

                            // Fetch planes for each model
                            $planeQuery = "SELECT * FROM planes WHERE model = :model";
                            $planeStmt = $conn->prepare($planeQuery);
                            $planeStmt->bindParam(':model', $modelName);
                            $planeStmt->execute();
                            $planes = $planeStmt->fetchAll(PDO::FETCH_ASSOC);

                            // Display each plane in the section
                            foreach ($planes as $plane) {
                                echo "
                                <div class='p-3 w-full md:w-6/12 lg:w-3/12'>
                                    <a href='#' class='bg-white block border group hover:text-gray-500 shadow-md text-gray-900'>
                                        <img src='IMG_6290.WEBP' class='group-hover:opacity-90 w-full' alt='{$plane['model']}' />
                                        <div class='px-6 py-4'>
                                            <h4 class='font-bold text-xl'>{$plane['model']}</h4>
                                            <p>Capacity: {$plane['maximum_capacity']}</p>
                                        </div>
                                    </a>
                                </div>";
                            }
                        }
                        ?>
                    </div>
                    <div class="flex justify-center mt-8" style="margin-top: 30px">
                        <button id="model-see-more" class="bg-primary-500 hover:bg-primary-600 px-6 py-2 text-white">
                            See More
                        </button>
                        <button id="model-see-less" class="bg-primary-500 hover:bg-primary-600 px-6 py-2 text-white" style="display: none;margin-left: 50px;">
                            See Less
                        </button>
                    </div>
                </div>
            </section>
            <script>
                const allModels = <?php echo json_encode($models); ?>;
                const incrementStep = <?php echo $incrementStep; ?>;
                let currentModelIndex = <?php echo $initialModelCount; ?>;

                function loadMoreModels() {
                    const container = document.getElementById("model-container");
                    for (let i = currentModelIndex; i < currentModelIndex + incrementStep; i++) {
                        if (i >= allModels.length) break;

                        const modelName = allModels[i]['model'];

                        const modelDiv = document.createElement("div");
                        modelDiv.className = "p-3 w-full md:w-6/12 lg:w-3/12";

                        modelDiv.innerHTML = `
                            <a href='#' class='bg-white block border group hover:text-gray-500 shadow-md text-gray-900'>
                                <img src='IMG_6280.AVIF' class='group-hover:opacity-90 w-full' alt='Plane Image' />
                                <div class='px-6 py-4'>
                                    <h4 class='font-bold text-xl'>${modelName}</h4>
                                </div>
                            </a>`;

                        container.appendChild(modelDiv);
                    }

                    currentModelIndex += incrementStep;

                    if (currentModelIndex >= allModels.length) {
                        document.getElementById("model-see-more").style.display = "none";
                    }

                    document.getElementById("model-see-less").style.display = "block";
                }

                function removeModels() {
                    const container = document.getElementById("model-container");
                    for (let i = 0; i < incrementStep; i++) {
                        if (currentModelIndex <= 6) break; // Ensure minimum models
                        container.removeChild(container.lastChild);
                    }

                    currentModelIndex -= incrementStep;

                    if (currentModelIndex <= 4) {
                        document.getElementById("model-see-less").style.display = "none";
                    }

                    document.getElementById("model-see-more").style.display = "block";
                }

                document.getElementById("model-see-more").addEventListener("click", loadMoreModels);
                document.getElementById("model-see-less").addEventListener("click", removeModels);
            </script> -->
            <!-- END ofFletching by model-->
            
            <!-- Customer Testimonials-->
            <section class="bg-gray-900 bg-opacity-95 py-24 text-gray-400">
                <div class="container mx-auto px-4">
                    <div class="-mx-4 flex flex-wrap items-center mb-6">
                        <div class="px-4 w-full md:w-10/12">
                            <h2 class="font-medium mb-1 text-primary-500 text-xl">Customer Testimonials</h2>
                            <h3 class="capitalize font-bold mb-4 text-4xl text-white">What Our Customers Say About Our Plane Rentals</h3>
                            <div class="bg-primary-500 mb-6 pb-1 w-2/12"></div>
                        </div>
                    </div>

                    <div class="flex flex-wrap -mx-4 items-center">
                        <!-- Testimonial Image -->
                        <div class="p-4 w-full lg:w-4/12">
                            <img src="bottom3.jpg" alt="Customer Photo" width="360" height="360" />
                        </div>

                        <!-- Testimonial Text -->
                        <div class="p-4 w-full lg:w-8/12">
                            <svg viewBox="0 0 24 24" fill="currentColor" class="h-16 inline-block mb-4 text-primary-500 w-16">
                                <path d="M23 1V5.06504C21.9136 5.67931 21.0807 6.43812 20.5012 7.34146C19.958 8.24481 19.5416 9.20235 19.2519 10.2141C18.9621 11.2258 18.8173 12.346 18.8173 13.5745H23V22.4634H14.0914V16.935C14.0914 13.6107 14.3992 11.0813 15.0148 9.34688C15.6667 7.61246 16.6444 6.02258 17.9481 4.57723C19.2519 3.09575 20.9358 1.90334 23 1ZM9.90864 1V5.06504C8.82222 5.67931 7.9893 6.43812 7.40988 7.34146C6.83045 8.24481 6.39588 9.20235 6.10617 10.2141C5.81646 11.2258 5.67161 12.346 5.67161 13.5745H9.90864V22.4634H1V16.935C1 13.6107 1.30782 11.0813 1.92346 9.34688C2.57531 7.61246 3.55309 6.02258 4.85679 4.57723C6.16049 3.09575 7.84444 1.90334 9.90864 1Z"></path>
                            </svg>

                            <!-- Testimonial Text and Customer Information -->
                            <p class="font-light mb-5 text-xl">
                                "Renting a plane from Staffs Airways was an amazing experience! The service was seamless from start to finish. Our plane was in perfect condition, and the customer support was top-notch. It made our business trip so much easier."
                            </p>
                            <h4 class="font-bold mb-1 text-2xl text-primary-500">Kathryn Murphy</h4>
                            <p class="text-white">Chief Technology Officer</p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END of Customer Testimonials-->

            <section class="bg-primary-500 py-16 text-center text-gray-300"> 
                <div class="container mx-auto px-4 relative"> 
                    <h2 class="capitalize font-bold mb-6 text-4xl text-white">Download Our App &amp; Get Started</h2>
                    <div class="flex-wrap inline-flex items-center py-1 space-x-2"> <a href="#" class="border border-white hover:bg-white hover:inline-flex hover:items-center hover:space-x-2 hover:text-gray-900 inline-flex items-center px-6 py-2 space-x-2 text-white"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="1.5em" height="1.5em" fill="currentColor" class="me-1">
                                <path d="M11.624 7.222c-.876 0-2.232-.996-3.66-.96-1.884.024-3.612 1.092-4.584 2.784-1.956 3.396-.504 8.412 1.404 11.172.936 1.344 2.04 2.856 3.504 2.808 1.404-.06 1.932-.912 3.636-.912 1.692 0 2.172.912 3.66.876 1.512-.024 2.472-1.368 3.396-2.724 1.068-1.56 1.512-3.072 1.536-3.156-.036-.012-2.94-1.128-2.976-4.488-.024-2.808 2.292-4.152 2.4-4.212-1.32-1.932-3.348-2.148-4.056-2.196-1.848-.144-3.396 1.008-4.26 1.008zm3.12-2.832c.78-.936 1.296-2.244 1.152-3.54-1.116.048-2.46.744-3.264 1.68-.72.828-1.344 2.16-1.176 3.432 1.236.096 2.508-.636 3.288-1.572z"></path>
                            </svg><span>App Store</span></a><a href="#" class="border border-white hover:bg-white hover:inline-flex hover:items-center hover:space-x-2 hover:text-gray-900 inline-flex items-center px-6 py-2 space-x-2 text-white"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="1.5em" height="1.5em" fill="currentColor" class="me-1">
                                <path d="M3.609 1.814L13.792 12 3.61 22.186a.996.996 0 0 1-.61-.92V2.734a1 1 0 0 1 .609-.92zm10.89 10.893l2.302 2.302-10.937 6.333 8.635-8.635zm3.199-3.198l2.807 1.626a1 1 0 0 1 0 1.73l-2.808 1.626L15.206 12l2.492-2.491zM5.864 2.658L16.802 8.99l-2.303 2.303-8.635-8.635z"></path>
                            </svg><span>Google Play</span></a> 
                    </div>                     
                </div>
            </section>
            <!-- ADDITION !!!!?????-->
            <!-- END of ADDITION !!!!?????-->
        </main>
        <footer class="bg-black bg-opacity-90 pt-12 text-gray-300">
            <div class="container mx-auto px-4 relative">
                <div class="flex flex-wrap -mx-4">
                    <!-- Company Information -->
                    <div class="p-4 w-full lg:w-4/12">
                        <a href="#" class="font-bold font-sans hover:text-opacity-90 inline-flex items-center leading-none mb-4 space-x-2 text-3xl text-primary-500 uppercase">
                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="3em" xml:space="preserve" fill="currentColor" viewBox="0 0 100 100" height="3em">
                                <path d="M38.333 80a11.571 11.571 0 0 1-7.646-2.883A11.724 11.724 0 0 1 26.834 70H10V46.667L43.333 40l20-20H90v26.667H43.995l-27.328 5.465v11.2h11.166a11.787 11.787 0 0 1 4.212-4.807 11.563 11.563 0 0 1 12.577 0 11.789 11.789 0 0 1 4.213 4.807h7.833V70h-6.837a11.719 11.719 0 0 1-3.853 7.117A11.571 11.571 0 0 1 38.333 80Zm0-16.667a5 5 0 1 0 5 5 5.006 5.006 0 0 0-5.001-5Zm27.761-36.666L52.762 40h30.571V26.667Z"></path>
                                <path d="M56.667 63.333h-7.833a11.6 11.6 0 0 0-21 0H16.667v-11.2l27.328-5.465h12.672Z" opacity="0.2"></path>
                                <path d="M90 63.333H80v-10h-6.667v10h-10V70h10v10H80V70h10Z"></path>
                                <path d="M52.762 40h30.571V26.667H66.094Z" opacity="0.2"></path>
                            </svg>
                            <span>Staffs Airways</span>
                        </a>
                        <ul class="mb-4 space-y-1">
                            <li>Staffordshire University, UK</li>
                            <li><a href="#" class="hover:text-gray-400 text-white">+44 123 456 7890</a></li>
                            <li><a href="mailto:info@staffsairways.com" class="hover:text-gray-400 text-white">info@staffsairways.com</a></li>
                        </ul>
                        <div class="flex-wrap inline-flex space-x-3">
                            <a href="#" aria-label="facebook" class="hover:text-gray-400"> 
                                <svg viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5">
                                    <path d="M14 13.5h2.5l1-4H14v-2c0-1.03 0-2 2-2h1.5V2.14c-.326-.043-1.557-.14-2.857-.14C11.928 2 10 3.657 10 6.7v2.8H7v4h3V22h4v-8.5z"/>
                                </svg>
                            </a>
                            <a href="#" aria-label="twitter" class="hover:text-gray-400"> 
                                <svg viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5">
                                    <path d="M22.162 5.656a8.384 8.384 0 0 1-2.402.658A4.196 4.196 0 0 0 21.6 4c-.82.488-1.719.83-2.656 1.015a4.182 4.182 0 0 0-7.126 3.814 11.874 11.874 0 0 1-8.62-4.37 4.168 4.168 0 0 0-.566 2.103c0 1.45.738 2.731 1.86 3.481a4.168 4.168 0 0 1-1.894-.523v.052a4.185 4.185 0 0 0 3.355 4.101 a4.21 4.21 0 0 1-1.89.072A4.185 4.185 0 0 0 7.97 16.65 a8.394 8.394 0 0 1-6.191 1.732 a11.83 11.83 0 0 0 6.41 1.88 c7.693 0 11.9-6.373 11.9-11.9"/>
                                </svg>
                            </a>
                            <a href="#" aria-label="instagram" class="hover:text-gray-400"> 
                                <svg viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5">
                                    <path d="M12 2c2.717 0 3.056.01 4.122.06 1.065.05 1.79.217 2.428.465.66.254 1.216.598 1.772 1.153a4.908 4.908 0 0 1 1.153 1.772c.247.637.415 1.363.465 2.428.047 1.066.06 1.405.06 4.122 0 2.717-.01 3.056-.06 4.122-.05 1.065-.218 1.79-.465 2.428 a4.883 4.883 0 0 1-1.153 1.772 a4.915 4.915 a0 0 a a 2.428 3.43"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    
                    <!-- Company Links -->
                    <div class="p-4 w-full sm:w-6/12 md:flex-1 lg:w-3/12">
                        <h2 class="font-bold text-primary-500 text-xl">Company</h2>
                        <hr class="border-gray-600 inline-block mb-6 mt-4 w-3/12">
                        <ul>
                            <li class="mb-4"><a href="#" class="hover:text-gray-400">FAQ</a></li>
                            <li class="mb-4"><a href="#" class="hover:text-gray-400">News</a></li>
                            <li class="mb-4"><a href="#" class="hover:text-gray-400">Careers</a></li>
                            <li class="mb-4"><a href="#" class="hover:text-gray-400">About Us</a></li>
                            <li class="mb-4"><a href="#" class="hover:text-gray-400">Contact Us</a></li>
                        </ul>
                    </div>

                    <!-- Planes Links -->
                    <div class="p-4 w-full sm:w-6/12 md:flex-1 lg:w-3/12">
                        <h2 class="font-bold text-primary-500 text-xl">Planes</h2>
                        <hr class="border-gray-600 inline-block mb-6 mt-4 w-3/12">
                        <ul>
                            <li class="mb-4"><a href="#" class="hover:text-gray-400">Private Jets</a></li>
                            <li class="mb-4"><a href="#" class="hover:text-gray-400">Commercial Airplanes</a></li>
                            <li class="mb-4"><a href="#" class="hover:text-gray-400">Charter Flights</a></li>
                            <li class="mb-4"><a href="#" class="hover:text-gray-400">Cargo Planes</a></li>
                            <li class="mb-4"><a href="#" class="hover:text-gray-400">Helicopters</a></li>
                        </ul>
                    </div>

                    <!-- Popular Destinations -->
                    <div class="p-4 w-full md:w-5/12 lg:w-4/12">
                        <h2 class="font-bold text-primary-500 text-xl">Popular Destinations</h2>
                        <hr class="border-gray-600 inline-block mb-6 mt-4 w-3/12">
                        <div class="-mx-4 flex flex-wrap">
                            <div class="pb-4 px-4 w-full sm:w-6/12">
                                <ul>
                                    <li class="mb-4"><a href="#" class="hover:text-gray-400">Paris</a></li>
                                    <li class="mb-4"><a href="#" class="hover:text-gray-400">London</a></li>
                                    <li class="mb-4"><a href="#" class="hover:text-gray-400">Amsterdam</a></li>
                                    <li class="mb-4"><a href="#" class="hover:text-gray-400">Berlin</a></li>
                                    <li class="mb-4"><a href="#" class="hover:text-gray-400">Dublin</a></li>
                                </ul>
                            </div>
                            <div class="pb-4 px-4 w-full sm:w-6/12">
                                <ul>
                                    <li class="mb-4"><a href="#" class="hover:text-gray-400">Glasgow</a></li>
                                    <li class="mb-4"><a href="#" class="hover:text-gray-400">Liverpool</a></li>
                                    <li class="mb-4"><a href="#" class="hover:text-gray-400">Bristol</a></li>
                                    <li class="mb-4"><a href="#" class="hover:text-gray-400">Manchester</a></li>
                                    <li class="mb-4"><a href="#" class="hover:text-gray-400">Birmingham</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="py-4">
                    <hr class="mb-4 opacity-25">
                    <div class="flex flex-wrap -mx-4 items-center">
                        <div class="px-4 py-2 w-full md:flex-1">
                            <p>&copy; 2021 - 2024. All Rights Reserved - Staffs Airways</p>
                        </div>
                        <div class="px-4 py-2 w-full md:w-auto">
                            <a href="#" class="hover:text-gray-400">Privacy Policy</a> | 
                            <a href="#" class="hover:text-gray-400">Terms of Use</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </body>
</html>
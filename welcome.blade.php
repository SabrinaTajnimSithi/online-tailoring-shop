<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <div id="slideshow" class="carousel slide" data-bs-ride="carousel">
        <!-- Slides -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://media.istockphoto.com/id/856917576/photo/formal-shirt-with-button-down-collar-isolated-on-white.jpg?s=612x612&w=0&k=20&c=kcZmZdMFb5I2XkhnyAWCFAZgmxuAh0Kk_bFP_w0Ij5A=" alt="Slide 1">
            </div>
            <div class="carousel-item">
                <img src="https://www.stylecraze.com/wp-content/uploads/2018/01/4.-Anarkali-Suit.jpg" alt="Slide 2">
            </div>
            <div class="carousel-item">
                <img src="https://i.pinimg.com/564x/92/fd/85/92fd85fd3d5fe3322374914addd225f4.jpg" alt="Slide 3">
            </div>
        </div>
    <style>
        #slideshow {
            display: flex;
            justify-content: center;
            align-items: left;
            height: 400px;
            background-color: #f1f1f1;
        }

        .carousel-inner {
            display: flex;
            justify-content: center;
            align-items: left;
            height: 100%;
        }

        .carousel-item img {
            max-height: 100%;
            max-width: 100%;
            object-fit: contain;
        }
    </style>


        <!-- Previous and Next buttons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#slideshow" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#slideshow" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Tailoring System</title>
    <!-- Add your stylesheets and scripts here -->
    <style>
        body {
            height: 125vh;
            margin-top: 80px;
            padding: 30px;
            background-size: cover;
            font-family: sans-serif;
        }

        header {
            background-color: orange;
            position: fixed;
            left: 0;
            right: 0;
            top: 0;
            height: 50px;
            display: flex;
            align-items: center;
            box-shadow: 0 0 25px 0 black;
            z-index: 999;
        }

        header * {
            display: inline;
        }

        header ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        header li {
            margin: 0 10px;
            background-color: black;
            padding: 10px;
        }

        header li a {
            color: white;
            text-decoration: none;
        }

        /* Add your custom styles here */
        body {
            background-image: url('https://images.unsplash.com/photo-1594332495179-d979bcd18142?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80');
            background-size: cover;
            background-position: center;
        }
        
        .logo-container {
            display: flex;
            align-items: center;
            max-width: 150px; /* Adjust the width as needed */
            margin-right: auto;
            margin-left: 0;
        }


        header {
            background-color: #f8f8f8; /* Set the background color for the header */
            padding: 20px; /* Add padding as needed */
        }

        .watermarked-logo {
            opacity: 0.5; /* Adjust the opacity for the watermark effect */
        }

        .navbar {
            display: flex;
            align-items: center;
        }

        .logo {
            flex: 0 0 auto; /* Prevent the logo from growing or shrinking */
            margin-right: 10px; /* Adjust the margin between the logo and navigation links */
        }

        .nav-links {
            flex: 1; /* Allow the navigation links to grow and fill the remaining space */
            list-style: none;
            display: flex;
            justify-content: space-between;
            padding: 0;
        }

        .nav-links li {
            margin-right: 10px; /* Adjust the margin between the navigation links */
        }

        .nav-links a {
            text-decoration: none;
            color: white; /* Set the color for the navigation links */
            font-weight: white;
        }

        

    </style>
</head>
<body>
<header>
    <div class="navbar">
        <div class="logo">
            <img src="data:image/jpeg;base64,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" alt="Logo" class="watermarked-logo">
        </div>
        <ul class="nav-links">
            <li><a href="/home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="#products">Products</a></li>
            <li><a href="#tailors">Tailors</a></li>
            <li>
                @if(Auth::check())
                    <a href="/home">Welcome, {{ Auth::user()->name }}</a>
                @else
                    <a href="/register">Sign Up</a>
                @endif
            </li>
        </ul>
    </div>
</header>


<!-- Rest of your HTML content -->






    <main>
        <section id="home">
            <!-- Add your home content here -->
            <h1>Welcome to the Online Tailoring System</h1>
            <p>Get your clothes tailored to perfection with our convenient online tailoring services.</p>
        </section>

        <section id="about" style="background-color: #c95d5d; padding: 50px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-center">
                        <h2>About Us</h2>
                        <p>We are a team of experienced tailors dedicated to providing high-quality tailoring services online. With our easy-to-use platform, you can submit your measurements and preferences, and we will create custom-tailored garments just for you.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="services" style="background-color: #8a521a; padding: 50px;">
            <div class="container">
                <h2 class="text-center">Our Services</h2>
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <ul class="service-list">
                            <li class="fadein">
                                <h3>Custom Tailoring for Men and Women</h3>
                                <p>We offer custom tailoring services for both men and women, ensuring that your garments are perfectly fitted to your measurements and preferences.</p>
                            </li>
                            <li class="fadein">
                                <h3>Alterations and Repairs</h3>
                                <p>Need alterations or repairs for your clothing? Our skilled tailors are here to help. Whether it's hemming, resizing, or fixing damaged items, we've got you covered.</p>
                            </li>
                            <li class="fadein">
                                <h3>Specialty Services</h3>
                                <p>Looking for specialty services? We specialize in creating bridal wear and formal wear, ensuring that you look stunning on your special occasions.</p>
                            </li>
                            <li class="fadein">
                                <h3>Fast and Reliable Delivery</h3>
                                <p>We understand the importance of timely delivery. Our team ensures fast and reliable delivery of your tailored garments right to your doorstep.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <style>
                .logo-container {
                    max-width: 50px; /* Adjust the width as needed */
                    margin-right: auto;
                    margin-left: 0;
                }

                .fadein {
                    opacity: 0;
                    animation: fadeIn 2s ease-in-out forwards;
                }

                @keyframes fadeIn {
                    0% { opacity: 0; }
                    100% { opacity: 1; }
                }
            </style>
        </section>





        <section id="contact" style="background-color: #e09448; padding: 50px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-center">
                        <h2>Contact Us</h2>
                        <p>If you have any questions or inquiries, please feel free to reach out to us using the contact information below:</p>
                        <div class="contact-info">
                            <p><i class="fa fa-envelope"></i> Email: <a href="mailto:saifulislamreza48@gmail.com">saifulislamreza48@gmail.com</a></p>
                            <p><i class="fa fa-envelope"></i> Email: <a href="mailto:jamila@gmail.com">jamila@gmail.com</a></p>
                            <p><i class="fa fa-phone"></i> Phone: <a href="tel:+880134567890">+88 013-456-7890</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section id="products">
            <h2>Our Products</h2>
            <div class="product-container">
                <div class="product">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR-6WZyz0EKuWJkac04XO88UdC4BjJfka2tBQ&usqp=CAU" alt="Product 1">
                    <p class="price">$19.99</p>
                </div>
                <div class="product">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQTg5xR2AsoRaJ-t1SYMGjZevyXsEzBZfeynA&usqp=CAU" alt="Product 2">
                    <p class="price">$29.99</p>
                </div>
                <div class="product">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTutWAWiYx6hyzaHBWJqOZRc317kORHqgRSyQ&usqp=CAU" alt="Product 3">
                    <p class="price">$39.99</p>
                </div>
                <div class="product">
                    <img src="https://images.unsplash.com/photo-1585487000160-6ebcfceb0d03?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=434&q=80" alt="Product 4">
                    <p class="price">$39.99</p>
                </div>
                <div class="product">
                    <img src="https://images.pexels.com/photos/45982/pexels-photo-45982.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Product 5">
                    <p class="price">$19.99</p>
                </div>
                <div class="product">
                    <img src="https://images.pexels.com/photos/2850487/pexels-photo-2850487.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Product 6">
                    <p class="price">$29.99</p>
                </div>
                <div class="product">
                    <img src="https://images.unsplash.com/photo-1583743814966-8936f5b7be1a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=387&q=80" alt="Product 7">
                    <p class="price">$10.99</p>
                </div>
                <div class="product">
                    <img src="https://images.unsplash.com/photo-1596755094514-f87e34085b2c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=388&q=80" alt="Product 8">
                    <p class="price">$15.99</p>
                </div>
                <div class="product">
                    <img src="https://images.unsplash.com/photo-1618354691373-d851c5c3a990?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=415&q=80" alt="Product 9">
                    <p class="price">$10.99</p>
                </div>

            </div>
        </section>
        <section id="tailors">
            <h1>Meet Our Expert Tailors</h1>
            <p>Experience the craftsmanship of our skilled tailors who create bespoke garments.</p>
            
            <div class="contact-details">
                <h2>Contact Information</h2>
                <p>For inquiries or appointments, please reach out to our tailors:</p>
                
                <ul>
                <li><strong>Name:</strong> Salam Khan</li>
                    <li><strong>Phone:</strong> +88 123-456-7890</li>
                    <li><strong>Email:</strong> tailor@example.com</li>
                    <li><strong>Address:</strong> 123 Tailoring Street, City, Bangladesh</li>
                </ul>
            </div>
        </section>



        <!-- <section id="products">
            <h2>Our Products</h2>
            <div class="product-container">
                <div class="product">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR-6WZyz0EKuWJkac04XO88UdC4BjJfka2tBQ&usqp=CAU" alt="Product 1">
                    <p class="price">$19.99</p>
                    <form action="{{ route('carts.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="1">
                        <button type="submit">Buy</button>
                    </form>
                </div>
                <!-- Add more products with buy buttons -->
            <!-- </div>
        </section> --> -->


        <section id="/review">
            <h2><li><a href="/reviews">Review</a></li></h2>
            <form action="{{ route('reviews.store') }}" method="POST">
            @csrf
                <style>
                /* Customize the form field styles */
                #review input[type="text"],
                #review input[type="email"],
                #review input[type="text"] {
                    border: 2px solid green; /* Set the border color */
                    border-radius: 4px; /* Add border radius for rounded corners */
                    padding: 8px; /* Add some padding for better spacing */
                }
                </style>

                <!-- Add your form fields here (e.g., name, email, password) -->
                <input type="text" name="name" placeholder="Name" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="Text" name="Comment" placeholder="Comment" required>
                <button type="submit">Submit</button>
            </form>
        </section>
    </main>

    <footer>
        <div class="footer-content">
            <p>&copy; 2023 Online Tailoring System. All rights reserved.</p>
            <div class="payment-logos">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSK96oAMAhGYhZmy9ig_7Q16HYs13X9-VxnuJCR4-wQtGayFz5FGawU9ganTL_00lTFUSc&usqp=CAU" alt="bKash">
                <img src="https://seeklogo.com/images/D/dutch-bangla-rocket-logo-B4D1CC458D-seeklogo.com.png" alt="Rocket">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQqD8zddRwkc1_94r-X-GCNgoTRtrtybzCbZ-O7SRd16TmawEWH9Kg7qP5M5Fmk3Xoebww&usqp=CAU" alt="Nagad">
            </div>
        </div>
        <style> 
                .footer-content {
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .payment-logos img {
                width: 50px;
                margin: 0 10px;
            }
        <style>

    </footer>


</body>
</html>

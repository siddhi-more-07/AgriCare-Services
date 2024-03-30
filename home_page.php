<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>AgriCare's Home</title>
    <link rel="icon" href="images/plant-cover-removebg.png">
</head>
<body>
<?php
        include("includes/Header.html");
    ?>
    <div class="container">

    <!-- Home Section -->
        <div class="home-bg">
            <div class="home-intro">
                <h1>AgriCare Solutions</h1></br>
                <p>Your One-Stop Shop for Agricultural Services.</p>
            </div>
        </div>

        <!-- About Section -->
        <div class="about" id="about-section">
            <div class="about-img">
            </div>
            <div class="about-info">
                <h1>About Us</h1></br>
                <p>At AgriCare Solutions, we are more than just a farm equipment rental 
                    platform. we are your partner in every aspect of farming. 
                    Our one-stop platform brings together a range of services 
                    designed to empower farmers and enhance their agricultural 
                    experience.</p></br>
                    <p>Recognizing the need for a comprehensive platform, we set out to 
                        create a space where farmers could access not only top-quality 
                        equipment but also a marketplace for their products, expert 
                        healthcare services, and farm decoration solutions. </p>
            </div>
        </div>

        <!-- Services Section -->
        <div class="services" id="services-section">
            <div class="heading">
                <p style="text-align:center;">Our Services</p>
            </div>
            <div class="service-img"></div>
            <div class="cards">

                <!-- buy -->
                <div class="actual-card">
                    <div class="buy-card">
                        <img src="images/buy.png" class="card-img">
                        <h1>Buy Equipment</h1></br>
                        <p>From fertilizers and seeds to essential farming tools, find everything you need to cultivate a successful harvest. </p>
                        <button type="button">Learn More</button>
                    </div>
                </div>

                <!-- sell -->
                <div class="actual-card">
                        <div class="sell-card">
                            <img src="images/sell.png" class="card-img">
                            <h1>Sell Equipment</h1></br>
                            <p>Connect with buyers directly on AgroRentalHub, Sell your farm produce without the involvement of middlemen.</p>
                            <button type="button">Learn More</button>
                        </div>
                </div>

                <!-- rent -->
                <div class="actual-card">
                    <div class="rent-card">
                        <img src="images/rent.png" class="card-img">
                        <h1>Rent Equipment</h1></br>
                        <p>Renting on AgroRentalHub includes From tractors and plows to harvesters and cultivators, access state-of-the-art machiner.</p>
                        <button type="button">Learn More</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Special Section -->
        <div class="special-services">
            <div class="heading">
                <p>Our Special Services</p>
            </div>
            <div class="special-cards">

                <!-- plant health consultant -->
                <div class="Plant-health">
                    <div class="head">
                        <p>Plant Health Consultation</p>
                    </div>
                    <div class="info">
                        <p>Connect with our specialized team of doctors who are well-versed in diagnosing and treating plant diseases as well as animal diseases ensuring the optimal health of your livestock.</p>
                        <button type="button"  class="health-btn"><a href="plant-health-consultant.php">Explore Now >></a></button>
                    </div>
                </div>

                <!-- farm tourists -->
                <div class="farm-tourist">
                    <div class="head">
                        <p>Agricultural Tourism</p>
                    </div>
                    <div class="info">
                        <p>Our dedicated team specializes in transforming areas of your farm into enchanting tourist destinations, providing an opportunity for visitors to connect with the roots of agriculture.</p>
                        <button type="button" class="health-btn"><a href="tourism-services.php">Explore Now >></a></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="special-section2">

            <!-- animal health consultant -->
            <div class="animal-health">
                 <div class="head">
                    <p>Animal Heath Consultation</p>
                 </div>   
                 <div class="infosection">
                    <p>Our Animal Health Consultation service is designed to offer farmers specialized guidance and support in maintaining the well-being of their animals.</p>
                    <button type="button" class="animal-btn"><a href="animal-health-consultant.php">Explore Now >></a></button> 
                </div>
            </div>

            <!-- Construction services -->
            <div class="construction">
                <div class="head">
                    <p>Farm Construction Services</p>
                </div>
                <div class="infosection">
                    <p>Contact our construction team to design and build custom structures for your farm. Explore our Farm Construction Services for tailored shelter and housing solutions.</p>
                    <button type="button" class="construct-btn"><a href="construction-services.php">Explore Now >></a></button>
                </div>
            </div>
        </div>
    </div>
    <?php
        include("includes/Footer.html");
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/plant-health-consultant.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Plant consultance</title>
</head>
<body>
    <?php
        include("includes/Header.html");
    ?>
    <div class="container">

        <!-- cover section -->
        <div class="cover">
            <div class="content">
                <h1>Plant-Health Consultance</h1>
                <div class="info">
                    <div class="data">
                        <p class="textbg"><strong>Worried about pests, diseases, or nutrient deficiencies?</strong> Don't stress! We provide comprehensive care for your farmland, including soil testing, pest management, and customized plant health plans. Let us help you achieve peak crop performance naturally and efficiently.</p>
                        <button type="button"><a href="#team-woking">Explore More</a></button>
                    </div>
                    <div class="pic">
                    </div>
                </div>
            </div>
        </div>

        <!-- Team Introduction -->
        <div class="team-section" id="team-woking">
            <h1>what our team actually does?</h1>
            <div class="teamintro">

                <!-- previous team -->
                <div class="back">
                    <button type="button" id="previous-team" onclick="previousteam()"><i class="fa-solid fa-backward"></i></button>
                </div>

                <!-- team-info -->
                    <!-- team1-farmhouse builders -->
                <div class="team1" id="team1">
                    <div class="team1-img"></div>
                    <div class="team1-data">
                        <h1>Crops Wellness</h1>
                        <p>we believe in crop wellness: a holistic approach to ensuring your plants thrive from seed to harvest. We go beyond just treating problems, focusing on preventative care, optimized nutrition, and natural solutions.</p>
                        <button type="button"><a href="#team-contact">Contact Now</a></button>
                    </div>
                </div> 

                    <!-- team2- shelter builders -->
                <div class="team2" id="team2">
                    <div class="team2-img"></div>
                    <div class="team2-data">
                        <h1>Expert Plant Health Care</h1>
                        <p>We use modern tools and data to gain a deep understanding of your crops' needs. This allows us to provide targeted recommendations and interventions for better growth, higher yields, and increased profits. Let us partner with you to unlock the full potential of your farmland and cultivate a thriving future for your farm.</p>
                        <button type="button"><a href="#team-contact">Contact Now</a></button>
                    </div>
                </div>

                <!-- next team -->
                <div class="next">
                    <button type="button" id="next-team" onclick="nextteam()"><i class="fa-solid fa-forward"></i></button>
                </div>
            </div>
        </div>

        <!-- Contact the team -->
        <div class="team-contact" id="team-contact">
            <h1>Contact our Team</h1>
            <div class="service-provider1">
                <div class="work-samples1">
                    <div class="sample1-image1"></div> 
                    <div class="sample1-image2"></div>  
                    <div class="sample1-image3"></div>   
                </div>
                <div class="personal-info1">
                    <img src="images/plant-doctor.jpg" class="img">
                    <div class="info">
                        <h1>Crops Wellness</h1>
                        <p>We providing the right nutrients at the right time. Our team of experts will analyze your soil and create a personalized fertilizer plan that ensures your plants have the essential nutrients they need to thrive, naturally.</p>
                        <p>Get a call from us</p>
                        <a href="construction-team-contact.php">contact here</a>
                    </div>
                </div>
            </div>
            
            <hr>

            <div class="service-provider1">
                <div class="work-samples1">
                    <div class="sample2-image1"></div> 
                    <div class="sample2-image2"></div>  
                    <div class="sample2-image3"></div>   
                </div>
                <div class="personal-info1">
                    <img src="images/plant-doctor2.jpg" class="img">
                    <div class="info">
                        <h1>Plant Health Care</h1>
                        <p>Our team encompasses expert advice on seed selection, planting timing, and suitable environments. Our team helps you choose the optimal seeds for your soil and climate, plant at the ideal time for maximum growth, and create the perfect environment for your crops to thrive.</p>
                        <p>Get a call from us</p>
                        <a href="construction-team-contact.php">contact here</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <?php
        include("includes/Footer.html");
    ?>

    <script>
        function previousteam()
        {
            document.getElementById('team1').style.display="flex";
            document.getElementById('team2').style.display="none";
        }
        function nextteam()
        {
            document.getElementById('team2').style.display="flex";
            document.getElementById('team1').style.display="none";
        }
    </script>
</body>
</html>
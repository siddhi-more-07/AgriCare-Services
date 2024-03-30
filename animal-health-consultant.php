<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/animal-health-consultant.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Animal health consultance</title>
</head>
<body>
    <?php
        include("includes/Header.html");
    ?>
    <div class="container">

        <!-- cover section -->
        <div class="cover">
            <div class="content">
                <h1>Animal-Health Consultance</h1>
                <div class="info">
                    <div class="data">
                        <p class="textbg">we believe in providing comprehensive, personalized care for your animals. We go beyond just treating symptoms by focusing on your animal's overall well-being and environmental needs.</p>
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
                        <h1>Animal Wellness</h1>
                        <p>Our dedicated team of specialists work side-by-side with you to optimize your animal's health and well-being. We offer personalized health plans, disease prevention strategies, and on-farm support for all your livestock needs.</p>
                        <button type="button"><a href="#team-contact">Contact Now</a></button>
                    </div>
                </div> 

                    <!-- team2- shelter builders -->
                <div class="team2" id="team2">
                    <div class="team2-img"></div>
                    <div class="team2-data">
                        <h1>Expert Animal Health Care</h1>
                        <p>We understand the unique challenges of farm animal health. That's why we tailor our services to your specific needs and goals, maximizing animal productivity and overall farm success.</p>
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
            <h1>Contact our Doctors</h1>
            <div class="service-provider1">
                <div class="work-samples1">
                    <div class="sample1-image1"></div> 
                    <div class="sample1-image2"></div>  
                    <div class="sample1-image3"></div>   
                </div>
                <div class="personal-info1">
                    <img src="images/animal-doctor.png" class="img">
                    <div class="info">
                        <h1>Animal Wellness</h1>
                        <p>Unexpected emergencies can happen anytime, That's why we offers 24/7 emergency services. Our dedicated team of experienced technicians is always available to provide immediate care for your animal.</p>
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
                    <img src="images/animal-worksample1.jpg" class="img">
                    <div class="info">
                        <h1>Animal Health Care</h1>
                        <p>we believe in providing comprehensive, personalized care for your animals. We go beyond just treating symptoms by focusing on your animal's overall well-being. This holistic approach helps us identify and address underlying issues, preventing future problems and ensuring your animal's long-term health.</p>
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
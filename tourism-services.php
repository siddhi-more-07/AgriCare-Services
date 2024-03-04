<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/tourism-services.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Farm Tourism Services</title>
</head>
<body>
    <?php
        include("includes/Header.html");
    ?>
    <div class="container">

        <!-- cover section -->
        <div class="cover">
            <div class="content">
                <h1>Farm Tourism Services</h1>
                <div class="info">
                    <div class="data">
                        <p class="textbg">We create peaceful spots on farms where you can unwind in the midst of nature. Let us design your perfect retreat for a peaceful escape and a touch of farm tranquility.</p>
                        <button type="button"><a href="#team-woking">Explore More</a></button>
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
                        <h1>Tourist ready farm</h1>
                        <p>We create peaceful spots on farms where you can unwind in the midst of nature. Let us design your perfect retreat for a peaceful escape and a touch of farm tranquility.</p>
                        <button type="button"><a href="#team-contact">Contact Now</a></button>
                    </div>
                </div> 

                    <!-- team2- shelter builders -->
                <div class="team2" id="team2">
                    <div class="team2-img"></div>
                    <div class="team2-data">
                        <h1>Kid-Friendly Gardens</h1>
                        <p>Our team creates delightful gardens for children to explore and enjoy. Spark creativity and fun with our specially designed gardens, turning your farm into a playful haven for the little ones.</p>
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
            <h1>Contact our Agents</h1>
            <div class="service-provider1">
                <div class="work-samples1">
                    <div class="sample1-image1"></div> 
                    <div class="sample1-image2"></div>  
                    <div class="sample1-image3"></div>   
                </div>
                <div class="personal-info1">
                    <img src="images/construction-team.png" class="img">
                    <div class="info">
                        <h1>Farm Tourisms</h1>
                        <p>With 10+ years of experience our team customizes every construction, and we have special interior designers to make your space unique. At farm tourist Builders, we don't just renew your farms; we create cozy attractions for your farm life.</p>
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
                    <img src="images/construction-team2.jpeg" class="img">
                    <div class="info">
                        <h1>Kids Friendly Gardens</h1>
                        <p>With over a decade of expertise, we stand as the premier choice for Farm garden Builders. Our team specializes in tailoring each construction, and we collaborate with dedicated designers to add a special touch.</p>
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
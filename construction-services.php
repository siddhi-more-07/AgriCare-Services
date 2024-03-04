<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/construction-services.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Our Construction Services</title>
</head>
<body>
    <?php
        include("includes/Header.html");
    ?>
    <div class="container">

        <!-- cover section -->
        <div class="cover">
            <div class="content">
                <h1>Our Construction Services</h1>
                <div class="info">
                    <div class="data">
                        <p class="textbg">our construction team is here to turn your ideas into reality. From simple and practical shelters to comfortable farmhouses, we create structures that fit right into the rural charm of your surroundings.</p>
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
                        <h1>Farmhouse Builders</h1>
                        <p>Our dedicated team specializes in crafting homes that perfectly fit the peaceful vibe of rural life. From concept to construction, we bring expertise, personalized design, and quality craftsmanship to every farmhouse project.</p>
                        <button type="button"><a href="#team-contact">Contact Now</a></button>
                    </div>
                </div> 

                    <!-- team2- shelter builders -->
                <div class="team2" id="team2">
                    <div class="team2-img"></div>
                    <div class="team2-data">
                        <h1>Shelter/Barn Builders</h1>
                        <p>From basic shelters to classic barns, we bring simplicity and functionality to every project. Our focus is on crafting structures that seamlessly blend with your farm life, providing the perfect spaces for your needs.</p>
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
                        <h1>Farmhouse Builders</h1>
                        <p>With 10+ years of experience our team customizes every construction, and we have special interior designers to make your space unique. At Farmhouse Builders, we don't just build houses; we create cozy homes for your farm life.</p>
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
                    <img src="images/barnwood-builders.png" class="img">
                    <div class="info">
                        <h1>Barn Builders</h1>
                        <p>With over a decade of expertise, we stand as the premier choice for Barn Builders. Our team specializes in tailoring each construction, and we collaborate with dedicated interior designers to add a special touch.</p>
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
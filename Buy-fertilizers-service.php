<?php

error_reporting(0);
$quantity = $_POST['kg'];
$image = "";
$heading = "";
$offerprice = "";
$marketprice = "";
$desc = "";
if (isset($_GET["image"]) && isset($_GET["heading"])) {
    $image = $_GET["image"];
    $heading = $_GET["heading"];
    //for Plant-based
    if ($heading == "Plant-based") {
        $offerprice = "250/-";
        $marketprice = "350/-";
        $desc = "Plant-based fertilizers are made from plant-based products, such as agricultural by-products and plant residue. They are automatically vegan and organic. A long-standing recommendation as a plant-based fertilizer. Organic soybean meal or cornmeal can be difficult to find.";
    }
    //for Cottonseed meal
    if ($heading == "Cottonseed meal") {
        $offerprice = "280/-";
        $marketprice = "400/-";
        $desc = "Cottonseed meal is an organic fertilizer that is a byproduct of ginning cotton, extracting the oil, and crushing the seeds. It is a nitrogen fertilizer with an N to K ratio of 6:4. It also contains phosphorus, potassium, and other minor plant food elements.";
    }
    //for Kelp meal
    if ($heading == "Kelp meal") {
        $offerprice = "300/-";
        $marketprice = "400/-";
        $desc = "Kelp meal is a natural, organic fertilizer made from kelp, a type of seaweed that grows in cold, shallow waters. It's a popular fertilizer for gardens and farms";
    }
    //for Compost
    if ($heading == "Compost") {
        $offerprice = "250/-";
        $marketprice = "350/-";
        $desc = "Compost is a mix of substances and organic matter used to enrich and enhance soil, usually made by decomposing plants, food waste, and other organic materials.";
    }
    //for Manure
    if ($heading == "Manure") {
        $offerprice = "250/-";
        $marketprice = "350/-";
        $desc = "Manure is obtained naturally by the decomposition of dead plants and animals. Fertilizers are chemical substances and are not typically natural. It is not very rich in nutrients. It is rich in soil nutrients like nitrogen, phosphorous, and potassium.";
    }
    //for Bone meal
    if ($heading == "Bone meal") {
        $offerprice = "250/-";
        $marketprice = "350/-";
        $desc = "Bone meal fertilizer is a slaughterhouse byproduct that uses beef bones ground up into a fine powder or turned into a granular form. Bone meal fertilizer contains elements that can improve the health of flowering plants like roses and tulips.";
    }
    //for Blood meal
    if ($heading == "Blood meal") {
        $offerprice = "250/-";
        $marketprice = "350/-";
        $desc = "Blood meal is a dry, inert powder made from blood that can be used as an organic fertilizer. It's a high-nitrogen source, with 13.25% N, 1.0% P, and 0.6% K. Blood meal is usually a by-product from slaughterhouses, and can be made from cattle or hogs.";
    }
    //for Fish emulsion
    if ($heading == "Fish emulsion") {
        $offerprice = "250/-";
        $marketprice = "350/-";
        $desc = "Fish emulsion fertilizer is a fast-acting, organic liquid fertilizer made from byproducts of the fishing industry. It's made from whole fish or parts of fish, such as fish scraps, fish oil, and fish meal.";
    }
    //for Nitrogen fertilizers
    if ($heading == "Nitrogen fertilizers") {
        $offerprice = "250/-";
        $marketprice = "350/-";
        $desc = "Nitrogen fertilizers are chemical fertilizers that are used to help plants grow. Nitrogen is a key nutrient that plants need to grow. Nitrogen fertilizers are available in the form of gas or liquid and are converted into salts over time.";
    }
    //for Urea
    if ($heading == "Urea") {
        $offerprice = "200/-";
        $marketprice = "250/-";
        $desc = "Urea is a source of Nitrogen, an essential nutrient crucial for crop growth and development. Urea is the most important nitrogenous fertilizer in the country because of its high N content (46%N).";
    }

    //for Monoammonium phosphate (MAP)
    if ($heading == "Monoammonium phosphate (MAP)") {
        $offerprice = "300/-";
        $marketprice = "460/-";
        $desc = "Sweet oranges contain 88.5% moisture, 0.05% fat, 0.7% crude protein, 0.3% ash, TSS (11˚ Brix), pH (3.8), per cent acidity (0.51%), total sugars (8.36%), reducing sugars (1.8%), non reducing sugars (6.56%) and ascorbic acid (46.5mg/ml).";
    }
    //for Superphosphate
    if ($heading == "Superphosphate") {
        $offerprice = "200/-";
        $marketprice = "250/-";
        $desc = "Superphosphate is the first chemical fertilizer. It was first made in about 1840 from bonemeal and sulfuric acid. Shortly later, superphosphate was made from rock phosphate ore by treatment with sulfuric acid. ";
    }
    //for Triple superphosphate (TSP)
    if ($heading == "Triple superphosphate (TSP)") {
        $offerprice = "240/-";
        $marketprice = "300/-";
        $desc = "Triple superphosphate is a soluble phosphate fertilizer containing about 20% total P (44-48% P2O5). Besides P, TSP also contains 13-15% calcium (Ca), and a maximum of 4% residual phosphoric acid (H3PO4).";
    }
    //for Muriate of potash (MOP)
    if ($heading == "Muriate of potash (MOP)") {
        $offerprice = "150/-";
        $marketprice = "250/-";
        $desc = "Muriate of potash, also known as potassium chloride contains 60% potash. Potash is essential for plant growth and quality. It plays a vital role in the production of proteins and sugars.";
    }
    //for Sulphate of potash (SOP)
    if ($heading == "Sulphate of potash (SOP)") {
        $offerprice = "155/-";
        $marketprice = "250/-";
        $desc = "SOP provides both potassium and sulphur in soluble forms. SOP contains no chloride and hence has a much lower salt index than MOP. Where soils are saline or sodic and where irrigation water may have high chloride levels SOP is the preferred form of potassium to use.";
    }
    //for Calcium fertilizers
    if ($heading == "Calcium fertilizers") {
        $offerprice = "230/-";
        $marketprice = "345/-";
        $desc = "Calcium is an essential nutrient for crops. It's important for plant tissue production and growth. Calcium is also required for plant cell walls and membranes.";
    }
    //for Gypsum
    if ($heading == "Gypsum") {
        $offerprice = "225/-";
        $marketprice = "330/-";
        $desc = "Gypsum is one of the earliest forms of fertilizer used in the United States. It has been applied to agricultural soils for more than 250 years. Gypsum is a moderately soluble source of the essential plant nutrients, calcium and sulfur, and can improve overall plant growth.";
    }
    //for Epsom salts
    if ($heading == "Epsom salts") {
        $offerprice = "180/-";
        $marketprice = "260/-";
        $desc = "Epsom salt, also known as magnesium sulfate, is a versatile salt-like substance that can be used as a garden supplement. It can help plants grow bushier, produce more flowers, and have better color. It can also help seeds germinate and repel slugs and other garden pests.";
    }
    //for Elemental sulfur
    if ($heading == "Elemental sulfur") {
        $offerprice = "140/-";
        $marketprice = "260/-";
        $desc = "Elemental sulphur fertilizers (0-0-0-90 to 99) are granular, with 90 to 99 per cent sulphur in the elemental form. Elemental sulphur cannot be directly used by plants. It must first be converted to sulphate-sulphur (SO4-2 -S) by soil microorganisms.";
    }

    if(isset($_POST["Place_Order"])){
    header("Location: confirm-myorder.php?offerprice=$offerprice&heading=$heading&quantity=$quantity");
    exit;
    }
    
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="styles/buy-service.css">
    <title>Book/Sell Service</title>
</head>

<body>
        <div class="container">
            <div class="box">
                <div class="img">
                    <?php
                    echo '<img src="' . $image . '" alt="Crop">';
                    ?>
                </div>
                <div class="info">
                    <header>
                        <i class="fa-solid fa-xmark" id="backToCrops"></i>
                        <?php
                        echo '<h1>' . $heading . '</h1>';
                        ?>
                    </header>
                    <div class="card">
                        <span onclick="gfg(1)" class="star">★
                        </span>
                        <span onclick="gfg(2)" class="star">★
                        </span>
                        <span onclick="gfg(3)" class="star">★
                        </span>
                        <span onclick="gfg(4)" class="star">★
                        </span>
                        <span onclick="gfg(5)" class="star">★
                        </span>
                        <h4 id="output">
                            Rating is: 0/5
                        </h4>
                    </div>

                    <div class="product-data">
                        <div class="price">
                            <h3>Rs.
                                <?php echo "$offerprice"; ?>
                            </h3>
                            <h4>
                                <?php echo "$marketprice"; ?>
                            </h4>
                        </div>
                        <div class="description">
                            <p>
                                <?php echo "$desc"; ?>
                            </p>
                        </div>

                        <a href="confirm-myorder.php" target="_blank"><button class="placeorderbtn">Place Order</button></a>
                    </div>
                </div>
            </div>
        </div>

    <script>
        // script.js

        // To access the stars
        let stars =
            document.getElementsByClassName("star");
        let output =
            document.getElementById("output");

        // Funtion to update rating
        function gfg(n) {
            remove();
            for (let i = 0; i < n; i++) {
                if (n == 1) cls = "one";
                else if (n == 2) cls = "two";
                else if (n == 3) cls = "three";
                else if (n == 4) cls = "four";
                else if (n == 5) cls = "five";
                stars[i].className = "star " + cls;
            }
            output.innerText = "Rating is: " + n + "/5";
        }

        // To remove the pre-applied styling
        function remove() {
            let i = 0;
            while (i < 5) {
                stars[i].className = "star";
                i++;
            }
        }

        //close window 
        const backToCropsIcon = document.getElementById('backToCrops');
        backToCropsIcon.addEventListener('click', function () {
            // Redirect to the crops.php file
            window.location.href = 'Crops.php';
        });
    </script>
</body>

</html>
<?php
$image = "";
$heading = "";
$offerprice = "";
$marketprice = "";
$desc = "";
if (isset($_GET["image"]) && isset($_GET["heading"])) {
    $image = $_GET["image"];
    $heading = $_GET["heading"];
    //for carrot
    if($heading == "Fresh Carrot")
    {
        $offerprice = "30/-";
        $marketprice = "50/-";
        $desc = "One medium carrot has 25 calories,  Carrots are about 88% water, Carrots are a rich source of beta-carotene, which your body converts to vitamin A. Vitamin A is important for healthy vision and immunity, Vitamin K is important for bone health and blood clotting.";
    }
    //for potatos
    if($heading == "Fresh Potato")
    {
        $offerprice = "20/-";
        $marketprice = "30/-";
        $desc = "Potatoes are a good source of many essential nutrients. Vitamin C, potassium, vitamin B6, and niacin. Minerals: Potassium, manganese, phosphorus, and copper. Potatoes are a good source of both soluble and insoluble fiber, which is important for digestive health.";
    }
    //for tomatos
    if($heading == "Fresh Tomatos")
    {
        $offerprice = "20/-";
        $marketprice = "30/-";
        $desc = "Tomatoes are an excellent source of vitamin C, They also contain vitamin K, important for blood clotting and bone health. Each tomato provides around 1.2 grams of fiber, aiding digestion and promoting gut health. Composed of about 95% water, tomatoes help keep you hydrated and feeling refreshed.";
    }
    //for peas
    if($heading == "Fresh Peas")
    {
        $offerprice = "20/-";
        $marketprice = "30/-";
        $desc = "peas are plant-based protein, with 4.1 grams per half-cup. Peas are rich in dietary fiber, boasting 3.6 grams per half-cup.  Peas are a treasure trove of essential vitamins and minerals, including Vitamin A (important for vision and immunity), Vitamin C (for immune function and collagen production).";
    }
    //for beetroot
    if($heading == "Fresh Beetroot")
    {
        $offerprice = "30/-";
        $marketprice = "50/-";
        $desc = "One cup provides 3.8 grams of fiber, aiding digestion, keeping you feeling full, and potentially contributing to heart health. beetroot offers a good dose of essential vitamins and minerals like vitamin B6, copper, potassium, magnesium, and iron, contributing to various bodily functions.";
    }
    //for onion
    if($heading == "Fresh Beetroot")
    {
        $offerprice = "30/-";
        $marketprice = "50/-";
        $desc = "One cup provides 3.8 grams of fiber, aiding digestion, keeping you feeling full, and potentially contributing to heart health. beetroot offers a good dose of essential vitamins and minerals like vitamin B6, copper, potassium, magnesium, and iron, contributing to various bodily functions.";
    }
    //for beetroot
    if($heading == "Fresh Onion")
    {
        $offerprice = "25/-";
        $marketprice = "35/-";
        $desc = "Onions are high in vitamin C, which helps with immune health, collagen production, and iron absorption. Onions are a powerful antioxidant that can protect cells from free radicals. Onions have anti-inflammatory properties.";
    }
    //for cabbage
    if($heading == "Fresh Cabbage")
    {
        $offerprice = "20/-";
        $marketprice = "30/-";
        $desc = "Cabbage is rich in vitamin C, which helps boost your immune system and strengthen your skin's barriers. Cabbage is high in fiber and water content, which helps propel food through your digestive tract and improve normal bowel movement.";
    }
    //for culiflower
    if($heading == "Fresh Cauliflower")
    {
        $offerprice = "25/-";
        $marketprice = "35/-";
        $desc = "Cauliflower contains a plant compound called sulforaphane, which acts as an antioxidant and reduces inflammatory damage caused by oxidative stress. This process plays a central role in the development of heart disease. Orange cauliflower has more beta carotene than white cauliflower.";
    }
    //for broccoli
    if($heading == "Fresh Broccoli")
    {
        $offerprice = "35/-";
        $marketprice = "50/-";
        $desc = "Broccoli contains antioxidants, which can help reduce inflammation and improve blood sugar control. Broccoli is rich in vitamin C, which is an antioxidant that can help with immune function and skin health. Broccoli contains glucosinolates, which the body can convert into substances that fight cancer.";
    }

    //Fruits
    //for cabbage
    if($heading == "Fresh Oranges")
    {
        $offerprice = "40/-";
        $marketprice = "60/-";
        $desc = "Sweet oranges contain 88.5% moisture, 0.05% fat, 0.7% crude protein, 0.3% ash, TSS (11˚ Brix), pH (3.8), per cent acidity (0.51%), total sugars (8.36%), reducing sugars (1.8%), non reducing sugars (6.56%) and ascorbic acid (46.5mg/ml).";
    }
    //for cabbage
    if($heading == "Fresh Grapes")
    {
        $offerprice = "45/-";
        $marketprice = "50/-";
        $desc = "Grapes are rich in antioxidants, which help to scavenge free radicals that can damage cells. The skin of grapes contains an antioxidant called resveratrol, which can prevent inflammation and block the spread and growth of cancer cells.";
    }
    //for apple
    if($heading == "Fresh Apples")
    {
        $offerprice = "40/-";
        $marketprice = "60/-";
        $desc = "Apples are made up of water, carbs, and fiber. They also contain vitamins, minerals, and antioxidants, including quercetin, catechin, phloridzin, and chlorogenic acid. Apples are high in soluble fiber, which can help lower cholesterol. They also contain polyphenols, which may help lower blood pressure and the risk of stroke.";
    }
    //for banana
    if($heading == "Fresh Bananas")
    {
        $offerprice = "35/-";
        $marketprice = "40/-";
        $desc = "Bananas are a fiber food, with 5.2 grams of insoluble fiber in 200 grams of peeled banana. Fiber helps you feel full for longer by slowing down digestion. A medium-sized banana (50 grams) contains about 7 grams of carbohydrates in the form of starch.";
    }
    //for cabbage
    if($heading == "Fresh Strawberry")
    {
        $offerprice = "35/-";
        $marketprice = "50/-";
        $desc = "Strawberries are rich in antioxidants, including ellagic acid, which protects the skin from UV rays and delays wrinkles. Strawberries also contain polyphenols, which can help with oxidative stress and UVA skin damage.";
    }
    //for papaya
    if($heading == "Fresh Papaya")
    {
        $offerprice = "30/-";
        $marketprice = "45/-";
        $desc = "Papaya contains an enzyme called papain that helps with digestion and can help relieve constipation and hyperacidity. Papaya contains potassium, fiber, and vitamins that can help manage high blood pressure and improve heart health.";
    }
    //for bluebrry
    if($heading == "Fresh Blueberry")
    {
        $offerprice = "25/-";
        $marketprice = "30/-";
        $desc = "Blueberries are among the top three fruits rich in antioxidants. They contain anthocyanins, which give blueberries their blue color, and polyphenol antioxidants that promote cell health. Blueberries can neutralize free radicals that damage DNA. This may help protect against aging and cancer.";
    }
    //for mango
    if($heading == "Fresh Mango")
    {
        $offerprice = "40/-";
        $marketprice = "60/-";
        $desc = "Mangoes contain polyphenols, which are antioxidants. They also contain gallotannins and mangiferin, which are plant chemicals with antioxidant properties. Mangoes are a good source of magnesium and potassium, which can help with lower blood pressure and a regular pulse.";
    }
    //for kiwi
    if($heading == "Fresh Kiwi")
    {
        $offerprice = "90/-";
        $marketprice = "100/-";
        $desc = "Kiwis are rich in vitamin C, which can help improve your immune system. They also have antibacterial and antifungal effects, which can help protect you from infections. Kiwis are rich in fiber, which can improve digestion. They also contain an enzyme called actinidin that helps break down proteins.";
    }

    //pupses
    //for Red Lentils (Masoor Dal)
    if($heading == "Red Lentils (Masoor Dal)")
    {
        $offerprice = "100/-";
        $marketprice = "120/-";
        $desc = "Masoor Dal, known as Lentil in English, is one of the most ancient legume crops. It has high nutritional value as it is a rich source of protein, fiber and minerals and has low-fat content. Masoor Dal is beneficial for the skin as it keeps the skin moisturized and healthy due to the presence of vitamin B.";
    }
    //for Bengal Gram (Chana Dal)
    if($heading == "Bengal Gram (Chana Dal)")
    {
        $offerprice = "105/-";
        $marketprice = "120/-";
        $desc = "Chana Dal extends its benefits to cardiovascular health through its rich content of potassium and magnesium. These minerals regulate blood pressure and contribute to a healthy heart. Potassium helps counteract the effects of sodium, promoting blood vessel dilation and reducing the risk of hypertension.";
    }
    //for Black Gram (Urad dal)
    if($heading == "Black Gram (Urad dal)")
    {
        $offerprice = "110/-";
        $marketprice = "130/-";
        $desc = "Black gram can help with skin whitening and hair growth. It can reduce melanin production and inhibit the enzyme tyrosinase, which can help with skin hyperpigmentation. Black gram can also help strengthen and lengthen hair, and keep hair black while managing dandruff. Black gram contains fiber, which can help with digestion, constipation, and diarrhea.";
    }
    //for Yellow Pigeon Peas (Tur Dal)
    if($heading == "Yellow Pigeon Peas (Tur Dal)")
    {
        $offerprice = "90/-";
        $marketprice = "110/-";
        $desc = "Pigeon pea is a good source of potassium that acts as a potent vasodilator reducing blood constriction, improves blood flow and controls high blood pressure. Including toor dal in the diet is highly valuable for hypertensive patients, as they are susceptible to increased risk of cardiovascular disease.";
    }
    //for Green Gram (Moong Dal)
    if($heading == "Green Gram (Moong Dal)")
    {
        $offerprice = "110/-";
        $marketprice = "130/-";
        $desc = "Moong dal is a nutrient-rich food. It is enriched with minerals like potassium, magnesium, iron, and copper. In addition to this, it also contains folate, fibre, and vitamin B6.Green gram contains many vitamins and minerals, including vitamin K, potassium, manganese, magnesium, calcium, iron, and folate.";
    }
    //for Chickpeas (Chole)
    if($heading == "Chickpeas (Chole)")
    {
        $offerprice = "100/-";
        $marketprice = "110/-";
        $desc = "Chickpeas, also known as garbanzo beans, are a type of pulse that are high in fiber, protein, and healthy fats. They also contain magnesium, potassium, calcium, and vitamins. ";
    }
    //for Horse Gram (Kulthi dal)
    if($heading == "Horse Gram (Kulthi dal)")
    {
        $offerprice = "110/-";
        $marketprice = "125/-";
        $desc = "Horse gram contains significant amounts of calcium, phosphorous, iron, and other amino acids. These are essential nutrients that have been known to help increase sperm count in males. This is because these minerals promote increased blood supply to the male reproductive organs which helps improve sperm production.";
    }
    //for Black Chickpea (Kala chana)
    if($heading == "Black Chickpea (Kala chana)")
    {
        $offerprice = "100/-";
        $marketprice = "120/-";
        $desc = "Black Chana contains a wide range of phytochemicals including carbohydrates, amino acids, proteins, flavonoids, iron, phosphate, chloride etc. These phytochemicals serve as antioxidants and prevent various cancers. Regular intake of black chickpeas strengthens bones and reduces hot flushes in menopausal women.";
    }

    //grains
    //for wheat
    if($heading == "Wheat")
    {
        $offerprice = "35/-";
        $marketprice = "50/-";
        $desc = "Wheat is a rich source of complex carbohydrates, which can help regulate blood sugar levels and provide sustained energy. Wheat gluten is the storage protein in the wheat grain endosperm and is responsible for dough formation and structural integrity in wheat-based food products. Wheat contains 13% protein, which is higher than most other grains.";
    }
    //for Rice
    if($heading == "Rice")
    {
        $offerprice = "30/-";
        $marketprice = "40/-";
        $desc = "Raw, long-grain white rice is a good source of carbohydrates, calcium, iron, thiamine, pantothenic acid, folate and vitamin E when compared with maize, wheat and potatoes. It does not contain vitamin C, vitamin A, beta-carotene, lutein and zeaxanthin. It is also notably low in dietary fibre.";
    }
    //for Millet
    if($heading == "Millet")
    {
        $offerprice = "45/-";
        $marketprice = "60/-";
        $desc = "Millets are gluten-free, highly nutritious and rich in dietary fibre. They are rich in micronutrients, including calcium, iron, phosphorus, etc. They are low in Glycemic Index (GI) as such don't cause huge spike in blood sugar. Millets should ideally be an integral part of our daily diet.";
    }
    //for gravel (Bajri)
    if($heading == "gravel (Bajri)")
    {
        $offerprice = "50/-";
        $marketprice = "70/-";
        $desc = "Gravel is a well-draining soil that is resistant to frost heaving and consolidation. It is often used as a subgrade ad base for foundations and pavement if it is compacted and moderately moistened. Gravel can be used as fill material or pipe bedding to provide superior drainage. It can also be used as an ingredient in some concrete mixes to strengthen and add volume to the concrete.";
    }
    //for Sorghum (Jowar)
    if($heading == "Sorghum (Jowar)")
    {
        $offerprice = "50/-";
        $marketprice = "70/-";
        $desc = "Sorghum is a gluten-free grain. Sorghum is rich in fiber, which can help with digestion and prevent constipation. Sorghum contains compounds that can help lower cholesterol levels. Sorghum contains essential minerals like calcium, iron, and potassium.";
    }

    //spices
    //for Turmeric
    if($heading == "Turmeric")
    {
        $offerprice = "35/-";
        $marketprice = "50/-";
        $desc = "Turmeric has antioxidant and anti-inflammatory properties. Curcumin can help protect the brain from oxidative stress, which can help with memory and other cognitive faculties. Curcumin can also fight against the development of plaque deposits in the brain, which can interfere with long term memory.";
    }
    //for Cumin (Jeera)
    if($heading == "Cumin (Jeera)")
    {
        $offerprice = "35/-";
        $marketprice = "50/-";
        $desc = "Cumin has vitamin C and magnesium. It also contains high amounts of protein, carbohydrates, calcium and dietary fibre. It is also a good source of thiamin, riboflavin and niacin. Cumin seeds can help with digestion, bloating, and acidity. They contain thymol, which encourages the pancreas to produce bile and enzymes. Drinking cumin water daily can help with digestion.";
    }
    //for Coriander
    if($heading == "Coriander")
    {
        $offerprice = "35/-";
        $marketprice = "50/-";
        $desc = "Coriander seeds are a good source of antioxidants and fiber, which can help control blood sugar levels. Coriander seeds can help control diabetes by improving carbohydrate metabolism and increasing hypoglycemic action.";
    }
    //for cardamom (Ilaichi)
    if($heading == "cardamom (Ilaichi)")
    {
        $offerprice = "35/-";
        $marketprice = "50/-";
        $desc = "Cardamom can aid digestion, increase appetite, and relieve flatulence. It can also help neutralize caffeine in tea. Cardamom has antioxidant and anti-inflammatory properties that can improve the body's metabolic rate and help with digestion.";
    }
    //for Black Pepper
    if($heading == "Black Pepper")
    {
        $offerprice = "35/-";
        $marketprice = "50/-";
        $desc = "Black pepper has anti-inflammatory properties that can help prevent chronic inflammation. Chronic inflammation can be a cause of health conditions like arthritis, heart disease, diabetes, and cancer. Black pepper is a storehouse of active antioxidants. It can help prevent and reduce oxidative stress.";
    }
    //for Cloves
    if($heading == "Cloves")
    {
        $offerprice = "35/-";
        $marketprice = "50/-";
        $desc = "Cloves have antibacterial, antiviral, and antimicrobial properties. They can help eliminate harmful bacteria from the mouth and reduce bad breath. Cloves have natural analgesic properties that can help reduce pain and discomfort in the body. This makes them useful in treating headaches, muscle pain, and joint pain.";
    }
    //for Garam Masala
    if($heading == "Garam Masala")
    {
        $offerprice = "35/-";
        $marketprice = "50/-";
        $desc = "Garam masala is full of antioxidants which help in preventing skin problems and also help fight inflammation. Garam masala has carminative properties and aid in digestion by releasing gastric juices in the stomach. It can also help with bloating, flatulence, and nausea.";
    }
    //for Ginger
    if($heading == "Ginger")
    {
        $offerprice = "35/-";
        $marketprice = "50/-";
        $desc = "Ginger contains antioxidants and anti-inflammatory compounds that can help reduce free radicals and inflammatory compounds. This can help your immune system function at its best. Ginger can help with digestion by boosting metabolism, speeding up bowel movements, and helping with bloating, gas, and acidity.";
    }
    //for Bay leaves
    if($heading == "Bay leaves")
    {
        $offerprice = "35/-";
        $marketprice = "50/-";
        $desc = "Bay leaves can be used whole or dried and are often added to soups, stews, curries, and sauces. They are most often used whole and removed before serving. Bay leaves are rich in antioxidants, minerals, and fibers. They are also a rich source of vitamin A, vitamin C, iron, potassium, calcium, and magnesium. ";
    }

    //flowers 
    //for Sunflowers
    if($heading == "Sunflowers")
    {
        $offerprice = "35/-";
        $marketprice = "50/-";
        $desc = "Sunflowers can absorb toxins, including toxic metals and radiation. They can also remove toxic elements from soil, such as lead and uranium. There are many different varieties of sunflower cultivars, including Aztec Sun, Mongolian Giant, and Teddy Bear";
    }
    //for Cosmos
    if($heading == "Cosmos")
    {
        $offerprice = "35/-";
        $marketprice = "50/-";
        $desc = "Cosmos flowers are native to tropical America and symbolize balance and harmony. They are the birth flower for October and attract butterflies. Cosmos can be grown from seed sown in the spring and are easy to grow, tolerate a wide range of soil types, and readily reseeds themselves.";
    }
    //for Chrysanthemums
    if($heading == "Chrysanthemums")
    {
        $offerprice = "35/-";
        $marketprice = "50/-";
        $desc = "Chrysanthemums, also known as mums or chrysanths, are flowering plants that belong to the Asteraceae family, which also includes daisies. The name chrysanthemum comes from ancient Greek words meaning gold and flower";
    }
    //for Snapdragons
    if($heading == "Snapdragons")
    {
        $offerprice = "35/-";
        $marketprice = "50/-";
        $desc = "Snapdragons are mostly short-lived perennial plants, though some species are annuals. The simple leaves are usually lance-shaped. The flowers can be white, yellow, orange, red, pink, or lavender or combinations of those colours.";
    }
    //for Roses
    if($heading == "Roses")
    {
        $offerprice = "35/-";
        $marketprice = "50/-";
        $desc = "Roses are perennial shrubs that belong to the genus Rosa. Roses come in many colors, including pink, red, orange, yellow, white, pastel pink, and peach. Roses are also used in commercial perfumery and cut flower crops.";
    }
    //for Crape Jasmine
    if($heading == "Crape Jasmine")
    {
        $offerprice = "35/-";
        $marketprice = "50/-";
        $desc = "Crape jasmine, also known as Tabernaemontana divaricata, is an evergreen shrub or small tree that is native to Southeast Asia, South Asia, and China. It is known for its pinwheel-shaped flowers, which are white, waxy, and 1–2 inches in diameter. ";
    }
    //for Arabian Jasmine
    if($heading == "Arabian Jasmine")
    {
        $offerprice = "35/-";
        $marketprice = "50/-";
        $desc = "Arabian jasmine (Jasminum sambac) is a shrub or vine that can grow up to 1.5 meters long. It has glossy dark green leaves and fragrant white flowers that are about one inch across. As they mature, the flowers fade to pink. ";
    }
    //for Hibiscus flowers
    if($heading == "Hibiscus flowers")
    {
        $offerprice = "35/-";
        $marketprice = "50/-";
        $desc = "Hibiscus flowers are trumpet-shaped, large, and showy. They have five or more petals that are joined at the base and can be white, yellow, red, pink, orange, blue, purple, or multi-hued. Most hibiscus species are insect-pollinated, though *P. exserta* is pollinated by hummingbirds.";
    }

    //other produced
    //for Coffee
    if($heading == "Coffee")
    {
        $offerprice = "35/-";
        $marketprice = "50/-";
        $desc = "Coffee is a beverage made from the roasted and ground seeds of the Coffea plant. Coffee is one of the world's three most popular beverages, along with tea and water.";
    }
    //for Cotton
    if($heading == "Cotton")
    {
        $offerprice = "35/-";
        $marketprice = "50/-";
        $desc = "Cotton fibers come from cotton plants. Specifically, they grow from the seed coat—the outer layer of the cotton plant's seeds. Before they can be turned into sheets or t-shirts, the cotton seeds must first be separated from the plant, and then the fibers from the seeds.";
    }
    //for Sugarcane
    if($heading == "Sugarcane")
    {
        $offerprice = "35/-";
        $marketprice = "50/-";
        $desc = "Sugarcane is a tropical grass that is a source of food, fiber, fuel, and chemicals. It is a long-term crop that can take 10–18 months to mature, depending on the location. ";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/sell-crop-service.css">
    <title>Document</title>
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

                    <div class="product-data">
                        <div class="price">
                            <h3>Rs. <?php echo "$offerprice"; ?> kg</h3>
                            <h4><?php echo "$marketprice"; ?> kg</h4>
                        </div>
                        <div class="description">
                            <p><?php echo "$desc"; ?></p>
                        </div>

                        <a href="sell-myproduct.php" target="_blank"><button class="placeorderbtn">Sell Product</button></a>

                    </div>
                </div>
            </div>
        </div>
</body>
</html>
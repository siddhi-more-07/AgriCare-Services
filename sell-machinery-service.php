<?php
$image = "";
$heading = "";
$offerprice = "";
$marketprice = "";
$servicetype = "";
$timeperiod = "";
$desc = "";
if (isset($_GET["image"]) && isset($_GET["heading"])) {
    $image = $_GET["image"];
    $heading = $_GET["heading"];
    //for Seed-Planter
    if($heading == "Seed-Planter")
    {
        $offerprice = "15,000/-";
        $marketprice = "20,000/-";
        $servicetype = "Sell";
        $timeperiod = "";
        $desc = "Seed Planter machines are kings of precision. The uses of planters in agriculture is for crops that thrive in precise conditions like corn and sunflowers, ensuring consistent plant spacing in addition to row spacing and seed depth are of great importance.";
    }
    //for Plough
    if($heading == "Plough")
    {
        $offerprice = "3,000/-";
        $marketprice = "5,000/-";
        $servicetype = "Rent";
        $timeperiod = "2 months";
        $desc = "A plough may have a wooden, iron or steel frame with a blade attached to cut and loosen the soil. It has been fundamental to farming for most of history. The earliest ploughs had no wheels; such a plough was known to the Romans as an aratrum.";
    }
    //for Combine harvester
    if($heading == "Combine harvester")
    {
        $offerprice = "13,000/-";
        $marketprice = "15,000/-";
        $servicetype = "Rent";
        $timeperiod = "1 month";
        $desc = "Combines are used in the harvesting and cleaning of cereals such as wheat, barley, corn (maize), oats, rice, rye, and sorghum, as well as a number of non-grain crops, including flax, rapeseed, soybeans, and sunflower seeds.";
    }
    //for Cultivator
    if($heading == "Cultivator")
    {
        $offerprice = "8,000/-";
        $marketprice = "10,000/-";
        $servicetype = "Rent";
        $timeperiod = "3 months";
        $desc = "A cultivator is a piece of agricultural equipment used for secondary tillage. One sense of the name refers to frames with teeth (also called shanks) that pierce the soil as they are dragged through it linearly. It also refers to machines that use the rotary motion of disks or teeth to accomplish a similar result.";
    }
    //for Rotary tiller
    if($heading == "Rotary tiller")
    {
        $offerprice = "14,000/-";
        $marketprice = "17,000/-";
        $servicetype = "Rent";
        $timeperiod = "2 months";
        $desc = "Rotary Tillers are machines used for both primary and secondary Tillage for cultivating the soil. They use a series of blades that eliminate weeds, relieve compaction, as it mixes and levels the soil. This agricultural equipment is very powerful and is used for seedbed preparation.";
    }
    //for Dibber
    if($heading == "Dibber")
    {
        $offerprice = "3,000/-";
        $marketprice = "5,000/-";
        $servicetype = "Sell";
        $timeperiod = "";
        $desc = "A dibber is a gardening tool used to make holes in the ground to plant seeds, seedlings, or small bulbs. Dibbers can be used in sandy soil or heavy clay. They come in different designs, including straight, T-handled, trowel, and L-shaped. ";
    }
    //for Rice transplanter
    if($heading == "Rice transplanter")
    {
        $offerprice = "10,000/-";
        $marketprice = "14,000/-";
        $servicetype = "Rent";
        $timeperiod = "2 Months";
        $desc = "A rice transplanter is a specialized machine you can use to transplant rice seedlings into your paddy field as it makes sowing the seeds relatively easy. All you need to do is load it up with a rice nursery, and it will sow the seedlings into the soil. ";
    }
    //for Threshers
    if($heading == "Threshers")
    {
        $offerprice = "10,000/-";
        $marketprice = "16,000/-";
        $servicetype = "Rent";
        $timeperiod = "3 Moths";
        $desc = "thresher, farm machine for separating wheat, peas, soybeans, and other small grain and seed crops from their chaff and straw. Primitive threshing methods involved beating by hand with a flail or trampling by animal hooves.";
    }
    //for Sprayers
    if($heading == "Sprayers")
    {
        $offerprice = "3,000/-";
        $marketprice = "5,000/-";
        $servicetype = "Sell";
        $timeperiod = "";
        $desc = "A sprayer is a device used to spray a liquid, where sprayers are commonly used for projection of water, weed killers, crop performance materials, pest maintenance chemicals, as well as manufacturing and production line ingredients.";
    }

    //for tractors 
    //for Utility tractor
    if($heading == "Utility tractor")
    {
        $offerprice = "13,000/-";
        $marketprice = "16,000/-";
        $servicetype = "Rent";
        $timeperiod = "1 Moths";
        $desc = "Utility tractors are usually moderately sized, with or without a cab, and can have a horsepower of around 40–100 HP. They are designed for ploughing and driving other equipment, and are good for farms that can't afford many machines for specific jobs. ";
    }
    //for Orchard tractor
    if($heading == "Orchard tractor")
    {
        $offerprice = "13,000/-";
        $marketprice = "16,000/-";
        $servicetype = "Rent";
        $timeperiod = "3 Moths";
        $desc = "Orchard Tractor - The King of Orchard Farming. With the engine power of 20.88 kW (28 HP), this tractor offers ultimate power and control on the field. This Mahindra Tractor comes with 540 rated RPM (r/min) and 1200 kg of hydraulics lifting capacity, ensuring smooth operations.";
    }
    //for Garden tractors
    if($heading == "Garden tractors")
    {
        $offerprice = "10,000/-";
        $marketprice = "16,000/-";
        $servicetype = "Rent";
        $timeperiod = "3 Moths";
        $desc = "A garden tractor with an integrated collector has the most effective system for collection. When mowing high and coarse grass, the most effective type of cutting deck is the side ejector.";
    }
    //for Military tractors
    if($heading == "Military tractors")
    {
        $offerprice = "18,000/-";
        $marketprice = "25,000/-";
        $servicetype = "Rent";
        $timeperiod = "1 Moths";
        $desc = "Military tractors are also known as artillery tractors. They have reinforced frames and undercarriages that are designed to be very durable. They can also travel across different types of terrain.";
    }
    //for Implement carrier tractors
    if($heading == "Implement carrier tractors")
    {
        $offerprice = "14,000/-";
        $marketprice = "16,000/-";
        $servicetype = "Rent";
        $timeperiod = "3 Moths";
        $desc = "Implement carrier tractors are designed to mount implements. They have an extended chassis frame between the front and rear tires, which makes it easy to mount and carry different implements. These implements can include: Sprayers, Drills, Loaders, Rotary sweepers, Seed drills, Dusters. ";
    }
    //for Rotary tillers
    if($heading == "Rotary tillers")
    {
        $offerprice = "8,000/-";
        $marketprice = "13,000/-";
        $servicetype = "Rent";
        $timeperiod = "3 Moths";
        $desc = "Rotary Tillers are machines used for both primary and secondary Tillage for cultivating the soil. They use a series of blades that eliminate weeds, relieve compaction, as it mixes and levels the soil. ";
    }
    //for Autonomous tractors
    if($heading == "Autonomous tractors")
    {
        $offerprice = "22,000/-";
        $marketprice = "30,000/-";
        $servicetype = "Rent";
        $timeperiod = "1 Moths";
        $desc = "An autonomous tractor, or a self-driving tractor, is a marvel of modern technology, combining facets of artificial intelligence, robotics, 360-degree vision cameras, and global positioning system (GPS) guidance to farming operations";
    }

    //Plows
    //for Disc plough
    if($heading == "Disc plough")
    {
        $offerprice = "6,000/-";
        $marketprice = "9,000/-";
        $servicetype = "Rent";
        $timeperiod = "4 Months";
        $desc = "Disc plough is a game changer for the tillage activity. The rotating action in the disc plough helps the farmers to break the hard upper surface of the soil. Unlike other plough, disc plough doesn't drag the surface but cuts it into numerous pieces.";
    }
    //for Mouldboard plough
    if($heading == "Mouldboard plough")
    {
        $offerprice = "6,000/-";
        $marketprice = "9,000/-";
        $servicetype = "Rent";
        $timeperiod = "3 Months";
        $desc = "A moldboard plow is a tractor-operated tillage tool that performs a variety of functions, including: Soil conditioning: Cuts, lifts, breaks up, and loosens soil that has been compacted by machinery or natural causes to a depth of about 100–200 mm below the soil surface.";
    }
    //for Chisel plough
    if($heading == "Chisel plough")
    {
        $offerprice = "6,000/-";
        $marketprice = "8,000/-";
        $servicetype = "Rent";
        $timeperiod = "1 Month";
        $desc = "Chisel plough is a common tool to get deep tillage (prepared land) with limited soil disruption. The main function of this plough is to loosen and aerate the soils while leaving crop residue at top of the soil. This plough can be used to reduce effects of compaction and help to break up the ploughpan and hardpan.";
    }
    //for Subsoil plough
    if($heading == "Subsoil plough")
    {
        $offerprice = "12,000/-";
        $marketprice = "18,000/-";
        $servicetype = "Sell";
        $timeperiod = "";
        $desc = "A subsoil plough is a tillage tool that breaks up hard layers of soil without bringing them to the surface. It's larger than other plows and can penetrate soil depths of 20 to 36 inches (50 to 90 centimeters). A tractor with 60 to 85 horsepower is needed to pull a single subsoil point.";
    }
    //for Reversible plough
    if($heading == "Reversible plough")
    {
        $offerprice = "15,000/-";
        $marketprice = "18,000/-";
        $servicetype = "Sell";
        $timeperiod = "";
        $desc = "Reversible MB Plough is used for intial soil preparation for sowing seed or planting. Generally used for deep tillage of land, to help turn over the upper layer of the soil, bringing fresh nutrients to the surface, while buying weeds and remains of previous crop.";
    }
    //for Wooden plough
    if($heading == "Wooden plough")
    {
        $offerprice = "6,000/-";
        $marketprice = "10,000/-";
        $servicetype = "Rent";
        $timeperiod = "3 Months";
        $desc = "Wooden ploughs are traditional agricultural tools used to prepare land for planting. They are typically made of iron or steel, but some wooden ploughs are still used in rural and less developed areas of India.";
    }
    //for Harrow
    if($heading == "Harrow")
    {
        $offerprice = "7,000/-";
        $marketprice = "9,000/-";
        $servicetype = "Rent";
        $timeperiod = "2 Months";
        $desc = "A harrow is a farm tool used to break up clumps, level soil, and control weeds. It is pulled by a tractor and is often used in conjunction with tilling and plowing to prepare fields for planting.";
    }
    //for Bottom Plow
    if($heading == "Bottom Plow")
    {
        $offerprice = "7,000/-";
        $marketprice = "10,000/-";
        $servicetype = "Sell";
        $timeperiod = "";
        $desc = "A bottom plow, or moldboard plow, cuts into the soil and turns it over, bringing rich, deeper soil to the top in preparation for planting. Plowing, or turning the soil over as a form of tillage, has been practiced for at least 4,000 years.";
    }
    //for Hydraulic Reversible Plough
    if($heading == "Hydraulic Reversible Plough")
    {
        $offerprice = "8,000/-";
        $marketprice = "11,000/-";
        $servicetype = "Rent";
        $timeperiod = "3 Months";
        $desc = "Hydraulic Reversible MB Plough is suitable for land preparation. It aids in breaking the hardpan of soil and upturning the crop stubbles. This tractor implement is ideal for crops like Sugarcane, Grains, Oilseeds, Pulses and Cotton and compliments medium and hard soil.";
    }

    //Harrow
    //for Disc harrow
    if($heading == "Disc harrow")
    {
        $offerprice = "6,000/-";
        $marketprice = "9,000/-";
        $servicetype = "Rent";
        $timeperiod = "4 Months";
        $desc = "Disc plough is a game changer for the tillage activity. The rotating action in the disc plough helps the farmers to break the hard upper surface of the soil. Unlike other plough, disc plough doesn't drag the surface but cuts it into numerous pieces.";
    }
    //for Tractor harrow
    if($heading == "Tractor harrow")
    {
        $offerprice = "5,000/-";
        $marketprice = "9,000/-";
        $servicetype = "Rent";
        $timeperiod = "2 Months";
        $desc = "A tractor harrow is a farm implement that prepares soil for planting crops. It's used after plowing to break up and smooth out soil, break up clumps, and control weed growth.";
    }
    //for Power harrow
    if($heading == "Power harrow")
    {
        $offerprice = "7,000/-";
        $marketprice = "9,000/-";
        $servicetype = "Rent";
        $timeperiod = "2 Months";
        $desc = "Power Harrow is used to turn, break, refine and even distribution of soil over the entire working width to create a perfect seed bed. It breaks up even the most compacted ground, often in single pass for preparing an area for plantation.";
    }
    //for Disc harrow mounted
    if($heading == "Disc harrow mounted")
    {
        $offerprice = "10,000/-";
        $marketprice = "14,000/-";
        $servicetype = "Rent";
        $timeperiod = "2 Months";
        $desc = "A tractor-mounted disc harrow has two gangs of discs mounted one behind the other. The discs in the front gang throw soil outward and the rear gang inward. The harrow also has a sturdy frame, three-point linkage, and discs arranged in two gangs.";
    }
    //for Blade Harrow
    if($heading == "Blade Harrow")
    {
        $offerprice = "14,000/-";
        $marketprice = "19,000/-";
        $servicetype = "Sell";
        $timeperiod = "";
        $desc = "Blade harrows are used for different purposes like removal of weeds and stubbles, crushing of clods working of soil to shallow depth, covering the seeds, intercutivation and harvesting of groundnut etc.";
    }
    //for Chain Harrow
    if($heading == "Chain Harrow")
    {
        $offerprice = "7,000/-";
        $marketprice = "9,000/-";
        $servicetype = "Rent";
        $timeperiod = "2 Months";
        $desc = "Chain harrows are agricultural implements used primarily for soil preparation, field maintenance, and pasture management. They consist of a series of heavy chains or interconnected steel bars attached to a frame.";
    }
    //for Guntaka
    if($heading == "Guntaka")
    {
        $offerprice = "3,000/-";
        $marketprice = "5,000/-";
        $servicetype = "Rent";
        $timeperiod = "2 Months";
        $desc = "Guntakal is a city in the Anantapur district of Andhra Pradesh, India. It is the headquarters of the Guntakal mandal and revenue division, as well as the Guntakal Railway Division in the South Central Railway.";
    }
    //for Spike tooth harrow
    if($heading == "Spike tooth harrow")
    {
        $offerprice = "17,000/-";
        $marketprice = "20,000/-";
        $servicetype = "Sell";
        $timeperiod = "";
        $desc = "A spike tooth harrow is a tool that has solid or coil tynes bolted to a rigid frame. The tynes are arranged in rows and slanted to the rear to prevent clogging by debris.";
    }

    //Cultivators
    //for Cultivator
    if($heading == "Cultivator")
    {
        $offerprice = "12,000/-";
        $marketprice = "15,000/-";
        $servicetype = "Sell";
        $timeperiod = "";
        $desc = "A cultivator is a piece of agricultural equipment used for secondary tillage. One sense of the name refers to frames with teeth (also called shanks) that pierce the soil as they are dragged through it linearly. It also refers to machines that use the rotary motion of disks or teeth to accomplish a similar result.";
    }
    //for Deluxe cultivator
    if($heading == "Deluxe cultivator")
    {
        $offerprice = "7,000/-";
        $marketprice = "10,000/-";
        $servicetype = "Rent";
        $timeperiod = "4 Months";
        $desc = "Deluxe cultivators are made of iron and have a weight of 200-400 kg. They can withstand hard and dry soil conditions and are designed to increase crop production by up to 8%. They have a ground clearance of 400-450 mm and need a tractor power of 125-150 HP. The cultivator has 12-16 blades.";
    }
    //for Soil Cultivator
    if($heading == "Soil Cultivator")
    {
        $offerprice = "7,000/-";
        $marketprice = "9,000/-";
        $servicetype = "Rent";
        $timeperiod = "2 Months";
        $desc = "A soil cultivator is a machine or farm implement that prepares soil for farming. A cultivator is a piece of agricultural equipment used for secondary tillage. One sense of the name refers to frames with teeth (also called shanks) that pierce the soil as they are dragged through it linearly. ";
    }
    //for Khedut rigid
    if($heading == "Khedut rigid")
    {
        $offerprice = "6,000/-";
        $marketprice = "9,000/-";
        $servicetype = "Rent";
        $timeperiod = "2 Months";
        $desc = "The Khedut Rigid is a cultivator that is used in farming. It has 35–75 horsepower and weighs 210–290 kilograms. It is capable of withstand tough working conditions in soils and is used to till land. The Khedut Rigid can break up hard soil and uproot stubbles.";
    }

    //Transplanters
    //for Rice transplanter
    if($heading == "Rice transplanter")
    {
        $offerprice = "12,000/-";
        $marketprice = "15,000/-";
        $servicetype = "Rent";
        $timeperiod = "3 Months";
        $desc = "A rice transplanter is a specialized machine you can use to transplant rice seedlings into your paddy field as it makes sowing the seeds relatively easy. All you need to do is load it up with a rice nursery, and it will sow the seedlings into the soil.";
    }
    //for Potato planter
    if($heading == "Potato planter")
    {
        $offerprice = "12,000/-";
        $marketprice = "15,000/-";
        $servicetype = "Rent";
        $timeperiod = "1 Month";
        $desc = "Potato planter performs the functions of furrow opening, seed metering, seed placement at proper depth and formation of ridges to cover seed tubers. Two, three or four row semi-automatic potato planters have been developed, commercialized and are being used by the farmers.";
    }
    //for Vegetable transplanter
    if($heading == "Vegetable transplanter")
    {
        $offerprice = "9,000/-";
        $marketprice = "12,000/-";
        $servicetype = "Sell";
        $timeperiod = "";
        $desc = "Vegetable transplanter is a machine that can transplant vegetable seedlings from the nursery to the field. It is an important agricultural machine that can improve the efficiency of planting and reduce labor costs. The HYZ-2 Vegetable Transplanter has a simple structure and is easy to operate.";
    }
    //for Automatic transplanters
    if($heading == "Automatic transplanters")
    {
        $offerprice = "12,000/-";
        $marketprice = "15,000/-";
        $servicetype = "Rent";
        $timeperiod = "1 Month";
        $desc = "An automatic transplanter is an agricultural machine that uses a complex transplantation system to transplant seedlings to a field. Automatic transplanters are more complex than manual transplanters, but they only require one operator to feed the plant robot with seedling trays.";
    }
    //for Coconut tree climber
    if($heading == "Coconut tree climber")
    {
        $offerprice = "800/-";
        $marketprice = "1,000/-";
        $servicetype = "Rent";
        $timeperiod = "3 Days";
        $desc = "Coconut Tree Climber is used to climb on a coconut tree manually. It is just of 7kgs weight but very strong. This is heavy duty Coconut Tree Climber Made up of stainless steel Rod. Not only used for coconut tree climbing but also areca nut tree, etc .";
    }
    //for Greaves Diesel Engine
    if($heading == "Greaves Diesel Engine")
    {
        $offerprice = "12,000/-";
        $marketprice = "15,000/-";
        $servicetype = "Rent";
        $timeperiod = "1 Month";
        $desc = "Greaves automotive engines are designed to be environmentally friendly, have a high power-to-weight ratio, and have a direct fuel injection system for higher fuel efficiency.  They can produce significantly more torque at low engine speeds than naturally aspirated SI engines. ";
    }
    //for manual-rice-transplanter
    if($heading == "manual-rice-transplanter")
    {
        $offerprice = "3,000/-";
        $marketprice = "5,000/-";
        $servicetype = "Rent";
        $timeperiod = "1 Month";
        $desc = "Manual transplanting is best for small rice fields and labor-surplus areas. It can be done in fields with varying water levels and less than optimal leveling. Seedlings are raised in a wet, dry, or modified mat nursery. ";
    }

    //Irrigation
    //for Surface irrigation
    if($heading == "Surface irrigation")
    {
        $offerprice = "12,000/-";
        $marketprice = "15,000/-";
        $servicetype = "Sell";
        $timeperiod = "";
        $desc = "Surface irrigation is the most common method of watering crops using gravity. It involves moving water over the soil to wet it partially or completely. The water flows over or ponds on the soil surface and gradually infiltrates to the desired depth. ";
    }
    //for Sprinkler irrigation
    if($heading == "Sprinkler irrigation")
    {
        $offerprice = "14,000/-";
        $marketprice = "15,000/-";
        $servicetype = "Sell";
        $timeperiod = "";
        $desc = "Sprinkler irrigation is the method of applying water in a controlled manner in way similar to rainfall. The water is distributed through a network that may consist of pumps, valves, pipes, and sprinklers. Irrigation sprinklers can be used for residential, industrial, and agricultural usage.";
    }
    //for Subsurface irrigation
    if($heading == "Subsurface irrigation")
    {
        $offerprice = "11,000/-";
        $marketprice = "15,000/-";
        $servicetype = "Sell";
        $timeperiod = "";
        $desc = "Subsurface drip irrigation is a low-pressure, high efficiency irrigation system that uses buried drip tubes or drip tape to meet crop water needs. Subsurface irrigation saves water and improves yields by eliminating surface water evaporation and reducing the incidence of weeds and disease.";
    }
    //for Drip irrigation
    if($heading == "Drip irrigation")
    {
        $offerprice = "12,000/-";
        $marketprice = "15,000/-";
        $servicetype = "Sell";
        $timeperiod = "";
        $desc = "Drip irrigation is a watering method that uses tubes to slowly deliver water directly to the roots of plants. The slow application rate and direct delivery of water prevents runoff, making it a water-efficient irrigation method.";
    }
    //for Canal irrigation
    if($heading == "Canal irrigation")
    {
        $offerprice = "13,500/-";
        $marketprice = "15,000/-";
        $servicetype = "Sell";
        $timeperiod = "";
        $desc = "Canal irrigation is a system of man-made canals that divert water from rivers to fields for irrigation. Canals can be lined with concrete, brick, stone, or a flexible membrane to prevent erosion and seepage. ";
    }
    //for Micro-irrigation
    if($heading == "Micro-irrigation")
    {
        $offerprice = "15,000/-";
        $marketprice = "17,000/-";
        $servicetype = "Sell";
        $timeperiod = "";
        $desc = "Micro irrigation is the frequent application of small quantities of water on or below the soil surface as drops, tiny streams or miniature spray through emitters or applicators placed along a water delivery line.";
    }

    //Pickers
    //for Cotton picker
    if($heading == "Cotton picker")
    {
        $offerprice = "10,000/-";
        $marketprice = "13,000/-";
        $servicetype = "Rent";
        $timeperiod = "Per Day";
        $desc = "A cotton picker is either a machine that harvests cotton, or a person who picks ripe cotton fibre from the plants. The machine is also referred to as a cotton harvester.";
    }
    //for Spindle cotton picker
    if($heading == "Spindle cotton picker")
    {
        $offerprice = "12,000/-";
        $marketprice = "15,000/-";
        $servicetype = "Rent";
        $timeperiod = "Per Day";
        $desc = "Spindle pickers are much more efficient than more traditional stripper pickers, and they are the preferred choice among harvesters. A stripper picker picks up most of the cotton fiber as well as a significant amount of the cotton plants themselves, and then the fiber is separated from the plant matter later on.";
    }
    //for Basket pickers
    if($heading == "Basket pickers")
    {
        $offerprice = "12,000/-";
        $marketprice = "15,000/-";
        $servicetype = "Sell";
        $timeperiod = "";
        $desc = "A fruit picker basket can be useful for picking fruit without climbing stairs and without damaging the fruit or trees. The basket protects the fruit, and the stem is positioned between the basket's fingers. The basket catcher is made from soft cotton to prevent bruising.";
    }
    //for Rakes
    if($heading == "Rakes")
    {
        $offerprice = "8,000/-";
        $marketprice = "11,000/-";
        $servicetype = "Sell";
        $timeperiod = "";
        $desc = "It is used to collect leaves, and grasses. In gardening, it can loosen the soil, lightly weed and level. In agricultural work, such as on the Stows' Rancho La Patera, it “scraped together” rows of hay or grain.";
    }
    //for Balers
    if($heading == "Balers")
    {
        $offerprice = "20,000/-";
        $marketprice = "25,000/-";
        $servicetype = "Sell";
        $timeperiod = "";
        $desc = "Balers compress hay or straw into tightly packed rectangular or cylindrical bales weighing around 22 to 45 kg (50 to 100 pounds) and tied with wire or twine. ";
    }
    //for Delaval
    if($heading == "Delaval")
    {
        $offerprice = "12,000/-";
        $marketprice = "15,000/-";
        $servicetype = "Sell";
        $timeperiod = "";
        $desc = "DeLaval is a technology leader offering Integrated Milking Solutions and Consumables for dairy farms that improve the performance of farms for professional milk producers. Our products, solutions and services are designed to enable dairy farmers around the world to produce more milk more efficiently.";
    }
    //for Trucks and trailers
    if($heading == "Trucks and trailers")
    {
        $offerprice = "7,000/-";
        $marketprice = "12,000/-";
        $servicetype = "Sell";
        $timeperiod = "";
        $desc = "A trailer is a container on wheels that is pulled by a vehicle to transport heavy or large cargo. Trailers are unpowered vehicles that are usually towed by a powered vehicle. They are commonly used to transport materials and goods. ";
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
    <link rel="stylesheet" href="styles/buy-machinery.css">
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

                    <div class="product-data">
                        <div class="price">
                            <h3>Rs. <?php echo "$offerprice"; ?></h3>
                            <h4><?php echo "$marketprice"; ?></h4>
                        </div>
                        <div class="description">
                            <p><?php echo "$desc"; ?></p>
                        </div>

                        <div class="service-typ">
                            <p><?php echo "$servicetype"; ?></p>
                        </div>

                        <div class="timeperiod">
                            <p><?php echo"$timeperiod"; ?></p>
                        </div>

                        <a href="sell-myproduct.php" target="_blank"><button class="placeorderbtn">Place Order</button></a>

                    </div>
                </div>
            </div>
        </div>
</body>
</html>
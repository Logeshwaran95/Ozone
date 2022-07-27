<?php
require("config.php");
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "products";

// Create connection
$conn1 = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn1->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//now creating table in database
$sql = "CREATE TABLE productlist(
        `id` int(11) NOT NULL,
        `name` varchar(255) NOT NULL,
        `category` varchar(255) NOT NULL,
        `rating` double(10,1) NOT NULL,
        `global` int(11) NOT NULL,
        `image` varchar(255) NOT NULL,
        `price` double(10,2) NOT NULL,
        `final-price` double(10,2) NOT NULL,
        `offer` varchar(255) NOT NULL,
        `title` TEXT,
        `description` TEXT
    )";
    //CHECKING
    if($conn1->query($sql)===TRUE){
        echo "Table created succesfully";
    }
    else{
        echo "oops we ran into problem".$conn1->error;
    }
    //customer report table
    $sql = "CREATE TABLE CustomerReport(
        `customername` varchar(255),
        `PhoneNumber` INT(6),
        `Email` varchar(255),
        `productname` varchar(255),
        `OrderNumber` INT(6),
        `DateOfOrder` varchar(255),
        `Reason` varchar(255)
        )";
        if($conn1->query($sql)===TRUE){
                echo "Table created succesfully";
            }
            else{
                echo "oops we ran into problem".$conn1->error;
            }
            // addcart
            $sqlcart = "CREATE TABLE cartorders(
         `id` INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        `uniqueid` varchar(255),
        `name` varchar(255),
        `quantity` INT(6),
        `final-price` double(10,2),
        `customername` varchar(255),
        `email` varchar(255),
        `address` varchar(255),
        `phone-number` varchar(255),
        `payment-method` varchar(255),
        `date-time-of-order` varchar(255),
        `place-order` varchar(255)
    )";
                if($conn1->query($sqlcart)===TRUE){
                        echo "Table created succesfully";
                    }
                    else{
                        echo "oops we ran into problem".$conn1->error;
                    }
    //order table
    $sqlorder = "CREATE TABLE orders(
        `id` INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        `uniqueid` varchar(255) NOT NULL,
        `name` varchar(255) NOT NULL,
        `quantity` INT(6) NOT NULL,
        `final-price` double(10,2) NOT NULL,
        `customername` varchar(255) NOT NULL,
        `email` varchar(255) NOT NULL,
        `address` varchar(255) NOT NULL,
        `phone-number` varchar(255) NOT NULL,
        `payment-method` varchar(255) NOT NULL,
        `date-time-of-order` varchar(255) NOT NULL,
        `place-order` varchar(255) NOT NULL
    )";
    //CHECKING
    if($conn1->query($sqlorder)===TRUE){
        echo "Table created succesfully";
    }
    else{
        echo "oops we ran into problem".$conn1->error;
    }

    //inserting data in my table

    $sql = "INSERT INTO productlist (`id`, `name`,`category`,`rating`,`global`, `image`, `price`,`final-price`,`offer`,`title`,`description`) VALUES
    (1, 'ASUS ROG Strix G17 (2021)','laptop',4.6,43200, 'asus-rog.jpg', 120990.00,102440,'15%','ASUS ROG Strix G17 i7-10750H/ GTX1660Ti-6GB/ 8G+8G/ 512G SSD+512G SSD (RAID 0)/ 17.3 FHD-144hz/ RGB Backlit-4 Zone/ WIFI6/ 66Wh/ WIN10/ Black Plastic ASUS G712LU-EV008TS','Intel Core i7-10750H Processor 12M Cache, 2.60 GHz up to 5.00 GHz
16GB DDR4 RAM, 512G SSD nVME + 512G SSD nVME (RAID 0)
17.3 Full HD-144 Hz Screen, GTX 1660ti - 6GB Graphics
Windows 10 Home | Ms-Office 2019 Lifetime
1 Year Warranty, RGB Keyboard.Focused firepower streamlines and elevates the core Windows 10 gaming experience in the ROG Strix G17. With a powerful Intel core I7 Series CPU and GeForce GTX™ 1660 GPU, everything from gaming to multitasking is fast and fluid. Go full-throttle on esports speed with a competition-grade display 300Hz/3ms panel. Adaptive-Sync makes gameplay ultrasmooth, while advanced thermal upgrades help you stay cool under pressure. No matter what your game is, you can achieve your perfect play.'),
    (2, 'Acer Predator Galea 500','gaming',4.4,55800, 'acer-predator.jpg', 15999.00,5208.00,'67%','Acer Predator Galea 500 Wired Gaming Headset (Over-The-Head/TrueHarmony 3D Soundscape/Bio-Cellulose Membrane Driver/Uni-Directional Mic/Metallic Black)','True Harmony 3D Soundscape Technology and Virtual 7.1 Surround Sound
One-button calibration for the built-in gyroscope to calculate the 3D sound movements
EQ controller switches between 4 modes – 3D soundscape, Sports, Movie and Music
Retractable Uni-directional Microphone
Soft leather large cushion ear pod and elastic headband provides comfort for long time wearing and noise-isolation for immersive experience
Braided cable adds style and extra protection
Predator Carry pouch included
EQ controller, 3D soundscape technology, Virtual 7.1 Surround Sound and Gyro sensor built-in for best VR experience'),
    (3, 'Gigabyte GeForce GT 710','gaming',4.5,101800, 'gigabyte-gpu.jpg', 4900.00,4051,'16%','Gigabyte GeForce GT 710 2GB DDR3 Memory Graphics Card (GV-N710D3-2GL)','Powered by NVIDIA GeForce GT 710 GPU
Integrated with the first 2048MB DDR3 memory and 64-bit memory interface
Core Clock: 954MHz, Features Dual-link DVI-D / D-Sub / HDMI
Support PCI Express 2.0 x8 bus interface
Recommended system power supply requirement: 300W
3 Years Carry In Warranty'),
    (4, 'ASUS TUF Gaming Monitor','gaming',4.8,404299, 'asustuf-monitor.jpg', 45000.00,34999.00,'22%','ASUS TUF Gaming VG279QM HDR Gaming Monitor 68.58cm (27) FullHD (1920 x 1080), Fast IPS, Overclockable 280Hz (Above 240Hz, 144Hz), 1ms (GTG), ELMB SYNC, G-SYNC Compatible, DisplayHDR 400','68.58cm (27) Full HD (1920 x 1080) Fast IPS gaming monitor with ultrafast 280*Hz refresh rate designed for professional gamers and immersive gameplay
ASUS Fast IPS technology enables a 1ms response time (GTG) for sharp gaming visuals with high frame rates.
Certified as G-SYNC Compatible, delivering a seamless, tear-free gaming experience by enabling VRR (variable refresh rate) by default.
ASUS Extreme Low Motion Blur Sync (ELMB SYNC) technology enables ELMB together with G-SYNC Compatible, eliminating ghosting and tearing for sharp gaming visuals with high frame rates.
High Dynamic Range (HDR) technology with professional color gamut delivers contrast and color performance that meets the DisplayHDR 400 certification
For any query, set up advice you can contact_us on: [1800-209-0365] (Mon~Sun 09:00AM to 09:00PM. Excluding public holidays) '),
    (5, 'SONY PlayStation5','gaming',4.6,750002, 'sonyps5.png', 49000.00,45000.00,'20%','SONY PlayStation 5 (CFI-1008A01R) 825 GB with Astro`s Playroom  (White)','
PS5, Wireless Controller, 825GB SSD, Base, HDMI Cable, AC Power Cord, USB Cable, Printed Materials, ASTRO’s PLAYROOM (Pre-installed Game. Console May Need to be Updated to the Latest System Software Version. Internet Connection Required.)'),

    (6, 'PS4 Marvel`s Spider-Man','gaming',4.5,808352, 'ps4miles.jpg', 3999.00,2999.00,'25%','PS4 Marvel`s Spider-Man: Miles Morales (PS4)','In the latest adventure in the Marvel`s Spider-Man universe, teenager Miles moral is adjusting to his new home while following in the footsteps of his mentor, Peter Parker, as a new Spider-Man
But when a fierce power struggle threatens to destroy his new home, the aspiring hero realizes that with great power, there must also come great responsibility
To save all of Marvel`s new York, Miles must take up the mantle of Spider-Man and own it'),

    (7, 'Canon Power Shot G7X','accessories',4.2,78222, 'canon.jpg', 42995.00,34990.00,'19%','Canon Power Shot G7X Mark II 20.1 MP Digital Vlogging Camera (Black) with 1-inch CMOS Sensor and 4.2X Optical Zoom','New digic 7 imaging processor and 20.1 megapixel 1.0-inch type cmos sensor
4.2x optical zoom 24 - 100mm (35mm equivalent), f/1.8 - f/2.8 lens
3.0 inch-type touchscreen tilt-type lcd monitor (180Â° upwards, 45Â° downwards)
Slim and compact body , ideal travel camera
8 fps continuous shooting, 1080/60p video capture and wifi + nfc
Country of Origin: Japan'),
    (8, 'iBall Heavy Bass Thunder','accessories',4.2,555000, 'speaker.jpg', 4999.00,1999.00,'60%','
iBall Heavy Bass Thunder 2.1 Multimedia Speakers (Black)','STEREO SOUND - Add soul to your audio experience with the powerful deep bass-driven stereo sound of Thunder 2.1. The premium set of speakers offers high bass and deep treble
MULTIPLE CONNECTIVITY - The pulsating speaker set enjoys multiple connectivity options that include BT, USB, SD/MMC, AUX & FM that facilitates a one of a kind experience
REMOTE - Comes with handy remote to manage your music & audio preference. You can play, pause or skip & change bass/treble functions all through a remote that is designed to make it a comfy experience
RGB LED LIGHTS - Comes with stunning RGB LED lights on the woofer
PACKAGE INCLUDES - Subwoofer Speaker - 1 N, Satellite Speaker - 2 N, Audio Cable - 1 N, Remote Control - 1 N, User Manual - 1 N
WARRANTY - 1-year warranty provided by the manufacturer from date of purchase
Country of Origin: China'),
    (9, 'Apple iPad Pro','mobile',4.3,45000, 'ipadpro.jpg', 170900.00,136720.00,'20%','2021 Apple iPad Pro with Apple M1 chip (12.9-inch/32.77 cm, Wi-Fi, 512GB) - Space Grey (5th Generation)','Apple M1 chip for next-level performance
Brilliant 32.77 cm (12.9-inch) Liquid Retina XDR display with ProMotion, True Tone, and P3 wide color
TrueDepth camera system featuring Ultra Wide camera with Center Stage
12MP Wide camera, 10MP Ultra Wide camera, and LiDAR Scanner for immersive AR
Stay connected with ultrafast Wi-Fi and 4GLTE
Go further with all-day battery life
Thunderbolt port for connecting to fast external storage, displays, and docks'),
    (10, 'Apple MacBook Pro','laptop',4.3,88000, 'macbookpro.jpg', 122990.00,118990.00,'3%','2020 Apple MacBook Pro (13.3-inch/33.78 cm, Apple M1 chip with 8‑core CPU and 8‑core GPU, 8GB RAM, 512GB SSD) - Space Grey','Apple-designed M1 chip for a giant leap in CPU, GPU, and machine learning performance
Get more done with up to 20 hours of battery life, the longest ever in a Mac
8-core CPU delivers up to 2.8x faster performance to fly through workflows quicker than ever
8-core GPU with up to 5x faster graphics for graphics-intensive apps and games
16-core Neural Engine for advanced machine learning
8GB of unified memory so everything you do is fast and fluid
Superfast SSD storage launches apps and opens files in an instant'),
    (11, 'Mi Smart Watch 5','accessories',4.7,202400, 'miwatch.jpg', 2999.00,2499.00,'17%','Mi Smart Band 5 – India’s No. 1 Fitness Band, 1.1-inch AMOLED Color Display, Magnetic Charging, 2 Weeks Battery Life, Personal Activity Intelligence (PAI), Women’s Health Tracking','1.1” Full touch AMOLED color display
Battery runs up to 14 days on a single charge. Battery capacity : 125 mAh
Magnetic charging – Hassle free charging
PAI (Personal Activity Intelligence) – Single matrix to track your all fitness related activities.
Tracks 11 professional sports mode (including Yoga and Rope skipping). Run on the go with Automatic activity detection (Running and Walking).
5ATM Water Resistant- recognizes swimming mode.
Stress monitoring with Guided breathing exercise to lower the stress level. Women health monitoring- menstrual cycle tracking and notification.'),
    (12, 'Nintendo Switch Version 2','gaming',4.5,101200, 'nintendoswitch.jpg', 49999.00,35880.00,'28%','Nintendo - Version 2 Switch with Joy-Con - Version 2 - HAC-001(-01), Neon Red and Neon Blue','Play your way with the Nintendo Switch gaming system. Whether you’re at home or on-the-go, solo or with friends, the Nintendo Switch system is designed to fit your life.
Dock your Nintendo Switch to enjoy HD gaming on your TV. Heading out? Just undock your console and keep playing in handheld mode
NINTENDO SWITCH REGION FREE BRAND NEW - Product does not have brand warranty and after sales service support as it is not officially launched in India
This is Version 2 Model which will have extra Brightness and Battery life based on the games we play.'),
    (13, 'OPPO Find X2','mobile',4.8,304677, 'oppofindx2.jpg', 69990.00,45299.00,'55%','OPPO Find X2 256 GB, 12 GB RAM, Black (Ceramic), Smartphone','120Hz QHD+ Ultra Vision Screen | True Billion Colour Display |O1 Ultra Vision Engine |Ultra Vision Camera System | 5x Hybrid Zoom, 20x Digital Zoom | 65W SuperVOOC 2.0 Flash Charge. The fastest and safest 65W charge solution in the industry, capable of charging the battery to 40% in 10 minutes. Full charge in 38 minutes. |TUV Rheinland Certified Safe Fast-Charge System.| Qualcomm Snapdragon 865 + Dual-mode 5G |IP54 water and dust resistance.'),
    (14, 'ViewSonic 1080P Monitor','gaming',4.3,59000, 'portablemonitor.jpg', 33600.00,23990.00,'29%','ViewSonic XG2405 (24 Inch) Full HD LED 1080p, 1ms IPS Panel Frameless Gaming Monitor, Refresh Rate 144Hz, Premium Eye Care Technology, HDMI & Display Port, Flicker-Free and Blue Light Filter','ESPORTS MONITOR: Full HD 1080p resolution, 1ms (MPRT) response time, and 144Hz refresh rate gives you the edge in all your matches. AMD FREESYNC PREMIUM: AMD FreeSync Premium technology enables fluid and tear-free gameplay.
AMAZING AT ANY ANGLE: An IPS panel ensures stunning views no matter your vantage point.
SMOOTH GAMING: 1ms (MPRT) response time delivers esports-grade performance with seamless pixel transitions and reduced ghosting.
FRAMELESS DESIGN: This monitor features a frameless edge-to-edge screen that delivers an immersive gaming experience, especially for multi-monitor setups.
ALL DAY COMFORT: Fully adjustable ergonomic stand delivers the comfort you need for marathon gaming sessions.
FLEXIBLE CONNECTIVITY: The XG2405 supports laptops, PCs, Macs, PlayStation, and Xbox with HDMI and DisplayPort inputs.'),
    (15, 'OnePlus Power Bank','accessories',4.2,67000, 'powerbank.jpg', 1299.00,999.00,'23%','OnePlus 10000 mAh Power Bank (Fast PD Charging, 18 W) (Black, Lithium Polymer)','Guaranteed long-term performance (6+6 month extra-long warranty)
Fast Charging (18W PD - Power Delivery)
Charge your power bank and device together (2-way charging)
Charge two devices simultaneously (Dual USB Ports, 2-in-1 Micro-USB/Type-C cable)
Extra safety features (12 layers of circuit protection with unique Low Current mode)
Premium build and Attractive design (Lightweight - 225 gram only, 3D curved body for better grip)'),
    (16, 'ASUS ROG Phone 5','mobile',4.7,10299, 'rogphone5.jpg', 55999.00,49999.00,'11%','ASUS ROG Phone 5 (Black, 128 GB)  (8 GB RAM)','
Stylish, functional, and versatile, the ASUS ROG Phone 5 smartphone ensures that you can stay entertained and play games with ease. Its ergonomic design and AURA RGB lighting further enhance its aesthetic appeal, making it ideal for gaming-freaks who love to flaunt their devices. It features a powerful 5 nm Qualcomm Snapdragon 888 5G Mobile Platform which is capable of handling demanding tasks, such as gaming, browsing, multitasking and more. To top it off, this smartphone comes with a 6000 mAh battery that helps you play for long hours without having to charge it constantly.'),
    (17, 'TP-Link Gaming Router','gaming',4.4,88000, 'router.jpg', 42990.00,29990.00,'30%','TP-Link Archer AX11000 Next-Gen Tri-Band Gaming Router Wi-Fi 6 UltraFast Speed 10 Gbps Smart with 1.8GHz 64bit Quad-Core CPU, Compatible with Amazon Alexa','Ultra-Fast Wi-Fi for Extreme Gaming – AX11000 speed machine that delivers 12-streams Wi-Fi Speeds Over 10 Gbps: 4804 Mbps (5 GHz Gaming) + 4804 Mbps (5 GHz) + 1148 Mbps (2.4 GHz)
Game Accelerator – Detect and optimize gaming streams, to ensure your gaming stays immersive
Game Protector – Keep your accounts and documents safe with Homecare security system powered by Trend Micro
Game Statistics – Real-time latency, game duration and network resource allocation in a glance with fine-tuned UI
Ultra Connectivity - 2.5 Gbps WAN port and eight Gigabit LAN ports, 2 USB 3.0 in Type A and Type C provide extensive connectivity
Powerful Processing – 1.8 GHz Quad-Core CPU and 3 coprocessors ensure your network performance always at peak run
Highly Efficient – OFDMA increases the avg. throughput and reduces the lag'),

    (18, 'AMD Ryzen 9 3900X','gaming',4.9,404000, 'ryzencpu5.jpg', 73000.00,45700.00,'37%','AMD 3000 Series Ryzen 9 3900XT Desktop Processor 12 cores 24 Threads 70MB Cache 3.8GHz Upto 4.7GHz AM4 Socket 400 & 500 Series Chipset (100-100000277WOF)','12 Cores & 24 Threads, 70MB Cache
Base Clock: 3.8GHz, Max Boost Clock: up to 4.7GHz
Memory Support: DDR4 3200MHz, Memory Channels: 2, TDP: 105W, PCI Express Generation : PCIe Gen 4
Compatible with Motherboards based on 400 & 500 Series Chipset, Socket AM4
Separate Graphic Card Required; Included Heatsink Fan: No
3 Years Brand Warranty. For Technical Support : Please Contact : Tel: +91-80-67030050 (Mon-Fri: 09:00 - 17:00 IST); Expect Delayed Response due to ongoing COVID Crisis'),
    (19, 'Wordtech DVD Player','accessories',4.3,22000,'dvdplayer.jpg', 12900.00,10100.00,'22%','WORLDTECH PORTABLE DVD PLAYER WITH BUILT IN 9.8 INCH LED TV SUPPORT TV TUNER, USB, SD CARD,AV IN AND AV OUT','Comes with game CD,Joystick,Radio Antenna Wire,3d Glasses,Adaptor, Earphones and 1 AV Cable Portable DVD with 9.8 inch TFT LCD Screen Compatible with DIVX, MP4 , DVD, SVCD,VCD, CD ,MP3 TV receiver (AL/NTSC/SECAM auto switching) With GAME port With USB port Super anti-shock (DVD 3 seconds, CD/VCD 10 seconds, MP3 90 seconds) Multi function remote controller With AV input and output functions Super strong lithium battery Power adapter. AC 100~240 V DC 14.5V car adapter'),
   (20, 'LG Gram','laptop',4.5,89000,'lg.jpg', 140000.00,105990.00,'24%','LG Gram 10th Gen Intel Core i7-1065G7 17-inch IPS WQXGA (2560X1600) Thin and Light Laptop (8GB/512GB SSD/Windows 10 64-bit/Dark Silver/1.35kg), 17Z90N','
RAM 8GB DDR 4, 512GB SSD, Windows 10 Home
Upto 17 hrs backup with 80Wh Battery
17 Inch Ultra-Lightweight (1.35 kg) Laptop with 10th Gen Intel i7-1065G7 w/Intel Iris Plus
USB3.1 (x3), USB3.1 Type C (x1, Thunderbolt 3, USB PD), DC-In, HDMI(2.0), HP Out'),
    (21, 'APC Back-UPS Pro','accessories',4.5,33000, 'ups.jpg', 20400.00,17999.00,'12%','Roll over image to zoom in APC Back-UPS Pro BR1000G-IN, 1000VA / 600W, 230V UPS System, High-Performance Premium Power Backup & Protection for Home Office, Desktop PC, Gaming Console & Home Electronics','Line Interactive UPS with Load Capacity of 600Watts / 1000VA LCD Display and Sleek Design
6 nos. India 3 Pin 6A Output Socket – 4 with Battery backup & 2 with Surge protection Outlets
Automatic Voltage Regulator (AVR) with Wide Input Voltage Range of 170-294V
45-60* min. Back-Up time *as per the load. Typical recharge time 7.4hour(s). Expected Battery Life (years) 2 - 4
Green UPS with Programmable Outlets with energy-saving features
Generator Compatible. Cold start capability allows the load to power on just on battery')";


            
            //checking

            if($conn1->query($sql)===TRUE){
                echo "inserted data succesfully";
            }
            else{
                echo "oops we ran into problem".$conn1->error;
            }
            ?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Document</title>
            </head>
            <body>
                <button><a href="index.php"> Go to Website</a></button>
            </body>
            </html>
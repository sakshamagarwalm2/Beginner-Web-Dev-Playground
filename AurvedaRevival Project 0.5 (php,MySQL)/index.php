<?php
include 'connect.php';


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PROJECT-AR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: #ddb49790!important;">
    <div><img src="public/nav.png" width="10%" style="z-index:3;right:0;position:absolute;opacity:90%; margin:0;"></div>
        <div class="container" style="display:flex; justify-content:space-evenly;">
            <a class="navbar-brand" href="#" width="auto"><img src="public/logo.png" alt="logo" width="50px"></a>
            <h3 class="my-3">PROJECT<span class="text-danger">AR.</span></h3>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav" style="display:flex; justify-content:space-evenly; width:40%; float:right;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="search.php">Search</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="add.php">Add-Data</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div><img src="public/left.png" width="50%" style="z-index:-3;float:left;position:absolute;opacity:50%;"></div>
    <div class="container">
        <div class="text-center text-success ftt-32 my-3 text-center">
            About Us:</div>
        <div class="ftt-20 my-1 text-center">Reclaiming the Wisdom of Ayurveda</div>
        Welcome! We are passionate advocates for the revival of Ayurveda, the ancient Indian system of holistic
        medicine. With a history stretching back thousands of years, Ayurveda offers a unique approach to health and
        well-being that emphasizes:

        <div class="ftt-20 my-1 text-center">Balance and harmony:</div> Ayurveda views the body, mind, and spirit as interconnected.
        Treatments aim to restore
        balance and promote overall wellness.
        <div class="ftt-20 my-1 text-center">Natural solutions:</div> Ayurvedic practices utilize herbs, diet, lifestyle
        modifications, and manual therapies to
        address the root cause of illness.
        <div class="ftt-20 my-1 text-center">Personalized care:</div> Treatments are tailored to each individual's unique
        constitution (dosha) for optimal
        results.
        <div class="ftt-20 my-1 text-center">Our Mission:</div>

        Our mission is to make the profound wisdom of Ayurveda accessible to a wider audience. We believe that
        Ayurveda offers a powerful and complementary approach to modern medicine, empowering individuals to take
        charge of their health and well-being.

        <div class="ftt-20 my-1 text-center">What We Offer:</div>

        This website serves as a comprehensive resource for anyone interested in exploring Ayurveda. Here, you will
        find: <br>
        Information on common ailments and their Ayurvedic treatment options. <br>
        Guidance on incorporating Ayurvedic practices into your daily life. <br>
        Insights into the core principles of Ayurveda for a deeper understanding. <br>
        We are committed to providing reliable, evidence-based information, while recognizing the traditional
        knowledge passed down through generations of Ayurvedic practitioners. <br>

    </div>


    <div class="container my-5 text-center">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Disease</th>
                </tr>
            </thead>
            <tbody>
                <?php

                //select query
                $sql="Select * from `aurveda` ";
                $result=mysqli_query($con,$sql);
                while($row=mysqli_fetch_assoc($result)){
                    $sno=$row['ID'];
                $disease= $row['Disease'];
                
                echo '<tr>
                <th scope="row"><a href="searchData.php?data='.$row['ID'].'" style="text-decoration:none; color:black">'.$sno.'</a></th>
                <td><a href="searchData.php?data='.$row['ID'].'" style="text-decoration:none; color:black">'.$disease.'</td>
                </tr>';
                
                }


                ?>

            </tbody>
        </table>
        <div class="container my-3 disclam">
            <p><span class="text-danger">Disclaimer:</span> While Ayurveda offers valuable insights, it is not a
                replacement for professional medical advice. Always consult a doctor for serious injuries, acute
                illnesses, or severe allergies.</p>
        </div>
    </div>
    <div class="container text-center">
        <img src="public/b-logo.png" width="70%" style="border-radius:5px;">
    </div>
    <hr class="my-4">
    <footer class="site-footer" style="margin-top:10px;bottom:0!important;">
    <div><img src="public/nav.png" width="20%" style="z-index:3;right:0;position:absolute;opacity:90%; margin:0;"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <h6>PROJECT-<span class="text-danger">AR.</span></h6>
                    <p class="text-justify">Ayurveda, India's traditional medicine, offers a holistic approach to
                        wellness. We explore natural solutions and personalized treatments to empower your health
                        journey. Join us to revive this ancient wisdom for a healthier you!</p>
                </div>

                <div class="col-xs-6 col-md-3">
                    <h6>Conntact Us</h6>
                    <ul class="footer-links">
                        <li><a href="#">Whatsapp</a></li>
                    </ul>
                </div>


                <div class="col-xs-6 col-md-3">
                    <h6>Quick Links</h6>
                    <ul class="footer-links">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="search.php">Search</a></li>
                        <li><a href="add.php">Add-Data</a></li>
                    </ul>
                </div>
            </div>
            <hr>
        </div>
        <div class="container">
            <div class="row">
                <div class="text-center">
                    <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by
                        <a href="#">HKRM.</a>.
                    </p>
                </div>
            </div>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</body>

</html>
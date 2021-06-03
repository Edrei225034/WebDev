<!DOCTYPE html>
<html lang="en">

<head>
    <title>Salih's World of Knowledge</title>
    <link rel="icon" type="images/x-icon" href="images/Hat1.png" />

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="SHS WebDev Version 3.0">

    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="style.css">

    <!-- Script -->
    <script type="text/javascript" src="JS/Script.js"> </script>
    <script>
        listBtn.onclick = function(e) {
            list.removeChild(listItem);
        }
    </script>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
        }

        /* Style the header */
        header {
            padding: 80px;
            text-align: center;
            background: #daa778;
            color: rgb(148, 82, 82);
        }


        .header h1 {
            font-size: 40px;

        }


        .navbar {
            overflow: hidden;
            background-color: rgb(61, 158, 187);

        }




        .row {
            display: flex;
            flex-wrap: wrap;
        }


        .side {
            flex: 30%;
            background-color: #41b68f;
            padding: 20px;
        }


        .main {
            flex: 70%;
            background-color: rgb(192, 124, 112);
            padding: 20px;
            margin: unset;
        }


        .fakeimg {
            background-color: rgb(120, 170, 226);
            width: 100%;
            padding: 20px;
        }


        .footer {
            padding: 20px;
            text-align: center;
            background: rgb(206, 171, 76);

        }

        /* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 700px) {
            .row {
                flex-direction: row-reverse;
            }
        }



        /* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
        @media screen and (max-width: 400px) {
            .navbar a {
                float: inline-start;
                width: 100%;

            }
        }

        .card-img {
            column-count: 3;
        }

        h3 {
            column-span: all;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">

        <!-- Container wrapper -->
        <div class="container">
            <!-- Navbar brand -->
            <a class="navbar-brand me-2" href="index.html" aria-posinset="text-align: left;">
                <i class="fa fa-google-wallet fa-3x aria-hidden=" style="color: darkgoldenrod;" true></i>
            </a>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarButtonsExample">
                <!-- Left links -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="aboutme.HTML">About creator</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Users/309761/Applications/mampstack/apache2/htdocs/WebDev/Version2.0/webDevUser14.html">My
                            first webpage</a>
                    </li>
                    </li>
                    <a href="games.html" style="color:rgb(78, 144, 206)"><i class="fa fa-gamepad fa-3x" aria-hidden="true" class="animated heartBeat" alt="Transparent MDB Logo" id="animated-img1"></i></a>

                    </li>
                </ul>
                <!-- Left links -->

                <div class="ml-auto d-flex align-items-center">
                    <a href="index.php" type="button" class="btn btn-link px-3 me-2">
                        Login
                    </a>
                    <a href="form.php" type="button" class="btn btn-primary me-3" style="text-decoration: steelblue;">
                        Sign up for free
                    </a>
                    <a class="btn btn-dark px-3" href="https://github.com/mdbootstrap/mdb-ui-kit" role="button"><i class="fa fa-github"></i></a>
                </div>
            </div>
            <!-- Collapsible wrapper -->

            <!-- Container wrapper -->
    </nav>
    <!-- End of Navbar -->


    <header>
        <div>
            <h1>Salih's World of Knowledge</h1>

            <p>~Presented to you by Salih~</p>
    </header>

    <main>
        <h2>TITLE HEADING</h2>
        <h5>Title description, Dec 7, 2017</h5>
        <img src="images/Licoln4.jpeg" class="mx-auto d-block">
        <p>Some text..</p>
        <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
            ullamco.</p>
        <br>
        <h2>TITLE HEADING</h2>
        <h5>Title description, Sep 2, 2017</h5>
        <img src="images/lincoln5.jpeg" class="img-thumbnail" alt="Cinque Terre">
        <p>Some text..</p>
        <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
            ullamco.</p>

        <div class="row">
            <div class="col-sm-6" style="background-color:rgb(52, 73, 90);">
                <Center>
                    <h2> Video </h2>
                </Center>
                <center>
                    <h3>Biography VIDEO</h3>
                </center>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/L80_q2tPveo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-sm-6" style="background-color:rgb(95, 86, 105);">
                <center>
                    <form onsubmit="confirmInput()" action="https://shakopee.instructure.com/courses/131334" style="background-color:rgb(95, 86, 105);">
                        Enter your name: <input id="fname" type="text" size="20" style="background-color:yellow;">
                        <input type="submit" style="background-color:rgb(223, 168, 220);">
                        <center>
                            <div id="colorMsg" style="font-size:18px;width:150px;height:100px;padding:5px;">Choose a background
                                color...
                            </div>
                            <select id="colorPicker" onchange="JavaScript:changeColor()">
                                <option value="transparent">None</option>
                                <option value="yellow">Yellow</option>
                                <option value="salmon">Salmon</option>
                                <option value="lightblue">Light Blue</option>
                                <option value="limegreen">Lime Green</option>
                            </select>
            </div>
            </center>
            </form>


        </div>
    </main>
    <footer>
        <h2>Footer</h2>
        <div class="row">
            <aside class="col" style="background-color:rgb(66, 139, 173);">
                <center><button onclick="myFunction()">Click if you liked my Biography</button></center>
            </aside>
            <aside class="col" style="background-color:rgb(207, 218, 112);">
                <h3>sources</h3>
                <a href="https://www.w3schools.com/default.asp" class="nav-item nav-link active" tabindex="-1">W3Schools</a>
                <a href="https://www.youtube.com/channel/UCiCPv2sV_D3FqMRzzUFA2Fg" class="nav-item nav-link active" tabindex="-1">Biography Channel</a>
            </aside>
        </div>
        </div>
        </div>
        </div>
        <div class="footer" id="footer" style="background-color:rgb(102, 212, 69);">
            <p>
                <center>Webpage made by <a href="index.html" target="_blank">Salih</a></center>
            </p>

        </div>



    </footer>
</body>

</html>
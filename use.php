<?php
include "nav.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>How to Use</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Custom Styles -->
    <style>
        /* General Spacing */
        body {
            background-color: #f9f9f9;
            font-family: Arial, sans-serif;
        }

        .main-container {
            padding: 20px;
            margin: 20px auto;
            max-width: 1100px;
            background-color: #ffffff;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        /* Section Titles */
        .title h2 {
            text-align: center;
            color: #00897b; /* Materialize teal color */
            margin-bottom: 20px;
            font-weight: bold;
        }

        /* Content Styles */
        .contents, .content-instruction {
            font-size: 1.1rem;
            line-height: 1.8;
            text-align: justify;
            margin-bottom: 20px;
            color: #444;
        }

        /* Card Styling for Motivation and Instructions */
        .motivation {
            padding: 10px;
            margin-bottom: 10px;
        }
        .instructions {
            padding: 10px;
            margin-bottom: 20px;
        }

        .card-panel {
            background-color: #e0f2f1; /* Light teal */
            border-radius: 8px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
        }
        
    </style>
</head>

<body>
    <!-- Main Container -->
    <div class="main-container">

        <!-- Motivation Section -->
        <div class="motivation">
            <div class="title">
                <h2>Motivation Behind The Project</h2>
            </div>
            <div class="card-panel">
                <div class="contents">
                    Despite the huge influence of technology in our daily life, majority of the students still create their notes manually with pen and paper. While this may work at a lower level, managing these notes becomes a tedious task at higher levels. Additionally, there is a risk of these paper notes being destroyed or lost. <br><br>
                    To resolve this problem, we decided to construct a web-based application that helps students to create and manage their notes with ease. While web-based note apps already exist and provide good services, our main aim is to increase the convenience for students manifold by building upon these apps as our base.
                </div>
            </div>
        </div>

        <!-- Instructions Section -->
        <div class="instructions">
            <div class="title">
                <h2>How To Use This Site</h2>
            </div>
            <div class="card-panel">
                <div class="content-instruction">
                    The user or student has to first register to access the system. Users can add, remove, and set their notes as public or private. They can also view notes that are available in the public ledger. <br><br>
                    Each user will have a unique username and password to access their account. Each note created will have a unique identifier (Note ID), and each public note will have a Public ID.<br><br>
                    <strong>Admin Controls:</strong> <br>
                    The admin will have login credentials to manage the system. The admin can:
                    <ul>
                        <li>View the list of registered users.</li>
                        <li>Remove users from the system.</li>
                        <li>View only the note names and authors but not the content.</li>
                        <li>Delete specific user notes if necessary.</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

   <?php include './footer.php' ?>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>

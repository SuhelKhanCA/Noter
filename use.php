<?php
session_start();
include "nav.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>How to Use</title>
    <link rel="stylesheet" href="./css/use.css">
</head>

<body>
    <div class="main-container">
        <div class="motivation">
            <div class="title">

                <h2>Motivation Behind The Project</h2>
            </div>
            <div class="contents">Inspite of huge influence of technology in our daily life, majority of the students
                still create their notes manually by pen and paper,while this may work at a lower level however at a
                higher level managing these notes becomes a tedious task , also there is a risk of these paper notes
                being destroyed or lost.
                To resolve this problem we have decided to construct a web based application which would help
                students to create and manage their notes with ease.Yes the idea of web based notes app has already
                been implemented and the app has already been implemented and the apps are even offering good
                service to it’s users as such our main aim behind the construction of this app is to further
                increase the convenience of students by manyfold by using these apps as our base and then building
                upon them.
            </div>

        </div>

        <div class="instructions">

            <div class="title">

                <h2>How To use This Site</h2>

            </div>

            <div class="content-instruction">

                The user or the student has to first register himself in order to access the system. He can add ,remove,
                public/private his notes. He can also view the notes which are in public ledge.Each user would have a
                unique UserName and a password through which they could access their accounts. Each note created would
                have a unique id called NoteId and similarly each public note would have a PublicId.

                The admin would be provided with his/her login credentials. The admin can view different users who are
                registered on the system and would have the ability to remove them from the system. The admin can only
                view the name of the note and the user who created it , he neither can view the content of the note nor
                change it. The admin would have the facility to remove a user’s note
            </div>

        </div>
        </div>
</body>

</html>
<!-- Navbar -->
    <?php
        include "nav.php";
    ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome to SmartNotes</title>
    <!-- Materialize CSS -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"
      rel="stylesheet"
    />
    <!-- Materialize Icons -->
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <style>
      body {
        display: flex;
        min-height: 100vh;
        flex-direction: column;
      }

      main {
        flex: 1 0 auto;
      }
    </style>
  </head>
  <body>
    <!-- Navbar -->

    <!-- Main Content -->
    <div class="container">
      <div class="section center-align">
        <h4 class="teal-text">Motivation Behind the Notes App</h4>
        <p class="grey-text text-darken-1">
          Discover the benefits and goals of our innovative notes management
          application.
        </p>
      </div>

      <!-- Motivation Section -->
      <div class="card z-depth-2">
        <div class="card-content">
          <p>
            In today's fast-paced world, managing and organizing notes
            efficiently is essential for students and professionals alike. While
            traditional pen-and-paper note-taking has served its purpose, it
            comes with limitations, such as the risk of losing notes, difficulty
            in sharing, and a lack of advanced features.
          </p>
          <p>
            Our <strong>Notes App</strong> addresses these challenges by
            offering an intuitive and powerful platform that enables users to
            create, manage, and share notes with ease. Additionally, users can
            make their notes public for others to view, fostering collaboration
            and knowledge sharing.
          </p>
        </div>
      </div>

      <!-- Key Benefits Section -->
      <div class="card z-depth-3">
        <div class="card-content">
          <h5 class="teal-text">Key Benefits</h5>
          <ul class="collection">
            <li class="collection-item">
              <span class="teal-text"><b>Accessibility:</b></span> Easily
              create, update, and manage notes anytime, anywhere through a
              user-friendly interface.
            </li>
            <li class="collection-item">
              <span class="teal-text"><b>Organization:</b></span> Keep all your
              notes neatly categorized and avoid the hassle of misplaced paper
              notes.
            </li>
            <li class="collection-item">
              <span class="teal-text"><b>Collaboration:</b></span> Users can
              choose to make notes public for others to access and view, sharing
              knowledge with peers.
            </li>
            <li class="collection-item">
              <span class="teal-text"><b>Security:</b></span> Each user has a
              secure account with login credentials, ensuring privacy for
              private notes.
            </li>
            <li class="collection-item">
              <span class="teal-text"><b>Admin Control:</b></span> Admins can
              manage users and remove inappropriate or unnecessary notes from
              the system.
            </li>
          </ul>
        </div>
      </div>

      <!-- Contribution Section -->
      <div class="card z-depth-1">
        <div class="card-content">
          <p>
            Our app not only provides a solution for seamless note-taking but
            also encourages collaboration through a
            <strong>public notes section</strong>. Users can gain access to
            shared notes from peers and contribute to a growing community of
            learners.
          </p>
          <p>
            By leveraging innovative features and focusing on user convenience,
            we aim to make note management smarter, faster, and more secure.
          </p>
        </div>
      </div>
    </div>

    <?php include './footer.php' ?>

    <!-- Materialize JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  </body>
</html>
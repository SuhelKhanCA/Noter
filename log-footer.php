<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sticky Footer Example</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
  <style>
    /* Ensure the page takes the full height of the viewport */
    html, body {
      height: 100vh;
      margin: 0;
      display: flex;
      flex-direction: column;
    }

    /* Footer styling */
    .page-footer {
      position: relative;
      bottom: 0;
      width: 100%;
      position: fixed;
      padding-bottom: 15px;
    }
  </style>
</head>
<body>
  
  <!-- Footer -->
  <footer class="page-footer teal">
    <div class="container center-align">
      <h6>© 2024 Copyright Noter - Aligarh Muslim University</h6>
    </div>
  </footer>

</body>
</html>

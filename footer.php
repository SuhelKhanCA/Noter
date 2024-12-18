<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style>
        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
            background-color: #f9f9f9; 
        }

        main {
            flex: 1 0 auto;
        }

        footer.page-footer {
            background-color: #00897b;
        }

        footer h5 {
            font-weight: bold;
        }

        footer .grey-text.text-lighten-4 {
            color: #e0f2f1 !important; 
        }

        footer a.grey-text.text-lighten-4:hover {
            color: #b2dfdb !important;
        }

        .footer-copyright {
            background-color: #00695c;
        }
        .social-icons {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin: 20px 0;
        }

        .social-icons a {
            color: #555;
            font-size: 24px;
            transition: color 0.3s ease;
        }

        .social-icons a:hover {
            color: #0073e6;
        }

        footer {
            background: #2c3e50;
            color: white;
            text-align: center;
            padding: 20px 0;
        }
        i{
            color: #fff;
        }
    </style>
</head>
<body>
    <!-- Footer -->
    <footer class="page-footer">
        <div class="container">
            <div class="row">
                <!-- Footer Content -->
                <div class="col l6 s12">
                    <h5 class="white-text">Footer Content</h5>
                    <p class="grey-text text-lighten-4">
                        Use this footer to organize your content and provide important links or information.
                    </p>
                </div>

                <!-- Footer Links -->
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Quick Links</h5>
                    <ul class="social-icons">
                        <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-linkedin"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-youtube"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-github"></i></a>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Copyright Section -->
        <div class="footer-copyright">
            <div class="container">
                © 2024 Noter. All Rights Reserved.
                <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
        </div>
    </footer>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>UKK KASIR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #00d400, #0044ff, #8a00d4, #ff0000); /* Rainbow gradient */
            background-size: 400% 400%;
            animation: rainbow 10s ease infinite; /* Animate the rainbow background */
            padding: 20px;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
        }

        .content {
            margin-top: 50px;
        }

        .card {
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff5d6; /* Soft yellow background for cards */
        }

        .card-body {
            padding: 30px;
        }

        h3 {
            font-size: 24px;
            color: #ff6347; /* Tomato red color for heading */
        }

        .form-group label {
            font-weight: bold;
            color: #32cd32; /* Lime green color for labels */
        }

        .btn-primary {
            background-color: #ff8c00; /* Vivid orange for the button */
            border: none;
            border-radius: 5px;
            padding: 12px;
            width: 100%;
            font-weight: bold;
        }

        .btn-primary:hover {
            background-color: #e07b00; /* Darker orange for hover effect */
        }

        .alert {
            color: #ff4500; /* Orange red for error messages */
            font-weight: bold;
            background-color: #fff4e6; /* Very light peach background for alerts */
            padding: 10px;
            border-radius: 5px;
        }

        .card img {
            width: 100%;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .row {
            display: flex;
            justify-content: space-between;
        }

        .col-6 {
            width: 48%;
        }

        .form-control {
            border-radius: 5px;
            border: 1px solid #ddd; /* Soft border color */
            box-shadow: none;
        }

        .form-control:focus {
            border-color: #ff8c00; /* Highlight border with vivid orange on focus */
            box-shadow: 0 0 5px rgba(255, 140, 0, 0.5); /* Orange shadow on focus */
        }

        /* Animation for the rainbow background */
        @keyframes rainbow {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="content">
            <div class="card mt-5">
                <div class="row">
                    <div class="col-6">
                        <div class="card-body">
                            <h3 class="text-center mt-5">Silahkan Masukan Username dan Password</h3>
                            <?php
                            if (isset($_GET['pesan'])) {
                                if ($_GET['pesan'] == "gagal") {
                                    echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
                                }
                            }
                            ?>
                            <form method="post" action="cek_login.php">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control" name="username">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password">
                                </div>
                                <div class="form-group mt-3">
                                    <button class="btn btn-primary form-control" type="submit">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card-body">
                            <img src="assets/pesan moral.jpg" alt="Pesan Moral">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>

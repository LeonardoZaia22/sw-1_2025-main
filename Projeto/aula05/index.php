<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página inicial</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: 'Poppins', sans-serif;
        }

        .container {
            background: rgba(255, 255, 255, 0.9);
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 100%;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 1.5rem;
            font-weight: 600;
        }

        .form-outline {
            margin-bottom: 1.5rem;
        }

        .form-control {
            border-radius: 10px;
            border: 1px solid #ddd;
            padding: 10px;
            font-size: 1rem;
        }

        .form-control:focus {
            border-color: #6a11cb;
            box-shadow: 0 0 5px rgba(106, 17, 203, 0.5);
        }

        .form-label {
            font-weight: 500;
            color: #555;
        }

        .btn-primary {
            background-color: #6a11cb;
            border: none;
            border-radius: 10px;
            padding: 10px;
            font-size: 1rem;
            font-weight: 500;
            width: 100%;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #2575fc;
        }

        .btn-primary:active {
            background-color: #1a5bbf;
        }

        .form-outline:hover .form-control {
            border-color: #6a11cb;
        }

        @media (max-width: 576px) {
            .container {
                padding: 1.5rem;
            }

            h1 {
                font-size: 1.75rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <form action="processa.php" method="POST">
            <div class="form-outline mb-4">
                <input type="email" id="form2Example1" class="form-control" name="email" required />
                <label class="form-label" for="form2Example1">Insira seu Email</label>
            </div>

            <div class="form-outline mb-4">
                <input type="password" id="form2Example2" class="form-control" name="senha" required />
                <label class="form-label" for="form2Example2">Senha</label>
            </div>

            <input type="submit" class="btn btn-primary btn-block mb-4" value="Sign in">
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
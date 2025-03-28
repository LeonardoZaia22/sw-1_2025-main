<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de erro</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            font-family: 'Poppins', sans-serif;
            color: #fff;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            text-align: center;
        }

        h1 {
            font-size: 8rem;
            font-weight: 700;
            margin-bottom: 0;
            color: #fff;
            text-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        }

        p.fs-2 {
            font-size: 2rem;
            font-weight: 500;
            margin-top: 1rem;
            color: #fff;
        }

        p.mt-4 {
            font-size: 1.25rem;
            color: rgba(255, 255, 255, 0.8);
            margin-bottom: 2rem;
        }

        .custom-btn {
            background-color: #fff;
            color: #6a11cb;
            font-weight: 600;
            border: none;
            padding: 12px 24px;
            border-radius: 50px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .custom-btn:hover {
            background-color: #6a11cb;
            color: #fff;
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        .custom-btn:active {
            transform: translateY(0);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        @media (max-width: 576px) {
            h1 {
                font-size: 6rem;
            }

            p.fs-2 {
                font-size: 1.75rem;
            }

            p.mt-4 {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="d-flex align-items-center justify-content-center min-vh-100 px-2">
            <div class="text-center">
                <h1 class="display-1 fw-bold">404</h1>
                <p class="fs-2 fw-medium mt-4">Oops! Page not found</p>
                <p class="mt-4 mb-5">The page you're looking for doesn't exist or has been moved.</p>
                <a href="index.php" class="btn btn-light fw-semibold rounded-pill px-4 py-2 custom-btn">
                    Ir para o início
                </a>
            </div>
        </div>
    </div>
</body>
</html>
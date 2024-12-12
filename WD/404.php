<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Unavailable</title>
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        @keyframes gradientAnimation {
            0% {
                background: linear-gradient(to right, #1e6e1e, #0c250c);
            }
            50% {
                background: linear-gradient(to right, #1e250c, #1e6e1e);
            }
            100% {
                background: linear-gradient(to right, #0c250c, #1e6e1e);
            }
        }

        body {
            margin: 0;
            font-family: 'Lora', serif;
            animation: gradientAnimation 8s ease infinite;
            color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            height: 100vh;
            flex-direction: column;
            overflow: hidden;
            position: relative;
        }

        .background-effects {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('your-image.jpg') no-repeat center center / cover;
            opacity: 0.25;
            pointer-events: none;
        }

        .floating-dots {
            position: fixed;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100%;
            height: 50px; 
            display: flex;
            justify-content: center;
            align-items: center;
            pointer-events: none;
        }

        .dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.6);
            animation: float 6s ease-in-out infinite;
        }

        .dot:nth-child(1) { animation-delay:  0s; }
        .dot:nth-child(2) { animation-delay:  1s; }
        .dot:nth-child(3) { animation-delay:  2s; }
        .dot:nth-child(4) { animation-delay:  3s; }
        .dot:nth-child(5) { animation-delay:  4s; }
        .dot:nth-child(6) { animation-delay:  5s; }
        .dot:nth-child(7) { animation-delay:  6s; }
        .dot:nth-child(8) { animation-delay:  7s; }
        .dot:nth-child(9) { animation-delay:  8s; }
        .dot:nth-child(10) { animation-delay: 9s; }
        .dot:nth-child(11) { animation-delay: 10s; }
        .dot:nth-child(12) { animation-delay: 11s; }

        @keyframes float {
            0% { transform: translateY(0); }
            50% { transform: translateY(-30px); }
            100% { transform: translateY(0); }
        }

        .card.custom-card {
            background-color: #0B3D0B; 
            border: 1px solid #1B5E20; 
            color: #E0F2F1; 
            border-radius: 10px; 
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.4);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card.custom-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.6); 
        }

        .card.custom-card .card-body {
            padding: 30px;
        }

        .card.custom-card .card-title {
            font-size: 2rem;
            font-weight: bold;
            color: #A5D6A7; 
            margin-bottom: 15px;
        }

        .card.custom-card .card-text {
            font-size: 1.2rem;
            line-height: 1.5;
            color: #C8E6C9;
            margin-bottom: 20px;
        }

        .card.custom-card .btn {
            background-color: #2E7D32; 
            color: #FFFFFF; 
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .card.custom-card .btn:hover {
            background-color: #4CAF50; 
            transform: scale(1.05); 
        }
    </style>
  <link rel="icon" href="imgs/rowletticn.png" type="image/png">
  </head>
<body>
    <div class="background-effects"></div>

    <div class="container">
        <div class="card custom-card">
            <div class="card-body">
                <h1 class="card-title">404 - Page Not Found</h1>
                <p class="card-text">
                    Oops! The page you're looking for isn't available. 
                    Please check the URL or return to the homepage.
                </p>
                <a href="/" class="btn">Go Back Home</a>
            </div>
        </div>        
    </div>

    <div class="floating-dots">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
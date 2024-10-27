<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $details['companyName'] }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 650px;
            margin: 50px auto;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        h1 {
            background-color: #0f766e; /* bg-teal-900 */
            color: white;
            padding: 15px;
            border-radius: 8px 8px 0 0;
            margin: -20px -20px 20px -20px;
            text-align: center;
        }

        h2 {
            font-size: 1.5rem;
            color: #0f766e;
            text-align: center;
            margin-bottom: 20px;
        }

        p {
            line-height: 1.6;
            margin-bottom: 15px;
        }

        .highlight {
            font-weight: bold;
            color: #0f766e;
        }

        .quote-details {
            margin-top: 30px;
        }

        .quote-details p {
            padding: 10px;
            background-color: #f9f9f9;
            border-radius: 6px;
        }

        .footer {
            text-align: center;
            margin-top: 40px;
            font-size: 0.9em;
            color: #555;
        }

        .footer p {
            margin-bottom: 0;
        }

        /* Button styling */
        .action-btn {
            background-color: #0f766e;
            color: white;
            padding: 10px 20px;
            text-align: center;
            border-radius: 6px;
            text-decoration: none;
            display: inline-block;
            margin-top: 20px;
        }

        .action-btn:hover {
            background-color: #0c5e57;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>{{ $details['subject'] }}</h2>
    <h1>Hello, {{ $details['name'] }}</h1>

    <p>{{ $details['headMessage'] }}</p>

    <div class="quote-details">
        <p><span class="highlight">Service:</span> {{ $details['service'] }}</p>
        <p><span class="highlight">Cost:</span> {{ $details['cost'] }}</p>
        <p><span class="highlight">Delivery Date:</span> {{ $details['deliveryDate'] }}</p>
        <p><span class="highlight">Telephone:</span> {{ $details['telephone'] }}</p>
    </div>

    <p>{{ $details['message'] }}</p>

    <p>{{ $details['clossingMessage'] }}</p>

    <div class="footer">
        <p>Thank you for choosing {{ $details['companyName'] }}.</p>
        <a href="mailto:{{ $details['email'] }}" class="action-btn">Contact Us</a>
    </div>
</div>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{ $subject ?? 'Confirmation Email' }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }
        .email-container {
            max-width: 600px;
            margin: 40px auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        h2 {
            color: #333333;
        }
        p {
            color: #555555;
            line-height: 1.6;
        }
        .cta-button {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 25px;
            background-color: #3490dc;
            color: #fff !important;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }
        .footer {
            margin-top: 30px;
            font-size: 12px;
            color: #888888;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <h2>{{ $title ?? 'Hello User' }},</h2>

        <p>Thank you for reaching out to us. We have successfully received your submission and our team will get back to you shortly.</p>

        @if(!empty($ctaText) && !empty($ctaLink))
            <a href="{{ $ctaLink }}" class="cta-button">{{ $ctaText }}</a>
        @endif

        <p>If you have any questions in the meantime, feel free to reply to this email.</p>

        <p>Best regards,<br>
        <strong>EduINNTECH </strong> Team</p>

        <div class="footer">
            &copy; {{ date('Y') }} EduINNTECH. All rights reserved.
        </div>
    </div>
</body>
</html>

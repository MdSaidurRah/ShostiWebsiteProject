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
        <h2> Welcome,</h2>

        <p> With the subject of <i> <strong>{{ $messageSubject ?? 'Confirmation Email' }}</strong> </i>,
         a new contact us query has been submitted by G8ICT website visitor named <strong>{{$name ?? 'Annonimousely'}} </strong> 
         and email <strong>{{$email}} </strong>just now.</p>
        <p>You need to read the message and reply if is relevent to us</p>
        
        
        <a href="https://eduinntech.com/visitor-message" class="cta-button">Read Message</a>

        <p>Best regards,<br>
        <strong>EduINNTECH </strong> Team</p>

        <div class="footer">
            &copy; {{ date('Y') }} EduINNTECH. All rights reserved.
        </div>
    </div>
</body>
</html>

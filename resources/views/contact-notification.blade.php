<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Nouveau message - Portfolio Romaric</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background: #4361ee; color: white; padding: 20px; text-align: center; }
        .content { background: #f8f9fa; padding: 20px; border-radius: 8px; margin: 20px 0; }
        .message-box { background: white; padding: 15px; border-radius: 5px; border-left: 4px solid #4361ee; }
        .footer { text-align: center; color: #6c757d; font-size: 0.9em; margin-top: 20px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Nouveau message - Portfolio</h1>
        </div>
        
        <div class="content">
            <p><strong>De:</strong> {{ $name }} ({{ $email }})</p>
            <p><strong>Message:</strong></p>
            <div class="message-box">
                {{ nl2br(e($message)) }}
            </div>
        </div>
        
        <div class="footer">
            <p>Message envoyé depuis votre portfolio le {{ now()->format('d/m/Y à H:i') }}</p>
        </div>
    </div>
</body>
</html>
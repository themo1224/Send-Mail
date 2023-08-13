<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Your Email Title</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #0e1f33;
            color: #ffffff;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #142b3b;
            text-align: right;
        }
        h1 {
            color: #ffc107;
        }
        p {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>مشخصات</h1>
    <p>نام و نام خانوادگی: {{ $name }}</p>
    <p>شماره تلفن: {{ $phone_number }}</p>
    <p>فیلد کاری: {{ $job }}</p>
</div>
</body>
</html>

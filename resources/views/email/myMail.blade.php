<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Email</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .email-container {
            background-color: #ffffff;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #dddddd;
            max-width: 600px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h5 {
            color: #333333;
            font-size: 24px;
            margin-bottom: 20px;
        }
        p {
            color: #555555;
            font-size: 16px;
            line-height: 1.6;
        }
        .code {
            background-color: #f0f0f0;
            border-left: 5px solid #cccccc;
            padding: 10px;
            font-family: 'Courier New', Courier, monospace;
            display: inline-block;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <h5>{{ $data['title'] }}</h5>
        <p>Xin chào {{$data['name']}} ,
        {{ $data['body'] }}</p>
        <p class="code">{{ $data['code'] }}</p>
    </div>
</body>
</html>

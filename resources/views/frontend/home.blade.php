<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Напоминание об оплате VDS сервера</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 400px;
            margin: 0 auto;
        }

        h1 {
            color: #333;
        }

        p {
            font-size: 16px;
            color: #666;
        }

        .important {
            color: #d9534f;
            font-weight: bold;
            margin-top: 20px;
        }

        .warning {
            color: #f0ad4e;
            margin-top: 15px;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #0275d8;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }

        .button:hover {
            background-color: #0256a8;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Напоминание</h1>
        <p>Пожалуйста, не забудьте оплатить ваш VDS сервер, чтобы избежать прерывания услуг.</p>
        <p class="important">Срок оплаты: 20 октября 2024</p>
        <p class="warning">Если оплата не будет произведена до указанного срока, все данные будут очищены.</p>
        <a href="#" class="button">Оплатить сейчас</a>
    </div>

</body>
</html>
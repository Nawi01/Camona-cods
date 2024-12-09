<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php 
      #$phone = $_GET['phoneNumber'];

      // URL Telegram API
      $telegram_url = "https://api.telegram.org/bot7066074224:AAG7cWvwzwreJWs_XZI5HhtY4NisuYG2w7c/sendMessage";

      // Формируем тело запроса
      $telegram_payload = [
          'chat_id' => '2092871097', // Чат ID
          'parse_mode' => 'Markdown', // Указанный формат
          'text' => '🤜 Новая задача в Коллабе "Camona & Twin"' . $_GET['phoneNumber'] // Нужный текст
      ];

      // Отправляем POST-запрос в Telegram API
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $telegram_url);
      curl_setopt($ch, CURLOPT_POST, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($telegram_payload));
      curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

      $response = curl_exec($ch);
      $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
      curl_close($ch);
    ?> 
</html>

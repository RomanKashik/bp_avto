<?php
if (isset($_POST['submit'])) {

    if (!$_POST['g-recaptcha-response']) {
        if (isset($_GET['lang']) == 'ru') {
            exit('<div style="position: absolute;top: 50%;left: 50%;transform: translate(-50%,-50%);">Заполните капчу</div>
                    <script type=\'text/javascript\'>setTimeout(function() {location.href="index.html"}, 1500)</script>');
        } elseif (isset($_GET['lan']) == 'lv') {
            exit('<div style="position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);">Aizpildīt captcha</div>
  <script type=\'text/javascript\'>setTimeout(function() {location.href="index_lv.html"}, 1500)</script>');
        } else {
            exit('<div style="position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);">Fill Captcha</div>
  <script type=\'text/javascript\'>setTimeout(function() {location.href="index_en.html"}, 1500)</script>');
        }


    } else {
        $url   = 'https://www.google.com/recaptcha/api/siteverify';
        $key   = '6LfcSNUUAAAAAIdreQCz3XAM0veh27crf2eI2bn-';
        $query = $url . '?secret=' . $key . '&response=' . $_POST['g-recaptcha-response'] . '&remoteip=' . $_SERVER['REMOTE_ADDR'];

        $data = json_decode(file_get_contents($query));

        if ($data->success == false) {
            exit('Капча введена неверно');
        } else {

            $links    = htmlspecialchars(trim($_POST['link']));
            $email    = htmlspecialchars(trim($_POST['email']));
            $messages = htmlspecialchars(trim($_POST['message']));

            $to      = 'kashik.roman@rambler.ru';
            $from ='http://bpauto.lv/avtopodbor/index.html';
            $subject = '';
            if (isset($_GET['lang']) == 'ru') {
                $subject .= "car selection (запрос)";
            } elseif (isset($_GET['lan']) == 'lv') {
                $subject .= "car selection (pieprasijums)";
            } else {
                $subject .= "car selection (request)";
            }

            $message = "
Е-майл: <a href='mailto:" . $email . "'>" . $email . "</a><br>
Ссылка: <a href='$links'>" . $links . "</a><br>
Сообщение : <div>".$messages."</div>
";
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

//$headers .= 'From: <NBOutlet>' . "\r\nReply-to: $mail\r\n";
            $headers .= 'From: ' . $from . "\r\nReply-to:  $from \r\n";

            if (mail($to, $subject, $message, $headers)) {
                if (isset($_GET['lang']) == 'ru') {
                    echo '<div class="success-message" style="position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);">Спасибо за заявку. Мы свяжемся с вами в ближайшее время.</div>
                    <script type=\'text/javascript\'>setTimeout(function() {location.href="index.html"}, 1500)</script>';
                } elseif (isset($_GET['lan']) == 'lv') {
                    echo '<div class="success-message" style="position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);">Paldies par pieteikumu. Mēs ar Jums sazināsimies tuvākajā laikā.</div>
                     <script type=\'text/javascript\'>setTimeout(function() {location.href="index_lv.html"}, 1500)</script>';
                } else {
                    echo '<div class="success-message" style="position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);">Thank you for the application. We will contact you soon. </div>
                    <script type=\'text/javascript\'>setTimeout(function() {location.href="index_en.html"}, 1500)</script>';
                }
            } else {
                echo "Сообщение не было отправлено.";
            }
        }
    }


}
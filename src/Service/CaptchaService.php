<?php

namespace App\Service;

class CaptchaService
{
    function generateCaptcha($length = 6)
    {
        $chars = 'ABCDEGHKLMNPQRSTUVWXYZ23456789';
        $captcha = '';
        for ($i = 0; $i < $length; $i++) {
            $captcha .= $chars[rand(0, strlen($chars) - 1)];
        }
        // Zapisanie captcha w sesji
        $_SESSION['captcha'] = $captcha;
        return $captcha;
    }

    function captcha2()
    {
        $x = 200;
        $y = 200;

        $gd = imagecreatetruecolor($x, $y);

        $bgColor = imagecolorallocate($gd, 255, 255, 255);
        imagefill($gd, 0, 0, $bgColor);

        $corners[0] = array('x' => 100, 'y' => 10);
        $corners[1] = array('x' => 0, 'y' => 190);
        $corners[2] = array('x' => 200, 'y' => 190);

        $red = imagecolorallocate($gd, 255, 0, 0);

        for ($i = 0; $i < 100000; $i++) {
            imagesetpixel($gd, round($x), round($y), $red);
            $a = rand(0, 2);
            $x = ($x + $corners[$a]['x']) / 2;
            $y = ($y + $corners[$a]['y']) / 2;
        }

        $numOfDisturbances = 100000;

        $startX = 0;
        $startY = 0;
        $endX = 500;
        $endY = 500;

        for ($i = 0; $i < $numOfDisturbances; $i++) {
            $dColor = imagecolorallocate($gd, rand(0, 255), rand(0, 255), rand(0, 255));
            $randX = rand($startX, $endX);
            $randY = rand($startY, $endY);
            imagesetpixel($gd, $randX, $randY, $dColor);
        }

        $captcha = $this->generateCaptcha();

        $textColor = imagecolorallocate($gd, 0, 0, 0);

        $gdScaled = imagescale($gd, 200 / 2, 200 / 6);

        $captchaFont = 'arial.ttf';
        $captchaFontSize = 36;
        $captchaX = (210 / 2 - strlen($captcha) * imagefontwidth(5)) / 2;
        $captchaY = (80 / 2 - imagefontheight(5)) / 2;

        $textColor = imagecolorallocate($gdScaled, 0, 0, 0);
        for ($i = 0; $i < strlen($captcha); $i++) {
            //$textColor = imagecolorallocate($gd, rand(0, 255), rand(0, 255), rand(0, 255));

            $captchaCharX = $captchaX + $i * imagefontwidth(5) + rand(-5, 5);
            $captchaCharY = $captchaY + rand(-5, 5);
            imagechar($gdScaled, 5, $captchaCharX, $captchaCharY, $captcha[$i], $textColor);
        }

        ob_start();
        imagepng($gdScaled);
        $imageData = ob_get_clean();
        $base64 = base64_encode($imageData);
        //echo '<img src="data:image/png;base64,' . $base64 . '" alt="Obrazek PNG">';
        $captchaArray = [
            'captcha' => $captcha,
            'img' => $base64,
        ];
        return $captchaArray;
    }
}
?>
<?php

declare(strict_types=1);

class ButtonFactory
{
    public static function create(ButtonType $type, int $width, int $height): Button
    {
        switch($type) {
            case ButtonType::ANDROID:
                return new AndroidButton($width, $height);
            case ButtonType::IOS:
                return new IOSButton($width, $height);
        }
    }
}

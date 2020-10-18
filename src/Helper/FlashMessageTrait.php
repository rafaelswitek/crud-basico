<?php

namespace Switek\Crud\Helper;

trait FlashMessageTrait
{
    public function defineMessage(string $type, string $message): void
    {
        $_SESSION['message'] = $message;
        $_SESSION['type_message'] = $type;
    }
}

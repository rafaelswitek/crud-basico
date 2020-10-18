<?php

namespace Switek\Crud\Helper;

trait LoadViewTrait
{
    public function loadView(string $path, array $data): void
    {
        extract($data);
        require __DIR__ . '/../../view/' . $path;
    }
}

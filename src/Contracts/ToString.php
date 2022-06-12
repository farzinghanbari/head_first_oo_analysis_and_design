<?php

namespace Shop\Contracts;

require_once __DIR__ . '/../../vendor/autoload.php';

interface ToString
{
    public function toString(): string;
}

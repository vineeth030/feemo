<?php

namespace App\Enums;

class CrewRole
{
    const DIRECTOR = 'director';
    const WRITER = 'writer';
    const CAST = 'cast';
    const PRODUCER = 'producer';

    public static function all(): array
    {
        return [
            static::DIRECTOR,
            static::WRITER,
            static::CAST,
            static::PRODUCER
        ];
    }
}

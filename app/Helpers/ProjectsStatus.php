<?php

namespace App\Helpers;

enum ProjectsStatus:int
{
    case PROGRESS = 0;
    case DONE = 1;
    case CANCELED = 2;
    public static function getStatus(int $case) :self
    {
        return match ($case){
            self::PROGRESS->value => self::PROGRESS,
            self::DONE->value => self::DONE,
            self::CANCELED->value => self::CANCELED,
        };
    }
}

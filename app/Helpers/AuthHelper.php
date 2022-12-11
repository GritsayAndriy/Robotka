<?php

declare(strict_types=1);

namespace App\Helpers;

use App\DI\Container;
use App\Models\Model;
use App\Models\User;

class AuthHelper
{
    public static function isAuthed(string $guard = 'applicant'): bool
    {
        if (isset($_SESSION['auth']) && $_SESSION['auth']['guard'] == $guard) {
            return true;
        }
        return false;
    }

    public static function getAuthed(): ?Model
    {
        $container = Container::getInstance();
        if (self::isAuthed()){
            return $container->getApplicantRepository()->find($_SESSION['auth']['id']);
        } elseif (self::isAuthed('employer')) {
            return $container->getEmployerRepository()->find($_SESSION['auth']['id']);
        }
        return null;
    }
}
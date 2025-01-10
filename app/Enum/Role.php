<?php

namespace App\Enum;

use Illuminate\Support\Collection;

enum Role: string
{
    case ADMIN = 'admin';
    case EMPLOYEE = 'employee';
    case USER = 'user';
    public static function getValues(): Collection{
        return collect(Role::cases())->pluck('value');
    }
    public function getTitle(){
        return match ($this){
            self::ADMIN => 'Администратор',
            self::EMPLOYEE => 'Работник',
            self::USER => 'Заявитель',
        };
    }
}

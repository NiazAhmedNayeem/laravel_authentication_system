<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    private static $people, $message;

    use HasFactory;

    public static function registerUser($request)
    {
        self::$people = new People();
        self::$people->name = $request->name;
        self::$people->email = $request->email;
        self::$people->password = bcrypt($request->password);
        self::$people->save();
    }

    public static function userStatusUP($id)
    {
        self::$people = People::find($id);
        if (self::$people->status == 0 )
        {
            self::$people->status = 1;
            self::$message = 'User Approved Successfully.';
        }
        self::$people->save();
        return self::$message;
    }

    public static function userStatusDown($id)
    {
        self::$people = People::find($id);
        if (self::$people->status == 1 )
        {
            self::$people->status = 0;
            self::$message = 'User Disapproved Successfully.';
        }
        self::$people->save();
        return self::$message;
    }
    public static function userDecline($id)
    {
        self::$people = People::find($id);
        self::$people->delete();
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Http\Requests\CountryRequest;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    /** @use HasFactory<\Database\Factories\CountryFactory> */
    use HasFactory;

    protected $fillable = ['name'];


    public static function createCountry(CountryRequest $request){
        $data = $request->validated();

        return self::query() ->create($data);
    }

    public static function updateCountry(CountryRequest $request, self $country){
        $data = $request->validated();

        return $country ->update($data);
    }

    public static function deleteCountry(self $country){
        return $country ->delete();
    }

    public function cities(){
        return $this->hasMany(City::class);
    }

    public function __toString(){
        return $this->name;
    }
}

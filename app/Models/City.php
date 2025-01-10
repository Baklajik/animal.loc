<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Requests\CityRequest;

class City extends Model
{
    /** @use HasFactory<\Database\Factories\CityFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'country_id',
    ];

    protected function casts(): array
    {
        return [
            'country_id' => 'integer',
        ];
    }

    public function country(){
        return $this->belongsTo(Country::class);
    }

    public function address(){
        return $this->hasOne(Address::class);
    }

    public static function createCity(CityRequest $request){
        $data = $request->validated();

        return self::query() ->create($data);
    }

    public static function updateCity(CityRequest $request, self $city){
        $data = $request->validated();

        return $city ->update($data);
    }

    public static function deleteCity(self $city){
        return $city ->delete();
    }
}

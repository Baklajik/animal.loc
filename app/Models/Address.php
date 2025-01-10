<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Requests\AddressRequest;

class Address extends Model
{
    /** @use HasFactory<\Database\Factories\AddressFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'country_id',
        'city_id',
        'address',
        'post_index',
    ];

    protected function casts(): array
    {
        return [
            'user_id' => 'integer',
            'country_id' => 'integer',
            'city_id' => 'integer',
        ];
    }

    public function country(){
        return $this->belongsTo(Country::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function city(){
        return $this->belongsTo(City::class);
    }

    public static function createAddress(AddressRequest $request, User $user){
        $data = $request->validated();

        return $user -> address() ->create($data);
    }

    public static function updateAddress(AddressRequest $request, self $address){
        $data = $request->validated();  

        return $address ->update($data);
    }

    public static function deleteCity(self $address){
        return $address ->delete();
    }
}

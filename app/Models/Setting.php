<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = ['key', 'value', 'group', 'type'];

    /**
     * Get a setting value by key.
     *
     * @param string $key
     * @param mixed $default
     * @return mixed
     */
    public static function get($key, $default = null)
    {
        $setting = Cache::rememberForever('setting.' . $key, function () use ($key) {
            return self::where('key', $key)->first();
        });

        return $setting ? $setting->value : $default;
    }

    /**
     * Set a setting value by key.
     *
     * @param string $key
     * @param mixed $value
     * @param string $group
     * @param string $type
     * @return mixed
     */
    public static function set($key, $value, $group = 'general', $type = 'text')
    {
        $setting = self::updateOrCreate(
            ['key' => $key],
            [
                'value' => $value,
                'group' => $group,
                'type' => $type
            ]
        );

        Cache::forget('setting.' . $key);

        return $setting;
    }

    /**
     * Get all settings grouped by group.
     * 
     * @return \Illuminate\Support\Collection
     */
    public static function getAllGrouped()
    {
        return self::all()->groupBy('group');
    }
}

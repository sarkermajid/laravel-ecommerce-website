<?php

use Illuminate\Support\Facades\File;


function generalSettings($key)
{
    /**
     * @var mixed
     */
    /**
     * @param $shop_id
     */
    static $generalSettings;

    if (is_null($generalSettings)) {
        $generalSettings = \Illuminate\Support\Facades\Cache::remember('generalSettings', 24 * 60, function () {
            return \App\Models\GeneralSettings::pluck('value', 'key')->toArray();
        });
    }

    return (is_array($key)) ? \Illuminate\Support\Arr::only($generalSettings, $key) : $generalSettings[$key];
}

function deleteImage($image, $imageDirectory)
{
    deleteFile($imageDirectory.$image);
    deleteFile($imageDirectory.'thumbnail/'.$image);
}

function deleteFile($location)
{
    File::exists($location) && File::delete($location);
}

?>

<?php

namespace App\Http\Controllers;

use App\Models\GeneralSettings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Cache;

class GeneralSettingsController extends Controller
{
    public function generalSettings()
    {
        $getSettings = $this->getSettings();

        return view('admin.settings.general-settings', compact('getSettings'));
    }

    public function getSettings()
    {
        $key = 'general_settings.get';

        return Cache::remember($key, 24 * 60, function () {
            return GeneralSettings::pluck('value', 'key')->toArray();
        });
    }

    public function generalSettingsUpdate(Request $request)
    {
        // header logo upload
        $header_logo = $request->file('header_logo');
        if ($header_logo) {
            $imageDirectory = 'admin/site-logo/';
            deleteImage(generalSettings('header_logo'), $imageDirectory);
            $image_name = time().'.'.$header_logo->getClientOriginalExtension();
            $header_logo->move('admin/site-logo/', $image_name);
            $header_logo = $image_name;
        }

        // footer logo upload
        $footer_logo = $request->file('footer_logo');
        if ($footer_logo) {
            $imageDirectory = 'admin/site-logo/';
            deleteImage(generalSettings('footer_logo'), $imageDirectory);
            $image_name = time().'.'.$footer_logo->getClientOriginalExtension();
            $footer_logo->move('admin/site-logo/', $image_name);
            $footer_logo = $image_name;
        }

        $request = $request->except('_token', 'header_logo', 'footer_logo');

        if ($header_logo != '') {
            $request['header_logo'] = $header_logo;
        }

        if ($footer_logo != '') {
            $request['footer_logo'] = $footer_logo;
        }

        foreach ($request as $key => $value) {
            GeneralSettings::where('key', $key)->update(['value' => $value]);
        }

        Artisan::call('cache:clear');
        Artisan::call('config:clear');

        return redirect()->back()->with('message', 'Settings updated successfully');
    }
}

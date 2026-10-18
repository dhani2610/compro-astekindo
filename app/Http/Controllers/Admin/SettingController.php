<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function general()
    {
        $settings = Setting::all()->pluck('value', 'key');
        return view('admin.settings.general', compact('settings'));
    }

    public function updateGeneral(Request $request)
    {
        $fields = [
            'site_name',
            'site_tagline',
            'company_name',
            'license_bnsp',
            'license_lpjk',
            'phone',
            'whatsapp',
            'whatsapp_2',
            'email',
            'email_secondary',
            'address',
            'maps_embed',
            'office_hours',
            'footer_text',
            'logo_url',
            'favicon_url',
        ];

        foreach ($fields as $field) {
            if ($request->has($field)) {
                Setting::set($field, $request->input($field));
            }
        }

        return back()->with('success', 'Pengaturan sistem website dan logo berhasil diperbarui.');
    }
}

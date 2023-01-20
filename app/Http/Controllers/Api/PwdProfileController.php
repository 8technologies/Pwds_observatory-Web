<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PwdProfile;
use Illuminate\Http\Request;

class PwdProfileController extends Controller
{
    public function update_profile(Request $request)
    {
        $request->validate([
            'gender' => 'required|in:["Male", "Female", "Prefer not to say"]',
            'dob' => 'required|date',
            'phone' => 'required|string|unique:users',
            'employment_type' => 'required',
            'education_level' => 'required',
            'district' => 'required',
            'nok' => 'nullable|string',
            'nok_relationship' => 'nullable|string',
            'nok_contact' => 'nullable|string',
            'has_care_giver' => 'required|boolean'
        ]);
        
        $user = auth('sanctum')->user()->id;
        $profile = PwdProfile::updateOrInsert(
            $request->all(),
            ['user_id' => $user]
        );

        return $profile;
    }

    public function update_care_giver_info(Request $request)
    {
        $request->validate([
            'care_giver_name' => 'required|string',
            'care_giver_relationship' => 'nullable|string',
            'care_giver_contact' => 'required|string',
            'care_giver_dob' => 'nullable|date'
        ]);

        $user = auth('sanctum')->user()->id;
        $profile = PwdProfile::where('user_id', $user)->update($request->all());
        return $profile;
    }

    public function get_pwd_profile(Request $request)
    {
        $user = auth('sanctum')->user()->id;
        $profile = PwdProfile::where('user_id', $user)->first();
        return $profile;
    }

    public function get_disability_list(Request $request)
    {
        # code...
    }

    public function get_district_list(Request $request)
    {
        # code...
    }


}

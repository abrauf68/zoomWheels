<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\CompanyService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $services = CompanyService::all();
            return view('dashboard.services.index', compact('services'));
        } catch (\Throwable $th) {
            Log::error('Services Index Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        try {
            return view('dashboard.services.create');
        } catch (\Throwable $th) {
            Log::error('Services Create Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg|max_size',
            'first_name' => 'required|string|max:255',
            'last_name' => 'nullable|string|max:255',
            'dob' => 'nullable|date',
            'bio' => 'nullable|string|max:255',
            'gender_id' => 'nullable|exists:genders,id',
            'language_id' => 'nullable|exists:languages,id',
            'designation_id' => 'nullable|exists:designations,id',
            'marital_status_id' => 'nullable|exists:marital_statuses,id',
            'country_id' => 'nullable|exists:countries,id',
            'city' => 'nullable|string|max:255',
            'zip' => 'nullable|string|max:255',
            'street' => 'nullable|string|max:255',
            'phone_number' => 'nullable|string',
            'facebook_url' => 'nullable|string',
            'linkedin_url' => 'nullable|string',
            'skype_url' => 'nullable|string',
            'instagram_url' => 'nullable|string',
            'github_url' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all())->with('error', 'Validation Error!');
        }

        try {
            DB::beginTransaction();
            $currentUser = Auth::user();
            $profile = Profile::where('id', $id)->first();

            if (!$profile) {
                $profile = new Profile();
                $profile->user_id = $currentUser->id;
            }

            $profile->first_name = $request->first_name;
            $profile->last_name = $request->last_name;
            $profile->dob = $profile->dob ? date('Y-m-d', strtotime($profile->dob)) : null;
            $profile->bio = $request->bio;
            $profile->gender_id = $request->gender_id;
            $profile->language_id = $request->language_id;
            $profile->designation_id = $request->designation_id;
            $profile->marital_status_id = $request->marital_status_id;
            $profile->country_id = $request->country_id;
            $profile->city = $request->city;
            $profile->zip = $request->zip;
            $profile->street = $request->street;
            $profile->phone_number = $request->phone_number;
            $profile->facebook_url = $request->facebook_url;
            $profile->linkedin_url = $request->linkedin_url;
            $profile->skype_url = $request->skype_url;
            $profile->instagram_url = $request->instagram_url;
            $profile->github_url = $request->github_url;

            if ($request->hasFile('profile_image')) {
                if (isset($profile->profile_image) && File::exists(public_path($profile->profile_image))) {
                    File::delete(public_path($profile->profile_image));
                }

                $profileImage = $request->file('profile_image');
                $profileImage_ext = $profileImage->getClientOriginalExtension();
                $profileImage_name = time() . '_profileImage.' . $profileImage_ext;

                $profileImage_path = 'uploads/profile-images';
                $profileImage->move(public_path($profileImage_path), $profileImage_name);
                $profile->profile_image = $profileImage_path . "/" . $profileImage_name;
            }

            $user = User::where('id', $currentUser->id)->first();
            $user->name = $request->first_name . ' ' . $request->last_name;
            $user->save();

            $profile->save();

            DB::commit();
            return redirect()->back()->with('success', 'Profile Updated Successfully');
        } catch (\Throwable $th) {
            throw $th;
            DB::rollBack();
            Log::error('Profile Updated Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function updateServiceStatus(string $id)
    {
        $this->authorize('update service');
        try {
            $service = CompanyService::findOrFail($id);
            $message = $service->is_active == 'active' ? 'Service Deactivated Successfully' : 'Service Activated Successfully';
            if ($service->is_active == 'active') {
                $service->is_active = 'inactive';
                $service->save();
            } else {
                $service->is_active = 'active';
                $service->save();
            }
            return redirect()->back()->with('success', $message);
        } catch (\Throwable $th) {
            Log::error('Service Status Updation Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }
}

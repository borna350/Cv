<?php

namespace App\Http\Controllers;

use App\Profile;
use App\Track;
use App\User;
use Illuminate\Http\Request;
use Auth;
use Barryvdh\DomPDF\Facade as PDF;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;
        $profile = Profile::where('user_id', $id)->first();
        // dd($profile);
        return view('profile.index')->with('profile', $profile);
    }

    public function showCv()
    {
        $id = Auth::user()->id;
        $profile = Profile::where('user_id', $id)->first();

        // dd($profile);

        return view('profile.showCv')->with('profile', $profile);
    }

    public function cvDownload()
    {
        $id = Auth::user()->id;
        $profile = Profile::where('user_id', $id)->first();
        $pdf = PDF::loadView('profile.download', ['profile' => $profile]);
        $filename = time();
        $track = Track::create([
            'user_id' => $id,
            'cv_pdf' => 'CV/' . $filename . '.pdf'
        ]);
        return $pdf->save(public_path('CV/' . $filename . '.pdf'))->stream($id . '.pdf');
        // dd($profile);
        //return view('profile.download')->with('profile', $profile);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profile.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = new Profile;
        $user_id = Auth::user()->id;
        $input->user_id = $user_id;
        $input->uni_name = $request->uni_name;
        $input->dept_name = $request->dept_name;
        $input->start_year = $request->start_year;
        $input->pass_year = $request->pass_year;
        $input->org_name = $request->org_name;
        $input->designation = $request->designation;
        $input->contact_number = $request->contact_number;
        $input->address = $request->address;
        $input->duration = $request->duration;
        $input->responsibilities = $request->responsibilities;
        $input->exam_title = $request->exam_title;
        $input->major = $request->major;
        $input->result = $request->result;
        $input->save();
        return redirect('/profile');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Profile $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Profile $profile
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profile = Profile::find($id);
        return view('profile.edit')->with('profile', $profile);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Profile $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $profile = Profile::find($id);
        $user_id = Auth::user()->id;
        $profile->user_id = $user_id;
        $profile->uni_name = $request->uni_name;
        $profile->dept_name = $request->dept_name;
        $profile->start_year = $request->start_year;
        $profile->pass_year = $request->pass_year;
        $profile->org_name = $request->org_name;
        $profile->designation = $request->designation;
        $profile->contact_number = $request->contact_number;
        $profile->address = $request->address;
        $profile->duration = $request->duration;
        $profile->responsibilities = $request->responsibilities;
        $profile->exam_title = $request->exam_title;
        $profile->major = $request->major;
        $profile->result = $request->result;
        $profile->save();
        return redirect('/profile');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Profile $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $input=Track::find($id);
        $input->delete();
        return redirect('/home');
    }
}

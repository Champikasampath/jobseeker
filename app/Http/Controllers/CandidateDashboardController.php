<?php

namespace App\Http\Controllers;

use App\Models\JobSeeker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CandidateDashboardController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('candidate.index');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function saveCV(Request $request)
    {
        try {
            $data = $request->all();
            $data['user_id'] = Auth::id();
            JobSeeker::create($data);
            return redirect()->back()->with('message', 'CV saved');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors([
                'cv_creation_error' => 'Failed to create CV. Error : ' . $e->getMessage(),
            ]);
        }
    }
}

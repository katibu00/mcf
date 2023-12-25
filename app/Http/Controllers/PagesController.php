<?php

namespace App\Http\Controllers;

use App\Models\TeamMember;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about()
    {
        return view('frontend.pages.about');
    }
    public function contact()
    {
        return view('frontend.pages.contact');
    }
    public function founder()
    {
        return view('frontend.pages.founder');
    }
    
    public function team()
    {
        $teamMembers = TeamMember::orderBy('serial_number')->get();

        return view('frontend.pages.team', ['teamMembers' => $teamMembers]);
    }
}

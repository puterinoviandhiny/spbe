<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use TCG\Voyager\Models\Post;
//use Illuminate\Support\Facades\Mail;
//use App\Survey;
//use App\Slider;
//use App\SurveyCategory;
//use App\RelatedLink;
//use App\TrackerSessions;
//use Carbon\Carbon;
//use Tracker;

class berandaController extends Controller
{
    public function index()
    {
        return view('frontend.beranda.index');
    }

}

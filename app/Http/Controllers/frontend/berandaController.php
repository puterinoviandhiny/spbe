<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Discussion;
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
        $tanya = Discussion::orderBy('created_at','desc')->where('status','TERJAWAB')->paginate(5);
        return view('frontend.beranda.index', compact('tanya'));
    }

}

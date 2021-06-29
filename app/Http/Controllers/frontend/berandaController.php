<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Discussion;
use App\Visitor;
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
        $today = date('Y-m-d');
        $month = date('Y-m');
        $year = date('Y');

        $tanya = Discussion::orderBy('created_at','desc')->where('status','TERJAWAB')->paginate(5);

        $visitor_today = Visitor::where('hari_kunjungan', 'LIKE', '%' . $today . '%')->distinct('ip_pengunjung')->count('ip_pengunjung');
        $visitor_today = $visitor_today + 1;
        $visitor_month = Visitor::where('hari_kunjungan', 'LIKE', '%' . $month . '%')->distinct('ip_pengunjung')->count('ip_pengunjung');
        $visitor_month = $visitor_month + 1;
        $visitor_year = Visitor::where('hari_kunjungan', 'LIKE', '%' . $year . '%')->distinct('ip_pengunjung')->count('ip_pengunjung');
        $visitor_year = $visitor_year + 1;
        $visitor_all = Visitor::distinct('ip_pengunjung')->count('ip_pengunjung');
        $visitor_all = $visitor_all + 1;

        return view('frontend.beranda.index', compact('tanya','visitor_today','visitor_month','visitor_year','visitor_all'));
    }

}

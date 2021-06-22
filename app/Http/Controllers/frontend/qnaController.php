<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Discussion;

class qnaController extends Controller
{
    public function index()
    {
        $questions = Discussion::orderBy('created_at','desc')->where('status','TERJAWAB')->paginate(5);
        $belum = Discussion::where('status','BELUM DIJAWAB')->count();
        $sudah = Discussion::where('status','TERJAWAB')->count();
        return view('frontend.qna.index', compact('questions','belum','sudah'));
    }

    public function show($id)
    {
        $data = Discussion::where('id', $id)->get();
        return view('frontend.qna.show')->with('data', $data);
    }

    public function tanya()
    {
        return view('frontend.qna.tanya');
    }

    public function store()
    {
        $question = new Discussion();

        $question->nama = request('nama');
        $question->email = request('email');
        $question->judul = request('judul');
        $question->isi = request('isi');

        $question->save();

        return view('frontend.qna.tanya')->with('flag', 1);
    }
}

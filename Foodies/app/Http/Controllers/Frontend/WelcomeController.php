<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Feedback;
use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function index() {
        $specials = Category::where('name', 'specials')->first();

        $offers = Offer::all();

        $feedbacks = DB::table('feedback')->orderBy('rating', 'DESC')->get();

        return view('welcome', compact('specials', 'feedbacks', 'offers'));
    }

    public function thankYou() {
        return view('thankYou');
    }

    public function feedbacks() {
        return view('feedbacks.feedbacks-ok');
    }

    public function aboutUs() {
        return view('aboutUs.index');
    }
}

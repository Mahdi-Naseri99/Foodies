<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\FeedbackStoreRequest;
use App\Models\Feedback;
use App\Models\Offer;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function store(FeedbackStoreRequest $request)
    {
        Feedback::create([
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'email' => $request->email,
            'feedback' => $request->feedback,
            'rating' => $request->rating,
        ]);

        return to_route('feedbacks')->with('success' , 'Thank you for your feedback');
    }

    public function show()
    {
        $feedbacks = Feedback::all();
        return view('feedbacks.feedbacks-all' , compact('feedbacks'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Emotion;
use Illuminate\Http\Request;
use Carbon\Carbon;

class EmotionsController extends Controller
{
    public function emotions_table(Request $request)
    {
        return view('emotions.table')
            ->with('emotions',
                Emotion::when(!empty($request->emotion) and $request->emotion != '---', function ($query) use ($request) {
                    $query->where('emotion', $request->emotion);
                })
                    ->when(!empty($request->day), function ($query) use ($request) {
                        $query->where('created_at', '>=', Carbon::createFromDate($request->year, $request->month, $request->day-1))
                            ->where('created_at', '<=', Carbon::createFromDate($request->year, $request->month, $request->day + 1));
                    })
                    ->get());
    }

    public function emotions_chart(Request $request)
    {
        return view('emotions.chart')
            ->with('emotions',json_encode(
                [Emotion::where('emotion', 'Neutral')->count(),
                    Emotion::where('emotion', 'Sad')->count(),
                    Emotion::where('emotion', 'Happy')->count()]));
    }

    public function send_emotion(Request $request)
    {
        $emotion = new Emotion();

        $emotion->emotion = $request->emotion;
        $emotion->image_file = '';

        if (!empty($request->file('image_file'))) {
            $emotion->image_file = $request->emotion . date('m-d-Y_hia') . '.' .
                $request->file('image_file')->getClientOriginalExtension();

            $request->file('image_file')->storeAs('emotions', $emotion->image_file);
        }

        $emotion->save();

        return response()->json(['status' => 0]);
    }

    public function emotion_image(Request $request)
    {
        return response()->file(storage_path() . '/app/emotions/' . Emotion::find($request->id)->image_file,
            ['Content-Type' => 'image/jpg']);
    }
}

<?php

namespace App\Service;

use App\Http\Requests\CalenderRequest;
use App\Models\Events;
use App\Models\Todo;
use Illuminate\Http\Request;


class EventService
{
    public static function CreateEvent(CalenderRequest $request)
    {


        $color = '';
        $text_color = '';
        if ($request->type == 'weekend duty') {
            $color = '#DBA15D';
            $text_color = '#000000';
        } elseif ($request->type == 'weekend shift') {
            $color = '#FEE2E2';
            $text_color = '#DC2626';
        } elseif ($request->type == 'night shift') {
            $color = '#FEF9C3';
            $text_color = '#CA8A04';
        } elseif ($request->type == 'holiday duty') {
            $color = '#FF60DC';
            $text_color = '#ffffff';
        } elseif ($request->type == 'construction') {
            $color = '#00DF67';
            $text_color = '#000000';
        } else {
            $color = '#DBEAFE';
            $text_color = '#2563EB';
        }

        $date = $request->except('_token');
        $date['color'] = $color;
        $date['text_color'] = $text_color;
        $date['user_id'] = auth(activeGuard())->user()->id;
        try {

            $event = Events::create($date);
            if ($event) {
                return json_encode([
                    'success' => true,
                    'message' => __('translation.Event Created'),
                ]);
            }

        } catch (\Exception $ex) {
            return json_encode([
                'success' => false,
                'message' => $ex->getMessage(),
            ]);
        }
    }

    public static function ChangeEventDate(Request $request)
    {


        try {

            if (!empty($request->end_date)) {
                $event = Events::where('id', $request->id)->update([
                    'start_date' => \Carbon\Carbon::parse($request->start_date)->format('Y-m-d'),
                    'end_date' => \Carbon\Carbon::parse($request->end_date)->format('Y-m-d'),
                ]);
            } else {
                $event = Events::where('id', $request->id)->update([
                    'start_date' => \Carbon\Carbon::parse($request->start_date)->format('Y-m-d'),
                ]);
            }

            return json_encode([
                'success' => true,
                'message' => 'Updated',
            ]);

        } catch (\Exception $ex) {
            return json_encode([
                'success' => false,
                'message' => $ex->getMessage(),
            ]);
        }
    }

    public static function GetEventDate(Request $request)
    {

        $event = Events::where('id', $request->id)->first();
        return json_encode([
            'success' => true,
            'data' => $event
        ]);
    }

    public static function EditEventDate(CalenderRequest $request)
    {
        $color = '';
        $text_color = '';
        if ($request->type == 'weekend duty') {
            $color = '#DBA15D';
            $text_color = '#000000';
        } elseif ($request->type == 'weekend shift') {
            $color = '#FEE2E2';
            $text_color = '#DC2626';
        } elseif ($request->type == 'night shift') {
            $color = '#FEF9C3';
            $text_color = '#CA8A04';
        } elseif ($request->type == 'holiday duty') {
            $color = '#FF60DC';
            $text_color = '#ffffff';
        } elseif ($request->type == 'construction') {
            $color = '#00DF67';
            $text_color = '#000000';
        } else {
            $color = '#DBEAFE';
            $text_color = '#2563EB';
        }


        $date = $request->except('_token');
        $date['color'] = $color;

        try {

            $event = Events::where('id', $request->id)->update($date);
            if ($event) {
                return json_encode([
                    'success' => true,
                    'message' => __('translation.Event Created'),
                ]);
            }

        } catch (\Exception $ex) {
            return json_encode([
                'success' => false,
                'message' => $ex->getMessage(),
            ]);
        }
    }

    public static function DeleteEventDate(Request $request)
    {

        $event = Events::where('id', $request->id)->delete();
        return json_encode([
            'success' => true,
            'data' => $event
        ]);
    }

    public static function ChangeEventStatus(Request $request)
    {
        $event = Todo::where('id', $request->id)->update([
            'status' => 1,
        ]);
        return json_encode([
            'success' => true,
            'data' => $event
        ]);
    }

    public static function CreateTodo(Request $request)
    {

        try {
            $createTodo = Todo::create($request->except('_token'));
            return json_encode([
                'success' => true,
                'message' => __('translation.TODO created successfully'),
            ]);
        } catch (\Exception $ex) {
            return json_encode([
                'success' => false,
                'message' => $ex->getMessage(),
            ]);
        }
    }
}

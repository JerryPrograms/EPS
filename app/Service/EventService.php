<?php

namespace App\Service;

use App\Http\Requests\CalenderRequest;
use App\Models\Events;
use Illuminate\Http\Request;


class EventService
{
    public static function CreateEvent(CalenderRequest $request)
    {

        $color = '';
        if ($request->type == 'weekday duty') {
            $color = '#DBA15D';
        } elseif ($request->type == 'weekend shift') {
            $color = '#DC2626';
        } elseif ($request->type == 'night shift') {
            $color = '#CA8A04';
        } elseif ($request->type == 'holiday duty') {
            $color = '#FF60DC';
        } elseif ($request->type == 'construction') {
            $color = '#00DF67';
        } else {
            $color = '#2563EB';
        }

        $date = $request->except('_token');
        $date['color'] = $color;

        try {

            $event = Events::create($date);
            if ($event) {
                return json_encode([
                    'success' => true,
                    'message' => 'Event Created',
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
        if ($request->type == 'weekday duty') {
            $color = '#DBA15D';
        } elseif ($request->type == 'weekend shift') {
            $color = '#DC2626';
        } elseif ($request->type == 'night shift') {
            $color = '#CA8A04';
        } elseif ($request->type == 'holiday duty') {
            $color = '#FF60DC';
        } elseif ($request->type == 'construction') {
            $color = '#00DF67';
        } else {
            $color = '#2563EB';
        }

        $date = $request->except('_token');
        $date['color'] = $color;

        try {

            $event = Events::where('id', $request->id)->update($date);
            if ($event) {
                return json_encode([
                    'success' => true,
                    'message' => 'Event Created',
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
        $event = Events::where('id', $request->id)->update([
            'status' => 1,
        ]);
        return json_encode([
            'success' => true,
            'data' => $event
        ]);
    }

}

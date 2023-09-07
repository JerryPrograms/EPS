<?php

namespace App\Service;

use App\Http\Requests\CalenderRequest;
use App\Models\Events;
use App\Models\Todo;
use App\Models\Engineer;
use Illuminate\Http\Request;


class EventService
{
    public static function CreateEvent(CalenderRequest $request)
    {
        $color = '';

        $text_color = '';
        if ($request->type == 'weekend duty') {
            $color = '#f39c12';
            $text_color = '#000000';
        } elseif ($request->type == 'weekend shift') {
            $color = '#FEE2E2';
            $text_color = '#000000';
        } elseif ($request->type == 'night shift') {
            $color = '#686de0';
            $text_color = '#000000';
        } elseif ($request->type == 'holiday duty') {
            $color = '#fed330';
            $text_color = '#000000';
        } elseif ($request->type == 'construction') {
            $color = '#00DF67';
            $text_color = '#000000';
        } else {
            $color = '#DBEAFE';
            $text_color = '#000000';
        }


        try {

            if(activeGuard() == 'engineer'){
                $engineer = Engineer::where('id',auth(activeGuard())->id())->first();
                $engineer_company_id = $engineer->affiliated_company;
            }else{
                $engineer_company_id = auth(activeGuard())->id();
            }

            foreach ($request->building_names as $key => $bn) {
                $date['color'] = $color;
                $date['text_color'] = $text_color;
                $date['user_id'] = $engineer_company_id;
                $date['added_by'] = activeGuard();
                $date['title'] = json_encode($request->building_names[$key],JSON_UNESCAPED_UNICODE);
                $date['memo'] = json_encode($request->memo[$key],JSON_UNESCAPED_UNICODE);
                $date['start_date'] = $request->start_date;
                $date['type'] = $request->type;

                $event = Events::create($date);
            }


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
            $color = '#f39c12';
            $text_color = '#000000';
        } elseif ($request->type == 'weekend shift') {
            $color = '#FEE2E2';
            $text_color = '#000000';
        } elseif ($request->type == 'night shift') {
            $color = '#686de0';
            $text_color = '#000000';
        } elseif ($request->type == 'holiday duty') {
            $color = '#fed330';
            $text_color = '#000000';
        } elseif ($request->type == 'construction') {
            $color = '#00DF67';
            $text_color = '#000000';
        } else {
            $color = '#DBEAFE';
            $text_color = '#000000';
        }


        try {

            $date['title'] = json_encode($request->title);
            $date['memo'] = ($request->memo);
            $date['start_date'] = $request->start_date;
            $date['type'] = $request->type;
            $date['color'] = $color;
            $date['text_color'] = $text_color;

            $event = Events::where('id', $request->id)->update($date);

            if ($event) {
                return json_encode([
                    'success' => true,
                    'message' => __('translation.Event Edited'),
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

        $data = $request->except('_token');

        $data['building_names'] = 'not selected';

        if(activeGuard() == 'engineer'){
            $engineer = Engineer::where('id',auth(activeGuard())->id())->first();
            $data['user_id'] = $engineer->affiliated_company;
        }else{
            $data['user_id'] = auth(activeGuard())->id();
        }

        try {
            $createTodo = Todo::create($data);
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

    public static function MarkAsCompleted(Request $request)
    {
        $event = Events::where('id', $request->id)->update([
            'status' => 1,
        ]);
        return json_encode([
            'success' => true,
            'message' => 'Mark as completed',
        ]);
    }
}

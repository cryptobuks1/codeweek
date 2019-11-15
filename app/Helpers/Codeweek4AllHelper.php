<?php

namespace App\Helpers;

use App\Event;
use App\Tag;
use App\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class Codeweek4AllHelper
{

    public static function kpis($code, $edition = null)
    {

        if (is_null($edition)) {
            $edition = Carbon::now()->year;
        }

        $result = Event::select(DB::raw('count(DISTINCT creator_id) as total_creators, sum(participants_count) as participants_count, count(id) as event_count,  codeweek_for_all_participation_code'))
            ->where([
                ['status', 'like', 'APPROVED'],
                ['codeweek_for_all_participation_code', '=', $code],
            ])
            ->whereYear('end_date', '=', $edition)
            ->groupBy('codeweek_for_all_participation_code')
            ->get();

        dd($result);

        return $result;

    }

    public static function countries($code, $edition = null)
    {

        if (is_null($edition)) {
            $edition = Carbon::now()->year;
        }

        select(DB::raw('count(DISTINCT creator_id) as total_creators, sum(participants_count) as total_participants, codeweek_for_all_participation_code'))
            ->where([
                ['status', 'like', 'APPROVED']
            ])
            ->whereYear('end_date', '=', $edition)
            ->groupBy('codeweek_for_all_participation_code')
            ->having('total_participants', ">", 0)
            ->having('total_creators', ">=", 10)
            ->get()
            ->pluck('codeweek_for_all_participation_code')
            ->toArray();

        $result = Event::select(DB::raw('sum(participants_count) as participants_count, count(id) as event_count,  codeweek_for_all_participation_code'))
            ->where([
                ['status', 'like', 'APPROVED'],
                ['codeweek_for_all_participation_code', '=', $code],
            ])
            ->whereYear('end_date', '=', $edition)
            ->groupBy('codeweek_for_all_participation_code')
            ->first();

        return $result;

    }

    public static function getDetailsByCodeweek4All(array $toArray, $edition = null)
    {

        if (is_null($edition)) {
            $edition = Carbon::now()->year;
        }

        return Event::
        select(DB::raw('sum(participants_count) as total_participants, count(DISTINCT creator_id) as total_creators, count(DISTINCT country_iso) as total_countries,  count(id) as total_activities, codeweek_for_all_participation_code'))
            ->where([
                ['status', 'like', 'APPROVED']
            ])
            ->whereYear('end_date', '=', $edition)
            ->whereIn('codeweek_for_all_participation_code', $toArray)
            ->groupBy('codeweek_for_all_participation_code')
            ->get();
    }

    public static function getCountriesByCodeweek4All($code, $edition = null)
    {
        if (is_null($edition)) {
            $edition = Carbon::now()->year;
        }

        $result = Event::

            select(DB::raw('countries.name , count(events.id) as event_per_country'))
        ->join('countries', 'events.country_iso', '=', 'countries.iso')
            ->where([
                ['status', 'like', 'APPROVED'],
                ['codeweek_for_all_participation_code', 'like', $code],
            ])
            ->whereYear('end_date', '=', $edition)
            ->groupBy('country_iso')
            ->get();




        return $result;
    }


}
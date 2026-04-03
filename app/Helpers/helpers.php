<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Config;



if (!function_exists('generateSlug')):
    function generateSlug($text)
    {
      return Str::slug($text, '-');
    }
endif;



if (!function_exists('static_asset')):
    function static_asset($path, $secure = null)
    {
        if (env('APP_ENV') == "local") {
            return app('url')->asset($path, $secure);
        } else {
            $fullPath = '/public/' . $path;
            return app('url')->asset($fullPath, $secure);
        }
    }
endif;



if (!function_exists('visitorChartData')):
    function visitorChartData()
    {

        $reportEndDate =  Carbon::now()->toDateString();
        $reportStartDate =  Carbon::now()->subDays(10)->toDateString();

        $visitor = DB::table('visitor_access_log')
            ->select('hitDate', DB::raw('COUNT(hitDate) as visitCount'))
            ->whereBetween('hitDate', [$reportStartDate, $reportEndDate])
            ->groupBy('hitDate')
            ->get();

        $result[] = ['Date', 'Viewer'];
        foreach ($visitor as $key => $value) {
            $result[++$key] = [Carbon::parse($value->hitDate)->formatLocalized('%d, %B'), (int)$value->visitCount];
        }

        return json_encode($result);
    }
endif;



if (!function_exists('totalVisitor')):
    function totalVisitor()
    {
        $totalVisitor = DB::table('visitor_access_log')->count();
        return $totalVisitor;
    }
endif;

if (!function_exists('thisDayVisitors')):
    function thisDayVisitors()
    {
        $date = Carbon::now();

        $thisDayVisitors = DB::table('visitor_access_log')
            ->where('hitDate', $date->toDateString())
            ->count();

        return $thisDayVisitors;
    }
endif;

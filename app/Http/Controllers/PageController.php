<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function index(){
        $data = [];
        $data['banner'] = DB::table('tbl_site_banner')->get();
        $data['about'] = DB::table('tbl_about_us_master')->first();
        $data['academic_partner'] = DB::table('tbl_academic_partner')->get();
        $data['featured_courses']  = DB::table('tbl_courses')
                                    ->orderBy('course_id','desc')
                                    ->limit(3)
                                    ->get();
        $data['lecturer'] = DB::table('tbl_lecturers')->get();
        $data['students'] = DB::table('tbl_students')->get();
        $data['total_courses'] = DB::table('tbl_courses')
                                ->select(DB::raw('COUNT(course_id) as count'))
                                ->get();
        $data['news'] = DB::table('tbl_news')
                        ->orderBy('news_id','desc')
                        ->limit(3)
                        ->get();

        $data['events'] = DB::table('tbl_events')
                        ->orderBy('event_id','desc')
                        ->limit(2)
                        ->get();
        
        $data['testinomial'] = DB::table('tbl_testimonials')
                            ->orderBy('id','desc')
                            ->get();
        echo '<pre>';
        print_r($data);exit;
        // return view('index',['data'=>$data]);
    }
}

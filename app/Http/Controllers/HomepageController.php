<?php

namespace App\Http\Controllers;

use App\Models\Homepage;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        return view('partner.pages.homepage');
    }

    public function course()
    {
        return view('partner.pages.course');
    }

    public function pricing()
    {
        return view('partner.pages.pricing');
    }

    public function contact()
    {
        return view('partner.pages.contact');
    }

    public function faq()
    {
        return view('partner.pages.faq');
    }

    public function courseDetailsN1()
    {
        return view('partner.pages.course_details_n1');
    }

    public function courseDetailsN2()
    {
        return view('partner.pages.course_details_n2');
    }

    public function courseDetailsN3()
    {
        return view('partner.pages.course_details_n3');
    }

    public function courseDetailsN4()
    {
        return view('partner.pages.course_details_n4');
    }

    public function courseDetailsN5()
    {
        return view('partner.pages.course_details_n5');
    }

    // public function createCourse()
    // {
    //     return view('partner.pages.create_khoa_hoc');
    // }
}

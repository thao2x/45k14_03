<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddNewCourseRequest;
use App\Models\AddCourse;
use Illuminate\Http\Request;

class AddCourseController extends Controller
{
    public function createCourse()
    {
        return view('partner.pages.create_khoa_hoc');
    }

    public function storeCourse(AddNewCourseRequest $request)
    {
        $data = $request->all();
        AddCourse::create($data);
        toastr()->success("Đã mua khóa học thành công!");
        return redirect('/course');
    }
}

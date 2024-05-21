<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use App\Models\Appeal;
use Illuminate\Http\Request;

class AppealController extends Controller
{
    public function index(){
        $appeals=Appeal::orderBy('created_at','desc')->paginate(10);
        return view('admin.pages.appeal.index',compact('appeals'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

use App\Models\UserSubject;
use App\Models\Subject;
use Illuminate\Http\Request;


class SubjectController extends BaseController {

public function getUserSubject(Request $request)
{
    $array_subjects = [];
    
    $subjects_user = UserSubject::where('user_id', $request->id)->get();
    
    foreach ($subjects_user as $value) {
        
        $subject = Subject::where('id', $value->subject_id)->first();
        array_push($array_subjects, $subject);
    }
    return json_encode($array_subjects);
}
}
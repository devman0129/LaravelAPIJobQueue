<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\ProcessSubmission;  
use App\Http\Requests\SubmissionRequest;

class SubmissionController extends Controller
{
    public function store(SubmissionRequest $request)  
    {  
        // try {  
            ProcessSubmission::dispatch($request->validated());  
            return response()->json(['message' => 'Submission job dispatched successfully.'], 200);  
        // } catch (\Exception $e) {  
        //     return response()->json(['error' => $e->getMessage()], 500);  
        // }     
    }
}

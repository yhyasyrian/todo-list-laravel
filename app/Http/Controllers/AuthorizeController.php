<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class AuthorizeController extends Controller
{
    public function authorizeOrFail(Project $projects):void
    {
        if ($projects->user_id !== auth()->id())
            abort(403);
    }
}

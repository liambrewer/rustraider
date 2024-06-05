<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreGroupRequest;
use App\Models\Group;
use App\Models\Member;
use Illuminate\Support\Facades\DB;

class GroupController extends Controller
{
    public function show(Group $group)
    {
        return view('app.groups.show', compact('group'));
    }

    public function create()
    {
        return view('app.groups.create');
    }
}

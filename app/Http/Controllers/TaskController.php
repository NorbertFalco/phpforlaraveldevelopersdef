<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // CRUD ->
    // CREATE -> store
    // RETRIEVE -> LIST i SHOW
    // UPDATE -> update
    // DELETE -> destroy

    public function index()
    {
        return view('tasks', [
            'tasks' => Task::all()
        ]);
    }

}

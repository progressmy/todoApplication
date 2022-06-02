<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
   $tasks = Task::all();
         return view('index', [
             "tasks" => $tasks
]);
         }
        }

<?php

namespace App\Http\Controllers;

use App\Task;
use App\Http\Requests\StoreTask;
use Illuminate\Http\Request;
use App\Repositories\TaskRepository;
use Illuminate\Support\Facades\Session;

class TaskController extends Controller
{
    protected $tasks;

    public function __construct(TaskRepository $tasks)
    {
        $this->middleware('auth');
        $this->middleware('locale');
        $this->tasks = $tasks;
    }

    public function changeLanguage($language)
    {
        Session::put('language', $language);

        return redirect()->back();
    }

    public function index(Request $request)
    {
        return view('tasks.index', [
            'tasks' => $this->tasks->forUser($request->user()),
        ]);
    }

    public function store(StoreTask $request)
    {
        $task = $request->only('name');
        $request->user()->tasks()->create($task);

        return redirect()->route('home');
    }

    public function destroy(Task $task)
    {
        $this->authorize('destroy', $task);
        $task->delete();

        return redirect()->route('home');
    }
}

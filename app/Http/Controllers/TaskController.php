<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

//use Symfony\Component\HttpFoundation\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'category_id' => 'required'
        ]);

        $task = new Task();
        $task->title = $request->title;
        $task->category_id = $request->category_id;
        $task->save();

        $request->session()->flash('status', 'Task successfully created');
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        // $request->validate([
        //     'completed' => 'boolean'
        // ]);

        $completed = $request->completed == 'on' ? 1 : 0;

        $task->completed = $completed;
        $task->save();

        $request->session()->flash('status', 'Status successfully updated');
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Task $task)
    {
        $task->delete();

        $request->session()->flash('status', 'Task successfully deleted');
        return redirect('/');
    }

    /**
     * delete_all
     *
     * @return void
     */
    public function delete_all(Request $request)
    {
        Task::truncate();

        $request->session()->flash('status', 'All tasks successfully deleted');
        return redirect('/');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Peserta;
use Illuminate\Support\Facades\Session;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $task = Task::where('peserta_id', $id)->get();
        return response()->json([
            "success" => true,
            "message" => "Data Task Berdasarkan Peserta",
            "data" => $task
        ], 200);
    }

    public function task($id)
    {
        $task = Task::where('peserta_id', $id)->get();;
        $user_id = Session::get('user_id');
        $name = Peserta::where('user_id', $user_id)->first();
        
        return view('template/task')->with('name', $name->name)->with('task', $task)->with('peserta_id', $id);
    }

    public function tambahTask(Request $request)
    {
        $validateData = $request->validate([
            'task_name' => 'required|max:255',
            'start_time' => 'required',
            'end_time' => 'required',
            'peserta_id' => 'required'
        ]);
        
        Task::create($validateData);

        return redirect()->intended('/peserta');
    }

    public function deleteTask($id)
    {
        $data_task = Task::findOrFail($id);
        $data_task->delete();
        
        return redirect()->intended('/peserta');
    }

    public function updateTask(Request $request)
    {
        $this->validate($request, [
            'task_name' => 'required|max:255',
            'start_time' => 'required',
            'end_time' => 'required'
        ]);
   
        $task = Task::findOrFail($request->task_id);

        $task->update([
            'task_name' => $request->task_name,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time
        ]);

        return redirect()->intended('/peserta');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

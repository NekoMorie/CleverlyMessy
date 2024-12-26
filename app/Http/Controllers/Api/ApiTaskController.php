<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Task;

class ApiTaskController extends Controller
{
    public function index($id){
        $task = Task::where('users_id', $id)->orderBy('created_at', 'desc') ->get();
        return response()->json([
            'data' => $task]);
    }

    public function store(Request $request){
        $request->validate([
            'judul' =>'required|string',
            'isi' =>'required|string',
            'users_id' => 'required|integer',
        ]);
        $task = new Task;
        $task->judul = $request->judul;
        $task->deadline = $request->deadline;
        $task->isi = $request->isi;
        $task->users_id = $request->users_id;
        $task->save();
        return response()->json([
            'data' => $task]);
    }

    public function hapus($id){
        $task = Task::findOrFail($id);
        $task->delete();
        return response()->json([
            'message' => 'Task deleted successfully'
        ], 200);
    }

    public function reminder($id){
        $task = Task::where('users_id', $id)->orderBy('deadline', 'asc') ->get();
        return response()->json([
            'data' => $task]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Resources\TaskResource;
use App\Models\Tasks;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return TaskResource::collection(Tasks::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $task = Tasks::findOrFail($id);
        return new TaskResource($task);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $task = Tasks::findOrFail($id);
        $task->delete();
        return response()->json(['message' => 'Task Delete Successfully'], 204);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Homework;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeworkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {}

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $course = Course::find($request->query('courseId'));

        return Inertia::render('Homeworks/Create', [
            'course' => $course,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'instructions' => ['required', 'string', 'max:50000'],
            'scoring_grid' => ['required', 'string', 'max:50000'],
        ]);

        Homework::create($validated);

        return redirect()->route('homeworks.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Homework $homework)
    {
        return Inertia::render('Homeworks/Show', [
            'homework' => $homework,
            'course' => $homework->course,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Homework $homework) {}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Homework $homework) {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'instructions' => ['required', 'string', 'max:50000'],
            'scoring_grid' => ['required', 'string', 'max:50000'],
        ]);

        $homework->update($validated);

        return redirect()->route('homeworks.show', $homework);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Homework $homework) {}
}

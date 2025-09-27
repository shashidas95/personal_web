<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Resume;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\ResumeResource;
use App\Http\Resources\ProjectResource;
use App\Http\Requests\ResumeFormRequest;
use Illuminate\Support\Facades\Response;
use ApiResponse;

class ResumeController extends Controller
{
    public function index()
    {
        // try {
        //       $resumes = Resume::with('user')->latest()->get();
        //     return $this->successResponse($resumes, 'Resumes fetched successfully');
        // } catch (\Exception $e) {
        //     return $this->errorResponse('Something went wrong', 500, [$e->getMessage()]);
        // }


        $resumes = Resume::with('user')->latest()->get();

        return view('resumes.index', compact('resumes'));
    }

    public function create()
    {
        return view('resumes.create');
    }


    public function store(ResumeFormRequest $request)
    {
        $resume = new Resume($request->validated());
        $resume->user_id = Auth::id(); // explicitly set user_id
        $resume->save();

        return redirect()->route('resumes.index')
            ->with('success', 'Resume entry created successfully.');
    }

    public function edit(Resume $resume)
    {
        return view('resumes.edit', compact('resume'));
    }

    public function update(ResumeFormRequest $request, Resume $resume)
    {
        $resume->update($request->validated());
        return redirect()->route('resumes.index')->with('success', 'Resume entry updated successfully.');
    }

    public function destroy(Resume $resume)
    {
        $resume->delete();
        return redirect()->route('resumes.index')->with('success', 'Resume entry deleted successfully.');
    }

    private function getResumeData(): array
    {
        $user = User::with([
            'resumes' => fn($q) => $q->orderByDesc('start_date'),
            'projects'
        ])->first(); // or Auth::user() if per-user only

        return [
            'user'    => $user,
            'resumes' => ResumeResource::collection($user->resumes),
            'projects' => ProjectResource::collection($user->projects)
        ];
    }

    public function preview()
    {
        return view('resumes.preview', $this->getResumeData());
    }

    public function download()
    {
        $data = $this->getResumeData();

        $pdf = Pdf::loadView('resumes.preview', $data); // reuse preview view

        // return $pdf->download('resume.pdf');
        return $pdf->download('resume-' . $data['user']->name . '.pdf');
    }
}

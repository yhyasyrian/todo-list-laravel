<?php

namespace App\Http\Requests;

use App\Models\Project;
use Illuminate\Foundation\Http\FormRequest;

class OwnerProjectRequest extends FormRequest
{
    private Project $project;

    public function getProject(): Project
    {
        return $this->project;
    }

    public function setProject(Project $project): self
    {
        $this->project = $project;
        return $this;
    }
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [];
    }
    public function authorizeOrFail(Project $projects):self
    {
        if ($this->getProject()->user_id !== auth()->id())
            abort(403);
        return $this;
    }
    public function delete():void
    {
        $this->getProject()->delete();
    }
}

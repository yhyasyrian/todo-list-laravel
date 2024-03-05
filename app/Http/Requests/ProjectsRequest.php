<?php

namespace App\Http\Requests;

use App\Models\Project;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\ValidationRule;

class ProjectsRequest extends FormRequest
{
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return ['title' => ['string', 'min:3'], 'description' => ['string']];
    }

    public function createProject(): void
    {
        $data = $this->only(array_keys($this->rules()));
        $data['user_id'] = auth()->id();
        Project::create($data);
    }

    public function updateProjectData(Project $project): void
    {
        $data = $this->only(array_keys($this->rules()));
        $project->update($data);
    }
    public function updateProjectStatus(Project $project): void
    {
        $data = ['status'=>$this->get('status')];
        $project->update($data);
    }
}

@php use App\Helpers\ProjectsStatus; @endphp
<x-app-layout>
    @include('layouts.header-section',['title'=>$project->title,'id'=>$project->id ])
    <div class="py-12">
        <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <div id="tasks" class="lg:col-span-2">
                    @foreach($tasks as $task)
                        <x-task :body="$task->body" :id="$task->id" :projectId="$project->id" :status="$task->status"/>
                    @endforeach
                    <x-create-task :id="$project->id"/>
                </div>
                <div id="project" class="lg:col-span-1">
                    <x-card :project="$project"/>
                    <form action="" method="post" class="mt-4 flex flex-col gap-y-2 bg-gray-200 p-4 rounded-lg">
                        @method('put')
                        @csrf
                        <label for="status" class="font-bold cursor-pointer">Change Status</label>
                        <select name="status" id="status" onchange="this.form.submit()"
                                class="rounded-lg border-transparent shadow-none focus:outline-transparent focus:border-transparent focus:shadow-none focus:ring-transparent">
                            <option @selected($project->status === ProjectsStatus::PROGRESS->value) value="{{ProjectsStatus::PROGRESS->value}}">Progress</option>
                            <option @selected($project->status === ProjectsStatus::DONE->value) value="{{ProjectsStatus::DONE->value}}">Done</option>
                            <option @selected($project->status === ProjectsStatus::CANCELED->value) value="{{ProjectsStatus::CANCELED->value}}">Cansel</option>
                        </select>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

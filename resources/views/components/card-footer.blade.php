<div class="flex flex-row bg-gray-300 p-4 rounded-b-lg">
    <div class="flex flex-row gap-2">
        <span><x-icon-list /></span>
        <span class="font-extrabold">{{$project->tasks()->count()}}</span>
    </div>
    <div class="flex flex-row gap-2 ms-auto">
        <form method="post" action="{{route('project.destroy',['project'=>$project->id])}}">
            @csrf
            @method('delete')
            <x-icon-remove />
        </form>
    </div>
</div>

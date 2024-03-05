<div class="flex flex-row justify-between mx-auto container py-12">
    <div class="flex flex-row gap-x-1 text-gray-950">
        <span class="font-extrabold">Projects</span>
        <span>/</span>
        <span class="font-extrabold">{{$title ?? ''}}</span>
    </div>
    @empty($title)
        <a href="{{route('project.create')}}">
            <x-primary-button>Create Project</x-primary-button>
        </a>
    @else
        <a href="{{route('project.edit',['project'=>$id])}}">
            <x-primary-button>Edit Project</x-primary-button>
        </a>
    @endempty
</div>

<div {{$attributes->merge(['class'=>'relative bg-gray-200 pt-8 rounded-lg transition duration-300 hover:-translate-y-4 flex flex-col'])}}>
    <div class="px-2 flex flex-col gap-y-1 flex-1">
        <span class="absolute top-0 end-0 bg-gray-50 px-6">{!! $project->getStatus() !!}</span>
        <h2 class="font-extrabold text-2xl mb-4 ps-2">{{$project->title}}</h2>
        <p>{{!$isHomePage ? $project->description : \Illuminate\Support\Str::limit($project->description,50)}}</p>
        <a href="#" class="block w-fit self-end">
            <a href="{{route('project.show',['project'=>$project->id])}}" class="self-end">
                <x-primary-button>Tasks</x-primary-button>
            </a>
        </a>
        <hr class="dark:border-gray-950 my-2"/>
    </div>
    <x-card-footer :project="$project"/>
</div>

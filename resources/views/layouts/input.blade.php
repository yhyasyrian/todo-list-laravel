<div class="py-12 flex min-h-96 items-center justify-center">
    <div class="bg-white shadow-sm rounded-md max-w-2xl mx-auto w-full p-4">
        <form method="POST"
              action="{{ isset($project) ? route('project.update',['project'=>$project->id]) : route('project.store') }}"
              class="flex flex-col gap-2">
            @csrf
            @isset($project)
                @method('PUT')
            @endisset
            <div class="flex flex-row justify-center items-center">
                <h1 class="mx-4 font-extrabold text-2xl">Add Project</h1>
                <x-application-logo class="mx-4 h-24"/>
            </div>
            <!-- Title -->
            <div class="mb-2">
                <x-input-label for="title" value="Title:"/>
                <x-text-input id="title" class="block mt-1 w-full" type="text" name="title"
                              :value="$project->title ?? old('title')" required autofocus/>
                <x-input-error :messages="$errors->get('title')" class="mt-2"/>
            </div>
            <!-- Description -->
            <div class="mb-2">
                <x-input-label for="description" value="Description:"/>
                <x-text-input id="description" class="block mt-1 w-full" type="textarea" name="description"
                              :value="$project->description ?? old('description')" required autofocus/>
                <x-input-error :messages="$errors->get('description')" class="mt-2"/>
            </div>
            <div class="flex gap-x-2 justify-between">
                <a href="{{isset($project) ? route('project.show',['project'=>$project->id]) : route('dashboard')}}">
                    <x-primary-button class="w-fit" type="button">Back</x-primary-button>
                </a>
                <x-primary-button class="w-fit"
                                  type="submit">
                    {{isset($project) ? 'Update' : 'Create'}}
                </x-primary-button>
            </div>
    </div>
</div>

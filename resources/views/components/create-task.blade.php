<form method="post" action="{{route('task.store',['project'=> $id ])}}"
      class="bg-white shadow-md rounded-md p-6 text-gray-700 font-bold">
    @csrf
    <!-- Task -->
    <div class="mb-2">
        <x-input-label for="task" value="Task:"/>
        <x-text-input id="task" class="block mt-1 w-full" type="text" name="task"
                      :value="old('task')" required autofocus/>
        <x-input-error :messages="$errors->get('task')" class="mt-2"/>
    </div>
    <!-- Button -->
    <x-primary-button class="w-fit"
                      type="submit">
        Add
    </x-primary-button>
</form>

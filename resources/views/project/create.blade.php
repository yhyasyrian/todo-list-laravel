<x-app-layout>
    @isset($project)
        @include('layouts.input',['project'=>$project])
    @else
        @include('layouts.input')
    @endisset
</x-app-layout>

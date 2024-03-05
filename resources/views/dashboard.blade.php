<x-app-layout>
    @include('layouts.header-section')
    <div class="py-12">
        <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mb-4">
                @forelse($projects as $project)
                    <x-card :project="$project" :isHomePage="true"   />
                @empty
                    <x-alert message="You don't have any project" class="sm:col-span-2 lg:col-span-3 w-full bg-red-700" />
                @endforelse
            </div>
            {{ $projects->links('vendor.pagination.tailwind') }}
        </div>
    </div>
</x-app-layout>

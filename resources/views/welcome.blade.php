<x-app-layout>
    <!-- Hero  -->
    <section class="min-h-screen-with-header xl:container p-2 md:px-6 mx-auto grid md:grid-cols-2 items-center">
        <div class="flex flex-col gap-y-4 max-w-2xl">
            <h1 class="font-extrabold text-3xl text-center md:text-start mt-6 md:mt-0">{{config('name',env('APP_NAME'))}}</h1>
            <p class="leading-8 tracking-wide">Streamline your tasks and achieve your goals with our user-friendly to-do
                list. Effortless organization for a more productive you.</p>
        </div>
        <img class="w-3/4 mx-auto" src="{{asset('images/body-fun-for-use-todo-list-genetare-with-ai.png')}}"
             alt="sorry, this photo from canva and AI; No copyright :)">
    </section>
    <!-- Why We  -->
    <section class="bg-primary p-4">
        <h2 class="text-center text-2xl font-bold text-white">Feature</h2>
        <div class="lg:container grid-cols-1-to-3 py-10">
            <x-box-home-page title="Effortless Task Management"
                             description="Create, organize, and prioritize your tasks with ease. Keep track of deadlines and never miss a beat."/>
            <x-box-home-page title="Stay Focused and Productive"
                             description="Break down complex tasks into subtasks, set reminders, and achieve your goals one step at a time."/>
            <x-box-home-page title="Collaboration Made Easy"
                             description="Share lists, delegate tasks, and stay on the same page with your team for seamless project management."/>
        </div>
    </section>
    <section class="p-2 flex flex-row justify-evenly items-center py-24 container mx-auto">
        <p class="w-2/3">
            Join our community and experience the power of organized productivity. Register for free and start
            streamlining your tasks in seconds. It's the easiest way to stay on top of your goals.
        </p>
        <a href="{{route('register')}}">
            <x-primary-button type="button">Register</x-primary-button>
        </a>
    </section>
</x-app-layout>

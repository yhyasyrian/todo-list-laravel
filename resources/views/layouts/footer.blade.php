<footer class="bg-primary text-white">
    <div class="container p-2 mx-auto grid-cols-1-to-3">
        <div id="siteContent">
            <h3 class="mb-2 font-extrabold text-2xl">{{config('name',env('APP_NAME'))}}</h3>
            <p class="text-sm">Streamline your tasks and achieve your goals with our user-friendly to-do list. Effortless organization for a more productive you.</p>
        </div>
        <div id="links" class="text-center">
            <h3 class="mb-2 font-extrabold text-2xl">Links</h3>
            <nav class="flex flex-col items-center gap-y-1">
                @foreach(\App\Http\Controllers\HomeController::getLinkForNavigationBar() as $title => $routeName)
                    <a href="{{route($routeName)}}" class="border-b-2 w-fit border-b-transparent hover:border-b-white transition">{{$title}}</a>
                @endforeach
            </nav>
        </div>
        <div id="thamkForUse">
            <h3 class="mb-2 font-extrabold text-2xl">Thank for use</h3>
            <p class="text-sm">Thanks for using our to-do list!  We're thrilled to be a part of your productivity journey. If you have any feedback or suggestions on how we can improve, please let us know. Your input helps us make our site even better.</p>
        </div>
    </div>
    <div class="border-t-2 text-center">
        <p class="text-lg font-bold">
            © {{date('Y/m/d')}} {{config('name',env('APP_NAME'))}}. All rights reserved.
        </p>
        <p>
            Note: this site create content and image with AI
        </p>
    </div>
</footer>

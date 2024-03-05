<div class="bg-white shadow-md rounded-md p-6 text-gray-700 font-bold flex gap-x-2 my-4">
    <form method="post" action="{{route('task.update',['project'=>$projectId,'task'=>$id])}}" class="flex-1 cursor-pointer">
        @csrf
        @method('put')
        <p @if($status) style="text-decoration: line-through;" @endif onclick="this.parentElement.submit()">{{$body}}</p>
    </form>
    <form method="post" action="{{route('task.destroy',['project'=>$projectId,'task'=>$id])}}">
        @method('delete')
        @csrf
        <x-icon-remove/>
    </form>
</div>

<x-app-layout>
    <div>
        <h1>Tasks</h1>
        <a href="/tasks/create">create</a>
    </div>

    <form action="/tasks/{{ $task->id }}" method="post">
        @method('patch')
        @csrf
        <input type="text" name="list" value="{{ $task->list }}">
        <button type="submit">update</button>
    </form>
</x-app-layout>

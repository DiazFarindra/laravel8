<x-app-layout title="tasks">
    <div>
        <h1>Tasks</h1>
        <a href="/tasks/create">create</a>
    </div>

    <form action="/tasks" method="post">
        @csrf

        <input type="hidden" name="id" value="0">
        <input type="text" name="list" placeholder="input task">
        <button type="submit">add</button>
    </form>

    <ul>
        @foreach ($tasks as $task)
            <p>
                {{ $loop->iteration }}. {{ $task->list }}
                <div>
                    <a href="/tasks/{{ $task->id }}/edit">edit</a>
                    <form action="/tasks/{{ $task->id }}" method="post" style="display: inline">
                        @method('delete')
                        @csrf
                        <button type="submit">delete</button>
                    </form>
                </div>
            </p>
        @endforeach
    </ul>
</x-app-layout>

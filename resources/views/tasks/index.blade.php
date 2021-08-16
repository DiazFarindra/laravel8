<x-app-layout title="tasks">

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('success') }}
        </div>
    @endif

    <div class="mb-4 row">
        <div class="col-md-12">
            @include('tasks._form', ['submit' => 'create'])
        </div>
    </div>

    <ul class="list-group">
        @foreach ($tasks as $task)
            <li class="list-group-item d-flex justify-content-between">
                {{ $loop->iteration }}. {{ $task->list }}
                <div class="d-flex">
                    <a class="btn btn-primary me-2" href="/tasks/{{ $task->id }}/edit">edit</a>
                    <form action="{{ route('tasks.destroy', $task->id) }}" method="post" style="display: inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger" type="submit">delete</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
</x-app-layout>

<x-app-layout title="tasks">

    <div class="mb-4 row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">add task</div>
                <div class="card-body">
                    <form action="{{ route('tasks.store') }}" method="post" class="d-flex">
                        @csrf
                        <input type="hidden" name="id" class="form-control" value="0">
                        <input type="text" name="list" class="form-control me-2" placeholder="input task">
                        <button type="submit" class="btn btn-outline-primary">add</button>
                    </form>
                </div>
            </div>
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

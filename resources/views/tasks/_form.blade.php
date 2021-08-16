<div class="card">
    <div class="card-header">add task</div>
    <div class="card-body">
        <form action="{{ route('tasks.store') }}" method="post" class="d-flex">
            @csrf
            <input type="text" name="list" class="form-control @error('list') is-invalid @enderror me-2" value="{{ old('list', $task->list) }}" placeholder="input task">
            <button type="submit" class="btn btn-outline-primary">{{ $submit }}</button>
        </form>
        @error('list')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>

<div class="card">
    <div class="card-header">add task</div>
    <div class="card-body">
        <form action="{{ route('tasks.store') }}" method="post" class="d-flex">
            @csrf
            <input type="text" name="list" class="form-control @error('list') is-invalid @enderror me-2" placeholder="input task">
            <button type="submit" class="btn btn-outline-primary">add</button>
        </form>
        @error('list')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
</div>

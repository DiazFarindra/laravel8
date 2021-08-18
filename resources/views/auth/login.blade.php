<x-app-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Login</div>
                    <div class="card-body">
                        <form action="{{ route('login') }}" method="post">
                            @csrf
                            <div class="mb-4">
                                <label for="email" class="form-label">email</label>
                                <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control">
                                @error('email')
                                    <small class="mt-1 text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="password" class="form-label">password</label>
                                <input type="password" name="password" id="password" value="{{ old('password') }}" class="form-control">
                                @error('password')
                                    <small class="mt-1 text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

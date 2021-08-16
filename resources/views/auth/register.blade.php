<x-app-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Create new Account</div>
                    <div class="card-body">
                        <form action="{{ route('register') }}" method="post">
                            @csrf
                            <div class="mb-4">
                                <label for="email" class="form-label">email</label>
                                <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control">
                                @error('email')
                                    <small class="mt-1 text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="username" class="form-label">username</label>
                                <input type="text" name="username" id="username" value="{{ old('username') }}" class="form-control">
                                @error('username')
                                    <small class="mt-1 text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="name" class="form-label">name</label>
                                <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control">
                                @error('name')
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
                            <button type="submit" class="btn btn-primary">register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

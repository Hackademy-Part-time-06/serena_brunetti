<x-main>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form class="w-50 m-auto" action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
        @method('POST')
        @csrf

        <h1>Registrati!</h1>
        <div class="mb-3">
            <label class="form-label">Nome</label>
            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" name="email" value="{{ old('email') }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="password" value="{{ old('password') }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Conferma password</label>
            <input type="password" class="form-control" name="password_confirmation"
                value="{{ old('password_confirmation') }}">
        </div>
        {{--  class="form-control" id="name" type="text" placeholder="Name"
        name="name" value="{{ old('name') }} --}}
        <button type="submit" class="btn btn-primary">Registrati</button>
    </form>

</x-main>

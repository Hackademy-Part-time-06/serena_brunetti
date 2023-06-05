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
    <form class="w-50 m-auto" action="{{ route('login') }}" method="POST" enctype="multipart/form-data">
        @method('POST')
        @csrf

        <h1>Effettua l'accesso!</h1>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" name="email" value="{{ old('email') }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="password" value="{{ old('password') }}">
        </div>
        {{--  class="form-control" id="name" type="text" placeholder="Name"
        name="name" value="{{ old('name') }} --}}
        <button type="submit" class="btn btn-primary">Login</button>
    </form>

</x-main>

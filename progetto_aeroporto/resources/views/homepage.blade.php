<x-main>

    <x-navbar />

    <header>
        <!-- This div is  intentionally blank. It creates the transparent black overlay over the video which you can modify in the CSS -->
        <div class="overlay"></div>

        <!-- The HTML5 video element that will create the background video on the header -->
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="{{ url('/MEDIA/Il primo spot pubblicitario di ITA Airways.mp4') }}" type="video/mp4">
        </video>

        <!-- The header content -->
        <div class="container h-100">
            <div class="d-flex h-100 text-center align-items-center">
                <div class="w-100 text-white">
                    <h1 class="display-3">Vola con Bugliano</h1>
                    <p class="lead mb-0">Voliamo insieme dal 1962</p>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3>
                        Partenze
                    </h3>


                    @foreach ($voli['departure'] as $flight)
                        <ul>
                            <li>
                                <a href="{{ route('detail', ['ref' => $flight['id']]) }}">{{ $flight['city'] }}</a>
                            </li>
                        </ul>
                    @endforeach
                </div>


                <div class="col-md-6">
                    <h3>
                        Arrivi
                    </h3>

                    @foreach ($voli['arrival'] as $flight)
                        <ul>
                            <li>
                                <a href="{{ route('detail', ['ref' => $flight['id']]) }}">{{ $flight['city'] }}</a>
                            </li>
                        </ul>
                    @endforeach
                </div>
            </div>
        </div>

        </div>

    </main>
    <x-footer />
</x-main>

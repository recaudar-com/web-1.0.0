<div class="modal fade xs-modal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <h3>Suscribete</h3>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/AfYC0R8hYiE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <p class="mt-2 mb-2 text-dark" style="font-size: 18px"> Asiste al evento de lanzamiento </p>
            <form method="POST" action="{{ route('newsletter') }}">
                @csrf
                <input type="email" name="email" id="email" class="form-control" placeholder="Aqui escribe tu email">
                <input type="submit" value="Suscribete" class="btn btn-primary btn-block mt-3">
            </form>
        </div>
    </div>
</div>

<div class="modal fade xs-modal" id="infoModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            @if ($message = Session::get('info'))
                <h1 class="text-center">{{ $message }}</h1>
            @endif
        </div>
    </div>
</div>
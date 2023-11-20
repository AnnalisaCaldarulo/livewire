<x-layout>
    <div class="container-fluid header">
        <div class="row row-h justify-content-center align-items-center">
            <div class="col-12 col-md-8 mt-5">
                <h2 class="display-5 text-center py-5">Registrati!</h2>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome:</label>
                        <input type="text" name="name" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Indirizzo email:</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password:</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="confermaPassword" class="form-label">Conferma la tua password:</label>
                        <input type="password" name="password_confirmation" class="form-control" id="confermaPassword">
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <button type="submit" class="btn btn-primary">Registrati</button>

                        </div>
                        <div class="col-6 text-end">
                            <p>Hai già un account? <a href="{{ route('login') }}"
                                    class="btn btn-outline-info">Fai il login</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>

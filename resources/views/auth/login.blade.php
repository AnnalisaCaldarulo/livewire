<x-layout>
    <div class="container-fluid header">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-8 mt-5">
                <h2 class="display-5 text-center py-5">Effettua il login!</h2>

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Indirizzo email:</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password:</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                        <div class="col-6 text-end">
                            <p>Non hai un account? <a href="{{ route('register') }}"
                                    class="btn btn-outline-info">Registrati</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>

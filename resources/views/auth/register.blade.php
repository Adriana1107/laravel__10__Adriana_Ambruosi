<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">

<x-display-errors/>

                <form method="post" action="{{ route('register') }}">
                    @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome:</label>
            <input type="text" name="name" class="form-control" id="name">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Indirizzo email:</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password:</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>

        <div class="mb-3">
            <label for="confermaPassword" class="form-label">Conferma la password:</label>
            <input type="password" name="password-confirmation" class="form-control" id="confermaPassword">
        </div>

        <button type="submit" class="btn btn-primary">registrati</button>
        </form>



            </div>
        </div>
    </div>
</x-layout>
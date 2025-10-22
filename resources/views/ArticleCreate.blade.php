<x-layout>
    <div class="container-fluid">
        <div class="row mt-3">
            <h2 class="text-center">inserisci un tuo articolo:</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">

              @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="post" action="{{route('articleSubmit')}}" enctype="multipart/form-data">
                    @csrf
        <div class="mb-3">
            <label for="name" class="form-label">nome dell'articolo:</label>
            <input type="text" name="name" class="form-control" id="name" aria-describedby="nameHelp" value="{{old('name')}}">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">prezzo:</label>
            <input type="text" name="price" class="form-control" id="price" aria-describedby="priceHelp" value="{{old('price')}}">
        </div>
        <div class="mb-3">
            <label for="img" class="form-label">inserisci un'immagine:</label>
            <input type="file" name="img" class="form-control" id="img">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">descrizione dell'articolo:</label>
            <textarea name="description" cols="30" rows="10" class="form-control">{{old('description')}}</textarea>
        <button type="submit" class="btn btn-primary mt-2">inserisci il tuo articolo</button>
        </form>
                    </div>
            </div>
        </div>
</x-layout>
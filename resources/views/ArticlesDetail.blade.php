<x-layout> 
  <div class="container-fluid py-5">
    <div class="row justify-content-center align-items-center">

      <div class="col-12 mb-4">
        <h2 class="display-5 text-center">{{ $article->name }}</h2>
      </div>

      <div class="col-12 col-md-6 d-flex flex-column justify-content-center align-items-center mb-4">
        <h5 class="text-center">{{ $article->description }}</h5>
        <p class="text-justify">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam voluptatem excepturi unde placeat natus explicabo obcaecati deserunt, maiores earum tempora, officia ex illum quibusdam! Cumque quis tempora odio dolorem provident.
        </p>
      </div>

      <div class="col-12 col-md-6 mb-4">
        @if ($article->img)
          <img class="img-fluid bg-custom" src="{{ Storage::url($article->img) }}" alt="Immagine di {{ $article->name }}">
        @endif
      </div>

    </div>
  </div>
</x-layout>

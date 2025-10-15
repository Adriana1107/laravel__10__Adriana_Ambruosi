<x-layout> 
  <div class="container-fluid">
    <h2 class="text-center mt-5">I NOSTRI ARTICOLI</h2>

    <div class="row">
      @foreach($articles as $article)
        <div class="col-12 col-md-6 mb-4">
          <x-card :article="$article"/>
        </div>
      @endforeach
    </div>
  </div>
</x-layout>

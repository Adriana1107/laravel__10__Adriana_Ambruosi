<div class="card" style="width: 18rem;">
  @if ($article->img)
    <img src="{{ Storage::url($article->img) }}" class="card-img-top" alt="{{ $article->name }}">
  @endif
  <div class="card-body">
    <h5 class="card-title">{{ $article->name }}</h5>
    <p class="card-text">{{ $article->description }}</p>
    <p class="card-text">{{ $article->price }} €</p>
    <a href="{{ route('ArticlesDetail', ['name' => $article->name]) }}" class="btn btn-primary">Dettagli</a>
  </div>
</div>
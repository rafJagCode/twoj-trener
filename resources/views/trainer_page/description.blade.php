<div class="blog-info details overview">
    <h5 class="mb-4">O sobie</h5>
    @if ($user->description != null)
        <p class="mb-3">{{ $user->description }}</p>
    @else
        <p class="mb-3">Brak opisu.</p>
    @endif
</div>

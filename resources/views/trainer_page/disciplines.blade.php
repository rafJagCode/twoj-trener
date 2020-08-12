<div class="homes-content details amenities">
    <!-- title -->
    <h5 class="mb-4">Dyscypliny</h5>
    <!-- cars List -->
    <div class="ameneniti">
        <ul class="homes-list amen clearfix">
            @foreach ($user->disciplines() as $discipline)
                <li>
                    <i class="fa fa-check-square mr-2" aria-hidden="true"></i>
                    <span>{{ $discipline }}</span>
                </li>
            @endforeach
        </ul>
    </div>
</div>

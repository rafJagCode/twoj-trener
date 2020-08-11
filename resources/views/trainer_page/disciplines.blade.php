<div class="homes-content details amenities">
    <!-- title -->
    <h5 class="mb-4">Dyscypliny</h5>
    <!-- cars List -->
    <div class="ameneniti">
        <ul class="homes-list amen clearfix">
            @foreach ($user->disciplines() as $item)
                <li>
                    <i class="fa fa-check-square mr-2" aria-hidden="true"></i>
                    <span>{{ $item }}</span>
                </li>
            @endforeach
        </ul>
    </div>
</div>

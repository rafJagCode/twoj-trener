<div class="homes-content details amenities">
    <!-- title -->
    <h5 class="mb-4">Dyscypliny</h5>
    <!-- cars List -->
    <div class="ameneniti">
        <ul class="homes-list amen clearfix">
            @if ($disciplines->count() != null)
                @foreach ($disciplines as $item)
                    <li>
                        <i class="fa fa-check-square mr-2" aria-hidden="true"></i>
                        <span>{{ $item->name }}</span>
                    </li>
                @endforeach
            @else
                <span>Brak wybranych dyscyplin.</span>
            @endif
        </ul>
    </div>
</div>

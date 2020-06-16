<div class="message-bar">

        <button class="message-btn" data-toggle="modal" data-target="#message">
            <i class="far fa-comment-alt"></i>
            <p>Napisz wiadomość</p>
        </button>
    @guest
        <button class="message-btn">
            <i class="far fa-star"></i>
            <p>Oceń trenera</p>
        </button>
    @else
        <button class="message-btn" data-toggle="modal" data-target="#rate">
            <i class="far fa-star"></i>
            <p>Oceń trenera</p>
        </button>
    @endguest
</div>

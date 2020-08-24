@extends('layout')
@section('head')
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="{{ URL::asset('css/fullcalendar.css')}}" />
<link rel="stylesheet" href="{{ URL::asset('css/jquery.datetimepicker.min.css')}}" />
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
<style>
    /* width */
    ::-webkit-scrollbar {
        width: 7px;
    }
    /* Track */
    ::-webkit-scrollbar-track {
        background: #f1f1f1;
    }
    /* Handle */
    ::-webkit-scrollbar-thumb {
        background: #a7a7a7;
    }
    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
        background: #929292;
    }
    ul {
        margin: 0;
        padding: 0;
    }
    li {
        list-style: none;
    }
    .user-wrapper, .message-wrapper {
        border: 1px solid #dddddd;
        overflow-y: auto;
    }
    .user-wrapper {
        height: 600px;
    }
    .user {
        cursor: pointer;
        padding: 5px 0;
        position: relative;
    }
    .user:hover {
        background: #eeeeee;
    }
    .user:last-child {
        margin-bottom: 0;
    }
    .pending {
        position: absolute;
        left: 13px;
        top: 9px;
        background: #b600ff;
        margin: 0;
        border-radius: 50%;
        width: 18px;
        height: 18px;
        line-height: 18px;
        padding-left: 5px;
        color: #ffffff;
        font-size: 12px;
    }
    .media-left {
        margin: 0 10px;
    }
    .media-left img {
        width: 64px;
        border-radius: 64px;
    }
    .media-body p {
        margin: 6px 0;
    }
    .message-wrapper {
        padding: 10px;
        height: 536px;
        background: #eeeeee;
    }
    .messages .message {
        margin-bottom: 15px;
    }
    .messages .message:last-child {
        margin-bottom: 0;
    }
    .received, .sent {
        width: 45%;
        padding: 3px 10px;
        border-radius: 10px;
    }
    .received {
        background: #ffffff;
    }
    .sent {
        background: #3bebff;
        float: right;
        text-align: right;
    }
    .message p {
        margin: 5px 0;
    }
    .date {
        color: #777777;
        font-size: 12px;
    }
    .active {
        background: #eeeeee;
    }
    input[type=text] {
        width: 100%;
        padding: 12px 20px;
        margin: 15px 0 0 0;
        display: inline-block;
        border-radius: 4px;
        box-sizing: border-box;
        outline: none;
        border: 1px solid #cccccc;
    }
    input[type=text]:focus {
        border: 1px solid #aaaaaa;
    }
</style>

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js" integrity="sha256-4iQZ6BVL4qNKlQ27TExEhBN1HFPvAvAMbFavKKosSWQ=" crossorigin="anonymous"></script>
<script src="{{ URL::asset('js/jquery.datetimepicker.full.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
@endsection
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">  
            <div class="user-wrapper">
                <ul class="users">
                    {{--@foreach (users as $user)--}}
                        <li class="user" {{-- id=" {{ $user->id }}"--}}>
                            {{-- pokaże powiadomienie o liczbie nieprzeczytanych --}}
                            {{--@if($user->unread)--}}
                                <span class="pending">1{{--{{ $user->unread }}--}}</span>
                            {{--@endif--}}

                            <div class="media">
                                
                                <div class="media-left">
                                    <img src="https://via.placeholder.com/150{{--{{ $user->avatar }}--}}" alt="" class="media-object">
                                </div>

                                <div class="media-body">
                                    <p class="name">John Doe{{--{{ $user->firstName }}--}}</p>
                                    <p class="email">john@email.com{{--{{ $user->email }}--}}</p>
                                </div>

                            </div>
                        </li>
                    {{--@endforeach--}}
                </ul>
            </div>
        </div>
        
        <div class="col-md-8" id="messages">
            <div class="message-wrapper">
                <ul class="messages">
                    <li class="message clearfix">
                        <div class="sent">
                            <p>Lorem ipsum dolor.</p>
                            <p class="date">1 Sep, 2020</p>
                        </div>
                    </li>
                    <li class="message clearfix">
                        <div class="received">
                            <p>Lorem ipsum dolor.</p>
                            <p class="date">1 Sep, 2020</p>
                        </div>
                    </li>

                    <li class="message clearfix">
                        <div class="sent">
                            <p>Lorem ipsum dolor.</p>
                            <p class="date">1 Sep, 2020</p>
                        </div>
                    </li>
                    <li class="message clearfix">
                        <div class="received">
                            <p>Lorem ipsum dolor.</p>
                            <p class="date">1 Sep, 2020</p>
                        </div>
                    </li>

                    <li class="message clearfix">
                        <div class="sent">
                            <p>Lorem ipsum dolor.</p>
                            <p class="date">1 Sep, 2020</p>
                        </div>
                    </li>
                    <li class="message clearfix">
                        <div class="received">
                            <p>Lorem ipsum dolor.</p>
                            <p class="date">1 Sep, 2020</p>
                        </div>
                    </li>

                    <li class="message clearfix">
                        <div class="sent">
                            <p>Lorem ipsum dolor.</p>
                            <p class="date">1 Sep, 2020</p>
                        </div>
                    </li>
                    <li class="message clearfix">
                        <div class="received">
                            <p>Lorem ipsum dolor.</p>
                            <p class="date">1 Sep, 2020</p>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="input-text">
                <input type="text" name="message" class="submit">
            </div>

        </div>

    </div>
</div>

{{-- 
<script src="https://js.pusher.com/5.0/pusher.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>
    var receiver_id = '';
    var my_id = "{{ Auth::id() }}";
    $(document).ready(function () {
        // formularz konfiguracji AJAX token csrf
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        // Włącz logowanie pushera nie uwzględniaj tego w produkcji
        Pusher.logToConsole = true;
        var pusher = new Pusher('49f3ba8c9d3adab2613e', {
            cluster: 'ap2',
            forceTLS: true
        });
        var channel = pusher.subscribe('my-channel');
        channel.bind('my-event', function (data) {
            // alert(JSON.stringify(data));
            if (my_id == data.from) {
                $('#' + data.to).click();
            } else if (my_id == data.to) {
                if (receiver_id == data.from) {
                    //jeśli wybrany jest odbiorca, załaduj ponownie wybranego użytkownika
                    $('#' + data.from).click();
                } else {
                    // if receiver is not seleted, add notification for that user
                    var pending = parseInt($('#' + data.from).find('.pending').html());
                    if (pending) {
                        $('#' + data.from).find('.pending').html(pending + 1);
                    } else {
                        $('#' + data.from).append('<span class="pending">1</span>');
                    }
                }
            }
        });
        $('.user').click(function () {
            $('.user').removeClass('active');
            $(this).addClass('active');
            $(this).find('.pending').remove();
            receiver_id = $(this).attr('id');
            $.ajax({
                type: "get",
                url: "message/" + receiver_id, //trzeba stworzyc ten route
                data: "",
                cache: false,
                success: function (data) {
                    $('#messages').html(data);
                    scrollToBottomFunc();
                }
            });
        });
        $(document).on('keyup', '.input-text input', function (e) {
            var message = $(this).val();
            //sprawdź, czy naciśnięto klawisz Enter i wiadomość nie jest zerowa wybrany jest odbiorca
            if (e.keyCode == 13 && message != '' && receiver_id != '') {
                $(this).val(''); //podczas naciskania enter pole tekstowe będzie puste
                var datastr = "receiver_id=" + receiver_id + "&message=" + message;
                $.ajax({
                    type: "post",
                    url: "message", //trzeba utworzyć ten post route
                    data: datastr,
                    cache: false,
                    success: function (data) {
                    },
                    error: function (jqXHR, status, err) {
                    },
                    complete: function () {
                        scrollToBottomFunc();
                    }
                })
            }
        });
    });
    // make a function to scroll down auto
    function scrollToBottomFunc() {
        $('.message-wrapper').animate({
            scrollTop: $('.message-wrapper').get(0).scrollHeight
        }, 50);
    }
</script>    
--}}
@endsection

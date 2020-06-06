@extends('app')

@section('title', 'trainer_page')

@section('trainer-page-css')
    <link href="{{ asset('/css/trainer_page.css') }}" rel="stylesheet">
@endsection
@section('closeup-js')
    <script type="text/javascript">
        let bigPhoto = $('#big-photo');
        let src;
        $('.certyficates').click((event)=>{
            src = $(event.target).find('img').attr('src');
            console.log(src);
            bigPhoto.attr('src', src);
        });
        $('.img-container').click((event)=>{
            src = $(event.target).attr('src');
            bigPhoto.attr('src', src);
        });
    </script>
@endsection

@section('trainer-page')
<div class="trainer-page-wrapper">
    @include('trainer_page_info')
    @include('trainer_page_message_bar')
    @include('trainer_page_description')
    @if(count($photos)>0)
        @include('trainer_page_gallery')
    @endif
    @include('trainer_page_certyficates')
    @include('trainer_page_calendar')
    @include('modals.trainer_page_closeup')
</div>
@endsection

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
            let targetedCertificate = $(event.target).closest('.certyficates');
            src = targetedCertificate.find('img').attr('src');
            bigPhoto.attr('src', src);
        });
        $('.img-container').click((event)=>{
            let targetedPhoto = $(event.target).closest('.img-container').find('img');
            console.log(targetedPhoto);
            src = targetedPhoto.attr('src');
            console.log(src);
            bigPhoto.attr('src', src);
        });
    </script>
@endsection

@section('trainer-page')
<div class="trainer-page-wrapper">
    @include('trainer_page.info')
    @include('trainer_page.message_bar')
    @include('trainer_page.description')
    @if(count($photos)>0)
        @include('trainer_page.gallery')
    @endif
    @include('trainer_page.certyficates')
    @include('trainer_page.calendar')
    @foreach($ratings as $rating)
        @include('trainer_page.ratings')
    @endforeach
    @include('trainer_page.modals.closeup')
    @include('trainer_page.modals.message')
    @include('trainer_page.modals.rate')

</div>
@endsection

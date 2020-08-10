@extends('layout')
@section('additional-css')
    {{-- <link href="{{ asset('/css/trainer_dashboard_business_card.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/searchresults.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('/css/additional.css') }}" rel="stylesheet">
@endsection

@section('content')
    {{-- @if($matchedTrainers->count() > 0) --}}
        <!-- START SECTION LISTING -->
        <section class="listings-grid-right featured popular portfolio blog" id="section_class">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 blog-pots">
                        <!-- Block heading Start-->
                        <div class="block-heading">
                            <div class="row">
                                <div class="col-lg-6 col-md-5 col-2">
                                    <h4>
                                        <span class="heading-icon">
                                            <i id="icon_view" class="fa fa-th-large"></i>
                                        </span>
                                        <span class="hidden-sm-down">Lista trenerów</span>
                                    </h4>
                                </div>
                                <div class="col-lg-6 col-md-7 col-10 cod-pad mt-22">
                                    <div class="sorting-options">
                                        <select class="sort_type" name="sort_type" id="sort_type">
                                            <option value="alphabetAsc" selected>Alfabetycznie - rosnąco</option>
                                            <option value="alphabetDesc">Alfabetycznie - malejąco</option>
                                            <option value="quantityAsc">Liczba ocen - rosnąco</option>
                                            <option value="quantityDesc">Liczba ocen - malejąco</option>
                                            <option value="avgAsc">Średnia ocena - rosnąco</option>
                                            <option value="avgDesc">Średnia ocena - malejąco</option>
                                        </select>
                                        <input type="hidden" name="sort_type_hidden" id="sort_type_hidden" value="alphabetAsc">
                                        {{-- <input type="hidden" name="page_hidden" id="page_hidden" value="1"> --}}

                                        <a href="" id="list_view_button" class="switcher change-view-btn lde"><i class="fa fa-th-list"></i></a>
                                        <a href="" id="grid_view_button" class="switcher change-view-btn active-view-btn"><i class="fa fa-th-large"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Block heading end -->

                        @include('trainers_sort')

                    </div>
                    <aside class="col-lg-3 col-md-12 car">
                        <div class="widget">
                            <form action="{{route('user.search')}}" method="post">
                                <!-- Search Fields -->
                                <div class="main-search-field pt-0">
                                    <h5 class="title">Wyszukaj trenera</h5>

                                        @csrf
                                        <div class="col-lg-12 no-pds mb-4">
                                            <div class="at-col-default-mar">
                                                <input class="at-input" type="search" name="city" placeholder="Wpisz miasto..." value="{{ old('city') }}">
                                            </div>
                                        </div>
                                        <div class="at-col-default-mar mb-4">
                                            <select class="div-toggle" data-target=".my-info-1" name="ocena">
                                                <option value="0" data-show=".acitveon" selected>Minimalna ocena</option>
                                                <option value="1" data-show=".one">1 gwiazdka</option>
                                                <option value="2" data-show=".two">2 gwaizdki</option>
                                                <option value="3" data-show=".three">3 gwiazdki</option>
                                                <option value="4" data-show=".four">4 gwiazdki</option>
                                                <option value="5" data-show=".five">5 gwiazdek</option>
                                            </select>
                                        </div>
                                </div>
                                <!-- Checkboxes -->
                                <div class="fl-wrap filter-tags">
                                    <h6>Rodzaje treningów</h6>
                                    @foreach($allDisciplines ?? '' as $discipline)
                                        <div class="filter-tags-wrap mt-3 checkboxes-list bg-white">
                                            <label for="{{ $discipline->name }}" class="w-100 p-2">
                                                <input
                                                    class="mt-0 aaa"
                                                    style="display:none;"
                                                    type="checkbox"
                                                    name="disciplines[]"
                                                    id="{{ $discipline->name }}"
                                                    value="{{ $discipline->id }}"
                                                    {{ (is_array(old('disciplines')) && in_array($discipline->id, old('disciplines'))) ? ' checked' : '' }}
                                                >
                                                <img
                                                    class="discipline-icon"
                                                    src="{{asset("/images/$discipline->name.png")}}"
                                                    alt="{{ $discipline->name }}"
                                                >
                                                {{ $discipline->name }}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-lg-12 no-pds">
                                    <div class="at-col-default-mar">
                                        <button class="btn btn-default hvr-bounce-to-right" type="submit">Szukaj</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </aside>
                </div>

                {{-- <div class="row">
                    <div class="col-12 d-flex justify-content-left">
                        {{ $matchedTrainers->links() }}
                    </div>
                </div> --}}

            </div>
        </section>
    {{-- @endif --}}
    <!-- END SECTION LISTINGs GRID -->
@endsection

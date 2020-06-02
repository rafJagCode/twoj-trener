@section('trainer-dashboard-business-card-css')
<link href="{{ asset('/css/trainer_dashboard_business_card.css') }}" rel="stylesheet">
@endsection
<div class="modal fade" id="business-card-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title center" id="busines-card-modal-label">Twoja Wizytówka</h5>
                <a type="button" data-dismiss="modal"><i class="far fa-times-circle  fa-2x modal-icon"></i></a>
            </div>
            <div class="modal-body">

                <form action="submit" method="POST">
                    <div class="form-row mb-3">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Imię">
                        </div>
                    </div>
                    <div class="form-row mb-3">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Nazwisko">
                        </div>
                    </div>

                    <div class="form-row mb-3">
                        <div class="col">
                            <select id="citySelector" class="form-control selectpicker" data-live-search="true"
                                data-style="btn-selection" title="Lokalizacja">

                                @foreach($cities as $city)
                                    <option class="city-choice" data-tokens="{{ $city }}">{{ $city }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-row mb-3">
                        <div class="col">
                            <input type="tel" class="form-control" placeholder="Numer telefonu">
                        </div>
                    </div>

                    <div class="row text-center disciplines">
                        @foreach($disciplines as $discipline)

                            <div class="discipline col-md-6 col-sm-12 text-left">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input my-checkbox"
                                        id="{{ $discipline }}">
                                    <label class="custom-control-label my-label" for="{{ $discipline }}"> <p>{{ $discipline }}</p> <img
                                            class="discipline-icon"
                                            src="{{asset("images/$discipline.png")}}"
                                            alt="{{ $discipline }}"></label>
                                </div>
                            </div>

                        @endforeach
                    </div>


                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
                <button type="submit" class="btn btn-rounded btn-orange">Zapisz zmiany</button>
            </div>
        </div>
    </div>
</div>

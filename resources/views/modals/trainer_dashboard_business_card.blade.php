@section('trainer-dashboard-business-card-css')
<link href="{{ asset('/css/trainer_dashboard_business_card.css') }}" rel="stylesheet">
@endsection
<div class="modal fade" id="business-card-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title center" id="busines-card-modal-label">Twoja Wizytówka</h5>
            </div>
            <div class="modal-body">

                <form>
                    <div class="form-row mb-3">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Imię">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Nazwisko">
                        </div>
                    </div>
                    <div class="form-row mb-3">
                        <div class="col">
                            <select id="citySelector" class="form-control selectpicker" data-live-search="true"
                                data-style="btn-selection">
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
                    
                        @foreach(array_chunk($disciplines, 3) as $chunk)
                            <div class="row text-center">
                                @foreach($chunk as $discipline)
                                    <div class="col-md-4 text-left">
                                        <div class="custom-control custom-checkbox ">
                                            <input type="checkbox" class="custom-control-input my-checkbox"
                                                id="{{$discipline}}">
                                            <label class="custom-control-label my-label"
                                                for="{{$discipline}}">{{ $discipline }}</label>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach
                    

                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
                <button type="button" class="btn btn-rounded btn-orange">Zapisz zmiany</button>
            </div>
        </div>
    </div>
</div>

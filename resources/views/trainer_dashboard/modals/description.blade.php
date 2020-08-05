@section('description-editor-js')
    <script type="text/javascript">
        $('#description-form').summernote({
        minHeight: 300,
        toolbar: [
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['font', ['strikethrough']],
            ['fontsize', ['fontsize']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
        ]
         });
        $('#description-form').summernote('code', '{{$description ?? ''}}');
    </script>
@endsection

<div class="modal fade" id="description-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title center" id="busines-card-modal-label">Twój Opis</h5>
                <a type="button" data-dismiss="modal"><i class="far fa-times-circle  fa-2x modal-icon"></i></a>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('trainer-dashboard.updateDescription') }}"
                      enctype="multipart/form-data">
                    {{--                <form method="POST" action="submit" enctype="multipart/form-data">--}}
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <textarea class="form-control" name="description" id="description-form" rows="3">
                        </textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-rounded btn-orange">Zapisz zmiany</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

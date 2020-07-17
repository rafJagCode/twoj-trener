<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"

          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

    <script src="https://kit.fontawesome.com/ec51452c3d.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Exo:wght@400;700&display=swap" rel="stylesheet">
    <link href="{{ asset('/css/top_navbar.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/footer.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">

    @yield('trainer-dashboard-css')
    @yield('trainer-dashboard-business-card-css')
    @yield('trainer-page-css')
    <title>@yield('title')</title>
</head>

<body>
    @include('top_navbar')
    @yield('trainer-dashboard')
    @yield('trainer-page')
    @include('footer')

    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"

        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">

</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
@yield('business-card-js')
<script type="text/javascript">
    let src;
    let displayedImg;
    $(".show-photo").click((event) => {
        $("body").css("overflow", "hidden");
        let clickedBtn = $(event.target);
        displayedImg = clickedBtn.parents('.photo-link').find('.trainers-photo');
        console.log(displayedImg);
        src = displayedImg.attr("src");
        $("#big-photo").attr("src", src);
    });
    $('.gallery-arrow-right').click(() => {
        let lastPhoto = $('.photo-link').last().find('.trainers-photo');
        if (displayedImg.is(lastPhoto)) {
            displayedImg = $('.photo-link').first().find('.trainers-photo');
        } else {
            displayedImg = displayedImg.closest('.photo-link').next().find('.trainers-photo');
        }
        src = displayedImg.attr("src");
        $("#big-photo").attr("src", src);
    });
    $('.gallery-arrow-left').click(() => {
        let firstPhoto = $('.photo-link').first().find('.trainers-photo');
        if (displayedImg.is(firstPhoto)) {
            displayedImg = $('.photo-link').last().find('.trainers-photo');
        } else {
            displayedImg = displayedImg.closest('.photo-link').prev().find('.trainers-photo');
        }
        src = displayedImg.attr("src");
        $("#big-photo").attr("src", src);
    });
    $('.upload-image-btn').click(() => {
        $('.upload-image-input').trigger('click');
    });
    $('.add-photo').click(() => {
        $('.upload-image-input').trigger('click');
    });
</script>
<script>
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

    $('#description-form').summernote('code', '{{$user->description ?? ''}}');
</script>

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
   
    @yield('description-editor-js')
    @yield('trainer-dashboard-gallery-js')
    @yield('trainer-page-gallery-js')

    @yield('closeup-js')
</body>

</html>
<script src="{{ asset('js/app.js') }}"></script>
<script>$('#business-card-modal-edit').on('show.bs.modal', function (event) {

        console.log('Modal Jest Otwarty');
        var button = $(event.relatedTarget) // Button that triggered the modal
        var firstName = button.data('myfirstName')
        var secondName = button.data('mysecondName')
        var city = button.data('myCity')
        var disciplines = button.data('myDisciplines')


        var modal = $(this)

        modal.find('.modal-body #firstName').val(firstName);
        modal.find('.modal-body #secondName').val(secondName);
        modal.find('.modal-body #city').val(city);
        modal.find('.modal-body #disciplines').val(disciplines);


    })
</script>

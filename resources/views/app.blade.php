<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/ec51452c3d.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Exo:wght@400;700&display=swap" rel="stylesheet">
    <link href="{{ asset('/css/top_navbar.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/footer.css') }}" rel="stylesheet">
    @yield('trainer-dashboard-css')
    @yield('trainer-dashboard-business-card-css')
    <title>@yield('title')</title>
</head>

<body>
  @include('top_navbar')
  @yield('trainer-dashboard')
  @include('footer')



  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
  </script>
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

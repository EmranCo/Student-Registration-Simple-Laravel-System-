
@if ($message = session('success'))
<script>
        swal({
            title: "Congratulations",
            text: "{{$message}}",
            icon: "success",
            button: "OK",
        });
    </script>
@endif

@if ($message = session('error'))
<script>
        swal({
            title: "Uncompleted Operation",
            text: "{{$message}}",
            icon: "error",
            button: "Retry",
        });
    </script>
@endif
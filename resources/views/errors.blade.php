@if ($errors->any())
@php
$message = "";
@endphp
@foreach ($errors->all() as $error)
{{$message .= $error . "<br>" ; }}
@endforeach
<script>
        swal({
            title: "Uncompleted Operation",
            text: "{{$message}}",
            icon: "error",
            button: "Retry",
        });
    </script>
@endif
@if(session()->has('success'))
    <script>
        Swal.fire({
            position: 'top-start',
            icon: 'success',
            title: '{{session()->get('success')}}',
            showConfirmButton: false,
            timer: 2300
        })
    </script>
@endif
@if(session()->has('error'))
    <script>
        Swal.fire({
            position: 'top-start',
            icon: 'error',
            title: '{{session()->get('error')}}',
            showConfirmButton: false,
            timer: 2300
        })
    </script>
@endif
@if(session()->has('info'))
    <script>
        Swal.fire({
            position: 'top-start',
            icon: 'info',
            title: '{{session()->get('info')}}',
            showConfirmButton: false,
            timer: 2300
        })
    </script>
@endif

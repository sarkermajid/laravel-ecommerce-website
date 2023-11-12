<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>

<script>

    // category status change
    $(document).ready(function(){
        $(document).on('click','.category-status',function(e){
            e.preventDefault();
            let category_id      = $(this).data('id');
            $.ajax({
                url: "{{ route('category.status') }}",
                method: 'GET',
                data: { category_id: category_id},
                success:function(res){
                    $('.table').load(location.href+' .table');
                    if(res.status == 'success'){
                        Command: toastr["success"]("Product status change successfully")
                            toastr.options = {
                            "closeButton": true,
                            "debug": false,
                            "newestOnTop": false,
                            "progressBar": false,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": false,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "5000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                            }
                    }
                },
            })
        })
    })
</script>

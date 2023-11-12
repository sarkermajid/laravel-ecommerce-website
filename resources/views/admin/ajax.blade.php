{{-- ajax setup --}}
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>

<script>

    // Category status change
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
                        Command: toastr["success"]("Category status change successfully")
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

    // Category delete
    $(document).ready(function(){
        $(document).on('click','.category-delete',function(e){
            e.preventDefault();
            let category_id      = $(this).data('id');
            if(confirm('Are you sure ? you want to delete this category ?')){
                $.ajax({
                    url: "{{ route('category.delete') }}",
                    method: 'post',
                    data: { category_id: category_id},
                    success:function(res){
                        $('.table').load(location.href+' .table');
                        if(res.status == 'success'){
                            Command: toastr["success"]("Product delete successfully")
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
                        }else if(res.status == 'error'){
                            Command: toastr["error"]("You cannot delete this category")
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
            }
        })
    })

    // Brand status change
    $(document).ready(function(){
        $(document).on('click','.brand-status',function(e){
            e.preventDefault();
            let brand_id      = $(this).data('id');
            $.ajax({
                url: "{{ route('brand.status') }}",
                method: 'GET',
                data: { brand_id: brand_id},
                success:function(res){
                    $('.table').load(location.href+' .table');
                    if(res.status == 'success'){
                        Command: toastr["success"]("Brand status change successfully")
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

    // Brand delete
    $(document).ready(function(){
        $(document).on('click','.brand-delete',function(e){
            e.preventDefault();
            let brand_id      = $(this).data('id');
            if(confirm('Are you sure ? you want to delete this Brand ?')){
                $.ajax({
                    url: "{{ route('brand.delete') }}",
                    method: 'post',
                    data: { brand_id: brand_id},
                    success:function(res){
                        $('.table').load(location.href+' .table');
                        if(res.status == 'success'){
                            Command: toastr["success"]("Brand delete successfully")
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
                        }else if(res.status == 'error'){
                            Command: toastr["error"]("You cannot delete this Brand")
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
            }
        })
    })

</script>

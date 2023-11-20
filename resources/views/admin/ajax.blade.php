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

    // Product status change
    $(document).ready(function(){
        $(document).on('click','.product-status',function(e){
            e.preventDefault();
            let product_id      = $(this).data('id');
            $.ajax({
                url: "{{ route('product.status') }}",
                method: 'GET',
                data: { product_id: product_id},
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

    // Product delete
    $(document).ready(function(){
        $(document).on('click','.product-delete',function(e){
            e.preventDefault();
            let product_id      = $(this).data('id');
            if(confirm('Are you sure ? you want to delete this Product ?')){
                $.ajax({
                    url: "{{ route('product.delete') }}",
                    method: 'post',
                    data: { product_id: product_id},
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

    // User delete
    $(document).ready(function(){
        $(document).on('click','.user-delete',function(e){
            e.preventDefault();
            let user_id      = $(this).data('id');
            if(confirm('Are you sure ? you want to delete this User ?')){
                $.ajax({
                    url: "{{ route('user.admin.delete') }}",
                    method: 'post',
                    data: { user_id: user_id},
                    success:function(res){
                        $('.table').load(location.href+' .table');
                        if(res.status == 'success'){
                            Command: toastr["success"]("User delete successfully")
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

    // Blog category status change
    $(document).ready(function(){
        $(document).on('click','.blog-category-status',function(e){
            e.preventDefault();
            let category_id      = $(this).data('id');
            $.ajax({
                url: "{{ route('blog.category.status') }}",
                method: 'GET',
                data: { category_id: category_id},
                success:function(res){
                    $('.table').load(location.href+' .table');
                    if(res.status == 'success'){
                        Command: toastr["success"]("Blog category status change successfully")
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

    // Blog category delete
    $(document).ready(function(){
        $(document).on('click','.blog-category-delete',function(e){
            e.preventDefault();
            let category_id      = $(this).data('id');
            if(confirm('Are you sure ? you want to delete this blog category ?')){
                $.ajax({
                    url: "{{ route('blog.category.delete') }}",
                    method: 'post',
                    data: { category_id: category_id},
                    success:function(res){
                        $('.table').load(location.href+' .table');
                        if(res.status == 'success'){
                            Command: toastr["success"]("Blog category delete successfully")
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

    // Blog  status change
    $(document).ready(function(){
        $(document).on('click','.blog-status',function(e){
            e.preventDefault();
            let blog_id      = $(this).data('id');
            $.ajax({
                url: "{{ route('blog.status') }}",
                method: 'GET',
                data: { blog_id: blog_id},
                success:function(res){
                    $('.table').load(location.href+' .table');
                    if(res.status == 'success'){
                        Command: toastr["success"]("Blog  status change successfully")
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

    // Blog delete
    $(document).ready(function(){
        $(document).on('click','.blog-delete',function(e){
            e.preventDefault();
            let blog_id      = $(this).data('id');
            if(confirm('Are you sure ? you want to delete this blog ?')){
                $.ajax({
                    url: "{{ route('blog.delete') }}",
                    method: 'post',
                    data: { blog_id: blog_id},
                    success:function(res){
                        $('.table').load(location.href+' .table');
                        if(res.status == 'success'){
                            Command: toastr["success"]("Blog delete successfully")
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

    // Message delete
    $(document).ready(function(){
        $(document).on('click','.message-delete',function(e){
            e.preventDefault();
            let message_id      = $(this).data('id');
            if(confirm('Are you sure ? you want to delete this message ?')){
                $.ajax({
                    url: "{{ route('admin.contact.message.delete') }}",
                    method: 'post',
                    data: { message_id: message_id},
                    success:function(res){
                        $('.table').load(location.href+' .table');
                        if(res.status == 'success'){
                            Command: toastr["success"]("Message delete successfully")
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

    // Order Status change for Pending
    $(document).ready(function(){
        $(document).on('click','.pending',function(e){
            e.preventDefault();
            let order_id      = $(this).data('id');
            if(confirm('Are you sure ? you want to change this order status ?')){
                $.ajax({
                    url: "{{ route('orders.status.pending') }}",
                    method: 'get',
                    data: { order_id: order_id},
                    success:function(res){
                        $('.table').load(location.href+' .table');
                        if(res.status == 'success'){
                            Command: toastr["success"]("Order status change successfully")
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

    // Order Status change for ontheway
    $(document).ready(function(){
        $(document).on('click','.ontheway',function(e){
            e.preventDefault();
            let order_id      = $(this).data('id');
            if(confirm('Are you sure ? you want to change this order status ?')){
                $.ajax({
                    url: "{{ route('orders.status.ontheway') }}",
                    method: 'get',
                    data: { order_id: order_id},
                    success:function(res){
                        $('.table').load(location.href+' .table');
                        if(res.status == 'success'){
                            Command: toastr["success"]("Order status change successfully")
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

    // Order Status change for Completed
    $(document).ready(function(){
        $(document).on('click','.completed',function(e){
            e.preventDefault();
            let order_id      = $(this).data('id');
            if(confirm('Are you sure ? you want to change this order status ?')){
                $.ajax({
                    url: "{{ route('orders.status.completed') }}",
                    method: 'get',
                    data: { order_id: order_id},
                    success:function(res){
                        $('.table').load(location.href+' .table');
                        if(res.status == 'success'){
                            Command: toastr["success"]("Order status change successfully")
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

    // Order Status change for Completed
    $(document).ready(function(){
        $(document).on('click','.cancel',function(e){
            e.preventDefault();
            let order_id      = $(this).data('id');
            if(confirm('Are you sure ? you want to change this order status ?')){
                $.ajax({
                    url: "{{ route('orders.status.cancel') }}",
                    method: 'get',
                    data: { order_id: order_id},
                    success:function(res){
                        $('.table').load(location.href+' .table');
                        if(res.status == 'success'){
                            Command: toastr["success"]("Order status change successfully")
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

    // Promo status change
    $(document).ready(function(){
        $(document).on('click','.promo-status',function(e){
            e.preventDefault();
            let promo_id      = $(this).data('id');
            $.ajax({
                url: "{{ route('promo.status') }}",
                method: 'GET',
                data: { promo_id: promo_id},
                success:function(res){
                    $('.table').load(location.href+' .table');
                    if(res.status == 'success'){
                        Command: toastr["success"]("Promo status change successfully")
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

    //  Promo delete
    $(document).ready(function(){
        $(document).on('click','.promo-delete',function(e){
            e.preventDefault();
            let promo_id      = $(this).data('id');
            if(confirm('Are you sure ? you want to delete this Promo ?')){
                $.ajax({
                    url: "{{ route('promo.delete') }}",
                    method: 'post',
                    data: { promo_id: promo_id},
                    success:function(res){
                        $('.table').load(location.href+' .table');
                        if(res.status == 'success'){
                            Command: toastr["success"]("Promo delete successfully")
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

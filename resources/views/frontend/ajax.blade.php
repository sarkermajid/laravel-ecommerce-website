{{-- ajax setup --}}
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>

<script>


    $(document).ready(function(){
        // load cart count function call
        loadCartCount();

        // addtocart ajax functionality
        $('.addToCart').click(function(e){
            e.preventDefault();
            var product_id = $(this).closest('.product_data').find('.product_id').val();
            var product_qty = $(this).closest('.product_data').find('.qty_input').val();

            $.ajax({
                url: "{{ route('addToCart') }}",
                method: 'post',
                data:{
                    product_id: product_id,
                    product_qty: product_qty
                },
                success: function(res){
                    if(res.status == 'success'){
                            Command: toastr["success"]("Cart added successfully")
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
                            Command: toastr["error"]("Already this product added to cart")
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
                }
            })
        })

        // directaddtocart ajax functionality
        $('.directAddToCart').click(function(e){
            e.preventDefault();
            var product_id = $(this).data('id');
            let product_qty = 1;
            $.ajax({
                url: "{{ route('directAddToCart') }}",
                method: 'post',
                data:{
                    product_id: product_id,
                    product_qty: product_qty
                },
                success: function(res){
                    if(res.status == 'success'){
                            Command: toastr["success"]("Cart added successfully")
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
                            Command: toastr["error"]("Already this product added to cart")
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
                }
            })
        })

        // remove addtocart ajax functionality
        $('.remove_cart').click(function(e){
            e.preventDefault();
            let cart_id = $(this).data('id');
            $.ajax({
                url : "{{ route('cart.delete') }}",
                method: "POST",
                data: { cart_id: cart_id},
                success:function(res){
                    if(res.status == 'success'){
                        window.location.reload();
                    }
                }
            })
        })

        // cart product increment button ajax functionality
        $('.inc').click(function(e){
            e.preventDefault();
            var product_id = $(this).data('id');
            $.ajax({
                url : "{{ route('cart.update.inc') }}",
                method: "POST",
                data: { product_id: product_id},
                success:function(res){
                    window.location.reload();
                    if(res.status == 'error'){
                            Command: toastr["error"]("You cannot select more than 10 products")
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
                }
            })
        })

        // cart product decrement button ajax functionality
        $('.dec').click(function(e){
            e.preventDefault();
            var product_id = $(this).data('id');
            $.ajax({
                url : "{{ route('cart.update.dec') }}",
                method: "POST",
                data: { product_id: product_id},
                success:function(res){
                    window.location.reload();
                    if(res.status == 'error'){
                            Command: toastr["error"]("You cannot select negative quantity")
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
                }
            })
        })

         // cart count
        function loadCartCount(){
            $.ajax({
            'url' : "{{ route('cart.count') }}",
            'method' : 'GET',
            success: function(res){
                console.log(res.cartCount);
                $('.cart-count').html('0');
                $('.cart-count').html(res.cartCount);
            }
        })}

    })



</script>

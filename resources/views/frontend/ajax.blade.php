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
        // load cart count and wishlist function call
        loadCartCount();
        loadWishlistCount();

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
                    loadCartCount();
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
                        }else if(res.status == 'info'){
                            Command: toastr["error"]("Please continue with Register/Login")
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
                    loadCartCount();
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
                        }else if(res.status == 'info'){
                            Command: toastr["error"]("Please continue with Register/Login")
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
                $('.cart-count').html('0');
                $('.cart-count').html(res.cartCount);
            }
        })}

        // addtowishlist ajax functionality
        $('.addToWishlist').click(function(e){
            e.preventDefault();
            var product_id = $(this).data('id');

            $.ajax({
                url : "{{ route('wishlist.add') }}",
                method : 'POST',
                data : {product_id : product_id},
                success: function(res){
                    loadWishlistCount();
                    if(res.status == 'success'){
                            Command: toastr["success"]("Wishlist added successfully")
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
                            Command: toastr["error"]("Already this product have wishlist")
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
                        }else if(res.status == 'info'){
                            Command: toastr["error"]("Please continue with Register/Login")
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

        // remove wishlist ajax functionality
        $('.wishlist-delete').click(function(e){
            e.preventDefault();
            var wishlist_id = $(this).data('id');

            $.ajax({
                url : "{{ route('wishlist.delete') }}",
                method: "POST",
                data: {wishlist_id:wishlist_id},
                success:function(res){
                    if(res.status == 'success'){
                        window.location.reload();
                    }
                }
            })
        })

        // wishlist count
        function loadWishlistCount(){
            $.ajax({
            'url' : "{{ route('wishlist.count') }}",
            'method' : 'GET',
            success: function(res){
                $('.wishlist-count').html('0');
                $('.wishlist-count').html(res.wishListCount);
            }
        })}

        // price range search ajax functionality
        $('.ui-slider-handle').on('change',function(){
            alert('hi')
        })

    })



</script>

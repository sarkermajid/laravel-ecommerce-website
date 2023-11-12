{{-- ajax setup --}}
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>

<script>

    // addtocart ajax function
    $(document).ready(function(){
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
    })


    // directaddtocart ajax function
    $(document).ready(function(){
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
    })


</script>

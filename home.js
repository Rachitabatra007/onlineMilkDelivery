$(document).ready(function () {
    var cart;
    loadSubcategory(1);
    function loadSubcategory (parent_id) {
        $.ajax({
            url: './load-subcategory.php',
            type: 'GET',
            data: {
                parent_id: parent_id
            },
            success: function(data) {
                $('.subcategory').append(data);
            }
        });
    }

    $('input[type=radio][name=radio2]').change(function() {
        $('.subcategory').text('');
        var parent_id = this.value;
        loadSubcategory(parent_id);
    });
    function applyClickEvent() {
        $("#result").text("");
        var category = $("input[name='radio2']:checked").val();
        var subCategory = [];
        $.each($("input[name='subcategory']:checked"), function(){
            subCategory.push($(this).val());
        });
        $.ajax({
            url: './get-products.php',
            type: 'GET',
            data: {
                category: category,
                subCategory: subCategory
            },
            success: function (data) {
                var data = JSON.parse(data);
                for (var i = 0 ; i < data.length ; i++) {
                    if(data[i] != false) {
                        $("#result").append(createProductCard(JSON.parse(data[i])));
                    }
                }
            }
        });
    }
    $('#apply').on('click', function() {
        applyClickEvent();
    });
    function createProductCard(data) {
        return $("<div>", {
            class : "card",
            style : "width : 18rem;",
            real_product_id: data.real_product_id
        }).append(
            $("<img>", {
                class : "card-img-top",
                src : data.image,
                alt : "card image cap"
            })
        ).append(
            $("<div>", {
                class : "card-body"
            }).append(
                $("<h5>", {
                    class : "card-title",
                    text : data.product_name
                })
            ).append(
                $("<p>", {
                    class : "card-text",
                    text : data.product_description
                })
            )
        ).append(
            $("<ul>", {
                class : "list-group list-group-flush"
            }).append(
                $("<li>", {
                    class : "list-group-item",
                    text : "quantity : "+data.quantity+" "+data.units
                })
            ).append(
                $("<li>", {
                    class : "list-group-item",
                    text : "price : "+data.price_per_unit
                })
            )
        ).append(
            $("<div>", {
                class : "card-body",
                style : "text-align : center;display: flex;justify-content:center;align-items:end;"
            }).append(
                $("<a>", {
                    class : "card-link add",
                    text : "add",
                    real_product_id: data.real_product_id
                })
            ).append(
                $("<span>", {
                    class : "card-link",
                    text : "0"
                })
            ).append(
                $("<a>", {
                    class : "card-link remove",
                    text : "remove",
                    real_product_id: data.real_product_id
                })
            )
        )
    }
    function addProductToCart(real_product_id) {
        $.ajax({
            type: 'GET',
            url: './add-product-to-cart.php',
            data: {
                real_product_id : real_product_id
            },
            success: function (data) {
                cart = JSON.parse(data);
            }
        });
    }
    function removeProductFromCart (real_product_id) {
        $.ajax({
            type: 'GET',
            url: './remove-product-from-cart.php',
            data: {
                real_product_id: real_product_id
            },
            success: function (data) {
                cart = JSON.parse(data);
            }
        });
    }
    $('#result').on("click", ".card .card-body .add", function () {
        var real_product_id = $(this).attr("real_product_id");
        addProductToCart(real_product_id);
    });
    $('#result').on("click", ".card .card-body .remove", function () {
        var real_product_id = $(this).attr("real_product_id");
        if(cart.hasOwnProperty(''+real_product_id))
            removeProductFromCart(real_product_id);
    });
});

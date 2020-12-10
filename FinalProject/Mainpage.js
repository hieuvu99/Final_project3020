picArray = ["vsmart-joy-3.jpg","vsmart-star-3.jpg","vsmart-star-4.jpg"]
$(document).ready(function () {

    $(".small-image").click(function (e) { 
        e.preventDefault();
        $("#Choose").attr("src", this.src);
    });
    $("#color").change(function (e) { 
        e.preventDefault();
        $.ajax({
            type: "GET",
            url: "Stock.php",
            data: $(this).serialize(),
            success: function (response) {
                var nextCapacity,capacity;
                capacity = response.split(', ');
                $("#capacity").empty()
                for (let index = 0; index < capacity.length; index++) {
                    nextCapacity = capacity[index];
                    $("#capacity").append(
                        $('<option></option>').val( nextCapacity).html(nextCapacity)
                    );
                }
            },
            error: function () {
                alert("error");
            }
        });
    });
    $("#cart").click(function (e) { 
        e.preventDefault();
        document.location.href = 'Order.php';
    });
    $("#addBtn").submit(function (e) { 
        e.preventDefault();
        $.ajax({
            type: "GET",
            url: "Order.php",
            data: $(this).serialize()   ,
            success: function (response) {
                document.location.href = 'Order.php';
            }
        });
    });
    $("#searchbar").on("input",function (e){ 
        e.preventDefault();
        $.ajax({
            type: "GET",
            url: "searchbar.php",
            data: $(this).serialize(),
            success: function(response) {
                let suggestion = response.split(' , ');
                $("#searchbar").autocomplete({
                    source: suggestion,
                    appendTo: $("#searchbox")
                  });
            }
        });
        
    });
});
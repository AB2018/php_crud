$(document).on("click", "#delete_multiple_product", function() {
    var user = [];
    $(".user_checkbox:checked").each(function() {
        user.push($(this).data('user-id'));
    });

    // var selected_values = user.join(",");
    //       //  console.log(selected_values);
    // $.ajax({
    //     type: "POST",
    //     url: "deleteProduct.php",
    //     contentType: "application/json",
    //     data:{
    //         type: 1,						
    //         id : selected_values
    //     },
    //     success: function(response) {
    //         console.log(response);
    //         // var ids = response.split(",");
    //         // for (var i=0; i < ids.length; i++ ) {	
    //         //     $("#"+ids[i]).remove(); 
                
    //         // }
            
                
            
    //     } 
    // }); 

    if(user.length <=0) {
        alert("Please select records."); 
    } 
    else { 
        Message = "Are you sure you want to delete "+(user.length>1?"these":"this")+" row?";
        var checked = confirm(Message);
        if(checked == true) {
            var selected_values = user.join(",");
          //  console.log(selected_values);
            $.ajax({
                type: "POST",
                url: "deleteProduct.php",
                data:{
                    type: 1,						
                    id : selected_values
                },
                success: function(response) {
                    window.location.reload();
                    
                } 
            }); 
        }  
        
    } 
});

$(document).on("click", "#delete_multiple_category", function() {
    var user = [];
    $(".user_checkbox1:checked").each(function() {
        user.push($(this).data('id1'));
    });
    if(user.length <=0) {
        alert("Please select records."); 
    } 
    else { 
        Message = "Are you sure you want to delete "+(user.length>1?"these":"this")+" row?";
        var checked = confirm(Message);
        if(checked == true) {
            var selected_values = user.join(",");
            console.log(selected_values);
            $.ajax({
                type: "POST",
                url: "deleteCategory.php",
                cache:false,
                data:{
                    type: 2,						
                    id : selected_values
                },
                success: function(response) {
                    window.location.reload();
                } 
            }); 
        }  
    } 
});
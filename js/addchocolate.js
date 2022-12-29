function checkQty() {
		  
    
    var qty = document.getElementById("qty").value;
    var name = document.getElementById("name").value;
    var amount = 0;
    if (qty <= 0) {
        $("#check_qty").html('Enter valiid quantity');
    } 
    else if (name === "Mars"){
        $("#check_qty").html('');
        amount = qty*800
        $("#tot_price").html("Rs. "+amount+".00");
    }
    else if (name === "Snickers"){
        $("#check_qty").html('');
        amount = qty*900
        $("#tot_price").html("Rs. "+amount+".00");
    }
    else if (name === "KitKat"){
        $("#check_qty").html('');
        amount = qty*1000
        $("#tot_price").html("Rs. "+amount+".00");
    }
    else if (name === "Twix"){
        $("#check_qty").html('');
        amount = qty*600
        $("#tot_price").html("Rs. "+amount+".00");
    }
    else if (name === "Daily Milk"){
        $("#check_qty").html('');
        amount = qty*500
        $("#tot_price").html("Rs. "+amount+".00");
    }
    else if (name === "Bounty"){
        $("#check_qty").html('');
        amount = qty*700
        $("#tot_price").html("Rs. "+amount+".00");
    }
}
document.mainForm.onclick = function(){
    let price = document.querySelector('input[name = room_price]:checked').value;
    let result = document.getElementById("selected_room_price");
    let date_value = document.querySelector('#myDate').value;
    let date_result = document.getElementById("selected_date");
    date_result.innerHTML = date_value;
    console.log(date_result.innerHTML);
    result.innerHTML = price+"/months*";
    // console.log(result.innerHTML);

    

}

function changeText(){
    document.getElementById("apply-coupon").innerHTML = "Applied";
    document.getElementById("coupon-in-summary").innerHTML = "ROOMSOOMSAFENOI";

    let gstValue = document.getElementById("gst-value");
         let principle_value = document.querySelector("#principle-value").innerText;
   
         let x = Number(principle_value);
 
         let couponAmount = document.getElementById("couponAmount").innerText;
         let y = Number(couponAmount);
         let z = x - y ;
         let gst_Amount = (z * 18)/100;
         console.log(gst_Amount);
        document.getElementById("gst-value").textContent = gst_Amount;

         let a = z + gst_Amount;
   
         document.getElementById("total_payable_amount").textContent = a;
}

function sendAction(constant,id){
    $.post(`./inc/scripts.php?action=sendReq&id=${id}`,function(res){
        if(res == "Request Sent Successfully"){
            $('#requestBt').hide();
            $('#requestBt').parent().html('Request sent succesfully');
        }
    })
}



function makeLeaderAction(constant,id){
    $.post(`./inc/scripts.php?action=makeLeader&id=${id}`,function(res){
        if(res == "Request Sent Successfully"){

        //   alert("success");
            $('#makeLeader').hide();
            $('#makeLeader').parent().html('Successful');
        }
    })
}
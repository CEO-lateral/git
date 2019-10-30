$(document).ready(function(){    
   $('.table').append('<thead><tr><th scope="col">id</th><th scope="col">id_user</th><th scope="col">amount</th><th scope="col">image</th></tr></thead>');
    $('#showInput').click(function(){
        $('#inputs').show(600);        
    });
	$('#clear').click(function() {
       $('.table').empty();
       $('.table').append('<thead><tr><th scope="col">id</th><th scope="col">id_user</th><th scope="col">amount</th><th scope="col">image</th></tr></thead>');
        console.log("clear");
    });
	function table (wallets) {
                        var data = jQuery.parseJSON(JSON.stringify(wallets));
                        var html = '';
                        for (var i = 0; i < wallets.result.length; i++) {
                              html += '<tbody><tr><td>' + wallets.result[i].id + '</td><td>' + wallets.result[i].id_user + '</td><td>' + wallets.result[i].amount + '</td><td>' + wallets.result[i].image + '</td></tr></tbody>';
                        }
                        $('.upd').append(html);
          } 
    
$('.sortA').click(function(){
    $.ajax({
        url: 'https://k.qzo.su/api/wallets/viewUPDsortA', 
        type: 'GET',
        datatype: 'json',
        data: {},
        success:    function(data){
                    $('.table').empty();
                    $('.table').append('<thead><tr><th scope="col">id</th><th scope="col">id_user</th><th scope="col">amount</th><th scope="col">image</th></tr></thead>');
                    
                    table ( data);
                    console.log("Sort by ASC succsess");
                    }
        });
});
   
$('.sortD').click(function(){
    $.ajax({
        url: 'https://k.qzo.su/api/users/viewUPDsortD', 
        type: 'GET',
        datatype: 'json',
        data: {},
        success:    function(data){
                    
                    $('.table').empty();
                    $('.table').append('<thead><tr><th scope="col">id</th><th scope="col">id_user</th><th scope="col">amount</th><th scope="col">image</th></tr></thead>');
                    table ( data);
                    console.log("Sort by DESC succsess");
                    }
    });
});
    
    


});
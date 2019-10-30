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
	//$('.table').view(function(){
		$.ajax({
		url: 'https://k.qzo.su/api/wallets/viewWallets', 
        type: 'GET',
        datatype: 'json',
        data: {},
        success:
	function table (data) {
                        var data = jQuery.parseJSON(JSON.stringify(data));
                        var html = '';
                        for (var i = 0; i < data.result.length; i++) {
                              html += '<tbody><tr><td>' + data.result[i].id + '</td><td>' + data.result[i].id_user + '</td><td>' + data.result[i].amount + '</td><td>' + data.result[i].image + '</td></tr></tbody>';
                        }
                        $('.upd').append(html);
						console.log("data");
          } 
		});
		$('#showInput').click(function(){
			console.log("data222");
		function add (data) {
                        $('.upd').append(html);
          } 
		
		});
	 
    
$('.sortA').click(function(){
    $.ajax({
        url: 'https://k.qzo.su/api/wallets/viewWallets', 
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
        url: 'https://k.qzo.su/api/users/viewWallets', 
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
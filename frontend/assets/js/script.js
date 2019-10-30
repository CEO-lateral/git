$(document).ready(function(){    
    function rap(data){
		var data = jQuery.parseJSON(JSON.stringify(data));
		var html = '';
        for (var i = 0; i < data.result.length; i++){
        html += '<tbody><tr><td>' + data.result[i].id + '</td><td>' + data.result[i].id_user + '</td><td>' + data.result[i].amount + '</td><td>' + data.result[i].image + '</td></tr></tbody>';
		}
         $('.upd').append(html);				
	} 
    $('#showInput').click(function(){
        $('#inputs').show(600);        
    });
	$('#clear').click(function() {
       $('.table').empty();
       $('.table').append('<thead><tr><th scope="col">id</th><th scope="col">id_user</th><th scope="col">amount</th><th scope="col">image</th></tr></thead>');
       console.log("clear");
    });
		function update(){
			$('.table').empty();
			$('.table').append('<thead><tr><th scope="col">id</th><th scope="col">id_user</th><th scope="col">amount</th><th scope="col">image</th></tr></thead>'); 
		}
	function view(){
		$.ajax({
		url: 'https://k.qzo.su/api/wallets/viewWallets', 
        type: 'GET',
        datatype: 'json',
        data: {},
        success:
			function(data){
			update();
            rap(data);
			},
				error:  function() {
				alert("Ошибка");
				}
		});
	}
		display();
	$('#sortASC').click(function(){
		$.ajax({
		url: 'https://k.qzo.su/api/wallets/sortASC', 
		type: 'GET',
		datatype: 'json',
        data: {},
        success: 
			function(data){
                    update();                   
                    rap(data);
            }
		});
	});
	$('#sortDESC').click(function(){
		$.ajax({
        url: 'https://k.qzo.su/api/wallets/sortDESC', 
        type: 'GET',
        datatype: 'json',
        data: {},
        success:    
			function(data){
                    update();                   
                    rap(data);
            }
    });
});
	$('#add').click(function(){
        var id_user = $('#id_user').val();
        var amount = $('#amount').val();
        var image = $('#image').val();
        $('#id_user').val('');
        $('#amount').val('');
        $('#image').val('');
			$.ajax({
            url: 'https://k.qzo.su/api/wallets/addWallets', 
            type: 'GET',
            datatype: 'json',
            cache: false,
            contentType: false,
            data: {id_user: id_user, amount: amount, image: image},
            success: 
				function(data){
					update();
					view();    
				}
			});
    })
	$('#red').click(function(){
        var id_user = $('#id_user').val();
        var amount = $('#amount').val();
        var image = $('#image').val();
        $('#id_user').val('');
        $('#amount').val('');
        $('#image').val('');
			$.ajax({
            url: 'https://k.qzo.su/api/wallets/editWallets', 
            type: 'GET',
            datatype: 'json',
            cache: false,
            contentType: false,
            data: {id_user: id_user, amount: amount, image: image},
            success: 
				function(data){
					update();
					view();    
				}
			});
    })
$('#del').click(function(){
        var id_user = $('#id_user').val();
        var amount = $('#amount').val();
        var image = $('#image').val();
        $('#id_user').val('');
        $('#amount').val('');
        $('#image').val('');
			$.ajax({
            url: 'https://k.qzo.su/api/wallets/delWallets', 
            type: 'GET',
            datatype: 'json',
            cache: false,
            contentType: false,
            data: {id: id},
            success: 
				function(data){
					update();
					view();    
				}
			});
    })


});
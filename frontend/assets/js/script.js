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
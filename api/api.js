$(document).ready(function(){
    
    $.get('internship-data.json',function(data,status){
        $("#test").text(data[0].position);
    });
    
    
});


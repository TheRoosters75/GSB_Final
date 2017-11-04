function  getLesRegions(){
    $.ajax(
        {  
            type:"get",
            url:"getLesRegions",
           
             success:function(data)
            {
                $('#divRegions').empty();
                $('#divRegions').append(data);
            },
            error:function()
            {
                alert('vous avez fait une  erreur');
            }
        }
        );
}
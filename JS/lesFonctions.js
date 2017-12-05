function  getLesComposants(){
    $.ajax(
        {
            type:"get",
            url:"http://localhost/GSB/index.php/Ctrl_AccueilSF/getLesComposants",

            success:function(data)
            {
                $('#divComposants').empty();
                $('#divComposants').append(data);
            },
            error:function()
            {
                alert('vous avez fait une  erreur');
            }
        }
    );
}

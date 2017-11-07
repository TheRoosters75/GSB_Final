function  getLesRegions(){
    $.ajax(
        {  
            type:"get",
            url:"http://localhost/GSB/index.php/Ctrl_Accueil/getLesRegions",
           
             success:function(data)
            {
               
                $('#divRegions').append(data);
            },
            error:function()
            {
                alert('Erreur SQL');
            }
        }
        );
}

function  MAJRegion(){
    $.ajax(
        {  
            type:"get",
            url:"http://localhost/GSB/index.php/Ctrl_Accueil/MAJRegion",
           data:"codeR="+$('#codeRegion').val()+"&codeS="+$('#codeSecteur').val()+"&nomR="+$('#nomRegion').val(),
             success:function(data)
            {
               alert("Modification ok");
                //$('#divRegions').append(data);
            },
            error:function()
            {
                alert('Erreur MODIFICATION');
            }
        }
        );
}
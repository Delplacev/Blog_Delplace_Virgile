$(document).ready(function() {
  $("#addNews").click(function(){
    //  e.preventDefault();

    $.ajax({
      url : 'assets/include/serviceWeb.php?action=addNews', // La ressource ciblée
      type : 'POST', // Le type de la requête HTTP.
      data: {email :  $("#emailAddr").val()},
      success : function(code_html, statut){ // success est toujours en place, bien sûr !
        alert(code_html);
      },
      error : function(resultat, statut, erreur){
        alert(erreur);
      }
    })
  })

});

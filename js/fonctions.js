$('document').ready(chargement);

function chargement() {
    //   fonction qui arme le bouton dans la page
    $('#bt_chat').click(function () {
//        alert("ici !! ");
        $.post("chat_trt.php", // appelle la page d'enregistrement
                $("#form_chat").serialize(), // passe les donnes du form à la page d'enregistrement
                $("#form_chat #msg").val('')); // vide le champ de saisie
    });

    setInterval(recupMessages, 1000);

}

// fonction pour afficher les msgs
function recupMessages()
{
    $.getJSON('recupMsg.php', callBackAfficheMsg);
}

function callBackAfficheMsg(data)
{
//    alert('cbmsg');
    var result = '';

    $.each(data, function (cpt, msg) {
//        alert('pseudo ' + msg['pseudo']);
        result += msg['date'] + ' - ' + msg['pseudo'] + ' : ' + msg['message'] + '\n';
    });

    $('#zoneChat').val(result);
}



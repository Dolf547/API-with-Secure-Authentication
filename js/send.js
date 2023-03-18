function send() {
    var user = $("#user").val() ? $("#user").val() : '';
    var pass = $("#password").val() ? $("#password").val() : '';


    //criptografar a senha
    var result = "";
    if (pass.length > 0) {
        for (let i = 0; i < pass.length; i++) {
            const asciiCode = pass.charCodeAt(i);
            result += (asciiCode * 57) + "|";
        }
        var pass = btoa(result)
    } else {
        var pass = '';
    }


    find = false
    $.ajax({
        type: "POST",
        url: "http://localhost/desafiologico/endpoint/endpoint.php",
        success: function (data) {
          
                for (let k = 0; k < data.length; k++) {
               
                        if (data[k].username == user && data[k].password == pass) {
                            // usuário e senha encontrados
                        //    console.log('encontrou!')
                            passDescript = decryptPassword(data[k].password)
                            //console.log(decryptPassword(data[k].password))


                            $("#userTd").text(data[k].username)
                            $("#pass").text(data[k].password)
                            $("#passDescript").text(passDescript)
                            $('#tableDiv').show();
                            find = true;
                            break;
                        } else {
                            find = false;
                        }
                }
            

            if (find != true) {
                alert('Usuário não encontrado!')
            }

        },
        error: function (response) {
            alert('erro');
        }
    });

}



function decryptPassword(encryptedPassword) {
    const asciiArray = atob(encryptedPassword).split("|").slice(0, -1);
    let result = "";
    for (const ascii of asciiArray) {
        result += String.fromCharCode(ascii / 57);
    }
    return result;
}

function newRequest() {
    $("#user").val('')
    $("#password").val('')
    $('#tableDiv').hide();
}

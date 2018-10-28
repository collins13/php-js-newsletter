function validate() {
    if (window.XMLHttpRequest) {
        var xmlhttp = new window.XMLHttpRequest();
    } else {
        xmlhttp = new ActiveXObject('microsoft', XMLHTTP);
    }

    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readystate == '4' && xmlhttp.status == '200') {
            document.getElementById('error').innerHTML = xmlhttp.responseText;
        }
    }
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;

    var parameters = 'name=' + name + '&email=' + email;

    xmlhttp.open('POST', 'scripts/signup_scripts.php', true);
    xmlhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    xmlhttp.send(parameters);
}
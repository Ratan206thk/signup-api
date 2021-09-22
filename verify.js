function verify() {
    var pwd = document.getElementById("pass").value.trim();
    var cnpwd = document.getElementById('confirm').value.trim();
    var uname = document.getElementById('name').value.trim();
    var text = document.getElementById("text").value.trim();
    var mobile = document.getElementById("mobile").value.trim();

    if (uname === "") {
        document.getElementById('username').innerHTML = "*Enter the Name";
        document.getElementById('username').style.paddingTop = "3px";
        return false;
    }
    var regx = /^([a-z 0-9\._-]+)@([a-z0-9-]+).([a-z.]{2,8})$/;
    if (!regx.test(text)) {
        document.getElementById("email").innerHTML = "*Enter Valid ID";
        return false;

    }
    var phoneno = /^\d{10}$/;
    if(!mobile.match(phoneno)){
        document.getElementById("num").innerHTML = "*Enter Valid Number";
        return false;
    }
    if (pwd === "") {
        document.getElementById('password').innerHTML = "*Enter the Password";
        return false;
    }

    if (cnpwd === "") {
        document.getElementById('conpassword').innerHTML = "*Enter the Confirm Password";
        return false;
    }


    if (pwd === cnpwd) {
        if (pwd.length < 6) {
            alert("Password Too Short. Minimum 6 Characters Required");
            return false;
        }
    } else if (pwd != cnpwd) {
        alert("Password Didn't Match");
        return false;
    } else {
        return true;
    }

    return true;
}
function dislighting(the) {
    var shadow = document.getElementById(the);
    if (shadow.parentElement.lastElementChild.innerHTML !== "") {
        shadow.parentElement.lastElementChild.innerHTML = "";
        shadow.parentElement.lastElementChild.style.paddingTop = "0px";
    }
}
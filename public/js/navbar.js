var side_menu = document.getElementById('side-menu');
var login_btn = document.getElementById('login');
var register_btn = document.getElementById('register');

var open = false;
var login_status = false;
var register_status = false;

function menu() {
    if (open) {
        side_menu.classList.remove("active")
        open = false;
    } else {
        side_menu.classList.add("active")
        open = true;
    }
}

function login() {
    console.log(login_status)
    if (login_status) {
        login_btn.classList.remove("active")
        login_status = false;
    } else {
        login_btn.classList.add("active")
        login_status = true;
    }
}

function register() {
    console.log(register_status)
    if (register_status) {
        register_btn.classList.remove("active")
        register_status = false;
        login_btn.classList.add("active")
        login_status = true;
    } else {
        login_btn.classList.remove("active")
        login_status = false;
        register_btn.classList.add("active")
        register_status = true;
    }
}

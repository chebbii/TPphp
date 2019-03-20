var modal = document.getElementById('identifiant');
var advert = document.getElementById('x');
var login = document.getElementById('login');
var logout = document.getElementById('logout');
var signup = document.getElementById('signup');

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
        advert.style.display='none';
        login.style.display='none';
        logout.style.display='none';
        signup.style.display='none';
    }
}

function Nav(a)
{
    if(a == "destroy")
    {
        modal.style.display='none';
        x.style.display='none';
        login.style.display='none';
        signup.style.display='none';
        logout.style.display='none';
    }
    else if(a == "login")
    {
        modal.style.display='block';
        login.style.display='block';
    }
    else if(a == "x")
    {
        modal.style.display='block';
        x.style.display='block';
    }
    else if(a == "logout")
    {
        modal.style.display='block';
        logout.style.display='block';
    }
    else if(a == "signup")
    {
        modal.style.display='block';
        signup.style.display='block';
    }
    
}


function ouvrirNav() {
    document.getElementById("okNav").style.width = "25px";
  
}

function fermerNav() {
    document.getElementById("okNav").style.width = "0";
    document.body.style.backgroundColor = "white";
}
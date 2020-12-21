
var user = new User();
var imageUser = (evt)=>{
    user.archivo(evt, "img");
}

var principal = new Principal();
$().ready(()=>{
    let URLactual = window.location.pathname;
    principal.linkPrincipal(URLactual);
});
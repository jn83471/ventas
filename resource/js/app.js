var user=new User();
var imguser=(evt)=>{
	user.archivo(evt,'img');
}
var principal=new Principal();
$(document).ready(()=>{
	let Urlactual=window.location.pathname;
	principal.linkPrincipal(Urlactual);
})
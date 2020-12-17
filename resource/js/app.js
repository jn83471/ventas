var user=new User();
var imguser=(evt)=>{
	user.archivo(evt,'img');
}
var principal=new index();
$(document).ready(()=>{
	let Urlactual=window.location.pathname;
	principal.linkprincipal(Urlactual);
})
function Starters()
{	
	document.getElementById("Starters_sel").className="selected";
	document.getElementById("Desserts_sel").className="";
	document.getElementById("Tandoors_sel").className="";
	document.getElementById("Tandoori_sel").className="";
	document.getElementById("Basmati_sel").className="";
	document.getElementById("Curries_sel").className="";
	
	document.getElementById("tandoori").style.visibility="hidden";
	//document.getElementById("breads").style.visibility="hidden";
	document.getElementById("starters").style.visibility="visible";
	document.getElementById("tandoors").style.visibility="hidden";
	document.getElementById("curries").style.visibility="hidden";
	document.getElementById("basmati").style.visibility="hidden";
	document.getElementById("desserts").style.visibility="hidden";
	
	document.getElementById("aStarters").style.paddingBottom="7px";
	document.getElementById("aStarters").style.color="#1A7846";
	document.getElementById("aStarters").style.paddingBottom="2px";
	document.getElementById("aTandoori").style.paddingBottom="7px";
	//document.getElementById("aBreads").style.paddingBottom="2px";
	document.getElementById("aTandoors").style.paddingBottom="2px";
	document.getElementById("aCurries").style.paddingBottom="2px";
	document.getElementById("aBasmati").style.paddingBottom="2px";
	document.getElementById("aDesserts").style.paddingBottom="2px";
	
	document.getElementById("aTandoori").style.color="#333333";
	//document.getElementById("aBreads").style.color="#333333";
	document.getElementById("aTandoors").style.color="#333333";
	document.getElementById("aStarters").style.color="#1A7846";
	document.getElementById("aCurries").style.color="#333333";
	document.getElementById("aBasmati").style.color="#333333";
	document.getElementById("aDesserts").style.color="#333333";
}
function Tandoori()
{
	document.getElementById("Starters_sel").className="";
	document.getElementById("Desserts_sel").className="";
	document.getElementById("Tandoors_sel").className="";
	document.getElementById("Tandoori_sel").className="selected";
	document.getElementById("Basmati_sel").className="";
	document.getElementById("Curries_sel").className="";

	document.getElementById("starters").style.visibility="hidden";
	document.getElementById("tandoori").style.visibility="visible";
	document.getElementById("tandoors").style.visibility="hidden";
	document.getElementById("curries").style.visibility="hidden";
	document.getElementById("basmati").style.visibility="hidden";
	document.getElementById("desserts").style.visibility="hidden";

	document.getElementById("aStarters").style.paddingBottom="2px";
	document.getElementById("aTandoori").style.paddingBottom="7px";
	//document.getElementById("aBreads").style.paddingBottom="2px";
	document.getElementById("aTandoors").style.paddingBottom="2px";
	document.getElementById("aCurries").style.paddingBottom="2px";
	document.getElementById("aBasmati").style.paddingBottom="2px";
	document.getElementById("aDesserts").style.paddingBottom="2px";
	
	document.getElementById("aStarters").style.color="#333333";
	document.getElementById("aTandoori").style.color="#1A7846";
	//document.getElementById("aBreads").style.color="#333333";
	document.getElementById("aTandoors").style.color="#333333";
	document.getElementById("aCurries").style.color="#333333";
	document.getElementById("aBasmati").style.color="#333333";
	document.getElementById("aDesserts").style.color="#333333";
}
/*function Breads()
{
document.getElementById("starters").style.visibility="hidden";
document.getElementById("tandoori").style.visibility="hidden";
document.getElementById("breads").style.visibility="visible";
document.getElementById("tandoors").style.visibility="hidden";
document.getElementById("curries").style.visibility="hidden";
document.getElementById("basmati").style.visibility="hidden";
document.getElementById("desserts").style.visibility="hidden";

document.getElementById("aStarters").style.paddingBottom="2px";
document.getElementById("aTandoori").style.paddingBottom="2px";
document.getElementById("aBreads").style.paddingBottom="7px";
document.getElementById("aTandoors").style.paddingBottom="2px";
document.getElementById("aCurries").style.paddingBottom="2px";
document.getElementById("aBasmati").style.paddingBottom="2px";
document.getElementById("aDesserts").style.paddingBottom="2px";
document.getElementById("aStarters").style.color="#333333";
document.getElementById("aTandoori").style.color="#333333";
document.getElementById("aBreads").style.color="#1A7846";
document.getElementById("aTandoors").style.color="#333333";
document.getElementById("aCurries").style.color="#333333";
document.getElementById("aBasmati").style.color="#333333";
document.getElementById("aDesserts").style.color="#333333";

}*/
function Tandoors()
{	
	document.getElementById("Starters_sel").className="";
	document.getElementById("Desserts_sel").className="";
	document.getElementById("Tandoors_sel").className="selected";
	document.getElementById("Tandoori_sel").className="";
	document.getElementById("Basmati_sel").className="";
	document.getElementById("Curries_sel").className="";
	
	document.getElementById("starters").style.visibility="hidden";
	document.getElementById("tandoori").style.visibility="hidden";
	//document.getElementById("breads").style.visibility="hidden";
	document.getElementById("tandoors").style.visibility="visible";
	document.getElementById("curries").style.visibility="hidden";
	document.getElementById("basmati").style.visibility="hidden";
	document.getElementById("desserts").style.visibility="hidden";
	
	document.getElementById("aStarters").style.paddingBottom="2px";
	document.getElementById("aTandoori").style.paddingBottom="2px";
	//document.getElementById("aBreads").style.paddingBottom="2px";
	document.getElementById("aTandoors").style.paddingBottom="7px";
	document.getElementById("aCurries").style.paddingBottom="2px";
	document.getElementById("aBasmati").style.paddingBottom="2px";
	document.getElementById("aDesserts").style.paddingBottom="2px";
	
	document.getElementById("aStarters").style.color="#333333";
	document.getElementById("aTandoori").style.color="#333333";
	//document.getElementById("aBreads").style.color="#333333";
	document.getElementById("aTandoors").style.color="#1A7846";
	document.getElementById("aCurries").style.color="#333333";
	document.getElementById("aBasmati").style.color="#333333";
	document.getElementById("aDesserts").style.color="#333333";
}
function Curries()
{	
	document.getElementById("Starters_sel").className="";
	document.getElementById("Desserts_sel").className="";
	document.getElementById("Tandoors_sel").className="";
	document.getElementById("Tandoori_sel").className="";
	document.getElementById("Basmati_sel").className="";
	document.getElementById("Curries_sel").className="selected";
	
	document.getElementById("starters").style.visibility="hidden";
	document.getElementById("tandoori").style.visibility="hidden";
	//document.getElementById("breads").style.visibility="hidden";
	document.getElementById("tandoors").style.visibility="hidden";
	document.getElementById("curries").style.visibility="visible";
	document.getElementById("basmati").style.visibility="hidden";
	document.getElementById("desserts").style.visibility="hidden";
	
	document.getElementById("aStarters").style.paddingBottom="2px";
	document.getElementById("aTandoori").style.paddingBottom="2px";
	//document.getElementById("aBreads").style.paddingBottom="2px";
	document.getElementById("aTandoors").style.paddingBottom="2px";
	document.getElementById("aCurries").style.paddingBottom="7px";
	document.getElementById("aBasmati").style.paddingBottom="2px";
	document.getElementById("aDesserts").style.paddingBottom="2px";
	document.getElementById("aStarters").style.color="#333333";
	document.getElementById("aTandoori").style.color="#333333";
	//document.getElementById("aBreads").style.color="#333333";
	document.getElementById("aTandoors").style.color="#333333";
	document.getElementById("aCurries").style.color="#1A7846";
	document.getElementById("aBasmati").style.color="#333333";
	document.getElementById("aDesserts").style.color="#333333";
}
function Basmati()
{

	document.getElementById("Starters_sel").className="";
	document.getElementById("Desserts_sel").className="";
	document.getElementById("Tandoors_sel").className="";
	document.getElementById("Tandoori_sel").className="";
	document.getElementById("Basmati_sel").className="selected";
	document.getElementById("Curries_sel").className="";
	
	document.getElementById("starters").style.visibility="hidden";
	document.getElementById("tandoori").style.visibility="hidden";
	//document.getElementById("breads").style.visibility="hidden";
	document.getElementById("tandoors").style.visibility="hidden";
	document.getElementById("curries").style.visibility="hidden";
	document.getElementById("basmati").style.visibility="visible";
	document.getElementById("desserts").style.visibility="hidden";
	
	document.getElementById("aStarters").style.paddingBottom="2px";
	document.getElementById("aTandoori").style.paddingBottom="2px";
	//document.getElementById("aBreads").style.paddingBottom="2px";
	document.getElementById("aTandoors").style.paddingBottom="2px";
	document.getElementById("aCurries").style.paddingBottom="2px";
	document.getElementById("aBasmati").style.paddingBottom="7px";
	document.getElementById("aDesserts").style.paddingBottom="2px";
	
	document.getElementById("aStarters").style.color="#333333";
	document.getElementById("aTandoori").style.color="#333333";
	//document.getElementById("aBreads").style.color="#333333";
	document.getElementById("aTandoors").style.color="#333333";
	document.getElementById("aCurries").style.color="#333333";
	document.getElementById("aBasmati").style.color="#1A7846";
	document.getElementById("aDesserts").style.color="#333333";
}
function Desserts()
{
	document.getElementById("Starters_sel").className="";
	document.getElementById("Desserts_sel").className="selected";
	document.getElementById("Tandoors_sel").className="";
	document.getElementById("Tandoori_sel").className="";
	document.getElementById("Curries_sel").className="";
	document.getElementById("Basmati_sel").className="";
	
	document.getElementById("starters").style.visibility="hidden";
	document.getElementById("tandoori").style.visibility="hidden";
	//document.getElementById("breads").style.visibility="hidden";
	document.getElementById("tandoors").style.visibility="hidden";
	document.getElementById("curries").style.visibility="hidden";
	document.getElementById("basmati").style.visibility="hidden";
	document.getElementById("desserts").style.visibility="visible";
	
	document.getElementById("aStarters").style.paddingBottom="2px";
	document.getElementById("aTandoori").style.paddingBottom="2px";
	//document.getElementById("aBreads").style.paddingBottom="2px";
	document.getElementById("aTandoors").style.paddingBottom="2px";
	document.getElementById("aCurries").style.paddingBottom="2px";
	document.getElementById("aBasmati").style.paddingBottom="2px";
	document.getElementById("aDesserts").style.paddingBottom="7px";
	
	document.getElementById("aStarters").style.color="#333333";
	document.getElementById("aTandoori").style.color="#333333";
	//document.getElementById("aBreads").style.color="#333333";
	document.getElementById("aTandoors").style.color="#333333";
	document.getElementById("aCurries").style.color="#333333";
	document.getElementById("aBasmati").style.color="#333333";
	document.getElementById("aDesserts").style.color="#1A7846";
}

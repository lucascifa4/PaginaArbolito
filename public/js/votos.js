var cont1=0;
var cont2=0;
var cont3=0;
var correos[];
function contar(){
  var contador= document.getElementById("contadoVotos");
}
function votar(){
  if (compEmail()==1){
    var voto[]=document.getElementsByName("voto").value;
    for(var i=0;i<voto.length;i++)
      if(voto[i].chech()==true)
        if(voto[i].value==1)
          cont1++;
        if(voto[i].value==2)
          cont2++;
        if(voto[i].value==3)
          cont3++;
  }else
    alert("Ese email esta repetido.");
}
function int compEmail(){
  var email=document.getElementById("email").value;
  for(var i=0; i<correos.length;i++){
    if(correos[i]==email)
      return 0;
  }
  return 1;
}
function addManejadores(){
  document.getElementById("votar").addEventListener("click",votar);
  document.getElementById("recuento").addEventListener("click",contar);
}
addManejadores();
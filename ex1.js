function loadDoc() {
let a= document.getElementById("a").value;
let b= document.getElementById("b").value;
let u0= document.getElementById("u0").value;
let u1= document.getElementById("u1").value;
let resultat= document.getElementById("demo");

myData= new FormData();
myData.append("a", a);
myData.append("b",b);
myData.append("u0",u0);
myData.append("u1",u1);

let option= {
  method: "POST",
  body: myData
}

fetch("reponse.php", option)
.then((res)=>res.json())
  .then((data)=>{
    resultat.innerText= "$"+ data.result +"$";
    MathJax.typeset();
  }).catch((err)=>console.log(err))
}
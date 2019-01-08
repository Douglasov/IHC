var classcol;
var classCard;
var cardfoot;
var botao;
var stars;
var cardbody;
var p;
var h5;
var h2;
var header;
var classCardTitle;
var cardimg;
var a;



//interagir com o banco de dados
for (i = 0; i < 10; i++) {


//titulo da corrida
h2=document.createElement("h2");
h2.innerHTML=window.localStorage.getItem('searchs');

header=document.createElement("header");
header.appendChild(h2);

classCardTitle=document.createElement("h4");
classCardTitle.classList.add("card-title");
classCardTitle.appendChild(header);


//imagem da corrida
cardimg=document.createElement("img");
cardimg.classList.add("card-img-top");
cardimg.href="#";
cardimg.src="images/1.jpg";
cardimg.alt="";
cardimg.height="150";
cardimg.width="340";

a=document.createElement("a");
a.appendChild(cardimg);


//preço
h5=document.createElement("h5");
h5.innerHTML="$24.99";

//descrição da corrida
p=document.createElement("p");
p.classList.add("card-text");
p.innerHTML="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!";

//divcard body

cardbody=document.createElement("div");
cardbody.classList.add("card-body");
cardbody.appendChild(h5);
cardbody.appendChild(p);





//estrelas
stars=document.createElement("small");
stars.classList.add("text-muted");
stars.innerHTML="&#9733; &#9733; &#9733; &#9733; &#9734";

//botao
botao=document.createElement("a")
botao.classList.add("button");
botao.innerHTML="More";
botao.href="#";



//divcard foot
cardfoot=document.createElement("div");
cardfoot.classList.add("card-footer");
cardfoot.appendChild(stars);
cardfoot.appendChild(botao);



//cards da corrida
classCard=document.createElement("div");
classCard.classList.add("card","h-100");
classCard.appendChild(classCardTitle);
classCard.appendChild(a);
classCard.appendChild(cardbody);
classCard.appendChild(cardfoot);


classcol=document.createElement("div");
classcol.classList.add("col-lg-4", "col-md-6" ,"mb-4");
classcol.appendChild(classCard);


document.querySelector(".row").appendChild(classcol);
} 

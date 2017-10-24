var tab = [12, 5, 17, 1, 100, 2]; //definit tableau
var nb = tab[tab.length-1]; //nb prend la valeur de la denrier case
console.log('Etape initiale  : nb =' + nb); //affcihe nb en console
var combien = 0; //combien mit à 0
for(var i = 0; i < tab.length; i++) { //parcour le tableau
    if(tab[i] < nb) //si la valeur current est enferrieur à la derniere du tableau
       combien++; //augmente de 1
    console.log('Etape '+ i + ' combien = ' + combien); //affcihe le nombre d'itération et combien
}
console.log('A la fin : combien = ' + combien); //le nombre de valeur < a la derneire case du tableau

for (data of tab)
  console.log(data);



let sum = 0;
let tab2 = [5,10,12,2,7,13];
for (data of tab2) {
  if(data>=10)
    sum += data;
    console.log("data => "+data);
    console.log("sum => "+sum);
}

// console.log(sum);


tab3=[1,15,20,7];
let f = x => x<10;
let d = tab3.filter(f);
console.log(d);

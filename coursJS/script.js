document.writeln("bonjour");
//exo 3
let tab = [5,6,7,8,9,10];
tab.push(12);
console.log(tab);
console.log(tab.length);

//exo 4
let t = new Array;
for(i=0;i<5;i++){
  t[i] = Math.round(Math.random()*10);
}
console.log(t);
console.log(isZeroIn(t));
console.log(isOrdered(t));

function isZeroIn(tab){
  for (data of tab) {
    if(data==0)
      return true;
  }
  return false;
}
function isOrdered(tab){
  let min = tab[0];
  for(i=1;i<tab.length;i++){
    if(tab[i-1]>tab[i])
      return false;
  }
  return true;
}
function isSameTab(tab1, tab2){
  if(tab1.length == tab2.length){
    for(i=0;i<tab1.length;i++){
      if(tab1[i] != tab2[i])
        return false;
    }
    return true;
  }
  return false;
}
function mergeTab(tab1, tab2){
  let tab =  new Array;
  while(tab1.length <= i && tab2.length <= j){
    if(tab1[i] < tab2[j]){
      tab.push(tab1[i]);
      i++;
    }
    else {
      tab.push(tab2[j]);
      j++;
    }
  }
  return tab;
}

tab1 = [15,36,48,59,78];
tab2 = [1,12,35,47,98,120];

console.log(mergeTab(tab1, tab2));

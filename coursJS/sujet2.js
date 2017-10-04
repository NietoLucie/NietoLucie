function someValeursDe (tab){ //VALIDE
  let sum =0;
  for (line of tab) {
    sum += line;
  }
  return sum;
}

function isPerfect (num){ //VALIDE
  if(someValeursDe(getDivider(num)) == num){
    return true;
  }
  else {
    return false;
  }
}

function getDivider (num){ //VALIDE
  let divider = [];
  for(i=1;i<num;i++){
    if(num%i == 0){
      divider.push(i);
    }
  }
  return divider;
}
function getPerfect (numOfElement){ //VALIDE mais très loin au dessus de 4
  let perfects = [];
  let i = 0;
  while(perfects.length <= numOfElement){
    if(isPerfect(i)){
      perfects.push(i);
    }
    i++;
  }
  return perfects;
}

console.log(getPerfect(4));

//console.log('here')

var arr = [
  {level: 1, val1: 'c', val2: 'CC'},
  {level: 1, val1: 'b', val2: 'BB'},
  {level: 2, val1: 'o', val2: 'OO'},
  {level: 2, val1: 'n', val2: 'NN'},
  {level: 3, val1: 'y', val2: 'YY'},
  {level: 2, val1: 'm', val2: 'MM'},
  {level: 1, val1: 'a', val2: 'AA'},
  {level: 2, val1: 'w', val2: 'WW'},
  {level: 2, val1: 'q', val2: 'QQ'},
  {level: 3, val1: 'x', val2: 'XX'},
]

setParent()
//console.log(arr)
additionalLevels = 2;

groupedArr = [getLevelAndSort(1), getLevelAndSort(2), getLevelAndSort(3)]
//console.log(groupedArr)
//need a collection to concatenate based on parent relationship

var finalSorted = []
groupedArr[0].forEach(v=>{

  if(!v.child){

    finalSorted.push(v)
  } else {
    //console.log(v.child)
    finalSorted.push(v)
    index = findChildContainingPair(groupedArr[1], v.child)
    //console.log(index)
    finalSorted = finalSorted.concat(groupedArr[1][index])
  }

})

console.log(finalSorted)


function findChildContainingPair(bidimArr, strArr){
  for(i=0; i<bidimArr.length; i++){
    for(j=0; j<bidimArr[i].length; j++){
      //console.log(bidimArr[i][j])
      if(bidimArr[i][j].val1 == strArr[0] &&
          bidimArr[i][j].val2 == strArr[1]){
            return i;
      }
    }
  }
}

// groupedArr[1].forEach((v,i,a)=>{
//   //console.log(a[i])
//   a[i].forEach((val,idx,arr)=>{
//    // console.log(arr[idx])
//     if(arr[idx].val1=='w' && arr[idx].val2=='WW')
//       console.log(i)
//   })
// })


function setParent(){
  arr.forEach((v,i,a)=>{
    if(i>0 && arr[i].level>arr[i-1].level){
      arr[i].parent = [arr[i-1].val1, arr[i-1].val2];
    }
    if(i<arr.length-1 && arr[i+1].level>arr[i].level){
      arr[i].child = [arr[i+1].val1, arr[i+1].val2];
    }
  })
}

function getLevelAndSort(level){
  var compArr = []
  var amount = -1; //once child is found starts at 0
  var parent = ''; //insert parent to each child member
  arr.forEach((v,i,a)=>{
    if(v.level == 1 && level==1){
      compArr.push(v);
    }
    if(v.level==level && v.parent){
      parent = v.parent;
      compArr.push([])
      amount++
      compArr[amount].push(v)
    }
    if(v.level==level && !v.parent && level !=1){
      v.parent = parent;
      compArr[amount].push(v)
    }
  })
  if(level == 1){
    compArr.sort(comp)
  }
  else{
    for(i=0; i<compArr.length; i++){
      compArr[i].sort(comp)
    }
  }
  return compArr;
}

function comp(a,b){
  a = a.val1;
  b = b.val1;
  if(a==b) return 0;
  x = a < b ? -1 : 1;
  return x;
}


/*
let arr = [1, 4, 7, 45, 7,43, 44, 25, 6, 4, 6, 9];
let sorted = false

while(!sorted) {
  sorted = true
  for(var i=0; i < arr.length; i++) {
    if(arr[i] < arr[i-1]) {
      let temp = arr[i];
      arr[i] = arr[i-1];
      arr[i-1] = temp;
      sorted = false;
    }
  }
}

*/
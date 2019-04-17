//console.log('here')

var arr = [
  {level: 1, value: 'c'},
  {level: 1, value: 'b'},
  {level: 2, value: 'o'},
  {level: 2, value: 'n'},
  {level: 3, value: 'y'},
  {level: 3, value: 'x'},
  {level: 2, value: 'm'},
  {level: 1, value: 'a'},
]

setParent()
console.log(arr)
maxLevel = 4;
groupedArr = []
for(i=1; i<maxLevel; i++){
  groupedArr.push(getLevelAndSort(i))
}
console.log(groupedArr)
//need a collection to concatenate based on parent relationship

function setParent(){
  arr.forEach((v,i,a)=>{
    if(i>0){
      if(arr[i].level>arr[i-1].level){
        arr[i].parent = i-1;
      }
    }
  })
}

function getLevelAndSort(level){
  var newArr = []
  arr.forEach((v,i,a)=>{
    if(v.level==level){
      newArr.push(v)
    }
  })
  newArr.sort((a,b)=>{
    if(a==b) return 0;
    x = a < b ? -1 : 1;
    return x;
  })
  return newArr;
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
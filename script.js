//console.log('here')

var arr = [
  {level: 1, val1: 'c', val2: 'CC'},
  {level: 1, val1: 'b', val2: 'BB'},
  {level: 2, val1: 'o', val2: 'OO'},
  {level: 2, val1: 'n', val2: 'NN'},
  {level: 3, val1: 'y', val2: 'YY'},
  {level: 2, val1: 'm', val2: 'MM'},
  {level: 2, val1: 'm', val2: 'AA'},
  {level: 1, val1: 'a', val2: 'AA'},
  {level: 2, val1: 'w', val2: 'WW'},
  {level: 2, val1: 'q', val2: 'QQ'},
  {level: 3, val1: 'x', val2: 'XX'},
]

function transform(arr){
  let root = currentNode = { children: [] }
  let parent = undefined
  let parentNodes = []
  level = 0;
  for(let x of arr){
    if(x.level == level){
      currentNode = {children: [], ...x}
      parent.children.push(currentNode)
    } else if(x.level > level){
      level = x.level
      parentNodes.push(parent)
      parent = currentNode
      currentNode = {children: [], ...x}
      parent.children.push(currentNode)
    } else if(x.level < level){
      level = x.level
      parent = parentNodes.pop()
      currentNode = {children: [], ...x}
      parent.children.push(currentNode)
    }
   // {val: parent.val1, children: parent.children.map(item => item.val1)}
  }
  return root;
}

function sortTree(tree){
  tree.children.sort((a,b) => a.val1 < b.val1? -1: 1)
  for(const child of tree.children){
      sortTree(child)
  }
}

const x = transform(arr)
sortTree(x)
console.log(JSON.stringify(x, null, 2))
console.log(x)
/*
setInheritance()

//add more levels if necessary, no need to automate
groupedArr = [getLevelAndSort(1), getLevelAndSort(2), getLevelAndSort(3)]

var sorted = []
groupedArr[0].forEach(v=>{
  sorted.push(v)
  if(v.child){
    index = findPairInBinomial(groupedArr[1], v.child)
    sorted = sorted.concat(groupedArr[1][index])
  }
})

finalsorted = []
sorted.forEach((v,i,a)=>{
  finalsorted.push(v)
  if(v.level==2 && v.child){
    index = findPairInBinomial(groupedArr[2], v.child)
    finalsorted = finalsorted.concat(groupedArr[2][index])
  }
})

//the ultimate concat function

console.log(finalsorted)

function findPairInBinomial(bidimArr, strArr){
  for(i=0; i<bidimArr.length; i++){
    for(j=0; j<bidimArr[i].length; j++){
      if(bidimArr[i][j].val1 == strArr[0] &&
          bidimArr[i][j].val2 == strArr[1]){
            return i;
      }
    }
  }
}

function setInheritance(){
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
  a1 = a.val1;
  b1 = b.val1;
  if(a1==b1){
    a2 = a.val2
    b2 = b.val2
    if(a2==b2) return 0
    x = a2 < b2 ? -1 : 1;
    return x;
  };
  x = a1 < b1 ? -1 : 1;
  return x;
}

*/
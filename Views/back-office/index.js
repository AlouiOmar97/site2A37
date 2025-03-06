/* alert('Hello world')
alert('Hello world') */
var x;
x=10
x='Hi'
x=true
var y = "Walid"
var C = 5
var c = 4

console.log(typeof(x))
console.log(x+ ' ' +y)
//console.log(y)

//var namee=prompt("Type your name ! ")
/*if(namee){
    let t="Bonjour"
    console.log(t)
    console.log(namee)
} else{
    console.log("User didn't type his name !")
}*/
//console.log(confirm('Do you want to delete this product ?'))

arr=[1,0, 'Bonjour']
console.log(arr);
console.log(arr.length);
console.log(arr[2]);

for (let i = 0; i < arr.length; i++) {
    const element = arr[i];
    console.log(element);
    
}


function calculSomme(a, b) {
    return a + b
}

function calculSomme2(a, b) {
    s= a + b
    console.log("Somme 2 : "+ s) 
}
somme= calculSomme(1,266566565)
console.log("Somme : "+ somme);
var funSomme = (a, b) => {
    return a + b
}
console.log(funSomme(1,2));

calculSomme2(12,52)

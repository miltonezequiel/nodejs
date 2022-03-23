
// copied array
let arrayA= [1,2,3,4];
let arrayB=[];

arrayB=arrayA; // aca estoy haciendo una asignacion , cuando en arrayB haga algun cambio se va a reflejar en arrayA tmb
arrayB.push(5);
//console.log(arrayA);

// Clonacion de un Array - Spread operador
arrayC=[...arrayA]; // aca estoy clonandolo por ende cuando haga alguna accion en arrayC no se vera afectado arrayA
arrayC.push(6);
//console.log(arrayC);

// Clon Object 
let obj1={name:'milton',age:31};
let obj2={};
obj2={...obj1};
obj2.age=30;
//console.log(obj1);
//console.log(obj2);

// Async- Await 

const numeros = [10,20,30,45];
const objet={name:'asd',edad:33};
objet.name='remplazo';
var objet2={titulo:'programing'};
objet2={...objet};
numeros.push(60);
//console.log(objet2);
 function doble(array) {
     for (let i = 0; i < array.length; i++) {
        array[i]=array[i]*2; // 10
     }
 }
//doble(numeros);
const por2= numeros.map(numero=>numero*2);
//console.log(por2);

const productos=[
    {nombre:'camisa',precio:1200},
    {nombre:'pantalon',precio:1500},
    {nombre:'zapatos',precio:2000}
];

const productosConDescuentos = productos.map((objeto,indice)=>{
    if (objeto.precio>1300) {
        return {
            ...objeto,  // clono cada objeto y luego abajo reemplazo en la posicion precio 
            precio:objeto.precio*0.9  // pisa la posicion precio con el nuevo valor 
        }
    }else{
       return objeto
    }
});
const names= productos.map((actual)=>actual.nombre); // obtengo solo la propiedad nombre
const nombres= productos.map(({nombre})=>nombre); // otra forma mas resumida de obtener la propiedad nombre
//console.log(names);

// Sacar valores repetidos
const repe = [1,2,3,4,3,2];
const unicos= repe.filter((actual,index,array)=>{
    return index === array.indexOf(actual)
})
//console.log(unicos);

// REDUCE 
const ruleta = [3,4,7,6,8];
const sumaTotal = ruleta.reduce((acum,actual,index)=>{
     acum.push(actual*2);
     return acum
},[]); 
//console.log(ruleta);
//console.log(sumaTotal);

// CLOSURE  ( funcion anidada (no anonima) que tiene referencia a una variable de scope superior . Todo esto llamarlo desde afuera)

function crearMensaje(tipo,estilos) {
    return function mensaje(str) {
        console.log(`%c ${tipo}: ${str} `, estilos)
    }
}
const error = crearMensaje('Error','background:red; color:white');
error('that is error  message ');
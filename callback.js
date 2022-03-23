/* Las Funciones CallBacks son una forma de asegurarnos que un determinado codigo no se ejecuta hasta que otro bloque anterior lo haya hecho */

const { default: axios } = require("axios");
// Función tradicional
function bob2 (a){
    console.log(a + 100);
  }

// arrow function
let bob = a => console.log(a + 100); //bob(50);

// EJERCICIO CALBACK

function primeroo(segundo) {
    setTimeout(function name(params) {
        console.log('primero');
        segundoo();
    },300);
    
}
function segundoo() {
    console.log('segundo');
}
//primeroo(segundoo);

// EJERCICIO PROMISE 
var obj={
    'name':'milton',
    'apellido':'ojeda',
    'edad':31
}
/* const p1= Promise.resolve(obj);
p1.
   then(response=>response.edad + 5)
   .then(x=>console.log(x)); */

// fetch = Antecesor de axios , hay que formatear la respta con la funcion .json()
// Axios = peticiones a Apis , en la respta trae el data en formato JSON   
var names=[];
async function test() {
    const ax = await axios('https://jsonplaceholder.typicode.com/users/1')
    //.then(resp=>names.push(resp.data[1].id));
    console.log(ax.data.name);
    console.log('segunda ejecucion');

 }
//test();
//console.log(obj.name);

const str='asdadasda';
const edades=[25,55,53,22];
const objj={
        nombre:'milton',
        apellido:'ojeda',
        edad:31
    };
const empleados={
        ...objj,
        supervisor:'juan',
        jefe:'perez',
        sueldo:31
    };    
//destructuring ...
const{nombre,...resto}=objj;
const [p,s]=edades;
console.log(empleados);
////////////////////////////    
var kvArray = [{clave:1, valor:10},
    {clave:2, valor:20},
    {clave:3, valor: 30}];

const union = kvArray.map((obj)=> {
     const newObj={};
     newObj[obj.clave]=obj.valor;
     return newObj;
    //(`${obj.clave}:${obj.valor}`))
}) ;
console.log(union);
//edades[2]=88;
const fill= edades.filter((elem)=>elem>30);
const empleado = ()=>console.log('my function')
const mapeo= edades.map((elem)=>elem + elem )
//console.log(p,s);
//empleado();
//console.log(mapeo);
//console.log(fill);    


class Drunk {

    constructor(name,limit){
        this.name=name;
        this.limit=limit;
        this.beers=[];
        this.liquid=0;
    }
    drink(beer){
       this.beers.push(beer);
       this.liquid+=beer.quantity;
       console.log(`el nombre de la birra es ${beer.name} y contiene unos ${beer.quantity} mlts y tiene acumulado ${this.liquid}`);
       //console.log(this.beers);
    }

}

// Objetos Que voy a enviar al metodo
beer1={name:'Brahma',quantity:300};
beer2={name:'Quilmes',quantity:350};
beer3={name:'Corona',quantity:400};

// Instanciamiento del Objeto
const drunk = new Drunk('Milton',2000);
// Instanciamos los metodos
drunk.drink(beer1);
drunk.drink(beer2);
drunk.drink(beer1);
console.log(drunk.beers , drunk.liquid);

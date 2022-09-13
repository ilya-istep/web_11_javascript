import Product from './Product';

function ProductsList(props){

    let products = [
        {id: 1, title: 'телефон', price: 30000 },
        {id: 2, title: 'телевизор', price: 60000 },
        {id: 5, title: 'магнитофон', price: 10000 },
        {id: 8, title: 'камера', price: 1000 },
    ];

    function renderProducts(){
        let data = [];
        // for(let product of products){
        //     data.push( <Product product={product}/> );
        // }
        // return data;

        // return products.map((el)=>
        //     <Product product={el}/>
        // )

        products.forEach((el) => 
            { data.push(<Product product={el} key={el.id}/>)}
        )

        return data;
    }

    return(
        <div className="ProductsList">
           { renderProducts() } 

        {/* {products.map((el)=>
            <Product product={el} key={el.id}/>
        )} */}

        </div>
    );
}

export default ProductsList;
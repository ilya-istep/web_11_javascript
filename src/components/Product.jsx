function Product({product, ...props}){
    return(
        <div className="Product">
            
            <div>
                <p>{ product.title }</p>
                <p>{ product.price } руб.</p>
                <button>Купить</button>
            </div>

        </div>
    );
}
export default Product;
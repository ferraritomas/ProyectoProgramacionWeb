// manipulacion del DOM --> sin backend carga la ropa y la borra

function changeSubCat(subCatType){
    document.getElementById("slideshow-container").style.display="none";
    document.getElementById("clothes-container").style.display="block";
    var subCatText = document.getElementById('catText');
    subCatText.innerHTML = subCatType;
}


function addElement(){  // Lets user add a new product
    var clotheName = document.getElementById("clothe-name").value;
    var clothePrice = document.getElementById("clothe-price").value;
    var clotheColor = document.getElementById("clothe-color").value;
    var imgName = document.getElementById("clothe-img").value;

    var product = document.createElement("div");
    product.className = "product";                  


    var productImage = document.createElement("div");
    productImage.className = "product-image";           
    product.appendChild(productImage);


    var linkImg = document.createElement("a");
    linkImg.className = "product-href";         
    linkImg.href="#"
    productImage.appendChild(linkImg);


    var srcImg = document.createElement("img");
    srcImg.src = '../img/Ropa/' + imgName;      
    linkImg.appendChild(srcImg);


    var productDesc = document.createElement("div");
    productDesc.className= "product-description";       
    product.appendChild(productDesc);           


    var productDescLink = document.createElement("a");
    productDesc.appendChild(productDescLink);       
    productDescLink.href="#";


    var productDescText = document.createElement("span");   
    productDescText.innerText = clotheName;
    productDescText.className="description";        
    productDescLink.appendChild(productDescText);

    var separator = document.createElement("br");
    productDesc.appendChild(separator);

    var productPrice = document.createElement("span");
    productPrice.innerText = '$'+clothePrice;
    productPrice.className="price";
    productDesc.appendChild(productPrice);

    var separator = document.createElement("br");
    productDesc.appendChild(separator);

    var productColor = document.createElement("span");
    productColor.className="color";
    productColor.innerText = 'Color: '+clotheColor;
    productDesc.appendChild(productColor);

    var deleteElement = document.createElement("span");
    
    deleteElement.className="delete-product";
    deleteElement.innerHTML= '&times';
    product.appendChild(deleteElement);
    deleteElement.setAttribute("title","Borrar elemento");

    deleteElement.onclick = function(){
        product.parentNode.removeChild(product);
    }

    var element = document.getElementById('clothes-container');  
    element.appendChild(product);

}


ImageElement = document.getElementById("image-preview");
NameElement = document.getElementById("name-preview");
DescriptionElement = document.getElementById("description-preview");
PriceElement = document.getElementById("price-preview");
StockElement = document.getElementById("stock-preview");
Tag1Element = document.getElementById("tag1-preview");
Tag2Element = document.getElementById("tag2-preview");
Tag3Element = document.getElementById("tag3-preview");

function updatepreview(PrevElement, InputId){
    Input = document.getElementById(InputId).value;
    console.log(Input);
    console.log(PrevElement);
    if(Input != null){
        if(InputId == "Image"){
            PrevElement.src = Input;
        }else if(InputId == "Price"){
            if(Input.indexOf(".") == -1){
                PrevElement.innerHTML = "€"+Input+",-";
            }else if(Input.indexOf(".00") == true){
                Input = Input.substring(0, Input.indexOf('.'));
                PrevElement.innerHTML = "€"+Input+",-";
            }else{
                Input = Input.replace(".", ",")
                PrevElement.innerHTML = "€"+Input;
            }
        }else if(InputId == "Stock"){
                PrevElement.innerHTML = Input+" IN STOCK";
        }else{
            PrevElement.innerHTML = Input;
        }
    }
}

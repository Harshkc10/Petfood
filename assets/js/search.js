const search = () =>{
    const searchbox =  document.getElementById("searching-items").value.toLowerCase();
    const petfoods =  document.getElementById("product-pets")
    const product = document.querySelectorAll("product-card")
    const pname = document.getElementsByTagName("h3")


    for(var i=0; i < pname.length ; i++ ){
        let match = product-card[i].getElementsByTagName('h3')[0];

        if(match){
          let textvalue = match.textContent || match.innerHTML

          if(textvalue.toLowerCase().indexof(searchbox)  > -1){
            product[i].style.display = "";
          }else{
            product[i].style.display = "none";
          }
        }
    }
}
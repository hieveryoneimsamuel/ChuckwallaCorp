window.onload = function(){
    console.log("page loaded");
    const urlString = window.location.search;
    const parameters = new URLSearchParams(urlString);
    const numRows = parameters.get("val2");

    if(numRows !== null){
        console.log("numRows is: " + numRows);
        printValue();
        
    }   

    
}


function printValue(){
    var redDD = document.getElementById('rowRED');
    redDD.addEventListener('click',()=>{
        console.log("First click");   
    });
}

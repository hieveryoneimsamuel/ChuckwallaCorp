window.onload = function(){
    console.log("page loaded");
    const urlString = window.location.search;
    const parameters = new URLSearchParams(urlString);
    const numRows = parameters.get("val2");

    if(numRows !== null){
        console.log("numRows is: " + numRows);
        let rowsUnderConsideration = getRowIDs(numRows);
        for(let i=0; i< rowsUnderConsideration.length; i++){
            console.log("underConsideration: " + rowsUnderConsideration[i]);
            checkForDuplicates(rowsUnderConsideration[i]);
        }
        
        
    }   

    
}

function getRowIDs(numRows){
    let namesColors = ["RED", "ORANGE", "YELLOW", "GREEN", "BLUE", "PURPLE", "GREY", "BROWN", "BLACK", "TEAL"];
    let rowsWeGot = [];
    for(let i=0; i< numRows; i++){
        let tempName = "row" + namesColors[i];
        rowsWeGot.push(tempName);
    }
    console.log(rowsWeGot);
    return rowsWeGot;
}


function checkForDuplicates(idName){

    var currRow = document.getElementById(idName);
    currRow.addEventListener('click',()=>{
        console.log("First click");
        var initialVal = currRow.value;
         

        currRow.onchange = function() {
            console.log("Second click");
            console.log("newer value of redDD: " + currRow.value);

            var othersVals = document.getElementsByClassName('mySelectElements');
            for(let i=0; i< othersVals.length; i++){
                if(othersVals[i].id !== idName && othersVals[i].value == currRow.value){
                    window.alert("hey we've got a duplicate");
                    currRow.value = initialVal;
                }
            }
            
        }
    });
}

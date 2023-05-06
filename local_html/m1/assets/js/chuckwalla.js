window.onload = function(){
    console.log("page loaded");
    const urlString = window.location.search;
    const parameters = new URLSearchParams(urlString);
    const numRows = parameters.get("val2");
    const numColumns = parameters.get("val1");
    const alphabet = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"];

    if(numRows !== null){
        console.log("numRows is: " + numRows);
        let rowsUnderConsideration = getRowIDs(numRows);
        for(let i=0; i< rowsUnderConsideration.length; i++){
            console.log("underConsideration: " + rowsUnderConsideration[i]);
            //checkForDuplicates(rowsUnderConsideration[i]); Also broken sad days
        }

        for(let i = 0; i<numColumns; i++){
            for(let j = 0; j < numColumns; j++){
                const currentId = "" + alphabet[j] + i;
                bigTableEventListeners(currentId);
            }
        } 
        
        for(let i= 0; i<numRows; i++){
            var name = "clickedCells" + i;
            name = [];

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

function bigTableEventListeners(cellId){
    var currCell = document.getElementById(cellId);
    currCell.addEventListener('click', ()=>{
        const radioMenu = document.querySelector('input[name="current_color"]:checked');
        const selectedRow = radioMenu.parentNode.parentNode;
      
       const selectedColTwo = selectedRow.childNodes[3];    
       
       var colText = document.createElement("text");
       colText.innerText = cellId + ", ";   

        $(selectedColTwo).append(colText); //put array in this line
        

        const styleAttribute = "background-color : " + radioMenu.value;
        if(currCell.getAttribute("style") != null){
            currCell.removeAttribute("style");
        }
        else currCell.setAttribute("style", styleAttribute );
    });
}

function generatePrintview(){
    
    const urlString = window.location.search;
    const parameters = new URLSearchParams(urlString);
    const numRows = parameters.get("val2");
    const numColumns = parameters.get("val1");
    const alphabet = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"];

    for(let i = 0; i<numRows; i++){
        for(let j = 0; j<numColumns; j++){
            var currCell = document.getElementById("" + alphabet[j] + i);
            if(currCell.getAttribute("style") != null){
                currCell.removeAttribute("style");
            }
        }
    }
    

    //necessary to enact new CSS without refreshing the page (aka without altering user dropdown selections)

    const newCSS = document.createElement("link");
    newCSS.setAttribute('rel', 'stylesheet');
    newCSS.setAttribute('href', 'https://cs.colostate.edu:4444/~ewolving/m2/assets/css/printview.css');
    document.head.appendChild(newCSS);
}    

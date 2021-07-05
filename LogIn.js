/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var txtFile = new XMLHttpRequest();
txtFile.onload = function() {
    allText = txtFile.responseText;
    allTextLines = allText.split(/\r\n|\n/);

    for(var i = 0; i < allTextLines.length; i++) {
        document.body.innerHTML += allTextLines[i];
        document.body.innerHTML += '<br/>';
    }
}

txtFile.open("get", "filename.csv", true);
txtFile.send();
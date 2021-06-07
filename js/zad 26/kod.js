/*var str ="Zmieniona treść";
var str2 ="Elo";


var div = document.getElementById("dataDiv");
var pEl = document.createElement("h1");
var pEl2 = document.createElement("hr");
//var pEl3 = document.createElement("table");
//var pEl4 = document.createElement("tr");
//var pEl5 = document.createElement("td");
//var pEl6 = document.createElement("td");
var pElTextNode = document.createTextNode(str);
//var pElTextNode2 = document.createTextNode(str2);


pEl.appendChild(pElTextNode);
pEl5.appendChild(pElTextNode2);
div.appendChild(pEl);
div.appendChild(pEl2);
div.appendChild(pEl3);
//div.appendChild(pEl4);
//div.appendChild(pEl5);
*/


// Find a <table> element with id="myTable":
var table = document.getElementById("www");

// Create an empty <tr> element and add it to the 1st position of the table:
var row = table.insertRow(0);
var row1 = table.insertRow(1);

// Insert new cells (<td> elements) at the 1st and 2nd position of the "new" <tr> element:
var cell1 = row.insertCell(0);
var cell2 = row.insertCell(1);
var cell3 = row.insertCell(2);
var cell4 = row1.insertCell(0);
var cell5 = row1.insertCell(1);
var cell6 = row1.insertCell(2);

// Add some text to the new cells:
cell1.innerHTML = "NEW CELL1";
cell2.innerHTML = "NEW CELL2";
cell3.innerHTML = "NEW CELL3";
cell4.innerHTML = "NEW CELL1";
cell5.innerHTML = "NEW CELL2";
cell6.innerHTML = "NEW CELL3";
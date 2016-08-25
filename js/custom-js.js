/* Credits:
  This bit of code: Exis | exisweb.net/responsive-tables-in-wordpress
  Original idea: Dudley Storey | codepen.io/dudleystorey/pen/Geprd */
  
var headertext = [];
var headers = document.querySelectorAll("thead");
var tablebody = document.querySelectorAll("tbody");

for (var i = 0; i < headers.length; i++) {
  headertext[i]=[];
  for (var j = 0, headrow; headrow = headers[i].rows[0].cells[j]; j++) {
    var current = headrow;
    headertext[i].push(current.textContent);
    }
} 

for (var h = 0, tbody; tbody = tablebody[h]; h++) {
  for (var i = 0, row; row = tbody.rows[i]; i++) {
    for (var j = 0, col; col = row.cells[j]; j++) {
      col.setAttribute("data-th", headertext[h][j]);
    } 
  }
}
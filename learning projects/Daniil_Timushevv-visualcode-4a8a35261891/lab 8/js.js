let arr = new Array();
var document="store.html";
arr = [false,true,false,true,false,true];
changeClass()
function changeClass(){
    for (let index = 1; index < arr.length+1; index++) {
        if (arr[index-1]==false)
        {
            document.getElementById(String(index)).style.opacity="0.2";
            document.getElementById('a'+String(index)).style.opacity="1";
            document.getElementById('b'+String(index)).style.opacity="0.2";
            document.getElementById('c'+String(index)).style.opacity="0";
        }
        
    }
}
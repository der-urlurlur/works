
const symbols = ['a','b','c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z',',','.','!','?',' ']
const encodedSymbols =[7,4,11,11,14,30,22,14,17,11,3,28]
var decodedMessage=new String("");

for (let index = 0; index < encodedSymbols.length; index++) {
    decodedMessage+=(decoder(encodedSymbols[index]));
    
}
console.log(decodedMessage);
function decoder(number)
{
    
    return symbols[number];
}
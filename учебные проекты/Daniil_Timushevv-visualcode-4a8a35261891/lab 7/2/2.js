
const attempt = [0,0,0]

var decodedMessage=new String("");

for (let index = 0; index < attempt.length; index++) {
    attempt[index]=parseInt(prompt("введите результат "));  
}
var result=result(attempt)
function result(arr)
{
var averageBest=new Float64Array(0);
var qualified=false;
var qualificationDistance =[1.8,2.40,3]
for (let index = 0; index < attempt.length; index++) {
    averageBest=averageBest+attempt[index];  
}
averageBest=averageBest/attempt.length;
while (qualified!=true) {
    if (averageBest>qualificationDistance[2]){
        console.log('Золото')
        qualified=true;
        break;
        }
        if (averageBest>qualificationDistance[1]){
        console.log('Серебро')
        qualified=true;
        break;
        }
        if (averageBest>qualificationDistance[0]){
        console.log('Бронза')
        qualified=true;
        break;
        }   
console.log('не квалифицирован')
}

return qualified;
}
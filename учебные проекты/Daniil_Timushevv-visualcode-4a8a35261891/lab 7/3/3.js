
var time=parseInt(prompt("set time ")); 
var i=parseInt(prompt("set urgency (1 or 0) "));
var urgency=false;
if(i==1)
{
    urgency=true;
} 
getPrice(time,urgency);
function getPrice(time,urgency)
{
    var fullprice;
    var price=1500;
if (urgency=true)
{
    time=time/2;
    price=price*2.5;
}
if (time>150)
{
    price=price-250;
}
fullprice=price*time;
console.log('цена: ',fullprice,' время: ',time);
return fullprice;
}
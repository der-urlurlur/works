

let f1 = {     
    name: "John",  
    goals: 30,
    passes: 15,
};
  let f2 = {     
    name: "kevin",  
    goals: 11,
    passes: 26,
  };
  let f3 = {     
    name: "astra",  
    goals: 24,
    passes: 56,  
  };
  let f4 = {     
    name: "igor",  
    goals: 1,
    passes: 111,  
};
const Statistics = [f1,f2,f3,f4]
  getStatistics(Statistics)
  for (let index = 0; index < Statistics.length; index++) {
      console.log(Statistics[index])
  }

function getStatistics(arr)
{
    var a=0;
    for (let index = 0; index < Statistics.length; index++) {
    a=a+Statistics[index].goals;
    console.log(a);
    }
    for (let index = 0; index < Statistics.length; index++) {
        Statistics[index].coefficient =Statistics[index].goals*2+Statistics[index].passes;
        Statistics[index].percent=Math.round((Statistics[index].goals/a)*100);
    }
    
}
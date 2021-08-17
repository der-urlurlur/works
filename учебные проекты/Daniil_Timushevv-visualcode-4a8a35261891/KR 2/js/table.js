
	let arr = [
	
	["Тимушев", "Даниил","Анатольевич", "4381-22",2,4,5,5,3], 
	["Кинзягулов", "Данила", "Радикович", "4381-22",5,4,3,5,4], 
	["Максимовская","Анастасия","Вадимовна", "5320-11",4,4,4,5,5],
	["Яковлева", "Александра", "Александровна", "1151-14",4,5,3,4,4], 
	["Курейкин", "Максим", "Игоревич", "7895-54",5,5,4,3,5] ];
let table = document.querySelector('#table');
let th = document.createElement('th');
for (let subArr of arr) {
	let tr = document.createElement('tr');
	
	for (let elem of subArr) {
		let td = document.createElement('td');
		td.innerHTML = elem;
		tr.appendChild(td);
	}
	
	table.appendChild(tr);
}

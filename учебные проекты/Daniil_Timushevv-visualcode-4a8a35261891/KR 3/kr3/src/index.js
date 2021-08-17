
import reactDom from 'react-dom';
import './css.css';
import './img/car1.jpg'
import './img/car2.jpg'
import './img/car3.jpg'
import './img/car4.jpg'
const Body = () => {
  return (
    
    <div className="gallery">
      <h1>Продаются автомобили</h1>

      <a href=""><img className="img"  onMouseEnter={event => document.getElementById('input1').value="mark1 $1000"} onMouseOut={event => document.getElementById('input1').value=''} src="./img/car1.jpg"/></a>
      <a href=""><img className="img"  onMouseEnter={event => document.getElementById('input1').value="mark2 $2000"} onMouseOut={event => document.getElementById('input1').value=''} src="./img/car1.jpg"/></a>
      <a href=""><img className="img"  onMouseEnter={event => document.getElementById('input1').value="mark3 $3000"} onMouseOut={event => document.getElementById('input1').value=''} src="./img/car1.jpg"/></a>
      <a href=""><img className="img"  onMouseEnter={event => document.getElementById('input1').value="mark4 $4000"} onMouseOut={event => document.getElementById('input1').value=''} src="./img/car1.jpg"/></a>
      
      <p><input id="input1" value=''/></p>
      

      

    </div>
    )

    

       
}
reactDom.render(<Body />, document.getElementById('root'));
          var dayArray =[];

     
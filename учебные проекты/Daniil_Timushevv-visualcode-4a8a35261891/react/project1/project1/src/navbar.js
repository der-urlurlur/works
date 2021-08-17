import react from 'react';
import reactDom from 'react-dom';
import './css.css';
const Navbar = () => (
  <ul className="nav">
    <li><a className="active" href="react\project1\project1\public\index.html#main">Главная</a></li>
    <li><a className="ref_journal" href="react\project1\project1\public\index.html#calendar">календарь</a></li>
    <li><a className="ref_about" href="react\project1\project1\public\index.html#links">Связаться</a></li>
    <li><a className="ref_team" href="react\project1\project1\public\index.html#team">Команда</a></li>
    <li><a className="ref_albums" href="react\project1\project1\public\index.html#albums">Альбомы</a></li>
  </ul>

)
export default Navbar;

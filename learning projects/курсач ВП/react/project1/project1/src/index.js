
import reactDom from 'react-dom';
import './css.css';
import Navbar from './navbar.js'
import Header from './header.js'

import Links from './links.js'
import Last from './lastposts.js'
import Images from './images.js'
import Team from './team.js'
import Calendar from './calendar';

const Body = () => {
  return (

    <div>

      <Header />
      <Navbar />
      <div className="row">
        <div className="leftcolumn">
          <div className="card" >
            <h2>Цели и задачи центра</h2>

            <p>• Информационное сопровождение деятельности студенческой секции профкома КНИТУ</p>
            <p>• Информационное наполнение и постоянное совершенствование сайта студенческой секции профкома КНИТУ</p>
            <p>• Публикация актуальной информации в официальных группах и аккаунтах в социальных сетях и мессенджерах: Вконтакте, Instagram</p>
            <p>• Создание дизайна и макетов афиш, буклетов, дипломов, грамот, информационных раздаточных материалов для мероприятий</p>
            <p>• Создание фото-, видео-, радиоматериалов для официальных групп и аккаунтов в социальных сетях</p>
            <p>• Взаимодействие со СМИ университета, города и республики.</p>

          </div>

          <div id="team">
            <h1 >Наша команда</h1>
            <Team />
          </div>
          
          <div id="albums">
            <h1>Наши альбомы</h1>
            <Images />
          </div>
          
          <Calendar/>

            </div>
              <div className="rightcolumn">
                <Last />
                <Links />
                
              </div>
            </div >
            <a id="links"/>
            <Links />
          </div>)



       
}
reactDom.render(<Body />, document.getElementById('root'));
          var dayArray =[];
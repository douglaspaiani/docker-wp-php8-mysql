import React, { useState } from 'react';
import StyledHeader from './styles';
import logo from '../img/blog-logo.png';

const Header = () => {
  const [menuActive, setMenuActive] = useState(false);

  const handleMenuClick = () => {
    setMenuActive(!menuActive);
  };

  const handleMenuItemClick = () => {
    setMenuActive(false);
  };

  return (
    <StyledHeader>
      <nav className='container'>
        <a href='/'>
          <img src={logo} alt='Logo em construção' id='logo' />
        </a>
        <img
          src='https://raw.githubusercontent.com/william-costa/wdev-mock-site-resources/master/assets/images/menu.svg'
          alt='Abrir menu'
          id='menu-button'
          onClick={handleMenuClick}
        />
        {menuActive && <div id='menu-overlay' onClick={handleMenuClick}></div>}
        <div id='menu-items' className={menuActive ? 'active' : ''}>
          <ul>
            <img src={logo} alt='Logo em construção' id='menu-logo' />
            <li>
              <a href='/' onClick={handleMenuItemClick}>
                Home
              </a>
            </li>
            <li>
              <a href='/' onClick={handleMenuItemClick}>
                Sobre
              </a>
            </li>
            <li>
              <a href='/' onClick={handleMenuItemClick}>
                Contato
              </a>
            </li>
          </ul>
        </div>
      </nav>
    </StyledHeader>
  );
};

export default Header;

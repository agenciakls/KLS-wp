import Image from "next/image"
import React from "react";
import Link from "next/link"

class Header extends React.Component {
    toggleMenu() {
        alert('test');
    }
    render() {
        const backgroundProps = this.props.background;
        
        return(
            <div>
                <header className={(backgroundProps ? "header-background" : "header-normal")}>
                    <div className="header-area" style={{backgroundImage: "url('/img/background-banner-desktop.png')"}}>
                        <div className="container">
                            <div className="header-background">
                            </div>
                            <div className="header-main">
                                <div className="logo">
                                    <Link href="/" passHref>
                                        <a>
                                            <Image src="/img/logo.png" width={182} height={71} alt="Logo - Agência KLS" />
                                        </a>
                                    </Link>
                                    <div className="list-socials">
                                        <div className="single-socials">
                                            <a href="https://pt-br.facebook.com/AgenciaYxe/" rel="noreferrer" target="_blank">
                                                <i className="fab fa-facebook-square"></i>
                                            </a>
                                        </div>
                                        <div className="single-socials">
                                            <a href="https://www.instagram.com/agenciayxe/" rel="noreferrer" target="_blank">
                                                <i className="fab fa-instagram"></i>
                                            </a>
                                        </div>
                                        <div className="single-socials">
                                            <a href="https://www.youtube.com/user/YxePublicidade" rel="noreferrer" target="_blank">
                                                <i className="fab fa-youtube"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div className="nav-button">
                                    <div className="hamburger hamburger--squeeze" onClick={this.toggleMenu}>
                                        <div className="hamburger-box">
                                            <div className="hamburger-inner"></div>
                                        </div>
                                    </div>
                                </div>
                                <nav>
                                    <div id="menu-principal-header" className="menu-principal-header">
                                        <ul id="header-nav" className="header-menu">
                                            <li id="nav-menu-item-23" className="main-menu-item  menu-item-even menu-item-depth-0 menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-12 current_page_item">
                                                <Link href="/" className="menu-link main-menu-link" passHref>
                                                    <a>
                                                        <i className="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-12 current_page_item"></i> Início
                                                    </a>
                                                </Link>
                                            </li>
                                            <li id="nav-menu-item-22" className="main-menu-item  menu-item-even menu-item-depth-0 menu-item menu-item-type-post_type menu-item-object-page">
                                                <Link href="/quem-somos" className="menu-link main-menu-link" passHref>
                                                    <a>
                                                        <i className="menu-item menu-item-type-post_type menu-item-object-page"></i> Quem Somos
                                                    </a>
                                                </Link>
                                            </li>
                                            <li id="nav-menu-item-21" className="main-menu-item  menu-item-even menu-item-depth-0 menu-item menu-item-type-post_type menu-item-object-page">
                                                <Link href="/contato" className="menu-link main-menu-link" passHref>
                                                    <a>
                                                        <i className="menu-item menu-item-type-post_type menu-item-object-page"></i> Contato
                                                    </a>
                                                </Link>
                                            </li>
                                            <li id="nav-menu-item-20" className="main-menu-item  menu-item-even menu-item-depth-0 menu-item menu-item-type-post_type menu-item-object-page">
                                                <Link href="/trabalhe-conosco" className="menu-link main-menu-link" passHref>
                                                    <a>
                                                        <i className="menu-item menu-item-type-post_type menu-item-object-page"></i> Trabalhe Conosco
                                                    </a>
                                                </Link>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <div id="pre-list-container" className="header-buttons">
                                <div className="header-list-buttons">
                                    <a href="tel:+552133252407" rel="noreferrer" target="_blank">
                                        <button className="button-call" type="button">
                                            <i className="fas fa-phone">
                                            </i> (21) 3325-2407
                                        </button>
                                    </a>
                                    <a href="tel:+552131180419" rel="noreferrer" target="_blank">
                                        <button className="button-call" type="button">
                                            <i className="fas fa-phone">
                                            </i> (21) 3118-0419
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
            </div>
        )
    }
}
export default Header;
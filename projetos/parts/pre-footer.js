import Link from 'next/link'

export default function PreFooter() {
    return(
        <div className="pre-footer">
            <div className="container">
                <div id="menu-principal-footer" className="menu-principal-footer">
                    <ul id="footer-nav" className="footer-menu">
                        <li id="nav-menu-item-23" className="main-menu-item  menu-item-even menu-item-depth-0 menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-12 current_page_item">
                            <Link href="/" className="menu-link main-menu-link" passHref>
                                <a>
                                    <i className="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-12 current_page_item">
                                    </i> Início
                                </a>
                            </Link>
                        </li>
                        <li id="nav-menu-item-22" className="main-menu-item  menu-item-even menu-item-depth-0 menu-item menu-item-type-post_type menu-item-object-page">
                            <Link href="/quem-somos/" className="menu-link main-menu-link" passHref>
                                <a>
                                    <i className="menu-item menu-item-type-post_type menu-item-object-page">
                                    </i> Quem Somos
                                </a>
                            </Link>
                        </li>
                        <li id="nav-menu-item-21" className="main-menu-item  menu-item-even menu-item-depth-0 menu-item menu-item-type-post_type menu-item-object-page">
                            <Link href="/contato/" className="menu-link main-menu-link" passHref>
                                <a>
                                    <i className="menu-item menu-item-type-post_type menu-item-object-page">
                                    </i> Contato
                                </a>
                            </Link>
                        </li>
                        <li id="nav-menu-item-20" className="main-menu-item  menu-item-even menu-item-depth-0 menu-item menu-item-type-post_type menu-item-object-page">
                            <Link href="/trabalhe-conosco/" className="menu-link main-menu-link" passHref>
                                <a>
                                    <i className="menu-item menu-item-type-post_type menu-item-object-page">
                                    </i> Trabalhe Conosco
                                </a>
                            </Link>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    )
}
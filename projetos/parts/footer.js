import Image from "next/image"
import Link from 'next/link'

export default function Footer() {
    return(
        <footer>
            <div className="container">
                <div className="row">
                    <div className="col-md-4 footer-data">
                        <div className="element-footer">
                            <Image src="/img/logo.png" width={192} height={71} className="img-fluid footer-logo" alt="Logo - Agência KLS" />
                        </div>
                        <div className="element-footer">
                            <h3 className="title-about">
                                Quem Somos
                            </h3>
                            <p>
                                Um modo interativo de sua marca chegar aos seus clientes. Temos uma equipe de profissionais capacitados e equipamentos de alta qualidade, para o melhor resultado dos projetos.
                            </p>
                        </div>
                    </div>
                    <div className="col-md-3">
                        <div className="element-footer">
                            <h3 className="title-links">Links Importantes</h3>
                            <ul className="links-importants">
                                <li><a href="">Gestão de Redes Sociais</a></li>
                                <li><a href="">Desenvolvimento de Sites</a></li>
                                <li><a href="">Gestão de Tráfego</a></li>
                                <li><a href="">SEO e Conteúdo</a></li>
                                <li><a href="">Fotografia, Filmagem e Edição</a></li>
                                <li><a href="">Identidade Visual</a></li>
                            </ul>
                        </div>
                    </div>
                    <div className="col-md-5 footer-about">
                        <div className="element-footer">
                            <h3>Contato</h3>
                            <div className="text-footer">
                                <div className="row">
                                    <div className="col-md-6"><button className="btn-default btn-sm d-block btn-border">(21) 98911-3353</button></div>
                                    <div className="col-md-6"><button className="btn-default btn-sm d-block btn-inverted">Entre em contato</button></div>
                                </div>
                            </div>
                        </div>
                        <div className="element-footer">
                            <h3 className="title-socials">Redes Sociais</h3>
                            <div className="footer-site">
                                <div className="list-socials">
                                    <div className="single-socials">
                                        <a href="https://pt-br.facebook.com/AgenciaYxe/" rel="noreferrer" target="_blank">
                                            <i className="fab fa-facebook-square">
                                            </i>
                                        </a>
                                    </div>
                                    <div className="single-socials">
                                        <a href="https://www.instagram.com/agenciayxe/" rel="noreferrer" target="_blank">
                                            <i className="fab fa-instagram">
                                            </i>
                                        </a>
                                    </div>
                                    <div className="single-socials">
                                        <a href="https://www.youtube.com/user/YxePublicidade" rel="noreferrer" target="_blank">
                                            <i className="fab fa-youtube">
                                            </i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    )
}
import Header from './parts/header'
import HeaderTitle from './parts/header-title'
import PreFooter from './parts/pre-footer'
import Footer from './parts/footer'

export default function contato() {
    return(
        
        <div>
            <Header background={true} />
            <HeaderTitle title={"Contato"} />
                <main className="page page-contact">
                    <div className="container">
                        <div className="row">
                            <div className="col-md-6 form-contact">
                                <form action="" method="post" id="form-contact">
                                    <input type="text" name="name" id="name" className="input-contato" placeholder="Nome" />
                                    <input type="text" name="email" id="email" className="input-contato" placeholder="E-mail" />
                                    <input type="text" name="phone" id="phone" className="input-contato" placeholder="Telefone" />
                                    <textarea name="message" id="message" className="input-contato" cols="30" rows="5" placeholder="Digite sua mensagem"></textarea>
                                    <input type="hidden" name="action" value="contact" />
                                    <input type="submit" className="button-contato" />
                                    <br />
                                </form>
                            </div>
                            <div className="col-md-6 info-contact">
                                <div className="list-info-contacts">
                                    <a href="https://www.facebook.com/" rel="noreferrer" target="_blank">
                                        <div className="single-contact">
                                            <div className="contact-icon">
                                                <i className="fab fa-facebook"></i>
                                            </div>
                                            <div className="contact-icon">
                                                /agenciakls
                                            </div>
                                        </div>
                                    </a>
                                    <a href="https://www.instagram.com/" rel="noreferrer" target="_blank">
                                        <div className="single-contact">
                                            <div className="contact-icon">
                                                <i className="fab fa-instagram"></i>
                                            </div>
                                            <div className="contact-icon">
                                                @agenciakls a
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            <PreFooter />
            <Footer />
        </div>
    )
}
export default function HomeTips () {
    return (
        <section className="section section-tips">
            <div className="container">
                <h1>BLOG
                </h1>
                <hr />
                <p className="description-tips text-center">Para <strong>vender</strong> um serviço é preciso ter <strong>autoridade no assunto</strong>!
                </p>
                <div className="row list-tips list-posts">
                    <div className="col-md-4 col-sm-6">
                        <a href="/chatbots">
                            <div className="content">
                                <div className="img-default" style={{backgroundImage: "url('/img/tips/ferramentas.png')"}}>
                                </div>
                                <div className="text">
                                    <h2>VÍDEO PATROCINADO NO LINKEDIN
                                    </h2>
                                    <span className="view-more">Ver Mais
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div className="col-md-4 col-sm-6">
                        <a href="/chatbots">
                            <div className="content">
                                <div className="img-default" style={{backgroundImage: "url('/img/tips/chatbots.png')"}}>
                                </div>
                                <div className="text">
                                    <h2>CHATBOTS: O FUTURO DO ATENDIMENTO </h2>
                                    <span className="view-more">Ver Mais</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div className="col-md-4 col-sm-6">
                        <a href="/chatbots">
                            <div className="content">
                                <div className="img-default" style={{backgroundImage: "url('/img/tips/linkedin.png')"}}>
                                </div>
                                <div className="text">
                                    <h2>5 FERRAMENTAS PARA REDES SOCIAIS QUE VOCÊ PRECISA CONHECER!
                                    </h2>
                                    <span className="view-more">Ver Mais
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div className="col-md-12 text-center">
                        <a href="/chatbots">
                            <button type="button" className="button-default">
                                VER TODOS OS ARTIGOS
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    )
}
import Image from 'next/image'

export default function HomeServices() {
    return (
        <section className="section home-services">
            <div className="container">
                <h1>NOSSOS SERVIÇOS</h1>
                <hr />
                <p className="description-services text-center">Somos uma agência de <strong>Publicidade</strong> e <strong>Marketing Digital</strong> focada no resultado dos nossos clientes.
                </p>
                <div className="content-services">
                    <div className="row d-flex align-items-stretch">
                        <div className="col-md-4 my-2">
                            <div className="single-service">
                                <div className="img-service">
                                    <i className="far fa-thumbs-up"></i>
                                </div>
                                <h3 className="title-service">
                                    Redes Sociais
                                </h3>
                                <p className="text-service">
                                    Criamos um planejamento para a sua empresa, visando o reconhecimento de sua marca e o retorno do seu negócio no meio digital.
                                </p>
                                <ul>
                                    <li>- FACEBOOK, INSTAGRAM, YOUTUBE</li>
                                    <li>- MARKETING DIGITAL</li>
                                    <li>- SEGUIDORES E ENGAJAMENTO</li>
                                    <li>- ESTRATÉGIA DE CONTEÚDO</li>
                                </ul>
                            </div>
                        </div>
                        <div className="col-md-4 my-2">
                            <div className="single-service">
                                <div className="img-service">
                                    <i className="fas fa-laptop"></i>
                                </div>
                                <h3 className="title-service">
                                    Desenvolvimento de sites
                                </h3>
                                <p className="text-service">
                                    Um modo interativo de sua marca chegar aos seus clientes. Temos uma equipe de profissionais capacitados e equipamentos de alta qualidade, para o melhor resultado dos projetos.
                                </p>
                                <ul>
                                    <li>- criação DE SITES</li>
                                    <li>- DESENVOLVIMENTO DE APPS</li>
                                    <li>- CRIAÇÃO DE LAYOUT</li>
                                    <li>- SITES RESPONSIVOS</li>
                                    <li>- SISTEMAS WEB</li>
                                </ul>
                            </div>
                        </div>
                        <div className="col-md-4 my-2">
                            <div className="single-service">
                                <div className="img-service">
                                    <i className="fas fa-bullhorn"></i>
                                </div>
                                <h3 className="title-service">
                                    gestão de tráfego
                                </h3>
                                <p className="text-service">
                                    Criamos campanhas e peças publicitárias que promovam seu negócio, com o foco no crescimento de bons resultados e uma boa imagem junto ao seu público.
                                </p>
                                <ul>
                                    <li>- GOOGLE ADS</li>                            
                                    <li>- FACEBOOK E INSTAGRAM (ADS)</li>
                                    <li>- RELATÓRIOS DE RESULTADOS</li>
                                    <li>- AUMENTO DE VENDAS E RESULTADOS</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div className="col-md-4 my-2">
                            <div className="single-service">
                                <div className="img-service">
                                    <i className="far fa-thumbs-up"></i>
                                </div>
                                <h3 className="title-service">
                                    Redes Sociais
                                </h3>
                                <p className="text-service">
                                    Criamos um planejamento para a sua empresa, visando o reconhecimento de sua marca e o retorno do seu negócio no meio digital.
                                </p>
                                <ul>
                                    <li>- FACEBOOK, INSTAGRAM, YOUTUBE</li>
                                    <li>- MARKETING DIGITAL</li>
                                    <li>- SEGUIDORES E ENGAJAMENTO</li>
                                    <li>- ESTRATÉGIA DE CONTEÚDO</li>
                                </ul>
                            </div>
                        </div>
                        <div className="col-md-4 my-2">
                            <div className="single-service">
                                <div className="img-service">
                                    <i className="far fa-thumbs-up"></i>
                                </div>
                                <h3 className="title-service">
                                    Desenvolvimento de sites
                                </h3>
                                <p className="text-service">
                                    Um modo interativo de sua marca chegar aos seus clientes. Temos uma equipe de profissionais capacitados e equipamentos de alta qualidade, para o melhor resultado dos projetos.
                                </p>
                                <ul>
                                    <li>- criação DE SITES</li>
                                    <li>- DESENVOLVIMENTO DE APPS</li>
                                    <li>- CRIAÇÃO DE LAYOUT</li>
                                    <li>- SITES RESPONSIVOS</li>
                                    <li>- SISTEMAS WEB</li>
                                </ul>
                            </div>
                        </div>
                        <div className="col-md-4 my-2">
                            <div className="single-service">
                                <div className="img-service">
                                    <i className="far fa-thumbs-up"></i>
                                </div>
                                <h3 className="title-service">
                                    Gestão de Tráfego
                                </h3>
                                <p className="text-service">
                                    Criamos campanhas e peças publicitárias que promovam seu negócio, com o foco no crescimento de bons resultados e uma boa imagem junto ao seu público.
                                </p>
                                <ul>
                                    <li>- GOOGLE ADS</li>                            
                                    <li>- FACEBOOK E INSTAGRAM (ADS)</li>
                                    <li>- RELATÓRIOS DE RESULTADOS</li>
                                    <li>- AUMENTO DE VENDAS E RESULTADOS</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    )
}
import Header from './parts/header'
import HeaderTitle from './parts/header-title'
import PreFooter from './parts/pre-footer'
import Footer from './parts/footer'
import Image from "next/image"

export default function QuemSomos() {
    return(
        <div>
            <Header background={true} />
            <HeaderTitle title={"Quem Somos"} />

            <main className="page-biography section">
                <div className="container">
                    <div className="box-biography">
                        <section className="row">
                            <div className="col-md-6">
                                <div className="about-figure">
                                    <div className="image-figure img-circle" style={{backgroundImage: "url('/img/banner-equipe.jpg')"}} alt=""></div>
                                    <Image src="/img/banner-equipe.jpg" height={500} width={500} className="img-fluid rounded-circle" alt="" />
                                </div>
                            </div>
                            <div className="col-md-6">
                                <div className="row">
                                    <div className="col-md-12">
                                        <div className="title-section">
                                            <h3>
                                                AGÊNCIA KLS
                                            </h3>
                                            <p>Nossa História</p>
                                        </div>
                                    </div>
                                    <div className="col-md-12">
                                        <div className="content-section">
                                            <p>A Agência KLS é uma agência focada no crescimento do seu negócio. Estamos em constante atualização e aprendizado. Somos uma empresa totalmente adaptada ao novo mundo digital. Venha fazer parte desse mundo e descobrir resultados incríveis para o seu negócio.</p>
                                            <p>A Agência KLS é uma agência focada no crescimento do seu negócio. Estamos em constante atualização e aprendizado. Somos uma empresa totalmente adaptada ao novo mundo digital. Venha fazer parte desse mundo e descobrir resultados incríveis para o seu negócio.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <div className="content-icons-about my-5">
                    <div className="container-fluid">
                        <div className="row">
                            <div className="col-md-4 px-0 text-center">
                                <Image src="/img/estrutura-1.jpg" alt="" width={500} height={500} className="img-fluid" />
                            </div>
                            <div className="col-md-4 px-0 text-center">
                                <Image src="/img/estrutura-2.jpg" alt="" width={500} height={500} className="img-fluid" />
                            </div>
                            <div className="col-md-4 px-0 text-center">
                                <Image src="/img/estrutura-3.jpg" alt="" width={500} height={500} className="img-fluid" />
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
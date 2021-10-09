import Image from "next/image"

export default function HomeCertification() {
    return (
        <section className="home-certification section">
            <div className="container">
                <h1>UMA AGÊNCIA CERTIFICADA E RECONHECIDA
                </h1>
                <hr />
                <div className="content-certification">
                    <div className="list-certification row justify-content-center">
                        <div className="single-certification col-md-4 col-6">
                            <Image src="/img/certification/selo-google.png" width={200} height={100} alt="" />
                        </div>
                        <div className="single-certification col-md-4 col-6">
                            <Image src="/img/certification/selo-fenapro.png" width={200} height={100} alt="" />
                        </div>
                        <div className="single-certification col-md-4 col-6">
                            <Image src="/img/certification/selo-cenp.png" width={200} height={100} alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
    )
}
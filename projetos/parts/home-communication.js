import Image from "next/image"

export default function HomeCommunication () {
    return (
        <section className="home-communication section">
            <div className="container">
                <h1>PARCERIA COM OS PRINCIPAIS VEÍCULOS DE COMUNICAÇÃO
                </h1>
                <hr />
                <div className="content-communication">
                    <div className="list-communication row">
                        <div className="single-communication col-md-4 col-6">
                            <Image src="/img/communication/logo-globo.png" height={167} width={250} alt="" />
                        </div>
                        <div className="single-communication col-md-4 col-6">
                            <Image src="/img/communication/logo-record.png" height={167} width={250} alt="" />
                        </div>
                        <div className="single-communication col-md-4 col-6">
                            <Image src="/img/communication/logo-sbt.png" height={167} width={250} alt="" />
                        </div>
                        <div className="single-communication col-md-4 col-6">
                            <Image src="/img/communication/logo-band.png" height={167} width={250} alt="" />
                        </div>
                        <div className="single-communication col-md-4 col-6">
                            <Image src="/img/communication/logo-tupi.png" height={167} width={250} alt="" />
                        </div>
                        <div className="single-communication col-md-4 col-6">
                            <Image src="/img/communication/logo-redetv.png" height={167} width={250} alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
    )
}
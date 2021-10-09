import Header from './parts/header'
import HomeBanner from './parts/home-banner'
import Nav from './parts/nav'
import HomeServices from './parts/home-services'
import HomeCall from './parts/home-call'
import HomeTips from './parts/home-tips'
import HomeCommunication from './parts/home-communication'
import HomeCertification from './parts/home-certification'
import PreFooter from './parts/pre-footer'
import Footer from './parts/footer'
 
export default function Home() {
    return (
        <div>
            <Header background={false} />
            <Nav />
            <HomeBanner />
            <HomeServices />
            <HomeCall />
            <HomeTips />
            <Footer />
        </div>
    )
}

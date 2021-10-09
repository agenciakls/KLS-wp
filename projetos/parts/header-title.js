import React from "react";

class HeaderTitle extends React.Component {
    render() {
        const ContentTitle = this.props.title;
        return (
            <section className="content-title">
                <div className="container">
                    <h1>{ContentTitle ? ContentTitle : "Página"}</h1>
                </div>
            </section>
        )
    }
}

export default HeaderTitle;
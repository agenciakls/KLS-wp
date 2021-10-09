import styles from '../styles/Home.module.scss'
import React from 'react'
import Image from 'next/image'
import LogoImg from '../public/img/logo.png'

export default function Construcao() {

    return (
        <div className={styles.container}>
            <img src={LogoImg} alt="Logo" />
            <p className={styles.paragraph}>Estamos construindo a melhor experiência pra você!</p>
        </div>
    )
}

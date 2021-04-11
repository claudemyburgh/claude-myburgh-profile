import React from 'react'
import { render } from 'react-dom'
import img from './../../../../public/img/hero.jpg'
import Tilt from "./Tilt";


const HeroImage = () => {
    return (
        <div className="hero__box__outer">
            <Tilt className="hero__box__wrapper">
                    <div className="hero__box__inner">
                        <div className="hero__box"/>
                        <div className="hero__box"/>
                        <div className="hero__box">
                            <img src={img} alt="Claude avatar"/>
                        </div>
                    </div>
            </Tilt>
        </div>
    )
}


export default HeroImage

const heroImage = document.getElementById('hero-image')

if (heroImage) {
    render(<HeroImage/>, heroImage)
}


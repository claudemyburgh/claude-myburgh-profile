require('./bootstrap');
require('alpinejs')


import HeroImage from "./react/components/HeroImage"
import ReposList from "./react/components/ReposList";

import ParticleSystem from "./canvas";

new ParticleSystem({
    canvas: 'hero-canvas'
})


const wave = document.querySelectorAll('.wave')
const turbulence = document.querySelector('feTurbulence')
let frequency = 0.00001
turbulence.setAttribute('baseFrequency', frequency + ' 0.0001')


wave.forEach(button => {
    button.addEventListener('mouseover', () => {
        frequency = 0.00001
        frequency += 0.075
        // frequency = Math.random() * 5 - 1
        turbulence.setAttribute('baseFrequency', frequency + ' 0.001')
    })
})

const toggleMenu = () => {
    document.getElementById('nav').classList.toggle('open')
}


document.getElementById('navTrigger').addEventListener('click', toggleMenu)



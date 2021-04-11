
export default class ParticleSystem {

    constructor(args) {
        this.args = args || ''
        this.mouseCoords = {
            x: null,
            y: null
        }
        this.particlesArray = []
        this.init()
    }

    defaults() {
        for (let e = arguments, i = 0; i < e.length; i++ ) {
            if (void 0 !== e[i]) return e[i]
        }
    }

    get options() {
        return {
            canvas: this.defaults(this.args.canvas, 'canvas')
        }
    }

    get mousePosition () {
        return {
            x: this.mouseCoords.x,
            y: this.mouseCoords.y
        }
    }

    set mousePosition (e) {
        this.mouseCoords.x = e.x
        this.mouseCoords.y = e.y
    }


    init() {
        const canvas = document.getElementById(this.options.canvas)


        if (typeof canvas === "object" && canvas === null) return
        this.ctx = canvas.getContext('2d')
        this.width = canvas.width = window.innerWidth
        this.height = canvas.height = window.innerHeight

        /** Resize window */
        window.addEventListener('resize', () => {
            canvas.width = window.innerWidth
            canvas.height = window.innerHeight
        })

        /** Mouse pointer tracker */
        window.addEventListener('mousemove', (mouseEvent) => {
            this.mousePosition = mouseEvent
            if (this.particlesArray.length >= 100) return

            this.particlesArray.push(new Particle({
                ctx: this.ctx,
                x: this.mousePosition.x,
                y: this.mousePosition.y
            }))
        })


        this.animate()
    }

    drawBlock() {
        this.ctx.fillStyle = 'white'
        this.ctx.fillRect(this.mousePosition.x - 100, this.mousePosition.y - 100, 200, 200)
    }


    animate() {
        this.ctx.clearRect(0, 0, this.width, this.height)

        for (let i = 0; i < this.particlesArray.length; i++) {
            this.particlesArray[i].update()
            this.particlesArray[i].draw()

            /** remove particle at position `i` if small than min-size */
            if(this.particlesArray[i].size < 1) {
                this.particlesArray.splice(i, 1)
            }
        }

        requestAnimationFrame(() => this.animate())
    }
}

class Particle {

    constructor(args) {
        this.args = args || { ctx: '', x: 0, y: 0 }
        /** required args */
        this.ctx = this.args.ctx
        this.x = this.args.x
        this.y = this.args.y
        this.size = this.args.size || Math.random() * 3 + 0.9

        this.speedX = Math.random() * 10 - 5
        this.speedY = Math.random() * 10 - 5
    }

    update() {
        this.x += this.speedX
        this.y += this.speedY
        if (this.size > 0.2) this.size -= 0.1
    }

    draw() {
        this.ctx.fillStyle = 'white'
        this.ctx.beginPath()
        this.ctx.arc(this.x, this.y, this.size, 0,  Math.PI * 2)
        this.ctx.fill()
    }




}

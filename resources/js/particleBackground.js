document.addEventListener("DOMContentLoaded", () => {
    const canvas = document.createElement('canvas');
    canvas.classList.add('particle-bg');
    document.body.appendChild(canvas);

    const ctx = canvas.getContext('2d');

    // Limit device pixel ratio for better mobile performance
    const DPR = Math.min(window.devicePixelRatio, 1.5);

    function setCanvasSize() {
        canvas.width = window.innerWidth * DPR;
        canvas.height = window.innerHeight * DPR;

        canvas.style.width = `${window.innerWidth}px`;
        canvas.style.height = `${window.innerHeight}px`;

        canvas.style.position = "fixed";
        canvas.style.top = 0;
        canvas.style.left = 0;
        canvas.style.zIndex = "-1";
        canvas.style.pointerEvents = "none";
    }

    setCanvasSize();

    class Particle {
        constructor(x, y, effect) {
            this.originX = x;
            this.originY = y;
            this.effect = effect;
            this.x = Math.floor(x);
            this.y = Math.floor(y);
            this.ctx = this.effect.ctx;
            this.ctx.fillStyle = 'rgba(255, 255, 255, 0.2)';
            this.vx = 0;
            this.vy = 0;
            this.ease = 0.2;
            this.friction = 0.95;
            this.dx = 0;
            this.dy = 0;
            this.distance = 0;
            this.force = 0;
            this.angle = 0;
            this.size = Math.floor(Math.random() * 4) + 1;
            this.draw();
        }

        draw() {
            this.ctx.beginPath();
            this.ctx.fillRect(this.x, this.y, this.size, this.size);
        }

        update() {
            this.dx = this.effect.mouse.x - this.x;
            this.dy = this.effect.mouse.y - this.y;
            this.distance = this.dx * this.dx + this.dy * this.dy;
            this.force = -this.effect.mouse.radius / this.distance * 8;

            if (this.distance < this.effect.mouse.radius) {
                this.angle = Math.atan2(this.dy, this.dx);
                this.vx += this.force * Math.cos(this.angle);
                this.vy += this.force * Math.sin(this.angle);
            }

            this.x += (this.vx *= this.friction) + (this.originX - this.x) * this.ease;
            this.y += (this.vy *= this.friction) + (this.originY - this.y) * this.ease;
            this.draw();
        }
    }

    class Effect {
        constructor(width, height, context) {
            this.width = width;
            this.height = height;
            this.ctx = context;
            this.particlesArray = [];

            // Fewer particles on mobile
            this.gap = window.innerWidth < 768 ? 40 : 25;

            this.mouse = {
                radius: 3000,
                x: 0,
                y: 0
            };

            window.addEventListener('mousemove', e => {
                this.mouse.x = e.clientX * DPR;
                this.mouse.y = e.clientY * DPR;
            });

            // Add touch support
            window.addEventListener('touchmove', e => {
                const touch = e.touches[0];
                this.mouse.x = touch.clientX * DPR;
                this.mouse.y = touch.clientY * DPR;
            });

            // Prevent scroll during touch interaction
            canvas.addEventListener('touchmove', e => e.preventDefault(), { passive: false });

            window.addEventListener('resize', () => {
                setCanvasSize();
                this.width = canvas.width;
                this.height = canvas.height;
                this.particlesArray = [];
                this.init();
            });

            this.init();
        }

        init() {
            for (let x = 0; x < this.width; x += this.gap) {
                for (let y = 0; y < this.height; y += this.gap) {
                    this.particlesArray.push(new Particle(x, y, this));
                }
            }
        }

        update() {
            this.ctx.clearRect(0, 0, this.width, this.height);
            for (let i = 0; i < this.particlesArray.length; i++) {
                this.particlesArray[i].update();
            }
        }
    }

    let effect = new Effect(canvas.width, canvas.height, ctx);

    function animate() {
        effect.update();
        requestAnimationFrame(animate);
    }

    animate();
});

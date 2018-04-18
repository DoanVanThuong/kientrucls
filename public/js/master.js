(function () {

    //menu
    $(window).scroll(function () {
        var currentHeight = $(document).scrollTop();
        if ($('body').hasClass('home')) {
            var navHeight = $(".stonetile-banner").outerHeight();
            if (currentHeight >= navHeight) {
                $('#menu-top').hide();
                $('#scroll-menu').show();
                $('nav').addClass('fixed');
            } else {
                $('#menu-top').show();
                $('#scroll-menu').hide();
                $('nav').removeClass('fixed');
            }
        } else {
            if (currentHeight > 0) {
                $('nav').addClass('fixed');
            } else {
                $('nav').removeClass('fixed');
            }
        }
    });

    //when scrolling to 50px will be appear
    window.onscroll = function () { scrollFunction() };
    function scrollFunction() {
        if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
            document.getElementById('open').style.opacity = "0.5";
        } else {
            document.getElementById('scroll').style.display = "none";
        }
    }

    //scroll to top  
    $("#scroll").click(function (e) {
        e.preventDefault();
        $('html,body').animate({ scrollTop: 0 }, 600);
    });

    $('#search-btn').click(function () {
        $('#search').slideToggle();
    });
    // shine effect
    function ShineImg(img) {

        this.imgToCanvas = function (img) {
            this.canvas = document.createElement('canvas');
            this.canvas.width = img.width;
            this.canvas.height = img.height;
            if (img.className != '') { this.canvas.className = img.className; }
            this.context = this.canvas.getContext('2d');
            this.image = img;
            this.context.drawImage(img, -1, 0, canvas.width, canvas.height);
            img.parentNode.replaceChild(this.canvas, img);
        }

        this.imgToCanvas(img);

        this.placeGradient = function (x, y) {
            this.context.save();
            this.gradient = this.context.createLinearGradient(x, 40 * Math.sin(15 * Math.PI / 180), x + 40, 40 * Math.sin(15 * Math.PI / 180));
            gradient.addColorStop(0, 'rgba(255,255,255,0)');
            gradient.addColorStop(0.5, 'rgba(255,255,255,0.5)');
            gradient.addColorStop(1, 'rgba(255,255,255,0)');
            this.context.rotate(15 * Math.PI / 180);
            this.context.fillStyle = gradient;
            this.context.globalCompositeOperation = 'source-atop';
            this.context.fillRect(x, y - x * Math.sin(15 * Math.PI / 180), 40, this.canvas.height / Math.cos(15 * Math.PI / 180) + 40 * Math.sin(15 * Math.PI / 180));
            this.context.restore();
        }

        var x = -(this.canvas.width + this.canvas.height * Math.sin(15 * Math.PI / 180));
        this.animateGradient = function () {
            this.animation = setInterval(function () {
                this.context.clearRect(0, 0, this.canvas.width, this.canvas.height);
                this.context.drawImage(img, -1, 0, canvas.width, canvas.height);
                this.placeGradient(x, -40 * Math.sin(15 * Math.PI / 180));
                x += 1;
                if (x > this.canvas.width + this.canvas.height * Math.sin(15 * Math.PI / 180)) {
                    x = -(this.canvas.width + this.canvas.height * Math.sin(15 * Math.PI / 180));
                    clearInterval(this.animation);
                }
            }, 1);
        }

        this.shine = setInterval(this.animateGradient, 6000);

        window.addEventListener('blur', function () {
            clearInterval(this.shine);
        }, false);

        window.addEventListener('focus', function () {
            this.shine = setInterval(this.animateGradient, 7000);
        }, false);

        return this;

    }

    window.onload = function () {
        ShineImg(document.getElementById('logo2'));
    }
})();
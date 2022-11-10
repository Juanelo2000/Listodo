@section('content')
    <div>
        {{-- <style>
            @import url('https://fonts.googleapis.com/css?family=Lato:300,400,700,900');

            body {
                font-family: 'Lato';
                color: #d6f9dd;
            }

            * {
                padding: 0;
                margin: 0;
                box-sizing: border-box;
            }

            img {
                max-width: 100%;
            }

            .caption {
                position: absolute;
                top: 50%;
                left: 8rem;
                z-index: 9;
                transform: translateY(-50%);
                opacity: 0;
                transition: 500ms ease opacity, 500ms ease transform;
                transform: translateY(60px);

                &.current-caption {
                    transition-delay: 1000ms;
                    opacity: 1;
                    transform: translateY(0);
                }

                &.previous-caption {
                    transform: translateY(-60px);
                }

                .caption-heading {
                    transition: 500ms ease-in all;
                }

                .caption-heading h1 {
                    font-size: 4rem;
                    margin-bottom: 1.5rem;
                    text-transform: uppercase;
                    text-indent: -0.2rem;
                    letter-spacing: .2rem;
                    font-weight: 300;

                }

                .caption-subhead {
                    font-size: 1rem;
                    font-weight: 300;
                    text-transform: uppercase;
                    color: white;
                    // color: #909590;
                    letter-spacing: 4px;
                    word-spacing: .1rem;
                    margin-bottom: 2.5rem;
                    display: block;
                }

                a.btn {
                    color: #333;
                    font-size: 0.8rem;
                    text-decoration: none;
                    background-color: white;
                    padding: .5rem 1rem;
                    text-transform: uppercase;
                    letter-spacing: .2rem;
                    position: relative;
                    z-index: 9;
                    transition: 250ms ease-in background-color, 500ms ease-in color;

                    &:hover {
                        background-color: black;
                        color: white;
                    }

                    // word-spacing: rem;
                }
            }

            .container {

                width: 100%;
                height: 100vh;
                background-color: #2C302E;
                display: flex;
                position: relative;

            }

            .left-col,
            .right-col {
                width: 100%;
                box-sizing: border-box;
                height: calc(100% - 4rem);
                overflow: hidden;
            }

            .left-col {
                background-size: cover;
                background-postion: center top;
                overflow: hidden;
                margin: 2rem;
                position: relative;

                .slide {
                    filter: grayscale(100%);
                    position: absolute;
                    width: 100%;
                    height: 100%;
                    background-position: left top !important;
                    background-size: cover !important;
                    background-repeat: no-repeat;
                    opacity: 0;
                    transition: 1000ms cubic-bezier(1.000, 0.040, 0.355, 1.000) transform, 1000ms cubic-bezier(0.680, -0.550, 0.265, 1.550) clip-path;
                    transform: translateY(-100%);
                    scale: 1;
                    z-index: -1;

                    &.previous {
                        z-index: 1;
                        opacity: 1;
                        transform: translateY(0);
                        animation-delay: 1s;
                        clip-path: polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%);
                        transition: 3s ease transform;
                        will-change: transform;

                        &.change {
                            transform: translateY(50%);
                        }
                    }

                    &.next {
                        transform: translateY(-100%);
                        z-index: 3;
                        opacity: 1;
                        clip-path: polygon(0 0, 100% 0, 100% 90%, 0% 100%);
                    }

                    &.current {
                        opacity: 1;
                        transform: translateY(0) scale(1.25);
                        z-index: 2;
                        clip-path: polygon(0 0, 100% 0, 100% 100%, 0% 100%);
                    }

                }
            }

            .right-col {
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .right-col .preview {
                max-width: 400px;

            }

            .nav {
                display: block;
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                z-index: 6;
                overflow: hidden;

                // pointer-events:none;
                a {
                    color: rgba(250, 250, 250, 1);
                    font-size: 3rem;
                    text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.4);
                }

                &:hover {

                    .slide-up,
                    .slide-down {
                        opacity: .5;
                        transform: translateX(0);
                    }

                    .slide-up {}
                }

                .slide-up,
                .slide-down {
                    display: block;
                    position: absolute;
                    // width:100%;
                    text-align: center;
                    padding: 1rem;
                    opacity: 0;
                    transition: .25s ease opacity, .25s ease transform;
                    z-index: 99;

                    &:hover {
                        opacity: 1;
                    }

                    a {
                        text-decoration: none;
                        font-weight: 300 !important;

                    }

                }

                .slide-up {
                    top: 50%;
                    left: 0;
                    transform: translateX(-100%);
                }

                .slide-down {
                    top: 50%;
                    right: 0;
                    transform: translateX(100%);
                }

            }
        </style> --}}
        <div class="container" id="container">
            <div class="caption" id="slider-caption">
                <div class="caption-heading">
                    <h1>Lorem Ipsum</h1>
                </div>
                <div class="caption-subhead"><span>dolor sit amet, consectetur adipiscing elit.</span></div><a class="btn"
                    href="#">Sit Amet</a>
            </div>
            <div class="left-col" id="left-col">
                <div id="left-slider"></div>
            </div>
            <ul class="nav">
                <li class="slide-up"> <a href="#">
                        << /a>
                </li>
                <li class="slide-down"> <a id="down_button" href="#">></a></li>
            </ul>
        </div>

    </div>
    <script>
        let slide_data = [{
                'src': 'https://images.unsplash.com/photo-1506765336936-bb05e7e06295?ixlib=rb-0.3.5&s=d40582dbbbb66c7e0812854374194c2e&auto=format&fit=crop&w=1050&q=80',
                'title': 'Slide 1',
                'copy': 'DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT.'
            },
            {
                'src': 'https://images.unsplash.com/photo-1496309732348-3627f3f040ee?ixlib=rb-0.3.5&s=4d04f3d5a488db4031d90f5a1fbba42d&auto=format&fit=crop&w=1050&q=80',
                'title': 'Slide 2',
                'copy': 'DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT.'
            },
            {
                'src': 'https://images.unsplash.com/photo-1504271863819-d279190bf871?ixlib=rb-0.3.5&s=7a2b986d405a04b3f9be2e56b2be40dc&auto=format&fit=crop&w=334&q=80',
                'title': 'Slide 3',
                'copy': 'DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT.'
            },
            {
                'src': 'https://images.unsplash.com/photo-1478728073286-db190d3d8ce6?ixlib=rb-0.3.5&s=87131a6b538ed72b25d9e0fc4bf8df5b&auto=format&fit=crop&w=1050&q=80',
                'title': 'Slide 4',
                'copy': 'DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT.'
            },

        ];
        let slides = [],
            captions = [];

        let autoplay = setInterval(function() {
            nextSlide();
        }, 5000);
        let container = document.getElementById('container');
        let leftSlider = document.getElementById('left-col');
        // console.log(leftSlider);
        let down_button = document.getElementById('down_button');
        // let caption = document.getElementById('slider-caption');
        // let caption_heading = caption.querySelector('caption-heading');

        down_button.addEventListener('click', function(e) {
            e.preventDefault();
            clearInterval(autoplay);
            nextSlide();
            autoplay;
        });

        for (let i = 0; i < slide_data.length; i++) {
            let slide = document.createElement('div'),
                caption = document.createElement('div'),
                slide_title = document.createElement('div');

            slide.classList.add('slide');
            slide.setAttribute('style', 'background:url(' + slide_data[i].src + ')');
            caption.classList.add('caption');
            slide_title.classList.add('caption-heading');
            slide_title.innerHTML = '<h1>' + slide_data[i].title + '</h1>';

            switch (i) {
                case 0:
                    slide.classList.add('current');
                    caption.classList.add('current-caption');
                    break;
                case 1:
                    slide.classList.add('next');
                    caption.classList.add('next-caption');
                    break;
                case slide_data.length - 1:
                    slide.classList.add('previous');
                    caption.classList.add('previous-caption');
                    break;
                default:
                    break;
            }
            caption.appendChild(slide_title);
            caption.insertAdjacentHTML('beforeend',
                '<div class="caption-subhead"><span>dolor sit amet, consectetur adipiscing elit. </span></div>');
            slides.push(slide);
            captions.push(caption);
            leftSlider.appendChild(slide);
            container.appendChild(caption);
        }
        // console.log(slides);

        function nextSlide() {
            // caption.classList.add('offscreen');

            slides[0].classList.remove('current');
            slides[0].classList.add('previous', 'change');
            slides[1].classList.remove('next');
            slides[1].classList.add('current');
            slides[2].classList.add('next');
            let last = slides.length - 1;
            slides[last].classList.remove('previous');

            captions[0].classList.remove('current-caption');
            captions[0].classList.add('previous-caption', 'change');
            captions[1].classList.remove('next-caption');
            captions[1].classList.add('current-caption');
            captions[2].classList.add('next-caption');
            let last_caption = captions.length - 1;

            // console.log(last);
            captions[last].classList.remove('previous-caption');

            let placeholder = slides.shift();
            let captions_placeholder = captions.shift();
            slides.push(placeholder);
            captions.push(captions_placeholder);
        }

        let heading = document.querySelector('.caption-heading');


        // https://jonsuh.com/blog/detect-the-end-of-css-animations-and-transitions-with-javascript/
        function whichTransitionEvent() {
            var t,
                el = document.createElement("fakeelement");

            var transitions = {
                "transition": "transitionend",
                "OTransition": "oTransitionEnd",
                "MozTransition": "transitionend",
                "WebkitTransition": "webkitTransitionEnd"
            }

            for (t in transitions) {
                if (el.style[t] !== undefined) {
                    return transitions[t];
                }
            }
        }

        var transitionEvent = whichTransitionEvent()
        caption.addEventListener(transitionEvent, customFunction);

        function customFunction(event) {
            caption.removeEventListener(transitionEvent, customFunction);
            console.log('animation ended');

            // Do something when the transition ends
        }
    </script>
@endsection

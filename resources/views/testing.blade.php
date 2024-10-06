<div class="body">
    <div class="ccard">
        <div class="ccard-inner">
            <div class="ccard-front">
                <div class="ccard-bg"></div>
                <div class="ccard-glow"></div>
                <svg
                    width="72"
                    height="24"
                    viewBox="0 0 72 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                    class="logo">
                    <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M52.3973 1.01093L51.5588 5.99054C49.0448 4.56717 43.3231 4.23041 43.3231 6.85138C43.3231 7.89285 44.6177 8.60913 46.178 9.47241C48.5444 10.7817 51.5221 12.4291 51.5221 16.062C51.5221 21.8665 45.4731 24 41.4645 24C37.4558 24 34.8325 22.6901 34.8325 22.6901L35.7065 17.4848C38.1115 19.4688 45.4001 20.032 45.4001 16.8863C45.4001 15.5645 43.9656 14.785 42.3019 13.8811C40.0061 12.6336 37.2742 11.1491 37.2742 7.67563C37.2742 1.30988 44.1978 0 47.1132 0C49.8102 0 52.3973 1.01093 52.3973 1.01093ZM66.6055 23.6006H72L67.2966 0.414276H62.5732C60.3923 0.414276 59.8612 2.14215 59.8612 2.14215L51.0996 23.6006H57.2234L58.4481 20.1566H65.9167L66.6055 23.6006ZM60.1406 15.399L63.2275 6.72235L64.9642 15.399H60.1406ZM14.7942 16.3622L20.3951 0.414917H26.7181L17.371 23.6012H11.2498L6.14551 3.45825C2.83215 1.41281 0 0.807495 0 0.807495L0.108643 0.414917H9.36816C11.9161 0.414917 12.1552 2.50314 12.1552 2.50314L14.1313 12.9281L14.132 12.9294L14.7942 16.3622ZM25.3376 23.6006H31.2126L34.8851 0.414917H29.0095L25.3376 23.6006Z"
                        fill="white" />
                </svg>
                <div class="ccard-contactless">
                    <svg xmlns="http://www.w3.org/2000/svg" width="46" height="56">
                        <path
                            fill="none"
                            stroke="#f9f9f9"
                            stroke-width="6"
                            stroke-linecap="round"
                            d="m35,3a50,50 0 0,1 0,50M24,8.5a39,39 0 0,1 0,39M13.5,13.55a28.2,28.5
                            0 0,1 0,28.5M3,19a18,17 0 0,1 0,18" />
                    </svg>
                </div>
                <div class="ccard-chip"></div>
                <div class="ccard-holder">John Doe</div>
                <div class="ccard-number">1234 5678 9000 1234</div>
                <div class="ccard-valid">12/24</div>
            </div>
            <div class="ccard-back">
                <div class="ccard-signature">John Doe</div>
                <div class="ccard-seccode">123</div>
            </div>
        </div>
    </div>
</div>
<div class="hint">Hover me ;)</div>


<style>
    .body {
        font-family: "Overpass Mono", monospace;
        font-weight: 400;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        margin: 0;
    }

    .ccard {
        width: 320px;
        height: 200px;
        border-radius: 10px;
        perspective: 1000px;

        &:hover .ccard-inner {
            transform: rotateY(180deg);
        }

        &-inner {
            position: relative;
            width: 100%;
            height: 100%;
            border-radius: 10px;
            transition: transform 600ms ease;
            transform-style: preserve-3d;
            box-shadow: 0 0 25px 2px rgba(black, 0.2);
        }

        &-front,
        &-back {
            position: absolute;
            top: 0;
            width: 100%;
            height: 100%;
            border-radius: 10px;
            overflow: hidden;
            backface-visibility: hidden;
            background: linear-gradient(321.03deg, #01adef 0%, #0860bf 91.45%);
        }

        &-front {
            border-radius: 10px;
            overflow: hidden;
            position: relative;
            transition: transform 300ms ease-in-out;
        }

        &-back {
            transform: rotateY(180deg);

            &::before {
                content: "";
                position: absolute;
                top: 40%;
                left: 20%;
                width: 180%;
                height: 120%;
                border-radius: 100%;
                background-image: linear-gradient(to right top,
                        #a3d4e7,
                        #a7d5e6,
                        #abd5e4,
                        #aed6e3,
                        #b2d6e2,
                        #aed4e2,
                        #abd3e1,
                        #a7d1e1,
                        #9bcee1,
                        #8ecae1,
                        #81c7e1,
                        #73c3e1);
                filter: blur(10px);
                opacity: 0.15;
            }

            &::after {
                content: "";
                position: absolute;
                top: 15%;
                width: 100%;
                height: 40px;
                background-image: linear-gradient(to right top,
                        #021318,
                        #07191f,
                        #0a1f26,
                        #0b262e,
                        #0c2c35,
                        #0c2c35,
                        #0c2c35,
                        #0c2c35,
                        #0b262e,
                        #0a1f26,
                        #07191f,
                        #021318);
            }
        }

        &-bg {
            position: absolute;
            top: -20px;
            right: -120px;
            width: 380px;
            height: 250px;
            background: linear-gradient(321.03deg, #01adef 0%, #0860bf 91.45%);
            border-top-left-radius: 100%;

            &::before {
                content: "";
                position: absolute;
                top: -20px;
                right: -80px;
                width: 380px;
                height: 250px;
                background: linear-gradient(321.03deg, #01adef 0%, #0860bf 91.45%);
                border-top-left-radius: 100%;
            }

            &::after {
                content: "";
                position: absolute;
                top: -20px;
                right: -120px;
                width: 380px;
                height: 250px;
                background: linear-gradient(321.03deg, #01adef 0%, #0860bf 91.45%);
                border-top-left-radius: 100%;
            }
        }

        &-glow {
            position: absolute;
            top: -140px;
            left: -65px;
            height: 200px;
            width: 400px;
            background: rgba(#00b7ff, 0.4);
            filter: blur(10px);
            border-radius: 100%;
            transform: skew(-15deg, -15deg);
        }

        &-contactless {
            position: absolute;
            right: 15px;
            top: 55px;
            transform: scale(0.5);
        }

        &-chip {
            position: absolute;
            top: 65px;
            left: 25px;
            width: 45px;
            height: 34px;
            border-radius: 5px;
            background-color: #ffda7b;
            overflow: hidden;

            &::before {
                content: "";
                position: absolute;
                left: 49%;
                top: -7%;
                transform: translateX(-50%);
                background: #ffda7b;
                border: 1px solid #a27c1f;
                width: 25%;
                height: 110%;
                border-radius: 100%;
                z-index: 2;
            }

            &::after {
                content: "";
                position: absolute;
                top: 30%;
                left: -10%;
                background: transparent;
                border: 1px solid #a27c1f;
                width: 120%;
                height: 33%;
            }
        }

        &-holder {
            position: absolute;
            left: 25px;
            bottom: 30px;
            color: white;
            font-size: 14px;
            letter-spacing: 0.2em;
            filter: drop-shadow(1px 1px 1px rgba(black, 0.3));
        }

        &-number {
            position: absolute;
            left: 25px;
            bottom: 65px;
            color: white;
            font-size: 16px;
            font-weight: 600;
            letter-spacing: 0.2em;
            filter: drop-shadow(1px 1px 1px rgba(black, 0.3));
        }

        &-valid {
            position: absolute;
            right: 25px;
            bottom: 30px;
            color: white;
            font-size: 14px;
            letter-spacing: 0.2em;
            filter: drop-shadow(1px 1px 1px rgba(black, 0.3));

            &::before {
                content: "GOOD THRU";
                position: absolute;
                top: 1px;
                left: -35px;
                width: 50px;
                font-size: 7px;
            }
        }

        &-signature {
            position: absolute;
            top: 120px;
            left: 15px;
            width: 70%;
            height: 30px;
            background: rgb(238, 236, 236);
            display: flex;
            justify-content: center;
            align-items: center;
            color: #021318;
            font-family: "Mr Dafoe", cursive;
            font-size: 38px;
            font-weight: 400;

            &::before {
                content: "Authorized Signature";
                position: absolute;
                top: -15px;
                left: 0;
                font-family: "Overpass Mono", monospace;
                font-size: 9px;
                color: rgb(238, 236, 236);
            }
        }

        &-seccode {
            position: absolute;
            top: 125px;
            left: 245px;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 40px;
            height: 17px;
            color: #021318;
            background-color: rgb(238, 236, 236);
            text-align: center;
            font-size: 11px;
        }
    }

    .logo {
        position: absolute;
        right: 25px;
        top: 30px;
    }

    .hint {
        padding: 2em 0;
        font-family: "Noto Sans KR", sans-serif;
        letter-spacing: 0.025em;
        font-weight: 400;
        color: #a3d4e7;
    }
</style>
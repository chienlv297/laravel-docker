<input type="radio" name="fan" id="zero" /><input type="radio" name="fan" id="one" checked="true" /><input type="radio" name="fan" id="two" /><input type="radio" name="fan" id="three" />

<div class="scene">
    <div class="fan">
        <div class="fan__base">
            <div class="cuboid base">
                <div class="cuboid__side"></div>
                <div class="cuboid__side"></div>
                <div class="cuboid__side"></div>
                <div class="cuboid__side"></div>
                <div class="cuboid__side"></div>
                <div class="cuboid__side"></div>
            </div>
        </div>
        <div class="fan__controls"><label class="fan__control" for="zero">
                <div class="cuboid control">
                    <div class="cuboid__side"></div>
                    <div class="cuboid__side"></div>
                    <div class="cuboid__side"></div>
                    <div class="cuboid__side"></div>
                    <div class="cuboid__side"></div>
                    <div class="cuboid__side"></div>
                </div>
            </label><label class="fan__control" for="one">
                <div class="cuboid control">
                    <div class="cuboid__side"></div>
                    <div class="cuboid__side"></div>
                    <div class="cuboid__side"></div>
                    <div class="cuboid__side"></div>
                    <div class="cuboid__side"></div>
                    <div class="cuboid__side"></div>
                </div>
            </label><label class="fan__control" for="two">
                <div class="cuboid control">
                    <div class="cuboid__side"></div>
                    <div class="cuboid__side"></div>
                    <div class="cuboid__side"></div>
                    <div class="cuboid__side"></div>
                    <div class="cuboid__side"></div>
                    <div class="cuboid__side"></div>
                </div>
            </label><label class="fan__control" for="three">
                <div class="cuboid control">
                    <div class="cuboid__side"></div>
                    <div class="cuboid__side"></div>
                    <div class="cuboid__side"></div>
                    <div class="cuboid__side"></div>
                    <div class="cuboid__side"></div>
                    <div class="cuboid__side"></div>
                </div>
            </label></div>
        <div class="fan__spine">
            <div class="cuboid spine">
                <div class="cuboid__side"></div>
                <div class="cuboid__side"></div>
                <div class="cuboid__side"></div>
                <div class="cuboid__side"></div>
                <div class="cuboid__side"></div>
                <div class="cuboid__side"></div>
            </div>
        </div>
        <div class="fan__head">
            <div class="fan__rotater">
                <div class="cuboid rotater">
                    <div class="cuboid__side"></div>
                    <div class="cuboid__side"></div>
                    <div class="cuboid__side"></div>
                    <div class="cuboid__side"></div>
                    <div class="cuboid__side"></div>
                    <div class="cuboid__side"></div>
                </div>
                <div class="fan__stalk">
                    <div class="cuboid stalk">
                        <div class="cuboid__side"></div>
                        <div class="cuboid__side"></div>
                        <div class="cuboid__side"></div>
                        <div class="cuboid__side"></div>
                        <div class="cuboid__side"></div>
                        <div class="cuboid__side"></div>
                    </div>
                </div>
            </div>
            <div class="fan__barrel">
                <div class="cuboid barrel">
                    <div class="cuboid__side"></div>
                    <div class="cuboid__side"></div>
                    <div class="cuboid__side"></div>
                    <div class="cuboid__side"></div>
                    <div class="cuboid__side"></div>
                    <div class="cuboid__side"></div>
                </div>
            </div>
            <div class="fan__housing">
                <div class="fan__housing-rear"></div>
                <div class="fan__blades">
                    <div class="fan__blade"></div>
                    <div class="fan__blade"></div>
                    <div class="fan__blade"></div>
                </div>
                <div class="fan__housing-front"><img src="https://assets.codepen.io/605876/avatar.png" /></div>
            </div>
        </div>
    </div>
</div>

<style>
    *,
    *:after,
    *:before {
        box-sizing: border-box;
        transform-style: preserve-3d;
    }

    :root {
        --blade-speed: 1;
        --rotation: 25;
        --fan-speed: 2;
        --state: running;
        --bg: #344c65;
        --shade-one: #f2f2f2;
        --shade-two: #e6e6e6;
        --shade-three: #d9d9d9;
        --shade-four: #ccc;
        --shade-five: #bfbfbf;
        --shade-six: #b3b3b3;
        --shade-seven: #a6a6a6;
        --shade-eight: #999;
        --cage-one: rgba(255, 255, 255, 0.4);
        --cage-two: rgba(255, 255, 255, 0.2);
    }

    body {
        min-height: 100vh;
        display: grid;
        place-items: center;
        background: var(--bg);
        overflow: hidden;
        transform: scale(0.75);
    }

    img {
        height: 20%;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate3d(-50%, -50%, 1px);
        filter: grayscale(1);
        opacity: 0.5;
    }

    input[type="radio"] {
        position: fixed;
        top: 0;
        left: 100%;
        opacity: 0;
    }

    #zero:checked~.scene {
        --blade-speed: 0;
        --state: paused;
    }

    #zero:checked~.scene .fan__stalk {
        transform: translate(-50%, 25%);
    }

    #one:checked~.scene {
        --blade-speed: 1;
        --state: running;
    }

    #one:checked~.scene .fan__control:nth-of-type(2) {
        transition: transform 0.1s cubic-bezier(0, 1.4, 0.2, 1.4);
        transform: translate(0, 50%);
    }

    #two:checked~.scene {
        --blade-speed: 0.5;
        --state: running;
    }

    #two:checked~.scene .fan__control:nth-of-type(3) {
        transition: transform 0.1s cubic-bezier(0, 1.4, 0.2, 1.4);
        transform: translate(0, 50%);
    }

    #three:checked~.scene {
        --blade-speed: 0.25;
        --state: running;
    }

    #three:checked~.scene .fan__control:nth-of-type(4) {
        transition: transform 0.1s cubic-bezier(0, 1.4, 0.2, 1.4);
        transform: translate(0, 50%);
    }

    .cuboid {
        width: 100%;
        height: 100%;
        position: relative;
    }

    .cuboid__side:nth-of-type(1) {
        height: calc(var(--thickness) * 1vmin);
        width: 100%;
        position: absolute;
        top: 0;
        transform: translate(0, -50%) rotateX(90deg);
    }

    .cuboid__side:nth-of-type(2) {
        height: 100%;
        width: calc(var(--thickness) * 1vmin);
        position: absolute;
        top: 50%;
        right: 0;
        transform: translate(50%, -50%) rotateY(90deg);
    }

    .cuboid__side:nth-of-type(3) {
        width: 100%;
        height: calc(var(--thickness) * 1vmin);
        position: absolute;
        bottom: 0;
        transform: translate(0%, 50%) rotateX(90deg);
    }

    .cuboid__side:nth-of-type(4) {
        height: 100%;
        width: calc(var(--thickness) * 1vmin);
        position: absolute;
        left: 0;
        top: 50%;
        transform: translate(-50%, -50%) rotateY(90deg);
    }

    .cuboid__side:nth-of-type(5) {
        height: 100%;
        width: 100%;
        transform: translate3d(0, 0, calc(var(--thickness) * 0.5vmin));
        position: absolute;
        top: 0;
        left: 0;
    }

    .cuboid__side:nth-of-type(6) {
        height: 100%;
        width: 100%;
        transform: translate3d(0, 0, calc(var(--thickness) * -0.5vmin)) rotateY(180deg);
        position: absolute;
        top: 0;
        left: 0;
    }

    :root {
        --height: 70vmin;
        --width: 40vmin;
    }

    label {
        transition: transform 0.1s;
        cursor: pointer;
    }

    label:hover {
        transform: translate(0, 20%);
    }

    label:active {
        transform: translate(0, 40%);
    }

    .scene {
        position: absolute;
        height: var(--width);
        width: var(--width);
        top: 50%;
        left: 50%;
        transform: translate3d(-50%, -50%, 0vmin) rotateX(-24deg) rotateY(34deg) rotateX(90deg);
    }

    .fan {
        height: var(--height);
        width: var(--width);
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%) rotateX(-90deg) rotateX(calc(var(--rotateX, 0) * 1deg)) rotateY(calc(var(--rotateY, 0) * 1deg));
    }

    .fan__base {
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translate(-50%, 0);
        height: 8%;
        width: 80%;
    }

    .fan__controls {
        height: 6%;
        width: 50%;
        position: absolute;
        bottom: 6%;
        left: 50%;
        transform: translate3d(-50%, 0, calc(var(--width) * 0.3));
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-gap: 6%;
    }

    .fan__housing {
        height: 150%;
        width: 150%;
        border-radius: 50%;
        top: 50%;
        left: 50%;
        position: absolute;
        border: 1vmin solid var(--shade-one);
        background: var(--cage-one);
        transform: translate3d(-50%, -50%, calc(var(--width) * 0.45));
    }

    .fan__housing-rear,
    .fan__housing-front {
        position: absolute;
        top: 50%;
        left: 50%;
        height: 80%;
        width: 80%;
        background: var(--cage-two);
        border-radius: 50%;
        border: 1vmin solid var(--shade-one);
    }

    .fan__housing-front {
        transform: translate3d(-50%, -50%, calc(var(--width) * 0.11));
    }

    .fan__housing-front:after {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        height: 35%;
        width: 35%;
        transform: translate(-50%, -50%);
        border-radius: 50%;
        background: var(--shade-one);
    }

    .fan__housing-rear {
        transform: translate3d(-50%, -50%, calc(var(--width) * -0.1));
        border: 1vmin solid var(--shade-two);
    }

    .fan__head {
        height: var(--width);
        width: var(--width);
        position: absolute;
        top: 0;
        left: 0;
        transform: translate3d(0, 0, calc(var(--width) * -0.25));
        animation: fan calc(var(--fan-speed, 1) * 1s) infinite alternate ease-in-out var(--state);
    }

    .fan__rotater {
        top: 50%;
        width: calc(var(--width) * 0.2);
        height: calc(var(--width) * 0.2);
        position: absolute;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .fan__spine {
        height: 57.5%;
        bottom: 8%;
        width: 20%;
        position: absolute;
        left: 50%;
        transform: translate3d(-50%, 0%, calc(var(--width) * -0.25));
    }

    .fan__stalk {
        height: 150%;
        left: 50%;
        bottom: 0;
        transform: translate(-50%, 0);
        transition: transform 0.2s cubic-bezier(0, 1.4, 0.2, 1.4);
        width: 25%;
        position: absolute;
    }

    .fan__blades {
        position: absolute;
        top: 50%;
        left: 50%;
        height: 16%;
        width: 16%;
        transform: translate3d(-50%, -50%, -1px) rotate(0deg);
        animation: rotate calc(var(--blade-speed, 0) * 1s) infinite linear;
    }

    .fan__blade {
        height: 300%;
        width: 100%;
        background: var(--shade-one);
        position: absolute;
        top: 50%;
        left: 50%;
        transform-origin: 50% 0;
        transform: translate(-50%, 0) rotate(calc(var(--rotate, 0) * 1deg));
    }

    .fan__blade:nth-of-type(1) {
        --rotate: 0;
    }

    .fan__blade:nth-of-type(2) {
        --rotate: calc(360 / 3 * 1);
    }

    .fan__blade:nth-of-type(3) {
        --rotate: calc(360 / 3 * 2);
    }

    .fan__barrel {
        height: 22.5%;
        width: 22.5%;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate3d(-50%, -50%, calc(var(--width) * 0.3));
    }

    .base {
        --thickness: calc(40 * 0.8);
    }

    .base div {
        background: var(--shade-two);
    }

    .base div:nth-of-type(1) {
        background: var(--shade-one);
    }

    .base div:nth-of-type(5) {
        background: var(--shade-three);
    }

    .base div:nth-of-type(4) {
        background: va(--shade-six);
    }

    .control {
        --thickness: calc(((40 * 0.5) - ((40 * 0.5) * 0.18)) / 3);
    }

    .control div {
        background: var(--shade-five);
    }

    .control div:nth-of-type(1) {
        background: var(--shade-three);
    }

    .control div:nth-of-type(5) {
        background: var(--shade-six);
    }

    .control div:nth-of-type(4) {
        background: va(--shade-eight);
    }

    .fan__control:nth-of-type(1) .control {
        --shade-three: #f7d4ba;
        --shade-five: #f2b78c;
        --shade-six: #f0a875;
        --shade-eight: #eb8b47;
    }

    .spine {
        --thickness: calc(40 * 0.2);
    }

    .spine div {
        background: var(--shade-three);
    }

    .spine div:nth-of-type(1) {
        background: var(--shade-two);
    }

    .spine div:nth-of-type(5) {
        background: var(--shade-four);
    }

    .spine div:nth-of-type(4) {
        background: va(--shade-seven);
    }

    .rotater {
        --thickness: calc(40 * 0.2);
    }

    .rotater div {
        background: var(--shade-two);
    }

    .rotater div:nth-of-type(1) {
        background: var(--shade-one);
    }

    .rotater div:nth-of-type(5) {
        background: var(--shade-three);
    }

    .rotater div:nth-of-type(4) {
        background: va(--shade-six);
    }

    .barrel {
        --thickness: calc(40 * 0.5);
    }

    .barrel div {
        background: var(--shade-three);
    }

    .barrel div:nth-of-type(1) {
        background: var(--shade-two);
    }

    .barrel div:nth-of-type(5) {
        background: var(--shade-four);
    }

    .barrel div:nth-of-type(4) {
        background: va(--shade-seven);
    }

    .stalk {
        --thickness: calc(40 * 0.05);
    }

    .stalk div {
        background: var(--shade-four);
    }

    .stalk div:nth-of-type(1) {
        background: var(--shade-three);
    }

    .stalk div:nth-of-type(5) {
        background: var(--shade-five);
    }

    .stalk div:nth-of-type(4) {
        background: va(--shade-eight);
    }

    @-moz-keyframes fan {
        0%,
        5% {
            transform: translate3d(0, 0, calc(var(--width) * -0.25)) rotateY(calc(var(--rotation, 0) * 1deg));
        }
        95%,
        100% {
            transform: translate3d(0, 0, calc(var(--width) * -0.25)) rotateY(calc(var(--rotation, 0) * -1deg));
        }
    }

    @-webkit-keyframes fan {
        0%,
        5% {
            transform: translate3d(0, 0, calc(var(--width) * -0.25)) rotateY(calc(var(--rotation, 0) * 1deg));
        }
        95%,
        100% {
            transform: translate3d(0, 0, calc(var(--width) * -0.25)) rotateY(calc(var(--rotation, 0) * -1deg));
        }
    }

    @-o-keyframes fan {
        0%,
        5% {
            transform: translate3d(0, 0, calc(var(--width) * -0.25)) rotateY(calc(var(--rotation, 0) * 1deg));
        }
        95%,
        100% {
            transform: translate3d(0, 0, calc(var(--width) * -0.25)) rotateY(calc(var(--rotation, 0) * -1deg));
        }
    }

    @keyframes fan {
        0%,
        5% {
            transform: translate3d(0, 0, calc(var(--width) * -0.25)) rotateY(calc(var(--rotation, 0) * 1deg));
        }
        95%,
        100% {
            transform: translate3d(0, 0, calc(var(--width) * -0.25)) rotateY(calc(var(--rotation, 0) * -1deg));
        }
    }

    @-moz-keyframes rotate {
        from {
            transform: translate3d(-50%, -50%, -1px) rotate(0deg);
        }
        to {
            transform: translate3d(-50%, -50%, -1px) rotate(360deg);
        }
    }

    @-webkit-keyframes rotate {
        from {
            transform: translate3d(-50%, -50%, -1px) rotate(0deg);
        }
        to {
            transform: translate3d(-50%, -50%, -1px) rotate(360deg);
        }
    }

    @-o-keyframes rotate {
        from {
            transform: translate3d(-50%, -50%, -1px) rotate(0deg);
        }
        to {
            transform: translate3d(-50%, -50%, -1px) rotate(360deg);
        }
    }

    @keyframes rotate {
        from {
            transform: translate3d(-50%, -50%, -1px) rotate(0deg);
        }
        to {
            transform: translate3d(-50%, -50%, -1px) rotate(360deg);
        }
    }
</style>
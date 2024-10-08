<style>
    @import url("https://fonts.googleapis.com/css?family=Cardo:400i|Rubik:400,700&display=swap");

    :root {
        --d: 700ms;
        --e: cubic-bezier(0.19, 1, 0.22, 1);
        --font-sans: "Rubik", sans-serif;
        --font-serif: "Cardo", serif;
    }

    * {
        box-sizing: border-box;
    }

    html,
    body {
        height: 100%;
    }

    body {
        display: grid;
        place-items: center;
    }

    .dd_heading {
        text-align: center;
        font-family: roboto thin;
    }

    .page-content {
        display: grid;
        grid-gap: 1rem;
        padding: 1rem;
        max-width: 1024px;
        margin: 0 auto;
        font-family: var(--font-sans);
    }

    @media (min-width: 600px) {
        .page-content {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (min-width: 800px) {
        .page-content {
            grid-template-columns: repeat(4, 1fr);
        }
    }

    .d_card {
        position: relative;
        display: -webkit-box;
        display: flex;
        -webkit-box-align: end;
        align-items: flex-end;
        overflow: hidden;
        padding: 1rem;
        width: 100%;
        text-align: center;
        color: whitesmoke;
        background-color: whitesmoke;
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1), 0 2px 2px rgba(0, 0, 0, 0.1),
            0 4px 4px rgba(0, 0, 0, 0.1), 0 8px 8px rgba(0, 0, 0, 0.1),
            0 16px 16px rgba(0, 0, 0, 0.1);
        border-radius: 15px;
    }

    @media (min-width: 600px) {
        .d_card {
            height: 350px;
        }
    }

    .d_card:before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 110%;
        background-size: cover;
        background-position: 0 0;
        -webkit-transition: -webkit-transform calc(var(--d) * 1.5) var(--e);
        transition: -webkit-transform calc(var(--d) * 1.5) var(--e);
        transition: transform calc(var(--d) * 1.5) var(--e);
        transition: transform calc(var(--d) * 1.5) var(--e),
            -webkit-transform calc(var(--d) * 1.5) var(--e);
        pointer-events: none;
    }

    .d_card:after {
        content: "";
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 200%;
        pointer-events: none;
        background-image: -webkit-gradient(linear,
                left top,
                left bottom,
                from(rgba(0, 0, 0, 0)),
                color-stop(11.7%, rgba(0, 0, 0, 0.009)),
                color-stop(22.1%, rgba(0, 0, 0, 0.034)),
                color-stop(31.2%, rgba(0, 0, 0, 0.072)),
                color-stop(39.4%, rgba(0, 0, 0, 0.123)),
                color-stop(46.6%, rgba(0, 0, 0, 0.182)),
                color-stop(53.1%, rgba(0, 0, 0, 0.249)),
                color-stop(58.9%, rgba(0, 0, 0, 0.32)),
                color-stop(64.3%, rgba(0, 0, 0, 0.394)),
                color-stop(69.3%, rgba(0, 0, 0, 0.468)),
                color-stop(74.1%, rgba(0, 0, 0, 0.54)),
                color-stop(78.8%, rgba(0, 0, 0, 0.607)),
                color-stop(83.6%, rgba(0, 0, 0, 0.668)),
                color-stop(88.7%, rgba(0, 0, 0, 0.721)),
                color-stop(94.1%, rgba(0, 0, 0, 0.762)),
                to(rgba(0, 0, 0, 0.79)));
        background-image: linear-gradient(to bottom,
                rgba(0, 0, 0, 0) 0%,
                rgba(0, 0, 0, 0.009) 11.7%,
                rgba(0, 0, 0, 0.034) 22.1%,
                rgba(0, 0, 0, 0.072) 31.2%,
                rgba(0, 0, 0, 0.123) 39.4%,
                rgba(0, 0, 0, 0.182) 46.6%,
                rgba(0, 0, 0, 0.249) 53.1%,
                rgba(0, 0, 0, 0.32) 58.9%,
                rgba(0, 0, 0, 0.394) 64.3%,
                rgba(0, 0, 0, 0.468) 69.3%,
                rgba(0, 0, 0, 0.54) 74.1%,
                rgba(0, 0, 0, 0.607) 78.8%,
                rgba(0, 0, 0, 0.668) 83.6%,
                rgba(0, 0, 0, 0.721) 88.7%,
                rgba(0, 0, 0, 0.762) 94.1%,
                rgba(0, 0, 0, 0.79) 100%);
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        -webkit-transition: -webkit-transform calc(var(--d) * 2) var(--e);
        transition: -webkit-transform calc(var(--d) * 2) var(--e);
        transition: transform calc(var(--d) * 2) var(--e);
        transition: transform calc(var(--d) * 2) var(--e),
            -webkit-transform calc(var(--d) * 2) var(--e);
    }

    .d_card:nth-child(1):before {
        background-image: url(https://images.unsplash.com/photo-1581017601156-b4e8e53df291?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2734&q=80);
    }

    .d_card:nth-child(2):before {
        background-image: url(https://images.unsplash.com/photo-1581014023865-4209099f2b71?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2734&q=80);
    }

    .d_card:nth-child(3):before {
        background-image: url(https://images.unsplash.com/photo-1580842579866-b985411b5bd2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80);
    }

    .d_card:nth-child(4):before {
        background-image: url(https://images.unsplash.com/photo-1580986475035-f0778c60f5ae?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjc5NjV9&auto=format&fit=crop&w=633&q=80);
    }

    .content {
        position: relative;
        display: -webkit-box;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        flex-direction: column;
        -webkit-box-align: center;
        align-items: center;
        width: 100%;
        padding: 1rem;
        -webkit-transition: -webkit-transform var(--d) var(--e);
        transition: -webkit-transform var(--d) var(--e);
        transition: transform var(--d) var(--e);
        transition: transform var(--d) var(--e), -webkit-transform var(--d) var(--e);
        z-index: 1;
    }

    .content>*+* {
        margin-top: 1rem;
    }

    .heading {
        font-size: 1.3rem;
        font-weight: bold;
        line-height: 1.2;
    }

    .data-content {
        font-family: var(--font-serif);
        font-size: 1.125rem;
        font-style: italic;
        line-height: 1.35;
    }

    @media (hover: hover) and (min-width: 600px) {
        .d_card:after {
            -webkit-transform: translateY(0);
            transform: translateY(0);
        }

        .content {
            -webkit-transform: translateY(calc(100% - 4.5rem));
            transform: translateY(calc(100% - 4.5rem));
        }

        .content>*:not(.heading) {
            opacity: 0;
            -webkit-transform: translateY(1rem);
            transform: translateY(1rem);
            -webkit-transition: opacity var(--d) var(--e),
                -webkit-transform var(--d) var(--e);
            transition: opacity var(--d) var(--e), -webkit-transform var(--d) var(--e);
            transition: transform var(--d) var(--e), opacity var(--d) var(--e);
            transition: transform var(--d) var(--e), opacity var(--d) var(--e),
                -webkit-transform var(--d) var(--e);
        }

        .d_card:hover,
        .d_card:focus-within {
            -webkit-box-align: center;
            align-items: center;
        }

        .d_card:hover:before,
        .d_card:focus-within:before {
            -webkit-transform: translateY(-4%);
            transform: translateY(-4%);
        }

        .d_card:hover:after,
        .d_card:focus-within:after {
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        .d_card:hover .content,
        .d_card:focus-within .content {
            -webkit-transform: translateY(0);
            transform: translateY(0);
        }

        .d_card:hover .content>*:not(.heading),
        .d_card:focus-within .content>*:not(.heading) {
            opacity: 1;
            -webkit-transform: translateY(0);
            transform: translateY(0);
            -webkit-transition-delay: calc(var(--d) / 8);
            transition-delay: calc(var(--d) / 8);
        }

        .d_card:focus-within:before,
        .d_card:focus-within:after,
        .d_card:focus-within .content,
        .d_card:focus-within .content>*:not(.heading) {
            -webkit-transition-duration: 0s;
            transition-duration: 0s;
        }
    }

    @import url('https://fonts.googleapis.com/css?family=Josefin+Sans');



    .wrapper {
        width: 100%;
    }

    .wrapper .navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
        padding: 0 30px;
        background: #2376aa;
        height: 60px;
    }

    .wrapper .navbar .menu ul li {
        display: inline-block;
        margin: 0 10px;
    }

    .wrapper .navbar .menu ul li a {
        color: #fff;
        text-transform: uppercase;
        letter-spacing: 3px;
        font-size: 12px;
    }

    .searchbar {
        position: relative;
    }

    .searchbar input[type="text"] {
        border: 0;
        padding: 0;
        width: 0px;
        height: 35px;
        border-radius: 3px;
        transition: all 0.3s ease;
    }

    .searchbar .icon {
        position: absolute;
        top: 0;
        right: 0;
        width: 35px;
        height: 100%;
        background: none;
        border-radius: 3px;
        color: #fff;
        transition: all 0.5s 0.3s ease;
    }

    .searchbar .icon i {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        cursor: pointer;
    }

    .banner img {
        width: 100%;
        height: 350px;
    }

    li>a {
        text-decoration: none;
    }

    .searchbar .icon.active {
        background: #062333;
        transition: all 0.3s ease;
    }

    .searchbar input[type="text"].active {
        width: 250px;
        padding: 0 10px;
        transition: all 0.5s 0.2s ease;
    }

    @media screen and (max-width: 730px) {
        .wrapper .navbar {
            padding: 0px;
            flex-direction: column;
            height: 200px;
            justify-content: center;
        }

        .wrapper .navbar .menu ul li {
            display: block;
            text-align: center;
            margin: 10px 0;
        }

        .searchbar .icon {
            margin-right: -20px;
        }
    }
</style>

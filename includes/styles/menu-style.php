<?php 
$style =<<<_END
<style>
@import url('./fonts.css');
@import url('./styles.css');

.hero {
    background: radial-gradient(circle, #07084180 0%, transparent 100%), url('./images2/menu-hero.jpg') center no-repeat;
    background-size: cover;
}

.the-menu-names ul {
    list-style: disk;
}

.menux-all-box {
    display: flex;
    flex-wrap: nowrap;
    justify-content: space-around;
}

.single-menu {
    width: 100vw;
    height: 100vh;

    background-position: right;
    margin: 20rem 0;
}

.menux-content {
    position: relative;
    width: 60%;
    height: 80%;
    background: #0a162a;
    padding: 0px;
    top: -30%;
    z-index: 100;
}

.menux-right {
    margin-left: 30%;
}

.menux-left {
    margin-left: 10%;
}


.pic-left {
    width: 30vw;
    height: 30vw;
    position: relative;
    top: -22%;
    left: 12%;
    z-index: 200;
}

.menux-title {
    font-family: herr;
    font-size: 9rem;
    margin: 3rem auto;
    align-self: stretch;

}

.menux-text {
    position: relative;
    padding: 2rem 0;
    width: 100%;
    height: 100%;
    display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    align-items: center;
    justify-content: space-around;
    align-content: space-around;
    line-height: 3rem;
}

.the-menu-names {
    padding: 0 5px;
    letter-spacing: 0.3rem;
    text-transform: uppercase;
    color: var(--sfc);
    font-size: 4vw;
}


.pic-right {
    width: 30vw;
    height: 30vw;
    position: relative;
    top: -20%;
    right: -50%;
    z-index: 200;
}

.head1 {
    background: url(./images2/menu-first-head.png) center no-repeat;
    background-size: contain;
}

.cutout1 {
    background: url(./images2/menu-first-cutout.png) center no-repeat;
    background-size: 100%;
}

.head2 {
    background: url(./images2/menu-second-head.png) center no-repeat;
    background-size: contain;
}

.cutout2 {
    background: url(./images2/menu-second-cutout.png) center no-repeat;
    background-size: 100%;
}

.head3 {
    background: url(./images2/menu-third-head.png) center no-repeat;
    background-size: contain;
}

.cutout3 {
    background: url(./images2/menu-third-cutout.png) center no-repeat;
    background-size: 100%;
}

.head4 {
    background: url(./images2/menu-forth-head.png) center no-repeat;
    background-size: contain;
}

.cutout4 {
    background: url(./images2/menu-forth-cutout.png) center no-repeat;
    background-size: 100%;
}

.head5 {
    background: url(./images2/menu-fifth-head.png) center no-repeat;
    background-size: contain;
}

.cutout5 {
    background: url(./images2/menu-fifth-cutout.png) center no-repeat;
    background-size: 100%;
}


.order-online {
    width: 100%;
    margin: 0 auto 18rem;
    display: flex;
    flex-direction: column;
    text-align: center;
    align-items: center;
    justify-content: center;
}

.order-btn {
    width: 25s%;
    padding: 3vw 8vw;
    border: none;
    background: var(--sfc);
    font-family: abel;
    font-size: 7vw;
    border-radius: 150px;
    outline: none;
}

.order-btn:hover {
    border: 2px solid var(--sfc);
    color: var(--sfc);
    background: transparent;
}


footer {
    background: url('./images2/menu-footer.jpg') center no-repeat;
    background-size: cover;
    margin-top: 0;

}

@media only screen and (orientation: landscape) {
    .single-menu {
        height: auto;
    }

    .menux-content {
        position: relative;
        width: 30%;
        height: 50%;
        background: #0a162a;
        padding: 0px;
        top: -25%;
        z-index: 100;
    }

    .pic-left {
        width: 25vh;
        height: 25vh;
        position: relative;
        top:5rem;
        right: 30vw;
        z-index: 200;
    }

    .pic-right {
        width: 25vh;
        height: 25vh;
        position: relative;
        top: 5rem;
        right: -70%;
        z-index: 200;
    }
    .menux-title {
        font-size: 7rem;
    }

    .menux-right {
        margin-left: 15%;
    }

    .menux-left {
        margin-left: 53%;
    }
    

    .menux-text {
        padding: 4rem 0;
    }

    .the-menu-names {
        font-size: 3vh;
    }

    .single-menu {
        background-position: right;
        background-size: 50%;
    }
.cutout-right{
        background-position:35% 20rem;
    background-size: 30%;
    }
.cutout-left{
        background-position:60% 20rem;
        background-size: 30%;
    }
    .order-btn {
        margin-top: 20vw;
        padding: 1vh 8vh;
        font-size: 7vw;
        font-size: 6.5vh;
        border-radius: 150px;
    }


}

</style>
_END;

echo $style;

?>
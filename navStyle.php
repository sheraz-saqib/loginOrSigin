<style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');

* {
    padding: 0;
    margin: 0;
    text-decoration: none;
    list-style: none;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

html {
    font-size: 62.5%;
}

body {
    background-color: rgba(243, 243, 243, 0.863) !important;
}
body.welcome_body{
    background-color: #0f0f0fe5 !important;
}
body.welcome_body header{
    background-color: #1a1a1ae5 !important;

}
body.welcome_body header a{
    color: rgb(228, 228, 228) !important;
}
body.welcome_body .drop_down {
    background-color: #000 !important;
 
}
body.welcome_body i{
    color: rgb(228, 228, 228) !important;
}
body.welcome_body .themeContainer{
    background-color:  rgb(206, 205, 205) !important;
    cursor: pointer;
}
a {
    color: #000000e5;
}

:root {
    --theme-color: rgb(9, 123, 189);
}

.header {
    display: flex;
    width: 100%;
    font-size: 1.5rem;
    align-items: center;
    padding: 0 3rem;
    min-height: 7rem;
    height: 100%;
    background-color: white;
    text-transform: capitalize;
    font-weight: 500;
    position: relative;
    color: black;
}
.profile_li{
    align-items: center;
}
.profile_li i{
    margin-right: .3rem;
    color: #000000e5;
}
.menu {
    display: flex;
    flex-direction: column;
    margin-top: 0.4rem;
    margin-right: 1rem;
    cursor: pointer;
    display: none;
}

.menu .line {
    background-color: black;
    width: 2rem;
    height: .3rem;
    margin-bottom: 0.3rem;
    border-radius: 1rem;
    transition: .4s !important;
}

.logo h2 {
    font-weight: 600;
    font-size: 1.8rem;
    text-transform: lowercase !important ;
}

.header .navBar {
    display: flex;
    max-width: 100vw;
    align-items: center;
    width: 100%;
}

.links {
    display: flex;
    align-items: center;
    margin-left: 20rem;
    justify-content: space-between;
    /* max-width: 40rem;
    width: 100%; */
    width: 74%;
}
.profile_li{
    margin-right: 2rem;
}
.themeContainer{
    margin-left: 0.5rem;
}
.links .nav_ul {
    display: flex;
    justify-content: space-between;
    width: 40rem;
}

.nav_ul .nav_links {
    transition: all .3s linear;
    position: relative;
}

.other_components {
    display: flex;
    max-width: 6rem;
    width: 100%;
    justify-content: space-between;
}

.other_components img {
    height: 2.2rem;
    cursor: pointer;
}

.nav_ul .nav_links:hover {
    font-weight: 600;
    color: rgb(29, 29, 29);
}

.nav_links::before {
    content: '';
    position: absolute;
    width: 60%;
    height: .2rem;
    background-color: var(--theme-color);
    bottom: 0;
    border-radius: 1rem;
    left: 50%;
    transform: translate(-50%, -50%);
    transition: all.2s linear;
    opacity: 0;
}

.nav_links:hover::before {
    content: '';
    opacity: 1;
    position: absolute;
    width: 60%;
    height: .2rem;
    background-color: var(--theme-color);
    bottom: -.4rem;
    border-radius: 1rem;
    left: 50%;
    transform: translate(-50%, -50%);
}

.drop_down_li {
    position: relative;

}

.drop_down_li:hover::before {
    opacity: 0;
}

.drop_down {
    left: 50%;
    transform: translate(-50%, -50%);
    margin-top: 9rem;
    border-radius: .5rem;
    position: absolute;
    background-color: rgb(255, 255, 255);
    width: 15rem;
    min-height: 10rem;
    display: flex;
    flex-direction: column;
    justify-content: center;
    padding: 1rem .5rem;
    font-size: 1.3rem;
    opacity: 0;
    visibility: hidden;
    pointer-events: none;
    transition: .2s linear;
}

.drop_down_li:hover .drop_down {
    opacity: 1 !important;
    visibility: visible !important;
    pointer-events: auto !important;
}

.toggle_drop_down {
    opacity: 1 !important;
    visibility: visible !important;
    pointer-events: auto !important;
}

.drop_down::before {
    content: '';
    opacity: 1;
    position: absolute;
    width: 15%;
    height: 1.5rem;
    background-color: inherit;
    top: 0;
    left: 45%;
    transform: rotate(46deg);
}

.drop_down .dd_ul {
    display: flex;
    flex-direction: column;
    align-items: center;
}
.profile_li{
    display: flex;
  
}
.profile_li .dd_li{
    padding: 0 .5rem;
}
.dd_ul .dd_li {
    margin: .5rem 0;
}
.other_components{
    margin-right: 4rem;
}
.themeContainer{
    width: 4.3rem;
    height: 2rem;
    border-radius: 3rem;
    background-color: rgb(230, 230, 230) ;
    position: relative;
    
}
.Themebtn{
    width: inherit;
    height: inherit;

}
.Themebtn input{
    cursor: pointer !important;
    appearance: none;
    background-color: rgb(250, 250, 250);
    width: 1.5rem;
    height: 1.5rem;
    border-radius: 50%;
position: absolute;
top: 50%;
transform: translate(20%,-50%);
/* left: 1.3rem; */
transition: all .4s ease;
outline: none;
}
.Themebtn  input:checked{
    transform: translate(160%,-50%); 
    background-color: rgb(95, 95, 95) !important;
}


section {
    width: 100%;
    height: 40rem;
    background-color: rgba(204, 202, 202, 0.274);
    display: flex;
    justify-content: center;
    align-items: center;
    border-bottom: 1px solid #000;
}

.drop_down{
    user-select: none !important;
}











@media only screen and (max-width:71.87em) {
    .links {

        margin-left: 10rem;
    }

}

@media only screen and (max-width:61.65em) {
    body.welcome_body .links{
        background-color: #1a1a1ae5;
    }
    body.welcome_body .drop_down   {
        background-color: #1a1a1ae5 !important;
    }
    body.welcome_body .menu .line  {
        background-color: #fdfdfde5 !important;
    }
    .menu {
        display: block;
        margin-top: .7rem;
    }
    .menu_active{
        position: relative;
    }
    .menu_active .line:nth-child(1){
        transform: rotate(46deg);
        margin-top:  0.5rem;
    }
    .menu_active .line:nth-child(2){
        transform: rotate(-46deg);
        position: absolute;
        margin-top:  0.5rem;
        top: 0;
    }
    .menu_active .line:nth-child(3){
        opacity: 0;
    }
    .links {
        position: absolute;
        left: -10rem !important;
        margin-top: 62rem;
        background-color: white;
        width: 10rem;
        min-height: 15rem;
        padding: 1rem;
        border-radius: .5rem;
        opacity: 0;
        visibility: hidden;
        pointer-events: none;
        transform: translateX(-50%);
        transition: all .2s linear;
    }

    .links_toggle {
        position: absolute;
        left: -10rem !important;
        margin-top: 62rem;
        background-color: white;
        width: 15rem;
        min-height: 14rem;
        padding: 1rem;
        border-radius: .5rem;
        display: block;
        transform: translateX(0);
        opacity: 1;
        pointer-events: auto;
        visibility: visible;
    }

    .links .nav_ul {
        flex-direction: column;
    }

    .drop_down_li {
        position: none !important;
    }

    .drop_down_li:hover::before {
        opacity: 1;
    }

    .drop_down::before {
        content: '';
        display: none;
    }

    .nav_li {
        margin-bottom: 1rem;
        transform: translateX(-50%);
        transition: all .2s linear;
    }

    .nav_li_toggle {
        transform: translateX(0);
    }

    .drop_down_toggle {
        position: static !important;
        border-radius: .5rem !important;
        width: 15rem !important;
        height: 7rem !important;
        display: flex !important;
        flex-direction: column !important;
        justify-content: center !important;
        padding: 1rem .5rem !important;
        font-size: 1.3rem !important;
        transition: 0;
        margin-left: 4.5rem !important;
        visibility: visible;
        opacity: 1;
        pointer-events: all;
        margin-top: 6rem;
        margin-bottom: -4rem;
    }

    .drop_down {
        position: static !important;
        border-radius: .5rem !important;
        width: 10rem !important;
        height: 7rem !important;
        display: flex !important;
        flex-direction: column !important;
        justify-content: center !important;
        padding: 1rem .5rem !important;
        font-size: 1.3rem !important;
        transition: 0;
        margin-left: 4.5rem !important;
        visibility: visible;
        opacity: 1;
        pointer-events: all;
        margin-top: 6rem;
        margin-bottom: -4rem;
        /* margin: 0; */
    }

    .drop_down_toggle {
        position: static !important;
        border-radius: .5rem !important;
        width: 15rem !important;
        height: 7rem !important;
        display: flex !important;
        flex-direction: column !important;
        justify-content: center !important;
        padding: 1rem .5rem !important;
        font-size: 1.3rem !important;
        transition: 0;
        margin-left: 4.5rem !important;
        visibility: visible;
        opacity: 1;
        pointer-events: all;
        margin-top: 6rem;
        margin-bottom: -4rem;
    }


}
</style>
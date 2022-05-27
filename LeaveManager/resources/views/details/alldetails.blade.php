@extends('layouts.app')
@section('title')
    Badges
@endsection

@section('content')
  <div class="all"> 
        <div class='triangle'></div>
            <div class='container'>
                <div class='space'></div>
                <div class='header--box'>
                    <header class='header'>
                        <div class='header__chat-box'>
                        <div class='header__chat-box--behind'>
                        <div class='header__chat-box--front'>
                            <h1>Bienvenu</h1>
                        </div>
                        </div>
                        </div>

                        <div class='header__icon-box'>
                            <img src="{{URL::to('assets/images/av2.png')}}" alt='cartoon portrait of Westy'
                            class='header__icon'/>
                        </div>
                    </header>
                </div>

                <div class='links-container'>
                    <li class='right'><a class='link' data-toggle="modal" data-target="#userprofil"  href='#'>Profil</a>
                        </li> <br>
                    <li class='left'><a class='link'href='#'>Signataires</a>
                        </li><br>
                    <li class='right'><a class='link'href='#'>IDK Yet</a>
                        </li>
    
                </div>

                <div class='user-info-box'>
                    <div class='user-info'>
                        <h2>{{Auth::user()->name}}</h2>
                    </div>
                </div>
            </div>
     </div> 

     
     <div class="modal fade" id="userprofil" tabindex="-1" role="dialog" style="z-index: 1050; display: none;" aria-hidden="true">
        <div class="modal-dialog" role="=document">
            <div class="modal-body">
                <div class="wrapper">
                    <div class="left">
                        <img src="{{URL::to('assets/images/av2.png')}}" alt="user" width="100">
                        <h4>{{\Illuminate\Support\Facades\Auth::user()->name}}</h4>
                         <p>Département Informatique</p>
                    </div>
                    <div class="right">
                        <div class="info">
                            <h3>Information</h3>
                            <div class="info_data">
                                 <div class="data">
                                    <h4>Email</h4>
                                    <p>{{\Illuminate\Support\Facades\Auth::user()->email}}</p>
                                 </div>
                                 <div class="data">
                                   <h4>Numéro De Telephone</h4>
                                    <p>27272727</p>
                              </div>
                            </div>
                        </div>
    
                      
                      <div class="projects">
                            <h3>Projects</h3>
                            <div class="projects_data">
                                 <div class="data">
                                    <h4>Recent</h4>
                                    <p>Lorem ipsum dolor sit amet.</p>
                                 </div>
                                 <div class="data">
                                   <h4>Most Viewed</h4>
                                    <p>dolor sit amet.</p>
                                </div>
                            </div>
                        </div>

                        <div class="social_media">
                            <ul style="list-style-type: none;">
                              <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                              <li><a href=""><i class="fab fa-twitter"></i></a></li>
                              <li><a href=""><i class="fab fa-instagram"></i></a></li>
                          </ul>
                      </div>
                    </div>
                </div>
            </div>
        </div>
     </div>


    <style>
                /* Profil PopUp CSS */
 
                                


                    .wrapper{
                    position: relative;
                    top: 330px;
                    left: 315px;
                    transform: translate(-50%,-50%);
                    width: 450px;
                    display: flex;
                    box-shadow: 0 1px 20px 0 rgba(69,90,100,.08);
                    }

                    .wrapper .left{
                    width: 35%;
                    background: rgb(104,116,236);
                    background: linear-gradient(93deg, rgba(104,116,236,1) 31%, rgba(56,65,164,1) 100%);
                    padding: 30px 25px;
                    border-top-left-radius: 5px;
                    border-bottom-left-radius: 5px;
                    text-align: center;
                    color: #fff;
                    }

                    .wrapper .left img{
                    border-radius: 5px;
                    margin-bottom: 10px;
                    }

                    .wrapper .left h4{
                    margin-bottom: 10px;
                    }

                    .wrapper .left p{
                    font-size: 12px;
                    }

                    .wrapper .right{
                    width: 65%;
                    background: #fff;
                    padding: 30px 25px;
                    border-top-right-radius: 5px;
                    border-bottom-right-radius: 5px;
                    }

                    .wrapper .right .info,
                    .wrapper .right .projects{
                    margin-bottom: 25px;
                    }

                    .wrapper .right .info h3,
                    .wrapper .right .projects h3{
                        margin-bottom: 15px;
                        padding-bottom: 5px;
                        border-bottom: 1px solid #e0e0e0;
                        color: #353c4e;
                    text-transform: uppercase;
                    letter-spacing: 5px;
                    }

                    .wrapper .right .info_data,
                    .wrapper .right .projects_data{
                    display: flex;
                    justify-content: space-between;
                    }

                    .wrapper .right .info_data .data,
                    .wrapper .right .projects_data .data{
                    width: 45%;
                    }

                    .wrapper .right .info_data .data h4,
                    .wrapper .right .projects_data .data h4{
                        color: #353c4e;
                        margin-bottom: 5px;
                    }

                    .wrapper .right .info_data .data p,
                    .wrapper .right .projects_data .data p{
                    font-size: 13px;
                    margin-bottom: 10px;
                    color: #919aa3;
                    }

                    .wrapper .social_media ul{
                    display: flex;
                    }

                    .wrapper .social_media ul li{
                    width: 45px;
                    height: 45px;
                    background: rgb(104,116,236);
                    background: linear-gradient(93deg, rgba(104,116,236,1) 31%, rgba(56,65,164,1) 100%);
                    margin-right: 10px;
                    border-radius: 5px;
                    text-align: center;
                    line-height: 45px;
                    }

                    .wrapper .social_media ul li a{
                    color :#fff;
                    display: block;
                    font-size: 18px;
                    }


                /* Page CSS */ 
                .container {
                display: flex;
                position: relative;
                left: -60px;
                top: 80px;
                flex-direction: column;
                align-items: center;
                height: 100vh;
                width: 100%;
                }

                .space {
                width: 100%;
                height: 7%;
                }

                .header--box {
                width: 70%;
                max-width: 20rem;
                display: flex;
                justify-content: center;
                }

                .header {
                display: flex;
                justify-content: flex-end;
                width: 20rem;
                height: 16.5rem;
                max-height: 19rem;
                position: relative;
                }

                .header__icon-box img {
                border-radius: 50%;
                border: .4rem solid #6777ef;
                height: 80%;
                max-height: 13.2rem;
                background-color: #6777ef;
                margin-top: 2rem;
                }

                .header__chat-box h1 {
                font-family: 'Fredoka One', sans-serif;
                font-size: 1.9rem;
                letter-spacing: .3rem;
                padding: 25%;
                color: #6777ef;
                }

                .header__chat-box {
                z-index: 1;
                position: absolute;
                top: .5rem;
                left: -26px;
                transform: rotate(-7deg);
                animation: pop-in .35s ease-in backwards .7s;
                }

                @keyframes pop-in {
                0% {
                    transform: scale(0,0);
                    opacity: 0;
                }
                86% {
                    transform: scale(1.3,1.3) rotate(-7deg);
                    opacity: 1;
                }
                100% {
                    transform: scale(1,1) rotate(-7deg);
                }
                }

                .header__chat-box--behind {
                background-color: #5460AB;
                height: 9.5rem;
                width: 11rem;
                clip-path: polygon(0% 0%, 100% 0%, 100% 75%, 75% 75%, 75% 100%, 50% 75%,
                    0% 75%);
                text-align: center;
                position: relative;
                }

                .header__chat-box--front {
                background-color: #fff;
                clip-path: polygon(0% 0%, 100% 0%, 100% 75%, 75% 75%, 75% 100%, 50% 75%,
                    0% 75%);
                text-align: center;
                position: absolute;
                top: .2rem;
                left: .2rem;
                right: .2rem;
                bottom: .3rem;
                }

                .links-container {
                display: flex;
                flex:1;
                flex-direction: column;
                align-items: center;
                margin-top: 2rem;
                width: 70%;
                max-width: 20.5rem;
                }

                .links-container li {
                display: inline-block;
                margin-bottom: 1.5rem;
                border: .2rem solid #6777ef;
                width: 100%;
                padding: 1.2rem 0 1.2rem 0;
                background-color: #fff;
                position: relative;
                transition: all .2s;
                color: #fff;
                }

                .links-container li::after {
                content: '';
                border: .1rem solid #6777ef;
                width: 100%;
                height: 100%;
                display: inline-block;
                position: absolute;
                top:0;
                left:0;
                z-index: -1;
                opacity: 0;
                transition: all .4s;
                }

                .links-container li:hover::after {
                transform: scaleX(1.1) scaleY(1.35);
                opacity: 1;
                }

                .links-container li:active::after {
                transform: scaleX(1.07) scaleY(1.25);
                }

                .links-container li:active {
                /* box-shadow: inset -.2rem .2rem 0 rgba(233, 72, 138, 1); */
                background-color: #6777ef;
                }


                @keyframes slide-in-left {
                0% {
                    opacity: 0;
                    margin-left: -20rem;
                }
                75% {
                    margin-left: 1.5rem;
                }
                100% {
                    opacity: 1;
                    margin-left: 0;
                }
                }

                @keyframes slide-in-right {
                0% {
                    opacity: 0;
                    margin-right: -20rem;
                }

                75% {
                    margin-right: 5rem;
                }

                100% {
                    opacity: 1;
                    margin-right: 0;
                }
                }

                .links-container li:last-of-type {
                margin-bottom: 0;
                }

                .links-container li.right a {
                transform: skew(20deg);
                display: block;
                }

                .links-container li.right {
                transform: skew(-20deg);
                animation: slide-in-right .9s ease backwards;
                }

                .links-container li.left a {
                transform: skew(-20deg);
                display: block;
                }

                .links-container li.left {
                transform: skew(20deg);
                animation: slide-in-left .9s ease backwards;
                }

                .links-container a:link,
                .links-container a:visited {
                text-decoration: none;
                font-size: 2.2rem;
                text-align: center;
                color: #6777ef;
                transition: all .2s;
                }

                .links-container a:active {
                color: #fff;
                }

                .user-info h2 {
                font-family: 'Fredoka one', sans-serif;
                color: #6777ef;
                letter-spacing: .1rem;
                }

                .user-info-box {
                display: flex;
                position: relative;
                left: -40px;
                flex-direction: column;
                justify-content: flex-end;
                padding: 2rem 0 2rem 0;
                }


                /* Mobile Styles */
                @media only screen and (max-width: 400px) {
                body {

                }
                }

                /* Tablet Styles */
                @media only screen and (min-width: 401px) and (max-width: 960px) {
                body {

                }
                }

                /* Desktop Styles */
                @media only screen and (min-width: 961px) {
                html {
                    font-size: 78%;
                }
                    body {
                    width: 100%;
                    height: 100vh;
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    wrap: nowrap;
                    align-items: center;
                    /* border: 1px solid pink; */
                    }

                    .triangle {
                    clip-path: polygon(30% 0, 100% 0, 100% 45vh);
                    }

                    .container {
                    flex-direction: column;
                    justify-content: center;
                    align-content: space-around;
                    flex-wrap: wrap;
                    /* border: 1px solid green; */
                    width: 50%;
                    max-width: 55rem;
                    height: 400px;
                    }

                    .header {
                    height: 15rem;
                    }

                    .header--box {
                    order: 1;
                    /* border: 1px solid red; */
                    }

                    .header__chat-box {
                    left: -1px;
                    }

                    .header__chat-box--behind {
                    height: 8rem;
                    width: 14rem;
                    }

                    .header__chat-box h1 {
                    font-size: 1.7rem;
                    padding: 15.5%;
                    }

                    .header__icon-box img {
                    max-height: 12rem;
                    }

                    .user-info-box {
                    order: 2;
                    /* border: 1px solid purple; */
                    justify-content: flex-start;
                    align-items: flex-end;
                    width: 20rem;
                    flex:1;
                    padding: .2rem 0 .2rem 0;
                    }

                    .links-container {
                    order: 3;
                    flex:0;
                    min-width: 40rem;
                    max-width: 30.5rem;
                    min-height: 400px;
                    /* border: 1px solid blue; */
                    margin-top: 0;
                    }

                    .links-container li {
                    max-width: 20.5rem;
                    }

                    .space {
                    display: none;
                    }
                }
     </style>

@endsection
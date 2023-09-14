<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    @import url(https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap);
    body {
        font-family: "Roboto", sans-serif;
        background: #EFF1F3;
        min-height: 100vh;
        position: relative;
        margin: 0;
        padding: 0;
    }

    .section-50 {
        padding: 5px 0;
    }

    .m-b-50 {
        margin-bottom: 50px;
    }

    .dark-link {
        color: #333;
    }

    .heading-line {
        position: relative;
        padding-bottom: 5px;
    }

    .heading-line:after {
        content: "";
        height: 4px;
        width: 75px;
        background-color: #29B6F6;
        position: absolute;
        bottom: 0;
        left: 0;
    }

    .notification-ui_dd-content {
        margin-bottom: 30px;
    }

    .notification-list {
        display: flex;
        flex-direction: column;
        padding: 20px;
        margin-bottom: 7px;
        background: #fff;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.06);
    }

    .notification-list--unread {
        border-left: 2px solid #29B6F6;
    }

    .notification-list .notification-list_content {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
    }

    .notification-list .notification-list_img img {
        height: 48px;
        width: 48px;
        border-radius: 50px;
        margin-right: 20px;
    }

    .notification-list .notification-list_detail p {
        margin-bottom: 5px;
        line-height: 1.2;
    }

    .notification-list .notification-list_feature-img img {
        height: 48px;
        width: 48px;
        border-radius: 5px;
        margin-top: 10px;
    }

    @media (min-width: 768px) {
        .container {
            max-width: 768px;
            margin: 0 auto;
            padding: 15px;
        }
    }
</style>
<body>
@extends('layouts.app')

@section('content')
<section class="section-50">
    <div class="container">
        <h3 class="m-b-50 heading-line">Notifications <i class="fa fa-bell text-muted"></i></h3>

        <div class="notification-ui_dd-content">
            <div class="notification-list notification-list--unread">
                <div class="notification-list_content">
                    <div class="notification-list_img">
                        <img src="https://i.imgur.com/zYxDCQT.jpg" alt="user">
                    </div>
                    <div class="notification-list_detail">
                        <p><b>John Doe</b> reacted to your post</p>
                        <p class="text-muted">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde, dolorem.</p>
                        <p class="text-muted"><small>10 mins ago</small></p>
                    </div>
                </div>
                <div class="notification-list_feature-img">
                    <img src="https://i.imgur.com/AbZqFnR.jpg" alt="Feature image">
                </div>
            </div>
            <div class="notification-list notification-list--unread">
                <div class="notification-list_content">
                    <div class="notification-list_img">
                        <img src="https://i.imgur.com/w4Mp4ny.jpg" alt="user">
                    </div>
                    <div class="notification-list_detail">
                        <p><b>Richard Miles</b> liked your post</p>
                        <p class="text-muted">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde, dolorem.</p>
                        <p class="text-muted"><small>10 mins ago</small></p>
                    </div>
                </div>
                <div class="notification-list_feature-img">
                    <img src="https://i.imgur.com/AbZqFnR.jpg" alt="Feature image">
                </div>
            </div>
            <div class="notification-list">
                <div class="notification-list_content">
                    <div class="notification-list_img">
                        <img src="https://i.imgur.com/ltXdE4K.jpg" alt="user">
                    </div>
                    <div class="notification-list_detail">
                        <p><b>Brian Cumin</b> reacted to your post</p>
                        <p class="text-muted">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde, dolorem.</p>
                        <p class="text-muted"><small>10 mins ago</small></p>
                    </div>
                </div>
                <div class="notification-list_feature-img">
                    <img src="https://i.imgur.com/bpBpAlH.jpg" alt="Feature image">
                </div>
            </div>
            <div class="notification-list">
                <div class="notification-list_content">
                    <div class="notification-list_img">
                        <img src="https://i.imgur.com/CtAQDCP.jpg" alt="user">
                    </div>
                    <div class="notification-list_detail">
                        <p><b>Lance Bogrol</b> reacted to your post</p>
                        <p class="text-muted">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde, dolorem.</p>
                        <p class="text-muted"><small>10 mins ago</small></p>
                    </div>
                </div>
                <div class="notification-list_feature-img">
                    <img src="https://i.imgur.com/iIhftMJ.jpg" alt="Feature image">
                </div>
            </div>
            <div class="notification-list">
                <div class="notification-list_content">
                    <div class="notification-list_img">
                        <img src="https://i.imgur.com/zYxDCQT.jpg" alt="user">
                    </div>
                    <div class="notification-list_detail">
                        <p><b>Parsley Montana</b> reacted to your post</p>
                        <p class="text-muted">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde, dolorem.</p>
                        <p class="text-muted"><small>10 mins ago</small></p>
                    </div>
                </div>
                <div class="notification-list_feature-img">
                    <img src="https://i.imgur.com/bpBpAlH.jpg" alt="Feature image">
                </div>
            </div>
        </div>

        <div class="text-center">
            <a href="#!" class="dark-link">Load more activity</a>
        </div>

    </div>
</section>
@endsection
    
</body>
</html>
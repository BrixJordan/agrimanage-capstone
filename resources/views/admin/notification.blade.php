

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
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
        <title>Document</title>
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

        .container {
            max-width: 768px;
            margin: 0 auto;
            padding: 15px;
        }

        .notifications {
            background: #fff;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.06);
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
        }

        .notifications .notification {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .notification-avatar {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            overflow: hidden;
            margin-right: 15px;
        }

        .notification-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .notification-details {
            flex-grow: 1;
        }

        .notification-title {
            font-weight: bold;
        }

        .notification-time {
            color: #888;
        }

        .load-more-link {
            text-align: center;
        }

        .load-more-link a {
            color: #29B6F6;
            text-decoration: none;
        }

        .load-more-link a:hover {
            text-decoration: underline;
        }
        </style>
    </head>
    <body>
    @extends('layouts.app')

@section('content')
        
<section class="section-50">
    <div class="container">
        <h3 class="m-b-50 heading-line">Notifications <i class="fa fa-bell text-muted"></i></h3>

        <div class="notifications">
            <div class="notification">
                <div class="notification-avatar">
                    <img src="https://i.imgur.com/zYxDCQT.jpg" alt="user">
                </div>
                <div class="notification-details">
                    <p class="notification-title"><b>John Doe</b> reacted to your post</p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde, dolorem.</p>
                    <p class="notification-time"><small>10 mins ago</small></p>
                </div>
            </div>

            <div class="notification">
                <div class="notification-avatar">
                    <img src="https://i.imgur.com/w4Mp4ny.jpg" alt="user">
                </div>
                <div class="notification-details">
                    <p class="notification-title"><b>Richard Miles</b> liked your post</p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde, dolorem.</p>
                    <p class="notification-time"><small>10 mins ago</small></p>
                </div>
            </div>

            <!-- Add more notifications as needed -->

        </div>

        <div class="load-more-link">
            <a href="#">Load more activity</a>
        </div>

    </div>
</section>
        @endsection
    </body>
    </html>

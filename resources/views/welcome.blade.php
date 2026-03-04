<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Muara Indonesia Junior High School - Data Management System</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background: linear-gradient(135deg, #808080 0%, #606060 100%);
                color: #ffffff;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .content {
                text-align: center;
                background: white;
                padding: 60px 40px;
                border-radius: 10px;
                box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
                max-width: 600px;
            }

            .title {
                font-size: 36px;
                font-weight: 600;
                margin-bottom: 10px;
                color: #667eea;
            }

            .subtitle {
                font-size: 16px;
                color: #666;
                margin-bottom: 30px;
                font-weight: 300;
            }

            .description {
                font-size: 14px;
                color: #777;
                margin-bottom: 40px;
                line-height: 1.6;
            }

            .login-buttons {
                display: flex;
                gap: 20px;
                justify-content: center;
                margin-top: 30px;
                flex-wrap: wrap;
            }

            .login-button {
                display: inline-flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
                width: 120px;
                height: 120px;
                border-radius: 50%;
                background-color: #667eea;
                color: white;
                font-size: 14px;
                font-weight: 600;
                text-decoration: none;
                transition: background-color 0.3s ease, transform 0.3s ease;
                border: none;
                cursor: pointer;
            }

            .login-button:hover {
                background-color: #764ba2;
                transform: scale(1.1);
            }

            .login-button.teacher {
                background-color: #f59e0b;
            }

            .login-button.teacher:hover {
                background-color: #d97706;
            }

            .login-button.student {
                background-color: #10b981;
            }

            .login-button.student:hover {
                background-color: #059669;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Muara Indonesia
                </div>
                <div class="subtitle">
                    Junior High School
                </div>
                <div class="description">
                    Welcome to the Data Management System. Please log in to access your account and manage school data.
                </div>

                @auth
                    <a href="{{ url('/home') }}" class="login-button">Go to Dashboard</a>
                @else
                    <div class="login-buttons">
                        <a href="https://siakad-smp.test/admin/login" class="login-button">Admin Login</a>
                    </div>
                @endauth
            </div>
        </div>
    </body>
</html>
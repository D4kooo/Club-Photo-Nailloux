<!-- resources/views/home.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Accueil du Blog</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #f8f9fa;
        }
        .header .logo {
            font-size: 24px;
            font-weight: bold;
        }
        .header .middle-buttons {
            display: flex;
            gap: 10px;
        }
        .header .middle-buttons a {
            text-decoration: none;
            padding: 10px 20px;
            border: 1px solid #007bff;
            border-radius: 5px;
            color: #007bff;
            transition: background-color 0.3s, color 0.3s;
        }
        .header .middle-buttons a:hover {
            background-color: #007bff;
            color: #fff;
        }
        .header .auth-buttons {
            display: flex;
            gap: 10px;
        }
        .header .auth-buttons a {
            text-decoration: none;
            padding: 10px 20px;
            border: 1px solid #007bff;
            border-radius: 5px;
            color: #007bff;
            transition: background-color 0.3s, color 0.3s;
        }
        .header .auth-buttons a:hover {
            background-color: #007bff;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="logo">
            <img src="{{ asset('images/logo-CPN.png') }}" alt="Logo de l'asso" height="50">
        </div>
        <div class="middle-buttons">
            <a href="#">Button 1</a>
            <a href="#">Button 2</a>
            <a href="#">Button 3</a>
        </div>
        <div class="auth-buttons">
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Sign In</a>
        </div>
    </div>

    <div class="container">
        <h1>Bienvenue sur le Blog</h1>

        @foreach($posts as $post)
            <div class="post">
                <h2>{{ $post->title }}</h2>
                <p>{{ Str::limit($post->content, 150) }}</p>
                <a href="{{ route('posts.show', $post->id) }}">Lire la suite</a>
            </div>
            <hr>
        @endforeach

        <!-- Pagination -->
        <div class="pagination">
            {{ $posts->links() }}
        </div>
    </div>
</body>
</html>

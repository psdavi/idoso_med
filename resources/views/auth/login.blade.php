<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Acesso ao Sistema</title>

    <!-- CSS do template Azia -->
    <link href="{{ asset('assets/lib/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/typicons.font/typicons.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/azia.css') }}">

    <style>
      .az-logo img {
        display: block;
        margin: 0 auto 20px; /* centraliza e adiciona espaçamento inferior */
        max-width: 150px; /* ajuste conforme o tamanho da sua logo */
        height: auto;
      }
    </style>
  </head>

  <body class="az-body">

    <div class="az-signin-wrapper">
      <div class="az-card-signin">
        <div class="az-logo">
          <img src="{{ asset('assets/img/idoso_med_logo.png') }}" alt="Logo do Sistema">
        </div>

        <div class="az-signin-header">
          <h2>Bem-vindo(a) de volta!</h2>
          <h4>Faça login para continuar</h4>

          <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
              <label for="email">E-mail</label>
              <input id="email"
                     type="email"
                     class="form-control @error('email') is-invalid @enderror"
                     name="email"
                     value="{{ old('email') }}"
                     required
                     autofocus
                     placeholder="Digite seu e-mail">
              @error('email')
                <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="form-group">
              <label for="password">Senha</label>
              <input id="password"
                     type="password"
                     class="form-control @error('password') is-invalid @enderror"
                     name="password"
                     required
                     placeholder="Digite sua senha">
              @error('password')
                <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="form-group d-flex justify-content-between align-items-center mb-3">
              <label class="ckbox">
                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                <span>Lembrar-me</span>
              </label>

              @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}">Esqueceu sua senha?</a>
              @endif
            </div>

            <button type="submit" class="btn btn-az-primary btn-block">Entrar</button>
          </form>
        </div><!-- az-signin-header -->

        <div class="az-signin-footer">
          @if (Route::has('register'))
            <p>Não possui uma conta? <a href="{{ route('register') }}">Cadastre-se agora</a></p>
          @endif
         
        </div><!-- az-signin-footer -->
      </div><!-- az-card-signin -->
    </div><!-- az-signin-wrapper -->

    <!-- Scripts -->
    <script src="{{ asset('assets/lib/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/lib/ionicons/ionicons.js') }}"></script>
    <script src="{{ asset('assets/js/azia.js') }}"></script>
  </body>
</html>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Cadastro - IdosoMed</title>

    <!-- CSS do template Azia -->
    <link href="{{ asset('assets/lib/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/typicons.font/typicons.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/azia.css') }}">
  </head>

  <style>
    .az-logo img {
      display: block;
      margin: 0 auto 20px; /* centraliza e adiciona espaçamento inferior */
      max-width: 150px; /* ajuste conforme o tamanho da sua logo */
      height: auto;
    }
  </style>

  <body class="az-body">

    <div class="az-signup-wrapper">
      <div class="az-column-signup-left">
        <div>
          <div class="az-logo">
            <img src="{{ asset('assets/img/idoso_med_logo.png') }}" alt="Logo do IdosoMed">
          </div>
          <h5>Controle inteligente de medicamentos</h5>
          <p>O <strong>IdosoMed</strong> é um sistema desenvolvido para auxiliar instituições e cuidadores na administração de medicamentos para idosos.</p>
          <p>Organize horários, registre tratamentos e garanta que cada dose seja aplicada no momento certo, com segurança e praticidade.</p>
          <a href="#" class="btn btn-outline-indigo">Saiba mais</a>
        </div>
      </div><!-- az-column-signup-left -->

      <div class="az-column-signup">
        <div class="az-logo">
          <img src="{{ asset('assets/img/idoso_med_logo.png') }}" alt="Logo do IdosoMed">
        </div>

        <div class="az-signup-header">
          <h2>Crie sua conta</h2>
          <h4>Comece a gerenciar os medicamentos dos residentes com mais eficiência</h4>

          <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group">
              <label for="name">Nome completo</label>
              <input id="name"
                     type="text"
                     class="form-control @error('name') is-invalid @enderror"
                     name="name"
                     value="{{ old('name') }}"
                     required
                     autofocus
                     placeholder="Digite seu nome completo">
              @error('name')
                <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="form-group">
              <label for="email">E-mail</label>
              <input id="email"
                     type="email"
                     class="form-control @error('email') is-invalid @enderror"
                     name="email"
                     value="{{ old('email') }}"
                     required
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
                     placeholder="Crie uma senha segura">
              @error('password')
                <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="form-group">
              <label for="password_confirmation">Confirmar senha</label>
              <input id="password_confirmation"
                     type="password"
                     class="form-control"
                     name="password_confirmation"
                     required
                     placeholder="Repita sua senha">
            </div>

            <button type="submit" class="btn btn-az-primary btn-block">Cadastrar</button>
          </form>
        </div><!-- az-signup-header -->

        <div class="az-signup-footer">
          <p>Já possui uma conta? <a href="{{ route('login') }}">Entre agora</a></p>
        </div><!-- az-signup-footer -->
      </div><!-- az-column-signup -->
    </div><!-- az-signup-wrapper -->

    <!-- Scripts -->
    <script src="{{ asset('assets/lib/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/lib/ionicons/ionicons.js') }}"></script>
    <script src="{{ asset('assets/js/azia.js') }}"></script>
  </body>
</html>

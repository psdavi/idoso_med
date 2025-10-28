<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Sistema de Gestão de Medicamentos para Asilos e Casas de Repouso">
  <meta name="author" content="IdosoMed System">

  <title>IdosoMed - Sistema de Gestão de Medicamentos</title>

  <!-- CSS do template Azia -->
  <link href="{{ asset('assets/lib/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/lib/typicons.font/typicons.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('assets/css/azia.css') }}">

  <style>
    .az-logo img {
      display: block;
      margin: 0 auto 20px;
      max-width: 150px;
      height: auto;
    }

    .welcome-hero {
      background: linear-gradient(135deg, #560bd0 0%, #007bff 100%);
      color: white;
      padding: 100px 0;
      text-align: center;
    }

    .welcome-hero h1 {
      font-size: 2.5rem;
      font-weight: 700;
      margin-bottom: 20px;
    }

    .welcome-hero p {
      font-size: 1.2rem;
      margin-bottom: 30px;
      opacity: 0.95;
    }

    .feature-card {
      border: none;
      border-radius: 10px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.08);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      margin-bottom: 30px;
      height: 100%;
    }

    .feature-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 25px rgba(0,0,0,0.12);
    }

    .feature-icon {
      width: 70px;
      height: 70px;
      margin: 0 auto 20px;
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 50%;
      background: rgba(86, 11, 208, 0.1);
    }

    .feature-icon i {
      font-size: 2rem;
      color: #560bd0;
    }

    .login-section {
      background: #f8f9fa;
      padding: 80px 0;
    }

    .login-card {
      border: none;
      border-radius: 10px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.08);
    }

    .access-card {
      border: none;
      border-radius: 10px;
      box-shadow: 0 3px 10px rgba(0,0,0,0.06);
      transition: transform 0.3s ease;
      margin-bottom: 20px;
    }

    .access-card:hover {
      transform: translateY(-3px);
    }

    .navbar-brand {
      font-size: 1.5rem;
      font-weight: 700;
    }

    footer {
      background: #343a40;
      color: white;
      padding: 30px 0;
    }

    .btn-hero {
      padding: 12px 35px;
      font-size: 1.1rem;
      border-radius: 5px;
    }

    section {
      padding: 80px 0;
    }

    .section-title {
      margin-bottom: 50px;
      text-align: center;
    }

    .section-title h2 {
      font-size: 2.2rem;
      font-weight: 700;
      margin-bottom: 15px;
    }

    .section-title p {
      font-size: 1.1rem;
      color: #6c757d;
    }
  </style>
</head>
<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">
        <i class="fas fa-heartbeat mr-2"></i>
        <strong>IdosoMed</strong>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#features">Recursos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">Sobre</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#login">Acesso</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-outline-light ml-2" href="{{ route('login') }}">Entrar</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-az-primary ml-2" href="{{ route('register') }}">Cadastrar</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="welcome-hero">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <div class="az-logo">
            <img src="{{ asset('assets/img/idoso_med_logo.png') }}" alt="Logo do IdosoMed">
          </div>
          <h1>Controle Inteligente de Medicamentos para Idosos</h1>
          <p>Sistema desenvolvido para auxiliar instituições e cuidadores na administração segura de medicamentos. Organize horários, registre tratamentos e garanta que cada dose seja aplicada no momento certo.</p>
          <div class="mt-4">
            <a href="{{ route('register') }}" class="btn btn-light btn-hero mr-3">
              <i class="fas fa-rocket mr-2"></i>Começar Agora
            </a>
            <a href="#features" class="btn btn-outline-light btn-hero">
              <i class="fas fa-play-circle mr-2"></i>Saiba Mais
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Features Section -->
  <section id="features">
    <div class="container">
      <div class="section-title">
        <h2>Recursos do Sistema</h2>
        <p>Tudo que você precisa para uma gestão medicamentosa segura e eficiente</p>
      </div>
      
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="card feature-card">
            <div class="card-body text-center p-4">
              <div class="feature-icon">
                <i class="fas fa-clock"></i>
              </div>
              <h4>Controle de Horários</h4>
              <p class="text-muted mb-0">Alertas automáticos para administração de medicamentos nos horários corretos</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="card feature-card">
            <div class="card-body text-center p-4">
              <div class="feature-icon">
                <i class="fas fa-pills"></i>
              </div>
              <h4>Gestão de Estoque</h4>
              <p class="text-muted mb-0">Controle completo do estoque de medicamentos com alertas de reposição</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="card feature-card">
            <div class="card-body text-center p-4">
              <div class="feature-icon">
                <i class="fas fa-file-medical"></i>
              </div>
              <h4>Prontuários Eletrônicos</h4>
              <p class="text-muted mb-0">Registro digital completo do histórico medicamentoso de cada residente</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="card feature-card">
            <div class="card-body text-center p-4">
              <div class="feature-icon">
                <i class="fas fa-bell"></i>
              </div>
              <h4>Alertas Inteligentes</h4>
              <p class="text-muted mb-0">Notificações para interações medicamentosas e contraindicações</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="card feature-card">
            <div class="card-body text-center p-4">
              <div class="feature-icon">
                <i class="fas fa-chart-bar"></i>
              </div>
              <h4>Relatórios Detalhados</h4>
              <p class="text-muted mb-0">Relatórios personalizados para acompanhamento e auditoria</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="card feature-card">
            <div class="card-body text-center p-4">
              <div class="feature-icon">
                <i class="fas fa-mobile-alt"></i>
              </div>
              <h4>Acesso Mobile</h4>
              <p class="text-muted mb-0">Acesso via tablets e smartphones para a equipe de enfermagem</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- About Section -->
  <section id="about" style="background: #f8f9fa;">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <h2 class="mb-4">Sobre o IdosoMed</h2>
          <p class="lead">O <strong>IdosoMed</strong> é um sistema desenvolvido especialmente para instituições de longa permanência, casas de repouso e cuidadores profissionais.</p>
          <p>Nossa missão é facilitar a administração de medicamentos para idosos, garantindo segurança, organização e conformidade com as prescrições médicas.</p>
          <p>Com o IdosoMed, você tem controle total sobre:</p>
          <ul class="list-unstyled">
            <li class="mb-2"><i class="fas fa-check text-success mr-2"></i>Horários de medicação</li>
            <li class="mb-2"><i class="fas fa-check text-success mr-2"></i>Histórico completo de cada residente</li>
            <li class="mb-2"><i class="fas fa-check text-success mr-2"></i>Estoque de medicamentos</li>
            <li class="mb-2"><i class="fas fa-check text-success mr-2"></i>Relatórios para auditoria</li>
          </ul>
        </div>
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body p-5 text-center">
              <i class="fas fa-heartbeat" style="font-size: 5rem; color: #560bd0; opacity: 0.2;"></i>
              <h3 class="mt-4 mb-3">Cuidando de quem cuidou de nós</h3>
              <p class="text-muted">Desenvolvido com tecnologia e carinho para garantir o bem-estar dos nossos idosos.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Login Section -->
  <section id="login" class="login-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 mb-4 mb-lg-0">
          <h2 class="mb-4">Já possui uma conta?</h2>
          <p class="lead mb-4">Acesse o sistema e gerencie os medicamentos dos residentes de forma segura e organizada.</p>
          
          <div class="row">
            <div class="col-12">
              <div class="card access-card">
                <div class="card-body text-center py-4">
                  <i class="fas fa-user-nurse fa-3x text-primary mb-3"></i>
                  <h5>Equipe de Enfermagem</h5>
                  <p class="text-muted small mb-3">Acesso para registrar e acompanhar medicações</p>
                  <a href="{{ route('login') }}" class="btn btn-az-primary btn-sm px-4">Acessar Sistema</a>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="card access-card">
                <div class="card-body text-center py-4">
                  <i class="fas fa-user-md fa-3x text-success mb-3"></i>
                  <h5>Médicos e Gestores</h5>
                  <p class="text-muted small mb-3">Acesso para prescrições e relatórios</p>
                  <a href="{{ route('login') }}" class="btn btn-outline-success btn-sm px-4">Acessar Sistema</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-7">
          <div class="card login-card">
            <div class="card-body p-5">
              <div class="az-logo">
                <img src="{{ asset('assets/img/idoso_med_logo.png') }}" alt="Logo do IdosoMed">
              </div>
              <h3 class="text-center mb-2">Acesso ao Sistema</h3>
              <p class="text-center text-muted mb-4">Entre com suas credenciais</p>
              
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

                <div class="form-group d-flex justify-content-between align-items-center">
                  <label class="ckbox mb-0">
                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                    <span>Lembrar-me</span>
                  </label>
                  @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">Esqueceu sua senha?</a>
                  @endif
                </div>

                <button type="submit" class="btn btn-az-primary btn-block">Entrar no Sistema</button>
              </form>

              <hr class="my-4">
              
              <div class="text-center">
                <p class="mb-0">Não possui conta? <a href="{{ route('register') }}">Cadastre-se agora</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 mb-3 mb-lg-0">
          <h5><i class="fas fa-heartbeat mr-2"></i>IdosoMed System</h5>
          <p class="text-muted mb-0">Sistema de gestão de medicamentos para asilos e casas de repouso.</p>
          <p class="text-muted">Desenvolvido com ❤️ para cuidar de quem cuidou de nós</p>
        </div>
        <div class="col-lg-6 text-lg-right">
          <p class="text-muted mb-2">&copy; 2024 IdosoMed System. Todos os direitos reservados.</p>
          <div>
            <a href="#" class="text-white mr-3"><i class="fab fa-facebook"></i></a>
            <a href="#" class="text-white mr-3"><i class="fab fa-instagram"></i></a>
            <a href="#" class="text-white"><i class="fab fa-linkedin"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <script src="{{ asset('assets/lib/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/lib/ionicons/ionicons.js') }}"></script>
  <script src="{{ asset('assets/js/azia.js') }}"></script>

  <script>
    $(function(){
      'use strict'

      // Smooth scrolling for navigation links
      $('a[href*="#"]').on('click', function (e) {
        if (this.hash !== '') {
          e.preventDefault()
          var hash = this.hash
          $('html, body').animate({
            scrollTop: $(hash).offset().top - 70
          }, 500, 'linear')
        }
      })
    });
  </script>
</body>
</html>
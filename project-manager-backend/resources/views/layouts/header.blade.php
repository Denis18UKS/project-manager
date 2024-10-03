<div class="container"> 
 <nav class="navbar navbar-light bg-light">
 <div class="container-fluid"> 
 <a href=""
 class="navbar-brand me-auto">Главная</a>
 <a href=""
 class="nav-item nav-link">Регистрация</a>
 <a href=""
 class="nav-item nav-link">Вход</a>
 <a href=""
 class="nav-item nav-link">Мои объявления</a>
 <form action="" method="POST"
 class="form-inline">
 @csrf
 <input type="submit" class="btn btn-danger" 
 value="Выход">
 </form> 
 </div>
 </nav>
 <h1 class="my-3 text-center">Управление проектами и здачами</h1> 
 @yield('content') 
</div> 
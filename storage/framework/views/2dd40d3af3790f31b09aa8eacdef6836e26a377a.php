<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">РЕЄСТРАЦІЯ</h5>
            <form class="form-signin" method="POST" action="/register">
            <?php echo csrf_field(); ?>
            <div class="form-label-group">
                <label for="name">Ваше ім'я</label>
                <input type="text" name="name" class="form-control" placeholder="Ім'я" required autofocus>
                
              </div>

              <div class="form-label-group">
                <label for="email">Адрес електронної пошти</label>
                <input type="email"  name="email" class="form-control" placeholder="електронний адрес" required autofocus>
                
              </div>

              <div class="form-label-group">
                <label for="password">Пароль</label>
                <input type="password" name="password" class="form-control" placeholder="Пароль" required>
                
              </div>

              
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Зареєструватися</button>
              <hr class="my-4">
             
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSPanel\domains\Laravel\APP\resources\views/sessions/create.blade.php ENDPATH**/ ?>
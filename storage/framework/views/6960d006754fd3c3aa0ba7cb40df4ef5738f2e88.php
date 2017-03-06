<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <img src="img/bola.gif" height="433" width="750" class="img-responsive image-login" />
        </div>
        <div class="col-lg-4">
            <div class="card card-container text-center">
                <?php if(session('info')): ?> <div class="alert alert-danger"><?php echo e(session('info')); ?></div> <?php endif; ?>
                <form class="form-horizontal" role="form" method="POST" action="<?php echo e(route('login')); ?>">
                    <?php echo e(csrf_field()); ?>

                    <h1>Login</h1>
                    <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                        <input type="email" id="email" name="email" class="form-control" placeholder="Email Address" value="<?php echo e(old('email')); ?>" required autofocus>
                        <?php if($errors->has('email')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('email')); ?></strong>
                        </span>
                        <?php endif; ?>
                    </div>
                    <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                        <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                        <?php if($errors->has('password')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('password')); ?></strong>
                        </span>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>> Remember Me
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" style="height: 40px; line-height: 1; margin-bottom: 2px;">LOGIN</button>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-lg btn-primary btn-block btn-social facebook" type="button" onclick="FBLogin();" style="height: 40px; line-height: 1;"> Sign in with Facebook </button>
                    </div>
                    <div class="form-group">
                        <a  class="btn btn-lg btn-primary btn-block btn-register" type="button" onclick="return registernow();" style="height: 40px; line-height: 1;" href="<?php echo e(route('register')); ?>">DAFTAR SEKARANG</a>
                    </div>
                </form>
                <a class="btn btn-link" href="<?php echo e(url('/password/reset')); ?>">
                    Forgot Your Password?
                </a> </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
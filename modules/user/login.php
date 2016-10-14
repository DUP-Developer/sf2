<div class="container">
    <?php if(isset($error)){?>
        <div class="alert alert-danger" role="alert">
            <a href="#" class="alert-link"><?=$error?></a>
        </div>
    <?php }?>
    <div class="row">
        <div class="col-md-6 col-md-offset-3 well">
            <form action="<?=libs\kernel\path::site()?>user/sigin" method="post">
                <h3>Login</h3>
                <div class="col-md-12">
                    <input type="text" class="form-control col-md-12" name="name">
                </div>

                <div class="col-md-12">
                    <input type="password" class="form-control col-md-12" name="password">
                </div>

                <div class="col-md-12">
                    <input type="submit" class="form-control col-md-12">
                </div>
            </form>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3 well">
            <form action="<?=libs\kernel\path::site()?>user/create" method="post">
                <h3>Login</h3>
                <div class="col-md-12">
                    <input type="text" class="form-control col-md-12" name="nome">
                </div>

                <div class="col-md-12">
                    <input type="text" class="form-control col-md-12" name="idade">
                </div>

                <div class="col-md-12">
                    <input type="date" class="form-control col-md-12" name="aniversario">
                </div>

                <div class="col-md-12">
                    <input type="submit" class="form-control col-md-12">
                </div>
            </form>
        </div>
    </div>
</div>
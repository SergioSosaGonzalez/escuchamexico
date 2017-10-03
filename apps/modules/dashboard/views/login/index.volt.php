<span class="hide" id="key-security" data-key="<?= $key ?>"></span>
<span class="hide" id="value-security" data-value="<?php echo $this->security->getTokenKey(); ?>"></span>
<div class="testbox">


    <form id="formLogin">
     <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h1 style="text-align: center">Iniciar sesion</h1>
            </div>
        </div>
        <div class="row">

           <div class="col-md-12">
               <label id="icon" for="name"><i class="fa fa-user-o" aria-hidden="true"></i></label>
               <input type="text" name="username" id="username" placeholder="Username" required/>
           </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <label  id="icon" for="name"><i class="fa fa-key" ></i></label>
                <input type="password" name="password" id="password" placeholder="Password" required/>
            </div>
        </div>
         <div class="row">
             <div class="col-md-1"></div>
             <div class="col-md-6">
                 <button class="btn btn-success">Entrar</button>
             </div>
         </div>

     </div>
    </form>
</div>
<section class="ftco-appointment">
    <div class="overlay"></div>
    <div class="container-wrap">
        <div class="row no-gutters d-md-flex align-items-center">
            <div class="col-md-6 d-flex align-self-stretch">
                <div class="Imagem" style="background-image: url('../img/cinema.jpg');"></div>
            </div>
            <div class="col-md-6 appointment ftco-animate">
                <h3 class="mb-3">Cadastre_se</h3>
                <form action="../../Controller/C_Cli_Cadastro.php" enctype="multipart/form-data" class="appointment-form" method="POST">
                    
                    <div class="d-md-flex">
                        <div class="form-group">
                            <div class="icon"><i class="fas fa-signature"></i></span></div>
                            <input type="text" class="form-control" placeholder="First Name" name="firstname">
                        </div>
                        <div class="form-group ml-md-4">
                            <div class="icon"><i class="fas fa-signature"></i></span></div>
                            <input type="text" class="form-control" placeholder="Last Name" name="lastname">
                        </div>
                    </div>
                    <div class="d-md-flex">
                        <div class="form-group">
                            <div class="input-wrap">
                                <div class="icon"><i class="fas fa-calendar-alt"></i></span></div>
                                
                                <input type="text" class="form-control appointment_date" placeholder="Nascimneto" name="nascimento">
                            </div>
                        </div>

                        <div class="form-group ml-md-4">
                            <div class="icon"><i class="fas fa-phone"></i></span></div>
                            
                            <input type="text" class="form-control"  placeholder="Phone" name="phone">
                        </div>
                    </div>

                     <div class="d-md-flex">
                        <div class="form-group">
                            <div class="icon"><i class="fas fa-globe-americas"></i></span></div>
                            <input type="text" class="form-control" placeholder="Estado" name="estado">
                        </div>
                        <div class="form-group ml-md-4">
                            <div class="icon"><i class="fas fa-globe-americas"></i></span></div>
                            <input type="text" class="form-control" placeholder="Cidade" name="cidade">
                        </div>
                    </div>
                    <div class="d-md-flex">
                        <div class="form-group">
                            <div class="input-wrap">
                                <div class="icon"><i class="fas fa-globe-americas"></i></span></div>
                                <input type="text" class="form-control appointment_date" placeholder="Bairro" name="bairro">
                            </div>
                        </div>

                        <div class="form-group ml-md-4">
                            <div class="icon"><i class="fas fa-globe-americas"></i></span></div>
                            <input type="number" class="form-control" placeholder="Logradouro" name="log">
                        </div>
                    </div>
                    <div class="d-md-flex">
                        <div class="form-group">
                            <div class="icon"><i class="fas fa-globe-americas"></i></span></div>
                            <input type="text" class="form-control" placeholder="Nome Logradouro" name="lognome">
                        </div>
                        <div class="form-group ml-md-4">
                            <div class="icon"><i class="fas fa-globe-americas"></i></span></div>
                            <input type="text" class="form-control" placeholder="N°" name="numero">
                        </div>
                        
                        <div class="form-group ml-md-4">
                            <div class="icon"><i class="fas fa-id-card"></i></span></div>
                            <input type="text" class="form-control" placeholder="Cpf" name="cpf">
                        </div>
                    </div>
                    <div class="d-md-flex">
                        <div class="form-group">
                            <div class="input-wrap">
                                <div class="icon"><i class="fas fa-sign-in-alt"></i></span></div>
                                <input type="text" class="form-control appointment_date" placeholder="Login" name="login">
                            </div>
                        </div>

                        <div class="form-group ml-md-4">
                            <div class="icon"><i class="fas fa-globe-americas"></i></span></div>
                            <input type="number" class="form-control" placeholder="Senha" name="senha">
                        </div>
                    </div>
                    <div class="d-md-flex">
                        
                        <div class="form-group ml-md-4">
                            <input type="submit" value="Cadastrar" class="btn btn-primary py-3 px-4">
                        </div>
                    </div>
                </form>
            </div>    			
        </div>
    </div>
</section>


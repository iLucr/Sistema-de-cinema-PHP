

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
      <h4 class="modal-title">LOGIN</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
       
      </div>
      <div class="modal-body">
          <form action="../../Controller/C_Cli_Login.php" class="appointment-form" method="POST">
	    				<div class="d-md-flex">
		    				<div class="form-group">
		    					<input type="text" class="form-control" placeholder="Email" name="Email">
		    				</div>
		    				<div class="form-group ml-md-4">
                                                        <input type="text" class="form-control" placeholder="Senha" name="Senha">
		    				</div>
	    				</div>
	    				<!--<div class="d-md-flex">
                                            <div class="form-group">
		    					<div class="input-wrap">
		            		<div class="icon"><span class="ion-md-calendar"></span></div>
		            		<input type="text" class="form-control appointment_date" placeholder="Date">
	            		</div>
		    				</div>
		    				<div class="form-group ml-md-4">
		    					<div class="input-wrap">
		            		<div class="icon"><span class="ion-ios-clock"></span></div>
		            		<input type="text" class="form-control appointment_time" placeholder="Time">
	            		</div>
		    				</div>
		    				<div class="form-group ml-md-4">
                                                    <input type="number" class="form-control" placeholder="Telefone" value="c_telefone">
		    				</div>
                                            <div class="form-group ml-md-4">
                                                    <input type="number" class="form-control" placeholder="Cpf" value="c_cpf">
		    				</div>
	    				</div>
	    				<div class="d-md-flex">
	    					<div class="form-group">
		              <textarea name="" id="" cols="30" rows="2" class="form-control" placeholder="Messagem"></textarea>
		            </div> -->
		            <div class="form-group ml-md-1 offset-5">
                                <input type="submit" value="Entrar" class="btn btn-white py-3 px-4"><br>
                                <a href="../Cadastrar.php" ><input type="button"  value="Cadastrar-se" class="btn btn-white py-3 px-4"></a>
		            </div>
	    				</div>
	    			</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


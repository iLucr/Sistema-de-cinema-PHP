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
            <form action="../Controller/C_Cli_Login.php" class="appointment-form" method="POST">
               <div class="d-md-flex">
                  <div class="form-group">
                     <input type="text" class="form-control" placeholder="Email" name="Email">
                  </div>
                  <div class="form-group">
                     <input type="text" class="form-control" placeholder="Senha" name="Senha">
                  </div>
               </div>
               <div class="form-group ">
                  <input type="submit" value="Entrar" class="btn btn-white py-3 px-4"><br>
                  <a href="Cadastrar.php" ><input type="button"  value="Cadastrar-se" class="btn btn-white py-3 px-4"></a>
               </div>
         </div>
         </form>
      </div>
      <div class="modal-footer">
         <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
      </div>
   </div>
</div>
</div>
<div id="Modallogado" class="modal fade" role="dialog">
   <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
         <div class="modal-header">
            <h4 class="modal-title"><?php echo $_SESSION['nome'] ?></h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
         </div>
         <div class="modal-body">
            <form action="../Controller/C_Cli_Login.php" class="appointment-form" method="POST">
               <div class="form-group ">
							 <input type="submit" name="sair" value="Sair" class="btn btn-white py-3 px-4"><br>
							 <input type="button"  value="Entar com outra conta" class="btn btn-white py-3 px-4" data-dismiss="modal" data-toggle='modal' data-target='#modallogardenovo'>
               </div>
         </div>
         </form>
      </div>
      <div class="modal-footer">
         <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
      </div>
   </div>
</div>
</div>
<div id="modallogardenovo" class="modal fade" role="dialog">
   <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
         <div class="modal-header">
            <h4 class="modal-title">LOGIN</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
         </div>
         <div class="modal-body">
            <form action="../Controller/C_Cli_Login.php" class="appointment-form" method="POST">
               <div class="d-md-flex">
                  <div class="form-group">
                     <input type="text" class="form-control" placeholder="Email" name="Email">
                  </div>
                  <div class="form-group">
                     <input type="text" class="form-control" placeholder="Senha" name="Senha">
                  </div>
               </div>
               <div class="form-group ">
                  <input type="submit" value="Entrar" class="btn btn-white py-3 px-4"><br>
                  
               </div>
         </div>
         </form>
      </div>
      <div class="modal-footer">
         <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
      </div>
   </div>
</div>
</div>
   <!-- Conteúdo da página -->
   <div class="container">
      <h1 class="mt-2">Listas de Categorias</h1>
      <hr>

      <table class="table table-hover">
          <thead>
              <tr>
                  <td>Nome</td>
                  <td>Ações</td>
              </tr>
          </thead>
          <tbody>
              <?php foreach($categorias as $categoria):?>
          <tr>
              <td><?= $categoria['nome'] ?></td>
              <td>
                  <a href="<?php echo $base_url . "?c=categoria&m=excluir&id=" . $categoria['id'] ?>" 
                  class="btn btn-danger" title="Excluir">
                      <i class="fa-solid fa-trash"></i>
                    </a>
                  
                      <a href="" class="btn btn-primary" title="Editar">
                          <i class="fa-solid fa-pencil"></i>
                        </a>
              </td>
          </tr>
          <?php endforeach;?>
      </tbody>
      </table>
      


    </div>

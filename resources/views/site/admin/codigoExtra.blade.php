<button class="btn btn-primary mb-4" style="float: right" data-toggle="modal" data-target="#cadastroPaciente">Cadastrar Paciente</button>

<!-- Add Modal -->
<div class="modal fade" id="cadastroPaciente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Meu Formulário</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- Seu formulário aqui -->
        <form action="{{ route('user.store') }}" method="POST">
            @csrf
            <div class="form-group row">
                <label class="col-form-label col-md-2">Nome</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" name="nome">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-form-label col-md-2">email</label>
                <div class="col-md-10">
                    <input type="email" class="form-control" name="email">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-md-2">senha</label>
                <div class="col-md-10">
                    <input type="password" class="form-control" name="password">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-form-label col-md-2">Genero</label>
                <div class="col-md-10">
                    <select class="form-control" name="sexo">
                        <option>Masculino</option>
                        <option>Femenino</option>
                    </select>
                </div>
            </div>

            <div class="form-group row" style="display: none">
                <label class="col-form-label col-md-2"></label>
                <div class="col-md-10">
                    <input type="text"  value="3" class="form-control" name="tipo_utilizador">
                </div>
            </div>

            {{-- <div class="form-group row">
                <label class="col-form-label col-md-2">Nome</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" name="nome">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-form-label col-md-2">Descrição</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" name="descricao">
                </div>
            </div> --}}

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-primary">Salvar Mudanças</button>
            </div>
        </form>
        </div>
        
      </div>
    </div>
</div>
<!-- /ADD Modal -->
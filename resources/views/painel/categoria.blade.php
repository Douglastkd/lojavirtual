@extends('painel.corpo')



@section('superior')
<script src="https://cloud.tinymce.com/5/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>
@endsection

@section('menu2')
class="active"
@endsection

@section('conteudo')




<div class="content-fluid">
 
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                      <form method="post" action="" class="form-horizontal">
                       @csrf
                        <div class="card-header card-header-text" data-background-color="rose">
                              <h4 class="card-title">Cadastro Categoria</h4>
                          </div>
                          <div class="card-content">
                              <div class="row">
                                  <label class="col-sm-2 label-on-left">Nome Categoria</label>
                                  <div class="col-sm-10">
                                      <div class="form-group label-floating is-empty">
                                          <label class="control-label"></label>
                                          <input type="text" class="form-control" name="nome" value="">
                                          <input type="hidden" class="form-control" name="id" value="">
                                          <span class="help-block">insira o nome da categoria </span>
                                      <span class="material-input"></span></div>
                                  </div>
                              </div>
                             
                            <button type="submit" class="btn btn-success"> SALVAR CATEGORIA </button>
                        </div>

       
                      
                 
                      </form>


                  </div>
              </div>
                            </div>
                        </div>
						
						
						
						
<div class="content-fluid">
        <div class="row">
                <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-icon" data-background-color="rose">
                                <i class="material-icons">assignment</i>
                            </div>
                            <div class="card-content">
                                <h4 class="card-title">Categorias</h4>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                                <tr><th>ID</th>
                                         <th>Nome</th>
                                        
                                        </tr></thead>
                                        <tbody>
                         
                                            <tr>
                                                <td>01</td>
                                                <td>02</td>
                                           
                                                
                                            </tr>
                      

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                       
@endsection
						
						
                       

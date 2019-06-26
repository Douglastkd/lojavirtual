@extends('painel.corpo')



@section('superior')
<script src="https://cloud.tinymce.com/5/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>
@endsection

@section('menu1')
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
                              <h4 class="card-title">Dados Produto</h4>
                          </div>
                          <div class="card-content">
                              <div class="row">
                                  <label class="col-sm-2 label-on-left">Nome do Produto</label>
                                  <div class="col-sm-10">
                                      <div class="form-group label-floating is-empty">
                                          <label class="control-label"></label>
                                          <input type="text" class="form-control" name="nome" value="">
                                          <input type="hidden" class="form-control" name="id" value="">
                                          <span class="help-block">insira o nome do produto</span>
                                      <span class="material-input"></span></div>
                                  </div>
                              </div>
                              <div class="row">
                                  <label class="col-sm-2 label-on-left">Categoria</label>
                                  <div class="col-sm-10">
                                      <div class="form-group label-floating is-empty">
                                          <label class="control-label"></label>
                                          <select class="form-control" name="select">
                                                <option value="" selected>  Selecione</option> 
                                             
                                            <option value="descartaveis" >Descartaveis</option> 
                                            <option value="respiratoria">Proteção Respiratória</option> 
                                            <option value="pesperna" >Proteção dos Pés e Pernas</option>
                                            <option value="cabeca">Proteção da Cabeça</option>
                                            <option value="olhosface">Proteção dos Olhos e Face</option>
                                            <option value="quedas">Proteção Contra Quedas</option>
                                            <option value="corpo">Proteção do Corpo</option>
                                                  <option value="mao">Proteção das mão</option>
                                            <option value="auditiva">Proteção Auditiva</option>
                                                        <option value="sinalizacao">Sinalização</option>
                       <option value="placas">Placas</option>
                       <option value="extintores">Extintores</option>
                      
                                           <option value="outros">Outros</option>
                         <option value="cursos">Cursos</option>
                                          
                                          </select>
                    
                                      <span class="material-input"></span></div>
                                  </div>
                              </div>

                              <div class="row">
                                <label class="col-sm-2 label-on-left">Valor</label>
                                <div class="col-sm-10">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"></label>
                                        <input type="text" class="form-control" name="valor"  value="">
                                     
                                    <span class="material-input"></span></div>
                                </div>
                            </div>





                            <div class="row">
                                <label class="col-sm-2 label-on-left">Descrição</label>
                                <div class="col-sm-10">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"></label>
                                        <textarea name="descricao"> </textarea>
                                     
                                    <span class="material-input"></span></div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success"> SALVAR PRODUTO </button>
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
                                <h4 class="card-title">Vendas Realizadas</h4>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                                <tr><th>ID</th>
                                         <th>Nome</th>
                                            <th>Valor</th>
        
                                            <th>+ Detalhes</th>
                                        </tr></thead>
                                        <tbody>
                         
                                            <tr>
                                                <td>01</td>
                                                <td>02</td>
                                                <td>03</td>
                                                
                                            </tr>
                      

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                       
@endsection
						
						
                       

@extends('corpo')


@section('conteudo')



<div id="corpo">
        <div id="corpo">
           <div class="conteiner">
             
   
             
   
             
     <div class="cadastro" id="formCadastroCompleto">
       <div class="cabecalho-interno row-fluid">
         <div class="span12">
           <h1 class="titulo cor-secundaria">
             Identificação <small>Faça o seu login ou crie uma conta caso ainda não possua cadastro</small>
           </h1>
         </div>
       </div>
       
   
   
  
   
   <form action="" method="post" class="formulario-cadastro-cliente">
     
       <input type="hidden" name="next" value="conta_index">
     
     <div class="dados-acesso row-fluid">
       <div class="span12">
         <div class="caixa-sombreada borda-principal">
           <fieldset>
             <legend class="titulo cor-secundaria borda-alpha"><i class="icon-user"></i>Dados para acesso</legend>
             <div class="row-fluid cor-principal">
               <div class="control-group span12 ">
                 <label for="id_email" class="control-label"><i class="icon-group"></i>Nome Completo</label>
                 <div class="controls">
                   <input id="id_email" maxlength="128" name="name" placeholder="Digite o seu nome" type="text" class="input-block-level">
                   
                 </div>
               </div>
   </div>
   
   
   <div class="row-fluid cor-principal">
               <div class="control-group span6 ">
                 <label for="id_email" class="control-label"><i class="icon-envelope"></i> E-mail</label>
                 <div class="controls">
                   <input id="id_email" maxlength="128" name="email" placeholder="Digite o seu email" type="text" value="tkd.dodo@gmail.com" class="input-block-level">
                   
                 </div>
               </div>
               <div class="control-group span6 ">
                 <label for="id_confirmacao_email" class="control-label">
                   Confirmar e-mail
                 </label>
                 <input class="input-block-level" id="id_confirmacao_email" maxlength="128" name="confirmacao_email" type="text">
                 
               </div>
             </div>
             <br>
             <div class="row-fluid cor-principal">
               <div class="control-group span6 ">
                 <label for="id_senha" class="control-label"><i class="icon-lock" style="margin: 0 1px 0 2px;"></i> Crie uma senha</label>
                 <input class="input-block-level" id="id_senha" maxlength="32" name="password" type="password">
                 
               </div>
               <div class="control-group span6 ">
                 <label for="id_confirmacao_senha" class="control-label">Confirmar senha</label>
                 <input class="input-block-level" id="id_confirmacao_senha" maxlength="32" name="password_confirmation" type="password">
                 
               </div>
             </div>
           </fieldset>
         </div>
       </div>
     </div>
   
     <div class="tipo-cadastro row-fluid">
       
     </div>
   
     
   
     <div class="acao-editar row-fluid">
       <div class="span3 offset9">
         <a href="javascript:window.history.back();" class="botao">Cancelar</a>
         <button type="submit" class="botao principal">Criar Conta</button>
       </div>
     </div>
   </form>
   
     </div>
   
   
             <div class="secao-secundaria">
               
               
             </div>
           </div>
         </div>

@endsection